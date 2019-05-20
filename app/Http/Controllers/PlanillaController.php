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
        $vivienda = vivienda::orderBy('id', 'asc')->paginate(10);
        
        return view( 'planilla.planilla')->with('dato', $dato)->with('vivienda', $vivienda);  
        
    }
}
