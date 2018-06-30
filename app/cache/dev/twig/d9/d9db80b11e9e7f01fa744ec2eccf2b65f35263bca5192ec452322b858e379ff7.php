<?php

/* DWESLibrosBundle:Default:capitulo.html.twig */
class __TwigTemplate_2b848cac2b16a7b968a317c4c33191241c870f6eb45ac64744cf9a9058427c8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:capitulo.html.twig", 1);
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
        echo "<!--Intro Section-->

<div class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Fondos/Fondo3.jpg"), "html", null, true);
        echo "');margin-top: 27px;\">
    <div class=\"flex-center\" style=\"background-color: rgba(17, 27, 43, 0.7);\">
        <div class=\"container my-4 pt-5\">

            <!-- Section heading -->
            <h3 class=\"text-center pt-4  white-text font-weight-bold wow fadeIn mb-4\" data-wow-delay=\"0.2s\">
                <strong>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["tituloLibro"]) ? $context["tituloLibro"] : $this->getContext($context, "tituloLibro")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["autor"]) ? $context["autor"] : $this->getContext($context, "autor")), "html", null, true);
        echo "</strong>

            </h3>
            <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                <span class=\"mb-5\">by @";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["autor"]) ? $context["autor"] : $this->getContext($context, "autor")), "html", null, true);
        echo "</span>
                <br>
                <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_perfilhistoria", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
        echo "\" class=\"btn peach-gradient btn-lg mt-4 gcapitulo\">Cerrar e ir al perfil de la Historia</a>

            </h6>

        </div>
    </div>
</div>


";
    }

    // line 25
    public function block_contenido($context, array $blocks = array())
    {
        echo " 


<!--Radio butons-->

<!--Radio butons-->
";
        // line 31
        $context["path"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "pathInfo", array());
        // line 32
        echo "<form name=\"formCapitulo\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_capitulo", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"), "numCapitulo" => twig_last($this->env, twig_split_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "/")))), "html", null, true);
        echo "\"
     method=\"POST\" target=\"frame\"> 
    <iframe name=\"frame\" style=\"display: none\"></iframe>
    <div class=\"container-fluid pl-0 pr-0\" style=\"background-color: #f4f5f6;\" id=\"container1\">

        <!--Grid column-->
        <div class=\"col-lg-12 col-md-12 mb-12 pl-0 pr-0\">
            <nav class=\"navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav indigo-text\">
                <!-- SideNav slide-out button -->
                <!-- Breadcrumb-->
                <div class=\"\">
                    ";
        // line 46
        echo "                    <button type=\"submit\" class=\"btn purple-gradient btn-sm gcapitulo\" id=\"grabado\">Guardar</button>
                    <span class=\"green-text font-weight-bold pr-2  gr\">Grabado</span>
                    <span class=\"text-dark small pr-2 cl\"> ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), "html", null, true);
        echo "</span>
                    <span class=\"text-dark  font-weight-bold pr-2 cl\" id=\"carac\">| 0</span>
                    <span class=\"text-dark  cl\">caráceteres </span>
                    <span class=\"text-dark  font-weight-bold pr-2 cl\" id=\"palab\">- 0</span>
                    <span class=\"text-dark  pr-2 cl\">palabras</span>
                </div>
                <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">

                    <li class=\"nav-item\">
                        <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla blanca\">
                            <i class=\"mb-2\">
                                <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/sun-selec.png"), "html", null, true);
        echo "\" id=\"blanca\"> </img>
                            </i>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla sefia\">
                            <i class=\"mb-2\">
                                <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/sunset.png"), "html", null, true);
        echo "\" id=\"sefia\"> </img>
                            </i>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla negra\">
                            <i class=\"mb-2\">
                                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/moon.png"), "html", null, true);
        echo "\" id=\"negra\"> </img>
                            </i>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Aumentar letra\">
                            <i class=\"mb-2\">
                                <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/font+.png"), "html", null, true);
        echo "\" id=\"letraUp\"> </img>
                            </i>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Desminuir letra\">
                            <i class=\"mb-2\">
                                <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/font-.png"), "html", null, true);
        echo "\" id=\"letraDown\"> </img>
                            </i>
                        </a>
                    </li>
                   ";
        // line 98
        echo "                    <li class=\"nav-item\">
                   <div class=\"btn-group\" data-toggle=\"buttons\">

    <label class=\"btn btn-cyan btn-rounded active form-check-label\">
        <input class=\"form-check-input\" type=\"radio\" checked autocomplete=\"off\" name=\"borrador\" value=\"Borrador\">Borrador
    </label>

    <label class=\"btn btn-cyan btn-rounded form-check-label\"> 
        <input class=\"form-check-input\" type=\"radio\" autocomplete=\"off\" name=\"borrador\" value=\"Publicado\"> Publicado

    </div>
                    </li>
                    ";
        // line 122
        echo "                </ul>
            </nav>
        </div>
        <!--Grid column-->
        <div class=\"container card mt-1 pb-1\" id=\"container2\">
            <div class=\"row mt-4 \">
                <div class=\"col-md-12\">

                    <div class=\"md-form\">
                        <input type=\"text\" id=\"titulohistoria\" class=\"form-control valI\" name=\"tituloCapitulo\" value=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["tituloCapitulo"]) ? $context["tituloCapitulo"] : $this->getContext($context, "tituloCapitulo")), "html", null, true);
        echo "\">
                        <label for=\"titulohistoria\" class=\"Ltitulohistoria valL cl\" id=\"labelTitC\">
                            <span class=\"font-weight-bold pr-1 idCap\">#1</span>Título del capítulo </label>
                    </div>
                </div>
            </div>
            <div class=\"row mt-3\">
                <!--Grid column-->
                <div class=\"col-md-12\">

                    <div class=\"md-form mb-5\">
                        <textarea id=\"summernote\" name=\"contCapitulo\">";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["contCapitulo"]) ? $context["contCapitulo"] : $this->getContext($context, "contCapitulo")), "html", null, true);
        echo "</textarea>
                    </div>
                </div>
            </div>
        </div>



        <div>

            <form>
                ";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:capitulo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 142,  189 => 131,  178 => 122,  164 => 98,  157 => 87,  147 => 80,  137 => 73,  127 => 66,  117 => 59,  103 => 48,  99 => 46,  84 => 32,  82 => 31,  72 => 25,  58 => 16,  53 => 14,  44 => 10,  35 => 4,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %} {% block portada %}*/
