<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RepuestoSeeder extends Seeder
{
    public function run()
    {
        // Verificar que existan los proveedores
        $proveedores = DB::table('proveedor')->count();
        if ($proveedores < 5) {
            $this->call(ProveedorSeeder::class);
        }

        DB::table('repuesto')->insert([
            // Filtros (Proveedor 1)
            [
                'nombre' => 'Filtro de aceite',
                'precio' => 12.50,
                'stock' => 45,
                'id_proveedor' => 1
            ],
            [
                'nombre' => 'Filtro de aire',
                'precio' => 18.75,
                'stock' => 32,
                'id_proveedor' => 1
            ],
            // Filtro combustible (Proveedor 2)
            [
                'nombre' => 'Filtro de combustible',
                'precio' => 22.30,
                'stock' => 28,
                'id_proveedor' => 2
            ],
            // Frenos (Proveedor 3 y 4)
            [
                'nombre' => 'Pastillas de freno delanteras',
                'precio' => 45.90,
                'stock' => 24,
                'id_proveedor' => 3
            ],
            [
                'nombre' => 'Pastillas de freno traseras',
                'precio' => 38.50,
                'stock' => 18,
                'id_proveedor' => 3
            ],
            [
                'nombre' => 'Discos de freno',
                'precio' => 85.00,
                'stock' => 15,
                'id_proveedor' => 4
            ],
            // Eléctricos (Proveedor 5)
            [
                'nombre' => 'Batería 12V 60Ah',
                'precio' => 120.00,
                'stock' => 12,
                'id_proveedor' => 5
            ],
            // ... resto de repuestos
        ]);
    }
}