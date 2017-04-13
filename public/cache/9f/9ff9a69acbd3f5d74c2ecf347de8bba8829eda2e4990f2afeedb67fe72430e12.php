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
        echo "\t<table>
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th>ID</th>
\t\t\t<th>NOMBRE</th>
\t\t\t<th>APELLIDOS</th>
\t\t\t<th></th>
\t\t</tr>
\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 13
            echo "\t\t<tr>
\t\t\t<td><input type=\"checkbox\" name=\"usuario";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "id_alumno"), "method"), "html", null, true);
            echo "\"</td>
\t\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "id_alumno"), "method"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "nombre"), "method"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "primer_apellido"), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "segundo_apellido"), "method"), "html", null, true);
            echo "</td>
\t\t\t<td>
\t\t\t\t<input type=\"submit\" value=\"Más informacion\">
\t\t\t\t<input type=\"submit\" value=\"Agregar licencia\">
\t\t\t\t<input type=\"submit\" value=\"Eliminar licencia\">
\t\t\t</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t</table>
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
        return array (  83 => 25,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  52 => 13,  48 => 12,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
\t<table>
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th>ID</th>
\t\t\t<th>NOMBRE</th>
\t\t\t<th>APELLIDOS</th>
\t\t\t<th></th>
\t\t</tr>
\t{% for alumno in alumnos %}
\t\t<tr>
\t\t\t<td><input type=\"checkbox\" name=\"usuario{{ alumno.__GET('id_alumno') }}\"</td>
\t\t\t<td>{{ alumno.__GET('id_alumno') }}</td>
\t\t\t<td>{{ alumno.__GET('nombre') }}</td>
\t\t\t<td>{{ alumno.__GET('primer_apellido') }} {{ alumno.__GET('segundo_apellido') }}</td>
\t\t\t<td>
\t\t\t\t<input type=\"submit\" value=\"Más informacion\">
\t\t\t\t<input type=\"submit\" value=\"Agregar licencia\">
\t\t\t\t<input type=\"submit\" value=\"Eliminar licencia\">
\t\t\t</td>
\t\t</tr>
\t{% endfor %}
\t</table>
{% endblock %}
", "index.php", "C:\\wamp64\\www\\Proyecto_pwr_github\\templates\\index.php");
    }
}
