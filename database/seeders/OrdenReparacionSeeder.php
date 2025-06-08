<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdenReparacionSeeder extends Seeder
{
    public function run()
    {
        DB::table('orden_reparacion')->insert([
            [
                'id_orden' => 1,
                'id_vehiculo' => 1,
                'fecha_ingreso' => '2023-05-10',
                'fecha_salida' => '2023-05-15',
                'estado' => 'Finalizada', // Cambiado a Finalizada
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_orden' => 2,
                'id_vehiculo' => 2,
                'fecha_ingreso' => '2023-05-28',
                'fecha_salida' => '2023-06-02',
                'estado' => 'Finalizada', // Cambiado a Finalizada
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_orden' => 3,
                'id_vehiculo' => 3,
                'fecha_ingreso' => '2023-06-05',
                'fecha_salida' => '2023-06-10',
                'estado' => 'Finalizada', // Cambiado a Finalizada
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_orden' => 4,
                'id_vehiculo' => 4,
                'fecha_ingreso' => '2023-06-12',
                'fecha_salida' => '2023-06-18',
                'estado' => 'Finalizada', // Cambiado a Finalizada
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}