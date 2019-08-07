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

/* C:\wamp64\www\install-master1/themes/demo/layouts/ticket.htm */
class __TwigTemplate_6fcbab4712869f62c1bceb2c467e4f35a681cafb4609905d837c26356082061f extends \Twig\Template
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
        echo "<script type=\"text/javascript\"> window.print() ; </script>

<div>
    hehhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
    nom de event";
        // line 5
        if (twig_length_filter($this->env, ($context["event"] ?? null))) {
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["event"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 5), "html", null, true);
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
        }
        echo " nom ";
        echo twig_escape_filter($this->env, ($context["nomticket"] ?? null), "html", null, true);
        echo " nbr  ";
        echo twig_escape_filter($this->env, ($context["nbrticket"] ?? null), "html", null, true);
        echo "   montant";
        echo twig_escape_filter($this->env, ($context["montant"] ?? null), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/layouts/ticket.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\"> window.print() ; </script>

<div>
    hehhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
    nom de event{% if event|length%} {%for item in event%} {{item.nom}} {%endfor%} {%endif%} nom {{nomticket }} nbr  {{nbrticket}}   montant{{montant }}
</div>", "C:\\wamp64\\www\\install-master1/themes/demo/layouts/ticket.htm", "");
    }
}
