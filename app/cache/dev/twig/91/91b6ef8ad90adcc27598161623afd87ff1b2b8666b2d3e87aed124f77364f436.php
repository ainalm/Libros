<?php

/* DWESLibrosBundle:Default:publicadosBib.html.twig */
class __TwigTemplate_ccd1424d40e73ecf71fb81807dc2e9cf62d1e417675660188d3ab73fddda88df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:publicadosBib.html.twig", 1);
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
<div class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Fondos/Fondo3.jpg"), "html", null, true);
        echo "'); margin-top: 27px;\">
    <div class=\"flex-center  \" style=\"       background-color: rgba(17, 27, 43, 0.7);\">
        <div class=\"container my-5 pt-5\">

            <!-- Section heading -->
            <h6 class=\"white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                <strong>BIBLIOTECA</strong>
            </h6>
            <h1 class=\"text-center white-text pb-4  wow fadeIn \" data-wow-delay=\"0.2s\">Mis libros publicados</h1>

 
        </div> 
    </div>
</div> 



";
    }

    // line 25
    public function block_contenido($context, array $blocks = array())
    {
        echo " 


  <div class=\"container-fluid\">

                <!--Blog-->
                <div class=\"row mt-4\">
 <!--Sidebar-->
                    <div class=\"col-lg-3 col-md-12 mb-4 ml-4\">

                            <!-- Section: Categories -->
                            <section class=\"section\">

                                <ul class=\"list-group z-depth-1\">
                                 <li class=\"list-group-item d-flex justify-content-between align-items-center activeL\">
                                        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("dwes_libros_publicadosBib");
        echo "\" class=\"dark-grey-text font-small navL\">
                                          Mis libros publicados</a>
                                        <span class=\"badge badge-danger badge-pill\">";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["clibrosPub"]) ? $context["clibrosPub"] : null), "html", null, true);
        echo "</span>
                                    </li>
                                 <li class=\"list-group-item d-flex justify-content-between align-items-center   \">
                                        <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("dwes_libros_listaBib");
        echo "\" class=\"dark-grey-text font-small navL\">
                                            Mi lista de lectura</a>
                                        <span class=\"badge badge-danger badge-pill\">";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["clibrosLis"]) ? $context["clibrosLis"] : null), "html", null, true);
        echo "</span>
                                    </li>
                                     <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                                        <a  href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("dwes_libros_favoritoBib");
        echo "\"class=\"dark-grey-text font-small navL\">
                                          Favoritos</a>
                                        <span class=\"badge badge-danger badge-pill\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["clibrosFav"]) ? $context["clibrosFav"] : null), "html", null, true);
        echo "</span>
                                    </li>
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                                        <a  href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("dwes_libros_deseadoBib");
        echo "\" class=\"dark-grey-text font-small navL\">
                                            Mi lista de deseos</a>
                                        <a href=\"\"></a>
                                        <span class=\"badge badge-danger badge-pill\">";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["cDeseo"]) ? $context["cDeseo"] : null), "html", null, true);
        echo "</span>
                                        
                                    </li>
                                   
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                                       <a   href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("dwes_libros_ventaBib");
        echo "\" class=\"dark-grey-text font-small navL\">
                                            Mis libros en venta</a>
                                        <span class=\"badge badge-danger badge-pill\">";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["cVenta"]) ? $context["cVenta"] : null), "html", null, true);
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
        // line 82
        $this->loadTemplate("DWESLibrosBundle:Default:_librosEdit.html.twig", "DWESLibrosBundle:Default:publicadosBib.html.twig", 82)->display(array_merge($context, array("libros" =>         // line 83
(isset($context["libros"]) ? $context["libros"] : null))));
        // line 85
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
        return "DWESLibrosBundle:Default:publicadosBib.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 85,  149 => 83,  148 => 82,  129 => 65,  124 => 63,  116 => 58,  110 => 55,  104 => 52,  99 => 50,  93 => 47,  88 => 45,  82 => 42,  77 => 40,  58 => 25,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %}*/
/* */
/*  {% block portada %}*/
/* <!--Intro Section--> */
/* <!--Intro Section-->*/
/* <div class="streak streak-photo streak-md  portada " style="background-image: url('{{ asset('bundles/dweslibros/img/Fondos/Fondo3.jpg') }}'); margin-top: 27px;">*/
/*     <div class="flex-center  " style="       background-color: rgba(17, 27, 43, 0.7);">*/
/*         <div class="container my-5 pt-5">*/
/* */
/*             <!-- Section heading -->*/
/*             <h6 class="white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <strong>BIBLIOTECA</strong>*/
/*             </h6>*/
/*             <h1 class="text-center white-text pb-4  wow fadeIn " data-wow-delay="0.2s">Mis libros publicados</h1>*/
/* */
/*  */
/*         </div> */
/*     </div>*/
/* </div> */
/* */
/* */
/* */
/* {% endblock %} */
/* */
/* {% block contenido %} */
/* */
/* */
/*   <div class="container-fluid">*/
/* */
/*                 <!--Blog-->*/
/*                 <div class="row mt-4">*/
/*  <!--Sidebar-->*/
/*                     <div class="col-lg-3 col-md-12 mb-4 ml-4">*/
/* */
/*                             <!-- Section: Categories -->*/
/*                             <section class="section">*/
/* */
/*                                 <ul class="list-group z-depth-1">*/
/*                                  <li class="list-group-item d-flex justify-content-between align-items-center activeL">*/
/*                                         <a href="{{ path('dwes_libros_publicadosBib') }}" class="dark-grey-text font-small navL">*/
/*                                           Mis libros publicados</a>*/
/*                                         <span class="badge badge-danger badge-pill">{{clibrosPub}}</span>*/
/*                                     </li>*/
/*                                  <li class="list-group-item d-flex justify-content-between align-items-center   ">*/
/*                                         <a href="{{ path('dwes_libros_listaBib') }}" class="dark-grey-text font-small navL">*/
/*                                             Mi lista de lectura</a>*/
/*                                         <span class="badge badge-danger badge-pill">{{clibrosLis}}</span>*/
/*                                     </li>*/
/*                                      <li class="list-group-item d-flex justify-content-between align-items-center ">*/
/*                                         <a  href="{{ path('dwes_libros_favoritoBib') }}"class="dark-grey-text font-small navL">*/
/*                                           Favoritos</a>*/
/*                                         <span class="badge badge-danger badge-pill">{{clibrosFav}}</span>*/
/*                                     </li>*/
/*                                     <li class="list-group-item d-flex justify-content-between align-items-center ">*/
/*                                         <a  href="{{ path('dwes_libros_deseadoBib') }}" class="dark-grey-text font-small navL">*/
/*                                             Mi lista de deseos</a>*/
/*                                         <a href=""></a>*/
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
/*                             include 'DWESLibrosBundle:Default:_librosEdit.html.twig' */
/*                             with {'libros': libros}*/
/*                             %}*/
/*                             <!--/Grid row-->*/
/*                         <!--Grid row-->*/
/*                             */
/*                       */
/* */
/*                         </section>*/
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
