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

/* C:\wamp64\www\install-master1/plugins/event/event/components/eventdetail/default.htm */
class __TwigTemplate_e204366d8674e0dfcaa1d6e209d9cd6a699168b06ea6947169663dbe502a31b5 extends \Twig\Template
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
            echo "<div class=\"my-5\">
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
                  <img src=\"http://lab.thesoftking.com/eticket/assets/user/img/ticket/1563294083.jpg\" alt=\"\">
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
                      <strong class=\"card-title\">Tickets:</strong><br>
                      <table>
                          ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadTypeticket", [], "method", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 45
                echo "                            <tr>
                              <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom_type", [], "any", false, false, false, 46), "html", null, true);
                echo " - Prix: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant", [], "any", false, false, false, 46), "html", null, true);
                echo "FCFA</td>
                              <td> &nbsp;&nbsp; &nbsp;</td>
                              <td><input type=\"checkbox\" value=\"";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant", [], "any", false, false, false, 48), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom_type", [], "any", false, false, false, 48), "html", null, true);
                echo "\" class=\"form-control ticket\" onchange=\"testtype(event)\"/></td>
                            </tr>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                          <script>
                           
                          </script>
                        </table>
                      <select class=\"float-right\" onchange=\"clacTotal(this.value)\" id=\"nb\">
                          ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["item"], "nombre_ticket", [], "any", false, false, false, 56)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 57
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "  
                        </select>  
                    </div>
                    <hr>
                    ";
            // line 62
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadSubEvent", [], "method", false, false, false, 62)) > 0)) {
                // line 63
                echo "                    <div class=\"\">
                      <strong class=\"card-title\">Sous évènement(s):</strong><br>
                      <table>
                        ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadSubEvent", [], "method", false, false, false, 66));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 67
                    echo "                          <tr>
                            <td>";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sub", [], "any", false, false, false, 68), "nom", [], "any", false, false, false, 68), "html", null, true);
                    echo " - Prix: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sub", [], "any", false, false, false, 68), "montant", [], "any", false, false, false, 68), "html", null, true);
                    echo "FCFA</td>
                            <td> &nbsp;&nbsp; &nbsp;</td>
                            <td><input type=\"checkbox\" value=\"";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sub", [], "any", false, false, false, 70), "montant", [], "any", false, false, false, 70), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sub", [], "any", false, false, false, 70), "nom", [], "any", false, false, false, 70), "html", null, true);
                    echo "\" class=\"form-control sub\" onchange=\"test(event)\"/></td>
                          </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                        <script>
                         function test(event)
                          {
                            var nb = parseInt(document.getElementById('nb').value)
                            if(event.target.checked)
                              document.getElementById('totalPrice').innerHTML = parseInt(event.target.value)*nb + parseInt(document.getElementById('totalPrice').innerHTML)
                            else
                              document.getElementById('totalPrice').innerHTML = parseInt(document.getElementById('totalPrice').innerHTML) - parseInt(event.target.value)*nb
                          }
                          function testtype(event)
                          {
                            var nb = parseInt(document.getElementById('nb').value)
                            if(event.target.checked)
                              document.getElementById('totalPrice').innerHTML = parseInt(event.target.value)*nb + parseInt(document.getElementById('totalPrice').innerHTML)
                            else
                              document.getElementById('totalPrice').innerHTML = parseInt(document.getElementById('totalPrice').innerHTML) - parseInt(event.target.value)*nb
                          }
                          //parseInt(document.getElementById('montantItem').value) * parseInt(nb.options[nb.selectedIndex].value)
                        </script>
                      </table>
                    </div>
                  ";
            }
            // line 95
            echo "                    <div class=\"\">
                      <strong>Total:</strong>
                      <span class=\"float-right\">
                        
                        <span id=\"totalPrice\"></span>
                        FCFA
                      </span>
                    </div>
                    <br>
                                                  
                    <div>
                      <a href=\"";
            // line 106
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("calendar");
            echo "\">jjjj</a>

                      <div class=\"pull-right\">
                        <form data-request=\"onAchat\" id=\"buyForm\">
                          <input type=\"hidden\" name=\"total\" id=\"total\" value=\"\">
                          ";
            // line 111
            if (twig_get_attribute($this->env, $this->source, $context["item"], "promo", [], "any", false, false, false, 111)) {
                // line 112
                echo "                            <input type=\"hidden\" name=\"promo\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant_promo", [], "any", false, false, false, 112), "html", null, true);
                echo "\">
                          ";
            }
            // line 113
            echo "  
                          <input type=\"submit\" class=\"btn btn-primary\" value=\"Acheter\"/>
                        </form>
                      </div>
                    </div>
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
            // line 199
            if ( !($context["user"] ?? null)) {
                // line 200
                echo "    
                                        <div class=\"row\">
                                    
                                            <div class=\"col-md-6\">
                                                <h3 class=\"";
                // line 204
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 204), "id", [], "any", false, false, false, 204) == "register")) {
                    echo "active";
                }
                echo "\"><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
                echo "\">Créer un compte</a></h3>
                                                ";
                // line 205
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 206
                echo "                                            </div>
                                    
                                        </div>
                                    
                                    ";
            } else {
                // line 211
                echo "                                    
                                    ";
            }
            // line 213
            echo "                                </div><!-- login form wrapper end -->
                            </div>
                            <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">
    
                                <div class=\"singup-form-wrapper\">
                                    ";
            // line 218
            if ( !($context["user"] ?? null)) {
                // line 219
                echo "                                    
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                ";
                // line 222
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 223
                echo "                                            </div>
                                    
                                        </div>
                                    
                                    ";
            } else {
                // line 228
                echo "                                    
                                    ";
            }
            // line 230
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
        // line 239
        echo "
    <script>
        
        document.getElementById('buyForm').addEventListener('submit', function(){
          document.getElementById('total').value = document.getElementById('totalPrice').innerHTML

          var tickets = document.getElementsByClassName('ticket')
          var subEvents = document.getElementsByClassName('sub')
          var nbTicket = document.getElementById('nb').value

          var element = document.createElement('input')
              element.setAttribute('type', 'hidden')
              element.setAttribute('name', 'nbTicket')
              element.setAttribute('value', nbTicket)
              document.getElementById('buyForm').appendChild(element)

          for(var i = 0; i < tickets.length; i++)
          {
            if(tickets[i].checked)
            {
              var element = document.createElement('input')
              element.setAttribute('type', 'hidden')
              element.setAttribute('name', tickets[i].name)
              element.setAttribute('value', tickets[i].value)
              document.getElementById('buyForm').appendChild(element)
            }
          }

          for(var i = 0; i < subEvents.length; i++)
          {
            if(subEvents[i].checked)
            {
              var element = document.createElement('input')
              element.setAttribute('type', 'hidden')
              element.setAttribute('name', subEvents[i].name)
              element.setAttribute('value', subEvents[i].value)
              document.getElementById('buyForm').appendChild(element)
            }
          }

      })
    </script>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/plugins/event/event/components/eventdetail/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 239,  381 => 230,  377 => 228,  370 => 223,  366 => 222,  361 => 219,  359 => 218,  352 => 213,  348 => 211,  341 => 206,  337 => 205,  329 => 204,  323 => 200,  321 => 199,  233 => 113,  227 => 112,  225 => 111,  217 => 106,  204 => 95,  180 => 73,  169 => 70,  162 => 68,  159 => 67,  155 => 66,  150 => 63,  148 => 62,  142 => 58,  131 => 57,  127 => 56,  120 => 51,  109 => 48,  102 => 46,  99 => 45,  95 => 44,  86 => 38,  79 => 34,  57 => 15,  45 => 6,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in __SELF__.loadEvents() %}
