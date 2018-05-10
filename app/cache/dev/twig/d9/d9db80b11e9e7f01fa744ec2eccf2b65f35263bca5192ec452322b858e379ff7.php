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

    // line 5
    public function block_portada($context, array $blocks = array())
    {
        // line 6
        echo "    <!--Intro Section-->
   <div  class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Fondos/Fondo2.jpg"), "html", null, true);
        echo "');margin-top: 27px;\">
            <div class=\"flex-center\" style=\"background-color: rgba(17, 27, 43, 0.7);\">
                <div class=\"container my-4 pt-5\">

                    <!-- Section heading -->
                    <h3 class=\"text-center pt-4  white-text font-weight-bold wow fadeIn mb-4\" data-wow-delay=\"0.2s\">
                        <strong>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["tituloLibro"]) ? $context["tituloLibro"] : $this->getContext($context, "tituloLibro")), "html", null, true);
        echo "</strong>
                             
                    </h3>
                    <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\"> <span class=\"mb-5\">by @";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["autor"]) ? $context["autor"] : $this->getContext($context, "autor")), "html", null, true);
        echo "</span>
                    <br>
                    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_perfilhistoria", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
        echo "\"  class=\"btn peach-gradient btn-lg mt-4\">Cerrar e ir al perfil de la Historia</a> 
                     
                    </h6>
                    
                </div>
            </div>
        </div> 
            

";
    }

    // line 30
    public function block_contenido($context, array $blocks = array())
    {
        // line 39
        echo "

  <form name=\"formCapitulo\" action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_capitulo", array("idLibro" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "idLibro"), "method"))), "html", null, true);
        echo "\" method=\"POST\"  target=\"frame\"  > 
  <iframe name=\"frame\" style=\"display: none\"></iframe>
<div class=\"container-fluid pl-0 pr-0\" style=\"background-color: #f4f5f6;\" id=\"container1\">

        <!--Grid column-->
        <div class=\"col-lg-12 col-md-12 mb-12 pl-0 pr-0\">
<nav class=\"navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav indigo-text\">
            <!-- SideNav slide-out button -->
          
            <!-- Breadcrumb-->
            <div class=\"\">
                ";
        // line 53
        echo "                
                <button type=\"submit\" class=\"btn purple-gradient btn-sm\" id=\"gcapitulo\" >Guardar</button> <span class=\"green-text font-weight-bold pr-2 small\">Grabado</span>
                <span class=\"text-dark small pr-2 cl\"> ";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), "html", null, true);
        echo "</span><span class=\"text-dark  font-weight-bold pr-2 cl\" id=\"carac\">| 0</span><span class=\"text-dark  cl\">caráceteres </span>
                <span class=\"text-dark  font-weight-bold pr-2 cl\" id=\"palab\">- 0</span><span class=\"text-dark  pr-2 cl\">palabras</span>
            </div>
            <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">
          
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla blanca\"> <i class=\"mb-2\">
                            <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/sun-selec.png"), "html", null, true);
        echo "\" id=\"blanca\" > </img>
                        </i></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla sefia\" > <i class=\"mb-2\">
                            <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/sunset.png"), "html", null, true);
        echo "\" id=\"sefia\"> </img>
                        </i></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla negra\" >  <i class=\"mb-2\">
                            <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/moon.png"), "html", null, true);
        echo "\" id=\"negra\"> </img>
                        </i></a>
                </li>
                 <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Aumentar letra\" > <i class=\"mb-2\">
                            <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/font+.png"), "html", null, true);
        echo "\" id=\"letraUp\"> </img> 
                        </i></a>
                </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Desminuir letra\" > <i class=\"mb-2\">
                            <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/font-.png"), "html", null, true);
        echo "\" id=\"letraDown\"> </img> 
                        </i></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Para despublicar este capítulo, debes de cambiar su estado de publicación desde el Perfil de Historia\"> <i class=\"mb-2\">
                            <span class=\"orange-text font-weight-bold\">Borrador</span> ";
        // line 88
        echo "                        </i></a>
                </li>
                
               
              ";
        // line 102
        echo "            </ul>
        </nav>
        </div> 
        <!--Grid column-->

