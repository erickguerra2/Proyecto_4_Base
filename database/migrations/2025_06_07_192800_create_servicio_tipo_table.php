<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicioTipoTable extends Migration
{
    public function up(): void
    {
        Schema::create('servicio_tipo', function (Blueprint $table) {
            $table->unsignedInteger('id_servicio');
            $table->unsignedInteger('id_tipo');

            $table->primary(['id_servicio', 'id_tipo']);

            $table->foreign('id_servicio')
                  ->references('id_servicio')
                  ->on('servicio')
                  ->onDelete('cascade');

            $table->foreign('id_tipo')
                  ->references('id_tipo')
                  ->on('tipo_servicio')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('servicio_tipo');
    }
}
