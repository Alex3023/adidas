<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MujerController extends Controller
{
    public function index()
    {
        return view('mujer.cmujer'); //nombre de la carpeta.nombre de la vista
    }
}
