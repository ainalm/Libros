<?php

/* DWESLibrosBundle:Default:perfilhistoria.html.twig */
class __TwigTemplate_2eab02cf13939b8a76d54a176571d2d907186a91eb3593fc670021a7c11af82d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:perfilhistoria.html.twig", 1);
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

    // line 2
    public function block_portada($context, array $blocks = array())
    {
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["infoLibro"]) ? $context["infoLibro"] : $this->getContext($context, "infoLibro")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "    <!--Intro Section-->
   <div  class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Fondos/Fondo2.jpg"), "html", null, true);
            echo "');margin-top: 27px;\">
            <div class=\"flex-center\" style=\"background-color: rgba(17, 27, 43, 0.7);\">
                <div class=\"container my-4 pt-5\">

                    <!-- Section heading -->
                    <h3 class=\"text-center pt-4  white-text font-weight-bold wow fadeIn mb-4\" data-wow-delay=\"0.2s\">
                        <strong>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
            echo "</strong>
                             
                    </h3>
                    <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\"> <span class=\"mb-5\">by ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "username", array()), "html", null, true);
            echo "</span>
                    <br>
                    <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_perfilhistoria", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
            echo "\"  class=\"btn peach-gradient btn-lg mt-4\">Visualizar Historia</a> 
                     
                    </h6>
                    
                </div> 
            </div>
        </div> 
<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
";
    }

    // line 26
    public function block_contenido($context, array $blocks = array())
    {
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["infoLibro"]) ? $context["infoLibro"] : $this->getContext($context, "infoLibro")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "<div class=\"container \">



    <div style=\"height: 5px\"></div>

    <!--Section: Main panel-->
    <section class=\"mb-5\">

        <!--Card-->
        <div class=\"card card-cascade narrower\">

            <!--Section: Chart-->
            <section>

                <!--Grid row-->
                <div class=\"row\">

                    <!--Grid column-->
                    <div class=\"col-xl-8 col-lg-12 mr-0\">

                        <!--Card image-->
                        <div class=\"view gradient-card-header \" style=\"
    background-color: #d8dde3;
