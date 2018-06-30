<?php

/* DWESLibrosBundle:Default:notificar.html.twig */
class __TwigTemplate_f9b58bf7b0ae96669813a1c8592e54d55bcf148896f46e2e36819c50ede01f45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:notificar.html.twig", 1);
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

             <h6 class=\"white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                <strong>NOTIFICACIONES</strong> 
            </h6>
                   <h1 class=\"text-center white-text pb-4  wow fadeIn\" data-wow-delay=\"0.2s\">
             REVISE SUS PUBLICACIONES
            </h1>
            <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">Nos veremos obligados a retirarlas si no las rectifica respetando nuestras
             <a target=\"_blank\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("dwes_libros_normas");
        echo "\"> pautas. </a> 
            </h6>

        </div>
    </div>
</div> 



";
    }

    // line 24
    public function block_contenido($context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"container\">
<div>

";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["noti"]) ? $context["noti"] : $this->getContext($context, "noti")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 29
            echo "    <!--Panel-->
    <div class=\"card  mb-2 mt-2\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">
            ";
            // line 33
            if (($this->getAttribute($context["item"], "tipoAviso", array()) == "Libro")) {
                // line 34
                echo "           Aviso sobre su publicación : <a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dwes_libros_perfilhistoria", array("idLibro" => $this->getAttribute($context["item"], "idLibro", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titulo", array()), "html", null, true);
                echo "</a>
            ";
            } elseif (($this->getAttribute(            // line 35
$context["item"], "tipoAviso", array()) == "Cuenta")) {
                // line 36
                echo "            Aviso sobre su cuenta
            ";
            }
            // line 38
            echo "            </h5>
            <p class=\"card-text\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "motivoOU", array()), "html", null, true);
            echo "</p>
        </div>
        <div class=\"card-footer\">
            <small class=\"text-muted\">Última actualización : ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fechaOU", array()), "html", null, true);
            echo "</small>
        </div>
    </div>
    <!--/.Panel-->
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "  
</div>
";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:notificar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 46,  105 => 42,  99 => 39,  96 => 38,  92 => 36,  90 => 35,  83 => 34,  81 => 33,  75 => 29,  71 => 28,  66 => 25,  63 => 24,  49 => 15,  35 => 4,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %} {% block portada %}*/
/* <!--Intro Section-->*/
/* <!--Intro Section-->*/
/* <div class="streak streak-photo streak-md  portada " style="background-image: url('{{ asset('bundles/dweslibros/img/Fondos/Fondo3.jpg') }}'); margin-top: 27px;">*/
/*     <div class="flex-center  " style="       background-color: rgba(17, 27, 43, 0.7);">*/
/*         <div class="container my-5 pt-5">*/
/* */
/*              <h6 class="white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <strong>NOTIFICACIONES</strong> */
/*             </h6>*/
/*                    <h1 class="text-center white-text pb-4  wow fadeIn" data-wow-delay="0.2s">*/
/*              REVISE SUS PUBLICACIONES*/
/*             </h1>*/
/*             <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">Nos veremos obligados a retirarlas si no las rectifica respetando nuestras*/
/*              <a target="_blank" href="{{path('dwes_libros_normas')}}"> pautas. </a> */
/*             </h6>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div> */
/* */
/* */
/* */
/* {% endblock %} {% block contenido %}*/
/* <div class="container">*/
/* <div>*/
/* */
/* {% for item in noti %}*/
/*     <!--Panel-->*/
/*     <div class="card  mb-2 mt-2">*/
/*         <div class="card-body">*/
/*             <h5 class="card-title">*/
/*             {% if item.tipoAviso =="Libro" %}*/
/*            Aviso sobre su publicación : <a  href="{{ path('dwes_libros_perfilhistoria', {'idLibro' : item.idLibro}) }}" >{{item.titulo}}</a>*/
/*             {% elseif item.tipoAviso =="Cuenta" %}*/
/*             Aviso sobre su cuenta*/
/*             {% endif %}*/
/*             </h5>*/
/*             <p class="card-text">{{item.motivoOU}}</p>*/
/*         </div>*/
/*         <div class="card-footer">*/
/*             <small class="text-muted">Última actualización : {{item.fechaOU}}</small>*/
/*         </div>*/
/*     </div>*/
/*     <!--/.Panel-->*/
/*   {% endfor %}  */
/* </div>*/
/* {% endblock %}*/
