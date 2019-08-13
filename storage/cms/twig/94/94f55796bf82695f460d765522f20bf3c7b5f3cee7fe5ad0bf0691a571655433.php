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

/* C:\wamp64\www\install-master1/themes/demo/partials/events/events.htm */
class __TwigTemplate_67ee04c23b30a6fce510a9bfa090f796705d1a924d15eeb7bfa1bc81cec3eddb extends \Twig\Template
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
            echo "<div class=\"row bg-transparent no-gutters  \">
   ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "   ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "publier", [], "any", false, false, false, 4)) {
                    // line 5
                    echo "   <div class=\"col-lg-4 col-sm-6  m-0\" >
           <div class=\"single-ico-list-box\">
               <div class=\"thumb bg-transparent\">
               <a href=\"event/show/effective-communication-skills.html\" target=\"_blank\">
               <img class=\"img-fluid border border-circle\" src=\" ";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 9), "html", null, true);
                    echo "\" alt=\"\">                                       
               </div>
               <div class=\"content \">
                   <p style=\"margin:0px;clear:both;\"></p>
                   <h4 class=\"border border-circle text-uppercase\" style=\"color: #0070B2\">";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 13), "html", null, true);
                    echo "</h4>
                   <p><strong class=\"\"><i class=\"fa fa-money text-white fa-2x\" aria-hidden=\"true\"></i> Prix : </strong>";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "montant", [], "any", false, false, false, 14), "html", null, true);
                    echo " FCFA</p>
                   <p><strong><i class=\"fa  fa-2x fa-calendar\" aria-hidden=\"true\"></i> Date d'expiration: </strong>";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "periode", [], "any", false, false, false, 15), "date_cloture", [], "any", false, false, false, 15), "html", null, true);
                    echo "</p>
                   ";
                    // line 16
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "position_id", [], "any", false, false, false, 16)) {
                        // line 17
                        echo "                        <p> 
                            <a  href=\"";
                        // line 18
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("position", ["lat" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "position", [], "any", false, false, false, 18), "lat", [], "any", false, false, false, 18), "long" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "position", [], "any", false, false, false, 18), "long", [], "any", false, false, false, 18)]);
                        echo "\"  >

                                <i class=\"fa fa-caret-right\"></i> 
                                <span class=\"title\">
                                    Position
                                </span>
                            </a>
                        </p>
                    ";
                    }
                    // line 27
                    echo "                   <a  href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("description_event", ["event_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 27)]);
                    echo "\"  class=\"boxed-btn-rounded\">
                   <i class=\"fa fa-caret-right\"></i> <span class=\"title\">Details</span></a>
               </div>
           </div>
       </div>
";
                }
                // line 33
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "</div>


";
        } else {
            // line 38
            echo "<div class=\"row\" class=\"text-center\">
       <h3 class=\"\">NO  TICKETS FOUND</h3>
   </div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/events/events.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 38,  105 => 34,  99 => 33,  89 => 27,  77 => 18,  74 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  53 => 9,  47 => 5,  44 => 4,  40 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if events|length%}
<div class=\"row bg-transparent no-gutters  \">
   {% for item in events %}
   {% if item.publier%}
   <div class=\"col-lg-4 col-sm-6  m-0\" >
           <div class=\"single-ico-list-box\">
               <div class=\"thumb bg-transparent\">
               <a href=\"event/show/effective-communication-skills.html\" target=\"_blank\">
               <img class=\"img-fluid border border-circle\" src=\" {{item.image}}\" alt=\"\">                                       
               </div>
               <div class=\"content \">
                   <p style=\"margin:0px;clear:both;\"></p>
                   <h4 class=\"border border-circle text-uppercase\" style=\"color: #0070B2\">{{ item.nom }}</h4>
                   <p><strong class=\"\"><i class=\"fa fa-money text-white fa-2x\" aria-hidden=\"true\"></i> Prix : </strong>{{ item.montant }} FCFA</p>
                   <p><strong><i class=\"fa  fa-2x fa-calendar\" aria-hidden=\"true\"></i> Date d'expiration: </strong>{{ item.periode.date_cloture }}</p>
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
{%endif%}
 {% endfor %}
</div>


{%else%}
<div class=\"row\" class=\"text-center\">
       <h3 class=\"\">NO  TICKETS FOUND</h3>
   </div>
{%endif%}", "C:\\wamp64\\www\\install-master1/themes/demo/partials/events/events.htm", "");
    }
}
