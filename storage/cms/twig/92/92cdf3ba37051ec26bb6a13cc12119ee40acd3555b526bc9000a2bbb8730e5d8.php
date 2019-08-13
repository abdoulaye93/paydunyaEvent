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

/* C:\wamp64\www\install-master1/themes/demo/partials/events/pagination.htm */
class __TwigTemplate_e88343311528eb36620096604e271ff1c362309b73b62620a0582b0a70be4e7e extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onFilterEvents", ["update" => ["events/events" => "#upcoming_tab", "events/eventexpire" => "#ending_tab", "events/pagination" => "#active_tab"]]]);
        echo "
<div id=\"EventFilter\" class=\"text-center\">
        <label>Page</label>
        <select class=\"ui fluid dropdown\" name=\"Filter[page]\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 6
            echo "                ";
            if (($context["i"] == ($context["page"] ?? null))) {
                // line 7
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
                echo "</option>
                ";
            } else {
                // line 9
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                ";
            }
            // line 11
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </select>
      </div>
      ";
        // line 14
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/events/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 14,  71 => 12,  65 => 11,  57 => 9,  49 => 7,  46 => 6,  42 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{form_ajax('onFilterEvents',{update:{'events/events':'#upcoming_tab','events/eventexpire':'#ending_tab','events/pagination':'#active_tab'}})}}
<div id=\"EventFilter\" class=\"text-center\">
        <label>Page</label>
        <select class=\"ui fluid dropdown\" name=\"Filter[page]\">
            {% for i in 1..pages %}
                {%  if i == page %}
                    <option value=\"{{page}}\" selected>{{ page }}</option>
                {% else %}
                    <option value=\"{{i}}\">{{ i }}</option>
                {% endif %}
            {% endfor %}
        </select>
      </div>
      {{form_close()}}", "C:\\wamp64\\www\\install-master1/themes/demo/partials/events/pagination.htm", "");
    }
}
