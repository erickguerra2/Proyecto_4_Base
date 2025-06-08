<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitaTable extends Migration
{
    public function up(): void
    {
        Schema::create('cita', function (Blueprint $table) {
            $table->increments('id_cita');
            $table->unsignedInteger('id_cliente');
            $table->timestamp('fecha_hora');
            $table->text('motivo')->nullable();
            $table->string('estado', 20)->default('pendiente');

            $table->foreign('id_cliente')
                  ->references('id_cliente')
                  ->on('cliente')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cita');
    }
}
