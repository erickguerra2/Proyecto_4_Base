<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenServicioTable extends Migration
{
    public function up(): void
    {
        Schema::create('orden_servicio', function (Blueprint $table) {
            $table->unsignedInteger('id_orden');
            $table->unsignedInteger('id_servicio');
            $table->integer('cantidad')->default(1);
            $table->decimal('subtotal', 10, 2);

            $table->primary(['id_orden', 'id_servicio']);

            $table->foreign('id_orden')
                  ->references('id_orden')
                  ->on('orden_reparacion')
                  ->onDelete('cascade');

            $table->foreign('id_servicio')
                  ->references('id_servicio')
                  ->on('servicio')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orden_servicio');
    }
}
