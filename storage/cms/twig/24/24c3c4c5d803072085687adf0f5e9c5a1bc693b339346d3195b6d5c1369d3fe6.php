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
                            <div class=\"row\" style=\"text-align:center;display:block;\">
                                ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 6)) {
            // line 7
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "                                    
                                      <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                        <thead>
                                            <tr>
                                            <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
                                            <th scope=\"col\" class=\"action_th\" >ACTIONS</th>                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class=\"traending_ico_tr\">
                                                <td data-label=\"ratings\" class=\"ratings_td\">
                                                    <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
                echo "</a>
                                                </td>
                                                <td data-label=\"action\">
                                                <form data-request=\"onSup\">
                                                        <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"";
                // line 21
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "event_id", [], "any", false, false, false, 21)]);
                echo "\" class=\"action-btn\">View</a>
                                                        <input type=\"hidden\" name=\"supprimer\" value=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "event_id", [], "any", false, false, false, 22), "html", null, true);
                echo "\"> 
                                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>                                               
                                                </form>                 
                                              </td>                      
                                            </tr>
                                        </tbody>
                                      </table>                        
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                                    <div class=\"text-center\">
                                            <a target=\"_blank\" class=\"btn btn-primary\" href=\"#\">Show More</a>
                                        </div> 
                                ";
        } else {
            // line 34
            echo "                                    <h3>NO demande</h3>
                                ";
        }
        // line 36
        echo "                            </div>
                                
                         </div>";
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
        return array (  95 => 36,  91 => 34,  85 => 30,  71 => 22,  67 => 21,  60 => 17,  44 => 7,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
                <div class=\"col-lg-12 remove-col-padding-mobile\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane container active\" id=\"active_tab\">
                            <div class=\"row\" style=\"text-align:center;display:block;\">
                                {%if __SELF__.loadEvents() %}
                                    {% for item in __SELF__.loadEvents() %}                                    
                                      <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                        <thead>
                                            <tr>
                                            <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
                                            <th scope=\"col\" class=\"action_th\" >ACTIONS</th>                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class=\"traending_ico_tr\">
                                                <td data-label=\"ratings\" class=\"ratings_td\">
                                                    <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">{{item.event.nom}}</a>
                                                </td>
                                                <td data-label=\"action\">
                                                <form data-request=\"onSup\">
                                                        <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"{{'manage_event_view'|page({event_id:item.event_id})}}\" class=\"action-btn\">View</a>
                                                        <input type=\"hidden\" name=\"supprimer\" value=\"{{item.event_id}}\"> 
                                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>                                               
                                                </form>                 
                                              </td>                      
                                            </tr>
                                        </tbody>
                                      </table>                        
                                    {% endfor%}
                                    <div class=\"text-center\">
                                            <a target=\"_blank\" class=\"btn btn-primary\" href=\"#\">Show More</a>
                                        </div> 
                                {%else%}
                                    <h3>NO demande</h3>
                                {%endif%}
                            </div>
                                
                         </div>", "C:\\wamp64\\www\\install-master/plugins/event/event/components/admindemande/default.htm", "");
    }
}
