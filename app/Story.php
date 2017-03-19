<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Story extends Model
{
    use SoftDeletes;
    protected $fillable = [
         'type',
    ];

    public function review()
    {
        if($this->type == 0)
        {
            return $this->hasOne('App\Review');
        }
    }
    public function post()
    {
        if($this->type == 1)
        {
            return $this->hasOne('App\Post');
        }
    }

    public function rate_reviews()
    {
        return $this->hasMany('App\RateReview');
    }
}
