<?php

/* DWESLibrosBundle:Default:guia.html.twig */
class __TwigTemplate_2112dc3dfa4114544b56ea027bbc5908cbccbca64655662765b05ac994fca354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DWESLibrosBundle::layout.html.twig", "DWESLibrosBundle:Default:guia.html.twig", 1);
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
        echo "<section>
    <div  class=\"col-sm-12 text-center\">
        <img class=\"center-block\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/Fondos/port.png"), "html", null, true);
        echo "\" style=\"width: 40%;max-height: 500px;margin-top: 60px;\">
    </div>
</section>


";
    }

    // line 9
    public function block_contenido($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"container-fluid mb-5\">

    <!--Grid row-->
    <div class=\"row\" style=\"margin-top: -100px;\">

        <!--Grid column-->
        <div class=\"col-md-12 px-lg-5\">
            <!--Card-->
            <div class=\"card pb-5 mx-md-3\">
                <div class=\"card-body\">

                    <div class=\"container\">

                        <section id=\"features\" class=\"section feature-box mb-2 pb-4 mt-0\">
                            <!-- Section heading -->
                            <h1 class=\"font-weight-bold mt-3 text-center\">
                            <strong>Guía de escritura</strong>
                        </h1>

                            <hr class=\"red title-hr\">

                        </section>

                        <h4 class=\"  mb-4 text-center \">
                            Formato</h4>
                        <p class=\"text-justify\">
                            <ul> <li>¿Están todos sus párrafos alineados correctamente? Esto significa que no hay espacios ni sangrías al comienzo de los párrafos / oraciones.
                             Absténgase de usar sangrías o espacios, ya que esto solo aumenta el tiempo que lleva editar y aprobar una pieza.</li></ul> 
                        </p>
                        <div  class=\"col-sm-12 text-center\">
        <img class=\"center-block\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/guia/1.png"), "html", null, true);
        echo "\" style=\"max-width: 70%;\">
    </div>
                        
                        
                        <p class=\"text-justify\">
                            <ul> <li>¿El espaciado entre tus párrafos es parejo? No ponga más de un espacio entre párrafos, por favor.</li></ul> 
                        </p>
                        <div  class=\"col-sm-12 text-center\">
        <img class=\"center-block\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/guia/2.png"), "html", null, true);
        echo "\"style=\"max-width: 70%;\" >
    </div>
     <p class=\"text-justify\">
                            <ul> <li>¿Su historia está libre de notas de autor,
                             comentarios fuera de carácter u otro texto no relacionado con su historia? 
                             Esto incluye notas de derechos de autor y enlaces a otras historias. 
                             Tenga la seguridad de que una historia publicada bajo el nombre de un autor tiene derechos de autor para ese autor.
                         
¡Mantengamos tu historia para tu historia! Queremos leer el contenido y  perdernos en el texto. 
No rompamos eso agregando un comentario continuo. Usa tu espacio de historia solo para tu historia.</li></ul> 
                        </p>

                        
                        <h4 class=\"  mb-4 text-center \">
                            Gramática y puntuación</h4>
                        <p class=\"text-justify\">
                            <ul> <li>¿Tu escritura sigue las reglas de la gramática ?</li></ul> 
                        </p>
                          <p class=\"text-justify\">
                            <ul> <li>Por favor, verifique que su gramática y puntuación sean las adecuadas.
                             Experimentar con la gramática y la puntuación puede tener un gran efecto en una historia, 
                             pero también puede salir mal. Te recomendamos <a target=\"_blank\" href=\"https://languagetool.org/\">Language Tool </a> para comprobar la gramática de tus textos.
</li></ul> 
                        </p>
