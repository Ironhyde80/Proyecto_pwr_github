<?php

class Profesores
{
	private $id_profesor;
	private $dni;
	private $nombre;
	private $primer_apellido;
	private $segundo_apellido;
	private $telefono;
	private $email;
	private $tutor;
	private $ref_departamento;
	private $clave;

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }

}
