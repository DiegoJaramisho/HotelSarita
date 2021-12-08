<?php

namespace App\Http\Controllers\Contactanos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactanosController extends Controller
{
    public function index(){
        return view('Contactanos.contactanos');
    }
}
