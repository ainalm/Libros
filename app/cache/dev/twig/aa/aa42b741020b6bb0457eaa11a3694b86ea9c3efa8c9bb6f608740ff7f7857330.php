<?php

/* DWESLibrosBundle::layout.html.twig */
class __TwigTemplate_e939367855258e97f2c30dd429dd78c9e1e8c215ee0d903d8852ec0818a9dfa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DWESLibrosBundle::layout.html.twig", 1);
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
        // line 16
        echo "

<!-- Navigation & Intro -->


<!-- Navbar -->
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar white\">
    <div class=\"container\">
        <a class=\"navbar-brand font-weight-bold title\" href=\"";
        // line 24
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
        // line 32
        echo $this->env->getExtension('routing')->getPath("dwes_libros_homepage");
        echo "\" data-offset=\"90\">Inicio</a>
                </li>
                <li class=\"nav-item dropdown ml-4\">
                    <a class=\"nav-link dropdown-toggle title\" id=\"navbarDropdownMenuLink12\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Crear </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("dwes_libros_escribirhistoria");
        echo "\">Escribir novela</a>
                        <a class=\"dropdown-item\" href=\"../features/feature-detail.html\">Anunciar mi libro</a>
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
        // line 50
        echo $this->env->getExtension('routing')->getPath("dwes_libros_contacto");
        echo "\" data-offset=\"90\">Contacto</a>
                </li>
            </ul>
            <!-- Social Icon  -->
            <ul class=\"navbar-nav nav-flex-icons\">


                <li class=\"nav-item ml-3\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect btn pink-gradient btn-rounded btn-sm font-weight-bold\" data-offset=\"90\" href=\"#\"
                            id=\"userDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <i class=\"fa fa-user\"></i>
                            <span class=\"clearfix d-none d-sm-inline-block\">&nbsp; &nbsp;Mi Cuenta&nbsp; &nbsp; </span>
                        </a>

                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"userDropdown\">
                            ";
        // line 66
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 67
            echo "                            <i></i>
                            ";
        } else {
            // line 69
            echo "                            <a class=\"dropdown-item waves-effect waves-light\" href=\"";
            echo $this->env->getExtension('routing')->getPath("dwes_libros_login");
            echo "\">Iniciar sesión</a>
                            <a class=\"dropdown-item waves-effect waves-light\" href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("dwes_libros_registro");
            echo "\">Crear cuenta</a>
                            ";
        }
        // line 71
        echo " ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_REGISTRADO"))) {
            // line 72
            echo "                            <a class=\"dropdown-item waves-effect waves-light\" href=\"";
            echo $this->env->getExtension('routing')->getPath("dwes_libros_perfil");
            echo "\">Mi perfil</a>
                            <a class=\"dropdown-item waves-effect waves-light\" href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("dwes_libros_biblioteca");
            echo "\">Mi biblioteca</a>
                            <a class=\"dropdown-item waves-effect waves-light\" href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("dwes_libros_ajustes");
            echo "\">Ajustes</a>
                            <a class=\"dropdown-item waves-effect waves-light\" href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("dwes_libros_logout");
            echo "\">Cerrar sesión</a>

                            ";
        }
        // line 78
        echo "
                        </div>
                    </li>

                </li>
            </ul>
        </div>

    </div>
</nav>


";
        // line 90
        $this->displayBlock('portadaInicio', $context, $blocks);
        echo " ";
        $this->displayBlock('portada', $context, $blocks);
        // line 91
        echo "
<!-- Navigation & Intro -->


<main>



    ";
        // line 99
        $this->displayBlock('contenido', $context, $blocks);
        // line 100
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
        // line 155
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            echo " ";
        }
        // line 156
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
        // line 185
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo " ¡Bienvenido,
            <b>";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</b>! ";
        } else {
            echo " -DWES- ";
        }
        // line 187
        echo "
        </div>
    </div>
    <!--/.Copyright -->

</footer>
<!--/.Footer-->



