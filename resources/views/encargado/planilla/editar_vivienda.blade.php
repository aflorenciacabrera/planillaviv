@extends('layouts.app')

@section('content')

   
       
<div class="card">
    <div class="card-header">Modificar Lista de Viviendas de la planilla 
    </div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
 

 <form method="POST" action="{{url('planilla/editar/viviendas/'.$dato_id)}}" >
    {{ csrf_field() }}
  {{ method_field('PUT') }}    
  
      <table class="table table-bordered table-hover table-sm" >
      {{-- <table class="table table-bordered table-hover table-sm" > --}}
        <thead>
          <tr class="text-center">
           <th>N°</th>
           <th>Manz</th>
           <th>Lado</th>
           <th>N de Viv.</th>
           <th>Código</th>
           <th >Calle</th>
           <th>N° Catast</th>
           <th>Manz Interna o Sector</th>
           <th>Edificio, Mono-Block, Tira, Etc.</th>
           <th>Entrada/ Escalera</th>
           <th>Piso</th>
           <th>Casa o Lote</th>
           <th>Dpto o Hab.</th>
           <th>Tipo de Viv.</th>
           <th>Descripción</th>
         </tr>
        </thead>
       @foreach($vivienda as $viviendas)
        @if ($dato_id == $viviendas->dato_id )
        <tbody>
        <tr class="text-center" >
          <td>{{$viviendas->id}}</td>
          <td><input type="number" class="form-control" name="manz" id="manz" step="1" min="0" max="10000" value="{{$viviendas->manz}}"></td>  
          <td><input  type="number" class="form-control" name="lado" id="lado" step="1" min="0" max="10000" value="{{$viviendas->lado}}"></td> 
          <td> <input type="number" class="form-control" name="n_viv_listado" id="n_viv_listado" step="1" min="0" max="10000" value="{{$viviendas->n_viv_listado}}"></td> 
          <td><input type="number" class="form-control" name="codigo" id="codigo" step="1" min="0" max="999999" value="{{$viviendas->codigo}}"></td>
          <td> <input type="text" class="form-control" name="calle" id="calle" value="{{$viviendas->calle}}" pattern="[A-Z 0-9]+" title="Texto con letras mayusculas A-Z y 0-9"></td>
          <td><input type="text" class="form-control" name="n_catast" id="n_catast" pattern="[S/N 0-9]+" title="Ingreso S/N o 0-9" value="{{$viviendas->n_catast}}" ></td>
          <td><input type="text" class="form-control" name="manz_int_sector" id="manz_int_sector" value="{{$viviendas->manz_int_sector}}"  pattern="[A-Z 0-9]+" title="Texto con letras mayusculas A-Z y 0-9"></td>
          <td> <input type="text" class="form-control" name="edifi_mono_tira" id="edifi_mono_tira" value="{{$viviendas->edifi_mono_tira}}"  pattern="[A-Z 0-9]+" title="Texto con letras mayusculas A-Z y 0-9"></td>
          <td><input type="text" class="form-control" name="entrada_esca" id="entrada_esca" value="{{$viviendas->entrada_esca}}" pattern="[A-Z 0-9]+" title="Texto con letras mayusculas A-Z y 0-9"></td>
          <td> <input type="number" class="form-control" name="piso" id="piso" step="1" min="0" max="10000" value="{{$viviendas->piso}}" ></td>
          <td> <input type="text" class="form-control" name="casa_lote" id="casa_lote" value="{{$viviendas->casa_lote}}"  pattern="[A-Z 0-9]+" title="Texto con letras mayusculas A-Z y 0-9"></td>
          <td> <input type="text" class="form-control" name="dpto_hab" id="dpto_hab" value="{{$viviendas->dpto_hab}}"  pattern="[A-Z 0-9]+" title="Texto con letras mayusculas A-Z y 0-9"></td>
          <td> <input type="text" class="form-control" name="tipo_viv" id="tipo_viv" value="{{$viviendas->tipo_viv}}" pattern="[A-Z 0-9]+" title="Texto con letras mayusculas A-Z y 0-9"></td>
          <td><input type="text" class="form-control"name="descripcion" id="descripcion" value="{{$viviendas->tipo_viv}}"></td>
        </tr>
        @endif
        @endforeach
        </tbody>
      </table>

   
    <div class=" text-muted d-flex justify-content-end">
      <div class="col-sm-11 input-column">
        <a href="{{ url('/planilla/verificar') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-danger  ">CANCELAR</a> 
      </div>
        <button type="submit" class="btn  btn-info  ">ACTUALIZAR</button> 
    </div>
 </form>

</div>
     
@endsection