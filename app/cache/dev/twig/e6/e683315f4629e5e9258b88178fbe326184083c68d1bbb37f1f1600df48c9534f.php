<?php

/* DWESLibrosBundle:Default:genero.html.twig */
class __TwigTemplate_457bdd7fa97e7a92479c330214a266ee92958fd4b155dec0e4235093de20884e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:genero.html.twig", 1);
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
<div class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg'); margin-top: 27px;\">
    <div class=\"flex-center  \" style=\"       background-color: rgba(17, 27, 43, 0.7);\">
        <div class=\"container my-5 pt-5\">
            <!-- Section heading -->
            <h6 class=\"white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                <strong>GENERO</strong>
            </h6>
            <h1 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                ";
        // line 12
        if (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == "8")) {
            echo " DRAMA ";
        } elseif (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == "1")) {
            echo " AVENTURA ";
        } elseif (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == "2")) {
            echo " ACCIÓN ";
        } elseif (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == "3")) {
            // line 13
            echo " TERROR ";
        } elseif (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == "4")) {
            echo " FANTASÍA ";
        } elseif (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == "5")) {
            echo " MISTERIO ";
        } elseif (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == "6")) {
            // line 14
            echo " POESÍA ";
        } elseif (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == "7")) {
            echo " ROMANCE ";
        }
        // line 15
        echo "            </h1>
        </div>
    </div>
</div> 
";
    }

    // line 21
    public function block_contenido($context, array $blocks = array())
    {
        echo " 


  <div class=\"container-fluid\">

                <!--Blog-->
                <div class=\"row mt-5 pt-3\">
 <!--Sidebar-->
                    <div class=\"col-lg-3 col-md-12 mb-4 ml-4\">

                            <!-- Section: Categories -->
                            <section class=\"section\">

                                <ul class=\"list-group z-depth-1\">
                    <li class=\"list-group-item d-flex justify-content-between align-items-center  ";
        // line 35
        if (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idGenero"), "method"))) {
            // line 36
            echo "                                
                                 ";
        }
        // line 38
        echo "                                 \">
                        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 1));
        echo "\" class=\"dark-grey-text font-small navL\">
                                 
                            Aventura </a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["ClibrosAventura"]) ? $context["ClibrosAventura"] : $this->getContext($context, "ClibrosAventura")), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 2));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Acción</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["ClibrosAccion"]) ? $context["ClibrosAccion"] : $this->getContext($context, "ClibrosAccion")), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 3));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Terror</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["ClibrosTerror"]) ? $context["ClibrosTerror"] : $this->getContext($context, "ClibrosTerror")), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 4));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Fantasía</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["ClibrosFantasia"]) ? $context["ClibrosFantasia"] : $this->getContext($context, "ClibrosFantasia")), "html", null, true);
        echo "</span>

                    </li>

                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 5));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Misterio</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["ClibrosMisterio"]) ? $context["ClibrosMisterio"] : $this->getContext($context, "ClibrosMisterio")), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 6));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Poesía</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["ClibrosPoesia"]) ? $context["ClibrosPoesia"] : $this->getContext($context, "ClibrosPoesia")), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 7));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Romance</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["ClibrosRomance"]) ? $context["ClibrosRomance"] : $this->getContext($context, "ClibrosRomance")), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 8));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Drama</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["ClibrosDrama"]) ? $context["ClibrosDrama"] : $this->getContext($context, "ClibrosDrama")), "html", null, true);
        echo "</span>
                    </li>

                </ul>
                            </section>
                            <!-- Section: Categories FIXME: -->
 
                        </div>
                    <!--Sidebar-->
                    <!--Main listing-->
                    <div class=\"col-lg-8 col-12 mt-1 mx-lg-4\">

                        <!--Section: Blog v.3-->
                        <section class=\"section extra-margins pb-3 text-center text-lg-left\">
                            <!--Grid row-->
                            <div class=\"row text-center\">
                            ";
        // line 96
        $this->loadTemplate("DWESLibrosBundle:Default:_libros.html.twig", "DWESLibrosBundle:Default:genero.html.twig", 96)->display(array_merge($context, array("libros" =>         // line 97
(isset($context["libros"]) ? $context["libros"] : $this->getContext($context, "libros")), "ClibrosDrama" => (isset($context["ClibrosDrama"]) ? $context["ClibrosDrama"] : $this->getContext($context, "ClibrosDrama")))));
        // line 99
        echo "                            <!--/Grid row-->
                        <!--Grid row-->
                            
                      

                        </section>
                        <!--Section: Blog v.3-->

                        <!--Pagination dark grey-->
                        <nav class=\"mb-5 pb-2\">
                            <ul class=\"pagination pg-darkgrey flex-center\">
                                <!--Arrow left-->
                                <li class=\"page-item\">
                                    <a class=\"page-link waves-effect waves-effect\" aria-label=\"Previous\">
                                        <span aria-hidden=\"true\">«</span>
                                        <span class=\"sr-only\">Previous</span>
                                    </a>
                                </li>

                                <!--Numbers-->
                                <li class=\"page-item active\">
                                    <a class=\"page-link waves-effect waves-effect\">1</a>
                                </li>
                                <li class=\"page-item\">
                                    <a class=\"page-link waves-effect waves-effect\">2</a>
                                </li>
                                <li class=\"page-item\">
                                    <a class=\"page-link waves-effect waves-effect\">3</a>
                                </li>
                                <li class=\"page-item\">
                                    <a class=\"page-link waves-effect waves-effect\">4</a>
                                </li>
                                <li class=\"page-item\">
                                    <a class=\"page-link waves-effect waves-effect\">5</a>
                                </li>

                                <!--Arrow right-->
                                <li class=\"page-item\">
                                    <a class=\"page-link waves-effect waves-effect\" aria-label=\"Next\">
                                        <span aria-hidden=\"true\">»</span>
                                        <span class=\"sr-only\">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!--Pagination dark grey-->

                    </div>
                    <!--Main listing-->

                   

                </div>
                <!--Blog-->

            </div>                
