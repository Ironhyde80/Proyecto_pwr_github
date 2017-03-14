<?php

/* login.twig.php */
class __TwigTemplate_87ea54a0569c1f058ee3c22860d345205526d8964cdff5a9c227f3acbff3c7e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/plantillaBase.twig.php", "login.twig.php", 1);
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
        echo "Login";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<h3> Login </h3>

<form method=\"post\" action=\"\">
<br><center>
\t<label for=\"usuario\" >Usuario:</label>
\t<input type=\"text\" name=\"usuario\" id=\"usuario\" placeholder=\"Ingrese el usuario\">
\t</center>
<br><center>
\t<label for=\"login\">Contraseña:</label>
\t<input type=\"text\" name=\"clave\" id=\"clave\" placeholder=\"Ingrese la clave\">
\t</center>
\t<br>
\t<center>
\t\t<button>Login</button>
\t</center>
</form>

";
    }

    public function getTemplateName()
    {
        return "login.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %}Login{% endblock %}
{% block body %}

<h3> Login </h3>

<form method=\"post\" action=\"\">
<br><center>
\t<label for=\"usuario\" >Usuario:</label>
\t<input type=\"text\" name=\"usuario\" id=\"usuario\" placeholder=\"Ingrese el usuario\">
\t</center>
<br><center>
\t<label for=\"login\">Contraseña:</label>
\t<input type=\"text\" name=\"clave\" id=\"clave\" placeholder=\"Ingrese la clave\">
\t</center>
\t<br>
\t<center>
\t\t<button>Login</button>
\t</center>
</form>

{% endblock %}", "login.twig.php", "C:\\wamp64\\www\\Proyecto_pwr_github\\templates\\login.twig.php");
    }
}
