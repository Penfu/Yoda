<?php

namespace App\Http\Controllers;

use App\Models\Reference;

class ReferenceController extends Controller
{
    public function index()
    {
        return view('references')->with([
            'references' => Reference::all(),
        ]);
    }
}
