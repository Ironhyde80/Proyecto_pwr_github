<?php

/* acercade.twig.php */
class __TwigTemplate_71f4433ab773e3bb60d1f3cee66134a24f93d47563d59bb96823c66d0df70bdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/plantillaBase.twig.php", "acercade.twig.php", 1);
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
        echo "Acerca de";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h3>Aplicacion Realizada por: ";
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : null), "html", null, true);
        echo "</h3>
<h3>Descripcion de la aplicación: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["descripcion"]) ? $context["descripcion"] : null), "html", null, true);
        echo " </h3>
<h3>Fecha: ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : null), "html", null, true);
        echo " </h3>
";
    }

    public function getTemplateName()
    {
        return "acercade.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  43 => 6,  38 => 5,  35 => 4,  29 => 2,  11 => 1,);
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
{% block title %}Acerca de{% endblock %}

{% block body %}
<h3>Aplicacion Realizada por: {{nombre}}</h3>
<h3>Descripcion de la aplicación: {{descripcion}} </h3>
<h3>Fecha: {{fecha}} </h3>
{% endblock %}
", "acercade.twig.php", "C:\\wamp64\\www\\Proyecto_pwr_github\\templates\\acercade.twig.php");
    }
}
