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

/* ./subviews/messages/welcome.twig */
class __TwigTemplate_d487f14fe84e5acafdd9a9891224a0ad extends Template
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
        // line 22
        echo "
<!-- Welcome Message -->
<div id=\"";
        // line 24
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 24), "welcomecontainer", [], "any", false, false, true, 24), 24, $this->source);
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 24), "welcomecontainer", [], "any", false, false, true, 24), 24, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 24), "welcomecontainer", [], "any", false, false, true, 24), 24, $this->source);
        echo ">

    <!-- Survey Name -->
    <div class=\"";
        // line 27
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 27), "surveyname", [], "any", false, false, true, 27), 27, $this->source);
        echo " large-heading\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 27), "surveyname", [], "any", false, false, true, 27), 27, $this->source);
        echo " >
        ";
        // line 28
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "name", [], "any", false, false, true, 28), 28, $this->source), 1);
        echo "
    </div>

    <!-- Survey description -->
    <div class=\"";
        // line 32
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 32), "description", [], "any", false, false, true, 32), 32, $this->source);
        echo " form-heading\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 32), "description", [], "any", false, false, true, 32), 32, $this->source);
        echo ">
        ";
        // line 33
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "description", [], "any", false, false, true, 33), 33, $this->source), 1);
        echo "
    </div>

    <!-- Welcome text -->
    <div class=\"";
        // line 37
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 37), "welcome", [], "any", false, false, true, 37), 37, $this->source);
        echo " form-heading\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 37), "welcome", [], "any", false, false, true, 37), 37, $this->source);
        echo ">
        ";
        // line 38
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "welcome", [], "any", false, false, true, 38), 38, $this->source), 1);
        echo "
    </div>

    <!-- Question count -->
    <div class=\"";
        // line 42
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 42), "questioncount", [], "any", false, false, true, 42), 42, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 42), "questioncount", [], "any", false, false, true, 42), 42, $this->source);
        echo ">
        <div class='";
        // line 43
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 43), "questioncounttext", [], "any", false, false, true, 43), 43, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 43), "questioncounttext", [], "any", false, false, true, 43), 43, $this->source);
        echo ">
            ";
        // line 45
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "bShowxquestions", [], "any", false, false, true, 45) == true)) {
            // line 46
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "iTotalquestions", [], "any", false, false, true, 46) < 1)) {
                // line 47
                echo "                    ";
                echo gT("There are no questions in this survey.");
                echo "
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 48
($context["aSurveyInfo"] ?? null), "iTotalquestions", [], "any", false, false, true, 48) == 1)) {
                // line 49
                echo "                    ";
                echo gT("There is 1 question in this survey.");
                echo "
                ";
            } else {
                // line 51
                echo "                    ";
                echo twig_sprintf(gT("There are %s questions in this survey."), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "iTotalquestions", [], "any", false, false, true, 51), 51, $this->source));
                echo "
                ";
            }
            // line 53
            echo "            ";
        }
        // line 54
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/messages/welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 54,  129 => 53,  123 => 51,  117 => 49,  115 => 48,  110 => 47,  107 => 46,  104 => 45,  98 => 43,  92 => 42,  85 => 38,  79 => 37,  72 => 33,  66 => 32,  59 => 28,  53 => 27,  43 => 24,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/messages/welcome.twig", "C:\\xampp\\htdocs\\limesurvey\\themes\\survey\\fruity_twentythree\\views\\subviews\\messages\\welcome.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 45);
        static $filters = array("format" => 51);
        static $functions = array("processString" => 28, "gT" => 47);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['format'],
                ['processString', 'gT']
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
