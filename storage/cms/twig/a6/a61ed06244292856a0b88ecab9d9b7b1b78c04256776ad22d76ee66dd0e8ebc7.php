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
        echo "
<section class=\"live-token-sale\">
     <div class=\"container\">        
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7 text-center\">
                 <div class=\"section-title\">
                    <h2>Tous les évènements</h2>
                 <p>...!!!!</p>
                </div>
             </div>
        </div>
        <div class=\"row\">
                <div class=\"col-lg-12 remove-col-padding-mobile\">
                    <div class=\"token-sale-top-bar\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-sm-3 remove-col-padding-mobile\">
                                <div class=\"left-content\">
                                    <h4> Event</h4>
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
                                                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#upcoming_tab\">Active</a>
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
                <div class=\"col-lg-12 remove-col-padding\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane container active\" id=\"active_tab\">
                            <div class=\"row\">
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
        echo "                            </div>
                                <div class=\"text-center\">
                                    <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-featured-tickets.html\">Show More</a>
                                </div>
                            </div>
                        <div class=\"tab-pane container fade\" id=\"upcoming_tab\">
                                <div class=\"row\">                                                       
                                <div class=\"col-lg-4 col-sm-6\">
                                    <div class=\"single-ico-list-box\">
                                        <div class=\"thumb\">
                                            <a href=\"event/show/bali-indonesia-package-2-nights-3-days.html\" target=\"_blank\">
                                                <img style=\"width:100%;\" src=\"assets/user/img/ticket/1532784475.jpg\" alt=\"ico images\">
                                            </a>
                                        </div>
                                        <div class=\"content\">                                           
                                            <p style=\"margin:0px;clear:both;\"></p>
                                            <h4 style=\"color:#10ac84;\">Bali, Indonesia Package 2 Nights 3 Days</h4>
                                            <p><strong><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Price: </strong>10000 USD</p>
                                            <p><strong><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> Expired Date: </strong>2028-06-14</p>
                                            <a href=\"event/show/bali-indonesia-package-2-nights-3-days.html\" target=\"_blank\" class=\"boxed-btn-rounded\">
                                                <i class=\"fa fa-caret-right\"></i>
                                                <span class=\"title\">Details</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            <div class=\"text-center\">
                                <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-active-tickets.html\">Show More</a>
                            </div>
                        </div>
                        <div class=\"tab-pane container fade\" id=\"ending_tab\"><!-- ending tab start -->
                            <div class=\"row\" style=\"text-align:center;display:block;\">
                                ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEventsExpire", [], "method", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 99
            echo "                                    <div class=\"col-lg-4 col-sm-6\">
                                        <div class=\"single-ico-list-box\">
                                            <div class=\"thumb\">
                                                <a href=\"event/show/effective-communication-skills.html\" target=\"_blank\">
                                                    <img src=\"http://lab.thesoftking.com/eticket/assets/user/img/ticket/1532784219.jpg\" alt=\"\">
                                                </a>
                                            </div>
                                        <div class=\"content\">
                                            <p style=\"margin:0px;clear:both;\"></p>
                                            <h4 style=\"color:#10ac84;\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 108), "html", null, true);
            echo "</h4>
                                            <p><strong><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Prx: </strong>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant", [], "any", false, false, false, 109), "html", null, true);
            echo " FCFA</p>
                                            <p><strong><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> Date d'expiration: </strong>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "periode", [], "any", false, false, false, 110), "date_cloture", [], "any", false, false, false, 110), "html", null, true);
            echo "</p>
                                            <a  href=\"";
            // line 111
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("description_event");
            echo "\"  class=\"boxed-btn-rounded\">
                                                <i class=\"fa fa-caret-right\"></i> <span class=\"title\">Details</span>
                                            </a>
                                        </div>
                                    </div>                      
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                            </div>
                            <h3 class=\"\">
                                NO EXPIRED TICKETS FOUND
                            </h3>
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
        // line 144
        if ( !($context["user"] ?? null)) {
            // line 145
            echo "
                                    <div class=\"row\">
                                
                                        <div class=\"col-md-6\">
                                            <h3 class=\"";
            // line 149
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 149), "id", [], "any", false, false, false, 149) == "register")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\">Créer un compte</a></h3>
                                            ";
            // line 150
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 151
            echo "                                        </div>
                                
                                    </div>
                                
                                ";
        } else {
            // line 156
            echo "                                
                                ";
        }
        // line 158
        echo "                            </div><!-- login form wrapper end -->
                        </div>
                        <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">

                            <div class=\"singup-form-wrapper\">
                                ";
        // line 163
        if ( !($context["user"] ?? null)) {
            // line 164
            echo "                                
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            ";
            // line 167
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 168
            echo "                                        </div>
                                
                                    </div>
                                
                                ";
        } else {
            // line 173
            echo "                                
                                ";
        }
        // line 175
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
        return array (  284 => 175,  280 => 173,  273 => 168,  269 => 167,  264 => 164,  262 => 163,  255 => 158,  251 => 156,  244 => 151,  240 => 150,  232 => 149,  226 => 145,  224 => 144,  195 => 117,  183 => 111,  179 => 110,  175 => 109,  171 => 108,  160 => 99,  156 => 98,  121 => 65,  109 => 59,  105 => 58,  101 => 57,  97 => 56,  87 => 48,  83 => 47,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<section class=\"live-token-sale\">
     <div class=\"container\">        
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7 text-center\">
                 <div class=\"section-title\">
                    <h2>Tous les évènements</h2>
                 <p>...!!!!</p>
                </div>
             </div>
        </div>
        <div class=\"row\">
                <div class=\"col-lg-12 remove-col-padding-mobile\">
                    <div class=\"token-sale-top-bar\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-sm-3 remove-col-padding-mobile\">
                                <div class=\"left-content\">
                                    <h4> Event</h4>
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
                                                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#upcoming_tab\">Active</a>
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
                <div class=\"col-lg-12 remove-col-padding\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane container active\" id=\"active_tab\">
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
                            </div>
                        <div class=\"tab-pane container fade\" id=\"upcoming_tab\">
                                <div class=\"row\">                                                       
                                <div class=\"col-lg-4 col-sm-6\">
                                    <div class=\"single-ico-list-box\">
                                        <div class=\"thumb\">
                                            <a href=\"event/show/bali-indonesia-package-2-nights-3-days.html\" target=\"_blank\">
                                                <img style=\"width:100%;\" src=\"assets/user/img/ticket/1532784475.jpg\" alt=\"ico images\">
                                            </a>
                                        </div>
                                        <div class=\"content\">                                           
                                            <p style=\"margin:0px;clear:both;\"></p>
                                            <h4 style=\"color:#10ac84;\">Bali, Indonesia Package 2 Nights 3 Days</h4>
                                            <p><strong><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Price: </strong>10000 USD</p>
                                            <p><strong><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> Expired Date: </strong>2028-06-14</p>
                                            <a href=\"event/show/bali-indonesia-package-2-nights-3-days.html\" target=\"_blank\" class=\"boxed-btn-rounded\">
                                                <i class=\"fa fa-caret-right\"></i>
                                                <span class=\"title\">Details</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            <div class=\"text-center\">
                                <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-active-tickets.html\">Show More</a>
                            </div>
                        </div>
                        <div class=\"tab-pane container fade\" id=\"ending_tab\"><!-- ending tab start -->
                            <div class=\"row\" style=\"text-align:center;display:block;\">
                                {% for item in __SELF__.loadEventsExpire() %}
                                    <div class=\"col-lg-4 col-sm-6\">
                                        <div class=\"single-ico-list-box\">
                                            <div class=\"thumb\">
                                                <a href=\"event/show/effective-communication-skills.html\" target=\"_blank\">
                                                    <img src=\"http://lab.thesoftking.com/eticket/assets/user/img/ticket/1532784219.jpg\" alt=\"\">
                                                </a>
                                            </div>
                                        <div class=\"content\">
                                            <p style=\"margin:0px;clear:both;\"></p>
                                            <h4 style=\"color:#10ac84;\">{{ item.nom }}</h4>
                                            <p><strong><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Prx: </strong>{{ item.montant }} FCFA</p>
                                            <p><strong><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> Date d'expiration: </strong>{{ item.periode.date_cloture }}</p>
                                            <a  href=\"{{ 'description_event'|page }}\"  class=\"boxed-btn-rounded\">
                                                <i class=\"fa fa-caret-right\"></i> <span class=\"title\">Details</span>
                                            </a>
                                        </div>
                                    </div>                      
                                {% endfor %}
                            </div>
                            <h3 class=\"\">
                                NO EXPIRED TICKETS FOUND
                            </h3>
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
</div>












", "C:\\wamp64\\www\\install-master/plugins/event/event/components/eventlist/default.htm", "");
    }
}
