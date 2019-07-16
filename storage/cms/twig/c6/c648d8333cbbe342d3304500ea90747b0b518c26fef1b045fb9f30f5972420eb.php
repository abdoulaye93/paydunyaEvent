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

/* C:\wamp64\www\install-master/themes/demo/pages/create_event.htm */
class __TwigTemplate_a744a8062c1eb50725a5548d171db07619a032848bae9cd578a9ac7a2a5b9e02 extends \Twig\Template
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
        echo "<div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"card my-5\" style=\"width:100%;\">
              <div class=\"card-body\" style=\"background-color:#7d5fff\">
                <h3 style=\"color:white;\">Create Event</h3>
              </div>
              <div class=\"card-body\">
                <div class=\"col-md-12\">
                    <form class=\"contact-from-wrapper\" method=\"post\" action=\"http://lab.thesoftking.com/eticket/event/store\" enctype=\"multipart/form-data\">
                       
                        <div class=\"form-element square\">
                            <label>Title
                                <span>**</span>
                            </label>
                            <input type=\"text\" name=\"title\" value=\"\" placeholder=\"Enter Title...\" class=\"input-field-square\">
                        </div>
                         <div class=\"form-element square\">
                            <label>Lieu
                                <span>**</span>
                            </label>
                            <input type=\"text\" name=\"title\" value=\"\" placeholder=\"Entrer le Lieu...\" class=\"input-field-square\">
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
                                <label>Category
                                    <span>**</span>
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
                                <label>Expired Date
                                    <span>**</span>
                                </label>
                                <input type=\"date\" name=\"ex_date\" value=\"\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                                                            </div>
                          </div>
                          <div class=\"col-md-4\">
                            <div class=\"form-element square\">
                                <label>PER PERSON PRICE
                                    <span>**</span>
                                </label>
                                <input type=\"text\" name=\"pp_price\" value=\"\" placeholder=\"Enter per person price...\" class=\"input-field-square\">
                                                            </div>
                          </div>
                        </div>

                        <div class=\"row\">
                          <div class=\"col-md-6\">
                            <div class=\"form-element square\">
                                <label>MINIMUM NUMBER of PERSONS
                                    <span>**</span>
                                </label>
                                <input type=\"number\" name=\"minp\" value=\"\" placeholder=\"Enter minimum number of persons...\" class=\"input-field-square\">
                                                            </div>
                          </div>
                          <div class=\"col-md-6\">
                            <div class=\"form-element square\">
                                <label>MAXIMUM NUMBER of PERSONS
                                    <span>**</span>
                                </label>
                                <input type=\"number\" name=\"maxp\" value=\"\" placeholder=\"Enter maximum number of persons...\" class=\"input-field-square\">
                                                            </div>
                          </div>
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
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/demo/pages/create_event.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"card my-5\" style=\"width:100%;\">
              <div class=\"card-body\" style=\"background-color:#7d5fff\">
                <h3 style=\"color:white;\">Create Event</h3>
              </div>
              <div class=\"card-body\">
                <div class=\"col-md-12\">
                    <form class=\"contact-from-wrapper\" method=\"post\" action=\"http://lab.thesoftking.com/eticket/event/store\" enctype=\"multipart/form-data\">
                       
                        <div class=\"form-element square\">
                            <label>Title
                                <span>**</span>
                            </label>
                            <input type=\"text\" name=\"title\" value=\"\" placeholder=\"Enter Title...\" class=\"input-field-square\">
                        </div>
                         <div class=\"form-element square\">
                            <label>Lieu
                                <span>**</span>
                            </label>
                            <input type=\"text\" name=\"title\" value=\"\" placeholder=\"Entrer le Lieu...\" class=\"input-field-square\">
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
                                <label>Category
                                    <span>**</span>
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
                                <label>Expired Date
                                    <span>**</span>
                                </label>
                                <input type=\"date\" name=\"ex_date\" value=\"\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                                                            </div>
                          </div>
                          <div class=\"col-md-4\">
                            <div class=\"form-element square\">
                                <label>PER PERSON PRICE
                                    <span>**</span>
                                </label>
                                <input type=\"text\" name=\"pp_price\" value=\"\" placeholder=\"Enter per person price...\" class=\"input-field-square\">
                                                            </div>
                          </div>
                        </div>

                        <div class=\"row\">
                          <div class=\"col-md-6\">
                            <div class=\"form-element square\">
                                <label>MINIMUM NUMBER of PERSONS
                                    <span>**</span>
                                </label>
                                <input type=\"number\" name=\"minp\" value=\"\" placeholder=\"Enter minimum number of persons...\" class=\"input-field-square\">
                                                            </div>
                          </div>
                          <div class=\"col-md-6\">
                            <div class=\"form-element square\">
                                <label>MAXIMUM NUMBER of PERSONS
                                    <span>**</span>
                                </label>
                                <input type=\"number\" name=\"maxp\" value=\"\" placeholder=\"Enter maximum number of persons...\" class=\"input-field-square\">
                                                            </div>
                          </div>
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
    </div>", "C:\\wamp64\\www\\install-master/themes/demo/pages/create_event.htm", "");
    }
}
