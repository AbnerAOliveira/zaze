<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [

            'users_id', 'post'
    ];

    protected $casts = [

        'datetime' => 'datetime'
    ];

}
