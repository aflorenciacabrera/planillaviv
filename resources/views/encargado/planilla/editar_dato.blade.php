@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">
                <div class="card-header">Lista de datos </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        
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
            <input type="number" class="form-control" name="area" id="area" step="1" min="0" max="10000"  value="{{$datos->area}}">
            </td>
            <td>
            <input type="number" class="form-control" name="fraccion" id="fraccion" step="1" min="0" max="10000" value="{{$datos->fraccion}}">
            </td>
             <td>
            <input type="number" class="form-control" name="radio" id="radio" step="1" min="0" max="10000" value="{{$datos->radio}}">
            </td>
            <td>
            <input type="number" class="form-control" name="sub_grupo" id="sub_grupo" step="1" min="0" max="10000" value="{{$datos->sub_grupo}}">
            </td>
            <td>
              <input type="text" class="form-control" name="apeynom_listador" id="apeynom_listador" value="{{$datos->apeynom_listador}}" pattern="[A-Z ]+" title="Texto con letras mayusculas A-Z ">
            </td>
            <td>
               <input type="date" class="form-control" name="fecha_list" id="fecha_list" value="{{$datos->fecha_list}}">
            </td>
            <td>
              <input type="text" class="form-control" name="apeynom_supervisor" id="apeynom_supervisor" value="{{$datos->apeynom_supervisor}}" pattern="[A-Z ]+" title="Texto con letras mayusculas A-Z ">
            </td>
            <td>
              <input type="date" class="form-control" name="fecha_sup" id="fecha_sup" value="{{$datos->fecha_sup}}">
            </td>
            
          </tr>
        </tbody>
       
         @endforeach
      </table>
    </div>
  </div>
 
</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection