<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TipoDomicilio;
use Faker\Generator as Faker;

$factory->define(TipoDomicilio::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
