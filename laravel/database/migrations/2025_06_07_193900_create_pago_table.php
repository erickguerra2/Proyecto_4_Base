<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoTable extends Migration
{
    public function up(): void
    {
        Schema::create('pago', function (Blueprint $table) {
            $table->increments('id_pago');
            $table->unsignedInteger('id_factura');
            $table->decimal('monto', 10, 2);
            $table->date('fecha_pago');

            $table->foreign('id_factura')
                  ->references('id_factura')
                  ->on('factura')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pago');
    }
}
