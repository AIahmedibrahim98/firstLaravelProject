<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Ramsey\Uuid\FeatureSet;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', "MyController@test");
Route::get('/clc/{x}/{y}/{z?}',"clcController@add");
Route::get('/cut/{x}/{y}/{z?}', "clcController@cut");
Route::get('/multi/{x}/{y}',"clcController@multi");
// Route::get('/show',"MyController@show");
Route::get('/show/{x}/{y}',"MyController@show");
Route::get('/category', "MyController@category");
Route::get('/brands', "MyController@Brands");
Route::get('/Product', "MyController@Product");
Route::get('/Product/data', "DBcontroller@index");
Route::get('/category', "MyController@category");
Route::get("/data/show" ,function (){

    $data = ["name"=>"ahmed" , "salary" =>5800, "job" =>"sales" ,
    "clients" =>["ahmed" ,"dina" ,"sara"]  ];
   var_dump($data);
   // json resopnse
    return $data;
   //return response()->json($data);

});
Route::get("/put/{name}" , function ($name){

    return     response("aaa",200)->withCookie("name",$name);
});

Route::get('/download', function () {
    return response()->download("data.txt");
});
Route::get('/file', function () {
return response()->file("data.txt");
});
