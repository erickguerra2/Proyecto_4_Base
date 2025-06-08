<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateordenReparacionTable extends Migration
{
    public function up(): void
    {
        Schema::create('orden_reparacion', function (Blueprint $table) {
            $table->increments('id_orden');
            $table->unsignedInteger('id_vehiculo');
            $table->date('fecha_ingreso');
            $table->string('estado', 20)->default('pendiente');
            $table->decimal('total_estimado', 10, 2)->nullable();
            $table->decimal('total_real',    10, 2)->nullable();
            $table->date('fecha_salida')->nullable();

            $table->foreign('id_vehiculo')
                  ->references('id_vehiculo')
                  ->on('vehiculo')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orden_reparacion');
    }
}
