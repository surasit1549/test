<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  /*
    function surasit($name){
      return '<h1>Hello:'.$name.'</h1>';
    }*/
    function show(){
      return view('user')
      ->with('name','surasit watthanamesuk')
      ->with('title','Laravel tutorial');
    }


}
