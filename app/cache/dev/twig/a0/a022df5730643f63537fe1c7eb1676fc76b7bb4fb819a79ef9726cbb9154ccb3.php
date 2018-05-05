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
            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#panel1\" role=\"tab\">01.Ponle un título</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#panel2\" role=\"tab\">02. Personaliza</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#panel3\" role=\"tab\">03. ¡Empieza ya!</a>
        </li>
    </ul>
    <!--/. Navegación-->
    <div class=\"tab-content card\">
        <!--Panel 1-->
     
        <div class=\"tab-pane fade active show\" id=\"panel1\" role=\"tabpanel\">
            <br>
                
              
            <form name=\"formNuevoCapitulo\" action=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("dwes_libros_escribirhistoria");
        echo "\"  method=\"POST\"  > 
                    <!-- target=\"frame\" -->

                <!--Grid row-->
                <div class=\"row\">
                    <div class=\"col-md-12\">
                

                <div class=\"md-form\" >
                            <input type=\"text\" id=\"titulohistoria\" class=\"form-control valI\" name=\"titulohistoria\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["titulohistoria"]) ? $context["titulohistoria"] : $this->getContext($context, "titulohistoria")), "html", null, true);
        echo "\">
                            <label for=\"titulohistoria\" class=\"Ltitulohistoria valL\">Título de la historia</label>
                        </div>
                </div>

                      
                </div>
                <!--Grid row-->
                 <!--Grid row-->
                 <div class=\"row\">

                    <!--Grid column-->
                    <div class=\"col-md-12\">

                        <div class=\"md-form mb-5\">
                            <textarea type=\"text\" id=\"contact-message\" class=\"md-textarea form-control\" rows=\"6\" name=\"resuHist\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["resuHist"]) ? $context["resuHist"] : $this->getContext($context, "resuHist")), "html", null, true);
        echo "\"></textarea>
                            <label for=\"contact-message\">Resume tu historia:</label>

                        </div>
                        <h5 class=\"pb-5\">Selecciona un género</h5>
                        <div class=\"row\">

                            <!--Grid column-->
                            <div class=\"col-sm-3 mb-2 \">
                                <input class=\"form-check-input\" name=\"genero\" type=\"radio\" id=\"radio1\" value=\"Aventura\">
                                <label class=\"form-check-label\" for=\"radio1\">Aventura</label>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class=\"col-sm-3  mb-2\">
                                <input class=\"form-check-input\" name=\"genero\" type=\"radio\" id=\"radio3\" value=\"Accion\">
                                <label class=\"form-check-label\" for=\"radio3\">Acción</label>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class=\"col-sm-3  mb-2\">
                                <input class=\"form-check-input\" name=\"genero\" type=\"radio\" id=\"radio4\" value=\"Terror\">
                                <label class=\"form-check-label\" for=\"radio4\">Terror</label>
                            </div>
                            <!--Grid column-->
                            <!--Grid column-->
                            <div class=\"col-sm-3  mb-2\">
                                <input class=\"form-check-input\" name=\"genero\" type=\"radio\" id=\"radio5\"  value=\"Fantasia\">
                                <label class=\"form-check-label\" for=\"radio5\">Fantasía</label>
                            </div>
                            <!--Grid column-->
                        </div>
                        <div class=\"row\">

                            <!--Grid column-->
                            <div class=\"col-sm-3 mb-2 \">
                                <input class=\"form-check-input\" name=\"genero\" type=\"radio\" id=\"radio6\" value=\"Misterio\">
                                <label class=\"form-check-label\" for=\"radio6\">Misterio</label>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class=\"col-sm-3  mb-2\">
                                <input class=\"form-check-input\" name=\"genero\" type=\"radio\" id=\"radio7\" value=\"Poesia\">
                                <label class=\"form-check-label\" for=\"radio7\">Poesía</label>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class=\"col-sm-3  mb-2\">
                                <input class=\"form-check-input\" name=\"genero\" type=\"radio\" id=\"radio8\" value=\"Romance\">
                                <label class=\"form-check-label\" for=\"radio8\">Romance</label>
                            </div>
                            <!--Grid column-->
                            <!--Grid column-->
                            <div class=\"col-sm-3  mb-2\">
                                <input class=\"form-check-input\" name=\"genero\" type=\"radio\" id=\"radio9\" value=\"Drama\">
                                <label class=\"form-check-label\" for=\"radio9\">Drama</label>
                            </div>
                            <!--Grid column-->
                        </div>
                    </div>
                </div>
                <div id=\"ins\"></div>
                <div class=\"text-center text-md-left mt-4\">
                   <input class=\"btn pink-gradient btn-rounded waves-effect waves-light\" id=\"paso1\" type=\"submit\" value=\"Siguiente: 02.Personaliza\" ></input>
                </div>
            
          
 

        </div>
        <!--/.Panel 1-->

        <!--Panel 2-->
        <div class=\"tab-pane fade \" id=\"panel2\" role=\"tabpanel\">
            <br>
          
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
                    <input class=\"btn pink-gradient btn-rounded waves-effect waves-light\" id=\"paso2\" type=\"submit\" value=\"Siguiente: 03. ¡Empieza ya!\" ></input>
                </div>

                <div class=\"text-center text-md-left mt-4\">
                     
                </div>
        </div>
        <!--/.Panel 2-->

        <!--Panel 3-->
        <div class=\"tab-pane fade\" id=\"panel3\" role=\"tabpanel\">
            <br>
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
                        <p class=\"text-muted\">Resumen</p>
                        <div class=\"row flex-center\">

                            <div class=\"container ml-5 mr-5 mb-4 text-justify \">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                           <br><input type=\"submit\" class=\"btn pink-gradient btn-rounded waves-effect waves-light\" name=\"empezar\" value=\"Empezar historia\" id=\"paso1\" />
                        </div>
                </div>   
               <iframe name=\"frame\" style=\"display: none\"></iframe> 
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
        return array (  108 => 65,  90 => 50,  78 => 41,  55 => 20,  52 => 19,  31 => 2,  11 => 1,);
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
/*             <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">01.Ponle un título</a>*/
/*         </li>*/
/*         <li class="nav-item">*/
/*             <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">02. Personaliza</a>*/
/*         </li>*/
/*         <li class="nav-item">*/
/*             <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">03. ¡Empieza ya!</a>*/
/*         </li>*/
/*     </ul>*/
/*     <!--/. Navegación-->*/
/*     <div class="tab-content card">*/
/*         <!--Panel 1-->*/
/*      */
/*         <div class="tab-pane fade active show" id="panel1" role="tabpanel">*/
/*             <br>*/
/*                 */
/*               */
/*             <form name="formNuevoCapitulo" action="{{ path('dwes_libros_escribirhistoria') }}"  method="POST"  > */
/*                     <!-- target="frame" -->*/
/* */
/*                 <!--Grid row-->*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                 */
/* */
/*                 <div class="md-form" >*/
/*                             <input type="text" id="titulohistoria" class="form-control valI" name="titulohistoria" value="{{titulohistoria}}">*/
/*                             <label for="titulohistoria" class="Ltitulohistoria valL">Título de la historia</label>*/
/*                         </div>*/
/*                 </div>*/
/* */
/*                       */
/*                 </div>*/
/*                 <!--Grid row-->*/
/*                  <!--Grid row-->*/
/*                  <div class="row">*/
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
/*                         <div class="row">*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-sm-3 mb-2 ">*/
/*                                 <input class="form-check-input" name="genero" type="radio" id="radio1" value="Aventura">*/
/*                                 <label class="form-check-label" for="radio1">Aventura</label>*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-sm-3  mb-2">*/
/*                                 <input class="form-check-input" name="genero" type="radio" id="radio3" value="Accion">*/
/*                                 <label class="form-check-label" for="radio3">Acción</label>*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-sm-3  mb-2">*/
/*                                 <input class="form-check-input" name="genero" type="radio" id="radio4" value="Terror">*/
/*                                 <label class="form-check-label" for="radio4">Terror</label>*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/*                             <!--Grid column-->*/
/*                             <div class="col-sm-3  mb-2">*/
/*                                 <input class="form-check-input" name="genero" type="radio" id="radio5"  value="Fantasia">*/
/*                                 <label class="form-check-label" for="radio5">Fantasía</label>*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/*                         </div>*/
/*                         <div class="row">*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-sm-3 mb-2 ">*/
/*                                 <input class="form-check-input" name="genero" type="radio" id="radio6" value="Misterio">*/
/*                                 <label class="form-check-label" for="radio6">Misterio</label>*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-sm-3  mb-2">*/
/*                                 <input class="form-check-input" name="genero" type="radio" id="radio7" value="Poesia">*/
/*                                 <label class="form-check-label" for="radio7">Poesía</label>*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-sm-3  mb-2">*/
/*                                 <input class="form-check-input" name="genero" type="radio" id="radio8" value="Romance">*/
/*                                 <label class="form-check-label" for="radio8">Romance</label>*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/*                             <!--Grid column-->*/
/*                             <div class="col-sm-3  mb-2">*/
/*                                 <input class="form-check-input" name="genero" type="radio" id="radio9" value="Drama">*/
/*                                 <label class="form-check-label" for="radio9">Drama</label>*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="ins"></div>*/
/*                 <div class="text-center text-md-left mt-4">*/
/*                    <input class="btn pink-gradient btn-rounded waves-effect waves-light" id="paso1" type="submit" value="Siguiente: 02.Personaliza" ></input>*/
/*                 </div>*/
/*             */
/*           */
/*  */
/* */
/*         </div>*/
/*         <!--/.Panel 1-->*/
/* */
/*         <!--Panel 2-->*/
/*         <div class="tab-pane fade " id="panel2" role="tabpanel">*/
/*             <br>*/
/*           */
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
/*                     <input class="btn pink-gradient btn-rounded waves-effect waves-light" id="paso2" type="submit" value="Siguiente: 03. ¡Empieza ya!" ></input>*/
/*                 </div>*/
/* */
/*                 <div class="text-center text-md-left mt-4">*/
/*                      */
/*                 </div>*/
/*         </div>*/
/*         <!--/.Panel 2-->*/
/* */
/*         <!--Panel 3-->*/
/*         <div class="tab-pane fade" id="panel3" role="tabpanel">*/
/*             <br>*/
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
/*                         <p class="text-muted">Resumen</p>*/
/*                         <div class="row flex-center">*/
/* */
/*                             <div class="container ml-5 mr-5 mb-4 text-justify ">*/
/*                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem ipsum dolor sit amet, consectetur adipisicing elit.*/
/*                             Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem ipsum dolor sit amet, consectetur adipisicing elit.*/
/*                             Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>*/
/*                             </div>*/
/*                            <br><input type="submit" class="btn pink-gradient btn-rounded waves-effect waves-light" name="empezar" value="Empezar historia" id="paso1" />*/
/*                         </div>*/
/*                 </div>   */
/*                <iframe name="frame" style="display: none"></iframe> */
/*             </form>*/
/*         </div>*/
/*         <!--/.Panel 3-->*/
/*     </div>*/
/*     {% endblock %}*/
