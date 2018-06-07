<?php

/* ::base.html.twig */
class __TwigTemplate_8951763eb3cdddc99d765ef483dfd22bd18467661803c86a27ce07e56a81515b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"full-height\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    </head>
    <body class=\"creative-lp\" style=\"background-color: #f4f5f6;\">

    <style>
        body {
            font-weight: 400;
        }

        h6 {
            line-height: 1.7;
        }

    </style>
     
        ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "        <div id=\"google_translate_element\"></div>
<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {pageLanguage: 'es'},
            'google_translate_element'
        );
    }
</script>
<script src=\"http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>

    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 27,  91 => 26,  86 => 7,  80 => 5,  63 => 28,  60 => 27,  58 => 26,  36 => 8,  34 => 7,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html class="full-height">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         */
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         */
/*     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">*/
/*     <meta http-equiv="x-ua-compatible" content="ie=edge">*/
/*     </head>*/
/*     <body class="creative-lp" style="background-color: #f4f5f6;">*/
/* */
/*     <style>*/
/*         body {*/
/*             font-weight: 400;*/
/*         }*/
/* */
/*         h6 {*/
/*             line-height: 1.7;*/
/*         }*/
/* */
/*     </style>*/
/*      */
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*         <div id="google_translate_element"></div>*/
/* <script>*/
/*     function googleTranslateElementInit() {*/
/*         new google.translate.TranslateElement(*/
/*             {pageLanguage: 'es'},*/
/*             'google_translate_element'*/
/*         );*/
/*     }*/
/* </script>*/
/* <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>*/
/* */
/*     </body>*/
/* </html>*/
/* */
