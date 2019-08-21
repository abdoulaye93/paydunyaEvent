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

/* C:\wamp64\www\install-master1/plugins/event/event/components/manaeventview/default.htm */
class __TwigTemplate_57e8281bc630038b33c5f761158de1bc87d429a0b28a2ab6465c5d7f636b468b extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "<div class=\"my-5\" style=\"padding-top: 100px;\">
        <div class=\"container\">
          <div class=\"\">
            <div class=\"\">
              <h2 style=\"font-size:32px;\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 6), "html", null, true);
            echo "</h2>
            </div>
            <div class=\"row my-5\">
              <div class=\"col-lg-8\">
                <div class=\"\">
                  <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 11), "html", null, true);
            echo "\" alt=\"\">
                </div>
                <div class=\"mt-5\">
                  <h3>Description</h3>
                  ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 15), "html", null, true);
            echo "
                </div>
                            <div class=\"\" style=\"margin-bottom: 20px;\">
                                                           <a onclick=\"increaseAdView(25)\" href=\"https://laravel.com/\" target=\"_blank\">
                          <img style=\"width:728px;display:block;margin:0 auto;\" src=\"http://lab.thesoftking.com/eticket/assets/user/ad_images/1529907558.jpg\" alt=\"addvertisement-02\">
                         </a>
                                                  </div>
                
                <div class=\"fb-comments\" data-href=\"http://lab.thesoftking.com/eticket/event/show/papa\" data-numposts=\"5\"></div>
    
                            <div class=\"\" style=\"margin-top: 20px;\">
                                </div>
              </div>
              <div class=\"col-lg-4\">
                <div class=\"card\">
                  <h4 class=\"card-header text-center py-4\">Details</h4>
                  <div class=\"card-body\">
                    <div class=\"\">
                      <strong class=\"card-title\" style=\"display:inline-block;\">Expired Date:</strong>
                      <p class=\"card-text\" style=\"display:inline-block;\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "periode", [], "any", false, false, false, 34), "date_cloture", [], "any", false, false, false, 34), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"\">
                      <strong class=\"card-title\" style=\"display:inline-block;\">Category:</strong>
                      <p class=\"card-text\" style=\"display:inline-block;\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 38), "nom_type", [], "any", false, false, false, 38), "html", null, true);
            echo "</p>
                    </div>
                    <hr>
                    <div class=\"\">
                      <strong class=\"card-title\">Buy Tickets:</strong><br>
                      <span>
                        <span>Par Person</span><br>
                        <span>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant", [], "any", false, false, false, 45), "html", null, true);
            echo " FCFA</span>
                       
                      </span>
                    </div>
                    <hr>
                   
                    <br>
                                                  
                    
                  </div>
                </div><br>
                <div class=\"card\">
                  <h4 class=\"card-header text-center py-4\">Social Share</h4>
                  <div class=\"card-body\">
                    <div class=\"social-icons\">
                      <div class=\"col-md-12\">
                          <ul class=\"social-network social-circle\">
                            <a href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flab.thesoftking.com%2Feticket%2Fevent%2Fshow%2Fpapa\" class=\"fa fa-facebook\"></a>
                            <a href=\"https://twitter.com/intent/tweet?text=my share text&amp;url=http%3A%2F%2Flab.thesoftking.com%2Feticket%2Fevent%2Fshow%2Fpapa\" class=\"fa fa-twitter\"></a>
                            <a href=\"https://plus.google.com/share?url=http%3A%2F%2Flab.thesoftking.com%2Feticket%2Fevent%2Fshow%2Fpapa\" class=\"fa fa-google-plus\"></a>
                            <a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Flab.thesoftking.com%2Feticket%2Fevent%2Fshow%2Fpapa&amp;title=my share text&amp;summary=dit is de linkedin summary\" class=\"fa fa-linkedin\"></a>
                          </ul>
                              </div>
                    </div>
                  </div>
                </div>
    
                <div class=\"\">
                                <div class=\"\" style=\"margin-top:20px;\">
                                                                 <a onclick=\"increaseAdView(26)\" href=\"https://laravel.com/\" target=\"_blank\">
                            <img style=\"width:728px;display:block;margin:0 auto;\" src=\"http://lab.thesoftking.com/eticket/assets/user/ad_images/1529907569.jpg\" alt=\"addvertisement-02\">
                           </a>
                                                        </div>
                </div>
                <div class=\"\">
                                <div class=\"\" style=\"margin-top:20px;\">
                                                                 <a onclick=\"increaseAdView(28)\" href=\"#\" target=\"_blank\">
                            <img style=\"width:728px;display:block;margin:0 auto;\" src=\"http://lab.thesoftking.com/eticket/assets/user/ad_images/1532510917.jpg\" alt=\"addvertisement-02\">
                           </a>
                                                        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    
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
                  <input type=\"hidden\" name=\"_token\" value=\"6QRGzK0MHxAQ3zd2h5nfzUkoL1b6kPBzfBlGsZo4\">
                  <input type=\"hidden\" name=\"eventID\" value=\"118\">
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
            // line 135
            if ( !($context["user"] ?? null)) {
                // line 136
                echo "    
                                        <div class=\"row\">
                                    
                                            <div class=\"col-md-6\">
                                                <h3 class=\"";
                // line 140
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 140), "id", [], "any", false, false, false, 140) == "register")) {
                    echo "active";
                }
                echo "\"><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
                echo "\">Créer un compte</a></h3>
                                                ";
                // line 141
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 142
                echo "                                            </div>
                                    
                                        </div>
                                    
                                    ";
            } else {
                // line 147
                echo "                                    
                                    ";
            }
            // line 149
            echo "                                </div><!-- login form wrapper end -->
                            </div>
                            <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">
    
                                <div class=\"singup-form-wrapper\">
                                    ";
            // line 154
            if ( !($context["user"] ?? null)) {
                // line 155
                echo "                                    
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                ";
                // line 158
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 159
                echo "                                            </div>
                                    
                                        </div>
                                    
                                    ";
            } else {
                // line 164
                echo "                                    
                                    ";
            }
            // line 166
            echo "                                 </div>
                            </div>
                        </div><!-- /.tab conent-->
                    </div><!-- modal content end -->
                </div>
            </div><!-- /#loginmodal -->
        </div><!-- login modal warapper satart end-->
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/plugins/event/event/components/manaeventview/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 166,  248 => 164,  241 => 159,  237 => 158,  232 => 155,  230 => 154,  223 => 149,  219 => 147,  212 => 142,  208 => 141,  200 => 140,  194 => 136,  192 => 135,  99 => 45,  89 => 38,  82 => 34,  60 => 15,  53 => 11,  45 => 6,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in __SELF__.loadEvents() %}
<div class=\"my-5\" style=\"padding-top: 100px;\">
        <div class=\"container\">
          <div class=\"\">
            <div class=\"\">
              <h2 style=\"font-size:32px;\">{{item.nom}}</h2>
            </div>
            <div class=\"row my-5\">
              <div class=\"col-lg-8\">
                <div class=\"\">
                  <img src=\"{{item.image}}\" alt=\"\">
                </div>
                <div class=\"mt-5\">
                  <h3>Description</h3>
                  {{item.description}}
                </div>
                            <div class=\"\" style=\"margin-bottom: 20px;\">
                                                           <a onclick=\"increaseAdView(25)\" href=\"https://laravel.com/\" target=\"_blank\">
                          <img style=\"width:728px;display:block;margin:0 auto;\" src=\"http://lab.thesoftking.com/eticket/assets/user/ad_images/1529907558.jpg\" alt=\"addvertisement-02\">
                         </a>
                                                  </div>
                
                <div class=\"fb-comments\" data-href=\"http://lab.thesoftking.com/eticket/event/show/papa\" data-numposts=\"5\"></div>
    
                            <div class=\"\" style=\"margin-top: 20px;\">
                                </div>
              </div>
              <div class=\"col-lg-4\">
                <div class=\"card\">
                  <h4 class=\"card-header text-center py-4\">Details</h4>
                  <div class=\"card-body\">
                    <div class=\"\">
                      <strong class=\"card-title\" style=\"display:inline-block;\">Expired Date:</strong>
                      <p class=\"card-text\" style=\"display:inline-block;\">{{item.periode.date_cloture}}</p>
                    </div>
                    <div class=\"\">
                      <strong class=\"card-title\" style=\"display:inline-block;\">Category:</strong>
                      <p class=\"card-text\" style=\"display:inline-block;\">{{item.type.nom_type}}</p>
                    </div>
                    <hr>
                    <div class=\"\">
                      <strong class=\"card-title\">Buy Tickets:</strong><br>
                      <span>
                        <span>Par Person</span><br>
                        <span>{{item.montant}} FCFA</span>
                       
                      </span>
                    </div>
                    <hr>
                   
                    <br>
                                                  
                    
                  </div>
                </div><br>
                <div class=\"card\">
                  <h4 class=\"card-header text-center py-4\">Social Share</h4>
                  <div class=\"card-body\">
                    <div class=\"social-icons\">
                      <div class=\"col-md-12\">
                          <ul class=\"social-network social-circle\">
                            <a href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flab.thesoftking.com%2Feticket%2Fevent%2Fshow%2Fpapa\" class=\"fa fa-facebook\"></a>
                            <a href=\"https://twitter.com/intent/tweet?text=my share text&amp;url=http%3A%2F%2Flab.thesoftking.com%2Feticket%2Fevent%2Fshow%2Fpapa\" class=\"fa fa-twitter\"></a>
                            <a href=\"https://plus.google.com/share?url=http%3A%2F%2Flab.thesoftking.com%2Feticket%2Fevent%2Fshow%2Fpapa\" class=\"fa fa-google-plus\"></a>
                            <a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Flab.thesoftking.com%2Feticket%2Fevent%2Fshow%2Fpapa&amp;title=my share text&amp;summary=dit is de linkedin summary\" class=\"fa fa-linkedin\"></a>
                          </ul>
                              </div>
                    </div>
                  </div>
                </div>
    
                <div class=\"\">
                                <div class=\"\" style=\"margin-top:20px;\">
                                                                 <a onclick=\"increaseAdView(26)\" href=\"https://laravel.com/\" target=\"_blank\">
                            <img style=\"width:728px;display:block;margin:0 auto;\" src=\"http://lab.thesoftking.com/eticket/assets/user/ad_images/1529907569.jpg\" alt=\"addvertisement-02\">
                           </a>
                                                        </div>
                </div>
                <div class=\"\">
                                <div class=\"\" style=\"margin-top:20px;\">
                                                                 <a onclick=\"increaseAdView(28)\" href=\"#\" target=\"_blank\">
                            <img style=\"width:728px;display:block;margin:0 auto;\" src=\"http://lab.thesoftking.com/eticket/assets/user/ad_images/1532510917.jpg\" alt=\"addvertisement-02\">
                           </a>
                                                        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    
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
                  <input type=\"hidden\" name=\"_token\" value=\"6QRGzK0MHxAQ3zd2h5nfzUkoL1b6kPBzfBlGsZo4\">
                  <input type=\"hidden\" name=\"eventID\" value=\"118\">
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
    {%endfor%}", "C:\\wamp64\\www\\install-master1/plugins/event/event/components/manaeventview/default.htm", "");
    }
}
