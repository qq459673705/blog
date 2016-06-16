<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function index(){
      return view('welcome');
    }

    public function text(){
      // return Route('userText') . '!!!!';
      return 'text';
    }

    public function login(){
      session(['user'=>'mingming', 'passwd'=>'123456']);

      $data = [
        'passwd'=>'123456',
        'age'=>30,
        'list'=>[
          'name'=>'121334',
          'uid'=>'22333',
          'legin'=>'上课',
          'form'=>'henan',
        ],
        'news'=>[],
      ];

      $script = '<script> alert(1111) </script>';
      $title = 'welcome to beijing';
      return view('user/login', compact('data', 'title', 'script'));
    }
}
