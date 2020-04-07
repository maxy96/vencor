<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosProductosSeeder extends Seeder
{
    
    public function run()
    {
        $estados = ["Disponible", "No disponible"];
        foreach ($estados as $estado) {
             DB::table('estados_productos')->insert(['ep_descripcion' => $estado]);
        }
    }
}
