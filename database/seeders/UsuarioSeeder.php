<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuario')->insert([
            [
                'nombre_usuario' => 'admin',
                'password' => Hash::make('admin123'),
                'id_rol' => 1
            ],
            [
                'nombre_usuario' => 'mecanico1',
                'password' => Hash::make('mecanico123'),
                'id_rol' => 2
            ],
            [
                'nombre_usuario' => 'recepcion1',
                'password' => Hash::make('recepcion123'),
                'id_rol' => 3
            ],
            [
                'nombre_usuario' => 'supervisor1',
                'password' => Hash::make('super123'),
                'id_rol' => 4
            ],
        ]);
    }
}