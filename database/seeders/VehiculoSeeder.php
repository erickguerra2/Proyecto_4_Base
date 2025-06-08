<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculoSeeder extends Seeder
{
    public function run()
    {
        DB::table('vehiculo')->insert([
            [
                'id_cliente' => 1,
                'placa' => 'ABC123',
                'marca' => 'Toyota',
                'modelo' => 'Corolla',
                'año' => 2018,
                'color' => 'Blanco',
                'tipo_vehiculo' => 'auto'
            ],
            [
                'id_cliente' => 2,
                'placa' => 'XYZ789',
                'marca' => 'Ford',
                'modelo' => 'Ranger',
                'año' => 2020,
                'color' => 'Rojo',
                'tipo_vehiculo' => 'camioneta'
            ],
            [
                'id_cliente' => 3,
                'placa' => 'DEF456',
                'marca' => 'Honda',
                'modelo' => 'Civic',
                'año' => 2019,
                'color' => 'Azul',
                'tipo_vehiculo' => 'auto'
            ],
            [
                'id_cliente' => 4,
                'placa' => 'GHI789',
                'marca' => 'Chevrolet',
                'modelo' => 'Spark',
                'año' => 2017,
                'color' => 'Negro',
                'tipo_vehiculo' => 'auto'
            ],
        ]);
    }
}