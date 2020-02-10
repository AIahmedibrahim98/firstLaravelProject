<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    function showAll(){
        $result = DB::table('category')->get();
        return view("category",["result"=>$result]);
    }
    function store(Request $request){
        DB::table('category')->insert(["name"=>$request->input("name")]);
        return redirect()->back();
    }
}
