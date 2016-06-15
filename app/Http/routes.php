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

//Route::any('user', function(){  //这里除了get之外都不能用,原因是因为
//  return 'any';
//});
//
//Route::put('user', function(){
//    return 'put';
//});
//
//Route::patch('user', function(){
//    return 'patch';
//});
//
//Route::delete('user', function(){
//    return 'delete';
//});
//
//Route::post('user', function(){
//    return 'post';
//});
//
// Route::get('hd', function(){
//   return 'get';
// });
//
//Route::match(['get', 'post', 'patch'], 'hd', function(){
//    return 'match';
//});

Route::get('test/{aa}', function($aa){
    return 'test' . $aa;
});


Route::get('user/{name}/index/{password}', function($n, $p){  //测试用  http://localhost/blog/user/mingming   不要使用 http://localhost/blog/user?name=mingming 解析不了
    return $n . "  " . $p;
});

Route::get('user_{name}', function($n){
    return $n;
});

//Route::get('foo/{name?}', function($name = '你好'){ // 参数加?之后 , 对应的闭包函数中 的参数需要有默认值
//    return $name;
//});

Route::get('foo/{name?}/com/{pass?}', function($name = 'niho', $pass = '****'){ //多个参数除了最后一个参数之外,不能出现其他的可选参数否则容易出问题
    return $name . "--------" . $pass;
});