<?php

use Illuminate\Database\Seeder;

class TiposPagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tiposPagos = ["Ingreso", "Costo"];
        foreach ($tiposPagos as $tipoPago) {
             DB::table('tipos_pagos')->insert(['descripcion' => $tipoPago]);
        }
    }
}
