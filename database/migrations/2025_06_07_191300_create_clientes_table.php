<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    public function up(): void
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id_cliente');
            $table->string('nombre', 100);
            $table->string('email', 100)->nullable()->unique();
            $table->string('telefono', 20)->nullable();
            $table->text('direccion')->nullable();
            $table->enum('tipo_cliente', ['personal', 'empresa'])->default('personal');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
}