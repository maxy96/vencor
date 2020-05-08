<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_pedidos', function (Blueprint $table) {
            $table->bigIncrements('id_ordenPedido');
            $table->dateTime('fechaPedido');
            $table->dateTime('fechaEntrega')->nullable();
            $table->bigInteger('cliente_id')->unsigned();
            $table->string('cod_ordenPedido', 50)->unique();
            $table->rememberToken()->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden_pedidos');
    }
}
