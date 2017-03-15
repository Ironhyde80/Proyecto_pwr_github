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
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 5
            echo "\t<img src=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "url_foto"), "method"), "html", null, true);
            echo "></img>
\t\t<p>Alumno: ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "nombre"), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "primer_apellido"), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "segundo_apellido"), "method"), "html", null, true);
            echo "</p>\t
\t\t<p>Cial: ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "cial"), "method"), "html", null, true);
            echo "</p>
\t\t<p>Email: ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "__GET", array(0 => "email"), "method"), "html", null, true);
            echo "</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  60 => 8,  56 => 7,  48 => 6,  43 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
\t{% for alumno in alumnos %}
\t<img src={{alumno.__GET('url_foto')}}></img>
\t\t<p>Alumno: {{ alumno.__GET('nombre') }} {{ alumno.__GET('primer_apellido') }} {{ alumno.__GET('segundo_apellido') }}</p>\t
\t\t<p>Cial: {{ alumno.__GET('cial') }}</p>
\t\t<p>Email: {{ alumno.__GET('email') }}</p>
\t{% endfor %}
{% endblock %}", "index.php", "C:\\wamp64\\www\\Proyecto_pwr_github\\templates\\index.php");
    }
}
