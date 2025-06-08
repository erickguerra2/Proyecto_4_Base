<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoServicioTable extends Migration
{
    public function up(): void
    {
        Schema::create('tipo_servicio', function (Blueprint $table) {
            $table->increments('id_tipo');
            $table->string('nombre', 100);
            $table->text('descripcion')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tipo_servicio');
    }
}
