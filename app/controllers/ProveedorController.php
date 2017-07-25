<?php

class ProveedorController extends BaseController {

	public function Mostrar()
	{
		$estados = EstadoModel::all();
		$ciudades = CiudadModel::all();

		return View::make('proveedores.form', array('todoestados' => $estados,'ciudades' => $ciudades));
	}

	
	// public function Create()
	// {
		
	// 	$auditoria = new AuditoriaModel;
	// 	$auditoria->usuario = Auth::user()->PrimerNombre." ".Auth::user()->PrimerApellido;
	// 	$auditoria->tabla = "Usuarios";
	// 	$auditoria->accion = "Agrego"." a ".Input::get('InputName')." ".Input::get('InputNamee');



	// 	$usuario = new UsuariosModel;

	// 	$file = Input::file('imagen');

	// 	$usuario->nombres = Input::get('InputName');
	// 	$usuario->apellidos = Input::get('InputNamee');	
	// 	$usuario->sexo = Input::get('InputSexo');
	// 	$usuario->estado_civil = Input::get('InputEstadoCivil');
	// 	$usuario->pais_id = Input::get('InputPais');
	// 	$usuario->ciudad_id = Input::get('InputCiudad');
	// 	$usuario->username = Input::get('InputUser');
	// 	$usuario->password = Hash::make(Input::get('InputPasword'));
	// 	$usuario->remember_token = 12;
	// 	$usuario->imagen = Input::file('imagen')->getClientOriginalName();
	// 	$usuario->rol_id = Input::get('InputIdRol');
	// 	$usuario->estado_id = Input::get('InputIdEstado');
	// 	$usuario->identificacion = Input::get('InputIden');
	// 	$usuario->telefono = Input::get('InputTel');
	// 	$usuario->email = Input::get('InputEmail');
	// 	$usuario->direccion = Input::get('InputDireccion');
	// 	$usuario->celular = Input::get('InputCelular');
	// 	$usuario->id_cargo = Input::get('InputCargo');
		
	// 	if ($usuario->save()){
	// 		$auditoria->save();
	// 		$file->move("assets/images/avatars",$file->getClientOriginalName());
	// 		Session::flash('message', 'Personal creado correctamente!');
	// 		Session::flash('class', 'success');
	// 	}else{
	// 		Session::flash('message', 'Ocurrio un error!');
	// 		Session::flash('class', 'danger');
	// 	}

	// 	return Redirect::to('FormUsuario');

	// }
	public function Listar()
	{	
		$proveedores = ProveedorModel::all();
		return View::make('proveedores.detalleproveedores', array('todoproveedores' => $proveedores));
	}

}
