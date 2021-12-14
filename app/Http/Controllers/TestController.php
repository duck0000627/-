<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        return '123';
    }

    public function webtest()
    {
        return view('pages.test');
    }
}
