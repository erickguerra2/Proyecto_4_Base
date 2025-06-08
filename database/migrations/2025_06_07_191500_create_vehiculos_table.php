<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    public function up(): void
    {
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->increments('id_vehiculo');
            $table->unsignedInteger('id_cliente');
            $table->string('placa', 20)->unique();
            $table->string('marca', 50)->nullable();
            $table->string('modelo', 50)->nullable();
            $table->unsignedSmallInteger('año')->nullable();
            $table->string('color', 30)->nullable();
            $table->enum('tipo_vehiculo', ['auto', 'camioneta', 'moto'])->default('auto');

            $table->foreign('id_cliente')
                  ->references('id_cliente')
                  ->on('cliente')
                  ->onDelete('cascade');
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('vehiculo');
    }
}