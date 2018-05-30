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

    public function block_portada($context, array $blocks = array())
    {
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["infoLibro"]) ? $context["infoLibro"] : $this->getContext($context, "infoLibro")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "<!--Intro Section-->
<div class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Fondos/Fondo2.jpg"), "html", null, true);
            echo "');margin-top: 27px;\">
    <div class=\"flex-center\" style=\"background-color: rgba(17, 27, 43, 0.7);\">
        <div class=\"container my-4 pt-5\">

            <!-- Section heading -->
            <h3 class=\"text-center pt-4  white-text font-weight-bold wow fadeIn mb-4\" data-wow-delay=\"0.2s\">
                <strong>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
            echo "</strong>
            </h3>
            <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                <span class=\"mb-5\">by ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "username", array()), "html", null, true);
            echo "</span>
                <br>
                <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_historia", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"), "numCap" => 0)), "html", null, true);
            echo "\" class=\"btn peach-gradient btn-lg mt-4\">Visualizar Historia</a>
            </h6>

        </div>
    </div>
</div>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo " ";
    }

    // line 24
    public function block_contenido($context, array $blocks = array())
    {
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["infoLibro"]) ? $context["infoLibro"] : $this->getContext($context, "infoLibro")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "
 ";
            // line 26
            if (((isset($context["userlog"]) ? $context["userlog"] : $this->getContext($context, "userlog")) == $this->getAttribute($context["item"], "username", array()))) {
                // line 27
                echo "<!--Modal: Login with Avatar Form-->
<div class=\"modal fade\" id=\"modalActualizar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog cascading-modal modal-avatar modal-lg\" role=\"document\">
        <!--Content-->
        <div class=\"modal-content\">

            <!--Header-->
            <form name=\"formUpdatePerfil\"  action=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_updateDescLibro", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\"  method=\"POST\" enctype=\"multipart/form-data\" >
              <iframe name=\"frame\" style=\"display: none\"></iframe>
               
                <div class=\"modal-header\">
                      ";
                // line 38
                if ((isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto"))) {
                    // line 39
                    echo "                    <img src=\"data:image/jpeg;base64,";
                    echo twig_escape_filter($this->env, (isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "html", null, true);
                    echo "\" alt=\"avatar\" class=\"img-responsive\" id=\"camb\">
                    
                    ";
                } else {
                    // line 42
                    echo "                   <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Icons/upload.png"), "html", null, true);
                    echo "\" class=\" img-fluid \" alt=\"First sample avatar image\" id=\"camb\">
                    ";
                }
                // line 44
                echo "
                </div>
                <!--Body-->
                <div class=\"modal-body text-center mb-1\">

                    <p class=\"text-muted\"><small>Sube una nueva foto de perfil</small></p>
                                <div class=\"row flex-center\">
                                    <label for=\"file-upload\" class=\"btn btn-info btn-rounded btn-sm waves-effect waves-light\"> Subir Foto</label><br><input name=\"file_upload\"  id=\"file-upload\" type=\"file\" onchange=\"document.getElementById('camb').src = window.URL.createObjectURL(this.files[0])\"/>
                             <label for=\"borrarImg\" class=\"btn btn-danger btn-rounded btn-sm waves-effect waves-light borrarImg\"> Borrar</label><br>
                                </div>
                            </div>

                    <div class=\"md-form ml-0 mr-0\">
                        <input type=\"text\" type=\"text\" id=\"form29\" class=\"form-control form-control-sm validate ml-0\" name=\"tituloLibro\" value=\"";
                // line 57
                echo twig_escape_filter($this->env, (isset($context["tituloLibro"]) ? $context["tituloLibro"] : $this->getContext($context, "tituloLibro")), "html", null, true);
                echo "\">
                        <label for=\"form29\" class=\"ml-0\">Título del libro</label>
                    </div>
                    <div class=\"md-form ml-0 mr-0\">
                        <input type=\"text\" type=\"text\" id=\"form29\" class=\"form-control form-control-sm validate ml-0\" name=\"trailer\" value=\"";
                // line 61
                echo twig_escape_filter($this->env, (isset($context["trailer"]) ? $context["trailer"] : $this->getContext($context, "trailer")), "html", null, true);
                echo "\">
                        <label for=\"form29\" class=\"ml-0\">Booktrailer Video URL</label>

                    </div>
                    <div class=\"md-form ml-0 mr-0\">
                        <textarea type=\"text\" id=\"contact-message\" class=\"md-textarea form-control valI\" rows=\"11\" name=\"descripcionLibro\" value=\"\">";
                // line 66
                echo twig_escape_filter($this->env, (isset($context["descripcionLibro"]) ? $context["descripcionLibro"] : $this->getContext($context, "descripcionLibro")), "html", null, true);
                echo "</textarea>
                        <label for=\"contact-message\" class=\"Lcontact-message valL cl\" id=\"labelContC\">Resumen</label>
                    </div>

                    <div class=\"text-center mt-4\">
                        <button type=\"submit\" class=\"btn btn-cyan mt-1\">Actualizar</button>
                    </div>
                </div>
            </form>    

        </div>
        <!--/.Content-->
    </div>
</div>


<!--Modal : Añdir enlace -->
<div class=\"modal fade\" id=\"modalEnlace\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog cascading-modal modal-avatar modal-sm\" role=\"document\">
        <!--Content-->
        <div class=\"modal-content\">

            <!--Header-->
            <form name=\"formUpdatePerfil\"  action=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_addEnlaceLibro", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\"  method=\"POST\" enctype=\"multipart/form-data\" >
              <iframe name=\"frame\" style=\"display: none\"></iframe>
               
                <!--Body-->
                <div class=\"modal-body text-center mb-1\">
                    <div class=\"md-form ml-0 mr-0\">
                        <input type=\"text\" type=\"text\" id=\"paginaLibro\" class=\"form-control form-control-sm validate ml-0\" name=\"paginaLibro\" value=\"";
                // line 95
                echo twig_escape_filter($this->env, (isset($context["paginaLibro"]) ? $context["paginaLibro"] : $this->getContext($context, "paginaLibro")), "html", null, true);
                echo "\">
                        <label for=\"paginaLibro\" class=\"ml-0\">Página</label>
                    </div>
                    <div class=\"md-form ml-0 mr-0\">
                        <input type=\"text\" type=\"text\" id=\"form29\" class=\"form-control form-control-sm validate ml-0\" name=\"enlaceLibro\" value=\"";
                // line 99
                echo twig_escape_filter($this->env, (isset($context["enlaceLibro"]) ? $context["enlaceLibro"] : $this->getContext($context, "enlaceLibro")), "html", null, true);
                echo "\">
                        <label for=\"enlaceLibro\" class=\"ml-0\">Enlace</label>

                    </div>
                   

                    <div class=\"text-center mt-4\">
                        <button type=\"submit\" class=\"btn btn-cyan mt-1\">Añadir</button>
                    </div>
                </div>
            </form>    

        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Añadir enlace -->

<div class=\"container \">

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
                        <div class=\"view gradient-card-header \" style=\"background-color: #c6d2e3;\">
                            <h2 class=\"h2-responsive mb-0\">Información</h2>
                        </div>
                        <!--/Card image-->

                        <!--Card content-->
                        <div class=\"card-body pb-0\">
                            <form name=\"form\"action=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_updateInfoLibro", array("idLibro" => $this->getAttribute($context["item"], "idLibro", array()))), "html", null, true);
                echo "\" method=\"POST\">
                            <!--Panel data-->
                            <div class=\"row card-body pt-3\">

                                <!--First column-->
                                <div class=\"col-md-6\">

                                    <!--Date select-->
                                    <p class=\"lead\">
                                        <span class=\"badge info-color p-2\">Progreso de la historia: ";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "progreso", array()), "html", null, true);
                echo "</span>
                                    </p>


                                    <!--Blue select-->
                                    <select name=\"progreso\" class=\"mdb-select colorful-select dropdown-primary\">
                                   
                                        <option value=\"En progreso\">En progreso</option>
                                        <option value=\"Completado\">Completado</option>
                                    </select>

                                    <!--/Blue select-->

                                    <!--Date pickers-->
                                    <p class=\"lead \">
                                        <span class=\"badge info-color p-2\">Clasificación de edad : ";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "RestEdad", array()), "html", null, true);
                echo "</span>
                                    </p>
                                    <br>

                                    <!--Blue select-->
                                    <select name=\"edad\" class=\"mdb-select colorful-select dropdown-primary\">
                                   ";
                // line 175
                echo "                                        <option value=\"Todo público\">Todo público</option>
                                        <option value=\"13\">+ 13 años</option>
                                        <option value=\"18\">+ 18 años</option>

                                    </select>

                                    <!--/Blue select-->


                                </div>
                                <!--/First column-->

                                <!--Second column-->
                                <div class=\"col-md-6 \">
                                    <!--Date select-->
                                    <p class=\"lead\">
                                        <span class=\"badge info-color p-2\">Género :";
                // line 191
                echo twig_escape_filter($this->env, (isset($context["g"]) ? $context["g"] : $this->getContext($context, "g")), "html", null, true);
                echo " </span>
                                    </p>


                                    <!--Blue select-->
                                    <select name=\"genero\" class=\"mdb-select colorful-select dropdown-primary\">
                                   ";
                // line 198
                echo "                                        <option value=\"1\">Aventura</option>
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
                                    <p class=\"lead \">
                                        <span class=\"badge info-color p-2\">Idioma : ";
                // line 212
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "Idioma", array()), "html", null, true);
                echo "</span>
                                    </p>
                                    <br>

                                    <!--Blue select-->
                                    <select name=\"idioma\" class=\"mdb-select colorful-select dropdown-primary\">
                                      ";
                // line 219
                echo "                                        <option value=\"Español\">Español</option>
                                        <option value=\"English\">English</option>
                                        <option value=\"Portugês\">Portugês</option>
                                        <option value=\"Russian\" >Russian</option>
                                        <option value=\"Filipino\">Filipino</option>
                                        <option value=\"Hindi\">Hindi</option>
                                        <option value=\"Dutch\">Dutch</option>
                                        <option value=\"Italiano\">Italiano</option>
                                        <option value=\"Chinese\">Chinese</option>
                                        <option value=\"Turkish\">Turkish</option>
                                        <option value=\"Deutsch\">Deutsch</option>
                                        <option value=\"Français\">Français</option>
                                        <option value=\"Other\">Other</option>
                                    </select>

                                    <!--/Blue select-->


                                </div>
                                <!--/Second column-->
                                        <div class=\"col-md-12 text-center my-4\">
                                            <div class=\"waves-input-wrapper waves-effect waves-light\"><input type=\"submit\" value=\"Actualizar\" class=\"btn btn-info btn-rounded\"></div>
                                        </div>
                            </div>
                            <!--/Panel data-->
                            </form>
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

                                <!--Card image TODO: Imagen libro view overlay  -->
                                <div class=\" ";
                // line 268
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "colorPortada", array()), "html", null, true);
                echo "\">
                                     ";
                // line 269
                if ((isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto"))) {
                    // line 270
                    echo "                        <img src=\"data:image/jpeg;base64,";
                    echo twig_escape_filter($this->env, (isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "html", null, true);
                    echo "\" style=\"height:200px ; width:150px;\" class=\" mx-auto\" alt=\"sample image\">
                            
                            ";
                } else {
                    // line 273
                    echo "                        <div class=\" flex-center text-center\"  style=\"height:200px ;\" alt=\"sample image\"><p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
                    echo "</p></div>
                            ";
                }
                // line 275
                echo "
                                    <a >
                                        <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                    </a>
                                </div>
                                <!--/.Card image-->

                                <!--Card content-->
                                <div class=\"card-body\">
                                    <!--Title-->
                                    <h5 class=\"card-title dark-grey-text text-center grey lighten-4 py-2\">
                                        <strong>";
                // line 286
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
                echo "</strong>
                                        <a href=\"\" data-toggle=\"modal\" data-target=\"#modalActualizar\">

                                            <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" class=\" btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient mr-3 ml-4\"
                                                href=\"#\" data-original-title=\"Editar información del libro\">
                                                <i class=\"fas fa-pencil-alt\"></i>
                                            </span>
                                        </a>
                                    </h5>

                                    <!--Description-->
                                    <p class=\"mt-3 dark-grey-text font-small text-center\" style=\" 
                                    overflow: hidden;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;\">
                                        <em>";
                // line 302
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descripcion", array()), "html", null, true);
                echo "
                                            <div class=\"text-center\">

                                            </div>
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
           ";
                // line 330
                echo "            
            <section>
                <div class=\"card card-cascade narrower z-depth-0\">

                    <!--Card image-->
                        <div class=\"view gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center\">
            ";
                // line 336
                if (($this->getAttribute($context["item"], "tipoLibro", array()) == "Gratis")) {
                    // line 337
                    echo "                        <div>
                            <a data-toggle=\"tooltip\"  data-placement=\"top\" title=\"Añadir capítulo\" class=\"btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light\"
                                href=\"";
                    // line 339
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_nuevoCap", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                    echo "\">
                                <i class=\"fas fa-plus\"></i>
                            </a>
                        </div>
                        <a href=\"\" class=\"white-text mx-3\">
                         Capítulos
                           </a>
                       
                        ";
                } else {
                    // line 348
                    echo "                    
                        <div>
 
                            <a href=\"\" data-toggle=\"modal\" data-target=\"#modalEnlace\">
                                            <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" class=\" btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light \"
                                                href=\"#\" data-original-title=\"Añadir enlace\">
                                                <i class=\"fas fa-plus\"></i>
                                            </span>
                                        </a>
                        </div>
                        <a href=\"\" class=\"white-text mx-3\">
                           Enlaces de compra 
                           </a>
                     
                        ";
                }
                // line 363
                echo "                        <div>
                            ";
                // line 372
                echo "                        </div>
                    </div>
                    <!--/Card image-->

                    <div class=\"px-4\">
                        <div class=\"table-responsive\">
                            <!--Tabla Capitulos-->
                             ";
                // line 379
                if (($this->getAttribute($context["item"], "tipoLibro", array()) == "Gratis")) {
                    // line 380
                    echo "                            <table id=\"capitulos1\" class=\"mdl-data-table col-lg-12 \" style=\"width:100%\">

                                <thead>
                                    <tr>
                                        <th> Capítulo</th>
                                        <th>Título </th>
                                        <th> Última actualización</th>
                                        <th> Estado de publicación</th>
                                        <th> Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 392
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["infoCapitulo"]) ? $context["infoCapitulo"] : $this->getContext($context, "infoCapitulo")));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        echo " 
                                    <tr>
                                        <td>";
                        // line 394
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
                        echo "</td>
                                        <td>";
                        // line 395
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tituloCap", array()), "html", null, true);
                        echo "</td>
                                        <td>";
                        // line 396
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "actualizado", array()), "html", null, true);
                        echo "</td>
                                        <td>
                                            <select class=\"mdb-select colorful-select dropdown-primary\">
                                                <option value=\"1\">";
                        // line 399
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "estado", array()), "html", null, true);
                        echo "</option>
                                                <option value=\"2\"></option>
                                            </select>
                                        </td>
                                        <td>
                                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar capítulo\" class=\" btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient mr-3 ml-4\"
                                                href=\"";
                        // line 405
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_capitulo", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"), "numCapitulo" => $this->getAttribute($context["item"], "numCapitulo", array()))), "html", null, true);
                        echo "\">
                                                <i class=\"fas fa-pencil-alt\"></i>
                                            </a>
                                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar capítulo\" class=\"btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient \"
                                                href=\"";
                        // line 409
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_eliminarCap", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"), "numCapitulo" => $this->getAttribute($context["item"], "numCapitulo", array()))), "html", null, true);
                        echo "\">
                                                <i class=\"fa fa-remove mt-0\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 415
                    echo "                                </tbody>
                            </table>
                            <!--./ Tabla Capitulos TODO:-->
                        <!--Tabla Capitulos-->
                        ";
                } else {
                    // line 420
                    echo "                            <table id=\"capitulos1\" class=\"mdl-data-table col-lg-12 \" style=\"width:100%\">

                                <thead>
                                    <tr>
                                        <th> Página</th>
                                        <th>Enlace </th>
                                        <th> Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 430
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["enlaces"]) ? $context["enlaces"] : $this->getContext($context, "enlaces")));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 431
                        echo "                                    <tr>
                                        <td>";
                        // line 432
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "paginaLibro", array()), "html", null, true);
                        echo "</td>
                                        <td> <a target=\"_blank\" href=\"";
                        // line 433
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "enlaceLibro", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "enlaceLibro", array()), "html", null, true);
                        echo "</a></td>
                                     
                                        <td>
                                            <a href=\"\" data-toggle=\"modal\" data-target=\"#";
                        // line 436
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idEnlace", array()), "html", null, true);
                        echo "\">

                                            <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" class=\" btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient mr-3 ml-4\"
                                                href=\"#\" data-original-title=\"Editar enlace\">
                                                <i class=\"fas fa-pencil-alt\"></i>
                                            </span>
                                        </a>    
                                            <a  href=\"";
                        // line 443
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_eliminarEnlace", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"), "idEnlace" => $this->getAttribute($context["item"], "idEnlace", array()))), "html", null, true);
                        echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar enlace\" class=\"btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient \"
                                              >
                                                <i class=\"fa fa-remove mt-0\"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!--Modal : Añdir enlace -->
