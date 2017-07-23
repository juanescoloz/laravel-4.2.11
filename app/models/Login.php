<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Login extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	
	protected $table = 'usuario';
	
	protected $primaryKey = 'id_usuario';

	protected $fillable = array('nombres','apellido','sexo','estado_civil','username','password','imagen','identificacion','telefono','email','direccion','celular');

	public $timestamps = false;

}
