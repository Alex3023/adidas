<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrusoController extends Controller
{
    public function index()
    {
        return view('inicio');
    }
}
