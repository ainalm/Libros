<?php

/* DWESLibrosBundle:Default:baja.html.twig */
class __TwigTemplate_1a27cd0e388d2fd66604b8cb1163636acb1fce241dce0cfcd0322ca1b3d2ede0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:baja.html.twig", 1);
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
              CUENTAS DE USUARIO
            </h1>
                    ";
        } else {
            // line 18
            echo "                 <h6 class=\"white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                <strong>AVISOS</strong> 
            </h6>
                 
        
                ";
        }
        // line 24
        echo "                 
            
          
           

              

        </div>
    </div>
</div> 
";
    }

    // line 36
    public function block_contenido($context, array $blocks = array())
    {
        echo " 

";
        // line 43
        echo "  <div class=\"container mt-4 mb-4\">
                    <!--Main listing-->
                    <div >

                        <!--Section: Blog v.3-->
                        <section class=\"section extra-margins pb-3 text-center text-lg-left\">
                           <!-- Nav tabs -->
<ul class=\"nav nav-tabs nav-justified view gradient-card-header blue-gradient\">
    <li class=\"nav-item\">
        <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#panel1\" role=\"tab\">Cuentas desactivadas</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" data-toggle=\"tab\" href=\"#panel2\" role=\"tab\">Dar de alta</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" data-toggle=\"tab\" href=\"#panel3\" role=\"tab\">Dar de baja</a>
    </li>
</ul>
<!-- Tab panels -->
<div class=\"tab-content card\">
    <!--Panel 1-->
    <div class=\"tab-pane fade in show active\" id=\"panel1\" role=\"tabpanel\">
        <br>
        
          <table id=\"capitulos2\" class=\"mdl-data-table capitulos\" style=\"width:100%\">
                    <thead>
                        <tr>
                            <th>Nick</th>
                            <th>Nombre</th>
                             <th>Apellidos</th>
                             <th>Perfil</th>
                        </tr>
                    </thead>
                    <tbody>
                      ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["baneados"]) ? $context["baneados"] : $this->getContext($context, "baneados")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 78
            echo "                        <tr>
                            <td class=\"tdl\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "username", array()), "html", null, true);
            echo "</td>
                            <td class=\"tdl\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td class=\"tdl\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "apellidos", array()), "html", null, true);
            echo "</td>
                            <td class=\"tdl\">    <a target=\"_blank\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_perfil", array("username" => $this->getAttribute($context["item"], "username", array()))), "html", null, true);
            echo "\">
                                Ver perfil
                            </a></td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo " 
                    </tbody>
                </table>
    </div>
    <!--/.Panel 1-->
    <!--Panel 2-->
    <div class=\"tab-pane fade\" id=\"panel2\" role=\"tabpanel\">
        <br>
        <form name=\"formNuevoCapitulo\" action=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("dwes_libros_darAlta");
        echo "\" method=\"POST\"
                        enctype=\"multipart/form-data\">
                        <div class=\"md-form\">
                            <input type=\"text\" id=\"titulohistoria\" class=\"form-control valI\" name=\"usuario\" value=\"\">
                            <label for=\"titulohistoria\" class=\"Ltitulohistoria valL\">Nombre del usuario</label>

                            <button type=\"submit\" class=\"btn pink-gradient btn-rounded waves-effect waves-light\" id=\"baja\">Activar cuenta</button>
                        

                        </div>
                        </form>
    </div>
    <!--/.Panel 2--> 
    <!--Panel 3-->
    <div class=\"tab-pane fade\" id=\"panel3\" role=\"tabpanel\">
        <br>
    
<form name=\"formNuevoCapitulo\" action=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("dwes_libros_darBaja");
        echo "\" method=\"POST\"
        enctype=\"multipart/form-data\">
        <div class=\"md-form\">
            <input type=\"text\" id=\"titulohistoria\" class=\"form-control valI\" name=\"usuario\" value=\"\">
            <label for=\"titulohistoria\" class=\"Ltitulohistoria valL\">Nombre del usuario</label>

            <button type=\"submit\" class=\"btn pink-gradient btn-rounded waves-effect waves-light\" id=\"baja\">Suspender cuenta</button>
        

        </div>
        </form>
 
    </div>
    <!--/.Panel 3-->
