<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BitacoraSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();
        
        DB::table('bitacora_cambio')->insert([
            // Registros para órdenes de reparación
            [
                'tabla_afectada' => 'orden_reparacion',
                'id_registro' => 1,
                'accion' => 'INSERT',
                'fecha' => $now->subDays(10)->format('Y-m-d H:i:s')
            ],
            [
                'tabla_afectada' => 'orden_reparacion',
                'id_registro' => 1,
                'accion' => 'UPDATE',
                'fecha' => $now->subDays(8)->format('Y-m-d H:i:s')
            ],
            [
                'tabla_afectada' => 'orden_reparacion',
                'id_registro' => 2,
                'accion' => 'INSERT',
                'fecha' => $now->subDays(7)->format('Y-m-d H:i:s')
            ],
            
            // Registros para clientes
            [
                'tabla_afectada' => 'cliente',
                'id_registro' => 3,
                'accion' => 'UPDATE',
                'fecha' => $now->subDays(5)->format('Y-m-d H:i:s')
            ],
            
            // Registros para vehículos
            [
                'tabla_afectada' => 'vehiculo',
                'id_registro' => 2,
                'accion' => 'UPDATE',
                'fecha' => $now->subDays(4)->format('Y-m-d H:i:s')
            ],
            
            // Registros para facturación
            [
                'tabla_afectada' => 'factura',
                'id_registro' => 1,
                'accion' => 'INSERT',
                'fecha' => $now->subDays(3)->format('Y-m-d H:i:s')
            ],
            [
                'tabla_afectada' => 'factura',
                'id_registro' => 2,
                'accion' => 'INSERT',
                'fecha' => $now->subDays(2)->format('Y-m-d H:i:s')
            ],
            
            // Registro reciente
            [
                'tabla_afectada' => 'orden_reparacion',
                'id_registro' => 5,
                'accion' => 'UPDATE',
                'fecha' => $now->subHours(2)->format('Y-m-d H:i:s')
            ]
        ]);
    }
}