<div class=\"modal fade\" id=\"";
                        // line 451
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idEnlace", array()), "html", null, true);
                        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog cascading-modal modal-avatar modal-sm\" role=\"document\">
        <!--Content-->
        <div class=\"modal-content\">

            <!--Header-->
            <form name=\"formUpdatePerfil\"  action=\"";
                        // line 457
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_editarEnlace", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"), "idEnlace" => $this->getAttribute($context["item"], "idEnlace", array()))), "html", null, true);
                        echo "\"  method=\"POST\" enctype=\"multipart/form-data\" >
              <iframe name=\"frame\" style=\"display: none\"></iframe>
               
                <!--Body-->
                <div class=\"modal-body text-center mb-1\">
                    <div class=\"md-form ml-0 mr-0\">
                        <input type=\"text\" type=\"text\" id=\"paginaLibro\" class=\"form-control form-control-sm validate ml-0\" name=\"paginaLibro\" value=\"";
                        // line 463
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "paginaLibro", array()), "html", null, true);
                        echo "\">
                        <label for=\"paginaLibro\" class=\"ml-0\">Página</label>
                    </div>
                    <div class=\"md-form ml-0 mr-0\">
                        <input type=\"text\" type=\"text\" id=\"form29\" class=\"form-control form-control-sm validate ml-0\" name=\"enlaceLibro\" value=\"";
                        // line 467
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "enlaceLibro", array()), "html", null, true);
                        echo "\">
                        <label for=\"enlaceLibro\" class=\"ml-0\">Enlace</label>

                    </div>
                   

                    <div class=\"text-center mt-4\">
                        <button type=\"submit\" class=\"btn btn-cyan mt-1\">Actualizar</button>
                    </div>
                </div>
            </form>    

        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Añadir enlace -->
                                   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 485
                    echo "                                </tbody>
                            </table>
                            <!--Table-->
                            ";
                }
                // line 489
                echo "                        </div>
                        <!--Bottom Table UI-->
                        <div class=\"d-flex justify-content-between\">

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
            // line 508
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ";
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
        return array (  716 => 508,  695 => 489,  689 => 485,  665 => 467,  658 => 463,  649 => 457,  640 => 451,  629 => 443,  619 => 436,  611 => 433,  607 => 432,  604 => 431,  600 => 430,  588 => 420,  581 => 415,  569 => 409,  562 => 405,  553 => 399,  547 => 396,  543 => 395,  539 => 394,  532 => 392,  518 => 380,  516 => 379,  507 => 372,  504 => 363,  487 => 348,  475 => 339,  471 => 337,  469 => 336,  461 => 330,  431 => 302,  412 => 286,  399 => 275,  393 => 273,  386 => 270,  384 => 269,  380 => 268,  329 => 219,  320 => 212,  304 => 198,  295 => 191,  277 => 175,  268 => 168,  250 => 153,  238 => 144,  190 => 99,  183 => 95,  174 => 89,  148 => 66,  140 => 61,  133 => 57,  118 => 44,  112 => 42,  105 => 39,  103 => 38,  96 => 34,  87 => 27,  85 => 26,  82 => 25,  75 => 24,  71 => 20,  58 => 14,  53 => 12,  47 => 9,  38 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %} {% block portada %} {% for item in infoLibro %}*/
