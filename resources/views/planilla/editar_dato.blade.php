@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">
                <div class="card-header">Modificar Datos de la planilla </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 <form method="POST" action="{{url('planilla/editar/datos/'.$dato_id)}}" >
    {{ csrf_field() }}
  {{ method_field('PUT') }}    
        @csrf
 <div class="container">
    <div class="row clearfix">
    <div class="col-md-13 column">
      <table class="table table-bordered table-hover" >
        <thead>
          <tr class="text-center">
            <th >
              N°
            </th>
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
             <th>
              Listador
            </th>
             <th >
                Fecha
            </th>
           <th>
              Supervisor
            </th>
           <th>
               Fecha
            </th>
         </tr>
        </thead>
         @foreach ($dato as $datos)
 
        <tbody>
        <tr class="text-center" >
            <td>
             {{$datos->id}}
            </td>
           
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
              {{$datos->apeynom_listador}}
            </td>
            <td>
               {{$datos->fecha_list}}
            </td>
            <td>
             {{$datos->apeynom_supervisor}}
            </td>
            <td>
             {{$datos->fecha_sup}}
            </td>
            
          </tr>
        </tbody>
       
         @endforeach
      </table>
    </div>
  </div>
</div>
 
 <div class=" text-muted d-flex justify-content-end">
   <div class="col-sm-11 input-column">
      <a   href="{{url('/planilla/verificar')}}" class="btn btn-primary"  role ="button" > Ver</a>   
    {{-- <a href="{{ url('/planilla/verificar') }}"  role ="button"  class="btn  btn-primary  ">Volver</a>  --}}
                         </div>
    <a href="{{ url('#') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-info mr-1 ">editar</a> 
     <a href="{{ url('#') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-danger  ">Eliminar</a> 
    {{-- <button type="submit" class="btn  btn-info  ">ACTUALIZAR</button>  --}}
 </div>
 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection