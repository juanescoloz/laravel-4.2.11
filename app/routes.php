<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('login');
// });

// Route::get('/', 'LoginController@mostrarLogin');
// Route::get('login', 'LoginController@mostrarLogin');

Route::get('/', array('before' => 'validate', function(){
	return View::make('login');
}));

Route::get('login', array('before' => 'validate', function(){
	return View::make('login');
}));

Route::post('entrar', 'LoginController@verificar');
Route::post('guardarUserNew', 'LoginController@guardar');

Route::group(array('before'=> 'auth'), function(){

	Route::get('principal', 'PrincipalController@index');
	Route::get('CerrarSesion', 'LoginController@logout');

	// rutas modulo usuarios
	Route::get('FormUsuario', 'UsuariosController@Mostrar');
	Route::post('CrearUsuario', 'UsuariosController@Create');
	Route::get('ListarUsuario', 'UsuariosController@Listar');
	Route::get('CalendarUsuario', 'UsuariosController@Calendar');
	Route::get('VerPerfil/{id}', 'UsuariosController@PerfilView');
	Route::post('ChangePass/{id}', 'UsuariosController@cambioPass');
	Route::get('modificarUsuario/{id}', 'UsuariosController@editarView');
	Route::post('modificarUsuario/{id}', 'UsuariosController@editar');

	// rutas modulo proveedores
	Route::get('FormProveedor', 'ProveedorController@Mostrar');
	Route::post('CrearProveedor', 'ProveedorController@Create');
	Route::get('ListarProveedor', 'ProveedorController@Listar');
	Route::get('modificarProveedor/{id}', 'ProveedorController@editarView');
	Route::post('modificarProveedor/{id}', 'ProveedorController@editar');
	

	//rutas recursos humanos
	Route::get('FormEmpleado', 'EmpleadosController@Mostrar');
	Route::post('CrearEmpleado', 'EmpleadosController@Create');
	Route::get('ListarEmpleados', 'EmpleadosController@Listar');
	Route::get('PerfilEmpleado/{id}', 'EmpleadosController@PerfilEmpleado');
	Route::get('modificarEmpleado/{id}', 'EmpleadosController@editarView');
	
	

});
