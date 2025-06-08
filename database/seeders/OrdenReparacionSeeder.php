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
                'estado' => 'Finalizada',
                'total_estimado' => 1321,
                'total_real' => 3211,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_orden' => 2,
                'id_vehiculo' => 2,
                'fecha_ingreso' => '2023-05-28',
                'fecha_salida' => '2023-06-02',
                'estado' => 'Finalizada',
                'total_estimado' => 123,
                'total_real' => 2131,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_orden' => 3,
                'id_vehiculo' => 3,
                'fecha_ingreso' => '2023-06-05',
                'fecha_salida' => '2023-06-10',
                'estado' => 'Finalizada', 
                'total_estimado' => 5461,
                'total_real' => 2595,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_orden' => 4,
                'id_vehiculo' => 4,
                'fecha_ingreso' => '2023-06-12',
                'fecha_salida' => '2023-06-18',
                'estado' => 'Finalizada',
                'total_estimado' => 2989,
                'total_real' => 1486,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}