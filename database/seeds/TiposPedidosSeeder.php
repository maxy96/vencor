<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposPedidosSeeder extends Seeder
{
   
    public function run()
    {
        $tipos = ["Pendiente", "Recibido"];
        foreach ($tipos as $tipo) {
             DB::table('tipo_pedidos')->insert(['descripcion' => $tipo]);
        }
    }
}
