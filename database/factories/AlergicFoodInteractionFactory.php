<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AlergicFoodInteraction;
use Faker\Generator as Faker;

$factory->define(AlergicFoodInteraction::class, function (Faker $faker) {
    return [
        'alergic_id'=>function(){
        return factory('App\Alergic')->create()->id;
        },
        'food_id'=> function(){
        return factory('App\Food')->create()->id;
        },
    ];
});
