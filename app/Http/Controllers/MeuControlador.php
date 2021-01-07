<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function produtos(){
        return "<h1>TEY</h1>";
    }

    public function getNome(){
        return "<h1>Wesley</h1>";
    }

    public function getIdade(){
        return "23";
    }

    public function multiplicar($n1, $n2){
        return $n1 * $n2;
    }
}
