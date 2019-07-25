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

/* C:\wamp64\www\install-master/themes/demo/partials/events/eventactive.htm */
class __TwigTemplate_f408b310af65a92f0c722a38b60e7cdc885ae1f88c7637a98a9698e145073d91 extends \Twig\Template
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
        if (twig_length_filter($this->env, ($context["eventsactive"] ?? null))) {
            // line 2
            echo "<div class=\"row\">
   ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["eventsactive"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "      
   <div class=\"col-lg-4 col-sm-6\" >
           <div class=\"single-ico-list-box\">
               <div class=\"thumb\">
               <a href=\"event/show/effective-communication-skills.html\" target=\"_blank\">
               <img src=\" ";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 9), "html", null, true);
                echo "\" alt=\"\">                                       
               </div>
               <div class=\"content\">
                   <p style=\"margin:0px;clear:both;\"></p>
                   <h4 style=\"color:#10ac84;\">";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 13), "html", null, true);
                echo "</h4>
                   <p><strong><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Prx: </strong>";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant", [], "any", false, false, false, 14), "html", null, true);
                echo " FCFA</p>
                   <p><strong><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> Date d'expiration: </strong>";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "periode", [], "any", false, false, false, 15), "date_cloture", [], "any", false, false, false, 15), "html", null, true);
                echo "</p>
                   <a  href=\"";
                // line 16
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("description_event", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 16)]);
                echo "\"  class=\"boxed-btn-rounded\">
                   <i class=\"fa fa-caret-right\"></i> <span class=\"title\">Details</span></a>
               </div>
           </div>
       </div>
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "</div>
<div class=\"text-center\">
   <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-featured-tickets.html\">Show More</a>
</div>

";
        } else {
            // line 28
            echo "<div class=\"row\" style=\"text-align:center;display:block;\">
       <h3 class=\"\">NO  TICKETS FOUND</h3>
   </div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/demo/partials/events/eventactive.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  82 => 22,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  51 => 9,  44 => 4,  40 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if eventsactive|length%}
<div class=\"row\">
   {% for item in eventsactive %}
      
   <div class=\"col-lg-4 col-sm-6\" >
           <div class=\"single-ico-list-box\">
               <div class=\"thumb\">
               <a href=\"event/show/effective-communication-skills.html\" target=\"_blank\">
               <img src=\" {{item.image}}\" alt=\"\">                                       
               </div>
               <div class=\"content\">
                   <p style=\"margin:0px;clear:both;\"></p>
                   <h4 style=\"color:#10ac84;\">{{ item.nom }}</h4>
                   <p><strong><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Prx: </strong>{{ item.montant }} FCFA</p>
                   <p><strong><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> Date d'expiration: </strong>{{ item.periode.date_cloture }}</p>
                   <a  href=\"{{ 'description_event'|page({ event_id: item.id }) }}\"  class=\"boxed-btn-rounded\">
                   <i class=\"fa fa-caret-right\"></i> <span class=\"title\">Details</span></a>
               </div>
           </div>
       </div>
 {% endfor %}
</div>
<div class=\"text-center\">
   <a target=\"_blank\" class=\"btn btn-primary\" href=\"all-featured-tickets.html\">Show More</a>
</div>

{%else%}
<div class=\"row\" style=\"text-align:center;display:block;\">
       <h3 class=\"\">NO  TICKETS FOUND</h3>
   </div>
{%endif%}", "C:\\wamp64\\www\\install-master/themes/demo/partials/events/eventactive.htm", "");
    }
}
