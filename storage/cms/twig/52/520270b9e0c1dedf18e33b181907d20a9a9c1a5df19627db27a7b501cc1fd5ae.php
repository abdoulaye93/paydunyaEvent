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

/* C:\wamp64\www\install-master/plugins/event/event/components/modifsub/default.htm */
class __TwigTemplate_e9f7682e9f66bc0d1b2ac0763a55b34c9cd0ba1375833652486acf1cefdb63cf extends \Twig\Template
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
            echo "<div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 my-5\">
                <h3 class=\"py-3\">Mise a jour du sous évènement</h3>
                <form class=\"contact-from-wrapper\" data-request=\"onSave\">
                    <div class=\"form-element square\">
                        <label>Nom de l'évènement
                        </label>
                        <input type=\"text\" name=\"nom\" value=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 10), "html", null, true);
            echo "\" placeholder=\"Entre le nom...\" class=\"input-field-square\">
                                            </div>
                                            <div class=\"form-element square\">
                                                    <label>Montant
                                                    </label>
                                                    <input type=\"text\" name=\"montant\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant", [], "any", false, false, false, 15), "html", null, true);
            echo "\" placeholder=\"Entre le montant...\" class=\"input-field-square\">
                                                                        </div>
                                            ";
            // line 17
            if (($context["user"] ?? null)) {
                // line 18
                echo "                                            
                                        ";
            } else {
                // line 20
                echo "                                        ";
            }
            // line 21
            echo "
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
                                <input type=\"file\" name=\"image\">
                            </span>
                            <a href=\"javascript:;\" class=\"btn red fileinput-exists\" data-dismiss=\"fileinput\"> Remove </a>
                        </div>
                                            </div>
                    <div class=\"form-element square\">
                        <label>Date de l'évènement
                            <span>**</span>
                        </label>
                        <input type=\"date\" name=\"jour\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "jour", [], "any", false, false, false, 41), "html", null, true);
            echo "\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                    </div>
                    <div class=\"form-element square\">
                        <label>Nombre de ticket
                            <span>**</span>
                        </label>
                        <input type=\"number\" name=\"nbrticket\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nbrplace", [], "any", false, false, false, 47), "html", null, true);
            echo "\" placeholder=\"Enter minimum number of persons...\" class=\"input-field-square\">
                    </div>

                    <div class=\"form-element square\">
                        <label>
                          Description
                          <span>**</span>
                        </label>
                        <textarea id=\"overview\" name=\"description\" rows=\"12\" cols=\"80\" class=\"input-field-square\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 55), "html", null, true);
            echo "</textarea>
                                            </div>
                    
                    <button type=\"submit\" class=\"submit-form-btn\">Mettre a jour l'évènement</button>
                </form>
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
            // line 79
            if ( !($context["user"] ?? null)) {
                // line 80
                echo "
                                    <div class=\"row\">
                                
                                        <div class=\"col-md-6\">
                                            <h3 class=\"";
                // line 84
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84) == "register")) {
                    echo "active";
                }
                echo "\"><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
                echo "\">Créer un compte</a></h3>
                                            ";
                // line 85
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 86
                echo "                                        </div>
                                
                                    </div>
                                
                                ";
            } else {
                // line 91
                echo "                                
                                ";
            }
            // line 93
            echo "                            </div><!-- login form wrapper end -->
                        </div>
                        <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">

                            <div class=\"singup-form-wrapper\">
                                ";
            // line 98
            if ( !($context["user"] ?? null)) {
                // line 99
                echo "                                
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            ";
                // line 102
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 103
                echo "                                        </div>
                                
                                    </div>
                                
                                ";
            } else {
                // line 108
                echo "                                
                                ";
            }
            // line 110
            echo "                             </div>
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
        return "C:\\wamp64\\www\\install-master/plugins/event/event/components/modifsub/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 110,  196 => 108,  189 => 103,  185 => 102,  180 => 99,  178 => 98,  171 => 93,  167 => 91,  160 => 86,  156 => 85,  148 => 84,  142 => 80,  140 => 79,  113 => 55,  102 => 47,  93 => 41,  71 => 21,  68 => 20,  64 => 18,  62 => 17,  57 => 15,  49 => 10,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in __SELF__.loadEvents() %}
<div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 my-5\">
                <h3 class=\"py-3\">Mise a jour du sous évènement</h3>
                <form class=\"contact-from-wrapper\" data-request=\"onSave\">
                    <div class=\"form-element square\">
                        <label>Nom de l'évènement
                        </label>
                        <input type=\"text\" name=\"nom\" value=\"{{item.nom}}\" placeholder=\"Entre le nom...\" class=\"input-field-square\">
                                            </div>
                                            <div class=\"form-element square\">
                                                    <label>Montant
                                                    </label>
                                                    <input type=\"text\" name=\"montant\" value=\"{{item.montant}}\" placeholder=\"Entre le montant...\" class=\"input-field-square\">
                                                                        </div>
                                            {% if user %}
                                            
                                        {% else %}
                                        {% endif %}

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
                                <input type=\"file\" name=\"image\">
                            </span>
                            <a href=\"javascript:;\" class=\"btn red fileinput-exists\" data-dismiss=\"fileinput\"> Remove </a>
                        </div>
                                            </div>
                    <div class=\"form-element square\">
                        <label>Date de l'évènement
                            <span>**</span>
                        </label>
                        <input type=\"date\" name=\"jour\" value=\"{{item.jour}}\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                    </div>
                    <div class=\"form-element square\">
                        <label>Nombre de ticket
                            <span>**</span>
                        </label>
                        <input type=\"number\" name=\"nbrticket\" value=\"{{item.nbrplace}}\" placeholder=\"Enter minimum number of persons...\" class=\"input-field-square\">
                    </div>

                    <div class=\"form-element square\">
                        <label>
                          Description
                          <span>**</span>
                        </label>
                        <textarea id=\"overview\" name=\"description\" rows=\"12\" cols=\"80\" class=\"input-field-square\">{{item.description}}</textarea>
                                            </div>
                    
                    <button type=\"submit\" class=\"submit-form-btn\">Mettre a jour l'évènement</button>
                </form>
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
{%endfor%}", "C:\\wamp64\\www\\install-master/plugins/event/event/components/modifsub/default.htm", "");
    }
}
