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

/* C:\wamp64\www\install-master/plugins/event/event/components/manageevent/default.htm */
class __TwigTemplate_23e7833b61442393eb2435bea0bb193b6cf74d7d989696d2d018e1ebd49892e7 extends \Twig\Template
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
        echo "
<section class=\"live-token-sale\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 remove-col-padding-mobile\">
                    <div class=\"token-sale-top-bar\">
                       <div class=\"row\">
                           <div class=\"col-lg-6 col-sm-3 remove-col-padding-mobile\">
                                <div class=\"left-content\">
                                    <h4>Manage Event</h4>
                                </div>
                           </div>
                           <div class=\"col-lg-6 col-sm-9 remove-col-padding-mobile\">
                                <div class=\"right-content\">
                                    <div class=\"tab-navbar\">
                                        <ul class=\"nav nav-tabs\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#active_tab\">All</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#upcoming_tab\">Publier</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#ending_tab\">Expirer</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 remove-col-padding-mobile\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane container active\" id=\"active_tab\">
                            <div class=\"row\" style=\"text-align:center;display:block;\">
                                ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 39)) {
            // line 40
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
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
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 54), "html", null, true);
                echo "</a>
                                                </td>
                                                <td data-label=\"ico_date\">
                                                    0
                                                </td>
                                                <td data-label=\"ico_date\">
                                                    <h4 style=\"display:inline-block;\">
                                                            ";
                // line 61
                if (twig_get_attribute($this->env, $this->source, $context["item"], "publier", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "                                                            <span class=\"badge btn-primary\">
                                                              oui
                                                            </span>
                                                            ";
                } else {
                    // line 66
                    echo "                                                            <span class=\"badge badge-danger\">
                                                              No</span>
                                                            ";
                }
                // line 68
                echo "        </h4>
                                                </td>
                                                <td data-label=\"action\">
                                                <form data-request=\"onAnnule\">
                                                        <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"";
                // line 72
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 72)]);
                echo "\" class=\"action-btn\">View</a>
                                                        <a class=\"btn btn-warning btn-sm\" href=\"";
                // line 73
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 73)]);
                echo "\" class=\"action-btn\">Edit</a>
                                                        <input type=\"hidden\" name=\"event_id\" value=\"";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 74), "html", null, true);
                echo "\"> 
                                                        <input type=\"hidden\" name=\"user_id\" value=\"";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 75), "html", null, true);
                echo "\"> 
                                                        <input type=\"hidden\" name=\"annule\" value=\"";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "annule_demande", [], "any", false, false, false, 76), "html", null, true);
                echo "\"> 
                                                        ";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["item"], "annule_demande", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "                                                        <button type=\"submit\" class=\"btn btn-warning btn-sm\">Annuler la demande</button>                                               
                                                  
                                                        ";
                } else {
                    // line 81
                    echo "                                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Annuler</button>
                                                        ";
                }
                // line 83
                echo "                                                    </form>                                                                 
                                              </td>  
                                              <td>
                                                    <a class=\"btn btn-warning btn-sm\" href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\" class=\"action-btn\">inviter un autre</a>
                                              </td>                           
                                            </tr>
                                        </tbody>
                                      </table>                         
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                                ";
        } else {
            // line 93
            echo "                                    <h3>NO EVENT FOUND</h3>
                                ";
        }
        // line 95
        echo "                            </div>
                                <div class=\"text-center\">
                                    <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-featured-tickets.html\">Show More</a>
                                </div>
                         </div>
                        <div class=\"tab-pane container fade\" id=\"upcoming_tab\">
                             <div class=\"row\" style=\"text-align:center;display:block;\">                                                       
                                    ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 102)) {
            // line 103
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "                                    
                                      <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                        <thead>
                                            <tr>
                                            <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
                                            <th scope=\"col\" class=\"founding_target_th\" >SALES</th>
                                            <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
                                            <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class=\"traending_ico_tr\">
                                                <td data-label=\"ratings\" class=\"ratings_td\">
                                                    <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 116), "html", null, true);
                echo "</a>
                                                </td>
                                                <td data-label=\"ico_date\">
                                                    0
                                                </td>
                                                <td data-label=\"ico_date\">
                                                    <h4 style=\"display:inline-block;\"><span class=\"badge badge-danger\">No</span></h4>
                                                </td>
                                                <td data-label=\"action\">
                                                <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"";
                // line 125
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 125)]);
                echo "\" class=\"action-btn\">View</a>
                                                <a class=\"btn btn-warning btn-sm\" href=\"";
                // line 126
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 126)]);
                echo "\" class=\"action-btn\">Edit</a>
                                                <a class=\"btn btn-danger btn-sm\" href=\"";
                // line 127
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit");
                echo "\" class=\"action-btn\" data-toggle=\"modal\" data-target=\"#demande-modal\">
                                                    Annuler
                                                </a>                                                                    
                                              </td>                             
                                            </tr>
                                        </tbody>
                                      </table>                         
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                                ";
        } else {
            // line 136
            echo "                                    <h3>NO EVENT FOUND</h3>
                                ";
        }
        // line 138
        echo "                             </div>
                            <div class=\"text-center\">
                                <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-active-tickets.html\">Show More</a>
                            </div>
                        </div>
                        <div class=\"tab-pane container fade\" id=\"ending_tab\"><!-- ending tab start -->
                            <div class=\"row\" style=\"text-align:center;display:block;\">
                                    ";
        // line 145
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 145)) {
            // line 146
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 146));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 147
                echo "                                      <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                        <thead>
                                            <tr>
                                            <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
                                            <th scope=\"col\" class=\"founding_target_th\" >SALES</th>
                                            <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
                                            <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class=\"traending_ico_tr\">
                                                <td data-label=\"ratings\" class=\"ratings_td\">
                                                    <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">";
                // line 159
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 159), "html", null, true);
                echo "</a>
                                                </td>
                                                <td data-label=\"ico_date\">
                                                    0
                                                </td>
                                                <td data-label=\"ico_date\">
                                                    <h4 style=\"display:inline-block;\"><span class=\"badge badge-danger\">No</span></h4>
                                                </td>
                                                <td data-label=\"action\">
                                                <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"";
                // line 168
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 168)]);
                echo "\" class=\"action-btn\">View</a>
                                                <a class=\"btn btn-warning btn-sm\" href=\"";
                // line 169
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 169)]);
                echo "\" class=\"action-btn\">Edit</a>
                                                <a class=\"btn btn-danger btn-sm\" href=\"";
                // line 170
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit");
                echo "\" class=\"action-btn\" data-toggle=\"modal\" data-target=\"#demande-modal\">
                                                    Annuler
                                                </a>                                                                    
                                              </td>                             
                                            </tr>
                                        </tbody>
                                      </table>                         
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "                                ";
        } else {
            // line 179
            echo "                                    <h3>NO EVENT FOUND</h3>
                                ";
        }
        // line 181
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
           <!-- login and register modal start-->
