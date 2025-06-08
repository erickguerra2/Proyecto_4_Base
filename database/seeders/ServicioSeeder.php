<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicioSeeder extends Seeder
{
    public function run()
    {
        DB::table('servicio')->insert([
            [
                'nombre' => 'Cambio de aceite y filtro',
                'descripcion' => 'Cambio de aceite de motor y filtro de aceite',
                'precio_base' => 35.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Rotación de llantas',
                'descripcion' => 'Rotación de neumáticos para desgaste uniforme',
                'precio_base' => 25.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cambio de pastillas de freno',
                'descripcion' => 'Reemplazo de pastillas de freno delanteras o traseras',
                'precio_base' => 60.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cambio de batería',
                'descripcion' => 'Reemplazo de batería del vehículo',
                'precio_base' => 20.00, // Solo mano de obra, batería aparte
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Diagnóstico computarizado',
                'descripcion' => 'Escaneo y diagnóstico del sistema del vehículo',
                'precio_base' => 40.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Alineación',
                'descripcion' => 'Alineación de ruedas delanteras',
                'precio_base' => 30.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Balanceo',
                'descripcion' => 'Balanceo de llantas',
                'precio_base' => 20.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cambio de filtro de aire',
                'descripcion' => 'Reemplazo del filtro de aire del motor',
                'precio_base' => 15.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cambio de bujías',
                'descripcion' => 'Reemplazo de bujías de encendido',
                'precio_base' => 25.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Lavado completo',
                'descripcion' => 'Lavado exterior e interior del vehículo',
                'precio_base' => 12.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cambio de aceite de transmisión',
                'descripcion' => 'Cambio de aceite de la caja de transmisión',
                'precio_base' => 55.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Revisión de frenos',
                'descripcion' => 'Inspección completa del sistema de frenos',
                'precio_base' => 25.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cambio de refrigerante',
                'descripcion' => 'Cambio del líquido refrigerante del motor',
                'precio_base' => 35.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Reparación de escape',
                'descripcion' => 'Reparación del sistema de escape',
                'precio_base' => 45.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Mantenimiento 5,000 km',
                'descripcion' => 'Paquete de mantenimiento básico cada 5,000 km',
                'precio_base' => 80.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Mantenimiento 10,000 km',
                'descripcion' => 'Paquete de mantenimiento intermedio cada 10,000 km',
                'precio_base' => 120.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Mantenimiento 15,000 km',
                'descripcion' => 'Paquete de mantenimiento completo cada 15,000 km',
                'precio_base' => 150.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cambio de correa de tiempo',
                'descripcion' => 'Reemplazo de la correa de distribución',
                'precio_base' => 85.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Reparación de aire acondicionado',
                'descripcion' => 'Diagnóstico y reparación del sistema A/C',
                'precio_base' => 65.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cambio de amortiguadores',
                'descripcion' => 'Reemplazo de amortiguadores delanteros o traseros',
                'precio_base' => 70.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}