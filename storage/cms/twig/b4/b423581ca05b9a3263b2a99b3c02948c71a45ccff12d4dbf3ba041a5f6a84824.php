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

/* C:\wamp64\www\install-master1/themes/demo/partials/typeevent/type.htm */
class __TwigTemplate_cdb9350068d9986d43fefc852545acc774451548ba0fe2a801a226ffd4b2cc07 extends \Twig\Template
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
        echo "<div  class=\"form-element square\" id=\"type\" >
        <label>Types&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <a class=\"\" href=\"#\" data-toggle=\"modal\" data-target=\"#autre-modal\" class=\"action-btn\"> autre</a>
        </label>
        <select class=\"input-field-square\" name=\"\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 7), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nom_type", [], "any", false, false, false, 7), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </select>
      </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/typeevent/type.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  46 => 7,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div  class=\"form-element square\" id=\"type\" >
        <label>Types&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <a class=\"\" href=\"#\" data-toggle=\"modal\" data-target=\"#autre-modal\" class=\"action-btn\"> autre</a>
        </label>
        <select class=\"input-field-square\" name=\"\">
            {% for i in types %}
                    <option value=\"{{i.id}}\">{{ i.nom_type }}</option>
            {% endfor %}
        </select>
      </div>", "C:\\wamp64\\www\\install-master1/themes/demo/partials/typeevent/type.htm", "");
    }
}
