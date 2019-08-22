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

/* C:\wamp64\www\install-master1/themes/demo/layouts/retour_achat.htm */
class __TwigTemplate_f3a988bb00e87c6c9ff2dc43f362f86f58556b71bc64869229aa041bdb12f542 extends \Twig\Template
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
     <meta charset=\"utf-8\">
        <title>PayDunya Event  - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
       <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- favicon -->
     <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/interfaceControl/logoIcon/icon.jpg");
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap -->
     <link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
         <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- fontawesome -->
     <link href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/css/font-awesome.min.css");
        echo "\" rel=\"stylesheet\">
    <!-- flaticon -->
     <link href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/flaticon.css");
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap datetime picker -->
      <link href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/bootstrap-datepicker.min.css");
        echo "\" rel=\"stylesheet\">
    <!-- animate.css -->
     <link href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/animate.css");
        echo "\" rel=\"stylesheet\">
    <!-- Owl Carousel -->
        <link href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/owl.carousel.min.css");
        echo "\" rel=\"stylesheet\">
    <!-- magnific popup -->
      <link href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/magnific-popup.css");
        echo "\" rel=\"stylesheet\">
    <!-- stylesheet -->
    <link href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/style.css");
        echo "\" rel=\"stylesheet\">
    <!-- responsive -->
    <link href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/responsive.css");
        echo "\" rel=\"stylesheet\">
     <link href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/css/sweetalert.css");
        echo "\" rel=\"stylesheet\"><script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/js/sweetalert.js");
        echo "\"></script>
     <link href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/plugins/bootstrap-fileinput/bootstrap-fileinput.cs");
        echo "\" rel=\"stylesheet\">
     <link href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/themes/base-color.php?color=7d5fff");
        echo "\" rel=\"stylesheet\">
     <!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
<!-- Bootstrap core CSS -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
<!-- Material Design Bootstrap -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css\">
<link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">

<link rel=\"stylesheet\" href=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/animate.css");
        echo "\">

<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\">
</script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>

<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
    <style media=\"screen\">
         #II {
      background-image: url('images/bgFixed.jpg');
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      padding: 80px;

      color: #fff;
    }

    #II2 {
      background-image: url('images/bgFixed.jpg');
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      padding: 60px;

      color: #fff;
    }

    #II3 {
      background-image: url('images/lg.png');
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

  .eml {
    color: red;
  }

  .emr {
    color: red;
  }
  .social-icons .fa {
    padding-top: 14px;
    font-size: 30px;
    width: 60px;
    height: 60px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 50%;
  }
  #image {
            background-image: url(\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/ad_images/bgFixed.jpg");
        echo "\");
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            padding: 110px;
            margin: 0px;
            outline: none;
        }
  .social-icons .fa:hover {
      opacity: 0.7;
  }

  .social-icons .fa-facebook {
    background: #3B5998;
    color: white;
  }

  .social-icons .fa-twitter {
    background: #55ACEE;
    color: white;
  }

  .social-icons .fa-google-plus {
    background: #dd4b39;
    color: white;
  }

  .social-icons .fa-linkedin {
    background: #007bb5;
    color: white;
  }

  .social-icons {
    margin-top:20px;
    width: 300px;
    margin: 0 auto;
  }
  .navbar-area {
    border-bottom: 1px solid #7d5fff;
  }
  .card-header {
    background-color: #7d5fff !important;
  }

</style>
    </head>
<style media=\"screen\">
  .navbar-area {
    border-bottom: 1px solid #7d5fff;
  }
