<?php

use App\Http\Controllers\Habitaciones\HabitacionesController;
use App\Http\Controllers\Servicios\ServiciosController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');

})->name('welcome');

Route::get('/Habitaciones',[ HabitacionesController::class,'index'])->name('habitaciones');
Route::get('/Servicios',[ServiciosController::class,'index'])->name('servicios');
