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
}
