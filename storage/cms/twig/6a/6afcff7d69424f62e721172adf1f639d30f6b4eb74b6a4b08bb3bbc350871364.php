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

/* C:\wamp64\www\install-master/themes/demo/partials/events/manageevent.htm */
class __TwigTemplate_a98f29aaeb70efacd3ada509c2ac000a2ba378765c1e3a780eacd9ae5f57f63d extends \Twig\Template
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
                    echo "                                   
   <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
     <thead>
         <tr>
         <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
         <th scope=\"col\" class=\"founding_target_th\" >SALES</th>
         <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
         <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
         <th scope=\"col\" class=\"action_th\" >INVITATION</th>
         <th scope=\"col\" class=\"action_th\" >Promotion</th>
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
                 0
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
                     ";
                    // line 39
                    if ((twig_date_converter($this->env) < twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date_debut", [], "any", false, false, false, 39)))) {
                        // line 40
                        echo "                     <a class=\"btn btn-warning btn-sm\" href=\"";
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 40)]);
                        echo "\" class=\"action-btn\">Edit</a>
                     ";
                    }
                    // line 42
                    echo "                     <input type=\"hidden\" name=\"event_id\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 42), "html", null, true);
                    echo "\"> 
                     <input type=\"hidden\" name=\"user_id\" value=\"";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 43), "html", null, true);
                    echo "\"> 
                     <input type=\"hidden\" name=\"annule\" value=\"";
                    // line 44
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "annule_demande", [], "any", false, false, false, 44), "html", null, true);
                    echo "\"> 
                     ";
                    // line 45
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "annule_demande", [], "any", false, false, false, 45)) {
                        // line 46
                        echo "                     <button type=\"submit\" class=\"btn btn-warning btn-sm\">Annuler la demande</button>                                               
               
                     ";
                    } else {
                        // line 49
                        echo "                     <button type=\"submit\" class=\"btn btn-danger btn-sm\">Annuler</button>
                     ";
                    }
                    // line 51
                    echo "                 </form>                                                                 
           </td>  
           <td>
                 <a class=\"btn btn-warning btn-sm\" href=\"#\" data-toggle=\"modal\" data-target=\"#invite-modal\" class=\"action-btn\">inviter un autre</a>
           </td>   
           <td>
                ";
                    // line 57
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "promo", [], "any", false, false, false, 57)) {
                        // line 58
                        echo "                         <span class=\"badge btn-primary\">
                                <a class=\"btn btn-warning btn-sm\" href=\"";
                        // line 59
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadUrl", [], "method", false, false, false, 59), "html", null, true);
                        echo "/promo/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 59), "html", null, true);
                        echo "\"  class=\"action-btn\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadUrl", [], "method", false, false, false, 59), "html", null, true);
                        echo "/promo/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 59), "html", null, true);
                        echo "</a>
                         </span>
                         ";
                    } else {
                        // line 62
                        echo "                         <form data-request=\"onPromo\">
                                <input type=\"hidden\" name=\"event_id\" value=\"";
                        // line 63
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 63), "html", null, true);
                        echo "\"> 
                                <input type=\"hidden\" name=\"promo\" value=\"";
                        // line 64
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "promo", [], "any", false, false, false, 64), "html", null, true);
                        echo "\"> 
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Generer une promotion</button>
                        </form> 
                         ";
                    }
                    // line 68
                    echo "          </td>                           
         </tr>
     </tbody>
   </table>                         
 
       ";
                } else {
                    // line 74
                    echo "       ";
                }
                // line 75
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo " ";
        } else {
            // line 77
            echo " <div class=\"row\" class=\"text-center\">
        <h3 class=\"\">NO  event FOUND</h3>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/demo/partials/events/manageevent.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 77,  185 => 76,  179 => 75,  176 => 74,  168 => 68,  161 => 64,  157 => 63,  154 => 62,  142 => 59,  139 => 58,  137 => 57,  129 => 51,  125 => 49,  120 => 46,  118 => 45,  114 => 44,  110 => 43,  105 => 42,  99 => 40,  97 => 39,  93 => 38,  87 => 34,  82 => 32,  76 => 28,  74 => 27,  64 => 20,  47 => 5,  44 => 4,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%set id=user.id%}
{% if events|length%}
   {% for item in events %}
   {% if item.user_id==9%}
                                   
   <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
     <thead>
         <tr>
         <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
         <th scope=\"col\" class=\"founding_target_th\" >SALES</th>
         <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
         <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
         <th scope=\"col\" class=\"action_th\" >INVITATION</th>
         <th scope=\"col\" class=\"action_th\" >Promotion</th>
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
                     {%if date() < date(item.date_debut)%}
                     <a class=\"btn btn-warning btn-sm\" href=\"{{ 'manage_event_edit'|page({event_id:item.id}) }}\" class=\"action-btn\">Edit</a>
                     {%endif%}
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
           <td>
                {% if item.promo %}
                         <span class=\"badge btn-primary\">
                                <a class=\"btn btn-warning btn-sm\" href=\"{{__SELF__.loadUrl()}}/promo/{{item.id}}\"  class=\"action-btn\">{{__SELF__.loadUrl()}}/promo/{{item.id}}</a>
                         </span>
                         {%else%}
                         <form data-request=\"onPromo\">
                                <input type=\"hidden\" name=\"event_id\" value=\"{{item.id}}\"> 
                                <input type=\"hidden\" name=\"promo\" value=\"{{item.promo}}\"> 
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Generer une promotion</button>
                        </form> 
                         {%endif%}
          </td>                           
         </tr>
     </tbody>
   </table>                         
 
       {%else%}
       {%endif%}
 {% endfor %}
 {%else%}
 <div class=\"row\" class=\"text-center\">
        <h3 class=\"\">NO  event FOUND</h3>
    </div>
{%endif%}", "C:\\wamp64\\www\\install-master/themes/demo/partials/events/manageevent.htm", "");
    }
}
