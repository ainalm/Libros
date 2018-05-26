<?php

/* DWESLibrosBundle::layout.html.twig */
class __TwigTemplate_9e1aad32760c027c033ab3f25a6eda5ccb47fdb536410acdb1374fa18168e8c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "DWESLibrosBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'portadaInicio' => array($this, 'block_portadaInicio'),
            'portada' => array($this, 'block_portada'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_body($context, array $blocks = array())
    {
        echo " ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "

<!-- Navigation & Intro -->


<!-- Navbar -->
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar white\">
    <div class=\"container\">
        <a class=\"navbar-brand font-weight-bold title\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("dwes_libros_homepage");
        echo "\">Brand</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\"
            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
            <ul class=\"list-unstyled navbar-nav mr-auto\">
                <li class=\"nav-item ml-4\">
                    <a class=\"nav-link title\" href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("dwes_libros_homepage");
        echo "\" data-offset=\"90\">Inicio</a>
                </li>
                <li class=\"nav-item dropdown ml-4\">
                    <a class=\"nav-link dropdown-toggle title\" id=\"navbarDropdownMenuLink12\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Crear </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("dwes_libros_escribirhistoria", array("tipo" => "gratis"));
        echo "\">Nueva historia</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("dwes_libros_escribirhistoria", array("tipo" => "anuncio"));
        echo "\">Anunciar mi libro</a>
                        
                    </div>
                </li>
                <li class=\"nav-item dropdown ml-4\">
                    <a class=\"nav-link dropdown-toggle title\" id=\"navbarDropdownMenuLink2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Explorar </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"../pages/about.html\">Leer historias gratis</a>
                        <a class=\"dropdown-item\" href=\"../pages/testimonials.html\">Leer historias publicadas</a>

                    </div>
                </li>
                 <li class=\"nav-item ml-4\">
                    <a class=\"nav-link title\" href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("dwes_libros_publicadosBib");
        echo "\" data-offset=\"90\">Mi Biblioteca</a>
                </li>
                <li class=\"nav-item ml-4\">
                    <a class=\"nav-link title\" href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("dwes_libros_contacto");
        echo "\" data-offset=\"90\">Contacto</a>
                </li>
            </ul>
            <!-- Social Icon  -->
            <ul class=\"navbar-nav nav-flex-icons\">


              
                    <li class=\"nav-item dropdown ml-4\">
                    <a class=\"nav-link dropdown-toggle waves-effect btn pink-gradient btn-rounded btn-sm font-weight-bold\" id=\"navbarDropdownMenuLink3\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user\"></i>Mi cuenta </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                         ";
        // line 69
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 70
            echo "                            <i></i>
                            ";
        } else {
            // line 72
            echo "                            <a class=\"dropdown-item waves-effect waves-light\" href=\"";
            echo $this->env->getExtension('routing')->getPath("dwes_libros_login");
            echo "\">Iniciar sesión</a>
                            <a class=\"dropdown-item waves-effect waves-light\" href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("dwes_libros_registro");
            echo "\">Crear cuenta</a>
                            ";
        }
        // line 74
        echo " ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_REGISTRADO"))) {
            // line 75
            echo "                            <a class=\"dropdown-item waves-effect waves-light\" href=\"";
            echo $this->env->getExtension('routing')->getPath("dwes_libros_perfil");
            echo "\">Perfil</a>
                            <a class=\"dropdown-item waves-effect waves-light\" href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("dwes_libros_ajustes");
            echo "\">Ajustes</a>
                            <a class=\"dropdown-item waves-effect waves-light\" href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("dwes_libros_logout");
            echo "\">Cerrar sesión</a>

                            ";
        }
        // line 80
        echo "                    </div>
                </li>

                </li>
            </ul>
        </div>

    </div>
</nav>


";
        // line 91
        $this->displayBlock('portadaInicio', $context, $blocks);
        echo " ";
        $this->displayBlock('portada', $context, $blocks);
        // line 92
        echo "
<!-- Navigation & Intro -->


<main>
 


    ";
        // line 100
        $this->displayBlock('contenido', $context, $blocks);
        // line 101
        echo "
</main>

