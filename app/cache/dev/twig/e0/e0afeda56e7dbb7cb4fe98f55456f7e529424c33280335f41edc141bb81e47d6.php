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
                    <h3 class=\"text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                        <strong>PERFIL</strong>
                    </h3>
                    <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">@";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h6>
                    

                </div>
            </div>
        </div> 
            




";
    }

    // line 27
    public function block_contenido($context, array $blocks = array())
    {
        echo " 
";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 29
            echo "     <div class=\"row\" style=\"background-color: #f4f5f6;\">

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
                        <div class=\"avatar mx-auto white rad\" >
                         ";
            // line 50
            if ((isset($context["fotoPerfil"]) ? $context["fotoPerfil"] : $this->getContext($context, "fotoPerfil"))) {
                // line 51
                echo "                          <img src=\"data:image/jpeg;base64,";
                echo twig_escape_filter($this->env, (isset($context["fotoPerfil"]) ? $context["fotoPerfil"] : $this->getContext($context, "fotoPerfil")), "html", null, true);
                echo "\" class=\" img-fluid rad\" alt=\"First sample avatar image\">
\t                    
                        ";
            } else {
                // line 54
                echo "                             ";
                if (($this->getAttribute($context["item"], "sexo", array()) == "Mujer")) {
                    // line 55
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Perfil/avatarM.jpg"), "html", null, true);
                    echo "\" class=\" img-fluid rad\" alt=\"First sample avatar image\">
                             ";
                } else {
                    // line 57
                    echo "                               <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Perfil/avatarH.jpg"), "html", null, true);
                    echo "\" class=\" img-fluid rad\" alt=\"First sample avatar image\">
                              ";
                }
                // line 59
                echo "                        ";
            }
            // line 60
            echo "                       
                        </div>

                        <!--Content-->
                        <div class=\"card-body container\">
                            <h4 class=\"mt-1\"> ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "apellidos", array()), "html", null, true);
            echo "</h4>
                            <p class=\"font-weight-bold dark-grey-text\"> ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "paginaWeb", array()), "html", null, true);
            echo "</p>
                            <!--Triggering button-->
                               <!--Content-->
                        <h4 class=\"font-weight-bold mt-4 mb-2\">
                            <strong>Biografía</strong>
                        </h4>
                        <hr>
                        <p>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "biografia", array()), "html", null, true);
            echo " 
                       <br> 
                       
                        </p>
                        <hr>
                     

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
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  144 => 73,  134 => 66,  128 => 65,  121 => 60,  118 => 59,  112 => 57,  106 => 55,  103 => 54,  96 => 51,  94 => 50,  71 => 29,  67 => 28,  62 => 27,  46 => 14,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
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
/*                     <h3 class="text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                         <strong>PERFIL</strong>*/
/*                     </h3>*/
/*                     <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">@{{ app.user.username }}</h6>*/
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
/* {% block contenido %} */
/* {% for item in test %}*/
/*      <div class="row" style="background-color: #f4f5f6;">*/
/* */
/*         <!--Grid column-->*/
/*         <div class="col-lg-12 col-md-12 mb-12">*/
/* */
/*             <!--Rotating card-->*/
/*             <div class="card-wrapper">*/
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
/*                         <div class="avatar mx-auto white rad" >*/
/*                          {% if fotoPerfil %}*/
/*                           <img src="data:image/jpeg;base64,{{ fotoPerfil }}" class=" img-fluid rad" alt="First sample avatar image">*/
/* 	                    */
/*                         {% else %}*/
/*                              {% if item.sexo == "Mujer" %}*/
/*                             <img src="{{ asset('bundles/dweslibros/img/Perfil/avatarM.jpg') }}" class=" img-fluid rad" alt="First sample avatar image">*/
/*                              {% else %}*/
/*                                <img src="{{ asset('bundles/dweslibros/img/Perfil/avatarH.jpg') }}" class=" img-fluid rad" alt="First sample avatar image">*/
/*                               {% endif %}*/
/*                         {% endif %}*/
/*                        */
/*                         </div>*/
/* */
/*                         <!--Content-->*/
/*                         <div class="card-body container">*/
/*                             <h4 class="mt-1"> {{item.nombre}}  {{item.apellidos}}</h4>*/
/*                             <p class="font-weight-bold dark-grey-text"> {{item.paginaWeb}}</p>*/
/*                             <!--Triggering button-->*/
/*                                <!--Content-->*/
/*                         <h4 class="font-weight-bold mt-4 mb-2">*/
/*                             <strong>Biografía</strong>*/
/*                         </h4>*/
/*                         <hr>*/
/*                         <p>{{item.biografia}} */
/*                        <br> */
/*                        */
/*                         </p>*/
/*                         <hr>*/
/*                      */
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
/*      {% endfor %}*/
/* {% endblock %}*/
/* */