/* <!--Intro Section-->*/
/* <div class="streak streak-photo streak-md  portada " style="background-image: url('{{ asset('bundles/dweslibros/img/Fondos/Fondo2.jpg') }}');margin-top: 27px;">*/
/*     <div class="flex-center" style="background-color: rgba(17, 27, 43, 0.7);">*/
/*         <div class="container my-4 pt-5">*/
/* */
/*             <!-- Section heading -->*/
/*             <h3 class="text-center pt-4  white-text font-weight-bold wow fadeIn mb-4" data-wow-delay="0.2s">*/
/*                 <strong>{{item.titulo}}</strong>*/
/*             </h3>*/
/*             <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <span class="mb-5">by {{item.username}}</span>*/
/*                 <br>*/
/*                 <a href="{{ path('dwes_libros_historia', {'idLibro' : app.request.get('idLibro'),'numCap':0}) }}" class="btn peach-gradient btn-lg mt-4">Visualizar Historia</a>*/
/*             </h6>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/*  {% endfor %} {% endblock %}*/
/* */
/* */
/* */
/*  {% block contenido %} {% for item in infoLibro %}*/
/* */
/*  {% if userlog == item.username %}*/
/* <!--Modal: Login with Avatar Form-->*/
/* <div class="modal fade" id="modalActualizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <div class="modal-dialog cascading-modal modal-avatar modal-lg" role="document">*/
/*         <!--Content-->*/
/*         <div class="modal-content">*/
/* */
/*             <!--Header-->*/
/*             <form name="formUpdatePerfil"  action="{{ path('dwes_libros_updateDescLibro',{'idLibro' : app.request.get('idLibro')} )}}"  method="POST" enctype="multipart/form-data" >*/
/*               <iframe name="frame" style="display: none"></iframe>*/
/*                */
/*                 <div class="modal-header">*/
/*                       {% if foto %}*/
/*                     <img src="data:image/jpeg;base64,{{foto}}" alt="avatar" class="img-responsive" id="camb">*/
/*                     */
/*                     {% else %}*/
/*                    <img src="{{ asset('bundles/dweslibros/img/Icons/upload.png') }}" class=" img-fluid " alt="First sample avatar image" id="camb">*/
/*                     {% endif %}*/
/* */
/*                 </div>*/
/*                 <!--Body-->*/
/*                 <div class="modal-body text-center mb-1">*/
/* */
/*                     <p class="text-muted"><small>Sube una nueva foto de perfil</small></p>*/
/*                                 <div class="row flex-center">*/
/*                                     <label for="file-upload" class="btn btn-info btn-rounded btn-sm waves-effect waves-light"> Subir Foto</label><br><input name="file_upload"  id="file-upload" type="file" onchange="document.getElementById('camb').src = window.URL.createObjectURL(this.files[0])"/>*/
/*                              <label for="borrarImg" class="btn btn-danger btn-rounded btn-sm waves-effect waves-light borrarImg"> Borrar</label><br>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                     <div class="md-form ml-0 mr-0">*/
/*                         <input type="text" type="text" id="form29" class="form-control form-control-sm validate ml-0" name="tituloLibro" value="{{tituloLibro}}">*/
/*                         <label for="form29" class="ml-0">Título del libro</label>*/
/*                     </div>*/
/*                     <div class="md-form ml-0 mr-0">*/
/*                         <input type="text" type="text" id="form29" class="form-control form-control-sm validate ml-0" name="trailer" value="{{trailer}}">*/
/*                         <label for="form29" class="ml-0">Booktrailer Video URL</label>*/
/* */
/*                     </div>*/
/*                     <div class="md-form ml-0 mr-0">*/
/*                         <textarea type="text" id="contact-message" class="md-textarea form-control valI" rows="11" name="descripcionLibro" value="">{{descripcionLibro}}</textarea>*/
/*                         <label for="contact-message" class="Lcontact-message valL cl" id="labelContC">Resumen</label>*/
/*                     </div>*/
/* */
/*                     <div class="text-center mt-4">*/
/*                         <button type="submit" class="btn btn-cyan mt-1">Actualizar</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>    */
/* */
/*         </div>*/
/*         <!--/.Content-->*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <!--Modal : Añdir enlace -->*/
/* <div class="modal fade" id="modalEnlace" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">*/
/*         <!--Content-->*/
/*         <div class="modal-content">*/
/* */
/*             <!--Header-->*/
/*             <form name="formUpdatePerfil"  action="{{ path('dwes_libros_addEnlaceLibro',{'idLibro' : app.request.get('idLibro')} )}}"  method="POST" enctype="multipart/form-data" >*/
/*               <iframe name="frame" style="display: none"></iframe>*/
/*                */
/*                 <!--Body-->*/
/*                 <div class="modal-body text-center mb-1">*/
/*                     <div class="md-form ml-0 mr-0">*/
/*                         <input type="text" type="text" id="paginaLibro" class="form-control form-control-sm validate ml-0" name="paginaLibro" value="{{paginaLibro}}">*/
/*                         <label for="paginaLibro" class="ml-0">Página</label>*/
/*                     </div>*/
/*                     <div class="md-form ml-0 mr-0">*/
/*                         <input type="text" type="text" id="form29" class="form-control form-control-sm validate ml-0" name="enlaceLibro" value="{{enlaceLibro}}">*/
/*                         <label for="enlaceLibro" class="ml-0">Enlace</label>*/
/* */
/*                     </div>*/
/*                    */
/* */
/*                     <div class="text-center mt-4">*/
/*                         <button type="submit" class="btn btn-cyan mt-1">Añadir</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>    */
/* */
/*         </div>*/
/*         <!--/.Content-->*/
/*     </div>*/
/* </div>*/
/* <!--Modal: Añadir enlace -->*/
/* */
/* <div class="container ">*/
/* */
/*     <div style="height: 5px"></div>*/
/*    */
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
/*                         <div class="view gradient-card-header " style="background-color: #c6d2e3;">*/
/*                             <h2 class="h2-responsive mb-0">Información</h2>*/
/*                         </div>*/
/*                         <!--/Card image-->*/
/* */
/*                         <!--Card content-->*/
/*                         <div class="card-body pb-0">*/
/*                             <form name="form"action="{{path('dwes_libros_updateInfoLibro', {'idLibro' : item.idLibro})}}" method="POST">*/
/*                             <!--Panel data-->*/
/*                             <div class="row card-body pt-3">*/
/* */
/*                                 <!--First column-->*/
/*                                 <div class="col-md-6">*/
/* */
/*                                     <!--Date select-->*/
/*                                     <p class="lead">*/
/*                                         <span class="badge info-color p-2">Progreso de la historia: {{item.progreso}}</span>*/
/*                                     </p>*/
/* */
/* */
/*                                     <!--Blue select-->*/
/*                                     <select name="progreso" class="mdb-select colorful-select dropdown-primary">*/
/*                                    */
/*                                         <option value="En progreso">En progreso</option>*/
/*                                         <option value="Completado">Completado</option>*/
/*                                     </select>*/
/* */
/*                                     <!--/Blue select-->*/
/* */
/*                                     <!--Date pickers-->*/
/*                                     <p class="lead ">*/
/*                                         <span class="badge info-color p-2">Clasificación de edad : {{item.RestEdad}}</span>*/
/*                                     </p>*/
/*                                     <br>*/
/* */
/*                                     <!--Blue select-->*/
/*                                     <select name="edad" class="mdb-select colorful-select dropdown-primary">*/
/*                                    {#  <option selected>{{item.RestEdad}}</option> #}*/
/*                                         <option value="Todo público">Todo público</option>*/
/*                                         <option value="13">+ 13 años</option>*/
/*                                         <option value="18">+ 18 años</option>*/
/* */
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
/*                                         <span class="badge info-color p-2">Género :{{g}} </span>*/
/*                                     </p>*/
/* */
/* */
/*                                     <!--Blue select-->*/
/*                                     <select name="genero" class="mdb-select colorful-select dropdown-primary">*/
/*                                    {#  <option selected value="{{item.idGenero}}">{{g}}</option> #}*/
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
/*                                     <p class="lead ">*/
/*                                         <span class="badge info-color p-2">Idioma : {{item.Idioma}}</span>*/
/*                                     </p>*/
/*                                     <br>*/
/* */
/*                                     <!--Blue select-->*/
/*                                     <select name="idioma" class="mdb-select colorful-select dropdown-primary">*/
/*                                       {#   <option selected>{{item.Idioma}}</option> #}*/
/*                                         <option value="Español">Español</option>*/
/*                                         <option value="English">English</option>*/
/*                                         <option value="Portugês">Portugês</option>*/
/*                                         <option value="Russian" >Russian</option>*/
/*                                         <option value="Filipino">Filipino</option>*/
/*                                         <option value="Hindi">Hindi</option>*/
/*                                         <option value="Dutch">Dutch</option>*/
/*                                         <option value="Italiano">Italiano</option>*/
/*                                         <option value="Chinese">Chinese</option>*/
/*                                         <option value="Turkish">Turkish</option>*/
/*                                         <option value="Deutsch">Deutsch</option>*/
/*                                         <option value="Français">Français</option>*/
/*                                         <option value="Other">Other</option>*/
/*                                     </select>*/
/* */
/*                                     <!--/Blue select-->*/
/* */
/* */
/*                                 </div>*/
/*                                 <!--/Second column-->*/
/*                                         <div class="col-md-12 text-center my-4">*/
/*                                             <div class="waves-input-wrapper waves-effect waves-light"><input type="submit" value="Actualizar" class="btn btn-info btn-rounded"></div>*/
/*                                         </div>*/
/*                             </div>*/
/*                             <!--/Panel data-->*/
/*                             </form>*/
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
/*                                 <!--Card image TODO: Imagen libro view overlay  -->*/
/*                                 <div class=" {{item.colorPortada}}">*/
/*                                      {% if foto %}*/
/*                         <img src="data:image/jpeg;base64,{{foto}}" style="height:200px ; width:150px;" class=" mx-auto" alt="sample image">*/
/*                             */
/*                             {% else %}*/
/*                         <div class=" flex-center text-center"  style="height:200px ;" alt="sample image"><p>{{item.titulo}}</p></div>*/
/*                             {% endif %}*/
/* */
/*                                     <a >*/
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
/*                                         <a href="" data-toggle="modal" data-target="#modalActualizar">*/
/* */
/*                                             <span data-toggle="tooltip" data-placement="top" title="" class=" btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient mr-3 ml-4"*/
/*                                                 href="#" data-original-title="Editar información del libro">*/
/*                                                 <i class="fas fa-pencil-alt"></i>*/
/*                                             </span>*/
/*                                         </a>*/
/*                                     </h5>*/
/* */
/*                                     <!--Description-->*/
/*                                     <p class="mt-3 dark-grey-text font-small text-center" style=" */
/*                                     overflow: hidden;*/
/*                                     display: -webkit-box;*/
/*                                     -webkit-line-clamp: 2;*/
/*                                     -webkit-box-orient: vertical;">*/
/*                                         <em>{{item.descripcion}}*/
/*                                             <div class="text-center">*/
/* */
/*                                             </div>*/
/*                                         </em>*/
/*                                     </p>*/
/* */
/* */
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
/*            {# Para una publicación desde la web muestra la tabla #}*/
/*             */
/*             <section>*/
/*                 <div class="card card-cascade narrower z-depth-0">*/
/* */
/*                     <!--Card image-->*/
/*                         <div class="view gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">*/
/*             {% if  item.tipoLibro =="Gratis" %}*/
/*                         <div>*/
/*                             <a data-toggle="tooltip"  data-placement="top" title="Añadir capítulo" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light"*/
/*                                 href="{{ path('dwes_libros_nuevoCap', {'idLibro' : app.request.get('idLibro')}) }}">*/
/*                                 <i class="fas fa-plus"></i>*/
/*                             </a>*/
/*                         </div>*/
/*                         <a href="" class="white-text mx-3">*/
/*                          Capítulos*/
/*                            </a>*/
/*                        */
/*                         {% else %}*/
/*                     */
/*                         <div>*/
/*  */
/*                             <a href="" data-toggle="modal" data-target="#modalEnlace">*/
/*                                             <span data-toggle="tooltip" data-placement="top" title="" class=" btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light "*/
/*                                                 href="#" data-original-title="Añadir enlace">*/
/*                                                 <i class="fas fa-plus"></i>*/
/*                                             </span>*/
/*                                         </a>*/
/*                         </div>*/
/*                         <a href="" class="white-text mx-3">*/
/*                            Enlaces de compra */
/*                            </a>*/
/*                      */
/*                         {% endif %}*/
/*                         <div>*/
/*                             {# <a data-toggle="tooltip" data-placement="top" title="Editar capítulo" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light"*/
/*                                 href="{{ path('dwes_libros_perfilhistoria', {'idLibro' : app.request.get('idLibro')}) }}">*/
/*                                 <i class="fas fa-pencil-alt"></i>*/
/*                             </a>*/
/*                             <a data-toggle="tooltip" data-placement="top" title="Eliminar capítulo" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light"*/
/*                                 href="{{ path('dwes_libros_perfilhistoria', {'idLibro' : app.request.get('idLibro')}) }}">*/
/*                                 <i class="fa fa-remove mt-0"></i>*/
/*                             </a> #}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!--/Card image-->*/
/* */
/*                     <div class="px-4">*/
/*                         <div class="table-responsive">*/
/*                             <!--Tabla Capitulos-->*/
/*                              {% if  item.tipoLibro =="Gratis" %}*/
/*                             <table id="capitulos1" class="mdl-data-table col-lg-12 " style="width:100%">*/
/* */
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th> Capítulo</th>*/
/*                                         <th>Título </th>*/
/*                                         <th> Última actualización</th>*/
/*                                         <th> Estado de publicación</th>*/
/*                                         <th> Acción</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                 {% for item in infoCapitulo %} */
/*                                     <tr>*/
/*                                         <td>{{item.numCapitulo}}</td>*/
/*                                         <td>{{item.tituloCap}}</td>*/
/*                                         <td>{{item.actualizado}}</td>*/
/*                                         <td>*/
/*                                             <select class="mdb-select colorful-select dropdown-primary">*/
/*                                                 <option value="1">{{item.estado}}</option>*/
/*                                                 <option value="2"></option>*/
/*                                             </select>*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             <a data-toggle="tooltip" data-placement="top" title="Editar capítulo" class=" btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient mr-3 ml-4"*/
/*                                                 href="{{ path('dwes_libros_capitulo', {'idLibro' : app.request.get('idLibro'),'numCapitulo':item.numCapitulo}) }}">*/
/*                                                 <i class="fas fa-pencil-alt"></i>*/
/*                                             </a>*/
/*                                             <a data-toggle="tooltip" data-placement="top" title="Eliminar capítulo" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient "*/
/*                                                 href="{{ path('dwes_libros_eliminarCap', {'idLibro' : app.request.get('idLibro'),'numCapitulo':item.numCapitulo}) }}">*/
/*                                                 <i class="fa fa-remove mt-0"></i>*/
/*                                             </a>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                             <!--./ Tabla Capitulos TODO:-->*/
/*                         <!--Tabla Capitulos-->*/
/*                         {% else %}*/
/*                             <table id="capitulos1" class="mdl-data-table col-lg-12 " style="width:100%">*/
/* */
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th> Página</th>*/
/*                                         <th>Enlace </th>*/
/*                                         <th> Acción</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                 {% for item in enlaces %}*/
/*                                     <tr>*/
/*                                         <td>{{item.paginaLibro}}</td>*/
/*                                         <td> <a target="_blank" href="{{item.enlaceLibro}}">{{item.enlaceLibro}}</a></td>*/
/*                                      */
/*                                         <td>*/
/*                                             <a href="" data-toggle="modal" data-target="#{{item.idEnlace}}">*/
/* */
/*                                             <span data-toggle="tooltip" data-placement="top" title="" class=" btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient mr-3 ml-4"*/
/*                                                 href="#" data-original-title="Editar enlace">*/
/*                                                 <i class="fas fa-pencil-alt"></i>*/
/*                                             </span>*/
/*                                         </a>    */
/*                                             <a  href="{{ path('dwes_libros_eliminarEnlace', {'idLibro' : app.request.get('idLibro'),'idEnlace':item.idEnlace}) }}" data-toggle="tooltip" data-placement="top" title="Eliminar enlace" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient "*/
/*                                               >*/
/*                                                 <i class="fa fa-remove mt-0"></i>*/
/*                                             </a>*/
/*                                         </td>*/
/*                                     </tr>*/
/* */
/*                                     <!--Modal : Añdir enlace -->*/
/* <div class="modal fade" id="{{item.idEnlace}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">*/
/*         <!--Content-->*/
/*         <div class="modal-content">*/
/* */
/*             <!--Header-->*/
/*             <form name="formUpdatePerfil"  action="{{ path('dwes_libros_editarEnlace',{'idLibro' : app.request.get('idLibro'),'idEnlace':item.idEnlace} )}}"  method="POST" enctype="multipart/form-data" >*/
/*               <iframe name="frame" style="display: none"></iframe>*/
/*                */
/*                 <!--Body-->*/
/*                 <div class="modal-body text-center mb-1">*/
/*                     <div class="md-form ml-0 mr-0">*/
/*                         <input type="text" type="text" id="paginaLibro" class="form-control form-control-sm validate ml-0" name="paginaLibro" value="{{item.paginaLibro}}">*/
/*                         <label for="paginaLibro" class="ml-0">Página</label>*/
/*                     </div>*/
/*                     <div class="md-form ml-0 mr-0">*/
/*                         <input type="text" type="text" id="form29" class="form-control form-control-sm validate ml-0" name="enlaceLibro" value="{{item.enlaceLibro}}">*/
/*                         <label for="enlaceLibro" class="ml-0">Enlace</label>*/
/* */
/*                     </div>*/
/*                    */
/* */
/*                     <div class="text-center mt-4">*/
/*                         <button type="submit" class="btn btn-cyan mt-1">Actualizar</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>    */
/* */
/*         </div>*/
/*         <!--/.Content-->*/
/*     </div>*/
/* </div>*/
/* <!--Modal: Añadir enlace -->*/
/*                                    {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                             <!--Table-->*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <!--Bottom Table UI-->*/
/*                         <div class="d-flex justify-content-between">*/
/* */
/*                         </div>*/
/*                         <!--Bottom Table UI-->*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*             <!--Section: Table-->*/
/*         </div>*/
/*         <!--/.Card-->*/
/* */
/*     </section>*/
/*     <!--Section: Main panel-->*/
/*     */
/* </div>*/
/* <br>*/
/* {% endif %}*/
/*  {% endfor %} {% endblock %}*/
/* */
/* */
