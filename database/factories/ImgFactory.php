<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Img::class, function (Faker $faker) {
    return [

        'nom'=>$faker->sentence(),
        'produit_id'=>$faker->numerify()
        // 'produit_id'=>function()
        // {
        //   return App\Models\Produit::all()->random();
        // }
    ];
});
