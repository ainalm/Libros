<?php

/* DWESLibrosBundle:Default:perfil.html.twig */
class __TwigTemplate_b580a8784e9a7f4e44742f398b04cae762956aa26e4ef9b2f9910f9fb8f99229 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:perfil.html.twig", 2);
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "<div class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Fondos/fondoUserjpg.jpg"), "html", null, true);
            echo "'); margin-top: 27px;\">
    <div class=\"flex-center  \" style=\" background-color: rgba(17, 27, 43, 0.7);\">
        <div class=\"container my-5 pt-5\">

            <div class=\"row\">
                <!--Grid column-->
                <div class=\"col-lg-3 col-md-12 mb-4\">
                    <!-- Section: Categories -->
                    <section class=\"section\">
                        <!--Card image TODO: Imagen libro view overlay  -->
                                <div class=\" flex-center text-center\" alt=\"sample image\">
                                        <div class=\"avatar mx-auto white rad\">
                                                ";
            // line 18
            if ((isset($context["fotoPerfil"]) ? $context["fotoPerfil"] : $this->getContext($context, "fotoPerfil"))) {
                // line 19
                echo "                                                <img src=\"data:image/jpeg;base64,";
                echo twig_escape_filter($this->env, (isset($context["fotoPerfil"]) ? $context["fotoPerfil"] : $this->getContext($context, "fotoPerfil")), "html", null, true);
                echo "\" class=\" img-fluid rad\" alt=\"First sample avatar image\"> ";
            } else {
                echo " ";
                if (($this->getAttribute($context["item"], "sexo", array()) == "Mujer")) {
                    // line 20
                    echo "                                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Perfil/avatarM.jpg"), "html", null, true);
                    echo "\" class=\" img-fluid rad\" alt=\"First sample avatar image\"> ";
                } else {
                    // line 21
                    echo "                                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Perfil/avatarH.jpg"), "html", null, true);
                    echo "\" class=\" img-fluid rad\" alt=\"First sample avatar image\"> ";
                }
                echo " ";
            }
            // line 22
            echo "                        
                                            </div>
                                <a>
                                    <div class=\"mask rgba-white-slight waves-effect waves-light\"></div>
                                </a>
                            </div>
                       
                        <!--/.Card image-->
                    </section>
                    <!-- Section: Categories -->

                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class=\"col-lg-8 col-md-12 pb-lg-5 mb-4\">
                    <div class=\"mask rgba-white-light\">
                        <div class=\"dark-grey-text  pt-4 ml-3 pl-3\">

                            <div>
                                <div style=\"float:right\">
                                </div>
                                <span class=\"badge badge-danger\">
                                    <font style=\"vertical-align: inherit;\">
                                        <font style=\"vertical-align: inherit;\">@";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "username", array()), "html", null, true);
            echo "</font>
                                    </font>
                                </span>
                                <h2 class=\"card-title font-weight-bold pt-2  \" style=\"color:  black;\">
                                    <strong>
                                        <font style=\"vertical-align: inherit;\">
                                            <font style=\"vertical-align: inherit;\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "apellidos", array()), "html", null, true);
            echo "</font>
                                        </font>
                                    </strong>
                                </h2>

                                <p style=\" font-size: 18px;\">
                                
                                <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "paginaWeb", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "paginaWeb", array()), "html", null, true);
            echo "  </a></p>
                                <div class=\"col-12\">
                                    <p style=\"min-height: 120px;color:  black;\">
                                        <font style=\"vertical-align: inherit;\">
                                            <font style=\"vertical-align: inherit;\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "biografia", array()), "html", null, true);
            echo " </font>
                                        </font>
                                    </p>
                                </div>
                            ";
            // line 76
            echo "
                            </div>

                        </div>
                    </div>
                </div>
                <!--Grid column-->

            </div>
        </div>
    </div>
