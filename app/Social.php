<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use SoftDeletes;
    protected $fillable = [
         'type','user_id','fb_token','insta_token',
    ];
}
