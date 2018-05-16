<?php

/* DWESLibrosBundle:Default:biblioteca.html.twig */
class __TwigTemplate_6c63002c867e5bc11de730f0eb5dea08b45b1b95f4adcfc367310272f3da84e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:biblioteca.html.twig", 1);
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
                <strong>Biblioteca</strong>
            </h3>
            <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">Mis libros publicados</h6>


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

                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        <a class=\"dark-grey-text font-small\">
                                            <i class=\"fa fa-laptop dark-grey-text mr-2\" aria-hidden=\"true\"></i> Mi lista de deseos</a>
                                        <a href=\"\"></a>
                                        <span class=\"badge badge-danger badge-pill\">43</span>
                                        
                                    </li>
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        <a class=\"dark-grey-text font-small\">
                                            <i class=\"fa fa-mobile-phone dark-grey-text mr-3\" aria-hidden=\"true\"></i> Mi lista de lectura</a>
                                        <span class=\"badge badge-danger badge-pill\">32</span>
                                    </li>
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        <a class=\"dark-grey-text font-small\">
                                            <i class=\"fa fa-tablet dark-grey-text mr-3\" aria-hidden=\"true\"></i> Mis libros en venta</a>
                                        <span class=\"badge badge-danger badge-pill\">18</span>
                                    </li>
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        <a class=\"dark-grey-text font-small\">
                                            <i class=\"fa fa-headphones dark-grey-text mr-3\" aria-hidden=\"true\"></i>Mis libros publicados</a>
                                        <span class=\"badge badge-danger badge-pill\">37</span>
                                    </li>
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        <a class=\"dark-grey-text font-small\">
                                            <i class=\"fa fa-camera-retro dark-grey-text mr-3\" aria-hidden=\"true\"></i>Favoritos</a>
                                        <span class=\"badge badge-danger badge-pill\">15</span>
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

                               <div class=\"col-md-4 mb-4\">
                                <!--Card-->
                                <div class=\"card\">

                                    <!--Card image-->
                                    <div class=\"view overlay\">
                                        <img src=\"http://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg\" class=\"card-img-top\" alt=\"sample image\">
                                        <a>
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Buttons-->
                                 <div class=\"card-share\">
                                    <div class=\"social-reveal\">
                                        <!--Facebook-->
                                        <a type=\"button\" class=\"btn-floating btn-fb waves-effect waves-light\"><i class=\"fa fa-facebook\"></i></a>
                                        <!--Twitter-->
                                        <a type=\"button\" class=\"btn-floating btn-tw waves-effect waves-light\"><i class=\"fa fa-twitter\"></i></a>
                                        <!--Google -->
                                        <a type=\"button\" class=\"btn-floating btn-gplus waves-effect waves-light\"><i class=\"fa fa-google-plus\"></i></a>
                                    </div>
                                    <a class=\"btn-floating btn-action share-toggle float-right mdb-color lighten-3 waves-effect waves-light\"><i class=\"fa fa-chevron-right\"></i></a>
                                </div>
                                 <!--/. Buttons-->
                                    <!--Card content-->
                                    <div class=\"card-body\">
                                        <!--Title-->
                                        <h4 class=\"card-title\"><strong>Card title</strong></h4>
                                        <hr>
                                        <!--Text-->
                                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                        <p class=\"text-right mb-0 text-uppercase font-small spacing font-weight-bold\">
                                                <a>read more
                                                    <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
                                                </a>
                                            </p>
                                    </div>
                                    <!--/.Card content-->

                                  

                                </div>
                                <!--/.Card-->

                                </div>

                                <!--Grid column-->
                                 <div class=\"col-md-4 mb-4\">
                                <!--Card-->
                                <div class=\"card\">

                                    <!--Card image-->
                                    <div class=\"view overlay\">
                                        <img src=\"http://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg\" class=\"card-img-top\" alt=\"sample image\">
                                        <a>
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Buttons-->
                                 <div class=\"card-share\">
                                    <div class=\"social-reveal\">
                                        <!--Facebook-->
                                        <a type=\"button\" class=\"btn-floating btn-fb waves-effect waves-light\"><i class=\"fa fa-facebook\"></i></a>
                                        <!--Twitter-->
                                        <a type=\"button\" class=\"btn-floating btn-tw waves-effect waves-light\"><i class=\"fa fa-twitter\"></i></a>
                                        <!--Google -->
                                        <a type=\"button\" class=\"btn-floating btn-gplus waves-effect waves-light\"><i class=\"fa fa-google-plus\"></i></a>
                                    </div>
                                    <a class=\"btn-floating btn-action share-toggle float-right mdb-color lighten-3 waves-effect waves-light\"><i class=\"fa fa-chevron-right\"></i></a>
                                </div>
                                 <!--/. Buttons-->
                                    <!--Card content-->
                                    <div class=\"card-body\">
                                        <!--Title-->
                                        <h4 class=\"card-title\"><strong>Card title</strong></h4>
                                        <hr>
                                        <!--Text-->
                                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                        <p class=\"text-right mb-0 text-uppercase font-small spacing font-weight-bold\">
                                                <a>read more
                                                    <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
                                                </a>
                                            </p>
                                    </div>
                                    <!--/.Card content-->


                                </div>
                                <!--/.Card-->

                                     </div>
                                <!--Grid column-->
                                    <div class=\"col-md-4 mb-4\">
                                <!--Card-->
                                <div class=\"card\">

                                    <!--Card image-->
                                    <div class=\"view overlay\">
                                        <img src=\"http://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg\" class=\"card-img-top\" alt=\"sample image\">
                                        <a>
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Buttons-->
                                 <div class=\"card-share\">
                                    <div class=\"social-reveal\">
                                        <!--Facebook-->
                                        <a type=\"button\" class=\"btn-floating btn-fb waves-effect waves-light\"><i class=\"fa fa-facebook\"></i></a>
                                        <!--Twitter-->
                                        <a type=\"button\" class=\"btn-floating btn-tw waves-effect waves-light\"><i class=\"fa fa-twitter\"></i></a>
                                        <!--Google -->
                                        <a type=\"button\" class=\"btn-floating btn-gplus waves-effect waves-light\"><i class=\"fa fa-google-plus\"></i></a>
                                    </div>
                                    <a class=\"btn-floating btn-action share-toggle float-right mdb-color lighten-3 waves-effect waves-light\"><i class=\"fa fa-chevron-right\"></i></a>
                                </div>
                                 <!--/. Buttons-->
                                    <!--Card content-->
                                    <div class=\"card-body\">
                                        <!--Title-->
                                        <h4 class=\"card-title\"><strong>Card title</strong></h4>
                                        <hr>
                                        <!--Text-->
                                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                        <p class=\"text-right mb-0 text-uppercase font-small spacing font-weight-bold\">
                                                <a>read more
                                                    <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
                                                </a>
                                            </p>
                                    </div>
                                    <!--/.Card content-->


                                </div>
                                <!--/.Card-->

                                </div>
                            </div>
                            <!--/Grid row-->
                        <!--Grid row-->
                            <div class=\"row text-center\">

                               <div class=\"col-md-4 mb-4\">
                                <!--Card-->
                                <div class=\"card\">

                                    <!--Card image-->
                                    <div class=\"view overlay\">
                                        <img src=\"http://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg\" class=\"card-img-top\" alt=\"sample image\">
                                        <a>
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Buttons-->
                                 <div class=\"card-share\">
                                    <div class=\"social-reveal\">
                                        <!--Facebook-->
                                        <a type=\"button\" class=\"btn-floating btn-fb waves-effect waves-light\"><i class=\"fa fa-facebook\"></i></a>
                                        <!--Twitter-->
                                        <a type=\"button\" class=\"btn-floating btn-tw waves-effect waves-light\"><i class=\"fa fa-twitter\"></i></a>
                                        <!--Google -->
                                        <a type=\"button\" class=\"btn-floating btn-gplus waves-effect waves-light\"><i class=\"fa fa-google-plus\"></i></a>
                                    </div>
                                    <a class=\"btn-floating btn-action share-toggle float-right mdb-color lighten-3 waves-effect waves-light\"><i class=\"fa fa-chevron-right\"></i></a>
                                </div>
                                 <!--/. Buttons-->
                                    <!--Card content-->
                                    <div class=\"card-body\">
                                        <!--Title-->
                                        <h4 class=\"card-title\"><strong>Card title</strong></h4>
                                        <hr>
                                        <!--Text-->
                                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                        <p class=\"text-right mb-0 text-uppercase font-small spacing font-weight-bold\">
                                                <a>read more
                                                    <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
                                                </a>
                                            </p>
                                    </div>
                                    <!--/.Card content-->

                                  

                                </div>
                                <!--/.Card-->

                            </div>

                                <!--Grid column-->
                                 <div class=\"col-md-4 mb-4\">
                                <!--Card-->
                                <div class=\"card\">

                                    <!--Card image-->
                                    <div class=\"view overlay\">
                                        <img src=\"http://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg\" class=\"card-img-top\" alt=\"sample image\">
                                        <a>
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Buttons-->
                                 <div class=\"card-share\">
                                    <div class=\"social-reveal\">
                                        <!--Facebook-->
                                        <a type=\"button\" class=\"btn-floating btn-fb waves-effect waves-light\"><i class=\"fa fa-facebook\"></i></a>
                                        <!--Twitter-->
                                        <a type=\"button\" class=\"btn-floating btn-tw waves-effect waves-light\"><i class=\"fa fa-twitter\"></i></a>
                                        <!--Google -->
                                        <a type=\"button\" class=\"btn-floating btn-gplus waves-effect waves-light\"><i class=\"fa fa-google-plus\"></i></a>
                                    </div>
                                    <a class=\"btn-floating btn-action share-toggle float-right mdb-color lighten-3 waves-effect waves-light\"><i class=\"fa fa-chevron-right\"></i></a>
                                </div>
                                 <!--/. Buttons-->
                                    <!--Card content-->
                                    <div class=\"card-body\">
                                        <!--Title-->
                                        <h4 class=\"card-title\"><strong>Card title</strong></h4>
                                        <hr>
                                        <!--Text-->
                                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                        <p class=\"text-right mb-0 text-uppercase font-small spacing font-weight-bold\">
                                                <a>read more
                                                    <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
                                                </a>
                                            </p>
                                    </div>
                                    <!--/.Card content-->


                                </div>
                                <!--/.Card-->

                            </div>
                                <!--Grid column-->
                <div class=\"col-md-4 mb-4\">
                                <!--Card-->
                                <div class=\"card\">

                                    <!--Card image-->
                                    <div class=\"view overlay\">
                                        <img src=\"http://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg\" class=\"card-img-top\" alt=\"sample image\">
                                        <a>
                                            <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                        </a>
                                    </div>
                                    
                                    <!--/.Card image-->
                                    <!--Buttons-->
                                 <div class=\"card-share\">
                                    <div class=\"social-reveal\">
                                        <!--Facebook-->
                                        <a type=\"button\" class=\"btn-floating btn-fb waves-effect waves-light\"><i class=\"fa fa-facebook\"></i></a>
                                        <!--Twitter-->
                                        <a type=\"button\" class=\"btn-floating btn-tw waves-effect waves-light\"><i class=\"fa fa-twitter\"></i></a>
                                        <!--Google -->
                                        <a type=\"button\" class=\"btn-floating btn-gplus waves-effect waves-light\"><i class=\"fa fa-google-plus\"></i></a>
                                    </div>
                                    <a class=\"btn-floating btn-action share-toggle float-right mdb-color lighten-3 waves-effect waves-light\"><i class=\"fa fa-chevron-right\"></i></a>
                                </div>
                                 <!--/. Buttons-->
                                    <!--Card content-->
                                    <div class=\"card-body\">
                                        <!--Title-->
                                        <h4 class=\"card-title\"><strong>Card title</strong></h4>
                                        <hr>
                                        <!--Text-->
                                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                        <p class=\"text-right mb-0 text-uppercase font-small spacing font-weight-bold\">
                                                <a>read more
                                                    <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
                                                </a>
                                            </p>
                                    </div>
                                    <!--/.Card content-->


                                </div>
                                <!--/.Card-->

                            </div>
                            </div>
                            <!--/Grid row-->
                      

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
        return "DWESLibrosBundle:Default:biblioteca.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 25,  32 => 4,  29 => 3,  11 => 1,);
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
/*                 <strong>Biblioteca</strong>*/
/*             </h3>*/
/*             <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">Mis libros publicados</h6>*/
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
/* */
/*                                     <li class="list-group-item d-flex justify-content-between align-items-center">*/
/*                                         <a class="dark-grey-text font-small">*/
/*                                             <i class="fa fa-laptop dark-grey-text mr-2" aria-hidden="true"></i> Mi lista de deseos</a>*/
/*                                         <a href=""></a>*/
/*                                         <span class="badge badge-danger badge-pill">43</span>*/
/*                                         */
/*                                     </li>*/
/*                                     <li class="list-group-item d-flex justify-content-between align-items-center">*/
/*                                         <a class="dark-grey-text font-small">*/
/*                                             <i class="fa fa-mobile-phone dark-grey-text mr-3" aria-hidden="true"></i> Mi lista de lectura</a>*/
/*                                         <span class="badge badge-danger badge-pill">32</span>*/
/*                                     </li>*/
/*                                     <li class="list-group-item d-flex justify-content-between align-items-center">*/
/*                                         <a class="dark-grey-text font-small">*/
/*                                             <i class="fa fa-tablet dark-grey-text mr-3" aria-hidden="true"></i> Mis libros en venta</a>*/
/*                                         <span class="badge badge-danger badge-pill">18</span>*/
/*                                     </li>*/
/*                                     <li class="list-group-item d-flex justify-content-between align-items-center">*/
/*                                         <a class="dark-grey-text font-small">*/
/*                                             <i class="fa fa-headphones dark-grey-text mr-3" aria-hidden="true"></i>Mis libros publicados</a>*/
/*                                         <span class="badge badge-danger badge-pill">37</span>*/
/*                                     </li>*/
/*                                     <li class="list-group-item d-flex justify-content-between align-items-center">*/
/*                                         <a class="dark-grey-text font-small">*/
/*                                             <i class="fa fa-camera-retro dark-grey-text mr-3" aria-hidden="true"></i>Favoritos</a>*/
/*                                         <span class="badge badge-danger badge-pill">15</span>*/
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
/* */
/*                            */
/* */
/*                             */
/* */
/*                             <!--Grid row-->*/
/*                             <div class="row text-center">*/
/* */
/*                                <div class="col-md-4 mb-4">*/
/*                                 <!--Card-->*/
/*                                 <div class="card">*/
/* */
/*                                     <!--Card image-->*/
/*                                     <div class="view overlay">*/
/*                                         <img src="http://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg" class="card-img-top" alt="sample image">*/
/*                                         <a>*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <!--/.Card image-->*/
/*                                     <!--Buttons-->*/
/*                                  <div class="card-share">*/
/*                                     <div class="social-reveal">*/
/*                                         <!--Facebook-->*/
/*                                         <a type="button" class="btn-floating btn-fb waves-effect waves-light"><i class="fa fa-facebook"></i></a>*/
/*                                         <!--Twitter-->*/
/*                                         <a type="button" class="btn-floating btn-tw waves-effect waves-light"><i class="fa fa-twitter"></i></a>*/
/*                                         <!--Google -->*/
/*                                         <a type="button" class="btn-floating btn-gplus waves-effect waves-light"><i class="fa fa-google-plus"></i></a>*/
/*                                     </div>*/
/*                                     <a class="btn-floating btn-action share-toggle float-right mdb-color lighten-3 waves-effect waves-light"><i class="fa fa-chevron-right"></i></a>*/
/*                                 </div>*/
/*                                  <!--/. Buttons-->*/
/*                                     <!--Card content-->*/
/*                                     <div class="card-body">*/
/*                                         <!--Title-->*/
/*                                         <h4 class="card-title"><strong>Card title</strong></h4>*/
/*                                         <hr>*/
/*                                         <!--Text-->*/
/*                                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's*/
/*                                             content.*/
/*                                         </p>*/
/*                                         <p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">*/
/*                                                 <a>read more*/
/*                                                     <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>*/
/*                                                 </a>*/
/*                                             </p>*/
/*                                     </div>*/
/*                                     <!--/.Card content-->*/
/* */
/*                                   */
/* */
/*                                 </div>*/
/*                                 <!--/.Card-->*/
/* */
/*                                 </div>*/
/* */
/*                                 <!--Grid column-->*/
/*                                  <div class="col-md-4 mb-4">*/
/*                                 <!--Card-->*/
/*                                 <div class="card">*/
/* */
/*                                     <!--Card image-->*/
/*                                     <div class="view overlay">*/
/*                                         <img src="http://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg" class="card-img-top" alt="sample image">*/
/*                                         <a>*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <!--/.Card image-->*/
/*                                     <!--Buttons-->*/
/*                                  <div class="card-share">*/
/*                                     <div class="social-reveal">*/
/*                                         <!--Facebook-->*/
/*                                         <a type="button" class="btn-floating btn-fb waves-effect waves-light"><i class="fa fa-facebook"></i></a>*/
/*                                         <!--Twitter-->*/
/*                                         <a type="button" class="btn-floating btn-tw waves-effect waves-light"><i class="fa fa-twitter"></i></a>*/
/*                                         <!--Google -->*/
/*                                         <a type="button" class="btn-floating btn-gplus waves-effect waves-light"><i class="fa fa-google-plus"></i></a>*/
/*                                     </div>*/
/*                                     <a class="btn-floating btn-action share-toggle float-right mdb-color lighten-3 waves-effect waves-light"><i class="fa fa-chevron-right"></i></a>*/
/*                                 </div>*/
/*                                  <!--/. Buttons-->*/
/*                                     <!--Card content-->*/
/*                                     <div class="card-body">*/
/*                                         <!--Title-->*/
/*                                         <h4 class="card-title"><strong>Card title</strong></h4>*/
/*                                         <hr>*/
/*                                         <!--Text-->*/
/*                                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's*/
/*                                             content.*/
/*                                         </p>*/
/*                                         <p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">*/
/*                                                 <a>read more*/
/*                                                     <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>*/
/*                                                 </a>*/
/*                                             </p>*/
/*                                     </div>*/
/*                                     <!--/.Card content-->*/
/* */
/* */
/*                                 </div>*/
/*                                 <!--/.Card-->*/
/* */
/*                                      </div>*/
/*                                 <!--Grid column-->*/
/*                                     <div class="col-md-4 mb-4">*/
/*                                 <!--Card-->*/
/*                                 <div class="card">*/
/* */
/*                                     <!--Card image-->*/
/*                                     <div class="view overlay">*/
/*                                         <img src="http://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg" class="card-img-top" alt="sample image">*/
/*                                         <a>*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <!--/.Card image-->*/
/*                                     <!--Buttons-->*/
/*                                  <div class="card-share">*/
/*                                     <div class="social-reveal">*/
/*                                         <!--Facebook-->*/
/*                                         <a type="button" class="btn-floating btn-fb waves-effect waves-light"><i class="fa fa-facebook"></i></a>*/
/*                                         <!--Twitter-->*/
/*                                         <a type="button" class="btn-floating btn-tw waves-effect waves-light"><i class="fa fa-twitter"></i></a>*/
/*                                         <!--Google -->*/
/*                                         <a type="button" class="btn-floating btn-gplus waves-effect waves-light"><i class="fa fa-google-plus"></i></a>*/
/*                                     </div>*/
/*                                     <a class="btn-floating btn-action share-toggle float-right mdb-color lighten-3 waves-effect waves-light"><i class="fa fa-chevron-right"></i></a>*/
/*                                 </div>*/
/*                                  <!--/. Buttons-->*/
/*                                     <!--Card content-->*/
/*                                     <div class="card-body">*/
/*                                         <!--Title-->*/
/*                                         <h4 class="card-title"><strong>Card title</strong></h4>*/
/*                                         <hr>*/
/*                                         <!--Text-->*/
/*                                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's*/
/*                                             content.*/
/*                                         </p>*/
/*                                         <p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">*/
/*                                                 <a>read more*/
/*                                                     <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>*/
/*                                                 </a>*/
/*                                             </p>*/
/*                                     </div>*/
/*                                     <!--/.Card content-->*/
/* */
/* */
/*                                 </div>*/
/*                                 <!--/.Card-->*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                             <!--/Grid row-->*/
/*                         <!--Grid row-->*/
/*                             <div class="row text-center">*/
/* */
/*                                <div class="col-md-4 mb-4">*/
/*                                 <!--Card-->*/
/*                                 <div class="card">*/
/* */
/*                                     <!--Card image-->*/
/*                                     <div class="view overlay">*/
/*                                         <img src="http://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg" class="card-img-top" alt="sample image">*/
/*                                         <a>*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <!--/.Card image-->*/
/*                                     <!--Buttons-->*/
/*                                  <div class="card-share">*/
/*                                     <div class="social-reveal">*/
/*                                         <!--Facebook-->*/
/*                                         <a type="button" class="btn-floating btn-fb waves-effect waves-light"><i class="fa fa-facebook"></i></a>*/
/*                                         <!--Twitter-->*/
/*                                         <a type="button" class="btn-floating btn-tw waves-effect waves-light"><i class="fa fa-twitter"></i></a>*/
/*                                         <!--Google -->*/
/*                                         <a type="button" class="btn-floating btn-gplus waves-effect waves-light"><i class="fa fa-google-plus"></i></a>*/
/*                                     </div>*/
/*                                     <a class="btn-floating btn-action share-toggle float-right mdb-color lighten-3 waves-effect waves-light"><i class="fa fa-chevron-right"></i></a>*/
/*                                 </div>*/
/*                                  <!--/. Buttons-->*/
/*                                     <!--Card content-->*/
/*                                     <div class="card-body">*/
/*                                         <!--Title-->*/
/*                                         <h4 class="card-title"><strong>Card title</strong></h4>*/
/*                                         <hr>*/
/*                                         <!--Text-->*/
/*                                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's*/
/*                                             content.*/
/*                                         </p>*/
/*                                         <p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">*/
/*                                                 <a>read more*/
/*                                                     <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>*/
/*                                                 </a>*/
/*                                             </p>*/
/*                                     </div>*/
/*                                     <!--/.Card content-->*/
/* */
/*                                   */
/* */
/*                                 </div>*/
/*                                 <!--/.Card-->*/
/* */
/*                             </div>*/
/* */
/*                                 <!--Grid column-->*/
/*                                  <div class="col-md-4 mb-4">*/
/*                                 <!--Card-->*/
/*                                 <div class="card">*/
/* */
/*                                     <!--Card image-->*/
/*                                     <div class="view overlay">*/
/*                                         <img src="http://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg" class="card-img-top" alt="sample image">*/
/*                                         <a>*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <!--/.Card image-->*/
/*                                     <!--Buttons-->*/
/*                                  <div class="card-share">*/
/*                                     <div class="social-reveal">*/
/*                                         <!--Facebook-->*/
/*                                         <a type="button" class="btn-floating btn-fb waves-effect waves-light"><i class="fa fa-facebook"></i></a>*/
/*                                         <!--Twitter-->*/
/*                                         <a type="button" class="btn-floating btn-tw waves-effect waves-light"><i class="fa fa-twitter"></i></a>*/
/*                                         <!--Google -->*/
/*                                         <a type="button" class="btn-floating btn-gplus waves-effect waves-light"><i class="fa fa-google-plus"></i></a>*/
/*                                     </div>*/
/*                                     <a class="btn-floating btn-action share-toggle float-right mdb-color lighten-3 waves-effect waves-light"><i class="fa fa-chevron-right"></i></a>*/
/*                                 </div>*/
/*                                  <!--/. Buttons-->*/
/*                                     <!--Card content-->*/
/*                                     <div class="card-body">*/
/*                                         <!--Title-->*/
/*                                         <h4 class="card-title"><strong>Card title</strong></h4>*/
/*                                         <hr>*/
/*                                         <!--Text-->*/
/*                                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's*/
/*                                             content.*/
/*                                         </p>*/
/*                                         <p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">*/
/*                                                 <a>read more*/
/*                                                     <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>*/
/*                                                 </a>*/
/*                                             </p>*/
/*                                     </div>*/
/*                                     <!--/.Card content-->*/
/* */
/* */
/*                                 </div>*/
/*                                 <!--/.Card-->*/
/* */
/*                             </div>*/
/*                                 <!--Grid column-->*/
/*                 <div class="col-md-4 mb-4">*/
/*                                 <!--Card-->*/
/*                                 <div class="card">*/
/* */
/*                                     <!--Card image-->*/
/*                                     <div class="view overlay">*/
/*                                         <img src="http://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg" class="card-img-top" alt="sample image">*/
/*                                         <a>*/
/*                                             <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     */
/*                                     <!--/.Card image-->*/
/*                                     <!--Buttons-->*/
/*                                  <div class="card-share">*/
/*                                     <div class="social-reveal">*/
/*                                         <!--Facebook-->*/
/*                                         <a type="button" class="btn-floating btn-fb waves-effect waves-light"><i class="fa fa-facebook"></i></a>*/
/*                                         <!--Twitter-->*/
/*                                         <a type="button" class="btn-floating btn-tw waves-effect waves-light"><i class="fa fa-twitter"></i></a>*/
/*                                         <!--Google -->*/
/*                                         <a type="button" class="btn-floating btn-gplus waves-effect waves-light"><i class="fa fa-google-plus"></i></a>*/
/*                                     </div>*/
/*                                     <a class="btn-floating btn-action share-toggle float-right mdb-color lighten-3 waves-effect waves-light"><i class="fa fa-chevron-right"></i></a>*/
/*                                 </div>*/
/*                                  <!--/. Buttons-->*/
/*                                     <!--Card content-->*/
/*                                     <div class="card-body">*/
/*                                         <!--Title-->*/
/*                                         <h4 class="card-title"><strong>Card title</strong></h4>*/
/*                                         <hr>*/
/*                                         <!--Text-->*/
/*                                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's*/
/*                                             content.*/
/*                                         </p>*/
/*                                         <p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">*/
/*                                                 <a>read more*/
/*                                                     <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>*/
/*                                                 </a>*/
/*                                             </p>*/
/*                                     </div>*/
/*                                     <!--/.Card content-->*/
/* */
/* */
/*                                 </div>*/
/*                                 <!--/.Card-->*/
/* */
/*                             </div>*/
/*                             </div>*/
/*                             <!--/Grid row-->*/
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
