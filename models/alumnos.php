<?php

class Alumnos
{
	private $id_alumno;
	private $dni;
	private $nombre;
	private $primer_apellido;
	private $segundo_apellido;
	private $cial;
	private $expediente;
	private $telefono;
	private $email;
	private $clave;
	private $url_foto;

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }

}