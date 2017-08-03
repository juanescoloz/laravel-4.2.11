@extends('index')

@section('title')
  Crear Cuentas
@stop

@section('css_page')
  
@stop

@section('css_relative')
    
@stop

@section('contenido') 

    <div class="page-title">
      <div class="title_left">
          <h3>Cuentas</h3>
       </div>
    </div>
        <div class="clearfix"></div>


              <div class="row"></div>
              <div class="col-md-6 col-xs-12"></div>
              	
              	<div class="x_panel">
                <div class="x_title">
               
                <h2>Crear Cuenta</h2>  
              <ul class="nav navbar-right panel_toolbox">
            
               </ul>
                <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="col-md-6 col-sm-3 col-xs-3 form-group has-feedback">
                  <input type="text" class="form-control has-feedback-left" id="InputName" name="InputName" placeholder="Codigo Cuenta" required="required">
                  <span class="fa fa-cog form-control-feedback left" aria-hidden="true"></span>
                  </div>

                  <div class="col-md-6 col-sm-3 col-xs-3 form-group has-feedback">
                  <input type="text" class="form-control has-feedback-left" id="InputName" name="InputName" placeholder="Nombre Cuenta" required="required">
                  <span class="fa fa-cog  form-control-feedback left" aria-hidden="true"></span>
                  </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-6 col-xs-6">Cuenta Padre</label>
                        <div class="col-md-7 col-sm-5 col-xs-5">
                          <input type="text" class="form-control" placeholder="Digite Cuenta Padre" id="InputFax" name="InputCuentaPadre">
                        </div>
                      </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-6 col-xs-6">Tipo de Cuenta</label>
                        <div class="col-md-7 col-sm-5 col-xs-5">
                          <input type="text" class="form-control" placeholder="Digite Tipo de Cuenta" id="InputFax" name="InputCuentaPadre">
                        </div>
                      </div>

                                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-6 col-xs-6">Naturaleza</label>
                        <div class="col-md-7 col-sm-5 col-xs-5">
                          <input type="text" class="form-control" placeholder="Digite Naturaleza de la Cuenta" id="InputFax" name="InputCuentaPadre">
                        </div>
                      </div>


                                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-6 col-xs-6">Clase de la Cuenta</label>
                        <div class="col-md-7 col-sm-5 col-xs-5">
                          <input type="text" class="form-control" placeholder="Digite Clase de la cuenta" id="InputFax" name="InputCuentaPadre">
                        </div>
                      </div>

                                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-6 col-xs-6">Nivel de la Cuenta</label>
                        <div class="col-md-7 col-sm-5 col-xs-5">
                          <input type="text" class="form-control" placeholder="Digite Nivel de la Cuenta" id="InputFax" name="InputCuentaPadre">
                        </div>
                      </div>

                                                           <div class="form-group">
                        <label class="control-label col-md-3 col-sm-6 col-xs-6">Tipo de Interno</label>
                        <div class="col-md-7 col-sm-5 col-xs-5">
                          <input type="text" class="form-control" placeholder="Digite Tipo de Interno de la Cuenta" id="InputFax" name="InputCuentaPadre">
                        </div>
                      </div>

@stop
@section('scripts_page')

   
@stop
@section('scripts_relative')
 </body>
</html>