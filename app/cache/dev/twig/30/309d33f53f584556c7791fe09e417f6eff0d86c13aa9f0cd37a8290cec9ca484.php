<?php

/* DWESLibrosBundle:Default:_libros.html.twig */
class __TwigTemplate_40b3d0385d14331c6441ff23199fee75c1cfde794204553ed61033a9c555593e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script
  src=\"https://code.jquery.com/jquery-3.3.1.js\"
  integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\"
  crossorigin=\"anonymous\"></script>
<div class=\"row text-center col-12\">
";
        // line 6
        if (twig_test_empty((isset($context["libros"]) ? $context["libros"] : $this->getContext($context, "libros")))) {
            echo " 


    <!--Panel-->
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h3 class=\"card-title\">¡UPS...! Aún no hay nada aquí. </h3>
                <p class=\"card-text\">Te invitamos a crear algo maravilloso. ¡Anímate y sorpréndenos!  </p>
                   <a class=\"btn blue-gradient waves-effect waves-light\" href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("dwes_libros_escribirhistoria", array("tipo" => "gratis"));
            echo "\">Escribir historia</a>
                    <a class=\"btn blue-gradient waves-effect waves-light\" href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("dwes_libros_escribirhistoria", array("tipo" => "anuncio"));
            echo "\">Anunciar mi libro</a>
            </div>
        </div>
    </div>
    <!--/.Panel-->

";
        }
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["libros"]) ? $context["libros"] : $this->getContext($context, "libros")));
        foreach ($context['_seq'] as $context["_key"] => $context["libro"]) {
            // line 24
            echo "


";
            // line 36
            echo "                               <div class=\"col-md-4 mb-4 mostrar\"> 
                                <!--Card-->
                                <div class=\"card\">

                                    <!--Card image--> 
                                    <div class=\"view overlay ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "colorPortada", array()), "html", null, true);
            echo "\">
                                        <div class=\" flex-center text-center\" style=\"height:200px ;\" alt=\"sample image\">
                                            
                      <h4 class=\"h1-responsive text-center mt-4 mb-4  \" data-wow-delay=\"0.2s\"> @";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "username", array()), "html", null, true);
            echo "</h4>

                                            </div>
                                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_historia", array("idLibro" => $this->getAttribute($context["libro"], "idLibro", array()))), "html", null, true);
            echo "\">
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div> 
                                        </a>
                                    </div> 
                                    <!--/.Card image-->
                                    <!--Buttons-->
                                 ";
            // line 53
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($context["libro"], "username", array())))) {
                // line 54
                echo "                                  <div class=\"card-share\">
                                    <div class=\"social-reveal\">
                                       
                                        <!--Twitter-->
                                        
                                        <a type=\"button\"  data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Editar historia\"  class=\"btn-floating btn-tw waves-effect waves-light tool\"
                                         href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_perfilhistoria", array("idLibro" => $this->getAttribute($context["libro"], "idLibro", array()))), "html", null, true);
                echo "\"> <i class=\"fas fa-pencil-alt\"></i></a>
                                        <!--Google -->
                                        <a  onclick=\"return confirm('¿Estás seguro de eliminar esta publicación?')\" type=\"button\"  href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_eliminarLib", array("idLibro" => $this->getAttribute($context["libro"], "idLibro", array()))), "html", null, true);
                echo "\" 
                                         data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Eliminar historia\" class=\"btn-floating btn-gplus waves-effect waves-light tool\"> <i class=\"fa fa-remove mt-0\"></i></a>
                                    </div>
                                    <a class=\"btn-floating btn-action share-toggle float-right mdb-color lighten-3 waves-effect waves-light\"><i class=\"fa fa-chevron-right\"></i></a>
                                </div>
                                 ";
            }
            // line 68
            echo "                                  
                                 <!--/. Buttons-->
                                    <!--Card content-->
                                    <div class=\"card-body\"> 
                                        <!--Title-->
                                        <h4 class=\"card-title\"><strong>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "titulo", array()), "html", null, true);
            echo "</strong></h4>
                                        <hr>
                                        <!--Text-->
                                        <p  class=\"card-text\" style=\"
                                            width: 250px;
                                            white-space: nowrap;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                        \">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "descripcion", array()), "html", null, true);
            echo "
                                        </p>
                                        <p class=\"text-right mb-0 text-uppercase font-small spacing font-weight-bold\">
                                                <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_historia", array("idLibro" => $this->getAttribute($context["libro"], "idLibro", array()))), "html", null, true);
            echo "\">Leer más
                                                    <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
                                                </a>
                                            </p>
                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->

                                </div>
  
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['libro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                            </div> 
";
        // line 98
        if ((twig_length_filter($this->env, (isset($context["libros"]) ? $context["libros"] : $this->getContext($context, "libros"))) > 6)) {
            // line 99
            echo "   
   <button type=\"button\" id=\"loadMore\" class=\"btn btn-default btn-lg btn-block blue-gradient\">Mostrar más</button>
";
        }
        // line 102
        echo "
";
        // line 103
        echo "                          

<script>
\$(document).ready(function () {
    size_li = \$(\".mostrar\").length; 
    x=6;
    \$('.mostrar:lt('+x+')').show();
    \$('#loadMore').click(function () {
        x= (x+3 <= size_li) ? x+3 : size_li;
        \$('.mostrar:lt('+x+')').show();
        // \$('#showLess').show();
        if(x == size_li){
            \$('#loadMore').hide();
        }
    });  
   /* \$('#showLess').click(function () {
        x=(x-3<0) ? 6 : x-3;
        \$('.mostrar').not(':lt('+x+')').hide();
        \$('#loadMore').show();
         \$('#showLess').show();
            console.log(x + \"Muestra showLess\");
         
        if(x == 6 || x <6){
            console.log(x + \"Oculta showLess\");
            \$('#showLess').hide();
        }
    });*/
});
</script>                            

";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:_libros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 103,  166 => 102,  161 => 99,  159 => 98,  156 => 97,  137 => 84,  131 => 81,  120 => 73,  113 => 68,  104 => 62,  99 => 60,  91 => 54,  89 => 53,  80 => 47,  74 => 44,  68 => 41,  61 => 36,  56 => 24,  52 => 23,  42 => 16,  38 => 15,  26 => 6,  19 => 1,);
    }
}
/* <script*/
/*   src="https://code.jquery.com/jquery-3.3.1.js"*/
/*   integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="*/
/*   crossorigin="anonymous"></script>*/
/* <div class="row text-center col-12">*/
/* {% if libros is empty %} */
/* */
/* */
/*     <!--Panel-->*/
/*     <div class="col-12">*/
/*         <div class="card">*/
/*             <div class="card-body">*/
/*                 <h3 class="card-title">¡UPS...! Aún no hay nada aquí. </h3>*/
/*                 <p class="card-text">Te invitamos a crear algo maravilloso. ¡Anímate y sorpréndenos!  </p>*/
/*                    <a class="btn blue-gradient waves-effect waves-light" href="{{ path('dwes_libros_escribirhistoria', {'tipo' : "gratis"}) }}">Escribir historia</a>*/
/*                     <a class="btn blue-gradient waves-effect waves-light" href="{{ path('dwes_libros_escribirhistoria', {'tipo' : "anuncio"}) }}">Anunciar mi libro</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!--/.Panel-->*/
/* */
/* {% endif %}*/
/* {% for libro in libros %}*/
/* */
/* */
/* */
/* {#   <img src="data:image/jpeg;base64,{{libro.fotoPort}}" alt="User Photo" class="z-depth-1 mb-3 mx-auto" id="camb" style="*/
/*                 max-width: 100px;*/
/*                 max-height: 100px;"> */
/*                 {% for item in fotos[3] %}*/
/* <img src="data:image/jpeg;base64,{{item.fotoPort}}" alt="User Photo" class="z-depth-1 mb-3 mx-auto" id="camb" style="*/
/*                 max-width: 100px;*/
/*                 max-height: 100px;"> */
/* {% endfor %}*/
/*                  #}*/
/*                                <div class="col-md-4 mb-4 mostrar"> */
/*                                 <!--Card-->*/
/*                                 <div class="card">*/
/* */
/*                                     <!--Card image--> */
/*                                     <div class="view overlay {{libro.colorPortada}}">*/
/*                                         <div class=" flex-center text-center" style="height:200px ;" alt="sample image">*/
/*                                             */
/*                       <h4 class="h1-responsive text-center mt-4 mb-4  " data-wow-delay="0.2s"> @{{libro.username}}</h4>*/
/* */
/*                                             </div>*/
/*                                         <a href="{{ path('dwes_libros_historia', {'idLibro' : libro.idLibro}) }}">*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div> */
/*                                         </a>*/
/*                                     </div> */
/*                                     <!--/.Card image-->*/
/*                                     <!--Buttons-->*/
/*                                  {% if app.user.username is defined and app.user.username == libro.username %}*/
/*                                   <div class="card-share">*/
/*                                     <div class="social-reveal">*/
/*                                        */
/*                                         <!--Twitter-->*/
/*                                         */
/*                                         <a type="button"  data-toggle="tooltip" data-placement="bottom" title="Editar historia"  class="btn-floating btn-tw waves-effect waves-light tool"*/
/*                                          href="{{ path('dwes_libros_perfilhistoria', {'idLibro' : libro.idLibro}) }}"> <i class="fas fa-pencil-alt"></i></a>*/
/*                                         <!--Google -->*/
/*                                         <a  onclick="return confirm('¿Estás seguro de eliminar esta publicación?')" type="button"  href="{{ path('dwes_libros_eliminarLib', {'idLibro' : libro.idLibro}) }}" */
/*                                          data-toggle="tooltip" data-placement="bottom" title="Eliminar historia" class="btn-floating btn-gplus waves-effect waves-light tool"> <i class="fa fa-remove mt-0"></i></a>*/
/*                                     </div>*/
/*                                     <a class="btn-floating btn-action share-toggle float-right mdb-color lighten-3 waves-effect waves-light"><i class="fa fa-chevron-right"></i></a>*/
/*                                 </div>*/
/*                                  {%  endif %}*/
/*                                   */
/*                                  <!--/. Buttons-->*/
/*                                     <!--Card content-->*/
/*                                     <div class="card-body"> */
/*                                         <!--Title-->*/
/*                                         <h4 class="card-title"><strong>{{libro.titulo}}</strong></h4>*/
/*                                         <hr>*/
/*                                         <!--Text-->*/
/*                                         <p  class="card-text" style="*/
/*                                             width: 250px;*/
/*                                             white-space: nowrap;*/
/*                                             overflow: hidden;*/
/*                                             text-overflow: ellipsis;*/
/*                                         ">{{libro.descripcion}}*/
/*                                         </p>*/
/*                                         <p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">*/
/*                                                 <a href="{{ path('dwes_libros_historia', {'idLibro' : libro.idLibro}) }}">Leer más*/
/*                                                     <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>*/
/*                                                 </a>*/
/*                                             </p>*/
/*                                     </div>*/
/*                                     <!--/.Card content-->*/
/* */
/*                                 </div>*/
/*                                 <!--/.Card-->*/
/* */
/*                                 </div>*/
/*   */
/* 	{% endfor %}*/
/*                             </div> */
/* {% if libros | length > 6 %}*/
/*    */
/*    <button type="button" id="loadMore" class="btn btn-default btn-lg btn-block blue-gradient">Mostrar más</button>*/
/* {% endif %}*/
/* */
/* {# <div id="showLess" class="text-center">Show less</div>  #}                          */
/* */
/* <script>*/
/* $(document).ready(function () {*/
/*     size_li = $(".mostrar").length; */
/*     x=6;*/
/*     $('.mostrar:lt('+x+')').show();*/
/*     $('#loadMore').click(function () {*/
/*         x= (x+3 <= size_li) ? x+3 : size_li;*/
/*         $('.mostrar:lt('+x+')').show();*/
/*         // $('#showLess').show();*/
/*         if(x == size_li){*/
/*             $('#loadMore').hide();*/
/*         }*/
/*     });  */
/*    /* $('#showLess').click(function () {*/
/*         x=(x-3<0) ? 6 : x-3;*/
/*         $('.mostrar').not(':lt('+x+')').hide();*/
/*         $('#loadMore').show();*/
/*          $('#showLess').show();*/
/*             console.log(x + "Muestra showLess");*/
/*          */
/*         if(x == 6 || x <6){*/
/*             console.log(x + "Oculta showLess");*/
/*             $('#showLess').hide();*/
/*         }*/
/*     });*//* */
/* });*/
/* </script>                            */
/* */
/* */
