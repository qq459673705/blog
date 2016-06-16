<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    public function index(){
      echo config('database.connections.mysql.prefix'); //这里传入的是config目录下文件名，以及对应的key
      return view('index/index');
    }

    public function content(){
      return view('index/content');
    }

    public function layout(){
      return view('index/layout');
    }

    public function getDB(){
      $db = DB::connection()->getPdo();
      dd($db);
      return view('welcome');
    }
}
