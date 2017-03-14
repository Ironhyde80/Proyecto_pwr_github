{% extends 'layout/plantillaBase.twig.php' %}
{% block title %}Inicio{% endblock %}
{% block body %}

<h3> Login </h3>

<form method="post" action="">
<br><center>
	<label for="usuario" >Usuario:</label>
	<input type="text" name="usuario" id="usuario" placeholder="Ingrese el usuario">
	</center>
<br><center>
	<label for="login">Contraseña:</label>
	<input type="text" name="clave" id="clave" placeholder="Ingrese la clave">
	</center>
	<br>
	<center>
		<button>Login</button>
	</center>
</form>

{% endblock %}