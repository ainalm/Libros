<?php

/* DWESLibrosBundle:Default:suscripcion.html.twig */
class __TwigTemplate_9ab47bc8ec652b14c29171eab4f88003ee8116e441c974ad34c5160ce375bf96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:suscripcion.html.twig", 1);
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
   <div  class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Fondos/Fondo3.jpg"), "html", null, true);
        echo "'); margin-top: 27px;\">
            <div class=\"flex-center  \" style=\"background-color: rgba(17, 27, 43, 0.7);\">
                <div class=\"container my-5 pt-5\">

                    <!-- Section heading -->
                    <h3 class=\"text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                        <strong>SUSCRIPCIÓN</strong>
                    </h3>
                    <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">Selecciona el plan que más le convenga.</h6>
                    

                </div>
            </div>
        </div> 
            




";
    }

    // line 27
    public function block_contenido($context, array $blocks = array())
    {
        echo " 

<div class=\"container\">

            <!--Section: Pricing v.5-->
            <section class=\"text-center my-5\">

                <!--Section heading-->
                <h2 class=\"title font-weight-bold my-5 wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;\">
                    <strong>Nuestros planes de precios</strong>
                </h2>

                <!--Section description-->
                <p class=\"grey-text w-responsive mx-auto mb-5\">Si tienes un libro en venta publicado en otras plataformas web, anúncialo aquí y házselo llegar a más gente. </p>

                <!--Grid row-->
                <div class=\"row\">

                    <!--Grid column-->
                    <div class=\"col-lg-6 col-md-12 mb-5\">
                        <!--Card-->
                        <div class=\"pricing-card card\" style=\"
                                min-height: 471.08px;
                            \">

                            <!--Content-->
                            <div class=\"card-body\">
                                <h5 class=\"font-weight-bold mt-3\">Gratuita</h5>
                                <!--Price-->
                                <div class=\"price pt-0\">
                                    <h2 class=\" orange-text mb-0\">0</h2>
                                </div>
                                <!--Price-->
                                <ul class=\"list-unstyled striped title\">
                                    <li>
                                        <p>
                                           <strong> ";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["numGratis"]) ? $context["numGratis"] : $this->getContext($context, "numGratis")), "html", null, true);
        echo "</strong> Anuncios de tus libros en venta en cualquier plataforma web</p>
                                    </li>
                                   
                                </ul>
                               
                                ";
        // line 69
        echo "                                    ";
        if ((((isset($context["vencida"]) ? $context["vencida"] : $this->getContext($context, "vencida")) == "vencidaG") && ((isset($context["suscripcion"]) ? $context["suscripcion"] : $this->getContext($context, "suscripcion")) == "gratis"))) {
            // line 70
            echo "                                    <a class=\" btn pink-gradient btn-rounded mb-4 waves-effect waves-light\" style=\"
                                cursor: context-menu;
                            \">Fin prueba gratuita </a>      
                            ";
        } elseif ((        // line 73
(isset($context["suscripcion"]) ? $context["suscripcion"] : $this->getContext($context, "suscripcion")) == "gratis")) {
            // line 74
            echo "                           
                    <a class=\" btn pink-gradient btn-rounded mb-4 waves-effect waves-light\" style=\"
                                cursor: context-menu;
                            \">Plan actual</a>
                            
                                    ";
        }
        // line 80
        echo "                            ";
        if (twig_test_empty((isset($context["suscripcion"]) ? $context["suscripcion"] : $this->getContext($context, "suscripcion")))) {
            // line 81
            echo "                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("dwes_libros_suscriSelect", array("tipo" => "gratis"));
            echo "\" class=\"btn pink-gradient btn-rounded mb-4 waves-effect waves-light\">Seleccionar  </a>
                           ";
        }
        // line 83
        echo "                                ";
        if (((((isset($context["vencida"]) ? $context["vencida"] : $this->getContext($context, "vencida")) == "vencidaE") || (((isset($context["vencida"]) ? $context["vencida"] : $this->getContext($context, "vencida")) == "vencidaG") && ((isset($context["suscripcion"]) ? $context["suscripcion"] : $this->getContext($context, "suscripcion")) != "gratis"))) || ((isset($context["suscripcion"]) ? $context["suscripcion"] : $this->getContext($context, "suscripcion")) == "basica"))) {
            echo " 
                             <a class=\" btn pink-gradient btn-rounded mb-4 waves-effect waves-light\" style=\"
                                cursor: context-menu;
                            \">Fin prueba gratuita </a>
                            ";
        }
        // line 88
        echo "
                            </div>
                        </div>
                        <!--Card-->
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class=\"col-lg-6 col-md-12 mb-5\">

                        <!-- Card -->
                        <div class=\"card card-image\" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table%20(8).jpg');min-height: 471.08px;\">

                            <!-- Content -->
                            <div class=\"text-white text-center pricing-card d-flex align-items-center rgba-indigo-strong py-3 px-3 rounded\" style=\"
    min-height: 471.08px;
\">

                                <!--Content-->
                                <div class=\"card-body\">
                                    <h5 class=\"font-weight-bold mt-2\">Premium</h5>
                                    <!--Price-->
                                    <div class=\"price pt-0\">
                                        <h2 class=\"number mb-0\">9,99</h2>
                                    </div>
                                    <!--Price-->
                                    <ul class=\"list-unstyled striped\">
                                        <li>
                                            <p>
                                                <strong>";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["numBasica"]) ? $context["numBasica"] : $this->getContext($context, "numBasica")), "html", null, true);
        echo "</strong> Anuncios de tus libros en venta en cualquier plataforma web</p>
                                        </li>
                                          
                                        
                                    </ul>
                                    
                                       ";
        // line 123
        if (((isset($context["suscripcion"]) ? $context["suscripcion"] : $this->getContext($context, "suscripcion")) == "basica")) {
            // line 124
            echo "                                          
                    <a href=\"";
            // line 125
            echo $this->env->getExtension('routing')->getPath("dwes_libros_delSuscri", array("tipo" => "basica"));
            echo "\" class=\"btn btn-rounded btn-outline-white waves-effect waves-light\">Cancelar suscripción</a>
                            ";
        } else {
            // line 127
            echo "                           ";
            // line 128
            echo "                                    <form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
<input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
<input type=\"hidden\" name=\"hosted_button_id\" value=\"X39M4FKKMDE8Q\">
<table style=\"display:none\">
<tr><td><input type=\"hidden\" name=\"on0\" value=\"Compre ahora !\">Compre ahora !</td></tr><tr><td><input type=\"text\" name=\"os0\" maxlength=\"200\"></td></tr>
</table>
<input type=\"image\" src=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Icons/pay.png"), "html", null, true);
            echo "\" class=\"btn btn-rounded btn-outline-white waves-effect waves-light\" border=\"0\" name=\"submit\" alt=\"PayPal, la forma rápida y segura de pagar en Internet.\">
