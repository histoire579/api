<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\ItemCart::class, function (Faker $faker) {
    return [
        'qte'=>$faker->numerify(),
        'total'=>$faker->numerify(),
        'produit_id'=>function()
        {
          return App\Models\Produit::all()->random();
        }
    ];
});
