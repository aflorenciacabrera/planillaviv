@extends('layouts.app')

@section('content')

{{--  --}}
<script>
    function cambio(sel)
            {
                // alert(sel.value);
                 window.location = "{{route('planilla')}}"+"/ver/"+sel.value    

            }
</script>
{{--Muestra de planillas por filtro de id datos --}}
<div class="container">
    <div class="row">
        <div class="col-12 offset-lg-0">
            <div class="card">
                <div class="card-header d-flex justify-content-center ">

                     <h4 >Planilla de listado de viviendas 2019</h4>

                           <div class="offset-lg-2">
                               <div class="form-group row">
                                    <div class="col-4">
                                    <label for="planilla"><h4> Planilla: </h4></label>
                                    </div>
                                    <div class="col-4">
                                    <select name="planilla" id="planilla" class="form-control" onchange="cambio(this);">
                                        @foreach ($filtro as $datos)
                                            <option value="{{$datos->id}}"
                                                @if($datos->id == $filtro_id)
                                                    selected
                                                @endif

                                                >{{$datos->id}}</option>
                                         @endforeach
                                        </select>
                                    </div>
                                     <div class="col-4">
                                    <a   href="{{url('/planilla/datos')}}" class="btn btn-primary"  role ="button" > Nueva Planilla </a>
                                     </div>
                                </div>
                            </div>
                </div>
        @if($dato->count())
                 @foreach ($dato as $datos)
                <div class="card-body" >

                 <div class="container">
                <div class="row">
                <table class="table table-bordered table-sm">
                <thead>
                {{-- <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                </tr> --}}
                </thead>
                <tbody>

                <tr>
                    <td><label for="area">Área: </label> {{$datos->area}}</td>
                    <td><label for="fraccion">Fracción: </label> {{$datos->fraccion}}</td>
                    <td><label for="radio">Radio: </label> {{$datos->radio}}</td>
                    <td><label for="sub_grupo">Subgrupo: </label> {{$datos->sub_grupo}}</td>

                </tr>

                </tbody>
            </table>
            <div class="pull-right">
             <a   href="{{url('/planilla/viviendas/'.$datos->id)}}" class="btn btn-info "  role ="button" > Agregar viviendas </a>

             </div>

	        </div>
        </div>


        <div class= "row well-sm well-md" >
        <div class="table-responsive text-center ">
             <br>
            <table class="table table-bordered table-hover table-sm" id="tab_logic">

               {{-- <table id="mytable" class="table table-bordred table-striped">                  --}}
                   <thead>
                        <th>Manz</th>
                        <th>Lado</th>
                         <th>N Viv. lado</th>
                        {{-- direccion --}}
                        <th>Código</th>
                        <th >Calle</th>
                        <th>N° Catast.</th>
                        {{-- ------ --}}
                        <th>Manzana Interna o Sector</th>
                        <th>Edificio Mono-Block Tira Etc</th>
                        <th>Entrada o Escalera</th>
                        <th>Piso</th>
                        <th>Casa o Lote</th>
                        <th>Depto o Hab</th>
                        <th>Tipo de Viv </th>
                        <th>Descripción </th>

                    </thead>

                        <tbody>

                         @foreach($vivienda as $viviendas)
                         @if ($datos->id == $viviendas->dato_id )
                            <tr>
                                <td>{{$viviendas->manz}}</td>
                                <td>{{$viviendas->lado}}</td>
                                <td>{{$viviendas->n_viv_listado}}</td>
                                <td>{{$viviendas->codigo}}</td>
                                <td>{{$viviendas->calle}}</td>
                                <td>{{$viviendas->n_catast}}</td>
                                <td>{{$viviendas->manz_int_sector}}</td>
                                <td>{{$viviendas->edifi_mono_tira}}</td>
                                <td>{{$viviendas->entrada_esca}}</td>
                                <td>{{$viviendas->piso}}</td>
                                <td>{{$viviendas->casa_lote}}</td>
                                <td>{{$viviendas->dpto_hab}}</td>
                                <td>{{$viviendas->tipo_viv}}</td>
                                <td>{{$viviendas->descripcion}}</td>
                            </tr>
                             @endif
                         @endforeach
                        </tbody>
                </table>
                    {{-- <div class="d-flex  justify-content-center">
                      {!!$vivienda->links()!!}
                    </div> --}}

        </div>

        <div class="container">
                <div class="row">
                    <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Listador</th>
                    <th>Supervisor</th>
                    <th>Ingresador</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td><label for="manz">Apellido y Nombre:</label>  {{$datos->apeynom_listador}}</td>
                    <td><label for="manz">Apellido y Nombre:</label> {{$datos->apeynom_supervisor}} </td>
                    <td><label for="manz">Apellido y Nombre:</label> {{$datos->apeynom_ingresador}}  </td>
                </tr>
                <tr>
                <td><label for="lado">Fecha:</label> {{$datos->fecha_list}}</td>
                    <td><label for="lado">Fecha:</label> {{$datos->fecha_sup}} </td>
                    <td><label for="lado">Fecha:</label> {{$datos->fecha_ing}}</td>
                </tr>
                </tbody>
            </table>
	        </div>
        </div>
        @endforeach
                    </div>
            </div>

        </div>

    </div>
</div>
@else

    <tr>
        <div class="text-center"><h3>No hay registrados !!</h3></div>
    </tr>
    {{-- <div class="col-4 pull-right">
        <a   href="{{url('/planilla/datos')}}" class="btn btn-primary"  role ="button" > Nueva Planilla </a>
    </div> --}}
    @endif
@endsection
