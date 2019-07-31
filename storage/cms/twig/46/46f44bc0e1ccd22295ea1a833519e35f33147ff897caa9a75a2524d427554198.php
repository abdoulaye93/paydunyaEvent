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

/* /opt/lampp/htdocs/paydunyaEvent/themes/demo/partials/site/header.htm */
class __TwigTemplate_8c74380184862f86b99b09c1ba4197e1a2537b10847669314138d93a03f7c9d4 extends \Twig\Template
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
        echo "<!-- Nav -->
<nav class=\"navbar navbar-area navbar-expand-lg navbar-light navbar-fixed-top navbar-autohide\">
    <div class=\"container\">
        <div >
            <!-- navbar header start -->
            <a class=\"\" href=\"http://lab.thesoftking.com/eticket\">
              <img style=\"width:20px;display:block;margin:0;\" src=\"http://lab.thesoftking.com/eticket/assets/user/ad_images/1532510917.jpg\" alt=\"addvertisement-02\">
            </a>
            
        </div>
        <!-- navbar header end -->
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#Tokenizer\" aria-controls=\"Tokenizer\"
            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"Tokenizer\">

            <!-- navbar collapse start -->
            <ul class=\"navbar-nav\">
                <li class=\"nav-item  ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20) == "home")) {
            echo "active";
        }
        echo " \">
                    <a class=\"na";
        // line 21
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "v-link\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Comment Ça marche</a>
                </li>
                
                  <li class='nav-item ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24) == "view_event")) {
            echo "active";
        }
        echo "'>
                      <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("view_event");
        echo "\">Trouver un évènement</a>
                  </li>
                   <li class=\"nav-item \">
                      <a class=\"nav-link\" href=\"\">Contactez nous</a>
                   </li>
                 ";
        // line 30
        if (($context["user"] ?? null)) {
            // line 31
            echo "                      <li class=\"nav-item \">
                            <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\" href=\"\" class=\"nav-link\">Sign out</a>    
                      </li>

                            <li class=\"nav-item dropdown ";
            // line 35
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35) == "create_event") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35) == "manage_event")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35) == "access_event"))) {
                echo "active";
            }
            echo "\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Event</a>
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"";
            // line 38
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("create_event");
            echo "\">Créer un évènement</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 39
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event", ["user_id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 39)]);
            echo "\">Gestion des évènement</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 40
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("access_event", ["user_id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 40)]);
            echo "\">Suivre un évènement</a>
                                </div>
                            </li>

                   <li class=\"nav-item ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44) == "configuration_payment")) {
                echo "active";
            }
            echo "\">
                        <a class=\"nav-link\" href=\"";
            // line 45
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("configuration_payment");
            echo "\">Config payment</a>
                   </li>
                    
                
                    ";
        } else {
            // line 50
            echo "                         <li class=\"nav-item boxed-btn\">
                    <a class=\"nav-link boxed-btn\" href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login - Register</a>
                </li>
                    ";
        }
        // line 54
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "is_superuser", [], "any", false, false, false, 54)) {
            // line 55
            echo "                     </li>
                         <li class=\"nav-item dropdown ";
            // line 56
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56) == "admin") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56) == "admin_demande"))) {
                echo "active";
            }
            echo "\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
            // line 57
            if (twig_length_filter($this->env, ($context["notifs"] ?? null))) {
                // line 58
                echo "                                    <span class=\"badge badge-danger\">
                                            Notif";
                // line 59
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["notifs"] ?? null)), "html", null, true);
                echo "</span>
                                    ";
            } else {
                // line 61
                echo "                                   
                                    ";
            }
            // line 62
            echo "Gestion</a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"";
            // line 64
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("admin");
            echo "\">  évènement</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 65
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("admin_demande");
            echo "\">";
            if (twig_length_filter($this->env, ($context["notifs"] ?? null))) {
                // line 66
                echo "                                        <span class=\"badge badge-danger\">
                                                Notif";
                // line 67
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["notifs"] ?? null)), "html", null, true);
                echo "</span>
                                        ";
            } else {
                // line 69
                echo "                                       
                                        ";
            }
            // line 70
            echo "Demande Event</a>
                            </div>
                        </li>
                
                    ";
        } else {
            // line 75
            echo "                
                    ";
        }
        // line 77
        echo "                    
                
               
               
              </ul>
        </div>
        <!-- navbar collapse end -->
    </div>
