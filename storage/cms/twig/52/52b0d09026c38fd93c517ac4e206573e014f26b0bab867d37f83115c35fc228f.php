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

/* C:\wamp64\www\install-master1/themes/demo/partials/typeevent/type.htm */
class __TwigTemplate_7b28c6af59d0a4e2347211899d615709a11c447caf2ba2938acfc8a5a53a817f extends \Twig\Template
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
        echo "<div  class=\"form-element square\" id=\"type\" >
        <label>Types&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <a class=\"\" href=\"#\" data-toggle=\"modal\" data-target=\"#autre-modal\" class=\"action-btn\"> autre</a>
        </label>
        <select class=\"input-field-square\"  onchange=\"protyp( this.value)\" name=\"category\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nom_type", [], "any", false, false, false, 7), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </select>
      </div>
    
     <script>
             function protyp(po){
        var cat=document.getElementById('ca').options.length;
        for(var i=0;i<cat;i++){
                if(JSON.parse(po).categorie_id==document.getElementById('ca').options[i].value){
                        document.getElementById('ca').options[i].selected=true; 
                }
        }
        
}
   
     </script>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/typeevent/type.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  46 => 7,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div  class=\"form-element square\" id=\"type\" >
        <label>Types&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <a class=\"\" href=\"#\" data-toggle=\"modal\" data-target=\"#autre-modal\" class=\"action-btn\"> autre</a>
        </label>
        <select class=\"input-field-square\"  onchange=\"protyp( this.value)\" name=\"category\">
            {% for i in types %}
                    <option value=\"{{i}}\">{{ i.nom_type }}</option>
            {% endfor %}
        </select>
      </div>
    
     <script>
             function protyp(po){
        var cat=document.getElementById('ca').options.length;
        for(var i=0;i<cat;i++){
                if(JSON.parse(po).categorie_id==document.getElementById('ca').options[i].value){
                        document.getElementById('ca').options[i].selected=true; 
                }
        }
        
}
   
     </script>", "C:\\wamp64\\www\\install-master1/themes/demo/partials/typeevent/type.htm", "");
    }
}
