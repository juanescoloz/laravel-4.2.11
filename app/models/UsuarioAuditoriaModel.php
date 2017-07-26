<?php


class UsuarioAuditoriaModel extends Eloquent {

	
	protected $table = 'usuario_auditoria';

	protected $fillable = array('id_usuario','id_auditoria');

	public $timestamps = false;

	public function usuarios()
	{
		return $this->belongsTo('UsuariosModel','id_usuario');
	}

	public function auditoria()
	{
		return $this->belongsTo('AuditoriaModel','id_auditoria');
	}
	
}