<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ecommerce extends Controller
{
    // cada página é uma função em um controller

    public function index() {
        // veio do model/banco de dados
        $nome_produto = 'Bota Super Descolada';

        return view('e-commerce', ['produto' => $nome_produto]);
    }
}
