<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('ci');
            $table->integer('telefono');
            $table->string('email');
            $table->string('direccion');
            $table->unsignedBigInteger('turnos_id');
            $table->unsignedBigInteger('cargos_id');
            $table->foreign('turnos_id')->references('id')->on('turnos');
            $table->foreign('cargos_id')->references('id')->on('cargos');
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
        Schema::dropIfExists('personals');
    }
}
