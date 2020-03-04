<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manger extends Model
{
    function company(){
        return $this->hasOne("\App\Company","id");
    }
}
