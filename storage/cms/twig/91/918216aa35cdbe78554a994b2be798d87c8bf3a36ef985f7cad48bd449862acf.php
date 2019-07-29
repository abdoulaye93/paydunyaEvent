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

/* C:\wamp64\www\install-master/plugins/event/event/components/manageeventedit/default.htm */
class __TwigTemplate_c01c2e1dcffa4307bcdae34bc6ac9b3a56f99dc20682e7adbb02c4412cf1de6b extends \Twig\Template
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
                <h3 class=\"py-3\">Mise a jour de l'évènement</h3>
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
                                                    <label>Lieu
                                                    </label>
                                                    <input type=\"text\" name=\"lieu\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "lieu", [], "any", false, false, false, 15), "html", null, true);
            echo "\" placeholder=\"Entre le nom...\" class=\"input-field-square\">
                                                                        </div>
                                            ";
            // line 17
            if (($context["user"] ?? null)) {
                // line 18
                echo "                                            <input type=\"hidden\" name=\"user\" value=\" ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 18), "html", null, true);
                echo "\">
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
                                <input type=\"file\" name=\"d_image\">
                            </span>
                            <a href=\"javascript:;\" class=\"btn red fileinput-exists\" data-dismiss=\"fileinput\"> Remove </a>
                        </div>
                                            </div>

                    <div class=\"form-element square\">
                        <label>Category
                        </label>
                        <select class=\"input-field-square\" name=\"category\" value=\"\">
                                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadSubs", [], "method", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 43
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom_type", [], "any", false, false, false, 43), "html", null, true);
                echo "</option>
                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                                                                              </select>
                                            </div>

                    <div class=\"form-element square\">
                        <label>Date de l'évènement
                            <span>**</span>
                        </label>
                        <input type=\"date\" name=\"date_debut\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "periode", [], "any", false, false, false, 52), "date_debut", [], "any", false, false, false, 52), "html", null, true);
            echo "\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                    </div>
                    <div class=\"form-element square\">
                        <label>Date de cloture des ventes
                            <span>**</span>
                        </label>
                        <input type=\"date\" name=\"date_cloture\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "periode", [], "any", false, false, false, 58), "date_cloture", [], "any", false, false, false, 58), "html", null, true);
            echo "\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                    </div>

                    <div class=\"form-element square\">
                            ";
            // line 62
            if (twig_get_attribute($this->env, $this->source, $context["item"], "gratuit", [], "any", false, false, false, 62)) {
                // line 63
                echo "                            <div class=\"custom-control custom-checkbox\">
                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultUncheck\" name=\"gratuit\" checked>
                                    <label class=\"custom-control-label\" for=\"defaultUncheck\">Gratuit</label>
                                
                                </div>
                        ";
            } else {
                // line 69
                echo "                        <div class=\"custom-control custom-checkbox\">
                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultUncheck\" name=\"nongratuit\" >
                                <label class=\"custom-control-label\" for=\"defaultUncheck\">Gratuit</label>
                            
                            </div>
                        ";
            }
            // line 75
            echo "                            
                       </div>
                    ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadSevent", [], "method", false, false, false, 77)) {
                // line 78
                echo "                    <label><strong> sous évènements</strong></label>
                      ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "loadSevent", [], "method", false, false, false, 79));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 80
                    echo "                      <div class=\"row\">
                            <div class=\"col-md-4\" style=\"margin-bottom: 5px;\">
                          <a class=\"btn btn-primary btn-sm\" href=\"";
                    // line 82
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("modif_sub", ["sub_id" => twig_get_attribute($this->env, $this->source, $context["item"], "sub_id", [], "any", false, false, false, 82)]);
                    echo "\" class=\"action-btn\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "sub", [], "any", false, false, false, 82), "nom", [], "any", false, false, false, 82), "html", null, true);
                    echo "</a>
                          </div>
                      </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "                    ";
            }
            // line 87
            echo "                    <div class=\"form-element square\">
                        <label>Nombre de ticket
                            <span>**</span>
                        </label>
                        <input type=\"number\" name=\"nbrticket\" value=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nombre_ticket", [], "any", false, false, false, 91), "html", null, true);
            echo "\" placeholder=\"Enter minimum number of persons...\" class=\"input-field-square\">
                    </div>

                    <div class=\"form-element square\">
                        <label>
                          Description
                          <span>**</span>
                        </label>
                        <textarea id=\"overview\" name=\"description\" rows=\"12\" cols=\"80\" class=\"input-field-square\">";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 99), "html", null, true);
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
            // line 123
            if ( !($context["user"] ?? null)) {
                // line 124
                echo "
                                    <div class=\"row\">
                                
                                        <div class=\"col-md-6\">
                                            <h3 class=\"";
                // line 128
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 128), "id", [], "any", false, false, false, 128) == "register")) {
                    echo "active";
                }
                echo "\"><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
                echo "\">Créer un compte</a></h3>
                                            ";
                // line 129
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 130
                echo "                                        </div>
                                
                                    </div>
                                
                                ";
            } else {
                // line 135
                echo "                                
                                ";
            }
            // line 137
            echo "                            </div><!-- login form wrapper end -->
                        </div>
                        <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">

                            <div class=\"singup-form-wrapper\">
                                ";
            // line 142
            if ( !($context["user"] ?? null)) {
                // line 143
                echo "                                
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            ";
                // line 146
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 147
                echo "                                        </div>
                                
                                    </div>
                                
                                ";
            } else {
                // line 152
                echo "                                
                                ";
            }
            // line 154
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
        return "C:\\wamp64\\www\\install-master/plugins/event/event/components/manageeventedit/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 154,  286 => 152,  279 => 147,  275 => 146,  270 => 143,  268 => 142,  261 => 137,  257 => 135,  250 => 130,  246 => 129,  238 => 128,  232 => 124,  230 => 123,  203 => 99,  192 => 91,  186 => 87,  183 => 86,  171 => 82,  167 => 80,  163 => 79,  160 => 78,  158 => 77,  154 => 75,  146 => 69,  138 => 63,  136 => 62,  129 => 58,  120 => 52,  111 => 45,  100 => 43,  96 => 42,  73 => 21,  70 => 20,  64 => 18,  62 => 17,  57 => 15,  49 => 10,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in __SELF__.loadEvents() %}
