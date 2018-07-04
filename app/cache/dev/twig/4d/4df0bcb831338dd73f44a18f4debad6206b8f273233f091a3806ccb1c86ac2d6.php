<?php

/* DWESLibrosBundle:Default:index.html.twig */
class __TwigTemplate_4e941d68ad91d40db57f18e05df20addac241cff47baf7ba09afc84b40caa2d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'portadaInicio' => array($this, 'block_portadaInicio'),
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

    public function block_portadaInicio($context, array $blocks = array())
    {
        // line 2
        echo "<!--Intro Section-->
<header>

    <section class=\"view intro-3\">
        <div class=\"full-bg-img flex-center\">
            <div class=\"container\">
                <div class=\"row flex-center\">
                    <div class=\"col-md-10 col-lg-4 text-center text-md-left margins\">
                        <div class=\"white-text\">
                            <h1 class=\"h1-responsive intro-title font-weight-bold mt-sm-5 mt-0 mb-4 wow fadeInLeft\" data-wow-delay=\"0.3s\">Tu historia comienza aquí </h1>

                            <h6 class=\"wow fadeInLeft\" data-wow-delay=\"0.3s\">Una plataforma para lectores y escritores, donde puedes descubrir, escribir y publicar historias
                                creativas, novelas y libros
                            </h6>
                            <br>
                            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 1));
        echo "\" class=\"btn btn-white btn-rounded orange-text font-weight-bold ml-lg-0 wow fadeInLeft\"
                                data-wow-delay=\"0.4s\">
                                Explora</a>
                            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("dwes_libros_escribirhistoria", array("tipo" => " gratis "));
        echo "\" class=\"btn btn-outline-white btn-rounded font-weight-bold wow fadeInLeft\"
                                data-wow-delay=\"0.4s\">Crea una historia</a>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-lg-8clearfix d-none d-md-block wow fadeInRight justify-content-center\" data-wow-delay=\"0.3s\">
                        <img src=\"https://mdbootstrap.com/img/Others/cards32.png\" alt=\"\" class=\"img-fluid\">
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
";
    }

    // line 33
    public function block_contenido($context, array $blocks = array())
    {
        // line 34
        echo "<div class=\"container\">
    <section id=\"features\" class=\"section feature-box mb-5 pb-4 mt-0\">

        <!-- Section heading -->
        <h2 class=\"text-center title  pt-5 pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;\">
            <strong>Cómo funciona</strong>
        </h2>

        <!-- Section sescription -->
        <p class=\"section-description pb-4 wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;\">
            La misión de Booky es descubrir escritores talentosos y convertirlos en autores exitosos a nivel mundial.</p>

        <!--Grid row-->
        <div class=\"row features wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;\">

            <!--Grid column-->
            <div class=\"col-lg-4 text-center\">
                <div class=\"icon-area\">

                    <div class=\"circle-icon\">

                        <img src=\"https://static.inkitt.com/assets/images/frontpage/writee83f00b9.png\">
                    </div>
                    <br>
                    <h5 class=\"dark-grey-text font-weight-bold mt-2\">Escribe</h5>
                    <div class=\"mt-1\">
                        <p class=\"mx-3 grey-text\">Disfruta de una de las mejores experiencias para escribir en línea . No olvides seguir nuestras
                            <a
                                target=\"_blank\" href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("dwes_libros_normas");
        echo " \">pautas</a>.</p>
                    </div>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-4 text-center\">
                <div class=\"icon-area\">
                    <div class=\"circle-icon\">
                        <img src=\"https://static.inkitt.com/assets/images/frontpage/explorea0334c35.png\">
                    </div>
                    <br>
                    <h5 class=\"dark-grey-text font-weight-bold mt-2\">Explora</h5>
                    <div class=\"mt-1\">
                        <p class=\"mx-3 grey-text\">Descubre miles de historias forma gratuita, deja tu opinión y pásala bien.</p>
                    </div>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-4 text-center mb-4\">
                <div class=\"icon-area\">
                    <div class=\"circle-icon\">
                        <img src=\"https://static.inkitt.com/assets/images/frontpage/publish9c15ef5f.png\">
                    </div>
                    <br>
                    <h5 class=\"dark-grey-text font-weight-bold mt-2\">Publica</h5>
                    <div class=\"mt-1\">
                        <p class=\"mx-3 grey-text\"> Escribe y publica tus historias más rápido,haciéndolo por capítulos. Y se ya tienes un libro en venta,
                            lo puedes anunciar aquí para que llege a más lectores.</p>
                    </div>
                </div>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </section>




</div>
<div>
    <div class=\"container\">
        <hr>
    </div>
    <div class=\"container-fluid mb-5\">
        <div class=\"container \">

            <!--Section: Services-->
            <section class=\"section \">

                <!-- Section heading -->
                <h1 class=\"text-center title  pt-5 pb-4  wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;\">
                    ¡ Descubre una historia al azar y empieza a leer !
                </h1>
                      <h1 class=\"h1-responsive text-center mt-2 mb-4  \" data-wow-delay=\"0.2s\">
                      <button type=\"button\" class=\"btn btn-outline-warning btn-rounded waves-effect azar\">Generar historia al azar</button>
                      </h1>
                <!--Carousel Wrapper-->
 ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["libro"]);
        foreach ($context['_seq'] as $context["_key"] => $context["libro"]) {
            // line 127
            echo "                        <div class=\"row\">

                                <!--Grid column-->
                                <div class=\"col-lg-5 mb-4\">
                                    <!--Featured image-->
                                    <div class=\"view overlay z-depth-1 ";
            // line 132
            if ((($this->getAttribute($context["libro"], "colorPortada", array()) != "") && $this->getAttribute($context["libro"], "colorPortada", array(), "any", true, true))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "colorPortada", array()), "html", null, true);
                echo "\" ";
            }
            echo "style=\"

    width: 445px;
