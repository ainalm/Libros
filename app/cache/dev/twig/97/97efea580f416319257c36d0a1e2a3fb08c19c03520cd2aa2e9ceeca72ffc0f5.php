<?php

/* DWESLibrosBundle:Default:gDrama.html.twig */
class __TwigTemplate_2c0d3cf4b8b90707115a729a98fc053d8db82410ec090eac34bade84187e396c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:gDrama.html.twig", 1);
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
            <h3 class=\"text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                <strong>GENERO</strong>
            </h3>
            <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">Aventura</h6>


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
                <div class=\"row mt-5 pt-3\">
 <!--Sidebar-->
                    <div class=\"col-lg-3 col-md-12 mb-4 ml-4\">

                            <!-- Section: Categories -->
                            <section class=\"section\">

                                <ul class=\"list-group z-depth-1\">
                                 <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                                        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("dwes_libros_publicadosBib");
        echo "\" class=\"dark-grey-text font-small navL\">
                                          Mis libros publicados</a>
                                        <span class=\"badge badge-danger badge-pill\">0</span>
                                    </li>
                                 <li class=\"list-group-item d-flex justify-content-between align-items-center   \">
                                        <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("dwes_libros_listaBib");
        echo "\" class=\"dark-grey-text font-small navL\">
                                            Mi lista de lectura</a>
                                        <span class=\"badge badge-danger badge-pill\">0</span>
                                    </li>
                                     <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                                        <a  href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("dwes_libros_favoritoBib");
        echo "\"class=\"dark-grey-text font-small navL\">
                                          Favoritos</a>
                                        <span class=\"badge badge-danger badge-pill\">0</span>
                                    </li>
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center activeL\">
                                        <a  href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("dwes_libros_deseadoBib");
        echo "\" class=\"dark-grey-text font-small navL\">
                                            Mi lista de deseos</a>
                                        <a href=\"\"></a>
                                        <span class=\"badge badge-danger badge-pill\">0</span>
                                        
                                    </li>
                                   
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                                       <a   href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("dwes_libros_ventaBib");
        echo "\" class=\"dark-grey-text font-small navL\">
                                            Mis libros en venta</a>
                                        <span class=\"badge badge-danger badge-pill\">0</span>
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
        $this->loadTemplate("DWESLibrosBundle:Default:_libros.html.twig", "DWESLibrosBundle:Default:gDrama.html.twig", 82)->display(array_merge($context, array("libros" =>         // line 83
(isset($context["libros"]) ? $context["libros"] : $this->getContext($context, "libros")))));
        // line 85
        echo "                            <!--/Grid row-->
                        <!--Grid row-->
                            
                      

                        </section>
                        <!--Section: Blog v.3-->

                        <!--Pagination dark grey-->
                        <nav class=\"mb-5 pb-2\">
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
                        <!--Pagination dark grey-->

                    </div>
                    <!--Main listing-->

                   

                </div>
                <!--Blog-->

            </div>                
";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:gDrama.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 85,  131 => 83,  130 => 82,  109 => 63,  98 => 55,  90 => 50,  82 => 45,  74 => 40,  55 => 25,  32 => 4,  29 => 3,  11 => 1,);
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
/*             <h3 class="text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <strong>GENERO</strong>*/
/*             </h3>*/
/*             <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">Aventura</h6>*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
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
/*                 <div class="row mt-5 pt-3">*/
/*  <!--Sidebar-->*/
/*                     <div class="col-lg-3 col-md-12 mb-4 ml-4">*/
/* */
/*                             <!-- Section: Categories -->*/
/*                             <section class="section">*/
/* */
/*                                 <ul class="list-group z-depth-1">*/
/*                                  <li class="list-group-item d-flex justify-content-between align-items-center ">*/
/*                                         <a href="{{ path('dwes_libros_publicadosBib') }}" class="dark-grey-text font-small navL">*/
/*                                           Mis libros publicados</a>*/
/*                                         <span class="badge badge-danger badge-pill">0</span>*/
/*                                     </li>*/
/*                                  <li class="list-group-item d-flex justify-content-between align-items-center   ">*/
/*                                         <a href="{{ path('dwes_libros_listaBib') }}" class="dark-grey-text font-small navL">*/
/*                                             Mi lista de lectura</a>*/
/*                                         <span class="badge badge-danger badge-pill">0</span>*/
/*                                     </li>*/
/*                                      <li class="list-group-item d-flex justify-content-between align-items-center ">*/
/*                                         <a  href="{{ path('dwes_libros_favoritoBib') }}"class="dark-grey-text font-small navL">*/
/*                                           Favoritos</a>*/
/*                                         <span class="badge badge-danger badge-pill">0</span>*/
/*                                     </li>*/
/*                                     <li class="list-group-item d-flex justify-content-between align-items-center activeL">*/
/*                                         <a  href="{{ path('dwes_libros_deseadoBib') }}" class="dark-grey-text font-small navL">*/
/*                                             Mi lista de deseos</a>*/
/*                                         <a href=""></a>*/
/*                                         <span class="badge badge-danger badge-pill">0</span>*/
/*                                         */
/*                                     </li>*/
/*                                    */
/*                                     <li class="list-group-item d-flex justify-content-between align-items-center ">*/
/*                                        <a   href="{{ path('dwes_libros_ventaBib') }}" class="dark-grey-text font-small navL">*/
/*                                             Mis libros en venta</a>*/
/*                                         <span class="badge badge-danger badge-pill">0</span>*/
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
/*                         <!--Section: Blog v.3-->*/
/* */
/*                         <!--Pagination dark grey-->*/
/*                         <nav class="mb-5 pb-2">*/
/*                             <ul class="pagination pg-darkgrey flex-center">*/
/*                                 <!--Arrow left-->*/
/*                                 <li class="page-item">*/
/*                                     <a class="page-link waves-effect waves-effect" aria-label="Previous">*/
/*                                         <span aria-hidden="true">«</span>*/
/*                                         <span class="sr-only">Previous</span>*/
/*                                     </a>*/
/*                                 </li>*/
/* */
/*                                 <!--Numbers-->*/
/*                                 <li class="page-item active">*/
/*                                     <a class="page-link waves-effect waves-effect">1</a>*/
/*                                 </li>*/
/*                                 <li class="page-item">*/
/*                                     <a class="page-link waves-effect waves-effect">2</a>*/
/*                                 </li>*/
/*                                 <li class="page-item">*/
/*                                     <a class="page-link waves-effect waves-effect">3</a>*/
/*                                 </li>*/
/*                                 <li class="page-item">*/
/*                                     <a class="page-link waves-effect waves-effect">4</a>*/
/*                                 </li>*/
/*                                 <li class="page-item">*/
/*                                     <a class="page-link waves-effect waves-effect">5</a>*/
/*                                 </li>*/
/* */
/*                                 <!--Arrow right-->*/
/*                                 <li class="page-item">*/
/*                                     <a class="page-link waves-effect waves-effect" aria-label="Next">*/
/*                                         <span aria-hidden="true">»</span>*/
/*                                         <span class="sr-only">Next</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </nav>*/
/*                         <!--Pagination dark grey-->*/
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
