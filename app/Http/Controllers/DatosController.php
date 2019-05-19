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
}
