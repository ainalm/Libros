<?php

/* DWESLibrosBundle:Default:historia.html.twig */
class __TwigTemplate_f31f8c3d143bd7d655154ec7397ea407fa64aaa466da5e9ed2ce14261556571f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:historia.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "<!-- Modal Video-->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Book Trailer : ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
            echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <iframe id=\"videof\" width=\"100%\" height=\"350\" src=\"\" frameborder=\"0\" allowfullscreen></iframe>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary cldose\" data-dismiss=\"modal\">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- /.Modal Video -->

<!-- Modal Capítulos-->
<div class=\"modal fade\" id=\"ModalCapitulos\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalCapitulosLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"ModalCapitulosLabel\">

                    ";
            // line 30
            if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Anuncio")) {
                echo " Enlnaces de compra de : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
                echo " ";
            } else {
                echo " Capítulos de : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
                echo " ";
            }
            // line 32
            echo "


                </h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">


                <table id=\"capitulos2\" class=\"mdl-data-table capitulos\" style=\"width:100%\">
                    <thead>
                        <tr>

                            ";
            // line 47
            if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Anuncio")) {
                // line 48
                echo "                            <th>Página de compra</th>
                            <th>Enlace</th>
                            ";
            } else {
                // line 51
                echo "                            <th>Nº Capítulo</th>
                            <th>Titulo</th>
                            ";
            }
            // line 54
            echo "

                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 59
            if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Anuncio")) {
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["enlaces"]) ? $context["enlaces"] : $this->getContext($context, "enlaces")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 60
                    echo "                        <tr>
                            <td class=\"tdl\">";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "paginaLibro", array()), "html", null, true);
                    echo "</td>
                            <td class=\"tdl\">
                                <a target=\"_blank\" href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "enlaceLibro", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "enlaceLibro", array()), "html", null, true);
                    echo "</a>
                            </td>
                        </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo " ";
            } else {
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["capitulos"]) ? $context["capitulos"] : $this->getContext($context, "capitulos")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 67
                    echo "                        <tr>
                            <td class=\"tdl\">";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
                    echo "</td>
                            <td class=\"tdl\">";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tituloCap", array()), "html", null, true);
                    echo "</td>
                        </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo " ";
            }
            // line 72
            echo "                    </tbody>
                </table>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary cldose\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- /.Modal Capítulos -->

<!--Intro Section-->
<div class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Fondos/Fondo3.jpg"), "html", null, true);
            echo "'); margin-top: 27px;\">
    <div class=\"flex-center  \" style=\"       background-color: rgba(17, 27, 43, 0.7);\">
        <div class=\"container my-5 pt-5\">

            ";
            // line 94
            echo "            <div class=\"row\">

                <!--Grid column-->
                <div class=\"col-lg-3 col-md-12 mb-4\">

                    <!-- Section: Categories -->
                    <section class=\"section\">



                        <!--Card image TODO: Imagen libro view overlay  -->
                        <div class=\"view overlay\">
                            ";
            // line 106
            if ((isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto"))) {
                // line 107
                echo "                            <img src=\"data:image/jpeg;base64,";
                echo twig_escape_filter($this->env, (isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "html", null, true);
                echo "\" style=\"height:270px ; width:180px;\" class=\" mx-auto\" alt=\"sample image\"> ";
            } else {
                // line 108
                echo "                            <div class=\"  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "colorPortada", array()), "html", null, true);
                echo " \" style=\"height:270px;width:180px;\">
                                <div class=\" flex-center text-center\" alt=\"sample image\">
                                    <p>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
                echo "</p>
                                </div>
                                <a>
                                    <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                </a>
                            </div>
                            ";
            }
            // line 117
            echo "                        </div>
                        <!--/.Card image-->
                    </section>
                    <!-- Section: Categories -->

                </div>
                <!--Grid column-->

<!--Modal : Reportar -->
<div class=\"modal fade\" id=\"modalEnlace\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog cascading-modal modal-avatar modal-sm\" role=\"document\">
        <!--Content-->
        <div class=\"modal-content\">
            <!--Header-->
             <form name=\"formUpdatePerfil\"  action=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_avisar", array("idLibro" => $this->getAttribute($context["item"], "idLibro", array()), "admin" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "autor" => $this->getAttribute($context["item"], "username", array()), "tipo" => "libros")), "html", null, true);
            echo "\" 
             method=\"POST\" enctype=\"multipart/form-data\" >
              <iframe name=\"frame\" style=\"display: none\"></iframe>
               
                <!--Body-->
                <div class=\"modal-body text-center mb-1\">
                    <div class=\"md-form ml-0 mr-0\">
                         <textarea id=\"aviso\" rows=8 name=\"aviso\" class=\"form-control form-control-sm validate ml-0\">";
            // line 138
            echo twig_escape_filter($this->env, (isset($context["avisoText"]) ? $context["avisoText"] : $this->getContext($context, "avisoText")), "html", null, true);
            echo "</textarea>
                        <label for=\"aviso\" class=\"ml-0\">Mensaje al usuario:</label>
                    </div>
                    <div class=\"text-center mt-4\">
                        <button type=\"submit\" class=\"btn btn-cyan mt-1\">
                         ";
            // line 143
            if (((isset($context["avisado"]) ? $context["avisado"] : $this->getContext($context, "avisado")) != "")) {
                echo " 
                                         Actualizar
                                                ";
            }
            // line 146
            echo " 
                                                ";
            // line 147
            if (((isset($context["avisado"]) ? $context["avisado"] : $this->getContext($context, "avisado")) == "")) {
                // line 148
                echo "                                              Enviar
                                                ";
            }
            // line 149
            echo "         
                        </button>
                    </div>
                </div>
            </form>    

        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Reportar -->

                <!--Grid column-->
                <div class=\"col-lg-8 col-md-12 pb-lg-5 mb-4\">
                    <div class=\"mask rgba-white-light\">
                        <div class=\"dark-grey-text  pt-4 ml-3 pl-3\">
                        
                            <div>
                                <div style=\"float:right\">
                                      ";
            // line 168
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 169
                echo "                                        <!--Twitter FIXME: APARECE USUARIO AVISADO EN TODOS LO GENEROS-->
                                       ";
                // line 174
                echo "                                      ";
                // line 175
                echo "                                      
                                        <a href=\"\" data-toggle=\"modal\" data-target=\"#modalEnlace\">
                                            <span data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"\" class=\" btn-floating warning-color waves-effect waves-light\"
                                                href=\"#\" data-original-title=  
                                                   ";
                // line 179
                if (((isset($context["avisado"]) ? $context["avisado"] : $this->getContext($context, "avisado")) != "")) {
                    echo " 
                                         \"Ver aviso enviado\"
                                                ";
                }
                // line 182
                echo "
                                                ";
                // line 183
                if (((isset($context["avisado"]) ? $context["avisado"] : $this->getContext($context, "avisado")) == "")) {
                    // line 184
                    echo "                                              \"Enviar aviso\"
                                                ";
                }
                // line 186
                echo "
                                               >
                                                 ";
                // line 188
                if (((isset($context["avisado"]) ? $context["avisado"] : $this->getContext($context, "avisado")) == "")) {
                    echo " 
                                          <i class=\"fas fa-eye\"></i>
                                                ";
                }
                // line 191
                echo "
                                                ";
                // line 192
                if (((isset($context["avisado"]) ? $context["avisado"] : $this->getContext($context, "avisado")) != "")) {
                    // line 193
                    echo "                                                <i class=\"fas fa-exclamation-triangle\"></i>
                                                ";
                }
                // line 195
                echo "                                            </span>
                                        </a>
                                      ";
                // line 198
                echo "                                        <!--Google -->
                                        <a type=\"button\"  href=\"";
                // line 199
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_eliminarLib", array("idLibro" => $this->getAttribute($context["item"], "idLibro", array()))), "html", null, true);
                echo "\"  data-toggle=\"tooltip\" data-placement=\"bottom\"
                                         title=\"Eliminar historia\" class=\"btn-floating btn-gplus waves-effect waves-light\"> <i class=\"fa fa-remove mt-0\"></i></a>
                                     ";
            }
            // line 202
            echo "                                    </div>
                                    <span class=\"badge badge-danger\">";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo "</span>
                                <h2 class=\"card-title font-weight-bold pt-2  \" style=\"color:  black;\">
                                    <strong>";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
            echo "</strong>
                                  

                                    ";
            // line 208
            if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Anuncio")) {
                // line 209
                echo "                                    <span class=\"badge blue\">En venta</span>

                                    ";
            }
            // line 212
            echo "                                </h2>
                                <div class=\"col-12\">
                                    <p style=\"min-height: 120px;color:  black;\">";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descLib", array()), "html", null, true);
            echo " </p>
                                </div>
                                <!-- Button  modal -->
                                <button type=\"button\" class=\"btn btn-danger btn-sm btn-rounded clearfix  d-md-inline-block waves-effect waves-light video videoff\"
                                    data-video=\"https://www.youtube.com/embed/8uYspagia_s?rel=0&showinfo=0\" data-toggle=\"modal\"
                                    data-target=\"#exampleModal\">
                                    <i class=\"fab fa-youtube mr-1\"></i> Book Trailer
                                </button>
                                    
                            </div>

                        </div>
                    </div>
                </div>
                <!--Grid column-->

            </div>
        </div>
    </div>
