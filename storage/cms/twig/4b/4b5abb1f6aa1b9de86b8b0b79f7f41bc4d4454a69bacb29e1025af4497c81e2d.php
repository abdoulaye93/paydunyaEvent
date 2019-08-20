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

/* C:\wamp64\www\install-master1/themes/demo/partials/access/events.htm */
class __TwigTemplate_1622caacddb7c979f9a75a13d4d7dffd22e64d191798292344f92c4d6fe20d8b extends \Twig\Template
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
        if (twig_length_filter($this->env, ($context["accessevents"] ?? null))) {
            // line 2
            echo "<table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
    <thead>
        <tr>
        <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
        <th scope=\"col\" class=\"founding_target_th\" >SALES</th>
        <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
        <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
        </tr>
    </thead>
    <tbody>
";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["accessevents"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "                                    
        <tr class=\"traending_ico_tr\">
            <td data-label=\"ratings\" class=\"ratings_td\">
                <a href=\"#\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 15), "nom", [], "any", false, false, false, 15), "html", null, true);
                echo "</a>
            </td>
            <td data-label=\"ico_date\">
                ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 18), "ticket_vendu", [], "any", false, false, false, 18), "html", null, true);
                echo "
            </td>
            <td data-label=\"ico_date\">
                <h4 style=\"display:inline-block;\">
                        ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 22), "publier", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "                        <span class=\"badge btn-primary\">
                          oui
                        </span>
                        ";
                } else {
                    // line 27
                    echo "                        <span class=\"badge badge-danger\">
                          No</span>
                        ";
                }
                // line 29
                echo "        </h4>
            </td>
            <td data-label=\"action\">
            <form data-request=\"onAnnule\">
                    <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"";
                // line 33
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 33)]);
                echo "\" class=\"action-btn\">View</a>
                    <a class=\"btn btn-warning btn-sm\" href=\"";
                // line 34
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 34)]);
                echo "\" class=\"action-btn\">Edit</a>
                    <input type=\"hidden\" name=\"event_id\" value=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 35), "html", null, true);
                echo "\"> 
                    <input type=\"hidden\" name=\"user_id\" value=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 36), "html", null, true);
                echo "\"> 
                    <input type=\"hidden\" name=\"annule\" value=\"";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "annule_demande", [], "any", false, false, false, 37), "html", null, true);
                echo "\"> 
                </form>                                                                 
          </td>                    
        </tr>                     
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "</tbody>
</table>    
";
        } else {
            // line 45
            echo "<h3>NO EVENT FOUND</h3>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/access/events.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  116 => 42,  105 => 37,  101 => 36,  97 => 35,  93 => 34,  89 => 33,  83 => 29,  78 => 27,  72 => 23,  70 => 22,  63 => 18,  57 => 15,  49 => 12,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%if accessevents|length  %}
<table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
    <thead>
        <tr>
        <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
        <th scope=\"col\" class=\"founding_target_th\" >SALES</th>
        <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
        <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
        </tr>
    </thead>
    <tbody>
{% for item in accessevents %}                                    
        <tr class=\"traending_ico_tr\">
            <td data-label=\"ratings\" class=\"ratings_td\">
                <a href=\"#\">{{item.event.nom}}</a>
            </td>
            <td data-label=\"ico_date\">
                {{item.event.ticket_vendu}}
            </td>
            <td data-label=\"ico_date\">
                <h4 style=\"display:inline-block;\">
                        {% if item.event.publier %}
                        <span class=\"badge btn-primary\">
                          oui
                        </span>
                        {%else%}
                        <span class=\"badge badge-danger\">
                          No</span>
                        {%endif%}        </h4>
            </td>
            <td data-label=\"action\">
            <form data-request=\"onAnnule\">
                    <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"{{ 'manage_event_view'|page({event_id:item.id}) }}\" class=\"action-btn\">View</a>
                    <a class=\"btn btn-warning btn-sm\" href=\"{{ 'manage_event_edit'|page({event_id:item.id}) }}\" class=\"action-btn\">Edit</a>
                    <input type=\"hidden\" name=\"event_id\" value=\"{{item.id}}\"> 
                    <input type=\"hidden\" name=\"user_id\" value=\"{{item.user_id}}\"> 
                    <input type=\"hidden\" name=\"annule\" value=\"{{item.annule_demande}}\"> 
                </form>                                                                 
          </td>                    
        </tr>                     
{% endfor%}
</tbody>
</table>    
{%else%}
<h3>NO EVENT FOUND</h3>
{%endif%}", "C:\\wamp64\\www\\install-master1/themes/demo/partials/access/events.htm", "");
    }
}
