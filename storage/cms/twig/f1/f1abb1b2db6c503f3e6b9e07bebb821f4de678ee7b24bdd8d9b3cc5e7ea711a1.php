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

/* C:\wamp64\www\install-master1/themes/demo/partials/site/header.htm */
class __TwigTemplate_6f5bf4335314b194ff0f5b17909dec286b6919bb5eec3967608c7343210d7557 extends \Twig\Template
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
            echo "\">Invitation</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 41
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("achat");
            echo "\">Mes achats</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 42
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("annue_achat");
            echo "\">Demande d'annulation achat</a>
                                </div>
                            </li>



                            <li class=\"nav-item dropdown ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48) == "configuration_payment")) {
                echo "active";
            }
            echo "\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Paiement</a>
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"";
            // line 51
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("configuration_payment");
            echo "\">Configurer le paiement</a>
                                  
                                </div>
                            </li>
                    
                
                    ";
        } else {
            // line 58
            echo "                         <li class=\"nav-item boxed-btn\">
                    <a class=\"nav-link boxed-btn\" href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login - Register</a>
                </li>
                    ";
        }
        // line 62
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "is_superuser", [], "any", false, false, false, 62)) {
            // line 63
            echo "                     </li>
                         <li class=\"nav-item dropdown ";
            // line 64
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64) == "admin") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64) == "admin_demande"))) {
                echo "active";
            }
            echo "\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
            // line 65
            if (twig_length_filter($this->env, ($context["notifs"] ?? null))) {
                // line 66
                echo "                                    <span class=\"badge badge-danger\">
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
            echo "Gestion</a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"";
            // line 72
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("admin");
            echo "\">  évènement</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 73
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("admin_demande");
            echo "\">";
            if (twig_length_filter($this->env, ($context["notifs"] ?? null))) {
                // line 74
                echo "                                        <span class=\"badge badge-danger\">
                                                Notif";
                // line 75
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["notifs"] ?? null)), "html", null, true);
                echo "</span>
                                        ";
            } else {
                // line 77
                echo "                                       
                                        ";
            }
            // line 78
            echo "Demande Event</a>
                                        
                            </div>
                        </li>
                
                    ";
        } else {
            // line 84
            echo "                
                    ";
        }
        // line 86
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
        // line 131
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 131), "id", [], "any", false, false, false, 131) == "register")) {
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
        // line 186
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("Demonstration");
        echo "\"

    }

    document.getElementById('annulerAchat').addEventListener('click', function(event){
        if(!confirm('Voulez vous vraiment effectuer une demande d\\'annulation d\\'achat ?'))
            event.preventDefault()
    })
    </script>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 186,  260 => 131,  213 => 86,  209 => 84,  201 => 78,  197 => 77,  192 => 75,  189 => 74,  185 => 73,  181 => 72,  177 => 70,  173 => 69,  168 => 67,  165 => 66,  163 => 65,  157 => 64,  154 => 63,  151 => 62,  145 => 58,  135 => 51,  127 => 48,  118 => 42,  114 => 41,  110 => 40,  106 => 39,  102 => 38,  94 => 35,  88 => 31,  86 => 30,  78 => 25,  72 => 24,  62 => 21,  56 => 20,  35 => 1,);
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
                                    <a class=\"dropdown-item\" href=\"{{ 'access_event'|page({user_id:user.id}) }}\">Invitation</a>
                                    <a class=\"dropdown-item\" href=\"{{ 'achat'|page }}\">Mes achats</a>
                                    <a class=\"dropdown-item\" href=\"{{ 'annue_achat'|page }}\">Demande d'annulation achat</a>
                                </div>
                            </li>



                            <li class=\"nav-item dropdown {% if this.page.id == 'configuration_payment' %}active{% endif %}\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Paiement</a>
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"{{ 'configuration_payment'|page }}\">Configurer le paiement</a>
                                  
                                </div>
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

    document.getElementById('annulerAchat').addEventListener('click', function(event){
        if(!confirm('Voulez vous vraiment effectuer une demande d\\'annulation d\\'achat ?'))
            event.preventDefault()
    })
    </script>", "C:\\wamp64\\www\\install-master1/themes/demo/partials/site/header.htm", "");
    }
}
