<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('ci');
            $table->integer('telefono');
            $table->string('email');
            $table->string('codigo_departamento');
            $table->string('mascotas');
            $table->string('niños');
            $table->unsignedBigInteger('estados_id');
            $table->unsignedBigInteger('despensas_id');
            $table->foreign('estados_id')->references('id')->on('estados');
            $table->foreign('despensas_id')->references('id')->on('despensas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
