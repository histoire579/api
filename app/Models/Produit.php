<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable=['titre','description','prix','categorie','etoile','dates','images_id','disponiblite_id'];

    public function disponibilites()
    {
     return $this->belongsTo('App\Models\Disponibilite');
    }

    public function images()
    {
     return $this->belongsTo('App\Models\Image');
    }

    public function itemCarts()
    {
      return $this->hasMany('App\Models\ItemCart');
    }

    public function imgs()
    {
      return $this->hasMany('App\Models\Img');
    }

}
