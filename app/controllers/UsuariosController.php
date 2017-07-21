<?php

class UsuariosController extends BaseController {
	public function Mostrar()
	{
		$estados = EstadoModel::all();
		$roles = RolModel::all();
		$cargos = CargoModel::all();
		$ciudades = CiudadModel::all();

		return View::make('usuarios.form', array('todoestados' => $estados,'ciudades' => $ciudades,'todoroles' => $roles),['todocargos' => $cargos]);

		//return View::make('usuarios.form');
	}
	public function PerfilView($id)
	{
		$usuarios = UsuariosModel::where('id_usuario', $id)->get();
		$historial = AuditoriaModel::where('usuario', Auth::user()->PrimerNombre." ".Auth::user()->PrimerApellido)->get();

		return View::make('usuarios.profile', array('todousuarios' => $usuarios,'todohistotial' => $historial));
		// return View::make('usuarios.profile');

		// $rol = Rol::where('rol_id', $id)->get();
		// $permi = Permiso::all();
		// return View::make('rol.detalles', array('rol' => $rol,'permi' => $permi) );
	
	}


	
	public function Create()
	{
		
		$auditoria = new AuditoriaModel;
		$auditoria->usuario = Auth::user()->PrimerNombre." ".Auth::user()->PrimerApellido;
		$auditoria->tabla = "Usuarios";
		$auditoria->accion = "Agrego"." a ".Input::get('InputName')." ".Input::get('InputNamee');



		$usuario = new UsuariosModel;

		$file = Input::file('imagen');

		$usuario->PrimerNombre = Input::get('InputName');
		$usuario->PrimerApellido = Input::get('InputNamee');	
		$usuario->Sexo = Input::get('InputSexo');
		$usuario->EstadoCivil = Input::get('InputEstadoCivil');
		$usuario->Pais = Input::get('InputPais');
		$usuario->Ciudad = Input::get('InputCiudad');
		$usuario->username = Input::get('InputUser');
		$usuario->password = Hash::make(Input::get('InputPasword'));
		$usuario->remember_token = 12;
		$usuario->imagen = Input::file('imagen')->getClientOriginalName();
		$usuario->rol_id = Input::get('InputIdRol');
		$usuario->estado_id = Input::get('InputIdEstado');
		$usuario->identificacion = Input::get('InputIden');
		$usuario->telefono = Input::get('InputTel');
		$usuario->email = Input::get('InputEmail');
		$usuario->direccion = Input::get('InputDireccion');
		$usuario->celular = Input::get('InputCelular');
		$usuario->id_cargo = Input::get('InputCargo');
		
		if ($usuario->save()){
			$auditoria->save();
			$file->move("assets/images/avatars",$file->getClientOriginalName());
			Session::flash('message', 'Personal creado correctamente!');
			Session::flash('class', 'success');
		}else{
			Session::flash('message', 'Ocurrio un error!');
			Session::flash('class', 'danger');
		}

		return Redirect::to('FormUsuario');

	}
	public function Listar()
	{	
		$usuarios = UsuariosModel::all();
		return View::make('usuarios.detallesusuarios', array('todousuarios' => $usuarios));
	}
	public function Calendar()
	{

		return View::make('usuarios.calendarusuario');
	}

	public function cambioPass($id){

		$usuarios = UsuariosModel::where('id_usuario', $id)->get();
		$historial = AuditoriaModel::where('usuario', Auth::user()->PrimerNombre." ".Auth::user()->PrimerApellido)->get();

		$usuario = UsuariosModel::find($id);

		$usuario->password = Hash::make(Input::get('password'));

		if($usuario->save()){
			Session::flash('message', 'Contraseña Actualizada!');
			Session::flash('class', 'success');
		}else{
			Session::flash('message', 'No se fue posible cambiar la contraseña');
			Session::flash('class', 'danger');
		}

		return View::make('usuarios.profile', array('todousuarios' => $usuarios,'todohistotial' => $historial));
	}

	public function editarView($id)
	{	
		$usuarios = UsuariosModel::where('id_usuario','=', $id)->get();
		$estados = EstadoModel::all();
		$roles = RolModel::all();
		$cargos = CargoModel::all();
		$ciudades = CiudadModel::all();

		return View::make('usuarios.editar', array('usuarios' => $usuarios,'todoestados' => $estados,'ciudades' => $ciudades,'todoroles' => $roles),['todocargos' => $cargos]);

		//return View::make('usuarios.form');
	}

	public function editar($id){
		$usuarios = UsuariosModel::find($id);

		$usuarios->identificacion = Input::get('InputIden');
		$usuarios->celular = Input::get('InputCelular');
		$usuarios->PrimerNombre = Input::get('InputName');
		$usuarios->PrimerApellido = Input::get('InputNamee');
		$usuarios->email = Input::get('InputEmail');
		$usuarios->telefono = Input::get('InputTel');
		$usuarios->username = Input::get('InputUser');
		$usuarios->direccion = Input::get('InputDireccion');
		$usuarios->EstadoCivil = Input::get('InputEstadoCivil');
		$usuarios->estado_id = Input::get('InputIdEstado');
		$usuarios->rol_id = Input::get('InputIdRol');
		$usuarios->id_cargo = Input::get('InputCargo');
		$usuarios->Pais = Input::get('InputPais');
		$usuarios->Ciudad = Input::get('InputCiudad');
		$usuarios->Sexo = Input::get('InputSexo');

		if($usuarios->save()){
			Session::flash('message', 'Los datos del usuario se modificaron correctamente!');
			Session::flash('class', 'success');
		}else{
			Session::flash('message', 'No se fue posible modificar la información');
			Session::flash('class', 'danger');
		}

		$usuarios = UsuariosModel::all();
		return View::make('usuarios.detallesusuarios', array('todousuarios' => $usuarios));

	}
	

}
