<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Media extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'type', 'path',
    ];


    public function user()
    {
        return $this->hasOne('App\User');
    }
}