<p class=\"text-justify\">
                            <ul> <li> ¿Su diálogo está formateado correctamente? (\"Imposible\", ella dijo. \"¡Imposible   !\", Respondió.)
</li></ul> 
                        </p>
                       
 <ul> <li> ¿Su foto de portada tiene al menos 196x300 píxeles de tamaño? (¡Echa un vistazo a  <a target=\"_blank\" href=\"https://pixabay.com/es/\">Pixabay </a>o  <a target=\"_blank\" href=\"https://unsplash.com/\">Unsplash </a>
  y encuentra buenas fotos!)
  Si aparece un poco \"estirado\" o pixelado en nuestro sitio, por favor cámbialo. Queremos que tengas una hermosa, fresca,
imagen llamativa y haremos lo que podamos para garantizar que su historia se presente de la mejor manera. Esto significa que vamos a verificar si las imágenes de portada son adecuadas.
                        
</li></ul> 
                        </p>

                               <div  class=\"col-sm-12 text-center\">
        <img class=\"center-block\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/guia/3.png"), "html", null, true);
        echo "\"style=\"max-width: 70%;\" >
    </div>


</p>
                       
 <p><ul> <li>
              ¿Tu título es solo un título? El nombre del autor, el género de la historia y otros detalles no necesitan
     figurar en el título. Queremos saber cómo se llama la historia en la barra de título y ver el resto en su lugar relevante.           
</li></ul> 
                        </p>
          <div  class=\"col-sm-12 text-center\">
        <img class=\"center-block\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dweslibros/img/guia/4.png"), "html", null, true);
        echo "\"style=\"max-width: 70%;\" >
    </div>

    <p class=\"text-justify\">
                            <ul> <li>Gracias, autores! 
                             Le pedimos que se adhiera a nuestras pautas técnicas 
                            y de formato para que podamos ayudarlo a que su historia sea un éxito. ¡Esperamos ver sus publicaciones y no podemos esperar a que se publiquen!</li></ul> 
                        </p>
                    </div>

                </div>
                <!--Grid row-->

            </div>
            <!--/Card-->
        </div>
        <!--/Grid column-->
    </div>
    <!--/Grid row-->
