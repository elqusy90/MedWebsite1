<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alergic;
use Faker\Generator as Faker;

$factory->define(Alergic::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
    ];
});
