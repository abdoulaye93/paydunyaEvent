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

/* C:\wamp64\www\install-master1/plugins/payment/payment/components/createconfig/default.htm */
class __TwigTemplate_d5355a6ba8cd8af1dbe11d87bbfb033ff2483b795758dec840d3327fbfd043c0 extends \Twig\Template
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
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 1
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 2
            echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
            <br>
                <p class=\"bg-success\">";
            // line 6
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
            </div>
        </div>
    </div>
";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 11
        echo "
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"card my-5\" style=\"width:100%;\">
          <div class=\"card-body\" style=\"background-color:#7d5fff\">
            <h3 style=\"color:white;\">Configuration du module de paiement</h3>
          </div>
          <div class=\"card-body\">
          <div class=\"jumbotron\">
            <p style=\"font-size: 1.5em;\">Avertissement : </p>
          <strong>Veuillez renseigner soit les paramètres de test, soit les paramètres de production.
          Nous vous conseillons de procéder d'abord à des tests en renseignant les paramètres de test, avant de les enlever et de passer en mode production !</strong></div>
            <div class=\"col-md-12\">
                <form class=\"contact-from-wrapper\" data-request=\"onSave\" data-request-files data-request-flash>
                        ";
        // line 25
        if (($context["user"] ?? null)) {
            // line 26
            echo "                        <input type=\"hidden\" name=\"id_user\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
                    ";
        } else {
            // line 28
            echo "                    ";
        }
        // line 29
        echo "                    <div class=\"form-element square\">
                        <label for=\"master_key\">Master key
                            <span>**</span>
                        </label>
                        <input type=\"text\" required id=\"master_key\" name=\"master_key\" placeholder=\"Votre clé principale...\" ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "config", [], "any", false, false, false, 33)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "config", [], "any", false, false, false, 33), "master_key", [], "any", false, false, false, 33), "html", null, true);
            echo "\" ";
        }
        echo " class=\"input-field-square\">
                    </div>
                    <div class=\"row\">
                      <div class=\"col-md-4\">
                            <div class=\"form-element square\">
                                <label for=\"private_key_test\">Private test key
                                </label>
                                <input type=\"text\" id=\"private_key_test\" ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "config", [], "any", false, false, false, 40)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "config", [], "any", false, false, false, 40), "private_key_test", [], "any", false, false, false, 40), "html", null, true);
            echo "\" ";
        }
        echo " placeholder=\"Votre clé privée de test...\" name=\"private_key_test\" value=\"\" class=\"input-field-square\">
                            </div>
                        </div>
                       <div class=\"col-md-4\">
                        <div class=\"form-element square\">
                            <label for=\"public_key_test\">Public test key
                            </label>
                            <input type=\"text\" id=\"public_key_test\" placeholder=\"Votre clé public de test...\" name=\"public_key_test\" ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "config", [], "any", false, false, false, 47)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "config", [], "any", false, false, false, 47), "public_key_test", [], "any", false, false, false, 47), "html", null, true);
            echo "\" ";
        }
        echo " class=\"input-field-square\">
                        </div>
                      </div>
                     
                       <div class=\"col-md-4\">
                        <div class=\"form-element square\">
                            <label for=\"token_test\">Token test
                            </label>
                            <input type=\"text\" id=\"token_test\" name=\"token_test\" placeholder=\"Votre token de test...\" ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "config", [], "any", false, false, false, 55)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "config", [], "any", false, false, false, 55), "token_test", [], "any", false, false, false, 55), "html", null, true);
            echo "\" ";
        }
        echo " class=\"input-field-square\">
                        </div>
                      </div>                                                
                        <div class=\"col-md-12\">
                        <div class=\"row\">
                                <div class=\"col-md-4\">
                                        <div class=\"form-element square\">
                                            <label for=\"private_key_prod\">Private production key</label>
                                            <input type=\"text\" id=\"private_key_prod\" name=\"private_key_prod\" placeholder=\"Votre clé privée de production...\" ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "config", [], "any", false, false, false, 63)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "config", [], "any", false, false, false, 63), "private_key_prod", [], "any", false, false, false, 63), "html", null, true);
            echo "\" ";
        }
        echo " class=\"input-field-square\" id=\"inputtype1\">
                                        </div>
                                 </div> 
                                <div class=\"col-md-4\">
                                    <div class=\"form-element square\">
                                        <label id=\"public_key_prod\">Public production key</label>
                                        <input type=\"text\" id=\"public_key_prod\" placeholder=\"Votre clé public de production...\" name=\"public_key_prod\" ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "config", [], "any", false, false, false, 69)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "config", [], "any", false, false, false, 69), "public_key_prod", [], "any", false, false, false, 69), "html", null, true);
            echo "\" ";
        }
        echo " class=\"input-field-square\" id=\"inputtype2\">
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"form-element square\">
                                        <label for=\"token_prod\">Token production</label>
                                        <input type=\"text\" id=\"token_prod\" placeholder=\"Votre token de production...\" name=\"token_prod\" ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "config", [], "any", false, false, false, 75)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "config", [], "any", false, false, false, 75), "token_prod", [], "any", false, false, false, 75), "html", null, true);
            echo "\" ";
        }
        echo " class=\"input-field-square\" id=\"inputtype2\">
                                    </div>
                                </div>
                        </div>
                        </div>

                        <div class=\"col-md-12\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"form-element square\">
                                        <label for=\"redirect\">Redirection</label>
                                        <select name=\"redirect\" id=\"redirect\" class=\"form-control\">
                                            <option value=\"true\">Oui</option>
                                            <option value=\"false\">Non</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"form-element square\">
                                        <label for=\"phone\">Telephone <span>**</span></label>
                                        <input type=\"text\" id=\"phone\" required placeholder=\"Votre numero de telephone...\" name=\"phone\" ";
        // line 95
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "config", [], "any", false, false, false, 95)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "config", [], "any", false, false, false, 95), "phone", [], "any", false, false, false, 95), "html", null, true);
            echo "\" ";
        }
        echo " class=\"input-field-square\" id=\"inputtype2\">
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"form-element square\">
                                        <label for=\"email\">Email <span>**</span></label>
                                        <input type=\"email\" required id=\"email\" placeholder=\"Votre adresse email...\" name=\"email\" ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "config", [], "any", false, false, false, 101)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "config", [], "any", false, false, false, 101), "email", [], "any", false, false, false, 101), "html", null, true);
            echo "\" ";
        }
        echo " class=\"input-field-square\" id=\"inputtype2\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                      <button type=\"submit\" class=\"submit-form-btn\">Valider</button>
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
        return "C:\\wamp64\\www\\install-master1/plugins/payment/payment/components/createconfig/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 101,  195 => 95,  168 => 75,  155 => 69,  142 => 63,  127 => 55,  112 => 47,  98 => 40,  84 => 33,  78 => 29,  75 => 28,  69 => 26,  67 => 25,  51 => 11,  43 => 6,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% flash success %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
            <br>
                <p class=\"bg-success\">{{ message }}</p>
            </div>
        </div>
    </div>
{% endflash %}

