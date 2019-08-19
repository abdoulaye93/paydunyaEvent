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

/* C:\wamp64\www\install-master1/plugins/rainlab/user/components/account/default.htm */
class __TwigTemplate_b428f65817eb0348c5dbf7cdb8395dcf26a329633c29be3a9eb26d7a308960f6 extends \Twig\Template
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
        if ( !($context["user"] ?? null)) {
            // line 2
            echo "
    <div class=\"row\">

        <div class=\"col-md-6\">
            <h3>Sign in</h3>
            ";
            // line 7
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 8
            echo "        </div>

        <div class=\"col-md-6\">
            ";
            // line 11
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 12
            echo "        </div>

    </div>

";
        } else {
            // line 17
            echo "
    ";
            // line 18
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 19
            echo "
    ";
            // line 20
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::update")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 21
            echo "
    ";
            // line 22
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 23
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/plugins/rainlab/user/components/account/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  81 => 22,  78 => 21,  74 => 20,  71 => 19,  67 => 18,  64 => 17,  57 => 12,  53 => 11,  48 => 8,  44 => 7,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not user %}

    <div class=\"row\">

        <div class=\"col-md-6\">
            <h3>Sign in</h3>
            {% partial __SELF__ ~ '::signin' %}
        </div>

        <div class=\"col-md-6\">
            {% partial __SELF__ ~ '::register' %}
        </div>

    </div>

{% else %}

    {% partial __SELF__ ~ '::activation_check' %}

    {% partial __SELF__ ~ '::update' %}

    {% partial __SELF__ ~ '::deactivate_link' %}

{% endif %}
", "C:\\wamp64\\www\\install-master1/plugins/rainlab/user/components/account/default.htm", "");
    }
}
