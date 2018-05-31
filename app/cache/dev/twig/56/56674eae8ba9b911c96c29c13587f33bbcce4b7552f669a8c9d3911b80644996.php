<?php

/* DWESLibrosBundle:Default:password.html.twig */
class __TwigTemplate_bf84deb28595101c7f862ab5ad38b3439bc411af42074d2fcc1b8efa1c10e19a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:password.html.twig", 1);
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
                        <strong>Contraseña</strong>
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
                                <h5 class=\"mb-0 font-weight-bold\">Actualizar contraseña</h5>
                            </div>
                            <!--/Card image-->
     <!-- Card content --> 
            <form name=\"formUpdatePerfil\"  action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("dwes_libros_password");
        echo "\"  method=\"POST\" enctype=\"multipart/form-data\" >
              <iframe name=\"frame\" style=\"display: none\"></iframe> 
                            <div class=\"card-body text-center\">
                            <!-- Card content -->
                            <div class=\"card-body text-center\"> 
                                <!-- Edit Form -->
                                
                                    <!--First row-->
                                    <div class=\"row\">
                                        <!--First column-->
                                       <div class=\"col-md-6\">
                                            <div class=\"md-form\"> 
                                                <input type=\"password\" id=\"actualPass\" class=\"form-control validate valI\"  name=\"actualPass\"required aria-required=\"true\" >
                                                <label for=\"actualPass\" class=\"valL\" id=\"actualPassL\">Contraseña actual: </label>
                                            </div>
                                        </div>
                                        <!--Second column-->
                                        <div class=\"col-md-6\">
                                            <div class=\"md-form\">
                                                <input type=\"password\" id=\"nuevaPass\" class=\"form-control validate valI\" name=\"nuevaPass\"required aria-required=\"true\" >
                                                <label for=\"nuevaPass\" class=\"valL\" id=\"nuevaPassL\">Nueva contraseña:</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.First row-->
                                    <!--Third row-->
                                    <div class=\"row\">
                                        <!--First column-->
                                        <div class=\"col-md-12\">
                                            <div class=\"md-form\">
                                                <input type=\"password\" id=\"repitePass\" class=\"form-control validate valI\" name=\"repitePass\" required aria-required=\"true\">
                                                <label for=\"repitePass\" class=\"valL\"  id=\"repitePassL\" >Repita su contraseña:</label>
                                            </div>
                                        </div>
                                    </div>
                                     <div class=\"registrationFormAlert\" id=\"divCheckPasswordMatch\">
                                    </div><br>
                                    <span>";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : $this->getContext($context, "password")), "html", null, true);
        echo "</span>
                                    
                                    <!--/.Third row-->
                                    <!-- Fourth row -->
                                    <div class=\"row\">
                                        <div class=\"col-md-12 text-center my-4\">
                                            <div class=\"waves-input-wrapper waves-effect waves-light\"><input  id=\"updatePass\" type=\"submit\" name=\"updatePass\" value=\"Actualizar\" class=\"guardarScroll btn btn-pink btn-block btn-rounded z-depth-1 waves-effect waves-light\"></div>
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
        return "DWESLibrosBundle:Default:password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 72,  68 => 35,  50 => 21,  32 => 5,  29 => 4,  11 => 1,);
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
/*                         <strong>Contraseña</strong>*/
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
/*                                 <h5 class="mb-0 font-weight-bold">Actualizar contraseña</h5>*/
/*                             </div>*/
/*                             <!--/Card image-->*/
/*      <!-- Card content --> */
/*             <form name="formUpdatePerfil"  action="{{ path('dwes_libros_password') }}"  method="POST" enctype="multipart/form-data" >*/
/*               <iframe name="frame" style="display: none"></iframe> */
/*                             <div class="card-body text-center">*/
/*                             <!-- Card content -->*/
/*                             <div class="card-body text-center"> */
/*                                 <!-- Edit Form -->*/
/*                                 */
/*                                     <!--First row-->*/
/*                                     <div class="row">*/
/*                                         <!--First column-->*/
/*                                        <div class="col-md-6">*/
/*                                             <div class="md-form"> */
/*                                                 <input type="password" id="actualPass" class="form-control validate valI"  name="actualPass"required aria-required="true" >*/
/*                                                 <label for="actualPass" class="valL" id="actualPassL">Contraseña actual: </label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <!--Second column-->*/
/*                                         <div class="col-md-6">*/
/*                                             <div class="md-form">*/
/*                                                 <input type="password" id="nuevaPass" class="form-control validate valI" name="nuevaPass"required aria-required="true" >*/
/*                                                 <label for="nuevaPass" class="valL" id="nuevaPassL">Nueva contraseña:</label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <!--/.First row-->*/
/*                                     <!--Third row-->*/
/*                                     <div class="row">*/
/*                                         <!--First column-->*/
/*                                         <div class="col-md-12">*/
/*                                             <div class="md-form">*/
/*                                                 <input type="password" id="repitePass" class="form-control validate valI" name="repitePass" required aria-required="true">*/
/*                                                 <label for="repitePass" class="valL"  id="repitePassL" >Repita su contraseña:</label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                      <div class="registrationFormAlert" id="divCheckPasswordMatch">*/
/*                                     </div><br>*/
/*                                     <span>{{password}}</span>*/
/*                                     */
/*                                     <!--/.Third row-->*/
/*                                     <!-- Fourth row -->*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-12 text-center my-4">*/
/*                                             <div class="waves-input-wrapper waves-effect waves-light"><input  id="updatePass" type="submit" name="updatePass" value="Actualizar" class="guardarScroll btn btn-pink btn-block btn-rounded z-depth-1 waves-effect waves-light"></div>*/
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
