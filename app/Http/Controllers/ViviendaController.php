<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vivienda;
use App\dato;

class ViviendaController extends Controller
{
    //
    public function viviendas($id)
    {
        return view( 'planilla.vivienda')->with('dato',$id);
    }

    public function crear(Request $request)
    {
        $v = new vivienda;
        $v->dato_id = $request->dato_id;
        $v->manz = $request->manz;
        $v->lado = $request->lado++;
        $v->n_viv_listado = $request->n_viv_listado; 
        $v->codigo = $request->codigo;
        $v->calle = $request->calle;
        $v->n_catast = $request->n_catast;
        $v->manz_int_sector = $request->manz_int_sector;
        $v->edifi_mono_tira = $request->edifi_mono_tira;
        $v->entrada_esca = $request->entrada_esca;
        $v->piso = $request->piso;
        $v->casa_lote = $request->casa_lote;
        $v->dpto_hab = $request->dpto_hab;
        $v->tipo_viv = $request->tipo_viv;
        $v->descripcion = $request->descripcion;
     
        $v->save();

        return redirect(url('planilla/viviendas/'.$v->dato_id));
    }
    public function ver()
    {
        $vivienda = vivienda::all();
        return view('encargado.planilla.editar_vivienda')->with('vivienda', $vivienda);
    }
}