</nav>

  <!-- login and register modal start-->
    <div class=\"login-registration-modal\" id=\"loginRegModal\">
        <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
            <div class=\"modal\" tabindex=\"-1\" id=\"login-modal\" role=\"dialog\"><!-- #login modal-->
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\"><!-- modal content start -->
                        <nav>
                            <div class=\"nav nav-tabs login-modal-navigation\" id=\"nav-tab\" role=\"tablist\"><!-- login modal navigation start -->
                                <a class=\"nav-item nav-link active\" id=\"nav-login-tab\" data-toggle=\"tab\" href=\"#nav-login\" role=\"tab\" aria-controls=\"nav-login\"
                                    aria-selected=\"true\">Connexion</a>
                                <a class=\"nav-item nav-link\" id=\"nav-signup-tab\" data-toggle=\"tab\" href=\"#nav-signup\" role=\"tab\" aria-controls=\"nav-signup\"
                                    aria-selected=\"false\">Inscription</a>
                            </div><!-- login modal navigation end -->
                        </nav>
                        <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                            <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                                <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                                    <form id=\"userLoginForm\" data-request=\"onSignin\" data-request-success=\"formSuccess(this, context, data, textStatus, jqXHR)\">
                                        <input type=\"hidden\" name=\"_token\">
                                        <div class=\"form-element square login\"><!-- form element login start -->
                                            <label for=\"userSigninLogin\">Email
                                                <span>**</span>
                                            </label>
                                            <input name=\"login\" id=\"userSigninLogin\" type=\"text\" placeholder=\"Votre adresse email...\" class=\"input-field-square\">
                                            <p class=\"eml\"></p>
                                        </div><!-- form element login end -->
                                        <div class=\"form-element square login\"><!-- form element login start -->
                                            <label for=\"userSigninPassword\">Mot de passe
                                                <span>**</span>
                                            </label>
                                            <input name=\"password\" id=\"userSigninPassword\" type=\"password\" placeholder=\"Votre mot de passe....\" class=\"input-field-square\">
                                            <p class=\"eml\"></p>
                                        </div><!-- form element login end -->
                                        <div class=\"\">
                                          <a style=\"text-decoration: underline;\" href=\"\">Mot de passe oublié ?</a>
                                          <p class=\"";
        // line 122
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 122), "id", [], "any", false, false, false, 122) == "register")) {
            echo "active";
        }
        echo "\" style=\"text-decoration: underline;\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
        echo "\">Créer un compte</a>   </p>
                                        </div>
                                        <button type=\"submit\" class=\"submit-form-btn\">Se connecter</button>
                                    </form>
                                </div><!-- login form wrapper end -->
                            </div>
                            <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">
    
                                <div class=\"singup-form-wrapper\">
                                    <form id=\"registerForm\" data-request=\"onRegister\">
                                        <input type=\"hidden\" name=\"_token\" value=\"\">
                                        <div class=\"form-element square login\">
                                            <label for=\"\"registerName>Nom complet
                                                <span>**</span>
                                            </label>
                                            <input name=\"name\" id=\"registerName\" type=\"text\" placeholder=\"Votre nom complet....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div class=\"form-element square login\">
                                            <label for=\"registerEmail\">Adresse email
                                                <span>**</span>
                                            </label>
                                            <input name=\"email\" id=\"registerEmail\" type=\"email\" placeholder=\"Votre adresse email....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div class=\"form-element square login\">
                                            <label for=\"registerPassword\">Mot de passe
                                                <span>**</span>
                                            </label>
                                            <input name=\"password\" id=\"registerPassword\" type=\"password\" placeholder=\"Votre mot de passe....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div class=\"form-element square login\">
                                            <label>Confirmer mot de passe
                                                <span>**</span>
                                            </label>
                                            <input name=\"password_confirmation\" id=\"registerPasswordConfirmation\" type=\"password\" placeholder=\"Confirmer le mot de passe....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <input type=\"submit\" class=\"submit-form-btn\" value=\"S'inscrire\">
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.tab conent-->
                    </div><!-- modal content end -->
                </div>
            </div><!-- /#loginmodal -->
        </div><!-- login modal warapper satart end-->
    </div>
    <!-- login and register modal end -->

    <script>
    function formSuccess(form, contect, data, textStatus, jqXHR) 
    {
        if(textStatus == 'success')
            window.location = \"";
        // line 177
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("Demonstration");
        echo "\"

    }
    </script>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/paydunyaEvent/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 177,  245 => 122,  198 => 77,  194 => 75,  187 => 70,  183 => 69,  178 => 67,  175 => 66,  171 => 65,  167 => 64,  163 => 62,  159 => 61,  154 => 59,  151 => 58,  149 => 57,  143 => 56,  140 => 55,  137 => 54,  131 => 50,  123 => 45,  117 => 44,  110 => 40,  106 => 39,  102 => 38,  94 => 35,  88 => 31,  86 => 30,  78 => 25,  72 => 24,  62 => 21,  56 => 20,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Nav -->
