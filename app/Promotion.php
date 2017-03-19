<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Promotion extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'company_id', 'schemes','media_id',
    ];

}
