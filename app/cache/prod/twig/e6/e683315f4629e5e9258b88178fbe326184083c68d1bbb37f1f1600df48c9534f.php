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
<div class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Fondos/Fondo3.jpg"), "html", null, true);
        echo "'); margin-top: 27px;\">
    <div class=\"flex-center  \" style=\"       background-color: rgba(17, 27, 43, 0.7);\">
        <div class=\"container my-5 pt-5\">
            <!-- Section heading -->
            <h6 class=\"white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                <strong>GENERO</strong> 
            </h6>
          
            <h1 class=\"text-center white-text pb-4  wow fadeIn\" data-wow-delay=\"0.2s\">
                ";
        // line 13
        if (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == "8")) {
            echo " DRAMA ";
        } elseif (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == "1")) {
            echo " AVENTURA ";
        } elseif (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == "2")) {
            echo " ACCIÓN ";
        } elseif (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == "3")) {
            // line 14
            echo " TERROR ";
        } elseif (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == "4")) {
            echo " FANTASÍA ";
        } elseif (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == "5")) {
            echo " MISTERIO ";
        } elseif (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == "6")) {
            // line 15
            echo " POESÍA ";
        } elseif (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == "7")) {
            echo " ROMANCE ";
        }
        // line 16
        echo "            </h1>
        </div>
    </div>
</div> 
";
    }

    // line 22
    public function block_contenido($context, array $blocks = array())
    {
        echo " 

";
        // line 29
        echo "  <div class=\"container-fluid\">

                <!--Blog-->
                <div class=\"row mt-4\">
 <!--Sidebar-->
                    <div class=\"col-lg-3 col-md-12 mb-4 ml-4\">

                            <!-- Section: Categories -->
                            <section class=\"section\">

                                <ul class=\"list-group z-depth-1\">
                    <li class=\"list-group-item d-flex justify-content-between align-items-center  ";
        // line 40
        if (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idGenero"), "method"))) {
            // line 41
            echo "                                
                                 ";
        }
        // line 43
        echo "                                 \">
                        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 1));
        echo "\" class=\"dark-grey-text font-small navL\">
                                 
                            Aventura </a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["ClibrosAventura"]) ? $context["ClibrosAventura"] : $this->getContext($context, "ClibrosAventura")), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 2));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Acción</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["ClibrosAccion"]) ? $context["ClibrosAccion"] : $this->getContext($context, "ClibrosAccion")), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 3));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Terror</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["ClibrosTerror"]) ? $context["ClibrosTerror"] : $this->getContext($context, "ClibrosTerror")), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 4));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Fantasía</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["ClibrosFantasia"]) ? $context["ClibrosFantasia"] : $this->getContext($context, "ClibrosFantasia")), "html", null, true);
        echo "</span>

                    </li>

                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 5));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Misterio</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["ClibrosMisterio"]) ? $context["ClibrosMisterio"] : $this->getContext($context, "ClibrosMisterio")), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 6));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Poesía</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["ClibrosPoesia"]) ? $context["ClibrosPoesia"] : $this->getContext($context, "ClibrosPoesia")), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 7));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Romance</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["ClibrosRomance"]) ? $context["ClibrosRomance"] : $this->getContext($context, "ClibrosRomance")), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 8));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Drama</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 84
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
        // line 101
        $this->loadTemplate("DWESLibrosBundle:Default:_libros.html.twig", "DWESLibrosBundle:Default:genero.html.twig", 101)->display(array_merge($context, array("libros" =>         // line 102
(isset($context["libros"]) ? $context["libros"] : $this->getContext($context, "libros")), "ClibrosDrama" => (isset($context["ClibrosDrama"]) ? $context["ClibrosDrama"] : $this->getContext($context, "ClibrosDrama")))));
        // line 104
        echo "                            <!--/Grid row-->
                        <!--Grid row-->
                            
                      

                        </section>
                        <!--Section: Blog v.3-->

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
        return array (  210 => 104,  208 => 102,  207 => 101,  188 => 84,  183 => 82,  177 => 79,  172 => 77,  166 => 74,  161 => 72,  155 => 69,  150 => 67,  142 => 62,  137 => 60,  131 => 57,  126 => 55,  120 => 52,  115 => 50,  109 => 47,  103 => 44,  100 => 43,  96 => 41,  94 => 40,  81 => 29,  75 => 22,  67 => 16,  62 => 15,  55 => 14,  47 => 13,  35 => 4,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %} {% block portada %}*/
/* <!--Intro Section-->*/
/* <!--Intro Section-->*/
/* <div class="streak streak-photo streak-md  portada " style="background-image: url('{{ asset('bundles/dweslibros/img/Fondos/Fondo3.jpg') }}'); margin-top: 27px;">*/
/*     <div class="flex-center  " style="       background-color: rgba(17, 27, 43, 0.7);">*/
/*         <div class="container my-5 pt-5">*/
/*             <!-- Section heading -->*/
/*             <h6 class="white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <strong>GENERO</strong> */
/*             </h6>*/
/*           */
/*             <h1 class="text-center white-text pb-4  wow fadeIn" data-wow-delay="0.2s">*/
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
/* {#  <ol class="breadcrumb blue-grey lighten-4">*/
/*                         <li class="breadcrumb-item"><a class="black-text" href="#">Home</a><i class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>*/
/*                         <li class="breadcrumb-item"><a class="black-text" href="#">Library</a><i class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>*/
/*                         <li class="breadcrumb-item active">Data</li>*/
/*                     </ol> #}*/
/*   <div class="container-fluid">*/
/* */
/*                 <!--Blog-->*/
/*                 <div class="row mt-4">*/
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
