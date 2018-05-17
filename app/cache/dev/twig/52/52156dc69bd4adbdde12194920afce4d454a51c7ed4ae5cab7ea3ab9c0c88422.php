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

    // line 3
    public function block_portada($context, array $blocks = array())
    {
        // line 4
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo " <!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Book Trailer : ";
            // line 10
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
                <button type=\"button\" class=\"btn btn-secondary cldose\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>
<!--Intro Section-->
<!--Intro Section-->
<div class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg'); margin-top: 27px;\">
    <div class=\"flex-center  \" style=\"       background-color: rgba(17, 27, 43, 0.7);\">
        <div class=\"container my-5 pt-5\">

           ";
            // line 35
            echo "<div class=\"row\">

                        <!--Grid column-->
                        <div class=\"col-lg-3 col-md-12 mb-4\">

                            <!-- Section: Categories -->
                            <section class=\"section\">

                                 <div class=\"view overlay \">
                                        <img src=\"data:image/jpeg;base64,";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "html", null, true);
            echo "\" style=\"height:270px ; width:180px;\" class=\" mx-auto\" alt=\"sample image\">
 
                                        <a >
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
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
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo "</span>
                                            </a>
                                            <h2 class=\"card-title font-weight-bold pt-2\">
                                                <strong>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
            echo "</strong>
                                            </h2>
                                            <p style=\"min-height: 120px;\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descLib", array()), "html", null, true);
            echo " </p>
                                             <!-- Button  modal -->
                                            <button type=\"button\" class=\"btn btn-danger btn-sm btn-rounded clearfix d-none d-md-inline-block waves-effect waves-light video videoff\"data-video=\"https://www.youtube.com/embed/8uYspagia_s?rel=0&showinfo=0\" data-toggle=\"modal\" data-target=\"#exampleModal\">
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
    }

    // line 93
    public function block_contenido($context, array $blocks = array())
    {
        // line 94
        echo "

<div class=\"container-fluid pl-0 pr-0\" style=\"background-color: #f4f5f6;\" id=\"container1\">

        <!--Grid column-->
        <div class=\"col-lg-12 col-md-12 mb-12 pl-0 pr-0\">
<nav class=\"navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav indigo-text\">
            <!-- SideNav slide-out button -->
          
            <!-- Breadcrumb-->
            <div class=\"\">
                ";
        // line 106
        echo "                
                <button type=\"submit\" class=\"btn purple-gradient btn-sm gcapitulo\" >Guardar</button> <span class=\"green-text font-weight-bold pr-2 small\">En progreso</span>
                <span class=\"text-dark small pr-2 cl\"> </span><span class=\"text-dark  font-weight-bold pr-2 cl\" id=\"carac\">| 0</span><span class=\"text-dark  cl\">caráceteres </span>
                <span class=\"text-dark  font-weight-bold pr-2 cl\" id=\"palab\">- 0</span><span class=\"text-dark  pr-2 cl\">palabras</span>
            </div>
            <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">
          
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla blanca\"> <i class=\"mb-2\">
                            <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/sun-selec.png"), "html", null, true);
        echo "\" id=\"blanca\" > </img>
                        </i></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla sefia\" > <i class=\"mb-2\">
                            <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/sunset.png"), "html", null, true);
        echo "\" id=\"sefia\"> </img>
                        </i></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pantalla negra\" >  <i class=\"mb-2\">
                            <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/moon.png"), "html", null, true);
        echo "\" id=\"negra\"> </img>
                        </i></a>
                </li>
                 <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Aumentar letra\" > <i class=\"mb-2\">
                            <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/font+.png"), "html", null, true);
        echo "\" id=\"letraUp\"> </img> 
                        </i></a>
                </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Desminuir letra\" > <i class=\"mb-2\">
                            <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/icons/font-.png"), "html", null, true);
        echo "\" id=\"letraDown\"> </img> 
                        </i></a>
                </li>
              ";
        // line 148
        echo "            </ul>
        </nav>
        </div> 
        <!--Grid column-->

<div class=\"container card mt-1 pb-1\" id=\"container2\">
        


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
        return array (  206 => 148,  200 => 135,  192 => 130,  184 => 125,  176 => 120,  168 => 115,  157 => 106,  144 => 94,  141 => 93,  115 => 72,  110 => 70,  104 => 67,  78 => 44,  67 => 35,  44 => 10,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %}*/
/* */
/*  {% block portada %}*/
/*  {% for item in libro %}*/
/*  <!-- Modal -->*/
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
/*                 <button type="button" class="btn btn-secondary cldose" data-dismiss="modal">Close</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!--Intro Section-->*/
/* <!--Intro Section-->*/
/* <div class="streak streak-photo streak-md  portada " style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg'); margin-top: 27px;">*/
/*     <div class="flex-center  " style="       background-color: rgba(17, 27, 43, 0.7);">*/
/*         <div class="container my-5 pt-5">*/
/* */
/*            {#  <!-- Section heading -->*/
/*             <h3 class="text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <strong>Biblioteca</strong>*/
/*             </h3>*/
/*             <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">Mis libros publicados</h6> #}*/
/* <div class="row">*/
/* */
/*                         <!--Grid column-->*/
/*                         <div class="col-lg-3 col-md-12 mb-4">*/
/* */
/*                             <!-- Section: Categories -->*/
/*                             <section class="section">*/
/* */
/*                                  <div class="view overlay ">*/
/*                                         <img src="data:image/jpeg;base64,{{foto}}" style="height:270px ; width:180px;" class=" mx-auto" alt="sample image">*/
/*  */
/*                                         <a >*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                             </section>*/
/*                             <!-- Section: Categories -->*/
/* */
/*                         </div>*/
/*                         <!--Grid column-->*/
/* */
/*                         <!--Grid column-->*/
/*                         <div class="col-lg-8 col-md-12 pb-lg-5 mb-4">*/
/*                            <div class="mask rgba-white-light">*/
/*                                     <div class="dark-grey-text  pt-4 ml-3 pl-3">*/
/*                                         <div>*/
/*                                         */
/* */
/* */
/* */
/*                                 */
/*                                             <a>*/
/*                                                 <span class="badge badge-danger">{{item.nombre}}</span>*/
/*                                             </a>*/
/*                                             <h2 class="card-title font-weight-bold pt-2">*/
/*                                                 <strong>{{item.titulo}}</strong>*/
/*                                             </h2>*/
/*                                             <p style="min-height: 120px;">{{item.descLib}} </p>*/
/*                                              <!-- Button  modal -->*/
/*                                             <button type="button" class="btn btn-danger btn-sm btn-rounded clearfix d-none d-md-inline-block waves-effect waves-light video videoff"data-video="https://www.youtube.com/embed/8uYspagia_s?rel=0&showinfo=0" data-toggle="modal" data-target="#exampleModal">*/
/*                                             <i class="fab fa-youtube mr-1"></i> Book Trailer*/
/*                                             </button>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                         </div>*/
/*                         <!--Grid column-->*/
/* */
/*                     </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* {% endfor %}*/
/* {% endblock %} */
/* */
/* */
/* {% block contenido %}*/
/* */
/* */
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
/*                 <button type="submit" class="btn purple-gradient btn-sm gcapitulo" >Guardar</button> <span class="green-text font-weight-bold pr-2 small">En progreso</span>*/
/*                 <span class="text-dark small pr-2 cl"> </span><span class="text-dark  font-weight-bold pr-2 cl" id="carac">| 0</span><span class="text-dark  cl">caráceteres </span>*/
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
/*         */
/* */
/* */
/*     </div>*/
/* */
/* */
/*     */
/* {%endblock %}*/
/* */
