<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newcontroller extends Controller
{
    function index(){
        return view("login");
    }
}
