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

/* C:\wamp64\www\install-master/plugins/event/event/components/admindemande/default.htm */
class __TwigTemplate_d010a21bfa769cae0ce56c5fdcebdb3e31faa9af01761a412fe1868178e0c22a extends \Twig\Template
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
        echo "<div class=\"row\">
                <div class=\"col-lg-12 remove-col-padding-mobile\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane container active\" id=\"active_tab\">
                                ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("demande/demandes"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "                         </div>
                         
                         ";
        // line 8
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onFilterEvents", ["update" => ["demande/demandes" => "#active_tab"]]]);
        echo "
                         <div id=\"EventFilter\" class=\"text-center\">
                                 <label>Page</label>
                                 <select class=\"ui fluid dropdown\" name=\"Filter[page]\">
                                     ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 13
            echo "                                         ";
            if (($context["i"] == ($context["page"] ?? null))) {
                // line 14
                echo "                                             <option value=\"";
                echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
                echo "</option>
                                         ";
            } else {
                // line 16
                echo "                                             <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                         ";
            }
            // line 18
            echo "                                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                                 </select>
                             </div>
                             ";
        // line 21
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/plugins/event/event/components/admindemande/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  85 => 19,  79 => 18,  71 => 16,  63 => 14,  60 => 13,  56 => 12,  49 => 8,  45 => 6,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
                <div class=\"col-lg-12 remove-col-padding-mobile\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane container active\" id=\"active_tab\">
                                {% partial 'demande/demandes' %}
                         </div>
                         
                         {{form_ajax('onFilterEvents',{update:{'demande/demandes':'#active_tab'}})}}
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
                             {{form_close()}}", "C:\\wamp64\\www\\install-master/plugins/event/event/components/admindemande/default.htm", "");
    }
}