</style>
    <body>
    
       <header id=\"layout-header\">
            ";
        // line 179
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 180
        echo "        </header>

        ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 182
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 183
            echo "          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                  <br>
                      <p class=\"bg-success\">";
            // line 187
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
                  </div>
              </div>
          </div>
      ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 192
        echo "
    <!-- navbar area start -->

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 197
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 198
        echo "        </section>
        ";
        // line 199
        if (($context["user"] ?? null)) {
            // line 200
            echo "        <div class=\"container\" style=\"height: 1000px; padding-top: 200px;\">
          <a href=\"";
            // line 201
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("ticket", ["nom_type_ticket" => ($context["nomticket"] ?? null), "nbr_ticket" => ($context["nbrticket"] ?? null), "montant" => ($context["montant"] ?? null), "id_event" => ($context["id"] ?? null)]);
            echo "\" onclick=\"edition();return false;\">Imprimer le ticket</a>
          <a href=\"";
            // line 202
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("calendar", ["date" => ($context["dateEv"] ?? null), "email" => ($context["mail"] ?? null), "nom" => ($context["nomevent"] ?? null), "description" => ($context["description"] ?? null), "lieu" => ($context["lieu"] ?? null)]);
            echo "\">Ajouter à votre calendar</a>
        </div> 
        ";
        } else {
            // line 205
            echo "        <div class=\"container\" style=\"height: 1000px; padding-top: 200px;\">
          <a href=\"";
            // line 206
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("ticket", ["nom_type_ticket" => ($context["nomticket"] ?? null), "nbr_ticket" => ($context["nbrticket"] ?? null), "montant" => ($context["montant"] ?? null), "id_event" => ($context["id"] ?? null)]);
            echo "\" onclick=\"edition();return false;\">Imprimer le ticket</a>
          <a class=\"btn btn-warning btn-sm\" href=\"#\" data-toggle=\"modal\" data-target=\"#invite-modal\" class=\"action-btn\">Ajouter à votre calendar</a>
          <div class=\"login-registration-modal\" id=\"loginRegModal\">
              <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
                  <div class=\"modal\" tabindex=\"-1\" id=\"invite-modal\" role=\"dialog\"><!-- #login modal-->
                      <div class=\"modal-dialog\" role=\"document\">
                          <div class=\"modal-content\"><!-- modal content start -->
                             
                              <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                                  <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                                      <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                                          <form data-request=\"onCalendar\">
                                              <div class=\"form-element square login\"><!-- form element login start -->
                                                  <label>Entrer l'email
                                                  </label>
                                                  <input type=\"hidden\" name=\"date\" value=\"";
            // line 221
            echo twig_escape_filter($this->env, ($context["dateEv"] ?? null), "html", null, true);
            echo "\" >
                                                  <input type=\"hidden\" name=\"nomevent\" value=\"";
            // line 222
            echo twig_escape_filter($this->env, ($context["nomevent"] ?? null), "html", null, true);
            echo "\" >
                                                  <input type=\"hidden\" name=\"description\" value=\"";
            // line 223
            echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
            echo "\" >
                                                  <input type=\"hidden\" name=\"lieu\" value=\"";
            // line 224
            echo twig_escape_filter($this->env, ($context["lieu"] ?? null), "html", null, true);
            echo "\" >
                                                  <input name=\"email\" type=\"email\" placeholder=\"Entrer l'email....\" class=\"input-field-square\">
                                                  <p class=\"eml\"></p>
                                              </div><!-- form element login end -->
                                            <!-- form element login end -->
                                              <button type=\"submit\" class=\"submit-form-btn\">send</button>
                                          </form>
                                      </div><!-- login form wrapper end -->
                                  </div>
                              </div><!-- /.tab conent-->
                          </div><!-- modal content end -->
                      </div>
                  </div><!-- /#loginmodal -->
              </div><!-- login modal warapper satart end-->
          </div>
        </div>
        ";
        }
        // line 241
        echo "        
        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 244
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 245
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 248
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 249
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 250
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        ";
        // line 251
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 252
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 253
        echo "        
<script>
  (function(\$){

\$('#EventFilter').on('change', 'input, select', function(){
    var \$form = \$(this).closest('form');
    \$form.request();
});
\$('#EventPagination').on('change', 'input, select', function(){
    var \$form = \$(this).closest('form');
    \$form.request();
});

})(jQuery);

   function increaseAdView(adID) {
      var fd = new FormData();
      fd.append('adID', adID);
      \$.ajaxSetup({
          headers: {
              'X-CSRF-Token': \$('meta[name=csrf-token]').attr('content')
          }
      });
      \$.ajax({
         url: 'http://lab.thesoftking.com/eticket/admin/Ad/increaseAdView',
         type: 'POST',
         data: fd,
         contentType: false,
         processData: false,
         success: function(data) {
            // console.log(data);
         }
      });
   }
