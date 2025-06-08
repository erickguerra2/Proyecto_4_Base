<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditoriaLoginTable extends Migration
{
    public function up(): void
    {
        Schema::create('auditoria_login', function (Blueprint $table) {
            $table->increments('id_auditoria');
            $table->unsignedInteger('id_usuario');
            $table->timestamp('fecha_hora')->useCurrent();
            $table->string('evento', 20);

            $table->foreign('id_usuario')
                  ->references('id_usuario')
                  ->on('usuario')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('auditoria_login');
    }
}
