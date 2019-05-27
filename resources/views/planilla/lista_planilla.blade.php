@extends('layouts.app')
@section('content')
<style>
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> 

                            <div class="offset-lg-0">
                               <div class="form-group row">
                                 <h3> Lista de Planillas </h3> 
                                     <div class="offset-lg-8 ">
                                    <a   href="{{url('/planilla/datos')}}" class="btn btn-primary"  role ="button" > Nueva Planilla </a>
                                     </div>
                                </div>
                            </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

 <div class="container">
    <div class="row ">
    <div class="col-md-12 column table-responsive">
      <table class="table  table-bordered table-sm  " width="100%">
        
        <thead class="bg-light">
          <tr class="text-center" >
            @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('encargado'))
            <th>N°</th>
             <th>Usuario</th>
             
            <th >
              Área
            </th>
            <th >
              Fracción
            </th>
            <th >
              Radio
            </th>
            <th>
              Subgrupo
            </th>
            <th class="text-center">
             Fecha de carga
            </th>
            <th class="text-center">
              Planilla
            </th>
            <th class="text-center">
              Viviendas
            </th>
            <th class="text-center">
              Nueva Viviendas
            </th>
            @elseif(Auth::user()->hasRole('ingresador'))
             <th >
              Área
            </th>
            <th >
              Fracción
            </th>
            <th >
              Radio
            </th>
            <th>
              Subgrupo
            </th>
            <th class="text-center">
             Fecha de carga
            </th>
            <th class="text-center">
              Planilla
            </th>
            <th class="text-center">
              Viviendas
            </th>
            <th class="text-center">
              Nueva Viviendas
            </th>
          </tr>
          @endif
        </thead>
       @if ($dato->count() )
        @foreach ($dato as $datos)
          
        <tbody class ="text-center">
        <tr>
           @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('encargado'))
             <td>{{$datos->id}}</td>
              <td>{{$datos->apeynom_ingresador}}</td>
            
             <td>
           {{$datos->area}}"
            </td>
            <td>
            {{$datos->fraccion}}"
            </td>
             <td>
           {{$datos->radio}}"
            </td>
            <td>
           {{$datos->sub_grupo}}
            </td>
            <td> 
              {{date('d-m-Y', strtotime($datos->fecha_ing))}}       
            </td>
            <td>  
              <a   href="{{url('/planilla/ver/datos/'.$datos->id)}}" class="btn btn-primary"  role ="button" > Ver</a>   
            </td>
            <td>
              <a   href="{{url('/planilla/ver/viviendas/'.$datos->id)}}" class="btn btn-info"  role ="button" >Ver </a>
            </td>
            <td>
              <a   href="{{url('/planilla/viviendas/'.$datos->id)}}" class="btn btn-info"  role ="button" >Nueva </a>
            </td>
             @elseif(Auth::user()->hasRole('ingresador'))
             <td>
           {{$datos->area}}"
            </td>
            <td>
            {{$datos->fraccion}}"
            </td>
             <td>
           {{$datos->radio}}"
            </td>
            <td>
           {{$datos->sub_grupo}}
            </td>
            <td> 
              {{date('d-m-Y', strtotime($datos->fecha_ing))}}       
            </td>
            <td>  
              <a   href="{{url('/planilla/ver/datos/'.$datos->id)}}" class="btn btn-primary"  role ="button" > Ver</a>   
            </td>
            <td>
              <a   href="{{url('/planilla/ver/viviendas/'.$datos->id)}}" class="btn btn-info"  role ="button" >Ver </a>
            </td>
            <td>
              <a   href="{{url('/planilla/viviendas/'.$datos->id)}}" class="btn btn-info"  role ="button" >Nueva </a>
            </td>
            @endif
         @endforeach
         @else 
         <td colspan="8" class="text-center">
           NO HAY PLANILLAS CARGADAS POR ESTE USUARIO
         </td>
         @endif
        </tr>
      </table>
    </div>
  </div>
  {{-- <a id="add_row" class="btn btn-default pull-left">Add Row</a>
  <a id='delete_row' class="pull-right btn btn-default">Delete Row</a> --}}
</div>

                </div>
            </div>
        </div>
    </div>
</div>  
@endsection
