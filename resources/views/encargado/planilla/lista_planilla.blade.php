@extends('layouts.app')

@section('content')

<style>
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lista de Planillas </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        
 <div class="container">
    <div class="row ">
    <div class="col-md-12 column table-responsive">
      <table class="table  table-bordered  " width="100%">
        
        <thead class="bg-light">
          <tr >
            <th class="text-center">
              N°
            </th>
            <th class="text-center">
             Usuario
            </th>
            <th class="text-center">
             Fecha de carga
            </th>
            <th class="text-center">
              Datos
            </th>
            <th class="text-center">
              Viviendas
            </th>
          </tr>
        </thead>
        @foreach ($dato as $datos)
        <tbody class ="text-center">
        <tr>
            <td>
              {{$datos->id}}
            </td>
            <td> 
              {{$datos->apeynom_ingresador}}          
            </td>
            <td> 
               {{$datos->fecha_ing}}        
            </td>
           
            <td>  
              <a   href="{{url('encargado/planilla/ver/datos/'.$datos->id)}}" class="btn btn-primary"  role ="button" > Ver</a>    
            </td>
            <td>
              <a   href="{{url('encargado/planilla/ver/viviendas')}}" class="btn btn-info"  role ="button" >ver </a>
            </td>
          </tr>
        </tbody>
         @endforeach
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