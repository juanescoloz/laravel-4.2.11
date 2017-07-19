<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Login extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	
	protected $table = 'usuario';

	protected $primaryKey = 'id_usuario';

	protected $fillable = array('PrimerNombre','PrimerApellido','Sexo','EstadoCivil','Pais','Ciudad','Usuario','Contrasena','remember_token');

	public $timestamps = false;

}
