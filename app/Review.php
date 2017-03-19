<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'text','rating','geo_address',
    ];

    public function media()
    {
        return $this->hasOne('App\Media');
    }
    public function location()
    {
        return $this->hasOne('App\Location');
    }

}
