<?php

namespace App\Http\Controllers;

use App\Models\BestPractice;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $bestPractices = BestPractice::all();

        return view('home', [
            'bestPractices' => $bestPractices
        ]);
    }
}
