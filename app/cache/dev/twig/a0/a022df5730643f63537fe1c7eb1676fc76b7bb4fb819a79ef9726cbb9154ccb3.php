<?php

/* DWESLibrosBundle:Default:escribirhistoria.html.twig */
class __TwigTemplate_441d21e5ff6b48a542b986adcaf7cd58c504ab6a0ffdb76bc5526597a21eae8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:escribirhistoria.html.twig", 1);
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
        echo "<div class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg');\">
    <div class=\"flex-center  \" style=\"       background-color:rgba(98, 84, 111, 0.7)\">
        <div class=\"container my-5 pt-5\">

            <!-- Section heading -->
            <h3 class=\"text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                <strong>Crea tu historia</strong>
            </h3>
            <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">Deja volar tu imaginación</h6>


        </div>
    </div>
</div>



";
    }

    // line 19
    public function block_contenido($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"container mt-4 mb-4\">
    <!-- Navegación-->
    <ul class=\"nav nav-tabs nav-justified view gradient-card-header blue-gradient\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#panel1\" role=\"tab\">01.Escribe</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#panel2\" role=\"tab\">02. Describe</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#panel3\" role=\"tab\">03. Personaliza</a>
        </li>
    </ul>
    <!--/. Navegación-->
    <div class=\"tab-content card\">
        <!--Panel 1-->
     
        <div class=\"tab-pane fade active show\" id=\"panel1\" role=\"tabpanel\">
            <br>
                  ";
        // line 39
        if (array_key_exists("tit", $context)) {
            // line 40
            echo "                 <h2 id=\"titHistoria\"> ";
            echo twig_escape_filter($this->env, (isset($context["tit"]) ? $context["tit"] : $this->getContext($context, "tit")), "html", null, true);
            echo "</h2>
                ";
        }
        // line 42
        echo "            <form name=\"formNuevoCapitulo\" action=\"";
        echo $this->env->getExtension('routing')->getPath("dwes_libros_escribirhistoria");
        echo "\" target=\"frame\" method=\"POST\"  > 
                    <!-- target=\"frame\" -->

                <!--Grid row-->
                <div class=\"row\">
                    <div class=\"col-md-12\">
                
  <h2 id=\"titHistoria\"> ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["tituloHistoria"]) ? $context["tituloHistoria"] : $this->getContext($context, "tituloHistoria")), "html", null, true);
        echo " </h2>
    <div class=\"md-form ocultaTitulo\" >
                            <input type=\"text\" id=\"titulohistoria\" class=\"form-control\" name=\"titulohistoria\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["titulohistoria"]) ? $context["titulohistoria"] : $this->getContext($context, "titulohistoria")), "html", null, true);
        echo "\">
                            <label for=\"titulohistoria\" class=\"\">Título de la historia</label>
                        </div>
                    </div>

                      
                </div>
                <!--Grid row-->
                <div id=\"cln\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"md-form\">
                           
                                <input type=\"text\" id=\"titulocapitulo\" class=\"form-control\" name=\"titulocapitulo\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["titulocapitulo"]) ? $context["titulocapitulo"] : $this->getContext($context, "titulocapitulo")), "html", null, true);
        echo "\">
                                <label for=\"titulocapitulo\" class=\"\">Título del capítulo</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
                    <div class=\"row\">

                        <!--Grid column-->
                        <div class=\"col-md-12\">

                            <div class=\"md-form\">
                                <textarea type=\"text\" id=\"contCapitulo\" class=\"md-textarea form-control\" rows=\"6\" name=\"contCapitulo\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["contCapitulo"]) ? $context["contCapitulo"] : $this->getContext($context, "contCapitulo")), "html", null, true);
        echo "\"></textarea>
                                <label for=\"contCapitulo\">Contenido del capítulo</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </div>
                <div id=\"ins\"></div>
                <div class=\"text-center text-md-left mt-4\">
                   <input class=\"btn pink-gradient btn-rounded waves-effect waves-light\" id=\"paso1\" type=\"submit\" value=\"Añadir capítulo\" onclick=\"toastr.success('Capítulo añadido con éxito.', '', {positionClass: 'toast-bottom-right'});\"></input>
                </div>
                <iframe name=\"frame\" style=\"display: none\"></iframe> 
            </form>
          
 <input class=\"btn pink-gradient btn-rounded waves-effect waves-light\" id=\"paso1muestraCP\" type=\"submit\" value=\"Ver capítulos\"></input>
<!--  Contenido capitulos -->
<div class=\"row\" id=\"contCapitulos\">
    <div class=\"col-md-3\">
        <ul class=\"nav  md-pills pills-primary flex-column\" role=\"tablist\"  id=\"toggleC\">
";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["capitulosInsertados"]) ? $context["capitulosInsertados"] : $this->getContext($context, "capitulosInsertados")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 98
            echo "            <li class=\"nav-item \">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tituloCap", array()), "html", null, true);
            echo "\" role=\"tab\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tituloCap", array()), "html", null, true);
            echo "
                </a>
            </li>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "    
        </ul>
    </div>
    <div class=\"col-md-9\">
        <!-- Tab panels -->
        <div class=\"tab-content vertical\">
        <!--Panel 1-->
        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["capitulosInsertados"]) ? $context["capitulosInsertados"] : $this->getContext($context, "capitulosInsertados")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 111
            echo "        <div class=\"tab-pane fade in \" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tituloCap", array()), "html", null, true);
            echo "\" role=\"tabpanel\">

            <h5 class=\"my-2 h5\">";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "contenidoCap", array()), "html", null, true);
            echo "</h5>

        </div>
        <!--/.Panel 1-->
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "   
        </div>
    </div>
