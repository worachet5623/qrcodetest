<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function test(Request $request)
    {
        $number = $request->input('number');
        $price = $request->input('price');
        return view('test',compact('number','price'));
    }
}