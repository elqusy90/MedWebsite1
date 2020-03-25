<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Medicine;
use Faker\Generator as Faker;

$factory->define(Medicine::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'PharmaceuticalCompany_id'=>function(){
            return factory('App\PharmaceuticalCompany')->create()->id;
        }
    ];
});
