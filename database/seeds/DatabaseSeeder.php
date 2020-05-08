<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EstadosProductosSeeder::class);
        $this->call(EstadosUsuariosSeeder::class);
        $this->call(PerfilesSeeder::class);
        $this->call(TiposPagosSeeder::class);
        $this->call(TiposViviendasSeeder::class);
    }
}