";
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "
<!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
<!-- Bootstrap core CSS -->
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
<!-- Material Design Bootstrap -->
";
        // line 9
        echo "<!-- Versión PRO Material Design Bootstrap -->
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/css/compiled.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
<!-- Material Design Bootstrap -->
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/css/mdb.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
<!--  Mi CSS -->
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/css/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" /> 
";
    }

    // line 90
    public function block_portadaInicio($context, array $blocks = array())
    {
        echo " ";
    }

    public function block_portada($context, array $blocks = array())
    {
        echo " ";
    }

    // line 99
    public function block_contenido($context, array $blocks = array())
    {
        echo " ";
    }

    // line 197
    public function block_javascripts($context, array $blocks = array())
    {
        // line 198
        echo "<!-- SCRIPTS -->
<!-- JQuery -->
<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- Bootstrap tooltips -->
<script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/js/popper.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- Bootstrap core JavaScript -->

<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- MDB core JavaScript -->

<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/js/mdb.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- Mi JavaScript -->
<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script>
    //Animación de Inicio
    new WOW().init();

    // Material Select Initialization
    \$(document).ready(function () {
        \$('.mdb-select').material_select();
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
        return array (  364 => 210,  359 => 208,  353 => 205,  347 => 202,  342 => 200,  338 => 198,  335 => 197,  329 => 99,  318 => 90,  312 => 14,  307 => 12,  302 => 10,  299 => 9,  294 => 6,  288 => 2,  285 => 1,  271 => 187,  265 => 186,  261 => 185,  230 => 156,  226 => 155,  169 => 100,  167 => 99,  157 => 91,  153 => 90,  139 => 78,  133 => 75,  129 => 74,  125 => 73,  120 => 72,  117 => 71,  112 => 70,  107 => 69,  103 => 67,  101 => 66,  82 => 50,  66 => 37,  58 => 32,  47 => 24,  37 => 16,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %} {% block body %} {% block stylesheets %}*/
/* */
/* <!-- Font Awesome -->*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">*/
/* <!-- Bootstrap core CSS -->*/
/* <link href="{{ asset('bundles/dweslibros/MDB/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/* <!-- Material Design Bootstrap -->*/
/* {#<link href="{{ asset('bundles/dweslibros/MDB/css/mdb.min.css') }}" type="text/css" rel="stylesheet" /> #}*/
/* <!-- Versión PRO Material Design Bootstrap -->*/
/* <link href="{{ asset('bundles/dweslibros/MDB/css/compiled.min.css') }}" type="text/css" rel="stylesheet" />*/
/* <!-- Material Design Bootstrap -->*/
/* <link href="{{ asset('bundles/dweslibros/MDB/css/mdb.css') }}" type="text/css" rel="stylesheet" />*/
/* <!--  Mi CSS -->*/
/* <link href="{{ asset('bundles/dweslibros/css/estilo.css') }}" type="text/css" rel="stylesheet" /> */
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
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_escribirhistoria') }}">Escribir novela</a>*/
/*                         <a class="dropdown-item" href="../features/feature-detail.html">Anunciar mi libro</a>*/
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
/*                 <li class="nav-item ml-4">*/
/*                     <a class="nav-link title" href="{{ path('dwes_libros_contacto') }}" data-offset="90">Contacto</a>*/
/*                 </li>*/
/*             </ul>*/
/*             <!-- Social Icon  -->*/
/*             <ul class="navbar-nav nav-flex-icons">*/
/* */
/* */
/*                 <li class="nav-item ml-3">*/
/*                     <li class="nav-item dropdown">*/
/*                         <a class="nav-link dropdown-toggle waves-effect btn pink-gradient btn-rounded btn-sm font-weight-bold" data-offset="90" href="#"*/
/*                             id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                             <i class="fa fa-user"></i>*/
/*                             <span class="clearfix d-none d-sm-inline-block">&nbsp; &nbsp;Mi Cuenta&nbsp; &nbsp; </span>*/
/*                         </a>*/
/* */
/*                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">*/
/*                             {% if app.user %}*/
/*                             <i></i>*/
/*                             {% else %}*/
/*                             <a class="dropdown-item waves-effect waves-light" href="{{ path('dwes_libros_login') }}">Iniciar sesión</a>*/
/*                             <a class="dropdown-item waves-effect waves-light" href="{{ path('dwes_libros_registro') }}">Crear cuenta</a>*/
/*                             {% endif %} {% if app.user and is_granted('ROLE_REGISTRADO') %}*/
/*                             <a class="dropdown-item waves-effect waves-light" href="{{ path('dwes_libros_perfil') }}">Mi perfil</a>*/
/*                             <a class="dropdown-item waves-effect waves-light" href="{{ path('dwes_libros_biblioteca') }}">Mi biblioteca</a>*/
/*                             <a class="dropdown-item waves-effect waves-light" href="{{ path('dwes_libros_ajustes') }}">Ajustes</a>*/
/*                             <a class="dropdown-item waves-effect waves-light" href="{{path('dwes_libros_logout')}}">Cerrar sesión</a>*/
/* */
/*                             {% endif %}*/
/* */
/*                         </div>*/
/*                     </li>*/
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
/* */
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
/* <script>*/
/*     //Animación de Inicio*/
/*     new WOW().init();*/
/* */
/*     // Material Select Initialization*/
/*     $(document).ready(function () {*/
/*         $('.mdb-select').material_select();*/
/*     });*/
/* </script>*/
/* {% endblock %}*/
