<?php

/* DWESLibrosBundle::layout.html.twig */
class __TwigTemplate_ea5367f4f82112b319f32081adbb83c28a20f193aac35f5e917ff561995b7359 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DWESLibrosBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<header>\t
\t<h1>PÁGINA DE LIBROS</h1>
</header>
<nav>
\t<ul>
\t\t<li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("dwes_libros_homepage");
        echo "\">inicio</a></li>
\t</ul>
</nav>
<main>\t
\t";
        // line 12
        $this->displayBlock('contenido', $context, $blocks);
        // line 14
        echo "</main>
<footer>
\t- DWES –
</footer>
";
    }

    // line 12
    public function block_contenido($context, array $blocks = array())
    {
        // line 13
        echo "\t";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/css/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  64 => 19,  60 => 13,  57 => 12,  49 => 14,  47 => 12,  40 => 8,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* <header>	*/
/* 	<h1>PÁGINA DE LIBROS</h1>*/
/* </header>*/
/* <nav>*/
/* 	<ul>*/
/* 		<li><a href="{{ path('dwes_libros_homepage') }}">inicio</a></li>*/
/* 	</ul>*/
/* </nav>*/
/* <main>	*/
/* 	{% block contenido %}*/
/* 	{% endblock %}*/
/* </main>*/
/* <footer>*/
/* 	- DWES –*/
/* </footer>*/
/* {% endblock %}*/
/* {% block stylesheets %}*/
/* <link href="{{ asset('bundles/dweslibros/css/estilo.css') }}" type="text/css" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
