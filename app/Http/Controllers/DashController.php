<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index() 
    {
        $posts = auth()->user()->posts;

        return view('dashboard', compact('posts'));
     }
}