\">
                                         <div class=\" flex-center text-center\" style=\"height:200px ;\" alt=\"sample image\">
                                            
                      <h1 class=\"h1-responsive text-center mt-4 mb-4  wow fadeIn\" data-wow-delay=\"0.2s\">Autor: @";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "username", array()), "html", null, true);
            echo "</h1>

                                            </div>
                                        <a>
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class=\"col-lg-6 ml-xl-4 mb-4\">
                                    <!--Grid row-->
                                    <div class=\"row\">

                                        <!--Grid column-->
                                        <div class=\"col-xl-2 col-md-6 text-sm-center text-md-right text-lg-left\">
                                            <p class=\"orange-text font-small font-weight-bold mb-1 spacing\">
                                               
                                                    <strong>
                                                    
                                                     ";
            // line 159
            if (($this->getAttribute($context["libro"], "idGenero", array()) == "8")) {
                echo " DRAMA ";
            } elseif (($this->getAttribute($context["libro"], "idGenero", array()) == "1")) {
                // line 160
                echo "                                                      AVENTURA ";
            } elseif (($this->getAttribute($context["libro"], "idGenero", array()) == "2")) {
                echo " ACCIÓN ";
            } elseif (($this->getAttribute($context["libro"], "idGenero", array()) == "3")) {
                // line 161
                echo " TERROR ";
            } elseif (($this->getAttribute($context["libro"], "idGenero", array()) == "4")) {
                echo " FANTASÍA ";
            } elseif (($this->getAttribute($context["libro"], "idGenero", array()) == "5")) {
                echo " MISTERIO ";
            } elseif (($this->getAttribute($context["libro"], "idGenero", array()) == "6")) {
                // line 162
                echo " POESÍA ";
            } elseif (($this->getAttribute($context["libro"], "idGenero", array()) == "7")) {
                echo " ROMANCE ";
            }
            // line 163
            echo "                                                    </strong>
                                                
                                            </p>
                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class=\"col-xl-5 col-md-6 text-sm-center text-md-left\">
                                            <p class=\"font-small grey-text\">
                                                <em> ";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "fechaPubli", array()), "html", null, true);
            echo "</em>
                                            </p>
                                        </div> 
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                    <h4 class=\"mb-3 dark-grey-text mt-0\">
                                        <strong>
                                            <a href=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_historia", array("idLibro" => $this->getAttribute($context["libro"], "idLibro", array()))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "titulo", array()), "html", null, true);
            echo "</a>
                                        </strong>
                                    </h4>
                                    <p class=\"dark-grey-text\" style=\"
                                            width: 750px;
                                            white-space: nowrap;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                        \">";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "descripcion", array()), "html", null, true);
            echo "
                                    </p>

                                    <!--Deep-orange-->
                                    <a target=\"_blank\" href=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_historia", array("idLibro" => $this->getAttribute($context["libro"], "idLibro", array()))), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-deep-orange btn-rounded btn-sm waves-effect waves-light\">Leer más</a>
                                </div>
                                <!--Grid column-->

                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['libro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "                    </div>
                    

                </div>
              
 
               

                <!--/.Carousel Wrapper-->

                ";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 200,  285 => 194,  278 => 190,  265 => 182,  252 => 172,  241 => 163,  236 => 162,  229 => 161,  224 => 160,  220 => 159,  196 => 138,  183 => 132,  176 => 127,  172 => 126,  105 => 62,  75 => 34,  72 => 33,  54 => 20,  48 => 17,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %} {% block portadaInicio %}*/
/* <!--Intro Section-->*/
/* <header>*/
/* */
/*     <section class="view intro-3">*/
/*         <div class="full-bg-img flex-center">*/
/*             <div class="container">*/
/*                 <div class="row flex-center">*/
/*                     <div class="col-md-10 col-lg-4 text-center text-md-left margins">*/
/*                         <div class="white-text">*/
/*                             <h1 class="h1-responsive intro-title font-weight-bold mt-sm-5 mt-0 mb-4 wow fadeInLeft" data-wow-delay="0.3s">Tu historia comienza aquí </h1>*/
/* */
/*                             <h6 class="wow fadeInLeft" data-wow-delay="0.3s">Una plataforma para lectores y escritores, donde puedes descubrir, escribir y publicar historias*/
/*                                 creativas, novelas y libros*/
/*                             </h6>*/
/*                             <br>*/
/*                             <a href="{{ path('dwes_libros_genero', {'idGenero':1}) }}" class="btn btn-white btn-rounded orange-text font-weight-bold ml-lg-0 wow fadeInLeft"*/
/*                                 data-wow-delay="0.4s">*/
/*                                 Explora</a>*/
/*                             <a href="{{ path('dwes_libros_escribirhistoria', {'tipo' : " gratis "}) }}" class="btn btn-outline-white btn-rounded font-weight-bold wow fadeInLeft"*/
/*                                 data-wow-delay="0.4s">Crea una historia</a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-6 col-lg-8clearfix d-none d-md-block wow fadeInRight justify-content-center" data-wow-delay="0.3s">*/
/*                         <img src="https://mdbootstrap.com/img/Others/cards32.png" alt="" class="img-fluid">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* </header>*/
/* {% endblock %} {% block contenido %}*/
/* <div class="container">*/
/*     <section id="features" class="section feature-box mb-5 pb-4 mt-0">*/
/* */
/*         <!-- Section heading -->*/
/*         <h2 class="text-center title  pt-5 pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">*/
/*             <strong>Cómo funciona</strong>*/
/*         </h2>*/
/* */
/*         <!-- Section sescription -->*/
/*         <p class="section-description pb-4 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">*/
/*             La misión de Booky es descubrir escritores talentosos y convertirlos en autores exitosos a nivel mundial.</p>*/
/* */
/*         <!--Grid row-->*/
/*         <div class="row features wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">*/
/* */
/*             <!--Grid column-->*/
/*             <div class="col-lg-4 text-center">*/
/*                 <div class="icon-area">*/
/* */
/*                     <div class="circle-icon">*/
/* */
/*                         <img src="https://static.inkitt.com/assets/images/frontpage/writee83f00b9.png">*/
/*                     </div>*/
/*                     <br>*/
/*                     <h5 class="dark-grey-text font-weight-bold mt-2">Escribe</h5>*/
/*                     <div class="mt-1">*/
/*                         <p class="mx-3 grey-text">Disfruta de una de las mejores experiencias para escribir en línea . No olvides seguir nuestras*/
/*                             <a*/
/*                                 target="_blank" href="{{path('dwes_libros_normas')}} ">pautas</a>.</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!--Grid column-->*/
/* */
/*             <!--Grid column-->*/
/*             <div class="col-lg-4 text-center">*/
/*                 <div class="icon-area">*/
/*                     <div class="circle-icon">*/
/*                         <img src="https://static.inkitt.com/assets/images/frontpage/explorea0334c35.png">*/
/*                     </div>*/
/*                     <br>*/
/*                     <h5 class="dark-grey-text font-weight-bold mt-2">Explora</h5>*/
/*                     <div class="mt-1">*/
/*                         <p class="mx-3 grey-text">Descubre miles de historias forma gratuita, deja tu opinión y pásala bien.</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!--Grid column-->*/
/* */
/*             <!--Grid column-->*/
/*             <div class="col-lg-4 text-center mb-4">*/
/*                 <div class="icon-area">*/
/*                     <div class="circle-icon">*/
/*                         <img src="https://static.inkitt.com/assets/images/frontpage/publish9c15ef5f.png">*/
/*                     </div>*/
/*                     <br>*/
/*                     <h5 class="dark-grey-text font-weight-bold mt-2">Publica</h5>*/
/*                     <div class="mt-1">*/
/*                         <p class="mx-3 grey-text"> Escribe y publica tus historias más rápido,haciéndolo por capítulos. Y se ya tienes un libro en venta,*/
/*                             lo puedes anunciar aquí para que llege a más lectores.</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!--Grid column-->*/
/* */
/*         </div>*/
/*         <!--Grid row-->*/
/* */
/*     </section>*/
/* */
/* */
/* */
/* */
/* </div>*/
/* <div>*/
/*     <div class="container">*/
/*         <hr>*/
/*     </div>*/
/*     <div class="container-fluid mb-5">*/
/*         <div class="container ">*/
/* */
/*             <!--Section: Services-->*/
/*             <section class="section ">*/
/* */
/*                 <!-- Section heading -->*/
/*                 <h1 class="text-center title  pt-5 pb-4  wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">*/
/*                     ¡ Descubre una historia al azar y empieza a leer !*/
/*                 </h1>*/
/*                       <h1 class="h1-responsive text-center mt-2 mb-4  " data-wow-delay="0.2s">*/
/*                       <button type="button" class="btn btn-outline-warning btn-rounded waves-effect azar">Generar historia al azar</button>*/
/*                       </h1>*/
/*                 <!--Carousel Wrapper-->*/
/*  {% for libro in libro %}*/
/*                         <div class="row">*/
/* */
/*                                 <!--Grid column-->*/
/*                                 <div class="col-lg-5 mb-4">*/
/*                                     <!--Featured image-->*/
/*                                     <div class="view overlay z-depth-1 {% if libro.colorPortada != "" and libro.colorPortada is defined %} {{libro.colorPortada}}" {% endif %}style="*/
/* */
/*     width: 445px;*/
/* ">*/
/*                                          <div class=" flex-center text-center" style="height:200px ;" alt="sample image">*/
/*                                             */
/*                       <h1 class="h1-responsive text-center mt-4 mb-4  wow fadeIn" data-wow-delay="0.2s">Autor: @{{libro.username}}</h1>*/
/* */
/*                                             </div>*/
/*                                         <a>*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!--Grid column-->*/
/* */
/*                                 <!--Grid column-->*/
/*                                 <div class="col-lg-6 ml-xl-4 mb-4">*/
/*                                     <!--Grid row-->*/
/*                                     <div class="row">*/
/* */
/*                                         <!--Grid column-->*/
/*                                         <div class="col-xl-2 col-md-6 text-sm-center text-md-right text-lg-left">*/
/*                                             <p class="orange-text font-small font-weight-bold mb-1 spacing">*/
/*                                                */
/*                                                     <strong>*/
/*                                                     */
/*                                                      {% if libro.idGenero == "8" %} DRAMA {% elseif libro.idGenero == "1" %}*/
/*                                                       AVENTURA {% elseif libro.idGenero == "2" %} ACCIÓN {% elseif libro.idGenero == "3"*/
/*                 %} TERROR {% elseif libro.idGenero == "4" %} FANTASÍA {% elseif libro.idGenero == "5" %} MISTERIO {% elseif libro.idGenero == "6"*/
/*                 %} POESÍA {% elseif libro.idGenero == "7" %} ROMANCE {% endif %}*/
/*                                                     </strong>*/
/*                                                 */
/*                                             </p>*/
/*                                         </div>*/
/*                                         <!--Grid column-->*/
/* */
/*                                         <!--Grid column-->*/
/*                                         <div class="col-xl-5 col-md-6 text-sm-center text-md-left">*/
/*                                             <p class="font-small grey-text">*/
/*                                                 <em> {{libro.fechaPubli}}</em>*/
/*                                             </p>*/
/*                                         </div> */
/*                                         <!--Grid column-->*/
/* */
/*                                     </div>*/
/*                                     <!--Grid row-->*/
/* */
/*                                     <h4 class="mb-3 dark-grey-text mt-0">*/
/*                                         <strong>*/
/*                                             <a href="{{ path('dwes_libros_historia', {'idLibro' : libro.idLibro}) }}" target="_blank">{{libro.titulo}}</a>*/
/*                                         </strong>*/
/*                                     </h4>*/
/*                                     <p class="dark-grey-text" style="*/
/*                                             width: 750px;*/
/*                                             white-space: nowrap;*/
/*                                             overflow: hidden;*/
/*                                             text-overflow: ellipsis;*/
/*                                         ">{{libro.descripcion}}*/
/*                                     </p>*/
/* */
/*                                     <!--Deep-orange-->*/
/*                                     <a target="_blank" href="{{ path('dwes_libros_historia', {'idLibro' : libro.idLibro}) }}" type="button" class="btn btn-deep-orange btn-rounded btn-sm waves-effect waves-light">Leer más</a>*/
/*                                 </div>*/
/*                                 <!--Grid column-->*/
/* */
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     */
/* */
/*                 </div>*/
/*               */
/*  */
/*                */
/* */
/*                 <!--/.Carousel Wrapper-->*/
/* */
/*                 {% endblock %}*/
