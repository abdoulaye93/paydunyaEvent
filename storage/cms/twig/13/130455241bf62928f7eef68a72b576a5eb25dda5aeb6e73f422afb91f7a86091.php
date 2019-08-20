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

/* C:\wamp64\www\install-master1/themes/demo/partials/access/eventspublier.htm */
class __TwigTemplate_13db374a76526b0ea57e4c555da930859049a7fcc8e38d68c01305822c0d57b0 extends \Twig\Template
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
";
                // line 13
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 13), "publier", [], "any", false, false, false, 13)) {
                    echo "                                 
  
        <tr class=\"traending_ico_tr\">
            <td data-label=\"ratings\" class=\"ratings_td\">
                <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
                    echo "</a>
            </td>
            <td data-label=\"ico_date\">
                ";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 20), "ticket_vendu", [], "any", false, false, false, 20), "html", null, true);
                    echo "
            </td>
            <td data-label=\"ico_date\">
                <h4 style=\"display:inline-block;\">
                    ";
                    // line 24
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 24), "publier", [], "any", false, false, false, 24)) {
                        // line 25
                        echo "                    <span class=\"badge btn-primary\">
                      oui
                    </span>
                    ";
                    } else {
                        // line 29
                        echo "                    <span class=\"badge badge-danger\">
                      No</span>
                    ";
                    }
                    // line 31
                    echo "     
               </h4>
            </td>
            <td data-label=\"action\">
            <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"";
                    // line 35
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 35)]);
                    echo "\" class=\"action-btn\">View</a>
            <a class=\"btn btn-warning btn-sm\" href=\"";
                    // line 36
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 36)]);
                    echo "\" class=\"action-btn\">Edit</a>                                                                   
          </td>                             
        </tr>  
  ";
                }
                // line 39
                echo "                    
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "</tbody>
</table>    
";
        } else {
            // line 44
            echo "<h3>NO EVENT FOUND</h3>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/access/eventspublier.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 44,  112 => 41,  105 => 39,  98 => 36,  94 => 35,  88 => 31,  83 => 29,  77 => 25,  75 => 24,  68 => 20,  62 => 17,  55 => 13,  49 => 12,  37 => 2,  35 => 1,);
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
{%if item.event.publier%}                                 
  
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
                    {%endif%}     
               </h4>
            </td>
            <td data-label=\"action\">
            <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"{{ 'manage_event_view'|page({event_id:item.id}) }}\" class=\"action-btn\">View</a>
            <a class=\"btn btn-warning btn-sm\" href=\"{{ 'manage_event_edit'|page({event_id:item.id}) }}\" class=\"action-btn\">Edit</a>                                                                   
          </td>                             
        </tr>  
  {%endif%}                    
{% endfor%}
</tbody>
</table>    
{%else%}
<h3>NO EVENT FOUND</h3>
{%endif%}", "C:\\wamp64\\www\\install-master1/themes/demo/partials/access/eventspublier.htm", "");
    }
}
