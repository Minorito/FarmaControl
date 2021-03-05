<?php

namespace App\Http\Controllers;


class PesquisarController extends Controller
{
    public function getPesquisa(){
        return view('pesquisar');
       }      
}