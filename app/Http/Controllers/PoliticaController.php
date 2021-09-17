<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculadora_aerea;

class PoliticaController extends Controller
{
    public function reglas(){
        return view('dashboard.politicas.reglas');
    }
    public function calculadoraAerea(){
       
       
        return view('dashboard.politicas.calculadoraAerea');
        
    }
    public function aranceles(){
        return view('dashboard.politicas.aranceles');

    }
}
