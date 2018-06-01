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
                // line 31
                echo "                    Enlnaces de compra  de : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
                echo "
                    ";
            } else {
                // line 33
                echo "                   Capítulos de : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
                echo "
                    ";
            }
            // line 35
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
            // line 50
            if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Anuncio")) {
                // line 51
                echo "                     <th>Página de compra</th>
                            <th>Enlace</th>
                    ";
            } else {
                // line 54
                echo "                     <th>Nº Capítulo</th>
                            <th>Titulo</th>
                    ";
            }
            // line 57
            echo "

                        </tr>
                    </thead>
                    <tbody>
                         ";
            // line 62
            if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Anuncio")) {
                // line 63
                echo "                     ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["enlaces"]) ? $context["enlaces"] : $this->getContext($context, "enlaces")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    echo " 
                        <tr>
                            <td class=\"tdl\">";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "paginaLibro", array()), "html", null, true);
                    echo "</td>
                            <td class=\"tdl\"> <a target=\"_blank\" href=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "enlaceLibro", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "enlaceLibro", array()), "html", null, true);
                    echo "</a></td>
                        </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                    ";
            } else {
                // line 70
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["capitulos"]) ? $context["capitulos"] : $this->getContext($context, "capitulos")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    echo " 
                        <tr>
                            <td class=\"tdl\">";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
                    echo "</td>
                            <td class=\"tdl\">";
                    // line 73
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tituloCap", array()), "html", null, true);
                    echo "</td>
                        </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                    ";
            }
            // line 77
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
<div class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg'); margin-top: 27px;\">
    <div class=\"flex-center  \" style=\"       background-color: rgba(17, 27, 43, 0.7);\">
        <div class=\"container my-5 pt-5\">

            ";
            // line 99
            echo "            <div class=\"row\">

                <!--Grid column-->
                <div class=\"col-lg-3 col-md-12 mb-4\">

                    <!-- Section: Categories -->
                    <section class=\"section\">



                        <!--Card image TODO: Imagen libro view overlay  -->
                        <div class=\"  view overlay\">
                            ";
            // line 111
            if ((isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto"))) {
                // line 112
                echo "                            <img src=\"data:image/jpeg;base64,";
                echo twig_escape_filter($this->env, (isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "html", null, true);
                echo "\" style=\"height:270px ; width:180px;\" class=\" mx-auto\" alt=\"sample image\"> ";
            } else {
                // line 113
                echo "                            <div class=\"  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "colorPortada", array()), "html", null, true);
                echo " \" style=\"height:270px;width:180px;\">
                                <div class=\" flex-center text-center\" alt=\"sample image\">
                                    <p>";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
                echo "</p>
                                </div>
                                <a>
                                    <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                </a>
                            </div>
                            ";
            }
            // line 122
            echo "                        </div>
                        <!--/.Card image-->
                    </section>
                    <!-- Section: Categories -->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-lg-8 col-md-12 pb-lg-5 mb-4\">
                    <div class=\"mask rgba-white-light\">
                        <div class=\"dark-grey-text  pt-4 ml-3 pl-3\"> 
                            <div>
                                <a>
                                    <span class=\"badge badge-danger\">";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo "</span>
                                </a>
                                <h2 class=\"card-title font-weight-bold pt-2  \" style=\"color:  black;\">
                                    <strong>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
            echo "</strong> 
                                    ";
            // line 140
            if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Anuncio")) {
                // line 141
                echo "                                    <span class=\"badge blue\">En venta</span>

                                    ";
            }
            // line 144
            echo "                                </h2>
                                <div class=\"col-12\">
                                <p style=\"min-height: 120px;color:  black;\">";
            // line 146
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
        // line 168
        echo " ";
    }

    public function block_contenido($context, array $blocks = array())
    {
        echo " ";
        // line 178
        echo "
<div class=\"container-fluid pl-0 pr-0\" style=\"background-color: #f4f5f6;\" id=\"container1\">

    <!--Grid column-->
    <div class=\"col-lg-12 col-md-12 mb-12 pl-0 pr-0\">
        <nav class=\"navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav indigo-text\">
            <!-- SideNav slide-out button -->

            <!-- Breadcrumb-->
            <div class=\"\">
                ";
        // line 191
        echo "                <div>
                    <a id=\"addBiblio\" href=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_addbiblioteca", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
        echo "\" class=\"guardarScroll\" ></a>


                    <a id=\"delBiblio\" href=\"";
        // line 195
        echo $this->env->getExtension('routing')->getPath("dwes_libros_ajustes");
        echo "\" class=\"guardarScroll\"></a>
                </div>
                <button type=\"button\" class=\"btn purple-gradient btn-sm gcapitulo \" data-toggle=\"modal\" data-target=\"#ModalCapitulos\">
                    <i class=\"fab fa-readme mr-2\"></i>
                    

                    ";
        // line 201
        if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Anuncio")) {
            // line 202
            echo "                     <span>";
            echo twig_escape_filter($this->env, (isset($context["countEnlaces"]) ? $context["countEnlaces"] : $this->getContext($context, "countEnlaces")), "html", null, true);
            echo "</span> Enlaces
                    ";
        } else {
            // line 204
            echo "                    <span>";
            echo twig_escape_filter($this->env, (isset($context["numCap"]) ? $context["numCap"] : $this->getContext($context, "numCap")), "html", null, true);
            echo "</span> Capítulos
                    ";
        }
        // line 206
        echo "                </button>
                ";
        // line 209
        echo "
                <span class=\"green-text font-weight-bold pr-2 small\">";
        // line 210
        echo twig_escape_filter($this->env, (isset($context["progreso"]) ? $context["progreso"] : $this->getContext($context, "progreso")), "html", null, true);
        echo "</span>
                ";
        // line 213
        echo " ";
        if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Gratis")) {
            // line 214
            echo "                    <span class=\"text-dark  pr-2 cl\" id=\"enbiblioteca\">
                        ";
            // line 215
            if ((isset($context["lista"]) ? $context["lista"] : $this->getContext($context, "lista"))) {
                // line 216
                echo "                        <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>
                        <a href=\"";
                // line 217
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_delbiblioteca", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">Eliminar de mi lista</a>
                        ";
            } else {
                // line 219
                echo "                        <i class=\"fas fa-plus mr-1 font-weight-bold deselect bibIco \"></i>
                        <a href=\"";
                // line 220
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_addbiblioteca", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\"> Añadir a mi lista</a>

                        ";
            }
            // line 223
            echo "                    </span>

                    <span class=\"text-dark   pr-2 cl\" id=\"enfavoritos\">
                        ";
            // line 226
            if ((isset($context["favorito"]) ? $context["favorito"] : $this->getContext($context, "favorito"))) {
                // line 227
                echo "                        <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>
                        <a href=\"";
                // line 228
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_delfavoritos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\"> Eliminar de favoritos</a>
                        ";
            } else {
                // line 230
                echo "                        <i class=\"fas fa-plus mr-1 font-weight-bold deselect bibIco \"></i>
                        <a href=\"";
                // line 231
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_addfavoritos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\"> Añadir a favoritos</a>

                        ";
            }
            // line 234
            echo "                    </span>
                    ";
        }
        // line 235
        echo " ";
        if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Anuncio")) {
            // line 236
            echo "                    <span class=\"text-dark   pr-2 cl\">
                        ";
            // line 237
            if ((isset($context["deseo"]) ? $context["deseo"] : $this->getContext($context, "deseo"))) {
                // line 238
                echo "                        <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>
                        <a href=\"";
                // line 239
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_deldeseos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\"> En lista de deseos</a>
                        ";
            } else {
                // line 241
                echo "

                        <i class=\"fas fa-plus mr-1 font-weight-bold deselect bibIco \"></i>
                        <a href=\"";
                // line 244
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_adddeseos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\"> Añadir a lista de deseos</a>
                        ";
            }
            // line 246
            echo "                    </span>
                    ";
        }
        // line 248
        echo "            </div>
            <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">

                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla blanca\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/sun-selec.png"), "html", null, true);
        echo "\" id=\"blanca\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla sefia\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/sunset.png"), "html", null, true);
        echo "\" id=\"sefia\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla negra\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/moon.png"), "html", null, true);
        echo "\" id=\"negra\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Aumentar letra\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/font+.png"), "html", null, true);
        echo "\" id=\"letraUp\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Desminuir letra\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/font-.png"), "html", null, true);
        echo "\" id=\"letraDown\"> </img>
                        </i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!--Grid column-->

    <div class=\"container card mt-1 mb-5 px-0 py-0\" id=\"container2\">

        <div class=\"card-body\">
           ";
        // line 295
        echo "            <div id=\"imprimir\">
            ";
        // line 296
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enlaces"]) ? $context["enlaces"] : $this->getContext($context, "enlaces")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 297
            echo "            <div id=\"accordion\" class=\"mt-1\">
                <div class=\"card\">
                    <div class=\"card-header\" id=\"heading";
            // line 299
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idEnlace", array()), "html", null, true);
            echo "\">
                        <h5 class=\"mb-0\">
                            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse";
            // line 301
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idEnlace", array()), "html", null, true);
            echo "\" aria-expanded=\"false\"
                                aria-controls=\"collapseExample\">
                                Enlace de compra
                            </button>
                        </h5>
                    </div>

                    <div id=\"collapse";
            // line 308
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idEnlace", array()), "html", null, true);
            echo "\" class=\"collapse\" aria-labelledby=\"heading";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idEnlace", array()), "html", null, true);
            echo "\" data-parent=\"#accordion\">
                        <div class=\"card-body bigtext text-center\">
                            ";
            // line 311
            echo "
                            <a target=\"_blank\" href=\" ";
            // line 312
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
        // line 319
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["capitulos"]) ? $context["capitulos"] : $this->getContext($context, "capitulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 320
            echo "
                <!-- TODO:  Imprimir con este formato
                <h4 class=\"card-title\">
                    <span class=\"text-info font-weight-bold pr-2 small\">#";
            // line 323
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "</span>
                    <strong>";
            // line 324
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tituloCap", array()), "html", null, true);
            echo "</strong>
                </h4>
                <hr>
               
                <p class=\"card-text\" style=\"    \">";
            // line 328
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "contenidoCap", array()), "html", null, true);
            echo "
                </p> -->
                <div id=\"accordion\" class=\"mt-1\">
                    <div class=\"card\">
                        <div class=\"card-header\" id=\"heading";
            // line 332
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "\">
                            <h5 class=\"mb-0\">
                                <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse";
            // line 334
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "\" aria-expanded=\"false\"
                                    aria-controls=\"collapseExample\">
                                    #";
            // line 336
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tituloCap", array()), "html", null, true);
            echo "
                                </button>
                            </h5>
                        </div>

                        <div id=\"collapse";
            // line 341
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "\" class=\"collapse\" aria-labelledby=\"heading";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "\" data-parent=\"#accordion\">
                            <div class=\"card-body bigtext\">
                                ";
            // line 343
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "contenidoCap", array()), "html", null, true);
            echo " ";
            // line 344
            echo "                                <pre>  </pre>
                                <div></div>
                                <!-- Comentarios capitulo -->
                                <!--Main wrapper-->
                            <div class=\"section-heading h3 text-center\" >
                                <a data-toggle=\"collapse\" href=\"#comentariosss";
            // line 349
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                                     ";
            // line 350
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                // line 351
                echo "                                   Deja un comentario
                               ";
            } elseif ( !$this->getAttribute(            // line 352
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                // line 353
                echo "                                  Inicia sesión o Regístrate para comentar 
                               ";
            }
            // line 355
            echo "                                </a>
                                </div>
                                <div id=\"comentariosss";
            // line 357
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" class=\"collapse\">
                                <div class=\"comments-list text-center text-md-left mb-5\">
                                        ";
            // line 359
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                // line 360
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
                // line 372
                if ((isset($context["fUser"]) ? $context["fUser"] : $this->getContext($context, "fUser"))) {
                    // line 373
                    echo "                                                        <img src=\"data:image/jpeg;base64,";
                    echo twig_escape_filter($this->env, (isset($context["fUser"]) ? $context["fUser"] : $this->getContext($context, "fUser")), "html", null, true);
                    echo "\" class=\" img-fluid avatar rounded-circle z-depth-2\"> ";
                } else {
                    // line 374
                    echo "                                                        <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg\" alt=\"Sample avatar image\" class=\"\"> ";
                }
                // line 375
                echo "                                                    </div>
                                                    <!--/.Image column-->

                                                    <!--Content column-->
                                                    <div class=\"col-sm-10 col-12\">
                                                        <!--Grid row-->
                                                        <form name=\"formUpdatePerfil\" action=\"";
                // line 381
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_comentarCapitulo", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"), "numCap" => $this->getAttribute($context["item"], "numCapitulo", array()))), "html", null, true);
                echo "\"
                                                            method=\"POST\" enctype=\"multipart/form-data\">

                                                            <div class=\"row\">

                                                                <div class=\"col-12 mt-1\">
                                                                    <div class=\"form-group basic-textarea rounded-corners shadow-textarea\">

                                                                        <textarea class=\"form-control\" id=\"exampleFormControlTextarea6\" rows=\"5\" placeholder=\"Tu comentario...\" name=\"comentarioCap\"
                                                                            value=";
                // line 390
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
            // line 410
            echo "                                    <div class=\"text-center mb-4\">

                                        <h3>
                                            <a data-toggle=\"collapse\" href=\"#comentarios";
            // line 413
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                                                Comentarios
                                                ";
            // line 416
            echo "                                                <span class=\"badge blue\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["comentariosCap"]) ? $context["comentariosCap"] : $this->getContext($context, "comentariosCap")), ($this->getAttribute($context["item"], "numCapitulo", array()) - 1), array(), "array")), "html", null, true);
            echo "</span>
                                            </a>

                                        </h3>
                                    </div>
                                    <!--Comment row-->
                                    <div id=\"comentarios";
            // line 422
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" class=\"collapse\">
                                 
                                         ";
            // line 424
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["comentariosCap"]) ? $context["comentariosCap"] : $this->getContext($context, "comentariosCap")), ($this->getAttribute($context["item"], "numCapitulo", array()) - 1), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "  
                                        <div class=\"row mb-4\">
                                            <!--Image column-->
                                            <div class=\"col-sm-2 col-12 mb-md-0 mb-3\">
                                                <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg\" class=\"avatar rounded-circle z-depth-1-half\">
                                            </div>
                                            <!--/.Image column-->
                                            <!--Content column-->
                                            <div class=\"col-sm-10 col-12\">
                                                <a>
                                                    <h4 class=\"font-weight-bold\">";
                // line 434
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "apellidos", array()), "html", null, true);
                echo "   
                                                    </h4>
                                                </a>
                                                <div class=\"mt-2\">
                                                    <ul class=\"list-unstyled\">
                                                        <li class=\"comment-date\">
                                                            <i class=\"fa fa-clock-o\"></i> ";
                // line 440
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fecha", array()), "html", null, true);
                echo "</li>
                                                    </ul>
                                                </div>
                                                <p class=\"grey-text\">";
                // line 443
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
            // line 448
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
        // line 463
        echo "                    </div>
                </div>

            </div>

            <!-- Autor -->

            <!-- ./ Autor -->

            <script>
                function pruebaDivAPdf() {
                    var pdf = new jsPDF('p', 'pt', 'letter');
                    source = \$('#imprimir')[0];

                    specialElementHandlers = {
                        '#bypassme': function (element, renderer) {
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
                            pdf.save('Prueba.pdf');
                        }, margins
                    );
                }
            </script>

        </div>
        <!-- Autor -->
        <div class=\"container card mt-1 mb-5 px-0 py-0\">
            <section class=\"text-center text-md-left\">
                <div class=\"card card-body\">

                    <div class=\"row\">
                        <!--Avatar-->
                        <div class=\"col-12 col-sm-2 mb-md-0 mb-3\">


                            ";
        // line 515
        if ((isset($context["fotoAutor"]) ? $context["fotoAutor"] : $this->getContext($context, "fotoAutor"))) {
            // line 516
            echo "                            <img src=\"data:image/jpeg;base64,";
            echo twig_escape_filter($this->env, (isset($context["fotoAutor"]) ? $context["fotoAutor"] : $this->getContext($context, "fotoAutor")), "html", null, true);
            echo "\" class=\" img-fluid rounded-circle\" alt=\"sample image\"> ";
        } else {
            // line 517
            echo "                            <img src=\"http://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg\" class=\"img-fluid rounded-circle\" alt=\"sample image\"> ";
        }
        // line 518
        echo "                        </div>
                        <!--Author Data-->
                        <div class=\"col-12 col-sm-10\">
                            ";
        // line 521
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["autor"]) ? $context["autor"] : $this->getContext($context, "autor")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 522
            echo "                            <p>
                                <strong>";
            // line 523
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "apellidos", array()), "html", null, true);
            echo "</strong>
                            </p>
                            <div class=\"personal-sm\">
                                <a href=\"\" class=\"pr-2 fb-ic\">
                                    Ver perfil
                                </a>

                            </div>
                            <p class=\"dark-grey-text article\">";
            // line 531
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "biografia", array()), "html", null, true);
            echo "
                            </p>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 534
        echo "                        </div>
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
        // line 967
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 968
            echo "     <h3 class=\"section-heading h3 \">Deja un comentario </h3>
