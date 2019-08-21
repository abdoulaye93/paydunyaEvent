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

/* C:\wamp64\www\install-master1/themes/demo/partials/admin/eventspub.htm */
class __TwigTemplate_830a9f8dec4e2e87e0ae6e6b589982bcfcd241c8a3fde387633bad05890051b9 extends \Twig\Template
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
                <th scope=\"col\" class=\"founding_target_th\" >Montants</th>
                <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
                <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
                </tr>
            </thead>
            <tbody>
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "  
        ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["item"], "publier", [], "any", false, false, false, 15)) {
                    echo "                            
                <tr class=\"traending_ico_tr\">
                    <td data-label=\"ratings\" class=\"ratings_td\">
                        <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 18), "html", null, true);
                    echo "</a>
                    </td>
                    <td data-label=\"ico_date\">
                        ";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ticket_vendu", [], "any", false, false, false, 21), "html", null, true);
                    echo "
                    </td>
                    <td data-label=\"ico_date\">
                        ";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["tickets"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["it"]) {
                        // line 25
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["it"], "event_id", [], "any", false, false, false, 25) == twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 25))) {
                            // line 26
                            echo "                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["it"], "montant", [], "any", false, false, false, 26), "html", null, true);
                            echo "&nbsp&nbsp
                        ";
                        }
                        // line 28
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['it'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "                    </td>
                    <td data-label=\"ico_date\">
                        <h4 style=\"display:inline-block;\">
                            ";
                    // line 32
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "publier", [], "any", false, false, false, 32)) {
                        // line 33
                        echo "                            <span class=\"badge btn-primary\">
                              oui
                            </span>
                            ";
                    } else {
                        // line 37
                        echo "                            <span class=\"badge badge-danger\">
                              No</span>
                            ";
                    }
                    // line 39
                    echo "        </h4>
                    </td>
                    <td data-label=\"action\">
                    <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"";
                    // line 42
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 42)]);
                    echo "\" class=\"action-btn\">View</a>
                    <a class=\"btn btn-warning btn-sm\" href=\"";
                    // line 43
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 43)]);
                    echo "\" class=\"action-btn\">Edit</a>
                    <a class=\"btn btn-danger btn-sm\" href=\"";
                    // line 44
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit");
                    echo "\" class=\"action-btn\" data-toggle=\"modal\" data-target=\"#demande-modal\">
                        Annuler
                    </a>                                                                    
                  </td>                             
                </tr>
          ";
                }
                // line 49
                echo "                     
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "    </tbody>
</table> 
    ";
        } else {
            // line 54
            echo "        <h3>NO EVENT FOUND</h3>
    ";
        }
        // line 56
        echo " </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/admin/eventspub.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 56,  148 => 54,  143 => 51,  136 => 49,  127 => 44,  123 => 43,  119 => 42,  114 => 39,  109 => 37,  103 => 33,  101 => 32,  96 => 29,  90 => 28,  84 => 26,  81 => 25,  77 => 24,  71 => 21,  65 => 18,  59 => 15,  53 => 14,  40 => 3,  38 => 2,  35 => 1,);
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
                <th scope=\"col\" class=\"founding_target_th\" >Montants</th>
                <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
                <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
                </tr>
            </thead>
            <tbody>
        {% for item in events %}  
        {%if item.publier%}                            
                <tr class=\"traending_ico_tr\">
                    <td data-label=\"ratings\" class=\"ratings_td\">
                        <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">{{item.nom}}</a>
                    </td>
                    <td data-label=\"ico_date\">
                        {{item.ticket_vendu}}
                    </td>
                    <td data-label=\"ico_date\">
                        {%for it in tickets%}
                        {%if it.event_id==item.id%}
                        {{it.montant}}&nbsp&nbsp
                        {%endif%}
                        {%endfor%}
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
 </div>", "C:\\wamp64\\www\\install-master1/themes/demo/partials/admin/eventspub.htm", "");
    }
}
