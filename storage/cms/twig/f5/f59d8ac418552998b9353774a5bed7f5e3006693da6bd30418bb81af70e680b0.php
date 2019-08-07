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
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "                                
              <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                <thead>
                    <tr>
                    <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
                    <th scope=\"col\" class=\"founding_target_th\" >SALES</th>
                    <th scope=\"col\" class=\"founding_target_th\" >Montant</th>
                    <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
                    <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
                    <th scope=\"col\" class=\"action_th\" >ACTIVATION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class=\"traending_ico_tr\">
                        <td data-label=\"ratings\" class=\"ratings_td\">
                            <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 18), "html", null, true);
                echo "</a>
                        </td>
                        <td data-label=\"ico_date\">
                            0
                        </td>
                        <td data-label=\"ico_date\">
                                ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant", [], "any", false, false, false, 24), "html", null, true);
                echo "
                            </td>
                        <td data-label=\"ico_date\">
                            <h4 style=\"display:inline-block;\">
                                
                                    ";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["item"], "publier", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "                                    <span class=\"badge btn-primary\">
                                      oui
                                    </span>
                                    ";
                } else {
                    // line 34
                    echo "                                    <span class=\"badge badge-danger\">
                                      No</span>
                                    ";
                }
                // line 36
                echo "                                                
                                </h4>
                        </td>
                        <td data-label=\"action\">
                        <form data-request=\"onSave\">
                                <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"";
                // line 41
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 41)]);
                echo "\" class=\"action-btn\">View</a>
                                <a class=\"btn btn-warning btn-sm\" href=\"";
                // line 42
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 42)]);
                echo "\" class=\"action-btn\">Edit</a>
                                <input type=\"hidden\" name=\"supprimer\" value=\"";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "\"> 
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>                                               
                        </form>                 
                      </td>   
                      <td>
                          <form data-request=\"onActive\">
                                <input type=\"hidden\" name=\"activer\" value=\"";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo "\"> 
                                <input type=\"hidden\" name=\"pub\" value=\"";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "publier", [], "any", false, false, false, 50), "html", null, true);
                echo "\"> 
                                ";
                // line 51
                if (twig_get_attribute($this->env, $this->source, $context["item"], "publier", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "                                <button type=\"submit\" class=\"btn btn-primary btn-sm\">Desactiver</button>                                               
                          
                                ";
                } else {
                    // line 55
                    echo "                                <button type=\"submit\" class=\"btn btn-warning btn-sm\">Activer</button>
                                ";
                }
                // line 57
                echo "                            </form>
                      </td>                          
                    </tr>
                </tbody>
              </table>                         
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        ";
        } else {
            // line 64
            echo "            <h3>NO EVENT FOUND</h3>
        ";
        }
        // line 66
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
        return array (  152 => 66,  148 => 64,  145 => 63,  134 => 57,  130 => 55,  125 => 52,  123 => 51,  119 => 50,  115 => 49,  106 => 43,  102 => 42,  98 => 41,  91 => 36,  86 => 34,  80 => 30,  78 => 29,  70 => 24,  61 => 18,  40 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\" style=\"text-align:center;display:block;\">
        {% if events|length%}
        {% for item in events %}                                
              <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                <thead>
                    <tr>
                    <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
                    <th scope=\"col\" class=\"founding_target_th\" >SALES</th>
                    <th scope=\"col\" class=\"founding_target_th\" >Montant</th>
                    <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
                    <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
                    <th scope=\"col\" class=\"action_th\" >ACTIVATION</th>
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
                                {{item.montant}}
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
                </tbody>
              </table>                         
            {% endfor%}
        {%else%}
            <h3>NO EVENT FOUND</h3>
        {%endif%}
    </div>", "C:\\wamp64\\www\\install-master1/themes/demo/partials/admin/events.htm", "");
    }
}
