<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('multa_id');
            $table->unsignedBigInteger('servicio_id');
            $table->unsignedBigInteger('personal_id');
            $table->unsignedBigInteger('pedido_id');
            $table->date('Fecha');
            $table->text('Detalle');
            $table->integer('Subtotal');
            $table->integer('Total');
            $table->foreign('cliente_id')->references('id')->on('mascotas');
            $table->foreign('multa_id')->references('id')->on('viviendas');
            $table->foreign('servicio_id')->references('id')->on('servicios');
            $table->foreign('personal_id')->references('id')->on('personals');
            $table->foreign('pedido_id')->references('id')->on('pedidos');
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
        Schema::dropIfExists('facturas');
    }
}
