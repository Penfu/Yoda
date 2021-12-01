<?php

namespace App\Http\Controllers;

use App\Models\Domain;

class PracticesController extends Controller
{
    public function index()
    {
        session()->forget('domain');
        return view('practices');
    }

    public function byDomain($domain)
    {
        $domain = Domain::where('slug', $domain)->first();

        session(['domain' => $domain]);
        return view('practices')->with('domain', $domain);
    }
}
