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

/* C:\wamp64\www\install-master/themes/demo/pages/manage_event_view.htm */
class __TwigTemplate_2903e8f99eb62c8f34e820a67275ad92a0c22da28f154be8c0a845d1c146f3cf extends \Twig\Template
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
        echo "<div class=\"my-5\">
    <div class=\"container\">
      <div class=\"\">
        <div class=\"\">
          <h2 style=\"font-size:32px;\">papa</h2>
        </div>
        <div class=\"row my-5\">
          <div class=\"col-lg-8\">
            <div class=\"\">
              <img src=\"http://lab.thesoftking.com/eticket/assets/user/img/ticket/1563294083.jpg\" alt=\"\">
            </div>
            <div class=\"mt-5\">
              <h3>Overview</h3>
              uueuruur ruurur ruur&nbsp; ruur&nbsp;
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
                  <p class=\"card-text\" style=\"display:inline-block;\">2019-07-05</p>
                </div>
                <div class=\"\">
                  <strong class=\"card-title\" style=\"display:inline-block;\">Category:</strong>
                  <p class=\"card-text\" style=\"display:inline-block;\">Tour</p>
                </div>
                <hr>
                <div class=\"\">
                  <strong class=\"card-title\">Buy Tickets:</strong><br>
                  <span>
                    <span>Per Person</span><br>
                    <span>\$ 2000</span>
                    <select class=\"float-right\" onchange=\"clacTotal(2000, this.value)\">
                                              <option value=\"1\">1</option>
                                              <option value=\"2\">2</option>
                                              <option value=\"3\">3</option>
                                              <option value=\"4\">4</option>
                                              <option value=\"5\">5</option>
                                              <option value=\"6\">6</option>
                                              <option value=\"7\">7</option>
                                              <option value=\"8\">8</option>
                                              <option value=\"9\">9</option>
                                              <option value=\"10\">10</option>
                                          </select>
                  </span>
                </div>
                <hr>
                <div class=\"\">
                  <strong>Total:</strong>
                  <span class=\"float-right\">
                    \$
                    <span id=\"totalPrice\"></span>
                  </span>
                </div>
                <br>
                                                <div class=\"text-center\">
                  <a href=\"#\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#buyTicketConfModal\">Buy Ticket</a>
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
          \t\t\t\t</div>
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
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/demo/pages/manage_event_view.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"my-5\">
    <div class=\"container\">
      <div class=\"\">
        <div class=\"\">
          <h2 style=\"font-size:32px;\">papa</h2>
        </div>
        <div class=\"row my-5\">
          <div class=\"col-lg-8\">
            <div class=\"\">
              <img src=\"http://lab.thesoftking.com/eticket/assets/user/img/ticket/1563294083.jpg\" alt=\"\">
            </div>
            <div class=\"mt-5\">
              <h3>Overview</h3>
              uueuruur ruurur ruur&nbsp; ruur&nbsp;
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
                  <p class=\"card-text\" style=\"display:inline-block;\">2019-07-05</p>
                </div>
                <div class=\"\">
                  <strong class=\"card-title\" style=\"display:inline-block;\">Category:</strong>
                  <p class=\"card-text\" style=\"display:inline-block;\">Tour</p>
                </div>
                <hr>
                <div class=\"\">
                  <strong class=\"card-title\">Buy Tickets:</strong><br>
                  <span>
                    <span>Per Person</span><br>
                    <span>\$ 2000</span>
                    <select class=\"float-right\" onchange=\"clacTotal(2000, this.value)\">
                                              <option value=\"1\">1</option>
                                              <option value=\"2\">2</option>
                                              <option value=\"3\">3</option>
                                              <option value=\"4\">4</option>
                                              <option value=\"5\">5</option>
                                              <option value=\"6\">6</option>
                                              <option value=\"7\">7</option>
                                              <option value=\"8\">8</option>
                                              <option value=\"9\">9</option>
                                              <option value=\"10\">10</option>
                                          </select>
                  </span>
                </div>
                <hr>
                <div class=\"\">
                  <strong>Total:</strong>
                  <span class=\"float-right\">
                    \$
                    <span id=\"totalPrice\"></span>
                  </span>
                </div>
                <br>
                                                <div class=\"text-center\">
                  <a href=\"#\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#buyTicketConfModal\">Buy Ticket</a>
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
          \t\t\t\t</div>
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
  </div>", "C:\\wamp64\\www\\install-master/themes/demo/pages/manage_event_view.htm", "");
    }
}
