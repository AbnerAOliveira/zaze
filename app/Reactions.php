<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reactions extends Model
{
    protected $fillable = [
        'id_Posts', 'id_Commits', 'id_User', 'expression'

    ];
    protected $casts = [

      'datetime' => 'datetime'
    ];
}
