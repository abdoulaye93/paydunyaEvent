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

/* C:\wamp64\www\install-master/plugins/event/event/components/eventform/default.htm */
class __TwigTemplate_b8f578c9eee03b59935b57389e906e24fc9ae71bdc449045dd9d2329f388c267 extends \Twig\Template
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
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"card my-5\" style=\"width:100%;\">
          <div class=\"card-body\" style=\"background-color:#7d5fff\">
            <h3 style=\"color:white;\">Create Event</h3>
          </div>
          <div class=\"card-body\">
            <div class=\"col-md-12\">
                <form class=\"contact-from-wrapper\" data-request=\"onSave\">
                   
                    <div class=\"form-element square\">
                        <label>Title
                            <span>**</span>
                        </label>
                        <input type=\"text\" name=\"nom\" value=\"\" placeholder=\"Enter Title...\" class=\"input-field-square\">
                    </div>
                     <div class=\"form-element square\">
                        <label>Lieu
                            <span>**</span>
                        </label>
                        <input type=\"text\" name=\"lieu\" value=\"\" placeholder=\"Entrer le Lieu...\" class=\"input-field-square\">
                    </div>
                    <div class=\"custom-control custom-checkbox\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultUnchecked\" name=\"gratuit\">
                        <label class=\"custom-control-label\" for=\"defaultUnchecked\">Gratuit</label>
                    </div>

                    <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                        <div class=\"fileinput-new thumbnail\">
                            <img src=\"\" alt=\"\" />
                        </div>
                        <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"width: 250px;\"> </div>
                        <p><strong>[images will be resized to 730X440]</strong></p>
                        <div>
                            <span class=\"btn btn-success btn-file\">
                                <span class=\"fileinput-new\"> Choose Display Image </span>
                                <span class=\"fileinput-exists\"> Change </span>
                                <input type=\"file\" name=\"d_image\">
                            </span>
                            <a href=\"javascript:;\" class=\"btn red fileinput-exists\" data-dismiss=\"fileinput\"> Remove </a>
                        </div>
                                                </div>

                    <div class=\"row\">
                      <div class=\"col-md-4\">
                        <div class=\"form-element square\">
                            <label>Category&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <span><a  href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Autres</a></span>
                            </label>
                            <select class=\"input-field-square\" name=\"category\" value=\"\">
                                                                <option value=\"Tour\">Tour</option>
                                                                <option value=\"Event\">Event</option>
                                                                <option value=\"Concert\">Concert</option>
                                                                <option value=\"Bus\">Bus</option>
                                                              </select>
                                                        </div>
                      </div>
                      <div class=\"col-md-4\">
                        <div class=\"form-element square\">
                            <label>Date de l'évènement
                            </label>
                            <input type=\"date\" name=\"date_event\" value=\"\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                          </div>
                      </div>
                       <div class=\"col-md-4\">
                        <div class=\"form-element square\">
                            <label>Date de cloture des ventes
                            </label>
                            <input type=\"date\" name=\"date_cloture\" value=\"\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                                                        </div>
                      </div>
                      <div class=\"col-md-4\">
                        <div class=\"form-element square\">
                            <label>Montant de l'évènement
                                <span>**</span>
                            </label>
                            <input type=\"text\" name=\"montant\" value=\"\" placeholder=\"Enter per person price...\" class=\"input-field-square\">
                                                        </div>
                      </div>
                       <div class=\"col-md-8\">
                        <div class=\"form-element square\">
                            <label>Nombre de ticket
                            </label>
                            <input type=\"number\" name=\"nbrticket\" value=\"\" placeholder=\"Enter minimum number of persons...\" class=\"input-field-square\">
                        </div>
                      </div>
                    </div class=\"row\">
                        <div class=\"col-md-4\">
                         <button class=\"btn btn-primary\"> <a data-toggle=\"modal\" data-target=\"#create_event\">Créer un sous évènement</a></button>
                        </div>
                    <div>
                    </div>
                    <div class=\"form-element square\">
                        <label>
                          Overview
                          <span>**</span>
                        </label>
                        <textarea id=\"overview\" name=\"overview\" rows=\"12\" cols=\"80\" class=\"input-field-square\"></textarea>
                                                </div>
                    <div class=\"text-center\">
                      <button type=\"submit\" class=\"submit-form-btn\">SEND REQUEST</button>
                    </div>

                </form>
            </div>
          </div>
        </div>

    </div>
</div>
";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 112
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 113
            echo "<p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 115
        echo "       <!-- login and register modal start-->