</script>

  <script>
  \$(\".fb-comments\").attr(\"data-width\", \$(\".fb-comments\").parent().width());
         \$(window).on('resize', function () {
             resizeiframe();
         });

     function resizeiframe() {
         var src = \$('.fb-comments iframe').attr('src').split('width='),
             width = \$(\".fb-comments\").parent().width();

         \$('.fb-comments iframe').attr('src', src[0] + 'width=' + width);
     }


    function hideModal() {
      \$('#buyTicketConfModal').modal('hide');
    }

    function clacTotal(p_no) {
     // totalPrice = 0;
     // document.getElementById('totalPriceInput').value = pp_price;
     // document.getElementById('pNoInput').value = p_no;
     // document.getElementById('totalPrice').innerHTML = 0;
     var sub=parseInt(document.getElementsByClassName('sub').length);
     var nomb=0;
     for(var i=0;i< sub;i++){
      if(document.getElementsByClassName('sub')[i].checked){
        nom+=parseFloat(document.getElementsByClassName('sub')[i].value);
      }
     }
    document.getElementById('totalPrice').innerHTML = (parseInt(event.target.value)+nomb)*p_no ;
    }

    \$(document).ready(function() {
     // clacTotal(document.getElementById('montantItem').value, 1);
    });
  </script>
    <script>
        function registerUser(e) {
            e.preventDefault();

            var form = document.getElementById('registerForm');
            var fd = new FormData(form);

            \$.ajax({
                url: 'http://lab.thesoftking.com/eticket/register',
                type: 'POST',
                data: fd,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    var em = document.getElementsByClassName(\"emr\");
                    // after returning from the controller we are clearing the
                    // previous error messages...
                    for(i=0; i<em.length; i++) {
                        em[i].innerHTML = '';
                    }

                    if (data == \"closed\") {
                        \$(\"#login-modal\").modal('hide');
                        swal('Sorry!', 'Registration is closed!', 'error');
                    }

                    if(data === \"success\") {
                        window.location = 'http://lab.thesoftking.com/eticket';
                    }

                    // Showing error messages in the HTML...
                    if(typeof data.error != 'undefined') {
                      if(typeof data.username != 'undefined') {
                        em[0].innerHTML = data.username[0];
                      }
                      if(typeof data.firstname != 'undefined') {
                        em[1].innerHTML = data.firstname[0];
                      }
                      if(typeof data.lastname != 'undefined') {
                        em[2].innerHTML = data.lastname[0];
                      }
                      if(typeof data.email != 'undefined') {
                        em[3].innerHTML = data.email[0];
                      }
                      if(typeof data.phone != 'undefined') {
                        em[4].innerHTML = data.phone[0];
                      }
                      if(typeof data.password != 'undefined') {
                        em[5].innerHTML = data.password[0];
                      }
                    }
                }
            })
        }
    </script>

    <script src=\"http://lab.thesoftking.com/eticket/assets/user/js/jquery.js\"></script>
<!-- popper -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/popper.min.js\"></script>
<!-- bootstrap -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/bootstrap.min.js\"></script>
<!-- owl carousel -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/owl.carousel.min.js\"></script>
<!-- magnific popup -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/jquery.magnific-popup.js\"></script>
<!-- way poin js-->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/waypoints.min.js\"></script>
<!-- wow js-->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/wow.min.js\"></script>
<!-- bootstrap datetimepicker -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/bootstrap-datepicker.min.js\"></script>
<!-- counterup js-->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/jquery.counterup.min.js\"></script>
<script src=\"http://lab.thesoftking.com/eticket/assets/admin/plugins/bootstrap-fileinput/bootstrap-fileinput.js\" type=\"text/javascript\"></script>

<!-- main -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/main.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js\"></script>

    <script>
        function loginUser(e) {
            e.preventDefault();
            var form = document.getElementById('userLoginForm');
            var fd = new FormData(form);

            \$.ajax({
                url: 'http://lab.thesoftking.com/eticket/login',
                type: 'POST',
                data: fd,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    var em = document.getElementsByClassName(\"eml\");
                    // after returning from the controller we are clearing the
                    // previous error messages...
                    for(i=0; i<em.length; i++) {
                        em[i].innerHTML = '';
                    }

                    if(data === \"success\") {
                        window.location = 'http://lab.thesoftking.com/eticket';
                    }

                    if (data == \"no_success\") {
                        em[0].innerHTML = \"Username/Password do not match!\";
                    }

                    // Showing error messages in the HTML...
                    if(typeof data.error != 'undefined') {
                      if(typeof data.username != 'undefined') {
                        em[0].innerHTML = data.username[0];
                      }
                      if(typeof data.password != 'undefined') {
                        em[1].innerHTML = data.password[0];
                      }
                    }
                }
            });
        }
    </script>
<!-- JQuery -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<!-- Bootstrap tooltips -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
<!-- Bootstrap core JavaScript -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<!-- MDB core JavaScript -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/layouts/retour_achat.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 253,  416 => 252,  401 => 251,  397 => 250,  393 => 249,  389 => 248,  384 => 245,  380 => 244,  375 => 241,  355 => 224,  351 => 223,  347 => 222,  343 => 221,  325 => 206,  322 => 205,  316 => 202,  312 => 201,  309 => 200,  307 => 199,  304 => 198,  302 => 197,  295 => 192,  287 => 187,  281 => 183,  279 => 182,  275 => 180,  271 => 179,  214 => 125,  134 => 48,  119 => 36,  115 => 35,  109 => 34,  105 => 33,  100 => 31,  95 => 29,  90 => 27,  85 => 25,  80 => 23,  75 => 21,  70 => 19,  64 => 16,  59 => 14,  49 => 7,  45 => 6,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
     <meta charset=\"utf-8\">
        <title>PayDunya Event  - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
       <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- favicon -->
     <link href=\"{{ 'assets/user/interfaceControl/logoIcon/icon.jpg'|theme }}\" rel=\"stylesheet\">
    <!-- bootstrap -->
     <link href=\"{{ 'assets/user/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">
         <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- fontawesome -->
     <link href=\"{{ 'assets/admin/css/font-awesome.min.css'|theme }}\" rel=\"stylesheet\">
    <!-- flaticon -->
     <link href=\"{{ 'assets/user/css/flaticon.css'|theme }}\" rel=\"stylesheet\">
    <!-- bootstrap datetime picker -->
      <link href=\"{{ 'assets/user/css/bootstrap-datepicker.min.css'|theme }}\" rel=\"stylesheet\">
    <!-- animate.css -->
     <link href=\"{{ 'assets/user/css/animate.css'|theme }}\" rel=\"stylesheet\">
    <!-- Owl Carousel -->
        <link href=\"{{ 'assets/user/css/owl.carousel.min.css'|theme }}\" rel=\"stylesheet\">
    <!-- magnific popup -->
      <link href=\"{{ 'assets/user/css/magnific-popup.css'|theme }}\" rel=\"stylesheet\">
    <!-- stylesheet -->
    <link href=\"{{ 'assets/user/css/style.css'|theme }}\" rel=\"stylesheet\">
    <!-- responsive -->
    <link href=\"{{ 'assets/user/css/responsive.css'|theme }}\" rel=\"stylesheet\">
     <link href=\"{{ 'assets/admin/css/sweetalert.css'|theme }}\" rel=\"stylesheet\"><script src=\"{{ 'assets/admin/js/sweetalert.js'|theme }}\"></script>
     <link href=\"{{ 'assets/admin/plugins/bootstrap-fileinput/bootstrap-fileinput.cs'|theme }}\" rel=\"stylesheet\">
     <link href=\"{{ 'assets/user/css/themes/base-color.php?color=7d5fff'|theme }}\" rel=\"stylesheet\">
     <!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
<!-- Bootstrap core CSS -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
<!-- Material Design Bootstrap -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css\">
<link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">

<link rel=\"stylesheet\" href=\"{{ 'assets/user/css/animate.css'|theme }}\">

<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\">
</script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>

<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
    <style media=\"screen\">
         #II {
      background-image: url('images/bgFixed.jpg');
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      padding: 80px;

      color: #fff;
    }

    #II2 {
      background-image: url('images/bgFixed.jpg');
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      padding: 60px;

      color: #fff;
    }

    #II3 {
      background-image: url('images/lg.png');
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

  .eml {
    color: red;
  }

  .emr {
    color: red;
  }
  .social-icons .fa {
    padding-top: 14px;
    font-size: 30px;
    width: 60px;
    height: 60px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 50%;
  }
  #image {
            background-image: url(\"{{ 'assets/user/ad_images/bgFixed.jpg'|theme }}\");
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            padding: 110px;
            margin: 0px;
            outline: none;
        }
  .social-icons .fa:hover {
      opacity: 0.7;
  }

  .social-icons .fa-facebook {
    background: #3B5998;
    color: white;
  }

  .social-icons .fa-twitter {
    background: #55ACEE;
    color: white;
  }

  .social-icons .fa-google-plus {
    background: #dd4b39;
    color: white;
  }

  .social-icons .fa-linkedin {
    background: #007bb5;
    color: white;
  }

  .social-icons {
    margin-top:20px;
    width: 300px;
    margin: 0 auto;
  }
  .navbar-area {
    border-bottom: 1px solid #7d5fff;
  }
  .card-header {
    background-color: #7d5fff !important;
  }

</style>
    </head>
<style media=\"screen\">
  .navbar-area {
    border-bottom: 1px solid #7d5fff;
  }
</style>
    <body>
    
       <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

        {% flash success %}
          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                  <br>
                      <p class=\"bg-success\">{{ message }}</p>
                  </div>
              </div>
          </div>
      {% endflash %}

    <!-- navbar area start -->

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>
        {% if user %}
        <div class=\"container\" style=\"height: 1000px; padding-top: 200px;\">
          <a href=\"{{'ticket'|page({nom_type_ticket:nomticket,nbr_ticket:nbrticket,montant:montant,id_event:id})}}\" onclick=\"edition();return false;\">Imprimer le ticket</a>
          <a href=\"{{'calendar'|page({date:dateEv,email:mail,nom:nomevent,description:description,lieu:lieu})}}\">Ajouter à votre calendar</a>
        </div> 
        {% else %}
        <div class=\"container\" style=\"height: 1000px; padding-top: 200px;\">
          <a href=\"{{'ticket'|page({nom_type_ticket:nomticket,nbr_ticket:nbrticket,montant:montant,id_event:id})}}\" onclick=\"edition();return false;\">Imprimer le ticket</a>
          <a class=\"btn btn-warning btn-sm\" href=\"#\" data-toggle=\"modal\" data-target=\"#invite-modal\" class=\"action-btn\">Ajouter à votre calendar</a>
          <div class=\"login-registration-modal\" id=\"loginRegModal\">
              <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
                  <div class=\"modal\" tabindex=\"-1\" id=\"invite-modal\" role=\"dialog\"><!-- #login modal-->
                      <div class=\"modal-dialog\" role=\"document\">
                          <div class=\"modal-content\"><!-- modal content start -->
                             
                              <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                                  <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                                      <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                                          <form data-request=\"onCalendar\">
                                              <div class=\"form-element square login\"><!-- form element login start -->
                                                  <label>Entrer l'email
                                                  </label>
                                                  <input type=\"hidden\" name=\"date\" value=\"{{dateEv}}\" >
                                                  <input type=\"hidden\" name=\"nomevent\" value=\"{{nomevent}}\" >
                                                  <input type=\"hidden\" name=\"description\" value=\"{{description}}\" >
                                                  <input type=\"hidden\" name=\"lieu\" value=\"{{lieu}}\" >
                                                  <input name=\"email\" type=\"email\" placeholder=\"Entrer l'email....\" class=\"input-field-square\">
                                                  <p class=\"eml\"></p>
                                              </div><!-- form element login end -->
                                            <!-- form element login end -->
                                              <button type=\"submit\" class=\"submit-form-btn\">send</button>
                                          </form>
                                      </div><!-- login form wrapper end -->
                                  </div>
                              </div><!-- /.tab conent-->
                          </div><!-- modal content end -->
                      </div>
                  </div><!-- /#loginmodal -->
              </div><!-- login modal warapper satart end-->
          </div>
        </div>
        {% endif %}
        
        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}
        
