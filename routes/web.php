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

use Illuminate\Http\Request;
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
// Route::get('/Product', "MyController@Product");
// Route::get('/Product/data', "DBcontroller@index");
Route::get('/category', "categoryController@showAll");
Route::post('/category/store',"categoryController@store");
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
// new Route
Route::get('/Product', "productController@showAll")->name("products");
Route::post('/Product/store', "productController@store");
Route::get("/md/{age}", "middlewareController@test")
// ->middleware("test")
;

Route::group(['prefix' => 'mdg',"middleware"=>'test'], function () {
Route::get("age/{ages}", function (Request $request) {
echo "your age issss" . $request->ages;
});
Route::get("num/{num}", function (Request $request) {
    echo "your num is" . $request->num;
    });
});
Route::get('/lang', function () {
    
    return view("lang");
});
Route::get('change/lang/{locale}', function ($locale) {
    if($locale == "en"){
        session()->put("lang","en");
    }elseif($locale == "ar"){
        session()->put("lang","ar");
    }
    return redirect()->back();
});