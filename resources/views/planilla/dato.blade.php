@extends('layouts.app')

@section('content')

{{-- Alta de datos --}}
<div class="container">
    <div class="row">
        <div class="col-12 offset-lg-0">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    <h4 >Planilla de listado de viviendas 2019</h4>
                    
                </div>
                 
            <form method="POST" action="{{url('planilla/datos')}}">
                <div class="card-body" >
                        @csrf
                    <div class="offset-lg-1">
                        {{-- <div class="form-group row">
                            <div class="col-2">
                                <label for="provincia">Provincia:</label>      
                             </div> 
                            <div class="col-9">
                                <input type="text" class="form-control" name="provincia" id="provincia" placeholder="     /" required>
                            </div>               
                        </div>

                        <div class="form-group row">
                            <div class="col-2">
                                <label for="aglomerado">Aglomerado:</label>      
                            </div> 
                            <div class="col-9">
                                <input type="text" class="form-control" name="aglomerado" id="aglomerado" placeholder="     /" required>
                            </div>                                               
                        </div>

                        <div class="form-group row">
                            <div class="col-2">
                                <label for="departamento">Departamento:</label>      
                             </div> 
                            <div class="col-9">
                                <input type="text" class="form-control" name="departamento" id="departamento" placeholder="    /" required>
                            </div>                                               
                        </div>

                        <div class="form-group row">
                            <div class="col-2">
                                <label for="localidad">Localidad:</label>      
                             </div> 
                            <div class="col-9">
                                <input type="text" class="form-control" name="localidad" id="localidad" placeholder="    /" required>
                            </div>                                               
                        </div> --}}
                         <div class="form-group row">
                            <div class="col-1">
                                <label for="area">Área:</label>
                            </div>
                            <div class="col-2">
                                <input type="number" class="form-control" name="area" id="area" step="1" min="0" max="10000" placeholder="" required>
                                 {{-- <input class="form-control"  type="number"  name="personal" step="1" min="0" max="1000000" placeholder="N° ." required/> --}}
                            </div>
                            <div class="col-1">
                                <label for="fraccion">Fracción:</label>
                            </div>
                            <div class="col-2">
                                <input type="number" class="form-control" name="fraccion" id="fraccion" step="1" min="0" max="10000" placeholder="" required>
                            </div>
                            <div class="col-1">
                                <label for="radio">Radio:</label>
                            </div>
                            <div class="col-2">
                                <input type="number" class="form-control" name="radio" id="radio" step="1" min="0" max="10000" placeholder="" required>
                            </div>
                            {{-- ------------------------- --}}
                            <div class="col-1">
                                <label for="gr_actual">Subgrupo:</label>
                            </div>
                            <div class="col-2">
                                <input type="number" class="form-control" name="sub_grupo" id="sub_grupo" step="1" min="0" max="10000" placeholder="" required>
                            </div>
                        </div>
                        {{-- -------------------Listador------------------------ --}}
                        <hr>
                        <label  for="listador"><h3>Listador</h3> </label>   
                       
                        <div class="form-group row">  
                            <div class="col-6">
                                <label for="apeynom_listador">Apellido y Nombre :</label>   
                                <input type="text" class="form-control" name="apeynom_listador" id="apeynom_listador" placeholder="" required pattern="[A-Z]+" title="Texto con letras mayusculas A-Z ">
                            </div>  
                            <div class="col-3">
                                 <label for="fecha_list">Fecha:</label>
                                <input type="date" class="form-control" name="fecha_list" id="fecha_list" placeholder="AAAA/MM/DD" required>
                            </div>    
                        </div>
                         <hr>
                        
                            {{-------------- Supervisor ------------------}}
                         <label  for="listador"><h3>Supervisor</h3> </label>  
                         <div class="form-group row">   
                             <div class="col-6">
                                <label for="apeynom_supervisor">Apellido y Nombre :</label>   
                                <input type="text" class="form-control" name="apeynom_supervisor" id="apeynom_supervisor" placeholder="" required pattern="[A-Z]+" title="Texto con letras mayusculas A-Z ">
                            </div>
                             <div class="col-3">
                                <label for="fecha_sup">Fecha:</label>
                                <input type="date" class="form-control" name="fecha_sup" id="fecha_sup" placeholder="AAAA/MM/DD" required>
                            </div>                                                     
                        </div>
                        <hr>
                         {{-------------- Supervisor ------------------}}
                        <label  for="ingresador"><h3>Ingresador</h3> </label>  
                        <div class="form-group row"> 
                                 
                             <div class="col-6">
                                <label for="apeynom_ingresador">Apellido y Nombre :</label>   {{ Auth::user()->name }}
                                <input type="hidden"  value=" {{ Auth::user()->name }}" class="form-control" name="apeynom_ingresador" id="apeynom_ingresador" placeholder="" >
                            </div>  
                            <div class="col-3">
                                <label for="fecha_ing">Fecha:</label>  
                                <script>
                                    var meses = new Array ("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE");
                                    var f=new Date();
                                    document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                                </script> 
                                  {{-- <input type="hidden" value="" class="form-control" name="fecha_ing" id="fecha_ing" placeholder="AAAA/MM/DD" required> --}}

                                 <input type="hidden" name="fecha_ing" step="1" min="2013-01-01" max="2013-12-31" value="<?php echo date("Y-m-d");?>">
                            </div>                                                                    
                        </div>                                                               
                    </div>
                </div>     
                 <div class="card-footer text-muted d-flex justify-content-end">
                        <div class="col-sm-11 input-column">
                          <a href="{{ url('/') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-light active ">Cancelar</a>  </div>
                        {{-- <a class="btn btn-light mr-2" type="reset">Cancelar</a> --}}
                        <button class="btn btn-primary" type="submit">Siguiente</button>
                    </div>
                </form>
            </div> 
        </div> 
    </div> 
