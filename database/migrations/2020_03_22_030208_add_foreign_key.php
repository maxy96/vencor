<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //TABLA USUARIOS
        Schema::table('users', function (Blueprint $table) {
            $table->integer('perfil_id')->unsigned();
            $table->foreign('perfil_id')->references('id_perfil')->on('perfiles')
                    ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('estadoUsuario_id')->unsigned();
            $table->foreign('estadoUsuario_id')->references('id_estadoUsuario')->on('estados_usuarios')->onDelete('cascade')->onUpdate('cascade');
        });

        //TABLA PRODUCTOS
        Schema::table('productos', function (Blueprint $table) {
            //referenciando a la tabla tipo_producto.
            $table->bigInteger('tipoProducto_id')->unsigned();
            $table->foreign('tipoProducto_id')->references('id_tipoProducto')->on('tipos_productos')->onDelete('cascade')->onUpdate('cascade');
                    
            //referenciando a la tabla estados_productos
            $table->integer('estadoProducto_id')->unsigned();
            $table->foreign('estadoProducto_id')->references('id_estadoProducto')->on('estados_productos')->onDelete('cascade')->onUpdate('cascade');
        });

        //TABLA ORDEN_PEDIDOS
        Schema::table('orden_pedidos', function (Blueprint $table) {
            //referenciando a la tabla users 
            $table->bigInteger('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id_user')->on('users')
                    ->onDelete('cascade')->onUpdate('cascade');
        });

        //TABLA DETALLES_PEDIDOS
        Schema::table('detalles_pedidos', function (Blueprint $table) {
            //$table->bigInteger('d_orden_id')->unsigned();
            $table->foreign('d_orden_id')->references('id_ordenPedido')->on('orden_pedidos')->onDelete('cascade')->onUpdate('cascade');
                    
            //$table->bigInteger('d_producto_id')->unsigned();
            $table->foreign('d_producto_id')->references('id_producto')->on('productos')->onDelete('cascade')->onUpdate('cascade');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalles_pedidos', function (Blueprint $table) {
            $table->dropForeign(['d_producto_id']);
            $table->dropForeign(['d_orden_id']);
        });
        Schema::table('orden_pedidos', function (Blueprint $table) {
            $table->dropForeign(['cliente_id']);
        });
        Schema::table('productos', function (Blueprint $table) {
            $table->dropForeign(['estadoProducto_id']);
            $table->dropForeign(['tipoProducto_id']);
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_estadoUsuario_id_foreign');
            $table->dropForeign('users_perfil_id_foreign');
        });
    }
}
