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

/* C:\wamp64\www\install-master/plugins/event/event/components/eventdetail/default.htm */
class __TwigTemplate_17bbcba066495b8f7ef0933ad9109b4ac20b6a0ff65b6860917a01ec11b3da39 extends \Twig\Template
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
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "<div class=\"my-5\">
        <div class=\"container\">
          <div class=\"\">
            <div class=\"\">
              <h2 style=\"font-size:32px;\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 7), "html", null, true);
            echo "</h2>
            </div>
            <div class=\"row \">
              <div class=\"col-lg-8\">
                <div class=\"img img-fluid\">
                  <img src=\"http://lab.thesoftking.com/eticket/assets/user/img/ticket/1532784219.jpg\" alt=\"\">
                </div>
                <div class=\"mt-5\">
                  <h3>Overview</h3>
                  <p style=\"font-family: geoLight; margin-bottom: 30px; font-size: 18px; line-height: 28px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 16), "html", null, true);
            echo "</span></p>
                </div>
                            <div class=\"img img-fluid\" style=\"margin-bottom: 20px;\">
                                                           <a onclick=\"increaseAdView(25)\" href=\"https://laravel.com/\" target=\"_blank\">
                          <img style=\"width:728px;display:block;margin:0 auto;\" src=\"http://lab.thesoftking.com/eticket/assets/user/ad_images/1529907558.jpg\" alt=\"addvertisement-02\">
                         </a>
                                                  </div>
                
                <div class=\"fb-comments\" data-href=\"http://lab.thesoftking.com/eticket/event/show/boney-m-live-in-dhaka\" data-numposts=\"5\"></div>
    
                            <div class=\"\" style=\"margin-top: 20px;\">
                                </div>
              </div>
              <div class=\"col-lg-4\">
                <div class=\"card\" style=\"font-size: 18px\">
                  <h4 class=\"card-header text-center py-4\"  style=\"font-size: 18px\">Details</h4>
                  <div class=\"card-body\">
                    <div class=\"\">
                      <strong class=\"card-title\" style=\"display:inline-block;\">Expired Date:</strong>
                      <p class=\"card-text\" style=\"display:inline-block;\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "periode", [], "any", false, false, false, 35), "date_cloture", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"\">
                      <strong class=\"card-title\" style=\"display:inline-block;\">Category:</strong>
                      <p class=\"card-text\" style=\"display:inline-block;\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 39), "nom_type", [], "any", false, false, false, 39), "html", null, true);
            echo "</p>
                    </div>
                    <hr>
                    <div class=\"\">
                      <strong class=\"card-title\">Buy Tickets:</strong><br>
                      <span>
                        <span>Par Person</span><br>
                        <span>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant", [], "any", false, false, false, 46), "html", null, true);
            echo " FCFA</span>
                        <select class=\"float-right\" onchange=\"clacTotal('";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant", [], "any", false, false, false, 47), "html", null, true);
            echo "', this.value)\">
                                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["item"], "nombre_ticket", [], "any", false, false, false, 48)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 49
                echo "                                 <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                                               
                                                 
                                              </select>
                      </span>
                    </div>
                    <hr>
                    ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadSubEvent", [], "method", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 58
                echo "                    <div class=\"\">
                            ";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sub", [], "any", false, false, false, 59), "nom", [], "any", false, false, false, 59), "html", null, true);
                echo "
                            <hr>
                      <div class=\"\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                      <strong>Total:</strong>
                      <span class=\"float-right\">
                        
                        <span id=\"totalPrice\"></span>FCFA
                      </span>
                    </div>
                    <br>
                    ";
            // line 70
            if (($context["user"] ?? null)) {
                // line 71
                echo "                    <strong style=\"color:red;\">    <a style=\"text-decoration:underline;\" >Achéter</a></strong>
                   
                  
              
                  ";
            } else {
                // line 76
                echo "                     
                  <strong style=\"color:red;\">* To order you must <a style=\"text-decoration:underline;\" href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login</a></strong>
             
                  ";
            }
            // line 80
            echo "                                     
                                    
                  </div>
                </div><br>
                <div class=\"card\">
                  <h4 class=\"card-header text-center py-4\">Social Share</h4>
                  <div class=\"card-body\">
                    <div class=\"social-icons\">
                      <div class=\"col-md-12\">
                          <ul class=\"social-network social-circle\">
                            <a href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flab.thesoftking.com%2Feticket%2Fevent%2Fshow%2Fboney-m-live-in-dhaka\" class=\"fa fa-facebook\"></a>
                            <a href=\"https://twitter.com/intent/tweet?text=my share text&amp;url=http%3A%2F%2Flab.thesoftking.com%2Feticket%2Fevent%2Fshow%2Fboney-m-live-in-dhaka\" class=\"fa fa-twitter\"></a>
                            <a href=\"https://plus.google.com/share?url=http%3A%2F%2Flab.thesoftking.com%2Feticket%2Fevent%2Fshow%2Fboney-m-live-in-dhaka\" class=\"fa fa-google-plus\"></a>
                            <a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Flab.thesoftking.com%2Feticket%2Fevent%2Fshow%2Fboney-m-live-in-dhaka&amp;title=my share text&amp;summary=dit is de linkedin summary\" class=\"fa fa-linkedin\"></a>
                          </ul>
                              </div>
                    </div>
                  </div>
                </div>
    
                <div class=\"\">
                                <div class=\"img img-fluid\" style=\"margin-top:20px;\">
                                                                 <a onclick=\"increaseAdView(26)\" href=\"https://laravel.com/\" target=\"_blank\">
                            <img style=\"width:350px;display:block;margin:0 auto;\" src=\"http://lab.thesoftking.com/eticket/assets/user/ad_images/1529907569.jpg\" alt=\"addvertisement-02\">
                           </a>
                                                        </div>
                </div>
                <div class=\"\">
                                <div class=\"img img-fluid\" style=\"margin-top:20px;\">
                                                                 <a onclick=\"increaseAdView(28)\" href=\"#\" target=\"_blank\">
                            <img style=\"width:350px;display:block;margin:0 auto;\" src=\"http://lab.thesoftking.com/eticket/assets/user/ad_images/1532510917.jpg\" alt=\"addvertisement-02\">
                           </a>
                                                        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
    
      <!-- Modal -->
      <div class=\"modal fade\" id=\"buyTicketConfModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h5 class=\"modal-title\" id=\"exampleModalLabel\">Confirmation</h5>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body\">
              <h4 class=\"text-center\">Are you sure, you want to buy ticket of this event?</h4>
              <div class=\"text-center\">
                <form class=\"\" action=\"http://lab.thesoftking.com/eticket/genpdf\" method=\"post\" style=\"display:inline-block;\">
                  <input type=\"hidden\" name=\"_token\" value=\"5ifU7niyjh0byubCovg0kvgPryLEh51pgOvWgabI\">
                  <input type=\"hidden\" name=\"eventID\" value=\"18\">
                  <input id=\"totalPriceInput\" type=\"hidden\" name=\"totalPriceInput\" value=\"\">
                  <input id=\"pNoInput\" type=\"hidden\" name=\"pNoInput\" value=\"\">
                  <button type=\"submit\" class=\"btn btn-success\" onclick=\"hideModal()\">Yes</button>
                </form>
                <button type=\"button\" name=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">No</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    
    
        <!-- login and register modal start-->
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
                                    <form id=\"userLoginForm\" onsubmit=\"loginUser(event)\">
                                        <input type=\"hidden\" name=\"_token\" value=\"5ifU7niyjh0byubCovg0kvgPryLEh51pgOvWgabI\">
                                        <div class=\"form-element square login\"><!-- form element login start -->
                                            <label>Enter Username
                                                <span>**</span>
                                            </label>
                                            <input name=\"username\" type=\"text\" placeholder=\"Type your Username....\" class=\"input-field-square\">
                                            <p class=\"eml\"></p>
                                        </div><!-- form element login end -->
                                        <div class=\"form-element square login\"><!-- form element login start -->
                                            <label>Password
                                                <span>**</span>
                                            </label>
                                            <input name=\"password\" type=\"password\" placeholder=\"Type your password....\" class=\"input-field-square\">
                                            <p class=\"eml\"></p>
                                        </div><!-- form element login end -->
                                        <div class=\"\">
                                          <a style=\"text-decoration: underline;\" href=\"http://lab.thesoftking.com/eticket/showEmailForm\">Forgot Password?</a>
                                        </div>
                                        <button type=\"submit\" class=\"submit-form-btn\">login</button>
                                    </form>
                                </div><!-- login form wrapper end -->
                            </div>
                            <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">
    
                                <div class=\"singup-form-wrapper\">
                                                                    <form id=\"registerForm\" onsubmit=\"registerUser(event)\">
                                        <input type=\"hidden\" name=\"_token\" value=\"5ifU7niyjh0byubCovg0kvgPryLEh51pgOvWgabI\">
                                        <div class=\"form-element square login\">
                                            <label>Username
                                                <span>**</span>
                                            </label>
                                            <input name=\"username\" type=\"text\" placeholder=\"Type your username....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div class=\"form-element square login\">
                                            <label>First Name
                                                <span>**</span>
                                            </label>
                                            <input name=\"firstname\" type=\"text\" placeholder=\"Type your name....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div class=\"form-element square login\">
                                            <label>Last Name
                                                <span>**</span>
                                            </label>
                                            <input name=\"lastname\" type=\"text\" placeholder=\"Type your name....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div class=\"form-element square login\">
                                            <label>Enter Email
                                                <span>**</span>
                                            </label>
                                            <input name=\"email\" type=\"email\" placeholder=\"Type your email....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div class=\"form-element square login\">
                                            <label>Enter Phone Number
                                                <span>**</span>
                                            </label>
                                            <input name=\"phone\" type=\"text\" placeholder=\"Type your phone (use phone code of your country)....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div class=\"form-element square login\">
                                            <label>Password
                                                <span>**</span>
                                            </label>
                                            <input name=\"password\" type=\"password\" placeholder=\"Type your password....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div class=\"form-element square login\">
                                            <label>Confirm Password
                                                <span>**</span>
                                            </label>
                                            <input name=\"password_confirmation\" type=\"password\" placeholder=\"Type your password again....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <input type=\"submit\" class=\"submit-form-btn\" value=\"REGISTER\">
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
    
    
    
    
        <!-- preloader area start -->
        <div class=\"preloader\" id=\"preloader\">
            <div class=\"loader loader-1\">
                <div class=\"loader-outter\"></div>
                <div class=\"loader-inner\"></div>
            </div>
        </div>
        <!-- preloader area end -->
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
        // line 285
        if ( !($context["user"] ?? null)) {
            // line 286
            echo "    
                                        <div class=\"row\">
                                    
                                            <div class=\"col-md-6\">
                                                <h3 class=\"";
            // line 290
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 290), "id", [], "any", false, false, false, 290) == "register")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\">Créer un compte</a></h3>
                                                ";
            // line 291
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 292
            echo "                                            </div>
                                    
                                        </div>
                                    
                                    ";
        } else {
            // line 297
            echo "                                    
                                    ";
        }
        // line 299
        echo "                                </div><!-- login form wrapper end -->
                            </div>
                            <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">
    
                                <div class=\"singup-form-wrapper\">
                                    ";
        // line 304
        if ( !($context["user"] ?? null)) {
            // line 305
            echo "                                    
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                ";
            // line 308
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 309
            echo "                                            </div>
                                    
                                        </div>
                                    
                                    ";
        } else {
            // line 314
            echo "                                    
                                    ";
        }
        // line 316
        echo "                                 </div>
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
        return "C:\\wamp64\\www\\install-master/plugins/event/event/components/eventdetail/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 316,  439 => 314,  432 => 309,  428 => 308,  423 => 305,  421 => 304,  414 => 299,  410 => 297,  403 => 292,  399 => 291,  391 => 290,  385 => 286,  383 => 285,  217 => 121,  171 => 80,  165 => 76,  158 => 71,  156 => 70,  147 => 63,  137 => 59,  134 => 58,  130 => 57,  122 => 51,  111 => 49,  107 => 48,  103 => 47,  99 => 46,  89 => 39,  82 => 35,  60 => 16,  48 => 7,  42 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% for item in __SELF__.loadEvents() %}
