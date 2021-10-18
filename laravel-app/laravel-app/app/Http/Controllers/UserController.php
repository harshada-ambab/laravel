<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return "Hello From Controller";
    }

    public function load($name)
    {
        return view('hello',["name"=>$name]);
    }
}
