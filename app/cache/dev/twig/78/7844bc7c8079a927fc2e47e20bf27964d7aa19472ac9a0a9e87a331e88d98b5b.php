<?php

/* DWESLibrosBundle:Default:crearperfil.html.twig */
class __TwigTemplate_8b82060c7661dc1cf0ae1a07141e00ec41d814be1b1a90367e5f939fe4c98d7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:crearperfil.html.twig", 1);
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
   <div  class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg');\">
            <div class=\"flex-center  \" style=\"       background-color: rgba(17, 27, 43, 0.7);\">
                <div class=\"container my-5 pt-5\">

                    <!-- Section heading -->
                    <h3 class=\"text-center pt-5 pb-5 white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                        <strong>Mis Datos</strong>
                    </h3>
                    

                </div>
            </div>
        </div> 
            

";
    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        echo " 
        
 <!-- Second column -->
                    <div class=\"col-lg-8 mb-4 container pt-4\">

                        <!--Card-->
                        <div class=\"card card-cascade narrower\">

                            <!--Card image-->
                            <div class=\"view gradient-card-header blue-gradient\">
                                <h5 class=\"mb-0 font-weight-bold\">Mi perfil</h5>
                            </div>
                            <!--/Card image-->
     <!-- Card content -->
            <form name=\"formUpdatePerfil\" action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("dwes_libros_crearperfil");
        echo "\" method=\"POST\">
            
                            <div class=\"card-body text-center\">
                                <img src=\"https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg\" alt=\"User Photo\" class=\"z-depth-1 mb-3 mx-auto\">

                                <p class=\"text-muted\"><small>Sube una nueva foto de perfil</small></p>
                                <div class=\"row flex-center\">
                                    <label for=\"file-upload\" class=\"btn btn-info btn-rounded btn-sm waves-effect waves-light\"> Subir Foto</label><br><input name=\"fotoSubida\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["fotoSubida"]) ? $context["fotoSubida"] : $this->getContext($context, "fotoSubida")), "html", null, true);
        echo "\" id=\"file-upload\" type=\"file\"/>
                                    <button class=\"btn btn-danger btn-rounded btn-sm waves-effect waves-light\">Borrar</button>
                                </div>
                            </div>
                            <!-- /.Card content -->
                            <!-- Card content -->
                            <div class=\"card-body text-center\">
                                <!-- Edit Form -->
                                <form name=\"formUpdatePerfil\" action=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("dwes_libros_crearperfil");
        echo "\" method=\"POST\">
                                    <!--First row-->
                                    <div class=\"row\">
                                        <!--First column-->
                                       <div class=\"col-md-6\">
                                            <div class=\"md-form\">
                                                <input type=\"text\" id=\"form81\" class=\"form-control validate\"  name=\"nombre\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "\">
                                                <label for=\"form81\">Nombre </label>
                                            </div>
                                        </div>
                                        <!--Second column-->
                                        <div class=\"col-md-6\">
                                            <div class=\"md-form\">
                                                <input type=\"text\" id=\"form2\" class=\"form-control validate\" name=\"apellidos\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["apellidos"]) ? $context["apellidos"] : $this->getContext($context, "apellidos")), "html", null, true);
        echo "\">
                                                <label for=\"form2\" >Apellidos</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.First row-->
                                   
                                    
                                    <!--Second row-->
                                    <div class=\"row\">
                                        <!--First column-->
                                        <div class=\"col-md-6\">
                                            <div class=\"md-form\">
                                                <input type=\"text\" id=\"form76\" class=\"form-control validate\" name=\"fnacimiento\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["fnacimiento"]) ? $context["fnacimiento"] : $this->getContext($context, "fnacimiento")), "html", null, true);
        echo "\"> 
                                                <label for=\"form76\" class=\"\">Fecha de nacimiento</label>
                                            </div>
                                        </div>
                                        <!--Second column-->
                                        <div class=\"col-md-6\">
                                            <div class=\"md-form\">
                                                <input type=\"text\" id=\"form77\" class=\"form-control validate\"  name=\"pweb\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["pweb"]) ? $context["pweb"] : $this->getContext($context, "pweb")), "html", null, true);
        echo "\">
                                                <label for=\"form77\" class=\"\">Página web</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Second row-->
                                    <!--Third row-->
                                    <div class=\"row\">
                                        <!--First column-->
                                        <div class=\"col-md-12\">
                                            <div class=\"md-form\">
                                                <textarea type=\"text\" id=\"form78\" class=\"md-textarea form-control\" rows=\"3\"  name=\"biografia\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["biografia"]) ? $context["biografia"] : $this->getContext($context, "biografia")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["biografia"]) ? $context["biografia"] : $this->getContext($context, "biografia")), "html", null, true);
        echo "</textarea>
                                                <label for=\"form78\" >Sobre mí:</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Third row-->
                                    <!-- Fourth row -->
                                    <div class=\"row\">
                                        <div class=\"col-md-12 text-center my-4\">
                                            <div class=\"waves-input-wrapper waves-effect waves-light\"><input  id=\"updatePerfil\" type=\"submit\" name=\"updatePerfil\" value=\"Actualizar\" class=\"btn btn-pink btn-block btn-rounded z-depth-1 waves-effect waves-light\"></div>
                                        </div>
                                    </div>
                                    <!-- /.Fourth row -->
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
        return "DWESLibrosBundle:Default:crearperfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 96,  136 => 85,  126 => 78,  110 => 65,  100 => 58,  91 => 52,  80 => 44,  70 => 37,  52 => 23,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block portada %}*/
