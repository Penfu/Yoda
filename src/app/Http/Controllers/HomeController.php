<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        session()->forget('domain');
        return view('home')->with('days', 5);
    }
}
