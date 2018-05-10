<?php

/* DWESLibrosBundle:Default:perfilhistoria.html.twig */
class __TwigTemplate_2eab02cf13939b8a76d54a176571d2d907186a91eb3593fc670021a7c11af82d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:perfilhistoria.html.twig", 1);
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

    // line 4
    public function block_portada($context, array $blocks = array())
    {
        // line 5
        echo "    <!--Intro Section-->
   <div  class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Fondos/Fondo2.jpg"), "html", null, true);
        echo "');margin-top: 27px;\">
            <div class=\"flex-center  \" style=\"background-color: rgba(17, 27, 43, 0.7);\">
                <div class=\"container my-5 pt-5\">

                    <!-- Section heading -->
                    <h3 class=\"text-center pt-0 pb-0 mb-0 white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                        <strong>Título del libro</strong>
                    </h3>
                    <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">By @";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                    <br>
                     <button type=\"button\" class=\"btn peach-gradient btn-lg mt-4\">3 Capítulos</button>
                    
                      <button type=\"button\" class=\"btn peach-gradient btn-lg mt-4\">Añadir capítulo</button>
                      
                      <button type=\"button\" class=\"btn peach-gradient btn-lg mt-4\">Ver historia</button>
                    </h6>
                    

                </div>
            </div>
        </div> 
            




";
    }

    // line 35
    public function block_contenido($context, array $blocks = array())
    {
        echo " 

     <div class=\"row\" style=\"background-color: #f4f5f6;\">

        <!--Grid column-->
        <div class=\"col-lg-12 col-md-12 mb-12\">

            <!--Rotating card  class=\"card-wrapper\"-->
            <div>
                <div id=\"card-1\" class=\"card-rotating effect__click text-center w-100\">

                    <!--Front Side-->
                    
                    <div class=\"face front\">

                        <!-- Image-->
                        <div class=\"card-up\" style=\" background-image: url('https://mdbootstrap.com/img/Photos/Others/images/82.jpg') \">
                      
                           
                        </div>

                        <!--Avatar-->
                        <div class=\"avatar ml-5 white \"  style=\"max-width: 176px !important;
    min-height: 200px !important;    margin-top: -205px;     margin-left: 120px !important;\">
                      
                         <div class=\"card\">

                            <!--Card image-->
                            <div class=\"view overlay\">
                                <img src=\"https://mdbootstrap.com/img/Photos/Others/images/20.jpg\" class=\"card-img-top\" alt=\"\">
                                <a>
                                    <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class=\"card-body\">
                                <!--Title-->
                                <h5 class=\"card-title dark-grey-text text-center grey lighten-4 py-2\">
                                    <strong>Título historia</strong>
                                </h5>

                                <!--Description-->
                                <p class=\"mt-3 dark-grey-text font-small text-center\">
                                    <em>Hello, I'm Anna. I love travel around the world and take photos of landscapes and local
                                        people.
                                    </em>
                                </p>

                                <ul class=\"list-unstyled list-inline-item circle-icons list-unstyled flex-center\">
                                    <!--Facebook-->
                                    <li>
                                        <a class=\"fb-ic\">
                                            <i class=\"fa fa-facebook\"> </i>
                                        </a>
                                    </li>
                                    <!--Twitter-->
                                    <li>
                                        <a class=\"tw-ic\">
                                            <i class=\"fa fa-twitter mx-3\"> </i>
                                        </a>
                                    </li>
                                    <!--Google +-->
                                    <li>
                                        <a class=\"gplus-ic\">
                                            <i class=\"fa fa-google-plus\"> </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--/.Card content-->

                        </div>
\t                    
                      
                       
                        </div>

                        <!--Content-->
                        <div class=\"card-body container\">
                            <h4 class=\"mt-1\"> hh</h4>
                            <p class=\"font-weight-bold dark-grey-text\"> hh</p>
                            <!--Triggering button-->
                               <!--Content-->
                        <h4 class=\"font-weight-bold mt-4 mb-2\">
                            <strong>Biografía</strong>
                        </h4>
                        <hr>hffffff
                      
                      


                       <br> 
                       
                       
                        </p>
                        <hr>
                        <!--Social Icons-->
                        <ul class=\"list-inline list-unstyled\">
                            <li class=\"list-inline-item\">
                                <a class=\"icons-sm fb-ic\">
                                    <i class=\"fa fa-facebook\"></i>
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a class=\"icons-sm pin-ic\">
                                    <i class=\"fa fa-pinterest\"> </i>
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a class=\"icons-sm ins-ic\">
                                    <i class=\"fa fa-instagram\"> </i>
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a class=\"icons-sm tw-ic\">
                                    <i class=\"fa fa-twitter\"> </i>
                                </a>
                            </li>
                        </ul>
                       

                        </div>

                    
                    
                    
                    </div>
                    <!--Front Side-->


                </div>
            </div>
            <!--Rotating card-->

        </div>
        <!--Grid column-->

        

    </div>
   
";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:perfilhistoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 35,  46 => 14,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block portada %}*/
/*     <!--Intro Section-->*/
/*    <div  class="streak streak-photo streak-md  portada " style="background-image: url('{{ asset('bundles/dweslibros/img/Fondos/Fondo2.jpg') }}');margin-top: 27px;">*/
/*             <div class="flex-center  " style="background-color: rgba(17, 27, 43, 0.7);">*/
/*                 <div class="container my-5 pt-5">*/
/* */
/*                     <!-- Section heading -->*/
/*                     <h3 class="text-center pt-0 pb-0 mb-0 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                         <strong>Título del libro</strong>*/
/*                     </h3>*/
/*                     <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">By @{{ app.user.username }}*/
/*                     <br>*/
/*                      <button type="button" class="btn peach-gradient btn-lg mt-4">3 Capítulos</button>*/
/*                     */
/*                       <button type="button" class="btn peach-gradient btn-lg mt-4">Añadir capítulo</button>*/
/*                       */
/*                       <button type="button" class="btn peach-gradient btn-lg mt-4">Ver historia</button>*/
/*                     </h6>*/
/*                     */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div> */
/*             */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block contenido %} */
/* */
/*      <div class="row" style="background-color: #f4f5f6;">*/
/* */
/*         <!--Grid column-->*/
/*         <div class="col-lg-12 col-md-12 mb-12">*/
/* */
/*             <!--Rotating card  class="card-wrapper"-->*/
/*             <div>*/
/*                 <div id="card-1" class="card-rotating effect__click text-center w-100">*/
/* */
/*                     <!--Front Side-->*/
/*                     */
/*                     <div class="face front">*/
/* */
/*                         <!-- Image-->*/
/*                         <div class="card-up" style=" background-image: url('https://mdbootstrap.com/img/Photos/Others/images/82.jpg') ">*/
/*                       */
/*                            */
/*                         </div>*/
/* */
/*                         <!--Avatar-->*/
/*                         <div class="avatar ml-5 white "  style="max-width: 176px !important;*/
/*     min-height: 200px !important;    margin-top: -205px;     margin-left: 120px !important;">*/
/*                       */
/*                          <div class="card">*/
/* */
/*                             <!--Card image-->*/
/*                             <div class="view overlay">*/
/*                                 <img src="https://mdbootstrap.com/img/Photos/Others/images/20.jpg" class="card-img-top" alt="">*/
/*                                 <a>*/
/*                                     <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <!--/.Card image-->*/
/* */
/*                             <!--Card content-->*/
/*                             <div class="card-body">*/
/*                                 <!--Title-->*/
/*                                 <h5 class="card-title dark-grey-text text-center grey lighten-4 py-2">*/
/*                                     <strong>Título historia</strong>*/
/*                                 </h5>*/
/* */
/*                                 <!--Description-->*/
/*                                 <p class="mt-3 dark-grey-text font-small text-center">*/
/*                                     <em>Hello, I'm Anna. I love travel around the world and take photos of landscapes and local*/
/*                                         people.*/
/*                                     </em>*/
/*                                 </p>*/
/* */
/*                                 <ul class="list-unstyled list-inline-item circle-icons list-unstyled flex-center">*/
/*                                     <!--Facebook-->*/
/*                                     <li>*/
/*                                         <a class="fb-ic">*/
/*                                             <i class="fa fa-facebook"> </i>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <!--Twitter-->*/
/*                                     <li>*/
/*                                         <a class="tw-ic">*/
/*                                             <i class="fa fa-twitter mx-3"> </i>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <!--Google +-->*/
/*                                     <li>*/
/*                                         <a class="gplus-ic">*/
/*                                             <i class="fa fa-google-plus"> </i>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <!--/.Card content-->*/
/* */
/*                         </div>*/
/* 	                    */
/*                       */
/*                        */
/*                         </div>*/
/* */
/*                         <!--Content-->*/
/*                         <div class="card-body container">*/
/*                             <h4 class="mt-1"> hh</h4>*/
/*                             <p class="font-weight-bold dark-grey-text"> hh</p>*/
/*                             <!--Triggering button-->*/
/*                                <!--Content-->*/
/*                         <h4 class="font-weight-bold mt-4 mb-2">*/
/*                             <strong>Biografía</strong>*/
/*                         </h4>*/
/*                         <hr>hffffff*/
/*                       */
/*                       */
/* */
/* */
/*                        <br> */
/*                        */
/*                        */
/*                         </p>*/
/*                         <hr>*/
/*                         <!--Social Icons-->*/
/*                         <ul class="list-inline list-unstyled">*/
/*                             <li class="list-inline-item">*/
/*                                 <a class="icons-sm fb-ic">*/
/*                                     <i class="fa fa-facebook"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="list-inline-item">*/
/*                                 <a class="icons-sm pin-ic">*/
/*                                     <i class="fa fa-pinterest"> </i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="list-inline-item">*/
/*                                 <a class="icons-sm ins-ic">*/
/*                                     <i class="fa fa-instagram"> </i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="list-inline-item">*/
/*                                 <a class="icons-sm tw-ic">*/
/*                                     <i class="fa fa-twitter"> </i>*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                        */
/* */
/*                         </div>*/
/* */
/*                     */
/*                     */
/*                     */
/*                     </div>*/
/*                     <!--Front Side-->*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*             <!--Rotating card-->*/
/* */
/*         </div>*/
/*         <!--Grid column-->*/
/* */
/*         */
/* */
/*     </div>*/
/*    */
/* {% endblock %}*/
/* */
