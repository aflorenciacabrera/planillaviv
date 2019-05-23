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
                 
            <form method="POST" action="{{url('planilla/viviendas')}}">
                <div class="card-body" >
                        @csrf
                    <div class="offset-lg-1">
                        <div class="form-group row"> 
                            <input  type="hidden"  value="{{$dato}}" class="form-control" name="dato_id" id="dato_id" placeholder="" >
                             <div class="col-1">
                                <label for="manz">Manz:</label>   
                            </div> 
                            <div class="col-2">
                                <input type="number" class="form-control" name="manz" id="manz" step="1" min="0" max="10000" placeholder="" required>
                            </div>  
                             <div class="col-1">
                                <label for="lado">Lado:</label>   
                            </div> 
                            <div class="col-2">
                                <input  type="number" class="form-control" name="lado" id="lado" value="" step="1" min="0" max="10000" placeholder="" required>
                            </div>                                              
                             <div class="col-2">
                                <label for="n_viv_listado">N de Viv.:</label>   
                            </div> 
                            <div class="col-2">
                                <input type="number" class="form-control" name="n_viv_listado" id="n_viv_listado" step="1" min="0" max="10000" placeholder="" required>
                            </div>  
                        </div>
                        <hr>
                        <label  for="direccion"><h3>Dirección</h3> </label>   
                         <div class="form-group row">
                           <div class="col-1">
                                <label for="codigo">Código:</label>
                            </div>
                            <div class="col-2">
                                <input type="number" class="form-control" name="codigo" id="codigo" step="1" min="0" max="999999" placeholder="" required>
                            </div>
                            <div class="col-1">
                                <label for="calle">Calle:</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" name="calle" id="calle" placeholder="" required pattern="[A-Z 0-9]+" title="Texto con letras mayusculas A-Z y 0-9">
                            </div> 
                             <div class="col-2">
                                <label for="n_catast">N° Catast:</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" name="n_catast" id="n_catast" pattern="[S/N 0-9]+" title="Ingreso S/N o 0-9" placeholder="" required >
                            </div>      
                        </div>
                        <hr>
                        <div class="form-group row"> 
                            <div class="col-3">
                                <label for="manz_int_sector">Manz Interna o Sector:</label>   
                            </div> 
                            <div class="col-2">
                                <input type="text" class="form-control" name="manz_int_sector" id="manz_int_sector" placeholder=""  pattern="[A-Z 0-9]+" title="Texto con letras mayusculas A-Z y 0-9">
                            </div>      
                             <div class="col-3">
                                <label for="edifi_mono_tira">Edificio, Mono-Block, Tira, Etc.:</label>   
                            </div> 
                            <div class="col-2">
                                <input type="text" class="form-control" name="edifi_mono_tira" id="edifi_mono_tira" placeholder=""  pattern="[A-Z 0-9]+" title="Texto con letras mayusculas A-Z y 0-9">
                            </div>                                             
                        </div>
                        <div class="form-group row"> 
                            <div class="col-1">
                                <label for="entrada_esca">Entrada/ Escalera:</label>   
                            </div> 
                            <div class="col-2">
                                <input type="text" class="form-control" name="entrada_esca" id="entrada_esca" placeholder=""  pattern="[A-Z 0-9]+" title="Texto con letras mayusculas A-Z y 0-9">
                            </div>      
                             <div class="col-1">
                                <label for="piso">Piso:</label>   
                            </div> 
                            <div class="col-2">
                                <input type="number" class="form-control" name="piso" id="piso" step="1" min="0" max="10000" placeholder="" >
                            </div> 
                            <div class="col-2">
                                <label for="casa_lote">Casa o Lote:</label>   
                            </div> 
                            <div class="col-2">
                                <input type="text" class="form-control" name="casa_lote" id="casa_lote" placeholder=""  pattern="[A-Z 0-9]+" title="Texto con letras mayusculas A-Z y 0-9">
                            </div>  
                                                                      
                        </div>
                        <div class="form-group row"> 
                            <div class="col-3">
                                <label for="dpto_hab">Dpto o Hab.:</label>   
                            </div> 
                            <div class="col-2">
                                <input type="text" class="form-control" name="dpto_hab" id="dpto_hab" placeholder=""  pattern="[A-Z 0-9]+" title="Texto con letras mayusculas A-Z y 0-9">
                            </div> 
                            <div class="col-3">
                                <label for="tipo_viv">Tipo de Viv.:</label>   
                            </div> 
                            <div class="col-2">
                                <input type="text" class="form-control" name="tipo_viv" id="tipo_viv" placeholder="" required pattern="[A-Z 0-9]+" title="Texto con letras mayusculas A-Z y 0-9">
                            </div> 
                        </div> 
                        <hr>
                          <div class="form-group row"> 
                            <div class="col-3">
                                <label for="descripcion">Descripción:</label>   
                            </div> 
                            <div class="col-7">
                               <textarea   class="form-control"name="descripcion" id="descripcion" cols="30" rows="3" ></textarea> 
                               {{-- pattern="[A-Zaz 0-9]+" title="Texto con letras  A-Z, a-z y 0-9" --}}
                            </div>          
                        </div> 
                       
                </div>
            </div>  
                    <div class="card-footer  text-muted d-flex justify-content-end ">
                  
                        <div class="col-sm-10 input-column">
                          <a href="{{ url('/planilla/ver/1') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-danger  ">CANCELAR</a> 
                         </div>
                      
                           <button class="btn btn-success mr-1" type="submit">GUARDAR</button>
                   
                           <a href="{{ url('/planilla/ver/1') }}"   role ="button"   class="btn  btn-info  ">FINALIZAR</a> 
                      
                        {{-- <a class="btn btn-light mr-2" type="reset">Cancelar</a> --}}  
                  
                    </div>
                </form>
            </div> 
        </div> 
    </div> 
</div>          

@endsection

 <script src="{{ asset('js/jquery.min.js') }} "></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){

   $('#n_catast').change(function(){

                if($(this).val() == 'S/N'){
                    $('#descripcion').removeAttr("disabled")
                  
                }else{
                    $('#descripcion').attr("disabled",'folse').attr('name','descripcion')
                
                  $(this).attr('name','n_catast')
                }
            })
            
            //  $('#descripcion').change(function(){
            //       $('#n_catast').attr('name','descripcion')
            //       $(this).attr('name','n_catast')
            //  })
             
     })
</script>