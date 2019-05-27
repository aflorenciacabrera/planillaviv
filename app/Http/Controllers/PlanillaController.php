<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dato;
use App\vivienda;
use Illuminate\Support\Facades\Auth;

class PlanillaController extends Controller
{
    //
    public function planilla()
    {
        $dato = dato::all();
        $vivienda = vivienda::orderBy('id', 'asc');

        return view( 'planilla.planilla')->with('dato', $dato)->with('vivienda', $vivienda)->with('filtro',$dato)->with('filtro_id',1);
    }
     public function planillaFiltro($id)
    {
        $dato = dato::where('id',$id)->get();
        $f = dato::all();
        $vivienda = vivienda::orderBy('id', 'asc');
        return view( 'planilla.planilla')->with('dato', $dato)->with('vivienda', $vivienda)->with('filtro',$f)->with('filtro_id',$id);

    }
    public function verificar()
    {
        if (Auth::user()->hasRole('admin')) {
            $dato = dato::all();
            return view('planilla.lista_planilla')->with('dato', $dato);
        }
        if (Auth::user()->hasRole('encargado')) {
            $dato = dato::all();
            return view('planilla.lista_planilla')->with('dato', $dato);
        }
        if (Auth::user()->hasRole('ingresador')) {
            $dato = dato::where('apeynom_ingresador', Auth::user()->name)->get();
            return view('planilla.lista_planilla')->with('dato', $dato);
        }

       

    }
    
   
    public function lista()
    {
        $dato = dato::all();
        $vivienda = vivienda::all();
        return view('planilla.listar_planilla')->with('dato', $dato)->with('vivivenda', $vivienda);
    }
}
