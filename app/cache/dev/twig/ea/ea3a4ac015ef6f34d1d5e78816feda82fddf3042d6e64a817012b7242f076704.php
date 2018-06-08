<?php

/* DWESLibrosBundle::layout.html.twig */
class __TwigTemplate_fffb754024b91ad584dd180de206931c10bd34444cc2e8f916f9abe4ae7d0163 extends Twig_Template
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
        // line 3
        echo "   
 ";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 50
        echo "

<!-- Navigation & Intro -->


<!-- Navbar -->
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar white\" style=\"
    
\">
    <div class=\"container\">
        <a class=\"navbar-brand font-weight-bold title\" href=\"";
        // line 60
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
        // line 68
        echo $this->env->getExtension('routing')->getPath("dwes_libros_homepage");
        echo "\" data-offset=\"90\">Inicio</a>
                </li>
                <li class=\"nav-item dropdown ml-4\">
                    <a class=\"nav-link dropdown-toggle title\" id=\"navbarDropdownMenuLink12\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Crear </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("dwes_libros_escribirhistoria", array("tipo" => "gratis"));
        echo "\">Nueva historia </a>
                        <a class=\"dropdown-item\" href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("dwes_libros_escribirhistoria", array("tipo" => "anuncio"));
        echo "\">Anunciar mi libro</a>
                        
                    </div>
                </li>
                <li class=\"nav-item dropdown ml-4\">
                    <a class=\"nav-link dropdown-toggle title\" id=\"navbarDropdownMenuLink2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Explorar </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                       ";
        // line 89
        echo "


     
                         <a class=\"dropdown-item\" href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 1));
        echo "\">Aventura</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 2));
        echo "\">Acción</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 3));
        echo "\">Terror</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 4));
        echo "\">Fantasía</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 5));
        echo "\">Misterio</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 6));
        echo "\">Poesía</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 7));
        echo "\">Romance</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 8));
        echo "\">Drama</a>
                    </div>
                </li>

                 <li class=\"nav-item ml-4\">
                    <a class=\"nav-link title\" href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("dwes_libros_publicadosBib");
        echo "\" data-offset=\"90\">Mi Biblioteca</a>
                </li>
                <li class=\"nav-item ml-4\">
                    <a class=\"nav-link title\" href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("dwes_libros_contacto");
        echo "\" data-offset=\"90\">Contacto</a>
                </li>
                
                
            </ul>
            <!-- Social Icon  -->  
            
          ";
        // line 131
        echo "             <ul class=\"navbar-nav nav-flex-icons\">
\t\t
                   
              
              
                    <li class=\"nav-item dropdown ml-4\">
                    <a class=\"nav-link dropdown-toggle waves-effect btn peach-gradient btn-rounded btn-sm font-weight-bold\" id=\"navbarDropdownMenuLink3\" data-toggle=\"dropdown\" 
                    aria-haspopup=\"true\" aria-expanded=\"false\">
                   <i class=\"fa fa-language\" aria-hidden=\"true\"></i>Idioma </a>
                    
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                     <a href=\"#googtrans(es|es)\" class=\"lang-es lang-select dropdown-item waves-effect waves-light\" data-lang=\"es\"><img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/langs/es.png"), "html", null, true);
        echo "\" alt=\"SPAIN\">Español</a>
                     
            <a href=\"#googtrans(es|en)\" class=\"lang-en lang-select dropdown-item waves-effect waves-light\" data-lang=\"en\"><img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/langs/en.png"), "html", null, true);
        echo "\" alt=\"USA\">Inglés</a>
                    
                   
\t\t  <a href=\"#googtrans(es|fr)\" class=\"lang-es lang-select dropdown-item waves-effect waves-light\" data-lang=\"fr\"><img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/langs/fr.png"), "html", null, true);
        echo "\" alt=\"FRANCE\">Francés</a>
\t\t  <a href=\"#googtrans(es|no)\" class=\"lang-es lang-select dropdown-item waves-effect waves-light\" data-lang=\"zh-CN\"><img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/langs/no.png"), "html", null, true);
        echo "\" alt=\"RUSIA\">Noruego</a>
