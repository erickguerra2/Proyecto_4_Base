<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    public function run()
    {
        DB::table('cliente')->insert([
            [
                'nombre' => 'Juan Pérez',
                'email' => 'juan@email.com',
                'telefono' => '555-1234',
                'direccion' => 'Calle 123, Ciudad',
                'tipo_cliente' => 'personal'  
            ],
            [
                'nombre' => 'Empresa XYZ',
                'email' => 'contacto@xyz.com',
                'telefono' => '555-5678',
                'direccion' => 'Avenida Principal 456',
                'tipo_cliente' => 'empresa'  
            ],
            [
                'nombre' => 'María González',
                'email' => 'maria@email.com',
                'telefono' => '555-8765',
                'direccion' => 'Boulevard 789, Ciudad',
                'tipo_cliente' => 'personal'  
            ],
            [
                'nombre' => 'Carlos López',
                'email' => 'carlos@email.com',
                'telefono' => '555-4321',
                'direccion' => 'Calle 456, Pueblo',
                'tipo_cliente' => 'personal'  
            ],
            // 100 registros adicionales
            [
                'nombre' => 'Ana Martínez',
                'email' => 'ana.martinez@email.com',
                'telefono' => '555-9876',
                'direccion' => 'Calle Primavera 12, Ciudad',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Constructora ABC S.A.',
                'email' => 'info@constructoraabc.com',
                'telefono' => '555-2468',
                'direccion' => 'Zona Industrial Lote 15',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Luis Rodríguez',
                'email' => 'luis.rodriguez@email.com',
                'telefono' => '555-1357',
                'direccion' => 'Avenida Libertad 88, Villa Nueva',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Telecomunicaciones GT',
                'email' => 'ventas@telecomgt.com',
                'telefono' => '555-8642',
                'direccion' => 'Torre Empresarial Piso 12',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Rosa Hernández',
                'email' => 'rosa.hernandez@email.com',
                'telefono' => '555-7531',
                'direccion' => 'Colonia San José Casa 25',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Diego Morales',
                'email' => 'diego.morales@email.com',
                'telefono' => '555-9642',
                'direccion' => 'Calle Los Pinos 45, Mixco',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Farmacia La Salud',
                'email' => 'contacto@farmacialasalud.com',
                'telefono' => '555-3698',
                'direccion' => 'Avenida Central 156',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Patricia Vásquez',
                'email' => 'patricia.vasquez@email.com',
                'telefono' => '555-1472',
                'direccion' => 'Residencial Los Cedros 78',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Roberto Castillo',
                'email' => 'roberto.castillo@email.com',
                'telefono' => '555-8529',
                'direccion' => 'Calle de la Paz 33, Antigua',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Textiles Modernos S.A.',
                'email' => 'gerencia@textilesmodernos.com',
                'telefono' => '555-7418',
                'direccion' => 'Km 25 Carretera a El Salvador',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Carmen Ruiz',
                'email' => 'carmen.ruiz@email.com',
                'telefono' => '555-2583',
                'direccion' => 'Colonia Vista Hermosa 92',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Fernando Jiménez',
                'email' => 'fernando.jimenez@email.com',
                'telefono' => '555-9517',
                'direccion' => 'Calle Principal 67, Chimaltenango',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Restaurante El Buen Sabor',
                'email' => 'administracion@elbuensabor.com',
                'telefono' => '555-4826',
                'direccion' => 'Zona Viva Local 8',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Sofía Mendoza',
                'email' => 'sofia.mendoza@email.com',
                'telefono' => '555-6394',
                'direccion' => 'Avenida Las Américas 145',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Gabriel Torres',
                'email' => 'gabriel.torres@email.com',
                'telefono' => '555-1759',
                'direccion' => 'Calle del Sol 29, Escuintla',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Automotriz Central',
                'email' => 'ventas@automotrizcentral.com',
                'telefono' => '555-8263',
                'direccion' => 'Boulevard Liberación Km 8',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Lucía Ramírez',
                'email' => 'lucia.ramirez@email.com',
                'telefono' => '555-4937',
                'direccion' => 'Residencial Monte Verde 156',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Manuel Ortega',
                'email' => 'manuel.ortega@email.com',
                'telefono' => '555-7185',
                'direccion' => 'Colonia El Progreso 241',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Supermercado Familiar',
                'email' => 'gerencia@supermercadofamiliar.com',
                'telefono' => '555-5274',
                'direccion' => 'Avenida Bolívar 189',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Verónica Flores',
                'email' => 'veronica.flores@email.com',
                'telefono' => '555-3681',
                'direccion' => 'Calle Las Flores 73, Quetzaltenango',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Alejandro Pérez',
                'email' => 'alejandro.perez@email.com',
                'telefono' => '555-9425',
                'direccion' => 'Zona 10 Edificio Maya Apt 15',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Consultoría Empresarial GT',
                'email' => 'contacto@consultoriagt.com',
                'telefono' => '555-6182',
                'direccion' => 'Torre Profesional Oficina 205',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Isabella Castro',
                'email' => 'isabella.castro@email.com',
                'telefono' => '555-7539',
                'direccion' => 'Colonia La Esperanza 88',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Andrés Vargas',
                'email' => 'andres.vargas@email.com',
                'telefono' => '555-2847',
                'direccion' => 'Calle Real 156, Cobán',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Laboratorio Clínico San Rafael',
                'email' => 'info@labsanrafael.com',
                'telefono' => '555-4163',
                'direccion' => 'Avenida Reforma 267',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Valeria Aguilar',
                'email' => 'valeria.aguilar@email.com',
                'telefono' => '555-9581',
                'direccion' => 'Residencial Los Álamos 34',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Javier Serrano',
                'email' => 'javier.serrano@email.com',
                'telefono' => '555-3274',
                'direccion' => 'Calle Norte 67, Huehuetenango',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Panadería La Tradición',
                'email' => 'pedidos@panaderialatradicion.com',
                'telefono' => '555-6829',
                'direccion' => 'Mercado Central Local 45',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Mónica Delgado',
                'email' => 'monica.delgado@email.com',
                'telefono' => '555-1596',
                'direccion' => 'Colonia San Cristóbal 123',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Ricardo Mejía',
                'email' => 'ricardo.mejia@email.com',
                'telefono' => '555-7482',
                'direccion' => 'Avenida Independencia 245',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Ferretería El Martillo',
                'email' => 'ventas@ferreteriaelmartillo.com',
                'telefono' => '555-5173',
                'direccion' => 'Calle Comercio 89',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Natalia Sánchez',
                'email' => 'natalia.sanchez@email.com',
                'telefono' => '555-8657',
                'direccion' => 'Residencial Vista Bella 67',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Óscar Romero',
                'email' => 'oscar.romero@email.com',
                'telefono' => '555-2941',
                'direccion' => 'Calle Centenario 178, Jalapa',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Clínica Dental Sonrisas',
                'email' => 'citas@clinicasonrisas.com',
                'telefono' => '555-4738',
                'direccion' => 'Centro Médico Piso 3',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Daniela Moreno',
                'email' => 'daniela.moreno@email.com',
                'telefono' => '555-6521',
                'direccion' => 'Colonia El Mirador 234',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Esteban Guzmán',
                'email' => 'esteban.guzman@email.com',
                'telefono' => '555-1385',
                'direccion' => 'Avenida Roosevelt 567',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Importadora Del Pacífico',
                'email' => 'compras@importadorapacifico.com',
                'telefono' => '555-9764',
                'direccion' => 'Puerto Quetzal Bodega 12',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Adriana Ramos',
                'email' => 'adriana.ramos@email.com',
                'telefono' => '555-5182',
                'direccion' => 'Calle Los Rosales 45',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Héctor Vega',
                'email' => 'hector.vega@email.com',
                'telefono' => '555-7896',
                'direccion' => 'Residencial San Juan 189',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Librería Académica',
                'email' => 'ventas@libreriaacademica.com',
                'telefono' => '555-3457',
                'direccion' => 'Zona Universitaria Local 23',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Cristina Morales',
                'email' => 'cristina.morales@email.com',
                'telefono' => '555-6249',
                'direccion' => 'Colonia Las Brisas 78',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Rodrigo Pacheco',
                'email' => 'rodrigo.pacheco@email.com',
                'telefono' => '555-1738',
                'direccion' => 'Calle del Río 234, Retalhuleu',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Taller Mecánico Los Expertos',
                'email' => 'servicio@tallermecanicoexpertos.com',
                'telefono' => '555-8562',
                'direccion' => 'Carretera Interamericana Km 45',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Paola Jiménez',
                'email' => 'paola.jimenez@email.com',
                'telefono' => '555-4917',
                'direccion' => 'Avenida Las Palmeras 123',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Sebastián Herrera',
                'email' => 'sebastian.herrera@email.com',
                'telefono' => '555-2674',
                'direccion' => 'Residencial El Bosque 56',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Distribuidora Alimentaria GT',
                'email' => 'pedidos@distribuidoraalimentaria.com',
                'telefono' => '555-7319',
                'direccion' => 'Mercado de Mayoreo Nave 8',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Camila Espinoza',
                'email' => 'camila.espinoza@email.com',
                'telefono' => '555-5483',
                'direccion' => 'Colonia Santa Marta 167',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Arturo Sandoval',
                'email' => 'arturo.sandoval@email.com',
                'telefono' => '555-9135',
                'direccion' => 'Calle Principal 89, Sololá',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Café Gourmet Guatemala',
                'email' => 'exportaciones@cafegourmetgt.com',
                'telefono' => '555-6827',
                'direccion' => 'Finca La Esperanza Km 67',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Lorena Fuentes',
                'email' => 'lorena.fuentes@email.com',
                'telefono' => '555-3591',
                'direccion' => 'Avenida Central 245',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Emilio Contreras',
                'email' => 'emilio.contreras@email.com',
                'telefono' => '555-8246',
                'direccion' => 'Residencial Los Eucaliptos 134',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Agencia de Viajes Mundos',
                'email' => 'reservas@agenciamundos.com',
                'telefono' => '555-1672',
                'direccion' => 'Plaza Comercial Local 156',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Andrea Peña',
                'email' => 'andrea.pena@email.com',
                'telefono' => '555-7458',
                'direccion' => 'Colonia El Paraíso 78',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Nicolás Medina',
                'email' => 'nicolas.medina@email.com',
                'telefono' => '555-2913',
                'direccion' => 'Calle de los Maestros 45, Zacapa',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Veterinaria Amor Animal',
                'email' => 'citas@veterinariaamoranimal.com',
                'telefono' => '555-5847',
                'direccion' => 'Avenida Petapa 189',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Fernanda Cabrera',
                'email' => 'fernanda.cabrera@email.com',
                'telefono' => '555-4126',
                'direccion' => 'Residencial San Carlos 223',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Ignacio Paredes',
                'email' => 'ignacio.paredes@email.com',
                'telefono' => '555-9758',
                'direccion' => 'Calle Nueva 67',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Mueblería El Hogar',
                'email' => 'ventas@muebleriaelhogar.com',
                'telefono' => '555-3684',
                'direccion' => 'Bulevar Los Próceres 234',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Valentina Solís',
                'email' => 'valentina.solis@email.com',
                'telefono' => '555-6291',
                'direccion' => 'Colonia Vista Alegre 156',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Mauricio Estrada',
                'email' => 'mauricio.estrada@email.com',
                'telefono' => '555-1547',
                'direccion' => 'Avenida Hincapié 89, Quetzaltenango',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Banco de Inversión GT',
                'email' => 'atencioncliente@bancoinversiongt.com',
                'telefono' => '555-8372',
                'direccion' => 'Torre Financiera Piso 25',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Alejandra Morán',
                'email' => 'alejandra.moran@email.com',
                'telefono' => '555-4951',
                'direccion' => 'Residencial Las Flores 67',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Tomás Lara',
                'email' => 'tomas.lara@email.com',
                'telefono' => '555-7283',
                'direccion' => 'Calle San Martín 145, Jutiapa',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Escuela de Idiomas Global',
                'email' => 'inscripciones@escuelaglobal.com',
                'telefono' => '555-5619',
                'direccion' => 'Edificio Educativo Aula 301',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Guadalupe Navarro',
                'email' => 'guadalupe.navarro@email.com',
                'telefono' => '555-3486',
                'direccion' => 'Colonia San Pedro 234',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Fabián Guerrero',
                'email' => 'fabian.guerrero@email.com',
                'telefono' => '555-9172',
                'direccion' => 'Avenida La Paz 78',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Empresa de Seguridad Privada',
                'email' => 'contratos@seguridadprivada.com',
                'telefono' => '555-6548',
                'direccion' => 'Complejo Industrial Lote 23',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Mariana Quintana',
                'email' => 'mariana.quintana@email.com',
                'telefono' => '555-2759',
                'direccion' => 'Residencial Monte Olivo 145',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Elías Bermúdez',
                'email' => 'elias.bermudez@email.com',
                'telefono' => '555-8134',
                'direccion' => 'Calle Los Ceibos 67, Chiquimula',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Laboratorio Farmacéutico Nacional',
                'email' => 'contacto@labfarmaceutico.com',
                'telefono' => '555-4527',
                'direccion' => 'Parque Industrial Guatemala',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Cecilia Prieto',
                'email' => 'cecilia.prieto@email.com',
                'telefono' => '555-7961',
                'direccion' => 'Colonia El Encanto 189',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Benjamín Rojas',
                'email' => 'benjamin.rojas@email.com',
                'telefono' => '555-3285',
                'direccion' => 'Avenida Simón Bolívar 123',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Centro de Fisioterapia Integral',
                'email' => 'citas@fisioterapiaintegral.com',
                'telefono' => '555-5874',
                'direccion' => 'Clínica Médica Consultorio 205',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Paloma Acosta',
                'email' => 'paloma.acosta@email.com',
                'telefono' => '555-1639',
                'direccion' => 'Residencial Los Arcos 78',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Claudio Soto',
                'email' => 'claudio.soto@email.com',
                'telefono' => '555-9451',
                'direccion' => 'Calle del Comercio 245, Totonicapán',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Imprenta Digital Pro',
                'email' => 'pedidos@imprentadigitalpro.com',
                'telefono' => '555-6783',
                'direccion' => 'Zona Industrial Nave 45',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Estela Campos',
                'email' => 'estela.campos@email.com',
                'telefono' => '555-2167',
                'direccion' => 'Colonia Santa Elena 156',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Maximiliano Cruz',
                'email' => 'maximiliano.cruz@email.com',
                'telefono' => '555-7592',
                'direccion' => 'Avenida La Reforma 89',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Transportes Rápidos Guatemala',
                'email' => 'logistica@transportesrapidos.com',
                'telefono' => '555-4318',
                'direccion' => 'Terminal de Carga Bodega 12',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Beatriz Mendoza',
                'email' => 'beatriz.mendoza@email.com',
                'telefono' => '555-8976',
                'direccion' => 'Residencial El Prado 234',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Gonzalo Figueroa',
                'email' => 'gonzalo.figueroa@email.com',
                'telefono' => '555-5243',
                'direccion' => 'Calle Principal 67, El Progreso',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Hotel Boutique Colonial',
                'email' => 'reservas@hotelboutiquecolonial.com',
                'telefono' => '555-1854',
                'direccion' => 'Centro Histórico Antigua Guatemala',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Raquel Ibarra',
                'email' => 'raquel.ibarra@email.com',
                'telefono' => '555-6417',
                'direccion' => 'Colonia Los Olivos 145',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Patricio Villanueva',
                'email' => 'patricio.villanueva@email.com',
                'telefono' => '555-3729',
                'direccion' => 'Avenida Roosevelt 278',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Corporación Tecnológica GT',
                'email' => 'info@corporaciontecnologica.com',
                'telefono' => '555-9586',
                'direccion' => 'Parque Tecnológico Torre A',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Silvia Maldonado',
                'email' => 'silvia.maldonado@email.com',
                'telefono' => '555-2341',
                'direccion' => 'Residencial Vista Verde 89',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Octavio Herrera',
                'email' => 'octavio.herrera@email.com',
                'telefono' => '555-7685',
                'direccion' => 'Calle Los Laureles 156, Mazatenango',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Gimnasio Fitness Total',
                'email' => 'membresias@gimnasiofitnestotal.com',
                'telefono' => '555-4952',
                'direccion' => 'Centro Comercial Piso 2',
                'tipo_cliente' => 'empresa'
            ],
            [
                'nombre' => 'Olga Ramírez',
                'email' => 'olga.ramirez@email.com',
                'telefono' => '555-1378',
                'direccion' => 'Colonia Buenos Aires 234',
                'tipo_cliente' => 'personal'
            ],
            [
                'nombre' => 'Enrique Morales',
                'email' => 'enrique.morales@email.com',
                'telefono' => '555-8264',
                'direccion' => 'Avenida Centroamérica 67',
                'tipo_cliente' => 'personal'
            ],
        ]);
    }
}