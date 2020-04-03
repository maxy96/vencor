<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id_producto');
            $table->string('p_imagen')->nullable();
            $table->string('nombre', 100);
            $table->string('marca', 100);
            $table->string('slug');
            $table->integer('stock');
            $table->decimal('precio', 8, 2);
            $table->bigInteger('tipoProducto_id')->unsigned();
            $table->integer('estadoProducto_id')->unsigned();
            $table->rememberToken();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
