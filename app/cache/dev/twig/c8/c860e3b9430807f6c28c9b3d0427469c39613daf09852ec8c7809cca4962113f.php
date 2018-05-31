<?php

/* DWESLibrosBundle:Default:privacidad.html.twig */
class __TwigTemplate_078ea53081bed99c6b4c23c0776f7e6c59751802a8dc198e6219ce4a57aa60d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:privacidad.html.twig", 1);
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
<div class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg');\">
    <div class=\"flex-center  \" style=\"       background-color: rgba(17, 27, 43, 0.7);\">
        <div class=\"container my-5 pt-5\">

            <!-- Section heading -->
            <h3 class=\"text-center pt-5 pb-5 white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                <strong>Privacidad</strong>
            </h3>
        </div>
    </div>
</div>
";
    }

    // line 14
    public function block_contenido($context, array $blocks = array())
    {
        // line 15
        echo "
<!-- Second column -->
<div class=\"col-lg-8 mb-4 container pt-4\">

    <!--Card-->
    <div class=\"card card-cascade narrower\">

        <!--Card image-->
        <div class=\"view gradient-card-header blue-gradient\">
            <h5 class=\"mb-0 font-weight-bold\">Eliminar mi cuenta</h5>
        </div>
        <!--/Card image-->
        <!-- Card content -->
        <form name=\"formUpdatePerfil\" action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("dwes_libros_privacidad");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
            <iframe name=\"frame\" style=\"display: none\"></iframe>
            <div class=\"card-body text-center\">
                <!-- Card content -->

                <div class=\"row\">
                    <!--First column-->
                   

                    <div class=\"col-md-12\">
                        <h1> Quiero eliminar mi cuenta BellRead.</h1>
                        <h3 class=\"mb-4\"> Antes de eliminar su cuenta BellRead, sepa esto:</h3>
                        <p class=\"text-justify ml-5 mr-5\">
                            Sus datos de usuario se eliminarán automáticamente cuando elimine su cuenta. Esto incluye su perfil, historias y comentarios.
                            No conservaremos ninguno de sus datos, y ni usted ni TeamU podrán acceder a él una vez que elimine
                            su cuenta.
                            <strong> Si desea mantener el acceso a cualquiera de su contenido, debe guardarlo fuera de GetUnderlined.</strong>
                        </p>
                    </div>
                </div>

                <!--/.Third row-->
                <!-- Fourth row -->
                <div class=\"row\">
                    <div class=\"col-md-12 text-center my-4\">
                        <div class=\"waves-input-wrapper waves-effect waves-light\">
                            <input id=\"updatePass\" type=\"submit\" name=\"updatePass\" value=\"ELIMINAR CUENTA\" class=\"guardarScroll btn btn-danger waves-effect waves-light\">
                        </div>
                    </div>
                </div>
                <!-- /.Fourth row -->
            </div>
        </form>
        <!-- Edit Form -->
    </div>
    <!-- /.Card content -->

</div>
<!--/.Card-->
</div>
<!-- /.Second column -->




";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:privacidad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 28,  50 => 15,  47 => 14,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %} {% block portada %}*/
/* <!--Intro Section-->*/
/* <div class="streak streak-photo streak-md  portada " style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg');">*/
/*     <div class="flex-center  " style="       background-color: rgba(17, 27, 43, 0.7);">*/
/*         <div class="container my-5 pt-5">*/
/* */
/*             <!-- Section heading -->*/
/*             <h3 class="text-center pt-5 pb-5 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                 <strong>Privacidad</strong>*/
/*             </h3>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %} {% block contenido %}*/
/* */
/* <!-- Second column -->*/
/* <div class="col-lg-8 mb-4 container pt-4">*/
/* */
/*     <!--Card-->*/
/*     <div class="card card-cascade narrower">*/
/* */
/*         <!--Card image-->*/
/*         <div class="view gradient-card-header blue-gradient">*/
/*             <h5 class="mb-0 font-weight-bold">Eliminar mi cuenta</h5>*/
/*         </div>*/
/*         <!--/Card image-->*/
/*         <!-- Card content -->*/
/*         <form name="formUpdatePerfil" action="{{ path('dwes_libros_privacidad') }}" method="POST" enctype="multipart/form-data">*/
/*             <iframe name="frame" style="display: none"></iframe>*/
/*             <div class="card-body text-center">*/
/*                 <!-- Card content -->*/
/* */
/*                 <div class="row">*/
/*                     <!--First column-->*/
/*                    */
/* */
/*                     <div class="col-md-12">*/
/*                         <h1> Quiero eliminar mi cuenta BellRead.</h1>*/
/*                         <h3 class="mb-4"> Antes de eliminar su cuenta BellRead, sepa esto:</h3>*/
/*                         <p class="text-justify ml-5 mr-5">*/
/*                             Sus datos de usuario se eliminarán automáticamente cuando elimine su cuenta. Esto incluye su perfil, historias y comentarios.*/
/*                             No conservaremos ninguno de sus datos, y ni usted ni TeamU podrán acceder a él una vez que elimine*/
/*                             su cuenta.*/
/*                             <strong> Si desea mantener el acceso a cualquiera de su contenido, debe guardarlo fuera de GetUnderlined.</strong>*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <!--/.Third row-->*/
/*                 <!-- Fourth row -->*/
/*                 <div class="row">*/
/*                     <div class="col-md-12 text-center my-4">*/
/*                         <div class="waves-input-wrapper waves-effect waves-light">*/
/*                             <input id="updatePass" type="submit" name="updatePass" value="ELIMINAR CUENTA" class="guardarScroll btn btn-danger waves-effect waves-light">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /.Fourth row -->*/
/*             </div>*/
/*         </form>*/
/*         <!-- Edit Form -->*/
/*     </div>*/
/*     <!-- /.Card content -->*/
/* */
/* </div>*/
/* <!--/.Card-->*/
/* </div>*/
/* <!-- /.Second column -->*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
