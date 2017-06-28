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
        
        if($this->type === 'review')
        {
            return $this->hasOne('App\Review');
        }
    }
    public function post()
    {
        if($this->type === 'posts')
        {
            return $this->hasOne('App\Post');
        }
    }

    public function rate_reviews()
    {
        return $this->hasMany('App\RateReview');
    }

    public function attributes()
    {
        return $this->hasOne('App\StoryAttribute');
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
