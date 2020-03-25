<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Supplement;
use Faker\Generator as Faker;

$factory->define(Supplement::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
    ];
});
