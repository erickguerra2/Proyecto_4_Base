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
        ]);
    }
}