";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:genero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 99,  203 => 97,  202 => 96,  183 => 79,  178 => 77,  172 => 74,  167 => 72,  161 => 69,  156 => 67,  150 => 64,  145 => 62,  137 => 57,  132 => 55,  126 => 52,  121 => 50,  115 => 47,  110 => 45,  104 => 42,  98 => 39,  95 => 38,  91 => 36,  89 => 35,  71 => 21,  63 => 15,  58 => 14,  51 => 13,  43 => 12,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %} {% block portada %}*/
/* <!--Intro Section-->*/
/* <!--Intro Section-->*/
/* <div class="streak streak-photo streak-md  portada " style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg'); margin-top: 27px;">*/
/*     <div class="flex-center  " style="       background-color: rgba(17, 27, 43, 0.7);">*/
/*         <div class="container my-5 pt-5">*/
/*             <!-- Section heading -->*/
/*             <h6 class="white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <strong>GENERO</strong>*/
/*             </h6>*/
/*             <h1 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 {% if genero == "8" %} DRAMA {% elseif genero == "1" %} AVENTURA {% elseif genero == "2" %} ACCIÓN {% elseif genero == "3"*/
/*                 %} TERROR {% elseif genero == "4" %} FANTASÍA {% elseif genero == "5" %} MISTERIO {% elseif genero == "6"*/
/*                 %} POESÍA {% elseif genero == "7" %} ROMANCE {% endif %}*/
/*             </h1>*/
/*         </div>*/
/*     </div>*/
/* </div> */
/* {% endblock %}*/
/* */
/* {% block contenido %} */
/* */
/* */
/*   <div class="container-fluid">*/
/* */
/*                 <!--Blog-->*/
/*                 <div class="row mt-5 pt-3">*/
/*  <!--Sidebar-->*/
/*                     <div class="col-lg-3 col-md-12 mb-4 ml-4">*/
/* */
/*                             <!-- Section: Categories -->*/
/*                             <section class="section">*/
/* */
/*                                 <ul class="list-group z-depth-1">*/
/*                     <li class="list-group-item d-flex justify-content-between align-items-center  {% if genero == app.request.get('idGenero')%}*/
/*                                 */
/*                                  {% endif %}*/
/*                                  ">*/
/*                         <a href="{{ path('dwes_libros_genero', {'idGenero':1}) }}" class="dark-grey-text font-small navL">*/
/*                                  */
/*                             Aventura </a>*/
/*                         <span class="badge badge-danger badge-pill">{{ClibrosAventura}}</span>*/
/*                     </li>*/
/*                     <li class="list-group-item d-flex justify-content-between align-items-center">*/
/*                         <a href="{{ path('dwes_libros_genero', {'idGenero':2}) }}" class="dark-grey-text font-small navL">*/
/*                             Acción</a>*/
/*                         <span class="badge badge-danger badge-pill">{{ClibrosAccion}}</span>*/
/*                     </li>*/
/*                     <li class="list-group-item d-flex justify-content-between align-items-center ">*/
/*                         <a href="{{ path('dwes_libros_genero', {'idGenero':3}) }}" class="dark-grey-text font-small navL">*/
/*                             Terror</a>*/
/*                         <span class="badge badge-danger badge-pill">{{ClibrosTerror}}</span>*/
/*                     </li>*/
/*                     <li class="list-group-item d-flex justify-content-between align-items-center ">*/
/*                         <a href="{{ path('dwes_libros_genero', {'idGenero':4}) }}" class="dark-grey-text font-small navL">*/
/*                             Fantasía</a>*/
/*                         <span class="badge badge-danger badge-pill">{{ClibrosFantasia}}</span>*/
/* */
/*                     </li>*/
/* */
/*                     <li class="list-group-item d-flex justify-content-between align-items-center ">*/
/*                         <a href="{{ path('dwes_libros_genero', {'idGenero':5}) }}" class="dark-grey-text font-small navL">*/
/*                             Misterio</a>*/
/*                         <span class="badge badge-danger badge-pill">{{ClibrosMisterio}}</span>*/
/*                     </li>*/
/*                     <li class="list-group-item d-flex justify-content-between align-items-center ">*/
/*                         <a href="{{ path('dwes_libros_genero', {'idGenero':6}) }}" class="dark-grey-text font-small navL">*/
/*                             Poesía</a>*/
/*                         <span class="badge badge-danger badge-pill">{{ClibrosPoesia}}</span>*/
/*                     </li>*/
/*                     <li class="list-group-item d-flex justify-content-between align-items-center ">*/
/*                         <a href="{{ path('dwes_libros_genero', {'idGenero':7}) }}" class="dark-grey-text font-small navL">*/
/*                             Romance</a>*/
/*                         <span class="badge badge-danger badge-pill">{{ClibrosRomance}}</span>*/
/*                     </li>*/
/*                     <li class="list-group-item d-flex justify-content-between align-items-center ">*/
/*                         <a href="{{ path('dwes_libros_genero', {'idGenero':8}) }}" class="dark-grey-text font-small navL">*/
/*                             Drama</a>*/
/*                         <span class="badge badge-danger badge-pill">{{ClibrosDrama}}</span>*/
/*                     </li>*/
/* */
/*                 </ul>*/
/*                             </section>*/
/*                             <!-- Section: Categories FIXME: -->*/
/*  */
/*                         </div>*/
/*                     <!--Sidebar-->*/
/*                     <!--Main listing-->*/
/*                     <div class="col-lg-8 col-12 mt-1 mx-lg-4">*/
/* */
/*                         <!--Section: Blog v.3-->*/
/*                         <section class="section extra-margins pb-3 text-center text-lg-left">*/
/*                             <!--Grid row-->*/
/*                             <div class="row text-center">*/
/*                             {%*/
/*                             include 'DWESLibrosBundle:Default:_libros.html.twig' */
/*                             with {'libros': libros,'ClibrosDrama':ClibrosDrama}*/
/*                             %}*/
/*                             <!--/Grid row-->*/
/*                         <!--Grid row-->*/
/*                             */
/*                       */
/* */
/*                         </section>*/
/*                         <!--Section: Blog v.3-->*/
/* */
/*                         <!--Pagination dark grey-->*/
/*                         <nav class="mb-5 pb-2">*/
/*                             <ul class="pagination pg-darkgrey flex-center">*/
/*                                 <!--Arrow left-->*/
/*                                 <li class="page-item">*/
/*                                     <a class="page-link waves-effect waves-effect" aria-label="Previous">*/
/*                                         <span aria-hidden="true">«</span>*/
/*                                         <span class="sr-only">Previous</span>*/
/*                                     </a>*/
/*                                 </li>*/
/* */
/*                                 <!--Numbers-->*/
/*                                 <li class="page-item active">*/
/*                                     <a class="page-link waves-effect waves-effect">1</a>*/
/*                                 </li>*/
/*                                 <li class="page-item">*/
/*                                     <a class="page-link waves-effect waves-effect">2</a>*/
/*                                 </li>*/
/*                                 <li class="page-item">*/
/*                                     <a class="page-link waves-effect waves-effect">3</a>*/
/*                                 </li>*/
/*                                 <li class="page-item">*/
/*                                     <a class="page-link waves-effect waves-effect">4</a>*/
/*                                 </li>*/
/*                                 <li class="page-item">*/
/*                                     <a class="page-link waves-effect waves-effect">5</a>*/
/*                                 </li>*/
/* */
/*                                 <!--Arrow right-->*/
/*                                 <li class="page-item">*/
/*                                     <a class="page-link waves-effect waves-effect" aria-label="Next">*/
/*                                         <span aria-hidden="true">»</span>*/
/*                                         <span class="sr-only">Next</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </nav>*/
/*                         <!--Pagination dark grey-->*/
/* */
/*                     </div>*/
/*                     <!--Main listing-->*/
/* */
/*                    */
/* */
/*                 </div>*/
/*                 <!--Blog-->*/
/* */
/*             </div>                */
/* {% endblock %}*/
/* */
