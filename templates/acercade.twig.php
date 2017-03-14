{% extends 'layout/plantillaBase.twig.php' %}
{% block title %}Acerca de{% endblock %}

{% block body %}
<h3>Aplicacion Realizada por: {{nombre}}</h3>
<h3>Descripcion de la aplicación: {{descripcion}} </h3>
<h3>Fecha: {{fecha}} </h3>
{% endblock %}
