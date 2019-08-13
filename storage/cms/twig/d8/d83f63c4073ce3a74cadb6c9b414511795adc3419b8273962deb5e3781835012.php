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
        echo "<div class=\"ui action input\" id=\"EventFilter\">
        <input type=\"text\" placeholder=\"Search...\"  name=\"typ\">
        <input type=\"submit\"_ value=\"Search\">
      </div>";
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
        return new Source("<div class=\"ui action input\" id=\"EventFilter\">
        <input type=\"text\" placeholder=\"Search...\"  name=\"typ\">
        <input type=\"submit\"_ value=\"Search\">
      </div>", "C:\\wamp64\\www\\install-master1/themes/demo/partials/events/filter.htm", "");
    }
}
