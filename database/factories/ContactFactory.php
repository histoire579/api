<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\contact::class, function (Faker $faker) {
    return [
        'nom'=>$faker->sentence(4,true),
        'email'=>$faker->sentence(4,true),
        'message'=>$faker->sentence(4,true)
    ];
});
