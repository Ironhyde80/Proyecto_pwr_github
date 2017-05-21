<?php
require "../models/modelo.php";
$obj = new modelo();


switch ($_POST['action'] {
	case 'anadirLicencia':
		$obj->asignarLicencia($_POST['idUsuario']);
		break;

	default:
		# code...
		break;
}
?>
