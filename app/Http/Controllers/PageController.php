<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function userConnect()
    {
        return view('user_connect');
    }

    public function userCreate()
    {
        return view('user_create');
    }

    public function task()
    {
        return view('task');
    }
}
