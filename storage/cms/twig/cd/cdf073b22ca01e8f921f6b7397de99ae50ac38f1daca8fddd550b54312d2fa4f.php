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

/* C:\wamp64\www\install-master/plugins/event/event/components/admin/default.htm */
class __TwigTemplate_588a3457bf51e4b04ee3931cc8a58ecfdfbd6d2eae48f77997a7b59239cdb6bb extends \Twig\Template
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
                                            <th scope=\"col\" class=\"action_th\" >ACTIVATION</th>
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
                // line 62
                if (twig_get_attribute($this->env, $this->source, $context["item"], "publier", [], "any", false, false, false, 62)) {
                    // line 63
                    echo "                                                            <span class=\"badge btn-primary\">
                                                              oui
                                                            </span>
                                                            ";
                } else {
                    // line 67
                    echo "                                                            <span class=\"badge badge-danger\">
                                                              No</span>
                                                            ";
                }
                // line 69
                echo "                                                
                                                        </h4>
                                                </td>
                                                <td data-label=\"action\">
                                                <form data-request=\"onSave\">
                                                        <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"";
                // line 74
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 74)]);
                echo "\" class=\"action-btn\">View</a>
                                                        <a class=\"btn btn-warning btn-sm\" href=\"";
                // line 75
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 75)]);
                echo "\" class=\"action-btn\">Edit</a>
                                                        <input type=\"hidden\" name=\"supprimer\" value=\"";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 76), "html", null, true);
                echo "\"> 
                                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>                                               
                                                </form>                 
                                              </td>   
                                              <td>
                                                  <form data-request=\"onActive\">
                                                        <input type=\"hidden\" name=\"activer\" value=\"";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 82), "html", null, true);
                echo "\"> 
                                                        <input type=\"hidden\" name=\"pub\" value=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "publier", [], "any", false, false, false, 83), "html", null, true);
                echo "\"> 
                                                        ";
                // line 84
                if (twig_get_attribute($this->env, $this->source, $context["item"], "publier", [], "any", false, false, false, 84)) {
                    // line 85
                    echo "                                                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">Desactiver</button>                                               
                                                  
                                                        ";
                } else {
                    // line 88
                    echo "                                                        <button type=\"submit\" class=\"btn btn-warning btn-sm\">Activer</button>
                                                        ";
                }
                // line 90
                echo "                                                    </form>
                                              </td>                          
                                            </tr>
                                        </tbody>
                                      </table>                         
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                                ";
        } else {
            // line 97
            echo "                                    <h3>NO EVENT FOUND</h3>
                                ";
        }
        // line 99
        echo "                            </div>
                                <div class=\"text-center\">
                                    <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-featured-tickets.html\">Show More</a>
                                </div>
                         </div>
                        <div class=\"tab-pane container fade\" id=\"upcoming_tab\">
                             <div class=\"row\" style=\"text-align:center;display:block;\">                                                       
                                    ";
        // line 106
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 106)) {
            // line 107
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 107));
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
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 120), "html", null, true);
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
                // line 129
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 129)]);
                echo "\" class=\"action-btn\">View</a>
                                                <a class=\"btn btn-warning btn-sm\" href=\"";
                // line 130
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 130)]);
                echo "\" class=\"action-btn\">Edit</a>
                                                <a class=\"btn btn-danger btn-sm\" href=\"";
                // line 131
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
            // line 139
            echo "                                ";
        } else {
            // line 140
            echo "                                    <h3>NO EVENT FOUND</h3>
                                ";
        }
        // line 142
        echo "                             </div>
                            <div class=\"text-center\">
                                <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-active-tickets.html\">Show More</a>
                            </div>
                        </div>
                        <div class=\"tab-pane container fade\" id=\"ending_tab\"><!-- ending tab start -->
                            <div class=\"row\" style=\"text-align:center;display:block;\">
                                    ";
        // line 149
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 149)) {
            // line 150
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 150));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 151
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
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 163), "html", null, true);
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
                // line 172
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 172)]);
                echo "\" class=\"action-btn\">View</a>
                                                <a class=\"btn btn-warning btn-sm\" href=\"";
                // line 173
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 173)]);
                echo "\" class=\"action-btn\">Edit</a>
                                                <a class=\"btn btn-danger btn-sm\" href=\"";
                // line 174
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
            // line 182
            echo "                                ";
        } else {
            // line 183
            echo "                                    <h3>NO EVENT FOUND</h3>
                                ";
        }
        // line 185
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
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
        // line 209
        if ( !($context["user"] ?? null)) {
            // line 210
            echo "
                                    <div class=\"row\">
                                
                                        <div class=\"col-md-6\">
                                            <h3 class=\"";
            // line 214
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 214), "id", [], "any", false, false, false, 214) == "register")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\">Créer un compte</a></h3>
                                            ";
            // line 215
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 216
            echo "                                        </div>
                                
                                    </div>
                                
                                ";
        } else {
            // line 221
            echo "                                
                                ";
        }
        // line 223
        echo "                            </div><!-- login form wrapper end -->
                        </div>
                        <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">

                            <div class=\"singup-form-wrapper\">
                                ";
        // line 228
        if ( !($context["user"] ?? null)) {
            // line 229
            echo "                                
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            ";
            // line 232
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 233
            echo "                                        </div>
                                
                                    </div>
                                
                                ";
        } else {
            // line 238
            echo "                                
                                ";
        }
        // line 240
        echo "                             </div>
                        </div>
                    </div><!-- /.tab conent-->
                </div><!-- modal content end -->
            </div>
        </div><!-- /#loginmodal -->
    </div><!-- login modal warapper satart end-->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/plugins/event/event/components/admin/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 240,  406 => 238,  399 => 233,  395 => 232,  390 => 229,  388 => 228,  381 => 223,  377 => 221,  370 => 216,  366 => 215,  358 => 214,  352 => 210,  350 => 209,  324 => 185,  320 => 183,  317 => 182,  303 => 174,  299 => 173,  295 => 172,  283 => 163,  269 => 151,  264 => 150,  262 => 149,  253 => 142,  249 => 140,  246 => 139,  232 => 131,  228 => 130,  224 => 129,  212 => 120,  193 => 107,  191 => 106,  182 => 99,  178 => 97,  175 => 96,  164 => 90,  160 => 88,  155 => 85,  153 => 84,  149 => 83,  145 => 82,  136 => 76,  132 => 75,  128 => 74,  121 => 69,  116 => 67,  110 => 63,  108 => 62,  97 => 54,  77 => 40,  75 => 39,  35 => 1,);
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
                                            <th scope=\"col\" class=\"action_th\" >ACTIVATION</th>
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
                                                            {%endif%}                                                
                                                        </h4>
                                                </td>
                                                <td data-label=\"action\">
                                                <form data-request=\"onSave\">
                                                        <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"{{ 'manage_event_view'|page({event_id:item.id}) }}\" class=\"action-btn\">View</a>
                                                        <a class=\"btn btn-warning btn-sm\" href=\"{{ 'manage_event_edit'|page({event_id:item.id}) }}\" class=\"action-btn\">Edit</a>
                                                        <input type=\"hidden\" name=\"supprimer\" value=\"{{item.id}}\"> 
                                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>                                               
                                                </form>                 
                                              </td>   
                                              <td>
                                                  <form data-request=\"onActive\">
                                                        <input type=\"hidden\" name=\"activer\" value=\"{{item.id}}\"> 
                                                        <input type=\"hidden\" name=\"pub\" value=\"{{item.publier}}\"> 
                                                        {% if item.publier %}
                                                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">Desactiver</button>                                               
                                                  
                                                        {%else%}
                                                        <button type=\"submit\" class=\"btn btn-warning btn-sm\">Activer</button>
                                                        {%endif%}
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
</div>", "C:\\wamp64\\www\\install-master/plugins/event/event/components/admin/default.htm", "");
    }
}
