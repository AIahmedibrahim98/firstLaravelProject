<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taggable extends Model
{
    function taggable(){
        return $this->morphTo();
    }
}