<div class=\"my-5\">
        <div class=\"container\">
          <div class=\"\">
            <div class=\"\">
              <h2 style=\"font-size:32px;\">{{item.nom}}</h2>
            </div>
            <div class=\"row my-5\">
              <div class=\"col-lg-8\">
                <div class=\"\">
                  <img src=\"http://lab.thesoftking.com/eticket/assets/user/img/ticket/1563294083.jpg\" alt=\"\">
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
                      <strong class=\"card-title\">Tickets:</strong><br>
                      <table>
                          {% for item in __SELF__.loadTypeticket() %}
                            <tr>
                              <td>{{ item.nom_type }} - Prix: {{ item.montant }}FCFA</td>
                              <td> &nbsp;&nbsp; &nbsp;</td>
                              <td><input type=\"checkbox\" value=\"{{ item.montant }}\" name=\"{{ item.nom_type }}\" class=\"form-control ticket\" onchange=\"testtype(event)\"/></td>
                            </tr>
                          {% endfor %}
                          <script>
                           
                          </script>
                        </table>
                      <select class=\"float-right\" onchange=\"clacTotal(this.value)\" id=\"nb\">
                          {% for i in 1..item.nombre_ticket %}
                            <option value=\"{{ i }}\"> {{ i }}</option>
                         {% endfor %}  
                        </select>  
                    </div>
                    <hr>
                    {% if __SELF__.loadSubEvent()|length > 0 %}
                    <div class=\"\">
                      <strong class=\"card-title\">Sous évènement(s):</strong><br>
                      <table>
                        {% for item in __SELF__.loadSubEvent() %}
                          <tr>
                            <td>{{ item.sub.nom }} - Prix: {{ item.sub.montant }}FCFA</td>
                            <td> &nbsp;&nbsp; &nbsp;</td>
                            <td><input type=\"checkbox\" value=\"{{ item.sub.montant }}\" name=\"{{ item.sub.nom }}\" class=\"form-control sub\" onchange=\"test(event)\"/></td>
                          </tr>
                        {% endfor %}
                        <script>
                         function test(event)
                          {
                            var nb = parseInt(document.getElementById('nb').value)
                            if(event.target.checked)
                              document.getElementById('totalPrice').innerHTML = parseInt(event.target.value)*nb + parseInt(document.getElementById('totalPrice').innerHTML)
                            else
                              document.getElementById('totalPrice').innerHTML = parseInt(document.getElementById('totalPrice').innerHTML) - parseInt(event.target.value)*nb
                          }
                          function testtype(event)
                          {
                            var nb = parseInt(document.getElementById('nb').value)
                            if(event.target.checked)
                              document.getElementById('totalPrice').innerHTML = parseInt(event.target.value)*nb + parseInt(document.getElementById('totalPrice').innerHTML)
                            else
                              document.getElementById('totalPrice').innerHTML = parseInt(document.getElementById('totalPrice').innerHTML) - parseInt(event.target.value)*nb
                          }
                          //parseInt(document.getElementById('montantItem').value) * parseInt(nb.options[nb.selectedIndex].value)
                        </script>
                      </table>
                    </div>
                  {% endif %}
                    <div class=\"\">
                      <strong>Total:</strong>
                      <span class=\"float-right\">
                        
                        <span id=\"totalPrice\"></span>
                        FCFA
                      </span>
                    </div>
                    <br>
                                                  
                    <div>
                      <a href=\"{{ 'calendar'|page }}\">jjjj</a>

                      <div class=\"pull-right\">
                        <form data-request=\"onAchat\" id=\"buyForm\">
                          <input type=\"hidden\" name=\"total\" id=\"total\" value=\"\">
                          {% if item.promo %}
                            <input type=\"hidden\" name=\"promo\" value=\"{{ item.montant_promo }}\">
                          {% endif %}  
                          <input type=\"submit\" class=\"btn btn-primary\" value=\"Acheter\"/>
                        </form>
                      </div>
                    </div>
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
    {%endfor%}

    <script>
        
        document.getElementById('buyForm').addEventListener('submit', function(){
          document.getElementById('total').value = document.getElementById('totalPrice').innerHTML

          var tickets = document.getElementsByClassName('ticket')
          var subEvents = document.getElementsByClassName('sub')
          var nbTicket = document.getElementById('nb').value

          var element = document.createElement('input')
              element.setAttribute('type', 'hidden')
              element.setAttribute('name', 'nbTicket')
              element.setAttribute('value', nbTicket)
              document.getElementById('buyForm').appendChild(element)

          for(var i = 0; i < tickets.length; i++)
          {
            if(tickets[i].checked)
            {
              var element = document.createElement('input')
              element.setAttribute('type', 'hidden')
              element.setAttribute('name', tickets[i].name)
              element.setAttribute('value', tickets[i].value)
              document.getElementById('buyForm').appendChild(element)
            }
          }

          for(var i = 0; i < subEvents.length; i++)
          {
            if(subEvents[i].checked)
            {
              var element = document.createElement('input')
              element.setAttribute('type', 'hidden')
              element.setAttribute('name', subEvents[i].name)
              element.setAttribute('value', subEvents[i].value)
              document.getElementById('buyForm').appendChild(element)
            }
          }

      })
    </script>", "C:\\wamp64\\www\\install-master1/plugins/event/event/components/eventdetail/default.htm", "");
    }
}
