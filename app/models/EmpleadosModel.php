<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class EmpleadosModel extends Eloquent implements UserInterface, RemindableInterface{

	use UserTrait, RemindableTrait;

	protected $table = 'empleados';
	
	protected $primaryKey = 'id_empleado';

	protected $fillable = array('PrimerNombre','SegundoNombre','PrimerApellido','SegundoApellido','Direccion','Telefono','Fecha_Nacimiento','Fecha_Ingreso','Email','Barrio','Sexo','identificacion','Arl','Eps','Afp');

	public $timestamps = false;
	
	public function estados()
	{
		return $this->belongsTo('EstadoModel','id_estado');
	}
	// public function cargos()
	// {
	// 	return $this->belongsTo('CargoModel','id_cargo');
	// }

	public function ciudades()
	{
		return $this->belongsTo('CiudadModel','id_ciudad');
	}
	public function tipodocumentos()
	{
		return $this->belongsTo('TipoDocumentoModel','id_tipo_documento');
	}

	public function paises()
	{
		return $this->belongsTo('PaisModel','id_pais');
	}

}