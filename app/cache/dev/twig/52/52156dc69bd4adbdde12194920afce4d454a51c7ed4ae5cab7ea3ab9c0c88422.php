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

    <div class=\"container card mt-1 mb-5 px-0 py-0\" id=\"container2\">

        <div class=\"card-body\">
            <!--  <a href=\"javascript:pruebaDivAPdf()\" class=\"button\">Pasar a PDF</a> -->
            <div id=\"imprimir\">
                ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["capitulos"]) ? $context["capitulos"] : $this->getContext($context, "capitulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 273
            echo "
                <!--   
                <h4 class=\"card-title\">
                    <span class=\"text-info font-weight-bold pr-2 small\">#";
            // line 276
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "</span>
                    <strong>";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tituloCap", array()), "html", null, true);
            echo "</strong>
                </h4>
                <hr>
               
                <p class=\"card-text\" style=\"    \">";
            // line 281
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "contenidoCap", array()), "html", null, true);
            echo "
                </p> -->
                <div id=\"accordion\" class=\"mt-1\">
                    <div class=\"card\">
                        <div class=\"card-header\" id=\"heading";
            // line 285
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "\">
                            <h5 class=\"mb-0\">
                                <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse";
            // line 287
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "\" aria-expanded=\"false\"
                                    aria-controls=\"collapse";
            // line 288
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "\">
                                    #";
            // line 289
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tituloCap", array()), "html", null, true);
            echo "
                                </button>
                            </h5>
                        </div>

                        <div id=\"collapse";
            // line 294
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "\" class=\"collapse\" aria-labelledby=\"heading";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo "\" data-parent=\"#accordion\">
                            <div class=\"card-body bigtext\">
                                ";
            // line 296
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "contenidoCap", array()), "html", null, true);
            echo "
                               ";
            // line 298
            echo "                                <pre>  </pre>
                               <div></div>
                               <!-- Comentarios capitulo -->
                               <!--Main wrapper-->
    <div class=\"comments-list text-center text-md-left mb-5\">
            <!--Section: Leave a reply (Logged In User)-->
            <section class=\"mb-4 mt-4\">
           
                   <!--Leave a reply form-->
                   <div class=\"reply-form\">
                     <h3 class=\"section-heading h3 \" data-toggle=\"collapse\" href=\"#comentarioscp";
            // line 308
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                            Deja un comentario
                     </h3>
                     <!--Third row-->
                     <div>
                     <div class=\"row\" > 
                       <!--Image column-->
                       <div class=\"col-sm-2 col-12\">
                       
                         ";
            // line 317
            if ((isset($context["fUser"]) ? $context["fUser"] : $this->getContext($context, "fUser"))) {
                // line 318
                echo "                                    <img src=\"data:image/jpeg;base64,";
                echo twig_escape_filter($this->env, (isset($context["fUser"]) ? $context["fUser"] : $this->getContext($context, "fUser")), "html", null, true);
                echo "\" class=\" img-fluid avatar rounded-circle z-depth-2\"> ";
            } else {
                // line 319
                echo "                                    <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg\" alt=\"Sample avatar image\" class=\"\">
                                   ";
            }
            // line 321
            echo "                       </div>
                       <!--/.Image column-->
               
                       <!--Content column-->
                       <div class=\"col-sm-10 col-12\">
                         <!--Grid row-->
                       <form name=\"formUpdatePerfil\"  action=\"";
            // line 327
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_comentarCapitulo", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"), "numCap" => $this->getAttribute($context["item"], "numCapitulo", array()))), "html", null, true);
            echo "\"  method=\"POST\" enctype=\"multipart/form-data\" >
                         
                         <div class=\"row\">
               
                           <div class=\"col-12 mt-1\">
                             <div class=\"form-group basic-textarea rounded-corners shadow-textarea\">
               
                               <textarea class=\"form-control\" id=\"exampleFormControlTextarea6\" rows=\"5\" placeholder=\"Tu comentario...\" name=\"comentarioCap\" value=";
            // line 334
            echo twig_escape_filter($this->env, (isset($context["comentarioCap"]) ? $context["comentarioCap"] : $this->getContext($context, "comentarioCap")), "html", null, true);
            echo "></textarea>
                             </div>
               
                             <div class=\"text-right\">
                               <button  type=\"submit\" class=\"btn btn-primary btn-sm\">Comentar</button>
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
                               
                   <div class=\"text-center mb-4\">
                      
                        <h3>
                           <a  data-toggle=\"collapse\" href=\"#comentarios";
            // line 357
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                           Comentarios
                           <span class=\"badge blue\">";
            // line 359
            echo twig_escape_filter($this->env, (isset($context["cComentCap"]) ? $context["cComentCap"] : $this->getContext($context, "cComentCap")), "html", null, true);
            echo "</span>
                           </a>
           
                       </h3>
                   </div>
                   <!--Comment row-->
                   <div id=\"comentarios";
            // line 365
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numCapitulo", array()), "html", null, true);
            echo " \" class=\"collapse\">
                   ";
            // line 366
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comentariosCap"]) ? $context["comentariosCap"] : $this->getContext($context, "comentariosCap")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 367
                echo "                   <div class=\"row mb-4\">
                       <!--Image column-->
                       <div class=\"col-sm-2 col-12 mb-md-0 mb-3\">
                           <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg\" class=\"avatar rounded-circle z-depth-1-half\">
                       </div>
                       <!--/.Image column-->
                       <!--Content column-->
                       <div class=\"col-sm-10 col-12\">
                           <a>
                               <h4 class=\"font-weight-bold\">";
                // line 376
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "apellidos", array()), "html", null, true);
                echo "</h4>
                           </a>
                           <div class=\"mt-2\">
                               <ul class=\"list-unstyled\">
                                   <li class=\"comment-date\">
                                       <i class=\"fa fa-clock-o\"></i> ";
                // line 381
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fecha", array()), "html", null, true);
                echo "</li>
                               </ul>
                           </div>
                           <p class=\"grey-text\">";
                // line 384
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
            // line 390
            echo "                   </div>
                   <!--/.Comment row-->
                  
               </div>
               <!--/.Main wrapper-->
                               <!-- /. Comentarios capitulo -->
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
        echo "            </div>
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
        // line 454
        if ((isset($context["fotoAutor"]) ? $context["fotoAutor"] : $this->getContext($context, "fotoAutor"))) {
            // line 455
            echo "                            <img src=\"data:image/jpeg;base64,";
            echo twig_escape_filter($this->env, (isset($context["fotoAutor"]) ? $context["fotoAutor"] : $this->getContext($context, "fotoAutor")), "html", null, true);
            echo "\" class=\" img-fluid rounded-circle\" alt=\"sample image\"> ";
        } else {
            // line 456
            echo "                        <img src=\"http://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg\" class=\"img-fluid rounded-circle\" alt=\"sample image\">
                        ";
        }
        // line 458
        echo "                </div>
                <!--Author Data-->
                <div class=\"col-12 col-sm-10\">
                ";
        // line 461
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["autor"]) ? $context["autor"] : $this->getContext($context, "autor")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 462
            echo "                    <p>
                        <strong>";
            // line 463
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "apellidos", array()), "html", null, true);
            echo "</strong>
                    </p>
                    <div class=\"personal-sm\">
                        <a href=\"\"class=\"pr-2 fb-ic\">
                            Ver perfil
                        </a>

                    </div>
                    <p class=\"dark-grey-text article\">";
            // line 471
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "biografia", array()), "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 474
        echo "                </div>
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
    <div class=\"comments-list text-center text-md-left mb-5\">
        
 <!--Section: Leave a reply (Logged In User)-->
 <section class=\"mb-4 mt-4\">

        <!--Leave a reply form-->
        <div class=\"reply-form\">
          <h3 class=\"section-heading h3 \">Deja un comentario </h3>
          <!--Third row-->
          <div class=\"row\">
            <!--Image column-->
            <div class=\"col-sm-2 col-12\">
            
              ";
        // line 920
        if ((isset($context["fUser"]) ? $context["fUser"] : $this->getContext($context, "fUser"))) {
            // line 921
            echo "                            <img src=\"data:image/jpeg;base64,";
            echo twig_escape_filter($this->env, (isset($context["fUser"]) ? $context["fUser"] : $this->getContext($context, "fUser")), "html", null, true);
            echo "\" class=\" img-fluid avatar rounded-circle z-depth-2\"> ";
        } else {
            // line 922
            echo "                         <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg\" alt=\"Sample avatar image\" class=\"\">
                        ";
        }
        // line 924
        echo "            </div>
            <!--/.Image column-->
    
            <!--Content column-->
            <div class=\"col-sm-10 col-12\">
              <!--Grid row-->
            <form name=\"formUpdatePerfil\"  action=\"";
        // line 930
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_comentarLibro", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
        echo "\"  method=\"POST\" enctype=\"multipart/form-data\" >
              
              <div class=\"row\">
    
                <div class=\"col-12 mt-1\">
                  <div class=\"form-group basic-textarea rounded-corners shadow-textarea\">
    
                    <textarea class=\"form-control\" id=\"exampleFormControlTextarea6\" rows=\"5\" placeholder=\"Tu comentario...\" name=\"comentario\" value=";
        // line 937
        echo twig_escape_filter($this->env, (isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "html", null, true);
        echo "></textarea>
                  </div>
    
                  <div class=\"text-right\">
                    <button  type=\"submit\" class=\"btn btn-primary btn-sm\">Comentar</button>
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
                    
        <div class=\"text-center mb-4\">
            <h3>
                <a  data-toggle=\"collapse\" href=\"#comentarios\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                Comentarios
                <span class=\"badge blue\">";
        // line 961
        echo twig_escape_filter($this->env, (isset($context["cComent"]) ? $context["cComent"] : $this->getContext($context, "cComent")), "html", null, true);
        echo "</span>
                </a>

            </h3>
        </div>
        <!--Comment row-->
        <div id=\"comentarios\" class=\"collapse\">
        ";
        // line 968
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comentarios"]) ? $context["comentarios"] : $this->getContext($context, "comentarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 969
            echo "        <div class=\"row mb-4\">
            <!--Image column-->
            <div class=\"col-sm-2 col-12 mb-md-0 mb-3\">
                <img src=\"https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg\" class=\"avatar rounded-circle z-depth-1-half\">
            </div>
            <!--/.Image column-->
            <!--Content column-->
            <div class=\"col-sm-10 col-12\">
                <a>
                    <h4 class=\"font-weight-bold\">";
            // line 978
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "apellidos", array()), "html", null, true);
            echo "</h4>
                </a>
                <div class=\"mt-2\">
                    <ul class=\"list-unstyled\">
                        <li class=\"comment-date\">
                            <i class=\"fa fa-clock-o\"></i> ";
            // line 983
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fecha", array()), "html", null, true);
            echo "</li>
                    </ul>
                </div>
                <p class=\"grey-text\">";
            // line 986
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
        // line 992
        echo "        </div>
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
        return array (  1289 => 992,  1277 => 986,  1271 => 983,  1261 => 978,  1250 => 969,  1246 => 968,  1236 => 961,  1209 => 937,  1199 => 930,  1191 => 924,  1187 => 922,  1182 => 921,  1180 => 920,  732 => 474,  723 => 471,  710 => 463,  707 => 462,  703 => 461,  698 => 458,  694 => 456,  689 => 455,  687 => 454,  633 => 402,  616 => 390,  604 => 384,  598 => 381,  588 => 376,  577 => 367,  573 => 366,  569 => 365,  560 => 359,  555 => 357,  529 => 334,  519 => 327,  511 => 321,  507 => 319,  502 => 318,  500 => 317,  488 => 308,  476 => 298,  472 => 296,  465 => 294,  455 => 289,  451 => 288,  447 => 287,  442 => 285,  435 => 281,  428 => 277,  424 => 276,  419 => 273,  415 => 272,  403 => 262,  396 => 246,  386 => 239,  376 => 232,  366 => 225,  356 => 218,  348 => 212,  344 => 210,  339 => 208,  334 => 205,  329 => 203,  326 => 202,  324 => 201,  321 => 200,  318 => 199,  314 => 198,  308 => 195,  305 => 194,  300 => 192,  297 => 191,  295 => 190,  290 => 187,  284 => 184,  281 => 183,  276 => 181,  273 => 180,  271 => 179,  268 => 178,  265 => 177,  261 => 173,  256 => 169,  249 => 165,  243 => 162,  240 => 161,  228 => 148,  221 => 138,  193 => 117,  188 => 115,  182 => 112,  166 => 98,  156 => 91,  150 => 89,  145 => 88,  143 => 87,  129 => 75,  111 => 53,  102 => 50,  98 => 49,  94 => 48,  91 => 47,  87 => 46,  66 => 28,  42 => 7,  35 => 2,  11 => 1,);
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
/*     <div class="container card mt-1 mb-5 px-0 py-0" id="container2">*/
/* */
/*         <div class="card-body">*/
/*             <!--  <a href="javascript:pruebaDivAPdf()" class="button">Pasar a PDF</a> -->*/
/*             <div id="imprimir">*/
/*                 {% for item in capitulos%}*/
/* */
/*                 <!--   */
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
/*                                     aria-controls="collapse{{item.numCapitulo}}">*/
/*                                     #{{item.numCapitulo}} {{item.tituloCap}}*/
/*                                 </button>*/
/*                             </h5>*/
/*                         </div>*/
/* */
/*                         <div id="collapse{{item.numCapitulo}}" class="collapse" aria-labelledby="heading{{item.numCapitulo}}" data-parent="#accordion">*/
/*                             <div class="card-body bigtext">*/
/*                                 {{item.contenidoCap}}*/
/*                                {# {{html}} #}*/
/*                                 <pre>  </pre>*/
/*                                <div></div>*/
/*                                <!-- Comentarios capitulo -->*/
/*                                <!--Main wrapper-->*/
/*     <div class="comments-list text-center text-md-left mb-5">*/
/*             <!--Section: Leave a reply (Logged In User)-->*/
/*             <section class="mb-4 mt-4">*/
/*            */
/*                    <!--Leave a reply form-->*/
/*                    <div class="reply-form">*/
/*                      <h3 class="section-heading h3 " data-toggle="collapse" href="#comentarioscp{{item.numCapitulo}} " role="button" aria-expanded="false" aria-controls="collapseExample">*/
/*                             Deja un comentario*/
/*                      </h3>*/
/*                      <!--Third row-->*/
/*                      <div>*/
/*                      <div class="row" > */
/*                        <!--Image column-->*/
/*                        <div class="col-sm-2 col-12">*/
/*                        */
/*                          {% if fUser %}*/
/*                                     <img src="data:image/jpeg;base64,{{fUser}}" class=" img-fluid avatar rounded-circle z-depth-2"> {% else %}*/
/*                                     <img src="https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg" alt="Sample avatar image" class="">*/
/*                                    {% endif %}*/
/*                        </div>*/
/*                        <!--/.Image column-->*/
/*                */
/*                        <!--Content column-->*/
/*                        <div class="col-sm-10 col-12">*/
/*                          <!--Grid row-->*/
/*                        <form name="formUpdatePerfil"  action="{{ path('dwes_libros_comentarCapitulo',{'idLibro' : app.request.get('idLibro'),'numCap':item.numCapitulo } )}}"  method="POST" enctype="multipart/form-data" >*/
/*                          */
/*                          <div class="row">*/
/*                */
/*                            <div class="col-12 mt-1">*/
/*                              <div class="form-group basic-textarea rounded-corners shadow-textarea">*/
/*                */
/*                                <textarea class="form-control" id="exampleFormControlTextarea6" rows="5" placeholder="Tu comentario..." name="comentarioCap" value={{comentarioCap}}></textarea>*/
/*                              </div>*/
/*                */
/*                              <div class="text-right">*/
/*                                <button  type="submit" class="btn btn-primary btn-sm">Comentar</button>*/
/*                              </div>*/
/*               */
/*                            </div>*/
/*                        </form>*/
/*                          </div>*/
/*                          <!--Grid row-->*/
/*                */
/*                        </div>*/
/*                */
/*                      </div>*/
/*                      <!--/.Leave a reply form-->*/
/*                */
/*                  </section>*/
/*                  <!--/Section: Leave a reply (Logged In User)-->*/
/*                                */
/*                    <div class="text-center mb-4">*/
/*                       */
/*                         <h3>*/
/*                            <a  data-toggle="collapse" href="#comentarios{{item.numCapitulo}} " role="button" aria-expanded="false" aria-controls="collapseExample">*/
/*                            Comentarios*/
/*                            <span class="badge blue">{{cComentCap}}</span>*/
/*                            </a>*/
/*            */
/*                        </h3>*/
/*                    </div>*/
/*                    <!--Comment row-->*/
/*                    <div id="comentarios{{item.numCapitulo}} " class="collapse">*/
/*                    {% for item in comentariosCap %}*/
/*                    <div class="row mb-4">*/
/*                        <!--Image column-->*/
/*                        <div class="col-sm-2 col-12 mb-md-0 mb-3">*/
/*                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg" class="avatar rounded-circle z-depth-1-half">*/
/*                        </div>*/
/*                        <!--/.Image column-->*/
/*                        <!--Content column-->*/
/*                        <div class="col-sm-10 col-12">*/
/*                            <a>*/
/*                                <h4 class="font-weight-bold">{{item.nombre}} {{item.apellidos}}</h4>*/
/*                            </a>*/
/*                            <div class="mt-2">*/
/*                                <ul class="list-unstyled">*/
/*                                    <li class="comment-date">*/
/*                                        <i class="fa fa-clock-o"></i> {{item.fecha}}</li>*/
/*                                </ul>*/
/*                            </div>*/
/*                            <p class="grey-text">{{item.comentario}}</p>*/
/*                        </div>*/
/*                        <!--/.Content column-->*/
/*                    </div>*/
/*            */
/*                    {% endfor %}*/
/*                    </div>*/
/*                    <!--/.Comment row-->*/
/*                   */
/*                </div>*/
/*                <!--/.Main wrapper-->*/
/*                                <!-- /. Comentarios capitulo -->*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <!-- Autor -->*/
/* */
/*     <!-- ./ Autor -->*/
/* */
/*     <script>*/
/*         function pruebaDivAPdf() {*/
/*             var pdf = new jsPDF('p', 'pt', 'letter');*/
/*             source = $('#imprimir')[0];*/
/* */
/*             specialElementHandlers = {*/
/*                 '#bypassme': function (element, renderer) {*/
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
/*                     pdf.save('Prueba.pdf');*/
/*                 }, margins*/
/*             );*/
/*         }*/
/*     </script>*/
/* */
/* </div>*/
/* <!-- Autor -->*/
/* <div class="container card mt-1 mb-5 px-0 py-0">*/
/*     <section class="text-center text-md-left">*/
/*         <div class="card card-body">*/
/* */
/*             <div class="row">*/
/*                 <!--Avatar-->*/
/*                 <div class="col-12 col-sm-2 mb-md-0 mb-3">*/
/*                    */
/* */
/*                       {% if fotoAutor %}*/
/*                             <img src="data:image/jpeg;base64,{{fotoAutor}}" class=" img-fluid rounded-circle" alt="sample image"> {% else %}*/
/*                         <img src="http://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" class="img-fluid rounded-circle" alt="sample image">*/
/*                         {% endif %}*/
/*                 </div>*/
/*                 <!--Author Data-->*/
/*                 <div class="col-12 col-sm-10">*/
/*                 {% for item in autor %}*/
/*                     <p>*/
/*                         <strong>{{item.nombre}} {{item.apellidos}}</strong>*/
/*                     </p>*/
/*                     <div class="personal-sm">*/
/*                         <a href=""class="pr-2 fb-ic">*/
/*                             Ver perfil*/
/*                         </a>*/
/* */
/*                     </div>*/
/*                     <p class="dark-grey-text article">{{item.biografia}}*/
/*                     </p>*/
/*                 {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!-- ./Autor -->*/
/* */
/* </div>*/
/* <!-- Te puede gustar -->*/
/* <div class="container  mt-1 mb-5 px-0 py-0">*/
/*     <section class="text-left mt-4">*/
/* */
/*         <h5 class="font-weight-bold mt-5">*/
/*             <strong>YOU MIGHT ALSO LIKE</strong>*/
/*         </h5>*/
/*         <hr class="red title-hr">*/
/* */
/*         <!--Carousel Wrapper-->*/
/*         <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">*/
/* */
/*             <!--Indicators-->*/
/*             <ol class="carousel-indicators">*/
/*                 <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>*/
/*                 <li data-target="#multi-item-example" data-slide-to="1" class=""></li>*/
/*                 <li data-target="#multi-item-example" data-slide-to="2" class=""></li>*/
/*             </ol>*/
/*             <!--/.Indicators-->*/
/* */
/*             <!--Slides-->*/
/*             <div class="carousel-inner" role="listbox">*/
/* */
/*                 <!--First slide-->*/
/*                 <div class="carousel-item active">*/
/* */
/*                     <!--Grid row-->*/
/*                     <div class="row mb-4">*/
/* */
/*                         <!--Grid column-->*/
/*                         <div class="col-lg-4 my-3">*/
/*                             <!--Card-->*/
/*                             <div class="card">*/
/* */
/*                                 <!--Card image-->*/
/*                                 <div class="view overlay">*/
/*                                     <img src="http://mdbootstrap.com/img/Photos/Others/img (43).jpg" class="card-img-top" alt="sample image">*/
/*                                     <a>*/
/*                                         <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <!--/.Card image-->*/
/* */
/*                                 <!--Card content-->*/
/*                                 <div class="card-body">*/
/*                                     <!--Title-->*/
/*                                     <h4 class="card-title">*/
/*                                         <strong>Card title</strong>*/
/*                                     </h4>*/
/*                                     <hr>*/
/* */
/*                                     <p></p>*/
/*                                     <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                         <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                     <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                     <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                         <a>read more*/
/*                                             <i class="fa fa-angle-right"></i>*/
/*                                         </a>*/
/*                                     </p>*/
/*                                 </div>*/
/*                                 <!--/.Card content-->*/
/* */
/*                             </div>*/
/*                             <!--/.Card-->*/
/* */
/*                         </div>*/
/*                         <!--Grid column-->*/
/* */
/*                         <!--Grid column-->*/
/*                         <div class="col-lg-4 text-left mt-3">*/
/* */
/*                             <!--Card-->*/
/*                             <div class="card">*/
/* */
/*                                 <!--Card image-->*/
/*                                 <div class="view overlay">*/
/*                                     <img src="http://mdbootstrap.com/img/Photos/Others/img (39).jpg" class="card-img-top" alt="sample image">*/
/*                                     <a>*/
/*                                         <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <!--/.Card image-->*/
/* */
/*                                 <!--Card content-->*/
/*                                 <div class="card-body">*/
/*                                     <!--Title-->*/
/*                                     <h4 class="card-title">*/
/*                                         <strong>Card title</strong>*/
/*                                     </h4>*/
/*                                     <hr>*/
/* */
/*                                     <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                         <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                     <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                     <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                         <a>read more*/
/*                                             <i class="fa fa-angle-right"></i>*/
/*                                         </a>*/
/*                                     </p>*/
/*                                 </div>*/
/*                                 <!--/.Card content-->*/
/* */
/*                             </div>*/
/*                             <!--/.Card-->*/
/*                         </div>*/
/*                         <!--Grid column-->*/
/* */
/*                         <!--Grid column-->*/
/*                         <div class="col-lg-4 text-left mt-3">*/
/* */
/*                             <!--Card-->*/
/*                             <div class="card">*/
/* */
/*                                 <!--Card image-->*/
/*                                 <div class="view overlay">*/
/*                                     <img src="http://mdbootstrap.com/img/Photos/Others/img (46).jpg" class="card-img-top" alt="sample image">*/
/*                                     <a>*/
/*                                         <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <!--/.Card image-->*/
/* */
/*                                 <!--Card content-->*/
/*                                 <div class="card-body">*/
/*                                     <!--Title-->*/
/*                                     <h4 class="card-title">*/
/*                                         <strong>Card title</strong>*/
/*                                     </h4>*/
/*                                     <hr>*/
/* */
/*                                     <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                         <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                     <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                     <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                         <a>read more*/
/*                                             <i class="fa fa-angle-right"></i>*/
/*                                         </a>*/
/*                                     </p>*/
/*                                 </div>*/
/*                                 <!--/.Card content-->*/
/* */
/*                             </div>*/
/*                             <!--/.Card-->*/
/*                         </div>*/
/*                         <!--Grid column-->*/
/* */
/*                     </div>*/
/*                     <!--/Grid row-->*/
/* */
/*                 </div>*/
/*                 <!--/.First slide-->*/
/* */
/*                 <!--Second slide-->*/
/*                 <div class="carousel-item">*/
/* */
/*                     <!--Grid row-->*/
/*                     <div class="row mb-4">*/
/* */
/*                         <!--Grid column-->*/
/*                         <div class="col-lg-4 my-3">*/
/*                             <!--Card-->*/
/*                             <div class="card">*/
/* */
/*                                 <!--Card image-->*/
/*                                 <div class="view overlay">*/
/*                                     <img src="http://mdbootstrap.com/img/Photos/Others/img (40).jpg" class="card-img-top" alt="sample image">*/
/*                                     <a>*/
/*                                         <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <!--/.Card image-->*/
/* */
/*                                 <!--Card content-->*/
/*                                 <div class="card-body">*/
/*                                     <!--Title-->*/
/*                                     <h4 class="card-title">*/
/*                                         <strong>Card title</strong>*/
/*                                     </h4>*/
/*                                     <hr>*/
/* */
/*                                     <p></p>*/
/*                                     <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                         <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                     <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                     <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                         <a>read more*/
/*                                             <i class="fa fa-angle-right"></i>*/
/*                                         </a>*/
/*                                     </p>*/
/*                                 </div>*/
/*                                 <!--/.Card content-->*/
/* */
/*                             </div>*/
/*                             <!--/.Card-->*/
/* */
/*                         </div>*/
/*                         <!--Grid column-->*/
/* */
/*                         <!--Grid column-->*/
/*                         <div class="col-lg-4 text-left mt-3">*/
/* */
/*                             <!--Card-->*/
/*                             <div class="card">*/
/* */
/*                                 <!--Card image-->*/
/*                                 <div class="view overlay">*/
/*                                     <img src="http://mdbootstrap.com/img/Photos/Others/img (45).jpg" class="card-img-top" alt="sample image">*/
/*                                     <a>*/
/*                                         <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <!--/.Card image-->*/
/* */
/*                                 <!--Card content-->*/
/*                                 <div class="card-body">*/
/*                                     <!--Title-->*/
/*                                     <h4 class="card-title">*/
/*                                         <strong>Card title</strong>*/
/*                                     </h4>*/
/*                                     <hr>*/
/* */
/*                                     <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                         <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                     <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                     <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                         <a>read more*/
/*                                             <i class="fa fa-angle-right"></i>*/
/*                                         </a>*/
/*                                     </p>*/
/*                                 </div>*/
/*                                 <!--/.Card content-->*/
/* */
/*                             </div>*/
/*                             <!--/.Card-->*/
/*                         </div>*/
/*                         <!--Grid column-->*/
/* */
/*                         <!--Grid column-->*/
/*                         <div class="col-lg-4 text-left mt-3">*/
/* */
/*                             <!--Card-->*/
/*                             <div class="card">*/
/* */
/*                                 <!--Card image-->*/
/*                                 <div class="view overlay">*/
/*                                     <img src="http://mdbootstrap.com/img/Photos/Others/img (35).jpg" class="card-img-top" alt="sample image">*/
/*                                     <a>*/
/*                                         <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <!--/.Card image-->*/
/* */
/*                                 <!--Card content-->*/
/*                                 <div class="card-body">*/
/*                                     <!--Title-->*/
/*                                     <h4 class="card-title">*/
/*                                         <strong>Card title</strong>*/
/*                                     </h4>*/
/*                                     <hr>*/
/* */
/*                                     <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                         <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                     <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                     <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                         <a>read more*/
/*                                             <i class="fa fa-angle-right"></i>*/
/*                                         </a>*/
/*                                     </p>*/
/*                                 </div>*/
/*                                 <!--/.Card content-->*/
/* */
/*                             </div>*/
/*                             <!--/.Card-->*/
/*                         </div>*/
/*                         <!--Grid column-->*/
/* */
/*                     </div>*/
/*                     <!--/Grid row-->*/
/*                 </div>*/
/*                 <!--/.Second slide-->*/
/* */
/*                 <!--Third slide-->*/
/*                 <div class="carousel-item">*/
/* */
/*                     <!--Grid row-->*/
/*                     <div class="row mb-4">*/
/* */
/*                         <!--Grid column-->*/
/*                         <div class="col-lg-4 my-3">*/
/*                             <!--Card-->*/
/*                             <div class="card">*/
/* */
/*                                 <!--Card image-->*/
/*                                 <div class="view overlay">*/
/*                                     <img src="http://mdbootstrap.com/img/Photos/Others/img (30).jpg" class="card-img-top" alt="sample image">*/
/*                                     <a>*/
/*                                         <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <!--/.Card image-->*/
/* */
/*                                 <!--Card content-->*/
/*                                 <div class="card-body">*/
/*                                     <!--Title-->*/
/*                                     <h4 class="card-title">*/
/*                                         <strong>Card title</strong>*/
/*                                     </h4>*/
/*                                     <hr>*/
/* */
/*                                     <p></p>*/
/*                                     <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                         <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                     <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                     <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                         <a>read more*/
/*                                             <i class="fa fa-angle-right"></i>*/
/*                                         </a>*/
/*                                     </p>*/
/*                                 </div>*/
/*                                 <!--/.Card content-->*/
/* */
/*                             </div>*/
/*                             <!--/.Card-->*/
/* */
/*                         </div>*/
/*                         <!--Grid column-->*/
/* */
/*                         <!--Grid column-->*/
/*                         <div class="col-lg-4 text-left mt-3">*/
/* */
/*                             <!--Card-->*/
/*                             <div class="card">*/
/* */
/*                                 <!--Card image-->*/
/*                                 <div class="view overlay">*/
/*                                     <img src="http://mdbootstrap.com/img/Photos/Others/img (28).jpg" class="card-img-top" alt="sample image">*/
/*                                     <a>*/
/*                                         <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <!--/.Card image-->*/
/* */
/*                                 <!--Card content-->*/
/*                                 <div class="card-body">*/
/*                                     <!--Title-->*/
/*                                     <h4 class="card-title">*/
/*                                         <strong>Card title</strong>*/
/*                                     </h4>*/
/*                                     <hr>*/
/* */
/*                                     <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                         <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                     <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                     <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                         <a>read more*/
/*                                             <i class="fa fa-angle-right"></i>*/
/*                                         </a>*/
/*                                     </p>*/
/*                                 </div>*/
/*                                 <!--/.Card content-->*/
/* */
/*                             </div>*/
/*                             <!--/.Card-->*/
/*                         </div>*/
/*                         <!--Grid column-->*/
/* */
/*                         <!--Grid column-->*/
/*                         <div class="col-lg-4 text-left mt-3">*/
/* */
/*                             <!--Card-->*/
/*                             <div class="card">*/
/* */
/*                                 <!--Card image-->*/
/*                                 <div class="view overlay">*/
/*                                     <img src="http://mdbootstrap.com/img/Photos/Others/img (33).jpg" class="card-img-top" alt="sample image">*/
/*                                     <a>*/
/*                                         <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <!--/.Card image-->*/
/* */
/*                                 <!--Card content-->*/
/*                                 <div class="card-body">*/
/*                                     <!--Title-->*/
/*                                     <h4 class="card-title">*/
/*                                         <strong>Card title</strong>*/
/*                                     </h4>*/
/*                                     <hr>*/
/* */
/*                                     <p class="font-small font-weight-bold dark-grey-text mb-1">*/
/*                                         <i class="fa fa-clock-o"></i> 27/08/2017</p>*/
/*                                     <p class="font-small grey-text mb-0">Anna Smith</p>*/
/*                                     <p class="text-right mb-0 font-small font-weight-bold">*/
/*                                         <a>read more*/
/*                                             <i class="fa fa-angle-right"></i>*/
/*                                         </a>*/
/*                                     </p>*/
/*                                 </div>*/
/*                                 <!--/.Card content-->*/
/* */
/*                             </div>*/
/*                             <!--/.Card-->*/
/*                         </div>*/
/*                         <!--Grid column-->*/
/*                     </div>*/
/*                     <!--/Grid row-->*/
/*                 </div>*/
/*                 <!--/.Third slide-->*/
/* */
/*             </div>*/
/*             <!--/.Slides-->*/
/* */
/*         </div>*/
/*         <!--/.Carousel Wrapper-->*/
/* */
/*     </section>*/
/* */
/* */
/* </div>*/
/* <!-- ./ Te puede gustar -->*/
/* */
/* <!-- Comntarios -->*/
/* <div class="container  mt-1 mb-5 px-0 py-0">*/
/* */
/*     <!--Main wrapper-->*/
/*     <div class="comments-list text-center text-md-left mb-5">*/
/*         */
/*  <!--Section: Leave a reply (Logged In User)-->*/
/*  <section class="mb-4 mt-4">*/
/* */
/*         <!--Leave a reply form-->*/
/*         <div class="reply-form">*/
/*           <h3 class="section-heading h3 ">Deja un comentario </h3>*/
/*           <!--Third row-->*/
/*           <div class="row">*/
/*             <!--Image column-->*/
/*             <div class="col-sm-2 col-12">*/
/*             */
/*               {% if fUser %}*/
/*                             <img src="data:image/jpeg;base64,{{fUser}}" class=" img-fluid avatar rounded-circle z-depth-2"> {% else %}*/
/*                          <img src="https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg" alt="Sample avatar image" class="">*/
/*                         {% endif %}*/
/*             </div>*/
/*             <!--/.Image column-->*/
/*     */
/*             <!--Content column-->*/
/*             <div class="col-sm-10 col-12">*/
/*               <!--Grid row-->*/
/*             <form name="formUpdatePerfil"  action="{{ path('dwes_libros_comentarLibro',{'idLibro' : app.request.get('idLibro')} )}}"  method="POST" enctype="multipart/form-data" >*/
/*               */
/*               <div class="row">*/
/*     */
/*                 <div class="col-12 mt-1">*/
/*                   <div class="form-group basic-textarea rounded-corners shadow-textarea">*/
/*     */
/*                     <textarea class="form-control" id="exampleFormControlTextarea6" rows="5" placeholder="Tu comentario..." name="comentario" value={{comentario}}></textarea>*/
/*                   </div>*/
/*     */
/*                   <div class="text-right">*/
/*                     <button  type="submit" class="btn btn-primary btn-sm">Comentar</button>*/
/*                   </div>*/
/*    */
/*                 </div>*/
/*             </form>*/
/*               </div>*/
/*               <!--Grid row-->*/
/*     */
/*             </div>*/
/*     */
/*           </div>*/
/*           <!--/.Leave a reply form-->*/
/*     */
/*       </section>*/
/*       <!--/Section: Leave a reply (Logged In User)-->*/
/*                     */
/*         <div class="text-center mb-4">*/
/*             <h3>*/
/*                 <a  data-toggle="collapse" href="#comentarios" role="button" aria-expanded="false" aria-controls="collapseExample">*/
/*                 Comentarios*/
/*                 <span class="badge blue">{{cComent}}</span>*/
/*                 </a>*/
/* */
/*             </h3>*/
/*         </div>*/
/*         <!--Comment row-->*/
/*         <div id="comentarios" class="collapse">*/
/*         {% for item in comentarios %}*/
/*         <div class="row mb-4">*/
/*             <!--Image column-->*/
/*             <div class="col-sm-2 col-12 mb-md-0 mb-3">*/
/*                 <img src="https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg" class="avatar rounded-circle z-depth-1-half">*/
/*             </div>*/
/*             <!--/.Image column-->*/
/*             <!--Content column-->*/
/*             <div class="col-sm-10 col-12">*/
/*                 <a>*/
/*                     <h4 class="font-weight-bold">{{item.nombre}} {{item.apellidos}}</h4>*/
/*                 </a>*/
/*                 <div class="mt-2">*/
/*                     <ul class="list-unstyled">*/
/*                         <li class="comment-date">*/
/*                             <i class="fa fa-clock-o"></i> {{item.fecha}}</li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <p class="grey-text">{{item.comentario}}</p>*/
/*             </div>*/
/*             <!--/.Content column-->*/
/*         </div>*/
/* */
/*         {% endfor %}*/
/*         </div>*/
/*         <!--/.Comment row-->*/
/*        */
/*     </div>*/
/*     <!--/.Main wrapper-->*/
/* */
/* </div>*/
/* <!-- ./Comentarios -->*/
/* </div>*/
/* */
/* */
/* {%endblock %}*/
