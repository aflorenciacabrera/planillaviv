@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lista de viviendas </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        
 <div class="container">
    <div class="row clearfix">
    <div class="col-md-12 column">
      <table class="table table-bordered table-hover" id="tab_logic">
        <thead>
          <tr >
            <th class="text-center">
              N°
            </th>
           
          </tr>
        </thead>
        <tbody>
        <tr id="addr0">
            <td>
             <input type="text" name="name_of_vessel0" class="form-control">
            </td>
           
           
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
</div>
@endsection