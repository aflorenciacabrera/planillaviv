@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 offset-lg-0">
            <div class="card">
                <div class="card-header d-flex justify-content-center ">
    @foreach ($dato as $datos)
                     <h4 > Listado de viviendas 2019</h4> 
                     <div class="d-flex justify-content-right offset-lg-4 ">
                 <h2>Planilla N° : {{$datos->id}}</h2> </div>
                </div>
                
                <div class="card-body" >

                 <div class="container">
                <div class="row">
     
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
                        <th>Nº</th>
                        <th>Manz</th>
                        <th>Lado</th>
                         <th>N° Viv. lado</th>
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
                        <th>Editar</th>
                        <th>Eliminar</th>

                    </thead>

                        <tbody>

                         @foreach($vivienda as $viviendas)
                         @if ($datos->id == $viviendas->dato_id )
                            <tr>
                                <td>{{$viviendas->id}}</td>
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
                                <td> <a   href="{{url('planilla/editar/vivienda/'.$viviendas->id)}}" class="btn btn-primary"  role ="button" ><i class="fa fa-edit"></i></a> </td>
                                <td> <a   href="{{url('#')}}" class="btn btn-danger"  role ="button" > <i class="fa fa-trash-o"></i></a> </td>
                            </tr>
                         
                               @endif
                         @endforeach
                        </tbody>
                </table>             
  @endforeach
        </div>
                    </div>
            </div>

        </div>

    </div>
</div>
</div>

@endsection
