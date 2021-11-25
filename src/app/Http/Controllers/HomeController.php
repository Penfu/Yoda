<?php

namespace App\Http\Controllers;

use App\Models\BestPractice;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        Carbon::setLocale('fr');
        return view('home');
    }
}