<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"card my-5\" style=\"width:100%;\">
          <div class=\"card-body\" style=\"background-color:#7d5fff\">
            <h3 style=\"color:white;\">Configuration du module de paiement</h3>
          </div>
          <div class=\"card-body\">
          <div class=\"jumbotron\">
            <p style=\"font-size: 1.5em;\">Avertissement : </p>
          <strong>Veuillez renseigner soit les paramètres de test, soit les paramètres de production.
          Nous vous conseillons de procéder d'abord à des tests en renseignant les paramètres de test, avant de les enlever et de passer en mode production !</strong></div>
            <div class=\"col-md-12\">
                <form class=\"contact-from-wrapper\" data-request=\"onSave\" data-request-files data-request-flash>
                        {% if user %}
                        <input type=\"hidden\" name=\"id_user\" value=\"{{ user.id }}\">
                    {% else %}
                    {% endif %}
                    <div class=\"form-element square\">
                        <label for=\"master_key\">Master key
                            <span>**</span>
                        </label>
                        <input type=\"text\" required id=\"master_key\" name=\"master_key\" placeholder=\"Votre clé principale...\" {% if __SELF__.config %} value=\"{{ __SELF__.config.master_key }}\" {% endif %} class=\"input-field-square\">
                    </div>
                    <div class=\"row\">
                      <div class=\"col-md-4\">
                            <div class=\"form-element square\">
                                <label for=\"private_key_test\">Private test key
                                </label>
                                <input type=\"text\" id=\"private_key_test\" {% if __SELF__.config %} value=\"{{ __SELF__.config.private_key_test }}\" {% endif %} placeholder=\"Votre clé privée de test...\" name=\"private_key_test\" value=\"\" class=\"input-field-square\">
                            </div>
                        </div>
                       <div class=\"col-md-4\">
                        <div class=\"form-element square\">
                            <label for=\"public_key_test\">Public test key
                            </label>
                            <input type=\"text\" id=\"public_key_test\" placeholder=\"Votre clé public de test...\" name=\"public_key_test\" {% if __SELF__.config %} value=\"{{ __SELF__.config.public_key_test }}\" {% endif %} class=\"input-field-square\">
                        </div>
                      </div>
                     
                       <div class=\"col-md-4\">
                        <div class=\"form-element square\">
                            <label for=\"token_test\">Token test
                            </label>
                            <input type=\"text\" id=\"token_test\" name=\"token_test\" placeholder=\"Votre token de test...\" {% if __SELF__.config %} value=\"{{ __SELF__.config.token_test }}\" {% endif %} class=\"input-field-square\">
                        </div>
                      </div>                                                
                        <div class=\"col-md-12\">
                        <div class=\"row\">
                                <div class=\"col-md-4\">
                                        <div class=\"form-element square\">
                                            <label for=\"private_key_prod\">Private production key</label>
                                            <input type=\"text\" id=\"private_key_prod\" name=\"private_key_prod\" placeholder=\"Votre clé privée de production...\" {% if __SELF__.config %} value=\"{{ __SELF__.config.private_key_prod }}\" {% endif %} class=\"input-field-square\" id=\"inputtype1\">
                                        </div>
                                 </div> 
                                <div class=\"col-md-4\">
                                    <div class=\"form-element square\">
                                        <label id=\"public_key_prod\">Public production key</label>
                                        <input type=\"text\" id=\"public_key_prod\" placeholder=\"Votre clé public de production...\" name=\"public_key_prod\" {% if __SELF__.config %} value=\"{{ __SELF__.config.public_key_prod }}\" {% endif %} class=\"input-field-square\" id=\"inputtype2\">
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"form-element square\">
                                        <label for=\"token_prod\">Token production</label>
                                        <input type=\"text\" id=\"token_prod\" placeholder=\"Votre token de production...\" name=\"token_prod\" {% if __SELF__.config %} value=\"{{ __SELF__.config.token_prod }}\" {% endif %} class=\"input-field-square\" id=\"inputtype2\">
                                    </div>
                                </div>
                        </div>
                        </div>

                        <div class=\"col-md-12\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"form-element square\">
                                        <label for=\"redirect\">Redirection</label>
                                        <select name=\"redirect\" id=\"redirect\" class=\"form-control\">
                                            <option value=\"true\">Oui</option>
                                            <option value=\"false\">Non</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"form-element square\">
                                        <label for=\"phone\">Telephone <span>**</span></label>
                                        <input type=\"text\" id=\"phone\" required placeholder=\"Votre numero de telephone...\" name=\"phone\" {% if __SELF__.config %} value=\"{{ __SELF__.config.phone }}\" {% endif %} class=\"input-field-square\" id=\"inputtype2\">
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"form-element square\">
                                        <label for=\"email\">Email <span>**</span></label>
                                        <input type=\"email\" required id=\"email\" placeholder=\"Votre adresse email...\" name=\"email\" {% if __SELF__.config %} value=\"{{ __SELF__.config.email }}\" {% endif %} class=\"input-field-square\" id=\"inputtype2\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                      <button type=\"submit\" class=\"submit-form-btn\">Valider</button>
                    </div>

                </form>
            </div>
          </div>
        </div>

    </div>
</div>", "C:\\wamp64\\www\\install-master1/plugins/payment/payment/components/createconfig/default.htm", "");
    }
}
