<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    public function run()
    {
        DB::table('rol')->insert([
            ['nombre_rol' => 'Administrador'],
            ['nombre_rol' => 'Mecánico'],
            ['nombre_rol' => 'Recepcionista'],
            ['nombre_rol' => 'Supervisor'],
        ]);
    }
}