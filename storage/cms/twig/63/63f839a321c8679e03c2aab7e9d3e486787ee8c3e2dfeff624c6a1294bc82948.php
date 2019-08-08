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

/* C:\wamp64\www\install-master1/themes/demo/partials/achat/achat.htm */
class __TwigTemplate_8a08a9aadda38eef3a79bd46917ca16eccc1710fdaaebfa1fe93336d97be5f10 extends \Twig\Template
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
        if (twig_length_filter($this->env, ($context["achats"] ?? null))) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["achats"] ?? null));
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
                    
                              
                                ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 15), "nom", [], "any", false, false, false, 15), "html", null, true);
                echo "
        
                        </td>
                        <td data-label=\"action\">
                        <form data-request=\"onSup\">
                                <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"";
                // line 20
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "event_id", [], "any", false, false, false, 20)]);
                echo "\" class=\"action-btn\">View</a>
                                <input type=\"hidden\" name=\"supprimer\" value=\"";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "event_id", [], "any", false, false, false, 21), "html", null, true);
                echo "\"> 
                                <a class=\"btn\" id=\"annulerAchat\" data-request=\"onAnnuler\" data-request-data=\"redirect: '/'\" href=\"\">Annuler un achat</a>                                              
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
            // line 29
            echo "        ";
        } else {
            // line 30
            echo "            <h3>NO demande</h3>
        ";
        }
        // line 32
        echo "    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/achat/achat.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 32,  87 => 30,  84 => 29,  70 => 21,  66 => 20,  58 => 15,  40 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\" style=\"text-align:center;display:block;\">
        {% if achats|length%}
        {% for item in achats %}                                   
              <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                <thead>
                    <tr>
                    <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
                    <th scope=\"col\" class=\"action_th\" >ACTIONS</th>                                            </tr>
                </thead>
                <tbody>
                    <tr class=\"traending_ico_tr\">
                        <td data-label=\"ratings\" class=\"ratings_td\">
                    
                              
                                {{item.event.nom}}
        
                        </td>
                        <td data-label=\"action\">
                        <form data-request=\"onSup\">
                                <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"{{'manage_event_view'|page({event_id:item.event_id})}}\" class=\"action-btn\">View</a>
                                <input type=\"hidden\" name=\"supprimer\" value=\"{{item.event_id}}\"> 
                                <a class=\"btn\" id=\"annulerAchat\" data-request=\"onAnnuler\" data-request-data=\"redirect: '/'\" href=\"\">Annuler un achat</a>                                              
                        </form>                 
                      </td>                      
                    </tr>
                </tbody>
              </table>                        
            {% endfor%}
        {%else%}
            <h3>NO demande</h3>
        {%endif%}
    </div>", "C:\\wamp64\\www\\install-master1/themes/demo/partials/achat/achat.htm", "");
    }
}
