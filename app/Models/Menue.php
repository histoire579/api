<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menue extends Model
{
    protected $fillable=['titre','description','prix','nom','categorie','etoile','dates','disponible','type','frais'];
}
