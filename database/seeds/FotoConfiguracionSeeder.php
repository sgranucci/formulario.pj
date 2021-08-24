<?php

use Illuminate\Database\Seeder;
use App\FotosConfiguracion;

class FotoConfiguracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FotosConfiguracion::UpdateOrCreate(['name' => 'FOTO PALMA DERECHA'], [ 'name' => 'FOTO PALMA DERECHA' , 'active' => '1' ]);
        FotosConfiguracion::UpdateOrCreate(['name' => 'FOTO PALMA IZQUIERDA'], [ 'name' => 'FOTO PALMA IZQUIERDA' , 'active' => '1' ]);
        FotosConfiguracion::UpdateOrCreate(['name' => 'FOTO DE FRENTE'], [ 'name' => 'FOTO DE FRENTE' , 'active' => '1' ]);
    }
}
