<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedorSeeder extends Seeder
{
    public function run()
    {
        DB::table('proveedor')->insert([
            [
                'nombre' => 'Autopartes Nacionales S.A.',
                'contacto' => 'Carlos Méndez',
                'telefono' => '555-1001'
            ],
            [
                'nombre' => 'Importadora de Repuestos',
                'contacto' => 'Laura Jiménez',
                'telefono' => '555-1002'
            ],
            [
                'nombre' => 'Distribuidora Automotriz',
                'contacto' => 'Roberto Sánchez',
                'telefono' => '555-1003'
            ],
            [
                'nombre' => 'Frenos y Embragues',
                'contacto' => 'Fernando Castro',
                'telefono' => '555-1004'
            ],
            [
                'nombre' => 'Eléctricos Automotrices',
                'contacto' => 'Marta Rodríguez',
                'telefono' => '555-1005'
            ]
        ]);
    }
}