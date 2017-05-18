<?php

/* layout/plantillaBase.twig.php */
class __TwigTemplate_8afbab084251e1411bb165a4f590fd9b622ae97385592f1d9233cb36e2dae97c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assets/jquery-2.2.1/jquery-2.2.1.min.js\"></script>\t\t\t
\t<!-- Bootstrap -->
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assets/bootstrap-3.3.6-dist/css/bootstrap.min.css\">
\t<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assets/bootstrap-3.3.6-dist/js/bootstrap.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assets/jquery-3.1.1.js\"></script>
</head>
<body>
\t<div class=\"well\" align=\"center\"><h2>FICHA DE CLASE:</h2>
\t";
        // line 15
        if (((isset($context["usuario"]) ? $context["usuario"] : null) == false)) {
            // line 16
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("Login"), "html", null, true);
            echo "\">Login</a>&nbsp;|&nbsp;
\t\t<a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("Acerca_de"), "html", null, true);
            echo "\">Acerca de</a>&nbsp;|&nbsp;
\t";
        } else {
            // line 19
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("Inicio"), "html", null, true);
            echo "\">Inicio</a>&nbsp;|&nbsp;
\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("Upload"), "html", null, true);
            echo "\">Subir fichero</a>&nbsp;|&nbsp;
\t\t<a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("Acerca_de"), "html", null, true);
            echo "\">Acerca de</a>&nbsp;|&nbsp;
\t\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("Logout"), "html", null, true);
            echo "\">Salir</a>
\t</div> 
\t";
        }
        // line 25
        echo "\t<hr>
\t<div align=\"center\">
\t\t";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "\t\t<hr>
\t</div>
\t<div align=\"center\">
\t\t&copy;2017 Todos los derechos reservados
\t</div>
\t<script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../js/otorgarLicencias.js?tiempo=<?=tiempo();?>\"></script>
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Gestor de licencias";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout/plantillaBase.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  103 => 5,  96 => 33,  89 => 28,  87 => 27,  83 => 25,  77 => 22,  73 => 21,  69 => 20,  64 => 19,  59 => 17,  54 => 16,  52 => 15,  45 => 11,  41 => 10,  37 => 9,  32 => 7,  27 => 5,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>{% block title %}Gestor de licencias{% endblock %}</title>

\t<script type=\"text/javascript\" src=\"{{base_url()}}/../assets/jquery-2.2.1/jquery-2.2.1.min.js\"></script>\t\t\t
\t<!-- Bootstrap -->
\t<link rel=\"stylesheet\" href=\"{{base_url()}}/../assets/bootstrap-3.3.6-dist/css/bootstrap.min.css\">
\t<script type=\"text/javascript\" src=\"{{base_url()}}/../assets/bootstrap-3.3.6-dist/js/bootstrap.min.js\"></script>
\t<script type=\"text/javascript\" src=\"{{base_url()}}/../assets/jquery-3.1.1.js\"></script>
</head>
<body>
\t<div class=\"well\" align=\"center\"><h2>FICHA DE CLASE:</h2>
\t{% if usuario == false %}
\t\t<a href=\"{{ path_for('Login') }}\">Login</a>&nbsp;|&nbsp;
\t\t<a href=\"{{ path_for('Acerca_de') }}\">Acerca de</a>&nbsp;|&nbsp;
\t{% else %}
\t\t<a href=\"{{ path_for('Inicio') }}\">Inicio</a>&nbsp;|&nbsp;
\t\t<a href=\"{{ path_for('Upload') }}\">Subir fichero</a>&nbsp;|&nbsp;
\t\t<a href=\"{{ path_for('Acerca_de') }}\">Acerca de</a>&nbsp;|&nbsp;
\t\t<a href=\"{{ path_for('Logout') }}\">Salir</a>
\t</div> 
\t{% endif %}
\t<hr>
\t<div align=\"center\">
\t\t{% block body %}{% endblock %}
\t\t<hr>
\t</div>
\t<div align=\"center\">
\t\t&copy;2017 Todos los derechos reservados
\t</div>
\t<script type=\"text/javascript\" src=\"{{base_url()}}/../js/otorgarLicencias.js?tiempo=<?=tiempo();?>\"></script>
</body>
</html>", "layout/plantillaBase.twig.php", "C:\\wamp64\\www\\Proyecto_pwr_github\\templates\\layout\\plantillaBase.twig.php");
    }
}
