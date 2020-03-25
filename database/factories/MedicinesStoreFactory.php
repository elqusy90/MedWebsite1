<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MedicinesStore;
use Faker\Generator as Faker;

$factory->define(MedicinesStore::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
    ];
});
