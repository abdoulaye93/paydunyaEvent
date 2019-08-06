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

/* C:\wamp64\www\install-master1/themes/demo/partials/categorieevent/category.htm */
class __TwigTemplate_965a6ef5068f219e19c320b4c29e2dadc3b50484531369f0cbe684356ce784ce extends \Twig\Template
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
        echo "<div id=\"EventFilter\" class=\"form-element square\">
        <label>Category&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <a class=\"\" href=\"#\" data-toggle=\"modal\" data-target=\"#autre-modal\" class=\"action-btn\"> autre</a>
        </label>
        <select class=\"input-field-square\" name=\"Filter[cati]\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorie"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cati"]) {
            // line 7
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["cati"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cati"], "categorie", [], "any", false, false, false, 7), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cati'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </select>
      </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/categorieevent/category.htm";
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
        return new Source("<div id=\"EventFilter\" class=\"form-element square\">
        <label>Category&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <a class=\"\" href=\"#\" data-toggle=\"modal\" data-target=\"#autre-modal\" class=\"action-btn\"> autre</a>
        </label>
        <select class=\"input-field-square\" name=\"Filter[cati]\">
            {% for cati in categorie %}
                    <option value=\"{{cati}}\">{{ cati.categorie }}</option>
            {% endfor %}
        </select>
      </div>", "C:\\wamp64\\www\\install-master1/themes/demo/partials/categorieevent/category.htm", "");
    }
}