<div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 my-5\">
                <h3 class=\"py-3\">Mise a jour de l'évènement</h3>
                <form class=\"contact-from-wrapper\" data-request=\"onSave\">
                    <div class=\"form-element square\">
                        <label>Nom de l'évènement
                        </label>
                        <input type=\"text\" name=\"nom\" value=\"{{item.nom}}\" placeholder=\"Entre le nom...\" class=\"input-field-square\">
                                            </div>
                                            <div class=\"form-element square\">
                                                    <label>Lieu
                                                    </label>
                                                    <input type=\"text\" name=\"lieu\" value=\"{{item.lieu}}\" placeholder=\"Entre le nom...\" class=\"input-field-square\">
                                                                        </div>
                                            {% if user %}
                                            <input type=\"hidden\" name=\"user\" value=\" {{ user.id }}\">
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
                                <input type=\"file\" name=\"d_image\">
                            </span>
                            <a href=\"javascript:;\" class=\"btn red fileinput-exists\" data-dismiss=\"fileinput\"> Remove </a>
                        </div>
                                            </div>

                    <div class=\"form-element square\">
                        <label>Category
                        </label>
                        <select class=\"input-field-square\" name=\"category\" value=\"\">
                                {% for item in __SELF__.loadSubs() %}
                                <option value=\"{{ item.id }}\">{{ item.nom_type }}</option>
                                 {% endfor %}
                                                                              </select>
                                            </div>

                    <div class=\"form-element square\">
                        <label>Date de l'évènement
                            <span>**</span>
                        </label>
                        <input type=\"date\" name=\"date_debut\" value=\"{{item.periode.date_debut}}\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                    </div>
                    <div class=\"form-element square\">
                        <label>Date de cloture des ventes
                            <span>**</span>
                        </label>
                        <input type=\"date\" name=\"date_cloture\" value=\"{{item.periode.date_cloture}}\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                    </div>

                    <div class=\"form-element square\">
                            {% if item.gratuit %}
                            <div class=\"custom-control custom-checkbox\">
                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultUncheck\" name=\"gratuit\" checked>
                                    <label class=\"custom-control-label\" for=\"defaultUncheck\">Gratuit</label>
                                
                                </div>
                        {% else %}
                        <div class=\"custom-control custom-checkbox\">
                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultUncheck\" name=\"nongratuit\" >
                                <label class=\"custom-control-label\" for=\"defaultUncheck\">Gratuit</label>
                            
                            </div>
                        {% endif %}
                            
                       </div>
                    {%if __SELF__.loadSevent() %}
                    <label><strong> sous évènements</strong></label>
                      {% for item in __SELF__.loadSevent()%}
                      <div class=\"row\">
                            <div class=\"col-md-4\" style=\"margin-bottom: 5px;\">
                          <a class=\"btn btn-primary btn-sm\" href=\"{{ 'modif_sub'|page({sub_id:item.sub_id}) }}\" class=\"action-btn\">{{item.sub.nom}}</a>
                          </div>
                      </div>
                        {%endfor%}
                    {%endif%}
                    <div class=\"form-element square\">
                        <label>Nombre de ticket
                            <span>**</span>
                        </label>
                        <input type=\"number\" name=\"nbrticket\" value=\"{{item.nombre_ticket}}\" placeholder=\"Enter minimum number of persons...\" class=\"input-field-square\">
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
{%endfor%}", "C:\\wamp64\\www\\install-master/plugins/event/event/components/manageeventedit/default.htm", "");
    }
}
