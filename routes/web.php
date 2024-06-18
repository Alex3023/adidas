<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrusoController;
use App\Http\Controllers\HombreController;
use App\Http\Controllers\MujerController;
use App\Http\Controllers\CalzadoController;
use App\Http\Controllers\DeporteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [CrusoController::class, 'index'])->name('inicio');

Route::get('/hombre', [HombreController::class, 'index'])->name('hombre');

Route::get('/mujer', [MujerController::class, 'index'])->name('mujer');

Route::get('/calzado', [CalzadoController::class, 'index'])->name('calzado');

Route::get('/deporte', [DeporteController::class, 'index'])->name('deporte');

