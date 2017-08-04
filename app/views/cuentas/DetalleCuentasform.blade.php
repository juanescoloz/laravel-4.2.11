@extends('index')

@section('title')
  DetalleCuentas
@stop

@section('css_page')
  
@stop

@section('css_relative')
    
@stop

@section('contenido') 
{{-- Inicio Panel Navegacion --}}


<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
      <li>
        <i class="ace-icon fa fa-home home-icon"></i>
        <a href="{{url('principal')}}">Inicio</a>
      </li>
      <li class="active">Listado de Cuentas</li>
    </ul><!-- /.breadcrumb -->
  </div>
{{-- Final Panel Navegacion --}}

<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado Cuentas</h2>
                    @if(Session::has('message'))
                      <div id="alert">
                        <div class="col-sm-12 hr hr-18 hr-double dotted"></div>
                        <div class="col-sm-4 col-xs-12 col-sm-offset-4 alert alert-{{Session::get('class')}}">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          {{Session::get('message')}}
                          <br>
                        </div>
                      </div>
                    @endif
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <a class="btn btn-primary" href="{{url('FormCrearCuenta')}}"><i class="fa fa-user-plus"></i> Crear Cuentas</a>
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">

                <thead>
                <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Naturaleza</th>
                <th>Clase</th>
                <th>Nivel</th>
                <th>Tipo Interno</th>
                </tr>
                </thead>



                                
                      
 @foreach($todocuentas as $todo)
                      <tr>

                                    <td>
                                      {{$todo->codigo}} 
                                    </td> 
                                    <td>
                                      {{$todo->nombre}}
                                    </td>   
                                    <td>
                                      {{$todo->tipo}}
                                    </td> 
                                    <td>
                                      {{$todo->naturaleza}}
                                    </td>
                                    <td>
                                      {{$todo->clase}}
                                    </td>
                                    <td>
                                      {{$todo->nivel}}
                                    </td>
                                    <td>
                                      {{$todo->tipo_interno}}
                                    </td>
                              </tr>
                              @endforeach
                              </tbody>
                    </table>
                  </div>
                </div>
              


@stop
@section('scripts_page')

   
@stop
@section('scripts_relative')
