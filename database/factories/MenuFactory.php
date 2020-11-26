<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Menu;
use Faker\Generator as Faker;

$factory->define(\App\Models\Menu::class, function (Faker $faker) {
    return [
        'titre'=>$faker->title,
        'description'=>$faker->paragraphs(1,true),
        'prix'=> $faker->numerify(),
        'categorie'=>$faker->sentence(10,true),
        'etoile'=> $faker->numerify(),
        'dates'=>$faker->date,
        'disponible'=>$faker->sentence(1,true),
        'type'=>$faker->sentence(1,true),
        'frais'=> $faker->numerify(),
    ];
});
