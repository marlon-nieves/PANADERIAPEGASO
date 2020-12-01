<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomiciliarioController extends Controller
{
    public function index()
    {
        return view('domiciliario.domiciliario');
    }

    public function ruta()
    {
        return view('domiciliario.ruta');
    }
}
