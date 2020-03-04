<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    function imageable(){
        return $this->morphTo();
    }
}
