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

	Route::get('FormUsuario', 'UsuariosController@Mostrar');
	Route::post('CrearUsuario', 'UsuariosController@Create');
	Route::get('ListarUsuario', 'UsuariosController@Listar');
	Route::get('CalendarUsuario', 'UsuariosController@Calendar');
	Route::get('VerPerfil/{id}', 'UsuariosController@PerfilView');
	
	
	

});
