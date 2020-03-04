<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    function comments(){
        return $this->morphMany("App\Comment","commentable");
    }
    function tags(){
        return $this->morphToMany("\App\Tag","taggable");
    }
}
