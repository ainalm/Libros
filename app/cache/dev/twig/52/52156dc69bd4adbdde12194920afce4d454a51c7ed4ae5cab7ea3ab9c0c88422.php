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
                        <div class=\"  view overlay\">
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

                <!--Grid column-->
                <div class=\"col-lg-8 col-md-12 pb-lg-5 mb-4\">
                    <div class=\"mask rgba-white-light\">
                        <div class=\"dark-grey-text  pt-4 ml-3 pl-3\">
                            <div>
                                <a>
                                    <span class=\"badge badge-danger\">";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo "</span>
                                </a>
                                <h2 class=\"card-title font-weight-bold pt-2  \" style=\"color:  black;\">
                                    <strong>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
            echo "</strong>
                                    ";
            // line 135
            if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Anuncio")) {
                // line 136
                echo "                                    <span class=\"badge blue\">En venta</span>

                                    ";
            }
            // line 139
            echo "                                </h2>
                                <div class=\"col-12\">
                                    <p style=\"min-height: 120px;color:  black;\">";
            // line 141
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
        // line 163
        echo " ";
    }

    public function block_contenido($context, array $blocks = array())
    {
        echo " ";
        // line 173
        echo "


<div class=\"container-fluid pl-0 pr-0 container1\" style=\"background-color: #f4f5f6;\">

    <!--Grid column-->
    <div class=\"col-lg-12 col-md-12 mb-12 pl-0 pr-0\">
        <nav class=\"navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav indigo-text\">
            <!-- SideNav slide-out button -->

            <!-- Breadcrumb-->
            <div class=\"\">
                ";
        // line 188
        echo "                <div>
                    <a id=\"addBiblio\" href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_addbiblioteca", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
        echo "\" class=\"guardarScroll\"></a>


                    <a id=\"delBiblio\" href=\"";
        // line 192
        echo $this->env->getExtension('routing')->getPath("dwes_libros_ajustes");
        echo "\" class=\"guardarScroll\"></a>
                </div>
                <button type=\"button\" class=\"btn purple-gradient btn-sm gcapitulo \" data-toggle=\"modal\" data-target=\"#ModalCapitulos\">
                    <i class=\"fab fa-readme mr-2\"></i>


                    ";
        // line 198
        if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Anuncio")) {
            // line 199
            echo "                    <span>";
            echo twig_escape_filter($this->env, (isset($context["countEnlaces"]) ? $context["countEnlaces"] : $this->getContext($context, "countEnlaces")), "html", null, true);
            echo "</span> Enlaces ";
        } else {
            // line 200
            echo "                    <span>";
            echo twig_escape_filter($this->env, (isset($context["numCap"]) ? $context["numCap"] : $this->getContext($context, "numCap")), "html", null, true);
            echo "</span> Capítulos ";
        }
        // line 201
        echo "                </button>
                ";
        // line 204
        echo "
                <span class=\"green-text font-weight-bold pr-2 small\">";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["progreso"]) ? $context["progreso"] : $this->getContext($context, "progreso")), "html", null, true);
        echo "</span>
                ";
        // line 208
        echo " ";
        if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Gratis")) {
            // line 209
            echo "                    <span class=\"text-dark  pr-2 cl\" id=\"enbiblioteca\">
                        ";
            // line 210
            if ((isset($context["lista"]) ? $context["lista"] : $this->getContext($context, "lista"))) {
                // line 211
                echo "                        <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>
                        <a href=\"";
                // line 212
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_delbiblioteca", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">Eliminar de mi lista</a>
                        ";
            } else {
                // line 214
                echo "                        <i class=\"fas fa-plus mr-1 font-weight-bold deselect bibIco \"></i>
                        <a href=\"";
                // line 215
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_addbiblioteca", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">
                            Añadir a mi lista</a>

                        ";
            }
            // line 219
            echo "                    </span>

                    <span class=\"text-dark   pr-2 cl\" id=\"enfavoritos\">
                        ";
            // line 222
            if ((isset($context["favorito"]) ? $context["favorito"] : $this->getContext($context, "favorito"))) {
                // line 223
                echo "                        <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>
                        <a href=\"";
                // line 224
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_delfavoritos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">
                            Eliminar de favoritos</a>
                        ";
            } else {
                // line 227
                echo "                        <i class=\"fas fa-plus mr-1 font-weight-bold deselect bibIco \"></i>
                        <a href=\"";
                // line 228
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_addfavoritos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">
                            Añadir a favoritos</a>

                        ";
            }
            // line 232
            echo "                    </span>
                    <span class=\"text-dark   pr-2 cl\">

                        <i class='fas fa-download'></i>
                        <a class=\"text-dark cl guardarScroll\">
                        </a>

                        <a href=\"javascript:pruebaDivAPdf()\" class=\"button text-dark cl\"> Descargar PDF</a>

                    </span>
                    ";
        }
        // line 242
        echo " ";
        if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Anuncio")) {
            // line 243
            echo "                    <span class=\"text-dark   pr-2 cl\">
                        ";
            // line 244
            if ((isset($context["deseo"]) ? $context["deseo"] : $this->getContext($context, "deseo"))) {
                // line 245
                echo "                        <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>
                        <a href=\"";
                // line 246
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_deldeseos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">
                            En lista de deseos</a>
                        ";
            } else {
                // line 249
                echo "

                        <i class=\"fas fa-plus mr-1 font-weight-bold deselect bibIco \"></i>
                        <a href=\"";
                // line 252
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_adddeseos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">
                            Añadir a lista de deseos</a>
                        ";
            }
            // line 255
            echo "                    </span>

                    ";
        }
        // line 258
        echo "            </div>
            <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">

                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla blanca\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/sun-selec.png"), "html", null, true);
        echo "\" id=\"blanca\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla sefia\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/sunset.png"), "html", null, true);
        echo "\" id=\"sefia\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla negra\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/moon.png"), "html", null, true);
        echo "\" id=\"negra\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Aumentar letra\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/font+.png"), "html", null, true);
        echo "\" id=\"letraUp\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Desminuir letra\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 292
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
        // line 307
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enlaces"]) ? $context["enlaces"] : $this->getContext($context, "enlaces")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 308
            echo "                <div id=\"accordion\" class=\"mt-1\">
                    <div class=\"card\">
                        <div class=\"card-header\" id=\"heading";
            // line 310
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idEnlace", array()), "html", null, true);
            echo "\">
                            <h5 class=\"mb-0\">
                                <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse";
            // line 312
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idEnlace", array()), "html", null, true);
            echo "\" aria-expanded=\"false\"
                                    aria-controls=\"collapseExample\">
                                    Enlace de compra
                                </button>
                            </h5>
                        </div>

                        <div id=\"collapse";
            // line 319
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idEnlace", array()), "html", null, true);
            echo "\" class=\"collapse\" aria-labelledby=\"heading";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idEnlace", array()), "html", null, true);
            echo "\" data-parent=\"#accordion\">
                            <div class=\"card-body bigtext text-center\">
                                ";
            // line 322
            echo "
                                <a target=\"_blank\" href=\" ";
            // line 323
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
        // line 329
        echo " ";
        if (( !(isset($context["capitulos"]) ? $context["capitulos"] : $this->getContext($context, "capitulos")) && ((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) != "Anuncio"))) {
            // line 330
            echo "

            <!--Panel FIXME: -->
            <div class=\"col-12 text-center\">
                <h3 class=\"card-title\">¡UPS...! Esto parece vacío</h3>
                <p class=\"card-text\"> Sé paciente. </p>
            </div>
            <!--/.Panel-->

            ";
        }
        // line 339
        echo " ";
        if (( !(isset($context["enlaces"]) ? $context["enlaces"] : $this->getContext($context, "enlaces")) && ((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Anuncio"))) {
            // line 340
            echo "

            <!--Panel FIXME: -->
            <div class=\"col-12 text-center\">
                <h3 class=\"card-title\">¡UPS...! Esto parece vacío </h3>
                <p class=\"card-text\"> Sé paciente. </p>
            </div>
            <!--/.Panel-->
            ";
        }
        // line 349
        echo "            <div id=\"imprimir\" style=\"display:  none;\">
                ";
        // line 350
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["capitulos"]) ? $context["capitulos"] : $this->getContext($context, "capitulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 351
            echo "
                <h4 class=\"card-title\">
                    <span class=\"indigo-text pr-2 small\"> Capítulo ";
            // line 353
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo ":</span>

                    <strong class=\"font-weight-bold indigo-text \">";
            // line 355
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tituloCap", array()), "html", null, true);
            echo "</strong>
                </h4>
                <hr>

                <p class=\"card-text\" style=\"    \">";
            // line 359
            echo $this->getAttribute($context["item"], "contenidoCap", array());
            echo "
                </p>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 363
        echo "            </div>
            ";
        // line 364
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["capitulos"]) ? $context["capitulos"] : $this->getContext($context, "capitulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " ";
            // line 365
            echo "
            <div id=\"accordion\" class=\"mt-1\">
                <div class=\"card\">
                    <div class=\"card-header\" id=\"heading";
            // line 368
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "\">
                        <h5 class=\"mb-0\">
                            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse";
            // line 370
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "\" aria-expanded=\"false\"
                                aria-controls=\"collapseExample\">
                                #";
            // line 372
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tituloCap", array()), "html", null, true);
            echo "
                            </button>
                        </h5>
                    </div>

                    <div id=\"collapse";
            // line 377
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "\" class=\"collapse\" aria-labelledby=\"heading";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "\" data-parent=\"#accordion\">
                        <div class=\"card-body bigtext\">
                            ";
            // line 379
            echo " ";
            // line 380
            echo "                            <div class=\"fuente\">";
            echo $this->getAttribute($context["item"], "contenidoCap", array());
            echo "</div>
                            <!-- Comentarios capitulo -->
                            <!--Main wrapper-->
                            <div class=\"section-heading h3 text-center\">
                                <a data-toggle=\"collapse\" href=\"#comentariosss";
            // line 384
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                                    ";
            // line 385
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                echo " Deja un comentario ";
            } elseif ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                echo " Inicia sesión o Regístrate para comentar ";
            }
            // line 386
            echo "                                </a>
                            </div>
                            <div id=\"comentariosss";
            // line 388
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" class=\"collapse\">
                                <div class=\"comments-list text-center text-md-left mb-5\">
                                    ";
            // line 390
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                // line 391
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
                // line 403
                if ((isset($context["fUser"]) ? $context["fUser"] : $this->getContext($context, "fUser"))) {
                    // line 404
                    echo "                                                        <img src=\"data:image/jpeg;base64,";
                    echo twig_escape_filter($this->env, (isset($context["fUser"]) ? $context["fUser"] : $this->getContext($context, "fUser")), "html", null, true);
                    echo "\" class=\" img-fluid avatar rounded-circle z-depth-2\"> ";
                } else {
                    // line 405
                    echo "                                                        <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg\" alt=\"Sample avatar image\" class=\"\"> ";
                }
                // line 406
                echo "                                                    </div>
                                                    <!--/.Image column-->

                                                    <!--Content column-->
                                                    <div class=\"col-sm-10 col-12\">
                                                        <!--Grid row-->
                                                        <form name=\"formUpdatePerfil\" action=\"";
                // line 412
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_comentarCapitulo", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"), "numCap" => $this->getAttribute($context["item"], "numCapitulo", array()))), "html", null, true);
                echo "\"
                                                            method=\"POST\" enctype=\"multipart/form-data\">

                                                            <div class=\"row\">

                                                                <div class=\"col-12 mt-1\">
                                                                    <div class=\"form-group basic-textarea rounded-corners shadow-textarea\">

                                                                        <textarea class=\"form-control\" id=\"exampleFormControlTextarea6\" rows=\"5\" placeholder=\"Tu comentario...\" name=\"comentarioCap\"
                                                                            value=";
                // line 421
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
            // line 441
            echo "                                    <div class=\"text-center mb-4\">

                                        <h3>
                                            <a data-toggle=\"collapse\" href=\"#comentarios";
            // line 444
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                                                Comentarios ";
            // line 446
            echo "                                                <span class=\"badge blue\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["comentariosCap"]) ? $context["comentariosCap"] : $this->getContext($context, "comentariosCap")), ($this->getAttribute($context["item"], "numCapitulo", array()) - 1), array(), "array")), "html", null, true);
            echo "</span>
                                            </a>

                                        </h3>
                                    </div>
                                    <!--Comment row-->
                                    <div id=\"comentarios";
            // line 452
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" class=\"collapse\">

                                        ";
            // line 454
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["comentariosCap"]) ? $context["comentariosCap"] : $this->getContext($context, "comentariosCap")), ($this->getAttribute($context["item"], "numCapitulo", array()) - 1), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 455
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
                // line 464
                if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                    // line 465
                    echo "                                                    <h4 class=\"font-weight-bold\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "apellidos", array()), "html", null, true);
                    echo " ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($context["item"], "username", array()))) {
                        // line 467
                        echo "                                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_delComentarioCap", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"), "numCapitulo" => $this->getAttribute($context["item"], "numCapitulo", array()), "username" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "comentario" => $this->getAttribute($context["item"], "comentario", array()))), "html", null, true);
                        echo "\"
                                                            onclick=\"return confirm('¿Estás seguro de eliminar este comentario?')\"
                                                            data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar comentario\"
                                                            class=\"guardarScroll btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient \"
                                                            href=\"\">
                                                            <i class=\"fa fa-remove mt-0\"></i>
                                                        </a>
                                                        ";
                    }
                    // line 475
                    echo "                                                    </h4>
                                                    ";
                }
                // line 477
                echo "                                                </a>

                                                <div class=\"mt-2\">
                                                    <ul class=\"list-unstyled\">
                                                        <li class=\"comment-date\">
                                                            <i class=\"fa fa-clock-o\"></i> ";
                // line 482
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fecha", array()), "html", null, true);
                echo "</li>
                                                    </ul>
                                                </div>
                                                <p class=\"grey-text\">";
                // line 485
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
            // line 491
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
        // line 505
        echo "                </div>
            </div>

        </div>

        <!-- Autor -->

        <!-- ./ Autor -->



    
    <!-- Autor -->
    <div class=\"container card mt-1 mb-5 px-0 py-0\">
        <section class=\"text-center text-md-left\">
            <div class=\"card card-body\">

                <div class=\"row\">
                    <!--Avatar-->
                    <div class=\"col-12 col-sm-2 mb-md-0 mb-3\">


                        ";
        // line 527
        if ((isset($context["fotoAutor"]) ? $context["fotoAutor"] : $this->getContext($context, "fotoAutor"))) {
            // line 528
            echo "                        <img src=\"data:image/jpeg;base64,";
            echo twig_escape_filter($this->env, (isset($context["fotoAutor"]) ? $context["fotoAutor"] : $this->getContext($context, "fotoAutor")), "html", null, true);
            echo "\" class=\" img-fluid rounded-circle\" alt=\"sample image\"> ";
        } else {
            // line 529
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Otros/profile.png"), "html", null, true);
            echo "\" class=\"img-fluid rounded-circle\" alt=\"sample image\"> ";
        }
        // line 530
        echo "                    </div>
                    <!--Author Data-->
                    <div class=\"col-12 col-sm-10\">
                        ";
        // line 533
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["autor"]) ? $context["autor"] : $this->getContext($context, "autor")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 534
            echo "                        <p>
                            <strong>";
            // line 535
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "apellidos", array()), "html", null, true);
            echo "</strong>
                        </p>

                        <div class=\"personal-sm\">
                            <a href=\"";
            // line 539
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_perfil", array("username" => $this->getAttribute($context["item"], "username", array()))), "html", null, true);
            echo "\" class=\"pr-2 fb-ic\">
                                Ver perfil
                            </a>

                        </div>


                        <p class=\"dark-grey-text article\">";
            // line 546
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "biografia", array()), "html", null, true);
            echo "
                        </p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 549
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
        // line 982
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 983
            echo "        <h3 class=\"section-heading h3 \">Deja un comentario </h3>
        ";
        } elseif ( !$this->getAttribute(        // line 984
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 985
            echo "        <h3 class=\"section-heading h3 \">Inicia sesión o Regístrate para comentar</h3>
        ";
        }
        // line 987
        echo "

        <div class=\"comments-list text-center text-md-left mb-5\">
            ";
        // line 990
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 991
            echo "            <!--Section: Leave a reply (Logged In User)-->
            <section class=\"mb-4 mt-4\">

                <!--Leave a reply form-->
                <div class=\"reply-form\">

                    <!--Third row-->
                    <div class=\"row\">
                        <!--Image column-->
                        <div class=\"col-sm-2 col-12\">

                            ";
            // line 1002
            if ((isset($context["fUser"]) ? $context["fUser"] : $this->getContext($context, "fUser"))) {
                // line 1003
                echo "                            <img src=\"data:image/jpeg;base64,";
                echo twig_escape_filter($this->env, (isset($context["fUser"]) ? $context["fUser"] : $this->getContext($context, "fUser")), "html", null, true);
                echo "\" class=\" img-fluid avatar rounded-circle z-depth-2\"> ";
            } else {
                // line 1004
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Otros/idea.png"), "html", null, true);
                echo "\" alt=\"Sample avatar image\" class=\" img-fluid avatar rounded-circle z-depth-2\"> ";
            }
            // line 1005
            echo "                        </div>
                        <!--/.Image column-->

                        <!--Content column-->
                        <div class=\"col-sm-10 col-12\">
                            <!--Grid row-->
                            <form name=\"formUpdatePerfil\" action=\"";
            // line 1011
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_comentarLibro", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
            echo "\" method=\"POST\"
                                enctype=\"multipart/form-data\">

                                <div class=\"row\">

                                    <div class=\"col-12 mt-1\">
                                        <div class=\"form-group basic-textarea rounded-corners shadow-textarea\">

                                            <textarea class=\"form-control\" id=\"exampleFormControlTextarea6\" rows=\"5\" placeholder=\"Tu comentario...\" name=\"comentario\"
                                                value=";
            // line 1020
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
        // line 1040
        echo "            <div class=\"text-center mb-4\">
                <h3>
                    <a data-toggle=\"collapse\" href=\"#comentarios\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                        Comentarios
                        <span class=\"badge blue\">";
        // line 1044
        echo twig_escape_filter($this->env, (isset($context["cComent"]) ? $context["cComent"] : $this->getContext($context, "cComent")), "html", null, true);
        echo "</span>
                    </a>

                </h3>
            </div>
            <!--Comment row-->
            <div id=\"comentarios\" class=\"collapse\">
                ";
        // line 1051
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comentarios"]) ? $context["comentarios"] : $this->getContext($context, "comentarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1052
            echo "                <div class=\"row mb-4\">
                    <!--Image column-->
                    <div class=\"col-sm-2 col-12 mb-md-0 mb-3\">
                        ";
            // line 1055
            if ($this->getAttribute($context["item"], "fotoPerfil", array())) {
                // line 1056
                echo "                        <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg\" class=\"avatar rounded-circle z-depth-1-half\"> ";
            } else {
                // line 1057
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Otros/idea.png"), "html", null, true);
                echo "\" class=\" avatar rounded-circle z-depth-1-half\"> ";
            }
            // line 1058
            echo "                    </div>
                    <!--/.Image column-->
                    <!--Content column-->
                    <div class=\"col-sm-10 col-12\">
                        <a>
                            <h4 class=\"font-weight-bold\">";
            // line 1063
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "apellidos", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($context["item"], "username", array()))) {
                // line 1064
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_delComentarioLib", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"), "username" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "comentario" => $this->getAttribute($context["item"], "comentario", array()))), "html", null, true);
                echo "\"
                                    onclick=\"return confirm('¿Estás seguro de eliminar este comentario?')\" data-toggle=\"tooltip\"
                                    data-placement=\"top\" title=\"Eliminar comentario\" class=\"guardarScroll btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient \"
                                    href=\"\">
                                    <i class=\"fa fa-remove mt-0\"></i>
                                </a>
                                ";
            }
            // line 1071
            echo "                            </h4>
                        </a>
                        <div class=\"mt-2\">
                            <ul class=\"list-unstyled\">
                                <li class=\"comment-date\">
                                    <i class=\"fa fa-clock-o\"></i> ";
            // line 1076
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fecha", array()), "html", null, true);
            echo "</li>
                            </ul>
                        </div>
                        <p class=\"grey-text\">";
            // line 1079
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
        // line 1085
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
                    pdf.save({
                        {
                            app.request.get('idLibro')
                        }
                    } + '.pdf');
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
        return array (  1552 => 1085,  1540 => 1079,  1534 => 1076,  1527 => 1071,  1516 => 1064,  1510 => 1063,  1503 => 1058,  1498 => 1057,  1495 => 1056,  1493 => 1055,  1488 => 1052,  1484 => 1051,  1474 => 1044,  1468 => 1040,  1445 => 1020,  1433 => 1011,  1425 => 1005,  1420 => 1004,  1415 => 1003,  1413 => 1002,  1400 => 991,  1398 => 990,  1393 => 987,  1389 => 985,  1387 => 984,  1384 => 983,  1382 => 982,  947 => 549,  938 => 546,  928 => 539,  919 => 535,  916 => 534,  912 => 533,  907 => 530,  902 => 529,  897 => 528,  895 => 527,  871 => 505,  852 => 491,  840 => 485,  834 => 482,  827 => 477,  823 => 475,  811 => 467,  804 => 465,  802 => 464,  791 => 455,  787 => 454,  782 => 452,  772 => 446,  768 => 444,  763 => 441,  740 => 421,  728 => 412,  720 => 406,  717 => 405,  712 => 404,  710 => 403,  696 => 391,  694 => 390,  689 => 388,  685 => 386,  679 => 385,  675 => 384,  667 => 380,  665 => 379,  658 => 377,  648 => 372,  643 => 370,  638 => 368,  633 => 365,  628 => 364,  625 => 363,  615 => 359,  608 => 355,  603 => 353,  599 => 351,  595 => 350,  592 => 349,  581 => 340,  578 => 339,  566 => 330,  563 => 329,  548 => 323,  545 => 322,  538 => 319,  528 => 312,  523 => 310,  519 => 308,  515 => 307,  497 => 292,  487 => 285,  477 => 278,  467 => 271,  457 => 264,  449 => 258,  444 => 255,  438 => 252,  433 => 249,  427 => 246,  424 => 245,  422 => 244,  419 => 243,  416 => 242,  403 => 232,  396 => 228,  393 => 227,  387 => 224,  384 => 223,  382 => 222,  377 => 219,  370 => 215,  367 => 214,  362 => 212,  359 => 211,  357 => 210,  354 => 209,  351 => 208,  347 => 205,  344 => 204,  341 => 201,  336 => 200,  331 => 199,  329 => 198,  320 => 192,  314 => 189,  311 => 188,  297 => 173,  290 => 163,  261 => 141,  257 => 139,  252 => 136,  250 => 135,  246 => 134,  240 => 131,  224 => 117,  214 => 110,  208 => 108,  203 => 107,  201 => 106,  187 => 94,  180 => 84,  166 => 72,  163 => 71,  154 => 69,  150 => 68,  147 => 67,  140 => 66,  128 => 63,  123 => 61,  120 => 60,  114 => 59,  107 => 54,  102 => 51,  97 => 48,  95 => 47,  78 => 32,  68 => 30,  42 => 7,  35 => 2,  11 => 1,);
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
/*                         <div class="dark-grey-text  pt-4 ml-3 pl-3">*/
/*                             <div>*/
/*                                 <a>*/
/*                                     <span class="badge badge-danger">{{item.nombre}}</span>*/
/*                                 </a>*/
/*                                 <h2 class="card-title font-weight-bold pt-2  " style="color:  black;">*/
/*                                     <strong>{{item.titulo}}</strong>*/
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
/*                                                             data-toggle="tooltip" data-placement="top" title="Eliminar comentario"*/
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
/*             <div class="card card-body">*/
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
/*                             <h4 class="font-weight-bold">{{item.nombre}} {{item.apellidos}} {% if app.user.username == item.username %}*/
/*                                 <a href="{{ path('dwes_libros_delComentarioLib', {'idLibro' : app.request.get('idLibro'),'username':app.user.username,'comentario' :item.comentario}) }}"*/
/*                                     onclick="return confirm('¿Estás seguro de eliminar este comentario?')" data-toggle="tooltip"*/
/*                                     data-placement="top" title="Eliminar comentario" class="guardarScroll btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient "*/
/*                                     href="">*/
/*                                     <i class="fa fa-remove mt-0"></i>*/
/*                                 </a>*/
/*                                 {% endif %}*/
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
/*         function pruebaDivAPdf() {*/
/*             var pdf = new jsPDF('p', 'pt', 'letter');*/
/*             source = $('#imprimir')[0];*/
/* */
/*             specialElementHandlers = {*/
/*                 '#imprimir': function (element, renderer) {*/
/*                     return true*/
/*                 }*/
/*             };*/
/*             margins = {*/
/*                 top: 80,*/
/*                 bottom: 60,*/
/*                 left: 40,*/
/*                 width: 522*/
/*             };*/
/* */
/*             pdf.fromHTML(*/
/*                 source,*/
/*                 margins.left, // x coord*/
/*                 margins.top, { // y coord*/
/*                     'width': margins.width,*/
/*                     'elementHandlers': specialElementHandlers*/
/*                 },*/
/* */
/*                 function (dispose) {*/
/*                     pdf.save({*/
/*                         {*/
/*                             app.request.get('idLibro')*/
/*                         }*/
/*                     } + '.pdf');*/
/*                 }, margins*/
/*             );*/
/*         }*/
/*     </script>*/
/* */
/*     {%endblock %}*/