<div class=\"login-registration-modal\" id=\"loginRegModal\">
        <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
            <div class=\"modal\" tabindex=\"-1\" id=\"login-modal\" role=\"dialog\"><!-- #login modal-->
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\"><!-- modal content start -->
                       
                        <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                            <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                                <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                                    <form data-request=\"onActive\">
                                        <div class=\"form-element square login\"><!-- form element login start -->
                                            <label>Entrer l'email
                                            </label>
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
    <div class=\"login-registration-modal\" id=\"loginRegModal\">
    <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
        <div class=\"modal\" tabindex=\"-1\" id=\"login-modal\" role=\"dialog\"><!-- #login modal-->
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\"><!-- modal content start -->
                    <nav>
                        <div class=\"nav nav-tabs login-modal-navigation\" id=\"nav-tab\" role=\"tablist\"><!-- login modal navigation start -->
                            <a class=\"nav-item nav-link active\" id=\"nav-login-tab\" data-toggle=\"tab\" href=\"#nav-login\" role=\"tab\" aria-controls=\"nav-login\"
                                aria-selected=\"true\">login</a>
                            <a class=\"nav-item nav-link\" id=\"nav-signup-tab\" data-toggle=\"tab\" href=\"#nav-signup\" role=\"tab\" aria-controls=\"nav-signup\"
                                aria-selected=\"false\">Register</a>
                        </div><!-- login modal navigation end -->
                    </nav>
                    <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                        <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                            <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                               ";
        // line 233
        if ( !($context["user"] ?? null)) {
            // line 234
            echo "
                                    <div class=\"row\">
                                
                                        <div class=\"col-md-6\">
                                            <h3 class=\"";
            // line 238
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 238), "id", [], "any", false, false, false, 238) == "register")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\">Créer un compte</a></h3>
                                            ";
            // line 239
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 240
            echo "                                        </div>
                                
                                    </div>
                                
                                ";
        } else {
            // line 245
            echo "                                
                                ";
        }
        // line 247
        echo "                            </div><!-- login form wrapper end -->
                        </div>
                        <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">

                            <div class=\"singup-form-wrapper\">
                                ";
        // line 252
        if ( !($context["user"] ?? null)) {
            // line 253
            echo "                                
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            ";
            // line 256
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 257
            echo "                                        </div>
                                
                                    </div>
                                
                                ";
        } else {
            // line 262
            echo "                                
                                ";
        }
        // line 264
        echo "                             </div>
                        </div>
                    </div><!-- /.tab conent-->
                </div><!-- modal content end -->
            </div>
        </div><!-- /#loginmodal -->
    </div><!-- login modal warapper satart end-->
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/plugins/event/event/components/manageevent/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 264,  430 => 262,  423 => 257,  419 => 256,  414 => 253,  412 => 252,  405 => 247,  401 => 245,  394 => 240,  390 => 239,  382 => 238,  376 => 234,  374 => 233,  320 => 181,  316 => 179,  313 => 178,  299 => 170,  295 => 169,  291 => 168,  279 => 159,  265 => 147,  260 => 146,  258 => 145,  249 => 138,  245 => 136,  242 => 135,  228 => 127,  224 => 126,  220 => 125,  208 => 116,  189 => 103,  187 => 102,  178 => 95,  174 => 93,  171 => 92,  157 => 83,  153 => 81,  148 => 78,  146 => 77,  142 => 76,  138 => 75,  134 => 74,  130 => 73,  126 => 72,  120 => 68,  115 => 66,  109 => 62,  107 => 61,  97 => 54,  77 => 40,  75 => 39,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<section class=\"live-token-sale\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 remove-col-padding-mobile\">
                    <div class=\"token-sale-top-bar\">
                       <div class=\"row\">
                           <div class=\"col-lg-6 col-sm-3 remove-col-padding-mobile\">
                                <div class=\"left-content\">
                                    <h4>Manage Event</h4>
                                </div>
                           </div>
                           <div class=\"col-lg-6 col-sm-9 remove-col-padding-mobile\">
                                <div class=\"right-content\">
                                    <div class=\"tab-navbar\">
                                        <ul class=\"nav nav-tabs\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#active_tab\">All</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#upcoming_tab\">Publier</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#ending_tab\">Expirer</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
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
                                                    <a class=\"btn btn-warning btn-sm\" href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\" class=\"action-btn\">inviter un autre</a>
                                              </td>                           
                                            </tr>
                                        </tbody>
                                      </table>                         
                                    {% endfor%}
                                {%else%}
                                    <h3>NO EVENT FOUND</h3>
                                {%endif%}
                            </div>
                                <div class=\"text-center\">
                                    <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-featured-tickets.html\">Show More</a>
                                </div>
                         </div>
                        <div class=\"tab-pane container fade\" id=\"upcoming_tab\">
                             <div class=\"row\" style=\"text-align:center;display:block;\">                                                       
                                    {%if __SELF__.loadEvents() %}
                                    {% for item in __SELF__.loadEvents() %}                                    
                                      <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                        <thead>
                                            <tr>
                                            <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
                                            <th scope=\"col\" class=\"founding_target_th\" >SALES</th>
                                            <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
                                            <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
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
                                                    <h4 style=\"display:inline-block;\"><span class=\"badge badge-danger\">No</span></h4>
                                                </td>
                                                <td data-label=\"action\">
                                                <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"{{ 'manage_event_view'|page({event_id:item.id}) }}\" class=\"action-btn\">View</a>
                                                <a class=\"btn btn-warning btn-sm\" href=\"{{ 'manage_event_edit'|page({event_id:item.id}) }}\" class=\"action-btn\">Edit</a>
                                                <a class=\"btn btn-danger btn-sm\" href=\"{{ 'manage_event_edit'|page }}\" class=\"action-btn\" data-toggle=\"modal\" data-target=\"#demande-modal\">
                                                    Annuler
                                                </a>                                                                    
                                              </td>                             
                                            </tr>
                                        </tbody>
                                      </table>                         
                                    {% endfor%}
                                {%else%}
                                    <h3>NO EVENT FOUND</h3>
                                {%endif%}
                             </div>
                            <div class=\"text-center\">
                                <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-active-tickets.html\">Show More</a>
                            </div>
                        </div>
                        <div class=\"tab-pane container fade\" id=\"ending_tab\"><!-- ending tab start -->
                            <div class=\"row\" style=\"text-align:center;display:block;\">
                                    {%if __SELF__.loadEvents() %}
                                    {% for item in __SELF__.loadEvents() %}
                                      <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                        <thead>
                                            <tr>
                                            <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
                                            <th scope=\"col\" class=\"founding_target_th\" >SALES</th>
                                            <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
                                            <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
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
                                                    <h4 style=\"display:inline-block;\"><span class=\"badge badge-danger\">No</span></h4>
                                                </td>
                                                <td data-label=\"action\">
                                                <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"{{ 'manage_event_view'|page({event_id:item.id}) }}\" class=\"action-btn\">View</a>
                                                <a class=\"btn btn-warning btn-sm\" href=\"{{ 'manage_event_edit'|page({event_id:item.id}) }}\" class=\"action-btn\">Edit</a>
                                                <a class=\"btn btn-danger btn-sm\" href=\"{{ 'manage_event_edit'|page }}\" class=\"action-btn\" data-toggle=\"modal\" data-target=\"#demande-modal\">
                                                    Annuler
                                                </a>                                                                    
                                              </td>                             
                                            </tr>
                                        </tbody>
                                      </table>                         
                                    {% endfor%}
                                {%else%}
                                    <h3>NO EVENT FOUND</h3>
                                {%endif%}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
           <!-- login and register modal start-->
