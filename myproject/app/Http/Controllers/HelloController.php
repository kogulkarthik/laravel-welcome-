<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    
    function sayhello(){
     $names="laravel";
        return view("hi",["name"=>$names]);
    }
}
