{% extends 'layout/plantillaBase.twig.php' %}
{% block title %}Upload{% endblock %}
{% block body %}
	<h3> Subir fichero </h3>

<form method="post" action="" enctype="multipart/form-data">
<br><center>
	<label for="fichero" >Fichero</label>
	<input type="file" name="fichero" id="fichero" placeholder="Seleccione un fichero">
	</center>
	<center>
		<button>Enviar</button>
	</center>
	<label>{{error}}</label>
</form>

{% endblock %}