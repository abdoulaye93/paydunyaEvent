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

/* C:\wamp64\www\install-master1/themes/demo/partials/admin/events.htm */
class __TwigTemplate_6fd3c3fe45b006ee7289778c76692b1e128605ccc8fcab51c07b68c2b33a67db extends \Twig\Template
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
                <th scope=\"col\" class=\"action_th\" >ACTIVATION</th>
                </tr>
            </thead>
            <tbody>
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "                                
            
                    <tr class=\"traending_ico_tr\">
                        <td data-label=\"ratings\" class=\"ratings_td\">
                            <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 19), "html", null, true);
                echo "</a>
                        </td>
                        <td data-label=\"ico_date\">
                            ";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ticket_vendu", [], "any", false, false, false, 22), "html", null, true);
                echo "
                        </td>
                        <td data-label=\"ico_date\">
                                ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tickets"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["it"]) {
                    // line 26
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["it"], "event_id", [], "any", false, false, false, 26) == twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 26))) {
                        // line 27
                        echo "                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["it"], "montant", [], "any", false, false, false, 27), "html", null, true);
                        echo "&nbsp&nbsp
                                ";
                    }
                    // line 29
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['it'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "                            </td>
                        <td data-label=\"ico_date\">
                            <h4 style=\"display:inline-block;\">
                                
                                    ";
                // line 34
                if (twig_get_attribute($this->env, $this->source, $context["item"], "publier", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "                                    <span class=\"badge btn-primary\">
                                      oui
                                    </span>
                                    ";
                } else {
                    // line 39
                    echo "                                    <span class=\"badge badge-danger\">
                                      No</span>
                                    ";
                }
                // line 41
                echo "                                                
                                </h4>
                        </td>
                        <td data-label=\"action\">
                        <form data-request=\"onSave\">
                                <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"";
                // line 46
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 46)]);
                echo "\" class=\"action-btn\">View</a>
                                <a class=\"btn btn-warning btn-sm\" href=\"";
                // line 47
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 47)]);
                echo "\" class=\"action-btn\">Edit</a>
                                <input type=\"hidden\" name=\"supprimer\" value=\"";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 48), "html", null, true);
                echo "\"> 
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>                                               
                        </form>                 
                      </td>   
                      <td>
                          <form data-request=\"onActive\">
                                <input type=\"hidden\" name=\"activer\" value=\"";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 54), "html", null, true);
                echo "\"> 
                                <input type=\"hidden\" name=\"pub\" value=\"";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "publier", [], "any", false, false, false, 55), "html", null, true);
                echo "\"> 
                                ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["item"], "publier", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "                                <button type=\"submit\" class=\"btn btn-primary btn-sm\">Desactiver</button>                                               
                          
                                ";
                } else {
                    // line 60
                    echo "                                <button type=\"submit\" class=\"btn btn-warning btn-sm\">Activer</button>
                                ";
                }
                // line 62
                echo "                            </form>
                      </td>                          
                    </tr>
                                   
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "        </tbody>
    </table>     
        ";
        } else {
            // line 70
            echo "            <h3>NO EVENT FOUND</h3>
        ";
        }
        // line 72
        echo "    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/admin/events.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 72,  171 => 70,  166 => 67,  156 => 62,  152 => 60,  147 => 57,  145 => 56,  141 => 55,  137 => 54,  128 => 48,  124 => 47,  120 => 46,  113 => 41,  108 => 39,  102 => 35,  100 => 34,  94 => 30,  88 => 29,  82 => 27,  79 => 26,  75 => 25,  69 => 22,  63 => 19,  54 => 15,  40 => 3,  38 => 2,  35 => 1,);
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
                <th scope=\"col\" class=\"action_th\" >ACTIVATION</th>
                </tr>
            </thead>
            <tbody>
        {% for item in events %}                                
            
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
                                    {%endif%}                                                
                                </h4>
                        </td>
                        <td data-label=\"action\">
                        <form data-request=\"onSave\">
                                <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"{{ 'manage_event_view'|page({event_id:item.id}) }}\" class=\"action-btn\">View</a>
                                <a class=\"btn btn-warning btn-sm\" href=\"{{ 'manage_event_edit'|page({event_id:item.id}) }}\" class=\"action-btn\">Edit</a>
                                <input type=\"hidden\" name=\"supprimer\" value=\"{{item.id}}\"> 
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>                                               
                        </form>                 
                      </td>   
                      <td>
                          <form data-request=\"onActive\">
                                <input type=\"hidden\" name=\"activer\" value=\"{{item.id}}\"> 
                                <input type=\"hidden\" name=\"pub\" value=\"{{item.publier}}\"> 
                                {% if item.publier %}
                                <button type=\"submit\" class=\"btn btn-primary btn-sm\">Desactiver</button>                                               
                          
                                {%else%}
                                <button type=\"submit\" class=\"btn btn-warning btn-sm\">Activer</button>
                                {%endif%}
                            </form>
                      </td>                          
                    </tr>
                                   
            {% endfor%}
        </tbody>
    </table>     
        {%else%}
            <h3>NO EVENT FOUND</h3>
        {%endif%}
    </div>", "C:\\wamp64\\www\\install-master1/themes/demo/partials/admin/events.htm", "");
    }
}
