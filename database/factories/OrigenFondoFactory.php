<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrigenFondo;
use Faker\Generator as Faker;

$factory->define(OrigenFondo::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
