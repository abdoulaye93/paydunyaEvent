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

/* C:\wamp64\www\install-master/themes/demo/partials/admin/eventspub.htm */
class __TwigTemplate_bd26f9be14cda295b12116596167b4831c75c5e84331efa992133ee194675fd6 extends \Twig\Template
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
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "  
        ";
                // line 4
                if (twig_get_attribute($this->env, $this->source, $context["item"], "publier", [], "any", false, false, false, 4)) {
                    echo "                            
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
                <tr class=\"traending_ico_tr\">
                    <td data-label=\"ratings\" class=\"ratings_td\">
                        <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 17), "html", null, true);
                    echo "</a>
                    </td>
                    <td data-label=\"ico_date\">
                        0
                    </td>
                    <td data-label=\"ico_date\">
                        <h4 style=\"display:inline-block;\"><span class=\"badge badge-danger\">No</span></h4>
                    </td>
                    <td data-label=\"action\">
                    <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"";
                    // line 26
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 26)]);
                    echo "\" class=\"action-btn\">View</a>
                    <a class=\"btn btn-warning btn-sm\" href=\"";
                    // line 27
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 27)]);
                    echo "\" class=\"action-btn\">Edit</a>
                    <a class=\"btn btn-danger btn-sm\" href=\"";
                    // line 28
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit");
                    echo "\" class=\"action-btn\" data-toggle=\"modal\" data-target=\"#demande-modal\">
                        Annuler
                    </a>                                                                    
                  </td>                             
                </tr>
            </tbody>
          </table> 
          ";
                }
                // line 35
                echo "                     
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
        } else {
            // line 38
            echo "        <h3>NO EVENT FOUND</h3>
    ";
        }
        // line 40
        echo " </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/demo/partials/admin/eventspub.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  104 => 38,  101 => 37,  94 => 35,  83 => 28,  79 => 27,  75 => 26,  63 => 17,  47 => 4,  40 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\" style=\"text-align:center;display:block;\">                                                       
        {% if events|length%}
        {% for item in events %}  
        {%if item.publier%}                            
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
                <tr class=\"traending_ico_tr\">
                    <td data-label=\"ratings\" class=\"ratings_td\">
                        <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">{{item.nom}}</a>
                    </td>
                    <td data-label=\"ico_date\">
                        0
                    </td>
                    <td data-label=\"ico_date\">
                        <h4 style=\"display:inline-block;\"><span class=\"badge badge-danger\">No</span></h4>
                    </td>
                    <td data-label=\"action\">
                    <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"{{ 'manage_event_view'|page({event_id:item.id}) }}\" class=\"action-btn\">View</a>
                    <a class=\"btn btn-warning btn-sm\" href=\"{{ 'manage_event_edit'|page({event_id:item.id}) }}\" class=\"action-btn\">Edit</a>
                    <a class=\"btn btn-danger btn-sm\" href=\"{{ 'manage_event_edit'|page }}\" class=\"action-btn\" data-toggle=\"modal\" data-target=\"#demande-modal\">
                        Annuler
                    </a>                                                                    
                  </td>                             
                </tr>
            </tbody>
          </table> 
          {%endif%}                     
        {% endfor%}
    {%else%}
        <h3>NO EVENT FOUND</h3>
    {%endif%}
 </div>", "C:\\wamp64\\www\\install-master/themes/demo/partials/admin/eventspub.htm", "");
    }
}
