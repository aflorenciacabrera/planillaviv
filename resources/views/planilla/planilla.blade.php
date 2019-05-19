@extends('layouts.app')

@section('content')

{{-- Alta de datos --}}
<div class="container">
    <div class="row">
        <div class="col-12 offset-lg-0">
            <div class="card">
                <div class="card-header d-flex justify-content-center ">
                     <h4 >Planilla de listado de viviendas 2019</h4>
                     
                           <div class="offset-lg-2">
                               <div class="form-group row"> 
                                    <div class="col-6">
                                    <label for="planilla"><h4> Planilla: </h4></label>
                                    </div>
                                    <div class="col-6">
                                    <select name="planilla" id="planilla" class="form-control">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                </div>
                 {{-- <form method="POST" action="{{url('muestra/nuevo')}}"> --}}
                <div class="card-body" >
                        {{-- @csrf --}}
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
                    <td><label for="area">Área:</label>  </td>
                    <td><label for="fraccion">Fracción:</label> </td>
                    <td><label for="radio">Radio:</label></td> 
                    <td><label for="sub_grupo">Subgrupo:</label></td> 
                </tr>
             
                </tbody>
            </table>
	        </div>
        </div>
           
                      
        <div class= "row well-sm well-md" >
        <div class="table-responsive text-center ">   
            
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
 
                    </thead>
                  
                        <tbody> 
                         {{-- @if(count()) --}}
                        {{-- @foreach($muestra as $muestras) --}}
                            <tr>
                                {{-- <td></td> --}}

                            </tr> 

                         {{-- @endforeach --}}
                        {{-- @else --}}
                        <tr>
                            <td colspan="16">No hay registrados !!</td>
                        </tr>
                    {{-- @endif - --}}
                        </tbody>
                </table>                
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
                    <td><label for="manz">Apellido y Nombre:</label>  </td>
                    <td><label for="manz">Apellido y Nombre:</label>  </td>
                    <td><label for="manz">Apellido y Nombre:</label>  </td>
                </tr>
                <tr>
                    <td><label for="lado">Fecha:</label> </td>
                    <td><label for="lado">Fecha:</label> </td>
                    <td><label for="lado">Fecha:</label> </td>
                </tr>               
                </tbody>
            </table>
	        </div>
        </div>
                    </div>       
            </div>
            
        </div> 
           
    </div>
</div>
       
@endsection