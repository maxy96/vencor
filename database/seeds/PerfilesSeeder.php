<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilesSeeder extends Seeder
{
   
    public function run()
    {
        $perfiles = ["Admin", "Cliente"];
        foreach ($perfiles as $perfil) {
             DB::table('perfiles')->insert(['descripcion' => $perfil]);
        }
    }
}
