<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postad extends Model
{
    protected $table = "postad";
    protected $primaryKey="pid";

    protected $fillable=['location', 
    'propertytype', 
    'propertyfor', 
    'price', 
    'sqrft', 
    'bedroom', 
    'kitchen',
     'balcony', 
     'description',
   ];
}
