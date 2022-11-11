<?php

namespace App\Http\Controllers\Habitaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    public function index(){
        return view('Habitaciones.habitaciones');
    }
}
