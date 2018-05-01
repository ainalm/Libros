<?php

/* DWESLibrosBundle:Default:login.html.twig */
class __TwigTemplate_193be0a1bd1d1e5b4c896538329db03b1912c74b866b259b6a30c33b4b9b9d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:login.html.twig", 1);
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
   <div  class=\"streak streak-photo streak-md  portada \" style=\"background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg');margin-top: 57px;\">
            <div class=\"flex-center mask view intro-3\">
                <div class=\"container my-5 pt-5\">

                    <!-- Section heading -->
                    <h3 class=\"text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                        <strong>Iniciar sesión</strong>
                    </h3>
                    <h6 class=\"text-center white-text pb-4 font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">¡Es gratis!</h6>
                    

                </div>
            </div>
        </div> 
            

";
    }

    // line 24
    public function block_contenido($context, array $blocks = array())
    {
        echo " 

<section class=\"form-light wow fadeIn\" data-wow-delay=\"0.2s\" style=\"background-color: #f8f8f8;\">
  <form name=\"formBusqueda\" action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("dwes_libros_login_check");
        echo "\" method=\"POST\">
            <!--Form without header-->
            <div class=\"card container pl-0 pr-0\" style=\"width: 28rem\">
               
                <div class=\"card-body mx-4\">

                    <!--Header-->
                    <div class=\"text-center\">
                        <h3 class=\"pink-text mb-5\"><strong>Login</strong></h3>
                        ";
        // line 36
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 37
            echo "\t\t                <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
\t                    ";
        }
        // line 39
        echo "                    </div>

                    <!--Body-->
                    <div class=\"md-form\">
                        <input type=\"text\" id=\"Form-email2\"  class=\"form-control\" name=\"_username\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                        <label id=\"labelUsername\" for=\"Form-email2\" class=\"\"> Username</label>
                    </div>

                    <div class=\"md-form pb-3\">
                        <input type=\"password\" id=\"Form-pass2\" class=\"form-control\"   name=\"_password\">
                        <label  id=\"labelPass\" for=\"Form-pass2\" class=\"\">Contraseña</label>
                     
                    </div>

                    <!--Grid row-->
                    <div class=\"row d-flex align-items-center mb-4\">

                        <!--Grid column-->
                        <div class=\"col-md-3 col-md-6 text-center\">
                            <button id=\"entrar\" type=\"submit\" value=\"LOGIN\" class=\"btn btn-pink btn-block btn-rounded z-depth-1 waves-effect waves-light\">Entrar</button>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class=\"col-md-6\">
                        
                            <p class=\"font-small grey-text d-flex justify-content-end\">¿No tienes cuenta? <a href=\"#\" class=\"blue-text ml-1\"> Regístrate </a></p>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->
                </div>

                <!--Footer-->
                <div class=\"footer pt-3 mdb-color lighten-3 pb-0\">

                    <div class=\"row d-flex justify-content-center\">
                        <p class=\"font-small white-text mb-2 pt-3\"> Iniciar sesión con:</p>
                    </div>

                    <div class=\"row mt-2 mb-3 d-flex justify-content-center\">
                        <!--Facebook-->
                        <a class=\"fa-lg p-2 m-2 fb-ic\"><i class=\"fa fa-facebook white-text fa-lg\"> </i></a>
                        <!--Twitter-->
                        <a class=\"fa-lg p-2 m-2 tw-ic\"><i class=\"fa fa-twitter white-text fa-lg\"> </i></a>
                        <!--Google +-->
                        <a class=\"fa-lg p-2 m-2 gplus-ic\"><i class=\"fa fa-google-plus white-text fa-lg\"> </i></a>
                    </div>

                </div>
                
            </div>
            <!--/Form without header-->
</form> 
\t
";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 43,  80 => 39,  74 => 37,  72 => 36,  60 => 27,  53 => 24,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block portada %}*/
/*     <!--Intro Section-->*/
/*    <div  class="streak streak-photo streak-md  portada " style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg');margin-top: 57px;">*/
/*             <div class="flex-center mask view intro-3">*/
/*                 <div class="container my-5 pt-5">*/
/* */
/*                     <!-- Section heading -->*/
/*                     <h3 class="text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                         <strong>Iniciar sesión</strong>*/
/*                     </h3>*/
/*                     <h6 class="text-center white-text pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">¡Es gratis!</h6>*/
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
/* */
/* <section class="form-light wow fadeIn" data-wow-delay="0.2s" style="background-color: #f8f8f8;">*/
/*   <form name="formBusqueda" action="{{ path('dwes_libros_login_check') }}" method="POST">*/
/*             <!--Form without header-->*/
/*             <div class="card container pl-0 pr-0" style="width: 28rem">*/
/*                */
/*                 <div class="card-body mx-4">*/
/* */
/*                     <!--Header-->*/
/*                     <div class="text-center">*/
/*                         <h3 class="pink-text mb-5"><strong>Login</strong></h3>*/
/*                         {% if error %}*/
/* 		                <div class="error">{{ error.message }}</div>*/
/* 	                    {% endif %}*/
/*                     </div>*/
/* */
/*                     <!--Body-->*/
/*                     <div class="md-form">*/
/*                         <input type="text" id="Form-email2"  class="form-control" name="_username" value="{{ last_username }}">*/
/*                         <label id="labelUsername" for="Form-email2" class=""> Username</label>*/
/*                     </div>*/
/* */
/*                     <div class="md-form pb-3">*/
/*                         <input type="password" id="Form-pass2" class="form-control"   name="_password">*/
/*                         <label  id="labelPass" for="Form-pass2" class="">Contraseña</label>*/
/*                      */
/*                     </div>*/
/* */
/*                     <!--Grid row-->*/
/*                     <div class="row d-flex align-items-center mb-4">*/
/* */
/*                         <!--Grid column-->*/
/*                         <div class="col-md-3 col-md-6 text-center">*/
/*                             <button id="entrar" type="submit" value="LOGIN" class="btn btn-pink btn-block btn-rounded z-depth-1 waves-effect waves-light">Entrar</button>*/
/*                         </div>*/
/*                         <!--Grid column-->*/
/* */
/*                         <!--Grid column-->*/
/*                         <div class="col-md-6">*/
/*                         */
/*                             <p class="font-small grey-text d-flex justify-content-end">¿No tienes cuenta? <a href="#" class="blue-text ml-1"> Regístrate </a></p>*/
/*                         </div>*/
/*                         <!--Grid column-->*/
/* */
/*                     </div>*/
/*                     <!--Grid row-->*/
/*                 </div>*/
/* */
/*                 <!--Footer-->*/
/*                 <div class="footer pt-3 mdb-color lighten-3 pb-0">*/
/* */
/*                     <div class="row d-flex justify-content-center">*/
/*                         <p class="font-small white-text mb-2 pt-3"> Iniciar sesión con:</p>*/
/*                     </div>*/
/* */
/*                     <div class="row mt-2 mb-3 d-flex justify-content-center">*/
/*                         <!--Facebook-->*/
/*                         <a class="fa-lg p-2 m-2 fb-ic"><i class="fa fa-facebook white-text fa-lg"> </i></a>*/
/*                         <!--Twitter-->*/
/*                         <a class="fa-lg p-2 m-2 tw-ic"><i class="fa fa-twitter white-text fa-lg"> </i></a>*/
/*                         <!--Google +-->*/
/*                         <a class="fa-lg p-2 m-2 gplus-ic"><i class="fa fa-google-plus white-text fa-lg"> </i></a>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 */
/*             </div>*/
/*             <!--/Form without header-->*/
/* </form> */
/* 	*/
/* {% endblock %}*/
/* */