\t\t  <a href=\"#googtrans(es|ja)\" class=\"lang-es lang-select dropdown-item waves-effect waves-light\" data-lang=\"ja\"><img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/langs/ja.png"), "html", null, true);
        echo "\" alt=\"JAPAN\">Japonés</a>
            <a href=\"#googtrans(es|ar)\" class=\"lang-es lang-select dropdown-item waves-effect waves-light\" data-lang=\"ja\"><img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/langs/ar.png"), "html", null, true);
        echo "\" alt=\"Árabe\">Árabe</a>
                            
                             
                    </div>
                </li>

                </li>
            </ul>
     ";
        // line 158
        echo " 
            
            <ul class=\"navbar-nav nav-flex-icons\">
                    <li class=\"nav-item dropdown ml-4\">
                    <a class=\"nav-link dropdown-toggle waves-effect btn pink-gradient btn-rounded btn-sm font-weight-bold\" id=\"navbarDropdownMenuLink3\" data-toggle=\"dropdown\" 
                    aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fa fa-user\"></i>Mi cuenta </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                         ";
        // line 166
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 167
            echo "                            <i></i>
                            ";
        } else {
            // line 168
            echo " 
                            <a class=\"dropdown-item waves-effect waves-light\" href=\"";
            // line 169
            echo $this->env->getExtension('routing')->getPath("dwes_libros_login");
            echo "\">Iniciar sesión</a>
                            <a class=\"dropdown-item waves-effect waves-light\" href=\"";
            // line 170
            echo $this->env->getExtension('routing')->getPath("dwes_libros_registro");
            echo "\">Crear cuenta</a>
                            ";
        }
        // line 171
        echo " ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_REGISTRADO"))) {
            // line 172
            echo "                            <a class=\"dropdown-item waves-effect waves-light\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_perfil", array("username" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()))), "html", null, true);
            echo "\">Perfil</a>
                            <a class=\"dropdown-item waves-effect waves-light\" href=\"";
            // line 173
            echo $this->env->getExtension('routing')->getPath("dwes_libros_ajustes");
            echo "\">Ajustes</a>
                            <a class=\"dropdown-item waves-effect waves-light\" href=\"";
            // line 174
            echo $this->env->getExtension('routing')->getPath("dwes_libros_logout");
            echo "\">Cerrar sesión</a>
                            ";
        }
        // line 176
        echo "                              
                             
                    </div>
                </li>

                </li>
            </ul>
        </div>

    </div>
</nav>


";
        // line 189
        $this->displayBlock('portadaInicio', $context, $blocks);
        echo " ";
        $this->displayBlock('portada', $context, $blocks);
        // line 190
        echo "
<!-- Navigation & Intro -->


<main>
 


    ";
        // line 198
        $this->displayBlock('contenido', $context, $blocks);
        // line 199
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
                   
                    ";
        // line 251
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " <a href=\"#!\">Eliminar cuenta</a> ";
        }
        // line 252
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
        // line 281
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            echo " ¡Bienvenido,
            <b>";
            // line 282
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "</b>! ";
        } else {
            echo " -BellRead- ";
        }
        // line 283
        echo "
        </div>
    </div>
    <!--/.Copyright -->
</footer>
<!--/.Footer-->


 
";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo " 
<!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
<!-- Bootstrap core CSS -->
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
<!-- Material Design Bootstrap -->
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/css/mdb.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" /> 
<!-- Versión PRO Material Design Bootstrap -->
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/css/compiled.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
<!-- Material Design Bootstrap -->
<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/css/mdb.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
<!--  Mi CSS -->
<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/css/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" /> 

<!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">
<!-- Start of Async Drift Code -->
<script>
\"use strict\";

