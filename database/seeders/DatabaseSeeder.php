<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RolSeeder::class,
            UsuarioSeeder::class,
            ClienteSeeder::class,
            VehiculoSeeder::class,
            EmpleadoSeeder::class,
            
        ]);
    }
}