<div class=\"login-registration-modal\" id=\"loginRegModal\">
    <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
        <div class=\"modal\" tabindex=\"-1\" id=\"login-modal\" role=\"dialog\"><!-- #login modal-->
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\"><!-- modal content start -->
                   
                    <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                        <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                            <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                                <form id=\"userLoginForm\">
                                    <input type=\"hidden\" name=\"_token\" value=\"5ifU7niyjh0byubCovg0kvgPryLEh51pgOvWgabI\">
                                    <div class=\"form-element square login\"><!-- form element login start -->
                                        <label>Enter le nom de la categorie
                                        </label>
                                        <input name=\"username\" type=\"text\" placeholder=\"nom de la categorie....\" class=\"input-field-square\">
                                        <p class=\"eml\"></p>
                                    </div><!-- form element login end -->
                                  <!-- form element login end -->
                                    <button type=\"submit\" class=\"submit-form-btn\">OK</button>
                                </form>
                            </div><!-- login form wrapper end -->
                        </div>
                    </div><!-- /.tab conent-->
                </div><!-- modal content end -->
            </div>
        </div><!-- /#loginmodal -->
    </div><!-- login modal warapper satart end-->
</div>
<div class=\"login-registration-modal\" id=\"eventRegModal\">
    <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
        <div class=\"modal\" tabindex=\"-1\" id=\"create_event\" role=\"dialog\"><!-- #login modal-->
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\"><!-- modal content start -->
                   
                    <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                        <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                            <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                                <form id=\"sous_event_Form\">
                                    <input type=\"hidden\" name=\"_token\" value=\"5ifU7niyjh0byubCovg0kvgPryLEh51pgOvWgabI\">
                                    <div class=\"form-element square login\"><!-- form element login start -->
                                        <label>Enter le nom du sous évènement
                                        </label>
                                        <input name=\"username\" type=\"text\" placeholder=\"nom de la categorie....\" class=\"input-field-square\">
                                        <p class=\"eml\"></p>
                                    </div>
                                     <div class=\"form-element square login\"><!-- form element login start -->
                                        <label>Enter le montant 
                                        </label>
                                        <input name=\"username\" type=\"text\" placeholder=\"nom de la categorie....\" class=\"input-field-square\">
                                        <p class=\"eml\"></p>
                                    </div><!-- form element login end -->
                                  <!-- form element login end -->
                                    <button type=\"submit\" class=\"submit-form-btn\">Créer</button>
                                </form>
                            </div><!-- login form wrapper end -->
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
        return "C:\\wamp64\\www\\install-master/plugins/event/event/components/eventform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 115,  150 => 113,  148 => 112,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"card my-5\" style=\"width:100%;\">
          <div class=\"card-body\" style=\"background-color:#7d5fff\">
            <h3 style=\"color:white;\">Create Event</h3>
          </div>
          <div class=\"card-body\">
            <div class=\"col-md-12\">
                <form class=\"contact-from-wrapper\" data-request=\"onSave\">
                   
                    <div class=\"form-element square\">
                        <label>Title
                            <span>**</span>
                        </label>
                        <input type=\"text\" name=\"nom\" value=\"\" placeholder=\"Enter Title...\" class=\"input-field-square\">
                    </div>
                     <div class=\"form-element square\">
                        <label>Lieu
                            <span>**</span>
                        </label>
                        <input type=\"text\" name=\"lieu\" value=\"\" placeholder=\"Entrer le Lieu...\" class=\"input-field-square\">
                    </div>
                    <div class=\"custom-control custom-checkbox\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultUnchecked\" name=\"gratuit\">
                        <label class=\"custom-control-label\" for=\"defaultUnchecked\">Gratuit</label>
                    </div>

                    <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                        <div class=\"fileinput-new thumbnail\">
                            <img src=\"\" alt=\"\" />
                        </div>
                        <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"width: 250px;\"> </div>
                        <p><strong>[images will be resized to 730X440]</strong></p>
                        <div>
                            <span class=\"btn btn-success btn-file\">
                                <span class=\"fileinput-new\"> Choose Display Image </span>
                                <span class=\"fileinput-exists\"> Change </span>
                                <input type=\"file\" name=\"d_image\">
                            </span>
                            <a href=\"javascript:;\" class=\"btn red fileinput-exists\" data-dismiss=\"fileinput\"> Remove </a>
                        </div>
                                                </div>

                    <div class=\"row\">
                      <div class=\"col-md-4\">
                        <div class=\"form-element square\">
                            <label>Category&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <span><a  href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Autres</a></span>
                            </label>
                            <select class=\"input-field-square\" name=\"category\" value=\"\">
                                                                <option value=\"Tour\">Tour</option>
                                                                <option value=\"Event\">Event</option>
                                                                <option value=\"Concert\">Concert</option>
                                                                <option value=\"Bus\">Bus</option>
                                                              </select>
                                                        </div>
                      </div>
                      <div class=\"col-md-4\">
                        <div class=\"form-element square\">
                            <label>Date de l'évènement
                            </label>
                            <input type=\"date\" name=\"date_event\" value=\"\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                          </div>
                      </div>
                       <div class=\"col-md-4\">
                        <div class=\"form-element square\">
                            <label>Date de cloture des ventes
                            </label>
                            <input type=\"date\" name=\"date_cloture\" value=\"\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                                                        </div>
                      </div>
                      <div class=\"col-md-4\">
                        <div class=\"form-element square\">
                            <label>Montant de l'évènement
                                <span>**</span>
                            </label>
                            <input type=\"text\" name=\"montant\" value=\"\" placeholder=\"Enter per person price...\" class=\"input-field-square\">
                                                        </div>
                      </div>
                       <div class=\"col-md-8\">
                        <div class=\"form-element square\">
                            <label>Nombre de ticket
                            </label>
                            <input type=\"number\" name=\"nbrticket\" value=\"\" placeholder=\"Enter minimum number of persons...\" class=\"input-field-square\">
                        </div>
                      </div>
                    </div class=\"row\">
                        <div class=\"col-md-4\">
                         <button class=\"btn btn-primary\"> <a data-toggle=\"modal\" data-target=\"#create_event\">Créer un sous évènement</a></button>
                        </div>
                    <div>
                    </div>
                    <div class=\"form-element square\">
                        <label>
                          Overview
                          <span>**</span>
                        </label>
                        <textarea id=\"overview\" name=\"overview\" rows=\"12\" cols=\"80\" class=\"input-field-square\"></textarea>
                                                </div>
                    <div class=\"text-center\">
                      <button type=\"submit\" class=\"submit-form-btn\">SEND REQUEST</button>
                    </div>

                </form>
            </div>
          </div>
        </div>

    </div>
