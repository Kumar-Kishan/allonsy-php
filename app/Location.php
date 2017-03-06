<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
     use SoftDeletes;
     protected $fillable = [
        'lat', 'long','geo_address'
    ];
}
