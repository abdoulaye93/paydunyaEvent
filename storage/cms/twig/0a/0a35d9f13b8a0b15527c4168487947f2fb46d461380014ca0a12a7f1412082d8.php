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

/* C:\wamp64\www\install-master/themes/demo/pages/manage_event.htm */
class __TwigTemplate_1fa5b7096acee4a63dc4642db20b4ca963b5dfb1905fb7457437ca7677116dfc extends \Twig\Template
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
        echo "<section class=\"live-token-sale justify-content-center\">
      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-lg-12 remove-col-padding-mobile\">
                  <div class=\"token-sale-top-bar\"> <!-- token sale top bar start -->
                     <div class=\"row\">
                         <div class=\"col-lg-4 col-sm-3 remove-col-padding-mobile\">
                              <div class=\"left-content\"><!-- left content start -->
                                  <h4>Manage Events</h4>
                              </div><!-- left content end -->
                         </div>
                         <div class=\"col-lg-8 col-sm-9 remove-col-padding-mobile\">
                              <div class=\"right-content\"><!-- right content start -->
                                  <div class=\"tab-navbar\"><!-- tab navbar start -->
                                      <ul class=\"nav nav-tabs\">
                                          <li class=\"nav-item\">
                                              <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#all_tab\">All</a>
                                          </li>
                                          <li class=\"nav-item\">
                                              <a class=\"nav-link\" data-toggle=\"tab\" href=\"#pending_tab\">Pending</a>
                                          </li>
                                          <li class=\"nav-item\">
                                              <a class=\"nav-link\" data-toggle=\"tab\" href=\"#published_tab\">Published</a>
                                          </li>
                                          <li class=\"nav-item\">
                                              <a class=\"nav-link\" data-toggle=\"tab\" href=\"#featured_tab\">Featured</a>
                                          </li>
                                          <li class=\"nav-item\">
                                              <a class=\"nav-link\" data-toggle=\"tab\" href=\"#active_tab\">Active</a>
                                          </li>
                                          <li class=\"nav-item\">
                                              <a class=\"nav-link\" data-toggle=\"tab\" href=\"#closed_tab\">Expired</a>
                                          </li>
                                      </ul>
                                  </div><!-- tab navbar end -->
                              </div><!-- right content end -->
                         </div>
                     </div>
                  </div><!-- token sale top bar end -->
              </div>
          </div>
           <div class=\"row\">
              <div class=\"col-lg-12\">
                  <div class=\"tab-content\"> <!-- tab content start-->
                      <div class=\"tab-pane container active\" id=\"all_tab\">
                          <div class=\"row\">
                            <h3>All Events</h3>
