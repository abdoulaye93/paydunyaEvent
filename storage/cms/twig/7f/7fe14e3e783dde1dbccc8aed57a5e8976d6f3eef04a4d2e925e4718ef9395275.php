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

/* C:\wamp64\www\install-master1/themes/demo/pages/retour_achat.htm */
class __TwigTemplate_d7d19946a95db96d8c36da909f930630b203b7b97689b7a790f1a02558d9ed6c extends \Twig\Template
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
        echo "<!--<div class=\"container\" style=\"height: 1000px;\">
    <a href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ticket", ["nom_type_ticket" => ($context["nomticket"] ?? null), "nbr_ticket" => ($context["nbrticket"] ?? null), "montant" => ($context["montant"] ?? null), "id_event" => ($context["id"] ?? null)]);
        echo "\" onclick=\"edition();return false;\">Imprimer le ticket</a>
    <a href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("calendar", ["date" => ($context["dateEv"] ?? null), "email" => ($context["mail"] ?? null), "nom" => ($context["nomevent"] ?? null), "description" => ($context["description"] ?? null), "lieu" => ($context["lieu"] ?? null)]);
        echo "\">Ajouter à votre calendar</a>";
        echo twig_escape_filter($this->env, ($context["lieu"] ?? null), "html", null, true);
        echo "
</div>-->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/pages/retour_achat.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--<div class=\"container\" style=\"height: 1000px;\">
    <a href=\"{{'ticket'|page({nom_type_ticket:nomticket,nbr_ticket:nbrticket,montant:montant,id_event:id})}}\" onclick=\"edition();return false;\">Imprimer le ticket</a>
    <a href=\"{{'calendar'|page({date:dateEv,email:mail,nom:nomevent,description:description,lieu:lieu})}}\">Ajouter à votre calendar</a>{{lieu}}
</div>-->", "C:\\wamp64\\www\\install-master1/themes/demo/pages/retour_achat.htm", "");
    }
}
