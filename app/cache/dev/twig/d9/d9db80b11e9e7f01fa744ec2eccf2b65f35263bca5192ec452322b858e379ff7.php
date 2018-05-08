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
                        <strong>Título del libro</strong>
                             
                    </h3>
                    <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\"> <span class=\"mb-5\">by @Usuario</span>
                    <br>
                <button type=\"button\" class=\"btn peach-gradient btn-lg mt-4\">Cerrar e ir al perfil de la Historia</button>
                    
                    </h6>
                    
                </div>
            </div>
        </div> 
            

";
    }

    // line 28
    public function block_contenido($context, array $blocks = array())
    {
        echo " 
 <form name=\"formCapitulo\" action=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_capitulo", array("idLibro" => (isset($context["idLibro"]) ? $context["idLibro"] : $this->getContext($context, "idLibro")))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo " class=\"ml-4\">
<div class=\"container-fluid pl-0 pr-0\" style=\"background-color: #f4f5f6;\" id=\"container1\">

        <!--Grid column-->
        <div class=\"col-lg-12 col-md-12 mb-12 pl-0 pr-0\">
<nav class=\"navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav indigo-text\">
            <!-- SideNav slide-out button -->
          
            <!-- Breadcrumb-->
            <div class=\"\">
                ";
        // line 40
        echo "                <button type=\"submit\" class=\"btn purple-gradient btn-sm\">Guardar</button> <span class=\"green-text font-weight-bold pr-2 small\">Grabado</span>
                <span class=\"text-dark small pr-2 cl\"> 2018-05-04 18:39</span><span class=\"text-dark  font-weight-bold pr-2 cl\" id=\"carac\">| 0</span><span class=\"text-dark  cl\">caráceteres </span>
                <span class=\"text-dark  font-weight-bold pr-2 cl\" id=\"palab\">- 0</span><span class=\"text-dark  pr-2 cl\">palabras</span>
            </div>
            <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">
          
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla blanca\"> <i class=\"mb-2\">
                            <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/sun-selec.png"), "html", null, true);
        echo "\" id=\"blanca\" > </img>
                        </i></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla sefia\" > <i class=\"mb-2\">
                            <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/sunset.png"), "html", null, true);
        echo "\" id=\"sefia\"> </img>
                        </i></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla negra\" >  <i class=\"mb-2\">
                            <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/moon.png"), "html", null, true);
        echo "\" id=\"negra\"> </img>
                        </i></a>
                </li>
                 <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Aumentar letra\" > <i class=\"mb-2\">
                            <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/font+.png"), "html", null, true);
        echo "\" id=\"letraUp\"> </img> 
                        </i></a>
                </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Desminuir letra\" > <i class=\"mb-2\">
                            <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/font-.png"), "html", null, true);
        echo "\" id=\"letraDown\"> </img> 
                        </i></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Para despublicar este capítulo, debes de cambiar su estado de publicación desde el Perfil de Historia\"> <i class=\"mb-2\">
                            <span class=\"orange-text font-weight-bold\">Borrador</span> ";
        // line 74
        echo "                        </i></a>
                </li>
                
               
              ";
        // line 88
        echo "            </ul>
        </nav>
        </div>
        <!--Grid column-->

<div class=\"container card mt-3\" id=\"container2\">
        <div class=\"row mt-4 \">
                    <div class=\"col-md-12\">
                

                <div class=\"md-form\" >
                            <input type=\"text\" id=\"titulohistoria\" class=\"form-control valI\" name=\"titulohistoria\" value=\"tituloCapitulo\">
                            <label for=\"titulohistoria\" class=\"Ltitulohistoria valL cl\"><span class=\"font-weight-bold pr-1 idCap\">#1</span>Título del capítulo </label>
                        </div>
                </div>

                      
                </div>
                <div class=\"row mt-3\">

                    <!--Grid column-->
                    <div class=\"col-md-12\">

                        <div class=\"md-form mb-5\">
                            <textarea type=\"text\" id=\"contact-message\" class=\"md-textarea form-control valI\" rows=\"14\"  name=\"resuHist\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["contCapitulo"]) ? $context["contCapitulo"] : $this->getContext($context, "contCapitulo")), "html", null, true);
        echo "\"></textarea>
                            <label for=\"contact-message\" class=\"Lcontact-message valL cl\">Escriba su historia aquí...</label>

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
        return array (  161 => 112,  135 => 88,  129 => 74,  121 => 68,  113 => 63,  105 => 58,  97 => 53,  89 => 48,  79 => 40,  65 => 29,  60 => 28,  35 => 7,  32 => 6,  29 => 5,  11 => 1,);
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
/*                         <strong>Título del libro</strong>*/
/*                              */
/*                     </h3>*/
/*                     <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s"> <span class="mb-5">by @Usuario</span>*/
/*                     <br>*/
/*                 <button type="button" class="btn peach-gradient btn-lg mt-4">Cerrar e ir al perfil de la Historia</button>*/
/*                     */
/*                     </h6>*/
/*                     */
/*                 </div>*/
/*             </div>*/
/*         </div> */
/*             */
/* */
/* {% endblock %}*/
/* {% block contenido %} */
/*  <form name="formCapitulo" action="{{ path('dwes_libros_capitulo', {'idLibro': idLibro}) }}" method="POST" {# target="frame" #} class="ml-4">*/
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
/*                 <button type="submit" class="btn purple-gradient btn-sm">Guardar</button> <span class="green-text font-weight-bold pr-2 small">Grabado</span>*/
/*                 <span class="text-dark small pr-2 cl"> 2018-05-04 18:39</span><span class="text-dark  font-weight-bold pr-2 cl" id="carac">| 0</span><span class="text-dark  cl">caráceteres </span>*/
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
/*         </div>*/
/*         <!--Grid column-->*/
/* */
/* <div class="container card mt-3" id="container2">*/
/*         <div class="row mt-4 ">*/
/*                     <div class="col-md-12">*/
/*                 */
/* */
/*                 <div class="md-form" >*/
/*                             <input type="text" id="titulohistoria" class="form-control valI" name="titulohistoria" value="tituloCapitulo">*/
/*                             <label for="titulohistoria" class="Ltitulohistoria valL cl"><span class="font-weight-bold pr-1 idCap">#1</span>Título del capítulo </label>*/
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
/*                             <textarea type="text" id="contact-message" class="md-textarea form-control valI" rows="14"  name="resuHist" value="{{contCapitulo}}"></textarea>*/
/*                             <label for="contact-message" class="Lcontact-message valL cl">Escriba su historia aquí...</label>*/
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
/* */
/*     <form>*/
/* {%endblock %}*/
