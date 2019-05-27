<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncargadoController extends Controller
{
    //

    public function lista()
    {
      
        return view('encargado.ingresador.lista_ingresador');
    }
}
