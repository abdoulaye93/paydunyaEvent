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

/* C:\wamp64\www\install-master1/themes/demo/partials/paydunya/afterfooter.htm */
class __TwigTemplate_ed87cfdf5356f59169647ea4242a345c871d42d6bb82272b3afd986c7a46a2ea extends \Twig\Template
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
        echo "<div class=\"text-center navbar navbar-expand-lg\" style=\"border:0px\">
    <div class=\"card-body\">
        <img style='width:120vh' src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/ad_images/lg.png");
        echo "\" class=\"img-fluid\" alt=\"Responsive image\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/paydunya/afterfooter.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"text-center navbar navbar-expand-lg\" style=\"border:0px\">
    <div class=\"card-body\">
        <img style='width:120vh' src=\"{{ 'assets/user/ad_images/lg.png'|theme }}\" class=\"img-fluid\" alt=\"Responsive image\">
    </div>
</div>", "C:\\wamp64\\www\\install-master1/themes/demo/partials/paydunya/afterfooter.htm", "");
    }
}
