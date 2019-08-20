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

/* C:\wamp64\www\install-master1/themes/demo/partials/achat/demande.htm */
class __TwigTemplate_ed4e13634129e01f293d614235851c5df385a6e85166ced87de308c1fdac21b4 extends \Twig\Template
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
        echo "<div class=\"row\" style=\"text-align:center;display:block;padding-top: 200px;\">
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
                    <th scope=\"col\" class=\"coin_name_th\">Nom</th>
                    <th scope=\"col\" class=\"action_th\" >ACTIONS</th>                                            </tr>
                </thead>
                <tbody>
                    <tr class=\"traending_ico_tr\">
                        <td data-label=\"ratings\" class=\"ratings_td\">
                    
                             
                                ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 15), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant", [], "any", false, false, false, 15), "html", null, true);
                echo "  
        
                        </td>
                            <td>
                                ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["item"], "paye", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "                                    <a> Remboussement effectué</a>
                                ";
                } else {
                    // line 22
                    echo "                                <form data-request=\"onRembourse\">
                                        <input type=\"hidden\" name=\"event\" value=\"";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "event_id", [], "any", false, false, false, 23), "html", null, true);
                    echo "\">
                                        <input type=\"hidden\" name=\"usersender\" value=\"";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "user_send_id", [], "any", false, false, false, 24), "html", null, true);
                    echo "\">
                                        <input type=\"hidden\" name=\"montant\" value=\"10000\">
                                        <input type=\"submit\" class=\"btn\" value=\"Rembousser\">
                                    </form>
                                ";
                }
                // line 29
                echo "    
                            </td>      
                    </tr>
                </tbody>
              </table>       
                           
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        ";
        } else {
            // line 37
            echo "            <h3>NO demande</h3>
        ";
        }
        // line 39
        echo "    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/achat/demande.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 39,  103 => 37,  100 => 36,  88 => 29,  80 => 24,  76 => 23,  73 => 22,  69 => 20,  67 => 19,  58 => 15,  40 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\" style=\"text-align:center;display:block;padding-top: 200px;\">
        {% if demandes|length%}
        {% for item in demandes %}                                   
              <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                <thead>
                    <tr>
                    <th scope=\"col\" class=\"coin_name_th\">Nom</th>
                    <th scope=\"col\" class=\"action_th\" >ACTIONS</th>                                            </tr>
                </thead>
                <tbody>
                    <tr class=\"traending_ico_tr\">
                        <td data-label=\"ratings\" class=\"ratings_td\">
                    
                             
                                {{item.nom}}  {{item.montant}}  
        
                        </td>
                            <td>
                                {%if item.paye%}
                                    <a> Remboussement effectué</a>
                                {%else%}
                                <form data-request=\"onRembourse\">
                                        <input type=\"hidden\" name=\"event\" value=\"{{item.event_id}}\">
                                        <input type=\"hidden\" name=\"usersender\" value=\"{{item.user_send_id}}\">
                                        <input type=\"hidden\" name=\"montant\" value=\"10000\">
                                        <input type=\"submit\" class=\"btn\" value=\"Rembousser\">
                                    </form>
                                {%endif%}
    
                            </td>      
                    </tr>
                </tbody>
              </table>       
                           
            {% endfor%}
        {%else%}
            <h3>NO demande</h3>
        {%endif%}
    </div>", "C:\\wamp64\\www\\install-master1/themes/demo/partials/achat/demande.htm", "");
    }
}
