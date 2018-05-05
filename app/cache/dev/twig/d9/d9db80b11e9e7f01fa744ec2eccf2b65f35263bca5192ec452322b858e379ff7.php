<?php

/* DWESLibrosBundle:Default:capitulo.html.twig */
class __TwigTemplate_2b848cac2b16a7b968a317c4c33191241c870f6eb45ac64744cf9a9058427c8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:capitulo.html.twig", 1);
        $this->blocks = array(
            'portada' => array($this, 'block_portada'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DWESLibrosBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_portada($context, array $blocks = array())
    {
        // line 6
        echo "    <!--Intro Section-->
   <div  class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Fondos/Fondo2.jpg"), "html", null, true);
        echo "');margin-top: 57px;\">
            <div class=\"flex-center\" style=\"background-color: rgba(17, 27, 43, 0.7);\">
                <div class=\"container my-5 pt-5\">

                    <!-- Section heading -->
                    <h3 class=\"text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                        <strong>BIBLIOTECA</strong>
                    </h3>
                    <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">¡Es gratis!</h6>
                    

                </div>
            </div>
        </div> 
            

";
    }

    // line 24
    public function block_contenido($context, array $blocks = array())
    {
        echo " 

";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:capitulo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 24,  35 => 7,  32 => 6,  29 => 5,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %}*/
/* */
/* */
/* */
/* {% block portada %}*/
/*     <!--Intro Section-->*/
/*    <div  class="streak streak-photo streak-md  portada " style="background-image: url('{{ asset('bundles/dweslibros/img/Fondos/Fondo2.jpg') }}');margin-top: 57px;">*/
/*             <div class="flex-center" style="background-color: rgba(17, 27, 43, 0.7);">*/
/*                 <div class="container my-5 pt-5">*/
/* */
/*                     <!-- Section heading -->*/
/*                     <h3 class="text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                         <strong>BIBLIOTECA</strong>*/
/*                     </h3>*/
/*                     <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">¡Es gratis!</h6>*/
/*                     */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div> */
/*             */
/* */
/* {% endblock %}*/
/* {% block contenido %} */
/* */
/* {%endblock %}*/
