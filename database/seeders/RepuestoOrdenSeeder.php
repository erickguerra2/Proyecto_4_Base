<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RepuestoOrdenSeeder extends Seeder
{
    public function run()
    {
        DB::table('repuesto_orden')->insert([
            // Orden 1 - Cambio de aceite y rotación
            [
                'id_orden' => 1,
                'id_repuesto' => 1,  // Filtro de aceite
                'cantidad' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_orden' => 1,
                'id_repuesto' => 5,  // Aceite (usando ID existente)
                'cantidad' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Orden 2 - Frenos
            [
                'id_orden' => 2,
                'id_repuesto' => 4,  // Pastillas delanteras
                'cantidad' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_orden' => 2,
                'id_repuesto' => 6,  // Líquido de frenos (usando ID existente)
                'cantidad' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Orden 3 - Sistema eléctrico
            [
                'id_orden' => 3,
                'id_repuesto' => 7,  // Batería
                'cantidad' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_orden' => 3,
                'id_repuesto' => 3,  // Bujías (usando ID existente)
                'cantidad' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Orden 4 - Mantenimiento mayor
            [
                'id_orden' => 4,
                'id_repuesto' => 1,   // Filtro aceite
                'cantidad' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_orden' => 4,
                'id_repuesto' => 2,   // Filtro aire
                'cantidad' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_orden' => 4,
                'id_repuesto' => 5,   // Aceite (usando ID existente)
                'cantidad' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_orden' => 4,
                'id_repuesto' => 3,   // Bujías (usando ID existente)
                'cantidad' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}