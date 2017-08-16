<?php

class ClientesController extends BaseController {

	public function create()
	{
		$clientee = ClienteModel::where('cedula_nit','=',Input::get('InputIden'))->get();
		if ($clientee->count() == 1) {
			Session::flash('message', 'Ya se encuentra este cliente');
			Session::flash('class', 'danger');		
		}else{
			

			$auditoria = new AuditoriaModel;
			$auditoria->tabla = "Proveedores";
			$auditoria->accion = "Agrego"." a ".Input::get('InputName')." ".Input::get('InputNamee')." ID: ".Input::get('InputIden');
            if ($auditoria->save()){
				UsuarioAuditoriaModel::create(['id_usuario' => Auth::user()->id_usuario, 'id_auditoria' => $auditoria->id_auditoria]);

		$proveedor = new ProveedorModel;

		$proveedor->id_tipo_documento = Input::get('InputTipoDocumento');
		$proveedor->nit_cc = Input::get('InputIden');	
		$proveedor->nombres = Input::get('InputName');
		$proveedor->apellidos = Input::get('InputNamee');
		$proveedor->direccion = Input::get('InputDireccion');
		$proveedor->id_ciudad = Input::get('InputCiudad');
		$proveedor->id_estado = Input::get('InputIdEstado');
		$proveedor->sitioweb = Input::get('InputSitioWeb');
		$proveedor->telefono = Input::get('InputTel');
		$proveedor->celular = Input::get('InputCelular');
		$proveedor->fax = Input::get('InputFax');
		$proveedor->email = Input::get('InputEmail');
		$proveedor->id_tipo_persona = Input::get('InputEstadoCivil');

		
		if ($proveedor->save()){
			Session::flash('message', 'Proveedor creado correctamente!');
			Session::flash('class', 'success');
		}else{
			Session::flash('message', 'Ocurrio un error!');
			Session::flash('class', 'danger');
		}
		}else{
			Session::flash('message', 'Ocurrio un error!');
			Session::flash('class', 'danger');
		}
	}

		$proveedores = ProveedorModel::all();
		return View::make('proveedores.detalleproveedor', array('todoproveedores' => $proveedores));

	}

	}