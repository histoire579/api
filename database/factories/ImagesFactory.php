<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Image::class, function (Faker $faker) {
    return [
        'nom'=>$faker->sentence(10,true)
    ];
});