/* <!--Intro Section-->*/
/* */
/* <div class="streak streak-photo streak-md  portada " style="background-image: url('{{ asset('bundles/dweslibros/img/Fondos/Fondo3.jpg') }}');margin-top: 27px;">*/
/*     <div class="flex-center" style="background-color: rgba(17, 27, 43, 0.7);">*/
/*         <div class="container my-4 pt-5">*/
/* */
/*             <!-- Section heading -->*/
/*             <h3 class="text-center pt-4  white-text font-weight-bold wow fadeIn mb-4" data-wow-delay="0.2s">*/
/*                 <strong>{{tituloLibro}} {{autor}}</strong>*/
/* */
/*             </h3>*/
/*             <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <span class="mb-5">by @{{autor}}</span>*/
/*                 <br>*/
/*                 <a href="{{ path('dwes_libros_perfilhistoria', {'idLibro' : app.request.get('idLibro')}) }}" class="btn peach-gradient btn-lg mt-4 gcapitulo">Cerrar e ir al perfil de la Historia</a>*/
/* */
/*             </h6>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* {% endblock %} {% block contenido %} */
/* */
/* */
/* <!--Radio butons-->*/
/* */
/* <!--Radio butons-->*/
/* {% set path = app.request.pathInfo %}*/
/* <form name="formCapitulo" action="{{ path('dwes_libros_capitulo', {'idLibro' : app.request.get('idLibro'),'numCapitulo': path|split('/')|last }) }}"*/
/*      method="POST" target="frame"> */
/*     <iframe name="frame" style="display: none"></iframe>*/
/*     <div class="container-fluid pl-0 pr-0" style="background-color: #f4f5f6;" id="container1">*/
/* */
/*         <!--Grid column-->*/
/*         <div class="col-lg-12 col-md-12 mb-12 pl-0 pr-0">*/
/*             <nav class="navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav indigo-text">*/
/*                 <!-- SideNav slide-out button -->*/
/*                 <!-- Breadcrumb-->*/
/*                 <div class="">*/
/*                     {#*/
/*                     <p>*/
/*                         <i class="fa fa-book pr-2" aria-hidden="true"></i>Título de la Historia</p> #}*/
/*                     <button type="submit" class="btn purple-gradient btn-sm gcapitulo" id="grabado">Guardar</button>*/
/*                     <span class="green-text font-weight-bold pr-2  gr">Grabado</span>*/
/*                     <span class="text-dark small pr-2 cl"> {{fecha}}</span>*/
/*                     <span class="text-dark  font-weight-bold pr-2 cl" id="carac">| 0</span>*/
/*                     <span class="text-dark  cl">caráceteres </span>*/
/*                     <span class="text-dark  font-weight-bold pr-2 cl" id="palab">- 0</span>*/
/*                     <span class="text-dark  pr-2 cl">palabras</span>*/
/*                 </div>*/
/*                 <ul class="nav navbar-nav nav-flex-icons ml-auto">*/
/* */
/*                     <li class="nav-item">*/
/*                         <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Pantalla blanca">*/
/*                             <i class="mb-2">*/
/*                                 <img src="{{ asset('bundles/dweslibros/img/icons/sun-selec.png') }}" id="blanca"> </img>*/
/*                             </i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="nav-item">*/
/*                         <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Pantalla sefia">*/
/*                             <i class="mb-2">*/
/*                                 <img src="{{ asset('bundles/dweslibros/img/icons/sunset.png') }}" id="sefia"> </img>*/
/*                             </i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="nav-item">*/
/*                         <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Pantalla negra">*/
/*                             <i class="mb-2">*/
/*                                 <img src="{{ asset('bundles/dweslibros/img/icons/moon.png') }}" id="negra"> </img>*/
/*                             </i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="nav-item">*/
/*                         <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Aumentar letra">*/
/*                             <i class="mb-2">*/
/*                                 <img src="{{ asset('bundles/dweslibros/img/icons/font+.png') }}" id="letraUp"> </img>*/
/*                             </i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="nav-item">*/
/*                         <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Desminuir letra">*/
/*                             <i class="mb-2">*/
/*                                 <img src="{{ asset('bundles/dweslibros/img/icons/font-.png') }}" id="letraDown"> </img>*/
/*                             </i>*/
/*                         </a>*/
/*                     </li>*/
/*                    {#  <li class="nav-item">*/
/*                         <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="left" title="Para despublicar este capítulo, debes de cambiar su estado de publicación desde el Perfil de Historia">*/
/*                             <i class="mb-2">*/
/*                                 <span class="orange-text font-weight-bold">Borrador</span> */
/*                             </i>*/
/*                         </a>*/
/*                     </li> #}*/
/*                     <li class="nav-item">*/
/*                    <div class="btn-group" data-toggle="buttons">*/
/* */
/*     <label class="btn btn-cyan btn-rounded active form-check-label">*/
/*         <input class="form-check-input" type="radio" checked autocomplete="off" name="borrador" value="Borrador">Borrador*/
/*     </label>*/
/* */
/*     <label class="btn btn-cyan btn-rounded form-check-label"> */
/*         <input class="form-check-input" type="radio" autocomplete="off" name="borrador" value="Publicado"> Publicado*/
/* */
/*     </div>*/
/*                     </li>*/
/*                     {#*/
/*                     <li class="nav-item dropdown">*/
/*                         <a class="nav-link dropdown-toggle waves-effect waves-light indigo-text" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"*/
/*                             aria-haspopup="true" aria-expanded="true">*/
/*                             Dropdown*/
/*                         </a>*/
/*                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">*/
/*                             <a class="dropdown-item waves-effect waves-light" href="#">Action</a>*/
/*                             <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>*/
/*                             <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>*/
/*                         </div>*/
/*                     </li> #}*/
/*                 </ul>*/
/*             </nav>*/
/*         </div>*/
/*         <!--Grid column-->*/
/*         <div class="container card mt-1 pb-1" id="container2">*/
/*             <div class="row mt-4 ">*/
/*                 <div class="col-md-12">*/
/* */
/*                     <div class="md-form">*/
/*                         <input type="text" id="titulohistoria" class="form-control valI" name="tituloCapitulo" value="{{tituloCapitulo}}">*/
/*                         <label for="titulohistoria" class="Ltitulohistoria valL cl" id="labelTitC">*/
/*                             <span class="font-weight-bold pr-1 idCap">#1</span>Título del capítulo </label>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row mt-3">*/
/*                 <!--Grid column-->*/
/*                 <div class="col-md-12">*/
/* */
/*                     <div class="md-form mb-5">*/
/*                         <textarea id="summernote" name="contCapitulo">{{contCapitulo}}</textarea>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/*         <div>*/
/* */
/*             <form>*/
/*                 {%endblock %}*/