/*     <!--Intro Section-->*/
/*    <div  class="streak streak-photo streak-md  portada " style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg');">*/
/*             <div class="flex-center  " style="       background-color: rgba(17, 27, 43, 0.7);">*/
/*                 <div class="container my-5 pt-5">*/
/* */
/*                     <!-- Section heading -->*/
/*                     <h3 class="text-center pt-5 pb-5 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                         <strong>Mis Datos</strong>*/
/*                     </h3>*/
/*                     */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div> */
/*             */
/* */
/* {% endblock %}*/
/* */
/* {% block contenido %} */
/*         */
/*  <!-- Second column -->*/
/*                     <div class="col-lg-8 mb-4 container pt-4">*/
/* */
/*                         <!--Card-->*/
/*                         <div class="card card-cascade narrower">*/
/* */
/*                             <!--Card image-->*/
/*                             <div class="view gradient-card-header blue-gradient">*/
/*                                 <h5 class="mb-0 font-weight-bold">Mi perfil</h5>*/
/*                             </div>*/
/*                             <!--/Card image-->*/
/*      <!-- Card content -->*/
/*             <form name="formUpdatePerfil" action="{{ path('dwes_libros_crearperfil') }}" method="POST">*/
/*             */
/*                             <div class="card-body text-center">*/
/*                                 <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" alt="User Photo" class="z-depth-1 mb-3 mx-auto">*/
/* */
/*                                 <p class="text-muted"><small>Sube una nueva foto de perfil</small></p>*/
/*                                 <div class="row flex-center">*/
/*                                     <label for="file-upload" class="btn btn-info btn-rounded btn-sm waves-effect waves-light"> Subir Foto</label><br><input name="fotoSubida" value="{{fotoSubida}}" id="file-upload" type="file"/>*/
/*                                     <button class="btn btn-danger btn-rounded btn-sm waves-effect waves-light">Borrar</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!-- /.Card content -->*/
/*                             <!-- Card content -->*/
/*                             <div class="card-body text-center">*/
/*                                 <!-- Edit Form -->*/
/*                                 <form name="formUpdatePerfil" action="{{ path('dwes_libros_crearperfil') }}" method="POST">*/
/*                                     <!--First row-->*/
/*                                     <div class="row">*/
/*                                         <!--First column-->*/
/*                                        <div class="col-md-6">*/
/*                                             <div class="md-form">*/
/*                                                 <input type="text" id="form81" class="form-control validate"  name="nombre" value="{{nombre}}">*/
/*                                                 <label for="form81">Nombre </label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <!--Second column-->*/
/*                                         <div class="col-md-6">*/
/*                                             <div class="md-form">*/
/*                                                 <input type="text" id="form2" class="form-control validate" name="apellidos" value="{{apellidos}}">*/
/*                                                 <label for="form2" >Apellidos</label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <!--/.First row-->*/
/*                                    */
/*                                     */
/*                                     <!--Second row-->*/
/*                                     <div class="row">*/
/*                                         <!--First column-->*/
/*                                         <div class="col-md-6">*/
/*                                             <div class="md-form">*/
/*                                                 <input type="text" id="form76" class="form-control validate" name="fnacimiento" value="{{fnacimiento}}"> */
/*                                                 <label for="form76" class="">Fecha de nacimiento</label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <!--Second column-->*/
/*                                         <div class="col-md-6">*/
/*                                             <div class="md-form">*/
/*                                                 <input type="text" id="form77" class="form-control validate"  name="pweb" value="{{pweb}}">*/
/*                                                 <label for="form77" class="">Página web</label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <!--/.Second row-->*/
/*                                     <!--Third row-->*/
/*                                     <div class="row">*/
/*                                         <!--First column-->*/
/*                                         <div class="col-md-12">*/
/*                                             <div class="md-form">*/
/*                                                 <textarea type="text" id="form78" class="md-textarea form-control" rows="3"  name="biografia" value="{{biografia}}">{{biografia}}</textarea>*/
/*                                                 <label for="form78" >Sobre mí:</label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <!--/.Third row-->*/
/*                                     <!-- Fourth row -->*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-12 text-center my-4">*/
/*                                             <div class="waves-input-wrapper waves-effect waves-light"><input  id="updatePerfil" type="submit" name="updatePerfil" value="Actualizar" class="btn btn-pink btn-block btn-rounded z-depth-1 waves-effect waves-light"></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <!-- /.Fourth row -->*/
/*                                 </form>*/
/*                                 <!-- Edit Form -->*/
/*                             </div>*/
/*                             <!-- /.Card content -->*/
/* */
/*                         </div>*/
/*                         <!--/.Card-->*/
/*                     </div>*/
/*                     <!-- /.Second column -->*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
