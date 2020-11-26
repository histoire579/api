<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Menue;
use Faker\Generator as Faker;

$factory->define(App\Models\Menue::class, function (Faker $faker) {
    return [
        'titre'=>$faker->title,
        'description'=>$faker->paragraphs(1,true),
        'prix'=> $faker->numerify(),
        'nom'=>$faker->sentence(1,true),
        'categorie'=>$faker->sentence(1,true),
        'etoile'=> $faker->numerify(),
        'dates'=>$faker->date,
        'disponible'=>$faker->sentence(1,true),
        'type'=>$faker->sentence(1,true),
        'frais'=> $faker->numerify(),
    ];
});
