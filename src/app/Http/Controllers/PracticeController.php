<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Practice;

class PracticeController extends Controller
{
    public function index(Practice $practice)
    {
        $practice->load('opinions');
        session(['url.intended' => url()->current()]);

        return view('practice')->with('practice', $practice);
    }

    public function all()
    {
        session()->forget('domain');
        return view('practices');
    }

    public function byDomain(Domain $domain)
    {
        session(['domain' => $domain]);
        return view('practices')->with('domain', $domain);
    }

    public function moderation()
    {
        return view('practices-moderation');
    }
}
