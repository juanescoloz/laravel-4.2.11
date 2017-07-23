<?php
	class PaisModel extends Eloquent {

		protected $table = 'pais';

		protected $primaryKey = 'pais_id';

		protected $fillable = array('descripcion');

		public $timestamps = false;


	}