<img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/es_ES/i/scr/pixel.gif\" width=\"1\" height=\"1\">
</form>
                                    ";
        }
        // line 138
        echo "                                                   


                                </div>

                            </div>
                        </div>
                        <!--Card-->
                    </div>
                    <!--Grid column-->

                    

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Pricing v.5-->

        </div>
";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:suscripcion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 138,  203 => 134,  195 => 128,  193 => 127,  188 => 125,  185 => 124,  183 => 123,  174 => 117,  143 => 88,  134 => 83,  128 => 81,  125 => 80,  117 => 74,  115 => 73,  110 => 70,  107 => 69,  99 => 63,  59 => 27,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block portada %}*/
/*     <!--Intro Section-->*/
/*    <div  class="streak streak-photo streak-md  portada " style="background-image: url('{{ asset('bundles/dweslibros/img/Fondos/Fondo3.jpg') }}'); margin-top: 27px;">*/
/*             <div class="flex-center  " style="background-color: rgba(17, 27, 43, 0.7);">*/
/*                 <div class="container my-5 pt-5">*/
/* */
/*                     <!-- Section heading -->*/
/*                     <h3 class="text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                         <strong>SUSCRIPCIÓN</strong>*/
/*                     </h3>*/
/*                     <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">Selecciona el plan que más le convenga.</h6>*/
/*                     */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div> */
/*             */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block contenido %} */
/* */
/* <div class="container">*/
/* */
/*             <!--Section: Pricing v.5-->*/
/*             <section class="text-center my-5">*/
/* */
/*                 <!--Section heading-->*/
/*                 <h2 class="title font-weight-bold my-5 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">*/
/*                     <strong>Nuestros planes de precios</strong>*/
/*                 </h2>*/
/* */
/*                 <!--Section description-->*/
/*                 <p class="grey-text w-responsive mx-auto mb-5">Si tienes un libro en venta publicado en otras plataformas web, anúncialo aquí y házselo llegar a más gente. </p>*/
/* */
/*                 <!--Grid row-->*/
/*                 <div class="row">*/
/* */
/*                     <!--Grid column-->*/
/*                     <div class="col-lg-6 col-md-12 mb-5">*/
/*                         <!--Card-->*/
/*                         <div class="pricing-card card" style="*/
/*                                 min-height: 471.08px;*/
/*                             ">*/
/* */
/*                             <!--Content-->*/
/*                             <div class="card-body">*/
/*                                 <h5 class="font-weight-bold mt-3">Gratuita</h5>*/
/*                                 <!--Price-->*/
/*                                 <div class="price pt-0">*/
/*                                     <h2 class=" orange-text mb-0">0</h2>*/
/*                                 </div>*/
/*                                 <!--Price-->*/
/*                                 <ul class="list-unstyled striped title">*/
/*                                     <li>*/
/*                                         <p>*/
/*                                            <strong> {{numGratis}}</strong> Anuncios de tus libros en venta en cualquier plataforma web</p>*/
/*                                     </li>*/
/*                                    */
/*                                 </ul>*/
/*                                */
/*                                 {# {% if suscripcion == "gratis" %} #}*/
/*                                     {% if vencida == "vencidaG" and suscripcion == "gratis" %}*/
/*                                     <a class=" btn pink-gradient btn-rounded mb-4 waves-effect waves-light" style="*/
/*                                 cursor: context-menu;*/
/*                             ">Fin prueba gratuita </a>      */
/*                             {% elseif  suscripcion == "gratis" %}*/
/*                            */
/*                     <a class=" btn pink-gradient btn-rounded mb-4 waves-effect waves-light" style="*/
/*                                 cursor: context-menu;*/
/*                             ">Plan actual</a>*/
/*                             */
/*                                     {% endif %}*/
/*                             {% if suscripcion is empty %}*/
/*                             <a href="{{ path('dwes_libros_suscriSelect',{'tipo' : 'gratis' } )}}" class="btn pink-gradient btn-rounded mb-4 waves-effect waves-light">Seleccionar  </a>*/
/*                            {% endif %}*/
/*                                 {% if vencida == "vencidaE" or vencida =="vencidaG" and suscripcion != "gratis" or suscripcion =="basica" %} */
/*                              <a class=" btn pink-gradient btn-rounded mb-4 waves-effect waves-light" style="*/
/*                                 cursor: context-menu;*/
/*                             ">Fin prueba gratuita </a>*/
/*                             {% endif%}*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                         <!--Card-->*/
/*                     </div>*/
/*                     <!--Grid column-->*/
/* */
/*                     <!--Grid column-->*/
/*                     <div class="col-lg-6 col-md-12 mb-5">*/
/* */
/*                         <!-- Card -->*/
/*                         <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table%20(8).jpg');min-height: 471.08px;">*/
/* */
/*                             <!-- Content -->*/
/*                             <div class="text-white text-center pricing-card d-flex align-items-center rgba-indigo-strong py-3 px-3 rounded" style="*/
/*     min-height: 471.08px;*/
/* ">*/
/* */
/*                                 <!--Content-->*/
/*                                 <div class="card-body">*/
/*                                     <h5 class="font-weight-bold mt-2">Premium</h5>*/
/*                                     <!--Price-->*/
/*                                     <div class="price pt-0">*/
/*                                         <h2 class="number mb-0">9,99</h2>*/
/*                                     </div>*/
/*                                     <!--Price-->*/
/*                                     <ul class="list-unstyled striped">*/
/*                                         <li>*/
/*                                             <p>*/
/*                                                 <strong>{{numBasica}}</strong> Anuncios de tus libros en venta en cualquier plataforma web</p>*/
/*                                         </li>*/
/*                                           */
/*                                         */
/*                                     </ul>*/
/*                                     */
/*                                        {% if suscripcion == "basica"  %}*/
/*                                           */
/*                     <a href="{{ path('dwes_libros_delSuscri',{'tipo' : 'basica' } )}}" class="btn btn-rounded btn-outline-white waves-effect waves-light">Cancelar suscripción</a>*/
/*                             {% else %}*/
/*                            {#  <a href="{{ path('dwes_libros_suscriSelect',{'tipo' : 'basica' } )}}" class="btn btn-rounded btn-outline-white waves-effect waves-light"><i class="fab fa-paypal"></i> Pagar con Pay Pal</a> #}*/
/*                                     <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">*/
/* <input type="hidden" name="cmd" value="_s-xclick">*/
/* <input type="hidden" name="hosted_button_id" value="X39M4FKKMDE8Q">*/
/* <table style="display:none">*/
/* <tr><td><input type="hidden" name="on0" value="Compre ahora !">Compre ahora !</td></tr><tr><td><input type="text" name="os0" maxlength="200"></td></tr>*/
/* </table>*/
/* <input type="image" src="{{ asset('bundles/dweslibros/img/Icons/pay.png') }}" class="btn btn-rounded btn-outline-white waves-effect waves-light" border="0" name="submit" alt="PayPal, la forma rápida y segura de pagar en Internet.">*/
/* <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">*/
/* </form>*/
/*                                     {% endif %}*/
/*                                                    */
/* */
/* */
/*                                 </div>*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                         <!--Card-->*/
/*                     </div>*/
/*                     <!--Grid column-->*/
/* */
/*                     */
/* */
/*                 </div>*/
/*                 <!--Grid row-->*/
/* */
/*             </section>*/
/*             <!--Section: Pricing v.5-->*/
/* */
/*         </div>*/
/* {%endblock %}*/
