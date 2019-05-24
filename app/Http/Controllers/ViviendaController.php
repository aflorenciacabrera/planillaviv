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
        
        return redirect(url('/planilla/ver/viviendas/'.$v->dato_id));
    }
    public function ver($id)
    {
        $dato = dato::where('id', $id)->get();
        $vivienda = vivienda::all();
        return view('planilla.editar_vivienda')->with('vivienda', $vivienda)->with('dato', $dato)->with('dato_id',$id);
    }

    public function editar(Request $request, $id)
    {
        $viv = dato::findOrFail($id);
        $viv->dato_id = $request->dato_id;
        $viv->manz = $request->manz;
        $viv->lado = $request->lado++;
        $viv->n_viv_listado = $request->n_viv_listado;
        $viv->codigo = $request->codigo;
        $viv->calle = $request->calle;
        $viv->n_catast = $request->n_catast;
        $viv->manz_int_sector = $request->manz_int_sector;
        $viv->edifi_mono_tira = $request->edifi_mono_tira;
        $viv->entrada_esca = $request->entrada_esca;
        $viv->piso = $request->piso;
        $viv->casa_lote = $request->casa_lote;
        $viv->dpto_hab = $request->dpto_hab;
        $viv->tipo_viv = $request->tipo_viv;
        $viv->descripcion = $request->descripcion;

        $viv->save();
        return redirect(url('planilla/ver/viviendas/'.$viv->dato_id))->with('status', ' VIVIVENDAS ACTUALIZADOS');
    }
  
}
