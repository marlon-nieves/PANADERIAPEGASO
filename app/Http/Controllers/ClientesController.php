<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function cliente(){
        return view('clientes.cliente');
        
    }
    public function registro(){
        return view('clientes.registro');
        
    }
    public function productos(){
        return view('clientes.productos');
        
    }
    public function carrito()
    {
        return view('clientes.carrito');
    }
}