<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contactos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->bigIncrements('id_contacto');
            $table->string('telefono', 12)->unique();
            $table->string('domicilio', 60);
            $table->string('casa_descripcion');
            $table->bigInteger('user_id')->unsigned();
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
         Schema::dropIfExists('contactos');
    }
}