</div>
";
    }

    public function getTemplateName()
    {
        return "DWESLibrosBundle:Default:guia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 99,  133 => 87,  92 => 49,  81 => 41,  48 => 10,  45 => 9,  35 => 4,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'DWESLibrosBundle::layout.html.twig' %} {% block portada %}*/
/* <section>*/
/*     <div  class="col-sm-12 text-center">*/
/*         <img class="center-block" src="{{ asset('bundles/dweslibros/img/Fondos/port.png') }}" style="width: 40%;max-height: 500px;margin-top: 60px;">*/
/*     </div>*/
/* </section>*/
/* */
/* */
/* {% endblock %} {% block contenido %}*/
/* */
/* <div class="container-fluid mb-5">*/
/* */
/*     <!--Grid row-->*/
/*     <div class="row" style="margin-top: -100px;">*/
/* */
/*         <!--Grid column-->*/
/*         <div class="col-md-12 px-lg-5">*/
/*             <!--Card-->*/
/*             <div class="card pb-5 mx-md-3">*/
/*                 <div class="card-body">*/
/* */
/*                     <div class="container">*/
/* */
/*                         <section id="features" class="section feature-box mb-2 pb-4 mt-0">*/
/*                             <!-- Section heading -->*/
/*                             <h1 class="font-weight-bold mt-3 text-center">*/
/*                             <strong>Guía de escritura</strong>*/
/*                         </h1>*/
/* */
/*                             <hr class="red title-hr">*/
/* */
/*                         </section>*/
/* */
/*                         <h4 class="  mb-4 text-center ">*/
/*                             Formato</h4>*/
/*                         <p class="text-justify">*/
/*                             <ul> <li>¿Están todos sus párrafos alineados correctamente? Esto significa que no hay espacios ni sangrías al comienzo de los párrafos / oraciones.*/
/*                              Absténgase de usar sangrías o espacios, ya que esto solo aumenta el tiempo que lleva editar y aprobar una pieza.</li></ul> */
/*                         </p>*/
/*                         <div  class="col-sm-12 text-center">*/
/*         <img class="center-block" src="{{ asset('bundles/dweslibros/img/guia/1.png') }}" style="max-width: 70%;">*/
/*     </div>*/
/*                         */
/*                         */
/*                         <p class="text-justify">*/
/*                             <ul> <li>¿El espaciado entre tus párrafos es parejo? No ponga más de un espacio entre párrafos, por favor.</li></ul> */
/*                         </p>*/
/*                         <div  class="col-sm-12 text-center">*/
/*         <img class="center-block" src="{{ asset('bundles/dweslibros/img/guia/2.png') }}"style="max-width: 70%;" >*/
/*     </div>*/
/*      <p class="text-justify">*/
/*                             <ul> <li>¿Su historia está libre de notas de autor,*/
/*                              comentarios fuera de carácter u otro texto no relacionado con su historia? */
/*                              Esto incluye notas de derechos de autor y enlaces a otras historias. */
/*                              Tenga la seguridad de que una historia publicada bajo el nombre de un autor tiene derechos de autor para ese autor.*/
/*                          */
/* ¡Mantengamos tu historia para tu historia! Queremos leer el contenido y  perdernos en el texto. */
/* No rompamos eso agregando un comentario continuo. Usa tu espacio de historia solo para tu historia.</li></ul> */
/*                         </p>*/
/* */
/*                         */
/*                         <h4 class="  mb-4 text-center ">*/
/*                             Gramática y puntuación</h4>*/
/*                         <p class="text-justify">*/
/*                             <ul> <li>¿Tu escritura sigue las reglas de la gramática ?</li></ul> */
/*                         </p>*/
/*                           <p class="text-justify">*/
/*                             <ul> <li>Por favor, verifique que su gramática y puntuación sean las adecuadas.*/
/*                              Experimentar con la gramática y la puntuación puede tener un gran efecto en una historia, */
/*                              pero también puede salir mal. Te recomendamos <a target="_blank" href="https://languagetool.org/">Language Tool </a> para comprobar la gramática de tus textos.*/
/* </li></ul> */
/*                         </p>*/
/* <p class="text-justify">*/
/*                             <ul> <li> ¿Su diálogo está formateado correctamente? ("Imposible", ella dijo. "¡Imposible   !", Respondió.)*/
/* </li></ul> */
/*                         </p>*/
/*                        */
/*  <ul> <li> ¿Su foto de portada tiene al menos 196x300 píxeles de tamaño? (¡Echa un vistazo a  <a target="_blank" href="https://pixabay.com/es/">Pixabay </a>o  <a target="_blank" href="https://unsplash.com/">Unsplash </a>*/
/*   y encuentra buenas fotos!)*/
/*   Si aparece un poco "estirado" o pixelado en nuestro sitio, por favor cámbialo. Queremos que tengas una hermosa, fresca,*/
/* imagen llamativa y haremos lo que podamos para garantizar que su historia se presente de la mejor manera. Esto significa que vamos a verificar si las imágenes de portada son adecuadas.*/
/*                         */
/* </li></ul> */
/*                         </p>*/
/* */
/*                                <div  class="col-sm-12 text-center">*/
/*         <img class="center-block" src="{{ asset('bundles/dweslibros/img/guia/3.png') }}"style="max-width: 70%;" >*/
/*     </div>*/
/* */
/* */
/* </p>*/
/*                        */
/*  <p><ul> <li>*/
/*               ¿Tu título es solo un título? El nombre del autor, el género de la historia y otros detalles no necesitan*/
/*      figurar en el título. Queremos saber cómo se llama la historia en la barra de título y ver el resto en su lugar relevante.           */
/* </li></ul> */
/*                         </p>*/
/*           <div  class="col-sm-12 text-center">*/
/*         <img class="center-block" src="{{ asset('bundles/dweslibros/img/guia/4.png') }}"style="max-width: 70%;" >*/
/*     </div>*/
/* */
/*     <p class="text-justify">*/
/*                             <ul> <li>Gracias, autores! */
/*                              Le pedimos que se adhiera a nuestras pautas técnicas */
/*                             y de formato para que podamos ayudarlo a que su historia sea un éxito. ¡Esperamos ver sus publicaciones y no podemos esperar a que se publiquen!</li></ul> */
/*                         </p>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <!--Grid row-->*/
/* */
/*             </div>*/
/*             <!--/Card-->*/
/*         </div>*/
/*         <!--/Grid column-->*/
/*     </div>*/
/*     <!--/Grid row-->*/
/* </div>*/
/* {% endblock %}*/