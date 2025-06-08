<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdenServicioSeeder extends Seeder
{
    public function run()
    {
        DB::table('orden_servicio')->insert([
            // Orden 1 - Mantenimiento básico
            [
                'id_orden' => 1,
                'id_servicio' => 1, // Cambio de aceite
                'cantidad' => 1,
                'subtotal' => 35.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_orden' => 1,
                'id_servicio' => 2, // Rotación de llantas
                'cantidad' => 1,
                'subtotal' => 25.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // Orden 2 - Frenos
            [
                'id_orden' => 2,
                'id_servicio' => 3, // Cambio pastillas
                'cantidad' => 1,
                'subtotal' => 60.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // Orden 3 - Diagnóstico + batería
            [
                'id_orden' => 3,
                'id_servicio' => 5, // Diagnóstico
                'cantidad' => 1,
                'subtotal' => 40.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_orden' => 3,
                'id_servicio' => 4, // Cambio batería
                'cantidad' => 1,
                'subtotal' => 20.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // Orden 4 - Mantenimiento completo
            [
                'id_orden' => 4,
                'id_servicio' => 1, // Cambio aceite
                'cantidad' => 1,
                'subtotal' => 35.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_orden' => 4,
                'id_servicio' => 2, // Rotación llantas
                'cantidad' => 1,
                'subtotal' => 25.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_orden' => 4,
                'id_servicio' => 5, // Diagnóstico
                'cantidad' => 1,
                'subtotal' => 40.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}