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

/* C:\wamp64\www\install-master1/themes/demo/partials/access/eventsexpire.htm */
class __TwigTemplate_b9ab467245186d6075959817c74167332bd167baf9cfa137e7e65cdf167017e1 extends \Twig\Template
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
                // line 13
                if ((twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 13), "periode", [], "any", false, false, false, 13), "date_cloture", [], "any", false, false, false, 13)) < twig_date_converter($this->env))) {
                    // line 14
                    echo "        <tr class=\"traending_ico_tr\">
            <td data-label=\"ratings\" class=\"ratings_td\">
                <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">";
                    // line 16
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16), "html", null, true);
                    echo "</a>
            </td>
            <td data-label=\"ico_date\">
                ";
                    // line 19
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 19), "ticket_vendu", [], "any", false, false, false, 19), "html", null, true);
                    echo "
            </td>
            <td data-label=\"ico_date\">
                <h4 style=\"display:inline-block;\">
                    ";
                    // line 23
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 23), "publier", [], "any", false, false, false, 23)) {
                        // line 24
                        echo "                    <span class=\"badge btn-primary\">
                      oui
                    </span>
                    ";
                    } else {
                        // line 28
                        echo "                    <span class=\"badge badge-danger\">
                      No</span>
                    ";
                    }
                    // line 30
                    echo "        </h4>
            </td>
            <td data-label=\"action\">
            <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"";
                    // line 33
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 33)]);
                    echo "\" class=\"action-btn\">View</a>
            <a class=\"btn btn-warning btn-sm\" href=\"";
                    // line 34
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 34)]);
                    echo "\" class=\"action-btn\">Edit</a>
            <a class=\"btn btn-danger btn-sm\" href=\"";
                    // line 35
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit");
                    echo "\" class=\"action-btn\" data-toggle=\"modal\" data-target=\"#demande-modal\">
                Annuler
            </a>                                                                    
          </td>                             
        </tr>
    
  ";
                }
                // line 41
                echo "                       
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "</tbody>
</table>  
";
        } else {
            // line 46
            echo "<h3>NO EVENT FOUND</h3>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/access/eventsexpire.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 46,  115 => 43,  108 => 41,  98 => 35,  94 => 34,  90 => 33,  85 => 30,  80 => 28,  74 => 24,  72 => 23,  65 => 19,  59 => 16,  55 => 14,  53 => 13,  49 => 12,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%if accessevents|length %}
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
{% if date(item.event.periode.date_cloture) < date()%}
        <tr class=\"traending_ico_tr\">
            <td data-label=\"ratings\" class=\"ratings_td\">
                <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">{{item.event.nom}}</a>
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
            <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"{{ 'manage_event_view'|page({event_id:item.id}) }}\" class=\"action-btn\">View</a>
            <a class=\"btn btn-warning btn-sm\" href=\"{{ 'manage_event_edit'|page({event_id:item.id}) }}\" class=\"action-btn\">Edit</a>
            <a class=\"btn btn-danger btn-sm\" href=\"{{ 'manage_event_edit'|page }}\" class=\"action-btn\" data-toggle=\"modal\" data-target=\"#demande-modal\">
                Annuler
            </a>                                                                    
          </td>                             
        </tr>
    
  {%endif%}                       
{% endfor%}
</tbody>
</table>  
{%else%}
<h3>NO EVENT FOUND</h3>
{%endif%}", "C:\\wamp64\\www\\install-master1/themes/demo/partials/access/eventsexpire.htm", "");
    }
}
