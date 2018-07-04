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

    // line 20
    public function block_contenido($context, array $blocks = array())
    {
        echo " ";
        // line 32
        echo "<nav class=\"navbar navbar-expand-lg blue-grey lighten-5\">

    <!-- Collapsible content -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">


        <form class=\"form-inline mr-auto\" action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_buscador", array("idGenero" => (isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")))), "html", null, true);
        echo "\" method=\"POST\">
             
            <p class=\"lead\">
                <span class=\"badge indigo p-2\">Progreso de la historia:</span>
            </p>
            <select name=\"progreso\" class=\"mdb-select colorful-select dropdown-primary mr-5 ml-5\">
                <option value=\"Todas\">Todas</option>
                <option value=\"En progreso\">En progreso</option>
                <option value=\"Completado\">Completadas</option>
            </select>
            <p class=\"lead\">
                <span class=\"badge indigo p-2\">Idioma:</span>
            </p>
            <select name=\"idioma\" class=\"mdb-select colorful-select dropdown-primary mr-5 ml-5\">
                 
                <option value=\"Todos\">Todos</option> 
                <option value=\"Español\">Español</option>
                <option value=\"English\">English</option>
                <option value=\"Portugês\">Portugês</option>
                <option value=\"Russian\">Russian</option>
                <option value=\"Filipino\">Filipino</option>
                <option value=\"Hindi\">Hindi</option>
                <option value=\"Dutch\">Dutch</option>
                <option value=\"Italiano\">Italiano</option>
                <option value=\"Chinese\">Chinese</option>
                <option value=\"Turkish\">Turkish</option>
                <option value=\"Deutsch\">Deutsch</option>
                <option value=\"Français\">Français</option>
                <option value=\"Other\">Other</option>
            </select>
            
            <input class=\"form-control mr-sm-2 mr-5\" type=\"text\" placeholder=\"Buscar libro\" aria-label=\"Search\" name=\"textoB\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["textoB"]) ? $context["textoB"] : $this->getContext($context, "textoB")), "html", null, true);
        echo "\">
            <button class=\"btn blue-gradient btn-rounded btn-sm my-0 waves-effect waves-light\" type=\"submit\">Buscar</button>
        </form>

    </div>
    <!-- Collapsible content -->



</nav>
<div class=\"container-fluid\">

    <!--Blog-->
    <div class=\"row mt-4\">
        <!--Sidebar-->
        <div class=\"col-lg-3 col-md-12 mb-4 ml-4\">

            <!-- Section: Categories -->
            <section class=\"section\">

                <ul class=\"list-group z-depth-1\">
                    <li class=\"list-group-item d-flex justify-content-between align-items-center  ";
        // line 90
        if (((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idGenero"), "method"))) {
            // line 91
            echo "                                
                                 ";
        }
        // line 93
        echo "                                 \">
                        <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 1));
        echo "\" class=\"dark-grey-text font-small navL\">

                            Aventura </a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["ClibrosAventura"]) ? $context["ClibrosAventura"] : $this->getContext($context, "ClibrosAventura")), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        <a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 2));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Acción</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["ClibrosAccion"]) ? $context["ClibrosAccion"] : $this->getContext($context, "ClibrosAccion")), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 3));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Terror</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["ClibrosTerror"]) ? $context["ClibrosTerror"] : $this->getContext($context, "ClibrosTerror")), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 4));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Fantasía</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["ClibrosFantasia"]) ? $context["ClibrosFantasia"] : $this->getContext($context, "ClibrosFantasia")), "html", null, true);
        echo "</span>

                    </li>

                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 5));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Misterio</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["ClibrosMisterio"]) ? $context["ClibrosMisterio"] : $this->getContext($context, "ClibrosMisterio")), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 6));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Poesía</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["ClibrosPoesia"]) ? $context["ClibrosPoesia"] : $this->getContext($context, "ClibrosPoesia")), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 7));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Romance</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["ClibrosRomance"]) ? $context["ClibrosRomance"] : $this->getContext($context, "ClibrosRomance")), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 8));
        echo "\" class=\"dark-grey-text font-small navL\">
                            Drama</a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 134
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
        // line 150
        $this->loadTemplate("DWESLibrosBundle:Default:_libros.html.twig", "DWESLibrosBundle:Default:genero.html.twig", 150)->display(array_merge($context, array("libros" => (isset($context["libros"]) ? $context["libros"] : $this->getContext($context, "libros")), "fotos" => (isset($context["fotos"]) ? $context["fotos"] : $this->getContext($context, "fotos")))));
        // line 151
        echo "                    <!--/Grid row ,'fotos':fotos-->
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
        return array (  260 => 151,  258 => 150,  239 => 134,  234 => 132,  228 => 129,  223 => 127,  217 => 124,  212 => 122,  206 => 119,  201 => 117,  193 => 112,  188 => 110,  182 => 107,  177 => 105,  171 => 102,  166 => 100,  160 => 97,  154 => 94,  151 => 93,  147 => 91,  145 => 90,  121 => 69,  87 => 38,  79 => 32,  75 => 20,  67 => 16,  62 => 15,  55 => 14,  47 => 13,  35 => 4,  31 => 2,  11 => 1,);
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
/*                 <strong>GENERO</strong>*/
/*             </h6>*/
/* */
/*             <h1 class="text-center white-text pb-4  wow fadeIn" data-wow-delay="0.2s">*/
/*                 {% if genero == "8" %} DRAMA {% elseif genero == "1" %} AVENTURA {% elseif genero == "2" %} ACCIÓN {% elseif genero == "3"*/
/*                 %} TERROR {% elseif genero == "4" %} FANTASÍA {% elseif genero == "5" %} MISTERIO {% elseif genero == "6"*/
/*                 %} POESÍA {% elseif genero == "7" %} ROMANCE {% endif %}*/
/*             </h1>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %} {% block contenido %} {#*/
/* <ol class="breadcrumb blue-grey lighten-4">*/
/*     <li class="breadcrumb-item">*/
/*         <a class="black-text" href="#">Home</a>*/
/*         <i class="fa fa-angle-double-right mx-2" aria-hidden="true"></i>*/
/*     </li>*/
/*     <li class="breadcrumb-item">*/
/*         <a class="black-text" href="#">Library</a>*/
/*         <i class="fa fa-angle-double-right mx-2" aria-hidden="true"></i>*/
/*     </li>*/
/*     <li class="breadcrumb-item active">Data</li>*/
/* </ol> #}*/
/* <nav class="navbar navbar-expand-lg blue-grey lighten-5">*/
/* */
/*     <!-- Collapsible content -->*/
/*     <div class="collapse navbar-collapse" id="navbarSupportedContent">*/
/* */
/* */
/*         <form class="form-inline mr-auto" action="{{path('dwes_libros_buscador', {'idGenero' : genero})}}" method="POST">*/
/*              */
/*             <p class="lead">*/
/*                 <span class="badge indigo p-2">Progreso de la historia:</span>*/
/*             </p>*/
/*             <select name="progreso" class="mdb-select colorful-select dropdown-primary mr-5 ml-5">*/
/*                 <option value="Todas">Todas</option>*/
/*                 <option value="En progreso">En progreso</option>*/
/*                 <option value="Completado">Completadas</option>*/
/*             </select>*/
/*             <p class="lead">*/
/*                 <span class="badge indigo p-2">Idioma:</span>*/
/*             </p>*/
/*             <select name="idioma" class="mdb-select colorful-select dropdown-primary mr-5 ml-5">*/
/*                  */
/*                 <option value="Todos">Todos</option> */
/*                 <option value="Español">Español</option>*/
/*                 <option value="English">English</option>*/
/*                 <option value="Portugês">Portugês</option>*/
/*                 <option value="Russian">Russian</option>*/
/*                 <option value="Filipino">Filipino</option>*/
/*                 <option value="Hindi">Hindi</option>*/
/*                 <option value="Dutch">Dutch</option>*/
/*                 <option value="Italiano">Italiano</option>*/
/*                 <option value="Chinese">Chinese</option>*/
/*                 <option value="Turkish">Turkish</option>*/
/*                 <option value="Deutsch">Deutsch</option>*/
/*                 <option value="Français">Français</option>*/
/*                 <option value="Other">Other</option>*/
/*             </select>*/
/*             */
/*             <input class="form-control mr-sm-2 mr-5" type="text" placeholder="Buscar libro" aria-label="Search" name="textoB" value="{{textoB}}">*/
/*             <button class="btn blue-gradient btn-rounded btn-sm my-0 waves-effect waves-light" type="submit">Buscar</button>*/
/*         </form>*/
/* */
/*     </div>*/
/*     <!-- Collapsible content -->*/
/* */
/* */
/* */
/* </nav>*/
/* <div class="container-fluid">*/
/* */
/*     <!--Blog-->*/
/*     <div class="row mt-4">*/
/*         <!--Sidebar-->*/
/*         <div class="col-lg-3 col-md-12 mb-4 ml-4">*/
/* */
/*             <!-- Section: Categories -->*/
/*             <section class="section">*/
/* */
/*                 <ul class="list-group z-depth-1">*/
/*                     <li class="list-group-item d-flex justify-content-between align-items-center  {% if genero == app.request.get('idGenero')%}*/
/*                                 */
/*                                  {% endif %}*/
/*                                  ">*/
/*                         <a href="{{ path('dwes_libros_genero', {'idGenero':1}) }}" class="dark-grey-text font-small navL">*/
/* */
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
/*             </section>*/
/*             <!-- Section: Categories FIXME: -->*/
/* */
/*         </div>*/
/*         <!--Sidebar-->*/
/*         <!--Main listing-->*/
/*         <div class="col-lg-8 col-12 mt-1 mx-lg-4">*/
/* */
/*             <!--Section: Blog v.3-->*/
/*             <section class="section extra-margins pb-3 text-center text-lg-left">*/
/*                 <!--Grid row-->*/
/*                 <div class="row text-center">*/
/*                     {% include 'DWESLibrosBundle:Default:_libros.html.twig' with {'libros': libros,'fotos':fotos} %}*/
/*                     <!--/Grid row ,'fotos':fotos-->*/
/*                     <!--Grid row-->*/
/* */
/* */
/* */
/*             </section>*/
/*             <!--Section: Blog v.3-->*/
/* */
/*             </div>*/
/*             <!--Main listing-->*/
/* */
/* */
/* */
/*         </div>*/
/*         <!--Blog-->*/
/* */
/*     </div>*/
/*     {% endblock %}*/
