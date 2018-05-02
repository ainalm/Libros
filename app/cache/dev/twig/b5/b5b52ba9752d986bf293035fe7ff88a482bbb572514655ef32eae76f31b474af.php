<?php

/* DWESLibrosBundle:Default:ajustes.html.twig */
class __TwigTemplate_da30d987ef69eb1d2fac2a99687608a2d5f48227dc084376f83910f4f4750d16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:ajustes.html.twig", 1);
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

    public function block_portada($context, array $blocks = array())
    {
        // line 2
        echo "<!--Intro Section-->
<!--Intro Section-->
<div class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg');\">
    <div class=\"flex-center  \" style=\"       background-color: rgba(17, 27, 43, 0.7);\">
        <div class=\"container my-5 pt-5\">

            <!-- Section heading -->
            <h3 class=\"text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                <strong>AJUSTES</strong>
            </h3>
            <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">Configura tu cuenta</h6>


        </div>
    </div>
</div>



";
    }

    // line 21
    public function block_contenido($context, array $blocks = array())
    {
        // line 22
        echo "
<div class=\"container\">
    <!-- Second section -->
    <section id=\"services\" class=\"section feature-box pt-4 pb-5\">
        <!--Secion heading-->
        <h2 class=\" text-center  font-weight-bold my-5 pb-3 pt-4 wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;\">¿Qué te gustaría actualizar?</h2>
        <!-- First row -->
        <div class=\"row text-center wow fadeIn\" data-wow-delay=\"0.4s\" style=\"visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;\">
            <!-- First column -->
            <div class=\"col-md-3 mb-5 pt-1\">
                <!--Panel-->
                <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("dwes_libros_crearperfil");
        echo "\">
                    <div class=\"card card-body hoverable\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/user.png"), "html", null, true);
        echo "\"> </img>
                        </i>
                        <h5 class=\"feature-title mb-4\">Mis datos</h5>
                        ";
        // line 41
        echo "                    </div>
                </a>
                <!--/.Panel-->
            </div>
            <!-- /First column -->
            <!-- Second column -->
            <div class=\"col-md-3 mb-5\">
                <!--Panel-->
                <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("dwes_libros_crearperfil");
        echo "\">
                    <div class=\"card card-body hoverable cajaAjustes\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/pin-code.png"), "html", null, true);
        echo "\"> </img>
                        </i>
                        <h5 class=\"feature-title mb-4\">Mi contraseña</h5>

                    </div>
                </a>
                <!--/.Panel-->
            </div>
            <!-- /.Second column -->
            <!-- Third column -->
            <div class=\"col-md-3 mb-5\">
                <!--Panel-->
                <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("dwes_libros_crearperfil");
        echo "\">
                    <div class=\"card card-body hoverable cajaAjustes\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/detective.png"), "html", null, true);
        echo "\"> </img>
                        </i>
                        <h5 class=\"feature-title mb-4\">Mi privacidad</h5>

                    </div>
                </a>
                <!--/.Panel-->
            </div>
            <!-- /.Third column -->

            <!-- Fourth column -->
            <div class=\"col-md-3 mb-5\">
                <!--Panel-->
                <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("dwes_libros_crearperfil");
        echo "\">
                    <div class=\"card card-body hoverable cajaAjustes\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/credit-card.png"), "html", null, true);
        echo "\"> </img>
                        </i>
                        <h5 class=\"feature-title mb-4\">Suscripción</h5>
                    </div>
                </a>
                <!--/.Panel-->
            </div>
            <!-- /.Fourth column -->
        </div>
        <!-- /.First row -->
    </section>
    <!-- /.Second section -->
