<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    public function index(){
      return 'index';
    }

    public function store(){
      return 'store';
    }

    public function show($id){
      return $id;
    }
}
