{% extends 'layout/plantillaBase.twig.php' %}
{% block title %}Inicio{% endblock %}
{% block body %}
	<table class="table table-hover">
<<<<<<< HEAD
		<thead>
			<tr>
				<th></th>
				<th>NOMBRE</th>
				<th>APELLIDOS</th>
				<th><input type="submit" value="Aplicar licencia" class="btn btn-success" id="agregarLicencia"></th>
				<th><input type="submit" value="Eliminar licencia" class="btn btn-danger"></th>
				<th></th>
			</tr>
		</thead>
	<tbody id="tbody">
	{% for alumno in alumnos %}
		<tr>
			<td><input id="{{ alumno.__GET('id_alumno') }}" type="checkbox" name="usuario{{ alumno.__GET('id_alumno') }}"></td>
=======
	<thead>
		<tr>
			<th></th>
			<th>NOMBRE</th>
			<th>APELLIDOS</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	{% for alumno in alumnos %}
		<tr>
			<td><input type="checkbox" id="{{ alumno.__GET('id_alumno') }}" name="usuario{{ alumno.__GET('id_alumno') }}"</td>
>>>>>>> refs/remotes/origin/master
			<td>{{ alumno.__GET('nombre') }}</td>
			<td>{{ alumno.__GET('primer_apellido') }} {{ alumno.__GET('segundo_apellido') }}</td>
			<td>
				<input type="submit" value="Más informacion" class="btn btn-info">
			</td>
		</tr>
	{% endfor %}
	</tbody>
	</table>
{% endblock %}
