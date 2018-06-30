<?php

/* DWESLibrosBundle:Default:registro.html.twig */
class __TwigTemplate_ac0131900386a80f47424fe4c1f84a469e75743c4b842b4c8d49168ff04c27b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:registro.html.twig", 1);
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
            <div class=\"flex-center mask view intro-3\">
                <div class=\"container my-5 pt-5\">

                    <!-- Section heading -->
                    <h3 class=\"text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                        <strong>REGÍSTRATE</strong>
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
<section class=\"form-light wow fadeIn \" data-wow-delay=\"0.2s\">
 <div class=\"mask rgba-gradient7\" style=\"background-color: #f8f8f8;
}




\">
     <div class=\"container h-100 d-flex justify-content-center align-items-center\">
 
     <!--Grid row-->
     <div class=\"row \">
 
         <!--Grid column-->
         <div class=\"col-md-12\">
 
             <div class=\"card\">
                 <div class=\"card-body\">
 
                     <h2 class=\"feature-title text-center mb-5 mt-4 font-weight-bold\">
                         <strong>¡Bienvenido!</strong>
                     </h2>
                     <hr>
 
                     <!--Grid row-->
                     <div class=\"row mt-5\">
 
                         <!--Grid column-->
                         <div class=\"col-md-6 ml-lg-5 ml-md-3 features-small\">
 
                             <!--Grid row-->
                             <div class=\"row pb-3\">
                                 <div class=\"col-2 col-lg-1\">
                                   
                                 </div>
                                 <div class=\"col-10\">
                                     <h4 class=\"feature-title text-center\">
                                         <strong>Book Trailer </strong>
                                     </h4>
                                     <p class=\"dark-grey-text\">Este libro ofrece el relato de una vivencia muy personal, como fue la que sostuvo Rafael Pérez Gay con su hermano en el espacio.</p>
                                 </div>
                                
            
                            <div class=\"embed-responsive embed-responsive-16by9\">
   <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/8uYspagia_s?rel=0&amp;showinfo=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
</div>
                         
                             </div> 
                             <!--Grid row-->
 
                             
 
                         </div>
                         <!--Grid column-->
 
                         <!--Grid column-->
                         <div class=\"col-md-5\">
 
                             <!--Grid row-->
                             <div class=\"row pb-4 d-flex justify-content-center mb-4\">
 
                                 <h4 class=\"mt-3 mr-4\">
                                     <strong>Crea tu cuenta</strong>
                                 </h4>
 
                                 
 
                               
 
                             </div> 
                             <!--/Grid row-->
    <form name=\"formCrearCuenta\" action=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("dwes_libros_registro");
        echo "\" method=\"POST\" ";
        echo " class=\"ml-4\">
                             <!--Body-->
                             <div class=\"md-form\">
                                 
                                 <input type=\"text\" id=\"orangeForm-name\" name=\"username\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "\" class=\"form-control valI\">
                                 <label for=\"orangeForm-name\" id=\"labelNombre\"  class=\"valL\">Tu nombre de usuario</label>
                             </div>
                             <div class=\"md-form\">
                               
                                 <input type=\"email\" id=\"orangeForm-email\" name=\"email\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "\" class=\"form-control valI\">
                                 <label for=\"orangeForm-email\" id=\"labelEmail\" class=\"valL\">Tu email</label>
                             </div>
 
                             <div class=\"md-form\">
                               
                                 <input type=\"password\" id=\"orangeForm-pass\" name=\"password\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : $this->getContext($context, "password")), "html", null, true);
        echo "\" class=\"form-control valI\">
                                 <label for=\"orangeForm-pass\" id=\"labelPassword\"  class=\"valL\">Tu contraseña</label>
                             </div>
                             <div class=\"row mt-3\">

                                <!--Grid column-->
                                <div class=\"col-sm-3 mb-6 \">
                                    <input class=\"form-check-input\" name=\"sexo\" type=\"radio\" id=\"radio1\" value=\"Mujer\">
                                    <label class=\"form-check-label\" for=\"radio1\">Mujer</label>
                                </div>
                                <!--Grid column-->
    
                                <!--Grid column-->
                                <div class=\"col-sm-3  mb-6\">
                                    <input class=\"form-check-input\" name=\"sexo\" type=\"radio\" id=\"radio2\" value=\"Hombre\">
                                    <label class=\"form-check-label\" for=\"radio2\">Hombre</label>
                                </div>
                                <!--Grid column-->
                            </div>  
                             <div class=\"text-center\">
                                 <button class=\"btn pink-gradient btn-rounded mt-3 waves-effect waves-light\" id=\"crearCuenta\" type=\"submit\" name=\"crearCuenta\" value=\"crearCuenta\">Crear cuenta</button>
                             </div>
                             
                            </form>
                             <div class=\"text-center\">
                                 <p class=\"font-small grey-text d-flex justify-content-end\">¿Ya tienes cuenta? <a href=\"#\" class=\"blue-text ml-1\"> Entrar</a></p>
                             </div>
                             
 
                         </div>
                         <!--Grid column-->
                       
                 <p id=\"errormsg\" style=\"display:none;\">ERROR</p>
                     </div>
                     <!--Grid row-->
 
                 </div>
             </div>
 
         </div>
         <!--Grid column-->
 
     </div>
     <!--Grid row-->
 
 </div>
         </div>
        </section>
     <iframe name=\"frame\" style=\"display: none\"></iframe>                      
