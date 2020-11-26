<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Utilisateur;
use Faker\Generator as Faker;

$factory->define(App\Models\Utilisateur::class, function (Faker $faker) {
    return [
        'nom'=>$faker->sentence(4,true),
        'prenom'=>$faker->sentence(4,true),
        'telephone'=>$faker->sentence(4,true),
        'email'=>$faker->sentence(4,true),
        'login'=>$faker->sentence(4,true),
        'password'=>$faker->sentence(4,true)
    ];
});
