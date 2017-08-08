@extends('index')

@section('title')
  Detalle Clientes
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
      <li class="active">Listado de Clientes</li>
    </ul><!-- /.breadcrumb -->
  </div>
{{-- Final Panel Navegacion --}}
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de Clientes</h2>
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

                  <a class="btn btn-primary" href="{{url('CrearClientes')}}"><i class="fa fa-user-plus"></i> Crear Contacto</a>
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          	<th>Identificacion</th>
                          	<th>Dv</th>
                          	<th>Tipo</th>
                          	<th>Primer Apellido</th>
                          	<th>Segundo Apellido</th>
                          	<th>Primer Nombre</th>
                         	<th>Segundo Nombre</th>
                          	<th>Razon Social</th>
                          	<th>Direccion</th>
                          	<th>Telefono</th>
                          	<th>Celular</th>
                          	<th>Correo Electronico</th>
							<th>Posicion Fiscal</th>
                        </tr>
                      </thead>

</table>
                      <tbody>
           
                


                @stop
@section('scripts_page')

   
@stop
@section('scripts_relative')

                 <!-- Small modal -->
