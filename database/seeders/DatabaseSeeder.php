<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Limpiar tablas
        $this->truncateTables();

        // Seeders en orden de dependencia
        $this->call(RolSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(VehiculoSeeder::class);
        $this->call(ProveedorSeeder::class);
        $this->call(RepuestoSeeder::class);
        $this->call(EmpleadoSeeder::class);
        $this->call(ServicioSeeder::class);
        $this->call(OrdenReparacionSeeder::class);
        $this->call(OrdenServicioSeeder::class);
        $this->call(RepuestoOrdenSeeder::class);
        $this->call(EmpleadoOrdenSeeder::class);
        $this->call(FacturaSeeder::class);
        $this->call(BitacoraSeeder::class);
    }

    protected function truncateTables()
    {
        // Deshabilitar triggers y restricciones en PostgreSQL
        DB::statement('SET session_replication_role = replica;');
        
        $tables = [
            'rol', 'usuario', 'cliente', 'vehiculo', 'proveedor', 
            'repuesto', 'empleado', 'servicio', 'orden_reparacion',
            'orden_servicio', 'repuesto_orden', 'empleado_orden',
            'factura', 'bitacora_cambio'
        ];
        
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        
        // Restaurar comportamiento normal
        DB::statement('SET session_replication_role = DEFAULT;');
    }
}