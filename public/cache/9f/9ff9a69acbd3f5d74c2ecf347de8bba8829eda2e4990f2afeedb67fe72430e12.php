<?php

/* index.php */
class __TwigTemplate_cc3a279ae488db115efd0adb0be93522e53f23fc74def4ad7aeb78e2bfc61224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/plantillaBase.twig.php", "index.php", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/plantillaBase.twig.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Inicio";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<table class=\"table table-hover\">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> refs/remotes/origin/vista
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>NOMBRE</th>
\t\t\t\t<th>APELLIDOS</th>
\t\t\t\t<th><input type=\"submit\" value=\"Aplicar licencia\" class=\"btn btn-success\" id=\"agregarLicencia\"></th>
\t\t\t\t<th><input type=\"submit\" value=\"Eliminar licencia\" class=\"btn btn-danger\"></th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t<tbody id=\"tbody\">
<<<<<<< HEAD
=======
\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 17
            echo "\t\t<tr>
\t\t\t<td><input id=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "id_alumno"), "method"), "html", null, true);
            echo "\" type=\"checkbox\" name=\"usuario";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "id_alumno"), "method"), "html", null, true);
            echo "\"></td>
\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "nombre"), "method"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 20
=======
\t<thead>
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th>NOMBRE</th>
\t\t\t<th>APELLIDOS</th>
\t\t\t<th></th>
\t\t</tr>
\t</thead>
\t<tbody>
>>>>>>> refs/remotes/origin/vista
\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 17
            echo "\t\t<tr>
\t\t\t<td><input id=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "id_alumno"), "method"), "html", null, true);
            echo "\" type=\"checkbox\" name=\"usuario";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "id_alumno"), "method"), "html", null, true);
            echo "\"></td>
\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "nombre"), "method"), "html", null, true);
            echo "</td>
\t\t\t<td>";
<<<<<<< HEAD
            // line 20
=======
            // line 18
>>>>>>> refs/remotes/origin/master
>>>>>>> refs/remotes/origin/vista
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "primer_apellido"), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "segundo_apellido"), "method"), "html", null, true);
            echo "</td>
\t\t\t<td>
\t\t\t\t<input type=\"submit\" value=\"Más informacion\" class=\"btn btn-info\">
\t\t\t</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t</tbody>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  83 => 26,  69 => 20,  65 => 19,  59 => 18,  56 => 17,  52 => 16,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
=======
<<<<<<< HEAD
        return array (  83 => 26,  69 => 20,  65 => 19,  59 => 18,  56 => 17,  52 => 16,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
=======
        return array (  83 => 26,  67 => 18,  63 => 17,  57 => 16,  54 => 15,  50 => 14,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
>>>>>>> refs/remotes/origin/master
>>>>>>> refs/remotes/origin/vista
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/plantillaBase.twig.php' %}
{% block title %}Inicio{% endblock %}
{% block body %}
\t<table class=\"table table-hover\">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> refs/remotes/origin/vista
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>NOMBRE</th>
\t\t\t\t<th>APELLIDOS</th>
\t\t\t\t<th><input type=\"submit\" value=\"Aplicar licencia\" class=\"btn btn-success\" id=\"agregarLicencia\"></th>
\t\t\t\t<th><input type=\"submit\" value=\"Eliminar licencia\" class=\"btn btn-danger\"></th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t<tbody id=\"tbody\">
<<<<<<< HEAD
\t{% for alumno in alumnos %}
\t\t<tr>
\t\t\t<td><input id=\"{{ alumno.__GET('id_alumno') }}\" type=\"checkbox\" name=\"usuario{{ alumno.__GET('id_alumno') }}\"></td>
=======
\t{% for alumno in alumnos %}
\t\t<tr>
\t\t\t<td><input id=\"{{ alumno.__GET('id_alumno') }}\" type=\"checkbox\" name=\"usuario{{ alumno.__GET('id_alumno') }}\"></td>
=======
\t<thead>
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th>NOMBRE</th>
\t\t\t<th>APELLIDOS</th>
\t\t\t<th></th>
\t\t</tr>
\t</thead>
\t<tbody>
\t{% for alumno in alumnos %}
\t\t<tr>
\t\t\t<td><input type=\"checkbox\" id=\"{{ alumno.__GET('id_alumno') }}\" name=\"usuario{{ alumno.__GET('id_alumno') }}\"</td>
>>>>>>> refs/remotes/origin/master
>>>>>>> refs/remotes/origin/vista
\t\t\t<td>{{ alumno.__GET('nombre') }}</td>
\t\t\t<td>{{ alumno.__GET('primer_apellido') }} {{ alumno.__GET('segundo_apellido') }}</td>
\t\t\t<td>
\t\t\t\t<input type=\"submit\" value=\"Más informacion\" class=\"btn btn-info\">
\t\t\t</td>
\t\t</tr>
\t{% endfor %}
\t</tbody>
\t</table>
{% endblock %}
", "index.php", "C:\\wamp64\\www\\Proyecto_pwr_github\\templates\\index.php");
    }
}
