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

/* /opt/lampp/htdocs/paydunyaEvent/themes/demo/partials/events/manageevent.htm */
class __TwigTemplate_59b7db222239c4276275d8a5daabf44a4d4831f59d7a2a5d268727816063eed9 extends \Twig\Template
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
         <th scope=\"col\" class=\"action_th\" >Prosition</th>
         </tr>
     </thead>
     <tbody>
         <tr class=\"traending_ico_tr\">
             <td data-label=\"ratings\" class=\"ratings_td\">
                 <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 21), "html", null, true);
                echo "</a>
             </td>
             <td data-label=\"ico_date\">
                 0
             </td>
             <td data-label=\"ico_date\">
                 <h4 style=\"display:inline-block;\">
                         ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, $context["item"], "publier", [], "any", false, false, false, 28)) {
                    // line 29
                    echo "                         <span class=\"badge btn-primary\">
                           oui
                         </span>
                         ";
                } else {
                    // line 33
                    echo "                         <span class=\"badge badge-danger\">
                           No</span>
                         ";
                }
                // line 35
                echo "        </h4>
             </td>
             <td data-label=\"action\">
             <form data-request=\"onAnnule\">
                     <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"";
                // line 39
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 39)]);
                echo "\" class=\"action-btn\">View</a>
                     ";
                // line 40
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "modif_droit", [], "any", false, false, false, 40) == false)) {
                    // line 41
                    echo "                     <a class=\"btn btn-warning btn-sm\" href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 41)]);
                    echo "\" class=\"action-btn\">Edit</a>
                     ";
                }
                // line 43
                echo "                     <input type=\"hidden\" name=\"event_id\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "\"> 
                     <input type=\"hidden\" name=\"user_id\" value=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 44), "html", null, true);
                echo "\"> 
                     <input type=\"hidden\" name=\"annule\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "annule_demande", [], "any", false, false, false, 45), "html", null, true);
                echo "\"> 
                     ";
                // line 46
                if (twig_get_attribute($this->env, $this->source, $context["item"], "annule_demande", [], "any", false, false, false, 46)) {
                    // line 47
                    echo "                     <button type=\"submit\" class=\"btn btn-warning btn-sm\">Annuler la demande</button>                                               
               
                     ";
                } else {
                    // line 50
                    echo "                     <button type=\"submit\" class=\"btn btn-danger btn-sm\">Annuler</button>
                     ";
                }
                // line 52
                echo "                 </form>                                                                 
           </td>  
           <td>
                 <a class=\"btn btn-warning btn-sm\" href=\"#\" data-toggle=\"modal\" data-target=\"#invite-modal\" class=\"action-btn\">inviter un autre</a>
           </td>   
           <td>
                ";
                // line 58
                if (twig_get_attribute($this->env, $this->source, $context["item"], "promo", [], "any", false, false, false, 58)) {
                    // line 59
                    echo "                         <span class=\"badge btn-primary\">
                                <a class=\"btn btn-warning btn-sm\" href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadUrl", [], "method", false, false, false, 60), "html", null, true);
                    echo "/promo/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 60), "html", null, true);
                    echo "\"  class=\"action-btn\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "code_promo", [], "any", false, false, false, 60), "html", null, true);
                    echo "</a>
                         </span>
                         ";
                } else {
                    // line 63
                    echo "                         <form data-request=\"onPromo\">
                                <input type=\"hidden\" name=\"event_id\" value=\"";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 64), "html", null, true);
                    echo "\"> 
                                <input type=\"hidden\" name=\"promo\" value=\"";
                    // line 65
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "promo", [], "any", false, false, false, 65), "html", null, true);
                    echo "\"> 
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Generer un code promo</button>
                        </form> 
                         ";
                }
                // line 69
                echo "          </td>    
          <td>
              ";
                // line 71
                if (twig_get_attribute($this->env, $this->source, $context["item"], "position_id", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "                 <a class=\"btn btn-warning btn-sm\" href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("position", ["lat" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "position", [], "any", false, false, false, 72), "lat", [], "any", false, false, false, 72), "long" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "position", [], "any", false, false, false, 72), "long", [], "any", false, false, false, 72)]);
                    echo "\" class=\"action-btn\">Voir position</a>
              ";
                } else {
                    // line 74
                    echo "                    <form data-request=\"onPosition\">
                            <a href=\"\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#modalLoginForm\">coordonnée</a>
                    </form> 
                   
              ";
                }
                // line 79
                echo "          </td>                       
         </tr>
     </tbody>
   </table>                         
 
   <div class=\"modal fade\" id=\"modalLoginForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
       <form data-request=\"onPosition\">
           <input type=\"hidden\" name=\"event\" value=\"";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 86), "html", null, true);
                echo "\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
            <div class=\"modal-header text-center\">
                <h4 class=\"modal-title w-100 font-weight-bold\">Geolocalisation</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body mx-3\">
                <div class=\"md-form mb-5\">
                <i class=\"fas fa-envelope prefix grey-text\"></i>
                <input type=\"text\" id=\"defaultForm-email\" class=\"form-control validate\" name=\"lat\">
                <label data-error=\"wrong\" data-success=\"right\" for=\"defaultForm-email\">Latitude</label>
                </div>

                <div class=\"md-form mb-4\">
                <i class=\"fas fa-lock prefix grey-text\"></i>
                <input type=\"text\" id=\"defaultForm-pass\" class=\"form-control validate\" name=\"long\">
                <label data-error=\"wrong\" data-success=\"right\" for=\"defaultForm-pass\">Longitude</label>
                </div>

            </div>
            <div class=\"modal-footer d-flex justify-content-center\">
                <button class=\"btn btn-default\" type=\"submit\">Send</button>
            </div>
            </div>
        </div>
    </form>
   </div>
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo " ";
        } else {
            // line 118
            echo " <div class=\"row\" class=\"text-center\">
        <h3 class=\"\">NO  event FOUND</h3>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/paydunyaEvent/themes/demo/partials/events/manageevent.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 118,  230 => 117,  193 => 86,  184 => 79,  177 => 74,  171 => 72,  169 => 71,  165 => 69,  158 => 65,  154 => 64,  151 => 63,  141 => 60,  138 => 59,  136 => 58,  128 => 52,  124 => 50,  119 => 47,  117 => 46,  113 => 45,  109 => 44,  104 => 43,  98 => 41,  96 => 40,  92 => 39,  86 => 35,  81 => 33,  75 => 29,  73 => 28,  63 => 21,  44 => 4,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%set id=user.id%}
{% if events|length%}
   {% for item in events %}
   
                                   
   <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
     <thead>
         <tr>
         <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
         <th scope=\"col\" class=\"founding_target_th\" >SALES</th>
         <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
         <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
         <th scope=\"col\" class=\"action_th\" >INVITATION</th>
         <th scope=\"col\" class=\"action_th\" >Promotion</th>
         <th scope=\"col\" class=\"action_th\" >Prosition</th>
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
                     {%if item.modif_droit==false%}
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
                                <a class=\"btn btn-warning btn-sm\" href=\"{{__SELF__.loadUrl()}}/promo/{{item.id}}\"  class=\"action-btn\">{{item.code_promo}}</a>
                         </span>
                         {%else%}
                         <form data-request=\"onPromo\">
                                <input type=\"hidden\" name=\"event_id\" value=\"{{item.id}}\"> 
                                <input type=\"hidden\" name=\"promo\" value=\"{{item.promo}}\"> 
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Generer un code promo</button>
                        </form> 
                         {%endif%}
          </td>    
          <td>
              {%if item.position_id%}
                 <a class=\"btn btn-warning btn-sm\" href=\"{{ 'position'|page({lat:item.position.lat,long:item.position.long}) }}\" class=\"action-btn\">Voir position</a>
              {%else%}
                    <form data-request=\"onPosition\">
                            <a href=\"\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#modalLoginForm\">coordonnée</a>
                    </form> 
                   
              {%endif%}
          </td>                       
         </tr>
     </tbody>
   </table>                         
 
   <div class=\"modal fade\" id=\"modalLoginForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
       <form data-request=\"onPosition\">
           <input type=\"hidden\" name=\"event\" value=\"{{item.id}}\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
            <div class=\"modal-header text-center\">
                <h4 class=\"modal-title w-100 font-weight-bold\">Geolocalisation</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body mx-3\">
                <div class=\"md-form mb-5\">
                <i class=\"fas fa-envelope prefix grey-text\"></i>
                <input type=\"text\" id=\"defaultForm-email\" class=\"form-control validate\" name=\"lat\">
                <label data-error=\"wrong\" data-success=\"right\" for=\"defaultForm-email\">Latitude</label>
                </div>

                <div class=\"md-form mb-4\">
                <i class=\"fas fa-lock prefix grey-text\"></i>
                <input type=\"text\" id=\"defaultForm-pass\" class=\"form-control validate\" name=\"long\">
                <label data-error=\"wrong\" data-success=\"right\" for=\"defaultForm-pass\">Longitude</label>
                </div>

            </div>
            <div class=\"modal-footer d-flex justify-content-center\">
                <button class=\"btn btn-default\" type=\"submit\">Send</button>
            </div>
            </div>
        </div>
    </form>
   </div>
 {% endfor %}
 {%else%}
 <div class=\"row\" class=\"text-center\">
        <h3 class=\"\">NO  event FOUND</h3>
    </div>
{%endif%}", "/opt/lampp/htdocs/paydunyaEvent/themes/demo/partials/events/manageevent.htm", "");
    }
}
