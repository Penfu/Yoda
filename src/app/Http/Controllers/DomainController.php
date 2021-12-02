<?php

namespace App\Http\Controllers;

use App\Models\Domain;

class DomainController extends Controller
{
    public function index()
    {
        session()->forget('domain');
        return view('domains');
    }

    public function byDomain($domain)
    {
        $domain = Domain::where('slug', $domain)->first();

        session(['domain' => $domain]);
        return view('domains')->with('domain', $domain);
    }
}
