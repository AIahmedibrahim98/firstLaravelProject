<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class middlewareController extends Controller
{
    function __construct()
    {
        middlewareController::middleware('test');
    }
    function test(Request $request){
        echo "Hello Your age is" . $request->age;
    }
}
