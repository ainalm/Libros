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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Fondos/Fondo2.jpg"), "html", null, true);
        echo "'); margin-top: 27px;\">
            <div class=\"flex-center  \" style=\"background-color: rgba(17, 27, 43, 0.7);\">
                <div class=\"container my-5 pt-5\">

                    <!-- Section heading -->
                    <h3 class=\"text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                        <strong>Suscripción</strong>
                    </h3>
                    <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">@";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h6>
                    

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
                <p class=\"grey-text w-responsive mx-auto mb-5\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
                    esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

                <!--Grid row-->
                <div class=\"row\">

                    <!--Grid column-->
                    <div class=\"col-lg-4 col-md-12 mb-5\">
                        <!--Card-->
                        <div class=\"pricing-card card\" style=\"
    min-height: 471.08px;
\">

                            <!--Content-->
                            <div class=\"card-body\">
                                <h5 class=\"font-weight-bold mt-3\">Gratuita</h5>
                                <!--Price-->
                                <div class=\"price pt-0\">
                                    <h2 class=\"number orange-text mb-0\">10</h2>
                                </div>
                                <!--Price-->
                                <ul class=\"list-unstyled striped title\">
                                    <li>
                                        <p>
                                           <strong>";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["numGratis"]) ? $context["numGratis"] : $this->getContext($context, "numGratis")), "html", null, true);
        echo "</strong> Anuncios de tus libros en venta en cualquier plataforma web</p>
                                    </li>
                                   
                                </ul>
                               
                                ";
        // line 69
        echo "                                    ";
        if ((((isset($context["vencida"]) ? $context["vencida"] : $this->getContext($context, "vencida")) == "vencida") && ((isset($context["suscripcion"]) ? $context["suscripcion"] : $this->getContext($context, "suscripcion")) == "gratis"))) {
            // line 70
            echo "                                    <a class=\" btn pink-gradient btn-rounded mb-4 waves-effect waves-light\" style=\"
                                cursor: context-menu;
                            \">Prueba gratuita finalizada </a>
                                                
                                    
                                          
                            ";
        } elseif ((        // line 76
(isset($context["suscripcion"]) ? $context["suscripcion"] : $this->getContext($context, "suscripcion")) == "gratis")) {
            // line 77
            echo "                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("dwes_libros_suscriSelect", array("tipo" => "gratis"));
            echo "\" class=\"btn pink-gradient btn-rounded mb-4 waves-effect waves-light\" style=\"
                                cursor: context-menu;
                            \">Plan actual </a>
                                    ";
        }
        // line 81
        echo "                            ";
        if (twig_test_empty((isset($context["suscripcion"]) ? $context["suscripcion"] : $this->getContext($context, "suscripcion")))) {
            // line 82
            echo "                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("dwes_libros_suscriSelect", array("tipo" => "gratis"));
            echo "\" class=\"btn pink-gradient btn-rounded mb-4 waves-effect waves-light\">Seleccionar </a>


                           ";
        }
        // line 86
        echo "                           ";
        // line 88
        echo " 

                                ";
        // line 90
        if ((((isset($context["vencida"]) ? $context["vencida"] : $this->getContext($context, "vencida")) == "vencida") && ((isset($context["suscripcion"]) ? $context["suscripcion"] : $this->getContext($context, "suscripcion")) != "gratis"))) {
            echo " 
                             <a class=\" btn pink-gradient btn-rounded mb-4 waves-effect waves-light\" style=\"
                                cursor: context-menu;
                            \">Prueba gratuita finalizada </a>
                            ";
        }
        // line 95
        echo "
                            </div>
                        </div>
                        <!--Card-->
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class=\"col-lg-4 col-md-12 mb-5\">

                        <!-- Card -->
                        <div class=\"card card-image\" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table%20(8).jpg');min-height: 471.08px;\">

                            <!-- Content -->
                            <div class=\"text-white text-center pricing-card d-flex align-items-center rgba-indigo-strong py-3 px-3 rounded\" style=\"
    min-height: 471.08px;
