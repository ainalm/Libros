<?php

/* DWESLibrosBundle:Default:existeLib.html.twig */
class __TwigTemplate_2a12f9f1646991b3aaf9c21fbf2d2df6a7a18cb510fccef51d5aa1a516df242b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:existeLib.html.twig", 1);
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

    // line 4
    public function block_portada($context, array $blocks = array())
    {
        // line 5
        echo "    <!--Intro Section-->
   <div  class=\"streak streak-photo streak-md  view jarallax  portada \" style=\"background-image: url('";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Fondos/Fondo3.jpg"), "html", null, true);
        echo "'); margin-top: 27px;\">
        <div class=\" mask rgba-indigo-light  \" style=\"background-color: rgba(17, 27, 43, 0.7);\">
            <div class=\"flex-center  \" style=\"background-color: rgba(17, 27, 43, 0.7);\">
                <div class=\"container my-5 pt-5\">

";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["libros"]) ? $context["libros"] : $this->getContext($context, "libros")));
        foreach ($context['_seq'] as $context["_key"] => $context["libro"]) {
            // line 12
            echo "            <div class=\"text-center\">
                                <ul class=\"list-unstyled \">
                                    <li>
                                        <h3 class=\" mt-md-5 mt-lg-0 mb-5  white-textfont-weight-bold white-text wow fadeIn animated\" data-wow-delay=\"0.3s\" style=\"visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;\">
                                            <strong>
                                                 Su libro  <span  class=\"red-text\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "titulo", array()), "html", null, true);
            echo "  </span>  ya lo ha creado antes.</strong>
                                        </h3> 
                                    </li>
                                    <li class=\" white-text\">
                        Le recomendamos crear otra historia con un título diferente.<br>
                                    </li>
                            <div class=\"container row h-100 justify-content-center align-items-center mt-4\"> 


  
                               <div class=\"col-md-4 mb-4 \">
                                <!--Card-->
                                <div class=\"card\">

                                    <!--Card image-->
                                   
                                        ";
            // line 33
            if ((isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto"))) {
                echo " 
                                         <div class=\"view overlay ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "colorPortada", array()), "html", null, true);
                echo "\">
                    <img src=\"data:image/jpeg;base64,";
                // line 35
                echo twig_escape_filter($this->env, (isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "html", null, true);
                echo "\"style=\"height:200px ; width:150px;\" class=\" mx-auto\" alt=\"sample image\">
                    
                     ";
            } else {
                // line 38
                echo "                        <div class=\"view overlay ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "colorPortada", array()), "html", null, true);
                echo "\">
                        <div class=\" flex-center text-center\"  style=\"height:200px ;\" alt=\"sample image\"><p>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "titulo", array()), "html", null, true);
                echo "</p></div>
                    ";
            }
            // line 41
            echo "
                     
 
                                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_historia", array("idLibro" => $this->getAttribute($context["libro"], "idLibro", array()))), "html", null, true);
            echo "\">
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image--> 
 <!--Buttons-->
                                 <div class=\"card-share\">
                                    <div class=\"social-reveal\">
                                       
                                        <!--Twitter-->
                                        <a type=\"button\"  data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar historia\"  class=\"btn-floating btn-tw waves-effect waves-light\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_perfilhistoria", array("idLibro" => $this->getAttribute($context["libro"], "idLibro", array()))), "html", null, true);
            echo "\"> <i class=\"fas fa-pencil-alt\"></i></a>
                                        <!--Google -->
                                        <a  onclick=\"return confirm('¿Estás seguro de eliminar esta publicación?')\" type=\"button\"  href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_eliminarLib", array("idLibro" => $this->getAttribute($context["libro"], "idLibro", array()))), "html", null, true);
            echo "\"  data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar historia\" class=\"btn-floating btn-gplus waves-effect waves-light\"> <i class=\"fa fa-remove mt-0\"></i></a>
                                    </div>
                                    <a class=\"btn-floating btn-action share-toggle float-right mdb-color lighten-3 waves-effect waves-light\"><i class=\"fa fa-chevron-right\"></i></a>
                                </div>
                                 <!--/. Buttons-->                                    
                                    <!--Card content-->
                                    <div class=\"card-body\">
                                        <!--Title-->
                                        <h4 class=\"card-title\"><strong>";
            // line 64
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
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "descripcion", array()), "html", null, true);
            echo "
                                        </p>
                                        <p class=\"text-right mb-0 text-uppercase font-small spacing font-weight-bold\">
                                                <a href=\"";
            // line 75
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
        // line 87
        echo "                            </div>
                            <a class=\"btn blue-gradient waves-effect waves-light mt-4\" href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("dwes_libros_escribirhistoria", array("tipo" => "gratis"));
        echo "\">Nueva historia </a>
                    <a class=\"btn blue-gradient waves-effect waves-light mt-4\" href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("dwes_libros_escribirhistoria", array("tipo" => "anuncio"));
        echo "\">Anunciar mi libro</a>

                            </div>
                   
                ";
        // line 94
        echo "
                                       
                                </ul>
                            </div>

            </div>
            </div>
        </div>
        </div>
