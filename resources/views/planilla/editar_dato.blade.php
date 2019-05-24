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
 <form method="POST" action="{{url('planilla/editar/datos/'.$dato->id)}}" >
    {{ csrf_field() }}
  {{ method_field('PUT') }}    
        @csrf
 <div class="container">
    <div class="row clearfix">
    <div class="col-md-12 column">
   
        
        <div class="offset-lg-1">
                       
                         <div class="form-group row">
                            <div class="col-1">
                                <label for="area">Área:</label>
                            </div>
                            <div class="col-2">
                            <input type="number" class="form-control" name="area" id="area" step="1" min="0" max="10000" value="{{$dato->area}}">
                               
                            </div>
                            <div class="col-1">
                                <label for="fraccion">Fracción:</label>
                            </div>
                            <div class="col-2">
                                <input type="number" class="form-control" name="fraccion" id="fraccion" step="1" min="0" max="10000" value="{{$dato->fraccion}}">
                            </div>
                            <div class="col-1">
                                <label for="radio">Radio:</label>
                            </div>
                            <div class="col-2">
                                <input type="number" class="form-control" name="radio" id="radio" step="1" min="0" max="10000" value="{{$dato->radio}}">
                            </div>
                            {{-- ------------------------- --}}
                            <div class="col-1">
                                <label for="gr_actual">Subgrupo:</label>
                            </div>
                            <div class="col-2">
                                <input type="number" class="form-control" name="sub_grupo" id="sub_grupo" step="1" min="0" max="10000" value="{{$dato->sub_grupo}}">
                            </div>
                        </div>
                        {{-- -------------------Listador------------------------ --}}
                        <hr>
                        <label  for="listador"><h3>Listador</h3> </label>   
                       
                        <div class="form-group row">  
                            <div class="col-6">
                                <label for="apeynom_listador">Apellido y Nombre :</label>   
                                <input type="text" class="form-control" name="apeynom_listador" id="apeynom_listador" value="{{$dato->apeynom_listador}}" pattern="[A-Z ]+" title="Texto con letras mayusculas A-Z ">
                            </div>  
                            <div class="col-3">
                                 <label for="fecha_list">Fecha:</label>
                                <input type="date" class="form-control" name="fecha_list" id="fecha_list" value="{{$dato->fecha_list}}">
                            </div>    
                        </div>
                         <hr>
                        
                            {{-------------- Supervisor ------------------}}
                         <label  for="listador"><h3>Supervisor</h3> </label>  
                         <div class="form-group row">   
                             <div class="col-6">
                                <label for="apeynom_supervisor">Apellido y Nombre :</label>   
                                <input type="text" class="form-control" name="apeynom_supervisor" id="apeynom_supervisor" value="{{$dato->apeynom_supervisor}}" pattern="[A-Z ]+" title="Texto con letras mayusculas A-Z ">
                            </div>
                             <div class="col-3">
                                <label for="fecha_sup">Fecha:</label>
                                <input type="date" class="form-control" name="fecha_sup" id="fecha_sup" value="{{$dato->fecha_sup}}">
                            </div>                                                     
                        </div>
                        <hr>                                                            
                    </div>
        
        
    </div>
  </div>
</div>
                <div class="card-footer  text-muted d-flex justify-content-end ">
                  
                        <div class="col-sm-10 input-column">
                          <a href="{{ url('/planilla/ver/datos/'. $dato->id) }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-danger  ">CANCELAR</a> 
                         </div>
                      
                           <button class="btn btn-info mr-1" type="submit">ACTUALIZAR</button>
                   
                    </div>

 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection