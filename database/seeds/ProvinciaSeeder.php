<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincias')->insert([
            [ 'id' => '1' , 'name' => 'Ciudad Autonoma de Buenos Aires (CABA)' , 'pais_id' => 1 ],
            [ 'id' => '2' , 'name' => 'Buenos Aires' , 'pais_id' => 1 ],
            [ 'id' => '3' , 'name' => 'Catamarca' , 'pais_id' => 1 ],
            [ 'id' => '4' , 'name' => 'Chaco' , 'pais_id' => 1 ],
            [ 'id' => '5' , 'name' => 'Chubut' , 'pais_id' => 1 ],
            [ 'id' => '6' , 'name' => 'Córdoba' , 'pais_id' => 1 ],
            [ 'id' => '7' , 'name' => 'Corrientes' , 'pais_id' => 1 ],
            [ 'id' => '8' , 'name' => 'Entre Ríos' , 'pais_id' => 1 ],
            [ 'id' => '9' , 'name' => 'Formosa' , 'pais_id' => 1 ],
            [ 'id' => '10' , 'name' => 'Jujuy' , 'pais_id' => 1 ],
            [ 'id' => '11' , 'name' => 'La Pampa' , 'pais_id' => 1 ],
            [ 'id' => '12' , 'name' => 'La Rioja' , 'pais_id' => 1 ],
            [ 'id' => '13' , 'name' => 'Mendoza' , 'pais_id' => 1 ],
            [ 'id' => '14' , 'name' => 'Misiones' , 'pais_id' => 1 ],
            [ 'id' => '15' , 'name' => 'Neuquén' , 'pais_id' => 1 ],
            [ 'id' => '16' , 'name' => 'Río Negro' , 'pais_id' => 1 ],
            [ 'id' => '17' , 'name' => 'Salta' , 'pais_id' => 1 ],
            [ 'id' => '18' , 'name' => 'San Juan' , 'pais_id' => 1 ],
            [ 'id' => '19' , 'name' => 'San Luis' , 'pais_id' => 1 ],
            [ 'id' => '20' , 'name' => 'Santa Cruz' , 'pais_id' => 1 ],
            [ 'id' => '21' , 'name' => 'Santa Fe' , 'pais_id' => 1 ],
            [ 'id' => '22' , 'name' => 'Santiago del Estero' , 'pais_id' => 1 ],
            [ 'id' => '23' , 'name' => 'Tierra del Fuego, Antártida e Islas del Atlántico Sur' , 'pais_id' => 1 ],
            [ 'id' => '24' , 'name' => 'Tucumán' , 'pais_id' => 1 ]
        ]);
    }
}