\">

                                <!--Content-->
                                <div class=\"card-body\">
                                    <h5 class=\"font-weight-bold mt-2\">Básica</h5>
                                    <!--Price-->
                                    <div class=\"price pt-0\">
                                        <h2 class=\"number mb-0\">20</h2>
                                    </div>
                                    <!--Price-->
                                    <ul class=\"list-unstyled striped\">
                                        <li>
                                            <p>
                                                <strong>";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["numBasica"]) ? $context["numBasica"] : $this->getContext($context, "numBasica")), "html", null, true);
        echo "</strong> Anuncios de tus libros en venta en cualquier plataforma web</p>
                                        </li>
                                          
                                        
                                    </ul>
                                    
                                       ";
        // line 130
        if (((isset($context["suscripcion"]) ? $context["suscripcion"] : $this->getContext($context, "suscripcion")) == "basica")) {
            // line 131
            echo "                                                <a class=\" btn btn-rounded btn-outline-white waves-effect waves-light\" style=\"
                        cursor: context-menu;
                    \">Plan actual </a>
                            ";
        } else {
            // line 135
            echo "                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("dwes_libros_suscriSelect", array("tipo" => "basica"));
            echo "\" class=\"btn btn-rounded btn-outline-white waves-effect waves-light\">Seleccionar</a>
                                    ";
        }
        // line 137
        echo "
                                </div>

                            </div>
                        </div>
                        <!--Card-->
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class=\"col-lg-4 col-md-12 mb-5\">
                        <!--Card-->
                        <div class=\"pricing-card card\" style=\"
                            min-height: 471.08px;
                        \">

                            <!--Content-->
                            <div class=\"card-body\">
                                <h5 class=\"font-weight-bold mt-3\">Premium</h5>
                                <!--Price-->
                                <div class=\"price pt-0\">
                                    <h2 class=\"number orange-text mb-0\">30</h2>
                                </div>
                                <!--Price-->
                                <ul class=\"list-unstyled striped title\">
                                    <li>
                                        <p>
                                            <strong>";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["numPremium"]) ? $context["numPremium"] : $this->getContext($context, "numPremium")), "html", null, true);
        echo "</strong> Anuncios de tus libros en venta en cualquier plataforma web</p>
                                    </li>
                                    
                                </ul>
                                 ";
        // line 168
        if (((isset($context["suscripcion"]) ? $context["suscripcion"] : $this->getContext($context, "suscripcion")) == "premium")) {
            // line 169
            echo "                                                <a class=\" btn pink-gradient btn-rounded mb-4 waves-effect waves-light\" style=\"
                        cursor: context-menu;\">Plan actual</a>
                            ";
        } else {
            // line 172
            echo "                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("dwes_libros_suscriSelect", array("tipo" => "premium"));
            echo "\" class=\"btn pink-gradient btn-rounded mb-4 waves-effect waves-light\">Seleccionar</a>
                                    ";
        }
        // line 174
        echo "                                    
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
        return array (  259 => 174,  253 => 172,  248 => 169,  246 => 168,  239 => 164,  210 => 137,  204 => 135,  198 => 131,  196 => 130,  187 => 124,  156 => 95,  148 => 90,  144 => 88,  142 => 86,  134 => 82,  131 => 81,  123 => 77,  121 => 76,  113 => 70,  110 => 69,  102 => 63,  62 => 27,  46 => 14,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block portada %}*/
