<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Produit::class, function (Faker $faker) {
    return [
        'titre'=>$faker->title,
        'description'=>$faker->paragraphs(1,true),
        'prix'=> $faker->numerify(),
        'categorie'=>$faker->sentence(10,true),
        'etoile'=> $faker->numerify(),
        'dates'=>$faker->date,
        'images_id'=>function()
        {
          return App\Models\Image::all()->random();
        },

        'disponiblite_id'=>function()
        {
          return App\Models\Disponibilite::all()->random();
        }
    ];
});
