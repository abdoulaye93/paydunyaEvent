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
                        ";
        // line 11
        if (($context["user"] ?? null)) {
            // line 12
            echo "                        <input type=\"hidden\" name=\"user\" value=\" ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
                    ";
        } else {
            // line 14
            echo "                    ";
        }
        // line 15
        echo "                    <div class=\"form-element square\">
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
                    <div class=\"row\">
                      <div class=\"col-md-4\">
                        <div class=\"form-element square\">
                            <label>Category&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <span><a  href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Autres</a></span>
                            </label>
                            <select class=\"input-field-square\" name=\"category\" value=\"\">
                                                                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadEvents", [], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            echo "                                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom_type", [], "any", false, false, false, 39), "html", null, true);
            echo "</option>
                                                                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                                                                    
                                                                   
                                                               
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
                            <div class=\"form-element square\">
                                <label>
                                    Ajouter un sous évènement
                                </label>
                                <input type='text' id='inputTask' placeholder=\" Entrer le nom  \"   class=\"input-field-square\"/>
                                <input type='text' id='inputTask1' placeholder=\" Montant\"   class=\"input-field-square\"/>
                                <input type='button' onclick='addText()' value='Ajoutez'  class=\"submit-form-btn\"/>
                            </div>
                        </div>
                        <div id=\"addTask\" class=\"col-md-4\">
    \t
                        </div>
                    <div>
                    </div>
                    <div class=\"form-element square\">
                        <label>
                          Description
                          <span>**</span>
                        </label>
                        <textarea id=\"overview\" name=\"description\" rows=\"12\" cols=\"80\" class=\"input-field-square\"></textarea>
                                                </div>
                    <div class=\"text-center\">
                      <button type=\"submit\" class=\"submit-form-btn\" onclick='nbsub()'>Envoyer</button>
                    </div>

                </form>
            </div>
          </div>
        </div>

    </div>
</div>
";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 110
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 111
            echo "<p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 113
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
                                <form id=\"sous_event_Form\" data-request=\"onSave1\">
                                    <div class=\"form-element square login\"><!-- form element login start -->
                                        <label>Enter le nom du sous évènement
                                        </label>
                                        <input name=\"nom1\" type=\"text\" placeholder=\"nom de la categorie....\" class=\"input-field-square\">
                                        <p class=\"eml\"></p>
                                    </div>
                                     <div class=\"form-element square login\"><!-- form element login start -->
                                        <label>Enter le montant 
                                        </label>
                                        <input name=\"montant1\" type=\"text\" placeholder=\"montant de la categorie....\" class=\"input-field-square\">
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
</div>
<script>
    var row = 0;
