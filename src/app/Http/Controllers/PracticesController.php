<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;

class PracticesController extends Controller
{
    public function index()
    {
        return view('practices')->with('domain', null);
    }

    public function byDomain($domain)
    {
        $domain = Domain::where('slug', $domain)->first();
        session(['domain' => $domain->id]);
        
        return view('practices')->with('domain', $domain);
    }
}
