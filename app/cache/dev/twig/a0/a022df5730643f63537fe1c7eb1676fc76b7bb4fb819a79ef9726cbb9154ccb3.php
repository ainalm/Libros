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
          
            ";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "tipo"), "method") == "anuncio")) {
            // line 9
            echo "                           
             <h3 class=\"text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                <strong>Anuncia tu libro</strong>
            </h3>
            <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">Haz llegar tus historias a más gente</h6>
                        
              ";
        } else {
            // line 16
            echo "            <h3 class=\"text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                <strong>Crea tu historia</strong>
            </h3>
            <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">Deja volar tu imaginación</h6>
            ";
        }
        // line 21
        echo "
        </div>
    </div>
</div>



";
    }

    // line 28
    public function block_contenido($context, array $blocks = array())
    {
        // line 29
        echo "<div class=\"container mt-4 mb-4\">
    <!-- Navegación-->
    <ul class=\"nav nav-tabs nav-justified view gradient-card-header blue-gradient\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\"  href=\"#panel1\" id=\"ap1\" role=\"tab\">01.Ponle un título</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\"  href=\"#panel2\" id=\"ap2\" role=\"tab\">02. Personaliza</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\"  href=\"#panel3\" id=\"ap3\"  role=\"tab\">03. ¡Empieza ya!</a>
        </li>
    </ul>
    <!--/. data-toggle=\"tab\" Navegación-->
    <div class=\"tab-content card\">
        <!--Panel 1--> 
     
        <div class=\"tab-pane fade active show\" id=\"panel1\" role=\"tabpanel\">
            <br>
                ";
        // line 48
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "tipo"), "method") == "anuncio")) {
            // line 49
            echo "                           
            <form name=\"formNuevoCapitulo\" action=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("dwes_libros_escribirhistoria", array("tipo" => "anuncio"));
            echo "\"  method=\"POST\"  enctype=\"multipart/form-data\">   
              ";
        } else {
            // line 52
            echo "            <form name=\"formNuevoCapitulo\" action=\"";
            echo $this->env->getExtension('routing')->getPath("dwes_libros_escribirhistoria", array("tipo" => "gratis"));
            echo "\"  method=\"POST\"  enctype=\"multipart/form-data\"> 

 ";
        }
        // line 55
        echo "                    <!-- target=\"frame\" -->

                <!--Grid row-->
                <div class=\"row\">
                    <div class=\"col-md-12\">
                

                <div class=\"md-form\" >
                            <input type=\"text\" id=\"titulohistoria\" class=\"form-control valI\" name=\"titulohistoria\" value=\"";
        // line 63
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
                            <textarea type=\"text\" id=\"contact-message\" class=\"md-textarea form-control valI\" rows=\"6\" name=\"resuHist\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["resuHist"]) ? $context["resuHist"] : $this->getContext($context, "resuHist")), "html", null, true);
        echo "\"></textarea>
                            <label for=\"contact-message\" class=\"Lcontact-message valL\">Resume tu historia:</label>

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
                   <input class=\"btn pink-gradient btn-rounded waves-effect waves-light\" id=\"paso1\" value=\"Siguiente: 02.Personaliza\" ></input>
                </div>
             <iframe name=\"frame\" style=\"display: none\"></iframe> 
        </div>
        <!--/.Panel 1-->

        <!--Panel 2-->
        <div class=\"tab-pane fade \" id=\"panel2\" role=\"tabpanel\">
            <br>
            <div class=\"container\">
                
                <div class=\"row\">
                  <div class=\"col-8 \">
                        <div class=\"wrp\">
                                <div class=\" text-center\">
                                    <h5 class=\"mb-3 mt-5\">Añade una portada a tu historia</h5>
                                    <div class=\"row flex-center\">
                                        <label for=\"file-upload\" class=\"btn btn-info btn-rounded btn-sm waves-effect waves-light \"> Subir Foto</label><br><input name=\"file_upload\"  id=\"file-upload\" class=\"portLibr\" type=\"file\" onchange=\"document.getElementById('cambL').src = window.URL.createObjectURL(this.files[0]); \$('.titPortada').css('display', 'none');\"/>
                                         <label for=\"borrarImg\" class=\"btn btn-danger btn-rounded btn-sm waves-effect waves-light borrarImgL\" id=\"\"> Borrar</label><br>
                                    </div>
                                    <h5 class=\"mb-3 mt-5 mb-4\">O selecciona un color de fondo:</h5> 
                            </div> 
                                <div class=\"row\" style=\"margin-left: 20% !important;\">
                                  <div class=\"col-3 color rgba-blue-strong\" id=\"rgba-blue-strong\"><div class=\"\"></div></div>
                                  <div class=\"col-3 color  rgba-red-strong\" id=\"rgba-red-strong\"><div class=\"\"></div></div>
                                  <div class=\"col-3 color rgba-pink-strong\" id=\"rgba-pink-strong\"><div class=\"\"></div></div>
                                  <div class=\"col-3 color rgba-indigo-strong\" id=\"rgba-indigo-strong\"><div class=\" \"></div></div>
                                </div>
                                <div class=\"row\" style=\"margin-left: 20% !important;\">
                                  <div class=\"col-3 color rgba-teal-strong\" id=\"rgba-teal-strong\"><div class=\"\"></div></div>
                                  <div class=\"col-3 color rgba-orange-strong\" id=\" rgba-orange-strong\"><div class=\"\"></div></div>
                                  <div class=\"col-3 color  rgba-blue-grey-strong\" id=\"rgba-blue-grey-strong\"><div class=\"\"></div></div>
                                  <div class=\"col-3 color rgba-black-strong\" id=\"rgba-black-strong\"><div class=\"\"></div></div>
                                </div>
                                </div>
                                <input type=\"text\" id=\"colorF\" style=\"display:none\" name=\"colorFondo\" value=\"";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["colorFondo"]) ? $context["colorFondo"] : $this->getContext($context, "colorFondo")), "html", null, true);
        echo "\">
                                
                  </div>
                  <div class=\"col-lg-4\">
                    <div class=\"row flex-center\">
                        <div class=\" col-md-12 \" style=\"max-width: 200px;\">
    
                            <div class=\"view text-center clrno\" style=\"    max-width: 200px;
                        min-height: 300px;\">
                                <div class=\"mask flex-center rgba-blue-grey-strong clrno\" id=\"colorSelecc\">
                                    <p class=\"white-text titPortada\" >Título de la historia</p> 
                                    <img  id=\"cambL\" class=\"img-fluid\"  src=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>

                <div class=\"text-center text-md-left mt-4\">
                <input class=\"btn pink-gradient btn-rounded waves-effect waves-light\" id=\"paso2\" type=\"button\" value=\"Siguiente: 03. ¡Empieza ya!\" ></input>
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
                           
                            <div class=\"mask flex-center rgba-blue-grey-strong \"  id=\"colorSelecc1\"> 
                                <p class=\"white-text titPortada\">Ponme un título</p>
                                 <img src=\"\" class=\"img-fluid imgLibro\" alt=\"\" >
                            </div>

                        </div>
                        

                    </div>

                </div>
                <div class=\"card-body text-center\">
                        <p class=\"text-muted\">Resumen</p>
                        <div class=\"row flex-center\">

                            <div class=\"container ml-5 mr-5 mb-4 text-justify text-center\">
                            <div class=\"alert alert-danger contrAlert\" role=\"alert\">
                            Vuelve al  <a  id=\"back\" href=\"#\" class=\"alert-link\">PASO 1</a> y ponme una descripción atractiva!.
                            </div>

                            <p id=\"resumen\"></p>
                            </div>
                            ";
        // line 241
        if (array_key_exists("idLibro", $context)) {
            // line 242
            echo "                            ";
            echo twig_escape_filter($this->env, (isset($context["idLibro"]) ? $context["idLibro"] : $this->getContext($context, "idLibro")), "html", null, true);
            echo "
                          ";
        }
        // line 244
        echo "                           <br><button  type=\"submit\" class=\"btn pink-gradient btn-rounded waves-effect waves-light\" >Empezar Hisotria</button>
  
                           
                        </div>
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
        return array (  314 => 244,  308 => 242,  306 => 241,  242 => 180,  137 => 78,  119 => 63,  109 => 55,  102 => 52,  97 => 50,  94 => 49,  92 => 48,  71 => 29,  68 => 28,  57 => 21,  50 => 16,  41 => 9,  39 => 8,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %} {% block portada %}*/
