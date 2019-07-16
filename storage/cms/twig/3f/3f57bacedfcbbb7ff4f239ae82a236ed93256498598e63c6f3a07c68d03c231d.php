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

/* C:\wamp64\www\install-master/themes/demo/partials/site/header.htm */
class __TwigTemplate_08140807b7f2fddf9607b41577f9161666106a4665f065c982bbbcee0013f7f6 extends \Twig\Template
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
        echo "<!-- Nav -->
<nav class=\"navbar navbar-area navbar-expand-lg navbar-light navbar-fixed-top navbar-autohide\">
    <div class=\"container\">
        <div >
            <!-- navbar header start -->
            <a class=\"\" href=\"http://lab.thesoftking.com/eticket\">
              <img style=\"width:20px;display:block;margin:0;\" src=\"http://lab.thesoftking.com/eticket/assets/user/ad_images/1532510917.jpg\" alt=\"addvertisement-02\">
            </a>
            
        </div>
        <!-- navbar header end -->
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#Tokenizer\" aria-controls=\"Tokenizer\"
            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"Tokenizer\">

            <!-- navbar collapse start -->
            <ul class=\"navbar-nav\">
                <li class=\"nav-item  ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20) == "home")) {
            echo "active";
        }
        echo " \">
                    <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Comment Ça marche</a>
                </li>
                
                  <li class='nav-item ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24) == "view_event")) {
            echo "active";
        }
        echo "'>
                      <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("view_event");
        echo "\">Trouver un évènement</a>
                  </li>
                   <li class=\"nav-item \">
                      <a class=\"nav-link\" href=\"http://lab.thesoftking.com/eticket/contact\" >Contactez nous</a>
                   </li>
                 ";
        // line 30
        if (($context["user"] ?? null)) {
            // line 31
            echo "                      <li class=\"nav-item \">
                          <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\" class=\"nav-link\">Deconnexion</a>
                       </li>
                        <li class=\"nav-item ";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34) == "create_event")) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 35
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("create_event");
            echo "\">Créer un évènement</a>
                </li>
                
                    ";
        } else {
            // line 39
            echo "                         <li class=\"nav-item boxed-btn\">
                    <a class=\"nav-link boxed-btn\" href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login - Register</a>
                </li>
                    ";
        }
        // line 43
        echo "                
               
               
              </ul>
        </div>
        <!-- navbar collapse end -->
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 43,  102 => 39,  95 => 35,  89 => 34,  84 => 31,  82 => 30,  74 => 25,  68 => 24,  62 => 21,  56 => 20,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Nav -->
<nav class=\"navbar navbar-area navbar-expand-lg navbar-light navbar-fixed-top navbar-autohide\">
    <div class=\"container\">
        <div >
            <!-- navbar header start -->
            <a class=\"\" href=\"http://lab.thesoftking.com/eticket\">
              <img style=\"width:20px;display:block;margin:0;\" src=\"http://lab.thesoftking.com/eticket/assets/user/ad_images/1532510917.jpg\" alt=\"addvertisement-02\">
            </a>
            
        </div>
        <!-- navbar header end -->
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#Tokenizer\" aria-controls=\"Tokenizer\"
            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"Tokenizer\">

            <!-- navbar collapse start -->
            <ul class=\"navbar-nav\">
                <li class=\"nav-item  {% if this.page.id == 'home' %}active{% endif %} \">
                    <a class=\"nav-link\" href=\"{{ 'home'|page }}\">Comment Ça marche</a>
                </li>
                
                  <li class='nav-item {% if this.page.id == 'view_event' %}active{% endif %}'>
                      <a class=\"nav-link\" href=\"{{ 'view_event'|page }}\">Trouver un évènement</a>
                  </li>
                   <li class=\"nav-item \">
                      <a class=\"nav-link\" href=\"http://lab.thesoftking.com/eticket/contact\" >Contactez nous</a>
                   </li>
                 {% if user %}
                      <li class=\"nav-item \">
                          <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\" class=\"nav-link\">Deconnexion</a>
                       </li>
                        <li class=\"nav-item {% if this.page.id == 'create_event' %}active{% endif %}\">
                    <a class=\"nav-link\" href=\"{{ 'create_event'|page }}\">Créer un évènement</a>
                </li>
                
                    {% else %}
                         <li class=\"nav-item boxed-btn\">
                    <a class=\"nav-link boxed-btn\" href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login - Register</a>
                </li>
                    {% endif %}
                
               
               
              </ul>
        </div>
        <!-- navbar collapse end -->
    </div>
</nav>", "C:\\wamp64\\www\\install-master/themes/demo/partials/site/header.htm", "");
    }
}
