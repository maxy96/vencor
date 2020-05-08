<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->bigIncrements('id_proveedor');
            //empresa
            $table->string('empresa', 40);
            $table->string('cuit',20);
            $table->string('direccion_empresa', 40);
            $table->string('tel_empresa', 12)->unique();
            $table->string('email_empresa', 100)->unique();

            //revendedor
            $table->string('revendedor', 40); //nombre revendedor
            $table->string('cuil',20);
            $table->string('direccion_revendedor', 40);
            $table->string('tel_revendedor', 12)->unique();
            $table->string('email_revendedor', 100)->unique();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
