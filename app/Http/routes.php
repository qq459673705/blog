<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::any('user', function(){  //这里除了get之外都不能用,原因是因为
  return 'any';
});

Route::put('user', function(){
    return 'put';
});

Route::patch('user', function(){
    return 'patch';
});

Route::delete('user', function(){
    return 'delete';
});

Route::post('user', function(){
    return 'post';
});

 Route::get('hd', function(){
   return 'get';
 });
