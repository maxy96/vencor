<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposViviendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = ["Casa", "Vivienda", "Departamento"];
        foreach ($tipos as $tipo) {
             DB::table('tipos_viviendas')->insert(['descripcion' => $tipo]);
        }
    }
}
