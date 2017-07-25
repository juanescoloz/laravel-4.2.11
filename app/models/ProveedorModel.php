<?php


class ProveedorModel extends Eloquent {

	

	protected $table = 'proveedores';
	
	protected $primaryKey = 'id_proveedor';

	protected $fillable = array('nit/cc','nombres','apellidos','direccion','sitioweb','telefono','celular','fax','email');

	public $timestamps = false;
	
	public function estados()
	{
		return $this->belongsTo('EstadoModel','id_ciudad');
	}

	public function ciudades()
	{
		return $this->belongsTo('CiudadModel','id_estado');
	}
	public function tipodocumentos()
	{
		return $this->belongsTo('TipoDocumentoModel','id_tipo_documento');
	}
	public function tipopersonas()
	{
		return $this->belongsTo('TipoPersonaModel','id_tipo_persona');
	}

}