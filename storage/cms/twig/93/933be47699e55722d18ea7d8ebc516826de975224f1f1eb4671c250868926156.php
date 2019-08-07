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

/* C:\wamp64\www\install-master1/themes/demo/partials/events/manageeventexpire.htm */
class __TwigTemplate_a4bfcda2549adf05ec5482335c3360038a6172c54f844587dc81fb8011b211a1 extends \Twig\Template
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
        $context["id"] = twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 1);
        // line 2
        if (twig_length_filter($this->env, ($context["events"] ?? null))) {
            // line 3
            echo "   ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "   ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 4) == 9)) {
                    // line 5
                    echo "   ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "periode", [], "any", false, false, false, 5), "date_cloture", [], "any", false, false, false, 5) < twig_date_converter($this->env))) {
                        // line 6
                        echo "                                   
   <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
     <thead>
         <tr>
         <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
         <th scope=\"col\" class=\"founding_target_th\" >SALES</th>
         <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
         <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
         <th scope=\"col\" class=\"action_th\" >INVITATION</th>
         </tr>
     </thead>
     <tbody>
         <tr class=\"traending_ico_tr\">
             <td data-label=\"ratings\" class=\"ratings_td\">
                 <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">";
                        // line 20
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 20), "html", null, true);
                        echo "</a>
             </td>
             <td data-label=\"ico_date\">
                ";
                        // line 23
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ticket_vendu", [], "any", false, false, false, 23), "html", null, true);
                        echo "
             </td>
             <td data-label=\"ico_date\">
                 <h4 style=\"display:inline-block;\">
                         ";
                        // line 27
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "publier", [], "any", false, false, false, 27)) {
                            // line 28
                            echo "                         <span class=\"badge btn-primary\">
                           oui
                         </span>
                         ";
                        } else {
                            // line 32
                            echo "                         <span class=\"badge badge-danger\">
                           No</span>
                         ";
                        }
                        // line 34
                        echo "        </h4>
             </td>
             <td data-label=\"action\">
             <form data-request=\"onAnnule\">
                     <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"";
                        // line 38
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 38)]);
                        echo "\" class=\"action-btn\">View</a>
                     <a class=\"btn btn-warning btn-sm\" href=\"";
                        // line 39
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 39)]);
                        echo "\" class=\"action-btn\">Edit</a>
                     <input type=\"hidden\" name=\"event_id\" value=\"";
                        // line 40
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 40), "html", null, true);
                        echo "\"> 
                     <input type=\"hidden\" name=\"user_id\" value=\"";
                        // line 41
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 41), "html", null, true);
                        echo "\"> 
                     <input type=\"hidden\" name=\"annule\" value=\"";
                        // line 42
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "annule_demande", [], "any", false, false, false, 42), "html", null, true);
                        echo "\"> 
                     ";
                        // line 43
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "annule_demande", [], "any", false, false, false, 43)) {
                            // line 44
                            echo "                     <button type=\"submit\" class=\"btn btn-warning btn-sm\">Annuler la demande</button>                                               
               
                     ";
                        } else {
                            // line 47
                            echo "                     <button type=\"submit\" class=\"btn btn-danger btn-sm\">Annuler</button>
                     ";
                        }
                        // line 49
                        echo "                 </form>                                                                 
           </td>  
           <td>
                 <a class=\"btn btn-warning btn-sm\" href=\"#\" data-toggle=\"modal\" data-target=\"#invite-modal\" class=\"action-btn\">inviter un autre</a>
           </td>                           
         </tr>
     </tbody>
   </table>                         
 ";
                    }
                    // line 58
                    echo "       ";
                } else {
                    // line 59
                    echo "       ";
                }
                // line 60
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo " ";
        } else {
            // line 62
            echo " <div class=\"row\" class=\"text-center\">
        <h3 class=\"\">NO  event FOUND</h3>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/events/manageeventexpire.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 62,  152 => 61,  146 => 60,  143 => 59,  140 => 58,  129 => 49,  125 => 47,  120 => 44,  118 => 43,  114 => 42,  110 => 41,  106 => 40,  102 => 39,  98 => 38,  92 => 34,  87 => 32,  81 => 28,  79 => 27,  72 => 23,  66 => 20,  50 => 6,  47 => 5,  44 => 4,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%set id=user.id%}
{% if events|length%}
   {% for item in events %}
   {% if item.user_id==9%}
   {%if item.periode.date_cloture < date()%}
                                   
   <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
     <thead>
         <tr>
         <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
         <th scope=\"col\" class=\"founding_target_th\" >SALES</th>
         <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
         <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
         <th scope=\"col\" class=\"action_th\" >INVITATION</th>
         </tr>
     </thead>
     <tbody>
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
             <form data-request=\"onAnnule\">
                     <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"{{ 'manage_event_view'|page({event_id:item.id}) }}\" class=\"action-btn\">View</a>
                     <a class=\"btn btn-warning btn-sm\" href=\"{{ 'manage_event_edit'|page({event_id:item.id}) }}\" class=\"action-btn\">Edit</a>
                     <input type=\"hidden\" name=\"event_id\" value=\"{{item.id}}\"> 
                     <input type=\"hidden\" name=\"user_id\" value=\"{{item.user_id}}\"> 
                     <input type=\"hidden\" name=\"annule\" value=\"{{item.annule_demande}}\"> 
                     {% if item.annule_demande %}
                     <button type=\"submit\" class=\"btn btn-warning btn-sm\">Annuler la demande</button>                                               
               
                     {%else%}
                     <button type=\"submit\" class=\"btn btn-danger btn-sm\">Annuler</button>
                     {%endif%}
                 </form>                                                                 
           </td>  
           <td>
                 <a class=\"btn btn-warning btn-sm\" href=\"#\" data-toggle=\"modal\" data-target=\"#invite-modal\" class=\"action-btn\">inviter un autre</a>
           </td>                           
         </tr>
     </tbody>
   </table>                         
 {%endif%}
       {%else%}
       {%endif%}
 {% endfor %}
 {%else%}
 <div class=\"row\" class=\"text-center\">
        <h3 class=\"\">NO  event FOUND</h3>
    </div>
{%endif%}", "C:\\wamp64\\www\\install-master1/themes/demo/partials/events/manageeventexpire.htm", "");
    }
}
