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

/* C:\wamp64\www\install-master1/plugins/event/event/components/eventlist/default.htm */
class __TwigTemplate_a7102ff6821154b66c22c4d13e70e82ac3cd033eb8150ff692d9676e9ecdba93 extends \Twig\Template
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
        echo "<div class=\"container-fluid mt-5 mx-auto\" style=\" height: 400px;;background-attachment: fixed;background-image: url(";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/bgFixed.jpg");
        echo ");background-position: center;background-repeat: no-repeat\">
    <h1 class=\"text-center uppercase\">Retrouver tous les évènement</h1>
  ";
        // line 3
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onFilterEvents", ["update" => ["events/events" => "#upcoming_tab", "events/eventexpire" => "#ending_tab", "events/pagination" => "#active_tab"]]]);
        echo "
   ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("events/filter"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "   ";
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
</div>
<section class=\"live-token-sale\" >
        <div class=\"container \">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"section-title\">
                        <H3 class=\"lead h2 \">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Eaque asperiores expedita nostrum sunt iste culpa, harum vitae minus iusto voluptatum magni, 
                            assumenda accusantium sequi facilis. Ex ut possimus atque voluptatum?</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 remove-col-padding-mobile\">
                    <div class=\"token-sale-top-bar   \">
                       <div class=\"row\">
                           <div class=\"col-lg-6 col-sm-3 remove-col-padding-mobile\">
                                <div class=\"left-content\">
                                    <h4 class=\" lead\">All Events</h4>
                                </div>
                           </div>
                           <div class=\"col-lg-6 col-sm-9 remove-col-padding-mobile\">
                                <div class=\"right-content\">
                                    <div class=\"tab-navbar\">
                                        <ul class=\"nav nav-tabs\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link \" data-toggle=\"tab\" href=\"#upcoming_tab\">Active</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link \" data-toggle=\"tab\" href=\"#ending_tab\">Expired</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
            <div class=\"row \">
                <div class=\"col-lg-12 remove-col-padding\">
                    <div class=\"tab-content\">
                          
                        <div class=\"tab-pane container active  \" id=\"upcoming_tab\">
                           
                                ";
        // line 51
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("events/events"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 52
        echo "                        </div>
                       
                       
                        <div class=\"tab-pane container fade  \" id=\"ending_tab\"><!-- ending tab start -->
                            ";
        // line 56
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("events/eventexpire"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 57
        echo "                        </div>
                        ";
        // line 58
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onFilterEvents", ["update" => ["events/events" => "#upcoming_tab", "events/eventexpire" => "#ending_tab"]]]);
        echo "
                        <div id=\"EventPagination\" class=\"text-center\">
                                <label>page</label>
                                <select name=\"Filter[page]\">
                                  ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 63
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                </select>
                              </div>
                              ";
        // line 67
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
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
        // line 89
        if ( !($context["user"] ?? null)) {
            // line 90
            echo "
                                    <div class=\"row\">
                                
                                        <div class=\"col-md-6\">
                                            <h3 class=\"";
            // line 94
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94) == "register")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\">Créer un compte</a></h3>
                                            ";
            // line 95
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 96
            echo "                                        </div>
                                
                                    </div>
                                
                                ";
        } else {
            // line 101
            echo "                                
                                ";
        }
        // line 103
        echo "                            </div><!-- login form wrapper end -->
                        </div>
                        <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">

                            <div class=\"singup-form-wrapper\">
                                ";
        // line 108
        if ( !($context["user"] ?? null)) {
            // line 109
            echo "                                
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            ";
            // line 112
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 113
            echo "                                        </div>
                                
                                    </div>
                                
                                ";
        } else {
            // line 118
            echo "                                
                                ";
        }
        // line 120
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
        return "C:\\wamp64\\www\\install-master1/plugins/event/event/components/eventlist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 120,  223 => 118,  216 => 113,  212 => 112,  207 => 109,  205 => 108,  198 => 103,  194 => 101,  187 => 96,  183 => 95,  175 => 94,  169 => 90,  167 => 89,  142 => 67,  138 => 65,  127 => 63,  123 => 62,  116 => 58,  113 => 57,  109 => 56,  103 => 52,  99 => 51,  49 => 5,  45 => 4,  41 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid mt-5 mx-auto\" style=\" height: 400px;;background-attachment: fixed;background-image: url({{ '/assets/images/bgFixed.jpg'|theme }});background-position: center;background-repeat: no-repeat\">
    <h1 class=\"text-center uppercase\">Retrouver tous les évènement</h1>
  {{form_ajax('onFilterEvents',{update:{'events/events':'#upcoming_tab','events/eventexpire':'#ending_tab','events/pagination':'#active_tab'}})}}
   {% partial 'events/filter'%}
   {{form_close()}}
</div>
<section class=\"live-token-sale\" >
        <div class=\"container \">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"section-title\">
                        <H3 class=\"lead h2 \">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Eaque asperiores expedita nostrum sunt iste culpa, harum vitae minus iusto voluptatum magni, 
                            assumenda accusantium sequi facilis. Ex ut possimus atque voluptatum?</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 remove-col-padding-mobile\">
                    <div class=\"token-sale-top-bar   \">
                       <div class=\"row\">
                           <div class=\"col-lg-6 col-sm-3 remove-col-padding-mobile\">
                                <div class=\"left-content\">
                                    <h4 class=\" lead\">All Events</h4>
                                </div>
                           </div>
                           <div class=\"col-lg-6 col-sm-9 remove-col-padding-mobile\">
                                <div class=\"right-content\">
                                    <div class=\"tab-navbar\">
                                        <ul class=\"nav nav-tabs\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link \" data-toggle=\"tab\" href=\"#upcoming_tab\">Active</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link \" data-toggle=\"tab\" href=\"#ending_tab\">Expired</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
            <div class=\"row \">
                <div class=\"col-lg-12 remove-col-padding\">
                    <div class=\"tab-content\">
                          
                        <div class=\"tab-pane container active  \" id=\"upcoming_tab\">
                           
                                {% partial 'events/events' %}
                        </div>
                       
                       
                        <div class=\"tab-pane container fade  \" id=\"ending_tab\"><!-- ending tab start -->
                            {% partial 'events/eventexpire' %}
                        </div>
                        {{form_ajax('onFilterEvents',{update:{'events/events':'#upcoming_tab','events/eventexpire':'#ending_tab'}})}}
                        <div id=\"EventPagination\" class=\"text-center\">
                                <label>page</label>
                                <select name=\"Filter[page]\">
                                  {% for i in 1..pages%}
                                    <option value=\"{{i}}\">{{i}}</option>
                                  {% endfor %}
                                </select>
                              </div>
                              {{form_close()}}
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
</div>












", "C:\\wamp64\\www\\install-master1/plugins/event/event/components/eventlist/default.htm", "");
    }
}
