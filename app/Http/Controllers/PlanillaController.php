<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanillaController extends Controller
{
    //
    public function planilla()
    {  
        return view( 'planilla.planilla');
    }
}
