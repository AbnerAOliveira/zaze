<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
   protected $fillable = [

       'commit_id', 'user_id', 'reactions_id', 'reply'
   ];
}
