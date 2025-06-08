<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacturaSeeder extends Seeder
{
    public function run()
    {
        DB::table('factura')->insert([
            // Factura para orden completada 1 (Efectivo)
            [
                'id_orden' => 1,
                'fecha_emision' => '2023-05-15',
                'total_facturado' => 320.50,
                'forma_pago' => 'efectivo',
                'created_at' => now(),
                'updated_at' => now()
            ],
            
            // Factura para orden completada 2 (Tarjeta)
            [
                'id_orden' => 2,
                'fecha_emision' => '2023-06-02',
                'total_facturado' => 420.75,
                'forma_pago' => 'tarjeta',
                'created_at' => now(),
                'updated_at' => now()
            ],
            
            // Factura para orden completada 3 (Transferencia)
            [
                'id_orden' => 3,
                'fecha_emision' => '2023-06-10',
                'total_facturado' => 285.00,
                'forma_pago' => 'transferencia',
                'created_at' => now(),
                'updated_at' => now()
            ],
            
            // Factura para orden completada 4 (Crédito)
            [
                'id_orden' => 4,
                'fecha_emision' => '2023-06-18',
                'total_facturado' => 550.25,
                'forma_pago' => 'credito', // Ahora sí funciona si modificas la migración
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}