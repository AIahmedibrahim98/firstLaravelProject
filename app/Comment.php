<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    function commentable(){
        return $this->morphTo();
    }
}
