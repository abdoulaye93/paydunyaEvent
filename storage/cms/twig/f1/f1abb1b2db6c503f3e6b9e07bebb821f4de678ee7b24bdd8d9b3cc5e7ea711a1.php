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
        echo "<!-- 
<nav class=\"navbar navbar-area navbar-expand-lg bg-white navbar-light fixed-top navbar-autohide\" style=\"background-color: #0070B2\">
    <div class=\"container\">
        <div >
          
            <a class=\"\" href=\"http://lab.thesoftking.com/eticket\">
              <img style=\"width:80px;display:block;margin:0;\" class=\"img-fluid\" src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/logo.jpg");
        echo "\" alt=\"logo PayDunay\">
            </a>
            
        </div>
       
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#Tokenizer\" aria-controls=\"Tokenizer\"
            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"Tokenizer\">

           
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
                    <a class=\"nav-link btn bg-primary text-white p-3\" href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\"><h3><i class=\"fa fa-home\"></i> Login - Register</h3></a>
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
        
    </div>
</nav>-->
<ul style=\"background-color:#1894dd\" class=\"nav justify-content-center p-2\">

        <li class=\"nav-item\">
            <a 
            style=\"color:#fff\" class=\"nav-link\" href=\"#\">
                <i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline\">Gmail</span></a>
        </li>

        <li class=\"nav-item\">
            <a style=\"color:#fff\" class=\"nav-link\" href=\"#\">
                <i class=\"fa fa-whatsapp\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline\">Whatsapp</span></a>
        </li>


        <li class=\"nav-item\">
            <a style=\"color:#fff\" class=\"nav-link\" href=\"#\">
                <i class=\"fa fa-facebook-official\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline\">Facebook</span></a>
        </li>

        <li class=\"nav-item\">
            <a style=\"color:#fff\" class=\"nav-link\" href=\"#\">
                <i class=\"fa fa-linkedin-square\" aria-hidden=\"true\">
                </i>
                <span class=\"d-none d-md-inline\">Linkedin</span></a>
        </li>
    </ul>
    <header class=\"navbar-dark bg-dark p-1\">
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\"
                    aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
    
    
                <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
    
                    
                    <a class=\"navbar-brand\" href=\"#\">
                        <img src=\"";
        // line 136
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/ad_images/logo.png");
        echo "\" width=\"40\" height=\"40\" class=\"d-inline-block align-top\"
                            alt=\"\">
                        &nbsp;
                    </a>
    
                    <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
                        <li
                        class=\"nav-item active\">
                            <a 
                            class=\"nav-link\" href=\"";
        // line 145
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">Comment Ça marche<span class=\"sr-only\">(current)</span></a>
                        </li>
    
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"";
        // line 149
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("view_event");
        echo "\">Trouver un évènement <span class=\"sr-only\">(current)</span></a>
                        </li>
    
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"#\">Contactez nous <span class=\"sr-only\">(current)</span></a>
                        </li>
                        ";
        // line 155
        if (($context["user"] ?? null)) {
            // line 156
            echo "                        <li class=\"nav-item dropdown ";
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 156), "id", [], "any", false, false, false, 156) == "create_event") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 156), "id", [], "any", false, false, false, 156) == "manage_event")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 156), "id", [], "any", false, false, false, 156) == "access_event"))) {
                echo "active";
            }
            echo "\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Event</a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"";
            // line 159
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("create_event");
            echo "\">Créer un évènement</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 160
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event", ["user_id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 160)]);
            echo "\">Gestion des évènement</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 161
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("access_event", ["user_id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 161)]);
            echo "\">Invitation</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 162
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("achat");
            echo "\">Mes achats</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 163
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("annue_achat");
            echo "\">Demande d'annulation achat</a>
                            </div>
                        </li>
                            ";
            // line 166
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "is_superuser", [], "any", false, false, false, 166)) {
                // line 167
                echo "                            <li class=\"nav-item dropdown ";
                if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 167), "id", [], "any", false, false, false, 167) == "create_event") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 167), "id", [], "any", false, false, false, 167) == "manage_event")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 167), "id", [], "any", false, false, false, 167) == "access_event"))) {
                    echo "active";
                }
                echo "\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                // line 168
                if (twig_length_filter($this->env, ($context["notifs"] ?? null))) {
                    // line 169
                    echo "                                        <span class=\"badge badge-danger\">
                                                Notif";
                    // line 170
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["notifs"] ?? null)), "html", null, true);
                    echo "</span>
                                        ";
                } else {
                    // line 172
                    echo "                                       
                                        ";
                }
                // line 173
                echo "Gestion</a>
                                <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"";
                // line 175
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("admin");
                echo "\">  évènement</a>
                                        <a class=\"dropdown-item\" href=\"";
                // line 176
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("admin_demande");
                echo "\">";
                if (twig_length_filter($this->env, ($context["notifs"] ?? null))) {
                    // line 177
                    echo "                                                <span class=\"badge badge-danger\">
                                                        Notif";
                    // line 178
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["notifs"] ?? null)), "html", null, true);
                    echo "</span>
                                                ";
                } else {
                    // line 180
                    echo "                                               
                                                ";
                }
                // line 181
                echo "Demande Event</a>
                                                
                                </div>
                            </li>
                            ";
            }
            // line 186
            echo "                        ";
        }
        // line 187
        echo "                    </ul>
                        ";
        // line 188
        if (($context["user"] ?? null)) {
            // line 189
            echo "                        <button data-request=\"onLogout\" data-request-data=\"redirect: '/'\" style=\"border-radius:50px\" class=\"btn btn-outline-primary my-2 my-sm-0\">
    
                                <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>
                                SIGN-OUT</button> 
                        ";
        } else {
            // line 194
            echo "                        <button style=\"border-radius:50px\" class=\"btn btn-outline-primary my-2 my-sm-0\"  data-toggle=\"modal\" data-target=\"#login-modal\">
    
                        <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>
                        SIGN-IN</button>
                        ";
        }
        // line 199
        echo "                </div>
            </nav>
        </header>
      

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
        // line 239
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 239), "id", [], "any", false, false, false, 239) == "register")) {
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
                                        <div class=\"form-element square login\">
                                            <label>Modifier les informations personnelles renseignées dans le compte PayDunya
                                                <span>**</span>
                                            </label>
                                            <input  type=\"checkbox\" onchange=\"register(event)\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div id=\"paydunya\">
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
    function register(event){
        if(event.target.checked){
        var paydunya=document.getElementById('paydunya')
        var div1 = document.createElement('div')
            div1.setAttribute('class', 'form-element square login')
            div1.setAttribute('id', 'div1')
        var label1 = document.createElement('label')
              label1.setAttribute('for', 'master_key')
              label1.innerHTML=\"Master key\"
        var input1 = document.createElement('input')
              input1.setAttribute('type', 'text')
              input1.setAttribute('id', 'inputtype2')
              input1.setAttribute('class', 'input-field-square')
              input1.setAttribute('placeholder', 'Votre clé principale...')
              input1.setAttribute('name', 'master_key')
             // input1.setAttribute('required')
        div1.appendChild(label1)
        div1.appendChild(input1)
        document.getElementById('paydunya').appendChild(div1)
       var div2 = document.createElement('div')
            div2.setAttribute('class', 'form-element square login')
            div2.setAttribute('id', 'div2')
        var label2 = document.createElement('label')
              label2.setAttribute('for', 'private_key_test')
              label2.innerHTML=\"Token production\"
        var input2 = document.createElement('input')
              input2.setAttribute('type', 'text')
              input2.setAttribute('id', 'private_key_test')
              input2.setAttribute('class', 'input-field-square')
              input2.setAttribute('placeholder', 'Votre clé privée de test...')
              input2.setAttribute('name', 'private_key_test')
        div2.appendChild(label2)
        div2.appendChild(input2)
        document.getElementById('paydunya').appendChild(div2)
        var div3 = document.createElement('div')
            div3.setAttribute('id', 'div3')
            div3.setAttribute('class', 'form-element square login')
        var label3 = document.createElement('label')
              label3.setAttribute('for', 'public_key_test')
              label3.innerHTML=\"Public test key\"
        var input3 = document.createElement('input')
              input3.setAttribute('type', 'text')
              input3.setAttribute('id', 'public_key_test')
              input3.setAttribute('class', 'input-field-square')
              input3.setAttribute('placeholder', 'Votre clé public de test...')
              input3.setAttribute('name', 'public_key_test')
        div3.appendChild(label3)
        div3.appendChild(input3)
        document.getElementById('paydunya').appendChild(div3)
        var div4 = document.createElement('div')
            div4.setAttribute('class', 'form-element square login')
            div4.setAttribute('id', 'div4')
        var label4 = document.createElement('label')
              label4.setAttribute('for', 'token_test')
              label4.innerHTML=\"Token production\"
        var input4 = document.createElement('input')
              input4.setAttribute('type', 'text')
              input4.setAttribute('id', 'token_test')
              input4.setAttribute('class', 'input-field-square')
              input4.setAttribute('placeholder', 'Votre token de test...')
              input4.setAttribute('name', 'token_test')
        div4.appendChild(label4)
        div4.appendChild(input4)
        document.getElementById('paydunya').appendChild(div4)
        var div5 = document.createElement('div')
            div5.setAttribute('class', 'form-element square login')
            div5.setAttribute('id', 'div5')
        var label5 = document.createElement('label')
              label5.setAttribute('id', 'public_key_prod')
              label5.innerHTML=\"Private production key\"
        var input5 = document.createElement('input')
              input5.setAttribute('type', 'text')
              input5.setAttribute('id', 'public_key_prod')
              input5.setAttribute('class', 'input-field-square')
              input5.setAttribute('placeholder', 'Votre clé public de production...')
              input5.setAttribute('name', 'public_key_prod')
        div5.appendChild(label5)
        div5.appendChild(input5)
        document.getElementById('paydunya').appendChild(div5)
        var div6 = document.createElement('div')
            div6.setAttribute('class', 'form-element square login')
            div6.setAttribute('id', 'div6')
        var label6 = document.createElement('label')
              label6.setAttribute('for', 'public_key_prod')
              label6.innerHTML=\"Public production key\"
        var input6 = document.createElement('input')
              input6.setAttribute('type', 'text')
              input6.setAttribute('id', 'public_key_prod')
              input6.setAttribute('class', 'input-field-square')
              input6.setAttribute('placeholder', 'Votre clé public de production...')
              input6.setAttribute('name', 'public_key_prod')
        div6.appendChild(label6)
        div6.appendChild(input6)
        document.getElementById('paydunya').appendChild(div6)
        var div7 = document.createElement('div')
            div7.setAttribute('class', 'form-element square login')
            div7.setAttribute('id', 'div7')
        var label7 = document.createElement('label')
              label7.setAttribute('for', 'token_prod')
              label7.innerHTML=\"Token production\"
        var input7 = document.createElement('input')
              input7.setAttribute('type', 'text')
              input7.setAttribute('id', 'token_prod')
              input7.setAttribute('class', 'input-field-square')
              input7.setAttribute('placeholder', 'Votre token de production...')
              input7.setAttribute('name', 'token_prod')
        div7.appendChild(label7)
        div7.appendChild(input7)
        document.getElementById('paydunya').appendChild(div7)
        var div8 = document.createElement('div')
            div8.setAttribute('class', 'form-element square login')
            div8.setAttribute('id', 'div8')
        var label8 = document.createElement('label')
              label8.setAttribute('for', 'phone')
              label8.innerHTML=\"Telephone\"
        var input8 = document.createElement('input')
              input8.setAttribute('type', 'text')
              input8.setAttribute('id', 'phone')
              input8.setAttribute('class', 'input-field-square')
              input8.setAttribute('placeholder', 'Votre numero de telephone...')
              input8.setAttribute('name', 'phone')
        div8.appendChild(label8)
        div8.appendChild(input8)
        document.getElementById('paydunya').appendChild(div8)
        var div9 = document.createElement('div')
            div9.setAttribute('class', 'form-element square login')
            div9.setAttribute('id', 'div9')
        var label9 = document.createElement('label')
              label9.setAttribute('for', 'redirect')
              label9.innerHTML=\"Redirection\"
        var slect = document.createElement('select')
              slect.setAttribute('id', 'redirect')
              slect.setAttribute('class', 'form-control')
              slect.setAttribute('name', 'redirect')
        var option1 = document.createElement('option')
            option1.innerHTML=\"oui\"
            option1.setAttribute('value','true')
        var option2 = document.createElement('option')
            option2.innerHTML=\"non\"
            option2.setAttribute('value','false')
        slect.appendChild(option1)
        slect.appendChild(option2)
        div9.appendChild(slect)
        document.getElementById('paydunya').appendChild(div9)
        }else{
            document.getElementById('div1').remove()
            document.getElementById('div2').remove()
            document.getElementById('div3').remove()
            document.getElementById('div4').remove()
            document.getElementById('div5').remove()
            document.getElementById('div6').remove()
            document.getElementById('div7').remove()
            document.getElementById('div8').remove()
            document.getElementById('div9').remove()
        }
    }
    function formSuccess(form, contect, data, textStatus, jqXHR) 
    {
        if(textStatus == 'success')
            window.location = \"";
        // line 458
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
        return array (  673 => 458,  447 => 239,  405 => 199,  398 => 194,  391 => 189,  389 => 188,  386 => 187,  383 => 186,  376 => 181,  372 => 180,  367 => 178,  364 => 177,  360 => 176,  356 => 175,  352 => 173,  348 => 172,  343 => 170,  340 => 169,  338 => 168,  331 => 167,  329 => 166,  323 => 163,  319 => 162,  315 => 161,  311 => 160,  307 => 159,  298 => 156,  296 => 155,  287 => 149,  280 => 145,  268 => 136,  216 => 86,  212 => 84,  204 => 78,  200 => 77,  195 => 75,  192 => 74,  188 => 73,  184 => 72,  180 => 70,  176 => 69,  171 => 67,  168 => 66,  166 => 65,  160 => 64,  157 => 63,  154 => 62,  148 => 58,  138 => 51,  130 => 48,  121 => 42,  117 => 41,  113 => 40,  109 => 39,  105 => 38,  97 => 35,  91 => 31,  89 => 30,  81 => 25,  75 => 24,  65 => 21,  59 => 20,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- 
<nav class=\"navbar navbar-area navbar-expand-lg bg-white navbar-light fixed-top navbar-autohide\" style=\"background-color: #0070B2\">
    <div class=\"container\">
        <div >
          
            <a class=\"\" href=\"http://lab.thesoftking.com/eticket\">
              <img style=\"width:80px;display:block;margin:0;\" class=\"img-fluid\" src=\"{{ '/assets/images/logo.jpg'|theme }}\" alt=\"logo PayDunay\">
            </a>
            
        </div>
       
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#Tokenizer\" aria-controls=\"Tokenizer\"
            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"Tokenizer\">

           
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
                    <a class=\"nav-link btn bg-primary text-white p-3\" href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\"><h3><i class=\"fa fa-home\"></i> Login - Register</h3></a>
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
        
    </div>
</nav>-->
<ul style=\"background-color:#1894dd\" class=\"nav justify-content-center p-2\">

        <li class=\"nav-item\">
            <a 
            style=\"color:#fff\" class=\"nav-link\" href=\"#\">
                <i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline\">Gmail</span></a>
        </li>

        <li class=\"nav-item\">
            <a style=\"color:#fff\" class=\"nav-link\" href=\"#\">
                <i class=\"fa fa-whatsapp\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline\">Whatsapp</span></a>
        </li>


        <li class=\"nav-item\">
            <a style=\"color:#fff\" class=\"nav-link\" href=\"#\">
                <i class=\"fa fa-facebook-official\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline\">Facebook</span></a>
        </li>

        <li class=\"nav-item\">
            <a style=\"color:#fff\" class=\"nav-link\" href=\"#\">
                <i class=\"fa fa-linkedin-square\" aria-hidden=\"true\">
                </i>
                <span class=\"d-none d-md-inline\">Linkedin</span></a>
        </li>
    </ul>
    <header class=\"navbar-dark bg-dark p-1\">
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\"
                    aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
    
    
                <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
    
                    
                    <a class=\"navbar-brand\" href=\"#\">
                        <img src=\"{{ 'assets/user/ad_images/logo.png'|theme }}\" width=\"40\" height=\"40\" class=\"d-inline-block align-top\"
                            alt=\"\">
                        &nbsp;
                    </a>
    
                    <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
                        <li
                        class=\"nav-item active\">
                            <a 
                            class=\"nav-link\" href=\"{{ 'about'|page }}\">Comment Ça marche<span class=\"sr-only\">(current)</span></a>
                        </li>
    
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"{{ 'view_event'|page }}\">Trouver un évènement <span class=\"sr-only\">(current)</span></a>
                        </li>
    
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"#\">Contactez nous <span class=\"sr-only\">(current)</span></a>
                        </li>
                        {%if user%}
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
                            {%if user.is_superuser%}
                            <li class=\"nav-item dropdown {% if this.page.id == 'create_event' or this.page.id == 'manage_event' or this.page.id == 'access_event' %}active{% endif %}\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{% if notifs|length%}
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
                            {%endif%}
                        {%endif%}
                    </ul>
                        {%if user%}
                        <button data-request=\"onLogout\" data-request-data=\"redirect: '/'\" style=\"border-radius:50px\" class=\"btn btn-outline-primary my-2 my-sm-0\">
    
                                <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>
                                SIGN-OUT</button> 
                        {%else%}
                        <button style=\"border-radius:50px\" class=\"btn btn-outline-primary my-2 my-sm-0\"  data-toggle=\"modal\" data-target=\"#login-modal\">
    
                        <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>
                        SIGN-IN</button>
                        {%endif%}
                </div>
            </nav>
        </header>
      

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
                                        <div class=\"form-element square login\">
                                            <label>Modifier les informations personnelles renseignées dans le compte PayDunya
                                                <span>**</span>
                                            </label>
                                            <input  type=\"checkbox\" onchange=\"register(event)\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div id=\"paydunya\">
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
    function register(event){
        if(event.target.checked){
        var paydunya=document.getElementById('paydunya')
        var div1 = document.createElement('div')
            div1.setAttribute('class', 'form-element square login')
            div1.setAttribute('id', 'div1')
        var label1 = document.createElement('label')
              label1.setAttribute('for', 'master_key')
              label1.innerHTML=\"Master key\"
        var input1 = document.createElement('input')
              input1.setAttribute('type', 'text')
              input1.setAttribute('id', 'inputtype2')
              input1.setAttribute('class', 'input-field-square')
              input1.setAttribute('placeholder', 'Votre clé principale...')
              input1.setAttribute('name', 'master_key')
             // input1.setAttribute('required')
        div1.appendChild(label1)
        div1.appendChild(input1)
        document.getElementById('paydunya').appendChild(div1)
       var div2 = document.createElement('div')
            div2.setAttribute('class', 'form-element square login')
            div2.setAttribute('id', 'div2')
        var label2 = document.createElement('label')
              label2.setAttribute('for', 'private_key_test')
              label2.innerHTML=\"Token production\"
        var input2 = document.createElement('input')
              input2.setAttribute('type', 'text')
              input2.setAttribute('id', 'private_key_test')
              input2.setAttribute('class', 'input-field-square')
              input2.setAttribute('placeholder', 'Votre clé privée de test...')
              input2.setAttribute('name', 'private_key_test')
        div2.appendChild(label2)
        div2.appendChild(input2)
        document.getElementById('paydunya').appendChild(div2)
        var div3 = document.createElement('div')
            div3.setAttribute('id', 'div3')
            div3.setAttribute('class', 'form-element square login')
        var label3 = document.createElement('label')
              label3.setAttribute('for', 'public_key_test')
              label3.innerHTML=\"Public test key\"
        var input3 = document.createElement('input')
              input3.setAttribute('type', 'text')
              input3.setAttribute('id', 'public_key_test')
              input3.setAttribute('class', 'input-field-square')
              input3.setAttribute('placeholder', 'Votre clé public de test...')
              input3.setAttribute('name', 'public_key_test')
        div3.appendChild(label3)
        div3.appendChild(input3)
        document.getElementById('paydunya').appendChild(div3)
        var div4 = document.createElement('div')
            div4.setAttribute('class', 'form-element square login')
            div4.setAttribute('id', 'div4')
        var label4 = document.createElement('label')
              label4.setAttribute('for', 'token_test')
              label4.innerHTML=\"Token production\"
        var input4 = document.createElement('input')
              input4.setAttribute('type', 'text')
              input4.setAttribute('id', 'token_test')
              input4.setAttribute('class', 'input-field-square')
              input4.setAttribute('placeholder', 'Votre token de test...')
              input4.setAttribute('name', 'token_test')
        div4.appendChild(label4)
        div4.appendChild(input4)
        document.getElementById('paydunya').appendChild(div4)
        var div5 = document.createElement('div')
            div5.setAttribute('class', 'form-element square login')
            div5.setAttribute('id', 'div5')
        var label5 = document.createElement('label')
              label5.setAttribute('id', 'public_key_prod')
              label5.innerHTML=\"Private production key\"
        var input5 = document.createElement('input')
              input5.setAttribute('type', 'text')
              input5.setAttribute('id', 'public_key_prod')
              input5.setAttribute('class', 'input-field-square')
              input5.setAttribute('placeholder', 'Votre clé public de production...')
              input5.setAttribute('name', 'public_key_prod')
        div5.appendChild(label5)
        div5.appendChild(input5)
        document.getElementById('paydunya').appendChild(div5)
        var div6 = document.createElement('div')
            div6.setAttribute('class', 'form-element square login')
            div6.setAttribute('id', 'div6')
        var label6 = document.createElement('label')
              label6.setAttribute('for', 'public_key_prod')
              label6.innerHTML=\"Public production key\"
        var input6 = document.createElement('input')
              input6.setAttribute('type', 'text')
              input6.setAttribute('id', 'public_key_prod')
              input6.setAttribute('class', 'input-field-square')
              input6.setAttribute('placeholder', 'Votre clé public de production...')
              input6.setAttribute('name', 'public_key_prod')
        div6.appendChild(label6)
        div6.appendChild(input6)
        document.getElementById('paydunya').appendChild(div6)
        var div7 = document.createElement('div')
            div7.setAttribute('class', 'form-element square login')
            div7.setAttribute('id', 'div7')
        var label7 = document.createElement('label')
              label7.setAttribute('for', 'token_prod')
              label7.innerHTML=\"Token production\"
        var input7 = document.createElement('input')
              input7.setAttribute('type', 'text')
              input7.setAttribute('id', 'token_prod')
              input7.setAttribute('class', 'input-field-square')
              input7.setAttribute('placeholder', 'Votre token de production...')
              input7.setAttribute('name', 'token_prod')
        div7.appendChild(label7)
        div7.appendChild(input7)
        document.getElementById('paydunya').appendChild(div7)
        var div8 = document.createElement('div')
            div8.setAttribute('class', 'form-element square login')
            div8.setAttribute('id', 'div8')
        var label8 = document.createElement('label')
              label8.setAttribute('for', 'phone')
              label8.innerHTML=\"Telephone\"
        var input8 = document.createElement('input')
              input8.setAttribute('type', 'text')
              input8.setAttribute('id', 'phone')
              input8.setAttribute('class', 'input-field-square')
              input8.setAttribute('placeholder', 'Votre numero de telephone...')
              input8.setAttribute('name', 'phone')
        div8.appendChild(label8)
        div8.appendChild(input8)
        document.getElementById('paydunya').appendChild(div8)
        var div9 = document.createElement('div')
            div9.setAttribute('class', 'form-element square login')
            div9.setAttribute('id', 'div9')
        var label9 = document.createElement('label')
              label9.setAttribute('for', 'redirect')
              label9.innerHTML=\"Redirection\"
        var slect = document.createElement('select')
              slect.setAttribute('id', 'redirect')
              slect.setAttribute('class', 'form-control')
              slect.setAttribute('name', 'redirect')
        var option1 = document.createElement('option')
            option1.innerHTML=\"oui\"
            option1.setAttribute('value','true')
        var option2 = document.createElement('option')
            option2.innerHTML=\"non\"
            option2.setAttribute('value','false')
        slect.appendChild(option1)
        slect.appendChild(option2)
        div9.appendChild(slect)
        document.getElementById('paydunya').appendChild(div9)
        }else{
            document.getElementById('div1').remove()
            document.getElementById('div2').remove()
            document.getElementById('div3').remove()
            document.getElementById('div4').remove()
            document.getElementById('div5').remove()
            document.getElementById('div6').remove()
            document.getElementById('div7').remove()
            document.getElementById('div8').remove()
            document.getElementById('div9').remove()
        }
    }
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