<nav class=\"navbar navbar-area navbar-expand-lg navbar-light navbar-fixed-top navbar-autohide\">
    <div class=\"container\">
        <div >
            <!-- navbar header start -->
            <a class=\"\" href=\"http://lab.thesoftking.com/eticket\">
              <img style=\"width:20px;display:block;margin:0;\" src=\"http://lab.thesoftking.com/eticket/assets/user/ad_images/1532510917.jpg\" alt=\"addvertisement-02\">
            </a>
            
        </div>
        <!-- navbar header end -->
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#Tokenizer\" aria-controls=\"Tokenizer\"
            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"Tokenizer\">

            <!-- navbar collapse start -->
            <ul class=\"navbar-nav\">
                <li class=\"nav-item  {% if this.page.id == 'home' %}active{% endif %} \">
                    <a class=\"na{% component 'session' %}v-link\" href=\"{{ 'home'|page }}\">Comment Ça marche</a>
                </li>
                
                  <li class='nav-item {% if this.page.id == 'view_event' %}active{% endif %}'>
                      <a class=\"nav-link\" href=\"{{ 'view_event'|page }}\">Trouver un évènement</a>
                  </li>
                   <li class=\"nav-item \">
                      <a class=\"nav-link\" href=\"\">Contactez nous</a>
                   </li>
                 {% if user %}
                      <li class=\"nav-item \">
                            <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\" href=\"\" class=\"nav-link\">Sign out</a>    
                      </li>

                            <li class=\"nav-item dropdown {% if this.page.id == 'create_event' or this.page.id == 'manage_event' or this.page.id == 'access_event' %}active{% endif %}\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Event</a>
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"{{ 'create_event'|page }}\">Créer un évènement</a>
                                    <a class=\"dropdown-item\" href=\"{{ 'manage_event'|page({user_id:user.id}) }}\">Gestion des évènement</a>
                                    <a class=\"dropdown-item\" href=\"{{ 'access_event'|page({user_id:user.id}) }}\">Suivre un évènement</a>
                                </div>
                            </li>

                   <li class=\"nav-item {% if this.page.id == 'configuration_payment' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ 'configuration_payment'|page }}\">Config payment</a>
                   </li>
                    
                
                    {% else %}
                         <li class=\"nav-item boxed-btn\">
                    <a class=\"nav-link boxed-btn\" href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login - Register</a>
                </li>
                    {% endif %}
                    {% if user.is_superuser %}
                     </li>
                         <li class=\"nav-item dropdown {% if this.page.id == 'admin' or this.page.id == 'admin_demande' %}active{% endif %}\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> {% if notifs|length%}
                                    <span class=\"badge badge-danger\">
                                            Notif{{ notifs|length}}</span>
                                    {%else%}
                                   
                                    {%endif%}Gestion</a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"{{ 'admin'|page }}\">  évènement</a>
                                <a class=\"dropdown-item\" href=\"{{ 'admin_demande'|page }}\">{% if notifs|length%}
                                        <span class=\"badge badge-danger\">
                                                Notif{{ notifs|length}}</span>
                                        {%else%}
                                       
                                        {%endif%}Demande Event</a>
                            </div>
                        </li>
                
                    {% else %}
                
                    {% endif %}
                    
                
               
               
              </ul>
        </div>
        <!-- navbar collapse end -->
    </div>