function nbsub(){
    var nb=document.createElement(\"div\");
    document.getElementById('addTask').appendChild(nb);
    var ligne = document.createElement('input');
    ligne.setAttribute('type', 'hidden');
    ligne.setAttribute(\"value\", row);
    ligne.setAttribute(\"name\", \"nbsub\");
    nb.appendChild(ligne);
}
function addText(){
    var input = document.getElementById('inputTask').value;
    var input1 = document.getElementById('inputTask1').value;
    if(input != \"\" && input1 != \"\")
    {
    var nodenom=document.createElement(\"div\");
    nodenom.setAttribute('id', 'contentP'+row);
    document.getElementById('addTask').appendChild(nodenom);

    var nom = document.createElement('input');
    nom.setAttribute('type', 'text');
    nom.setAttribute(\"value\", input);
    nom.setAttribute(\"name\",\"subnom\"+row);
    nom.setAttribute(\"class\",\"input-field-square\");
    nom.setAttribute(\"onClick\", \"deleterow(\"+ row +\");\");
    nodenom.appendChild(nom);
    var montant = document.createElement('input');
    montant.setAttribute('type', 'text');
    montant.setAttribute(\"value\", input1);
    montant.setAttribute(\"class\",\"input-field-square\");
    montant.setAttribute(\"name\",\"submontant\"+row);
    montant.setAttribute(\"onClick\", \"deleterow(\"+ row +\");\");
    nodenom.appendChild(montant);
    var etat = document.createElement('input');
    etat.setAttribute('type', 'button');
    etat.setAttribute(\"value\", \"supprimer\");
    etat.setAttribute(\"id\",\"content\"+row);
    etat.setAttribute(\"class\",\"submit-form-btn\");
    etat.setAttribute(\"onClick\", \"deleterow(\"+ row +\");\");
    nodenom.appendChild(etat);
        row++;
    }
    else
    {
        alert(\"Please insert a value!\");
    }

}
function deleterow(ID)
{
    document.getElementById('contentP'+ID).remove();
}
</script>";
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
        return array (  177 => 113,  171 => 111,  169 => 110,  98 => 41,  87 => 39,  83 => 38,  58 => 15,  55 => 14,  49 => 12,  47 => 11,  35 => 1,);
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
                        {% if user %}
                        <input type=\"hidden\" name=\"user\" value=\" {{ user.id }}\">
                    {% else %}
                    {% endif %}
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
                    <div class=\"row\">
                      <div class=\"col-md-4\">
                        <div class=\"form-element square\">
                            <label>Category&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <span><a  href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Autres</a></span>
                            </label>
                            <select class=\"input-field-square\" name=\"category\" value=\"\">
                                                                        {% for item in __SELF__.loadEvents() %}
                                                                        <option value=\"{{ item.id }}\">{{ item.nom_type }}</option>
                                                                         {% endfor %}
                                                                    
                                                                   
                                                               
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
                            <div class=\"form-element square\">
                                <label>
                                    Ajouter un sous évènement
                                </label>
                                <input type='text' id='inputTask' placeholder=\" Entrer le nom  \"   class=\"input-field-square\"/>
                                <input type='text' id='inputTask1' placeholder=\" Montant\"   class=\"input-field-square\"/>
                                <input type='button' onclick='addText()' value='Ajoutez'  class=\"submit-form-btn\"/>
                            </div>
                        </div>
                        <div id=\"addTask\" class=\"col-md-4\">
    \t
                        </div>
                    <div>
                    </div>
                    <div class=\"form-element square\">
                        <label>
                          Description
                          <span>**</span>
                        </label>
                        <textarea id=\"overview\" name=\"description\" rows=\"12\" cols=\"80\" class=\"input-field-square\"></textarea>
                                                </div>
                    <div class=\"text-center\">
                      <button type=\"submit\" class=\"submit-form-btn\" onclick='nbsub()'>Envoyer</button>
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
                                <form id=\"sous_event_Form\" data-request=\"onSave1\">
                                    <div class=\"form-element square login\"><!-- form element login start -->
                                        <label>Enter le nom du sous évènement
                                        </label>
                                        <input name=\"nom1\" type=\"text\" placeholder=\"nom de la categorie....\" class=\"input-field-square\">
                                        <p class=\"eml\"></p>
                                    </div>
                                     <div class=\"form-element square login\"><!-- form element login start -->
                                        <label>Enter le montant 
                                        </label>
                                        <input name=\"montant1\" type=\"text\" placeholder=\"montant de la categorie....\" class=\"input-field-square\">
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
</div>
<script>
    var row = 0;
function nbsub(){
    var nb=document.createElement(\"div\");
    document.getElementById('addTask').appendChild(nb);
    var ligne = document.createElement('input');
    ligne.setAttribute('type', 'hidden');
    ligne.setAttribute(\"value\", row);
    ligne.setAttribute(\"name\", \"nbsub\");
    nb.appendChild(ligne);
}
function addText(){
    var input = document.getElementById('inputTask').value;
    var input1 = document.getElementById('inputTask1').value;
    if(input != \"\" && input1 != \"\")
    {
    var nodenom=document.createElement(\"div\");
    nodenom.setAttribute('id', 'contentP'+row);
    document.getElementById('addTask').appendChild(nodenom);

    var nom = document.createElement('input');
    nom.setAttribute('type', 'text');
    nom.setAttribute(\"value\", input);
    nom.setAttribute(\"name\",\"subnom\"+row);
    nom.setAttribute(\"class\",\"input-field-square\");
    nom.setAttribute(\"onClick\", \"deleterow(\"+ row +\");\");
    nodenom.appendChild(nom);
    var montant = document.createElement('input');
    montant.setAttribute('type', 'text');
    montant.setAttribute(\"value\", input1);
    montant.setAttribute(\"class\",\"input-field-square\");
    montant.setAttribute(\"name\",\"submontant\"+row);
    montant.setAttribute(\"onClick\", \"deleterow(\"+ row +\");\");
    nodenom.appendChild(montant);
    var etat = document.createElement('input');
    etat.setAttribute('type', 'button');
    etat.setAttribute(\"value\", \"supprimer\");
    etat.setAttribute(\"id\",\"content\"+row);
    etat.setAttribute(\"class\",\"submit-form-btn\");
    etat.setAttribute(\"onClick\", \"deleterow(\"+ row +\");\");
    nodenom.appendChild(etat);
        row++;
    }
    else
    {
        alert(\"Please insert a value!\");
    }

}
function deleterow(ID)
{
    document.getElementById('contentP'+ID).remove();
}
</script>", "C:\\wamp64\\www\\install-master/plugins/event/event/components/eventform/default.htm", "");
    }
}