<div class=\"my-5\">
        <div class=\"container\">
          <div class=\"\">
            <div class=\"\">
              <h2 style=\"font-size:32px;\">{{ item.nom }}</h2>
            </div>
            <div class=\"row \">
              <div class=\"col-lg-8\">
                <div class=\"img img-fluid\">
                  <img src=\"http://lab.thesoftking.com/eticket/assets/user/img/ticket/1532784219.jpg\" alt=\"\">
                </div>
                <div class=\"mt-5\">
                  <h3>Overview</h3>
                  <p style=\"font-family: geoLight; margin-bottom: 30px; font-size: 18px; line-height: 28px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">{{ item.description }}</span></p>
                </div>
                            <div class=\"img img-fluid\" style=\"margin-bottom: 20px;\">
                                                           <a onclick=\"increaseAdView(25)\" href=\"https://laravel.com/\" target=\"_blank\">
                          <img style=\"width:728px;display:block;margin:0 auto;\" src=\"http://lab.thesoftking.com/eticket/assets/user/ad_images/1529907558.jpg\" alt=\"addvertisement-02\">
                         </a>
                                                  </div>
                
                <div class=\"fb-comments\" data-href=\"http://lab.thesoftking.com/eticket/event/show/boney-m-live-in-dhaka\" data-numposts=\"5\"></div>
    
                            <div class=\"\" style=\"margin-top: 20px;\">
                                </div>
              </div>
              <div class=\"col-lg-4\">
                <div class=\"card\" style=\"font-size: 18px\">
                  <h4 class=\"card-header text-center py-4\"  style=\"font-size: 18px\">Details</h4>
                  <div class=\"card-body\">
                    <div class=\"\">
                      <strong class=\"card-title\" style=\"display:inline-block;\">Expired Date:</strong>
                      <p class=\"card-text\" style=\"display:inline-block;\">{{ item.periode.date_cloture }}</p>
                    </div>
                    <div class=\"\">
                      <strong class=\"card-title\" style=\"display:inline-block;\">Category:</strong>
                      <p class=\"card-text\" style=\"display:inline-block;\">{{ item.type.nom_type }}</p>
                    </div>
                    <hr>
                    <div class=\"\">
                      <strong class=\"card-title\">Buy Tickets:</strong><br>
                      <span>
                        <span>Par Person</span><br>
                        <span>{{ item.montant }} FCFA</span>
                        <select class=\"float-right\" onchange=\"clacTotal('{{ item.montant }}', this.value)\">
                                {% for i in 1..item.nombre_ticket %}
                                 <option value=\"{{ i }}\"> {{ i }}</option>
                               {% endfor %}
                                               
                                                 
                                              </select>
                      </span>
                    </div>
                    <hr>
                    {% for item in __SELF__.loadSubEvent() %}
                    <div class=\"\">
                            {{ item.sub.nom }}
                            <hr>
                      <div class=\"\">
                    {% endfor %}
                      <strong>Total:</strong>
                      <span class=\"float-right\">
                        
                        <span id=\"totalPrice\"></span>FCFA
                      </span>
                    </div>
                    <br>
                    {% if user %}
                    <strong style=\"color:red;\">    <a style=\"text-decoration:underline;\" >Achéter</a></strong>
                   
                  
              
                  {% else %}
                     
                  <strong style=\"color:red;\">* To order you must <a style=\"text-decoration:underline;\" href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login</a></strong>
             
                  {% endif %}
                                     
                                    
                  </div>
                </div><br>
                <div class=\"card\">
                  <h4 class=\"card-header text-center py-4\">Social Share</h4>
                  <div class=\"card-body\">
                    <div class=\"social-icons\">
                      <div class=\"col-md-12\">
                          <ul class=\"social-network social-circle\">
                            <a href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flab.thesoftking.com%2Feticket%2Fevent%2Fshow%2Fboney-m-live-in-dhaka\" class=\"fa fa-facebook\"></a>
                            <a href=\"https://twitter.com/intent/tweet?text=my share text&amp;url=http%3A%2F%2Flab.thesoftking.com%2Feticket%2Fevent%2Fshow%2Fboney-m-live-in-dhaka\" class=\"fa fa-twitter\"></a>
                            <a href=\"https://plus.google.com/share?url=http%3A%2F%2Flab.thesoftking.com%2Feticket%2Fevent%2Fshow%2Fboney-m-live-in-dhaka\" class=\"fa fa-google-plus\"></a>
                            <a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Flab.thesoftking.com%2Feticket%2Fevent%2Fshow%2Fboney-m-live-in-dhaka&amp;title=my share text&amp;summary=dit is de linkedin summary\" class=\"fa fa-linkedin\"></a>
                          </ul>
                              </div>
                    </div>
                  </div>
                </div>
    
                <div class=\"\">
                                <div class=\"img img-fluid\" style=\"margin-top:20px;\">
                                                                 <a onclick=\"increaseAdView(26)\" href=\"https://laravel.com/\" target=\"_blank\">
                            <img style=\"width:350px;display:block;margin:0 auto;\" src=\"http://lab.thesoftking.com/eticket/assets/user/ad_images/1529907569.jpg\" alt=\"addvertisement-02\">
                           </a>
                                                        </div>
                </div>
                <div class=\"\">
                                <div class=\"img img-fluid\" style=\"margin-top:20px;\">
                                                                 <a onclick=\"increaseAdView(28)\" href=\"#\" target=\"_blank\">
                            <img style=\"width:350px;display:block;margin:0 auto;\" src=\"http://lab.thesoftking.com/eticket/assets/user/ad_images/1532510917.jpg\" alt=\"addvertisement-02\">
                           </a>
                                                        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
 {% endfor %}

    
      <!-- Modal -->
      <div class=\"modal fade\" id=\"buyTicketConfModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h5 class=\"modal-title\" id=\"exampleModalLabel\">Confirmation</h5>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body\">
              <h4 class=\"text-center\">Are you sure, you want to buy ticket of this event?</h4>
              <div class=\"text-center\">
                <form class=\"\" action=\"http://lab.thesoftking.com/eticket/genpdf\" method=\"post\" style=\"display:inline-block;\">
                  <input type=\"hidden\" name=\"_token\" value=\"5ifU7niyjh0byubCovg0kvgPryLEh51pgOvWgabI\">
                  <input type=\"hidden\" name=\"eventID\" value=\"18\">
                  <input id=\"totalPriceInput\" type=\"hidden\" name=\"totalPriceInput\" value=\"\">
                  <input id=\"pNoInput\" type=\"hidden\" name=\"pNoInput\" value=\"\">
                  <button type=\"submit\" class=\"btn btn-success\" onclick=\"hideModal()\">Yes</button>
                </form>
                <button type=\"button\" name=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">No</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    
    
        <!-- login and register modal start-->
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
                                    <form id=\"userLoginForm\" onsubmit=\"loginUser(event)\">
                                        <input type=\"hidden\" name=\"_token\" value=\"5ifU7niyjh0byubCovg0kvgPryLEh51pgOvWgabI\">
                                        <div class=\"form-element square login\"><!-- form element login start -->
                                            <label>Enter Username
                                                <span>**</span>
                                            </label>
                                            <input name=\"username\" type=\"text\" placeholder=\"Type your Username....\" class=\"input-field-square\">
                                            <p class=\"eml\"></p>
                                        </div><!-- form element login end -->
                                        <div class=\"form-element square login\"><!-- form element login start -->
                                            <label>Password
                                                <span>**</span>
                                            </label>
                                            <input name=\"password\" type=\"password\" placeholder=\"Type your password....\" class=\"input-field-square\">
                                            <p class=\"eml\"></p>
                                        </div><!-- form element login end -->
                                        <div class=\"\">
                                          <a style=\"text-decoration: underline;\" href=\"http://lab.thesoftking.com/eticket/showEmailForm\">Forgot Password?</a>
                                        </div>
                                        <button type=\"submit\" class=\"submit-form-btn\">login</button>
                                    </form>
                                </div><!-- login form wrapper end -->
                            </div>
                            <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">
    
                                <div class=\"singup-form-wrapper\">
                                                                    <form id=\"registerForm\" onsubmit=\"registerUser(event)\">
                                        <input type=\"hidden\" name=\"_token\" value=\"5ifU7niyjh0byubCovg0kvgPryLEh51pgOvWgabI\">
                                        <div class=\"form-element square login\">
                                            <label>Username
                                                <span>**</span>
                                            </label>
                                            <input name=\"username\" type=\"text\" placeholder=\"Type your username....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div class=\"form-element square login\">
                                            <label>First Name
                                                <span>**</span>
                                            </label>
                                            <input name=\"firstname\" type=\"text\" placeholder=\"Type your name....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div class=\"form-element square login\">
                                            <label>Last Name
                                                <span>**</span>
                                            </label>
                                            <input name=\"lastname\" type=\"text\" placeholder=\"Type your name....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div class=\"form-element square login\">
                                            <label>Enter Email
                                                <span>**</span>
                                            </label>
                                            <input name=\"email\" type=\"email\" placeholder=\"Type your email....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div class=\"form-element square login\">
                                            <label>Enter Phone Number
                                                <span>**</span>
                                            </label>
                                            <input name=\"phone\" type=\"text\" placeholder=\"Type your phone (use phone code of your country)....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div class=\"form-element square login\">
                                            <label>Password
                                                <span>**</span>
                                            </label>
                                            <input name=\"password\" type=\"password\" placeholder=\"Type your password....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <div class=\"form-element square login\">
                                            <label>Confirm Password
                                                <span>**</span>
                                            </label>
                                            <input name=\"password_confirmation\" type=\"password\" placeholder=\"Type your password again....\" class=\"input-field-square\">
                                            <p class=\"emr\"></p>
                                        </div>
                                        <input type=\"submit\" class=\"submit-form-btn\" value=\"REGISTER\">
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
    
    
    
    
        <!-- preloader area start -->
        <div class=\"preloader\" id=\"preloader\">
            <div class=\"loader loader-1\">
                <div class=\"loader-outter\"></div>
                <div class=\"loader-inner\"></div>
            </div>
        </div>
        <!-- preloader area end -->
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
    </div>", "C:\\wamp64\\www\\install-master/plugins/event/event/components/eventdetail/default.htm", "");
    }
}
