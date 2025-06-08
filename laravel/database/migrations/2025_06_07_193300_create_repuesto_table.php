<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepuestoTable extends Migration
{
    public function up(): void
    {
        Schema::create('repuesto', function (Blueprint $table) {
            $table->increments('id_repuesto');
            $table->string('nombre', 100);
            $table->decimal('precio', 10, 2);
            $table->integer('stock')->default(0);
            $table->unsignedInteger('id_proveedor');

            $table->foreign('id_proveedor')
                  ->references('id_proveedor')
                  ->on('proveedor')
                  ->onDelete('restrict');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('repuesto');
    }
}
