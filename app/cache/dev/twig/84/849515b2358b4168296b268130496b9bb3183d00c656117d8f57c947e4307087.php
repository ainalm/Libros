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
<section class=\"section pb-3 wow fadeIn\" data-wow-delay=\"0.3s\" style=\"visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;\">
";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["suscripciones"]) ? $context["suscripciones"] : $this->getContext($context, "suscripciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tipoSuscripcion", array()), "html", null, true);
            echo "
    suscripciones
    ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "tipoSuscripcion", array()), 0, array(), "array"), "html", null, true);
            echo "
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo " 
                <!--Section heading-->
                <h1 class=\"section-heading h1 pt-4\">Nuestros planes</h1>
                <!--Section description-->
                <p class=\"section-description mb-5 pb-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

                <!--Grid row-->
                <div class=\"row\">

                    <!--Grid column-->
                    <div class=\"col-lg-4 col-md-12 mb-4\">
                        <!--Card-->
                        <div class=\"card\">

                            <!--Content-->
                            <div class=\"text-center\">
                                <div class=\"card-body\">
                                    <h5>Gratis</h5>
                                    <div class=\"flex-center\">
                                        <div class=\"card-circle\">
                                            <i class=\"fa fa-home light-blue-text\"></i>
                                        </div>
                                    </div>

                                    <!--Price-->
                                    <h2 class=\"font-weight-bold mb-2\">0€</h2>
                                    <p class=\"grey-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa pariatur id nobis accusamus deleniti cumque hic laborum.</p>
                                    <a class=\"btn btn-light-blue btn-rounded waves-effect waves-light\">Seleccionar</a>
                                </div>
                            </div>

                        </div>
                        <!--Card-->
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class=\"col-lg-4 col-md-12 mb-4\">
                        <!--Card-->
                        <div class=\"card purple-gradient\">

                            <!--Content-->
                            <div class=\"text-center white-text\">
                                <div class=\"card-body\">
                                    <h5>Básica</h5>
                                    <div class=\"flex-center\">
                                        <div class=\"card-circle\">
                                            <i class=\"fa fa-group white-text\"></i>
                                        </div>
                                    </div>

                                    <!--Price-->
                                    <h2 class=\"font-weight-bold mb-2\">10€</h2>
                                    <p>Esse corporis saepe laudantium velit adipisci cumque iste ratione facere non distinctio cupiditate sequi atque.</p>
                                    <a class=\"btn btn-outline-white btn-rounded waves-effect waves-light\">Seleccionar</a>
                                </div>
                            </div>

                        </div>
                        <!--Card-->
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class=\"col-lg-4 col-md-12 mb-4\">
                        <!--Card-->
                        <div class=\"card\">

                            <!--Content-->
                            <div class=\"text-center\">
                                <div class=\"card-body\">
                                    <h5>premium</h5>
                                    <div class=\"flex-center\">
                                        <div class=\"card-circle\">
                                            <i class=\"fa fa-bar-chart light-blue-text\"></i>
                                        </div>
                                    </div>

                                    <!--Price-->
                                    <h2 class=\"font-weight-bold mb-2\">25€</h2>
                                    <p class=\"grey-text\">At ab ea a molestiae corrupti numquam quo beatae minima ratione magni accusantium repellat eveniet quia vitae.</p>
                                    <a class=\"btn btn-light-blue btn-rounded waves-effect waves-light\">Seleccionar</a>
                                </div>
                            </div>

                        </div>
                        <!--Card-->
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
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
        return array (  87 => 35,  79 => 33,  73 => 31,  69 => 30,  62 => 27,  46 => 14,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
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
/* <section class="section pb-3 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">*/
/* {% for item in suscripciones %}*/
/*     {{item.tipoSuscripcion}}*/
/*     suscripciones*/
/*     {{item.tipoSuscripcion[0]}}*/
/*  {% endfor %}*/
/*  */
/*                 <!--Section heading-->*/
/*                 <h1 class="section-heading h1 pt-4">Nuestros planes</h1>*/
/*                 <!--Section description-->*/
/*                 <p class="section-description mb-5 pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>*/
/* */
/*                 <!--Grid row-->*/
/*                 <div class="row">*/
/* */
/*                     <!--Grid column-->*/
/*                     <div class="col-lg-4 col-md-12 mb-4">*/
/*                         <!--Card-->*/
/*                         <div class="card">*/
/* */
/*                             <!--Content-->*/
/*                             <div class="text-center">*/
/*                                 <div class="card-body">*/
/*                                     <h5>Gratis</h5>*/
/*                                     <div class="flex-center">*/
/*                                         <div class="card-circle">*/
/*                                             <i class="fa fa-home light-blue-text"></i>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <!--Price-->*/
/*                                     <h2 class="font-weight-bold mb-2">0€</h2>*/
/*                                     <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa pariatur id nobis accusamus deleniti cumque hic laborum.</p>*/
/*                                     <a class="btn btn-light-blue btn-rounded waves-effect waves-light">Seleccionar</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <!--Card-->*/
/*                     </div>*/
/*                     <!--Grid column-->*/
/* */
/*                     <!--Grid column-->*/
/*                     <div class="col-lg-4 col-md-12 mb-4">*/
/*                         <!--Card-->*/
/*                         <div class="card purple-gradient">*/
/* */
/*                             <!--Content-->*/
/*                             <div class="text-center white-text">*/
/*                                 <div class="card-body">*/
/*                                     <h5>Básica</h5>*/
/*                                     <div class="flex-center">*/
/*                                         <div class="card-circle">*/
/*                                             <i class="fa fa-group white-text"></i>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <!--Price-->*/
/*                                     <h2 class="font-weight-bold mb-2">10€</h2>*/
/*                                     <p>Esse corporis saepe laudantium velit adipisci cumque iste ratione facere non distinctio cupiditate sequi atque.</p>*/
/*                                     <a class="btn btn-outline-white btn-rounded waves-effect waves-light">Seleccionar</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <!--Card-->*/
/*                     </div>*/
/*                     <!--Grid column-->*/
/* */
/*                     <!--Grid column-->*/
/*                     <div class="col-lg-4 col-md-12 mb-4">*/
/*                         <!--Card-->*/
/*                         <div class="card">*/
/* */
/*                             <!--Content-->*/
/*                             <div class="text-center">*/
/*                                 <div class="card-body">*/
/*                                     <h5>premium</h5>*/
/*                                     <div class="flex-center">*/
/*                                         <div class="card-circle">*/
/*                                             <i class="fa fa-bar-chart light-blue-text"></i>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <!--Price-->*/
/*                                     <h2 class="font-weight-bold mb-2">25€</h2>*/
/*                                     <p class="grey-text">At ab ea a molestiae corrupti numquam quo beatae minima ratione magni accusantium repellat eveniet quia vitae.</p>*/
/*                                     <a class="btn btn-light-blue btn-rounded waves-effect waves-light">Seleccionar</a>*/
/*                                 </div>*/
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
/* </div>*/
/* {%endblock %}*/
