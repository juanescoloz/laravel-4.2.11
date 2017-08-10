<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class ClienteModel extends Eloquent implements UserInterface, RemindableInterface{

	use UserTrait, RemindableTrait;

	protected $table = 'clientes';
	
	protected $primaryKey = 'id_cliente';

	protected $fillable = array('primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','razon_social','cedula_nit','Dv','telefono','celular','correo','fecha_nacimiento','departamento','direccion','posicion_fiscal','plazo_pago','cuenta_x_cobrar','cuenta_x_pagar','cuenta_anticipo');

	public $timestamps = false;
	
	public function estados()
	{
		return $this->belongsTo('EstadoModel','id_estado');
	}
	public function tipopersonas()
	{
		return $this->belongsTo('TipoPersonaModel','id_tipo_persona');
	}

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