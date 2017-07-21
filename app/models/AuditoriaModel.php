<?php

class AuditoriaModel extends Eloquent {
	
	protected $table = 'auditoria';
	
	protected $primaryKey = 'id_auditoria';

	protected $fillable = array('fecha_hora','tabla','accion','tipo_usuario');

	public $timestamps = false;


	public function usuarios(){
		
		return $this->belongsTo('UsuariosModel', 'usuario');
		
	}

}