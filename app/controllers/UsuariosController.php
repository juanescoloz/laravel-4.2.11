<?php

class UsuariosController extends BaseController {

	public function Mostrar()
	{
		$estados = EstadoModel::all();
		$roles = RolModel::all();
		$cargos = CargoModel::all();
		$ciudades = CiudadModel::all();
		$paises = PaisModel::all();

		return View::make('usuarios.form', array('todoestados' => $estados,'ciudades' => $ciudades,'todoroles' => $roles, 'paises' => $paises),['todocargos' => $cargos]);

		//return View::make('usuarios.form');
	}
	public function PerfilView($id)
	{
		$usuarios = Login::where('id_usuario', $id)->get();
		// $historial = AuditoriaModel::where('usuario', Auth::user()->PrimerNombre." ".Auth::user()->PrimerApellido)->get

		$historial = AuditoriaModel::all();
		return View::make('usuarios.profile', array('todousuarios' => $usuarios,'todohistotial' => $historial));
	
	}


	
	public function Create()
	{
		$usuarioo = Login::where('identificacion','=',Input::get('InputIden'))->get();
		if ($usuarioo->count() == 1) {
			Session::flash('message', 'Ya se encuentra un usuario con esta identificación');
			Session::flash('class', 'danger');		
		}else{

			$auditoria = new AuditoriaModel;
			$auditoria->tabla = "Usuarios";
			$auditoria->accion = "Agrego"." a ".Input::get('InputName')." ".Input::get('InputNamee')." ID: ".Input::get('InputIden');
            if ($auditoria->save()){
				UsuarioAuditoriaModel::create(['id_usuario' => Auth::user()->id_usuario, 'id_auditoria' => $auditoria->id_auditoria]);

		$usuario = new Login;

		$file = Input::file('imagen');

		$usuario->nombres = Input::get('InputName');
		$usuario->apellidos = Input::get('InputNamee');	
		$usuario->sexo = Input::get('InputSexo');
		$usuario->estado_civil = Input::get('InputEstadoCivil');
		$usuario->pais_id = Input::get('InputPais');
		$usuario->ciudad_id = Input::get('InputCiudad');
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
			$file->move("assets/images/avatars",$file->getClientOriginalName());
			Session::flash('message', 'Personal creado correctamente!');
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

		$usuarios = Login::all();
		return View::make('usuarios.detallesusuarios', array('todousuarios' => $usuarios));

	}
	public function Listar()
	{	
		$usuarios = Login::where('estado_id','=',1)->get();
		return View::make('usuarios.detallesusuarios', array('todousuarios' => $usuarios));
	}
	public function Calendar()
	{

		return View::make('usuarios.calendarusuario');
	}

	public function cambioPass($id){

		$usuarios = Login::where('id_usuario', $id)->get();
		// $historial = AuditoriaModel::where('usuario', Auth::user()->PrimerNombre." ".Auth::user()->PrimerApellido)->get();
		$historial = AuditoriaModel::all();

		$usuario = Login::find($id);
		$pass = Input::get('password');
		if($pass == ""){
			$pass2 = "1";
		}else{
			$pass2 = Input::get('password2');
		}
		
		if ($pass == $pass2) {
		
			$usuario->password = Hash::make($pass);

			if($usuario->save()){
				Session::flash('message', 'Contraseña Actualizada!');
				Session::flash('class', 'success');
			}else{
				Session::flash('message', 'No se fue posible cambiar la contraseña');
				Session::flash('class', 'danger');
			}

			return View::make('usuarios.profile', array('todousuarios' => $usuarios,'todohistotial' => $historial));
		}
		
	}

	public function editarView($id)
	{	
		$usuarios = Login::where('id_usuario','=', $id)->get();
		$estados = EstadoModel::all();
		$roles = RolModel::all();
		$cargos = CargoModel::all();
		$ciudades = CiudadModel::all();
		$paises = PaisModel::all();


		return View::make('usuarios.editar', array('usuarios' => $usuarios,'todoestados' => $estados,'ciudades' => $ciudades,'todoroles' => $roles, 'paises' => $paises),['todocargos' => $cargos]);

		//return View::make('usuarios.form');
	}

	public function editar($id){
		$usuarios = Login::find($id);

		$usuarios->identificacion = Input::get('InputIden');
		$usuarios->celular = Input::get('InputCelular');
		$usuarios->nombres = Input::get('InputName');
		$usuarios->apellidos = Input::get('InputNamee');
		$usuarios->email = Input::get('InputEmail');
		$usuarios->telefono = Input::get('InputTel');
		$usuarios->username = Input::get('InputUser');
		$usuarios->direccion = Input::get('InputDireccion');
		$usuarios->estado_civil = Input::get('InputEstadoCivil');
		$usuarios->estado_id = Input::get('InputIdEstado');
		$usuarios->rol_id = Input::get('InputIdRol');
		$usuarios->id_cargo = Input::get('InputCargo');
		$usuarios->pais_id = Input::get('InputPais');
		$usuarios->ciudad_id = Input::get('InputCiudad');
		$usuarios->sexo = Input::get('InputSexo');

		if($usuarios->save()){
			Session::flash('message', 'Los datos del usuario se modificaron correctamente!');
			Session::flash('class', 'success');
		}else{
			Session::flash('message', 'No se fue posible modificar la información');
			Session::flash('class', 'danger');
		}

		$usuarios = Login::all();
		return View::make('usuarios.detallesusuarios', array('todousuarios' => $usuarios));

	}
	

}
