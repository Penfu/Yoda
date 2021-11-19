<?php

namespace App\Http\Controllers;

use App\Models\BestPractice;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