!function() { 
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error(\"Drift snippet included twice.\"));
    t.invoked = !0, t.methods = [ \"identify\", \"config\", \"track\", \"reset\", \"debug\", \"show\", \"ping\", \"page\", \"hide\", \"off\", \"on\" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement(\"script\");
      o.type = \"text/javascript\", o.async = !0, o.crossorigin = \"anonymous\", o.src = \"https://js.driftt.com/include/\" + n + \"/\" + t + \".js\";
      var i = document.getElementsByTagName(\"script\")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('knp8trrbfyw8');
</script>
<!-- End of Async Drift Code -->
";
    }

    // line 189
    public function block_portadaInicio($context, array $blocks = array())
    {
        echo " ";
    }

    public function block_portada($context, array $blocks = array())
    {
        echo " ";
    }

    // line 198
    public function block_contenido($context, array $blocks = array())
    {
        echo " ";
    }

    // line 292
    public function block_javascripts($context, array $blocks = array())
    {
        // line 293
        echo "<!-- SCRIPTS -->
<!-- JQuery --> 
<script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- Bootstrap tooltips -->
<script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/js/popper.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- Bootstrap core JavaScript -->

<script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- MDB core JavaScript -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js\"></script>
<script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/MDB/js/mdb.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- Mi JavaScript -->
<script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

";
        // line 308
        echo "     <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/dataTable/css/material.min.css"), "html", null, true);
        echo "\" /> 
    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/dataTable/css/dataTables.material.min.css"), "html", null, true);
        echo "\" /> 

     <script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/dataTable/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script> 
     <script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/dataTable/js/dataTables.material.min.js"), "html", null, true);
        echo "\"></script> 
";
        // line 314
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js\"></script>

";
        // line 317
        echo " <link href=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css\" rel=\"stylesheet\">
 <script src=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js\"></script>
 <script src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/js/editorSpanish.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
 <script src=\"  https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js\"></script>
  
<script>
    //Animación de Inicio
    new WOW().init();
 
    // Material Select Initialization
    \$(document).ready(function () {
setcookie('googtrans', '/es');
      //  \$.cookie(\"googtrans\", '/es' );

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
 

    });

\t
        \$('#summernote').summernote({
            callbacks: {
        onChange: function() {

            ///Cuento los carácteres y palabras introducidas
        char_count = \$(\"#summernote\").val().length;
        word_count = \$(\"#summernote\").val().split(\" \").length;

  \$(\"#carac\").text(char_count);
  \$(\"#palab\").text(word_count);
    }
  },
        placeholder: 'Escriba su historia aquí...',
        tabsize: 2,
        height: 350,
         lang: 'es-ES',

       
      });
   ";
        // line 389
        echo "   function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
}
";
        // line 394
        echo " 
function triggerHtmlEvent(element, eventName) {
\t  var event;
\t  if (document.createEvent) {
\t\tevent = document.createEvent('HTMLEvents');
\t\tevent.initEvent(eventName, true, true);
\t\telement.dispatchEvent(event);
\t  } else {
\t\tevent = document.createEventObject();
\t\tevent.eventType = eventName;
\t\telement.fireEvent('on' + event.eventType, event);
\t  }
\t}
      jQuery('.lang-select').click(function() {
\t  var theLang = jQuery(this).attr('data-lang');
\t  jQuery('.goog-te-combo').val(theLang);
\t  //alert(jQuery(this).attr('href'));
\t  window.location = jQuery(this).attr('href');
\t  location.reload();
\t});

   
</script>

<script type=\"text/javascript\" src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>
";
        // line 420
        echo "     <!-- Go to www.addthis.com/dashboard to customize your tools -->

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
        return array (  625 => 420,  598 => 394,  593 => 389,  521 => 319,  517 => 317,  513 => 314,  509 => 312,  505 => 311,  500 => 309,  495 => 308,  490 => 305,  485 => 303,  479 => 300,  473 => 297,  468 => 295,  464 => 293,  461 => 292,  455 => 198,  444 => 189,  407 => 17,  402 => 15,  397 => 13,  392 => 11,  387 => 9,  381 => 5,  378 => 4,  365 => 283,  359 => 282,  355 => 281,  324 => 252,  320 => 251,  266 => 199,  264 => 198,  254 => 190,  250 => 189,  235 => 176,  230 => 174,  226 => 173,  221 => 172,  218 => 171,  213 => 170,  209 => 169,  206 => 168,  202 => 167,  200 => 166,  190 => 158,  179 => 150,  175 => 149,  171 => 148,  167 => 147,  161 => 144,  156 => 142,  143 => 131,  133 => 108,  127 => 105,  119 => 100,  115 => 99,  111 => 98,  107 => 97,  103 => 96,  99 => 95,  95 => 94,  91 => 93,  85 => 89,  75 => 74,  71 => 73,  63 => 68,  52 => 60,  40 => 50,  38 => 4,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends '::base.html.twig' %} {% block body %}*/
/*    */
/*  {% block stylesheets %}*/
/*  */
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
/* <!-- Start of Async Drift Code -->*/
/* <script>*/
/* "use strict";*/
/* */
/* !function() { */
/*   var t = window.driftt = window.drift = window.driftt || [];*/
/*   if (!t.init) {*/
/*     if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));*/
/*     t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], */
/*     t.factory = function(e) {*/
/*       return function() {*/
/*         var n = Array.prototype.slice.call(arguments);*/
/*         return n.unshift(e), t.push(n), t;*/
/*       };*/
/*     }, t.methods.forEach(function(e) {*/
/*       t[e] = t.factory(e);*/
/*     }), t.load = function(t) {*/
/*       var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");*/
/*       o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";*/
/*       var i = document.getElementsByTagName("script")[0];*/
/*       i.parentNode.insertBefore(o, i);*/
/*     };*/
/*   }*/
/* }();*/
/* drift.SNIPPET_VERSION = '0.3.1';*/
/* drift.load('knp8trrbfyw8');*/
/* </script>*/
/* <!-- End of Async Drift Code -->*/
/* {% endblock %}*/
/* */
/* */
/* <!-- Navigation & Intro -->*/
/* */
/* */
/* <!-- Navbar -->*/
/* <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar white" style="*/
/*     */
/* ">*/
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
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_escribirhistoria', {'tipo' : "gratis"}) }}">Nueva historia </a>*/
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_escribirhistoria', {'tipo' : "anuncio"}) }}">Anunciar mi libro</a>*/
/*                         */
/*                     </div>*/
/*                 </li>*/
/*                 <li class="nav-item dropdown ml-4">*/
/*                     <a class="nav-link dropdown-toggle title" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explorar </a>*/
/*                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">*/
/*                        {#  <a class="dropdown-item" href="{{ path('dwes_libros_gAventura', {'tipo':"gratis"}) }}">Aventura</a>*/
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_gAccion', {'tipo':"gratis"}) }}">Acción</a>*/
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_gTerror', {'tipo':"gratis"}) }}">Terror</a>*/
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_gFantasia',{ 'tipo':"gratis"}) }}">Fantasía</a>*/
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_gMisterio', {'tipo':"gratis"}) }}">Misterio</a>*/
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_gPoesia', {'tipo':"gratis"}) }}">Poesía</a>*/
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_gRomance', {'tipo':"gratis"}) }}">Romance</a>*/
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_gDrama', {'tipo':"gratis"}) }}">Drama</a> #}*/
/* */
/* */
/* */
/*      */
/*                          <a class="dropdown-item" href="{{ path('dwes_libros_genero', {'idGenero':1}) }}">Aventura</a>*/
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_genero', {'idGenero':2}) }}">Acción</a>*/
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_genero', {'idGenero':3}) }}">Terror</a>*/
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_genero',{ 'idGenero':4}) }}">Fantasía</a>*/
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_genero', {'idGenero':5}) }}">Misterio</a>*/
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_genero', {'idGenero':6}) }}">Poesía</a>*/
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_genero', {'idGenero':7}) }}">Romance</a>*/
/*                         <a class="dropdown-item" href="{{ path('dwes_libros_genero', {'idGenero':8}) }}">Drama</a>*/
/*                     </div>*/
/*                 </li>*/
/* */
/*                  <li class="nav-item ml-4">*/
/*                     <a class="nav-link title" href="{{ path('dwes_libros_publicadosBib') }}" data-offset="90">Mi Biblioteca</a>*/
/*                 </li>*/
/*                 <li class="nav-item ml-4">*/
/*                     <a class="nav-link title" href="{{ path('dwes_libros_contacto') }}" data-offset="90">Contacto</a>*/
/*                 </li>*/
/*                 */
/*                 */
/*             </ul>*/
/*             <!-- Social Icon  -->  */
/*             */
/*           {#   <ul class="navbar-nav nav-flex-icons">*/
/*  */
/*                     <li class="nav-item dropdown ml-4 show">*/
/*                    <a class="nav-link dropdown-toggle waves-effect btn pink-gradient btn-rounded btn-sm font-weight-bold" id="navbarDropdownMenuLink3" data-toggle="dropdown" */
/*                     aria-haspopup="true" aria-expanded="false">*/
/*                     <i class="fa fa-user"></i>Mi cuenta </a>*/
/*                     <div class="dropdown-menu show" aria-labelledby="navbarDropdownMenuLink">*/
/*                         <i></i>*/
/* 		 */
/*                                                           */
/*                              */
/*                     </div>*/
/*                 </li>*/
/* */
/*                 */
/*             </ul> #}*/
/*              <ul class="navbar-nav nav-flex-icons">*/
/* 		*/
/*                    */
/*               */
/*               */
/*                     <li class="nav-item dropdown ml-4">*/
/*                     <a class="nav-link dropdown-toggle waves-effect btn peach-gradient btn-rounded btn-sm font-weight-bold" id="navbarDropdownMenuLink3" data-toggle="dropdown" */
/*                     aria-haspopup="true" aria-expanded="false">*/
/*                    <i class="fa fa-language" aria-hidden="true"></i>Idioma </a>*/
/*                     */
/*                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">*/
/*                      <a href="#googtrans(es|es)" class="lang-es lang-select dropdown-item waves-effect waves-light" data-lang="es"><img src="{{ asset('bundles/dweslibros/img/langs/es.png') }}" alt="SPAIN">Español</a>*/
/*                      */
/*             <a href="#googtrans(es|en)" class="lang-en lang-select dropdown-item waves-effect waves-light" data-lang="en"><img src="{{ asset('bundles/dweslibros/img/langs/en.png') }}" alt="USA">Inglés</a>*/
/*                     */
/*                    */
/* 		  <a href="#googtrans(es|fr)" class="lang-es lang-select dropdown-item waves-effect waves-light" data-lang="fr"><img src="{{ asset('bundles/dweslibros/img/langs/fr.png') }}" alt="FRANCE">Francés</a>*/
/* 		  <a href="#googtrans(es|no)" class="lang-es lang-select dropdown-item waves-effect waves-light" data-lang="zh-CN"><img src="{{ asset('bundles/dweslibros/img/langs/no.png') }}" alt="RUSIA">Noruego</a>*/
/* 		  <a href="#googtrans(es|ja)" class="lang-es lang-select dropdown-item waves-effect waves-light" data-lang="ja"><img src="{{ asset('bundles/dweslibros/img/langs/ja.png') }}" alt="JAPAN">Japonés</a>*/
/*             <a href="#googtrans(es|ar)" class="lang-es lang-select dropdown-item waves-effect waves-light" data-lang="ja"><img src="{{ asset('bundles/dweslibros/img/langs/ar.png') }}" alt="Árabe">Árabe</a>*/
/*                             */
/*                              */
/*                     </div>*/
/*                 </li>*/
/* */
/*                 </li>*/
/*             </ul>*/
/*      {#  <div id="google_translate_element"></div>  #} */
/*             */
/*             <ul class="navbar-nav nav-flex-icons">*/
/*                     <li class="nav-item dropdown ml-4">*/
/*                     <a class="nav-link dropdown-toggle waves-effect btn pink-gradient btn-rounded btn-sm font-weight-bold" id="navbarDropdownMenuLink3" data-toggle="dropdown" */
/*                     aria-haspopup="true" aria-expanded="false">*/
/*                     <i class="fa fa-user"></i>Mi cuenta </a>*/
/*                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">*/
/*                          {% if app.user %}*/
/*                             <i></i>*/
/*                             {% else %} */
/*                             <a class="dropdown-item waves-effect waves-light" href="{{ path('dwes_libros_login') }}">Iniciar sesión</a>*/
/*                             <a class="dropdown-item waves-effect waves-light" href="{{ path('dwes_libros_registro') }}">Crear cuenta</a>*/
/*                             {% endif %} {% if app.user and is_granted('ROLE_REGISTRADO') %}*/
/*                             <a class="dropdown-item waves-effect waves-light" href="{{ path('dwes_libros_perfil', {'username':app.user.username}) }}">Perfil</a>*/
/*                             <a class="dropdown-item waves-effect waves-light" href="{{ path('dwes_libros_ajustes') }}">Ajustes</a>*/
/*                             <a class="dropdown-item waves-effect waves-light" href="{{path('dwes_libros_logout')}}">Cerrar sesión</a>*/
/*                             {% endif %}*/
/*                               */
/*                              */
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
/*                    */
/*                     {% if  is_granted('ROLE_ADMIN') %} <a href="#!">Eliminar cuenta</a> {% endif %}*/
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
/*             <b>{{ app.user.username }}</b>! {% else %} -BellRead- {% endif %}*/
/* */
/*         </div>*/
/*     </div>*/
/*     <!--/.Copyright -->*/
/* </footer>*/
/* <!--/.Footer-->*/
/* */
/* */
/*  */
/* {% endblock %} {% block javascripts %}*/
/* <!-- SCRIPTS -->*/
/* <!-- JQuery --> */
/* <script src="{{ asset('bundles/dweslibros/MDB/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>*/
/* <!-- Bootstrap tooltips -->*/
/* <script src="{{ asset('bundles/dweslibros/MDB/js/popper.min.js') }}" type="text/javascript"></script>*/
/* <!-- Bootstrap core JavaScript -->*/
/* */
/* <script src="{{ asset('bundles/dweslibros/MDB/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/* <!-- MDB core JavaScript -->*/
/* <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>*/
/* <script src="{{ asset('bundles/dweslibros/MDB/js/mdb.min.js') }}" type="text/javascript"></script>*/
/* <!-- Mi JavaScript -->*/
/* <script src="{{ asset('bundles/dweslibros/js/script.js') }}" type="text/javascript"></script>*/
/* */
/* {# Librería DataTable #}*/
/*      <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('bundles/dweslibros/dataTable/css/material.min.css') }}" /> */
/*     <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('bundles/dweslibros/dataTable/css/dataTables.material.min.css') }}" /> */
/* */
/*      <script src="{{ asset('bundles/dweslibros/dataTable/js/jquery.dataTables.min.js') }}"></script> */
/*      <script src="{{ asset('bundles/dweslibros/dataTable/js/dataTables.material.min.js') }}"></script> */
/* {# Librería PDF #}*/
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>*/
/* */
/* {# Librería Editor de Textos #}*/
/*  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">*/
/*  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>*/
/*  <script src="{{ asset('bundles/dweslibros/js/editorSpanish.js') }}" type="text/javascript"></script>*/
/*  <script src="  https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>*/
/*   */
/* <script>*/
/*     //Animación de Inicio*/
/*     new WOW().init();*/
/*  */
/*     // Material Select Initialization*/
/*     $(document).ready(function () {*/
/* setcookie('googtrans', '/es');*/
/*       //  $.cookie("googtrans", '/es' );*/
/* */
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
/*     $('.dt-table').addClass('col-lg-12');*/
/*     $("#capitulos1_filter").insertAfter(".dt-table");*/
/*  */
/* */
/*     });*/
/* */
/* 	*/
/*         $('#summernote').summernote({*/
/*             callbacks: {*/
/*         onChange: function() {*/
/* */
/*             ///Cuento los carácteres y palabras introducidas*/
/*         char_count = $("#summernote").val().length;*/
/*         word_count = $("#summernote").val().split(" ").length;*/
/* */
/*   $("#carac").text(char_count);*/
/*   $("#palab").text(word_count);*/
/*     }*/
/*   },*/
/*         placeholder: 'Escriba su historia aquí...',*/
/*         tabsize: 2,*/
/*         height: 350,*/
/*          lang: 'es-ES',*/
/* */
/*        */
/*       });*/
/*    {# Google Translate Library #}*/
/*    function googleTranslateElementInit() {*/
/*   new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');*/
/* }*/
/* {#  function googleTranslateElementInit() {*/
/*       new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');*/
/*     } #} */
/* function triggerHtmlEvent(element, eventName) {*/
/* 	  var event;*/
/* 	  if (document.createEvent) {*/
/* 		event = document.createEvent('HTMLEvents');*/
/* 		event.initEvent(eventName, true, true);*/
/* 		element.dispatchEvent(event);*/
/* 	  } else {*/
/* 		event = document.createEventObject();*/
/* 		event.eventType = eventName;*/
/* 		element.fireEvent('on' + event.eventType, event);*/
/* 	  }*/
/* 	}*/
/*       jQuery('.lang-select').click(function() {*/
/* 	  var theLang = jQuery(this).attr('data-lang');*/
/* 	  jQuery('.goog-te-combo').val(theLang);*/
/* 	  //alert(jQuery(this).attr('href'));*/
/* 	  window.location = jQuery(this).attr('href');*/
/* 	  location.reload();*/
/* 	});*/
/* */
/*    */
/* </script>*/
/* */
/* <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>*/
/* {# <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> #}*/
/*      <!-- Go to www.addthis.com/dashboard to customize your tools -->*/
/* */
/* {% endblock %}  */