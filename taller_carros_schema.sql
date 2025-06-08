-- Proyecto 4 - Taller de Carros

-- Tipos personalizados
CREATE TYPE tipo_cliente AS ENUM ('Particular', 'Empresa');
CREATE TYPE tipo_vehiculo AS ENUM ('Sedán', 'SUV', 'Pick-Up', 'Motocicleta');
CREATE TYPE forma_pago AS ENUM ('Efectivo', 'Tarjeta', 'Transferencia', 'Crédito');
CREATE TYPE rol_empleado AS ENUM ('Mecánico', 'Administrador', 'Recepcionista');

-- Tabla Rol
CREATE TABLE rol (
    id_rol SERIAL PRIMARY KEY,
    nombre_rol VARCHAR(50) UNIQUE NOT NULL
);

-- Tabla Usuario
CREATE TABLE usuario (
    id_usuario SERIAL PRIMARY KEY,
    nombre_usuario VARCHAR(50) UNIQUE NOT NULL,
    contraseña VARCHAR(255) NOT NULL,
    id_rol INTEGER REFERENCES rol(id_rol)
);

-- Tabla Cliente
CREATE TABLE cliente (
    id_cliente SERIAL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE,
    telefono VARCHAR(20),
    direccion TEXT,
    tipo_cliente tipo_cliente NOT NULL
);

-- Tabla Vehiculo
CREATE TABLE vehiculo (
    id_vehiculo SERIAL PRIMARY KEY,
    id_cliente INTEGER REFERENCES cliente(id_cliente),
    placa VARCHAR(20) UNIQUE NOT NULL,
    marca VARCHAR(50),
    modelo VARCHAR(50),
    año INTEGER CHECK (año >= 1900 AND año <= 2100),
    color VARCHAR(30),
    tipo_vehiculo tipo_vehiculo NOT NULL
);

-- Tabla Empleado
CREATE TABLE empleado (
    id_empleado SERIAL PRIMARY KEY,
    nombre VARCHAR(100),
    rol rol_empleado NOT NULL,
    email VARCHAR(100),
    telefono VARCHAR(20),
    salario NUMERIC(10,2) CHECK (salario >= 0)
);

-- Tabla Orden_Reparacion
CREATE TABLE orden_reparacion (
    id_orden SERIAL PRIMARY KEY,
    id_vehiculo INTEGER REFERENCES vehiculo(id_vehiculo),
    fecha_ingreso DATE NOT NULL,
    estado VARCHAR(20) CHECK (estado IN ('Pendiente', 'En proceso', 'Finalizada')),
    total_estimado NUMERIC(10,2),
    total_real NUMERIC(10,2),
    fecha_salida DATE
);

-- Tabla Servicio
CREATE TABLE servicio (
    id_servicio SERIAL PRIMARY KEY,
    nombre VARCHAR(100),
    precio_base NUMERIC(10,2),
    descripcion TEXT
);

-- Tabla Orden_Servicio (N:M)
CREATE TABLE orden_servicio (
    id_orden INTEGER REFERENCES orden_reparacion(id_orden),
    id_servicio INTEGER REFERENCES servicio(id_servicio),
    cantidad INTEGER CHECK (cantidad > 0),
    subtotal NUMERIC(10,2),
    PRIMARY KEY(id_orden, id_servicio)
);

-- Tabla Empleado_Orden (N:M)
CREATE TABLE empleado_orden (
    id_empleado INTEGER REFERENCES empleado(id_empleado),
    id_orden INTEGER REFERENCES orden_reparacion(id_orden),
    horas_trabajadas NUMERIC(5,2),
    PRIMARY KEY(id_empleado, id_orden)
);

-- Tabla Proveedor
CREATE TABLE proveedor (
    id_proveedor SERIAL PRIMARY KEY,
    nombre VARCHAR(100),
    contacto VARCHAR(100),
    telefono VARCHAR(20)
);

-- Tabla Repuesto
CREATE TABLE repuesto (
    id_repuesto SERIAL PRIMARY KEY,
    nombre VARCHAR(100),
    precio NUMERIC(10,2),
    stock INTEGER CHECK (stock >= 0),
    id_proveedor INTEGER REFERENCES proveedor(id_proveedor)
);

-- Tabla Repuesto_Orden (N:M)
CREATE TABLE repuesto_orden (
    id_orden INTEGER REFERENCES orden_reparacion(id_orden),
    id_repuesto INTEGER REFERENCES repuesto(id_repuesto),
    cantidad INTEGER CHECK (cantidad > 0),
    PRIMARY KEY(id_orden, id_repuesto)
);

-- Tabla Factura
CREATE TABLE factura (
    id_factura SERIAL PRIMARY KEY,
    id_orden INTEGER REFERENCES orden_reparacion(id_orden),
    fecha_emision DATE,
    total_facturado NUMERIC(10,2),
    forma_pago forma_pago NOT NULL
);

-- Tabla Pago
CREATE TABLE pago (
    id_pago SERIAL PRIMARY KEY,
    id_factura INTEGER REFERENCES factura(id_factura),
    monto NUMERIC(10,2),
    fecha_pago DATE
);

-- Tabla Cita
CREATE TABLE cita (
    id_cita SERIAL PRIMARY KEY,
    id_cliente INTEGER REFERENCES cliente(id_cliente),
    fecha_hora TIMESTAMP,
    motivo TEXT,
    estado VARCHAR(20) CHECK (estado IN ('Agendada', 'Cancelada', 'Finalizada'))
);

