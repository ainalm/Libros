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
        echo "<div class=\"row text-center col-12\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["libros"]) ? $context["libros"] : $this->getContext($context, "libros")));
        foreach ($context['_seq'] as $context["_key"] => $context["libro"]) {
            // line 6
            echo "                               <div class=\"col-md-4 mb-4\">
                                <!--Card-->
                                <div class=\"card\">

                                    <!--Card image-->
                                    <div class=\"view overlay ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "colorPortada", array()), "html", null, true);
            echo "\">
                                        <img src=\"https://books.google.com/books/content/images/frontcover/wDumDAAAQBAJ?fife=w200-h300\" style=\"height:200px ; width:150px;\" class=\" mx-auto\" alt=\"sample image\">
 
                                        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_historia", array("idLibro" => $this->getAttribute($context["libro"], "idLibro", array()))), "html", null, true);
            echo "\">
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Buttons-->
                                 ";
            // line 30
            echo "                                 <!--/. Buttons-->
                                    <!--Card content-->
                                    <div class=\"card-body\">
                                        <!--Title-->
                                        <h4 class=\"card-title\"><strong>";
            // line 34
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
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "descripcion", array()), "html", null, true);
            echo "
                                        </p>
                                        <p class=\"text-right mb-0 text-uppercase font-small spacing font-weight-bold\">
                                                <a href=\"";
            // line 45
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
        // line 57
        echo "                            </div>";
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
        return array (  89 => 57,  71 => 45,  65 => 42,  54 => 34,  48 => 30,  39 => 14,  33 => 11,  26 => 6,  22 => 2,  19 => 1,);
    }
}
/* <div class="row text-center col-12">*/
/* {% for libro in libros %}*/
/* {#   <img src="data:image/jpeg;base64,{{libro.fotoPort}}" alt="User Photo" class="z-depth-1 mb-3 mx-auto" id="camb" style="*/
/*                 max-width: 100px;*/
/*                 max-height: 100px;">  #}*/
/*                                <div class="col-md-4 mb-4">*/
/*                                 <!--Card-->*/
/*                                 <div class="card">*/
/* */
/*                                     <!--Card image-->*/
/*                                     <div class="view overlay {{libro.colorPortada}}">*/
/*                                         <img src="https://books.google.com/books/content/images/frontcover/wDumDAAAQBAJ?fife=w200-h300" style="height:200px ; width:150px;" class=" mx-auto" alt="sample image">*/
/*  */
/*                                         <a href="{{ path('dwes_libros_historia', {'idLibro' : libro.idLibro}) }}">*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <!--/.Card image-->*/
/*                                     <!--Buttons-->*/
/*                                  {# <div class="card-share">*/
/*                                     <div class="social-reveal">*/
/*                                        */
/*                                         <!--Twitter-->*/
/*                                         <a type="button"  data-toggle="tooltip" data-placement="top" title="Editar historia"  class="btn-floating btn-tw waves-effect waves-light" href="{{ path('dwes_libros_perfilhistoria', {'idLibro' : libro.idLibro}) }}"> <i class="fas fa-pencil-alt"></i></a>*/
/*                                         <!--Google -->*/
/*                                         <a type="button"  href="{{ path('dwes_libros_eliminarLib', {'idLibro' : libro.idLibro}) }}"  data-toggle="tooltip" data-placement="top" title="Eliminar historia" class="btn-floating btn-gplus waves-effect waves-light"> <i class="fa fa-remove mt-0"></i></a>*/
/*                                     </div>*/
/*                                     <a class="btn-floating btn-action share-toggle float-right mdb-color lighten-3 waves-effect waves-light"><i class="fa fa-chevron-right"></i></a>*/
/*                                 </div> #}*/
/*                                  <!--/. Buttons-->*/
/*                                     <!--Card content-->*/
/*                                     <div class="card-body">*/
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
/* 	{% endfor %}*/
/*                             </div>*/