";
    }

    // line 105
    public function block_contenido($context, array $blocks = array())
    {
        // line 106
        echo "
 
";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:existeLib.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 106,  193 => 105,  180 => 94,  173 => 89,  169 => 88,  166 => 87,  148 => 75,  142 => 72,  131 => 64,  120 => 56,  115 => 54,  102 => 44,  97 => 41,  92 => 39,  87 => 38,  81 => 35,  77 => 34,  73 => 33,  54 => 17,  47 => 12,  43 => 11,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %}*/
/* */
/*  */
/* {% block portada %}*/
/*     <!--Intro Section-->*/
/*    <div  class="streak streak-photo streak-md  view jarallax  portada " style="background-image: url('{{ asset('bundles/dweslibros/img/Fondos/Fondo3.jpg') }}'); margin-top: 27px;">*/
/*         <div class=" mask rgba-indigo-light  " style="background-color: rgba(17, 27, 43, 0.7);">*/
/*             <div class="flex-center  " style="background-color: rgba(17, 27, 43, 0.7);">*/
/*                 <div class="container my-5 pt-5">*/
/* */
/* {% for libro in libros %}*/
/*             <div class="text-center">*/
/*                                 <ul class="list-unstyled ">*/
/*                                     <li>*/
/*                                         <h3 class=" mt-md-5 mt-lg-0 mb-5  white-textfont-weight-bold white-text wow fadeIn animated" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">*/
/*                                             <strong>*/
/*                                                  Su libro  <span  class="red-text">{{libro.titulo}}  </span>  ya lo ha creado antes.</strong>*/
/*                                         </h3> */
/*                                     </li>*/
/*                                     <li class=" white-text">*/
/*                         Le recomendamos crear otra historia con un título diferente.<br>*/
/*                                     </li>*/
/*                             <div class="container row h-100 justify-content-center align-items-center mt-4"> */
/* */
/* */
/*   */
/*                                <div class="col-md-4 mb-4 ">*/
/*                                 <!--Card-->*/
/*                                 <div class="card">*/
/* */
/*                                     <!--Card image-->*/
/*                                    */
/*                                         {% if foto %} */
/*                                          <div class="view overlay {{libro.colorPortada}}">*/
/*                     <img src="data:image/jpeg;base64,{{foto}}"style="height:200px ; width:150px;" class=" mx-auto" alt="sample image">*/
/*                     */
/*                      {% else %}*/
/*                         <div class="view overlay {{libro.colorPortada}}">*/
/*                         <div class=" flex-center text-center"  style="height:200px ;" alt="sample image"><p>{{libro.titulo}}</p></div>*/
/*                     {% endif %}*/
/* */
/*                      */
/*  */
/*                                         <a href="{{ path('dwes_libros_historia', {'idLibro' : libro.idLibro}) }}">*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <!--/.Card image--> */
/*  <!--Buttons-->*/
/*                                  <div class="card-share">*/
/*                                     <div class="social-reveal">*/
/*                                        */
/*                                         <!--Twitter-->*/
/*                                         <a type="button"  data-toggle="tooltip" data-placement="top" title="Editar historia"  class="btn-floating btn-tw waves-effect waves-light" href="{{ path('dwes_libros_perfilhistoria', {'idLibro' : libro.idLibro}) }}"> <i class="fas fa-pencil-alt"></i></a>*/
/*                                         <!--Google -->*/
/*                                         <a  onclick="return confirm('¿Estás seguro de eliminar esta publicación?')" type="button"  href="{{ path('dwes_libros_eliminarLib', {'idLibro' : libro.idLibro}) }}"  data-toggle="tooltip" data-placement="top" title="Eliminar historia" class="btn-floating btn-gplus waves-effect waves-light"> <i class="fa fa-remove mt-0"></i></a>*/
/*                                     </div>*/
/*                                     <a class="btn-floating btn-action share-toggle float-right mdb-color lighten-3 waves-effect waves-light"><i class="fa fa-chevron-right"></i></a>*/
/*                                 </div>*/
/*                                  <!--/. Buttons-->                                    */
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
/*                             <a class="btn blue-gradient waves-effect waves-light mt-4" href="{{ path('dwes_libros_escribirhistoria', {'tipo' : "gratis"}) }}">Nueva historia </a>*/
/*                     <a class="btn blue-gradient waves-effect waves-light mt-4" href="{{ path('dwes_libros_escribirhistoria', {'tipo' : "anuncio"}) }}">Anunciar mi libro</a>*/
/* */
/*                             </div>*/
/*                    */
/*                 {#  <a class="btn blue-gradient waves-effect waves-light mt-4" href="{{ path('dwes_libros_suscripcion') }}"><i class="fas fa-cogs"></i> suscripción</a> #}*/
/* */
/*                                        */
/*                                 </ul>*/
/*                             </div>*/
/* */
/*             </div>*/
/*             </div>*/
/*         </div>*/
/*         </div>*/
/* {% endblock %}*/
/* */
/* {% block contenido %}*/
/* */
/*  */
/* {%endblock %}*/
