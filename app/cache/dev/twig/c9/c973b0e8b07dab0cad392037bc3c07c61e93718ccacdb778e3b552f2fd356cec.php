<?php

/* DWESLibrosBundle:Default:index.html.twig */
class __TwigTemplate_4aac737eaf20dda108532bf6ca25892f6da78ea781784ac3af23e249c68802d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'portadaInicio' => array($this, 'block_portadaInicio'),
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

    // line 4
    public function block_portadaInicio($context, array $blocks = array())
    {
        // line 5
        echo "    <!--Intro Section-->
<header>
      <section class=\"view intro-3\">
            <div class=\"full-bg-img flex-center\">
                <div class=\"container\">
                    <div class=\"row flex-center\">
                        <div class=\"col-md-10 col-lg-4 text-center text-md-left margins\">
                            <div class=\"white-text\">
                                <h1 class=\"h1-responsive intro-title font-weight-bold mt-sm-5 mt-0 mb-4 wow fadeInLeft\" data-wow-delay=\"0.3s\">Tu historia comienza aquí</h1>

                                <h6 class=\"wow fadeInLeft\" data-wow-delay=\"0.3s\">Una plataforma para lectores y escritores, donde puedes descubrir, escribir y publicar historias creativas, novelas y libros
                                </h6>
                                <br>
                                <a class=\"btn btn-white btn-rounded orange-text font-weight-bold ml-lg-0 wow fadeInLeft\" data-wow-delay=\"0.4s\">
                                    Explora</a>
                                <a class=\"btn btn-outline-white btn-rounded font-weight-bold wow fadeInLeft\" data-wow-delay=\"0.4s\">Crea una historia</a>
                            </div>
                        </div>

                        <div class=\"col-md-6 col-lg-8clearfix d-none d-md-block wow fadeInRight justify-content-center\" data-wow-delay=\"0.3s\">
                            <img src=\"https://mdbootstrap.com/img/Others/cards32.png\" alt=\"\" class=\"img-fluid\">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
";
    }

    // line 34
    public function block_contenido($context, array $blocks = array())
    {
        // line 35
        echo "<div class=\"container\">
        <section id=\"features\" class=\"section feature-box mb-5 pb-4 mt-0\">

                <!-- Section heading -->
                <h2 class=\"text-center title  pt-5 pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;\">
                    <strong>Cómo funciona</strong>
                </h2>

                <!-- Section sescription -->
                <p class=\"section-description pb-4 wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;\">
                  La misión de Booky es descubrir escritores talentosos y convertirlos en autores exitosos a nivel mundial.</p>

                <!--Grid row-->
                <div class=\"row features wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;\">

                    <!--Grid column-->
                    <div class=\"col-lg-4 text-center\">
                        <div class=\"icon-area\">
                      
                            <div class=\"circle-icon\">
                             
                                <img src=\"https://static.inkitt.com/assets/images/frontpage/writee83f00b9.png\">
                            </div>
                            <br>
                            <h5 class=\"dark-grey-text font-weight-bold mt-2\">Escribe</h5>
                            <div class=\"mt-1\">
                                <p class=\"mx-3 grey-text\">Disfruta de una de las mejores experiencias para escribir en línea .
                              
                                No olvides seguir nuestras <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("dwes_libros_normas");
        echo "\">pautas</a>.</p>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class=\"col-lg-4 text-center\">
                        <div class=\"icon-area\">
                            <div class=\"circle-icon\">
                               <img src=\"https://static.inkitt.com/assets/images/frontpage/explorea0334c35.png\">
                            </div>
                            <br>
                            <h5 class=\"dark-grey-text font-weight-bold mt-2\">Explora</h5>
                            <div class=\"mt-1\">
                                <p class=\"mx-3 grey-text\">Descubre miles de historias forma gratuita, deja tu opinión y pásala bien.</p>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class=\"col-lg-4 text-center mb-4\">
                        <div class=\"icon-area\">
                            <div class=\"circle-icon\">
                               <img src=\"https://static.inkitt.com/assets/images/frontpage/publish9c15ef5f.png\">
                            </div>
                            <br>
                            <h5 class=\"dark-grey-text font-weight-bold mt-2\">Publica</h5>
                            <div class=\"mt-1\">
                                <p class=\"mx-3 grey-text\"> Escribe y publica tus historias más rápido,haciéndolo por capítulos.
                                Y se ya tienes un libro en venta, lo puedes anunciar aquí para que llege a más lectores.</p>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>

            
               
        
</div>
<div>
<div class=\"container\">
<hr>
</div>
<div class=\"container-fluid\">
            <div class=\"container \">

                <!--Section: Services-->
                <section class=\"section \">

                    <!-- Section heading -->
            <h1 class=\"text-center title  pt-5 pb-4  wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;\">
                    ¡ Descubre miles de historias gratis !
                </h1>  

    <div class=\"container text-center\">
    <div class=\"row\">
      <div class=\"col-xs-6 \">
        <div class=\"row\">
          <div class=\"col-xs-2 pl-3 pr-3 \"> <figure class=\"snip1361 hover\"><img class=\"img-responsive text-center\" src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample77.jpg\" alt=\"sample77\" />
            <figcaption class=\"text-center\">
            <h3>Fantasía</h3>
            
            </figcaption>
            <a href=\"#\"></a>
            </figure></div>
          <div class=\"col-xs-2 pl-3 pr-3\"> <figure class=\"snip1361 hover\"><img class=\"img-responsive text-center\" src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample77.jpg\" alt=\"sample77\" />
            <figcaption class=\"text-center\">
            <h3>Aventura</h3>
            
            </figcaption>
            <a href=\"#\"></a>
            </figure></div>
          <div class=\"col-xs-2 pl-3 pr-3\"> <figure class=\"snip1361 hover\"><img class=\"img-responsive text-center\" src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample77.jpg\" alt=\"sample77\" />
            <figcaption class=\"text-center\">
            <h3>Misterio</h3>
            
            </figcaption>
            <a href=\"#\"></a>
            </figure></div>
          <div class=\"col-xs-2 pl-3 pr-3\"> <figure class=\"snip1361 hover\"><img class=\"img-responsive text-center\" src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample77.jpg\" alt=\"sample77\" />
            <figcaption class=\"text-center\">
            <h3>Horror</h3>
            
            </figcaption>
            <a href=\"#\"></a>
            </figure></div>
          <div class=\"col-xs-2 pl-3 pr-3\"> <figure class=\"snip1361 hover\"><img class=\"img-responsive text-center\" src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample77.jpg\" alt=\"sample77\" />
            <figcaption class=\"text-center\">
            <h3>Poesía</h3>
            
            </figcaption>
            <a href=\"#\"></a>
            </figure></div>
          <div class=\"col-xs-2 pl-3 pr-3\"> <figure class=\"snip1361 hover\"><img class=\"img-responsive text-center\" src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample77.jpg\" alt=\"sample77\" />
            <figcaption class=\"text-center\">
            <h3>Romance</h3>
            
            </figcaption>
            <a href=\"#\"></a>
            </figure></div>
        </div>
      </div>
    </div>
  </div>   
          <h1 class=\"h1-responsive text-center mt-4 mb-4  wow fadeIn\" data-wow-delay=\"0.2s\">Populares</h1>
                      <!--Carousel Wrapper-->

<div id=\"multi-item-example\" class=\"carousel slide carousel-multi-item container\" data-ride=\"carousel\">
    <!--Indicators-->
    <ol class=\"carousel-indicators\">
        <li data-target=\"#multi-item-example\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#multi-item-example\" data-slide-to=\"1\"></li>
        <li data-target=\"#multi-item-example\" data-slide-to=\"2\"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class=\"carousel-inner\" role=\"listbox\">

        <!--First slide-->
        <div class=\"carousel-item active\">

            <div class=\"col-md-4\">

                <!-- Card Light -->
                <div class=\"card\">

                    <!-- Card image -->
                    <div class=\"view overlay\">
                        <img class=\"card-img-top\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg\" alt=\"Card image cap\">
                        <a>
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class=\"card-body\">

                        <!-- Social shares button -->
                        <a class=\"activator waves-effect waves-light mr-4\">
                            <i class=\"fa fa-bookmark-o\"></i>
                        </a>
                        <!-- Title -->
                        <h4 class=\"card-title\">Card title</h4>
                        <hr>
                        <!-- Text -->
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Link -->
                        <a href=\"#!\" class=\"black-text d-flex justify-content-end\">
                            <h5>Read more
                                <i class=\"fa fa-angle-double-right\"></i>
                            </h5>
                        </a>

                    </div>

                </div>
                <!-- Card Light -->

            </div>

            <div class=\"col-md-4 clearfix d-none d-md-block\">

                <!-- Card Light -->
                <div class=\"card\">

                    <!-- Card image -->
                    <div class=\"view overlay\">
                        <img class=\"card-img-top\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg\" alt=\"Card image cap\">
                        <a>
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class=\"card-body\">

                        <!-- Social shares button -->
                        <a class=\"activator waves-effect waves-light mr-4\">
                            <i class=\"fa fa-bookmark\"></i>
                        </a>
                        <!-- Title -->
                        <h4 class=\"card-title\">Card title</h4>
                        <hr>
                        <!-- Text -->
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Link -->
                        <a href=\"#!\" class=\"black-text d-flex justify-content-end\">
                            <h5>Read more
                                <i class=\"fa fa-angle-double-right\"></i>
                            </h5>
                        </a>

                    </div>

                </div>
                <!-- Card Light -->

            </div>

            <div class=\"col-md-4 clearfix d-none d-md-block\">

                <!-- Card Light -->
                <div class=\"card\">

                    <!-- Card image -->
                    <div class=\"view overlay\">
                        <img class=\"card-img-top\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg\" alt=\"Card image cap\">
                        <a>
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class=\"card-body\">

                        <!-- Social shares button -->
                        <a class=\"activator waves-effect waves-light mr-4\">
                            <i class=\"fa fa-bookmark-o\"></i>
                        </a>
                        <!-- Title -->
                        <h4 class=\"card-title\">Card title</h4>
                        <hr>
                        <!-- Text -->
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Link -->
                        <a href=\"#!\" class=\"black-text d-flex justify-content-end\">
                            <h5>Read more
                                <i class=\"fa fa-angle-double-right\"></i>
                            </h5>
                        </a>

                    </div>

                </div>
                <!-- Card Light -->

            </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class=\"carousel-item conta\">

            <div class=\"col-md-4\">

                <!-- Card Light -->
                <div class=\"card\">

                    <!-- Card image -->
                    <div class=\"view overlay\">
                        <img class=\"card-img-top\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg\" alt=\"Card image cap\">
                        <a>
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class=\"card-body\">

                        <!-- Social shares button -->
                        <a class=\"activator waves-effect waves-light mr-4\">
                            <i class=\" fa fa-bookmark\"></i>
                        </a>
                        <!-- Title -->
                        <h4 class=\"card-title\">Card title</h4>
                        <hr>
                        <!-- Text -->
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Link -->
                        <a href=\"#!\" class=\"black-text d-flex justify-content-end\">
                            <h5>Read more
                                <i class=\"fa fa-angle-double-right\"></i>
                            </h5>
                        </a>

                    </div>

                </div>
                <!-- Card Light -->

            </div>

            <div class=\"col-md-4 clearfix d-none d-md-block\">

                <!-- Card Light -->
                <div class=\"card\">

                    <!-- Card image -->
                    <div class=\"view overlay\">
                        <img class=\"card-img-top\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg\" alt=\"Card image cap\">
                        <a>
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class=\"card-body\">

                        <!-- Social shares button -->
                        <a class=\"activator waves-effect waves-light mr-4\">
                            <i class=\" fa fa-bookmark\"></i>
                        </a>
                        <!-- Title -->
                        <h4 class=\"card-title\">Card title</h4>
                        <hr>
                        <!-- Text -->
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Link -->
                        <a href=\"#!\" class=\"black-text d-flex justify-content-end\">
                            <h5>Read more
                                <i class=\"fa fa-angle-double-right\"></i>
                            </h5>
                        </a>

                    </div>

                </div>
                <!-- Card Light -->

            </div>

            <div class=\"col-md-4 clearfix d-none d-md-block\">

                <!-- Card Light -->
                <div class=\"card\">

                    <!-- Card image -->
                    <div class=\"view overlay\">
                        <img class=\"card-img-top\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg\" alt=\"Card image cap\">
                        <a>
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class=\"card-body\">

                        <!-- Social shares button -->
                        <a class=\"activator waves-effect waves-light mr-4\">
                            <i class=\"fa fa-bookmark-o\"></i>
                        </a>
                        <!-- Title -->
                        <h4 class=\"card-title\">Card title</h4>
                        <hr>
                        <!-- Text -->
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Link -->
                        <a href=\"#!\" class=\"black-text d-flex justify-content-end\">
                            <h5>Read more
                                <i class=\"fa fa-angle-double-right\"></i>
                            </h5>
                        </a>

                    </div>

                </div>
                <!-- Card Light -->

            </div>

        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        <div class=\"carousel-item\">

            <div class=\"col-md-4\">

                <!-- Card Light -->
                <div class=\"card\">

                    <!-- Card image -->
                    <div class=\"view overlay\">
                        <img class=\"card-img-top\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg\" alt=\"Card image cap\">
                        <a>
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class=\"card-body\">

                        <!-- Social shares button -->
                        <a class=\"activator waves-effect waves-light mr-4\">
                            <i class=\"fa fa-bookmark-o\"></i>
                        </a>
                        <!-- Title -->
                        <h4 class=\"card-title\">Card title</h4>
                        <hr>
                        <!-- Text -->
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Link -->
                        <a href=\"#!\" class=\"black-text d-flex justify-content-end\">
                            <h5>Read more
                                <i class=\"fa fa-angle-double-right\"></i>
                            </h5>
                        </a>

                    </div>

                </div>
                <!-- Card Light -->

            </div>

            <div class=\"col-md-4 clearfix d-none d-md-block\">

                <!-- Card Light -->
                <div class=\"card\">

                    <!-- Card image -->
                    <div class=\"view overlay\">
                        <img class=\"card-img-top\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg\" alt=\"Card image cap\">
                        <a>
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class=\"card-body\">

                        <!-- Social shares button -->
                        <a class=\"activator waves-effect waves-light mr-4\">
                            <i class=\"fa fa-bookmark-o\"></i>
                        </a>
                        <!-- Title -->
                        <h4 class=\"card-title\">Card title</h4>
                        <hr>
                        <!-- Text -->
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Link -->
                        <a href=\"#!\" class=\"black-text d-flex justify-content-end\">
                            <h5>Read more
                                <i class=\"fa fa-angle-double-right\"></i>
                            </h5>
                        </a>

                    </div>

                </div>
                <!-- Card Light -->

            </div>

            <div class=\"col-md-4 clearfix d-none d-md-block\">

                <!-- Card Light -->
                <div class=\"card\">

                    <!-- Card image -->
                    <div class=\"view overlay\">
                        <img class=\"card-img-top\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg\" alt=\"Card image cap\">
                        <a>
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class=\"card-body\">

                        <!-- Social shares button -->
                        <a class=\"activator waves-effect waves-light mr-4\">
                            <i class=\"fa fa-bookmark-o\"></i>
                        </a>
                        <!-- Title -->
                        <h4 class=\"card-title\">Card title</h4>
                        <hr>
                        <!-- Text -->
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Link -->
                        <a href=\"#!\" class=\"black-text d-flex justify-content-end\">
                            <h5>Read more
                                <i class=\"fa fa-angle-double-right\"></i>
                            </h5>
                        </a>

                    </div>

                </div>
                <!-- Card Light -->

            </div>

        </div>
        <!--/.Third slide-->

    </div>
    <!--/.Slides-->

</div>

<!--/.Carousel Wrapper-->
              
";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 63,  66 => 35,  63 => 34,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %}*/
/*  */
/* */
/* {% block portadaInicio %}*/
/*     <!--Intro Section-->*/
/* <header>*/
/*       <section class="view intro-3">*/
/*             <div class="full-bg-img flex-center">*/
/*                 <div class="container">*/
/*                     <div class="row flex-center">*/
/*                         <div class="col-md-10 col-lg-4 text-center text-md-left margins">*/
/*                             <div class="white-text">*/
/*                                 <h1 class="h1-responsive intro-title font-weight-bold mt-sm-5 mt-0 mb-4 wow fadeInLeft" data-wow-delay="0.3s">Tu historia comienza aquí</h1>*/
/* */
/*                                 <h6 class="wow fadeInLeft" data-wow-delay="0.3s">Una plataforma para lectores y escritores, donde puedes descubrir, escribir y publicar historias creativas, novelas y libros*/
/*                                 </h6>*/
/*                                 <br>*/
/*                                 <a class="btn btn-white btn-rounded orange-text font-weight-bold ml-lg-0 wow fadeInLeft" data-wow-delay="0.4s">*/
/*                                     Explora</a>*/
/*                                 <a class="btn btn-outline-white btn-rounded font-weight-bold wow fadeInLeft" data-wow-delay="0.4s">Crea una historia</a>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="col-md-6 col-lg-8clearfix d-none d-md-block wow fadeInRight justify-content-center" data-wow-delay="0.3s">*/
/*                             <img src="https://mdbootstrap.com/img/Others/cards32.png" alt="" class="img-fluid">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*     </header>*/
/* {% endblock %}*/
/* */
/* {% block contenido %}*/
/* <div class="container">*/
/*         <section id="features" class="section feature-box mb-5 pb-4 mt-0">*/
/* */
/*                 <!-- Section heading -->*/
/*                 <h2 class="text-center title  pt-5 pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">*/
/*                     <strong>Cómo funciona</strong>*/
/*                 </h2>*/
/* */
/*                 <!-- Section sescription -->*/
/*                 <p class="section-description pb-4 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">*/
/*                   La misión de Booky es descubrir escritores talentosos y convertirlos en autores exitosos a nivel mundial.</p>*/
/* */
/*                 <!--Grid row-->*/
/*                 <div class="row features wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">*/
/* */
/*                     <!--Grid column-->*/
/*                     <div class="col-lg-4 text-center">*/
/*                         <div class="icon-area">*/
/*                       */
/*                             <div class="circle-icon">*/
/*                              */
/*                                 <img src="https://static.inkitt.com/assets/images/frontpage/writee83f00b9.png">*/
/*                             </div>*/
/*                             <br>*/
/*                             <h5 class="dark-grey-text font-weight-bold mt-2">Escribe</h5>*/
/*                             <div class="mt-1">*/
/*                                 <p class="mx-3 grey-text">Disfruta de una de las mejores experiencias para escribir en línea .*/
/*                               */
/*                                 No olvides seguir nuestras <a href="{{path('dwes_libros_normas')}}">pautas</a>.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!--Grid column-->*/
/* */
/*                     <!--Grid column-->*/
/*                     <div class="col-lg-4 text-center">*/
/*                         <div class="icon-area">*/
/*                             <div class="circle-icon">*/
/*                                <img src="https://static.inkitt.com/assets/images/frontpage/explorea0334c35.png">*/
/*                             </div>*/
/*                             <br>*/
/*                             <h5 class="dark-grey-text font-weight-bold mt-2">Explora</h5>*/
/*                             <div class="mt-1">*/
/*                                 <p class="mx-3 grey-text">Descubre miles de historias forma gratuita, deja tu opinión y pásala bien.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!--Grid column-->*/
/* */
/*                     <!--Grid column-->*/
/*                     <div class="col-lg-4 text-center mb-4">*/
/*                         <div class="icon-area">*/
/*                             <div class="circle-icon">*/
/*                                <img src="https://static.inkitt.com/assets/images/frontpage/publish9c15ef5f.png">*/
/*                             </div>*/
/*                             <br>*/
/*                             <h5 class="dark-grey-text font-weight-bold mt-2">Publica</h5>*/
/*                             <div class="mt-1">*/
/*                                 <p class="mx-3 grey-text"> Escribe y publica tus historias más rápido,haciéndolo por capítulos.*/
/*                                 Y se ya tienes un libro en venta, lo puedes anunciar aquí para que llege a más lectores.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!--Grid column-->*/
/* */
/*                 </div>*/
/*                 <!--Grid row-->*/
/* */
/*             </section>*/
/* */
/*             */
/*                */
/*         */
/* </div>*/
/* <div>*/
/* <div class="container">*/
/* <hr>*/
/* </div>*/
/* <div class="container-fluid">*/
/*             <div class="container ">*/
/* */
/*                 <!--Section: Services-->*/
/*                 <section class="section ">*/
/* */
/*                     <!-- Section heading -->*/
/*             <h1 class="text-center title  pt-5 pb-4  wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">*/
/*                     ¡ Descubre miles de historias gratis !*/
/*                 </h1>  */
/* */
/*     <div class="container text-center">*/
/*     <div class="row">*/
/*       <div class="col-xs-6 ">*/
/*         <div class="row">*/
/*           <div class="col-xs-2 pl-3 pr-3 "> <figure class="snip1361 hover"><img class="img-responsive text-center" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample77.jpg" alt="sample77" />*/
/*             <figcaption class="text-center">*/
/*             <h3>Fantasía</h3>*/
/*             */
/*             </figcaption>*/
/*             <a href="#"></a>*/
/*             </figure></div>*/
/*           <div class="col-xs-2 pl-3 pr-3"> <figure class="snip1361 hover"><img class="img-responsive text-center" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample77.jpg" alt="sample77" />*/
/*             <figcaption class="text-center">*/
/*             <h3>Aventura</h3>*/
/*             */
/*             </figcaption>*/
/*             <a href="#"></a>*/
/*             </figure></div>*/
/*           <div class="col-xs-2 pl-3 pr-3"> <figure class="snip1361 hover"><img class="img-responsive text-center" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample77.jpg" alt="sample77" />*/
/*             <figcaption class="text-center">*/
/*             <h3>Misterio</h3>*/
/*             */
/*             </figcaption>*/
/*             <a href="#"></a>*/
/*             </figure></div>*/
/*           <div class="col-xs-2 pl-3 pr-3"> <figure class="snip1361 hover"><img class="img-responsive text-center" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample77.jpg" alt="sample77" />*/
/*             <figcaption class="text-center">*/
/*             <h3>Horror</h3>*/
/*             */
/*             </figcaption>*/
/*             <a href="#"></a>*/
/*             </figure></div>*/
/*           <div class="col-xs-2 pl-3 pr-3"> <figure class="snip1361 hover"><img class="img-responsive text-center" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample77.jpg" alt="sample77" />*/
/*             <figcaption class="text-center">*/
/*             <h3>Poesía</h3>*/
/*             */
/*             </figcaption>*/
/*             <a href="#"></a>*/
/*             </figure></div>*/
/*           <div class="col-xs-2 pl-3 pr-3"> <figure class="snip1361 hover"><img class="img-responsive text-center" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample77.jpg" alt="sample77" />*/
/*             <figcaption class="text-center">*/
/*             <h3>Romance</h3>*/
/*             */
/*             </figcaption>*/
/*             <a href="#"></a>*/
/*             </figure></div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>   */
/*           <h1 class="h1-responsive text-center mt-4 mb-4  wow fadeIn" data-wow-delay="0.2s">Populares</h1>*/
/*                       <!--Carousel Wrapper-->*/
/* */
/* <div id="multi-item-example" class="carousel slide carousel-multi-item container" data-ride="carousel">*/
/*     <!--Indicators-->*/
/*     <ol class="carousel-indicators">*/
/*         <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>*/
/*         <li data-target="#multi-item-example" data-slide-to="1"></li>*/
/*         <li data-target="#multi-item-example" data-slide-to="2"></li>*/
/*     </ol>*/
/*     <!--/.Indicators-->*/
/* */
/*     <!--Slides-->*/
/*     <div class="carousel-inner" role="listbox">*/
/* */
/*         <!--First slide-->*/
/*         <div class="carousel-item active">*/
/* */
/*             <div class="col-md-4">*/
/* */
/*                 <!-- Card Light -->*/
/*                 <div class="card">*/
/* */
/*                     <!-- Card image -->*/
/*                     <div class="view overlay">*/
/*                         <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg" alt="Card image cap">*/
/*                         <a>*/
/*                             <div class="mask rgba-white-slight"></div>*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <!-- Card content -->*/
/*                     <div class="card-body">*/
/* */
/*                         <!-- Social shares button -->*/
/*                         <a class="activator waves-effect waves-light mr-4">*/
/*                             <i class="fa fa-bookmark-o"></i>*/
/*                         </a>*/
/*                         <!-- Title -->*/
/*                         <h4 class="card-title">Card title</h4>*/
/*                         <hr>*/
/*                         <!-- Text -->*/
/*                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>*/
/*                         <!-- Link -->*/
/*                         <a href="#!" class="black-text d-flex justify-content-end">*/
/*                             <h5>Read more*/
/*                                 <i class="fa fa-angle-double-right"></i>*/
/*                             </h5>*/
/*                         </a>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <!-- Card Light -->*/
/* */
/*             </div>*/
/* */
/*             <div class="col-md-4 clearfix d-none d-md-block">*/
/* */
/*                 <!-- Card Light -->*/
/*                 <div class="card">*/
/* */
/*                     <!-- Card image -->*/
/*                     <div class="view overlay">*/
/*                         <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg" alt="Card image cap">*/
/*                         <a>*/
/*                             <div class="mask rgba-white-slight"></div>*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <!-- Card content -->*/
/*                     <div class="card-body">*/
/* */
/*                         <!-- Social shares button -->*/
/*                         <a class="activator waves-effect waves-light mr-4">*/
/*                             <i class="fa fa-bookmark"></i>*/
/*                         </a>*/
/*                         <!-- Title -->*/
/*                         <h4 class="card-title">Card title</h4>*/
/*                         <hr>*/
/*                         <!-- Text -->*/
/*                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>*/
/*                         <!-- Link -->*/
/*                         <a href="#!" class="black-text d-flex justify-content-end">*/
/*                             <h5>Read more*/
/*                                 <i class="fa fa-angle-double-right"></i>*/
/*                             </h5>*/
/*                         </a>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <!-- Card Light -->*/
/* */
/*             </div>*/
/* */
/*             <div class="col-md-4 clearfix d-none d-md-block">*/
/* */
/*                 <!-- Card Light -->*/
/*                 <div class="card">*/
/* */
/*                     <!-- Card image -->*/
/*                     <div class="view overlay">*/
/*                         <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg" alt="Card image cap">*/
/*                         <a>*/
/*                             <div class="mask rgba-white-slight"></div>*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <!-- Card content -->*/
/*                     <div class="card-body">*/
/* */
/*                         <!-- Social shares button -->*/
/*                         <a class="activator waves-effect waves-light mr-4">*/
/*                             <i class="fa fa-bookmark-o"></i>*/
/*                         </a>*/
/*                         <!-- Title -->*/
/*                         <h4 class="card-title">Card title</h4>*/
/*                         <hr>*/
/*                         <!-- Text -->*/
/*                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>*/
/*                         <!-- Link -->*/
/*                         <a href="#!" class="black-text d-flex justify-content-end">*/
/*                             <h5>Read more*/
/*                                 <i class="fa fa-angle-double-right"></i>*/
/*                             </h5>*/
/*                         </a>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <!-- Card Light -->*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         <!--/.First slide-->*/
/* */
/*         <!--Second slide-->*/
/*         <div class="carousel-item conta">*/
/* */
/*             <div class="col-md-4">*/
/* */
/*                 <!-- Card Light -->*/
/*                 <div class="card">*/
/* */
/*                     <!-- Card image -->*/
/*                     <div class="view overlay">*/
/*                         <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg" alt="Card image cap">*/
/*                         <a>*/
/*                             <div class="mask rgba-white-slight"></div>*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <!-- Card content -->*/
/*                     <div class="card-body">*/
/* */
/*                         <!-- Social shares button -->*/
/*                         <a class="activator waves-effect waves-light mr-4">*/
/*                             <i class=" fa fa-bookmark"></i>*/
/*                         </a>*/
/*                         <!-- Title -->*/
/*                         <h4 class="card-title">Card title</h4>*/
/*                         <hr>*/
/*                         <!-- Text -->*/
/*                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>*/
/*                         <!-- Link -->*/
/*                         <a href="#!" class="black-text d-flex justify-content-end">*/
/*                             <h5>Read more*/
/*                                 <i class="fa fa-angle-double-right"></i>*/
/*                             </h5>*/
/*                         </a>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <!-- Card Light -->*/
/* */
/*             </div>*/
/* */
/*             <div class="col-md-4 clearfix d-none d-md-block">*/
/* */
/*                 <!-- Card Light -->*/
/*                 <div class="card">*/
/* */
/*                     <!-- Card image -->*/
/*                     <div class="view overlay">*/
/*                         <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg" alt="Card image cap">*/
/*                         <a>*/
/*                             <div class="mask rgba-white-slight"></div>*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <!-- Card content -->*/
/*                     <div class="card-body">*/
/* */
/*                         <!-- Social shares button -->*/
/*                         <a class="activator waves-effect waves-light mr-4">*/
/*                             <i class=" fa fa-bookmark"></i>*/
/*                         </a>*/
/*                         <!-- Title -->*/
/*                         <h4 class="card-title">Card title</h4>*/
/*                         <hr>*/
/*                         <!-- Text -->*/
/*                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>*/
/*                         <!-- Link -->*/
/*                         <a href="#!" class="black-text d-flex justify-content-end">*/
/*                             <h5>Read more*/
/*                                 <i class="fa fa-angle-double-right"></i>*/
/*                             </h5>*/
/*                         </a>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <!-- Card Light -->*/
/* */
/*             </div>*/
/* */
/*             <div class="col-md-4 clearfix d-none d-md-block">*/
/* */
/*                 <!-- Card Light -->*/
/*                 <div class="card">*/
/* */
/*                     <!-- Card image -->*/
/*                     <div class="view overlay">*/
/*                         <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg" alt="Card image cap">*/
/*                         <a>*/
/*                             <div class="mask rgba-white-slight"></div>*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <!-- Card content -->*/
/*                     <div class="card-body">*/
/* */
/*                         <!-- Social shares button -->*/
/*                         <a class="activator waves-effect waves-light mr-4">*/
/*                             <i class="fa fa-bookmark-o"></i>*/
/*                         </a>*/
/*                         <!-- Title -->*/
/*                         <h4 class="card-title">Card title</h4>*/
/*                         <hr>*/
/*                         <!-- Text -->*/
/*                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>*/
/*                         <!-- Link -->*/
/*                         <a href="#!" class="black-text d-flex justify-content-end">*/
/*                             <h5>Read more*/
/*                                 <i class="fa fa-angle-double-right"></i>*/
/*                             </h5>*/
/*                         </a>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <!-- Card Light -->*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         <!--/.Second slide-->*/
/* */
/*         <!--Third slide-->*/
/*         <div class="carousel-item">*/
/* */
/*             <div class="col-md-4">*/
/* */
/*                 <!-- Card Light -->*/
/*                 <div class="card">*/
/* */
/*                     <!-- Card image -->*/
/*                     <div class="view overlay">*/
/*                         <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg" alt="Card image cap">*/
/*                         <a>*/
/*                             <div class="mask rgba-white-slight"></div>*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <!-- Card content -->*/
/*                     <div class="card-body">*/
/* */
/*                         <!-- Social shares button -->*/
/*                         <a class="activator waves-effect waves-light mr-4">*/
/*                             <i class="fa fa-bookmark-o"></i>*/
/*                         </a>*/
/*                         <!-- Title -->*/
/*                         <h4 class="card-title">Card title</h4>*/
/*                         <hr>*/
/*                         <!-- Text -->*/
/*                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>*/
/*                         <!-- Link -->*/
/*                         <a href="#!" class="black-text d-flex justify-content-end">*/
/*                             <h5>Read more*/
/*                                 <i class="fa fa-angle-double-right"></i>*/
/*                             </h5>*/
/*                         </a>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <!-- Card Light -->*/
/* */
/*             </div>*/
/* */
/*             <div class="col-md-4 clearfix d-none d-md-block">*/
/* */
/*                 <!-- Card Light -->*/
/*                 <div class="card">*/
/* */
/*                     <!-- Card image -->*/
/*                     <div class="view overlay">*/
/*                         <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg" alt="Card image cap">*/
/*                         <a>*/
/*                             <div class="mask rgba-white-slight"></div>*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <!-- Card content -->*/
/*                     <div class="card-body">*/
/* */
/*                         <!-- Social shares button -->*/
/*                         <a class="activator waves-effect waves-light mr-4">*/
/*                             <i class="fa fa-bookmark-o"></i>*/
/*                         </a>*/
/*                         <!-- Title -->*/
/*                         <h4 class="card-title">Card title</h4>*/
/*                         <hr>*/
/*                         <!-- Text -->*/
/*                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>*/
/*                         <!-- Link -->*/
/*                         <a href="#!" class="black-text d-flex justify-content-end">*/
/*                             <h5>Read more*/
/*                                 <i class="fa fa-angle-double-right"></i>*/
/*                             </h5>*/
/*                         </a>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <!-- Card Light -->*/
/* */
/*             </div>*/
/* */
/*             <div class="col-md-4 clearfix d-none d-md-block">*/
/* */
/*                 <!-- Card Light -->*/
/*                 <div class="card">*/
/* */
/*                     <!-- Card image -->*/
/*                     <div class="view overlay">*/
/*                         <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg" alt="Card image cap">*/
/*                         <a>*/
/*                             <div class="mask rgba-white-slight"></div>*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <!-- Card content -->*/
/*                     <div class="card-body">*/
/* */
/*                         <!-- Social shares button -->*/
/*                         <a class="activator waves-effect waves-light mr-4">*/
/*                             <i class="fa fa-bookmark-o"></i>*/
/*                         </a>*/
/*                         <!-- Title -->*/
/*                         <h4 class="card-title">Card title</h4>*/
/*                         <hr>*/
/*                         <!-- Text -->*/
/*                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>*/
/*                         <!-- Link -->*/
/*                         <a href="#!" class="black-text d-flex justify-content-end">*/
/*                             <h5>Read more*/
/*                                 <i class="fa fa-angle-double-right"></i>*/
/*                             </h5>*/
/*                         </a>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <!-- Card Light -->*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         <!--/.Third slide-->*/
/* */
/*     </div>*/
/*     <!--/.Slides-->*/
/* */
/* </div>*/
/* */
/* <!--/.Carousel Wrapper-->*/
/*               */
/* {% endblock %}*/
/* */
