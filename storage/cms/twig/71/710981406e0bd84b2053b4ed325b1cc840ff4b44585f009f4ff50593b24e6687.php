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

/* C:\wamp64\www\install-master1/themes/demo/layouts/position.htm */
class __TwigTemplate_af82a7ec50d28d488137b4d3a7d0d849f9d9cf7b3a3172448829e57efc90cbe6 extends \Twig\Template
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
<html>
  <head>
    <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\">
    <meta charset=\"utf-8\">
    <title>Custom Controls</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css\">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
 <section id=\"layout-content\">
            ";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 25
        echo "        </section>
       
<div id=\"map\"></div>
 <script>
      var map;
      var chicago = {lat: parseFloat(document.getElementById('lat1').value), lng: parseFloat(document.getElementById('long1').value)};
    

      /**
       * The CenterControl adds a control to the map that recenters the map on
       * Chicago.
       * This constructor takes the control DIV as an argument.
       * @constructor
       */
      function CenterControl(controlDiv, map) {

        // Set CSS for the control border.
        var controlUI = document.createElement('div');
        controlUI.style.backgroundColor = '#fff';
        controlUI.style.border = '2px solid #fff';
        controlUI.style.borderRadius = '3px';
        controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
        controlUI.style.cursor = 'pointer';
        controlUI.style.marginBottom = '22px';
        controlUI.style.textAlign = 'center';
        controlUI.title = 'Click to recenter the map';
        controlDiv.appendChild(controlUI);

        // Set CSS for the control interior.
        var controlText = document.createElement('div');
        controlText.style.color = 'rgb(25,25,25)';
        controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
        controlText.style.fontSize = '16px';
        controlText.style.lineHeight = '38px';
        controlText.style.paddingLeft = '5px';
        controlText.style.paddingRight = '5px';
        controlText.innerHTML = 'Center Map';
        controlUI.appendChild(controlText);

        // Setup the click event listeners: simply set the map to Chicago.
        controlUI.addEventListener('click', function() {
          map.setCenter(chicago);
        });

      }

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: chicago
        });

        // Create the DIV to hold the control and call the CenterControl()
        // constructor passing in this DIV.
        var centerControlDiv = document.createElement('div');
        var centerControl = new CenterControl(centerControlDiv, map);
        var marker=new google.maps.Marker({
            position: {lat: parseFloat(document.getElementById('lat1').value), lng: parseFloat(document.getElementById('long1').value)},
            map:map
            });
        centerControlDiv.index = 1;
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);
      }
    </script>
    <script async defer
    src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCMycsqrP-SmPjklBMnvzU7DKNCmebIcjo&callback=initMap\">
    </script>
      <script src=\"https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/layouts/position.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 25,  60 => 24,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\">
    <meta charset=\"utf-8\">
    <title>Custom Controls</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css\">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
 <section id=\"layout-content\">
            {% page %}
        </section>
       
<div id=\"map\"></div>
 <script>
      var map;
      var chicago = {lat: parseFloat(document.getElementById('lat1').value), lng: parseFloat(document.getElementById('long1').value)};
    

      /**
       * The CenterControl adds a control to the map that recenters the map on
       * Chicago.
       * This constructor takes the control DIV as an argument.
       * @constructor
       */
      function CenterControl(controlDiv, map) {

        // Set CSS for the control border.
        var controlUI = document.createElement('div');
        controlUI.style.backgroundColor = '#fff';
        controlUI.style.border = '2px solid #fff';
        controlUI.style.borderRadius = '3px';
        controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
        controlUI.style.cursor = 'pointer';
        controlUI.style.marginBottom = '22px';
        controlUI.style.textAlign = 'center';
        controlUI.title = 'Click to recenter the map';
        controlDiv.appendChild(controlUI);

        // Set CSS for the control interior.
        var controlText = document.createElement('div');
        controlText.style.color = 'rgb(25,25,25)';
        controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
        controlText.style.fontSize = '16px';
        controlText.style.lineHeight = '38px';
        controlText.style.paddingLeft = '5px';
        controlText.style.paddingRight = '5px';
        controlText.innerHTML = 'Center Map';
        controlUI.appendChild(controlText);

        // Setup the click event listeners: simply set the map to Chicago.
        controlUI.addEventListener('click', function() {
          map.setCenter(chicago);
        });

      }

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: chicago
        });

        // Create the DIV to hold the control and call the CenterControl()
        // constructor passing in this DIV.
        var centerControlDiv = document.createElement('div');
        var centerControl = new CenterControl(centerControlDiv, map);
        var marker=new google.maps.Marker({
            position: {lat: parseFloat(document.getElementById('lat1').value), lng: parseFloat(document.getElementById('long1').value)},
            map:map
            });
        centerControlDiv.index = 1;
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);
      }
    </script>
    <script async defer
    src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCMycsqrP-SmPjklBMnvzU7DKNCmebIcjo&callback=initMap\">
    </script>
      <script src=\"https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js\"></script>
  </body>
</html>", "C:\\wamp64\\www\\install-master1/themes/demo/layouts/position.htm", "");
    }
}
