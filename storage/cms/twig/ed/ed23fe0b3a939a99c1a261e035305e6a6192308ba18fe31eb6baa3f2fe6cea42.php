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

/* C:\wamp64\www\install-master1/themes/demo/partials/events/manageevent.htm */
class __TwigTemplate_7ddd45286a0d51e99d560dcf8f201dbd5fa000661b984b6cd366c64a16ab9e37 extends \Twig\Template
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
            echo "                                   
<table id=\"example\" class=\"table\" style=\"width:100%\">
    <thead>
        <tr>
        <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
        <th scope=\"col\" class=\"founding_target_th\" >SALES</th>
        <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
        <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
        <th scope=\"col\" class=\"action_th\" >INVITATION</th>
        <th scope=\"col\" class=\"action_th\" >Promotion</th>
     <!--     <th scope=\"col\" class=\"action_th\" >Prosition</th>-->
        <th scope=\"col\" class=\"action_th\" >push Mail au userss</th>
        </tr>
    </thead>
    <tbody>
   ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "         <tr class=\"traending_ico_tr\">
             <td data-label=\"ratings\" class=\"ratings_td\">
                 <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 21), "html", null, true);
                echo "</a>
             </td>
             <td data-label=\"ico_date\">
                 ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ticket_vendu", [], "any", false, false, false, 24), "html", null, true);
                echo "
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
                 <div class=\"login-registration-modal\" id=\"loginRegModal\">
                    <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
                        <div class=\"modal\" tabindex=\"-1\" id=\"invite-modal\" role=\"dialog\"><!-- #login modal-->
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\"><!-- modal content start -->
                                   
                                    <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                                        <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                                            <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                                                <form data-request=\"onActive\">
                                                    <div class=\"form-element square login\"><!-- form element login start -->
                                                        <label>Entrer l'email
                                                        </label>
                                                        <input type=\"hidden\" name=\"invitevent\" value=\"";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 69), "html", null, true);
                echo "\" >
                                                        <input name=\"email\" type=\"email\" placeholder=\"Entrer l'email....\" class=\"input-field-square\">
                                                        <p class=\"eml\"></p>
                                                    </div><!-- form element login end -->
                                                  <!-- form element login end -->
                                                    <button type=\"submit\" class=\"submit-form-btn\">send</button>
                                                </form>
                                            </div><!-- login form wrapper end -->
                                        </div>
                                    </div><!-- /.tab conent-->
                                </div><!-- modal content end -->
                            </div>
                        </div><!-- /#loginmodal -->
                    </div><!-- login modal warapper satart end-->
                </div>
           </td>   
           <td>
                ";
                // line 86
                if (twig_get_attribute($this->env, $this->source, $context["item"], "promo", [], "any", false, false, false, 86)) {
                    // line 87
                    echo "                         <span class=\"badge btn-primary\">
                                <a class=\"btn btn-warning btn-sm\" href=\"";
                    // line 88
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadUrl", [], "method", false, false, false, 88), "html", null, true);
                    echo "/promo/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 88), "html", null, true);
                    echo "\"  class=\"action-btn\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "code_promo", [], "any", false, false, false, 88), "html", null, true);
                    echo "</a>
                         </span>
                         ";
                } else {
                    // line 91
                    echo "                         <a class=\"btn btn-warning btn-sm\" href=\"#\" data-toggle=\"modal\" data-target=\"#code-modal\">Generer un code promo</a>
                         <div class=\"modal fade\" id=\"code-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <form data-request=\"onPromo\">
                                    <input type=\"hidden\" name=\"event_id\" value=\"";
                    // line 94
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 94), "html", null, true);
                    echo "\"> 
                                    <input type=\"hidden\" name=\"promo\" value=\"";
                    // line 95
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "promo", [], "any", false, false, false, 95), "html", null, true);
                    echo "\"> 
                                 <div class=\"modal-dialog\" role=\"document\">
                                     <div class=\"modal-content\">
                                     <div class=\"modal-header text-center\">
                                         <h4 class=\"modal-title w-100 font-weight-bold\">Entrer le montant à reduire</h4>
                                         <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                         <span aria-hidden=\"true\">&times;</span>
                                         </button>
                                     </div>
                                     <div class=\"modal-body mx-3\">
                                         <div class=\"md-form mb-5\">
                                         <input type=\"text\" id=\"defaultForm-email\" class=\"form-control validate\" name=\"montantpromo\">
                                         <label data-error=\"wrong\" data-success=\"right\" for=\"defaultForm-email\">Montant</label>
                                         </div>
                                     </div>
                                     <div class=\"modal-footer d-flex justify-content-center\">
                                         <button class=\"btn btn-default\" type=\"submit\">Generer un code promo</button>
                                     </div>
                                     </div>
                                 </div>
                             </form>
                         </div>
                         ";
                }
                // line 118
                echo "          </td>    
        <!--  <td>
              ";
                // line 120
                if (twig_get_attribute($this->env, $this->source, $context["item"], "position_id", [], "any", false, false, false, 120)) {
                    // line 121
                    echo "                 <a class=\"btn btn-warning btn-sm\" href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("position", ["lat" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "position", [], "any", false, false, false, 121), "lat", [], "any", false, false, false, 121), "long" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "position", [], "any", false, false, false, 121), "long", [], "any", false, false, false, 121)]);
                    echo "\" class=\"action-btn\">Voir position</a>
              ";
                } else {
                    // line 123
                    echo "                    <form data-request=\"onPosition\">
                            <a href=\"\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#modalLoginForm\">coordonnée</a>
                    </form> 
                   
              ";
                }
                // line 128
                echo "          </td>  --> 
          <td>
              ";
                // line 130
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "is_push", [], "any", false, false, false, 130) != true)) {
                    // line 131
                    echo "                <form data-request=\"onPush\">
                        <input type=\"hidden\" value=\"";
                    // line 132
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 132), "html", null, true);
                    echo "\" name=\"nampush\">
                        <input type=\"hidden\" value=\"";
                    // line 133
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 133), "html", null, true);
                    echo "\" name=\"idpush\">
                        <button type=\"submit\" class=\"btn  btn-sm\">Send Mail</button>
                </form> 
              ";
                } else {
                    // line 137
                    echo "                <input type=\"submit\" disabled value=\"mail envoyer\">
              ";
                }
                // line 139
                echo "          </td>                    
         </tr>
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "</tbody>
</table>     
 ";
        } else {
            // line 145
            echo " <div class=\"row\" class=\"text-center\">
        <h3 class=\"\">NO  event FOUND</h3>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/events/manageevent.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 145,  272 => 142,  264 => 139,  260 => 137,  253 => 133,  249 => 132,  246 => 131,  244 => 130,  240 => 128,  233 => 123,  227 => 121,  225 => 120,  221 => 118,  195 => 95,  191 => 94,  186 => 91,  176 => 88,  173 => 87,  171 => 86,  151 => 69,  132 => 52,  128 => 50,  123 => 47,  121 => 46,  117 => 45,  113 => 44,  108 => 43,  102 => 41,  100 => 40,  96 => 39,  90 => 35,  85 => 33,  79 => 29,  77 => 28,  70 => 24,  64 => 21,  60 => 19,  56 => 18,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%set id=user.id%}
{% if events|length%}
                                   
<table id=\"example\" class=\"table\" style=\"width:100%\">
    <thead>
        <tr>
        <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
        <th scope=\"col\" class=\"founding_target_th\" >SALES</th>
        <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
        <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
        <th scope=\"col\" class=\"action_th\" >INVITATION</th>
        <th scope=\"col\" class=\"action_th\" >Promotion</th>
     <!--     <th scope=\"col\" class=\"action_th\" >Prosition</th>-->
        <th scope=\"col\" class=\"action_th\" >push Mail au userss</th>
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
                 <div class=\"login-registration-modal\" id=\"loginRegModal\">
                    <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
                        <div class=\"modal\" tabindex=\"-1\" id=\"invite-modal\" role=\"dialog\"><!-- #login modal-->
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\"><!-- modal content start -->
                                   
                                    <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                                        <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                                            <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                                                <form data-request=\"onActive\">
                                                    <div class=\"form-element square login\"><!-- form element login start -->
                                                        <label>Entrer l'email
                                                        </label>
                                                        <input type=\"hidden\" name=\"invitevent\" value=\"{{item.id}}\" >
                                                        <input name=\"email\" type=\"email\" placeholder=\"Entrer l'email....\" class=\"input-field-square\">
                                                        <p class=\"eml\"></p>
                                                    </div><!-- form element login end -->
                                                  <!-- form element login end -->
                                                    <button type=\"submit\" class=\"submit-form-btn\">send</button>
                                                </form>
                                            </div><!-- login form wrapper end -->
                                        </div>
                                    </div><!-- /.tab conent-->
                                </div><!-- modal content end -->
                            </div>
                        </div><!-- /#loginmodal -->
                    </div><!-- login modal warapper satart end-->
                </div>
           </td>   
           <td>
                {% if item.promo %}
                         <span class=\"badge btn-primary\">
                                <a class=\"btn btn-warning btn-sm\" href=\"{{__SELF__.loadUrl()}}/promo/{{item.id}}\"  class=\"action-btn\">{{item.code_promo}}</a>
                         </span>
                         {%else%}
                         <a class=\"btn btn-warning btn-sm\" href=\"#\" data-toggle=\"modal\" data-target=\"#code-modal\">Generer un code promo</a>
                         <div class=\"modal fade\" id=\"code-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <form data-request=\"onPromo\">
                                    <input type=\"hidden\" name=\"event_id\" value=\"{{item.id}}\"> 
                                    <input type=\"hidden\" name=\"promo\" value=\"{{item.promo}}\"> 
                                 <div class=\"modal-dialog\" role=\"document\">
                                     <div class=\"modal-content\">
                                     <div class=\"modal-header text-center\">
                                         <h4 class=\"modal-title w-100 font-weight-bold\">Entrer le montant à reduire</h4>
                                         <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                         <span aria-hidden=\"true\">&times;</span>
                                         </button>
                                     </div>
                                     <div class=\"modal-body mx-3\">
                                         <div class=\"md-form mb-5\">
                                         <input type=\"text\" id=\"defaultForm-email\" class=\"form-control validate\" name=\"montantpromo\">
                                         <label data-error=\"wrong\" data-success=\"right\" for=\"defaultForm-email\">Montant</label>
                                         </div>
                                     </div>
                                     <div class=\"modal-footer d-flex justify-content-center\">
                                         <button class=\"btn btn-default\" type=\"submit\">Generer un code promo</button>
                                     </div>
                                     </div>
                                 </div>
                             </form>
                         </div>
                         {%endif%}
          </td>    
        <!--  <td>
              {%if item.position_id%}
                 <a class=\"btn btn-warning btn-sm\" href=\"{{ 'position'|page({lat:item.position.lat,long:item.position.long}) }}\" class=\"action-btn\">Voir position</a>
              {%else%}
                    <form data-request=\"onPosition\">
                            <a href=\"\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#modalLoginForm\">coordonnée</a>
                    </form> 
                   
              {%endif%}
          </td>  --> 
          <td>
              {% if item.is_push!=true%}
                <form data-request=\"onPush\">
                        <input type=\"hidden\" value=\"{{item.nom}}\" name=\"nampush\">
                        <input type=\"hidden\" value=\"{{item.id}}\" name=\"idpush\">
                        <button type=\"submit\" class=\"btn  btn-sm\">Send Mail</button>
                </form> 
              {%else%}
                <input type=\"submit\" disabled value=\"mail envoyer\">
              {%endif%}
          </td>                    
         </tr>
 {% endfor %}
</tbody>
</table>     
 {%else%}
 <div class=\"row\" class=\"text-center\">
        <h3 class=\"\">NO  event FOUND</h3>
    </div>
{%endif%}", "C:\\wamp64\\www\\install-master1/themes/demo/partials/events/manageevent.htm", "");
    }
}
