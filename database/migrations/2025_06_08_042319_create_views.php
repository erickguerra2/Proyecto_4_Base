<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateViews extends Migration
{
    public function up()
    {
        // Vista de órdenes con detalle
        DB::unprepared('
            CREATE OR REPLACE VIEW vista_ordenes_detalle AS
            SELECT o.id_orden, c.nombre AS cliente, v.placa, o.estado, o.total_estimado
            FROM orden_reparacion o
            JOIN vehiculo v ON o.id_vehiculo = v.id_vehiculo
            JOIN cliente c ON v.id_cliente = c.id_cliente;
        ');

        // Vista de repuestos con stock bajo
        DB::unprepared('
            CREATE OR REPLACE VIEW vista_repuestos_bajos AS
            SELECT * FROM repuesto
            WHERE stock < 5;
        ');

        // Vista de facturas completas
        DB::unprepared('
            CREATE OR REPLACE VIEW vista_facturas_completas AS
            SELECT f.id_factura, f.fecha_emision, f.total_facturado, f.forma_pago, c.nombre AS cliente, v.placa
            FROM factura f
            JOIN orden_reparacion o ON f.id_orden = o.id_orden
            JOIN vehiculo v ON o.id_vehiculo = v.id_vehiculo
            JOIN cliente c ON v.id_cliente = c.id_cliente;
        ');
    }

    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS vista_ordenes_detalle');
        DB::unprepared('DROP VIEW IF EXISTS vista_repuestos_bajos');
        DB::unprepared('DROP VIEW IF EXISTS vista_facturas_completas');
    }
}