/* <div class="streak streak-photo streak-md  portada " style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg');">*/
/*     <div class="flex-center  " style="       background-color:rgba(98, 84, 111, 0.7)">*/
/*         <div class="container my-5 pt-5">*/
/* */
/*             <!-- Section heading -->*/
/*           */
/*             {% if  app.request.get('tipo') =="anuncio" %}*/
/*                            */
/*              <h3 class="text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <strong>Anuncia tu libro</strong>*/
/*             </h3>*/
/*             <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">Haz llegar tus historias a más gente</h6>*/
/*                         */
/*               {% else %}*/
/*             <h3 class="text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <strong>Crea tu historia</strong>*/
/*             </h3>*/
/*             <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">Deja volar tu imaginación</h6>*/
/*             {% endif %}*/
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
/*             <a class="nav-link active"  href="#panel1" id="ap1" role="tab">01.Ponle un título</a>*/
/*         </li>*/
/*         <li class="nav-item">*/
/*             <a class="nav-link"  href="#panel2" id="ap2" role="tab">02. Personaliza</a>*/
/*         </li>*/
/*         <li class="nav-item">*/
/*             <a class="nav-link"  href="#panel3" id="ap3"  role="tab">03. ¡Empieza ya!</a>*/
/*         </li>*/
/*     </ul>*/
/*     <!--/. data-toggle="tab" Navegación-->*/
/*     <div class="tab-content card">*/
/*         <!--Panel 1--> */
/*      */
/*         <div class="tab-pane fade active show" id="panel1" role="tabpanel">*/
/*             <br>*/
/*                 {% if  app.request.get('tipo') =="anuncio" %}*/
/*                            */
/*             <form name="formNuevoCapitulo" action="{{ path('dwes_libros_escribirhistoria', {'tipo' : "anuncio"}) }}"  method="POST"  enctype="multipart/form-data">   */
/*               {% else %}*/
/*             <form name="formNuevoCapitulo" action="{{ path('dwes_libros_escribirhistoria', {'tipo' : "gratis"}) }}"  method="POST"  enctype="multipart/form-data"> */
/* */
/*  {% endif %}*/
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
/*                             <textarea type="text" id="contact-message" class="md-textarea form-control valI" rows="6" name="resuHist" value="{{resuHist}}"></textarea>*/
/*                             <label for="contact-message" class="Lcontact-message valL">Resume tu historia:</label>*/
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
/*                    <input class="btn pink-gradient btn-rounded waves-effect waves-light" id="paso1" value="Siguiente: 02.Personaliza" ></input>*/
/*                 </div>*/
/*              <iframe name="frame" style="display: none"></iframe> */
/*         </div>*/
/*         <!--/.Panel 1-->*/
/* */
/*         <!--Panel 2-->*/
/*         <div class="tab-pane fade " id="panel2" role="tabpanel">*/
/*             <br>*/
/*             <div class="container">*/
/*                 */
/*                 <div class="row">*/
/*                   <div class="col-8 ">*/
/*                         <div class="wrp">*/
/*                                 <div class=" text-center">*/
/*                                     <h5 class="mb-3 mt-5">Añade una portada a tu historia</h5>*/
/*                                     <div class="row flex-center">*/
/*                                         <label for="file-upload" class="btn btn-info btn-rounded btn-sm waves-effect waves-light "> Subir Foto</label><br><input name="file_upload"  id="file-upload" class="portLibr" type="file" onchange="document.getElementById('cambL').src = window.URL.createObjectURL(this.files[0]); $('.titPortada').css('display', 'none');"/>*/
/*                                          <label for="borrarImg" class="btn btn-danger btn-rounded btn-sm waves-effect waves-light borrarImgL" id=""> Borrar</label><br>*/
/*                                     </div>*/
/*                                     <h5 class="mb-3 mt-5 mb-4">O selecciona un color de fondo:</h5> */
/*                             </div> */
/*                                 <div class="row" style="margin-left: 20% !important;">*/
/*                                   <div class="col-3 color rgba-blue-strong" id="rgba-blue-strong"><div class=""></div></div>*/
/*                                   <div class="col-3 color  rgba-red-strong" id="rgba-red-strong"><div class=""></div></div>*/
/*                                   <div class="col-3 color rgba-pink-strong" id="rgba-pink-strong"><div class=""></div></div>*/
/*                                   <div class="col-3 color rgba-indigo-strong" id="rgba-indigo-strong"><div class=" "></div></div>*/
/*                                 </div>*/
/*                                 <div class="row" style="margin-left: 20% !important;">*/
/*                                   <div class="col-3 color rgba-teal-strong" id="rgba-teal-strong"><div class=""></div></div>*/
/*                                   <div class="col-3 color rgba-orange-strong" id=" rgba-orange-strong"><div class=""></div></div>*/
/*                                   <div class="col-3 color  rgba-blue-grey-strong" id="rgba-blue-grey-strong"><div class=""></div></div>*/
/*                                   <div class="col-3 color rgba-black-strong" id="rgba-black-strong"><div class=""></div></div>*/
/*                                 </div>*/
/*                                 </div>*/
/*                                 <input type="text" id="colorF" style="display:none" name="colorFondo" value="{{colorFondo}}">*/
/*                                 */
/*                   </div>*/
/*                   <div class="col-lg-4">*/
/*                     <div class="row flex-center">*/
/*                         <div class=" col-md-12 " style="max-width: 200px;">*/
/*     */
/*                             <div class="view text-center clrno" style="    max-width: 200px;*/
/*                         min-height: 300px;">*/
/*                                 <div class="mask flex-center rgba-blue-grey-strong clrno" id="colorSelecc">*/
/*                                     <p class="white-text titPortada" >Título de la historia</p> */
/*                                     <img  id="cambL" class="img-fluid"  src="">*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/* */
/*                 <div class="text-center text-md-left mt-4">*/
/*                 <input class="btn pink-gradient btn-rounded waves-effect waves-light" id="paso2" type="button" value="Siguiente: 03. ¡Empieza ya!" ></input>*/
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
/*                            */
/*                             <div class="mask flex-center rgba-blue-grey-strong "  id="colorSelecc1"> */
/*                                 <p class="white-text titPortada">Ponme un título</p>*/
/*                                  <img src="" class="img-fluid imgLibro" alt="" >*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         */
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <div class="card-body text-center">*/
/*                         <p class="text-muted">Resumen</p>*/
/*                         <div class="row flex-center">*/
/* */
/*                             <div class="container ml-5 mr-5 mb-4 text-justify text-center">*/
/*                             <div class="alert alert-danger contrAlert" role="alert">*/
/*                             Vuelve al  <a  id="back" href="#" class="alert-link">PASO 1</a> y ponme una descripción atractiva!.*/
/*                             </div>*/
/* */
/*                             <p id="resumen"></p>*/
/*                             </div>*/
/*                             {% if idLibro is defined %}*/
/*                             {{idLibro}}*/
/*                           {% endif %}*/
/*                            <br><button  type="submit" class="btn pink-gradient btn-rounded waves-effect waves-light" >Empezar Hisotria</button>*/
/*   */
/*                            */
/*                         </div>*/
/*                 </div> */
/*             </form>*/
/*         </div>*/
/*         <!--/.Panel 3-->*/
/*     </div>*/
/*     {% endblock %}*/
