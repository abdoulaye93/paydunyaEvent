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

/* C:\wamp64\www\install-master/themes/demo/partials/events/events.htm */
class __TwigTemplate_a64fc31de1a585d059abe002dd8dd5057f62e0fb26814bf43a8ab4edcdbb4e8e extends \Twig\Template
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
                echo "   <div class=\"col-lg-4 col-sm-6\" >
           <div class=\"single-ico-list-box\">
               <div class=\"thumb\">
               <a href=\"event/show/effective-communication-skills.html\" target=\"_blank\">
               <img src=\" ";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 8), "html", null, true);
                echo "\" alt=\"\">                                       
               </div>
               <div class=\"content\">
                   <p style=\"margin:0px;clear:both;\"></p>
                   <h4 style=\"color:#10ac84;\">";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 12), "html", null, true);
                echo "</h4>
                   <p><strong><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Prx: </strong>";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant", [], "any", false, false, false, 13), "html", null, true);
                echo " FCFA</p>
                   <p><strong><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> Date d'expiration: </strong>";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "periode", [], "any", false, false, false, 14), "date_cloture", [], "any", false, false, false, 14), "html", null, true);
                echo "</p>
                   ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["item"], "position_id", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "                        <p> 
                            <a  href=\"";
                    // line 17
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("position", ["lat" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "position", [], "any", false, false, false, 17), "lat", [], "any", false, false, false, 17), "long" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "position", [], "any", false, false, false, 17), "long", [], "any", false, false, false, 17)]);
                    echo "\"  >

                                <i class=\"fa fa-caret-right\"></i> 
                                <span class=\"title\">
                                    Position
                                </span>
                            </a>
                        </p>
                    ";
                }
                // line 26
                echo "                   <a  href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("description_event", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 26)]);
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
            // line 32
            echo "</div>


";
        } else {
            // line 36
            echo "<div class=\"row\" class=\"text-center\">
       <h3 class=\"\">NO  TICKETS FOUND</h3>
   </div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/demo/partials/events/events.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  99 => 32,  86 => 26,  74 => 17,  71 => 16,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  50 => 8,  44 => 4,  40 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if events|length%}
<div class=\"row\">
   {% for item in events %}
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
                   {%if item.position_id%}
                        <p> 
                            <a  href=\"{{ 'position'|page({lat:item.position.lat,long:item.position.long}) }}\"  >

                                <i class=\"fa fa-caret-right\"></i> 
                                <span class=\"title\">
                                    Position
                                </span>
                            </a>
                        </p>
                    {%endif%}
                   <a  href=\"{{ 'description_event'|page({ event_id: item.id }) }}\"  class=\"boxed-btn-rounded\">
                   <i class=\"fa fa-caret-right\"></i> <span class=\"title\">Details</span></a>
               </div>
           </div>
       </div>
 {% endfor %}
</div>


{%else%}
<div class=\"row\" class=\"text-center\">
       <h3 class=\"\">NO  TICKETS FOUND</h3>
   </div>
{%endif%}", "C:\\wamp64\\www\\install-master/themes/demo/partials/events/events.htm", "");
    }
}
