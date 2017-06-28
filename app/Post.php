<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'text','fistbump','story_id','media_id',
    ];


    public function media()
    {
        return $this->belongsTo('App\Media');
    }
}