</nav>

  <!-- login and register modal start-->
    <div class=\"login-registration-modal\" id=\"loginRegModal\">
        <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
            <div class=\"modal\" tabindex=\"-1\" id=\"login-modal\" role=\"dialog\"><!-- #login modal-->
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\"><!-- modal content start -->
                        <nav>
                            <div class=\"nav nav-tabs login-modal-navigation\" id=\"nav-tab\" role=\"tablist\"><!-- login modal navigation start -->
                                <a class=\"nav-item nav-link active\" id=\"nav-login-tab\" data-toggle=\"tab\" href=\"#nav-login\" role=\"tab\" aria-controls=\"nav-login\"
                                    aria-selected=\"true\">Connexion</a>
                                <a class=\"nav-item nav-link\" id=\"nav-signup-tab\" data-toggle=\"tab\" href=\"#nav-signup\" role=\"tab\" aria-controls=\"nav-signup\"
                                    aria-selected=\"false\">Inscription</a>
                            </div><!-- login modal navigation end -->
                        </nav>
                        <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                            <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                                <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                                    <form id=\"userLoginForm\" data-request=\"onSignin\" data-request-success=\"formSuccess(this, context, data, textStatus, jqXHR)\">
                                        <input type=\"hidden\" name=\"_token\">
                                        <div class=\"form-element square login\"><!-- form element login start -->
                                            <label for=\"userSigninLogin\">Email
                                                <span>**</span>
                                            </label>
                                            <input name=\"login\" id=\"userSigninLogin\" type=\"text\" placeholder=\"Votre adresse email...\" class=\"input-field-square\">
                                            <p class=\"eml\"></p>
                                        </div><!-- form element login end -->
                                        <div class=\"form-element square login\"><!-- form element login start -->
                                            <label for=\"userSigninPassword\">Mot de passe
                                                <span>**</span>
                                            </label>
                                            <input name=\"password\" id=\"userSigninPassword\" type=\"password\" placeholder=\"Votre mot de passe....\" class=\"input-field-square\">
                                            <p class=\"eml\"></p>
                                        </div><!-- form element login end -->
                                        <div class=\"\">
                                          <a style=\"text-decoration: underline;\" href=\"\">Mot de passe oublié ?</a>
                                          <p class=\"{% if this.page.id == 'register' %}active{% endif %}\" style=\"text-decoration: underline;\"><a href=\"{{ 'register'|page }}\">Créer un compte</a>   </p>
                                        </div>
                                        <button type=\"submit\" class=\"submit-form-btn\">Se connecter</button>
                                    </form>
                                </div><!-- login form wrapper end -->
                            </div>
                            <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">
    
                                <div class=\"singup-form-wrapper\">
                                    <form id=\"registerForm\" data-request=\"onRegister\">
                                        <input type=\"hidden\" name=\"_token\" value=\"\">
                                        <div class=\"form-element square login\">
                                            <label for=\"\"registerName>Nom complet
                                                <span>**</span>
                                            </label>
                                            <input name=\"name\" id=\"registerName\" type=\"text\" placeholder=\"Votre nom complet....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div class=\"form-element square login\">
                                            <label for=\"registerEmail\">Adresse email
                                                <span>**</span>
                                            </label>
                                            <input name=\"email\" id=\"registerEmail\" type=\"email\" placeholder=\"Votre adresse email....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div class=\"form-element square login\">
                                            <label for=\"registerPassword\">Mot de passe
                                                <span>**</span>
                                            </label>
                                            <input name=\"password\" id=\"registerPassword\" type=\"password\" placeholder=\"Votre mot de passe....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div class=\"form-element square login\">
                                            <label>Confirmer mot de passe
                                                <span>**</span>
                                            </label>
                                            <input name=\"password_confirmation\" id=\"registerPasswordConfirmation\" type=\"password\" placeholder=\"Confirmer le mot de passe....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <input type=\"submit\" class=\"submit-form-btn\" value=\"S'inscrire\">
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.tab conent-->
                    </div><!-- modal content end -->
                </div>
            </div><!-- /#loginmodal -->
        </div><!-- login modal warapper satart end-->
    </div>
    <!-- login and register modal end -->

    <script>
    function formSuccess(form, contect, data, textStatus, jqXHR) 
    {
        if(textStatus == 'success')
            window.location = \"{{ 'Demonstration'|page }}\"

    }
    </script>", "/opt/lampp/htdocs/paydunyaEvent/themes/demo/partials/site/header.htm", "");
    }
}