</div>
<!--./ Contenido capitulos -->
        </div>
        <!--/.Panel 1-->

        <!--Panel 2-->
        <div class=\"tab-pane fade \" id=\"panel2\" role=\"tabpanel\">
            <br>
            <form name=\"formBusqueda\" action=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("dwes_libros_describirLib");
        echo "\" method=\"POST\">


                <!--Grid row-->
                <div class=\"row\">

                    <!--Grid column-->
                    <div class=\"col-md-12\">

                        <div class=\"md-form mb-5\">
                            <textarea type=\"text\" id=\"contact-message\" class=\"md-textarea form-control\" rows=\"6\" name=\"resuHist\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["resuHist"]) ? $context["resuHist"] : $this->getContext($context, "resuHist")), "html", null, true);
        echo "\"></textarea>
                            <label for=\"contact-message\">Resume tu historia:</label>

                        </div>
                        <h5 class=\"pb-5\">Selecciona un género</h5>




                        <div class=\"row\">

                            <!--Grid column-->
                            <div class=\"col-sm-3 mb-2 \">
                                <input class=\"form-check-input\" name=\"genero\" type=\"radio\" id=\"radio1\" value=\"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["Aventura"]) ? $context["Aventura"] : $this->getContext($context, "Aventura")), "html", null, true);
        echo "\">
                                <label class=\"form-check-label\" for=\"radio1\">Aventura</label>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class=\"col-sm-3  mb-2\">
                                <input class=\"form-check-input\" name=\"genero\" type=\"radio\" id=\"radio3\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["Acción"]) ? $context["Acción"] : $this->getContext($context, "Acción")), "html", null, true);
        echo "\">
                                <label class=\"form-check-label\" for=\"radio3\">Acción</label>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class=\"col-sm-3  mb-2\">
                                <input class=\"form-check-input\" name=\"genero\" type=\"radio\" id=\"radio4\" value=\"";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["Terror"]) ? $context["Terror"] : $this->getContext($context, "Terror")), "html", null, true);
        echo "\">
                                <label class=\"form-check-label\" for=\"radio4\">Terror</label>
                            </div>
                            <!--Grid column-->
                            <!--Grid column-->
                            <div class=\"col-sm-3  mb-2\">
                                <input class=\"form-check-input\" name=\"genero\" type=\"radio\" id=\"radio5\"  value=\"";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["Fantasía"]) ? $context["Fantasía"] : $this->getContext($context, "Fantasía")), "html", null, true);
        echo "\">
                                <label class=\"form-check-label\" for=\"radio5\">Fantasía</label>
                            </div>
                            <!--Grid column-->
                        </div>
                        <div class=\"row\">

                            <!--Grid column-->
                            <div class=\"col-sm-3 mb-2 \">
                                <input class=\"form-check-input\" name=\"genero\" type=\"radio\" id=\"radio6\" value=\"";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["Misterio"]) ? $context["Misterio"] : $this->getContext($context, "Misterio")), "html", null, true);
        echo "\">
                                <label class=\"form-check-label\" for=\"radio6\">Misterio</label>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class=\"col-sm-3  mb-2\">
                                <input class=\"form-check-input\" name=\"genero\" type=\"radio\" id=\"radio7\" value=\"";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["Poesía"]) ? $context["Poesía"] : $this->getContext($context, "Poesía")), "html", null, true);
        echo "\">
                                <label class=\"form-check-label\" for=\"radio7\">Poesía</label>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class=\"col-sm-3  mb-2\">
                                <input class=\"form-check-input\" name=\"genero\" type=\"radio\" id=\"radio8\" value=\"";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["Romance"]) ? $context["Romance"] : $this->getContext($context, "Romance")), "html", null, true);
        echo "\">
                                <label class=\"form-check-label\" for=\"radio8\">Romance</label>
                            </div>
                            <!--Grid column-->
                            <!--Grid column-->
                            <div class=\"col-sm-3  mb-2\">
                                <input class=\"form-check-input\" name=\"genero\" type=\"radio\" id=\"radio9\" value=\"";
        // line 200
        echo twig_escape_filter($this->env, (isset($context["Drama"]) ? $context["Drama"] : $this->getContext($context, "Drama")), "html", null, true);
        echo "\">
                                <label class=\"form-check-label\" for=\"radio9\">Drama</label>
                            </div>
                            <!--Grid column-->
                        </div>
                    </div>
                </div>

                <!--Grid row-->
                <div class=\"text-center text-md-left mt-4\">
                      <input class=\"btn pink-gradient btn-rounded waves-effect waves-light\" id=\"paso2\" type=\"submit\" value=\"Guardar\" ></input>
                </div>

            </form>
        </div>
        <!--/.Panel 2-->

        <!--Panel 3-->
        <div class=\"tab-pane fade\" id=\"panel3\" role=\"tabpanel\">
            <br>
            <form name=\"formBusqueda\" action=\"";
        // line 220
        echo $this->env->getExtension('routing')->getPath("dwes_libros_contacto");
        echo "\" method=\"POST\">
                <div class=\"row flex-center\">
                    <div class=\"col-lg-4 col-md-12 mb-4\" style=\"max-width: 200px;\">

                        <div class=\"view text-center \" style=\"    max-width: 200px;
                    min-height: 300px;\">
                            <img src=\"\" class=\"img-fluid\" alt=\"\">
                            <div class=\"mask flex-center rgba-blue-grey-strong\">
                                <p class=\"white-text\">Título de la historia</p>
                            </div>

                        </div>

                    </div>

                </div>
                <div class=\"card-body text-center\">
                        <p class=\"text-muted\"><small>Añade una foto de portada a tu historia</small></p>
                        <div class=\"row flex-center\">
                            <label for=\"file-upload\" class=\"btn btn-info btn-rounded btn-sm waves-effect waves-light\"> Subir Foto</label><br><input name=\"fotoSubida\" value=\"\" id=\"file-upload\" type=\"file\"/>
                            <button class=\"btn btn-danger btn-rounded btn-sm waves-effect waves-light\">Borrar</button>
                        </div>
                </div>   


                <div class=\"text-center text-md-left mt-4\">
                    <a class=\"btn pink-gradient btn-rounded waves-effect waves-light\" id=\"paso3\">Publicar</a>
                </div>

            </form>
        </div>
        <!--/.Panel 3-->
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:escribirhistoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 220,  317 => 200,  308 => 194,  298 => 187,  288 => 180,  276 => 171,  267 => 165,  257 => 158,  247 => 151,  231 => 138,  218 => 128,  205 => 117,  194 => 113,  188 => 111,  184 => 110,  175 => 103,  162 => 99,  159 => 98,  155 => 97,  131 => 76,  116 => 64,  100 => 51,  95 => 49,  84 => 42,  78 => 40,  76 => 39,  55 => 20,  52 => 19,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %} {% block portada %}*/
/* <div class="streak streak-photo streak-md  portada " style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg');">*/
/*     <div class="flex-center  " style="       background-color:rgba(98, 84, 111, 0.7)">*/
/*         <div class="container my-5 pt-5">*/
/* */
/*             <!-- Section heading -->*/
/*             <h3 class="text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <strong>Crea tu historia</strong>*/
/*             </h3>*/
/*             <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">Deja volar tu imaginación</h6>*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* {% endblock %} {% block contenido %}*/
/* <div class="container mt-4 mb-4">*/
/*     <!-- Navegación-->*/
/*     <ul class="nav nav-tabs nav-justified view gradient-card-header blue-gradient" role="tablist">*/
/*         <li class="nav-item">*/
/*             <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">01.Escribe</a>*/
/*         </li>*/
/*         <li class="nav-item">*/
/*             <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">02. Describe</a>*/
/*         </li>*/
/*         <li class="nav-item">*/
/*             <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">03. Personaliza</a>*/
/*         </li>*/
/*     </ul>*/
/*     <!--/. Navegación-->*/
/*     <div class="tab-content card">*/
/*         <!--Panel 1-->*/
/*      */
/*         <div class="tab-pane fade active show" id="panel1" role="tabpanel">*/
/*             <br>*/
/*                   {% if tit is defined %}*/
/*                  <h2 id="titHistoria"> {{tit}}</h2>*/
/*                 {% endif %}*/
/*             <form name="formNuevoCapitulo" action="{{ path('dwes_libros_escribirhistoria') }}" target="frame" method="POST"  > */
/*                     <!-- target="frame" -->*/
/* */
/*                 <!--Grid row-->*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                 */
/*   <h2 id="titHistoria"> {{tituloHistoria}} </h2>*/
/*     <div class="md-form ocultaTitulo" >*/
/*                             <input type="text" id="titulohistoria" class="form-control" name="titulohistoria" value="{{titulohistoria}}">*/
/*                             <label for="titulohistoria" class="">Título de la historia</label>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                       */
/*                 </div>*/
/*                 <!--Grid row-->*/
/*                 <div id="cln">*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <div class="md-form">*/
/*                            */
/*                                 <input type="text" id="titulocapitulo" class="form-control" name="titulocapitulo" value="{{titulocapitulo}}">*/
/*                                 <label for="titulocapitulo" class="">Título del capítulo</label>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!--Grid row-->*/
/*                     <div class="row">*/
/* */
/*                         <!--Grid column-->*/
/*                         <div class="col-md-12">*/
/* */
/*                             <div class="md-form">*/
/*                                 <textarea type="text" id="contCapitulo" class="md-textarea form-control" rows="6" name="contCapitulo" value="{{contCapitulo}}"></textarea>*/
/*                                 <label for="contCapitulo">Contenido del capítulo</label>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                     <!--Grid row-->*/
/* */
/*                 </div>*/
/*                 <div id="ins"></div>*/
/*                 <div class="text-center text-md-left mt-4">*/
/*                    <input class="btn pink-gradient btn-rounded waves-effect waves-light" id="paso1" type="submit" value="Añadir capítulo" onclick="toastr.success('Capítulo añadido con éxito.', '', {positionClass: 'toast-bottom-right'});"></input>*/
/*                 </div>*/
/*                 <iframe name="frame" style="display: none"></iframe> */
/*             </form>*/
/*           */
/*  <input class="btn pink-gradient btn-rounded waves-effect waves-light" id="paso1muestraCP" type="submit" value="Ver capítulos"></input>*/
/* <!--  Contenido capitulos -->*/
/* <div class="row" id="contCapitulos">*/
/*     <div class="col-md-3">*/
/*         <ul class="nav  md-pills pills-primary flex-column" role="tablist"  id="toggleC">*/
/* {% for item in capitulosInsertados %}*/
/*             <li class="nav-item ">*/
/*                 <a class="nav-link" data-toggle="tab" href="#{{item.tituloCap}}" role="tab">{{item.tituloCap}}*/
/*                 </a>*/
/*             </li>*/
/*             */
/*         {% endfor %}    */
/*         </ul>*/
/*     </div>*/
/*     <div class="col-md-9">*/
/*         <!-- Tab panels -->*/
/*         <div class="tab-content vertical">*/
/*         <!--Panel 1-->*/
/*         {% for item in capitulosInsertados %}*/
/*         <div class="tab-pane fade in " id="{{item.tituloCap}}" role="tabpanel">*/
/* */
/*             <h5 class="my-2 h5">{{item.contenidoCap}}</h5>*/
/* */
/*         </div>*/
/*         <!--/.Panel 1-->*/
/*         {% endfor %}   */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!--./ Contenido capitulos -->*/
/*         </div>*/
/*         <!--/.Panel 1-->*/
/* */
/*         <!--Panel 2-->*/
/*         <div class="tab-pane fade " id="panel2" role="tabpanel">*/
/*             <br>*/
/*             <form name="formBusqueda" action="{{ path('dwes_libros_describirLib') }}" method="POST">*/
/* */
/* */
/*                 <!--Grid row-->*/
/*                 <div class="row">*/
/* */
/*                     <!--Grid column-->*/
/*                     <div class="col-md-12">*/
/* */
/*                         <div class="md-form mb-5">*/
/*                             <textarea type="text" id="contact-message" class="md-textarea form-control" rows="6" name="resuHist" value="{{resuHist}}"></textarea>*/
/*                             <label for="contact-message">Resume tu historia:</label>*/
/* */
/*                         </div>*/
/*                         <h5 class="pb-5">Selecciona un género</h5>*/
/* */
/* */
/* */
/* */
/*                         <div class="row">*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-sm-3 mb-2 ">*/
/*                                 <input class="form-check-input" name="genero" type="radio" id="radio1" value="{{Aventura}}">*/
/*                                 <label class="form-check-label" for="radio1">Aventura</label>*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-sm-3  mb-2">*/
/*                                 <input class="form-check-input" name="genero" type="radio" id="radio3" value="{{Acción}}">*/
/*                                 <label class="form-check-label" for="radio3">Acción</label>*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-sm-3  mb-2">*/
/*                                 <input class="form-check-input" name="genero" type="radio" id="radio4" value="{{Terror}}">*/
/*                                 <label class="form-check-label" for="radio4">Terror</label>*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/*                             <!--Grid column-->*/
/*                             <div class="col-sm-3  mb-2">*/
/*                                 <input class="form-check-input" name="genero" type="radio" id="radio5"  value="{{Fantasía}}">*/
/*                                 <label class="form-check-label" for="radio5">Fantasía</label>*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/*                         </div>*/
/*                         <div class="row">*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-sm-3 mb-2 ">*/
/*                                 <input class="form-check-input" name="genero" type="radio" id="radio6" value="{{Misterio}}">*/
/*                                 <label class="form-check-label" for="radio6">Misterio</label>*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-sm-3  mb-2">*/
/*                                 <input class="form-check-input" name="genero" type="radio" id="radio7" value="{{Poesía}}">*/
/*                                 <label class="form-check-label" for="radio7">Poesía</label>*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-sm-3  mb-2">*/
/*                                 <input class="form-check-input" name="genero" type="radio" id="radio8" value="{{Romance}}">*/
/*                                 <label class="form-check-label" for="radio8">Romance</label>*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/*                             <!--Grid column-->*/
/*                             <div class="col-sm-3  mb-2">*/
/*                                 <input class="form-check-input" name="genero" type="radio" id="radio9" value="{{Drama}}">*/
/*                                 <label class="form-check-label" for="radio9">Drama</label>*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <!--Grid row-->*/
/*                 <div class="text-center text-md-left mt-4">*/
/*                       <input class="btn pink-gradient btn-rounded waves-effect waves-light" id="paso2" type="submit" value="Guardar" ></input>*/
/*                 </div>*/
/* */
/*             </form>*/
/*         </div>*/
/*         <!--/.Panel 2-->*/
/* */
/*         <!--Panel 3-->*/
/*         <div class="tab-pane fade" id="panel3" role="tabpanel">*/
/*             <br>*/
/*             <form name="formBusqueda" action="{{ path('dwes_libros_contacto') }}" method="POST">*/
/*                 <div class="row flex-center">*/
/*                     <div class="col-lg-4 col-md-12 mb-4" style="max-width: 200px;">*/
/* */
/*                         <div class="view text-center " style="    max-width: 200px;*/
/*                     min-height: 300px;">*/
/*                             <img src="" class="img-fluid" alt="">*/
/*                             <div class="mask flex-center rgba-blue-grey-strong">*/
/*                                 <p class="white-text">Título de la historia</p>*/
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <div class="card-body text-center">*/
/*                         <p class="text-muted"><small>Añade una foto de portada a tu historia</small></p>*/
/*                         <div class="row flex-center">*/
/*                             <label for="file-upload" class="btn btn-info btn-rounded btn-sm waves-effect waves-light"> Subir Foto</label><br><input name="fotoSubida" value="" id="file-upload" type="file"/>*/
/*                             <button class="btn btn-danger btn-rounded btn-sm waves-effect waves-light">Borrar</button>*/
/*                         </div>*/
/*                 </div>   */
/* */
/* */
/*                 <div class="text-center text-md-left mt-4">*/
/*                     <a class="btn pink-gradient btn-rounded waves-effect waves-light" id="paso3">Publicar</a>*/
/*                 </div>*/
/* */
/*             </form>*/
/*         </div>*/
/*         <!--/.Panel 3-->*/
/*     </div>*/
/*     {% endblock %}*/
