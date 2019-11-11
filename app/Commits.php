<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commits extends Model
{
    protected $fillable = [

        'id_users', 'id_posts', 'comments'
    ];

    protected $casts = [

        'datetime' => 'datetime'
    ];

}