<div class=\"login-registration-modal\" id=\"loginRegModal\">
        <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
            <div class=\"modal\" tabindex=\"-1\" id=\"login-modal\" role=\"dialog\"><!-- #login modal-->
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\"><!-- modal content start -->
                       
                        <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                            <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                                <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                                    <form data-request=\"onActive\">
                                        <div class=\"form-element square login\"><!-- form element login start -->
                                            <label>Entrer l'email
                                            </label>
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
    <div class=\"login-registration-modal\" id=\"loginRegModal\">
    <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
        <div class=\"modal\" tabindex=\"-1\" id=\"login-modal\" role=\"dialog\"><!-- #login modal-->
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\"><!-- modal content start -->
                    <nav>
                        <div class=\"nav nav-tabs login-modal-navigation\" id=\"nav-tab\" role=\"tablist\"><!-- login modal navigation start -->
                            <a class=\"nav-item nav-link active\" id=\"nav-login-tab\" data-toggle=\"tab\" href=\"#nav-login\" role=\"tab\" aria-controls=\"nav-login\"
                                aria-selected=\"true\">login</a>
                            <a class=\"nav-item nav-link\" id=\"nav-signup-tab\" data-toggle=\"tab\" href=\"#nav-signup\" role=\"tab\" aria-controls=\"nav-signup\"
                                aria-selected=\"false\">Register</a>
                        </div><!-- login modal navigation end -->
                    </nav>
                    <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                        <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                            <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                               {% if not user %}

                                    <div class=\"row\">
                                
                                        <div class=\"col-md-6\">
                                            <h3 class=\"{% if this.page.id == 'register' %}active{% endif %}\"><a href=\"{{ 'register'|page }}\">Créer un compte</a></h3>
                                            {% partial account ~ '::signin' %}
                                        </div>
                                
                                    </div>
                                
                                {% else %}
                                
                                {% endif %}
                            </div><!-- login form wrapper end -->
                        </div>
                        <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">

                            <div class=\"singup-form-wrapper\">
                                {% if not user %}
                                
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            {% partial account ~ '::register' %}
                                        </div>
                                
                                    </div>
                                
                                {% else %}
                                
                                {% endif %}
                             </div>
                        </div>
                    </div><!-- /.tab conent-->
                </div><!-- modal content end -->
            </div>
        </div><!-- /#loginmodal -->
    </div><!-- login modal warapper satart end-->
</div>
", "C:\\wamp64\\www\\install-master/plugins/event/event/components/manageevent/default.htm", "");
    }
}