<table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
        <thead>
            <tr>
              <th scope=\"col\" class=\"coin_name_th\">DISPLAY IMAGE</th>
              <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
              
              <th scope=\"col\" class=\"start_price_th\" >EXPIRED DATE</th>
              <th scope=\"col\" class=\"founding_target_th\" >SALES</th>
              <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
              <th scope=\"col\" class=\"ico_date_th\" >STATUS</th>
              <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
            </tr>
        </thead>
        <tbody>
                      <tr class=\"traending_ico_tr\">
                <td data-label=\"coin_name\" class=\"coin_name\">
                   <img width=\"60\" src=\"http://lab.thesoftking.com/eticket/assets/user/img/ticket/1563294083.jpg\" alt=\"\">
                </td>
                <td data-label=\"ratings\" class=\"ratings_td\">
                    <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">papa</a>
                </td>
                
                <td data-label=\"founding_target\">
                    <span class=\"founding-target\">2019-07-05</span>
                </td>
                <td data-label=\"ico_date\">
                                      0
                                  </td>
                <td data-label=\"ico_date\">
                                      <h4 style=\"display:inline-block;\"><span class=\"badge badge-danger\">No</span></h4>
                                  </td>
                <td data-label=\"ico_date\">
                                    <h4 style=\"display:inline-block;\"><span class=\"badge badge-danger\">Expired</span></h4>
                                  </td>
                <td data-label=\"action\">
                  <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_view");
        echo "\" class=\"action-btn\">View</a>
                  <a class=\"btn btn-warning btn-sm\" href=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit");
        echo "\" class=\"action-btn\">Edit</a>
                   <a class=\"btn btn-danger btn-sm\" href=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("manage_event_edit");
        echo "\" class=\"action-btn\" data-toggle=\"modal\" data-target=\"#demande-modal\">Annuler</a>
                                                           
                                      
                </td>

            </tr>
                  </tbody>
    </table>

                          </div>
                      </div>
          <div class=\"row\">
              <div class=\"col-lg-12\">
                  <div class=\"tab-content\"> <!-- tab content start-->
                      <div class=\"tab-pane container active\" id=\"all_tab\">
                          <div class=\"row\">
                            <div class=\"col-md-12\" style=\"text-align:center;display:block;\">
    <h3>NO EVENT FOUND</h3>
  </div>
                          </div>
                      </div>
                      <div class=\"tab-pane container\" id=\"pending_tab\">
                          <div class=\"row\">
                            <div class=\"col-md-12\" style=\"text-align:center;display:block;\">
    <h3>NO PNEDING EVENT FOUND</h3>
  </div>
                          </div>
                      </div>
                      <div class=\"tab-pane container fade\" id=\"published_tab\"> <!-- upcoming tab start -->
                          <div class=\"row\">
                            <div class=\"col-md-12\" style=\"text-align:center;display:block;\">
    <h3>NO PUBLISHED EVENT FOUND</h3>
  </div>
                          </div>
                      </div><!-- upcoming tab end -->
                      <div class=\"tab-pane container fade\" id=\"featured_tab\"><!-- ending tab start -->
                          <div class=\"row\">
                            <div class=\"col-md-12\" style=\"text-align:center;display:block;\">
    <h3>NO FEATURED EVENT FOUND</h3>
  </div>
                          </div>
                      </div><!-- ending tab end -->
                      <div class=\"tab-pane container fade\" id=\"active_tab\"><!-- ending tab start -->
                          <div class=\"row\">
                            <div class=\"col-md-12\" style=\"text-align:center;display:block;\">
    <h3>NO ACTIVE EVENT FOUND</h3>
  </div>
                          </div>
                      </div><!-- ending tab end -->
                      <div class=\"tab-pane container fade\" id=\"closed_tab\"><!-- ending tab start -->
                          <div class=\"row\">
                            <div class=\"col-md-12\" style=\"text-align:center;display:block;\">
    <h3>NO EXPIRED EVENT FOUND</h3>
  </div>
                          </div>
                      </div><!-- ending tab end -->
                  </div><!-- tab content end-->
              </div>
          </div>
      </div>
  </section>
   <!-- Modal -->
  <div class=\"modal fade\" id=\"demande-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
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
        return "C:\\wamp64\\www\\install-master/themes/demo/pages/manage_event.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 85,  123 => 84,  119 => 83,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"live-token-sale justify-content-center\">
      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-lg-12 remove-col-padding-mobile\">
                  <div class=\"token-sale-top-bar\"> <!-- token sale top bar start -->
                     <div class=\"row\">
                         <div class=\"col-lg-4 col-sm-3 remove-col-padding-mobile\">
                              <div class=\"left-content\"><!-- left content start -->
                                  <h4>Manage Events</h4>
                              </div><!-- left content end -->
                         </div>
                         <div class=\"col-lg-8 col-sm-9 remove-col-padding-mobile\">
                              <div class=\"right-content\"><!-- right content start -->
                                  <div class=\"tab-navbar\"><!-- tab navbar start -->
                                      <ul class=\"nav nav-tabs\">
                                          <li class=\"nav-item\">
                                              <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#all_tab\">All</a>
                                          </li>
                                          <li class=\"nav-item\">
                                              <a class=\"nav-link\" data-toggle=\"tab\" href=\"#pending_tab\">Pending</a>
                                          </li>
                                          <li class=\"nav-item\">
                                              <a class=\"nav-link\" data-toggle=\"tab\" href=\"#published_tab\">Published</a>
                                          </li>
                                          <li class=\"nav-item\">
                                              <a class=\"nav-link\" data-toggle=\"tab\" href=\"#featured_tab\">Featured</a>
                                          </li>
                                          <li class=\"nav-item\">
                                              <a class=\"nav-link\" data-toggle=\"tab\" href=\"#active_tab\">Active</a>
                                          </li>
                                          <li class=\"nav-item\">
                                              <a class=\"nav-link\" data-toggle=\"tab\" href=\"#closed_tab\">Expired</a>
                                          </li>
                                      </ul>
                                  </div><!-- tab navbar end -->
                              </div><!-- right content end -->
                         </div>
                     </div>
                  </div><!-- token sale top bar end -->
              </div>
          </div>
           <div class=\"row\">
              <div class=\"col-lg-12\">
                  <div class=\"tab-content\"> <!-- tab content start-->
                      <div class=\"tab-pane container active\" id=\"all_tab\">
                          <div class=\"row\">
                            <h3>All Events</h3>
