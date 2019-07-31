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

/* C:\wamp64\www\install-master/plugins/event/event/components/positionevent/default.htm */
class __TwigTemplate_a4bb5aa92f6c3ec59e6617e3d69761dd8bf26c13ca1b9898abc7311699d2687f extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadLat", [], "method", false, false, false, 1)) {
            // line 2
            echo "<input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadLat", [], "method", false, false, false, 2), "html", null, true);
            echo "\" id=\"lat1\">

";
        }
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadLong", [], "method", false, false, false, 5)) {
            // line 6
            echo "<input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadLong", [], "method", false, false, false, 6), "html", null, true);
            echo "\" id=\"long1\">

";
        }
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/plugins/event/event/components/positionevent/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  44 => 5,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.loadLat() %}
<input type=\"hidden\" value=\"{{__SELF__.loadLat()}}\" id=\"lat1\">

{%endif%}
{% if __SELF__.loadLong() %}
<input type=\"hidden\" value=\"{{__SELF__.loadLong()}}\" id=\"long1\">

{%endif%}
", "C:\\wamp64\\www\\install-master/plugins/event/event/components/positionevent/default.htm", "");
    }
}
