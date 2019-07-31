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

/* /opt/lampp/htdocs/paydunyaEvent/themes/demo/pages/home.htm */
class __TwigTemplate_5214c62cc937ed4dccfebaaaec7af17c9ccfb897ac723e0f9f468ac6c8c3056a extends \Twig\Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("welcome.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>Overview <small>Basic concepts</small></h2>
    </div>
    <p>
        This page demonstrates the basic CMS features.
        Usually each page built with October is a combination of a layout, page, partials and content blocks,
        although in simple cases you can just use a page without anything else.
    </p>

    <!-- Layouts -->
    <h3>Layouts</h3>
    <p class=\"lead\">
        <i class=\"icon-th-large\"></i> &nbsp; Layouts define the page scaffold.
    </p>
    <p>
        The layout file <code>layouts/default.htm</code> defines the page scaffold &mdash;
        everything that repeats on each page, such as the HTML, HEAD and BODY tags, StyleSheet and JavaScript references.
    </p>
    <p>The page menu and footer in the Demo theme are defined in the layout as well.</p>

    <hr />

    <!-- Pages -->
    <h3>Pages</h3>
    <p class=\"lead\">
        <i class=\"icon-copy\"></i> &nbsp; Pages hold the content for each URL.
    </p>
    <p>
        The page file <code>pages/home.htm</code> defines the page URL (<code>/</code> for this page) and the page content.
        Pages are rendered inside layouts with this function that should be called in the layout code:
    </p>
    <pre>";
        // line 40
        echo "{% page %}";
        echo "</pre>
    <p>Using a layout for pages is optional &mdash; you can define everything right in the page file.</p>

    <hr />

    <!-- Partials -->
    <h3>Partials</h3>
    <p class=\"lead\">
        <i class=\"icon-tags\"></i> &nbsp; Partials contain reusable chunks of HTML markup.
    </p>
    <p>
        Partials are chunks of HTML defined in separate files that can be included anywhere.
        Partials are rendered with:
    </p>
    <pre>";
        // line 54
        echo "{% partial \"partial-name\" %}";
        echo "</pre>
    <p>You may place partials inside folders too. In this example we placed the footer content to the <code>partials/site/footer.htm</code> partial.</p>
    <pre>";
        // line 56
        echo "{% partial \"site/footer\" %}";
        echo "</pre>
    <p>Partials can be used inside pages, layouts or other partials.</p>

    <hr />

    <!-- Content blocks -->
    <h3>Content blocks</h3>
    <p class=\"lead\">
        <i class=\"icon-font\"></i> &nbsp; Content blocks are text or HTML blocks that can be edited separately from the page or layout.
    </p>
    <p>
        The introductory text used on this page is defined in the <code>content/welcome.htm</code> file.
        Content blocks are defined and rendered with:
        <pre>";
        // line 69
        echo "{% content \"content-name.htm\" %}";
        echo "</pre>
    </p>

    <hr />

    <!-- Placeholders -->
    <h3>Placeholders</h3>
    <p class=\"lead\">
        <i class=\"icon-bookmark\"></i> &nbsp; Placeholders allow pages to inject content to a layout.
    </p>
    <p>
        The common use is injecting page-specific links to StyleSheet or JavaScript files to the HEAD tag defined in the layout.
        Placeholders are defined in the layout file and they have names so that they can be referred in the page.
        Example:
    </p>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <p>Layout file:</p>
            <pre>";
        // line 87
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("placeholder/layout.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</pre>
        </div>
        <div class=\"col-md-6\">
            <p>Page file:</p>
            <pre>";
        // line 91
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("placeholder/page.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</pre>
        </div>
    </div>

    <hr />

    <!-- Assets -->
    <h3>Assets</h3>
    <p class=\"lead\">
        <i class=\"icon-picture\"></i> &nbsp; Assets are resource files like images and stylesheets.
    </p>
    <p>This theme stores its asset files (JavaScript, StyleSheet, images, fonts, etc) in the <code>themes/demo/assets</code> directory. This theme is also packaged with these useful 3rd party tools:</p>
    <ul class=\"list-inline\">
        <li><a target=\"_blank\" href=\"http://getbootstrap.com/\">Twitter Bootstrap</a></li>
        <li><a target=\"_blank\" href=\"http://fontawesome.io/3.2.1/\">Font Awesome</a></li>
        <li><a target=\"_blank\" href=\"http://www.google.com/fonts/specimen/Lato\">Lato webfont</a></li>
    </ul>
    <p>You might prefer to remove them for your website implementation.</p>

    <br />

    <div class=\"text-center\">
        <p><a href=\"";
        // line 113
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\" class=\"btn btn-lg btn-default\">Continue to AJAX framework</a></p>
    </div>

</div>
 <div class=\"login-registration-modal\" id=\"loginRegModal\">
    <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
        <div class=\"modal\" tabindex=\"-1\" id=\"login-modal\" role=\"dialog\"><!-- #login modal-->
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\"><!-- modal content start -->
                    <nav>
                        <div class=\"nav nav-tabs login-modal-navigation\" id=\"nav-tab\" role=\"tablist\"><!-- login modal navigation start -->
                            <a class=\"nav-item nav-link active\" id=\"nav-login-tab\" data-toggle=\"tab\" href=\"#nav-login\" role=\"tab\" aria-controls=\"nav-login\"
                                aria-selected=\"true\">login</a>
                            <a class=\"nav-item nav-link\" id=\"nav-signup-tab\" data-toggle=\"tab\" href=\"#nav-signup\" role=\"tab\" aria-controls=\"nav-signup\"
                                aria-selected=\"false\">Register</a>
                        </div><!-- login modal navigation end -->
                    </nav>
                    <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                        <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                            <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                               ";
        // line 133
        if ( !($context["user"] ?? null)) {
            // line 134
            echo "
                                    <div class=\"row\">
                                
                                        <div class=\"col-md-6\">
                                            <h3 class=\"";
            // line 138
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 138), "id", [], "any", false, false, false, 138) == "register")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\">Créer un compte</a></h3>
                                            ";
            // line 139
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 140
            echo "                                        </div>
                                
                                    </div>
                                
                                ";
        } else {
            // line 145
            echo "                                
                                ";
        }
        // line 147
        echo "                            </div><!-- login form wrapper end -->
                        </div>
                        <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">

                            <div class=\"singup-form-wrapper\">
                                ";
        // line 152
        if ( !($context["user"] ?? null)) {
            // line 153
            echo "                                
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            ";
            // line 156
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 157
            echo "                                        </div>
                                
                                    </div>
                                
                                ";
        } else {
            // line 162
            echo "                                
                                ";
        }
        // line 164
        echo "                             </div>
                        </div>
                    </div><!-- /.tab conent-->
                </div><!-- modal content end -->
            </div>
        </div><!-- /#loginmodal -->
    </div><!-- login modal warapper satart end-->
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/paydunyaEvent/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 164,  255 => 162,  248 => 157,  244 => 156,  239 => 153,  237 => 152,  230 => 147,  226 => 145,  219 => 140,  215 => 139,  207 => 138,  201 => 134,  199 => 133,  176 => 113,  149 => 91,  140 => 87,  119 => 69,  103 => 56,  98 => 54,  81 => 40,  43 => 4,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron\">
    <div class=\"container\">
        {% content \"welcome.htm\" %}
    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>Overview <small>Basic concepts</small></h2>
    </div>
    <p>
        This page demonstrates the basic CMS features.
        Usually each page built with October is a combination of a layout, page, partials and content blocks,
        although in simple cases you can just use a page without anything else.
    </p>

    <!-- Layouts -->
    <h3>Layouts</h3>
    <p class=\"lead\">
        <i class=\"icon-th-large\"></i> &nbsp; Layouts define the page scaffold.
    </p>
    <p>
        The layout file <code>layouts/default.htm</code> defines the page scaffold &mdash;
        everything that repeats on each page, such as the HTML, HEAD and BODY tags, StyleSheet and JavaScript references.
    </p>
    <p>The page menu and footer in the Demo theme are defined in the layout as well.</p>

    <hr />

    <!-- Pages -->
    <h3>Pages</h3>
    <p class=\"lead\">
        <i class=\"icon-copy\"></i> &nbsp; Pages hold the content for each URL.
    </p>
    <p>
        The page file <code>pages/home.htm</code> defines the page URL (<code>/</code> for this page) and the page content.
        Pages are rendered inside layouts with this function that should be called in the layout code:
    </p>
    <pre>{{ \"{% page %}\" }}</pre>
    <p>Using a layout for pages is optional &mdash; you can define everything right in the page file.</p>

    <hr />

    <!-- Partials -->
    <h3>Partials</h3>
    <p class=\"lead\">
        <i class=\"icon-tags\"></i> &nbsp; Partials contain reusable chunks of HTML markup.
    </p>
    <p>
        Partials are chunks of HTML defined in separate files that can be included anywhere.
        Partials are rendered with:
    </p>
    <pre>{{ \"{% partial \\\"partial-name\\\" %}\" }}</pre>
    <p>You may place partials inside folders too. In this example we placed the footer content to the <code>partials/site/footer.htm</code> partial.</p>
    <pre>{{ \"{% partial \\\"site/footer\\\" %}\" }}</pre>
    <p>Partials can be used inside pages, layouts or other partials.</p>

    <hr />

    <!-- Content blocks -->
    <h3>Content blocks</h3>
    <p class=\"lead\">
        <i class=\"icon-font\"></i> &nbsp; Content blocks are text or HTML blocks that can be edited separately from the page or layout.
    </p>
    <p>
        The introductory text used on this page is defined in the <code>content/welcome.htm</code> file.
        Content blocks are defined and rendered with:
        <pre>{{ \"{% content \\\"content-name.htm\\\" %}\" }}</pre>
    </p>

    <hr />

    <!-- Placeholders -->
    <h3>Placeholders</h3>
    <p class=\"lead\">
        <i class=\"icon-bookmark\"></i> &nbsp; Placeholders allow pages to inject content to a layout.
    </p>
    <p>
        The common use is injecting page-specific links to StyleSheet or JavaScript files to the HEAD tag defined in the layout.
        Placeholders are defined in the layout file and they have names so that they can be referred in the page.
        Example:
    </p>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <p>Layout file:</p>
            <pre>{% content \"placeholder/layout.txt\" %}</pre>
        </div>
        <div class=\"col-md-6\">
            <p>Page file:</p>
            <pre>{% content \"placeholder/page.txt\" %}</pre>
        </div>
    </div>

    <hr />

    <!-- Assets -->
    <h3>Assets</h3>
    <p class=\"lead\">
        <i class=\"icon-picture\"></i> &nbsp; Assets are resource files like images and stylesheets.
    </p>
    <p>This theme stores its asset files (JavaScript, StyleSheet, images, fonts, etc) in the <code>themes/demo/assets</code> directory. This theme is also packaged with these useful 3rd party tools:</p>
    <ul class=\"list-inline\">
        <li><a target=\"_blank\" href=\"http://getbootstrap.com/\">Twitter Bootstrap</a></li>
        <li><a target=\"_blank\" href=\"http://fontawesome.io/3.2.1/\">Font Awesome</a></li>
        <li><a target=\"_blank\" href=\"http://www.google.com/fonts/specimen/Lato\">Lato webfont</a></li>
    </ul>
    <p>You might prefer to remove them for your website implementation.</p>

    <br />

    <div class=\"text-center\">
        <p><a href=\"{{ 'ajax'|page }}\" class=\"btn btn-lg btn-default\">Continue to AJAX framework</a></p>
    </div>

</div>
 <div class=\"login-registration-modal\" id=\"loginRegModal\">
    <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
        <div class=\"modal\" tabindex=\"-1\" id=\"login-modal\" role=\"dialog\"><!-- #login modal-->
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\"><!-- modal content start -->
                    <nav>
                        <div class=\"nav nav-tabs login-modal-navigation\" id=\"nav-tab\" role=\"tablist\"><!-- login modal navigation start -->
                            <a class=\"nav-item nav-link active\" id=\"nav-login-tab\" data-toggle=\"tab\" href=\"#nav-login\" role=\"tab\" aria-controls=\"nav-login\"
                                aria-selected=\"true\">login</a>
                            <a class=\"nav-item nav-link\" id=\"nav-signup-tab\" data-toggle=\"tab\" href=\"#nav-signup\" role=\"tab\" aria-controls=\"nav-signup\"
                                aria-selected=\"false\">Register</a>
                        </div><!-- login modal navigation end -->
                    </nav>
                    <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                        <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                            <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                               {% if not user %}

                                    <div class=\"row\">
                                
                                        <div class=\"col-md-6\">
                                            <h3 class=\"{% if this.page.id == 'register' %}active{% endif %}\"><a href=\"{{ 'register'|page }}\">Créer un compte</a></h3>
                                            {% partial account ~ '::signin' %}
                                        </div>
                                
                                    </div>
                                
                                {% else %}
                                
                                {% endif %}
                            </div><!-- login form wrapper end -->
                        </div>
                        <div class=\"tab-pane fade\" id=\"nav-signup\" role=\"tabpanel\" aria-labelledby=\"nav-signup-tab\">

                            <div class=\"singup-form-wrapper\">
                                {% if not user %}
                                
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            {% partial account ~ '::register' %}
                                        </div>
                                
                                    </div>
                                
                                {% else %}
                                
                                {% endif %}
                             </div>
                        </div>
                    </div><!-- /.tab conent-->
                </div><!-- modal content end -->
            </div>
        </div><!-- /#loginmodal -->
    </div><!-- login modal warapper satart end-->
</div>", "/opt/lampp/htdocs/paydunyaEvent/themes/demo/pages/home.htm", "");
    }
}