</div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo " ";
    }

    public function block_contenido($context, array $blocks = array())
    {
        echo " ";
        // line 246
        echo "


<div class=\"container-fluid pl-0 pr-0 container1\" style=\"background-color: #f4f5f6;\">

    <!--Grid column-->
    <div class=\"col-lg-12 col-md-12 mb-12 pl-0 pr-0\">
        <nav class=\"navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav indigo-text\">
            <!-- SideNav slide-out button -->

            <!-- Breadcrumb-->
            <div class=\"\">
                ";
        // line 261
        echo "                <div>
                    <a id=\"addBiblio\" href=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_addbiblioteca", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
        echo "\" class=\"guardarScroll\"></a>


                    <a id=\"delBiblio\" href=\"";
        // line 265
        echo $this->env->getExtension('routing')->getPath("dwes_libros_ajustes");
        echo "\" class=\"guardarScroll\"></a>
                </div>
                <button type=\"button\" class=\"btn purple-gradient btn-sm gcapitulo \" data-toggle=\"modal\" data-target=\"#ModalCapitulos\">
                    <i class=\"fab fa-readme mr-2\"></i>


                    ";
        // line 271
        if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Anuncio")) {
            // line 272
            echo "                    <span>";
            echo twig_escape_filter($this->env, (isset($context["countEnlaces"]) ? $context["countEnlaces"] : $this->getContext($context, "countEnlaces")), "html", null, true);
            echo "</span> Enlaces ";
        } else {
            // line 273
            echo "                    <span>";
            echo twig_escape_filter($this->env, (isset($context["numCap"]) ? $context["numCap"] : $this->getContext($context, "numCap")), "html", null, true);
            echo "</span> Capítulos ";
        }
        // line 274
        echo "                </button>
                ";
        // line 277
        echo "
                <span class=\"green-text font-weight-bold pr-2 small\">";
        // line 278
        echo twig_escape_filter($this->env, (isset($context["progreso"]) ? $context["progreso"] : $this->getContext($context, "progreso")), "html", null, true);
        echo "</span>
                ";
        // line 281
        echo " ";
        if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Gratis")) {
            // line 282
            echo "                    <span class=\"text-dark  pr-2 cl\" id=\"enbiblioteca\">
                        ";
            // line 283
            if ((isset($context["lista"]) ? $context["lista"] : $this->getContext($context, "lista"))) {
                // line 284
                echo "                        <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>
                        <a href=\"";
                // line 285
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_delbiblioteca", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">Eliminar de mi lista</a>
                        ";
            } else {
                // line 287
                echo "                        <i class=\"fas fa-plus mr-1 font-weight-bold deselect bibIco \"></i>
                        <a href=\"";
                // line 288
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_addbiblioteca", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">
                            Añadir a mi lista</a>

                        ";
            }
            // line 292
            echo "                    </span>

                    <span class=\"text-dark   pr-2 cl\" id=\"enfavoritos\">
                        ";
            // line 295
            if ((isset($context["favorito"]) ? $context["favorito"] : $this->getContext($context, "favorito"))) {
                // line 296
                echo "                        <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>
                        <a href=\"";
                // line 297
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_delfavoritos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">
                            Eliminar de favoritos</a>
                        ";
            } else {
                // line 300
                echo "                        <i class=\"fas fa-plus mr-1 font-weight-bold deselect bibIco \"></i>
                        <a href=\"";
                // line 301
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_addfavoritos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">
                            Añadir a favoritos</a>

                        ";
            }
            // line 305
            echo "                    </span>
                    <span class=\"text-dark   pr-2 cl\">

                        <i class='fas fa-download'></i>
                        <a class=\"text-dark cl guardarScroll\">
                        </a>

                        <a href=\"javascript:pruebaDivAPdf()\" class=\"button text-dark cl\"> Descargar PDF</a>

                    </span>
                    ";
        }
        // line 315
        echo " ";
        if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Anuncio")) {
            // line 316
            echo "                    <span class=\"text-dark   pr-2 cl\">
                        ";
            // line 317
            if ((isset($context["deseo"]) ? $context["deseo"] : $this->getContext($context, "deseo"))) {
                // line 318
                echo "                        <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>
                        <a href=\"";
                // line 319
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_deldeseos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">
                            En lista de deseos</a>
                        ";
            } else {
                // line 322
                echo "

                        <i class=\"fas fa-plus mr-1 font-weight-bold deselect bibIco \"></i>
                        <a href=\"";
                // line 325
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_adddeseos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">
                            Añadir a lista de deseos</a>
                        ";
            }
            // line 328
            echo "                    </span>

                    ";
        }
        // line 331
        echo "            </div>
            <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">

                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Pantalla blanca\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/sun-selec.png"), "html", null, true);
        echo "\" id=\"blanca\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Pantalla sefia\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/sunset.png"), "html", null, true);
        echo "\" id=\"sefia\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Pantalla negra\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/moon.png"), "html", null, true);
        echo "\" id=\"negra\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Aumentar letra\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/font+.png"), "html", null, true);
        echo "\" id=\"letraUp\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Desminuir letra\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/font-.png"), "html", null, true);
        echo "\" id=\"letraDown\"> </img>
                        </i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!--Grid column-->

    <div class=\"container card mt-1 mb-5 px-0 py-0 container2\">

        <div class=\"card-body\">


            <div>
                ";
        // line 380
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enlaces"]) ? $context["enlaces"] : $this->getContext($context, "enlaces")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 381
            echo "                <div id=\"accordion\" class=\"mt-1\">
                    <div class=\"card\">
                        <div class=\"card-header\" id=\"heading";
            // line 383
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idEnlace", array()), "html", null, true);
            echo "\">
                            <h5 class=\"mb-0\">
                                <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse";
            // line 385
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idEnlace", array()), "html", null, true);
            echo "\" aria-expanded=\"false\"
                                    aria-controls=\"collapseExample\">
                                    Enlace de compra
                                </button>
                            </h5>
                        </div>

                        <div id=\"collapse";
            // line 392
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idEnlace", array()), "html", null, true);
            echo "\" class=\"collapse\" aria-labelledby=\"heading";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idEnlace", array()), "html", null, true);
            echo "\" data-parent=\"#accordion\">
                            <div class=\"card-body bigtext text-center\">
                                ";
            // line 395
            echo "
                                <a target=\"_blank\" href=\" ";
            // line 396
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "enlaceLibro", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "paginaLibro", array()), "html", null, true);
            echo "</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        echo " ";
        if (( !(isset($context["capitulos"]) ? $context["capitulos"] : $this->getContext($context, "capitulos")) && ((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) != "Anuncio"))) {
            // line 403
            echo "

            <!--Panel FIXME: -->
            <div class=\"col-12 text-center\">
                <h3 class=\"card-title\">¡UPS...! Esto parece vacío</h3>
                <p class=\"card-text\"> Sé paciente. </p>
            </div>
            <!--/.Panel-->

            ";
        }
        // line 412
        echo " ";
        if (( !(isset($context["enlaces"]) ? $context["enlaces"] : $this->getContext($context, "enlaces")) && ((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Anuncio"))) {
            // line 413
            echo "

            <!--Panel FIXME: -->
            <div class=\"col-12 text-center\">
                <h3 class=\"card-title\">¡UPS...! Esto parece vacío </h3>
                <p class=\"card-text\"> Sé paciente. </p>
            </div>
            <!--/.Panel-->
            ";
        }
        // line 422
        echo "            <div id=\"imprimir\" style=\"display:  none;\">
                ";
        // line 423
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["capitulos"]) ? $context["capitulos"] : $this->getContext($context, "capitulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 424
            echo "
                <h4 class=\"card-title\">
                    <span class=\"indigo-text pr-2 small\"> Capítulo ";
            // line 426
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo ":</span>

                    <strong class=\"font-weight-bold indigo-text \">";
            // line 428
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tituloCap", array()), "html", null, true);
            echo "</strong>
                </h4>
                <hr>

                <p class=\"card-text\" style=\"    \">";
            // line 432
            echo $this->getAttribute($context["item"], "contenidoCap", array());
            echo "
                </p>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 436
        echo "            </div>
            ";
        // line 437
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["capitulos"]) ? $context["capitulos"] : $this->getContext($context, "capitulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " ";
            // line 438
            echo "
            <div id=\"accordion\" class=\"mt-1\">
                <div class=\"card\">
                    <div class=\"card-header\" id=\"heading";
            // line 441
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "\">
                        <h5 class=\"mb-0\">
                            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse";
            // line 443
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "\" aria-expanded=\"false\"
                                aria-controls=\"collapseExample\">
                                #";
            // line 445
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tituloCap", array()), "html", null, true);
            echo "
                            </button>
                        </h5>
                    </div>

                    <div id=\"collapse";
            // line 450
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "\" class=\"collapse\" aria-labelledby=\"heading";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "\" data-parent=\"#accordion\">
                        <div class=\"card-body bigtext\">
                            ";
            // line 452
            echo " ";
            // line 453
            echo "                            <div class=\"fuente\">";
            echo $this->getAttribute($context["item"], "contenidoCap", array());
            echo "</div>
                            <!-- Comentarios capitulo -->
                            <!--Main wrapper-->
                            <div class=\"section-heading h3 text-center\">
                                <a data-toggle=\"collapse\" href=\"#comentariosss";
            // line 457
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                                    ";
            // line 458
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                echo " Deja un comentario ";
            } elseif ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                echo " Inicia sesión o Regístrate para comentar ";
            }
            // line 459
            echo "                                </a>
                            </div>
                            <div id=\"comentariosss";
            // line 461
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" class=\"collapse\">
                                <div class=\"comments-list text-center text-md-left mb-5\">
                                    ";
            // line 463
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                // line 464
                echo "                                    <!--Section: Leave a reply (Logged In User)-->
                                    <section class=\"mb-4 mt-4\">

                                        <!--Leave a reply form-->
                                        <div class=\"reply-form\">

                                            <!--Third row-->
                                            <div>
                                                <div class=\"row\">
                                                    <!--Image column-->
                                                    <div class=\"col-sm-2 col-12\">

                                                        ";
                // line 476
                if ((isset($context["fUser"]) ? $context["fUser"] : $this->getContext($context, "fUser"))) {
                    // line 477
                    echo "                                                        <img src=\"data:image/jpeg;base64,";
                    echo twig_escape_filter($this->env, (isset($context["fUser"]) ? $context["fUser"] : $this->getContext($context, "fUser")), "html", null, true);
                    echo "\" class=\" img-fluid avatar rounded-circle z-depth-2\"> ";
                } else {
                    // line 478
                    echo "                                                        <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg\" alt=\"Sample avatar image\" class=\"\"> ";
                }
                // line 479
                echo "                                                    </div>
                                                    <!--/.Image column-->

                                                    <!--Content column-->
                                                    <div class=\"col-sm-10 col-12\">
                                                        <!--Grid row-->
                                                        <form name=\"formUpdatePerfil\" action=\"";
                // line 485
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_comentarCapitulo", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"), "numCap" => $this->getAttribute($context["item"], "numCapitulo", array()))), "html", null, true);
                echo "\"
                                                            method=\"POST\" enctype=\"multipart/form-data\">

                                                            <div class=\"row\">

                                                                <div class=\"col-12 mt-1\">
                                                                    <div class=\"form-group basic-textarea rounded-corners shadow-textarea\">

                                                                        <textarea class=\"form-control\" id=\"exampleFormControlTextarea6\" rows=\"5\" placeholder=\"Tu comentario...\" name=\"comentarioCap\"
                                                                            value=";
                // line 494
                echo twig_escape_filter($this->env, (isset($context["comentarioCap"]) ? $context["comentarioCap"] : $this->getContext($context, "comentarioCap")), "html", null, true);
                echo "></textarea>
                                                                    </div>

                                                                    <div class=\"text-right\">
                                                                        <button type=\"submit\" class=\"btn btn-primary btn-sm guardarScroll\">Comentar</button>
                                                                    </div>

                                                                </div>
                                                        </form>
                                                        </div>
                                                        <!--Grid row-->

                                                    </div>

                                                </div>
                                                <!--/.Leave a reply form-->

                                    </section>
                                    <!--/Section: Leave a reply (Logged In User)-->
                                    ";
            }
            // line 514
            echo "                                    <div class=\"text-center mb-4\">

                                        <h3>
                                            <a data-toggle=\"collapse\" href=\"#comentarios";
            // line 517
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                                                Comentarios ";
            // line 519
            echo "                                                <span class=\"badge blue\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["comentariosCap"]) ? $context["comentariosCap"] : $this->getContext($context, "comentariosCap")), ($this->getAttribute($context["item"], "numCapitulo", array()) - 1), array(), "array")), "html", null, true);
            echo "</span>
                                            </a>

                                        </h3>
                                    </div>
                                    <!--Comment row-->
                                    <div id=\"comentarios";
            // line 525
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" class=\"collapse\">

                                        ";
            // line 527
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["comentariosCap"]) ? $context["comentariosCap"] : $this->getContext($context, "comentariosCap")), ($this->getAttribute($context["item"], "numCapitulo", array()) - 1), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 528
                echo "                                        <div class=\"row mb-4\">
                                            <!--Image column-->
                                            <div class=\"col-sm-2 col-12 mb-md-0 mb-3\">
                                                <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg\" class=\"avatar rounded-circle z-depth-1-half\">
                                            </div>
                                            <!--/.Image column-->
                                            <!--Content column-->
                                            <div class=\"col-sm-10 col-12\">
                                                <a>
                                                    ";
                // line 537
                if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                    // line 538
                    echo "                                                    <h4 class=\"font-weight-bold\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "apellidos", array()), "html", null, true);
                    echo " ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($context["item"], "username", array()))) {
                        // line 540
                        echo "                                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_delComentarioCap", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"), "numCapitulo" => $this->getAttribute($context["item"], "numCapitulo", array()), "username" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "comentario" => $this->getAttribute($context["item"], "comentario", array()))), "html", null, true);
                        echo "\"
                                                            onclick=\"return confirm('¿Estás seguro de eliminar este comentario?')\"
                                                            data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Eliminar comentario\"
                                                            class=\"guardarScroll btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient \"
                                                            href=\"\">
                                                            <i class=\"fa fa-remove mt-0\"></i>
                                                        </a>
                                                        ";
                    }
                    // line 548
                    echo "                                                    </h4>
                                                    ";
                }
                // line 550
                echo "                                                </a>

                                                <div class=\"mt-2\">
                                                    <ul class=\"list-unstyled\">
                                                        <li class=\"comment-date\">
                                                            <i class=\"fa fa-clock-o\"></i> ";
                // line 555
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fecha", array()), "html", null, true);
                echo "</li>
                                                    </ul>
                                                </div>
                                                <p class=\"grey-text\">";
                // line 558
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "comentario", array()), "html", null, true);
                echo "</p>
                                            </div>
                                            <!--/.Content column-->
                                        </div>

                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 564
            echo "
                                    </div>
                                    <!--/.Comment row-->

                                    </div>
                                    <!--/.Main wrapper-->
                                    <!-- /. Comentarios capitulo -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 578
        echo "                </div>
            </div>

        </div>

        <!-- Autor -->

        <!-- ./ Autor -->



    
    <!-- Autor -->
    <div class=\"container card mt-1 mb-5 px-0 py-0\">
        <section class=\"text-center text-md-left\">
            <div class=\"card card-body perfil\">

                <div class=\"row\">
                    <!--Avatar-->
                    <div class=\"col-12 col-sm-2 mb-md-0 mb-3\">


                        ";
        // line 600
        if ((isset($context["fotoAutor"]) ? $context["fotoAutor"] : $this->getContext($context, "fotoAutor"))) {
            // line 601
            echo "                        <img src=\"data:image/jpeg;base64,";
            echo twig_escape_filter($this->env, (isset($context["fotoAutor"]) ? $context["fotoAutor"] : $this->getContext($context, "fotoAutor")), "html", null, true);
            echo "\" class=\" img-fluid rounded-circle\" alt=\"sample image\"> ";
        } else {
            // line 602
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Otros/profile.png"), "html", null, true);
            echo "\" class=\"img-fluid rounded-circle\" alt=\"sample image\"> ";
        }
        // line 603
        echo "                    </div>
                    <!--Author Data-->
                    <div class=\"col-12 col-sm-10\">
                        ";
        // line 606
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["autor"]) ? $context["autor"] : $this->getContext($context, "autor")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 607
            echo "                        <p>
                            <strong>";
            // line 608
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "apellidos", array()), "html", null, true);
            echo "</strong>
                        </p>

                        <div class=\"personal-sm\">
                            <a href=\"";
            // line 612
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_perfil", array("username" => $this->getAttribute($context["item"], "username", array()))), "html", null, true);
            echo "\" class=\"pr-2 fb-ic\">
                                Ver perfil
                            </a>

                        </div>


                        <p class=\"dark-grey-text article\">";
            // line 619
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "biografia", array()), "html", null, true);
            echo "
                        </p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 622
        echo "                    </div>
                </div>
            </div>
        </section>
        <!-- ./Autor -->

    </div>
    <!-- Te puede gustar -->
    <div class=\"container  mt-1 mb-5 px-0 py-0\">
        <section class=\"text-left mt-4\">

            <h5 class=\"font-weight-bold mt-5\">
                <strong>YOU MIGHT ALSO LIKE</strong>
            </h5>
            <hr class=\"red title-hr\">

            <!--Carousel Wrapper-->
            <div id=\"multi-item-example\" class=\"carousel slide carousel-multi-item\" data-ride=\"carousel\">

                <!--Indicators-->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#multi-item-example\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#multi-item-example\" data-slide-to=\"1\" class=\"\"></li>
                    <li data-target=\"#multi-item-example\" data-slide-to=\"2\" class=\"\"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class=\"carousel-inner\" role=\"listbox\">

                    <!--First slide-->
                    <div class=\"carousel-item active\">

                        <!--Grid row-->
                        <div class=\"row mb-4\">

                            <!--Grid column-->
                            <div class=\"col-lg-4 my-3\">
                                <!--Card-->
                                <div class=\"card\">

                                    <!--Card image-->
                                    <div class=\"view overlay\">
                                        <img src=\"http://mdbootstrap.com/img/Photos/Others/img (43).jpg\" class=\"card-img-top\" alt=\"sample image\">
                                        <a>
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class=\"card-body\">
                                        <!--Title-->
                                        <h4 class=\"card-title\">
                                            <strong>Card title</strong>
                                        </h4>
                                        <hr>

                                        <p></p>
                                        <p class=\"font-small font-weight-bold dark-grey-text mb-1\">
                                            <i class=\"fa fa-clock-o\"></i> 27/08/2017</p>
                                        <p class=\"font-small grey-text mb-0\">Anna Smith</p>
                                        <p class=\"text-right mb-0 font-small font-weight-bold\">
                                            <a>read more
                                                <i class=\"fa fa-angle-right\"></i>
                                            </a>
                                        </p>
                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class=\"col-lg-4 text-left mt-3\">

                                <!--Card-->
                                <div class=\"card\">

                                    <!--Card image-->
                                    <div class=\"view overlay\">
                                        <img src=\"http://mdbootstrap.com/img/Photos/Others/img (39).jpg\" class=\"card-img-top\" alt=\"sample image\">
                                        <a>
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class=\"card-body\">
                                        <!--Title-->
                                        <h4 class=\"card-title\">
                                            <strong>Card title</strong>
                                        </h4>
                                        <hr>

                                        <p class=\"font-small font-weight-bold dark-grey-text mb-1\">
                                            <i class=\"fa fa-clock-o\"></i> 27/08/2017</p>
                                        <p class=\"font-small grey-text mb-0\">Anna Smith</p>
                                        <p class=\"text-right mb-0 font-small font-weight-bold\">
                                            <a>read more
                                                <i class=\"fa fa-angle-right\"></i>
                                            </a>
                                        </p>
                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class=\"col-lg-4 text-left mt-3\">

                                <!--Card-->
                                <div class=\"card\">

                                    <!--Card image-->
                                    <div class=\"view overlay\">
                                        <img src=\"http://mdbootstrap.com/img/Photos/Others/img (46).jpg\" class=\"card-img-top\" alt=\"sample image\">
                                        <a>
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class=\"card-body\">
                                        <!--Title-->
                                        <h4 class=\"card-title\">
                                            <strong>Card title</strong>
                                        </h4>
                                        <hr>

                                        <p class=\"font-small font-weight-bold dark-grey-text mb-1\">
                                            <i class=\"fa fa-clock-o\"></i> 27/08/2017</p>
                                        <p class=\"font-small grey-text mb-0\">Anna Smith</p>
                                        <p class=\"text-right mb-0 font-small font-weight-bold\">
                                            <a>read more
                                                <i class=\"fa fa-angle-right\"></i>
                                            </a>
                                        </p>
                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--/Grid row-->

                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class=\"carousel-item\">

                        <!--Grid row-->
                        <div class=\"row mb-4\">

                            <!--Grid column-->
                            <div class=\"col-lg-4 my-3\">
                                <!--Card-->
                                <div class=\"card\">

                                    <!--Card image-->
                                    <div class=\"view overlay\">
                                        <img src=\"http://mdbootstrap.com/img/Photos/Others/img (40).jpg\" class=\"card-img-top\" alt=\"sample image\">
                                        <a>
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class=\"card-body\">
                                        <!--Title-->
                                        <h4 class=\"card-title\">
                                            <strong>Card title</strong>
                                        </h4>
                                        <hr>

                                        <p></p>
                                        <p class=\"font-small font-weight-bold dark-grey-text mb-1\">
                                            <i class=\"fa fa-clock-o\"></i> 27/08/2017</p>
                                        <p class=\"font-small grey-text mb-0\">Anna Smith</p>
                                        <p class=\"text-right mb-0 font-small font-weight-bold\">
                                            <a>read more
                                                <i class=\"fa fa-angle-right\"></i>
                                            </a>
                                        </p>
                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class=\"col-lg-4 text-left mt-3\">

                                <!--Card-->
                                <div class=\"card\">

                                    <!--Card image-->
                                    <div class=\"view overlay\">
                                        <img src=\"http://mdbootstrap.com/img/Photos/Others/img (45).jpg\" class=\"card-img-top\" alt=\"sample image\">
                                        <a>
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class=\"card-body\">
                                        <!--Title-->
                                        <h4 class=\"card-title\">
                                            <strong>Card title</strong>
                                        </h4>
                                        <hr>

                                        <p class=\"font-small font-weight-bold dark-grey-text mb-1\">
                                            <i class=\"fa fa-clock-o\"></i> 27/08/2017</p>
                                        <p class=\"font-small grey-text mb-0\">Anna Smith</p>
                                        <p class=\"text-right mb-0 font-small font-weight-bold\">
                                            <a>read more
                                                <i class=\"fa fa-angle-right\"></i>
                                            </a>
                                        </p>
                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class=\"col-lg-4 text-left mt-3\">

                                <!--Card-->
                                <div class=\"card\">

                                    <!--Card image-->
                                    <div class=\"view overlay\">
                                        <img src=\"http://mdbootstrap.com/img/Photos/Others/img (35).jpg\" class=\"card-img-top\" alt=\"sample image\">
                                        <a>
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class=\"card-body\">
                                        <!--Title-->
                                        <h4 class=\"card-title\">
                                            <strong>Card title</strong>
                                        </h4>
                                        <hr>

                                        <p class=\"font-small font-weight-bold dark-grey-text mb-1\">
                                            <i class=\"fa fa-clock-o\"></i> 27/08/2017</p>
                                        <p class=\"font-small grey-text mb-0\">Anna Smith</p>
                                        <p class=\"text-right mb-0 font-small font-weight-bold\">
                                            <a>read more
                                                <i class=\"fa fa-angle-right\"></i>
                                            </a>
                                        </p>
                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/.Second slide-->

                    <!--Third slide-->
                    <div class=\"carousel-item\">

                        <!--Grid row-->
                        <div class=\"row mb-4\">

                            <!--Grid column-->
                            <div class=\"col-lg-4 my-3\">
                                <!--Card-->
                                <div class=\"card\">

                                    <!--Card image-->
                                    <div class=\"view overlay\">
                                        <img src=\"http://mdbootstrap.com/img/Photos/Others/img (30).jpg\" class=\"card-img-top\" alt=\"sample image\">
                                        <a>
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class=\"card-body\">
                                        <!--Title-->
                                        <h4 class=\"card-title\">
                                            <strong>Card title</strong>
                                        </h4>
                                        <hr>

                                        <p></p>
                                        <p class=\"font-small font-weight-bold dark-grey-text mb-1\">
                                            <i class=\"fa fa-clock-o\"></i> 27/08/2017</p>
                                        <p class=\"font-small grey-text mb-0\">Anna Smith</p>
                                        <p class=\"text-right mb-0 font-small font-weight-bold\">
                                            <a>read more
                                                <i class=\"fa fa-angle-right\"></i>
                                            </a>
                                        </p>
                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class=\"col-lg-4 text-left mt-3\">

                                <!--Card-->
                                <div class=\"card\">

                                    <!--Card image-->
                                    <div class=\"view overlay\">
                                        <img src=\"http://mdbootstrap.com/img/Photos/Others/img (28).jpg\" class=\"card-img-top\" alt=\"sample image\">
                                        <a>
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class=\"card-body\">
                                        <!--Title-->
                                        <h4 class=\"card-title\">
                                            <strong>Card title</strong>
                                        </h4>
                                        <hr>

                                        <p class=\"font-small font-weight-bold dark-grey-text mb-1\">
                                            <i class=\"fa fa-clock-o\"></i> 27/08/2017</p>
                                        <p class=\"font-small grey-text mb-0\">Anna Smith</p>
                                        <p class=\"text-right mb-0 font-small font-weight-bold\">
                                            <a>read more
                                                <i class=\"fa fa-angle-right\"></i>
                                            </a>
                                        </p>
                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class=\"col-lg-4 text-left mt-3\">

                                <!--Card-->
                                <div class=\"card\">

                                    <!--Card image-->
                                    <div class=\"view overlay\">
                                        <img src=\"http://mdbootstrap.com/img/Photos/Others/img (33).jpg\" class=\"card-img-top\" alt=\"sample image\">
                                        <a>
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class=\"card-body\">
                                        <!--Title-->
                                        <h4 class=\"card-title\">
                                            <strong>Card title</strong>
                                        </h4>
                                        <hr>

                                        <p class=\"font-small font-weight-bold dark-grey-text mb-1\">
                                            <i class=\"fa fa-clock-o\"></i> 27/08/2017</p>
                                        <p class=\"font-small grey-text mb-0\">Anna Smith</p>
                                        <p class=\"text-right mb-0 font-small font-weight-bold\">
                                            <a>read more
                                                <i class=\"fa fa-angle-right\"></i>
                                            </a>
                                        </p>
                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/.Third slide-->

                </div>
                <!--/.Slides-->

            </div>
            <!--/.Carousel Wrapper-->

        </section>


    </div>
    <!-- ./ Te puede gustar -->

    <!-- Comntarios -->
    <div class=\"container  mt-1 mb-5 px-0 py-0\">

        <!--Main wrapper-->
        ";
        // line 1055
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 1056
            echo "        <h3 class=\"section-heading h3 \">Deja un comentario </h3>
        ";
        } elseif ( !$this->getAttribute(        // line 1057
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 1058
            echo "        <h3 class=\"section-heading h3 \">Inicia sesión o Regístrate para comentar</h3>
        ";
        }
        // line 1060
        echo "

        <div class=\"comments-list text-center text-md-left mb-5\">
            ";
        // line 1063
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 1064
            echo "            <!--Section: Leave a reply (Logged In User)-->
            <section class=\"mb-4 mt-4\">

                <!--Leave a reply form-->
                <div class=\"reply-form\">

                    <!--Third row-->
                    <div class=\"row\">
                        <!--Image column-->
                        <div class=\"col-sm-2 col-12\">

                            ";
            // line 1075
            if ((isset($context["fUser"]) ? $context["fUser"] : $this->getContext($context, "fUser"))) {
                // line 1076
                echo "                            <img src=\"data:image/jpeg;base64,";
                echo twig_escape_filter($this->env, (isset($context["fUser"]) ? $context["fUser"] : $this->getContext($context, "fUser")), "html", null, true);
                echo "\" class=\" img-fluid avatar rounded-circle z-depth-2\"> ";
            } else {
                // line 1077
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Otros/idea.png"), "html", null, true);
                echo "\" alt=\"Sample avatar image\" class=\" img-fluid avatar rounded-circle z-depth-2\"> ";
            }
            // line 1078
            echo "                        </div>
                        <!--/.Image column-->

                        <!--Content column-->
                        <div class=\"col-sm-10 col-12\">
                            <!--Grid row-->
                            <form name=\"formUpdatePerfil\" action=\"";
            // line 1084
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_comentarLibro", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
            echo "\" method=\"POST\"
                                enctype=\"multipart/form-data\">

                                <div class=\"row\">

                                    <div class=\"col-12 mt-1\">
                                        <div class=\"form-group basic-textarea rounded-corners shadow-textarea\">

                                            <textarea class=\"form-control\" id=\"exampleFormControlTextarea6\" rows=\"5\" placeholder=\"Tu comentario...\" name=\"comentario\"
                                                value=";
            // line 1093
            echo twig_escape_filter($this->env, (isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "html", null, true);
            echo "></textarea>
                                        </div>

                                        <div class=\"text-right\">
                                            <button type=\"submit\" class=\"btn btn-primary btn-sm guardarScroll\">Comentar</button>
                                        </div>

                                    </div>
                            </form>
                            </div>
                            <!--Grid row-->

                        </div>

                    </div>
                    <!--/.Leave a reply form-->

            </section>
            <!--/Section: Leave a reply (Logged In User)-->
            ";
        }
        // line 1113
        echo "            <div class=\"text-center mb-4\">
                <h3>
                    <a data-toggle=\"collapse\" href=\"#comentarios\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                        Comentarios
                        <span class=\"badge blue\">";
        // line 1117
        echo twig_escape_filter($this->env, (isset($context["cComent"]) ? $context["cComent"] : $this->getContext($context, "cComent")), "html", null, true);
        echo "</span>
                    </a>

                </h3>
            </div>
            <!--Comment row-->
            <div id=\"comentarios\" class=\"collapse\">
                ";
        // line 1124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comentarios"]) ? $context["comentarios"] : $this->getContext($context, "comentarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1125
            echo "                <div class=\"row mb-4\">
                    <!--Image column-->
                    <div class=\"col-sm-2 col-12 mb-md-0 mb-3\">
                        ";
            // line 1128
            if ($this->getAttribute($context["item"], "fotoPerfil", array())) {
                // line 1129
                echo "                        <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg\" class=\"avatar rounded-circle z-depth-1-half\"> ";
            } else {
                // line 1130
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Otros/idea.png"), "html", null, true);
                echo "\" class=\" avatar rounded-circle z-depth-1-half\"> ";
            }
            // line 1131
            echo "                    </div>
                    <!--/.Image column-->
                    <!--Content column-->
                    <div class=\"col-sm-10 col-12\">
                        <a>
                            <h4 class=\"font-weight-bold\">";
            // line 1136
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "apellidos", array()), "html", null, true);
            echo " 
                             ";
            // line 1137
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                // line 1138
                echo " ";
                // line 1140
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($context["item"], "username", array()))) {
                    // line 1141
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_delComentarioLib", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"), "username" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "comentario" => $this->getAttribute($context["item"], "comentario", array()))), "html", null, true);
                    echo "\"
                                    onclick=\"return confirm('¿Estás seguro de eliminar este comentario?')\" data-toggle=\"tooltip\"
                                    data-placement=\"bottom\" title=\"Eliminar comentario\" class=\"guardarScroll btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient \"
                                    href=\"\">
                                    <i class=\"fa fa-remove mt-0\"></i>
                                </a>
                                ";
                }
                // line 1148
                echo "                             ";
            }
            // line 1149
            echo "                           
                            </h4>
                        </a>
                        <div class=\"mt-2\">
                            <ul class=\"list-unstyled\">
                                <li class=\"comment-date\">
                                    <i class=\"fa fa-clock-o\"></i> ";
            // line 1155
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fecha", array()), "html", null, true);
            echo "</li>
                            </ul>
                        </div>
                        <p class=\"grey-text\">";
            // line 1158
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "comentario", array()), "html", null, true);
            echo "</p>
                    </div>
                    <!--/.Content column-->
                </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1164
        echo "            </div>
            <!--/.Comment row-->

            </div>
            <!--/.Main wrapper-->

        </div>
        <!-- ./Comentarios -->
    </div>
