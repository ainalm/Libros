<?php

/* DWESLibrosBundle:Default:historia.html.twig */
class __TwigTemplate_138e6f2d17e758b11edc9268209f2debf9acf62dc2719c451c654475915b4ee2 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["libro"]) ? $context["libro"] : null));
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
            if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : null) == "Anuncio")) {
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
            if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : null) == "Anuncio")) {
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
            if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : null) == "Anuncio")) {
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["enlaces"]) ? $context["enlaces"] : null));
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
                $context['_seq'] = twig_ensure_traversable((isset($context["capitulos"]) ? $context["capitulos"] : null));
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
<div class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg'); margin-top: 27px;\">
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
            if ((isset($context["foto"]) ? $context["foto"] : null)) {
                // line 107
                echo "                            <img src=\"data:image/jpeg;base64,";
                echo twig_escape_filter($this->env, (isset($context["foto"]) ? $context["foto"] : null), "html", null, true);
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
            if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : null) == "Anuncio")) {
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
<div class=\"container-fluid pl-0 pr-0\" style=\"background-color: #f4f5f6;\" id=\"container1\">

    <!--Grid column-->
    <div class=\"col-lg-12 col-md-12 mb-12 pl-0 pr-0\">
        <nav class=\"navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav indigo-text\">
            <!-- SideNav slide-out button -->

            <!-- Breadcrumb-->
            <div class=\"\">
                ";
        // line 186
        echo "                <div>
                    <a id=\"addBiblio\" href=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_addbiblioteca", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
        echo "\" class=\"guardarScroll\"></a>


                    <a id=\"delBiblio\" href=\"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("dwes_libros_ajustes");
        echo "\" class=\"guardarScroll\"></a>
                </div>
                <button type=\"button\" class=\"btn purple-gradient btn-sm gcapitulo \" data-toggle=\"modal\" data-target=\"#ModalCapitulos\">
                    <i class=\"fab fa-readme mr-2\"></i>


                    ";
        // line 196
        if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : null) == "Anuncio")) {
            // line 197
            echo "                    <span>";
            echo twig_escape_filter($this->env, (isset($context["countEnlaces"]) ? $context["countEnlaces"] : null), "html", null, true);
            echo "</span> Enlaces ";
        } else {
            // line 198
            echo "                    <span>";
            echo twig_escape_filter($this->env, (isset($context["numCap"]) ? $context["numCap"] : null), "html", null, true);
            echo "</span> Capítulos ";
        }
        // line 199
        echo "                </button>
                ";
        // line 202
        echo "
                <span class=\"green-text font-weight-bold pr-2 small\">";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["progreso"]) ? $context["progreso"] : null), "html", null, true);
        echo "</span>
                ";
        // line 206
        echo " ";
        if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : null) == "Gratis")) {
            // line 207
            echo "                    <span class=\"text-dark  pr-2 cl\" id=\"enbiblioteca\">
                        ";
            // line 208
            if ((isset($context["lista"]) ? $context["lista"] : null)) {
                // line 209
                echo "                        <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>
                        <a href=\"";
                // line 210
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_delbiblioteca", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">Eliminar de mi lista</a>
                        ";
            } else {
                // line 212
                echo "                        <i class=\"fas fa-plus mr-1 font-weight-bold deselect bibIco \"></i>
                        <a href=\"";
                // line 213
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_addbiblioteca", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">
                        Añadir a mi lista</a>

                        ";
            }
            // line 217
            echo "                    </span>

                    <span class=\"text-dark   pr-2 cl\" id=\"enfavoritos\">
                        ";
            // line 220
            if ((isset($context["favorito"]) ? $context["favorito"] : null)) {
                // line 221
                echo "                        <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>
                        <a href=\"";
                // line 222
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_delfavoritos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">
                        Eliminar de favoritos</a>
                        ";
            } else {
                // line 225
                echo "                        <i class=\"fas fa-plus mr-1 font-weight-bold deselect bibIco \"></i>
                        <a href=\"";
                // line 226
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_addfavoritos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">
                        Añadir a favoritos</a>

                        ";
            }
            // line 230
            echo "                    </span>
                     <span class=\"text-dark   pr-2 cl\">
                   
                        <i class='fas fa-download'></i>
                        <a  class=\"text-dark cl guardarScroll\">
                       </a>

                         <a href=\"javascript:pruebaDivAPdf()\" class=\"button text-dark cl\"> Descargar PDF</a> 
                     
                    </span>
                    ";
        }
        // line 240
        echo " ";
        if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : null) == "Anuncio")) {
            // line 241
            echo "                    <span class=\"text-dark   pr-2 cl\">
                        ";
            // line 242
            if ((isset($context["deseo"]) ? $context["deseo"] : null)) {
                // line 243
                echo "                        <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>
                        <a href=\"";
                // line 244
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_deldeseos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">
                        En lista de deseos</a>
                        ";
            } else {
                // line 247
                echo "

                        <i class=\"fas fa-plus mr-1 font-weight-bold deselect bibIco \"></i>
                        <a href=\"";
                // line 250
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_adddeseos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl guardarScroll\">
                        Añadir a lista de deseos</a>
                        ";
            }
            // line 253
            echo "                    </span>
                    
                    ";
        }
        // line 256
        echo "            </div>
            <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">

                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla blanca\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/sun-selec.png"), "html", null, true);
        echo "\" id=\"blanca\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla sefia\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/sunset.png"), "html", null, true);
        echo "\" id=\"sefia\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla negra\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/moon.png"), "html", null, true);
        echo "\" id=\"negra\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Aumentar letra\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/font+.png"), "html", null, true);
        echo "\" id=\"letraUp\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Desminuir letra\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 290
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
            
           
            <div >
                ";
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enlaces"]) ? $context["enlaces"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 306
            echo "                <div id=\"accordion\" class=\"mt-1\">
                    <div class=\"card\">
                        <div class=\"card-header\" id=\"heading";
            // line 308
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idEnlace", array()), "html", null, true);
            echo "\">
                            <h5 class=\"mb-0\">
                                <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse";
            // line 310
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idEnlace", array()), "html", null, true);
            echo "\" aria-expanded=\"false\"
                                    aria-controls=\"collapseExample\">
                                    Enlace de compra
                                </button>
                            </h5>
                        </div>

                        <div id=\"collapse";
            // line 317
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idEnlace", array()), "html", null, true);
            echo "\" class=\"collapse\" aria-labelledby=\"heading";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idEnlace", array()), "html", null, true);
            echo "\" data-parent=\"#accordion\">
                            <div class=\"card-body bigtext text-center\">
                                ";
            // line 320
            echo "
                                <a target=\"_blank\" href=\" ";
            // line 321
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
        // line 327
        echo " ";
        if (( !(isset($context["capitulos"]) ? $context["capitulos"] : null) && ((isset($context["tipoLibro"]) ? $context["tipoLibro"] : null) != "Anuncio"))) {
            // line 328
            echo "

            <!--Panel FIXME: -->
            <div class=\"col-12 text-center\">
                <h3 class=\"card-title\">¡UPS...! Esto parece vacío. CAPÍTULOS</h3>
                <p class=\"card-text\"> Sé paciente, ¡pronto habrá algo maravilloso aquí! </p>
            </div>
            <!--/.Panel-->

            ";
        }
        // line 337
        echo " ";
        if (( !(isset($context["enlaces"]) ? $context["enlaces"] : null) && ((isset($context["tipoLibro"]) ? $context["tipoLibro"] : null) == "Anuncio"))) {
            // line 338
            echo "

            <!--Panel FIXME: -->
            <div class=\"col-12 text-center\">
                <h3 class=\"card-title\">¡UPS...! Esto parece vacío.ENLACES </h3>
                <p class=\"card-text\"> Sé paciente, pronto habrá algo maravilloso aquí! </p>
            </div>
            <!--/.Panel-->
            ";
        }
        // line 347
        echo "            <div id=\"imprimir\" style=\"display:  none;\">
             ";
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["capitulos"]) ? $context["capitulos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 349
            echo "             
              <h4 class=\"card-title\">
                    <span class=\"indigo-text pr-2 small\"> Capítulo ";
            // line 351
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo ":</span>
                    
                    <strong class=\"font-weight-bold indigo-text \">";
            // line 353
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tituloCap", array()), "html", null, true);
            echo "</strong>
                </h4>
                <hr>
               
                <p class=\"card-text\" style=\"    \">";
            // line 357
            echo $this->getAttribute($context["item"], "contenidoCap", array());
            echo "
                </p> 
        
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 360
        echo " 
               </div>
             ";
        // line 362
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["capitulos"]) ? $context["capitulos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 363
            echo "
           ";
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
            // line 380
            echo "                            ";
            // line 381
            echo "                            <div class=\"fuente\">";
            echo $this->getAttribute($context["item"], "contenidoCap", array());
            echo "</div>
                            <!-- Comentarios capitulo -->
                            <!--Main wrapper-->
                            <div class=\"section-heading h3 text-center\">
                                <a data-toggle=\"collapse\" href=\"#comentariosss";
            // line 385
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                                    ";
            // line 386
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
                echo " Deja un comentario ";
            } elseif ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
                echo " Inicia sesión o Regístrate para comentar ";
            }
            // line 387
            echo "                                </a>
                            </div>
                            <div id=\"comentariosss";
            // line 389
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" class=\"collapse\">
                                <div class=\"comments-list text-center text-md-left mb-5\">
                                    ";
            // line 391
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
                // line 392
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
                // line 404
                if ((isset($context["fUser"]) ? $context["fUser"] : null)) {
                    // line 405
                    echo "                                                        <img src=\"data:image/jpeg;base64,";
                    echo twig_escape_filter($this->env, (isset($context["fUser"]) ? $context["fUser"] : null), "html", null, true);
                    echo "\" class=\" img-fluid avatar rounded-circle z-depth-2\"> ";
                } else {
                    // line 406
                    echo "                                                        <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg\" alt=\"Sample avatar image\" class=\"\"> ";
                }
                // line 407
                echo "                                                    </div>
                                                    <!--/.Image column-->

                                                    <!--Content column-->
                                                    <div class=\"col-sm-10 col-12\">
                                                        <!--Grid row-->
                                                        <form name=\"formUpdatePerfil\" action=\"";
                // line 413
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_comentarCapitulo", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idLibro"), "method"), "numCap" => $this->getAttribute($context["item"], "numCapitulo", array()))), "html", null, true);
                echo "\"
                                                            method=\"POST\" enctype=\"multipart/form-data\">

                                                            <div class=\"row\">

                                                                <div class=\"col-12 mt-1\">
                                                                    <div class=\"form-group basic-textarea rounded-corners shadow-textarea\">

                                                                        <textarea class=\"form-control\" id=\"exampleFormControlTextarea6\" rows=\"5\" placeholder=\"Tu comentario...\" name=\"comentarioCap\"
                                                                            value=";
                // line 422
                echo twig_escape_filter($this->env, (isset($context["comentarioCap"]) ? $context["comentarioCap"] : null), "html", null, true);
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
            // line 442
            echo "                                    <div class=\"text-center mb-4\">

                                        <h3>
                                            <a data-toggle=\"collapse\" href=\"#comentarios";
            // line 445
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                                                Comentarios ";
            // line 447
            echo "                                                <span class=\"badge blue\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["comentariosCap"]) ? $context["comentariosCap"] : null), ($this->getAttribute($context["item"], "numCapitulo", array()) - 1), array(), "array")), "html", null, true);
            echo "</span>
                                            </a>

                                        </h3>
                                    </div>
                                    <!--Comment row-->
                                    <div id=\"comentarios";
            // line 453
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" class=\"collapse\">

                                        ";
            // line 455
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["comentariosCap"]) ? $context["comentariosCap"] : null), ($this->getAttribute($context["item"], "numCapitulo", array()) - 1), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 456
                echo "                                        <div class=\"row mb-4\">
                                            <!--Image column-->
                                            <div class=\"col-sm-2 col-12 mb-md-0 mb-3\">
                                                <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg\" class=\"avatar rounded-circle z-depth-1-half\">
                                            </div>
                                            <!--/.Image column-->
                                            <!--Content column-->
                                            <div class=\"col-sm-10 col-12\">
                                                <a>
                                                    <h4 class=\"font-weight-bold\">";
                // line 465
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "apellidos", array()), "html", null, true);
                echo " ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()) == $this->getAttribute($context["item"], "username", array()))) {
                    // line 467
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_delComentarioCap", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idLibro"), "method"), "numCapitulo" => $this->getAttribute($context["item"], "numCapitulo", array()), "username" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "comentario" => $this->getAttribute($context["item"], "comentario", array()))), "html", null, true);
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
                                                </a>

                                                <div class=\"mt-2\">
                                                    <ul class=\"list-unstyled\">
                                                        <li class=\"comment-date\">
                                                            <i class=\"fa fa-clock-o\"></i> ";
                // line 481
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fecha", array()), "html", null, true);
                echo "</li>
                                                    </ul>
                                                </div>
                                                <p class=\"grey-text\">";
                // line 484
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
            // line 490
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
        // line 504
        echo "                </div>
            </div>

        </div>

        <!-- Autor -->

        <!-- ./ Autor -->

       

    </div>
    <!-- Autor -->
    <div class=\"container card mt-1 mb-5 px-0 py-0\">
        <section class=\"text-center text-md-left\">
            <div class=\"card card-body\">

                <div class=\"row\">
                    <!--Avatar-->
                    <div class=\"col-12 col-sm-2 mb-md-0 mb-3\">


                        ";
        // line 526
        if ((isset($context["fotoAutor"]) ? $context["fotoAutor"] : null)) {
            // line 527
            echo "                        <img src=\"data:image/jpeg;base64,";
            echo twig_escape_filter($this->env, (isset($context["fotoAutor"]) ? $context["fotoAutor"] : null), "html", null, true);
            echo "\" class=\" img-fluid rounded-circle\" alt=\"sample image\"> ";
        } else {
            // line 528
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Otros/profile.png"), "html", null, true);
            echo "\" class=\"img-fluid rounded-circle\" alt=\"sample image\"> ";
        }
        // line 529
        echo "                    </div>
                    <!--Author Data-->
                    <div class=\"col-12 col-sm-10\">
                        ";
        // line 532
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["autor"]) ? $context["autor"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 533
            echo "                        <p>
                            <strong>";
            // line 534
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
            // line 542
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "biografia", array()), "html", null, true);
            echo "
                        </p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 545
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
        // line 978
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 979
            echo "        <h3 class=\"section-heading h3 \">Deja un comentario </h3>
        ";
        } elseif ( !$this->getAttribute(        // line 980
(isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 981
            echo "        <h3 class=\"section-heading h3 \">Inicia sesión o Regístrate para comentar</h3>
        ";
        }
        // line 983
        echo "

        <div class=\"comments-list text-center text-md-left mb-5\">
            ";
        // line 986
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 987
            echo "            <!--Section: Leave a reply (Logged In User)-->
            <section class=\"mb-4 mt-4\">

                <!--Leave a reply form-->
                <div class=\"reply-form\">

                    <!--Third row-->
                    <div class=\"row\">
                        <!--Image column-->
                        <div class=\"col-sm-2 col-12\">

                            ";
            // line 998
            if ((isset($context["fUser"]) ? $context["fUser"] : null)) {
                // line 999
                echo "                            <img src=\"data:image/jpeg;base64,";
                echo twig_escape_filter($this->env, (isset($context["fUser"]) ? $context["fUser"] : null), "html", null, true);
                echo "\" class=\" img-fluid avatar rounded-circle z-depth-2\"> ";
            } else {
                // line 1000
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Otros/idea.png"), "html", null, true);
                echo "\" alt=\"Sample avatar image\" class=\" img-fluid avatar rounded-circle z-depth-2\"> ";
            }
            // line 1001
            echo "                        </div>
                        <!--/.Image column-->

                        <!--Content column-->
                        <div class=\"col-sm-10 col-12\">
                            <!--Grid row-->
                            <form name=\"formUpdatePerfil\" action=\"";
            // line 1007
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_comentarLibro", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
            echo "\" method=\"POST\"
                                enctype=\"multipart/form-data\">

                                <div class=\"row\">

                                    <div class=\"col-12 mt-1\">
                                        <div class=\"form-group basic-textarea rounded-corners shadow-textarea\">

                                            <textarea class=\"form-control\" id=\"exampleFormControlTextarea6\" rows=\"5\" placeholder=\"Tu comentario...\" name=\"comentario\"
                                                value=";
            // line 1016
            echo twig_escape_filter($this->env, (isset($context["comentario"]) ? $context["comentario"] : null), "html", null, true);
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
        // line 1036
        echo "            <div class=\"text-center mb-4\">
                <h3>
                    <a data-toggle=\"collapse\" href=\"#comentarios\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                        Comentarios
                        <span class=\"badge blue\">";
        // line 1040
        echo twig_escape_filter($this->env, (isset($context["cComent"]) ? $context["cComent"] : null), "html", null, true);
        echo "</span>
                    </a>

                </h3>
            </div>
            <!--Comment row-->
            <div id=\"comentarios\" class=\"collapse\">
                ";
        // line 1047
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comentarios"]) ? $context["comentarios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1048
            echo "                <div class=\"row mb-4\">
                    <!--Image column-->
                    <div class=\"col-sm-2 col-12 mb-md-0 mb-3\">
                        ";
            // line 1051
            if ($this->getAttribute($context["item"], "fotoPerfil", array())) {
                // line 1052
                echo "                        <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg\" class=\"avatar rounded-circle z-depth-1-half\"> ";
            } else {
                // line 1053
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Otros/idea.png"), "html", null, true);
                echo "\" class=\" avatar rounded-circle z-depth-1-half\"> ";
            }
            // line 1054
            echo "                    </div>
                    <!--/.Image column-->
                    <!--Content column-->
                    <div class=\"col-sm-10 col-12\">
                        <a>
                            <h4 class=\"font-weight-bold\">";
            // line 1059
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "apellidos", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()) == $this->getAttribute($context["item"], "username", array()))) {
                // line 1060
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_delComentarioLib", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idLibro"), "method"), "username" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "comentario" => $this->getAttribute($context["item"], "comentario", array()))), "html", null, true);
                echo "\"
                                    onclick=\"return confirm('¿Estás seguro de eliminar este comentario?')\" data-toggle=\"tooltip\"
                                    data-placement=\"top\" title=\"Eliminar comentario\" class=\"guardarScroll btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light blue-gradient \"
                                    href=\"\">
                                    <i class=\"fa fa-remove mt-0\"></i>
                                </a>
                                ";
            }
            // line 1067
            echo "                            </h4>
                        </a>
                        <div class=\"mt-2\">
                            <ul class=\"list-unstyled\">
                                <li class=\"comment-date\">
                                    <i class=\"fa fa-clock-o\"></i> ";
            // line 1072
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fecha", array()), "html", null, true);
            echo "</li>
                            </ul>
                        </div>
                        <p class=\"grey-text\">";
            // line 1075
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
        // line 1081
        echo "            </div>
            <!--/.Comment row-->

            </div>
            <!--/.Main wrapper-->

        </div>
        <!-- ./Comentarios -->
    </div>
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
        // line 1116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "idLibro"), "method"), "html", null, true);
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
        return array (  1575 => 1116,  1538 => 1081,  1526 => 1075,  1520 => 1072,  1513 => 1067,  1502 => 1060,  1496 => 1059,  1489 => 1054,  1484 => 1053,  1481 => 1052,  1479 => 1051,  1474 => 1048,  1470 => 1047,  1460 => 1040,  1454 => 1036,  1431 => 1016,  1419 => 1007,  1411 => 1001,  1406 => 1000,  1401 => 999,  1399 => 998,  1386 => 987,  1384 => 986,  1379 => 983,  1375 => 981,  1373 => 980,  1370 => 979,  1368 => 978,  933 => 545,  924 => 542,  911 => 534,  908 => 533,  904 => 532,  899 => 529,  894 => 528,  889 => 527,  887 => 526,  863 => 504,  844 => 490,  832 => 484,  826 => 481,  818 => 475,  806 => 467,  800 => 465,  789 => 456,  785 => 455,  780 => 453,  770 => 447,  766 => 445,  761 => 442,  738 => 422,  726 => 413,  718 => 407,  715 => 406,  710 => 405,  708 => 404,  694 => 392,  692 => 391,  687 => 389,  683 => 387,  677 => 386,  673 => 385,  665 => 381,  663 => 380,  656 => 377,  646 => 372,  641 => 370,  636 => 368,  631 => 365,  628 => 363,  624 => 362,  620 => 360,  610 => 357,  603 => 353,  598 => 351,  594 => 349,  590 => 348,  587 => 347,  576 => 338,  573 => 337,  561 => 328,  558 => 327,  543 => 321,  540 => 320,  533 => 317,  523 => 310,  518 => 308,  514 => 306,  510 => 305,  492 => 290,  482 => 283,  472 => 276,  462 => 269,  452 => 262,  444 => 256,  439 => 253,  433 => 250,  428 => 247,  422 => 244,  419 => 243,  417 => 242,  414 => 241,  411 => 240,  398 => 230,  391 => 226,  388 => 225,  382 => 222,  379 => 221,  377 => 220,  372 => 217,  365 => 213,  362 => 212,  357 => 210,  354 => 209,  352 => 208,  349 => 207,  346 => 206,  342 => 203,  339 => 202,  336 => 199,  331 => 198,  326 => 197,  324 => 196,  315 => 190,  309 => 187,  306 => 186,  294 => 173,  287 => 163,  258 => 141,  254 => 139,  249 => 136,  247 => 135,  243 => 134,  237 => 131,  221 => 117,  211 => 110,  205 => 108,  200 => 107,  198 => 106,  184 => 94,  166 => 72,  163 => 71,  154 => 69,  150 => 68,  147 => 67,  140 => 66,  128 => 63,  123 => 61,  120 => 60,  114 => 59,  107 => 54,  102 => 51,  97 => 48,  95 => 47,  78 => 32,  68 => 30,  42 => 7,  35 => 2,  11 => 1,);
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
/*                         Añadir a mi lista</a>*/
/* */
/*                         {% endif %}*/
/*                     </span>*/
/* */
/*                     <span class="text-dark   pr-2 cl" id="enfavoritos">*/
/*                         {% if favorito %}*/
/*                         <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>*/
/*                         <a href="{{ path('dwes_libros_delfavoritos', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl guardarScroll">*/
/*                         Eliminar de favoritos</a>*/
/*                         {% else %}*/
/*                         <i class="fas fa-plus mr-1 font-weight-bold deselect bibIco "></i>*/
/*                         <a href="{{ path('dwes_libros_addfavoritos', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl guardarScroll">*/
/*                         Añadir a favoritos</a>*/
/* */
/*                         {% endif %}*/
/*                     </span>*/
/*                      <span class="text-dark   pr-2 cl">*/
/*                    */
/*                         <i class='fas fa-download'></i>*/
/*                         <a  class="text-dark cl guardarScroll">*/
/*                        </a>*/
/* */
/*                          <a href="javascript:pruebaDivAPdf()" class="button text-dark cl"> Descargar PDF</a> */
/*                      */
/*                     </span>*/
/*                     {% endif %} {% if tipoLibro == "Anuncio" %}*/
/*                     <span class="text-dark   pr-2 cl">*/
/*                         {% if deseo %}*/
/*                         <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>*/
/*                         <a href="{{ path('dwes_libros_deldeseos', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl guardarScroll">*/
/*                         En lista de deseos</a>*/
/*                         {% else %}*/
/* */
/* */
/*                         <i class="fas fa-plus mr-1 font-weight-bold deselect bibIco "></i>*/
/*                         <a href="{{ path('dwes_libros_adddeseos', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl guardarScroll">*/
/*                         Añadir a lista de deseos</a>*/
/*                         {% endif %}*/
/*                     </span>*/
/*                     */
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
/*             */
/*            */
/*             <div >*/
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
/*                 <h3 class="card-title">¡UPS...! Esto parece vacío. CAPÍTULOS</h3>*/
/*                 <p class="card-text"> Sé paciente, ¡pronto habrá algo maravilloso aquí! </p>*/
/*             </div>*/
/*             <!--/.Panel-->*/
/* */
/*             {% endif %} {% if not enlaces and tipoLibro == "Anuncio" %}*/
/* */
/* */
/*             <!--Panel FIXME: -->*/
/*             <div class="col-12 text-center">*/
/*                 <h3 class="card-title">¡UPS...! Esto parece vacío.ENLACES </h3>*/
/*                 <p class="card-text"> Sé paciente, pronto habrá algo maravilloso aquí! </p>*/
/*             </div>*/
/*             <!--/.Panel-->*/
/*             {% endif %}*/
/*             <div id="imprimir" style="display:  none;">*/
/*              {% for item in capitulos %}*/
/*              */
/*               <h4 class="card-title">*/
/*                     <span class="indigo-text pr-2 small"> Capítulo {{item.numCapitulo}}:</span>*/
/*                     */
/*                     <strong class="font-weight-bold indigo-text ">{{item.tituloCap}}</strong>*/
/*                 </h4>*/
/*                 <hr>*/
/*                */
/*                 <p class="card-text" style="    ">{{item.contenidoCap | raw}}*/
/*                 </p> */
/*         */
/*                {% endfor %} */
/*                </div>*/
/*              {% for item in capitulos %}*/
/* */
/*            {#   TODO:  Imprimir con este formato #}*/
/*               */
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
/*                              {# {{html}} #}*/
/*                             {# raw --> Para mostrar el HTML con el formato insertado #}*/
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
/*        */
/* */
/*     </div>*/
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
/*                         <div class="personal-sm">*/
/*                             <a href="" class="pr-2 fb-ic">*/
/*                                 Ver perfil*/
/*                             </a>*/
/* */
/*                         </div>*/
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
/*     <div class="container  mt-1 mb-5 px-0 py-0"> */
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
/*  <script>*/
/*             function pruebaDivAPdf() {*/
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
/*         </script>*/
/* */
/*     {%endblock %}*/
