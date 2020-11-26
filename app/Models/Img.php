<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    protected $fillable=['nom','produit_id'];

    public function produits()
    {
        return $this->belongsTo('App\Models\Produit');
    }
}