</div> 
    <script type=\"text/javascript\" src=\"http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b16754fa71e965a\"></script>

    <script>
         function pruebaDivAPdf() {
                var pdf = new jsPDF('p', 'pt', 'letter');
                source = \$('#imprimir')[0];

                specialElementHandlers = {
                    '#imprimir': function (element, renderer) {
                        return true
                    }
                };
                margins = {
                    top: 80,
                    bottom: 60,
                    left: 40,
                    width: 522
                };

                pdf.fromHTML(
                    source,
                    margins.left, // x coord
                    margins.top, { // y coord
                        'width': margins.width,
                        'elementHandlers': specialElementHandlers
                    },

                    function (dispose) {
                        pdf.save(";
        // line 1202
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"), "html", null, true);
        echo "+'.pdf');
                    }, margins
                );
            }
    </script>

    ";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:historia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1720 => 1202,  1680 => 1164,  1668 => 1158,  1662 => 1155,  1654 => 1149,  1651 => 1148,  1640 => 1141,  1638 => 1140,  1636 => 1138,  1634 => 1137,  1628 => 1136,  1621 => 1131,  1616 => 1130,  1613 => 1129,  1611 => 1128,  1606 => 1125,  1602 => 1124,  1592 => 1117,  1586 => 1113,  1563 => 1093,  1551 => 1084,  1543 => 1078,  1538 => 1077,  1533 => 1076,  1531 => 1075,  1518 => 1064,  1516 => 1063,  1511 => 1060,  1507 => 1058,  1505 => 1057,  1502 => 1056,  1500 => 1055,  1065 => 622,  1056 => 619,  1046 => 612,  1037 => 608,  1034 => 607,  1030 => 606,  1025 => 603,  1020 => 602,  1015 => 601,  1013 => 600,  989 => 578,  970 => 564,  958 => 558,  952 => 555,  945 => 550,  941 => 548,  929 => 540,  922 => 538,  920 => 537,  909 => 528,  905 => 527,  900 => 525,  890 => 519,  886 => 517,  881 => 514,  858 => 494,  846 => 485,  838 => 479,  835 => 478,  830 => 477,  828 => 476,  814 => 464,  812 => 463,  807 => 461,  803 => 459,  797 => 458,  793 => 457,  785 => 453,  783 => 452,  776 => 450,  766 => 445,  761 => 443,  756 => 441,  751 => 438,  746 => 437,  743 => 436,  733 => 432,  726 => 428,  721 => 426,  717 => 424,  713 => 423,  710 => 422,  699 => 413,  696 => 412,  684 => 403,  681 => 402,  666 => 396,  663 => 395,  656 => 392,  646 => 385,  641 => 383,  637 => 381,  633 => 380,  615 => 365,  605 => 358,  595 => 351,  585 => 344,  575 => 337,  567 => 331,  562 => 328,  556 => 325,  551 => 322,  545 => 319,  542 => 318,  540 => 317,  537 => 316,  534 => 315,  521 => 305,  514 => 301,  511 => 300,  505 => 297,  502 => 296,  500 => 295,  495 => 292,  488 => 288,  485 => 287,  480 => 285,  477 => 284,  475 => 283,  472 => 282,  469 => 281,  465 => 278,  462 => 277,  459 => 274,  454 => 273,  449 => 272,  447 => 271,  438 => 265,  432 => 262,  429 => 261,  415 => 246,  408 => 236,  379 => 214,  375 => 212,  370 => 209,  368 => 208,  362 => 205,  357 => 203,  354 => 202,  348 => 199,  345 => 198,  341 => 195,  337 => 193,  335 => 192,  332 => 191,  326 => 188,  322 => 186,  318 => 184,  316 => 183,  313 => 182,  307 => 179,  301 => 175,  299 => 174,  296 => 169,  294 => 168,  273 => 149,  269 => 148,  267 => 147,  264 => 146,  258 => 143,  250 => 138,  240 => 131,  224 => 117,  214 => 110,  208 => 108,  203 => 107,  201 => 106,  187 => 94,  180 => 84,  166 => 72,  163 => 71,  154 => 69,  150 => 68,  147 => 67,  140 => 66,  128 => 63,  123 => 61,  120 => 60,  114 => 59,  107 => 54,  102 => 51,  97 => 48,  95 => 47,  78 => 32,  68 => 30,  42 => 7,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %} {% block portada %} {% for item in libro %}*/
/* <!-- Modal Video-->*/
/* <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">*/
/*     <div class="modal-dialog modal-lg" role="document">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <h5 class="modal-title" id="exampleModalLabel">Book Trailer : {{item.titulo}}</h5>*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                     <span aria-hidden="true">&times;</span>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*                 <iframe id="videof" width="100%" height="350" src="" frameborder="0" allowfullscreen></iframe>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button type="button" class="btn btn-secondary cldose" data-dismiss="modal">Cerrar</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- /.Modal Video -->*/
/* */
/* <!-- Modal Capítulos-->*/
/* <div class="modal fade" id="ModalCapitulos" tabindex="-1" role="dialog" aria-labelledby="ModalCapitulosLabel" aria-hidden="true">*/
/*     <div class="modal-dialog modal-lg" role="document">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <h5 class="modal-title" id="ModalCapitulosLabel">*/
/* */
/*                     {% if tipoLibro == "Anuncio" %} Enlnaces de compra de : {{item.titulo}} {% else %} Capítulos de : {{item.titulo}} {% endif*/
/*                     %}*/
/* */
/* */
/* */
/*                 </h5>*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                     <span aria-hidden="true">&times;</span>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="modal-body">*/
/* */
/* */
/*                 <table id="capitulos2" class="mdl-data-table capitulos" style="width:100%">*/
/*                     <thead>*/
/*                         <tr>*/
/* */
/*                             {% if tipoLibro == "Anuncio" %}*/
/*                             <th>Página de compra</th>*/
/*                             <th>Enlace</th>*/
/*                             {% else %}*/
/*                             <th>Nº Capítulo</th>*/
/*                             <th>Titulo</th>*/
/*                             {% endif %}*/
/* */
/* */
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% if tipoLibro == "Anuncio" %} {% for item in enlaces %}*/
/*                         <tr>*/
/*                             <td class="tdl">{{item.paginaLibro}}</td>*/
/*                             <td class="tdl">*/
/*                                 <a target="_blank" href="{{item.enlaceLibro}}">{{item.enlaceLibro}}</a>*/
/*                             </td>*/
/*                         </tr>*/
/*                         {% endfor %} {% else %} {% for item in capitulos %}*/
/*                         <tr>*/
/*                             <td class="tdl">{{item.numCapitulo}}</td>*/
/*                             <td class="tdl">{{item.tituloCap}}</td>*/
/*                         </tr>*/
/*                         {% endfor %} {% endif %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button type="button" class="btn btn-secondary cldose" data-dismiss="modal">Close</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- /.Modal Capítulos -->*/
/* */
/* <!--Intro Section-->*/
/* <div class="streak streak-photo streak-md  portada " style="background-image: url('{{ asset('bundles/dweslibros/img/Fondos/Fondo3.jpg') }}'); margin-top: 27px;">*/
/*     <div class="flex-center  " style="       background-color: rgba(17, 27, 43, 0.7);">*/
/*         <div class="container my-5 pt-5">*/
/* */
/*             {#*/
/*             <!-- Section heading -->*/
/*             <h3 class="text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <strong>Biblioteca</strong>*/
/*             </h3>*/
/*             <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">Mis libros publicados</h6> #}*/
/*             <div class="row">*/
/* */
/*                 <!--Grid column-->*/
/*                 <div class="col-lg-3 col-md-12 mb-4">*/
/* */
/*                     <!-- Section: Categories -->*/
/*                     <section class="section">*/
/* */
/* */
/* */
/*                         <!--Card image TODO: Imagen libro view overlay  -->*/
/*                         <div class="view overlay">*/
/*                             {% if foto %}*/
/*                             <img src="data:image/jpeg;base64,{{foto}}" style="height:270px ; width:180px;" class=" mx-auto" alt="sample image"> {% else %}*/
/*                             <div class="  {{item.colorPortada}} " style="height:270px;width:180px;">*/
/*                                 <div class=" flex-center text-center" alt="sample image">*/
/*                                     <p>{{item.titulo}}</p>*/
/*                                 </div>*/
/*                                 <a>*/
/*                                     <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                 </a>*/
/*                             </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <!--/.Card image-->*/
/*                     </section>*/
/*                     <!-- Section: Categories -->*/
/* */
/*                 </div>*/
/*                 <!--Grid column-->*/
/* */
/* <!--Modal : Reportar -->*/
/* <div class="modal fade" id="modalEnlace" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">*/
/*         <!--Content-->*/
/*         <div class="modal-content">*/
/*             <!--Header-->*/
/*              <form name="formUpdatePerfil"  action="{{ path('dwes_libros_avisar', {'idLibro' : item.idLibro,'admin':app.user.username,'autor':item.username,'tipo':"libros"})}}" */
/*              method="POST" enctype="multipart/form-data" >*/
/*               <iframe name="frame" style="display: none"></iframe>*/
/*                */
/*                 <!--Body-->*/
/*                 <div class="modal-body text-center mb-1">*/
/*                     <div class="md-form ml-0 mr-0">*/
/*                          <textarea id="aviso" rows=8 name="aviso" class="form-control form-control-sm validate ml-0">{{avisoText}}</textarea>*/
/*                         <label for="aviso" class="ml-0">Mensaje al usuario:</label>*/
/*                     </div>*/
/*                     <div class="text-center mt-4">*/
/*                         <button type="submit" class="btn btn-cyan mt-1">*/
/*                          {% if avisado !="" %} */
/*                                          Actualizar*/
/*                                                 {% endif %}*/
/*  */
/*                                                 {% if  avisado =="" %}*/
/*                                               Enviar*/
/*                                                 {% endif %}         */
/*                         </button>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>    */
/* */
/*         </div>*/
/*         <!--/.Content-->*/
/*     </div>*/
/* </div>*/
/* <!--Modal: Reportar -->*/
/* */
/*                 <!--Grid column-->*/
/*                 <div class="col-lg-8 col-md-12 pb-lg-5 mb-4">*/
/*                     <div class="mask rgba-white-light">*/
/*                         <div class="dark-grey-text  pt-4 ml-3 pl-3">*/
/*                         */
/*                             <div>*/
/*                                 <div style="float:right">*/
/*                                       {% if  is_granted('ROLE_ADMIN') %}*/
/*                                         <!--Twitter FIXME: APARECE USUARIO AVISADO EN TODOS LO GENEROS-->*/
/*                                        {#  <a   style="*/
/*                                 cursor: context-menu;*/
/*                             " type="button"  data-toggle="tooltip" data-placement="bottom" title="Usuario avisado"  class="btn-floating btn-tw waves-effect waves-light"*/
/*                                          href="#"> <i class="fas fa-exclamation-triangle"></i></a> #}*/
/*                                       {#   {% else %} #}*/
/*                                       */
/*                                         <a href="" data-toggle="modal" data-target="#modalEnlace">*/
/*                                             <span data-toggle="tooltip" data-placement="bottom" title="" class=" btn-floating warning-color waves-effect waves-light"*/
/*                                                 href="#" data-original-title=  */
/*                                                    {% if avisado !="" %} */
/*                                          "Ver aviso enviado"*/
/*                                                 {% endif %}*/
/* */
/*                                                 {% if  avisado =="" %}*/
/*                                               "Enviar aviso"*/
/*                                                 {% endif %}*/
/* */
/*                                                >*/
/*                                                  {% if avisado =="" %} */
/*                                           <i class="fas fa-eye"></i>*/
/*                                                 {% endif %}*/
/* */
/*                                                 {% if  avisado !="" %}*/
/*                                                 <i class="fas fa-exclamation-triangle"></i>*/
/*                                                 {% endif %}*/
/*                                             </span>*/
/*                                         </a>*/
/*                                       {#  {% endif %} #}*/
/*                                         <!--Google -->*/
/*                                         <a type="button"  href="{{ path('dwes_libros_eliminarLib', {'idLibro' : item.idLibro}) }}"  data-toggle="tooltip" data-placement="bottom"*/
/*                                          title="Eliminar historia" class="btn-floating btn-gplus waves-effect waves-light"> <i class="fa fa-remove mt-0"></i></a>*/
/*                                      {% endif %}*/
/*                                     </div>*/
/*                                     <span class="badge badge-danger">{{item.nombre}}</span>*/
/*                                 <h2 class="card-title font-weight-bold pt-2  " style="color:  black;">*/
/*                                     <strong>{{item.titulo}}</strong>*/
/*                                   */
/* */
/*                                     {% if tipoLibro == "Anuncio" %}*/
/*                                     <span class="badge blue">En venta</span>*/
/* */
/*                                     {% endif %}*/
/*                                 </h2>*/
/*                                 <div class="col-12">*/
/*                                     <p style="min-height: 120px;color:  black;">{{item.descLib}} </p>*/
/*                                 </div>*/
/*                                 <!-- Button  modal -->*/
/*                                 <button type="button" class="btn btn-danger btn-sm btn-rounded clearfix  d-md-inline-block waves-effect waves-light video videoff"*/
/*                                     data-video="https://www.youtube.com/embed/8uYspagia_s?rel=0&showinfo=0" data-toggle="modal"*/
/*                                     data-target="#exampleModal">*/
/*                                     <i class="fab fa-youtube mr-1"></i> Book Trailer*/
/*                                 </button>*/
/*                                     */
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!--Grid column-->*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* {% endfor %} {% endblock %} {% block contenido %} {#*/
/* <div class="small col-lg-2 ">*/
/*     <select class="mdb-select colorful-select dropdown-primary" multiple style="position:relative; width: 50px !important;;">*/
/*         <option value="" disabled selected>Añadir libro a </option>*/
/*         <option value="1">Biblioteca</option>*/
/*         <option value="2">Favoritos</option>*/
/* */
/*     </select>*/
/*     <button type="submit" class="btn-save btn btn-primary btn-sm">Save</button>*/
/* </div> #}*/
/* */
/* */
/* */
/* <div class="container-fluid pl-0 pr-0 container1" style="background-color: #f4f5f6;">*/
/* */
/*     <!--Grid column-->*/
/*     <div class="col-lg-12 col-md-12 mb-12 pl-0 pr-0">*/
/*         <nav class="navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav indigo-text">*/
/*             <!-- SideNav slide-out button -->*/
/* */
/*             <!-- Breadcrumb-->*/
/*             <div class="">*/
/*                 {#*/
/*                 <p>*/
/*                     <i class="fa fa-book pr-2" aria-hidden="true"></i>Título de la Historia</p> #}*/
/*                 <div>*/
/*                     <a id="addBiblio" href="{{ path('dwes_libros_addbiblioteca', {'idLibro' : app.request.get('idLibro')}) }}" class="guardarScroll"></a>*/
/* */
/* */
/*                     <a id="delBiblio" href="{{ path('dwes_libros_ajustes' ) }}" class="guardarScroll"></a>*/
/*                 </div>*/
/*                 <button type="button" class="btn purple-gradient btn-sm gcapitulo " data-toggle="modal" data-target="#ModalCapitulos">*/
/*                     <i class="fab fa-readme mr-2"></i>*/
/* */
/* */
/*                     {% if tipoLibro == "Anuncio" %}*/
/*                     <span>{{countEnlaces}}</span> Enlaces {% else %}*/
/*                     <span>{{numCap}}</span> Capítulos {% endif %}*/
/*                 </button>*/
/*                 {#*/
/*                 <button id="cmd">Generar</button> #}*/
/* */
/*                 <span class="green-text font-weight-bold pr-2 small">{{progreso}}</span>*/
/*                 {#*/
/*                 <form name="formUpdatePerfil" action="{{ path('dwes_libros_addbiblioteca'),{'idLibro':app.request.get('idLibro')} }}" method="POST"*/
/*                     enctype="multipart/form-data"> #} {% if tipoLibro == "Gratis" %}*/
/*                     <span class="text-dark  pr-2 cl" id="enbiblioteca">*/
/*                         {% if lista %}*/
/*                         <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>*/
/*                         <a href="{{ path('dwes_libros_delbiblioteca', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl guardarScroll">Eliminar de mi lista</a>*/
/*                         {% else %}*/
/*                         <i class="fas fa-plus mr-1 font-weight-bold deselect bibIco "></i>*/
/*                         <a href="{{ path('dwes_libros_addbiblioteca', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl guardarScroll">*/
/*                             Añadir a mi lista</a>*/
/* */
/*                         {% endif %}*/
/*                     </span>*/
/* */
/*                     <span class="text-dark   pr-2 cl" id="enfavoritos">*/
/*                         {% if favorito %}*/
/*                         <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>*/
/*                         <a href="{{ path('dwes_libros_delfavoritos', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl guardarScroll">*/
/*                             Eliminar de favoritos</a>*/
/*                         {% else %}*/
/*                         <i class="fas fa-plus mr-1 font-weight-bold deselect bibIco "></i>*/
/*                         <a href="{{ path('dwes_libros_addfavoritos', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl guardarScroll">*/
/*                             Añadir a favoritos</a>*/
/* */
/*                         {% endif %}*/
/*                     </span>*/
/*                     <span class="text-dark   pr-2 cl">*/
/* */
/*                         <i class='fas fa-download'></i>*/
/*                         <a class="text-dark cl guardarScroll">*/
/*                         </a>*/
/* */
/*                         <a href="javascript:pruebaDivAPdf()" class="button text-dark cl"> Descargar PDF</a>*/
/* */
/*                     </span>*/
/*                     {% endif %} {% if tipoLibro == "Anuncio" %}*/
/*                     <span class="text-dark   pr-2 cl">*/
/*                         {% if deseo %}*/
/*                         <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>*/
/*                         <a href="{{ path('dwes_libros_deldeseos', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl guardarScroll">*/
/*                             En lista de deseos</a>*/
/*                         {% else %}*/
/* */
/* */
/*                         <i class="fas fa-plus mr-1 font-weight-bold deselect bibIco "></i>*/
/*                         <a href="{{ path('dwes_libros_adddeseos', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl guardarScroll">*/
/*                             Añadir a lista de deseos</a>*/
/*                         {% endif %}*/
/*                     </span>*/
/* */
/*                     {% endif %}*/
/*             </div>*/
/*             <ul class="nav navbar-nav nav-flex-icons ml-auto">*/
/* */
/*                 <li class="nav-item">*/
/*                     <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="Pantalla blanca">*/
/*                         <i class="mb-2">*/
/*                             <img src="{{ asset('bundles/dweslibros/img/icons/sun-selec.png') }}" id="blanca"> </img>*/
/*                         </i>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="Pantalla sefia">*/
/*                         <i class="mb-2">*/
/*                             <img src="{{ asset('bundles/dweslibros/img/icons/sunset.png') }}" id="sefia"> </img>*/
/*                         </i>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="Pantalla negra">*/
/*                         <i class="mb-2">*/
/*                             <img src="{{ asset('bundles/dweslibros/img/icons/moon.png') }}" id="negra"> </img>*/
/*                         </i>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="Aumentar letra">*/
/*                         <i class="mb-2">*/
/*                             <img src="{{ asset('bundles/dweslibros/img/icons/font+.png') }}" id="letraUp"> </img>*/
/*                         </i>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="Desminuir letra">*/
/*                         <i class="mb-2">*/
/*                             <img src="{{ asset('bundles/dweslibros/img/icons/font-.png') }}" id="letraDown"> </img>*/
/*                         </i>*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>*/
/*         </nav>*/
/*     </div>*/
/*     <!--Grid column-->*/
/* */
/*     <div class="container card mt-1 mb-5 px-0 py-0 container2">*/
/* */
/*         <div class="card-body">*/
/* */
/* */
/*             <div>*/
/*                 {% for item in enlaces%}*/
/*                 <div id="accordion" class="mt-1">*/
/*                     <div class="card">*/
/*                         <div class="card-header" id="heading{{item.idEnlace}}">*/
/*                             <h5 class="mb-0">*/
/*                                 <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{item.idEnlace}}" aria-expanded="false"*/
/*                                     aria-controls="collapseExample">*/
/*                                     Enlace de compra*/
/*                                 </button>*/
/*                             </h5>*/
/*                         </div>*/
/* */
/*                         <div id="collapse{{item.idEnlace}}" class="collapse" aria-labelledby="heading{{item.idEnlace}}" data-parent="#accordion">*/
/*                             <div class="card-body bigtext text-center">*/
/*                                 {# {{html}} #}*/
/* */
/*                                 <a target="_blank" href=" {{item.enlaceLibro}}"> {{item.paginaLibro}}</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {% endfor %} {% if not capitulos and tipoLibro != "Anuncio" %}*/
/* */
/* */
/*             <!--Panel FIXME: -->*/
/*             <div class="col-12 text-center">*/
/*                 <h3 class="card-title">¡UPS...! Esto parece vacío</h3>*/
/*                 <p class="card-text"> Sé paciente. </p>*/
/*             </div>*/
/*             <!--/.Panel-->*/
/* */
/*             {% endif %} {% if not enlaces and tipoLibro == "Anuncio" %}*/
/* */
/* */
/*             <!--Panel FIXME: -->*/
/*             <div class="col-12 text-center">*/
/*                 <h3 class="card-title">¡UPS...! Esto parece vacío </h3>*/
/*                 <p class="card-text"> Sé paciente. </p>*/
/*             </div>*/
/*             <!--/.Panel-->*/
/*             {% endif %}*/
/*             <div id="imprimir" style="display:  none;">*/
/*                 {% for item in capitulos %}*/
/* */
/*                 <h4 class="card-title">*/
/*                     <span class="indigo-text pr-2 small"> Capítulo {{item.numCapitulo}}:</span>*/
/* */
/*                     <strong class="font-weight-bold indigo-text ">{{item.tituloCap}}</strong>*/
/*                 </h4>*/
/*                 <hr>*/
/* */
/*                 <p class="card-text" style="    ">{{item.contenidoCap | raw}}*/
/*                 </p>*/
/* */
/*                 {% endfor %}*/
/*             </div>*/
/*             {% for item in capitulos %} {# TODO: Imprimir con este formato #}*/
/* */
/*             <div id="accordion" class="mt-1">*/
/*                 <div class="card">*/
/*                     <div class="card-header" id="heading{{item.numCapitulo}}">*/
/*                         <h5 class="mb-0">*/
/*                             <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{item.numCapitulo}}" aria-expanded="false"*/
/*                                 aria-controls="collapseExample">*/
/*                                 #{{item.numCapitulo}} {{item.tituloCap}}*/
/*                             </button>*/
/*                         </h5>*/
/*                     </div>*/
/* */
/*                     <div id="collapse{{item.numCapitulo}}" class="collapse" aria-labelledby="heading{{item.numCapitulo}}" data-parent="#accordion">*/
/*                         <div class="card-body bigtext">*/
/*                             {# {{html}} #} {# raw --> Para mostrar el HTML con el formato insertado #}*/
/*                             <div class="fuente">{{item.contenidoCap | raw}}</div>*/
/*                             <!-- Comentarios capitulo -->*/
/*                             <!--Main wrapper-->*/
/*                             <div class="section-heading h3 text-center">*/
/*                                 <a data-toggle="collapse" href="#comentariosss{{item.numCapitulo}} " role="button" aria-expanded="false" aria-controls="collapseExample">*/
/*                                     {% if app.user %} Deja un comentario {% elseif not app.user %} Inicia sesión o Regístrate para comentar {% endif %}*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div id="comentariosss{{item.numCapitulo}} " class="collapse">*/
/*                                 <div class="comments-list text-center text-md-left mb-5">*/
/*                                     {% if app.user %}*/
/*                                     <!--Section: Leave a reply (Logged In User)-->*/
/*                                     <section class="mb-4 mt-4">*/
/* */
/*                                         <!--Leave a reply form-->*/
/*                                         <div class="reply-form">*/
/* */
/*                                             <!--Third row-->*/
/*                                             <div>*/
/*                                                 <div class="row">*/
/*                                                     <!--Image column-->*/
/*                                                     <div class="col-sm-2 col-12">*/
/* */
/*                                                         {% if fUser %}*/
/*                                                         <img src="data:image/jpeg;base64,{{fUser}}" class=" img-fluid avatar rounded-circle z-depth-2"> {% else %}*/
/*                                                         <img src="https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg" alt="Sample avatar image" class=""> {% endif %}*/
/*                                                     </div>*/
/*                                                     <!--/.Image column-->*/
/* */
/*                                                     <!--Content column-->*/
/*                                                     <div class="col-sm-10 col-12">*/
/*                                                         <!--Grid row-->*/
/*                                                         <form name="formUpdatePerfil" action="{{ path('dwes_libros_comentarCapitulo',{'idLibro' : app.request.get('idLibro'),'numCap':item.numCapitulo } )}}"*/
/*                                                             method="POST" enctype="multipart/form-data">*/
/* */
/*                                                             <div class="row">*/
/* */
/*                                                                 <div class="col-12 mt-1">*/
/*                                                                     <div class="form-group basic-textarea rounded-corners shadow-textarea">*/
/* */
/*                                                                         <textarea class="form-control" id="exampleFormControlTextarea6" rows="5" placeholder="Tu comentario..." name="comentarioCap"*/
/*                                                                             value={{comentarioCap}}></textarea>*/
/*                                                                     </div>*/
/* */
/*                                                                     <div class="text-right">*/
/*                                                                         <button type="submit" class="btn btn-primary btn-sm guardarScroll">Comentar</button>*/
/*                                                                     </div>*/
/* */
/*                                                                 </div>*/
/*                                                         </form>*/
/*                                                         </div>*/
/*                                                         <!--Grid row-->*/
/* */
/*                                                     </div>*/
/* */
/*                                                 </div>*/
/*                                                 <!--/.Leave a reply form-->*/
/* */
/*                                     </section>*/
/*                                     <!--/Section: Leave a reply (Logged In User)-->*/
/*                                     {% endif %}*/
/*                                     <div class="text-center mb-4">*/
/* */
/*                                         <h3>*/
/*                                             <a data-toggle="collapse" href="#comentarios{{item.numCapitulo}} " role="button" aria-expanded="false" aria-controls="collapseExample">*/
/*                                                 Comentarios {# Muestro el número de comentarios del array con | lenght #}*/
/*                                                 <span class="badge blue">{{ comentariosCap[item.numCapitulo -1 ] | length }}</span>*/
/*                                             </a>*/
/* */
/*                                         </h3>*/
/*                                     </div>*/
/*                                     <!--Comment row-->*/
/*                                     <div id="comentarios{{item.numCapitulo}} " class="collapse">*/
/* */
/*                                         {% for item in comentariosCap[item.numCapitulo -1 ] %}*/
/*                                         <div class="row mb-4">*/
/*                                             <!--Image column-->*/
/*                                             <div class="col-sm-2 col-12 mb-md-0 mb-3">*/
/*                                                 <img src="https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg" class="avatar rounded-circle z-depth-1-half">*/
/*                                             </div>*/
/*                                             <!--/.Image column-->*/
/*                                             <!--Content column-->*/
/*                                             <div class="col-sm-10 col-12">*/
/*                                                 <a>*/
/*                                                     {% if app.user %}*/
/*                                                     <h4 class="font-weight-bold">{{item.nombre}} {{item.apellidos}} {% if app.user.username == item.username*/
/*                                                         %}*/
/*                                                         <a href="{{ path('dwes_libros_delComentarioCap', {'idLibro' : app.request.get('idLibro'),'numCapitulo':item.numCapitulo,'username':app.user.username,'comentario' :item.comentario}) }}"*/
/*                                                             onclick="return confirm('¿Estás seguro de eliminar este comentario?')"*/
/*                                                             data-toggle="tooltip" data-placement="bottom" title="Eliminar comentario"*/
/*                                                             class="guardarScroll btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient "*/
/*                                                             href="">*/
/*                                                             <i class="fa fa-remove mt-0"></i>*/
/*                                                         </a>*/
/*                                                         {% endif %}*/
/*                                                     </h4>*/
/*                                                     {% endif %}*/
/*                                                 </a>*/
/* */
/*                                                 <div class="mt-2">*/
/*                                                     <ul class="list-unstyled">*/
/*                                                         <li class="comment-date">*/
/*                                                             <i class="fa fa-clock-o"></i> {{item.fecha}}</li>*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                                 <p class="grey-text">{{item.comentario}}</p>*/
/*                                             </div>*/
/*                                             <!--/.Content column-->*/
/*                                         </div>*/
/* */
/*                                         {% endfor %}*/
/* */
/*                                     </div>*/
/*                                     <!--/.Comment row-->*/
/* */
/*                                     </div>*/
/*                                     <!--/.Main wrapper-->*/
/*                                     <!-- /. Comentarios capitulo -->*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <!-- Autor -->*/
/* */
/*         <!-- ./ Autor -->*/
/* */
/* */
/* */
/*     */
/*     <!-- Autor -->*/
/*     <div class="container card mt-1 mb-5 px-0 py-0">*/
/*         <section class="text-center text-md-left">*/
/*             <div class="card card-body perfil">*/
/* */
/*                 <div class="row">*/
/*                     <!--Avatar-->*/
/*                     <div class="col-12 col-sm-2 mb-md-0 mb-3">*/
/* */
/* */
/*                         {% if fotoAutor %}*/
/*                         <img src="data:image/jpeg;base64,{{fotoAutor}}" class=" img-fluid rounded-circle" alt="sample image"> {% else %}*/
/*                         <img src="{{ asset('bundles/dweslibros/img/Otros/profile.png') }}" class="img-fluid rounded-circle" alt="sample image"> {% endif %}*/
/*                     </div>*/
/*                     <!--Author Data-->*/
/*                     <div class="col-12 col-sm-10">*/
/*                         {% for item in autor %}*/
/*                         <p>*/
/*                             <strong>{{item.nombre}} {{item.apellidos}}</strong>*/
/*                         </p>*/
/* */
/*                         <div class="personal-sm">*/
/*                             <a href="{{ path('dwes_libros_perfil', {'username':item.username}) }}" class="pr-2 fb-ic">*/
/*                                 Ver perfil*/
/*                             </a>*/
/* */
/*                         </div>*/
/* */
/* */
/*                         <p class="dark-grey-text article">{{item.biografia}}*/
/*                         </p>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <!-- ./Autor -->*/
/* */
/*     </div>*/
/*     <!-- Te puede gustar -->*/
/*     <div class="container  mt-1 mb-5 px-0 py-0">*/
/*         <section class="text-left mt-4">*/
/* */
/*             <h5 class="font-weight-bold mt-5">*/
/*                 <strong>YOU MIGHT ALSO LIKE</strong>*/
/*             </h5>*/
/*             <hr class="red title-hr">*/
/* */
/*             <!--Carousel Wrapper-->*/
/*             <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">*/
/* */
/*                 <!--Indicators-->*/
/*                 <ol class="carousel-indicators">*/
/*                     <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>*/
/*                     <li data-target="#multi-item-example" data-slide-to="1" class=""></li>*/
/*                     <li data-target="#multi-item-example" data-slide-to="2" class=""></li>*/
/*                 </ol>*/
/*                 <!--/.Indicators-->*/
/* */
/*                 <!--Slides-->*/
/*                 <div class="carousel-inner" role="listbox">*/
/* */
/*                     <!--First slide-->*/
/*                     <div class="carousel-item active">*/
/* */
/*                         <!--Grid row-->*/
/*                         <div class="row mb-4">*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-lg-4 my-3">*/
/*                                 <!--Card-->*/
/*                                 <div class="card">*/
/* */
/*                                     <!--Card image-->*/
/*                                     <div class="view overlay">*/
/*                                         <img src="http://mdbootstrap.com/img/Photos/Others/img (43).jpg" class="card-img-top" alt="sample image">*/
/*                                         <a>*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <!--/.Card image-->*/
/* */
/*                                     <!--Card content-->*/
/*                                     <div class="card-body">*/
/*                                         <!--Title-->*/
/*                                         <h4 class="card-title">*/
/*                                             <strong>Card title</strong>*/
/*                                         </h4>*/
/*                                         <hr>*/
/* */
/*                                         <p></p>*/
/*                                         <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                             <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                         <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                         <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                             <a>read more*/
/*                                                 <i class="fa fa-angle-right"></i>*/
/*                                             </a>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                     <!--/.Card content-->*/
/* */
/*                                 </div>*/
/*                                 <!--/.Card-->*/
/* */
/*                             </div>*/
/*                             <!--Grid column-->*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-lg-4 text-left mt-3">*/
/* */
/*                                 <!--Card-->*/
/*                                 <div class="card">*/
/* */
/*                                     <!--Card image-->*/
/*                                     <div class="view overlay">*/
/*                                         <img src="http://mdbootstrap.com/img/Photos/Others/img (39).jpg" class="card-img-top" alt="sample image">*/
/*                                         <a>*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <!--/.Card image-->*/
/* */
/*                                     <!--Card content-->*/
/*                                     <div class="card-body">*/
/*                                         <!--Title-->*/
/*                                         <h4 class="card-title">*/
/*                                             <strong>Card title</strong>*/
/*                                         </h4>*/
/*                                         <hr>*/
/* */
/*                                         <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                             <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                         <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                         <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                             <a>read more*/
/*                                                 <i class="fa fa-angle-right"></i>*/
/*                                             </a>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                     <!--/.Card content-->*/
/* */
/*                                 </div>*/
/*                                 <!--/.Card-->*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-lg-4 text-left mt-3">*/
/* */
/*                                 <!--Card-->*/
/*                                 <div class="card">*/
/* */
/*                                     <!--Card image-->*/
/*                                     <div class="view overlay">*/
/*                                         <img src="http://mdbootstrap.com/img/Photos/Others/img (46).jpg" class="card-img-top" alt="sample image">*/
/*                                         <a>*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <!--/.Card image-->*/
/* */
/*                                     <!--Card content-->*/
/*                                     <div class="card-body">*/
/*                                         <!--Title-->*/
/*                                         <h4 class="card-title">*/
/*                                             <strong>Card title</strong>*/
/*                                         </h4>*/
/*                                         <hr>*/
/* */
/*                                         <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                             <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                         <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                         <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                             <a>read more*/
/*                                                 <i class="fa fa-angle-right"></i>*/
/*                                             </a>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                     <!--/.Card content-->*/
/* */
/*                                 </div>*/
/*                                 <!--/.Card-->*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/* */
/*                         </div>*/
/*                         <!--/Grid row-->*/
/* */
/*                     </div>*/
/*                     <!--/.First slide-->*/
/* */
/*                     <!--Second slide-->*/
/*                     <div class="carousel-item">*/
/* */
/*                         <!--Grid row-->*/
/*                         <div class="row mb-4">*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-lg-4 my-3">*/
/*                                 <!--Card-->*/
/*                                 <div class="card">*/
/* */
/*                                     <!--Card image-->*/
/*                                     <div class="view overlay">*/
/*                                         <img src="http://mdbootstrap.com/img/Photos/Others/img (40).jpg" class="card-img-top" alt="sample image">*/
/*                                         <a>*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <!--/.Card image-->*/
/* */
/*                                     <!--Card content-->*/
/*                                     <div class="card-body">*/
/*                                         <!--Title-->*/
/*                                         <h4 class="card-title">*/
/*                                             <strong>Card title</strong>*/
/*                                         </h4>*/
/*                                         <hr>*/
/* */
/*                                         <p></p>*/
/*                                         <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                             <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                         <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                         <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                             <a>read more*/
/*                                                 <i class="fa fa-angle-right"></i>*/
/*                                             </a>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                     <!--/.Card content-->*/
/* */
/*                                 </div>*/
/*                                 <!--/.Card-->*/
/* */
/*                             </div>*/
/*                             <!--Grid column-->*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-lg-4 text-left mt-3">*/
/* */
/*                                 <!--Card-->*/
/*                                 <div class="card">*/
/* */
/*                                     <!--Card image-->*/
/*                                     <div class="view overlay">*/
/*                                         <img src="http://mdbootstrap.com/img/Photos/Others/img (45).jpg" class="card-img-top" alt="sample image">*/
/*                                         <a>*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <!--/.Card image-->*/
/* */
/*                                     <!--Card content-->*/
/*                                     <div class="card-body">*/
/*                                         <!--Title-->*/
/*                                         <h4 class="card-title">*/
/*                                             <strong>Card title</strong>*/
/*                                         </h4>*/
/*                                         <hr>*/
/* */
/*                                         <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                             <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                         <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                         <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                             <a>read more*/
/*                                                 <i class="fa fa-angle-right"></i>*/
/*                                             </a>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                     <!--/.Card content-->*/
/* */
/*                                 </div>*/
/*                                 <!--/.Card-->*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-lg-4 text-left mt-3">*/
/* */
/*                                 <!--Card-->*/
/*                                 <div class="card">*/
/* */
/*                                     <!--Card image-->*/
/*                                     <div class="view overlay">*/
/*                                         <img src="http://mdbootstrap.com/img/Photos/Others/img (35).jpg" class="card-img-top" alt="sample image">*/
/*                                         <a>*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <!--/.Card image-->*/
/* */
/*                                     <!--Card content-->*/
/*                                     <div class="card-body">*/
/*                                         <!--Title-->*/
/*                                         <h4 class="card-title">*/
/*                                             <strong>Card title</strong>*/
/*                                         </h4>*/
/*                                         <hr>*/
/* */
/*                                         <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                             <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                         <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                         <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                             <a>read more*/
/*                                                 <i class="fa fa-angle-right"></i>*/
/*                                             </a>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                     <!--/.Card content-->*/
/* */
/*                                 </div>*/
/*                                 <!--/.Card-->*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/* */
/*                         </div>*/
/*                         <!--/Grid row-->*/
/*                     </div>*/
/*                     <!--/.Second slide-->*/
/* */
/*                     <!--Third slide-->*/
/*                     <div class="carousel-item">*/
/* */
/*                         <!--Grid row-->*/
/*                         <div class="row mb-4">*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-lg-4 my-3">*/
/*                                 <!--Card-->*/
/*                                 <div class="card">*/
/* */
/*                                     <!--Card image-->*/
/*                                     <div class="view overlay">*/
/*                                         <img src="http://mdbootstrap.com/img/Photos/Others/img (30).jpg" class="card-img-top" alt="sample image">*/
/*                                         <a>*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <!--/.Card image-->*/
/* */
/*                                     <!--Card content-->*/
/*                                     <div class="card-body">*/
/*                                         <!--Title-->*/
/*                                         <h4 class="card-title">*/
/*                                             <strong>Card title</strong>*/
/*                                         </h4>*/
/*                                         <hr>*/
/* */
/*                                         <p></p>*/
/*                                         <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                             <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                         <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                         <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                             <a>read more*/
/*                                                 <i class="fa fa-angle-right"></i>*/
/*                                             </a>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                     <!--/.Card content-->*/
/* */
/*                                 </div>*/
/*                                 <!--/.Card-->*/
/* */
/*                             </div>*/
/*                             <!--Grid column-->*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-lg-4 text-left mt-3">*/
/* */
/*                                 <!--Card-->*/
/*                                 <div class="card">*/
/* */
/*                                     <!--Card image-->*/
/*                                     <div class="view overlay">*/
/*                                         <img src="http://mdbootstrap.com/img/Photos/Others/img (28).jpg" class="card-img-top" alt="sample image">*/
/*                                         <a>*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <!--/.Card image-->*/
/* */
/*                                     <!--Card content-->*/
/*                                     <div class="card-body">*/
/*                                         <!--Title-->*/
/*                                         <h4 class="card-title">*/
/*                                             <strong>Card title</strong>*/
/*                                         </h4>*/
/*                                         <hr>*/
/* */
/*                                         <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                             <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                         <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                         <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                             <a>read more*/
/*                                                 <i class="fa fa-angle-right"></i>*/
/*                                             </a>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                     <!--/.Card content-->*/
/* */
/*                                 </div>*/
/*                                 <!--/.Card-->*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/* */
/*                             <!--Grid column-->*/
/*                             <div class="col-lg-4 text-left mt-3">*/
/* */
/*                                 <!--Card-->*/
/*                                 <div class="card">*/
/* */
/*                                     <!--Card image-->*/
/*                                     <div class="view overlay">*/
/*                                         <img src="http://mdbootstrap.com/img/Photos/Others/img (33).jpg" class="card-img-top" alt="sample image">*/
/*                                         <a>*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <!--/.Card image-->*/
/* */
/*                                     <!--Card content-->*/
/*                                     <div class="card-body">*/
/*                                         <!--Title-->*/
/*                                         <h4 class="card-title">*/
/*                                             <strong>Card title</strong>*/
/*                                         </h4>*/
/*                                         <hr>*/
/* */
/*                                         <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                             <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                         <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                         <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                             <a>read more*/
/*                                                 <i class="fa fa-angle-right"></i>*/
/*                                             </a>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                     <!--/.Card content-->*/
/* */
/*                                 </div>*/
/*                                 <!--/.Card-->*/
/*                             </div>*/
/*                             <!--Grid column-->*/
/*                         </div>*/
/*                         <!--/Grid row-->*/
/*                     </div>*/
/*                     <!--/.Third slide-->*/
/* */
/*                 </div>*/
/*                 <!--/.Slides-->*/
/* */
/*             </div>*/
/*             <!--/.Carousel Wrapper-->*/
/* */
/*         </section>*/
/* */
/* */
/*     </div>*/
/*     <!-- ./ Te puede gustar -->*/
/* */
/*     <!-- Comntarios -->*/
/*     <div class="container  mt-1 mb-5 px-0 py-0">*/
/* */
/*         <!--Main wrapper-->*/
/*         {% if app.user %}*/
/*         <h3 class="section-heading h3 ">Deja un comentario </h3>*/
/*         {% elseif not app.user %}*/
/*         <h3 class="section-heading h3 ">Inicia sesión o Regístrate para comentar</h3>*/
/*         {% endif %}*/
/* */
/* */
/*         <div class="comments-list text-center text-md-left mb-5">*/
/*             {% if app.user %}*/
/*             <!--Section: Leave a reply (Logged In User)-->*/
/*             <section class="mb-4 mt-4">*/
/* */
/*                 <!--Leave a reply form-->*/
/*                 <div class="reply-form">*/
/* */
/*                     <!--Third row-->*/
/*                     <div class="row">*/
/*                         <!--Image column-->*/
/*                         <div class="col-sm-2 col-12">*/
/* */
/*                             {% if fUser %}*/
/*                             <img src="data:image/jpeg;base64,{{fUser}}" class=" img-fluid avatar rounded-circle z-depth-2"> {% else %}*/
/*                             <img src="{{ asset('bundles/dweslibros/img/Otros/idea.png') }}" alt="Sample avatar image" class=" img-fluid avatar rounded-circle z-depth-2"> {% endif %}*/
/*                         </div>*/
/*                         <!--/.Image column-->*/
/* */
/*                         <!--Content column-->*/
/*                         <div class="col-sm-10 col-12">*/
/*                             <!--Grid row-->*/
/*                             <form name="formUpdatePerfil" action="{{ path('dwes_libros_comentarLibro',{'idLibro' : app.request.get('idLibro')} )}}" method="POST"*/
/*                                 enctype="multipart/form-data">*/
/* */
/*                                 <div class="row">*/
/* */
/*                                     <div class="col-12 mt-1">*/
/*                                         <div class="form-group basic-textarea rounded-corners shadow-textarea">*/
/* */
/*                                             <textarea class="form-control" id="exampleFormControlTextarea6" rows="5" placeholder="Tu comentario..." name="comentario"*/
/*                                                 value={{comentario}}></textarea>*/
/*                                         </div>*/
/* */
/*                                         <div class="text-right">*/
/*                                             <button type="submit" class="btn btn-primary btn-sm guardarScroll">Comentar</button>*/
/*                                         </div>*/
/* */
/*                                     </div>*/
/*                             </form>*/
/*                             </div>*/
/*                             <!--Grid row-->*/
/* */
/*                         </div>*/
/* */
/*                     </div>*/
/*                     <!--/.Leave a reply form-->*/
/* */
/*             </section>*/
/*             <!--/Section: Leave a reply (Logged In User)-->*/
/*             {% endif %}*/
/*             <div class="text-center mb-4">*/
/*                 <h3>*/
/*                     <a data-toggle="collapse" href="#comentarios" role="button" aria-expanded="false" aria-controls="collapseExample">*/
/*                         Comentarios*/
/*                         <span class="badge blue">{{cComent}}</span>*/
/*                     </a>*/
/* */
/*                 </h3>*/
/*             </div>*/
/*             <!--Comment row-->*/
/*             <div id="comentarios" class="collapse">*/
/*                 {% for item in comentarios %}*/
/*                 <div class="row mb-4">*/
/*                     <!--Image column-->*/
/*                     <div class="col-sm-2 col-12 mb-md-0 mb-3">*/
/*                         {% if item.fotoPerfil %}*/
/*                         <img src="https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg" class="avatar rounded-circle z-depth-1-half"> {% else %}*/
/*                         <img src="{{ asset('bundles/dweslibros/img/Otros/idea.png') }}" class=" avatar rounded-circle z-depth-1-half"> {% endif %}*/
/*                     </div>*/
/*                     <!--/.Image column-->*/
/*                     <!--Content column-->*/
/*                     <div class="col-sm-10 col-12">*/
/*                         <a>*/
/*                             <h4 class="font-weight-bold">{{item.nombre}} {{item.apellidos}} */
/*                              {% if app.user %}*/
/*  {% */
/*                             */
/*                             if app.user.username == item.username %}*/
/*                                 <a href="{{ path('dwes_libros_delComentarioLib', {'idLibro' : app.request.get('idLibro'),'username':app.user.username,'comentario' :item.comentario}) }}"*/
/*                                     onclick="return confirm('¿Estás seguro de eliminar este comentario?')" data-toggle="tooltip"*/
/*                                     data-placement="bottom" title="Eliminar comentario" class="guardarScroll btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient "*/
/*                                     href="">*/
/*                                     <i class="fa fa-remove mt-0"></i>*/
/*                                 </a>*/
/*                                 {% endif %}*/
/*                              {% endif %}*/
/*                            */
/*                             </h4>*/
/*                         </a>*/
/*                         <div class="mt-2">*/
/*                             <ul class="list-unstyled">*/
/*                                 <li class="comment-date">*/
/*                                     <i class="fa fa-clock-o"></i> {{item.fecha}}</li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <p class="grey-text">{{item.comentario}}</p>*/
/*                     </div>*/
/*                     <!--/.Content column-->*/
/*                 </div>*/
/* */
/*                 {% endfor %}*/
/*             </div>*/
/*             <!--/.Comment row-->*/
/* */
/*             </div>*/
/*             <!--/.Main wrapper-->*/
/* */
/*         </div>*/
/*         <!-- ./Comentarios -->*/
/*     </div>*/
/* </div> */
/*     <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b16754fa71e965a"></script>*/
/* */
/*     <script>*/
/*          function pruebaDivAPdf() {*/
/*                 var pdf = new jsPDF('p', 'pt', 'letter');*/
/*                 source = $('#imprimir')[0];*/
/* */
/*                 specialElementHandlers = {*/
/*                     '#imprimir': function (element, renderer) {*/
/*                         return true*/
/*                     }*/
/*                 };*/
/*                 margins = {*/
/*                     top: 80,*/
/*                     bottom: 60,*/
/*                     left: 40,*/
/*                     width: 522*/
/*                 };*/
/* */
/*                 pdf.fromHTML(*/
/*                     source,*/
/*                     margins.left, // x coord*/
/*                     margins.top, { // y coord*/
/*                         'width': margins.width,*/
/*                         'elementHandlers': specialElementHandlers*/
/*                     },*/
/* */
/*                     function (dispose) {*/
/*                         pdf.save({{app.request.get('idLibro')}}+'.pdf');*/
/*                     }, margins*/
/*                 );*/
/*             }*/
/*     </script>*/
/* */
/*     {%endblock %}*/
