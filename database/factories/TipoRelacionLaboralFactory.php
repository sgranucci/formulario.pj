<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TipoRelacionLaboral;
use Faker\Generator as Faker;

$factory->define(TipoRelacionLaboral::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
