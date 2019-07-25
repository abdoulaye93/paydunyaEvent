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

/* C:\wamp64\www\install-master/themes/demo/layouts/ticket.htm */
class __TwigTemplate_5ca39d038d44c077c9bee092b5ab6bb82a39cb9ff7b13da88676353a1d5a4ac5 extends \Twig\Template
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
        echo "<script type=\"text/javascript\"> window.print() ; </script>

<div>
    hehhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/demo/layouts/ticket.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\"> window.print() ; </script>

<div>
    hehhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
</div>", "C:\\wamp64\\www\\install-master/themes/demo/layouts/ticket.htm", "");
    }
}