";
        } elseif ( !$this->getAttribute(        // line 969
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 970
            echo "     <h3 class=\"section-heading h3 \">Inicia sesión o Regístrate para comentar</h3>
";
        }
        // line 972
        echo "
          
            <div class=\"comments-list text-center text-md-left mb-5\">
                ";
        // line 975
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo "   
                <!--Section: Leave a reply (Logged In User)-->
                <section class=\"mb-4 mt-4\">

                    <!--Leave a reply form-->
                    <div class=\"reply-form\">
                        
                        <!--Third row-->
                        <div class=\"row\">
                            <!--Image column-->
                            <div class=\"col-sm-2 col-12\">

                                ";
            // line 987
            if ((isset($context["fUser"]) ? $context["fUser"] : $this->getContext($context, "fUser"))) {
                // line 988
                echo "                                <img src=\"data:image/jpeg;base64,";
                echo twig_escape_filter($this->env, (isset($context["fUser"]) ? $context["fUser"] : $this->getContext($context, "fUser")), "html", null, true);
                echo "\" class=\" img-fluid avatar rounded-circle z-depth-2\"> ";
            } else {
                // line 989
                echo "                                <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg\" alt=\"Sample avatar image\" class=\"\"> ";
            }
            // line 990
            echo "                            </div>
                            <!--/.Image column-->

                            <!--Content column-->
                            <div class=\"col-sm-10 col-12\">
                                <!--Grid row-->
                                <form name=\"formUpdatePerfil\" action=\"";
            // line 996
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_comentarLibro", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
            echo "\" method=\"POST\"
                                    enctype=\"multipart/form-data\">

                                    <div class=\"row\">

                                        <div class=\"col-12 mt-1\">
                                            <div class=\"form-group basic-textarea rounded-corners shadow-textarea\">

                                                <textarea class=\"form-control\" id=\"exampleFormControlTextarea6\" rows=\"5\" placeholder=\"Tu comentario...\" name=\"comentario\"
                                                    value=";
            // line 1005
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
        // line 1025
        echo "                <div class=\"text-center mb-4\"> 
                    <h3>
                        <a data-toggle=\"collapse\" href=\"#comentarios\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                            Comentarios
                            <span class=\"badge blue\">";
        // line 1029
        echo twig_escape_filter($this->env, (isset($context["cComent"]) ? $context["cComent"] : $this->getContext($context, "cComent")), "html", null, true);
        echo "</span>
                        </a>

                    </h3>
                </div>
                <!--Comment row-->
                <div id=\"comentarios\" class=\"collapse\">
                    ";
        // line 1036
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comentarios"]) ? $context["comentarios"] : $this->getContext($context, "comentarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1037
            echo "                    <div class=\"row mb-4\">
                        <!--Image column-->
                        <div class=\"col-sm-2 col-12 mb-md-0 mb-3\">
                            <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg\" class=\"avatar rounded-circle z-depth-1-half\">
                        </div>
                        <!--/.Image column-->
                        <!--Content column-->
                        <div class=\"col-sm-10 col-12\">
                            <a>
                                <h4 class=\"font-weight-bold\">";
            // line 1046
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "apellidos", array()), "html", null, true);
            echo "</h4>
                            </a>
                            <div class=\"mt-2\">
                                <ul class=\"list-unstyled\">
                                    <li class=\"comment-date\">
                                        <i class=\"fa fa-clock-o\"></i> ";
            // line 1051
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fecha", array()), "html", null, true);
            echo "</li>
                                </ul>
                            </div>
                            <p class=\"grey-text\">";
            // line 1054
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
        // line 1060
        echo "                </div>
                <!--/.Comment row-->

                </div>
                <!--/.Main wrapper-->

            </div>
            <!-- ./Comentarios -->
        </div>


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
        return array (  1472 => 1060,  1460 => 1054,  1454 => 1051,  1444 => 1046,  1433 => 1037,  1429 => 1036,  1419 => 1029,  1413 => 1025,  1390 => 1005,  1378 => 996,  1370 => 990,  1367 => 989,  1362 => 988,  1360 => 987,  1345 => 975,  1340 => 972,  1336 => 970,  1334 => 969,  1331 => 968,  1329 => 967,  894 => 534,  885 => 531,  872 => 523,  869 => 522,  865 => 521,  860 => 518,  857 => 517,  852 => 516,  850 => 515,  796 => 463,  776 => 448,  764 => 443,  758 => 440,  747 => 434,  732 => 424,  727 => 422,  717 => 416,  712 => 413,  707 => 410,  684 => 390,  672 => 381,  664 => 375,  661 => 374,  656 => 373,  654 => 372,  640 => 360,  638 => 359,  633 => 357,  629 => 355,  625 => 353,  623 => 352,  620 => 351,  618 => 350,  614 => 349,  607 => 344,  604 => 343,  597 => 341,  587 => 336,  582 => 334,  577 => 332,  570 => 328,  563 => 324,  559 => 323,  554 => 320,  549 => 319,  534 => 312,  531 => 311,  524 => 308,  514 => 301,  509 => 299,  505 => 297,  501 => 296,  498 => 295,  483 => 282,  473 => 275,  463 => 268,  453 => 261,  443 => 254,  435 => 248,  431 => 246,  426 => 244,  421 => 241,  416 => 239,  413 => 238,  411 => 237,  408 => 236,  405 => 235,  401 => 234,  395 => 231,  392 => 230,  387 => 228,  384 => 227,  382 => 226,  377 => 223,  371 => 220,  368 => 219,  363 => 217,  360 => 216,  358 => 215,  355 => 214,  352 => 213,  348 => 210,  345 => 209,  342 => 206,  336 => 204,  330 => 202,  328 => 201,  319 => 195,  313 => 192,  310 => 191,  298 => 178,  291 => 168,  262 => 146,  258 => 144,  253 => 141,  251 => 140,  247 => 139,  241 => 136,  225 => 122,  215 => 115,  209 => 113,  204 => 112,  202 => 111,  188 => 99,  170 => 77,  167 => 76,  158 => 73,  154 => 72,  146 => 70,  143 => 69,  132 => 66,  128 => 65,  120 => 63,  118 => 62,  111 => 57,  106 => 54,  101 => 51,  99 => 50,  82 => 35,  76 => 33,  70 => 31,  68 => 30,  42 => 7,  35 => 2,  11 => 1,);
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
/*                 */
/*                     {% if tipoLibro == "Anuncio" %}*/
/*                     Enlnaces de compra  de : {{item.titulo}}*/
/*                     {% else %}*/
/*                    Capítulos de : {{item.titulo}}*/
/*                     {% endif %}*/
/* */
/*                 */
/*                 */
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
/*                          */
/*                            {% if tipoLibro == "Anuncio" %}*/
/*                      <th>Página de compra</th>*/
/*                             <th>Enlace</th>*/
/*                     {% else %}*/
/*                      <th>Nº Capítulo</th>*/
/*                             <th>Titulo</th>*/
/*                     {% endif %}*/
/* */
/* */
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                          {% if tipoLibro == "Anuncio" %}*/
/*                      {% for item in enlaces %} */
/*                         <tr>*/
/*                             <td class="tdl">{{item.paginaLibro}}</td>*/
/*                             <td class="tdl"> <a target="_blank" href="{{item.enlaceLibro}}">{{item.enlaceLibro}}</a></td>*/
/*                         </tr>*/
/*                         {% endfor %}*/
/*                     {% else %}*/
/*                       {% for item in capitulos %} */
/*                         <tr>*/
/*                             <td class="tdl">{{item.numCapitulo}}</td>*/
/*                             <td class="tdl">{{item.tituloCap}}</td>*/
/*                         </tr>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
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
/* <div class="streak streak-photo streak-md  portada " style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg'); margin-top: 27px;">*/
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
/*                         <div class="  view overlay">*/
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
/*                 <!--Grid column-->*/
/*                 <div class="col-lg-8 col-md-12 pb-lg-5 mb-4">*/
/*                     <div class="mask rgba-white-light">*/
/*                         <div class="dark-grey-text  pt-4 ml-3 pl-3"> */
/*                             <div>*/
/*                                 <a>*/
/*                                     <span class="badge badge-danger">{{item.nombre}}</span>*/
/*                                 </a>*/
/*                                 <h2 class="card-title font-weight-bold pt-2  " style="color:  black;">*/
/*                                     <strong>{{item.titulo}}</strong> */
/*                                     {% if tipoLibro == "Anuncio" %}*/
/*                                     <span class="badge blue">En venta</span>*/
/* */
/*                                     {% endif %}*/
/*                                 </h2>*/
/*                                 <div class="col-12">*/
/*                                 <p style="min-height: 120px;color:  black;">{{item.descLib}} </p>*/
/*                               </div>*/
/*                                 <!-- Button  modal -->*/
/*                                 <button type="button" class="btn btn-danger btn-sm btn-rounded clearfix  d-md-inline-block waves-effect waves-light video videoff"*/
/*                                     data-video="https://www.youtube.com/embed/8uYspagia_s?rel=0&showinfo=0" data-toggle="modal"*/
/*                                     data-target="#exampleModal">*/
/*                                     <i class="fab fa-youtube mr-1"></i> Book Trailer*/
/*                                 </button>*/
/* */
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
/* <div class="container-fluid pl-0 pr-0" style="background-color: #f4f5f6;" id="container1">*/
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
/*                     <a id="addBiblio" href="{{ path('dwes_libros_addbiblioteca', {'idLibro' : app.request.get('idLibro')}) }}" class="guardarScroll" ></a>*/
/* */
/* */
/*                     <a id="delBiblio" href="{{ path('dwes_libros_ajustes' ) }}" class="guardarScroll"></a>*/
/*                 </div>*/
/*                 <button type="button" class="btn purple-gradient btn-sm gcapitulo " data-toggle="modal" data-target="#ModalCapitulos">*/
/*                     <i class="fab fa-readme mr-2"></i>*/
/*                     */
/* */
/*                     {% if tipoLibro == "Anuncio" %}*/
/*                      <span>{{countEnlaces}}</span> Enlaces*/
/*                     {% else %}*/
/*                     <span>{{numCap}}</span> Capítulos*/
/*                     {% endif %}*/
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
/*                         <a href="{{ path('dwes_libros_addbiblioteca', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl guardarScroll"> Añadir a mi lista</a>*/
/* */
/*                         {% endif %}*/
/*                     </span>*/
/* */
/*                     <span class="text-dark   pr-2 cl" id="enfavoritos">*/
/*                         {% if favorito %}*/
/*                         <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>*/
/*                         <a href="{{ path('dwes_libros_delfavoritos', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl guardarScroll"> Eliminar de favoritos</a>*/
/*                         {% else %}*/
/*                         <i class="fas fa-plus mr-1 font-weight-bold deselect bibIco "></i>*/
/*                         <a href="{{ path('dwes_libros_addfavoritos', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl guardarScroll"> Añadir a favoritos</a>*/
/* */
/*                         {% endif %}*/
/*                     </span>*/
/*                     {% endif %} {% if tipoLibro == "Anuncio" %}*/
/*                     <span class="text-dark   pr-2 cl">*/
/*                         {% if deseo %}*/
/*                         <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>*/
/*                         <a href="{{ path('dwes_libros_deldeseos', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl guardarScroll"> En lista de deseos</a>*/
/*                         {% else %}*/
/* */
/* */
/*                         <i class="fas fa-plus mr-1 font-weight-bold deselect bibIco "></i>*/
/*                         <a href="{{ path('dwes_libros_adddeseos', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl guardarScroll"> Añadir a lista de deseos</a>*/
/*                         {% endif %}*/
/*                     </span>*/
/*                     {% endif %}*/
/*             </div>*/
/*             <ul class="nav navbar-nav nav-flex-icons ml-auto">*/
/* */
/*                 <li class="nav-item">*/
/*                     <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Pantalla blanca">*/
/*                         <i class="mb-2">*/
/*                             <img src="{{ asset('bundles/dweslibros/img/icons/sun-selec.png') }}" id="blanca"> </img>*/
/*                         </i>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Pantalla sefia">*/
/*                         <i class="mb-2">*/
/*                             <img src="{{ asset('bundles/dweslibros/img/icons/sunset.png') }}" id="sefia"> </img>*/
/*                         </i>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Pantalla negra">*/
/*                         <i class="mb-2">*/
/*                             <img src="{{ asset('bundles/dweslibros/img/icons/moon.png') }}" id="negra"> </img>*/
/*                         </i>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Aumentar letra">*/
/*                         <i class="mb-2">*/
/*                             <img src="{{ asset('bundles/dweslibros/img/icons/font+.png') }}" id="letraUp"> </img>*/
/*                         </i>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Desminuir letra">*/
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
/*     <div class="container card mt-1 mb-5 px-0 py-0" id="container2">*/
/* */
/*         <div class="card-body">*/
/*            {#    <a href="javascript:pruebaDivAPdf()" class="button">Pasar a PDF</a>  #}*/
/*             <div id="imprimir">*/
/*             {% for item in enlaces%}*/
/*             <div id="accordion" class="mt-1">*/
/*                 <div class="card">*/
/*                     <div class="card-header" id="heading{{item.idEnlace}}">*/
/*                         <h5 class="mb-0">*/
/*                             <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{item.idEnlace}}" aria-expanded="false"*/
/*                                 aria-controls="collapseExample">*/
/*                                 Enlace de compra*/
/*                             </button>*/
/*                         </h5>*/
/*                     </div>*/
/* */
/*                     <div id="collapse{{item.idEnlace}}" class="collapse" aria-labelledby="heading{{item.idEnlace}}" data-parent="#accordion">*/
/*                         <div class="card-body bigtext text-center">*/
/*                             {# {{html}} #}*/
/* */
/*                             <a target="_blank" href=" {{item.enlaceLibro}}"> {{item.paginaLibro}}</a> */
/*                                 </div>*/
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*             {% endfor %}*/
/*                 {% for item in capitulos%}*/
/* */
/*                 <!-- TODO:  Imprimir con este formato*/
/*                 <h4 class="card-title">*/
/*                     <span class="text-info font-weight-bold pr-2 small">#{{item.numCapitulo}}</span>*/
/*                     <strong>{{item.tituloCap}}</strong>*/
/*                 </h4>*/
/*                 <hr>*/
/*                */
/*                 <p class="card-text" style="    ">{{item.contenidoCap}}*/
/*                 </p> -->*/
/*                 <div id="accordion" class="mt-1">*/
/*                     <div class="card">*/
/*                         <div class="card-header" id="heading{{item.numCapitulo}}">*/
/*                             <h5 class="mb-0">*/
/*                                 <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{item.numCapitulo}}" aria-expanded="false"*/
/*                                     aria-controls="collapseExample">*/
/*                                     #{{item.numCapitulo}} {{item.tituloCap}}*/
/*                                 </button>*/
/*                             </h5>*/
/*                         </div>*/
/* */
/*                         <div id="collapse{{item.numCapitulo}}" class="collapse" aria-labelledby="heading{{item.numCapitulo}}" data-parent="#accordion">*/
/*                             <div class="card-body bigtext">*/
/*                                 {{item.contenidoCap}} {# {{html}} #}*/
/*                                 <pre>  </pre>*/
/*                                 <div></div>*/
/*                                 <!-- Comentarios capitulo -->*/
/*                                 <!--Main wrapper-->*/
/*                             <div class="section-heading h3 text-center" >*/
/*                                 <a data-toggle="collapse" href="#comentariosss{{item.numCapitulo}} " role="button" aria-expanded="false" aria-controls="collapseExample">*/
/*                                      {% if app.user %}*/
/*                                    Deja un comentario*/
/*                                {% elseif not app.user %}*/
/*                                   Inicia sesión o Regístrate para comentar */
/*                                {% endif %}*/
/*                                 </a>*/
/*                                 </div>*/
/*                                 <div id="comentariosss{{item.numCapitulo}} " class="collapse">*/
/*                                 <div class="comments-list text-center text-md-left mb-5">*/
/*                                         {% if app.user %}*/
/*                                     <!--Section: Leave a reply (Logged In User)-->*/
/*                                     <section class="mb-4 mt-4"> */
/* */
/*                                         <!--Leave a reply form--> */
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
/*                                                 Comentarios*/
/*                                                 {# Muestro el número de comentarios del array con | lenght #}*/
/*                                                 <span class="badge blue">{{ comentariosCap[item.numCapitulo -1 ] | length }}</span>*/
/*                                             </a>*/
/* */
/*                                         </h3>*/
/*                                     </div>*/
/*                                     <!--Comment row-->*/
/*                                     <div id="comentarios{{item.numCapitulo}} " class="collapse">*/
/*                                  */
/*                                          {% for item in comentariosCap[item.numCapitulo -1 ] %}  */
/*                                         <div class="row mb-4">*/
/*                                             <!--Image column-->*/
/*                                             <div class="col-sm-2 col-12 mb-md-0 mb-3">*/
/*                                                 <img src="https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg" class="avatar rounded-circle z-depth-1-half">*/
/*                                             </div>*/
/*                                             <!--/.Image column-->*/
/*                                             <!--Content column-->*/
/*                                             <div class="col-sm-10 col-12">*/
/*                                                 <a>*/
/*                                                     <h4 class="font-weight-bold">{{item.nombre}} {{item.apellidos}}   */
/*                                                     </h4>*/
/*                                                 </a>*/
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
/*                                         {% endfor %} */
/*                               */
/*                                     </div>*/
/*                                     <!--/.Comment row-->*/
/* */
/*                                     </div>*/
/*                                     <!--/.Main wrapper-->*/
/*                                     <!-- /. Comentarios capitulo -->*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*             <!-- Autor -->*/
/* */
/*             <!-- ./ Autor -->*/
/* */
/*             <script>*/
/*                 function pruebaDivAPdf() {*/
/*                     var pdf = new jsPDF('p', 'pt', 'letter');*/
/*                     source = $('#imprimir')[0];*/
/* */
/*                     specialElementHandlers = {*/
/*                         '#bypassme': function (element, renderer) {*/
/*                             return true*/
/*                         }*/
/*                     };*/
/*                     margins = {*/
/*                         top: 80,*/
/*                         bottom: 60,*/
/*                         left: 40,*/
/*                         width: 522*/
/*                     };*/
/* */
/*                     pdf.fromHTML(*/
/*                         source,*/
/*                         margins.left, // x coord*/
/*                         margins.top, { // y coord*/
/*                             'width': margins.width,*/
/*                             'elementHandlers': specialElementHandlers*/
/*                         },*/
/* */
/*                         function (dispose) {*/
/*                             pdf.save('Prueba.pdf');*/
/*                         }, margins*/
/*                     );*/
/*                 }*/
/*             </script>*/
/* */
/*         </div>*/
/*         <!-- Autor -->*/
/*         <div class="container card mt-1 mb-5 px-0 py-0">*/
/*             <section class="text-center text-md-left">*/
/*                 <div class="card card-body">*/
/* */
/*                     <div class="row">*/
/*                         <!--Avatar-->*/
/*                         <div class="col-12 col-sm-2 mb-md-0 mb-3">*/
/* */
/* */
/*                             {% if fotoAutor %}*/
/*                             <img src="data:image/jpeg;base64,{{fotoAutor}}" class=" img-fluid rounded-circle" alt="sample image"> {% else %}*/
/*                             <img src="http://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" class="img-fluid rounded-circle" alt="sample image"> {% endif %}*/
/*                         </div>*/
/*                         <!--Author Data-->*/
/*                         <div class="col-12 col-sm-10">*/
/*                             {% for item in autor %}*/
/*                             <p>*/
/*                                 <strong>{{item.nombre}} {{item.apellidos}}</strong>*/
/*                             </p>*/
/*                             <div class="personal-sm">*/
/*                                 <a href="" class="pr-2 fb-ic">*/
/*                                     Ver perfil*/
/*                                 </a>*/
/* */
/*                             </div>*/
/*                             <p class="dark-grey-text article">{{item.biografia}}*/
/*                             </p>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*             <!-- ./Autor -->*/
/* */
/*         </div>*/
/*         <!-- Te puede gustar -->*/
/*         <div class="container  mt-1 mb-5 px-0 py-0">*/
/*             <section class="text-left mt-4">*/
/* */
/*                 <h5 class="font-weight-bold mt-5">*/
/*                     <strong>YOU MIGHT ALSO LIKE</strong>*/
/*                 </h5>*/
/*                 <hr class="red title-hr">*/
/* */
/*                 <!--Carousel Wrapper-->*/
/*                 <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">*/
/* */
/*                     <!--Indicators-->*/
/*                     <ol class="carousel-indicators">*/
/*                         <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>*/
/*                         <li data-target="#multi-item-example" data-slide-to="1" class=""></li>*/
/*                         <li data-target="#multi-item-example" data-slide-to="2" class=""></li>*/
/*                     </ol>*/
/*                     <!--/.Indicators-->*/
/* */
/*                     <!--Slides-->*/
/*                     <div class="carousel-inner" role="listbox">*/
/* */
/*                         <!--First slide-->*/
/*                         <div class="carousel-item active">*/
/* */
/*                             <!--Grid row-->*/
/*                             <div class="row mb-4">*/
/* */
/*                                 <!--Grid column-->*/
/*                                 <div class="col-lg-4 my-3">*/
/*                                     <!--Card-->*/
/*                                     <div class="card">*/
/* */
/*                                         <!--Card image-->*/
/*                                         <div class="view overlay">*/
/*                                             <img src="http://mdbootstrap.com/img/Photos/Others/img (43).jpg" class="card-img-top" alt="sample image">*/
/*                                             <a>*/
/*                                                 <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                             </a>*/
/*                                         </div>*/
/*                                         <!--/.Card image-->*/
/* */
/*                                         <!--Card content-->*/
/*                                         <div class="card-body">*/
/*                                             <!--Title-->*/
/*                                             <h4 class="card-title">*/
/*                                                 <strong>Card title</strong>*/
/*                                             </h4>*/
/*                                             <hr>*/
/* */
/*                                             <p></p>*/
/*                                             <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                                 <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                             <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                             <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                                 <a>read more*/
/*                                                     <i class="fa fa-angle-right"></i>*/
/*                                                 </a>*/
/*                                             </p>*/
/*                                         </div>*/
/*                                         <!--/.Card content-->*/
/* */
/*                                     </div>*/
/*                                     <!--/.Card-->*/
/* */
/*                                 </div>*/
/*                                 <!--Grid column-->*/
/* */
/*                                 <!--Grid column-->*/
/*                                 <div class="col-lg-4 text-left mt-3">*/
/* */
/*                                     <!--Card-->*/
/*                                     <div class="card">*/
/* */
/*                                         <!--Card image-->*/
/*                                         <div class="view overlay">*/
/*                                             <img src="http://mdbootstrap.com/img/Photos/Others/img (39).jpg" class="card-img-top" alt="sample image">*/
/*                                             <a>*/
/*                                                 <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                             </a>*/
/*                                         </div>*/
/*                                         <!--/.Card image-->*/
/* */
/*                                         <!--Card content-->*/
/*                                         <div class="card-body">*/
/*                                             <!--Title-->*/
/*                                             <h4 class="card-title">*/
/*                                                 <strong>Card title</strong>*/
/*                                             </h4>*/
/*                                             <hr>*/
/* */
/*                                             <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                                 <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                             <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                             <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                                 <a>read more*/
/*                                                     <i class="fa fa-angle-right"></i>*/
/*                                                 </a>*/
/*                                             </p>*/
/*                                         </div>*/
/*                                         <!--/.Card content-->*/
/* */
/*                                     </div>*/
/*                                     <!--/.Card-->*/
/*                                 </div>*/
/*                                 <!--Grid column-->*/
/* */
/*                                 <!--Grid column-->*/
/*                                 <div class="col-lg-4 text-left mt-3">*/
/* */
/*                                     <!--Card-->*/
/*                                     <div class="card">*/
/* */
/*                                         <!--Card image-->*/
/*                                         <div class="view overlay">*/
/*                                             <img src="http://mdbootstrap.com/img/Photos/Others/img (46).jpg" class="card-img-top" alt="sample image">*/
/*                                             <a>*/
/*                                                 <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                             </a>*/
/*                                         </div>*/
/*                                         <!--/.Card image-->*/
/* */
/*                                         <!--Card content-->*/
/*                                         <div class="card-body">*/
/*                                             <!--Title-->*/
/*                                             <h4 class="card-title">*/
/*                                                 <strong>Card title</strong>*/
/*                                             </h4>*/
/*                                             <hr>*/
/* */
/*                                             <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                                 <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                             <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                             <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                                 <a>read more*/
/*                                                     <i class="fa fa-angle-right"></i>*/
/*                                                 </a>*/
/*                                             </p>*/
/*                                         </div>*/
/*                                         <!--/.Card content-->*/
/* */
/*                                     </div>*/
/*                                     <!--/.Card-->*/
/*                                 </div>*/
/*                                 <!--Grid column-->*/
/* */
/*                             </div>*/
/*                             <!--/Grid row-->*/
/* */
/*                         </div>*/
/*                         <!--/.First slide-->*/
/* */
/*                         <!--Second slide-->*/
/*                         <div class="carousel-item">*/
/* */
/*                             <!--Grid row-->*/
/*                             <div class="row mb-4">*/
/* */
/*                                 <!--Grid column-->*/
/*                                 <div class="col-lg-4 my-3">*/
/*                                     <!--Card-->*/
/*                                     <div class="card">*/
/* */
/*                                         <!--Card image-->*/
/*                                         <div class="view overlay">*/
/*                                             <img src="http://mdbootstrap.com/img/Photos/Others/img (40).jpg" class="card-img-top" alt="sample image">*/
/*                                             <a>*/
/*                                                 <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                             </a>*/
/*                                         </div>*/
/*                                         <!--/.Card image-->*/
/* */
/*                                         <!--Card content-->*/
/*                                         <div class="card-body">*/
/*                                             <!--Title-->*/
/*                                             <h4 class="card-title">*/
/*                                                 <strong>Card title</strong>*/
/*                                             </h4>*/
/*                                             <hr>*/
/* */
/*                                             <p></p>*/
/*                                             <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                                 <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                             <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                             <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                                 <a>read more*/
/*                                                     <i class="fa fa-angle-right"></i>*/
/*                                                 </a>*/
/*                                             </p>*/
/*                                         </div>*/
/*                                         <!--/.Card content-->*/
/* */
/*                                     </div>*/
/*                                     <!--/.Card-->*/
/* */
/*                                 </div>*/
/*                                 <!--Grid column-->*/
/* */
/*                                 <!--Grid column-->*/
/*                                 <div class="col-lg-4 text-left mt-3">*/
/* */
/*                                     <!--Card-->*/
/*                                     <div class="card">*/
/* */
/*                                         <!--Card image-->*/
/*                                         <div class="view overlay">*/
/*                                             <img src="http://mdbootstrap.com/img/Photos/Others/img (45).jpg" class="card-img-top" alt="sample image">*/
/*                                             <a>*/
/*                                                 <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                             </a>*/
/*                                         </div>*/
/*                                         <!--/.Card image-->*/
/* */
/*                                         <!--Card content-->*/
/*                                         <div class="card-body">*/
/*                                             <!--Title-->*/
/*                                             <h4 class="card-title">*/
/*                                                 <strong>Card title</strong>*/
/*                                             </h4>*/
/*                                             <hr>*/
/* */
/*                                             <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                                 <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                             <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                             <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                                 <a>read more*/
/*                                                     <i class="fa fa-angle-right"></i>*/
/*                                                 </a>*/
/*                                             </p>*/
/*                                         </div>*/
/*                                         <!--/.Card content-->*/
/* */
/*                                     </div>*/
/*                                     <!--/.Card-->*/
/*                                 </div>*/
/*                                 <!--Grid column-->*/
/* */
/*                                 <!--Grid column-->*/
/*                                 <div class="col-lg-4 text-left mt-3">*/
/* */
/*                                     <!--Card-->*/
/*                                     <div class="card">*/
/* */
/*                                         <!--Card image-->*/
/*                                         <div class="view overlay">*/
/*                                             <img src="http://mdbootstrap.com/img/Photos/Others/img (35).jpg" class="card-img-top" alt="sample image">*/
/*                                             <a>*/
/*                                                 <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                             </a>*/
/*                                         </div>*/
/*                                         <!--/.Card image-->*/
/* */
/*                                         <!--Card content-->*/
/*                                         <div class="card-body">*/
/*                                             <!--Title-->*/
/*                                             <h4 class="card-title">*/
/*                                                 <strong>Card title</strong>*/
/*                                             </h4>*/
/*                                             <hr>*/
/* */
/*                                             <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                                 <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                             <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                             <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                                 <a>read more*/
/*                                                     <i class="fa fa-angle-right"></i>*/
/*                                                 </a>*/
/*                                             </p>*/
/*                                         </div>*/
/*                                         <!--/.Card content-->*/
/* */
/*                                     </div>*/
/*                                     <!--/.Card-->*/
/*                                 </div>*/
/*                                 <!--Grid column-->*/
/* */
/*                             </div>*/
/*                             <!--/Grid row-->*/
/*                         </div>*/
/*                         <!--/.Second slide-->*/
/* */
/*                         <!--Third slide-->*/
/*                         <div class="carousel-item">*/
/* */
/*                             <!--Grid row-->*/
/*                             <div class="row mb-4">*/
/* */
/*                                 <!--Grid column-->*/
/*                                 <div class="col-lg-4 my-3">*/
/*                                     <!--Card-->*/
/*                                     <div class="card">*/
/* */
/*                                         <!--Card image-->*/
/*                                         <div class="view overlay">*/
/*                                             <img src="http://mdbootstrap.com/img/Photos/Others/img (30).jpg" class="card-img-top" alt="sample image">*/
/*                                             <a>*/
/*                                                 <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                             </a>*/
/*                                         </div>*/
/*                                         <!--/.Card image-->*/
/* */
/*                                         <!--Card content-->*/
/*                                         <div class="card-body">*/
/*                                             <!--Title-->*/
/*                                             <h4 class="card-title">*/
/*                                                 <strong>Card title</strong>*/
/*                                             </h4>*/
/*                                             <hr>*/
/* */
/*                                             <p></p>*/
/*                                             <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                                 <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                             <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                             <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                                 <a>read more*/
/*                                                     <i class="fa fa-angle-right"></i>*/
/*                                                 </a>*/
/*                                             </p>*/
/*                                         </div>*/
/*                                         <!--/.Card content-->*/
/* */
/*                                     </div>*/
/*                                     <!--/.Card-->*/
/* */
/*                                 </div>*/
/*                                 <!--Grid column-->*/
/* */
/*                                 <!--Grid column-->*/
/*                                 <div class="col-lg-4 text-left mt-3">*/
/* */
/*                                     <!--Card-->*/
/*                                     <div class="card">*/
/* */
/*                                         <!--Card image-->*/
/*                                         <div class="view overlay">*/
/*                                             <img src="http://mdbootstrap.com/img/Photos/Others/img (28).jpg" class="card-img-top" alt="sample image">*/
/*                                             <a>*/
/*                                                 <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                             </a>*/
/*                                         </div>*/
/*                                         <!--/.Card image-->*/
/* */
/*                                         <!--Card content-->*/
/*                                         <div class="card-body">*/
/*                                             <!--Title-->*/
/*                                             <h4 class="card-title">*/
/*                                                 <strong>Card title</strong>*/
/*                                             </h4>*/
/*                                             <hr>*/
/* */
/*                                             <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                                 <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                             <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                             <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                                 <a>read more*/
/*                                                     <i class="fa fa-angle-right"></i>*/
/*                                                 </a>*/
/*                                             </p>*/
/*                                         </div>*/
/*                                         <!--/.Card content-->*/
/* */
/*                                     </div>*/
/*                                     <!--/.Card-->*/
/*                                 </div>*/
/*                                 <!--Grid column-->*/
/* */
/*                                 <!--Grid column-->*/
/*                                 <div class="col-lg-4 text-left mt-3">*/
/* */
/*                                     <!--Card-->*/
/*                                     <div class="card">*/
/* */
/*                                         <!--Card image-->*/
/*                                         <div class="view overlay">*/
/*                                             <img src="http://mdbootstrap.com/img/Photos/Others/img (33).jpg" class="card-img-top" alt="sample image">*/
/*                                             <a>*/
/*                                                 <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                             </a>*/
/*                                         </div>*/
/*                                         <!--/.Card image-->*/
/* */
/*                                         <!--Card content-->*/
/*                                         <div class="card-body">*/
/*                                             <!--Title-->*/
/*                                             <h4 class="card-title">*/
/*                                                 <strong>Card title</strong>*/
/*                                             </h4>*/
/*                                             <hr>*/
/* */
/*                                             <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                                 <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                             <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                             <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                                 <a>read more*/
/*                                                     <i class="fa fa-angle-right"></i>*/
/*                                                 </a>*/
/*                                             </p>*/
/*                                         </div>*/
/*                                         <!--/.Card content-->*/
/* */
/*                                     </div>*/
/*                                     <!--/.Card-->*/
/*                                 </div>*/
/*                                 <!--Grid column-->*/
/*                             </div>*/
/*                             <!--/Grid row-->*/
/*                         </div>*/
/*                         <!--/.Third slide-->*/
/* */
/*                     </div>*/
/*                     <!--/.Slides-->*/
/* */
/*                 </div>*/
/*                 <!--/.Carousel Wrapper-->*/
/* */
/*             </section>*/
/* */
/* */
/*         </div>*/
/*         <!-- ./ Te puede gustar -->*/
/* */
/*         <!-- Comntarios -->*/
/*         <div class="container  mt-1 mb-5 px-0 py-0">*/
/* */
/*             <!--Main wrapper-->*/
/*             {% if app.user %}*/
/*      <h3 class="section-heading h3 ">Deja un comentario </h3>*/
/* {% elseif not app.user %}*/
/*      <h3 class="section-heading h3 ">Inicia sesión o Regístrate para comentar</h3>*/
/* {% endif %}*/
/* */
/*           */
/*             <div class="comments-list text-center text-md-left mb-5">*/
/*                 {% if app.user %}   */
/*                 <!--Section: Leave a reply (Logged In User)-->*/
/*                 <section class="mb-4 mt-4">*/
/* */
/*                     <!--Leave a reply form-->*/
/*                     <div class="reply-form">*/
/*                         */
/*                         <!--Third row-->*/
/*                         <div class="row">*/
/*                             <!--Image column-->*/
/*                             <div class="col-sm-2 col-12">*/
/* */
/*                                 {% if fUser %}*/
/*                                 <img src="data:image/jpeg;base64,{{fUser}}" class=" img-fluid avatar rounded-circle z-depth-2"> {% else %}*/
/*                                 <img src="https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg" alt="Sample avatar image" class=""> {% endif %}*/
/*                             </div>*/
/*                             <!--/.Image column-->*/
/* */
/*                             <!--Content column-->*/
/*                             <div class="col-sm-10 col-12">*/
/*                                 <!--Grid row-->*/
/*                                 <form name="formUpdatePerfil" action="{{ path('dwes_libros_comentarLibro',{'idLibro' : app.request.get('idLibro')} )}}" method="POST"*/
/*                                     enctype="multipart/form-data">*/
/* */
/*                                     <div class="row">*/
/* */
/*                                         <div class="col-12 mt-1">*/
/*                                             <div class="form-group basic-textarea rounded-corners shadow-textarea">*/
/* */
/*                                                 <textarea class="form-control" id="exampleFormControlTextarea6" rows="5" placeholder="Tu comentario..." name="comentario"*/
/*                                                     value={{comentario}}></textarea>*/
/*                                             </div>*/
/* */
/*                                             <div class="text-right">*/
/*                                                 <button type="submit" class="btn btn-primary btn-sm guardarScroll">Comentar</button>*/
/*                                             </div>*/
/* */
/*                                         </div>*/
/*                                 </form>*/
/*                                 </div>*/
/*                                 <!--Grid row-->*/
/* */
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <!--/.Leave a reply form-->*/
/* */
/*                 </section>*/
/*                 <!--/Section: Leave a reply (Logged In User)-->*/
/*                 {% endif %}*/
/*                 <div class="text-center mb-4"> */
/*                     <h3>*/
/*                         <a data-toggle="collapse" href="#comentarios" role="button" aria-expanded="false" aria-controls="collapseExample">*/
/*                             Comentarios*/
/*                             <span class="badge blue">{{cComent}}</span>*/
/*                         </a>*/
/* */
/*                     </h3>*/
/*                 </div>*/
/*                 <!--Comment row-->*/
/*                 <div id="comentarios" class="collapse">*/
/*                     {% for item in comentarios %}*/
/*                     <div class="row mb-4">*/
/*                         <!--Image column-->*/
/*                         <div class="col-sm-2 col-12 mb-md-0 mb-3">*/
/*                             <img src="https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg" class="avatar rounded-circle z-depth-1-half">*/
/*                         </div>*/
/*                         <!--/.Image column-->*/
/*                         <!--Content column-->*/
/*                         <div class="col-sm-10 col-12">*/
/*                             <a>*/
/*                                 <h4 class="font-weight-bold">{{item.nombre}} {{item.apellidos}}</h4>*/
/*                             </a>*/
/*                             <div class="mt-2">*/
/*                                 <ul class="list-unstyled">*/
/*                                     <li class="comment-date">*/
/*                                         <i class="fa fa-clock-o"></i> {{item.fecha}}</li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <p class="grey-text">{{item.comentario}}</p>*/
/*                         </div>*/
/*                         <!--/.Content column-->*/
/*                     </div>*/
/* */
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <!--/.Comment row-->*/
/* */
/*                 </div>*/
/*                 <!--/.Main wrapper-->*/
/* */
/*             </div>*/
/*             <!-- ./Comentarios -->*/
/*         </div>*/
/* */
/* */
/*         {%endblock %}*/