</div>             

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
        return "DWESLibrosBundle:Default:baja.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 111,  159 => 94,  149 => 86,  138 => 82,  134 => 81,  130 => 80,  126 => 79,  123 => 78,  119 => 77,  83 => 43,  77 => 36,  63 => 24,  55 => 18,  44 => 10,  35 => 4,  31 => 2,  11 => 1,);
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
/*               CUENTAS DE USUARIO*/
/*             </h1>*/
/*                     {% else %}*/
/*                  <h6 class="white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <strong>AVISOS</strong> */
/*             </h6>*/
/*                  */
/*         */
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
/*   <div class="container mt-4 mb-4">*/
/*                     <!--Main listing-->*/
/*                     <div >*/
/* */
/*                         <!--Section: Blog v.3-->*/
/*                         <section class="section extra-margins pb-3 text-center text-lg-left">*/
/*                            <!-- Nav tabs -->*/
/* <ul class="nav nav-tabs nav-justified view gradient-card-header blue-gradient">*/
/*     <li class="nav-item">*/
/*         <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Cuentas desactivadas</a>*/
/*     </li>*/
/*     <li class="nav-item">*/
/*         <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Dar de alta</a>*/
/*     </li>*/
/*     <li class="nav-item">*/
/*         <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Dar de baja</a>*/
/*     </li>*/
/* </ul>*/
/* <!-- Tab panels -->*/
/* <div class="tab-content card">*/
/*     <!--Panel 1-->*/
/*     <div class="tab-pane fade in show active" id="panel1" role="tabpanel">*/
/*         <br>*/
/*         */
/*           <table id="capitulos2" class="mdl-data-table capitulos" style="width:100%">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>Nick</th>*/
/*                             <th>Nombre</th>*/
/*                              <th>Apellidos</th>*/
/*                              <th>Perfil</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                       {% for item in baneados %}*/
/*                         <tr>*/
/*                             <td class="tdl">{{item.username}}</td>*/
/*                             <td class="tdl">{{item.nombre}}</td>*/
/*                             <td class="tdl">{{item.apellidos}}</td>*/
/*                             <td class="tdl">    <a target="_blank" href="{{ path('dwes_libros_perfil', {'username':item.username}) }}">*/
/*                                 Ver perfil*/
/*                             </a></td>*/
/*                         </tr>*/
/*                         {% endfor %} */
/*                     </tbody>*/
/*                 </table>*/
/*     </div>*/
/*     <!--/.Panel 1-->*/
/*     <!--Panel 2-->*/
/*     <div class="tab-pane fade" id="panel2" role="tabpanel">*/
/*         <br>*/
/*         <form name="formNuevoCapitulo" action="{{ path('dwes_libros_darAlta') }}" method="POST"*/
/*                         enctype="multipart/form-data">*/
/*                         <div class="md-form">*/
/*                             <input type="text" id="titulohistoria" class="form-control valI" name="usuario" value="">*/
/*                             <label for="titulohistoria" class="Ltitulohistoria valL">Nombre del usuario</label>*/
/* */
/*                             <button type="submit" class="btn pink-gradient btn-rounded waves-effect waves-light" id="baja">Activar cuenta</button>*/
/*                         */
/* */
/*                         </div>*/
/*                         </form>*/
/*     </div>*/
/*     <!--/.Panel 2--> */
/*     <!--Panel 3-->*/
/*     <div class="tab-pane fade" id="panel3" role="tabpanel">*/
/*         <br>*/
/*     */
/* <form name="formNuevoCapitulo" action="{{ path('dwes_libros_darBaja') }}" method="POST"*/
/*         enctype="multipart/form-data">*/
/*         <div class="md-form">*/
/*             <input type="text" id="titulohistoria" class="form-control valI" name="usuario" value="">*/
/*             <label for="titulohistoria" class="Ltitulohistoria valL">Nombre del usuario</label>*/
/* */
/*             <button type="submit" class="btn pink-gradient btn-rounded waves-effect waves-light" id="baja">Suspender cuenta</button>*/
/*         */
/* */
/*         </div>*/
/*         </form>*/
/*  */
/*     </div>*/
/*     <!--/.Panel 3-->*/
/* </div>             */
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
