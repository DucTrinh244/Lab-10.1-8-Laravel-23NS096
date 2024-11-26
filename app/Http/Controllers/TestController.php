<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $name = "HOÀNG ĐỨC TRÌNH";
        return view('about')->with('name', $name);
        // return view('about', compact('name'));
    }
    public function show_form() {}
}
