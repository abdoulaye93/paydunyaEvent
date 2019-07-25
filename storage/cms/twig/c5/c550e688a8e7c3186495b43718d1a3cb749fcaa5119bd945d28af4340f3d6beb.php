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
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("events/manageevent"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "                                
                            </div>
                            ";
        // line 43
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("events/pagination"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "                         </div>
                        <div class=\"tab-pane container fade\" id=\"upcoming_tab\">
                             <div class=\"row\" style=\"text-align:center;display:block;\">                                                       
                                    ";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("events/manageeventpub"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "                             </div>
                             ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("events/pagination"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "                        </div>
                        <div class=\"tab-pane container fade\" id=\"ending_tab\"><!-- ending tab start -->
                            <div class=\"row\" style=\"text-align:center;display:block;\">
                                    ";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("events/manageeventexpire"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "                            </div>
                            ";
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("events/pagination"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
           <!-- login and register modal start-->
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
        // line 107
        if ( !($context["user"] ?? null)) {
            // line 108
            echo "
                                    <div class=\"row\">
                                
                                        <div class=\"col-md-6\">
                                            <h3 class=\"";
            // line 112
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 112), "id", [], "any", false, false, false, 112) == "register")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\">Créer un compte</a></h3>
                                            ";
            // line 113
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 114
            echo "                                        </div>
                                
                                    </div>
                                
                                ";
        } else {
            // line 119
            echo "                                
                                ";
        }
        // line 121
        echo "                            </div><!-- login form wrapper end -->
                        </div>
                        <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">

                            <div class=\"singup-form-wrapper\">
                                ";
        // line 126
        if ( !($context["user"] ?? null)) {
            // line 127
            echo "                                
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            ";
            // line 130
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 131
            echo "                                        </div>
                                
                                    </div>
                                
                                ";
        } else {
            // line 136
            echo "                                
                                ";
        }
        // line 138
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
        return array (  233 => 138,  229 => 136,  222 => 131,  218 => 130,  213 => 127,  211 => 126,  204 => 121,  200 => 119,  193 => 114,  189 => 113,  181 => 112,  175 => 108,  173 => 107,  120 => 56,  116 => 55,  113 => 54,  109 => 53,  104 => 50,  100 => 49,  97 => 48,  93 => 47,  88 => 44,  84 => 43,  80 => 41,  76 => 40,  35 => 1,);
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
                                
                                    {% partial 'events/manageevent' %}
                                
                            </div>
                            {% partial 'events/pagination' %}
                         </div>
                        <div class=\"tab-pane container fade\" id=\"upcoming_tab\">
                             <div class=\"row\" style=\"text-align:center;display:block;\">                                                       
                                    {% partial 'events/manageeventpub' %}
                             </div>
                             {% partial 'events/pagination' %}
                        </div>
                        <div class=\"tab-pane container fade\" id=\"ending_tab\"><!-- ending tab start -->
                            <div class=\"row\" style=\"text-align:center;display:block;\">
                                    {% partial 'events/manageeventexpire' %}
                            </div>
                            {% partial 'events/pagination' %}
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
