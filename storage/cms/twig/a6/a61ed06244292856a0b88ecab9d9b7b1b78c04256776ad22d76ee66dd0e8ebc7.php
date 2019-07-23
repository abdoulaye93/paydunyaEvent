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

/* C:\wamp64\www\install-master/plugins/event/event/components/eventlist/default.htm */
class __TwigTemplate_32a5d57158d88c26769d7e7c849fbf06a897d680564e59d0f3ac2596892158d2 extends \Twig\Template
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
        echo "<section class=\"live-token-sale\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-7 text-center\">
                    <div class=\"section-title\">
                        <h2>Retrouver tous les évènement</h2>
                        <p>!!!....</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 remove-col-padding-mobile\">
                    <div class=\"token-sale-top-bar\">
                       <div class=\"row\">
                           <div class=\"col-lg-6 col-sm-3 remove-col-padding-mobile\">
                                <div class=\"left-content\">
                                    <h4>All Events</h4>
                                </div>
                           </div>
                           <div class=\"col-lg-6 col-sm-9 remove-col-padding-mobile\">
                                <div class=\"right-content\">
                                    <div class=\"tab-navbar\">
                                        <ul class=\"nav nav-tabs\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#active_tab\">Featured</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#upcoming_tab\">Active</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#ending_tab\">Expired</a>
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
                <div class=\"col-lg-12 remove-col-padding\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane container active\" id=\"active_tab\">
                            ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 45)) {
            // line 46
            echo "                                 <div class=\"row\">
                                    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 48
                echo "                                    <div class=\"col-lg-4 col-sm-6\">
                                            <div class=\"single-ico-list-box\">
                                                <div class=\"thumb\">
                                                <a href=\"event/show/effective-communication-skills.html\" target=\"_blank\">
                                                <img src=\"http://lab.thesoftking.com/eticket/assets/user/img/ticket/1532784219.jpg\" alt=\"\">                                       
                                                </div>
                                                <div class=\"content\">
                                                    <p style=\"margin:0px;clear:both;\"></p>
                                                    <h4 style=\"color:#10ac84;\">";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 56), "html", null, true);
                echo "</h4>
                                                    <p><strong><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Prx: </strong>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant", [], "any", false, false, false, 57), "html", null, true);
                echo " FCFA</p>
                                                    <p><strong><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> Date d'expiration: </strong>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "periode", [], "any", false, false, false, 58), "date_cloture", [], "any", false, false, false, 58), "html", null, true);
                echo "</p>
                                                    <a  href=\"";
                // line 59
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("description_event", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 59)]);
                echo "\"  class=\"boxed-btn-rounded\">
                                                    <i class=\"fa fa-caret-right\"></i> <span class=\"title\">Details</span></a>
                                                </div>
                                            </div>
                                        </div>
                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                                 </div>
                                 <div class=\"text-center\">
                                    <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-featured-tickets.html\">Show More</a>
                                </div>
                                ";
        } else {
            // line 70
            echo "                                <div class=\"row\" style=\"text-align:center;display:block;\">
                                        <h3 class=\"\">NO  TICKETS FOUND</h3>
                                    </div>
                                ";
        }
        // line 74
        echo "                        </div>
                        <div class=\"tab-pane container fade\" id=\"upcoming_tab\">
                            ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEventsActive", [], "method", false, false, false, 76)) {
            // line 77
            echo "                                 <div class=\"row\">
                                    ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEventsActive", [], "method", false, false, false, 78));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 79
                echo "                                    <div class=\"col-lg-4 col-sm-6\">
                                            <div class=\"single-ico-list-box\">
                                                <div class=\"thumb\">
                                                <a href=\"event/show/effective-communication-skills.html\" target=\"_blank\">
                                                <img src=\"http://lab.thesoftking.com/eticket/assets/user/img/ticket/1532784219.jpg\" alt=\"\">                                       
                                                </div>
                                                <div class=\"content\">
                                                    <p style=\"margin:0px;clear:both;\"></p>
                                                    <h4 style=\"color:#10ac84;\">";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 87), "html", null, true);
                echo "</h4>
                                                    <p><strong><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Prx: </strong>";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant", [], "any", false, false, false, 88), "html", null, true);
                echo " FCFA</p>
                                                    <a  href=\"";
                // line 89
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("description_event", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 89)]);
                echo "\"  class=\"boxed-btn-rounded\">
                                                    <i class=\"fa fa-caret-right\"></i> <span class=\"title\">Details</span></a>
                                                </div>
                                            </div>
                                        </div>
                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                                </div>
                                <div class=\"text-center\">
                                    <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-featured-tickets.html\">Show More</a>
                                </div>
                                ";
        } else {
            // line 100
            echo "                                <div class=\"row\" style=\"text-align:center;display:block;\">
                                        <h3 class=\"\">NO active TICKETS FOUND</h3>
                                    </div>
                                ";
        }
        // line 104
        echo "                          </div>
                        <div class=\"tab-pane container fade\" id=\"ending_tab\"><!-- ending tab start -->
                            ";
        // line 106
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEventsExpire", [], "method", false, false, false, 106)) {
            // line 107
            echo "                                 <div class=\"row\">
                                   ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEventsExpire", [], "method", false, false, false, 108));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 109
                echo "                                    <div class=\"col-lg-4 col-sm-6\">
                                            <div class=\"single-ico-list-box\">
                                                <div class=\"thumb\">
                                                <a href=\"event/show/effective-communication-skills.html\" target=\"_blank\">
                                                <img src=\"http://lab.thesoftking.com/eticket/assets/user/img/ticket/1532784219.jpg\" alt=\"\">                                       
                                                </div>
                                                <div class=\"content\">
                                                    <p style=\"margin:0px;clear:both;\"></p>
                                                    <h4 style=\"color:#10ac84;\">";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 117), "html", null, true);
                echo "</h4>
                                                    <p><strong><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Prx: </strong>";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant", [], "any", false, false, false, 118), "html", null, true);
                echo " FCFA</p>
                                                    <a  href=\"";
                // line 119
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("description_event", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 119)]);
                echo "\"  class=\"boxed-btn-rounded\">
                                                    <i class=\"fa fa-caret-right\"></i> <span class=\"title\">Details</span></a>
                                                </div>
                                            </div>
                                        </div>
                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                                </div>
                                <div class=\"text-center\">
                                    <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-featured-tickets.html\">Show More</a>
                                </div>
                                ";
        } else {
            // line 130
            echo "                                <div class=\"row\" style=\"text-align:center;display:block;\">
                                        <h3 class=\"\">NO EXPIRED TICKETS FOUND</h3>
                                 </div>
                                ";
        }
        // line 134
        echo "                        </div>
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
        // line 156
        if ( !($context["user"] ?? null)) {
            // line 157
            echo "
                                    <div class=\"row\">
                                
                                        <div class=\"col-md-6\">
                                            <h3 class=\"";
            // line 161
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 161), "id", [], "any", false, false, false, 161) == "register")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\">Créer un compte</a></h3>
                                            ";
            // line 162
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 163
            echo "                                        </div>
                                
                                    </div>
                                
                                ";
        } else {
            // line 168
            echo "                                
                                ";
        }
        // line 170
        echo "                            </div><!-- login form wrapper end -->
                        </div>
                        <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">

                            <div class=\"singup-form-wrapper\">
                                ";
        // line 175
        if ( !($context["user"] ?? null)) {
            // line 176
            echo "                                
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            ";
            // line 179
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 180
            echo "                                        </div>
                                
                                    </div>
                                
                                ";
        } else {
            // line 185
            echo "                                
                                ";
        }
        // line 187
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
        return "C:\\wamp64\\www\\install-master/plugins/event/event/components/eventlist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 187,  329 => 185,  322 => 180,  318 => 179,  313 => 176,  311 => 175,  304 => 170,  300 => 168,  293 => 163,  289 => 162,  281 => 161,  275 => 157,  273 => 156,  249 => 134,  243 => 130,  236 => 125,  224 => 119,  220 => 118,  216 => 117,  206 => 109,  202 => 108,  199 => 107,  197 => 106,  193 => 104,  187 => 100,  180 => 95,  168 => 89,  164 => 88,  160 => 87,  150 => 79,  146 => 78,  143 => 77,  141 => 76,  137 => 74,  131 => 70,  124 => 65,  112 => 59,  108 => 58,  104 => 57,  100 => 56,  90 => 48,  86 => 47,  83 => 46,  81 => 45,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"live-token-sale\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-7 text-center\">
                    <div class=\"section-title\">
                        <h2>Retrouver tous les évènement</h2>
                        <p>!!!....</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 remove-col-padding-mobile\">
                    <div class=\"token-sale-top-bar\">
                       <div class=\"row\">
                           <div class=\"col-lg-6 col-sm-3 remove-col-padding-mobile\">
                                <div class=\"left-content\">
                                    <h4>All Events</h4>
                                </div>
                           </div>
                           <div class=\"col-lg-6 col-sm-9 remove-col-padding-mobile\">
                                <div class=\"right-content\">
                                    <div class=\"tab-navbar\">
                                        <ul class=\"nav nav-tabs\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#active_tab\">Featured</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#upcoming_tab\">Active</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#ending_tab\">Expired</a>
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
                <div class=\"col-lg-12 remove-col-padding\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane container active\" id=\"active_tab\">
                            {% if __SELF__.loadEvents()%}
                                 <div class=\"row\">
                                    {% for item in __SELF__.loadEvents() %}
                                    <div class=\"col-lg-4 col-sm-6\">
                                            <div class=\"single-ico-list-box\">
                                                <div class=\"thumb\">
                                                <a href=\"event/show/effective-communication-skills.html\" target=\"_blank\">
                                                <img src=\"http://lab.thesoftking.com/eticket/assets/user/img/ticket/1532784219.jpg\" alt=\"\">                                       
                                                </div>
                                                <div class=\"content\">
                                                    <p style=\"margin:0px;clear:both;\"></p>
                                                    <h4 style=\"color:#10ac84;\">{{ item.nom }}</h4>
                                                    <p><strong><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Prx: </strong>{{ item.montant }} FCFA</p>
                                                    <p><strong><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> Date d'expiration: </strong>{{ item.periode.date_cloture }}</p>
                                                    <a  href=\"{{ 'description_event'|page({ event_id: item.id }) }}\"  class=\"boxed-btn-rounded\">
                                                    <i class=\"fa fa-caret-right\"></i> <span class=\"title\">Details</span></a>
                                                </div>
                                            </div>
                                        </div>
                                  {% endfor %}
                                 </div>
                                 <div class=\"text-center\">
                                    <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-featured-tickets.html\">Show More</a>
                                </div>
                                {%else%}
                                <div class=\"row\" style=\"text-align:center;display:block;\">
                                        <h3 class=\"\">NO  TICKETS FOUND</h3>
                                    </div>
                                {%endif%}
                        </div>
                        <div class=\"tab-pane container fade\" id=\"upcoming_tab\">
                            {% if __SELF__.loadEventsActive() %}
                                 <div class=\"row\">
                                    {% for item in __SELF__.loadEventsActive() %}
                                    <div class=\"col-lg-4 col-sm-6\">
                                            <div class=\"single-ico-list-box\">
                                                <div class=\"thumb\">
                                                <a href=\"event/show/effective-communication-skills.html\" target=\"_blank\">
                                                <img src=\"http://lab.thesoftking.com/eticket/assets/user/img/ticket/1532784219.jpg\" alt=\"\">                                       
                                                </div>
                                                <div class=\"content\">
                                                    <p style=\"margin:0px;clear:both;\"></p>
                                                    <h4 style=\"color:#10ac84;\">{{ item.nom }}</h4>
                                                    <p><strong><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Prx: </strong>{{ item.montant }} FCFA</p>
                                                    <a  href=\"{{ 'description_event'|page({ event_id: item.id }) }}\"  class=\"boxed-btn-rounded\">
                                                    <i class=\"fa fa-caret-right\"></i> <span class=\"title\">Details</span></a>
                                                </div>
                                            </div>
                                        </div>
                                  {% endfor %}
                                </div>
                                <div class=\"text-center\">
                                    <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-featured-tickets.html\">Show More</a>
                                </div>
                                {%else%}
                                <div class=\"row\" style=\"text-align:center;display:block;\">
                                        <h3 class=\"\">NO active TICKETS FOUND</h3>
                                    </div>
                                {%endif%}
                          </div>
                        <div class=\"tab-pane container fade\" id=\"ending_tab\"><!-- ending tab start -->
                            {%if __SELF__.loadEventsExpire()%}
                                 <div class=\"row\">
                                   {% for item in __SELF__.loadEventsExpire() %}
                                    <div class=\"col-lg-4 col-sm-6\">
                                            <div class=\"single-ico-list-box\">
                                                <div class=\"thumb\">
                                                <a href=\"event/show/effective-communication-skills.html\" target=\"_blank\">
                                                <img src=\"http://lab.thesoftking.com/eticket/assets/user/img/ticket/1532784219.jpg\" alt=\"\">                                       
                                                </div>
                                                <div class=\"content\">
                                                    <p style=\"margin:0px;clear:both;\"></p>
                                                    <h4 style=\"color:#10ac84;\">{{ item.nom }}</h4>
                                                    <p><strong><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Prx: </strong>{{ item.montant }} FCFA</p>
                                                    <a  href=\"{{ 'description_event'|page({ event_id: item.id }) }}\"  class=\"boxed-btn-rounded\">
                                                    <i class=\"fa fa-caret-right\"></i> <span class=\"title\">Details</span></a>
                                                </div>
                                            </div>
                                        </div>
                                  {% endfor %}
                                </div>
                                <div class=\"text-center\">
                                    <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-featured-tickets.html\">Show More</a>
                                </div>
                                {%else%}
                                <div class=\"row\" style=\"text-align:center;display:block;\">
                                        <h3 class=\"\">NO EXPIRED TICKETS FOUND</h3>
                                 </div>
                                {%endif%}
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
</div>












", "C:\\wamp64\\www\\install-master/plugins/event/event/components/eventlist/default.htm", "");
    }
}