<script>
  (function(\$){

\$('#EventFilter').on('change', 'input, select', function(){
    var \$form = \$(this).closest('form');
    \$form.request();
});
\$('#EventPagination').on('change', 'input, select', function(){
    var \$form = \$(this).closest('form');
    \$form.request();
});

})(jQuery);

   function increaseAdView(adID) {
      var fd = new FormData();
      fd.append('adID', adID);
      \$.ajaxSetup({
          headers: {
              'X-CSRF-Token': \$('meta[name=csrf-token]').attr('content')
          }
      });
      \$.ajax({
         url: 'http://lab.thesoftking.com/eticket/admin/Ad/increaseAdView',
         type: 'POST',
         data: fd,
         contentType: false,
         processData: false,
         success: function(data) {
            // console.log(data);
         }
      });
   }
</script>

  <script>
  \$(\".fb-comments\").attr(\"data-width\", \$(\".fb-comments\").parent().width());
         \$(window).on('resize', function () {
             resizeiframe();
         });

     function resizeiframe() {
         var src = \$('.fb-comments iframe').attr('src').split('width='),
             width = \$(\".fb-comments\").parent().width();

         \$('.fb-comments iframe').attr('src', src[0] + 'width=' + width);
     }


    function hideModal() {
      \$('#buyTicketConfModal').modal('hide');
    }

    function clacTotal(p_no) {
     // totalPrice = 0;
     // document.getElementById('totalPriceInput').value = pp_price;
     // document.getElementById('pNoInput').value = p_no;
     // document.getElementById('totalPrice').innerHTML = 0;
     var sub=parseInt(document.getElementsByClassName('sub').length);
     var nomb=0;
     for(var i=0;i< sub;i++){
      if(document.getElementsByClassName('sub')[i].checked){
        nom+=parseFloat(document.getElementsByClassName('sub')[i].value);
      }
     }
    document.getElementById('totalPrice').innerHTML = (parseInt(event.target.value)+nomb)*p_no ;
    }

    \$(document).ready(function() {
     // clacTotal(document.getElementById('montantItem').value, 1);
    });
  </script>
    <script>
        function registerUser(e) {
            e.preventDefault();

            var form = document.getElementById('registerForm');
            var fd = new FormData(form);

            \$.ajax({
                url: 'http://lab.thesoftking.com/eticket/register',
                type: 'POST',
                data: fd,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    var em = document.getElementsByClassName(\"emr\");
                    // after returning from the controller we are clearing the
                    // previous error messages...
                    for(i=0; i<em.length; i++) {
                        em[i].innerHTML = '';
                    }

                    if (data == \"closed\") {
                        \$(\"#login-modal\").modal('hide');
                        swal('Sorry!', 'Registration is closed!', 'error');
                    }

                    if(data === \"success\") {
                        window.location = 'http://lab.thesoftking.com/eticket';
                    }

                    // Showing error messages in the HTML...
                    if(typeof data.error != 'undefined') {
                      if(typeof data.username != 'undefined') {
                        em[0].innerHTML = data.username[0];
                      }
                      if(typeof data.firstname != 'undefined') {
                        em[1].innerHTML = data.firstname[0];
                      }
                      if(typeof data.lastname != 'undefined') {
                        em[2].innerHTML = data.lastname[0];
                      }
                      if(typeof data.email != 'undefined') {
                        em[3].innerHTML = data.email[0];
                      }
                      if(typeof data.phone != 'undefined') {
                        em[4].innerHTML = data.phone[0];
                      }
                      if(typeof data.password != 'undefined') {
                        em[5].innerHTML = data.password[0];
                      }
                    }
                }
            })
        }
    </script>

    <script src=\"http://lab.thesoftking.com/eticket/assets/user/js/jquery.js\"></script>
<!-- popper -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/popper.min.js\"></script>
<!-- bootstrap -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/bootstrap.min.js\"></script>
<!-- owl carousel -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/owl.carousel.min.js\"></script>
<!-- magnific popup -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/jquery.magnific-popup.js\"></script>
<!-- way poin js-->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/waypoints.min.js\"></script>
<!-- wow js-->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/wow.min.js\"></script>
<!-- bootstrap datetimepicker -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/bootstrap-datepicker.min.js\"></script>
<!-- counterup js-->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/jquery.counterup.min.js\"></script>
<script src=\"http://lab.thesoftking.com/eticket/assets/admin/plugins/bootstrap-fileinput/bootstrap-fileinput.js\" type=\"text/javascript\"></script>

<!-- main -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/main.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js\"></script>

    <script>
        function loginUser(e) {
            e.preventDefault();
            var form = document.getElementById('userLoginForm');
            var fd = new FormData(form);

            \$.ajax({
                url: 'http://lab.thesoftking.com/eticket/login',
                type: 'POST',
                data: fd,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    var em = document.getElementsByClassName(\"eml\");
                    // after returning from the controller we are clearing the
                    // previous error messages...
                    for(i=0; i<em.length; i++) {
                        em[i].innerHTML = '';
                    }

                    if(data === \"success\") {
                        window.location = 'http://lab.thesoftking.com/eticket';
                    }

                    if (data == \"no_success\") {
                        em[0].innerHTML = \"Username/Password do not match!\";
                    }

                    // Showing error messages in the HTML...
                    if(typeof data.error != 'undefined') {
                      if(typeof data.username != 'undefined') {
                        em[0].innerHTML = data.username[0];
                      }
                      if(typeof data.password != 'undefined') {
                        em[1].innerHTML = data.password[0];
                      }
                    }
                }
            });
        }
    </script>
<!-- JQuery -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<!-- Bootstrap tooltips -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
<!-- Bootstrap core JavaScript -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<!-- MDB core JavaScript -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js\"></script>
    </body>
</html>", "C:\\wamp64\\www\\install-master1/themes/demo/layouts/retour_achat.htm", "");
    }
}
