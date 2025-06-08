<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateEmpleadoOrdenTable extends Migration
{
    public function up(): void
    {
        Schema::create('empleado_orden', function (Blueprint $table) {
            $table->unsignedInteger('id_empleado');
            $table->unsignedInteger('id_orden');
            $table->decimal('horas_trabajadas', 5, 2)->default(0);

            $table->primary(['id_empleado', 'id_orden']);

            $table->foreign('id_empleado')
                  ->references('id_empleado')
                  ->on('empleado')
                  ->onDelete('cascade');

            $table->foreign('id_orden')
                  ->references('id_orden')
                  ->on('orden_reparacion')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('empleado_orden');
    }
}
