<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    public function up(): void
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->increments('id_factura');
            $table->unsignedInteger('id_orden');
            $table->date('fecha_emision');
            $table->decimal('total_facturado', 10, 2);
            $table->enum('forma_pago', ['efectivo', 'tarjeta', 'transferencia', 'credito']); // Agregado 'credito'

            $table->foreign('id_orden')
                  ->references('id_orden')
                  ->on('orden_reparacion')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('factura');
    }
}