<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalzadoController extends Controller
{
    public function index()
    {
        return view('calzado.ccalzado'); //nombre de la carpeta.nombre de la vista
    }
}
