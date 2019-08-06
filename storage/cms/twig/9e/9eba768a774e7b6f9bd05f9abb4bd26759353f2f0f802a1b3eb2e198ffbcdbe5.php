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

/* C:\wamp64\www\install-master1/themes/demo/partials/categorieevent/category.htm */
class __TwigTemplate_dfb83e66c8338c9d15b9734dbc37f57f6720ece7030bf11e2b19204a3b5b5993 extends \Twig\Template
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
        echo "<div  class=\"form-element square\">
        <label>Category&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type=\"checkbox\" name=\"checkbox\">&nbsp&nbspautre
        </label>
        <select class=\"input-field-square\" id=\"ca\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorie"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cati"]) {
            // line 7
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cati"], "id", [], "any", false, false, false, 7), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cati"], "categorie", [], "any", false, false, false, 7), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cati'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </select>
      </div>
     
     <script>
             var checkbox = document.querySelector(\"input[name=checkbox]\");

checkbox.addEventListener( 'change', function() {
    if(this.checked) {
        var pi=document.getElementById('pi');
        var div = document.createElement('div');
        div.setAttribute('id','gp');
        var lab = document.createElement('label');
        lab.innerHTML=\"Entrer le nom de la categorie\";
        var input = document.createElement('input');
        input.setAttribute('type','text');
        input.setAttribute('class','input-field-square');
        input.setAttribute('name','cate');
        input.setAttribute('placeholder','Entrer le nom de la cat..');
        div.appendChild(lab);
        div.appendChild(input);
        pi.appendChild(div);
    } else {
        document.getElementById('gp').remove();
    }
});

  </script>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/partials/categorieevent/category.htm";
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
        return new Source("<div  class=\"form-element square\">
        <label>Category&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type=\"checkbox\" name=\"checkbox\">&nbsp&nbspautre
        </label>
        <select class=\"input-field-square\" id=\"ca\">
            {% for cati in categorie %}
                    <option value=\"{{cati.id}}\">{{ cati.categorie }}</option>
            {% endfor %}
        </select>
      </div>
     
     <script>
             var checkbox = document.querySelector(\"input[name=checkbox]\");

checkbox.addEventListener( 'change', function() {
    if(this.checked) {
        var pi=document.getElementById('pi');
        var div = document.createElement('div');
        div.setAttribute('id','gp');
        var lab = document.createElement('label');
        lab.innerHTML=\"Entrer le nom de la categorie\";
        var input = document.createElement('input');
        input.setAttribute('type','text');
        input.setAttribute('class','input-field-square');
        input.setAttribute('name','cate');
        input.setAttribute('placeholder','Entrer le nom de la cat..');
        div.appendChild(lab);
        div.appendChild(input);
        pi.appendChild(div);
    } else {
        document.getElementById('gp').remove();
    }
});

  </script>", "C:\\wamp64\\www\\install-master1/themes/demo/partials/categorieevent/category.htm", "");
    }
}
