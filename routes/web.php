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
Route::get('/category', "MyController@category");