<div class=\"container card mt-1 pb-1\" id=\"container2\">
        <div class=\"row mt-4 \">
                    <div class=\"col-md-12\">
                

                <div class=\"md-form\" >
                            <input type=\"text\" id=\"titulohistoria\" class=\"form-control valI\" name=\"tituloCapitulo\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["tituloCapitulo"]) ? $context["tituloCapitulo"] : $this->getContext($context, "tituloCapitulo")), "html", null, true);
        echo "\">
                            <label for=\"titulohistoria\" class=\"Ltitulohistoria valL cl\" id=\"labelTitC\"><span class=\"font-weight-bold pr-1 idCap\">#1</span>Título del capítulo </label>
                        </div>
                </div>

                      
                </div>
                <div class=\"row mt-3\">

                    <!--Grid column-->
                    <div class=\"col-md-12\">

                        <div class=\"md-form mb-5\">
                            <textarea type=\"text\" id=\"contact-message\" class=\"md-textarea form-control valI\" rows=\"11\"  name=\"contCapitulo\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["contCapitulo"]) ? $context["contCapitulo"] : $this->getContext($context, "contCapitulo")), "html", null, true);
        echo "\"></textarea>
                            <label for=\"contact-message\" class=\"Lcontact-message valL cl\"  id=\"labelContC\">Escriba su historia aquí...</label>

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
        return array (  179 => 126,  163 => 113,  150 => 102,  144 => 88,  136 => 82,  128 => 77,  120 => 72,  112 => 67,  104 => 62,  94 => 55,  90 => 53,  76 => 41,  72 => 39,  69 => 30,  55 => 18,  50 => 16,  44 => 13,  35 => 7,  32 => 6,  29 => 5,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %}*/