\">
                            <h2 class=\"h2-responsive mb-0\">Información</h2>
                        </div>
                        <!--/Card image-->

                        <!--Card content-->
                        <div class=\"card-body pb-0\">

                            <!--Panel data-->
                            <div class=\"row card-body pt-3\">

                                <!--First column-->
                                <div class=\"col-md-6\">

                                    <!--Date select-->
                                    <p class=\"lead\">
                                        <span class=\"badge info-color p-2\">Progreso de la historia</span>
                                    </p>


                                    <!--Blue select-->
                                    <select class=\"mdb-select colorful-select dropdown-primary\">
                                        <option value=\"1\">En progreso</option>
                                        <option value=\"2\">Completado</option>
                                       
                                    </select>

                                    <!--/Blue select-->

                                    <!--Date pickers-->
                                    <p class=\"lead mt-5\">
                                        <span class=\"badge info-color p-2\">Clasificación de edad</span>
                                    </p>
                                    <br>

                                    <!--Blue select-->
                                    <select class=\"mdb-select colorful-select dropdown-primary\">
                                        <option value=\"1\">Todo público</option>
                                        <option value=\"2\">No para niños menos de 13</option>
                                        <option value=\"3\">Sólo para mayores de 18</option>
                                        <option value=\"4\">Sólo para mayores de 21</option>
                                       
                                    </select>

                                    <!--/Blue select-->


                                </div>
                                <!--/First column-->

                                <!--Second column-->
                                <div class=\"col-md-6 \">
                                    <!--Date select-->
                                    <p class=\"lead\">
                                        <span class=\"badge info-color p-2\">Género</span>
                                    </p>


                                    <!--Blue select-->
                                    <select class=\"mdb-select colorful-select dropdown-primary\">
                                        <option value=\"1\">Aventura</option>
                                        <option value=\"2\">Acción</option>
                                        <option value=\"3\">Terror</option>
                                        <option value=\"4\"> Fantasia</option>
                                        <option value=\"5\">Misterio</option>
                                        <option value=\"6\">Poesía</option>
                                        <option value=\"7\">Romance</option>
                                        <option value=\"8\">Drama</option>
                                    </select>

                                    <!--/Blue select-->

                                    <!--Date pickers-->
                                    <p class=\"lead mt-5\">
                                        <span class=\"badge info-color p-2\">Idioma</span>
                                    </p>
                                    <br>

                                    <!--Blue select-->
                                    <select class=\"mdb-select colorful-select dropdown-primary\">
                                        <option value=\"1\">Español</option>
                                        <option value=\"2\">English</option>
                                        <option value=\"3\">Portugês</option>
                                        <option value=\"4\">Russian</option>
                                        <option value=\"5\">Filipino</option>
                                        <option value=\"6\">Hindi</option>
                                        <option value=\"5\">Dutch</option>
                                        <option value=\"6\">Italiano</option>
                                        <option value=\"7\">Chinese</option>
                                        <option value=\"8\">Turkish</option>
                                        <option value=\"9\">Deutsch</option>
                                        <option value=\"10\">Français</option>
                                        <option value=\"11\">Other</option>
                                    </select>

                                    <!--/Blue select-->


                                </div>
                                <!--/Second column-->

                            </div>
                            <!--/Panel data-->

                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class=\"col-xl-4 col-lg-12 mb-4\">

                        <!--Card image-->
                        <div class=\"view gradient-card-header blue-gradient\">
                            <div class=\"chartjs-size-monitor\" style=\"position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;\">
                                <div class=\"chartjs-size-monitor-expand\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\">
                                    <div style=\"position:absolute;width:1000000px;height:1000000px;left:0;top:0\"></div>
                                </div>
                                <div class=\"chartjs-size-monitor-shrink\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\">
                                    <div style=\"position:absolute;width:200%;height:200%;left:0; top:0\"></div>
                                </div>
                            </div>

                            <div class=\"card\">

                                <!--Card image-->
                                <div class=\"view overlay\">
                                    <img src=\"https://mdbootstrap.com/img/Photos/Others/images/20.jpg\" class=\"card-img-top\" alt=\"\">
                                    <a>
                                        <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                    </a>
                                </div>
                                <!--/.Card image-->

                                <!--Card content-->
                                <div class=\"card-body\">
                                    <!--Title-->
                                    <h5 class=\"card-title dark-grey-text text-center grey lighten-4 py-2\">
                                        <strong>";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
            echo "</strong>
                                    </h5>

                                    <!--Description-->
                                    <p class=\"mt-3 dark-grey-text font-small text-center\">
                                        <em>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descripcion", array()), "html", null, true);
            echo "
                                        </em>
                                    </p>

                                    
                                </div>
                                <!--/.Card content-->

                            </div>


                        </div>
                        <!--/Card image-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Chart-->

            <!--Section: Table-->
            <section>
                <div class=\"card card-cascade narrower z-depth-0\">

                    <!--Card image-->
                    <div class=\"view gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center\">

                        <div>
                        
                               
                            <a  data-toggle=\"tooltip\" data-placement=\"top\" title=\"Añadir capítulo\" class=\"btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light\" href=\"";
            // line 229
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_nuevoCap", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
            echo "\" > <i class=\"fas fa-plus\"></i></a>
                           
                        </div>

                        <a href=\"\" class=\"white-text mx-3\">Capítulos de Título historia</a>

                        <div>
                            <a   data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar capítulo\" class=\"btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light\" href=\"";
            // line 236
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_perfilhistoria", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
            echo "\" >
                               <i class=\"fas fa-pencil-alt\"></i></a>
                              <a   data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar capítulo\" class=\"btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light\" href=\"";
            // line 238
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_perfilhistoria", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
            echo "\" >
                              <i class=\"fa fa-remove mt-0\"></i></a>
                        </div>

                    </div>
                    <!--/Card image-->

                    <div class=\"px-4\">

                        <div class=\"table-responsive\">
                            <!--Table-->
                            <table class=\"table table-hover mb-0\">

                                <!--Table head-->
                                <thead>
                                    <tr>
                                        <th>
                                           
                                            <label for=\"checkbox\" class=\"mr-2 label-table\"></label>
                                        </th>
                                        <th class=\"th-lg\">
                                            <a>Capítulo
                                                <i class=\"fa fa-sort ml-1\"></i>
                                            </a>
                                        </th>
                                        <th class=\"th-lg\">
                                            <a href=\"\">Título
                                                <i class=\"fa fa-sort ml-1\"></i>
                                            </a>
                                        </th>
                                        <th class=\"th-lg\">
                                            <a href=\"\">Última actualización
                                                <i class=\"fa fa-sort ml-1\"></i>
                                            </a>
                                        </th>
                                        <th class=\"th-lg\">
                                            <a href=\"\">Estado de publicación
                                                <i class=\"fa fa-sort ml-1\"></i>
                                            </a>
                                        </th>
                                        <th class=\"th-lg\">
                                            <a href=\"\">Acción
                                               
                                            </a>
                                        </th>
                                    </tr>
                                </thead>
                                <!--Table head-->
      
                                <!--Table body-->
                                <tbody>
                                   
                                      ";
            // line 290
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["infoCapitulo"]) ? $context["infoCapitulo"] : $this->getContext($context, "infoCapitulo")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 291
                echo "        
       
                                    <tr>
                                        <th scope=\"row\">
                                           
                                            <label for=\"checkbox";
                // line 296
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
                echo "\" class=\"label-table\"></label>
                                        </th>
                                        <td>#";
                // line 298
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 299
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tituloCap", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 300
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "actualizado", array()), "html", null, true);
                echo "</td>
                                        <td><select class=\"mdb-select colorful-select dropdown-primary\">
                                        <option value=\"1\">";
                // line 302
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "estado", array()), "html", null, true);
                echo "</option>
                                        <option value=\"2\"></option>
                                    </select></td>
                                         <td> <a   data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar capítulo\" class=\" btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient mr-3 ml-4\" href=\"";
                // line 305
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_capitulo", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"), "numCapitulo" => $this->getAttribute($context["item"], "numCapitulo", array()))), "html", null, true);
                echo "\" >
                               <i class=\"fas fa-pencil-alt\"></i></a>
                              <a   data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar capítulo\" class=\"btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient \" href=\"";
                // line 307
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_eliminarCap", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"), "numCapitulo" => $this->getAttribute($context["item"], "numCapitulo", array()))), "html", null, true);
                echo "\" >
                              <i class=\"fa fa-remove mt-0\"></i></a> </td>
                                    </tr>
                                    <tr>
                                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 312
            echo "                                        
                                   
                                </tbody>
                                <!--Table body-->
                            </table>
                            <!--Table-->
                        </div>

                        <hr class=\"my-0\">

                        <!--Bottom Table UI-->
                        <div class=\"d-flex justify-content-between\">



                            <!--Pagination -->
                            <nav class=\"my-4\">
                                <ul class=\"pagination pagination-circle pg-blue mb-0\">

                                    <!--First-->
                                    <li class=\"page-item disabled clearfix d-none d-md-block\">
                                        <a class=\"page-link waves-effect waves-effect\">First</a>
                                    </li>

                                    <!--Arrow left-->
                                    <li class=\"page-item disabled\">
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

                                    <!--First-->
                                    <li class=\"page-item clearfix d-none d-md-block\">
                                        <a class=\"page-link waves-effect waves-effect\">Last</a>
                                    </li>

                                </ul>
                            </nav>
                            <!--/Pagination -->

                        </div>
                        <!--Bottom Table UI-->

                    </div>
                </div>

            </section>
            <!--Section: Table-->

        </div>
        <!--/.Card-->

    </section>
    <!--Section: Main panel-->



