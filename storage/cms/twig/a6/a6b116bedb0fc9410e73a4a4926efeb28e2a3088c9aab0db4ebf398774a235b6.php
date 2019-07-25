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

/* C:\wamp64\www\install-master/themes/demo/pages/error.htm */
class __TwigTemplate_bd78e55640425ea51c3513ecc1ed63e41b38cba36cb636bfc7f56de59fa52bfe extends \Twig\Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Error</h1>
        <p>We're sorry, but something went wrong and the page cannot be displayed.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/demo/pages/error.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Error</h1>
        <p>We're sorry, but something went wrong and the page cannot be displayed.</p>
    </div>
</div>", "C:\\wamp64\\www\\install-master/themes/demo/pages/error.htm", "");
    }
}
