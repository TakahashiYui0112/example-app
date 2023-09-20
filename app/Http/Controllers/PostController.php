<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index () 
    {
       $foge = "もも";
       return view('index', compact('foge'));
    }
}
