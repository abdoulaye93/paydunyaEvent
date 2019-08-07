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

/* C:\wamp64\www\install-master1/themes/demo/partials/demande/demandes.htm */
class __TwigTemplate_7e9d854bdb7430a7e9eef70be07517d1b35d48db11ac23b5fdd54e1bd7072424 extends \Twig\Template
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
        if (twig_length_filter($this->env, ($context["demandes"] ?? null))) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["demandes"] ?? null));
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
                // line 13
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 13), "demande_notif", [], "any", false, false, false, 13) != 0)) {
                    // line 14
                    echo "                               <strong> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 14), "nom", [], "any", false, false, false, 14), "html", null, true);
                    echo "</strong>
                                ";
                } else {
                    // line 16
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16), "html", null, true);
                    echo "
                            ";
                }
                // line 17
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
            echo "        ";
        } else {
            // line 31
            echo "            <h3>NO demande</h3>
        ";
        }
        // line 33
        echo "    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/demande/demandes.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 33,  97 => 31,  94 => 30,  80 => 22,  76 => 21,  70 => 17,  64 => 16,  58 => 14,  56 => 13,  40 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\" style=\"text-align:center;display:block;\">
        {% if demandes|length%}
        {% for item in demandes %}                                   
              <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                <thead>
                    <tr>
                    <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
                    <th scope=\"col\" class=\"action_th\" >ACTIONS</th>                                            </tr>
                </thead>
                <tbody>
                    <tr class=\"traending_ico_tr\">
                        <td data-label=\"ratings\" class=\"ratings_td\">
                            <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">{%if item.event.demande_notif!=0%}
                               <strong> {{item.event.nom}}</strong>
                                {%else%}
                                {{item.event.nom}}
                            {%endif%}</a>
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
        {%else%}
            <h3>NO demande</h3>
        {%endif%}
    </div>", "C:\\wamp64\\www\\install-master1/themes/demo/partials/demande/demandes.htm", "");
    }
}
