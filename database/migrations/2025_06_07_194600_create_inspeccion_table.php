<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspeccionTable extends Migration
{
    public function up(): void
    {
        Schema::create('inspeccion', function (Blueprint $table) {
            $table->increments('id_inspeccion');
            $table->unsignedInteger('id_vehiculo');
            $table->date('fecha');
            $table->text('observaciones')->nullable();

            $table->foreign('id_vehiculo')
                  ->references('id_vehiculo')
                  ->on('vehiculo')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inspeccion');
    }
}
