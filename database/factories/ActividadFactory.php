<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Actividad;
use Faker\Generator as Faker;

$factory->define(Actividad::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'codigo' => $faker->word,
    ];
});
