<?php

class LoginController extends BaseController{

	public function mostrarLogin(){
		//preguntamos si hay una sesion activa
		if (Auth::check()){
			//si tenemos la sesion activa entonces nos tira al directorio raiz
			//que nos lleva a inicio
			return Redirect::to('principal');
		}else{
			//sino entonces nos carga el login
			return View::make('login');
		}
	}

	public function verificar(){
		//aqui se van a obtener los datos del formulario
		$usuario = Input::get('username');
        $pass = Input::get('password');

        $data = ['username' => Input::get('username'),
            'password' => Input::get('password')];
 
        // Verificamos los datos
        if (Auth::attempt($data)) 
        {
            // Si nuestros datos son correctos mostramos la página de inicio
            return Redirect::intended('principal');
            // return "Usuario logeado";
        }else{
        // Si los datos no son los correctos volvbnemos al login y mostramos un error
            // return Redirect::back()->with('error_message', 'Los datos no concuerdan con ningun usuario')->withInput();
            return View::make('login');
        }
	}
	public function logout(){
        
        Auth::logout();
        return Redirect::to('login');
    }

	public function guardar(){

		$usuario = new Login();

		$usuario->nombres = 'Felipe';
		$usuario->apellidos = 'Medel';
		$usuario->username = Input::get('username');
		$usuario->password = Hash::make(Input::get('password'));
		$usuario->estado_civil = 'Soltero(a)';
		$usuario->sexo = 'Masculino';
		$usuario->rol_id = 1;
		$usuario->estado_id = 1;
		$usuario->identificacion = '12343312342';
		$usuario->direccion = 'Cll 123 No 6-45 B/ Palmares';
		$usuario->id_cargo = 1;
		$usuario->ciudad_id = 1;
		$usuario->pais_id = 1;

		if($usuario->save()){
			return Redirect::to('login');	
		}else{
			return 'nose guardo';
		}

		

	}
}