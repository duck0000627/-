<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test2()
    {
        return view('pages.test2');
    }

    public function webtest()
    {
        return view('pages.test');
    }
}
