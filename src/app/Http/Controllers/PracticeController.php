<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Practice;

class PracticeController extends Controller
{
    public function index($practice)
    {
        $practice = Practice::with(['opinions'])->findOrFail($practice);
        session(['url.intended' => url()->current()]);

        return view('practice')->with('practice', $practice);
    }

    public function all()
    {
        session()->forget('domain');
        return view('practices');
    }

    public function byDomain($domain)
    {
        $domain = Domain::whereSlug($domain)->firstOrFail();

        session(['domain' => $domain]);
        return view('practices')->with('domain', $domain);
    }
}
