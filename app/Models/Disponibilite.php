<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disponibilite extends Model
{
    protected $fillable=['disponible','type','frais'];

     public function produits()
     {
       return $this->hasMany('App\Models\Produit');
    }
}