<!--Footer-->
<footer class=\"page-footer text-center text-md-left unique-color-dark pt-0\">

    <div style=\"background-color: #f95169;\">
        <div class=\"container\">

            <!--Grid row-->
            <div class=\"row py-4 d-flex align-items-center\">



            </div>
            <!--Grid row-->
        </div>
    </div>

    <!--Footer Links-->
    <div class=\"container mt-5 mb-4 text-center text-md-left\">
        <div class=\"row mt-3\">

            <!--First column-->
            <div class=\"col-md-3 col-lg-4 col-xl-3 mb-5\">
                <h6 class=\"spacing font-weight-bold\">
                    <strong>Mi Comunidad </strong>
                </h6>
                <hr class=\"pink accent-2 mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px;\">
                <p>Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla. </p>
            </div>
            <!--/.First column-->



            <!--Third column-->
            <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-5\">
                <h6 class=\"spacing font-weight-bold\">
                    <strong>Links Útiles</strong>
                </h6>
                <hr class=\"pink accent-2 mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px;\">
                <p>
                    <a href=\"#!\">Mi Cuenta</a>
                </p>
                <p>
                    <a href=\"#!\">Mi Biblioteca</a>
                </p>
                <p>
                    <a href=\"#!\">Suscripción</a>
                </p>
                <p>
                    <a href=\"#!\">Privacidad</a>
                </p>
                <p>
                    <a href=\"#!\">Eliminar cuenta</a>
                    ";
        // line 156
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            echo " ";
        }
        // line 157
        echo "                </p>
            </div>
            <!--/.Third column-->

            <!--Fourth column -->
            <div class=\"col-md-4 col-lg-3 col-xl-3\">
                <h6 class=\"spacing font-weight-bold\">
                    <strong>Contacto</strong>
                </h6>
                <hr class=\"pink accent-2 mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px;\">
                <p>
                    <i class=\"fa fa-home mr-3\"></i>Benidorm, 03570, ES</p>
                <p>
                    <i class=\"fa fa-envelope mr-3\"></i> info@gmail.com</p>
                <p>
                    <i class=\"fa fa-phone mr-3\"></i> + 34 634 567 88</p>

            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright-->
    <div class=\"footer-copyright text-center py-3\">
        <div class=\"container-fluid\">
            © 2018 Copyright:
            <a href=\"#\" target=\"_blank\"> Aina Lahmam </a>
            ";
        // line 186
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo " ¡Bienvenido,
            <b>";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</b>! ";
        } else {
            echo " -DWES- ";
        }
        // line 188
        echo "
        </div>
    </div>
    <!--/.Copyright -->

</footer>
<!--/.Footer-->



";
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "
<!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
<!-- Bootstrap core CSS -->
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
<!-- Material Design Bootstrap -->
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/css/mdb.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" /> 
<!-- Versión PRO Material Design Bootstrap -->
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/css/compiled.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
<!-- Material Design Bootstrap -->
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/css/mdb.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
<!--  Mi CSS -->
<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/css/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" /> 

<!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">
";
    }

    // line 91
    public function block_portadaInicio($context, array $blocks = array())
    {
        echo " ";
    }

    public function block_portada($context, array $blocks = array())
    {
        echo " ";
    }

    // line 100
    public function block_contenido($context, array $blocks = array())
    {
        echo " ";
    }

    // line 198
    public function block_javascripts($context, array $blocks = array())
    {
        // line 199
        echo "<!-- SCRIPTS -->
<!-- JQuery -->
<script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- Bootstrap tooltips -->
<script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/js/popper.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- Bootstrap core JavaScript -->

<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- MDB core JavaScript -->

<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/js/mdb.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- Mi JavaScript -->
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

  ";
        // line 216
        echo "     <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/dataTable/css/material.min.css"), "html", null, true);
        echo "\" /> 
    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/dataTable/css/dataTables.material.min.css"), "html", null, true);
        echo "\" /> 

     <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/dataTable/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script> 
     <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/dataTable/js/dataTables.material.min.js"), "html", null, true);
        echo "\"></script> 
 




    
<script>
    //Animación de Inicio
    new WOW().init();

    // Material Select Initialization
    \$(document).ready(function () {
        \$('.mdb-select').material_select();
       \$('.capitulos').DataTable( {
            \"info\":     false,
            \"lengthChange\": false,
            \"iDisplayLength\":5,
             \"language\": {
                 \"sZeroRecords\": \"No hay resultados que mostrar\",
                 \"sSearch\": \"Buscar\",
                    \"paginate\": {
                    \"previous\": \"Atrás\",
                    \"sNext\": \"Siguiente\"
                    }
  }
       
    } ); 
   
   \$('#capitulos1').DataTable( {
      
            \"info\":     false,
            \"lengthChange\": false,
            \"iDisplayLength\":5,
             \"language\": {
                 \"sZeroRecords\": \"No hay resultados que mostrar\",
                 \"sSearch\": \"Buscar\",
                    \"paginate\": {
                    \"previous\": \"Atrás\",
                    \"sNext\": \"Siguiente\"
                    }
  }    
    } ); 
               
