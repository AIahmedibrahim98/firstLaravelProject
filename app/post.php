<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    function image(){
        return $this->morphOne("\App\Image","imageable");
    }
    function comments(){
        return $this->morphMany("App\Comment","commentable");
    }
    function tags(){
        return $this->morphToMany("\App\Tag","taggable");
    }
}