";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 111,  145 => 105,  137 => 100,  129 => 96,  53 => 24,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block portada %}*/
/*     <!--Intro Section-->*/
/*    <div  class="streak streak-photo streak-md  portada " style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg');">*/
/*             <div class="flex-center mask view intro-3">*/
/*                 <div class="container my-5 pt-5">*/
/* */
/*                     <!-- Section heading -->*/
/*                     <h3 class="text-center pt-4 pb-3 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">*/
/*                         <strong>REGÍSTRATE</strong>*/
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
/* <section class="form-light wow fadeIn " data-wow-delay="0.2s">*/
/*  <div class="mask rgba-gradient7" style="background-color: #f8f8f8;*/
/* }*/
/* */
/* */
/* */
/* */
/* ">*/
/*      <div class="container h-100 d-flex justify-content-center align-items-center">*/
/*  */
/*      <!--Grid row-->*/
/*      <div class="row ">*/
/*  */
/*          <!--Grid column-->*/
/*          <div class="col-md-12">*/
/*  */
/*              <div class="card">*/
/*                  <div class="card-body">*/
/*  */
/*                      <h2 class="feature-title text-center mb-5 mt-4 font-weight-bold">*/
/*                          <strong>¡Bienvenido!</strong>*/
/*                      </h2>*/
/*                      <hr>*/
/*  */
/*                      <!--Grid row-->*/
/*                      <div class="row mt-5">*/
/*  */
/*                          <!--Grid column-->*/
/*                          <div class="col-md-6 ml-lg-5 ml-md-3 features-small">*/
/*  */
/*                              <!--Grid row-->*/
/*                              <div class="row pb-3">*/
/*                                  <div class="col-2 col-lg-1">*/
/*                                    */
/*                                  </div>*/
/*                                  <div class="col-10">*/
/*                                      <h4 class="feature-title text-center">*/
/*                                          <strong>Book Trailer </strong>*/
/*                                      </h4>*/
/*                                      <p class="dark-grey-text">Este libro ofrece el relato de una vivencia muy personal, como fue la que sostuvo Rafael Pérez Gay con su hermano en el espacio.</p>*/
/*                                  </div>*/
/*                                 */
/*             */
/*                             <div class="embed-responsive embed-responsive-16by9">*/
/*    <iframe width="560" height="315" src="https://www.youtube.com/embed/8uYspagia_s?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>*/
/* </div>*/
/*                          */
/*                              </div> */
/*                              <!--Grid row-->*/
/*  */
/*                              */
/*  */
/*                          </div>*/
/*                          <!--Grid column-->*/
/*  */
/*                          <!--Grid column-->*/
/*                          <div class="col-md-5">*/
/*  */
/*                              <!--Grid row-->*/
/*                              <div class="row pb-4 d-flex justify-content-center mb-4">*/
/*  */
/*                                  <h4 class="mt-3 mr-4">*/
/*                                      <strong>Crea tu cuenta</strong>*/
/*                                  </h4>*/
/*  */
/*                                  */
/*  */
/*                                */
/*  */
/*                              </div> */
/*                              <!--/Grid row-->*/
/*     <form name="formCrearCuenta" action="{{ path('dwes_libros_registro') }}" method="POST" {# target="frame" #} class="ml-4">*/
/*                              <!--Body-->*/
/*                              <div class="md-form">*/
/*                                  */
/*                                  <input type="text" id="orangeForm-name" name="username" value="{{username}}" class="form-control valI">*/
/*                                  <label for="orangeForm-name" id="labelNombre"  class="valL">Tu nombre de usuario</label>*/
/*                              </div>*/
/*                              <div class="md-form">*/
/*                                */
/*                                  <input type="email" id="orangeForm-email" name="email" value="{{email}}" class="form-control valI">*/
/*                                  <label for="orangeForm-email" id="labelEmail" class="valL">Tu email</label>*/
/*                              </div>*/
/*  */
/*                              <div class="md-form">*/
/*                                */
/*                                  <input type="password" id="orangeForm-pass" name="password" value="{{password}}" class="form-control valI">*/
/*                                  <label for="orangeForm-pass" id="labelPassword"  class="valL">Tu contraseña</label>*/
/*                              </div>*/
/*                              <div class="row mt-3">*/
/* */
/*                                 <!--Grid column-->*/
/*                                 <div class="col-sm-3 mb-6 ">*/
/*                                     <input class="form-check-input" name="sexo" type="radio" id="radio1" value="Mujer">*/
/*                                     <label class="form-check-label" for="radio1">Mujer</label>*/
/*                                 </div>*/
/*                                 <!--Grid column-->*/
/*     */
/*                                 <!--Grid column-->*/
/*                                 <div class="col-sm-3  mb-6">*/
/*                                     <input class="form-check-input" name="sexo" type="radio" id="radio2" value="Hombre">*/
/*                                     <label class="form-check-label" for="radio2">Hombre</label>*/
/*                                 </div>*/
/*                                 <!--Grid column-->*/
/*                             </div>  */
/*                              <div class="text-center">*/
/*                                  <button class="btn pink-gradient btn-rounded mt-3 waves-effect waves-light" id="crearCuenta" type="submit" name="crearCuenta" value="crearCuenta">Crear cuenta</button>*/
/*                              </div>*/
/*                              */
/*                             </form>*/
/*                              <div class="text-center">*/
/*                                  <p class="font-small grey-text d-flex justify-content-end">¿Ya tienes cuenta? <a href="#" class="blue-text ml-1"> Entrar</a></p>*/
/*                              </div>*/
/*                              */
/*  */
/*                          </div>*/
/*                          <!--Grid column-->*/
/*                        */
/*                  <p id="errormsg" style="display:none;">ERROR</p>*/
/*                      </div>*/
/*                      <!--Grid row-->*/
/*  */
/*                  </div>*/
/*              </div>*/
/*  */
/*          </div>*/
/*          <!--Grid column-->*/
/*  */
/*      </div>*/
/*      <!--Grid row-->*/
/*  */
/*  </div>*/
/*          </div>*/
/*         </section>*/
/*      <iframe name="frame" style="display: none"></iframe>                      */
/* {% endblock %}*/
/* */
