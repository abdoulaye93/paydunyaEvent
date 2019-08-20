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

/* C:\wamp64\www\install-master1/themes/demo/partials/admin/eventsexpire.htm */
class __TwigTemplate_ef719284bfff29d4467219c4d4cb224ce22d1ccb338917d698980ce6bb0ec389 extends \Twig\Template
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
        echo "<div class=\"row\" style=\"text-align:center;display:block;\">
        ";
        // line 2
        if (twig_length_filter($this->env, ($context["events"] ?? null))) {
            // line 3
            echo "        <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
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
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo " 
        ";
                // line 14
                if ((twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "periode", [], "any", false, false, false, 14), "date_cloture", [], "any", false, false, false, 14)) < twig_date_converter($this->env))) {
                    // line 15
                    echo "                <tr class=\"traending_ico_tr\">
                    <td data-label=\"ratings\" class=\"ratings_td\">
                        <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 17), "html", null, true);
                    echo "</a>
                    </td>
                    <td data-label=\"ico_date\">
                        ";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ticket_vendu", [], "any", false, false, false, 20), "html", null, true);
                    echo "
                    </td>
                    <td data-label=\"ico_date\">
                        <h4 style=\"display:inline-block;\">
                            ";
                    // line 24
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "publier", [], "any", false, false, false, 24)) {
                        // line 25
                        echo "                            <span class=\"badge btn-primary\">
                              oui
                            </span>
                            ";
                    } else {
                        // line 29
                        echo "                            <span class=\"badge badge-danger\">
                              No</span>
                            ";
                    }
                    // line 31
                    echo "        </h4>
                    </td>
                    <td data-label=\"action\">
                    <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"";
                    // line 34
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 34)]);
                    echo "\" class=\"action-btn\">View</a>
                    <a class=\"btn btn-warning btn-sm\" href=\"";
                    // line 35
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 35)]);
                    echo "\" class=\"action-btn\">Edit</a>
                    <a class=\"btn btn-danger btn-sm\" href=\"";
                    // line 36
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
            echo "    </tbody>
</table> 
    ";
        } else {
            // line 46
            echo "        <h3>NO EVENT FOUND</h3>
    ";
        }
        // line 48
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/admin/eventsexpire.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 48,  124 => 46,  119 => 43,  112 => 41,  103 => 36,  99 => 35,  95 => 34,  90 => 31,  85 => 29,  79 => 25,  77 => 24,  70 => 20,  64 => 17,  60 => 15,  58 => 14,  52 => 13,  40 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\" style=\"text-align:center;display:block;\">
        {% if events|length%}
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
        {% for item in events %} 
        {% if date(item.periode.date_cloture) < date()%}
                <tr class=\"traending_ico_tr\">
                    <td data-label=\"ratings\" class=\"ratings_td\">
                        <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">{{item.nom}}</a>
                    </td>
                    <td data-label=\"ico_date\">
                        {{item.ticket_vendu}}
                    </td>
                    <td data-label=\"ico_date\">
                        <h4 style=\"display:inline-block;\">
                            {% if item.publier %}
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
    {%endif%}
</div>", "C:\\wamp64\\www\\install-master1/themes/demo/partials/admin/eventsexpire.htm", "");
    }
}
