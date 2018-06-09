<?php

/* DWESLibrosBundle:Default:normas.html.twig */
class __TwigTemplate_40c1931d9d5761cca60a8e3bbcbfb60b4c002918e3689da4b20431ad5b9546d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:normas.html.twig", 1);
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
        echo "<section>
    <div  class=\"col-sm-12 text-center\">
        <img class=\"center-block\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Fondos/port.png"), "html", null, true);
        echo "\" style=\"width: 40%;max-height: 500px;margin-top: 60px;\">
    </div>
</section>
 

";
    }

    // line 9
    public function block_contenido($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"container-fluid mb-5\">
 
    <!--Grid row-->
    <div class=\"row\" style=\"margin-top: -100px;\">

        <!--Grid column-->
        <div class=\"col-md-12 px-lg-5\">
            <!--Card-->
            <div class=\"card pb-5 mx-md-3\">
                <div class=\"card-body\">

                    <div class=\"container\">

                        <section id=\"features\" class=\"section feature-box mb-5 pb-4 mt-0\">
                            <!-- Section heading -->
                            <h2 class=\"text-center title pt-5 pb-4  wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;\">
                                <strong>Principios de la comunidad</strong>
                            </h2>
                            <h4 class=\"text-center title pt-5 pb-4 wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;\">
                                ¡ Las reglas de oro !
                            </h4>
                            <!-- Section sescription -->
                            <!--Grid row-->
                            <div class=\"row features wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;\">

                                <!--Grid column-->
                                <div class=\"col-lg-4 text-center\">
                                    <div class=\"icon-area\">

                                        <div class=\"circle-icon\">

                                            <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Icons/1.png"), "html", null, true);
        echo "\" class=\"imgNormas\">
                                        </div>
                                        <br>
                                        <h5 class=\"dark-grey-text font-weight-bold mt-2\">1. Sé amable y constructivo</h5>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class=\"col-lg-4 text-center\">
                                    <div class=\"icon-area\">
                                        <div class=\"circle-icon\">
                                            <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Icons/2.png"), "html", null, true);
        echo "\" class=\"imgNormas\">
                                        </div>
                                        <br>
                                        <h5 class=\"dark-grey-text  mt-2\">2. No seas repugnante</h5>

                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class=\"col-lg-4 text-center mb-4\">
                                    <div class=\"icon-area\">
                                        <div class=\"circle-icon\">
                                            <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Icons/3.png"), "html", null, true);
        echo "\" class=\"imgNormas\">
                                        </div>
                                        <br>
                                        <h5 class=\"dark-grey-text  mt-2\">3. Que te diviertas</h5>
                                    </div>
                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                        </section>

                        <h4 class=\" mt-3 mb-4 text-center \">
                            Bienvenido</h4>
                        <p class=\"text-justify\">
                            ¡Bienvenid@ seas a la aventura! Si has echado un vistazo , buscando un tesoro, queriendo luchar contra dragones o escribir
                            sobre la lluvia; puedes hacer todo eso aquí. Booky es su comunidad de lectura, escritura y compartimiento.
                            Nuestro objetivo es proporcionar un ambiente positivo, constructivo a todos y ver a grandes y
                            nuevos escritores alcanzar sus metas. Sé un lector, sé un escritor; pero sobre todo - <strong> sean buenos
                                el uno con el otro.</strong> 
                        </p>

                        <h4 class=\"mt-3 mb-4 text-center \"> Comportamiento</h4>

                        <p class=\"text-justify\">

                          Booky desea crear un ambiente de apoyo y positividad. Estamos aquí juntos como una comunidad de amantes de la
                            historia. Somos patria de historias de casi todos los géneros y nada nos complacería más que
                            ver a nuestros autores y los lectores ampliar sus horizontes y conseguir sus objetivos. </p>

                        <p class=\"text-justify\">También queremos ver que los autores evolucionan mediante las críticas y apoyo de los lectores.  <strong>Esto
                            significa quelos comentarios tienen que ser constructivos y no despectivos, insultantes, o rencorosos </strong> .
                            Ama a tu vecino, ama la literatura y no seas un borde. Estamos todos aquí para divertirnos asíque
                            no seas repugnante. Si ves algo que podría hacerse mejor ,acércate a esa persona amablemente
                            y házselo saber. </p>

                        <blockquote class=\"blockquote\">
                            <p class=\"mb-0\">Si no tienes nada bueno que decir mejor no digas nada.</p>
                            <footer class=\"blockquote-footer\">
                                <cite title=\"Source Title\">Thumper en Bambi</cite>
                            </footer>
                        </blockquote>

                        <h4 class=\"mt-3 mb-4 text-center\">Avísanos</h4>
                        <p class=\"text-justify\">
                            Si ve algo en nuestro sitio web (Un usuario siendo irrespetuoso, o haciendo mucho spam),
                             por favor avísanos y nos encargaremos del asunto. Queremos que su experiencia en nuestro sitio web sea  agradable,
                             así que no dude en contactarnos por  correo electrónico sobre cualquier preocupación que  tenga.
                        </p>

                        <h4 class=\"mt-3 mb-4 text-center\">Importante</h4>
                        <p class=\"text-justify\">
                            Cualquier violación de pautas de Booky y códigos de conducta puede causar el retiro de sus comentarios, perfil o historias del sitio.
                        </p>

                    </div>

                </div>
                <!--Grid row-->

            </div>
            <!--/Card-->
        </div>
        <!--/Grid column-->
    </div>
    <!--/Grid row-->
</div>
";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:normas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 67,  97 => 54,  82 => 42,  48 => 10,  45 => 9,  35 => 4,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %} {% block portada %}*/
/* <section>*/
/*     <div  class="col-sm-12 text-center">*/
/*         <img class="center-block" src="{{ asset('bundles/dweslibros/img/Fondos/port.png') }}" style="width: 40%;max-height: 500px;margin-top: 60px;">*/
/*     </div>*/
/* </section>*/
/*  */
/* */
/* {% endblock %} {% block contenido %}*/
/* */
/* <div class="container-fluid mb-5">*/
/*  */
/*     <!--Grid row-->*/
/*     <div class="row" style="margin-top: -100px;">*/
/* */
/*         <!--Grid column-->*/
/*         <div class="col-md-12 px-lg-5">*/
/*             <!--Card-->*/
/*             <div class="card pb-5 mx-md-3">*/
/*                 <div class="card-body">*/
/* */
/*                     <div class="container">*/
/* */
/*                         <section id="features" class="section feature-box mb-5 pb-4 mt-0">*/
/*                             <!-- Section heading -->*/
/*                             <h2 class="text-center title pt-5 pb-4  wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">*/
/*                                 <strong>Principios de la comunidad</strong>*/
/*                             </h2>*/
/*                             <h4 class="text-center title pt-5 pb-4 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">*/
/*                                 ¡ Las reglas de oro !*/
/*                             </h4>*/
/*                             <!-- Section sescription -->*/
/*                             <!--Grid row-->*/
/*                             <div class="row features wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">*/
/* */
/*                                 <!--Grid column-->*/
/*                                 <div class="col-lg-4 text-center">*/
/*                                     <div class="icon-area">*/
/* */
/*                                         <div class="circle-icon">*/
/* */
/*                                             <img src="{{ asset('bundles/dweslibros/img/Icons/1.png') }}" class="imgNormas">*/
/*                                         </div>*/
/*                                         <br>*/
/*                                         <h5 class="dark-grey-text font-weight-bold mt-2">1. Sé amable y constructivo</h5>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!--Grid column-->*/
/* */
/*                                 <!--Grid column-->*/
/*                                 <div class="col-lg-4 text-center">*/
/*                                     <div class="icon-area">*/
/*                                         <div class="circle-icon">*/
/*                                             <img src="{{ asset('bundles/dweslibros/img/Icons/2.png') }}" class="imgNormas">*/
/*                                         </div>*/
/*                                         <br>*/
/*                                         <h5 class="dark-grey-text  mt-2">2. No seas repugnante</h5>*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!--Grid column-->*/
/* */
/*                                 <!--Grid column-->*/
/*                                 <div class="col-lg-4 text-center mb-4">*/
/*                                     <div class="icon-area">*/
/*                                         <div class="circle-icon">*/
/*                                             <img src="{{ asset('bundles/dweslibros/img/Icons/3.png') }}" class="imgNormas">*/
/*                                         </div>*/
/*                                         <br>*/
/*                                         <h5 class="dark-grey-text  mt-2">3. Que te diviertas</h5>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!--Grid column-->*/
/* */
/*                             </div>*/
/*                             <!--Grid row-->*/
/* */
/*                         </section>*/
/* */
/*                         <h4 class=" mt-3 mb-4 text-center ">*/
/*                             Bienvenido</h4>*/
/*                         <p class="text-justify">*/
/*                             ¡Bienvenid@ seas a la aventura! Si has echado un vistazo , buscando un tesoro, queriendo luchar contra dragones o escribir*/
/*                             sobre la lluvia; puedes hacer todo eso aquí. Booky es su comunidad de lectura, escritura y compartimiento.*/
/*                             Nuestro objetivo es proporcionar un ambiente positivo, constructivo a todos y ver a grandes y*/
/*                             nuevos escritores alcanzar sus metas. Sé un lector, sé un escritor; pero sobre todo - <strong> sean buenos*/
/*                                 el uno con el otro.</strong> */
/*                         </p>*/
/* */
/*                         <h4 class="mt-3 mb-4 text-center "> Comportamiento</h4>*/
/* */
/*                         <p class="text-justify">*/
/* */
/*                           Booky desea crear un ambiente de apoyo y positividad. Estamos aquí juntos como una comunidad de amantes de la*/
/*                             historia. Somos patria de historias de casi todos los géneros y nada nos complacería más que*/
/*                             ver a nuestros autores y los lectores ampliar sus horizontes y conseguir sus objetivos. </p>*/
/* */
/*                         <p class="text-justify">También queremos ver que los autores evolucionan mediante las críticas y apoyo de los lectores.  <strong>Esto*/
/*                             significa quelos comentarios tienen que ser constructivos y no despectivos, insultantes, o rencorosos </strong> .*/
/*                             Ama a tu vecino, ama la literatura y no seas un borde. Estamos todos aquí para divertirnos asíque*/
/*                             no seas repugnante. Si ves algo que podría hacerse mejor ,acércate a esa persona amablemente*/
/*                             y házselo saber. </p>*/
/* */
/*                         <blockquote class="blockquote">*/
/*                             <p class="mb-0">Si no tienes nada bueno que decir mejor no digas nada.</p>*/
/*                             <footer class="blockquote-footer">*/
/*                                 <cite title="Source Title">Thumper en Bambi</cite>*/
/*                             </footer>*/
/*                         </blockquote>*/
/* */
/*                         <h4 class="mt-3 mb-4 text-center">Avísanos</h4>*/
/*                         <p class="text-justify">*/
/*                             Si ve algo en nuestro sitio web (Un usuario siendo irrespetuoso, o haciendo mucho spam),*/
/*                              por favor avísanos y nos encargaremos del asunto. Queremos que su experiencia en nuestro sitio web sea  agradable,*/
/*                              así que no dude en contactarnos por  correo electrónico sobre cualquier preocupación que  tenga.*/
/*                         </p>*/
/* */
/*                         <h4 class="mt-3 mb-4 text-center">Importante</h4>*/
/*                         <p class="text-justify">*/
/*                             Cualquier violación de pautas de Booky y códigos de conducta puede causar el retiro de sus comentarios, perfil o historias del sitio.*/
/*                         </p>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <!--Grid row-->*/
/* */
/*             </div>*/
/*             <!--/Card-->*/
/*         </div>*/
/*         <!--/Grid column-->*/
/*     </div>*/
/*     <!--/Grid row-->*/
/* </div>*/
/* {% endblock %}*/
