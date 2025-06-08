<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoSeeder extends Seeder
{
    public function run()
    {
        DB::table('empleado')->insert([
            [
                'nombre' => 'Pedro Martínez',
                'rol' => 'mecánico',
                'email' => 'pedro@taller.com',
                'telefono' => '555-1111',
                'salario' => 1200.00
            ],
            [
                'nombre' => 'Ana Rodríguez',
                'rol' => 'administrativo',
                'email' => 'ana@taller.com',
                'telefono' => '555-2222',
                'salario' => 1500.00
            ],
            [
                'nombre' => 'Luisa Fernández',
                'rol' => 'gerente',
                'email' => 'luisa@taller.com',
                'telefono' => '555-3333',
                'salario' => 900.00
            ],
            [
                'nombre' => 'Jorge Gómez',
                'rol' => 'mecánico',
                'email' => 'jorge@taller.com',
                'telefono' => '555-4444',
                'salario' => 1300.00
            ],
        ]);
    }
}