</div>
<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:perfilhistoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 312,  405 => 307,  400 => 305,  394 => 302,  389 => 300,  385 => 299,  381 => 298,  376 => 296,  369 => 291,  365 => 290,  310 => 238,  305 => 236,  295 => 229,  259 => 196,  251 => 191,  86 => 28,  82 => 27,  79 => 26,  74 => 25,  59 => 16,  54 => 14,  48 => 11,  39 => 5,  36 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %} */
/* {% block portada %}*/
/* {% for item in infoLibro %}*/
/*     <!--Intro Section-->*/
/*    <div  class="streak streak-photo streak-md  portada " style="background-image: url('{{ asset('bundles/dweslibros/img/Fondos/Fondo2.jpg') }}');margin-top: 27px;">*/
/*             <div class="flex-center" style="background-color: rgba(17, 27, 43, 0.7);">*/
/*                 <div class="container my-4 pt-5">*/
/* */
/*                     <!-- Section heading -->*/
/*                     <h3 class="text-center pt-4  white-text font-weight-bold wow fadeIn mb-4" data-wow-delay="0.2s">*/
/*                         <strong>{{item.titulo}}</strong>*/
/*                              */
/*                     </h3>*/
/*                     <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s"> <span class="mb-5">by {{item.username}}</span>*/
/*                     <br>*/
/*                     <a href="{{ path('dwes_libros_perfilhistoria', {'idLibro' : app.request.get('idLibro')}) }}"  class="btn peach-gradient btn-lg mt-4">Visualizar Historia</a> */
/*                      */
/*                     </h6>*/
/*                     */
/*                 </div> */
/*             </div>*/
/*         </div> */
/* <br>*/
/* {% endfor %}*/
/* */
/* {% endblock %} {% block contenido %}*/
/* {% for item in infoLibro %}*/
/* <div class="container ">*/
/* */
/* */
/* */
/*     <div style="height: 5px"></div>*/
/* */
/*     <!--Section: Main panel-->*/
/*     <section class="mb-5">*/
/* */
/*         <!--Card-->*/
/*         <div class="card card-cascade narrower">*/
/* */
/*             <!--Section: Chart-->*/
/*             <section>*/
/* */
/*                 <!--Grid row-->*/
/*                 <div class="row">*/
/* */
/*                     <!--Grid column-->*/
/*                     <div class="col-xl-8 col-lg-12 mr-0">*/
/* */
/*                         <!--Card image-->*/
/*                         <div class="view gradient-card-header " style="*/
/*     background-color: #d8dde3;*/
/* ">*/
/*                             <h2 class="h2-responsive mb-0">Información</h2>*/
/*                         </div>*/
/*                         <!--/Card image-->*/
/* */
/*                         <!--Card content-->*/
/*                         <div class="card-body pb-0">*/
/* */
/*                             <!--Panel data-->*/
/*                             <div class="row card-body pt-3">*/
/* */
/*                                 <!--First column-->*/
/*                                 <div class="col-md-6">*/
/* */
/*                                     <!--Date select-->*/
/*                                     <p class="lead">*/
/*                                         <span class="badge info-color p-2">Progreso de la historia</span>*/
/*                                     </p>*/
/* */
/* */
/*                                     <!--Blue select-->*/
/*                                     <select class="mdb-select colorful-select dropdown-primary">*/
/*                                         <option value="1">En progreso</option>*/
/*                                         <option value="2">Completado</option>*/
/*                                        */
/*                                     </select>*/
/* */
/*                                     <!--/Blue select-->*/
/* */
/*                                     <!--Date pickers-->*/
/*                                     <p class="lead mt-5">*/
/*                                         <span class="badge info-color p-2">Clasificación de edad</span>*/
/*                                     </p>*/
/*                                     <br>*/
/* */
/*                                     <!--Blue select-->*/
/*                                     <select class="mdb-select colorful-select dropdown-primary">*/
/*                                         <option value="1">Todo público</option>*/
/*                                         <option value="2">No para niños menos de 13</option>*/
/*                                         <option value="3">Sólo para mayores de 18</option>*/
/*                                         <option value="4">Sólo para mayores de 21</option>*/
/*                                        */
/*                                     </select>*/
/* */
/*                                     <!--/Blue select-->*/
/* */
/* */
/*                                 </div>*/
/*                                 <!--/First column-->*/
/* */
/*                                 <!--Second column-->*/
/*                                 <div class="col-md-6 ">*/
/*                                     <!--Date select-->*/
/*                                     <p class="lead">*/
/*                                         <span class="badge info-color p-2">Género</span>*/
/*                                     </p>*/
/* */
/* */
/*                                     <!--Blue select-->*/
/*                                     <select class="mdb-select colorful-select dropdown-primary">*/
/*                                         <option value="1">Aventura</option>*/
/*                                         <option value="2">Acción</option>*/
/*                                         <option value="3">Terror</option>*/
/*                                         <option value="4"> Fantasia</option>*/
/*                                         <option value="5">Misterio</option>*/
/*                                         <option value="6">Poesía</option>*/
/*                                         <option value="7">Romance</option>*/
/*                                         <option value="8">Drama</option>*/
/*                                     </select>*/
/* */
/*                                     <!--/Blue select-->*/
/* */
/*                                     <!--Date pickers-->*/
/*                                     <p class="lead mt-5">*/
/*                                         <span class="badge info-color p-2">Idioma</span>*/
/*                                     </p>*/
/*                                     <br>*/
/* */
/*                                     <!--Blue select-->*/
/*                                     <select class="mdb-select colorful-select dropdown-primary">*/
/*                                         <option value="1">Español</option>*/
/*                                         <option value="2">English</option>*/
/*                                         <option value="3">Portugês</option>*/
/*                                         <option value="4">Russian</option>*/
/*                                         <option value="5">Filipino</option>*/
/*                                         <option value="6">Hindi</option>*/
/*                                         <option value="5">Dutch</option>*/
/*                                         <option value="6">Italiano</option>*/
/*                                         <option value="7">Chinese</option>*/
/*                                         <option value="8">Turkish</option>*/
/*                                         <option value="9">Deutsch</option>*/
/*                                         <option value="10">Français</option>*/
/*                                         <option value="11">Other</option>*/
/*                                     </select>*/
/* */
/*                                     <!--/Blue select-->*/
/* */
/* */
/*                                 </div>*/
/*                                 <!--/Second column-->*/
/* */
/*                             </div>*/
/*                             <!--/Panel data-->*/
/* */
/*                         </div>*/
/*                         <!--/.Card content-->*/
/* */
/*                     </div>*/
/*                     <!--Grid column-->*/
/* */
/*                     <!--Grid column-->*/
/*                     <div class="col-xl-4 col-lg-12 mb-4">*/
/* */
/*                         <!--Card image-->*/
/*                         <div class="view gradient-card-header blue-gradient">*/
/*                             <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">*/
/*                                 <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">*/
/*                                     <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>*/
/*                                 </div>*/
/*                                 <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">*/
/*                                     <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="card">*/
/* */
/*                                 <!--Card image-->*/
/*                                 <div class="view overlay">*/
/*                                     <img src="https://mdbootstrap.com/img/Photos/Others/images/20.jpg" class="card-img-top" alt="">*/
/*                                     <a>*/
/*                                         <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <!--/.Card image-->*/
/* */
/*                                 <!--Card content-->*/
/*                                 <div class="card-body">*/
/*                                     <!--Title-->*/
/*                                     <h5 class="card-title dark-grey-text text-center grey lighten-4 py-2">*/
/*                                         <strong>{{item.titulo}}</strong>*/
/*                                     </h5>*/
/* */
/*                                     <!--Description-->*/
/*                                     <p class="mt-3 dark-grey-text font-small text-center">*/
/*                                         <em>{{item.descripcion}}*/
/*                                         </em>*/
/*                                     </p>*/
/* */
/*                                     */
/*                                 </div>*/
/*                                 <!--/.Card content-->*/
/* */
/*                             </div>*/
/* */
/* */
/*                         </div>*/
/*                         <!--/Card image-->*/
/* */
/*                     </div>*/
/*                     <!--Grid column-->*/
/* */
/*                 </div>*/
/*                 <!--Grid row-->*/
/* */
/*             </section>*/
/*             <!--Section: Chart-->*/
/* */
/*             <!--Section: Table-->*/
/*             <section>*/
/*                 <div class="card card-cascade narrower z-depth-0">*/
/* */
/*                     <!--Card image-->*/
/*                     <div class="view gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">*/
/* */
/*                         <div>*/
/*                         */
/*                                */
/*                             <a  data-toggle="tooltip" data-placement="top" title="Añadir capítulo" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light" href="{{ path('dwes_libros_nuevoCap', {'idLibro' : app.request.get('idLibro')}) }}" > <i class="fas fa-plus"></i></a>*/
/*                            */
/*                         </div>*/
/* */
/*                         <a href="" class="white-text mx-3">Capítulos de Título historia</a>*/
/* */
/*                         <div>*/
/*                             <a   data-toggle="tooltip" data-placement="top" title="Editar capítulo" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light" href="{{ path('dwes_libros_perfilhistoria', {'idLibro' : app.request.get('idLibro')}) }}" >*/
/*                                <i class="fas fa-pencil-alt"></i></a>*/
/*                               <a   data-toggle="tooltip" data-placement="top" title="Eliminar capítulo" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light" href="{{ path('dwes_libros_perfilhistoria', {'idLibro' : app.request.get('idLibro')}) }}" >*/
/*                               <i class="fa fa-remove mt-0"></i></a>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                     <!--/Card image-->*/
/* */
/*                     <div class="px-4">*/
/* */
/*                         <div class="table-responsive">*/
/*                             <!--Table-->*/
/*                             <table class="table table-hover mb-0">*/
/* */
/*                                 <!--Table head-->*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th>*/
/*                                            */
/*                                             <label for="checkbox" class="mr-2 label-table"></label>*/
/*                                         </th>*/
/*                                         <th class="th-lg">*/
/*                                             <a>Capítulo*/
/*                                                 <i class="fa fa-sort ml-1"></i>*/
/*                                             </a>*/
/*                                         </th>*/
/*                                         <th class="th-lg">*/
/*                                             <a href="">Título*/
/*                                                 <i class="fa fa-sort ml-1"></i>*/
/*                                             </a>*/
/*                                         </th>*/
/*                                         <th class="th-lg">*/
/*                                             <a href="">Última actualización*/
/*                                                 <i class="fa fa-sort ml-1"></i>*/
/*                                             </a>*/
/*                                         </th>*/
/*                                         <th class="th-lg">*/
/*                                             <a href="">Estado de publicación*/
/*                                                 <i class="fa fa-sort ml-1"></i>*/
/*                                             </a>*/
/*                                         </th>*/
/*                                         <th class="th-lg">*/
/*                                             <a href="">Acción*/
/*                                                */
/*                                             </a>*/
/*                                         </th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <!--Table head-->*/
/*       */
/*                                 <!--Table body-->*/
/*                                 <tbody>*/
/*                                    */
/*                                       {% for item in infoCapitulo %}*/
/*         */
/*        */
/*                                     <tr>*/
/*                                         <th scope="row">*/
/*                                            */
/*                                             <label for="checkbox{{item.numCapitulo}}" class="label-table"></label>*/
/*                                         </th>*/
/*                                         <td>#{{item.numCapitulo}}</td>*/
/*                                         <td>{{item.tituloCap}}</td>*/
/*                                         <td>{{item.actualizado}}</td>*/
/*                                         <td><select class="mdb-select colorful-select dropdown-primary">*/
/*                                         <option value="1">{{item.estado}}</option>*/
/*                                         <option value="2"></option>*/
/*                                     </select></td>*/
/*                                          <td> <a   data-toggle="tooltip" data-placement="top" title="Editar capítulo" class=" btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient mr-3 ml-4" href="{{ path('dwes_libros_capitulo', {'idLibro' : app.request.get('idLibro'),'numCapitulo':item.numCapitulo}) }}" >*/
/*                                <i class="fas fa-pencil-alt"></i></a>*/
/*                               <a   data-toggle="tooltip" data-placement="top" title="Eliminar capítulo" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient " href="{{ path('dwes_libros_eliminarCap', {'idLibro' : app.request.get('idLibro'),'numCapitulo':item.numCapitulo}) }}" >*/
/*                               <i class="fa fa-remove mt-0"></i></a> </td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                      {% endfor %}*/
/*                                         */
/*                                    */
/*                                 </tbody>*/
/*                                 <!--Table body-->*/
/*                             </table>*/
/*                             <!--Table-->*/
/*                         </div>*/
/* */
/*                         <hr class="my-0">*/
/* */
/*                         <!--Bottom Table UI-->*/
/*                         <div class="d-flex justify-content-between">*/
/* */
/* */
/* */
/*                             <!--Pagination -->*/
/*                             <nav class="my-4">*/
/*                                 <ul class="pagination pagination-circle pg-blue mb-0">*/
/* */
/*                                     <!--First-->*/
/*                                     <li class="page-item disabled clearfix d-none d-md-block">*/
/*                                         <a class="page-link waves-effect waves-effect">First</a>*/
/*                                     </li>*/
/* */
/*                                     <!--Arrow left-->*/
/*                                     <li class="page-item disabled">*/
/*                                         <a class="page-link waves-effect waves-effect" aria-label="Previous">*/
/*                                             <span aria-hidden="true">«</span>*/
/*                                             <span class="sr-only">Previous</span>*/
/*                                         </a>*/
/*                                     </li>*/
/* */
/*                                     <!--Numbers-->*/
/*                                     <li class="page-item active">*/
/*                                         <a class="page-link waves-effect waves-effect">1</a>*/
/*                                     </li>*/
/*                                     <li class="page-item">*/
/*                                         <a class="page-link waves-effect waves-effect">2</a>*/
/*                                     </li>*/
/*                                     <li class="page-item">*/
/*                                         <a class="page-link waves-effect waves-effect">3</a>*/
/*                                     </li>*/
/*                                     <li class="page-item">*/
/*                                         <a class="page-link waves-effect waves-effect">4</a>*/
/*                                     </li>*/
/*                                     <li class="page-item">*/
/*                                         <a class="page-link waves-effect waves-effect">5</a>*/
/*                                     </li>*/
/* */
/*                                     <!--Arrow right-->*/
/*                                     <li class="page-item">*/
/*                                         <a class="page-link waves-effect waves-effect" aria-label="Next">*/
/*                                             <span aria-hidden="true">»</span>*/
/*                                             <span class="sr-only">Next</span>*/
/*                                         </a>*/
/*                                     </li>*/
/* */
/*                                     <!--First-->*/
/*                                     <li class="page-item clearfix d-none d-md-block">*/
/*                                         <a class="page-link waves-effect waves-effect">Last</a>*/
/*                                     </li>*/
/* */
/*                                 </ul>*/
/*                             </nav>*/
/*                             <!--/Pagination -->*/
/* */
/*                         </div>*/
/*                         <!--Bottom Table UI-->*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*             </section>*/
/*             <!--Section: Table-->*/
/* */
/*         </div>*/
/*         <!--/.Card-->*/
/* */
/*     </section>*/
/*     <!--Section: Main panel-->*/
/* */
/* */
/* */
/* </div>*/
/* <br>*/
/* {% endfor %}*/
/* {% endblock %}*/
