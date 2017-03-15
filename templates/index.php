{% extends 'layout/plantillaBase.twig.php' %}
{% block title %}Inicio{% endblock %}
{% block body %}
	{% for licencia in licencias %}	
		{{ licencia.__GET('id_licencia') }}
		{{ licencia.__GET('nombre') }}
		{{ licencia.__GET('clave') }}
		{{ licencia.__GET('fecha') }}
		{{ licencia.__GET('ref_tipo_licencia') }}
	{% endfor %}
{% endblock %}