\$('.dt-table').addClass('col-lg-12');
\$(\"#capitulos1_filter\").insertAfter(\".dt-table\");

//\$(\"#capitulos2_filter\").insertAfter(\".dt-table\");
    });
</script>

 ";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 220,  384 => 219,  379 => 217,  374 => 216,  369 => 211,  364 => 209,  358 => 206,  352 => 203,  347 => 201,  343 => 199,  340 => 198,  334 => 100,  323 => 91,  314 => 15,  309 => 13,  304 => 11,  299 => 9,  294 => 7,  288 => 3,  285 => 2,  271 => 188,  265 => 187,  261 => 186,  230 => 157,  226 => 156,  169 => 101,  167 => 100,  157 => 92,  153 => 91,  140 => 80,  134 => 77,  130 => 76,  125 => 75,  122 => 74,  117 => 73,  112 => 72,  108 => 70,  106 => 69,  92 => 58,  86 => 55,  70 => 42,  66 => 41,  58 => 36,  47 => 28,  37 => 20,  11 => 2,);
    }
}
/* */
/* {% extends '::base.html.twig' %} {% block body %} {% block stylesheets %}*/
/* */
/* <!-- Font Awesome -->*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">*/
/* <!-- Bootstrap core CSS -->*/
/* <link href="{{ asset('bundles/dweslibros/MDB/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/* <!-- Material Design Bootstrap -->*/
/* <link href="{{ asset('bundles/dweslibros/MDB/css/mdb.min.css') }}" type="text/css" rel="stylesheet" /> */
/* <!-- Versión PRO Material Design Bootstrap -->*/
/* <link href="{{ asset('bundles/dweslibros/MDB/css/compiled.min.css') }}" type="text/css" rel="stylesheet" />*/
/* <!-- Material Design Bootstrap -->*/
/* <link href="{{ asset('bundles/dweslibros/MDB/css/mdb.css') }}" type="text/css" rel="stylesheet" />*/
/* <!--  Mi CSS -->*/
/* <link href="{{ asset('bundles/dweslibros/css/estilo.css') }}" type="text/css" rel="stylesheet" /> */
/* */
/* <!-- Font Awesome -->*/
/* <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">*/
/* {% endblock %}*/
/* */
/* */
/* <!-- Navigation & Intro -->*/
/* */
/* */
/* <!-- Navbar -->*/
/* <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar white">*/
/*     <div class="container">*/
/*         <a class="navbar-brand font-weight-bold title" href="{{ path('dwes_libros_homepage') }}">Brand</a>*/
/*         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"*/
/*             aria-expanded="false" aria-label="Toggle navigation">*/
/*             <span class="navbar-toggler-icon"></span>*/
/*         </button>*/
/*         <div class="collapse navbar-collapse" id="navbarTogglerDemo02">*/
/*             <ul class="list-unstyled navbar-nav mr-auto">*/
/*                 <li class="nav-item ml-4">*/
/*                     <a class="nav-link title" href="{{ path('dwes_libros_homepage') }}" data-offset="90">Inicio</a>*/
/*                 </li>*/
/*                 <li class="nav-item dropdown ml-4">*/
/*                     <a class="nav-link dropdown-toggle title" id="navbarDropdownMenuLink12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Crear </a>*/
/*                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">*/
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_escribirhistoria', {'tipo' : "gratis"}) }}">Nueva historia</a>*/
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_escribirhistoria', {'tipo' : "anuncio"}) }}">Anunciar mi libro</a>*/
/*                         */
/*                     </div>*/
/*                 </li>*/
/*                 <li class="nav-item dropdown ml-4">*/
/*                     <a class="nav-link dropdown-toggle title" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explorar </a>*/
/*                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">*/
/*                         <a class="dropdown-item" href="../pages/about.html">Leer historias gratis</a>*/
/*                         <a class="dropdown-item" href="../pages/testimonials.html">Leer historias publicadas</a>*/
/* */
/*                     </div>*/
/*                 </li>*/
/*                  <li class="nav-item ml-4">*/
/*                     <a class="nav-link title" href="{{ path('dwes_libros_publicadosBib') }}" data-offset="90">Mi Biblioteca</a>*/
/*                 </li>*/
/*                 <li class="nav-item ml-4">*/
/*                     <a class="nav-link title" href="{{ path('dwes_libros_contacto') }}" data-offset="90">Contacto</a>*/
/*                 </li>*/
/*             </ul>*/
/*             <!-- Social Icon  -->*/
/*             <ul class="navbar-nav nav-flex-icons">*/
/* */
/* */
/*               */
/*                     <li class="nav-item dropdown ml-4">*/
/*                     <a class="nav-link dropdown-toggle waves-effect btn pink-gradient btn-rounded btn-sm font-weight-bold" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>Mi cuenta </a>*/
/*                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">*/
/*                          {% if app.user %}*/
/*                             <i></i>*/
/*                             {% else %}*/
/*                             <a class="dropdown-item waves-effect waves-light" href="{{ path('dwes_libros_login') }}">Iniciar sesión</a>*/
/*                             <a class="dropdown-item waves-effect waves-light" href="{{ path('dwes_libros_registro') }}">Crear cuenta</a>*/
/*                             {% endif %} {% if app.user and is_granted('ROLE_REGISTRADO') %}*/
/*                             <a class="dropdown-item waves-effect waves-light" href="{{ path('dwes_libros_perfil') }}">Perfil</a>*/
/*                             <a class="dropdown-item waves-effect waves-light" href="{{ path('dwes_libros_ajustes') }}">Ajustes</a>*/
/*                             <a class="dropdown-item waves-effect waves-light" href="{{path('dwes_libros_logout')}}">Cerrar sesión</a>*/
/* */
/*                             {% endif %}*/
/*                     </div>*/
/*                 </li>*/
/* */
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/* */
/*     </div>*/
/* </nav>*/
/* */
/* */
/* {% block portadaInicio %} {% endblock %} {% block portada %} {% endblock %}*/
/* */
/* <!-- Navigation & Intro -->*/
/* */
/* */
/* <main>*/
/*  */
/* */
/* */
/*     {% block contenido %} {% endblock %}*/
/* */
/* </main>*/
/* */
/* <!--Footer-->*/
/* <footer class="page-footer text-center text-md-left unique-color-dark pt-0">*/
/* */
/*     <div style="background-color: #f95169;">*/
/*         <div class="container">*/
/* */
/*             <!--Grid row-->*/
/*             <div class="row py-4 d-flex align-items-center">*/
/* */
/* */
/* */
/*             </div>*/
/*             <!--Grid row-->*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!--Footer Links-->*/
/*     <div class="container mt-5 mb-4 text-center text-md-left">*/
/*         <div class="row mt-3">*/
/* */
/*             <!--First column-->*/
/*             <div class="col-md-3 col-lg-4 col-xl-3 mb-5">*/
/*                 <h6 class="spacing font-weight-bold">*/
/*                     <strong>Mi Comunidad </strong>*/
/*                 </h6>*/
/*                 <hr class="pink accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">*/
/*                 <p>Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla. </p>*/
/*             </div>*/
/*             <!--/.First column-->*/
/* */
/* */
/* */
/*             <!--Third column-->*/
/*             <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-5">*/
/*                 <h6 class="spacing font-weight-bold">*/
/*                     <strong>Links Útiles</strong>*/
/*                 </h6>*/
/*                 <hr class="pink accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">*/
/*                 <p>*/
/*                     <a href="#!">Mi Cuenta</a>*/
/*                 </p>*/
/*                 <p>*/
/*                     <a href="#!">Mi Biblioteca</a>*/
/*                 </p>*/
/*                 <p>*/
/*                     <a href="#!">Suscripción</a>*/
/*                 </p>*/
/*                 <p>*/
/*                     <a href="#!">Privacidad</a>*/
/*                 </p>*/
/*                 <p>*/
/*                     <a href="#!">Eliminar cuenta</a>*/
/*                     {% if app.user and is_granted('ROLE_ADMIN') %} {% endif %}*/
/*                 </p>*/
/*             </div>*/
/*             <!--/.Third column-->*/
/* */
/*             <!--Fourth column -->*/
/*             <div class="col-md-4 col-lg-3 col-xl-3">*/
/*                 <h6 class="spacing font-weight-bold">*/
/*                     <strong>Contacto</strong>*/
/*                 </h6>*/
/*                 <hr class="pink accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">*/
/*                 <p>*/
/*                     <i class="fa fa-home mr-3"></i>Benidorm, 03570, ES</p>*/
/*                 <p>*/
/*                     <i class="fa fa-envelope mr-3"></i> info@gmail.com</p>*/
/*                 <p>*/
/*                     <i class="fa fa-phone mr-3"></i> + 34 634 567 88</p>*/
/* */
/*             </div>*/
/*             <!--/.Fourth column-->*/
/* */
/*         </div>*/
/*     </div>*/
/*     <!--/.Footer Links-->*/
/* */
/*     <!-- Copyright-->*/
/*     <div class="footer-copyright text-center py-3">*/
/*         <div class="container-fluid">*/
/*             © 2018 Copyright:*/
/*             <a href="#" target="_blank"> Aina Lahmam </a>*/
/*             {% if app.user %} ¡Bienvenido,*/
/*             <b>{{ app.user.username }}</b>! {% else %} -DWES- {% endif %}*/
/* */
/*         </div>*/
/*     </div>*/
/*     <!--/.Copyright -->*/
/* */
/* </footer>*/
/* <!--/.Footer-->*/
/* */
/* */
/* */
/* {% endblock %} {% block javascripts %}*/
/* <!-- SCRIPTS -->*/
/* <!-- JQuery -->*/
/* <script src="{{ asset('bundles/dweslibros/MDB/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>*/
/* <!-- Bootstrap tooltips -->*/
/* <script src="{{ asset('bundles/dweslibros/MDB/js/popper.min.js') }}" type="text/javascript"></script>*/
/* <!-- Bootstrap core JavaScript -->*/
/* */
/* <script src="{{ asset('bundles/dweslibros/MDB/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/* <!-- MDB core JavaScript -->*/
/* */
/* <script src="{{ asset('bundles/dweslibros/MDB/js/mdb.min.js') }}" type="text/javascript"></script>*/
/* <!-- Mi JavaScript -->*/
/* <script src="{{ asset('bundles/dweslibros/js/script.js') }}" type="text/javascript"></script>*/
/* */
/*   {#   <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />*/
/* */
/*  #}*/
/*      <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('bundles/dweslibros/dataTable/css/material.min.css') }}" /> */
/*     <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('bundles/dweslibros/dataTable/css/dataTables.material.min.css') }}" /> */
/* */
/*      <script src="{{ asset('bundles/dweslibros/dataTable/js/jquery.dataTables.min.js') }}"></script> */
/*      <script src="{{ asset('bundles/dweslibros/dataTable/js/dataTables.material.min.js') }}"></script> */
/*  */
/* */
/* */
/* */
/* */
/*     */
/* <script>*/
/*     //Animación de Inicio*/
/*     new WOW().init();*/
/* */
/*     // Material Select Initialization*/
/*     $(document).ready(function () {*/
/*         $('.mdb-select').material_select();*/
/*        $('.capitulos').DataTable( {*/
/*             "info":     false,*/
/*             "lengthChange": false,*/
/*             "iDisplayLength":5,*/
/*              "language": {*/
/*                  "sZeroRecords": "No hay resultados que mostrar",*/
/*                  "sSearch": "Buscar",*/
/*                     "paginate": {*/
/*                     "previous": "Atrás",*/
/*                     "sNext": "Siguiente"*/
/*                     }*/
/*   }*/
/*        */
/*     } ); */
/*    */
/*    $('#capitulos1').DataTable( {*/
/*       */
/*             "info":     false,*/
/*             "lengthChange": false,*/
/*             "iDisplayLength":5,*/
/*              "language": {*/
/*                  "sZeroRecords": "No hay resultados que mostrar",*/
/*                  "sSearch": "Buscar",*/
/*                     "paginate": {*/
/*                     "previous": "Atrás",*/
/*                     "sNext": "Siguiente"*/
/*                     }*/
/*   }    */
/*     } ); */
/*                */
/* $('.dt-table').addClass('col-lg-12');*/
/* $("#capitulos1_filter").insertAfter(".dt-table");*/
/* */
/* //$("#capitulos2_filter").insertAfter(".dt-table");*/
/*     });*/
/* </script>*/
/* */
/*  {#  columnDefs: [*/
/*             {*/
/*                 targets: [ 0, 1, 2 ],*/
/*                 className: 'mdl-data-table__cell--non-numeric'*/
/*                */
/*             }*/
/*         ] #}*/
/* {% endblock %}  */
