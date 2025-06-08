<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoOrdenSeeder extends Seeder
{
    public function run()
    {
        // Verificar empleados y órdenes existentes
        $empleadosExistentes = DB::table('empleado')->pluck('id_empleado')->toArray();
        $ordenesExistentes = DB::table('orden_reparacion')->pluck('id_orden')->toArray();
        
        // Datos a insertar
        $datosParaInsertar = [
            // Orden 1 - Mecánico Junior (Cambio de aceite)
            [
                'id_empleado' => 3,
                'id_orden' => 1,
                'horas_trabajadas' => 1.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // Orden 2 - Especialista en frenos
            [
                'id_empleado' => 2,
                'id_orden' => 2,
                'horas_trabajadas' => 2.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // Orden 3 - Electricista automotriz
            [
                'id_empleado' => 4,
                'id_orden' => 3,
                'horas_trabajadas' => 3.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // Orden 4 - Trabajo en equipo
            [
                'id_empleado' => 1,
                'id_orden' => 4,
                'horas_trabajadas' => 2.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_empleado' => 3,
                'id_orden' => 4,
                'horas_trabajadas' => 1.5,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        // Filtrar solo registros válidos
        $datosValidos = array_filter($datosParaInsertar, function($item) use ($empleadosExistentes, $ordenesExistentes) {
            return in_array($item['id_empleado'], $empleadosExistentes) && 
                   in_array($item['id_orden'], $ordenesExistentes);
        });

        // Mostrar información de depuración
        echo "Empleados existentes: " . implode(', ', $empleadosExistentes) . "\n";
        echo "Órdenes existentes: " . implode(', ', $ordenesExistentes) . "\n";
        echo "Registros a insertar: " . count($datosValidos) . "\n";

        // Insertar datos válidos
        if (!empty($datosValidos)) {
            DB::table('empleado_orden')->insert(array_values($datosValidos));
            echo "Datos insertados correctamente en empleado_orden\n";
        } else {
            echo "No se pudieron insertar datos - verificar empleados y órdenes\n";
        }
    }
}