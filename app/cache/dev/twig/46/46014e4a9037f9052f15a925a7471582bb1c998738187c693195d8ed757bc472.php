<?php

/* DWESLibrosBundle:Default:suscriSelec.html.twig */
class __TwigTemplate_c06671fd11dec35246c3c77f24febf7b45a1318629f696ef2addcd7182ddd053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:suscriSelec.html.twig", 1);
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

    // line 4
    public function block_portada($context, array $blocks = array())
    {
        // line 5
        echo "    <!--Intro Section-->
   <div  class=\"streak streak-photo streak-md  view jarallax  portada \" style=\"background-image: url('";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Fondos/Fondo3.jpg"), "html", null, true);
        echo "'); margin-top: 27px;\">
        <div class=\" mask rgba-indigo-light  \" style=\"background-color: rgba(17, 27, 43, 0.7);\">
            <div class=\"flex-center  \" style=\"background-color: rgba(17, 27, 43, 0.7);\">
                <div class=\"container my-5 pt-5\">


            <div class=\"text-center white-text\">
                                <ul class=\"list-unstyled \">
                                    <li>
                                        <h1 class=\"display-4 mt-md-5 mt-lg-0 mb-5 font-weight-bold white-text wow fadeIn animated\" data-wow-delay=\"0.3s\" style=\"visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;\">
                                            <strong>
                                                 ¡ GRACIAS POR SU CONFIANZA !</strong>
                                        </h1> 
                                    </li>
                                    <li>
                                        <h5 class=\"white-text description mb-5 wow fadeIn animated\" data-wow-delay=\"0.4s\" style=\"visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;\">
                                           ";
        // line 22
        if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "gratis")) {
            echo " 
                Su suscripción <span  class=\"red-text\"> GRATUITA </span> ha sido seleccionada con éxito.<br>
                  <a class=\"btn blue-gradient waves-effect waves-light mt-4\" href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("dwes_libros_escribirhistoria", array("tipo" => "anuncio"));
            echo "\">Anunciar mi libro</a>
                ";
            // line 26
            echo "                  
                ";
        } elseif ((        // line 27
(isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "basica")) {
            echo "  
                Su suscripción <span  class=\"red-text\"> PREMIUM</span> ha sido seleccionada con éxito.<br>
                 <a class=\"btn blue-gradient waves-effect waves-light mt-4\" href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("dwes_libros_escribirhistoria", array("tipo" => "anuncio"));
            echo "\">Anunciar mi libro</a>
               ";
            // line 31
            echo "                 ";
        } elseif (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "cancelar")) {
            echo " 
                  Suscripción <span  class=\"red-text\">CANCELADA</span>   con éxito.<br>
                 ";
            // line 34
            echo "                  

                 ";
        }
        // line 37
        echo "                                        </h5>
                                    </li>
                                </ul>
                            </div>

            </div>
            </div>
        </div>
        </div>
";
    }

    // line 48
    public function block_contenido($context, array $blocks = array())
    {
        echo "  

";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:suscriSelec.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 48,  86 => 37,  81 => 34,  75 => 31,  71 => 29,  66 => 27,  63 => 26,  59 => 24,  54 => 22,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block portada %}*/
/*     <!--Intro Section-->*/
/*    <div  class="streak streak-photo streak-md  view jarallax  portada " style="background-image: url('{{ asset('bundles/dweslibros/img/Fondos/Fondo3.jpg') }}'); margin-top: 27px;">*/
/*         <div class=" mask rgba-indigo-light  " style="background-color: rgba(17, 27, 43, 0.7);">*/
/*             <div class="flex-center  " style="background-color: rgba(17, 27, 43, 0.7);">*/
/*                 <div class="container my-5 pt-5">*/
/* */
/* */
/*             <div class="text-center white-text">*/
/*                                 <ul class="list-unstyled ">*/
/*                                     <li>*/
/*                                         <h1 class="display-4 mt-md-5 mt-lg-0 mb-5 font-weight-bold white-text wow fadeIn animated" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">*/
/*                                             <strong>*/
/*                                                  ¡ GRACIAS POR SU CONFIANZA !</strong>*/
/*                                         </h1> */
/*                                     </li>*/
/*                                     <li>*/
/*                                         <h5 class="white-text description mb-5 wow fadeIn animated" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">*/
/*                                            {% if tipo == "gratis" %} */
/*                 Su suscripción <span  class="red-text"> GRATUITA </span> ha sido seleccionada con éxito.<br>*/
/*                   <a class="btn blue-gradient waves-effect waves-light mt-4" href="{{ path('dwes_libros_escribirhistoria', {'tipo' : "anuncio"}) }}">Anunciar mi libro</a>*/
/*                 {#  <a class="btn blue-gradient waves-effect waves-light mt-4" href="{{ path('dwes_libros_suscripcion') }}"><i class="fas fa-cogs"></i> suscripción</a> #}*/
/*                   */
/*                 {% elseif tipo == "basica" %}  */
/*                 Su suscripción <span  class="red-text"> PREMIUM</span> ha sido seleccionada con éxito.<br>*/
/*                  <a class="btn blue-gradient waves-effect waves-light mt-4" href="{{ path('dwes_libros_escribirhistoria', {'tipo' : "anuncio"}) }}">Anunciar mi libro</a>*/
/*                {#   <a class="btn blue-gradient waves-effect waves-light mt-4" href="{{ path('dwes_libros_suscripcion') }}"><i class="fas fa-cogs"></i> suscripción</a> #}*/
/*                  {% elseif tipo == "cancelar" %} */
/*                   Suscripción <span  class="red-text">CANCELADA</span>   con éxito.<br>*/
/*                  {# <a class="btn blue-gradient waves-effect waves-light mt-4" href="{{ path('dwes_libros_suscripcion') }}"><i class="fas fa-cogs"></i> suscripción</a> #}*/
/*                   */
/* */
/*                  {% endif %}*/
/*                                         </h5>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/* */
/*             </div>*/
/*             </div>*/
/*         </div>*/
/*         </div>*/
/* {% endblock %}*/
/* */
/* {% block contenido %}  */
/* */
/* {%endblock %}*/
