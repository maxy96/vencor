<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_pagos', function (Blueprint $table) {
            $table->increments('id_tipoPago');
            $table->string('descripcion');
        });
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('id_pago');
            $table->integer('tipoPago_id')->unsigned();
            $table->bigInteger('ordenPedido_id')->unsigned()->nullable();// por si hubo un ingreso por pedido
            $table->bigInteger('proveedor_id')->unsigned()->nullable();// por si hubo un costo por solicitud hacia un proveedor
            $table->dateTime('fechaRegistrado');//fecha en el que se registro estos datos en la base de datos
            $table->dateTime('fechaLimite');//fecha vencimiento 
            $table->dateTime('fechaPagado')->nullable();//fecha en que se pago o se recibio el dinero
            $table->decimal('importe', 8, 2);
            $table->string('razon');
            $table->string('ticket')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('costos');
        Schema::dropIfExists('tipos_costos');
    }
}
