{% extends 'layout/plantillaBase.twig.php' %}
{% block title %}Inicio{% endblock %}
{% block body %}
	{% for alumno in alumnos %}
	<img src={{alumno.__GET('url_foto')}}></img>
		<p>Alumno: {{ alumno.__GET('nombre') }} {{ alumno.__GET('primer_apellido') }} {{ alumno.__GET('segundo_apellido') }}</p>	
		<p>Cial: {{ alumno.__GET('cial') }}</p>
		<p>Email: {{ alumno.__GET('email') }}</p>
	{% endfor %}
{% endblock %}