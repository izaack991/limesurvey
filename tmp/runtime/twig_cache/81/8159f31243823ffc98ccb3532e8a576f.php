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

/* ./subviews/privacy/privacy.twig */
class __TwigTemplate_78c3eb878d3528a3340d45f3074455c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'anonymous' => [$this, 'block_anonymous'],
            'datasecurity' => [$this, 'block_datasecurity'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
<!-- Privacy message -->

<div class=\"";
        // line 21
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 21), "privacycontainer", [], "any", false, false, true, 21), 21, $this->source);
        echo " row\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 21), "privacycontainer", [], "any", false, false, true, 21), 21, $this->source);
        echo ">
    <div class=\"col-12 col-centered ";
        // line 22
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 22), "privacycol", [], "any", false, false, true, 22), 22, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 22), "privacycol", [], "any", false, false, true, 22), 22, $this->source);
        echo ">
        ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 23), "hideprivacyinfo", [], "any", false, false, true, 23) == "off")) {
            // line 24
            echo "            ";
            $this->displayBlock('anonymous', $context, $blocks);
            // line 41
            echo "        ";
        }
        // line 42
        echo "        ";
        $this->displayBlock('datasecurity', $context, $blocks);
        // line 51
        echo "    </div>
</div>
";
    }

    // line 24
    public function block_anonymous($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "anonymized", [], "any", false, false, true, 25) == "Y")) {
            // line 26
            echo "                    <div class=\"ls-privacy-block\">
                        <div class=\"";
            // line 27
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 27), "privacyhead", [], "any", false, false, true, 27), 27, $this->source);
            echo " text-uppercase\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 27), "privacyhead", [], "any", false, false, true, 27), 27, $this->source);
            echo ">
                            ";
            // line 28
            echo gT("This survey is anonymous.");
            echo "
                        </div>
                        <div>
                            <p class=\"";
            // line 31
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 31), "privacybody", [], "any", false, false, true, 31), 31, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 31), "privacybody", [], "any", false, false, true, 31), 31, $this->source);
            echo ">
                                ";
            // line 32
            echo gT("The record of your survey responses does not contain any identifying information about you, unless a specific survey question explicitly asked for it.");
            echo "
                            </p>
                            <p class=\"";
            // line 34
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 34), "privacybody", [], "any", false, false, true, 34), 34, $this->source);
            echo "\">
                                ";
            // line 35
            echo gT("If you used an identifying access code to access this survey, please rest assured that this code will not be stored together with your responses. It is managed in a separate database and will only be updated to indicate whether you did (or did not) complete this survey. There is no way of matching identification access codes with survey responses.");
            echo "
                            </p>
                        </div>
                    </div>
                ";
        }
        // line 40
        echo "            ";
    }

    // line 42
    public function block_datasecurity($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "format", [], "any", false, false, true, 43) != "A")) {
            // line 44
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "showsurveypolicynotice", [], "any", false, false, true, 44) == 1)) {
                // line 45
                echo "                    ";
                echo twig_include($this->env, $context, "./subviews/privacy/privacy_text.twig");
                echo "
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 46
($context["aSurveyInfo"] ?? null), "showsurveypolicynotice", [], "any", false, false, true, 46) == 2)) {
                // line 47
                echo "                    ";
                echo twig_include($this->env, $context, "./subviews/privacy/privacy_modal.twig");
                echo "
                ";
            }
            // line 49
            echo "            ";
        }
        // line 50
        echo "        ";
    }

    public function getTemplateName()
    {
        return "./subviews/privacy/privacy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 50,  147 => 49,  141 => 47,  139 => 46,  134 => 45,  131 => 44,  128 => 43,  124 => 42,  120 => 40,  112 => 35,  108 => 34,  103 => 32,  97 => 31,  91 => 28,  85 => 27,  82 => 26,  79 => 25,  75 => 24,  69 => 51,  66 => 42,  63 => 41,  60 => 24,  58 => 23,  52 => 22,  46 => 21,  41 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/privacy/privacy.twig", "C:\\xampp\\htdocs\\limesurvey\\themes\\survey\\fruity_twentythree\\views\\subviews\\privacy\\privacy.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 23, "block" => 24);
        static $filters = array();
        static $functions = array("gT" => 28, "include" => 45);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                [],
                ['gT', 'include']
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
