<?php

namespace App\Http\Controllers;


class ProdutoController extends Controller
{
    public function getProduto(){
        return view('cadastroprodutos');
       }      
}