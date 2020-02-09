<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    function showAll(){
// dd(DB::select('select * from produces'));
// dd(DB::table('produces')->where('id',1)->get());
// dd(DB::table('produces')->where('name','toy')->get());
$result = DB::table('produces')->get();
return view("Product",["result"=>$result]);
    }
    function store(Request $request){
        DB::table('produces')->insert(["name"=>$request->input("name"),"price"=>$request->input("price")]);
        // return  redirect()->back();
        // return  redirect("Product");
        // return redirect()->route("products");
        return redirect()->action("productController@showAll");
    }
}