</div>
";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["suscripciones"]) ? $context["suscripciones"] : $this->getContext($context, "suscripciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 97
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tipoSuscripcion", array()), "html", null, true);
            echo "
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:ajustes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 99,  161 => 97,  157 => 96,  141 => 83,  135 => 80,  119 => 67,  113 => 64,  98 => 52,  92 => 49,  82 => 41,  76 => 36,  70 => 33,  57 => 22,  54 => 21,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %} {% block portada %}*/
/* <!--Intro Section-->*/
/* <!--Intro Section-->*/
/* <div class="streak streak-photo streak-md  portada " style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg');">*/
/*     <div class="flex-center  " style="       background-color: rgba(17, 27, 43, 0.7);">*/
/*         <div class="container my-5 pt-5">*/
/* */
/*             <!-- Section heading -->*/
/*             <h3 class="text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <strong>AJUSTES</strong>*/
/*             </h3>*/
/*             <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">Configura tu cuenta</h6>*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* {% endblock %} {% block contenido %}*/
/* */
/* <div class="container">*/
/*     <!-- Second section -->*/
/*     <section id="services" class="section feature-box pt-4 pb-5">*/
/*         <!--Secion heading-->*/
/*         <h2 class=" text-center  font-weight-bold my-5 pb-3 pt-4 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">¿Qué te gustaría actualizar?</h2>*/
/*         <!-- First row -->*/
/*         <div class="row text-center wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">*/
/*             <!-- First column -->*/
/*             <div class="col-md-3 mb-5 pt-1">*/
/*                 <!--Panel-->*/
/*                 <a href="{{ path('dwes_libros_crearperfil') }}">*/
/*                     <div class="card card-body hoverable">*/
/*                         <i class="mb-2">*/
/*                             <img src="{{ asset('bundles/dweslibros/img/user.png') }}"> </img>*/
/*                         </i>*/
/*                         <h5 class="feature-title mb-4">Mis datos</h5>*/
/*                         {#*/
/*                         <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> #}*/
/*                     </div>*/
/*                 </a>*/
/*                 <!--/.Panel-->*/
/*             </div>*/
/*             <!-- /First column -->*/
/*             <!-- Second column -->*/
/*             <div class="col-md-3 mb-5">*/
/*                 <!--Panel-->*/
/*                 <a href="{{ path('dwes_libros_crearperfil') }}">*/
/*                     <div class="card card-body hoverable cajaAjustes">*/
/*                         <i class="mb-2">*/
/*                             <img src="{{ asset('bundles/dweslibros/img/pin-code.png') }}"> </img>*/
/*                         </i>*/
/*                         <h5 class="feature-title mb-4">Mi contraseña</h5>*/
/* */
/*                     </div>*/
/*                 </a>*/
/*                 <!--/.Panel-->*/
/*             </div>*/
/*             <!-- /.Second column -->*/
/*             <!-- Third column -->*/
/*             <div class="col-md-3 mb-5">*/
/*                 <!--Panel-->*/
/*                 <a href="{{ path('dwes_libros_crearperfil') }}">*/
/*                     <div class="card card-body hoverable cajaAjustes">*/
/*                         <i class="mb-2">*/
/*                             <img src="{{ asset('bundles/dweslibros/img/detective.png') }}"> </img>*/
/*                         </i>*/
/*                         <h5 class="feature-title mb-4">Mi privacidad</h5>*/
/* */
/*                     </div>*/
/*                 </a>*/
/*                 <!--/.Panel-->*/
/*             </div>*/
/*             <!-- /.Third column -->*/
/* */
/*             <!-- Fourth column -->*/
/*             <div class="col-md-3 mb-5">*/
/*                 <!--Panel-->*/
/*                 <a href="{{ path('dwes_libros_crearperfil') }}">*/
/*                     <div class="card card-body hoverable cajaAjustes">*/
/*                         <i class="mb-2">*/
/*                             <img src="{{ asset('bundles/dweslibros/img/credit-card.png') }}"> </img>*/
/*                         </i>*/
/*                         <h5 class="feature-title mb-4">Suscripción</h5>*/
/*                     </div>*/
/*                 </a>*/
/*                 <!--/.Panel-->*/
/*             </div>*/
/*             <!-- /.Fourth column -->*/
/*         </div>*/
/*         <!-- /.First row -->*/
/*     </section>*/
/*     <!-- /.Second section -->*/
/* </div>*/
/* {% for item in suscripciones %}*/
/*     {{item.tipoSuscripcion}}*/
/*  {% endfor %}*/
/* */
/* {% endblock %}*/