</div> 
<script src="{{ asset('js/jquery.min.js') }} "></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){
 
             // script ingresador
   $('#ingresador_sub').change(function(){

                if($(this).val() == '1'){
                    $('#codigo_sub_ing').removeAttr("disabled")
                    $('#apeynom_sub_ing').removeAttr("disabled")
                    $('#fecha_ingreso_sub').removeAttr("disabled")
                }else{
                    $('#codigo_sub_ing').attr("disabled",'true').attr('name','codigo_sub')
                    $('#apeynom_sub_ing').attr("disabled",'true').attr('name','apeynom_sub_ing')
                    $('#fecha_ingreso_sub').attr("disabled",'true').attr('name','fecha_ingreso_sub')
                  $(this).attr('name','sub_ingresador')
                }
            })
              $('#codigo_sub_ing').change(function(){
                  $('#ingresador_sub').attr('name','codigo_sub_ing')
                  $(this).attr('name','sub_ingresador')
             })
             $('#apeynom_sub_ing').change(function(){
                  $('#ingresador_sub').attr('name','apeynom_sub_ing')
                  $(this).attr('name','sub_ingresador')
             })
             $('#fecha_ingreso_sub').change(function(){
                  $('#ingresador_sub').attr('name','fecha_ingreso_sub')
                  $(this).attr('name','sub_ingresador')
             })

             // script listador
   $('#campo_sub').change(function(){

                if($(this).val() == '1'){
                    $('#codigo_sub_lis').removeAttr("disabled")
                    $('#apeynom_sub_lis').removeAttr("disabled")
                    $('#fecha_campo_sub').removeAttr("disabled")
                }else{
                    $('#codigo_sub_lis').attr("disabled",'true').attr('name','codigo_sub_lis')
                    $('#apeynom_sub_lis').attr("disabled",'true').attr('name','apeynom_sub_lis')
                    $('#fecha_campo_sub').attr("disabled",'true').attr('name','fecha_campo_sub')
                  $(this).attr('name','sub_campo')
                }
            })
              $('#codigo_sub_lis').change(function(){
                  $('#campo_sub').attr('name','codigo_sub_lis')
                  $(this).attr('name','sub_campo')
             })
             $('#apeynom_sub_lis').change(function(){
                  $('#campo_sub').attr('name','apeynom_sub_lis')
                  $(this).attr('name','sub_campo')
             })
             $('#fecha_campo_sub').change(function(){
                  $('#campo_sub').attr('name','fecha_campo_sub')
                  $(this).attr('name','sub_campo')
             })

     })
</script>

@endsection