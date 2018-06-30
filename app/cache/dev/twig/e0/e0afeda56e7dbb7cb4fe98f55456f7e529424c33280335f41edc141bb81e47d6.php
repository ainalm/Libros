<?php

/* DWESLibrosBundle:Default:perfil.html.twig */
class __TwigTemplate_b580a8784e9a7f4e44742f398b04cae762956aa26e4ef9b2f9910f9fb8f99229 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:perfil.html.twig", 1);
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
<div class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Fondos/Fondo3.jpg"), "html", null, true);
        echo "');margin-top: 27px;\">
    <div class=\"flex-center  \" style=\"background-color: rgba(17, 27, 43, 0.7);\">
        <div class=\"container my-4 pt-5\">

            <!-- Section heading -->
            <h3 class=\"text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                <strong>PERFIL</strong>
            </h3>
            <h6 class=\"text-center white-text pb-5 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">@";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</h6>
        </div>
    </div>
</div>
";
    }

    // line 15
    public function block_contenido($context, array $blocks = array())
    {
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "<div class=\"row\" style=\"background-color: #f4f5f6;\">

    <!--Grid column-->
    <div class=\"col-lg-12 col-md-12 mb-12\">

        <!--Rotating card-->
        <div class=\"card-wrapper\">
            <div id=\"card-1\" class=\"card-rotating effect__click text-center w-100\">

                <!--Front Side-->

                <div class=\"face front\">

                    <!-- Image-->
                    <div class=\"card-up\" style=\" background-image: url('https://mdbootstrap.com/img/Photos/Others/images/82.jpg') \">
                    </div>
                    <!--Avatar-->
                    <div class=\"container-fluid\">
                    <div class=\"avatar mx-auto white rad\">
                     
                        ";
            // line 36
            if ((isset($context["fotoPerfil"]) ? $context["fotoPerfil"] : $this->getContext($context, "fotoPerfil"))) {
                // line 37
                echo "                        <img src=\"data:image/jpeg;base64,";
                echo twig_escape_filter($this->env, (isset($context["fotoPerfil"]) ? $context["fotoPerfil"] : $this->getContext($context, "fotoPerfil")), "html", null, true);
                echo "\" class=\" img-fluid rad\" alt=\"First sample avatar image\"> ";
            } else {
                echo " ";
                if (($this->getAttribute($context["item"], "sexo", array()) == "Mujer")) {
                    // line 38
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Perfil/avatarM.jpg"), "html", null, true);
                    echo "\" class=\" img-fluid rad\" alt=\"First sample avatar image\"> ";
                } else {
                    // line 39
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Perfil/avatarH.jpg"), "html", null, true);
                    echo "\" class=\" img-fluid rad\" alt=\"First sample avatar image\"> ";
                }
                echo " ";
            }
            // line 40
            echo "
                    </div>

                    <!--Content-->
                    <div class=\"card-body container\">
               
                        <h4 class=\"mt-1\"> ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "apellidos", array()), "html", null, true);
            echo "</h4>
                        <p class=\"font-weight-bold dark-grey-text\"> ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "paginaWeb", array()), "html", null, true);
            echo "</p>
                        <!--Triggering button-->
                        <!--Content-->

                        ";
            // line 51
            if ($this->getAttribute($context["item"], "biografia", array())) {
                // line 52
                echo "                        <h4 class=\"font-weight-bold mt-4 mb-2\">
                            <strong>Biografía</strong>
                        </h4>
                        <hr>
                        <p>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "biografia", array()), "html", null, true);
                echo "
                            <br>
                        </p>
                        <hr> ";
            }
            // line 60
            echo "
                    
                        <!--Main listing-->
                        <div class=\"col-lg-12 col-12 mt-1 mx-lg-4\">

                                <!--Section: Blog v.3-->
                                <section class=\"section extra-margins pb-3 text-center text-lg-left\">
                                    <!--Grid row-->
                                    <div class=\"row text-center\">
                                        ";
            // line 69
            $this->loadTemplate("DWESLibrosBundle:Default:_libros.html.twig", "DWESLibrosBundle:Default:perfil.html.twig", 69)->display(array_merge($context, array("libros" => (isset($context["libros"]) ? $context["libros"] : $this->getContext($context, "libros")))));
            // line 70
            echo "                                        <!--/Grid row ,'fotos':fotos-->
                                        <!--Grid row-->
                                </section>
                                <!--Section: Blog v.3-->
                                </div>
                                <!--Main listing-->
                    </div>

                                 
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
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo " ";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 88,  166 => 70,  164 => 69,  153 => 60,  146 => 56,  140 => 52,  138 => 51,  131 => 47,  125 => 46,  117 => 40,  110 => 39,  105 => 38,  98 => 37,  96 => 36,  74 => 16,  54 => 15,  45 => 11,  34 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %} {% block portada %}*/
/* <!--Intro Section-->*/
/* <div class="streak streak-photo streak-md  portada " style="background-image: url('{{ asset('bundles/dweslibros/img/Fondos/Fondo3.jpg') }}');margin-top: 27px;">*/
/*     <div class="flex-center  " style="background-color: rgba(17, 27, 43, 0.7);">*/
/*         <div class="container my-4 pt-5">*/
/* */
/*             <!-- Section heading -->*/
/*             <h3 class="text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <strong>PERFIL</strong>*/
/*             </h3>*/
/*             <h6 class="text-center white-text pb-5 font-weight-bold wow fadeIn" data-wow-delay="0.2s">@{{ username }}</h6>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %} {% block contenido %} {% for item in test %}*/
/* <div class="row" style="background-color: #f4f5f6;">*/
/* */
/*     <!--Grid column-->*/
/*     <div class="col-lg-12 col-md-12 mb-12">*/
/* */
/*         <!--Rotating card-->*/
/*         <div class="card-wrapper">*/
/*             <div id="card-1" class="card-rotating effect__click text-center w-100">*/
/* */
/*                 <!--Front Side-->*/
/* */
/*                 <div class="face front">*/
/* */
/*                     <!-- Image-->*/
/*                     <div class="card-up" style=" background-image: url('https://mdbootstrap.com/img/Photos/Others/images/82.jpg') ">*/
/*                     </div>*/
/*                     <!--Avatar-->*/
/*                     <div class="container-fluid">*/
/*                     <div class="avatar mx-auto white rad">*/
/*                      */
/*                         {% if fotoPerfil %}*/
/*                         <img src="data:image/jpeg;base64,{{ fotoPerfil }}" class=" img-fluid rad" alt="First sample avatar image"> {% else %} {% if item.sexo == "Mujer" %}*/
/*                         <img src="{{ asset('bundles/dweslibros/img/Perfil/avatarM.jpg') }}" class=" img-fluid rad" alt="First sample avatar image"> {% else %}*/
/*                         <img src="{{ asset('bundles/dweslibros/img/Perfil/avatarH.jpg') }}" class=" img-fluid rad" alt="First sample avatar image"> {% endif %} {% endif %}*/
/* */
/*                     </div>*/
/* */
/*                     <!--Content-->*/
/*                     <div class="card-body container">*/
/*                */
/*                         <h4 class="mt-1"> {{item.nombre}} {{item.apellidos}}</h4>*/
/*                         <p class="font-weight-bold dark-grey-text"> {{item.paginaWeb}}</p>*/
/*                         <!--Triggering button-->*/
/*                         <!--Content-->*/
/* */
/*                         {% if item.biografia %}*/
/*                         <h4 class="font-weight-bold mt-4 mb-2">*/
/*                             <strong>Biografía</strong>*/
/*                         </h4>*/
/*                         <hr>*/
/*                         <p>{{item.biografia}}*/
/*                             <br>*/
/*                         </p>*/
/*                         <hr> {% endif %}*/
/* */
/*                     */
/*                         <!--Main listing-->*/
/*                         <div class="col-lg-12 col-12 mt-1 mx-lg-4">*/
/* */
/*                                 <!--Section: Blog v.3-->*/
/*                                 <section class="section extra-margins pb-3 text-center text-lg-left">*/
/*                                     <!--Grid row-->*/
/*                                     <div class="row text-center">*/
/*                                         {% include 'DWESLibrosBundle:Default:_libros.html.twig' with {'libros': libros} %}*/
/*                                         <!--/Grid row ,'fotos':fotos-->*/
/*                                         <!--Grid row-->*/
/*                                 </section>*/
/*                                 <!--Section: Blog v.3-->*/
/*                                 </div>*/
/*                                 <!--Main listing-->*/
/*                     </div>*/
/* */
/*                                  */
/*                     </div>*/
/*                     </div>*/
/*                     <!--Front Side-->*/
/*                 </div>*/
/*             </div>*/
/*             <!--Rotating card-->*/
/*         </div>*/
/*         <!--Grid column-->*/
/*     </div>*/
/*     {% endfor %} {% endblock %}*/
