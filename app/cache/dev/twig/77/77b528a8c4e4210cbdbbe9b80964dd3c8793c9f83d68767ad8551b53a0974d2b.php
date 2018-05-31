<?php

/* DWESLibrosBundle:Default:contacto.html.twig */
class __TwigTemplate_932b8a0f302279165cfc8d40f1aaaa16dc64946d5b238d8914ff6c0101704da0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:contacto.html.twig", 1);
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
<div class=\"mdb-map\">
                <div id=\"map-container\" class=\"z-depth-1-half map-container\" style=\"height: 500px; position: relative; overflow: hidden;\"><div ><iframe style=\"height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12482.49612783444!2d-0.14203676712368438!3d38.54243395715187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDMyJzMyLjciTiAwwrAwNyc1OS44Ilc!5e0!3m2!1ses!2ses!4v1522671130697\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe></div>
            </div>
            

";
    }

    // line 13
    public function block_contenido($context, array $blocks = array())
    {
        echo " 



<div class=\"container-fluid mb-5\">

            <!--Grid row-->
            <div class=\"row\" style=\"margin-top: -100px;\">

                <!--Grid column-->
                <div class=\"col-md-12\">

                    <div class=\"card pb-5\">
                        <div class=\"card-body\">

                            <div class=\"container\">

                                <!--Section: Contact v.2-->
                                <section class=\"section\">

                                    <!--Section heading-->
                                    <h2 class=\"section-heading title h1 pt-4\">Contáctanos</h2>
                                    <!--Section description-->
                                    <p class=\"section-description\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure
                                        provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro
                                        a pariatur accusamus veniam.</p>

                                    <div class=\"row pt-5\">

                                        <!--Grid column-->
                                        <div class=\"col-md-8 col-xl-9\">
                                            <form method=\"POST\" action=\"https://formspree.io/aina.lahm@gmail.com\">

                                                <!--Grid row-->
                                                <div class=\"row\">

                                                    <!--Grid column-->
                                                    <div class=\"col-md-6\">
                                                        <div class=\"md-form\">
                                                            <div class=\"md-form\">
                                                                <input type=\"text\" id=\"nombre\"  name=\"nombre\" class=\"form-control\">
                                                                <label for=\"nombre\" class=\"\">Tu nombre</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Grid column-->

                                                    <!--Grid column-->
                                                    <div class=\"col-md-6\">
                                                        <div class=\"md-form\">
                                                            <div class=\"md-form\">
                                                                <input type=\"text\" id=\"correo\" name=\"correo\" class=\"form-control\">
                                                                <label for=\"correo\" class=\"\">Tu email</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Grid column-->

                                                </div>
                                                <!--Grid row-->

                                                <!--Grid row-->
                                                <div class=\"row\">
                                                    <div class=\"col-md-12\">
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"asunto\" name=\"asunto\" class=\"form-control\">
                                                            <label for=\"asunto\" class=\"\">Asunto</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Grid row-->
                                                

                                                <!--Grid row-->
                                                <div class=\"row\">

                                                    <!--Grid column-->
                                                    <div class=\"col-md-12\">

                                                        <div class=\"md-form\">
                                                            <textarea type=\"text\" id=\"mensaje\"  name=\"mensaje\" class=\"md-textarea form-control\" rows=\"3\"></textarea>
                                                            <label for=\"mensaje\">Tu mensaje</label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!--Grid row-->
                                            <div class=\"text-center text-md-left mt-4\">
                                                <button  type=\"Enviar\" class=\"btn pink-gradient btn-rounded waves-effect waves-light\">Enviar</button>
                                            </div>
                                            </form>

                                          
                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class=\"col-md-4 col-xl-3\">
                                            <ul class=\"list-unstyled contact-icons\">
                                                <li>
                                                    <i class=\"fa fa-map-marker fa-2x orange-text\"></i>
                                                    <p>Benidorm, 03570, ES</p>
                                                </li>

                                                <li>
                                                    <i class=\"fa fa-phone fa-2x orange-text\"></i>
                                                    <p>+ 34 634 567 88</p>
                                                </li>

                                                <li>
                                                    <i class=\"fa fa-envelope fa-2x orange-text\"></i>
                                                    <p> info@gmail.com</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--Grid column-->

                                    </div>

                                </section>
                                <!--Section: Contact v.2-->

                            </div>
                        </div>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>

        </div>
";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block portada %}*/
/*     <!--Intro Section-->*/
/* <div class="mdb-map">*/
/*                 <div id="map-container" class="z-depth-1-half map-container" style="height: 500px; position: relative; overflow: hidden;"><div ><iframe style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12482.49612783444!2d-0.14203676712368438!3d38.54243395715187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDMyJzMyLjciTiAwwrAwNyc1OS44Ilc!5e0!3m2!1ses!2ses!4v1522671130697" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>*/
/*             </div>*/
/*             */
/* */
/* {% endblock %}*/
/* */
/* {% block contenido %} */
/* */
/* */
/* */
/* <div class="container-fluid mb-5">*/
/* */
/*             <!--Grid row-->*/
/*             <div class="row" style="margin-top: -100px;">*/
/* */
/*                 <!--Grid column-->*/
/*                 <div class="col-md-12">*/
/* */
/*                     <div class="card pb-5">*/
/*                         <div class="card-body">*/
/* */
/*                             <div class="container">*/
/* */
/*                                 <!--Section: Contact v.2-->*/
/*                                 <section class="section">*/
/* */
/*                                     <!--Section heading-->*/
/*                                     <h2 class="section-heading title h1 pt-4">Contáctanos</h2>*/
/*                                     <!--Section description-->*/
/*                                     <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure*/
/*                                         provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro*/
/*                                         a pariatur accusamus veniam.</p>*/
/* */
/*                                     <div class="row pt-5">*/
/* */
/*                                         <!--Grid column-->*/
/*                                         <div class="col-md-8 col-xl-9">*/
/*                                             <form method="POST" action="https://formspree.io/aina.lahm@gmail.com">*/
/* */
/*                                                 <!--Grid row-->*/
/*                                                 <div class="row">*/
/* */
/*                                                     <!--Grid column-->*/
/*                                                     <div class="col-md-6">*/
/*                                                         <div class="md-form">*/
/*                                                             <div class="md-form">*/
/*                                                                 <input type="text" id="nombre"  name="nombre" class="form-control">*/
/*                                                                 <label for="nombre" class="">Tu nombre</label>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <!--Grid column-->*/
/* */
/*                                                     <!--Grid column-->*/
/*                                                     <div class="col-md-6">*/
/*                                                         <div class="md-form">*/
/*                                                             <div class="md-form">*/
/*                                                                 <input type="text" id="correo" name="correo" class="form-control">*/
/*                                                                 <label for="correo" class="">Tu email</label>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <!--Grid column-->*/
/* */
/*                                                 </div>*/
/*                                                 <!--Grid row-->*/
/* */
/*                                                 <!--Grid row-->*/
/*                                                 <div class="row">*/
/*                                                     <div class="col-md-12">*/
/*                                                         <div class="md-form">*/
/*                                                             <input type="text" id="asunto" name="asunto" class="form-control">*/
/*                                                             <label for="asunto" class="">Asunto</label>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <!--Grid row-->*/
/*                                                 */
/* */
/*                                                 <!--Grid row-->*/
/*                                                 <div class="row">*/
/* */
/*                                                     <!--Grid column-->*/
/*                                                     <div class="col-md-12">*/
/* */
/*                                                         <div class="md-form">*/
/*                                                             <textarea type="text" id="mensaje"  name="mensaje" class="md-textarea form-control" rows="3"></textarea>*/
/*                                                             <label for="mensaje">Tu mensaje</label>*/
/*                                                         </div>*/
/* */
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <!--Grid row-->*/
/*                                             <div class="text-center text-md-left mt-4">*/
/*                                                 <button  type="Enviar" class="btn pink-gradient btn-rounded waves-effect waves-light">Enviar</button>*/
/*                                             </div>*/
/*                                             </form>*/
/* */
/*                                           */
/*                                         </div>*/
/*                                         <!--Grid column-->*/
/* */
/*                                         <!--Grid column-->*/
/*                                         <div class="col-md-4 col-xl-3">*/
/*                                             <ul class="list-unstyled contact-icons">*/
/*                                                 <li>*/
/*                                                     <i class="fa fa-map-marker fa-2x orange-text"></i>*/
/*                                                     <p>Benidorm, 03570, ES</p>*/
/*                                                 </li>*/
/* */
/*                                                 <li>*/
/*                                                     <i class="fa fa-phone fa-2x orange-text"></i>*/
/*                                                     <p>+ 34 634 567 88</p>*/
/*                                                 </li>*/
/* */
/*                                                 <li>*/
/*                                                     <i class="fa fa-envelope fa-2x orange-text"></i>*/
/*                                                     <p> info@gmail.com</p>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                         <!--Grid column-->*/
/* */
/*                                     </div>*/
/* */
/*                                 </section>*/
/*                                 <!--Section: Contact v.2-->*/
/* */
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                     <!--Grid column-->*/
/* */
/*                 </div>*/
/*                 <!--Grid row-->*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* {% endblock %}*/
/* */
