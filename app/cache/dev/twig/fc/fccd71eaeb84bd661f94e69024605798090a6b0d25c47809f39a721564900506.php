<?php

/* DWESLibrosBundle:Default:moderar.html.twig */
class __TwigTemplate_f60b5dae39e8413073f0452ca2f2bd35ffe4451124ba075df221d361b514feb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:moderar.html.twig", 1);
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
<!--Intro Section-->
<div class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Fondos/Fondo3.jpg"), "html", null, true);
        echo "'); margin-top: 27px;\">
    <div class=\"flex-center  \" style=\"       background-color: rgba(17, 27, 43, 0.7);\">
        <div class=\"container my-5 pt-5\">
            <!-- Section heading -->
               
                
                ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " 
                  <h6 class=\"white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                <strong>MODERAR</strong> 
            </h6>
                    <h1 class=\"text-center white-text pb-4  wow fadeIn\" data-wow-delay=\"0.2s\">
              LIBROS BAJO AVISO 
            </h1>
                    ";
        } else {
            // line 18
            echo "                 <h6 class=\"white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                <strong>AVISOS</strong> 
            </h6>
                   <h1 class=\"text-center white-text pb-4  wow fadeIn\" data-wow-delay=\"0.2s\">
             REVISE LAS SIGUIENTES PUBLICACIONES
            </h1>
            <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">Nos veremos obligados a retirarlas si no las rectifica respetando nuestras
             <a target=\"_blank\" href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("dwes_libros_normas");
            echo "\"> pautas. </a> 
            </h6>
                ";
        }
        // line 28
        echo "                 
            
          
           

              

        </div>
    </div>
</div> 
";
    }

    // line 40
    public function block_contenido($context, array $blocks = array())
    {
        echo " 

";
        // line 47
        echo "  <div class=\"container-fluid\">

                <!--Blog-->
                <div class=\"row mt-4\">
 <!--Sidebar-->
                    <div class=\"col-lg-3 col-md-12 mb-4 ml-4\">

                            <!-- Section: Categories -->
                            <section class=\"section\">

                                <ul class=\"list-group z-depth-1\">
                    <li class=\"list-group-item d-flex justify-content-between align-items-center \">
                        <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("dwes_libros_genero", array("idGenero" => 1));
        echo "\" class=\"dark-grey-text font-small navL\">
                                 
                            Libros en aviso </a>
                        <span class=\"badge badge-danger badge-pill\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["cLibrosAvisados"]) ? $context["cLibrosAvisados"] : $this->getContext($context, "cLibrosAvisados")), "html", null, true);
        echo "</span>
                    </li>    
                </ul>
                            </section>
                            <!-- Section: Categories FIXME: -->
 
                        </div>
                    <!--Sidebar-->
                    <!--Main listing-->
                    <div class=\"col-lg-8 col-12 mt-1 mx-lg-4\">

                        <!--Section: Blog v.3-->
                        <section class=\"section extra-margins pb-3 text-center text-lg-left\">
                            <!--Grid row-->
                            <div class=\"row text-center\">
                            ";
        // line 78
        $this->loadTemplate("DWESLibrosBundle:Default:_libros.html.twig", "DWESLibrosBundle:Default:moderar.html.twig", 78)->display(array_merge($context, array("libros" =>         // line 79
(isset($context["libros"]) ? $context["libros"] : $this->getContext($context, "libros")))));
        // line 81
        echo "                            <!--/Grid row-->
                        <!--Grid row-->
                            
                      

                        </section>
                        <!--Section: Blog v.3-->

                    </div>
                    <!--Main listing-->

                   

                </div>
                <!--Blog-->

            </div>                
";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:moderar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 81,  129 => 79,  128 => 78,  110 => 62,  104 => 59,  90 => 47,  84 => 40,  70 => 28,  64 => 25,  55 => 18,  44 => 10,  35 => 4,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %} {% block portada %}*/
/* <!--Intro Section-->*/
/* <!--Intro Section-->*/
/* <div class="streak streak-photo streak-md  portada " style="background-image: url('{{ asset('bundles/dweslibros/img/Fondos/Fondo3.jpg') }}'); margin-top: 27px;">*/
/*     <div class="flex-center  " style="       background-color: rgba(17, 27, 43, 0.7);">*/
/*         <div class="container my-5 pt-5">*/
/*             <!-- Section heading -->*/
/*                */
/*                 */
/*                 {% if  is_granted('ROLE_ADMIN') %} */
/*                   <h6 class="white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <strong>MODERAR</strong> */
/*             </h6>*/
/*                     <h1 class="text-center white-text pb-4  wow fadeIn" data-wow-delay="0.2s">*/
/*               LIBROS BAJO AVISO */
/*             </h1>*/
/*                     {% else %}*/
/*                  <h6 class="white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <strong>AVISOS</strong> */
/*             </h6>*/
/*                    <h1 class="text-center white-text pb-4  wow fadeIn" data-wow-delay="0.2s">*/
/*              REVISE LAS SIGUIENTES PUBLICACIONES*/
/*             </h1>*/
/*             <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">Nos veremos obligados a retirarlas si no las rectifica respetando nuestras*/
/*              <a target="_blank" href="{{path('dwes_libros_normas')}}"> pautas. </a> */
/*             </h6>*/
/*                 {% endif  %}*/
/*                  */
/*             */
/*           */
/*            */
/* */
/*               */
/* */
/*         </div>*/
/*     </div>*/
/* </div> */
/* {% endblock %}*/
/* */
/* {% block contenido %} */
/* */
/* {#  <ol class="breadcrumb blue-grey lighten-4">*/
/*                         <li class="breadcrumb-item"><a class="black-text" href="#">Home</a><i class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>*/
/*                         <li class="breadcrumb-item"><a class="black-text" href="#">Library</a><i class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>*/
/*                         <li class="breadcrumb-item active">Data</li>*/
/*                     </ol> #}*/
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
/*                     <li class="list-group-item d-flex justify-content-between align-items-center ">*/
/*                         <a href="{{ path('dwes_libros_genero', {'idGenero':1}) }}" class="dark-grey-text font-small navL">*/
/*                                  */
/*                             Libros en aviso </a>*/
/*                         <span class="badge badge-danger badge-pill">{{cLibrosAvisados}}</span>*/
/*                     </li>    */
/*                 </ul>*/
/*                             </section>*/
/*                             <!-- Section: Categories FIXME: -->*/
/*  */
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