</div>
{% flash success %}
<p>{{ message }}</p>
{% endflash %}
       <!-- login and register modal start-->
<div class=\"login-registration-modal\" id=\"loginRegModal\">
    <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
        <div class=\"modal\" tabindex=\"-1\" id=\"login-modal\" role=\"dialog\"><!-- #login modal-->
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\"><!-- modal content start -->
                   
                    <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                        <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                            <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                                <form id=\"userLoginForm\">
                                    <input type=\"hidden\" name=\"_token\" value=\"5ifU7niyjh0byubCovg0kvgPryLEh51pgOvWgabI\">
                                    <div class=\"form-element square login\"><!-- form element login start -->
                                        <label>Enter le nom de la categorie
                                        </label>
                                        <input name=\"username\" type=\"text\" placeholder=\"nom de la categorie....\" class=\"input-field-square\">
                                        <p class=\"eml\"></p>
                                    </div><!-- form element login end -->
                                  <!-- form element login end -->
                                    <button type=\"submit\" class=\"submit-form-btn\">OK</button>
                                </form>
                            </div><!-- login form wrapper end -->
                        </div>
                    </div><!-- /.tab conent-->
                </div><!-- modal content end -->
            </div>
        </div><!-- /#loginmodal -->
    </div><!-- login modal warapper satart end-->
</div>
<div class=\"login-registration-modal\" id=\"eventRegModal\">
    <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
        <div class=\"modal\" tabindex=\"-1\" id=\"create_event\" role=\"dialog\"><!-- #login modal-->
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\"><!-- modal content start -->
                   
                    <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                        <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                            <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                                <form id=\"sous_event_Form\">
                                    <input type=\"hidden\" name=\"_token\" value=\"5ifU7niyjh0byubCovg0kvgPryLEh51pgOvWgabI\">
                                    <div class=\"form-element square login\"><!-- form element login start -->
                                        <label>Enter le nom du sous évènement
                                        </label>
                                        <input name=\"username\" type=\"text\" placeholder=\"nom de la categorie....\" class=\"input-field-square\">
                                        <p class=\"eml\"></p>
                                    </div>
                                     <div class=\"form-element square login\"><!-- form element login start -->
                                        <label>Enter le montant 
                                        </label>
                                        <input name=\"username\" type=\"text\" placeholder=\"nom de la categorie....\" class=\"input-field-square\">
                                        <p class=\"eml\"></p>
                                    </div><!-- form element login end -->
                                  <!-- form element login end -->
                                    <button type=\"submit\" class=\"submit-form-btn\">Créer</button>
                                </form>
                            </div><!-- login form wrapper end -->
                        </div>
                    </div><!-- /.tab conent-->
                </div><!-- modal content end -->
            </div>
        </div><!-- /#loginmodal -->
    </div><!-- login modal warapper satart end-->
</div>", "C:\\wamp64\\www\\install-master/plugins/event/event/components/eventform/default.htm", "");
    }
}
