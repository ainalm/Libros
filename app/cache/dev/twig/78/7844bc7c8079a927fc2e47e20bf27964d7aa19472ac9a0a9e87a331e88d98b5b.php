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

    // line 21
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
            <form name=\"formUpdatePerfil\"  action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("dwes_libros_crearperfil");
        echo "\"  method=\"POST\" enctype=\"multipart/form-data\" >
              <iframe name=\"frame\" style=\"display: none\"></iframe> 
                            <div class=\"card-body text-center\">
                            ";
        // line 38
        if ((isset($context["fotoPerfil"]) ? $context["fotoPerfil"] : $this->getContext($context, "fotoPerfil"))) {
            // line 39
            echo "                         <img src=\"data:image/jpeg;base64,";
            echo twig_escape_filter($this->env, (isset($context["fotoPerfil"]) ? $context["fotoPerfil"] : $this->getContext($context, "fotoPerfil")), "html", null, true);
            echo "\" alt=\"User Photo\" class=\"z-depth-1 mb-3 mx-auto\" id=\"camb\" style=\"
                max-width: 100px;
                max-height: 100px;\"> 
                        ";
        } else {
            // line 43
            echo "
                                <img src=\"http://www.iconarchive.com/download/i86027/graphicloads/100-flat-2/arrow-upload.ico\" alt=\"User Photo\" class=\"z-depth-1 mb-3 mx-auto\" id=\"camb\" style=\"
                            max-width: 100px;
                            max-height: 100px;
                        \">
                        ";
        }
        // line 49
        echo " 
                                <p class=\"text-muted\"><small>Sube una nueva foto de perfil</small></p>
                                <div class=\"row flex-center\">
                                    <label for=\"file-upload\" class=\"btn btn-info btn-rounded btn-sm waves-effect waves-light\"> Subir Foto</label><br><input name=\"file_upload\"  id=\"file-upload\" type=\"file\" onchange=\"document.getElementById('camb').src = window.URL.createObjectURL(this.files[0])\"/>
                             <label for=\"borrarImg\" class=\"btn btn-danger btn-rounded btn-sm waves-effect waves-light borrarImgL\"> Borrar</label><br>
                                </div>
                            </div>
                            <!-- /.Card content -->
                            <!-- Card content -->
                            <div class=\"card-body text-center\">
                                <!-- Edit Form -->
                                
                                    <!--First row-->
                                    <div class=\"row\">
                                        <!--First column-->
                                       <div class=\"col-md-6\">
                                            <div class=\"md-form\"> 
                                                <input type=\"text\" id=\"form81\" class=\"form-control validate\"  name=\"nombre\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "\">
                                                <label for=\"form81\">Nombre </label>
                                            </div>
                                        </div>
                                        <!--Second column-->
                                        <div class=\"col-md-6\">
                                            <div class=\"md-form\">
                                                <input type=\"text\" id=\"form2\" class=\"form-control validate\" name=\"apellidos\" value=\"";
        // line 73
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
        // line 86
        echo twig_escape_filter($this->env, (isset($context["fnacimiento"]) ? $context["fnacimiento"] : $this->getContext($context, "fnacimiento")), "html", null, true);
        echo "\"> 
                                                <label for=\"form76\" class=\"\">Fecha de nacimiento</label>
                                            </div>
                                        </div>
                                        <!--Second column-->
                                        <div class=\"col-md-6\">
                                            <div class=\"md-form\">
                                                <input type=\"text\" id=\"form77\" class=\"form-control validate\"  name=\"pweb\" value=\"";
        // line 93
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
        // line 104
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
        return array (  161 => 104,  147 => 93,  137 => 86,  121 => 73,  111 => 66,  92 => 49,  84 => 43,  76 => 39,  74 => 38,  68 => 35,  50 => 21,  32 => 5,  29 => 4,  11 => 1,);
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
/*             <form name="formUpdatePerfil"  action="{{ path('dwes_libros_crearperfil') }}"  method="POST" enctype="multipart/form-data" >*/
/*               <iframe name="frame" style="display: none"></iframe> */
/*                             <div class="card-body text-center">*/
/*                             {% if fotoPerfil %}*/
/*                          <img src="data:image/jpeg;base64,{{ fotoPerfil }}" alt="User Photo" class="z-depth-1 mb-3 mx-auto" id="camb" style="*/
/*                 max-width: 100px;*/
/*                 max-height: 100px;"> */
/*                         {% else %}*/
/* */
/*                                 <img src="http://www.iconarchive.com/download/i86027/graphicloads/100-flat-2/arrow-upload.ico" alt="User Photo" class="z-depth-1 mb-3 mx-auto" id="camb" style="*/
/*                             max-width: 100px;*/
/*                             max-height: 100px;*/
/*                         ">*/
/*                         {% endif %}*/
/*  */
/*                                 <p class="text-muted"><small>Sube una nueva foto de perfil</small></p>*/
/*                                 <div class="row flex-center">*/
/*                                     <label for="file-upload" class="btn btn-info btn-rounded btn-sm waves-effect waves-light"> Subir Foto</label><br><input name="file_upload"  id="file-upload" type="file" onchange="document.getElementById('camb').src = window.URL.createObjectURL(this.files[0])"/>*/
/*                              <label for="borrarImg" class="btn btn-danger btn-rounded btn-sm waves-effect waves-light borrarImgL"> Borrar</label><br>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!-- /.Card content -->*/
/*                             <!-- Card content -->*/
/*                             <div class="card-body text-center">*/
/*                                 <!-- Edit Form -->*/
/*                                 */
/*                                     <!--First row-->*/
/*                                     <div class="row">*/
/*                                         <!--First column-->*/
/*                                        <div class="col-md-6">*/
/*                                             <div class="md-form"> */
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
