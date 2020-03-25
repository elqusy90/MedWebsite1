<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PharmaceuticalCompany;
use Faker\Generator as Faker;

$factory->define(PharmaceuticalCompany::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
    ];
});
