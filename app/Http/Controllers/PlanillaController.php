<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dato;
use App\vivienda;
class PlanillaController extends Controller
{
    //
    public function planilla()
    {
        $dato = dato::all();
        $vivienda = vivienda::all();
        
        return view( 'planilla.planilla')->with('dato', $dato)->with('vivienda', $vivienda);  
        
    }
}
