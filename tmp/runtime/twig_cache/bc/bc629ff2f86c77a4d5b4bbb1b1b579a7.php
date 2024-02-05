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

/* ./subviews/header/nav_bar.twig */
class __TwigTemplate_6cc38edf0de09b30120a6a126efcf18f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        if ( !twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "popupPreview", [], "any", false, false, true, 19)) {
            // line 20
            echo "    <!-- Bootstrap Navigation Bar -->
    <div id=\"survey-nav\" class=\"navbar fixed-top\">
        <div class=\"container-fluid col-xl-8\">
            ";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 23), "brandlogo", [], "any", false, false, true, 23) == "on")) {
                // line 24
                echo "                <div class=\"navbar-brand logo-container d-none d-md-block\">
                    ";
                // line 25
                echo LS_Twig_Extension::image($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 25), "brandlogofile", [], "any", false, false, true, 25), 25, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "name", [], "any", false, false, true, 25), 25, $this->source), ["class" => "logo img-fluid"]);
                echo "
                </div>
            ";
            }
            // line 28
            echo "            <div id=\"navbar-menu\" class=\"dropdown ms-auto ls-no-js-hidden\">
                ";
            // line 29
            if ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 29), "load", [], "any", false, false, true, 29), "show", [], "any", false, false, true, 29) == "Y") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 30
($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 30), "save", [], "any", false, false, true, 30), "show", [], "any", false, false, true, 30) == "Y")) || (((twig_get_attribute($this->env, $this->source,             // line 31
($context["aSurveyInfo"] ?? null), "bShowClearAll", [], "any", false, false, true, 31) == true) || (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "bShowClearAll", [], "any", false, false, true, 31) == null)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 32
($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 32), "showclearall", [], "any", false, false, true, 32) == "on"))) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 33
($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 33), "bShow", [], "any", false, false, true, 33) == true)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 34
($context["aSurveyInfo"] ?? null), "alanguageChanger", [], "any", false, false, true, 34), "show", [], "any", false, false, true, 34) == true))) {
                // line 35
                echo "                    <div id=\"navbar-toggler\" class=\"navbar-toggler\" data-bs-toggle=\"dropdown\"
                        data-bs-auto-close=\"outside\" aria-expanded=\"false\">
                        <span class=\"ri-more-fill\"></span>
                    </div>
                    <ul id=\"main-dropdown\" class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbar-toggler\">
                        ";
                // line 40
                echo twig_include($this->env, $context, "./subviews/navigation/language_changer_top_menu.twig");
                echo "
                        ";
                // line 41
                if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 41), "load", [], "any", false, false, true, 41), "show", [], "any", false, false, true, 41) == "Y") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 42
($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 42), "save", [], "any", false, false, true, 42), "show", [], "any", false, false, true, 42) == "Y")) || (((twig_get_attribute($this->env, $this->source,                 // line 43
($context["aSurveyInfo"] ?? null), "bShowClearAll", [], "any", false, false, true, 43) == true) || (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "bShowClearAll", [], "any", false, false, true, 43) == null)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 44
($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 44), "showclearall", [], "any", false, false, true, 44) == "on"))) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 45
($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 45), "bShow", [], "any", false, false, true, 45) == true))) {
                    // line 46
                    echo "                            <li class=\"dropdown-header text-uppercase\">";
                    echo gT("Survey options");
                    echo "</li>
                        ";
                }
                // line 48
                echo "                        ";
                echo twig_include($this->env, $context, "./subviews/navigation/save_links.twig");
                echo "
                        ";
                // line 49
                echo twig_include($this->env, $context, "./subviews/navigation/question_index_menu.twig");
                echo "
                        ";
                // line 50
                echo twig_include($this->env, $context, "./subviews/navigation/clearall_links.twig");
                echo "
                    </ul>
                ";
            }
            // line 53
            echo "            </div>
            <ul id=\"back-content\" class=\"d-none\"></ul>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/header/nav_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 53,  99 => 50,  95 => 49,  90 => 48,  84 => 46,  82 => 45,  81 => 44,  80 => 43,  79 => 42,  78 => 41,  74 => 40,  67 => 35,  65 => 34,  64 => 33,  63 => 32,  62 => 31,  61 => 30,  60 => 29,  57 => 28,  51 => 25,  48 => 24,  46 => 23,  41 => 20,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/nav_bar.twig", "C:\\xampp\\htdocs\\limesurvey\\themes\\survey\\fruity_twentythree\\views\\subviews\\header\\nav_bar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array();
        static $functions = array("image" => 25, "include" => 40, "gT" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['image', 'include', 'gT']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