<table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
        <thead>
            <tr>
              <th scope=\"col\" class=\"coin_name_th\">DISPLAY IMAGE</th>
              <th scope=\"col\" class=\"coin_name_th\">TITLE</th>
              
              <th scope=\"col\" class=\"start_price_th\" >EXPIRED DATE</th>
              <th scope=\"col\" class=\"founding_target_th\" >SALES</th>
              <th scope=\"col\" class=\"founding_target_th\" >PUBLISHED</th>
              <th scope=\"col\" class=\"ico_date_th\" >STATUS</th>
              <th scope=\"col\" class=\"action_th\" >ACTIONS</th>
            </tr>
        </thead>
        <tbody>
                      <tr class=\"traending_ico_tr\">
                <td data-label=\"coin_name\" class=\"coin_name\">
                   <img width=\"60\" src=\"http://lab.thesoftking.com/eticket/assets/user/img/ticket/1563294083.jpg\" alt=\"\">
                </td>
                <td data-label=\"ratings\" class=\"ratings_td\">
                    <a href=\"http://lab.thesoftking.com/eticket/event/show/papa\">papa</a>
                </td>
                
                <td data-label=\"founding_target\">
                    <span class=\"founding-target\">2019-07-05</span>
                </td>
                <td data-label=\"ico_date\">
                                      0
                                  </td>
                <td data-label=\"ico_date\">
                                      <h4 style=\"display:inline-block;\"><span class=\"badge badge-danger\">No</span></h4>
                                  </td>
                <td data-label=\"ico_date\">
                                    <h4 style=\"display:inline-block;\"><span class=\"badge badge-danger\">Expired</span></h4>
                                  </td>
                <td data-label=\"action\">
                  <a class=\"btn btn-primary btn-sm\" class=\"btn btn-warning\" href=\"{{ 'manage_event_view'|page }}\" class=\"action-btn\">View</a>
                  <a class=\"btn btn-warning btn-sm\" href=\"{{ 'manage_event_edit'|page }}\" class=\"action-btn\">Edit</a>
                   <a class=\"btn btn-danger btn-sm\" href=\"{{ 'manage_event_edit'|page }}\" class=\"action-btn\" data-toggle=\"modal\" data-target=\"#demande-modal\">Annuler</a>
                                                           
                                      
                </td>

            </tr>
                  </tbody>
    </table>

                          </div>
                      </div>
          <div class=\"row\">
              <div class=\"col-lg-12\">
                  <div class=\"tab-content\"> <!-- tab content start-->
                      <div class=\"tab-pane container active\" id=\"all_tab\">
                          <div class=\"row\">
                            <div class=\"col-md-12\" style=\"text-align:center;display:block;\">
    <h3>NO EVENT FOUND</h3>
  </div>
                          </div>
                      </div>
                      <div class=\"tab-pane container\" id=\"pending_tab\">
                          <div class=\"row\">
                            <div class=\"col-md-12\" style=\"text-align:center;display:block;\">
    <h3>NO PNEDING EVENT FOUND</h3>
  </div>
                          </div>
                      </div>
                      <div class=\"tab-pane container fade\" id=\"published_tab\"> <!-- upcoming tab start -->
                          <div class=\"row\">
                            <div class=\"col-md-12\" style=\"text-align:center;display:block;\">
    <h3>NO PUBLISHED EVENT FOUND</h3>
  </div>
                          </div>
                      </div><!-- upcoming tab end -->
                      <div class=\"tab-pane container fade\" id=\"featured_tab\"><!-- ending tab start -->
                          <div class=\"row\">
                            <div class=\"col-md-12\" style=\"text-align:center;display:block;\">
    <h3>NO FEATURED EVENT FOUND</h3>
  </div>
                          </div>
                      </div><!-- ending tab end -->
                      <div class=\"tab-pane container fade\" id=\"active_tab\"><!-- ending tab start -->
                          <div class=\"row\">
                            <div class=\"col-md-12\" style=\"text-align:center;display:block;\">
    <h3>NO ACTIVE EVENT FOUND</h3>
  </div>
                          </div>
                      </div><!-- ending tab end -->
                      <div class=\"tab-pane container fade\" id=\"closed_tab\"><!-- ending tab start -->
                          <div class=\"row\">
                            <div class=\"col-md-12\" style=\"text-align:center;display:block;\">
    <h3>NO EXPIRED EVENT FOUND</h3>
  </div>
                          </div>
                      </div><!-- ending tab end -->
                  </div><!-- tab content end-->
              </div>
          </div>
      </div>
  </section>
   <!-- Modal -->
  <div class=\"modal fade\" id=\"demande-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
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
  </div>", "C:\\wamp64\\www\\install-master/themes/demo/pages/manage_event.htm", "");
    }
}
