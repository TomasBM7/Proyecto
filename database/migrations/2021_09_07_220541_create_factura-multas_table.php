<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaMultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura-multas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('multa_id');
            $table->unsignedBigInteger('factura_id');
            $table->string('Tipo de Pago');
            $table->text('Comprobante');
            $table->text('Historial de Pagos');
            $table->foreign('multa_id')->references('id')->on('multas');
            $table->foreign('factura_id')->references('id')->on('facturas');
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
        Schema::dropIfExists('factura-multas');
    }
}
