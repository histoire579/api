<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Disponibilite::class, function (Faker $faker) {
    return [
        'disponible'=>$faker->sentence(4,true),
        'type'=>$faker->sentence(10,true),
        'frais'=> $faker->numerify()
    ];
});
