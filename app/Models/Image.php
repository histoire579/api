<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=['nom'];

     public function produits()
     {
       return $this->hasMany('App\Models\Produit');
    }
}
