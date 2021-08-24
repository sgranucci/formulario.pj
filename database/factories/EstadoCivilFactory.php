<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\EstadoCivil;
use Faker\Generator as Faker;

$factory->define(EstadoCivil::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
