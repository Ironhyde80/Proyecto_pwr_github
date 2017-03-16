<?php

class Licencias
{
	private $nombre;
	private $clave;
	private $ref_tipo_licencia;

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }

}