<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clcController extends Controller
{
    public function add($n1 , $n2 , $n3=0)
    {
        echo  "$n1 + $n2 +$n3 = " , $n1+$n2+$n3;
    }
    public function cut($n1 , $n2 , $n3=0)
    {
        echo  "$n1 - $n2 -$n3 = " , $n1-$n2-$n3;
    }
    public function multi(Request $request)
    {

        echo $request->x * $request->y;
    }
}
