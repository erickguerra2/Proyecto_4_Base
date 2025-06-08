<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    public function up(): void
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->increments('id_empleado');
            $table->string('nombre', 100);
            $table->enum('rol', ['mecánico', 'administrativo', 'gerente']);
            $table->string('email', 100)->nullable()->unique();
            $table->string('telefono', 20)->nullable();
            $table->decimal('salario', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('empleado');
    }
}