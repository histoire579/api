<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemCart extends Model
{
    protected $fillable=['produit_id','qte','total'];

    public function produits()
    {
     return $this->belongsTo('App\Models\Produit');
    }
}