</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 91
    public function block_contenido($context, array $blocks = array())
    {
        // line 92
        echo "<div class=\"container mt-5 mb-5 text-center\">
   <h4 class=\"font-weight-bold mt-4 mb-2\">
                            <strong>Publicaciones del usuario </strong>
</h4>

<hr>
 </div>
    <div class=\"container\">
      <div class=\"col-lg-12 col-12 mt-1 mx-lg-4\">
                                <!--Section: Blog v.3-->
                                <section class=\"section extra-margins pb-3 text-center text-lg-left\">
                                    <!--Grid row-->
                                    <div class=\"row text-center\">
                                        ";
        // line 105
        $this->loadTemplate("DWESLibrosBundle:Default:_libros.html.twig", "DWESLibrosBundle:Default:perfil.html.twig", 105)->display(array_merge($context, array("libros" => (isset($context["libros"]) ? $context["libros"] : $this->getContext($context, "libros")))));
        // line 106
        echo "                                        <!--/Grid row ,'fotos':fotos-->
                                        <!--Grid row-->
                                </section>
                                <!--Section: Blog v.3-->
                                </div>
                                <!--Main listing-->
                    </div>

                    </div>
";
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
        return array (  175 => 106,  173 => 105,  158 => 92,  155 => 91,  135 => 76,  128 => 62,  119 => 58,  107 => 51,  98 => 45,  73 => 22,  66 => 21,  61 => 20,  54 => 19,  52 => 18,  36 => 6,  32 => 5,  29 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'DWESLibrosBundle::layout.html.twig' %}*/
/* */
/* {% block portada  %}*/
/* {% for item in test %}*/
/* <div class="streak streak-photo streak-md  portada " style="background-image: url('{{ asset('bundles/dweslibros/img/Fondos/fondoUserjpg.jpg') }}'); margin-top: 27px;">*/
/*     <div class="flex-center  " style=" background-color: rgba(17, 27, 43, 0.7);">*/
/*         <div class="container my-5 pt-5">*/
/* */
/*             <div class="row">*/
/*                 <!--Grid column-->*/
/*                 <div class="col-lg-3 col-md-12 mb-4">*/
/*                     <!-- Section: Categories -->*/
/*                     <section class="section">*/
/*                         <!--Card image TODO: Imagen libro view overlay  -->*/
/*                                 <div class=" flex-center text-center" alt="sample image">*/
/*                                         <div class="avatar mx-auto white rad">*/
/*                                                 {% if fotoPerfil %}*/
/*                                                 <img src="data:image/jpeg;base64,{{ fotoPerfil }}" class=" img-fluid rad" alt="First sample avatar image"> {% else %} {% if item.sexo == "Mujer" %}*/
/*                                                 <img src="{{ asset('bundles/dweslibros/img/Perfil/avatarM.jpg') }}" class=" img-fluid rad" alt="First sample avatar image"> {% else %}*/
/*                                                 <img src="{{ asset('bundles/dweslibros/img/Perfil/avatarH.jpg') }}" class=" img-fluid rad" alt="First sample avatar image"> {% endif %} {% endif %}*/
/*                         */
/*                                             </div>*/
/*                                 <a>*/
/*                                     <div class="mask rgba-white-slight waves-effect waves-light"></div>*/
/*                                 </a>*/
/*                             </div>*/
/*                        */
/*                         <!--/.Card image-->*/
/*                     </section>*/
/*                     <!-- Section: Categories -->*/
/* */
/*                 </div>*/
/*                 <!--Grid column-->*/
/*                 <!--Grid column-->*/
/*                 <div class="col-lg-8 col-md-12 pb-lg-5 mb-4">*/
/*                     <div class="mask rgba-white-light">*/
/*                         <div class="dark-grey-text  pt-4 ml-3 pl-3">*/
/* */
/*                             <div>*/
/*                                 <div style="float:right">*/
/*                                 </div>*/
/*                                 <span class="badge badge-danger">*/
/*                                     <font style="vertical-align: inherit;">*/
/*                                         <font style="vertical-align: inherit;">@{{item.username}}</font>*/
/*                                     </font>*/
/*                                 </span>*/
/*                                 <h2 class="card-title font-weight-bold pt-2  " style="color:  black;">*/
/*                                     <strong>*/
/*                                         <font style="vertical-align: inherit;">*/
/*                                             <font style="vertical-align: inherit;">{{item.nombre}} {{item.apellidos}}</font>*/
/*                                         </font>*/
/*                                     </strong>*/
/*                                 </h2>*/
/* */
/*                                 <p style=" font-size: 18px;">*/
/*                                 */
/*                                 <a href="{{item.paginaWeb}}" target="_blank">{{item.paginaWeb}}  </a></p>*/
/*                                 <div class="col-12">*/
/*                                     <p style="min-height: 120px;color:  black;">*/
/*                                         <font style="vertical-align: inherit;">*/
/*                                             <font style="vertical-align: inherit;">{{item.biografia}} </font>*/
/*                                         </font>*/
/*                                     </p>*/
/*                                 </div>*/
/*                             {#     <!-- Button  modal -->*/
/*                                 <button type="button" class="btn btn-danger btn-sm btn-rounded clearfix  d-md-inline-block waves-effect waves-light video videoff"*/
/*                                     data-video="https://www.youtube.com/embed/8uYspagia_s?rel=0&amp;showinfo=0" data-toggle="modal"*/
/*                                     data-target="#exampleModal">*/
/*                                     <i class="fab fa-youtube mr-1"></i>*/
/*                                     <font style="vertical-align: inherit;">*/
/*                                         <font style="vertical-align: inherit;"> Book Trailer*/
/*                                         </font>*/
/*                                     </font>*/
/*                                 </button> #}*/
/* */
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!--Grid column-->*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*   {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block contenido %}*/
/* <div class="container mt-5 mb-5 text-center">*/
/*    <h4 class="font-weight-bold mt-4 mb-2">*/
/*                             <strong>Publicaciones del usuario </strong>*/
/* </h4>*/
/* */
/* <hr>*/
/*  </div>*/
/*     <div class="container">*/
/*       <div class="col-lg-12 col-12 mt-1 mx-lg-4">*/
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
/*                     </div>*/
/* {% endblock %}*/
/* */
