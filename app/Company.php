<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
     use SoftDeletes;
     protected $fillable = [
        'user_id', 'location_id','email','contact_no','about','website',
    ];
    public function promotions()
    {
        return $this->hasMany('App\Promotion');
    }
    public function location()
    {
        return $this->hasOne('App\Location');
    }
}
