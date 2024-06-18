<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeporteController extends Controller
{
    public function index()
    {
        return view('deporte.cdeporte'); //nombre de la carpeta.nombre de la vista
    }
}
