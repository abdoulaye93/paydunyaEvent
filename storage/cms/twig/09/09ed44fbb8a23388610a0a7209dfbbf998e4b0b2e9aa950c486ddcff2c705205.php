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

/* /opt/lampp/htdocs/paydunyaEvent/plugins/event/event/components/admin/default.htm */
class __TwigTemplate_30ee1115b87b5a113787a032ce4c13211269c31b54ab43310bc36c89c6f9e30a extends \Twig\Template
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
                                ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("admin/events"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "                         </div>
                        <div class=\"tab-pane container fade\" id=\"upcoming_tab\">
                                ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("admin/eventspub"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "                        </div>
                        <div class=\"tab-pane container fade\" id=\"ending_tab\"><!-- ending tab start -->
                            ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("admin/eventsexpire"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "                        </div>
                        ";
        // line 46
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onFilterEvents", ["update" => ["admin/events" => "#active_tab", "admin/eventsexpire" => "#ending_tab", "admin/eventspub" => "#upcoming_tab"]]]);
        echo "
                        <div id=\"EventFilter\" class=\"text-center\">
                                <label>Page</label>
                                <select class=\"ui fluid dropdown\" name=\"Filter[page]\">
                                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 51
            echo "                                        ";
            if (($context["i"] == ($context["page"] ?? null))) {
                // line 52
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
                echo "</option>
                                        ";
            } else {
                // line 54
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                        ";
            }
            // line 56
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                                </select>
                            </div>
                            ";
        // line 59
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
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
        // line 82
        if ( !($context["user"] ?? null)) {
            // line 83
            echo "
                                    <div class=\"row\">
                                
                                        <div class=\"col-md-6\">
                                            <h3 class=\"";
            // line 87
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87) == "register")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\">Créer un compte</a></h3>
                                            ";
            // line 88
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 89
            echo "                                        </div>
                                
                                    </div>
                                
                                ";
        } else {
            // line 94
            echo "                                
                                ";
        }
        // line 96
        echo "                            </div><!-- login form wrapper end -->
                        </div>
                        <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">

                            <div class=\"singup-form-wrapper\">
                                ";
        // line 101
        if ( !($context["user"] ?? null)) {
            // line 102
            echo "                                
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            ";
            // line 105
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 106
            echo "                                        </div>
                                
                                    </div>
                                
                                ";
        } else {
            // line 111
            echo "                                
                                ";
        }
        // line 113
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
        return "/opt/lampp/htdocs/paydunyaEvent/plugins/event/event/components/admin/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 113,  219 => 111,  212 => 106,  208 => 105,  203 => 102,  201 => 101,  194 => 96,  190 => 94,  183 => 89,  179 => 88,  171 => 87,  165 => 83,  163 => 82,  137 => 59,  133 => 57,  127 => 56,  119 => 54,  111 => 52,  108 => 51,  104 => 50,  97 => 46,  94 => 45,  90 => 44,  86 => 42,  82 => 41,  78 => 39,  74 => 38,  35 => 1,);
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
                                {% partial 'admin/events' %}
                         </div>
                        <div class=\"tab-pane container fade\" id=\"upcoming_tab\">
                                {% partial 'admin/eventspub' %}
                        </div>
                        <div class=\"tab-pane container fade\" id=\"ending_tab\"><!-- ending tab start -->
                            {% partial 'admin/eventsexpire' %}
                        </div>
                        {{form_ajax('onFilterEvents',{update:{'admin/events':'#active_tab','admin/eventsexpire':'#ending_tab','admin/eventspub':'#upcoming_tab'}})}}
                        <div id=\"EventFilter\" class=\"text-center\">
                                <label>Page</label>
                                <select class=\"ui fluid dropdown\" name=\"Filter[page]\">
                                    {% for i in 1..pages %}
                                        {%  if i == page %}
                                            <option value=\"{{page}}\" selected>{{ page }}</option>
                                        {% else %}
                                            <option value=\"{{i}}\">{{ i }}</option>
                                        {% endif %}
                                    {% endfor %}
                                </select>
                            </div>
                            {{form_close()}}
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
</div>", "/opt/lampp/htdocs/paydunyaEvent/plugins/event/event/components/admin/default.htm", "");
    }
}
