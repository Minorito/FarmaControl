<?php

namespace App\Http\Controllers;


class ClienteController extends Controller
{
    public function getCliente(){
        return view('cliente');
       }      
}