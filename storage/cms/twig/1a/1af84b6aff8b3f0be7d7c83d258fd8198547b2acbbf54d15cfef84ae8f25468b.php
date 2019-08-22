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
            echo "<div class=\"my-5\" style=\"padding-top: 100px;\">
        <div class=\"container\">
            <form data-request=\"onAchat\" id=\"buyForm\">
          <div class=\"\">
            <div class=\"\">
              <h2 style=\"font-size:32px;\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 7), "html", null, true);
            echo "</h2>
              <input type=\"hidden\" value=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 8), "html", null, true);
            echo "\" id=\"nomevent\" name=\"nomevent\">
            </div>
            <div class=\"row my-5\">
              <div class=\"col-lg-8\">
                <div class=\"\">
                  <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 13), "html", null, true);
            echo "\" alt=\"\">
                </div>
                <div class=\"mt-5\">
                  <h3>Description</h3>
                  ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 17), "html", null, true);
            echo "
                  <input type=\"hidden\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 18), "html", null, true);
            echo "\" id=\"description\" name=\"description\">
                  <input type=\"hidden\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "lieu", [], "any", false, false, false, 19), "html", null, true);
            echo "\" id=\"lieu\" name=\"lieu\">
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
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "periode", [], "any", false, false, false, 38), "date_cloture", [], "any", false, false, false, 38), "html", null, true);
            echo "</p>
                      <input type=\"hidden\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "periode", [], "any", false, false, false, 39), "date_debut", [], "any", false, false, false, 39), "html", null, true);
            echo "\" name=\"dateev\">
                      ";
            // line 40
            if (($context["user"] ?? null)) {
                // line 41
                echo "                      <input type=\"hidden\" id=\"mailcalendar\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 41), "html", null, true);
                echo "\" name=\"mailcalendar\">
                      ";
            }
            // line 43
            echo "                    </div>
                    <div class=\"\">
                      <strong class=\"card-title\" style=\"display:inline-block;\">Category:</strong>
                      <p class=\"card-text\" style=\"display:inline-block;\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 46), "nom_type", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
                    </div>
                    <hr>
                    <div class=\"\">
                      <strong class=\"card-title\">Tickets:</strong><br>
                      <table>
                          ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadTypeticket", [], "method", false, false, false, 52));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 53
                echo "                            <tr>
                              <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom_type", [], "any", false, false, false, 54), "html", null, true);
                echo " - Prix: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant", [], "any", false, false, false, 54), "html", null, true);
                echo "FCFA</td>
                              <td> &nbsp;&nbsp; &nbsp;</td>
                              <td><input type=\"radio\" value=\"";
                // line 56
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\" name=\"tic\" class=\" ticket\" onchange=\"testtype(event)\"/></td>
                            </tr>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                          <script>
                           
                          </script>
                        </table>
                        ";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "nombre_ticket", [], "any", false, false, false, 63) == 0)) {
                // line 64
                echo "                        ";
            } else {
                // line 65
                echo "                      <select class=\"float-right\" onchange=\"clacTotal(this.value)\" id=\"nb\">
                          ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["item"], "nombre_ticket", [], "any", false, false, false, 66)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 67
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
                // line 68
                echo "  
                        </select>  
                        ";
            }
            // line 71
            echo "                    </div>
                  
                    ";
            // line 73
            if (twig_get_attribute($this->env, $this->source, $context["item"], "promo", [], "any", false, false, false, 73)) {
                // line 74
                echo "                    <hr>
                    <input type=\"hidden\" value=\"";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "code_promo", [], "any", false, false, false, 75), "html", null, true);
                echo "\" id=\"ticketPromo\" name=\"ticketPromocode\">
                    <div>
                    <label> Entrer le code ici si vous avez un code promo</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type=\"text\" name=\"promocode\">
                    </div>
                    ";
            }
            // line 80
            echo "                    <hr>
                    ";
            // line 81
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadSubEvent", [], "method", false, false, false, 81)) > 0)) {
                // line 82
                echo "                    <div class=\"\">
                      <strong class=\"card-title\">Sous évènement(s):</strong><br>
                      <table>
                        ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadSubEvent", [], "method", false, false, false, 85));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 86
                    echo "                          <tr>
                            <td>";
                    // line 87
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sub", [], "any", false, false, false, 87), "nom", [], "any", false, false, false, 87), "html", null, true);
                    echo " - Prix: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sub", [], "any", false, false, false, 87), "montant", [], "any", false, false, false, 87), "html", null, true);
                    echo "FCFA</td>
                            <td> &nbsp;&nbsp; &nbsp;</td>
                            <td><input type=\"checkbox\" value=\"";
                    // line 89
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sub", [], "any", false, false, false, 89), "montant", [], "any", false, false, false, 89), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sub", [], "any", false, false, false, 89), "nom", [], "any", false, false, false, 89), "html", null, true);
                    echo "\" class=\" sub\" onchange=\"test(event)\"/></td>
                          </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                        <script>
                         function test(event)
                          {
                            var sub=parseInt(document.getElementsByClassName('sub').length);
                            var nb = parseInt(document.getElementById('nb').value)
                            if(event.target.checked)
                              document.getElementById('totalPrice').innerHTML = parseInt(event.target.value)*nb + parseInt(document.getElementById('totalPrice').innerHTML)
                            else
                              document.getElementById('totalPrice').innerHTML = parseInt(document.getElementById('totalPrice').innerHTML) - parseInt(event.target.value)*nb
                          }
                          function testtype(event)
                          {
                            
                            var nb = parseInt(document.getElementById('nb').value);
                            var sub=parseInt(document.getElementsByClassName('sub').length);
                            var nomb=0;
                           
                            if(document.getElementsByClassName('sub')){
                              
                              if(event.target.checked){
                              for(var i=0;i< sub;i++){
                               
                               if(document.getElementsByClassName('sub')[i].checked){
                                
                                  nomb+=parseFloat(document.getElementsByClassName('sub')[i].value);
                                }
                              
                              }
                              document.getElementById('totalPrice').innerHTML = (parseInt(JSON.parse(event.target.value).montant)+nomb)*nb ;
                         
                            }else{
                             /// document.getElementById('totalPrice').innerHTML = parseInt(document.getElementById('totalPrice').innerHTML) - parseInt(event.target.value)*nb;
                            }
                            }else{
                            
                              document.getElementById('totalPrice').innerHTML = (parseInt(JSON.parse(event.target.value).montant))*nb ;
                            }
                           
                           
                          }
                          //parseInt(document.getElementById('montantItem').value) * parseInt(nb.options[nb.selectedIndex].value)
                        </script>
                      </table>
                    </div>
                  ";
            }
            // line 137
            echo "                    <div class=\"\">
                      <strong>Total:</strong>
                      <span class=\"float-right\">                   
                        <span id=\"totalPrice\"></span> 
                        FCFA  
                      </span>
                    </div>
                    <br>                                              
                    <div>
                      <div class=\"pull-right\">                  
                          <input type=\"hidden\" name=\"total\" id=\"total\" value=\"\">
                          ";
            // line 148
            if (twig_get_attribute($this->env, $this->source, $context["item"], "promo", [], "any", false, false, false, 148)) {
                // line 149
                echo "                            <input type=\"hidden\" name=\"promo\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant_promo", [], "any", false, false, false, 149), "html", null, true);
                echo "\">
                          ";
            }
            // line 150
            echo "  
                          ";
            // line 151
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "nombre_ticket", [], "any", false, false, false, 151) <= 0)) {
                echo " 
                          <p>plus de ticket</p>
                          ";
            } else {
                // line 154
                echo "                           <input type=\"submit\" class=\"btn btn-primary\" value=\"Acheter\"/>
                          ";
            }
            // line 156
            echo "                        </form>
                        ";
            // line 157
            if (($context["user"] ?? null)) {
                // line 158
                echo "                        ";
            } else {
                // line 159
                echo "                        <a class=\"btn btn-primary \" href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\"><h3>Créer un compte</h3></a>
                        ";
            }
            // line 161
            echo "                      </div>
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
            // line 244
            if ( !($context["user"] ?? null)) {
                // line 245
                echo "    
                                        <div class=\"row\">
                                    
                                            <div class=\"col-md-6\">
                                                <h3 class=\"";
                // line 249
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 249), "id", [], "any", false, false, false, 249) == "register")) {
                    echo "active";
                }
                echo "\"><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
                echo "\">Créer un compte</a></h3>
                                                ";
                // line 250
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 251
                echo "                                            </div>
                                    
                                        </div>
                                    
                                    ";
            } else {
                // line 256
                echo "                                    
                                    ";
            }
            // line 258
            echo "                                </div><!-- login form wrapper end -->
                            </div>
                            <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">
    
                                <div class=\"singup-form-wrapper\">
                                    ";
            // line 263
            if ( !($context["user"] ?? null)) {
                // line 264
                echo "                                    
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                ";
                // line 267
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 268
                echo "                                            </div>
                                    
                                        </div>
                                    
                                    ";
            } else {
                // line 273
                echo "                                    
                                    ";
            }
            // line 275
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
        // line 284
        echo "
    <script>
        
        document.getElementById('buyForm').addEventListener('submit', function(){
          document.getElementById('total').value = document.getElementById('totalPrice').innerHTML

          var tickets = document.getElementsByClassName('ticket')
          var subEvents = document.getElementsByClassName('sub')
          var nbTicket = document.getElementById('nb').value
          var codeEntrer= document.getElementsByClassName('promo').value
          var code= document.getElementsById('ticketPromo').value
          alert('oui')
          if(code!=null){
            
            if(code==codeEntrer){
              var promo = document.createElement('input')
              promo.setAttribute('type', 'hidden')
              promo.setAttribute('name', 'promo')
              promo.setAttribute('value', code)
              document.getElementById('buyForm').appendChild(promo)
             
            }
          }

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
              element.setAttribute('value', JSON.parse(tickets[i].value).montant)
              document.getElementById('buyForm').appendChild(element)
              var element1 = document.createElement('input')
              element1.setAttribute('type', 'hidden')
              element1.setAttribute('name','nameticket')
              element1.setAttribute('value',JSON.parse(tickets[i].value).nom_type)
              document.getElementById('buyForm').appendChild(element1)
              var element2 = document.createElement('input')
              element2.setAttribute('type', 'hidden')
              element2.setAttribute('name','mailcalendar')
              element2.setAttribute('value',document.getElementById('mailcalendar').value)
              document.getElementById('buyForm').appendChild(element2)
              var element3 = document.createElement('input')
              element3.setAttribute('type', 'hidden')
              element3.setAttribute('name','datecalendar')
              element3.setAttribute('value',document.getElementById('date').value)
              document.getElementById('buyForm').appendChild(element3)
              var element4 = document.createElement('input')
              element4.setAttribute('type', 'hidden')
              element4.setAttribute('name','nomevent')
              element4.setAttribute('value',document.getElementById('nomevent').value)
              document.getElementById('buyForm').appendChild(element4)
              var element5 = document.createElement('input')
              element5.setAttribute('type', 'hidden')
              element5.setAttribute('name','description')
              element5.setAttribute('value',document.getElementById('description').value)
              document.getElementById('buyForm').appendChild(element5)
              var element6 = document.createElement('input')
              element6.setAttribute('type', 'hidden')
              element6.setAttribute('name','lieu')
              element6.setAttribute('value',document.getElementById('lieu').value)
              document.getElementById('buyForm').appendChild(element6)
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
        return array (  486 => 284,  472 => 275,  468 => 273,  461 => 268,  457 => 267,  452 => 264,  450 => 263,  443 => 258,  439 => 256,  432 => 251,  428 => 250,  420 => 249,  414 => 245,  412 => 244,  327 => 161,  323 => 159,  320 => 158,  318 => 157,  315 => 156,  311 => 154,  305 => 151,  302 => 150,  296 => 149,  294 => 148,  281 => 137,  234 => 92,  223 => 89,  216 => 87,  213 => 86,  209 => 85,  204 => 82,  202 => 81,  199 => 80,  191 => 75,  188 => 74,  186 => 73,  182 => 71,  177 => 68,  166 => 67,  162 => 66,  159 => 65,  156 => 64,  154 => 63,  148 => 59,  139 => 56,  132 => 54,  129 => 53,  125 => 52,  116 => 46,  111 => 43,  105 => 41,  103 => 40,  99 => 39,  95 => 38,  73 => 19,  69 => 18,  65 => 17,  58 => 13,  50 => 8,  46 => 7,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in __SELF__.loadEvents() %}
<div class=\"my-5\" style=\"padding-top: 100px;\">
        <div class=\"container\">
            <form data-request=\"onAchat\" id=\"buyForm\">
          <div class=\"\">
            <div class=\"\">
              <h2 style=\"font-size:32px;\">{{item.nom}}</h2>
              <input type=\"hidden\" value=\"{{item.nom}}\" id=\"nomevent\" name=\"nomevent\">
            </div>
            <div class=\"row my-5\">
              <div class=\"col-lg-8\">
                <div class=\"\">
                  <img src=\"{{item.image}}\" alt=\"\">
                </div>
                <div class=\"mt-5\">
                  <h3>Description</h3>
                  {{item.description}}
                  <input type=\"hidden\" value=\"{{item.description}}\" id=\"description\" name=\"description\">
                  <input type=\"hidden\" value=\"{{item.lieu}}\" id=\"lieu\" name=\"lieu\">
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
                      <input type=\"hidden\" value=\"{{item.periode.date_debut}}\" name=\"dateev\">
                      {% if user %}
                      <input type=\"hidden\" id=\"mailcalendar\" value=\"{{user.email}}\" name=\"mailcalendar\">
                      {%endif%}
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
                              <td><input type=\"radio\" value=\"{{ item }}\" name=\"tic\" class=\" ticket\" onchange=\"testtype(event)\"/></td>
                            </tr>
                          {% endfor %}
                          <script>
                           
                          </script>
                        </table>
                        {%if item.nombre_ticket==0%}
                        {%else%}
                      <select class=\"float-right\" onchange=\"clacTotal(this.value)\" id=\"nb\">
                          {% for i in 1..item.nombre_ticket %}
                            <option value=\"{{ i }}\"> {{ i }}</option>
                         {% endfor %}  
                        </select>  
                        {% endif%}
                    </div>
                  
                    {%if item.promo %}
                    <hr>
                    <input type=\"hidden\" value=\"{{item.code_promo}}\" id=\"ticketPromo\" name=\"ticketPromocode\">
                    <div>
                    <label> Entrer le code ici si vous avez un code promo</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type=\"text\" name=\"promocode\">
                    </div>
                    {% endif %}
                    <hr>
                    {% if __SELF__.loadSubEvent()|length > 0 %}
                    <div class=\"\">
                      <strong class=\"card-title\">Sous évènement(s):</strong><br>
                      <table>
                        {% for item in __SELF__.loadSubEvent() %}
                          <tr>
                            <td>{{ item.sub.nom }} - Prix: {{ item.sub.montant }}FCFA</td>
                            <td> &nbsp;&nbsp; &nbsp;</td>
                            <td><input type=\"checkbox\" value=\"{{ item.sub.montant }}\" name=\"{{ item.sub.nom }}\" class=\" sub\" onchange=\"test(event)\"/></td>
                          </tr>
                        {% endfor %}
                        <script>
                         function test(event)
                          {
                            var sub=parseInt(document.getElementsByClassName('sub').length);
                            var nb = parseInt(document.getElementById('nb').value)
                            if(event.target.checked)
                              document.getElementById('totalPrice').innerHTML = parseInt(event.target.value)*nb + parseInt(document.getElementById('totalPrice').innerHTML)
                            else
                              document.getElementById('totalPrice').innerHTML = parseInt(document.getElementById('totalPrice').innerHTML) - parseInt(event.target.value)*nb
                          }
                          function testtype(event)
                          {
                            
                            var nb = parseInt(document.getElementById('nb').value);
                            var sub=parseInt(document.getElementsByClassName('sub').length);
                            var nomb=0;
                           
                            if(document.getElementsByClassName('sub')){
                              
                              if(event.target.checked){
                              for(var i=0;i< sub;i++){
                               
                               if(document.getElementsByClassName('sub')[i].checked){
                                
                                  nomb+=parseFloat(document.getElementsByClassName('sub')[i].value);
                                }
                              
                              }
                              document.getElementById('totalPrice').innerHTML = (parseInt(JSON.parse(event.target.value).montant)+nomb)*nb ;
                         
                            }else{
                             /// document.getElementById('totalPrice').innerHTML = parseInt(document.getElementById('totalPrice').innerHTML) - parseInt(event.target.value)*nb;
                            }
                            }else{
                            
                              document.getElementById('totalPrice').innerHTML = (parseInt(JSON.parse(event.target.value).montant))*nb ;
                            }
                           
                           
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
                      <div class=\"pull-right\">                  
                          <input type=\"hidden\" name=\"total\" id=\"total\" value=\"\">
                          {% if item.promo %}
                            <input type=\"hidden\" name=\"promo\" value=\"{{ item.montant_promo }}\">
                          {% endif %}  
                          {%if item.nombre_ticket<=0%} 
                          <p>plus de ticket</p>
                          {%else%}
                           <input type=\"submit\" class=\"btn btn-primary\" value=\"Acheter\"/>
                          {% endif %}
                        </form>
                        {% if user%}
                        {%else%}
                        <a class=\"btn btn-primary \" href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\"><h3>Créer un compte</h3></a>
                        {%endif%}
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
          var codeEntrer= document.getElementsByClassName('promo').value
          var code= document.getElementsById('ticketPromo').value
          alert('oui')
          if(code!=null){
            
            if(code==codeEntrer){
              var promo = document.createElement('input')
              promo.setAttribute('type', 'hidden')
              promo.setAttribute('name', 'promo')
              promo.setAttribute('value', code)
              document.getElementById('buyForm').appendChild(promo)
             
            }
          }

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
              element.setAttribute('value', JSON.parse(tickets[i].value).montant)
              document.getElementById('buyForm').appendChild(element)
              var element1 = document.createElement('input')
              element1.setAttribute('type', 'hidden')
              element1.setAttribute('name','nameticket')
              element1.setAttribute('value',JSON.parse(tickets[i].value).nom_type)
              document.getElementById('buyForm').appendChild(element1)
              var element2 = document.createElement('input')
              element2.setAttribute('type', 'hidden')
              element2.setAttribute('name','mailcalendar')
              element2.setAttribute('value',document.getElementById('mailcalendar').value)
              document.getElementById('buyForm').appendChild(element2)
              var element3 = document.createElement('input')
              element3.setAttribute('type', 'hidden')
              element3.setAttribute('name','datecalendar')
              element3.setAttribute('value',document.getElementById('date').value)
              document.getElementById('buyForm').appendChild(element3)
              var element4 = document.createElement('input')
              element4.setAttribute('type', 'hidden')
              element4.setAttribute('name','nomevent')
              element4.setAttribute('value',document.getElementById('nomevent').value)
              document.getElementById('buyForm').appendChild(element4)
              var element5 = document.createElement('input')
              element5.setAttribute('type', 'hidden')
              element5.setAttribute('name','description')
              element5.setAttribute('value',document.getElementById('description').value)
              document.getElementById('buyForm').appendChild(element5)
              var element6 = document.createElement('input')
              element6.setAttribute('type', 'hidden')
              element6.setAttribute('name','lieu')
              element6.setAttribute('value',document.getElementById('lieu').value)
              document.getElementById('buyForm').appendChild(element6)
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