/*     <!--Intro Section-->*/
/*    <div  class="streak streak-photo streak-md  portada " style="background-image: url('{{ asset('bundles/dweslibros/img/Fondos/Fondo2.jpg') }}'); margin-top: 27px;">*/
/*             <div class="flex-center  " style="background-color: rgba(17, 27, 43, 0.7);">*/
/*                 <div class="container my-5 pt-5">*/
/* */
/*                     <!-- Section heading -->*/
/*                     <h3 class="text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                         <strong>Suscripción</strong>*/
/*                     </h3>*/
/*                     <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">@{{ app.user.username }}</h6>*/
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
/*                 <p class="grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate*/
/*                     esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>*/
/* */
/*                 <!--Grid row-->*/
/*                 <div class="row">*/
/* */
/*                     <!--Grid column-->*/
/*                     <div class="col-lg-4 col-md-12 mb-5">*/
/*                         <!--Card-->*/
/*                         <div class="pricing-card card" style="*/
/*     min-height: 471.08px;*/
/* ">*/
/* */
/*                             <!--Content-->*/
/*                             <div class="card-body">*/
/*                                 <h5 class="font-weight-bold mt-3">Gratuita</h5>*/
/*                                 <!--Price-->*/
/*                                 <div class="price pt-0">*/
/*                                     <h2 class="number orange-text mb-0">10</h2>*/
/*                                 </div>*/
/*                                 <!--Price-->*/
/*                                 <ul class="list-unstyled striped title">*/
/*                                     <li>*/
/*                                         <p>*/
/*                                            <strong>{{numGratis}}</strong> Anuncios de tus libros en venta en cualquier plataforma web</p>*/
/*                                     </li>*/
/*                                    */
/*                                 </ul>*/
/*                                */
/*                                 {# {% if suscripcion == "gratis" %} #}*/
/*                                     {% if vencida == "vencida" and suscripcion == "gratis" %}*/
/*                                     <a class=" btn pink-gradient btn-rounded mb-4 waves-effect waves-light" style="*/
/*                                 cursor: context-menu;*/
/*                             ">Prueba gratuita finalizada </a>*/
/*                                                 */
/*                                     */
/*                                           */
/*                             {% elseif  suscripcion == "gratis" %}*/
/*                             <a href="{{ path('dwes_libros_suscriSelect',{'tipo' : 'gratis' } )}}" class="btn pink-gradient btn-rounded mb-4 waves-effect waves-light" style="*/
/*                                 cursor: context-menu;*/
/*                             ">Plan actual </a>*/
/*                                     {% endif %}*/
/*                             {% if suscripcion is empty %}*/
/*                             <a href="{{ path('dwes_libros_suscriSelect',{'tipo' : 'gratis' } )}}" class="btn pink-gradient btn-rounded mb-4 waves-effect waves-light">Seleccionar </a>*/
/* */
/* */
/*                            {% endif %}*/
/*                            {# {% endif %}*/
/*                             <a href="{{ path('dwes_libros_suscriSelect',{'tipo' : 'gratis' } )}}" class="btn pink-gradient btn-rounded mb-4 waves-effect waves-light">Seleccionar {{vencida}}2</a>*/
/*                                    #} */
/* */
/*                                 {% if vencida == "vencida" and suscripcion != "gratis" %} */
/*                              <a class=" btn pink-gradient btn-rounded mb-4 waves-effect waves-light" style="*/
/*                                 cursor: context-menu;*/
/*                             ">Prueba gratuita finalizada </a>*/
/*                             {% endif %}*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                         <!--Card-->*/
/*                     </div>*/
/*                     <!--Grid column-->*/
/* */
/*                     <!--Grid column-->*/
/*                     <div class="col-lg-4 col-md-12 mb-5">*/
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
/*                                     <h5 class="font-weight-bold mt-2">Básica</h5>*/
/*                                     <!--Price-->*/
/*                                     <div class="price pt-0">*/
/*                                         <h2 class="number mb-0">20</h2>*/
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
/*                                                 <a class=" btn btn-rounded btn-outline-white waves-effect waves-light" style="*/
/*                         cursor: context-menu;*/
/*                     ">Plan actual </a>*/
/*                             {% else %}*/
/*                             <a href="{{ path('dwes_libros_suscriSelect',{'tipo' : 'basica' } )}}" class="btn btn-rounded btn-outline-white waves-effect waves-light">Seleccionar</a>*/
/*                                     {% endif %}*/
/* */
/*                                 </div>*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                         <!--Card-->*/
/*                     </div>*/
/*                     <!--Grid column-->*/
/* */
/*                     <!--Grid column-->*/
/*                     <div class="col-lg-4 col-md-12 mb-5">*/
/*                         <!--Card-->*/
/*                         <div class="pricing-card card" style="*/
/*                             min-height: 471.08px;*/
/*                         ">*/
/* */
/*                             <!--Content-->*/
/*                             <div class="card-body">*/
/*                                 <h5 class="font-weight-bold mt-3">Premium</h5>*/
/*                                 <!--Price-->*/
/*                                 <div class="price pt-0">*/
/*                                     <h2 class="number orange-text mb-0">30</h2>*/
/*                                 </div>*/
/*                                 <!--Price-->*/
/*                                 <ul class="list-unstyled striped title">*/
/*                                     <li>*/
/*                                         <p>*/
/*                                             <strong>{{numPremium}}</strong> Anuncios de tus libros en venta en cualquier plataforma web</p>*/
/*                                     </li>*/
/*                                     */
/*                                 </ul>*/
/*                                  {% if suscripcion == "premium"  %}*/
/*                                                 <a class=" btn pink-gradient btn-rounded mb-4 waves-effect waves-light" style="*/
/*                         cursor: context-menu;">Plan actual</a>*/
/*                             {% else %}*/
/*                             <a href="{{ path('dwes_libros_suscriSelect',{'tipo' : 'premium' } )}}" class="btn pink-gradient btn-rounded mb-4 waves-effect waves-light">Seleccionar</a>*/
/*                                     {% endif %}*/
/*                                     */
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <!--Card-->*/
/*                     </div>*/
/*                     <!--Grid column-->*/
/* */
/*                 </div>*/
/*                 <!--Grid row-->*/
/* */
/*             </section>*/
/*             <!--Section: Pricing v.5-->*/
/* */
/*         </div>*/
/* {%endblock %}*/
