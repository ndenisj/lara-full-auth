<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        return view('quotes.index');
    }

    public function show()
    {
        return view('quotes.show');
    }
}
