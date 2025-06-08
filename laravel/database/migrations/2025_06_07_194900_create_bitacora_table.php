<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBitacoraCambioTable extends Migration
{
    public function up(): void
    {
        Schema::create('bitacora_cambio', function (Blueprint $table) {
            $table->increments('id_bitacora');
            $table->string('tabla_afectada', 50);
            $table->unsignedInteger('id_registro');
            $table->string('accion', 20);
            $table->timestamp('fecha')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bitacora_cambio');
    }
}