/* */
/* */
/* */
/* {% block portada %}*/
/*     <!--Intro Section-->*/
/*    <div  class="streak streak-photo streak-md  portada " style="background-image: url('{{ asset('bundles/dweslibros/img/Fondos/Fondo2.jpg') }}');margin-top: 27px;">*/
/*             <div class="flex-center" style="background-color: rgba(17, 27, 43, 0.7);">*/
/*                 <div class="container my-4 pt-5">*/
/* */
/*                     <!-- Section heading -->*/
/*                     <h3 class="text-center pt-4  white-text font-weight-bold wow fadeIn mb-4" data-wow-delay="0.2s">*/
/*                         <strong>{{tituloLibro}}</strong>*/
/*                              */
/*                     </h3>*/
/*                     <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s"> <span class="mb-5">by @{{autor}}</span>*/
/*                     <br>*/
/*                     <a href="{{ path('dwes_libros_perfilhistoria', {'idLibro' : app.request.get('idLibro')}) }}"  class="btn peach-gradient btn-lg mt-4">Cerrar e ir al perfil de la Historia</a> */
/*                      */
/*                     </h6>*/
/*                     */
/*                 </div>*/
/*             </div>*/
/*         </div> */
/*             */
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block contenido %}*/
/* {# */
/* URL:*/
/* {{ app.request.getRequestUri() }} */
/* {% set path = app.request.pathInfo %}*/
/* {{ path|split('/')|last }}*/
/* Parámetro:*/
/* {{ app.request.get('idLibro') }}*/
/* #}*/
/* */
/* */
/*   <form name="formCapitulo" action="{{ path('dwes_libros_capitulo', {'idLibro' : app.request.get('idLibro')}) }}" method="POST"  target="frame"  > */
/*   <iframe name="frame" style="display: none"></iframe>*/
/* <div class="container-fluid pl-0 pr-0" style="background-color: #f4f5f6;" id="container1">*/
/* */
/*         <!--Grid column-->*/
/*         <div class="col-lg-12 col-md-12 mb-12 pl-0 pr-0">*/
/* <nav class="navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav indigo-text">*/
/*             <!-- SideNav slide-out button -->*/
/*           */
/*             <!-- Breadcrumb-->*/
/*             <div class="">*/
/*                 {# <p><i class="fa fa-book pr-2" aria-hidden="true"></i>Título de la Historia</p> #}*/
/*                 */
/*                 <button type="submit" class="btn purple-gradient btn-sm" id="gcapitulo" >Guardar</button> <span class="green-text font-weight-bold pr-2 small">Grabado</span>*/
/*                 <span class="text-dark small pr-2 cl"> {{fecha}}</span><span class="text-dark  font-weight-bold pr-2 cl" id="carac">| 0</span><span class="text-dark  cl">caráceteres </span>*/
/*                 <span class="text-dark  font-weight-bold pr-2 cl" id="palab">- 0</span><span class="text-dark  pr-2 cl">palabras</span>*/
/*             </div>*/
/*             <ul class="nav navbar-nav nav-flex-icons ml-auto">*/
/*           */
/*                 <li class="nav-item">*/
/*                     <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Pantalla blanca"> <i class="mb-2">*/
/*                             <img src="{{ asset('bundles/dweslibros/img/icons/sun-selec.png') }}" id="blanca" > </img>*/
/*                         </i></a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Pantalla sefia" > <i class="mb-2">*/
/*                             <img src="{{ asset('bundles/dweslibros/img/icons/sunset.png') }}" id="sefia"> </img>*/
/*                         </i></a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Pantalla negra" >  <i class="mb-2">*/
/*                             <img src="{{ asset('bundles/dweslibros/img/icons/moon.png') }}" id="negra"> </img>*/
/*                         </i></a>*/
/*                 </li>*/
/*                  <li class="nav-item">*/
/*                     <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Aumentar letra" > <i class="mb-2">*/
/*                             <img src="{{ asset('bundles/dweslibros/img/icons/font+.png') }}" id="letraUp"> </img> */
/*                         </i></a>*/
/*                 </li>*/
/*                   <li class="nav-item">*/
/*                     <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Desminuir letra" > <i class="mb-2">*/
/*                             <img src="{{ asset('bundles/dweslibros/img/icons/font-.png') }}" id="letraDown"> </img> */
/*                         </i></a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link waves-effect waves-light" data-toggle="tooltip" data-placement="left" title="Para despublicar este capítulo, debes de cambiar su estado de publicación desde el Perfil de Historia"> <i class="mb-2">*/
/*                             <span class="orange-text font-weight-bold">Borrador</span> {# success-text #}*/
/*                         </i></a>*/
/*                 </li>*/
/*                 */
/*                */
/*               {#   <li class="nav-item dropdown">*/
/*                     <a class="nav-link dropdown-toggle waves-effect waves-light indigo-text" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
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
/*         </div> */
/*         <!--Grid column-->*/
/* */
/* <div class="container card mt-1 pb-1" id="container2">*/
/*         <div class="row mt-4 ">*/
/*                     <div class="col-md-12">*/
/*                 */
/* */
/*                 <div class="md-form" >*/
/*                             <input type="text" id="titulohistoria" class="form-control valI" name="tituloCapitulo" value="{{tituloCapitulo}}">*/
/*                             <label for="titulohistoria" class="Ltitulohistoria valL cl" id="labelTitC"><span class="font-weight-bold pr-1 idCap">#1</span>Título del capítulo </label>*/
/*                         </div>*/
/*                 </div>*/
/* */
/*                       */
/*                 </div>*/
/*                 <div class="row mt-3">*/
/* */
/*                     <!--Grid column-->*/
/*                     <div class="col-md-12">*/
/* */
/*                         <div class="md-form mb-5">*/
/*                             <textarea type="text" id="contact-message" class="md-textarea form-control valI" rows="11"  name="contCapitulo" value="{{contCapitulo}}"></textarea>*/
/*                             <label for="contact-message" class="Lcontact-message valL cl"  id="labelContC">Escriba su historia aquí...</label>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/* */
/*     </div>*/
/* */
/* */
/*     <div>*/
/*     */
/*      <form> */
/* {%endblock %}*/
