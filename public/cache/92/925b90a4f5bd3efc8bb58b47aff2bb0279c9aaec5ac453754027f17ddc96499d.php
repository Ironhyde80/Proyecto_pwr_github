<?php

/* upload.twig.php */
class __TwigTemplate_0a80f06ffa30a6f51d343b2fb93ed92eaf8ae9c6108d67e42a447650237835e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/plantillaBase.twig.php", "upload.twig.php", 1);
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
        echo "Upload";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<h3> Subir fichero </h3>

<form method=\"post\" action=\"\" enctype=\"multipart/form-data\">
<br><center>
\t<label for=\"fichero\" >Fichero</label>
\t<input type=\"file\" name=\"fichero\" id=\"fichero\" placeholder=\"Seleccione un fichero\" accept=\".xml,.csv\">
\t</center>
\t<center>
\t\t<button>Enviar</button>
\t</center>
\t<label>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "</label>
</form>

";
    }

    public function getTemplateName()
    {
        return "upload.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %}Upload{% endblock %}
{% block body %}
\t<h3> Subir fichero </h3>

<form method=\"post\" action=\"\" enctype=\"multipart/form-data\">
<br><center>
\t<label for=\"fichero\" >Fichero</label>
\t<input type=\"file\" name=\"fichero\" id=\"fichero\" placeholder=\"Seleccione un fichero\" accept=\".xml,.csv\">
\t</center>
\t<center>
\t\t<button>Enviar</button>
\t</center>
\t<label>{{error}}</label>
</form>

{% endblock %}", "upload.twig.php", "C:\\wamp64\\www\\Proyecto_pwr_github\\templates\\upload.twig.php");
    }
}
