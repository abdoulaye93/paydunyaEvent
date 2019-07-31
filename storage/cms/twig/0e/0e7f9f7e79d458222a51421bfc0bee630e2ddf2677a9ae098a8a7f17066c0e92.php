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

/* C:\wamp64\www\install-master/plugins/event/event/components/access/default.htm */
class __TwigTemplate_d33beebde4bac8eaa34d1dcce6acaa7fad8afec1ffc6e8ba4d0bf89799a71429 extends \Twig\Template
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class=\"traending_ico_tr\">
                                                <td data-label=\"ratings\" class=\"ratings_td\">
                                                    <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 53), "html", null, true);
                echo "</a>
                                                </td>
                                                <td data-label=\"ico_date\">
                                                    0
                                                </td>
                                                <td data-label=\"ico_date\">
                                                    <h4 style=\"display:inline-block;\">
                                                            ";
                // line 60
                if (twig_get_attribute($this->env, $this->source, $context["item"], "publier", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "                                                            <span class=\"badge btn-primary\">
                                                              oui
                                                            </span>
                                                            ";
                } else {
                    // line 65
                    echo "                                                            <span class=\"badge badge-danger\">
                                                              No</span>
                                                            ";
                }
                // line 67
                echo "        </h4>
                                                </td>
                                                <td data-label=\"action\">
                                                <form data-request=\"onAnnule\">
                                                        <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"";
                // line 71
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 71)]);
                echo "\" class=\"action-btn\">View</a>
                                                        <a class=\"btn btn-warning btn-sm\" href=\"";
                // line 72
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 72)]);
                echo "\" class=\"action-btn\">Edit</a>
                                                        <input type=\"hidden\" name=\"event_id\" value=\"";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 73), "html", null, true);
                echo "\"> 
                                                        <input type=\"hidden\" name=\"user_id\" value=\"";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, false, 74), "html", null, true);
                echo "\"> 
                                                        <input type=\"hidden\" name=\"annule\" value=\"";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "annule_demande", [], "any", false, false, false, 75), "html", null, true);
                echo "\"> 
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
            // line 82
            echo "                                ";
        } else {
            // line 83
            echo "                                    <h3>NO EVENT FOUND</h3>
                                ";
        }
        // line 85
        echo "                            </div>
                                <div class=\"text-center\">
                                    <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-featured-tickets.html\">Show More</a>
                                </div>
                         </div>
                        <div class=\"tab-pane container fade\" id=\"upcoming_tab\">
                             <div class=\"row\" style=\"text-align:center;display:block;\">                                                       
                                    ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 92)) {
            // line 93
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 93));
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
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 106), "html", null, true);
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
                // line 115
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 115)]);
                echo "\" class=\"action-btn\">View</a>
                                                <a class=\"btn btn-warning btn-sm\" href=\"";
                // line 116
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 116)]);
                echo "\" class=\"action-btn\">Edit</a>
                                                <a class=\"btn btn-danger btn-sm\" href=\"";
                // line 117
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
            // line 125
            echo "                                ";
        } else {
            // line 126
            echo "                                    <h3>NO EVENT FOUND</h3>
                                ";
        }
        // line 128
        echo "                             </div>
                            <div class=\"text-center\">
                                <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-active-tickets.html\">Show More</a>
                            </div>
                        </div>
                        <div class=\"tab-pane container fade\" id=\"ending_tab\"><!-- ending tab start -->
                            <div class=\"row\" style=\"text-align:center;display:block;\">
                                    ";
        // line 135
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 135)) {
            // line 136
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 136));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 137
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
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 149), "html", null, true);
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
                // line 158
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 158)]);
                echo "\" class=\"action-btn\">View</a>
                                                <a class=\"btn btn-warning btn-sm\" href=\"";
                // line 159
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 159)]);
                echo "\" class=\"action-btn\">Edit</a>
                                                <a class=\"btn btn-danger btn-sm\" href=\"";
                // line 160
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
            // line 168
            echo "                                ";
        } else {
            // line 169
            echo "                                    <h3>NO EVENT FOUND</h3>
                                ";
        }
        // line 171
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
        // line 223
        if ( !($context["user"] ?? null)) {
            // line 224
            echo "
                                    <div class=\"row\">
                                
                                        <div class=\"col-md-6\">
                                            <h3 class=\"";
            // line 228
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 228), "id", [], "any", false, false, false, 228) == "register")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\">Créer un compte</a></h3>
                                            ";
            // line 229
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 230
            echo "                                        </div>
                                
                                    </div>
                                
                                ";
        } else {
            // line 235
            echo "                                
                                ";
        }
        // line 237
        echo "                            </div><!-- login form wrapper end -->
                        </div>
                        <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">

                            <div class=\"singup-form-wrapper\">
                                ";
        // line 242
        if ( !($context["user"] ?? null)) {
            // line 243
            echo "                                
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            ";
            // line 246
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 247
            echo "                                        </div>
                                
                                    </div>
                                
                                ";
        } else {
            // line 252
            echo "                                
                                ";
        }
        // line 254
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
        return "C:\\wamp64\\www\\install-master/plugins/event/event/components/access/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 254,  413 => 252,  406 => 247,  402 => 246,  397 => 243,  395 => 242,  388 => 237,  384 => 235,  377 => 230,  373 => 229,  365 => 228,  359 => 224,  357 => 223,  303 => 171,  299 => 169,  296 => 168,  282 => 160,  278 => 159,  274 => 158,  262 => 149,  248 => 137,  243 => 136,  241 => 135,  232 => 128,  228 => 126,  225 => 125,  211 => 117,  207 => 116,  203 => 115,  191 => 106,  172 => 93,  170 => 92,  161 => 85,  157 => 83,  154 => 82,  141 => 75,  137 => 74,  133 => 73,  129 => 72,  125 => 71,  119 => 67,  114 => 65,  108 => 61,  106 => 60,  96 => 53,  77 => 40,  75 => 39,  35 => 1,);
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
                                                    </form>                                                                 
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
", "C:\\wamp64\\www\\install-master/plugins/event/event/components/access/default.htm", "");
    }
}
