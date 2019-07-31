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

/* C:\wamp64\www\install-master/themes/demo/partials/events/eventexpire.htm */
class __TwigTemplate_c30e6341404abffd0d3f26133f51db2ce66b89e9f474cb9cdfecea215f026873 extends \Twig\Template
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
        if (twig_length_filter($this->env, ($context["events"] ?? null))) {
            // line 2
            echo "<div class=\"row\">
   ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "   ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "periode", [], "any", false, false, false, 4), "date_cloture", [], "any", false, false, false, 4) < twig_date_converter($this->env))) {
                    // line 5
                    echo " 
   <div class=\"col-lg-4 col-sm-6\" >
           <div class=\"single-ico-list-box\">
               <div class=\"thumb\">
               <a href=\"event/show/effective-communication-skills.html\" target=\"_blank\">
               <img src=\" ";
                    // line 10
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 10), "html", null, true);
                    echo "\" alt=\"\">                                       
               </div>
               <div class=\"content\">
                   <p style=\"margin:0px;clear:both;\"></p>
                   <h4 style=\"color:#10ac84;\">";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 14), "html", null, true);
                    echo "</h4>
                   <p><strong><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Prx: </strong>";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant", [], "any", false, false, false, 15), "html", null, true);
                    echo " FCFA</p>
                   <p><strong><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> Date d'expiration: </strong>";
                    // line 16
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "periode", [], "any", false, false, false, 16), "date_cloture", [], "any", false, false, false, 16), "html", null, true);
                    echo "</p>
                   <p> <a  href=\"";
                    // line 17
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("description_event", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 17)]);
                    echo "\"  >
                        <i class=\"fa fa-caret-right\"></i> <span class=\"title\">Abonner</span></a></p>
                   <a  href=\"";
                    // line 19
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("description_event", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 19)]);
                    echo "\"  class=\"boxed-btn-rounded\">
                   <i class=\"fa fa-caret-right\"></i> <span class=\"title\">Details</span></a>
               </div>
           </div>
       </div>
       ";
                } else {
                    // line 25
                    echo "      
       ";
                }
                // line 27
                echo "     
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "
</div>


";
        } else {
            // line 34
            echo "<div class=\"row\" class=\"text-center\">
        <h3 class=\"\">NO  TICKETS expire FOUND</h3>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/demo/partials/events/eventexpire.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 34,  98 => 29,  91 => 27,  87 => 25,  78 => 19,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  54 => 10,  47 => 5,  44 => 4,  40 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if events|length%}
<div class=\"row\">
   {% for item in events %}
   {% if item.periode.date_cloture < date()%}
 
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
                   <p> <a  href=\"{{ 'description_event'|page({ event_id: item.id }) }}\"  >
                        <i class=\"fa fa-caret-right\"></i> <span class=\"title\">Abonner</span></a></p>
                   <a  href=\"{{ 'description_event'|page({ event_id: item.id }) }}\"  class=\"boxed-btn-rounded\">
                   <i class=\"fa fa-caret-right\"></i> <span class=\"title\">Details</span></a>
               </div>
           </div>
       </div>
       {%else%}
      
       {%endif%}
     
 {% endfor %}

</div>


{%else%}
<div class=\"row\" class=\"text-center\">
        <h3 class=\"\">NO  TICKETS expire FOUND</h3>
    </div>
{%endif%}", "C:\\wamp64\\www\\install-master/themes/demo/partials/events/eventexpire.htm", "");
    }
}
