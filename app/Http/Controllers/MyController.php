<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function test()
    {
        return view("test");
    }
    // public function show()
    // {
    //     return view("show",["name"=>"ahmed","age"=>21]);
    //     # code...
    // }
    public function show($name , $age)
    {
        // return view("show",["name"=>$name,"age"=>$age]);
        // طريقة تانية
        return view("show")
        ->with("name",$name)
        ->with("age",$age);

        # code...
    }
    function category(){
        return view("category");

    }
    function Product(){
        return view("Product");
    }
    function Brands(){
        $brands = ["Samsung"," Apple","Huawei","Oppo","Vivo"," Xiaomi","LG","Lenovo","ZTE","Alcatel-Lucent"];
        return view("Brands",["barnds"=>$brands]);
    }
}
