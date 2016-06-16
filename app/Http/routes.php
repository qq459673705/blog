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

// Route::get('/', function () {
//     session(['key'=>'hello']);
//     return view('welcome');
// });

// Route::get('index', 'Admin\IndexController@index');
//
// Route::get('user', 'Admin\UserController@index');
//
// // Route::get('user/text', ['as'=>'text', function(){
// //   echo Route('text'); //方便在其他地方调用此路由的时候，来调用
// //   return 'text';
// // }]);
//
// // Route::get('user/text', ['as'=>'userText', 'uses'=>'Admin\UserController@text']);
// Route::get('user/text', 'Admin\UserController@text')->name('userText');

Route::get('user/login', ['as'=>'login', 'uses'=>'Admin\UserController@login']);

Route::group(['prefix'=>'user', 'namespace'=>'Admin', 'middleware'=>['web', 'login']], function(){  //user, 和 admin 的提取
    Route::get('index', 'UserController@index');
    Route::get('text', 'UserController@text');
    Route::resource('article', 'ArticleController');
});

// Route::get('test', function(){
//   echo session('key');
//   return 'test';
// });

Route::group(['middleware'=>['web', 'login']], function(){  //中间件要用 Route::group来加载，中间件用来过滤
  Route::get('/', function () {
      return view('welcome');
  });

  Route::get('test', function(){
    return 'test';
  });
});
