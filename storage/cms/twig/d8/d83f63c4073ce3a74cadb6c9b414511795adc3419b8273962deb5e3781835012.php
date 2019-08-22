<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\wamp64\www\install-master1/themes/demo/partials/events/filter.htm */
class __TwigTemplate_07334abe59feee5fa6c37a6d12e52d100cf52fdd0c714964584f272af7eb50bd extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!-- <div class=\"ui action input\" id=\"EventFilter\">
        <input type=\"text\" placeholder=\"Search...\"  name=\"typ\">
        <input type=\"submit\"_ value=\"Search\">
      </div>-->
      <header class=\"text-center mt-1 p-0 justify-content-center navbar navbar-expand-lg\" id=\"image\">

          <div class=\"card bg-transparent mt-3 mb-5 border-0\" >
              <div class=\"card-body text-center\">
              <h5
              style=\"font-size:6vw\"
              class=\"card-title text-white display-4\" >
              PAYDUNYA-EVENT</h5>
  
              <hr class=\"bg-white\" style='width: 200px '>
  
              <p class=\"card-text text-white lead lh-180\">Facilitez la gestion des réservations et/ou ventes de ticket lors de vos événements professionnels ou grand public.</p>
  
              <!-- <p class=\"card-text text-white\">La solution idéale pour gérer en toute simplicité votre événement : billet­terie en ligne, contrôle d’accès, gestion d’inscriptions, envoi d’invita­tions...</p> -->
  
             <!--   <form action=\"\" class=\"justify-content-center form-inline my-2 my-lg-0\">-->
              
              <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Rechercher un event\" aria-label=\"Search\" name=\"typ\">
  
              <button  
              class=\"btn btn-outline-primary text-uppercase\" type=\"submit\">
  
              <i class=\"animated pulse infinite fa fa-arrow-right \" aria-hidden=\"true\">
              Je me lance</i>
  
              </button>
              <!--  </form>-->
  
              </div>
          </div>
          
      </header>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/events/filter.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- <div class=\"ui action input\" id=\"EventFilter\">
        <input type=\"text\" placeholder=\"Search...\"  name=\"typ\">
        <input type=\"submit\"_ value=\"Search\">
      </div>-->
      <header class=\"text-center mt-1 p-0 justify-content-center navbar navbar-expand-lg\" id=\"image\">

          <div class=\"card bg-transparent mt-3 mb-5 border-0\" >
              <div class=\"card-body text-center\">
              <h5
              style=\"font-size:6vw\"
              class=\"card-title text-white display-4\" >
              PAYDUNYA-EVENT</h5>
  
              <hr class=\"bg-white\" style='width: 200px '>
  
              <p class=\"card-text text-white lead lh-180\">Facilitez la gestion des réservations et/ou ventes de ticket lors de vos événements professionnels ou grand public.</p>
  
              <!-- <p class=\"card-text text-white\">La solution idéale pour gérer en toute simplicité votre événement : billet­terie en ligne, contrôle d’accès, gestion d’inscriptions, envoi d’invita­tions...</p> -->
  
             <!--   <form action=\"\" class=\"justify-content-center form-inline my-2 my-lg-0\">-->
              
              <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Rechercher un event\" aria-label=\"Search\" name=\"typ\">
  
              <button  
              class=\"btn btn-outline-primary text-uppercase\" type=\"submit\">
  
              <i class=\"animated pulse infinite fa fa-arrow-right \" aria-hidden=\"true\">
              Je me lance</i>
  
              </button>
              <!--  </form>-->
  
              </div>
          </div>
          
      </header>", "C:\\wamp64\\www\\install-master1/themes/demo/partials/events/filter.htm", "");
    }
}
