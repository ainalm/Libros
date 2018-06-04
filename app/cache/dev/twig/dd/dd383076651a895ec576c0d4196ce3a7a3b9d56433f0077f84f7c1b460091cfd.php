<?php

/* DWESLibrosBundle:Default:listaBib.html.twig */
class __TwigTemplate_daf6482cc1fb036ece61bf26f1b6184a58fb01a01681efa2d73f0c9450bf0232 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:listaBib.html.twig", 1);
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
        echo "<!--Intro Section-->
<!--Intro Section-->
<div class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg'); margin-top: 27px;\">
    <div class=\"flex-center  \" style=\"       background-color: rgba(17, 27, 43, 0.7);\">
        <div class=\"container my-5 pt-5\">

            <!-- Section heading -->
            <h6 class=\"white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                <strong>BIBLIOTECA</strong>
            </h6>
            <h1 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">Mi listado de libros</h1>


        </div>
    </div>
</div>
";
    }

    // line 22
    public function block_contenido($context, array $blocks = array())
    {
        echo " 


  <div class=\"container-fluid\">

                <!--Blog-->
                <div class=\"row mt-5 pt-3\">
 <!--Sidebar-->
                    <div class=\"col-lg-3 col-md-12 mb-4 ml-4\">

                            <!-- Section: Categories --> 
                            <section class=\"section\">

                                <ul class=\"list-group z-depth-1\">
                                 <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                                        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("dwes_libros_publicadosBib");
        echo "\" class=\"dark-grey-text font-small navL\">
                                          Mis libros publicados</a>
                                        <span class=\"badge badge-danger badge-pill\">";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["clibrosPub"]) ? $context["clibrosPub"] : $this->getContext($context, "clibrosPub")), "html", null, true);
        echo "</span>
                                    </li>
                                 <li class=\"list-group-item d-flex justify-content-between align-items-center  activeL \">
                                        <a class=\"dark-grey-text font-small navL\">
                                            Mi lista de lectura</a>
                                        <span class=\"badge badge-danger badge-pill\">";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["clibrosLis"]) ? $context["clibrosLis"] : $this->getContext($context, "clibrosLis")), "html", null, true);
        echo "</span>
                                    </li>
                                     <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                                        <a  href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("dwes_libros_favoritoBib");
        echo "\" class=\"dark-grey-text font-small navL\">
                                          Favoritos</a>
                                        <span class=\"badge badge-danger badge-pill\">";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["clibrosFav"]) ? $context["clibrosFav"] : $this->getContext($context, "clibrosFav")), "html", null, true);
        echo "</span>
                                    </li>
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                                        <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("dwes_libros_deseadoBib");
        echo "\" class=\"dark-grey-text font-small navL\">
                                            Mi lista de deseos</a>
                                     
                                        <span class=\"badge badge-danger badge-pill\">";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["cDeseo"]) ? $context["cDeseo"] : $this->getContext($context, "cDeseo")), "html", null, true);
        echo "</span>
                                        
                                    </li>
                                   
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                                       <a   href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("dwes_libros_ventaBib");
        echo "\" class=\"dark-grey-text font-small navL\">
                                            Mis libros en venta</a>
                                        <span class=\"badge badge-danger badge-pill\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["cVenta"]) ? $context["cVenta"] : $this->getContext($context, "cVenta")), "html", null, true);
        echo "</span>
                                    </li>

                                </ul>
                            </section>
                            <!-- Section: Categories -->

                        </div>
                    <!--Sidebar-->
                    <!--Main listing-->
                    <div class=\"col-lg-8 col-12 mt-1 mx-lg-4\">

                        <!--Section: Blog v.3-->
                        <section class=\"section extra-margins pb-3 text-center text-lg-left\">
                            <!--Grid row-->
                            <div class=\"row text-center\">
                            ";
        // line 79
        $this->loadTemplate("DWESLibrosBundle:Default:_libros.html.twig", "DWESLibrosBundle:Default:listaBib.html.twig", 79)->display(array_merge($context, array("libros" =>         // line 80
(isset($context["libros"]) ? $context["libros"] : $this->getContext($context, "libros")))));
        // line 82
        echo "                            <!--/Grid row-->
                        <!--Grid row-->
                            
                      

                        </section>
                       

                    </div>
                    <!--Main listing-->

                   

                </div>
                <!--Blog-->

            </div>                
