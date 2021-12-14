<?php

namespace App\Http\Controllers;

use App\Models\Practice;

class PracticeController extends Controller
{
    public function index($practice)
    {
        $practice = Practice::with(['opinions'])->findOrFail($practice);
        session(['url.intended' => url()->current()]);

        return view('practice')->with('practice', $practice);
    }
}
