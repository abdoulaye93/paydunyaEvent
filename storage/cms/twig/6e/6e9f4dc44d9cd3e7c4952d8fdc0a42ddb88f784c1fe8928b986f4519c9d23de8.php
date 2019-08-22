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

/* C:\wamp64\www\install-master1/themes/demo/layouts/about.htm */
class __TwigTemplate_7fff985b6bde8ca2fb031cc4f0cf7330e8233f86facc6509a935e6e519ad82b0 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"UTF-8\">

  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Tangerine\">

  <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">

  <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>

  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>

  <style>
    #II {
      background-image: url(\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/ad_images/bgFixed.jpg");
        echo "\");
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      padding: 80px;

      color: #fff;
    }

    #II2 {
      background-image: url(\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/ad_images/bgFixed.jpg");
        echo "\");
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      padding: 60px;

      color: #fff;
    }

    #II3 {
      background-image: url(\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/ad_images/lg.png");
        echo "\");
      /* background-size: cover; */
      /* background-attachment: fixed; */
      background-repeat: no-repeat;
      padding: 50px;

      color: #fff;
    }

    .color-nav {
      background-color: #491105;
    }

    .color-paydunya {
      background-color: #1894dd;
    }

    .color {
      color: #000;
    }

    .color-orange {
      color: orange;
    }

    #ICON {
      -webkit-animation: rotation 2s infinite linear;
    }

    @-webkit-keyframes rotation {
      from {
        -webkit-transform: rotate(0deg);
      }

      to {
        -webkit-transform: rotate(359deg);
      }
    }
  </style>

  <title>Document</title>
</head>

<body>


    <header id=\"layout-header\">
        ";
        // line 91
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 92
        echo "    </header>
    <section id=\"layout-content\">
        ";
        // line 94
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 95
        echo "    </section>
  <footer id=\"layout-footer\">
      ";
        // line 97
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 98
        echo "  </footer>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/layouts/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 98,  150 => 97,  146 => 95,  144 => 94,  140 => 92,  136 => 91,  86 => 44,  73 => 34,  60 => 24,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"UTF-8\">

  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Tangerine\">

  <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">

  <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>

  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>

  <style>
    #II {
      background-image: url(\"{{ 'assets/user/ad_images/bgFixed.jpg'|theme }}\");
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      padding: 80px;

      color: #fff;
    }

    #II2 {
      background-image: url(\"{{ 'assets/user/ad_images/bgFixed.jpg'|theme }}\");
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      padding: 60px;

      color: #fff;
    }

    #II3 {
      background-image: url(\"{{ 'assets/user/ad_images/lg.png'|theme }}\");
      /* background-size: cover; */
      /* background-attachment: fixed; */
      background-repeat: no-repeat;
      padding: 50px;

      color: #fff;
    }

    .color-nav {
      background-color: #491105;
    }

    .color-paydunya {
      background-color: #1894dd;
    }

    .color {
      color: #000;
    }

    .color-orange {
      color: orange;
    }

    #ICON {
      -webkit-animation: rotation 2s infinite linear;
    }

    @-webkit-keyframes rotation {
      from {
        -webkit-transform: rotate(0deg);
      }

      to {
        -webkit-transform: rotate(359deg);
      }
    }
  </style>

  <title>Document</title>
</head>

<body>


    <header id=\"layout-header\">
        {% partial 'site/header' %}
    </header>
    <section id=\"layout-content\">
        {% page %}
    </section>
  <footer id=\"layout-footer\">
      {% partial 'site/footer' %}
  </footer>

</body>

</html>", "C:\\wamp64\\www\\install-master1/themes/demo/layouts/about.htm", "");
    }
}
