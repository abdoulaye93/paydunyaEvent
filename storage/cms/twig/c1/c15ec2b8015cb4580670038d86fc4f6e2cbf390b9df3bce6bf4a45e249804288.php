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

/* C:\wamp64\www\install-master1/themes/demo/partials/site/footer.htm */
class __TwigTemplate_25be813a22fdab9d247bd667c57a4c308d50f9d2731a6f39d52868089493828a extends \Twig\Template
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
        echo "<!-- Footer -->
<footer class=\"page-footer font-small blue\">

    <!-- Copyright -->
    <div class=\"footer-copyright text-center py-3\">© 2019 Copyright:
      <a href=\"#\"> Paydunya-Event</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<footer class=\"page-footer font-small blue\">

    <!-- Copyright -->
    <div class=\"footer-copyright text-center py-3\">© 2019 Copyright:
      <a href=\"#\"> Paydunya-Event</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->", "C:\\wamp64\\www\\install-master1/themes/demo/partials/site/footer.htm", "");
    }
}
