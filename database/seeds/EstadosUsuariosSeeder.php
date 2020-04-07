<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosUsuariosSeeder extends Seeder
{
    public function run()
    {
        $estados = ["Activo", "suspendido"];
        foreach ($estados as $estado) {
             DB::table('estados_usuarios')->insert(['eu_descripcion' => $estado]);
        }
    }
}
