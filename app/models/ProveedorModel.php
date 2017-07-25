<?php


class ProveedorModel extends Eloquent {

	

	protected $table = 'proveedores';
	
	protected $primaryKey = 'id_proveedor';

	protected $fillable = array('tipo_documento','nit/cc','nombres','apellidos','direccion','sitioweb','telefono','celular','fax','email','tipo_proveedor');

	public $timestamps = false;
	
	public function estados()
	{
		return $this->belongsTo('EstadoModel','id_ciudad');
	}

	public function ciudades()
	{
		return $this->belongsTo('CiudadModel','id_estado');
	}

}