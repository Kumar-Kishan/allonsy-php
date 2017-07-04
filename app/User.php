<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Authenticatable
{
   
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'has_preferences'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function social()
    {
        return $this->hasOne('App\Social');
    }
    public function companies()
    {
        return $this->hasMany('App\Company');
    }

    public function stories()
    {
        return $this->hasMany('App\Story');
    }
    public function rate_reviews()
    {
        return $this->hasMany('App\RateReview');
    }

    public function fistbump()
    {
        return $this->belongsToMany('App\Post');
    }


    public function attributes()
    {
        return $this->hasOne('App\UserAttribute');
    }
    public function profileImage()
    {
        return $this->media();
    }
    private function media()
    {
        return $this->belongsTo('App\Media');
    }
}

