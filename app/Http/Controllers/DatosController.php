<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\dato;
use App\vivienda;
class DatosController extends Controller
{
    //
    public function datos()
    {
       
        return view( 'planilla.dato');
    }

    public function crear(Request $request){
       
        $d = new dato;

        $d->area = $request->area;
        $d->fraccion = $request->fraccion;
        $d->radio = $request->radio;
        $d->sub_grupo = $request->sub_grupo;
        
        // listador
        $d->apeynom_listador = $request->apeynom_listador;
        $d->fecha_list = $request->fecha_list;

        // Supervisor
        $d->apeynom_supervisor = $request->apeynom_supervisor;
        $d->fecha_sup = $request->fecha_sup;

        // Ingresador
        $d->apeynom_ingresador = $request->apeynom_ingresador;
        $d->fecha_ing = $request->fecha_ing;

        $d->save();
      
       
        return redirect(url('planilla/viviendas/'.$d->id ));
    }

    public function ver($id)
    {
        $dato = dato::where('id', $id)->get();
        //$dato = dato::all();
       
        return view('encargado.planilla.editar_dato')->with('dato', $dato)->with('dato_id', $id);
    }

    public function editar(Request $request, $id){
        $dat = dato::findOrFail($id);

        $dat->area = $request->area;
        $dat->fraccion = $request->fraccion;
        $dat->radio = $request->radio;
        $dat->sub_grupo = $request->sub_grupo;

        // listador
        $dat->apeynom_listador = $request->apeynom_listador;
        $dat->fecha_list = $request->fecha_list;

        // Supervisor
        $dat->apeynom_supervisor = $request->apeynom_supervisor;
        $dat->fecha_sup = $request->fecha_sup;

        $dat->save();
        return redirect(url( 'encargado/planilla/ver/datos/'.$id))->with('status', ' DATOS ACTUALIZADOS');
    }
}
