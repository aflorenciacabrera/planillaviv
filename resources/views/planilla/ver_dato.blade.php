@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">
                <div class="card-header"> Datos de la planilla </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 
 <div class="container">
    <div class="row clearfix">
    <div class="col-md-12 column">
      <table class="table table-bordered table-hover" >
        <thead>
          <tr class="text-center">
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

      </table>
    </div>
  </div>
</div>
 
 <div class=" text-muted d-flex justify-content-end">
   <div class="col-sm-9 input-column">
      <a   href="{{url('/planilla/verificar')}}" class="btn btn-primary"  role ="button" > VOLVER</a>   
    {{-- <a href="{{ url('/planilla/verificar') }}"  role ="button"  class="btn  btn-primary  ">Volver</a>  --}}
                         </div>
    <a href="{{ url('planilla/editar/datos/'.$datos->id) }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-info mr-1 "><i class="fa fa-edit"></i>EDITAR</a> 
    <td><a href="#delete{{ $datos->id }}"  data-original-title="Remove this user"  title="Eliminar" class="btn  btn-danger " data-toggle="modal" role ="button" >   <i class="fa fa-trash-o"></i> ELIMINAR</a></td>
     {{-- <a href="{{ url('planilla/eliminar/datos/'.$datos->id) }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-danger  ">ELIMINAR</a>  --}}
    {{-- <button type="submit" class="btn  btn-info  ">ACTUALIZAR</button>  --}}
 </div>
  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ***********************Modal de Delete********************************* --}}
   @foreach($dato as $datos)
                <div class="modal fade" id="delete{{ $datos->id }}" tabindex="-1" role="dialog" aria-labelledby="eliminar" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title custom_align" id="Heading">Eliminar Edificio</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-times" aria-hidden="true"></span></button>
                        </div>
                        <div class="modal-body">
                        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Está seguro que desea Eliminar esta PLANILLA?</div> 
                        </div>
                        <div class="modal-footer ">
                        <form method="post" action="{{ url('planilla/eliminar/datos/'.$datos->id) }}">
                                                                        {{ csrf_field() }}
                                                                        {{ method_field('DELETE') }}
                                                                     @csrf
                                                   
                                                
                            <button  class="btn btn-danger"  type="submit"><span class="fa fa-ok-sign"></span>Si</button></form> 
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span> No</button>
                        </div>
                    </div>
                    <!-- /.modal-content --> 
                </div>
                    <!-- /.modal-dialog --> 
                </div>
 @endforeach
@endsection