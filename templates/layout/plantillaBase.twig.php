<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{% block title %}Gestor de licencias{% endblock %}</title>

	<script type="text/javascript" src="{{base_url()}}/assets/jquery-2.2.1/jquery-2.2.1.min.js"></script>			
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{base_url()}}/assets/bootstrap-3.3.6-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="{{base_url()}}/assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}/assets/jquery-3.1.1.js"></script>
</head>
<body>
	<div class="well" align="center"><h2>FICHA DE CLASE:</h2>
	{% if usuario == false %}
		<a href="{{ path_for('Login') }}">Login</a>&nbsp;|&nbsp;
		<a href="{{ path_for('Acerca_de') }}">Acerca de</a>&nbsp;|&nbsp;
	{% else %}
		<a href="{{ path_for('Inicio') }}">Inicio</a>&nbsp;|&nbsp;
		<a href="{{ path_for('Upload') }}">Subir fichero</a>&nbsp;|&nbsp;
		<a href="{{ path_for('Acerca_de') }}">Acerca de</a>&nbsp;|&nbsp;
		<a href="{{ path_for('Logout') }}">Salir</a>
	</div> 
	{% endif %}
	<hr>
	<div align="center">
		{% block body %}{% endblock %}
		<hr>
	</div>
	<div align="center">
		&copy;2016 Todos los derechos reservados
	</div>
</body>
</html>