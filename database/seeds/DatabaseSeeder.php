<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // factory(App\Models\Disponibilite::class, 5)->create();
        // factory(App\Models\Image::class, 5)->create();
        // factory(App\Models\Produit::class, 10)->create();
        // factory(App\Models\ItemCart::class, 5)->create();
        //factory(App\Models\Utilisateur::class, 2)->create();
        factory(App\Models\Menu::class, 2)->create();
    }
}
