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
                <h5 class=\"modal-title\" id=\"ModalCapitulosLabel\">Capítulos de : ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
            echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">


                <table id=\"capitulos2\" class=\"mdl-data-table capitulos\" style=\"width:100%\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titulo</th>
                            <th>Contenido</th>

                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["capitulos"]) ? $context["capitulos"] : $this->getContext($context, "capitulos")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 47
                echo "                        <tr>
                            <td class=\"tdl\">";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
                echo "</td>
                            <td class=\"tdl\">";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tituloCap", array()), "html", null, true);
                echo "</td>
                            <td class=\"lineas mb-3 tdl\">";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "contenidoCap", array()), "html", null, true);
                echo "</td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
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
            // line 75
            echo "            <div class=\"row\">

                <!--Grid column-->
                <div class=\"col-lg-3 col-md-12 mb-4\">

                    <!-- Section: Categories -->
                    <section class=\"section\">



                        <!--Card image TODO: Imagen libro view overlay  -->
                        <div class=\"  view overlay\">
                            ";
            // line 87
            if ((isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto"))) {
                // line 88
                echo "                            <img src=\"data:image/jpeg;base64,";
                echo twig_escape_filter($this->env, (isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "html", null, true);
                echo "\" style=\"height:270px ; width:180px;\" class=\" mx-auto\" alt=\"sample image\"> ";
            } else {
                // line 89
                echo "                            <div class=\"  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "colorPortada", array()), "html", null, true);
                echo " \" style=\"height:270px;width:180px;\">
                                <div class=\" flex-center text-center\" alt=\"sample image\">
                                    <p>";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
                echo "</p>
                                </div>
                                <a>
                                    <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                </a>
                            </div>
                            ";
            }
            // line 98
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
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo "</span>
                                </a>
                                <h2 class=\"card-title font-weight-bold pt-2  \" style=\"color:  black;\">
                                    <strong>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
            echo "</strong>
                                </h2>
                                <p style=\"min-height: 120px;color:  black;\">";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descLib", array()), "html", null, true);
            echo " </p>
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
        // line 138
        echo " ";
    }

    public function block_contenido($context, array $blocks = array())
    {
        echo " ";
        // line 148
        echo "
<div class=\"container-fluid pl-0 pr-0\" style=\"background-color: #f4f5f6;\" id=\"container1\">

    <!--Grid column-->
    <div class=\"col-lg-12 col-md-12 mb-12 pl-0 pr-0\">
        <nav class=\"navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav indigo-text\">
            <!-- SideNav slide-out button -->

            <!-- Breadcrumb-->
            <div class=\"\">
                ";
        // line 161
        echo "                <div>
                    <a id=\"addBiblio\" href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_addbiblioteca", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
        echo "\"></a>


                    <a id=\"delBiblio\" href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("dwes_libros_ajustes");
        echo "\"></a>
                </div>
                <button type=\"button\" class=\"btn purple-gradient btn-sm gcapitulo \" data-toggle=\"modal\" data-target=\"#ModalCapitulos\">
                    <i class=\"fab fa-readme mr-2\"></i>
                    <span>";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["numCap"]) ? $context["numCap"] : $this->getContext($context, "numCap")), "html", null, true);
        echo "</span> Capítulos
                </button>
                ";
        // line 173
        echo "
                <span class=\"green-text font-weight-bold pr-2 small\">En progreso</span>
                ";
        // line 177
        echo " ";
        if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Gratis")) {
            // line 178
            echo "                    <span class=\"text-dark  pr-2 cl\" id=\"enbiblioteca\">
                        ";
            // line 179
            if ((isset($context["lista"]) ? $context["lista"] : $this->getContext($context, "lista"))) {
                // line 180
                echo "                        <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>
                        <a href=\"";
                // line 181
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_delbiblioteca", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl \">Eliminar de mi lista</a>
                        ";
            } else {
                // line 183
                echo "                        <i class=\"fas fa-plus mr-1 font-weight-bold deselect bibIco \"></i>
                        <a href=\"";
                // line 184
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_addbiblioteca", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl \"> Añadir a mi lista</a>

                        ";
            }
            // line 187
            echo "                    </span>

                    <span class=\"text-dark   pr-2 cl\" id=\"enfavoritos\">
                        ";
            // line 190
            if ((isset($context["favorito"]) ? $context["favorito"] : $this->getContext($context, "favorito"))) {
                // line 191
                echo "                        <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>
                        <a href=\"";
                // line 192
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_delfavoritos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl \"> Eliminar de favoritos</a>
                        ";
            } else {
                // line 194
                echo "                        <i class=\"fas fa-plus mr-1 font-weight-bold deselect bibIco \"></i>
                        <a href=\"";
                // line 195
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_addfavoritos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl \"> Añadir a favoritos</a>

                        ";
            }
            // line 198
            echo "                    </span>
                    ";
        }
        // line 199
        echo " ";
        if (((isset($context["tipoLibro"]) ? $context["tipoLibro"] : $this->getContext($context, "tipoLibro")) == "Anuncio")) {
            // line 200
            echo "                    <span class=\"text-dark   pr-2 cl\">
                        ";
            // line 201
            if ((isset($context["deseo"]) ? $context["deseo"] : $this->getContext($context, "deseo"))) {
                // line 202
                echo "                        <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>
                        <a href=\"";
                // line 203
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_deldeseos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl \"> En lista de deseos</a>
                        ";
            } else {
                // line 205
                echo "

                        <i class=\"fas fa-plus mr-1 font-weight-bold deselect bibIco \"></i>
                        <a href=\"";
                // line 208
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_adddeseos", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
                echo "\" class=\"text-dark cl \"> Añadir a lista de deseos</a>
                        ";
            }
            // line 210
            echo "                    </span>
                    ";
        }
        // line 212
        echo "            </div>
            <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">

                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla blanca\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/sun-selec.png"), "html", null, true);
        echo "\" id=\"blanca\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla sefia\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/sunset.png"), "html", null, true);
        echo "\" id=\"sefia\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla negra\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/moon.png"), "html", null, true);
        echo "\" id=\"negra\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Aumentar letra\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/font+.png"), "html", null, true);
        echo "\" id=\"letraUp\"> </img>
                        </i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Desminuir letra\">
                        <i class=\"mb-2\">
                            <img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/font-.png"), "html", null, true);
        echo "\" id=\"letraDown\"> </img>
                        </i>
                    </a>
                </li>
                ";
        // line 262
        echo "            </ul>
        </nav>
    </div>
    <!--Grid column-->

    <div class=\"container card mt-1 pb-1\" id=\"container2\">

        <div class=\"card-body\">
            ";
        // line 270
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["capitulos"]) ? $context["capitulos"] : $this->getContext($context, "capitulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 271
            echo "            <div class=\"capitulo\">
                <!--Title-->
                <h4 class=\"card-title text-center\">
                    <span class=\"text-info font-weight-bold pr-2 small\">#";
            // line 274
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "</span>
                    <strong>";
            // line 275
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tituloCap", array()), "html", null, true);
            echo "</strong>
                </h4>
                <hr>
                <!--Text-->
                <p class=\"card-text\" style=\"    \">";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "contenidoCap", array()), "html", null, true);
            echo "
                </p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        echo "        </div>



        <nav class=\"mb-3 mt-3\">
            <ul class=\"pagination pg-darkgrey flex-center\">
                <!--Arrow left-->
                <li class=\"page-item\">
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
            </ul>
        </nav>
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
        return array (  443 => 283,  433 => 279,  426 => 275,  422 => 274,  417 => 271,  413 => 270,  403 => 262,  396 => 246,  386 => 239,  376 => 232,  366 => 225,  356 => 218,  348 => 212,  344 => 210,  339 => 208,  334 => 205,  329 => 203,  326 => 202,  324 => 201,  321 => 200,  318 => 199,  314 => 198,  308 => 195,  305 => 194,  300 => 192,  297 => 191,  295 => 190,  290 => 187,  284 => 184,  281 => 183,  276 => 181,  273 => 180,  271 => 179,  268 => 178,  265 => 177,  261 => 173,  256 => 169,  249 => 165,  243 => 162,  240 => 161,  228 => 148,  221 => 138,  193 => 117,  188 => 115,  182 => 112,  166 => 98,  156 => 91,  150 => 89,  145 => 88,  143 => 87,  129 => 75,  111 => 53,  102 => 50,  98 => 49,  94 => 48,  91 => 47,  87 => 46,  66 => 28,  42 => 7,  35 => 2,  11 => 1,);
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
/*                 <h5 class="modal-title" id="ModalCapitulosLabel">Capítulos de : {{item.titulo}}</h5>*/
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
/*                             <th>#</th>*/
/*                             <th>Titulo</th>*/
/*                             <th>Contenido</th>*/
/* */
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for item in capitulos %}*/
/*                         <tr>*/
/*                             <td class="tdl">{{item.numCapitulo}}</td>*/
/*                             <td class="tdl">{{item.tituloCap}}</td>*/
/*                             <td class="lineas mb-3 tdl">{{item.contenidoCap}}</td>*/
/*                         </tr>*/
/*                         {% endfor %}*/
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
/*                                 </h2>*/
/*                                 <p style="min-height: 120px;color:  black;">{{item.descLib}} </p>*/
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
/*                     <a id="addBiblio" href="{{ path('dwes_libros_addbiblioteca', {'idLibro' : app.request.get('idLibro')}) }}"></a>*/
/* */
/* */
/*                     <a id="delBiblio" href="{{ path('dwes_libros_ajustes' ) }}"></a>*/
/*                 </div>*/
/*                 <button type="button" class="btn purple-gradient btn-sm gcapitulo " data-toggle="modal" data-target="#ModalCapitulos">*/
/*                     <i class="fab fa-readme mr-2"></i>*/
/*                     <span>{{numCap}}</span> Capítulos*/
/*                 </button>*/
/*                 {#*/
/*                 <button id="cmd">Generar</button> #}*/
/* */
/*                 <span class="green-text font-weight-bold pr-2 small">En progreso</span>*/
/*                 {#*/
/*                 <form name="formUpdatePerfil" action="{{ path('dwes_libros_addbiblioteca'),{'idLibro':app.request.get('idLibro')} }}" method="POST"*/
/*                     enctype="multipart/form-data"> #} {% if tipoLibro == "Gratis" %}*/
/*                     <span class="text-dark  pr-2 cl" id="enbiblioteca">*/
/*                         {% if lista %}*/
/*                         <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>*/
/*                         <a href="{{ path('dwes_libros_delbiblioteca', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl ">Eliminar de mi lista</a>*/
/*                         {% else %}*/
/*                         <i class="fas fa-plus mr-1 font-weight-bold deselect bibIco "></i>*/
/*                         <a href="{{ path('dwes_libros_addbiblioteca', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl "> Añadir a mi lista</a>*/
/* */
/*                         {% endif %}*/
/*                     </span>*/
/* */
/*                     <span class="text-dark   pr-2 cl" id="enfavoritos">*/
/*                         {% if favorito %}*/
/*                         <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>*/
/*                         <a href="{{ path('dwes_libros_delfavoritos', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl "> Eliminar de favoritos</a>*/
/*                         {% else %}*/
/*                         <i class="fas fa-plus mr-1 font-weight-bold deselect bibIco "></i>*/
/*                         <a href="{{ path('dwes_libros_addfavoritos', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl "> Añadir a favoritos</a>*/
/* */
/*                         {% endif %}*/
/*                     </span>*/
/*                     {% endif %} {% if tipoLibro == "Anuncio" %}*/
/*                     <span class="text-dark   pr-2 cl">*/
/*                         {% if deseo %}*/
/*                         <i class='far fa-bookmark mr-1 font-weight-bold select favIco'></i>*/
/*                         <a href="{{ path('dwes_libros_deldeseos', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl "> En lista de deseos</a>*/
/*                         {% else %}*/
/* */
/* */
/*                         <i class="fas fa-plus mr-1 font-weight-bold deselect bibIco "></i>*/
/*                         <a href="{{ path('dwes_libros_adddeseos', {'idLibro' : app.request.get('idLibro')}) }}" class="text-dark cl "> Añadir a lista de deseos</a>*/
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
/*                 {#*/
/*                 <li class="nav-item dropdown">*/
/*                     <a class="nav-link dropdown-toggle waves-effect waves-light indigo-text" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"*/
/*                         aria-haspopup="true" aria-expanded="true">*/
/*                         Dropdown*/
/*                     </a>*/
/*                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">*/
/*                         <a class="dropdown-item waves-effect waves-light" href="#">Action</a>*/
/*                         <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>*/
/*                         <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>*/
/*                     </div>*/
/*                 </li> #}*/
/*             </ul>*/
/*         </nav>*/
/*     </div>*/
/*     <!--Grid column-->*/
/* */
/*     <div class="container card mt-1 pb-1" id="container2">*/
/* */
/*         <div class="card-body">*/
/*             {% for item in capitulos%}*/
/*             <div class="capitulo">*/
/*                 <!--Title-->*/
/*                 <h4 class="card-title text-center">*/
/*                     <span class="text-info font-weight-bold pr-2 small">#{{item.numCapitulo}}</span>*/
/*                     <strong>{{item.tituloCap}}</strong>*/
/*                 </h4>*/
/*                 <hr>*/
/*                 <!--Text-->*/
/*                 <p class="card-text" style="    ">{{item.contenidoCap}}*/
/*                 </p>*/
/*             </div>*/
/*             {% endfor %}*/
/*         </div>*/
/* */
/* */
/* */
/*         <nav class="mb-3 mt-3">*/
/*             <ul class="pagination pg-darkgrey flex-center">*/
/*                 <!--Arrow left-->*/
/*                 <li class="page-item">*/
/*                     <a class="page-link waves-effect waves-effect" aria-label="Previous">*/
/*                         <span aria-hidden="true">«</span>*/
/*                         <span class="sr-only">Previous</span>*/
/*                     </a>*/
/*                 </li>*/
/* */
/*                 <!--Numbers-->*/
/*                 <li class="page-item active">*/
/*                     <a class="page-link waves-effect waves-effect">1</a>*/
/*                 </li>*/
/*                 <li class="page-item">*/
/*                     <a class="page-link waves-effect waves-effect">2</a>*/
/*                 </li>*/
/*                 <li class="page-item">*/
/*                     <a class="page-link waves-effect waves-effect">3</a>*/
/*                 </li>*/
/*                 <li class="page-item">*/
/*                     <a class="page-link waves-effect waves-effect">4</a>*/
/*                 </li>*/
/*                 <li class="page-item">*/
/*                     <a class="page-link waves-effect waves-effect">5</a>*/
/*                 </li>*/
/* */
/*                 <!--Arrow right-->*/
/*                 <li class="page-item">*/
/*                     <a class="page-link waves-effect waves-effect" aria-label="Next">*/
/*                         <span aria-hidden="true">»</span>*/
/*                         <span class="sr-only">Next</span>*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>*/
/*         </nav>*/
/*     </div>*/
/*     {%endblock %}*/
