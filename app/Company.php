<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    function manger(){
        return $this->hasOne("\App\Manger","id");
    }
}