";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:listaBib.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 82,  140 => 80,  139 => 79,  120 => 62,  115 => 60,  107 => 55,  101 => 52,  95 => 49,  90 => 47,  84 => 44,  76 => 39,  71 => 37,  52 => 22,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %}*/
/* */
/*  {% block portada %}*/
/* <!--Intro Section-->*/
/* <!--Intro Section-->*/
/* <div class="streak streak-photo streak-md  portada " style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg'); margin-top: 27px;">*/
/*     <div class="flex-center  " style="       background-color: rgba(17, 27, 43, 0.7);">*/
/*         <div class="container my-5 pt-5">*/
/* */
/*             <!-- Section heading -->*/
/*             <h6 class="white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <strong>BIBLIOTECA</strong>*/
/*             </h6>*/
/*             <h1 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">Mi listado de libros</h1>*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %} */
/* */
/* {% block contenido %} */
/* */
/* */
/*   <div class="container-fluid">*/
/* */
/*                 <!--Blog-->*/
/*                 <div class="row mt-5 pt-3">*/
/*  <!--Sidebar-->*/
/*                     <div class="col-lg-3 col-md-12 mb-4 ml-4">*/
/* */
/*                             <!-- Section: Categories --> */
/*                             <section class="section">*/
/* */
/*                                 <ul class="list-group z-depth-1">*/
/*                                  <li class="list-group-item d-flex justify-content-between align-items-center ">*/
/*                                         <a href="{{ path('dwes_libros_publicadosBib') }}" class="dark-grey-text font-small navL">*/
/*                                           Mis libros publicados</a>*/
/*                                         <span class="badge badge-danger badge-pill">{{clibrosPub}}</span>*/
/*                                     </li>*/
/*                                  <li class="list-group-item d-flex justify-content-between align-items-center  activeL ">*/
/*                                         <a class="dark-grey-text font-small navL">*/
/*                                             Mi lista de lectura</a>*/
/*                                         <span class="badge badge-danger badge-pill">{{clibrosLis}}</span>*/
/*                                     </li>*/
/*                                      <li class="list-group-item d-flex justify-content-between align-items-center ">*/
/*                                         <a  href="{{ path('dwes_libros_favoritoBib') }}" class="dark-grey-text font-small navL">*/
/*                                           Favoritos</a>*/
/*                                         <span class="badge badge-danger badge-pill">{{clibrosFav}}</span>*/
/*                                     </li>*/
/*                                     <li class="list-group-item d-flex justify-content-between align-items-center ">*/
/*                                         <a href="{{ path('dwes_libros_deseadoBib') }}" class="dark-grey-text font-small navL">*/
/*                                             Mi lista de deseos</a>*/
/*                                      */
/*                                         <span class="badge badge-danger badge-pill">{{cDeseo}}</span>*/
/*                                         */
/*                                     </li>*/
/*                                    */
/*                                     <li class="list-group-item d-flex justify-content-between align-items-center ">*/
/*                                        <a   href="{{ path('dwes_libros_ventaBib') }}" class="dark-grey-text font-small navL">*/
/*                                             Mis libros en venta</a>*/
/*                                         <span class="badge badge-danger badge-pill">{{cVenta}}</span>*/
/*                                     </li>*/
/* */
/*                                 </ul>*/
/*                             </section>*/
/*                             <!-- Section: Categories -->*/
/* */
/*                         </div>*/
/*                     <!--Sidebar-->*/
/*                     <!--Main listing-->*/
/*                     <div class="col-lg-8 col-12 mt-1 mx-lg-4">*/
/* */
/*                         <!--Section: Blog v.3-->*/
/*                         <section class="section extra-margins pb-3 text-center text-lg-left">*/
/*                             <!--Grid row-->*/
/*                             <div class="row text-center">*/
/*                             {%*/
/*                             include 'DWESLibrosBundle:Default:_libros.html.twig' */
/*                             with {'libros': libros}*/
/*                             %}*/
/*                             <!--/Grid row-->*/
/*                         <!--Grid row-->*/
/*                             */
/*                       */
/* */
/*                         </section>*/
/*                        */
/* */
/*                     </div>*/
/*                     <!--Main listing-->*/
/* */
/*                    */
/* */
/*                 </div>*/
/*                 <!--Blog-->*/
/* */
/*             </div>                */
/* {% endblock %}*/
/* */