-- Tabla Inspeccion
CREATE TABLE inspeccion (
    id_inspeccion SERIAL PRIMARY KEY,
    id_vehiculo INTEGER REFERENCES vehiculo(id_vehiculo),
    fecha DATE,
    observaciones TEXT
);

-- Tabla Tipo_Servicio
CREATE TABLE tipo_servicio (
    id_tipo SERIAL PRIMARY KEY,
    nombre VARCHAR(100),
    descripcion TEXT
);

-- Tabla Servicio_Tipo (N:M)
CREATE TABLE servicio_tipo (
    id_servicio INTEGER REFERENCES servicio(id_servicio),
    id_tipo INTEGER REFERENCES tipo_servicio(id_tipo),
    PRIMARY KEY(id_servicio, id_tipo)
);

-- Tabla Bitacora_Cambios
CREATE TABLE bitacora_cambio (
    id_bitacora SERIAL PRIMARY KEY,
    tabla_afectada VARCHAR(50),
    id_registro INTEGER,
    accion VARCHAR(20),
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla Auditoria_Login
CREATE TABLE auditoria_login (
    id_auditoria SERIAL PRIMARY KEY,
    id_usuario INTEGER REFERENCES usuario(id_usuario),
    fecha_hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    evento VARCHAR(20) CHECK (evento IN ('Login', 'Logout', 'Fallido'))
);

-- 1. Trigger para disminuir el stock del repuesto al agregarlo a una orden
CREATE OR REPLACE FUNCTION restar_stock_repuesto()
RETURNS TRIGGER AS $$
BEGIN
  UPDATE repuesto
  SET stock = stock - NEW.cantidad
  WHERE id_repuesto = NEW.id_repuesto;
  RETURN NEW;
END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER trg_restar_stock
AFTER INSERT ON repuesto_orden
FOR EACH ROW
EXECUTE FUNCTION restar_stock_repuesto();

-- 2. Trigger para registrar cambios en ordenes en la bitácora
CREATE OR REPLACE FUNCTION registrar_cambio_orden()
RETURNS TRIGGER AS $$
BEGIN
  INSERT INTO bitacora_cambio(tabla_afectada, id_registro, accion)
  VALUES ('orden_reparacion', NEW.id_orden, TG_OP);
  RETURN NEW;
END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER trg_bitacora_orden
AFTER UPDATE ON orden_reparacion
FOR EACH ROW
EXECUTE FUNCTION registrar_cambio_orden();

-- 3. Trigger para evitar facturación de órdenes no finalizadas
CREATE OR REPLACE FUNCTION validar_factura_finalizada()
RETURNS TRIGGER AS $$
DECLARE
  estado_actual TEXT;
BEGIN
  SELECT estado INTO estado_actual FROM orden_reparacion WHERE id_orden = NEW.id_orden;
  IF estado_actual <> 'Finalizada' THEN
    RAISE EXCEPTION 'No se puede facturar una orden que no esté finalizada';
  END IF;
  RETURN NEW;
END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER trg_factura_estado
BEFORE INSERT ON factura
FOR EACH ROW
EXECUTE FUNCTION validar_factura_finalizada();

-- FUNCIONES SQL

-- 1. Función para calcular el total estimado de una orden (servicios + repuestos)
CREATE OR REPLACE FUNCTION calcular_total_estimado(p_id_orden INTEGER)
RETURNS NUMERIC AS $$
DECLARE
  total_servicios NUMERIC := 0;
  total_repuestos NUMERIC := 0;
BEGIN
  SELECT COALESCE(SUM(subtotal), 0) INTO total_servicios
  FROM orden_servicio WHERE id_orden = p_id_orden;

  SELECT COALESCE(SUM(cantidad * precio), 0) INTO total_repuestos
  FROM repuesto_orden ro
  JOIN repuesto r ON ro.id_repuesto = r.id_repuesto
  WHERE id_orden = p_id_orden;

  RETURN total_servicios + total_repuestos;
END;
$$ LANGUAGE plpgsql;

-- 2. Función para obtener el total facturado en un mes
CREATE OR REPLACE FUNCTION total_facturado_mes(anio INTEGER, mes INTEGER)
RETURNS NUMERIC AS $$
DECLARE
  total NUMERIC;
BEGIN
  SELECT COALESCE(SUM(total_facturado), 0) INTO total
  FROM factura
  WHERE EXTRACT(YEAR FROM fecha_emision) = anio
    AND EXTRACT(MONTH FROM fecha_emision) = mes;
  RETURN total;
END;
$$ LANGUAGE plpgsql;


-- VISTAS SQL

-- 1. Vista de órdenes con detalle de cliente y vehículo
CREATE OR REPLACE VIEW vista_ordenes_detalle AS
SELECT o.id_orden, c.nombre AS cliente, v.placa, o.estado, o.total_estimado
FROM orden_reparacion o
JOIN vehiculo v ON o.id_vehiculo = v.id_vehiculo
JOIN cliente c ON v.id_cliente = c.id_cliente;

-- 2. Vista de repuestos con stock bajo
CREATE OR REPLACE VIEW vista_repuestos_bajos AS
SELECT * FROM repuesto
WHERE stock < 5;

-- 3. Vista de facturas con datos de cliente y forma de pago
CREATE OR REPLACE VIEW vista_facturas_completas AS
SELECT f.id_factura, f.fecha_emision, f.total_facturado, f.forma_pago, c.nombre AS cliente, v.placa
FROM factura f
JOIN orden_reparacion o ON f.id_orden = o.id_orden
JOIN vehiculo v ON o.id_vehiculo = v.id_vehiculo
JOIN cliente c ON v.id_cliente = c.id_cliente;
