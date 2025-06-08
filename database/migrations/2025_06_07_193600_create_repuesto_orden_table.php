<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepuestoOrdenTable extends Migration
{
    public function up(): void
    {
        Schema::create('repuesto_orden', function (Blueprint $table) {
            $table->unsignedInteger('id_orden');
            $table->unsignedInteger('id_repuesto');
            $table->integer('cantidad')->default(1);

            $table->primary(['id_orden', 'id_repuesto']);

            $table->foreign('id_orden')
                  ->references('id_orden')
                  ->on('orden_reparacion')
                  ->onDelete('cascade');

            $table->foreign('id_repuesto')
                  ->references('id_repuesto')
                  ->on('repuesto')
                  ->onDelete('restrict');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('repuesto_orden');
    }
}
