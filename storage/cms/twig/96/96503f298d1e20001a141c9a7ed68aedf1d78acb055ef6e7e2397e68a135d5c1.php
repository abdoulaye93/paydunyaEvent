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

/* C:\wamp64\www\install-master/themes/demo/pages/manage_event_edit.htm */
class __TwigTemplate_bb1c20f42e8b7105774326b0c5f60f73b05b5e586664880ab7e5f153aa9554aa extends \Twig\Template
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
            <div class=\"col-md-6 my-5\">
                <h3 class=\"py-3\">Mise a jour de l'évènement</h3>
                <form class=\"contact-from-wrapper\" method=\"post\" action=\"http://lab.thesoftking.com/eticket/event/update/118\" enctype=\"multipart/form-data\">
                    <input type=\"hidden\" name=\"_token\" value=\"6QRGzK0MHxAQ3zd2h5nfzUkoL1b6kPBzfBlGsZo4\">
                    <div class=\"form-element square\">
                        <label>Nom de l'évènement
                            <span>**</span>
                        </label>
                        <input type=\"text\" name=\"title\" value=\"papa\" placeholder=\"Entre le nom...\" class=\"input-field-square\">
                                            </div>

                    <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                        <div class=\"fileinput-new thumbnail\">
                            <img src=\"http://lab.thesoftking.com/eticket/assets/user/img/ticket/1563294083.jpg\" alt=\"\" />
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

                    <div class=\"form-element square\">
                        <label>Category
                        </label>
                        <select class=\"input-field-square\" name=\"category\" value=\"\">
                                                                                  <option selected value=\"Tour\">Tour</option>
                                                                                                              <option value=\"Event\">Event</option>
                                                                                                              <option value=\"Concert\">Concert</option>
                                                                                                              <option value=\"Bus\">Bus</option>
                                                                              </select>
                                            </div>

                    <div class=\"form-element square\">
                        <label>Date de l'évènement
                            <span>**</span>
                        </label>
                        <input type=\"date\" name=\"ex_date\" value=\"2019-07-05\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                    </div>
                    <div class=\"form-element square\">
                        <label>Date de cloture des ventes
                            <span>**</span>
                        </label>
                        <input type=\"date\" name=\"ex_date\" value=\"2019-07-05\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                    </div>

                    <div class=\"form-element square\">
                        <label>Montant de l'évènement
                            <span>**</span>
                        </label>
                        <input type=\"text\" name=\"pp_price\" value=\"2000\" placeholder=\"Enter per person price...\" class=\"input-field-square\">
                                            </div>

                    <div class=\"form-element square\">
                        <label>Nombre de ticket
                            <span>**</span>
                        </label>
                        <input type=\"number\" name=\"minp\" value=\"1\" placeholder=\"Enter minimum number of persons...\" class=\"input-field-square\">
                    </div>

                    <div class=\"form-element square\">
                        <label>
                          Overview
                          <span>**</span>
                        </label>
                        <textarea id=\"overview\" name=\"overview\" rows=\"12\" cols=\"80\" class=\"input-field-square\">uueuruur ruurur ruur&amp;nbsp; ruur&amp;nbsp;</textarea>
                                            </div>
                    <button type=\"submit\" class=\"submit-form-btn\">Mettre a jour l'évènement</button>
                </form>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/demo/pages/manage_event_edit.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 my-5\">
                <h3 class=\"py-3\">Mise a jour de l'évènement</h3>
                <form class=\"contact-from-wrapper\" method=\"post\" action=\"http://lab.thesoftking.com/eticket/event/update/118\" enctype=\"multipart/form-data\">
                    <input type=\"hidden\" name=\"_token\" value=\"6QRGzK0MHxAQ3zd2h5nfzUkoL1b6kPBzfBlGsZo4\">
                    <div class=\"form-element square\">
                        <label>Nom de l'évènement
                            <span>**</span>
                        </label>
                        <input type=\"text\" name=\"title\" value=\"papa\" placeholder=\"Entre le nom...\" class=\"input-field-square\">
                                            </div>

                    <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                        <div class=\"fileinput-new thumbnail\">
                            <img src=\"http://lab.thesoftking.com/eticket/assets/user/img/ticket/1563294083.jpg\" alt=\"\" />
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

                    <div class=\"form-element square\">
                        <label>Category
                        </label>
                        <select class=\"input-field-square\" name=\"category\" value=\"\">
                                                                                  <option selected value=\"Tour\">Tour</option>
                                                                                                              <option value=\"Event\">Event</option>
                                                                                                              <option value=\"Concert\">Concert</option>
                                                                                                              <option value=\"Bus\">Bus</option>
                                                                              </select>
                                            </div>

                    <div class=\"form-element square\">
                        <label>Date de l'évènement
                            <span>**</span>
                        </label>
                        <input type=\"date\" name=\"ex_date\" value=\"2019-07-05\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                    </div>
                    <div class=\"form-element square\">
                        <label>Date de cloture des ventes
                            <span>**</span>
                        </label>
                        <input type=\"date\" name=\"ex_date\" value=\"2019-07-05\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                    </div>

                    <div class=\"form-element square\">
                        <label>Montant de l'évènement
                            <span>**</span>
                        </label>
                        <input type=\"text\" name=\"pp_price\" value=\"2000\" placeholder=\"Enter per person price...\" class=\"input-field-square\">
                                            </div>

                    <div class=\"form-element square\">
                        <label>Nombre de ticket
                            <span>**</span>
                        </label>
                        <input type=\"number\" name=\"minp\" value=\"1\" placeholder=\"Enter minimum number of persons...\" class=\"input-field-square\">
                    </div>

                    <div class=\"form-element square\">
                        <label>
                          Overview
                          <span>**</span>
                        </label>
                        <textarea id=\"overview\" name=\"overview\" rows=\"12\" cols=\"80\" class=\"input-field-square\">uueuruur ruurur ruur&amp;nbsp; ruur&amp;nbsp;</textarea>
                                            </div>
                    <button type=\"submit\" class=\"submit-form-btn\">Mettre a jour l'évènement</button>
                </form>
            </div>
        </div>
    </div>", "C:\\wamp64\\www\\install-master/themes/demo/pages/manage_event_edit.htm", "");
    }
}
