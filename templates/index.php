{% extends 'layout/plantillaBase.twig.php' %}
{% block title %}Inicio{% endblock %}
{% block body %}
	<table class="table table-hover">
		<tr>
			<th></th>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>APELLIDOS</th>
			<th></th>
		</tr>
	{% for alumno in alumnos %}
		<tr>
			<td><input type="checkbox" name="usuario{{ alumno.__GET('id_alumno') }}"</td>
			<td>{{ alumno.__GET('id_alumno') }}</td>
			<td>{{ alumno.__GET('nombre') }}</td>
			<td>{{ alumno.__GET('primer_apellido') }} {{ alumno.__GET('segundo_apellido') }}</td>
			<td>
				<input type="submit" value="Más informacion" class="btn btn-info">
				<input type="submit" value="Agregar licencia" class="btn btn-success">
				<input type="submit" value="Eliminar licencia" class="btn btn-danger">
			</td>
		</tr>
	{% endfor %}
	</table>
{% endblock %}
