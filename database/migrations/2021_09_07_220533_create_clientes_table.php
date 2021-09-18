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
            $table->unsignedBigInteger('mascota_id');
            $table->unsignedBigInteger('vivienda_id');
            $table->unsignedBigInteger('estado_civil_id');
            $table->string('nombres');
            $table->string('apeliidos');
            $table->integer('ci');
            $table->integer('telefono');
            $table->string('email');
            $table->foreign('mascota_id')->references('id')->on('mascotas');
            $table->foreign('vivienda_id')->references('id')->on('viviendas');
            $table->foreign('estado_civil_id')->references('id')->on('estado_civils');
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
