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
         //$this->call(PaisesSeeder::class);
         //$this->call(ProvinciaSeeder::class);
         $this->call(ActividadSeeder::class);
         $this->call(FotoConfiguracionSeeder::class);
    }
}
