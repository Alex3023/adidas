<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HombreController extends Controller
{
    public function index()
    {
        return view('hombre.chombre'); //nombre de la carpeta.nombre de la vista
    }
}
