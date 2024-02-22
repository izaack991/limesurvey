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

/* ./subviews/header/progress_bar.twig */
class __TwigTemplate_0f7573fde49f94959c4ef75ac0826b87 extends Template
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
        if ((((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "showprogress", [], "any", false, false, true, 19) == "Y") && (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "format", [], "any", false, false, true, 19) != "A")) &&  !twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 19))) {
            // line 20
            echo "    ";
            $context["progressValue"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "progress", [], "any", false, false, true, 20), "total", [], "any", false, false, true, 20) > 0)) ? (intval((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "progress", [], "any", false, false, true, 20), "currentstep", [], "any", false, false, true, 20) - 1) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "progress", [], "any", false, false, true, 20), "total", [], "any", false, false, true, 20)) * 100))) : (0));
            // line 21
            echo "    <!-- Top container -->
    <div class=\"";
            // line 22
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 22), "topcontainer", [], "any", false, false, true, 22), 22, $this->source);
            echo " container-fluid\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 22), "topcontainer", [], "any", false, false, true, 22), 22, $this->source);
            echo " >
        <div class=\"row justify-content-center\">
            <div class=\"";
            // line 24
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 24), "topcontent", [], "any", false, false, true, 24), 24, $this->source);
            echo " col-12 col-xl-8\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 24), "topcontent", [], "any", false, false, true, 24), 24, $this->source);
            echo ">
                <div class=\"ls-progress-container\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
                     title=\"";
            // line 26
            echo sprintf(gT("You have completed %s%% of this survey"), $this->sandbox->ensureToStringAllowed(($context["progressValue"] ?? null), 26, $this->source));
            echo "\">
                    <div class=\"visually-hidden\">";
            // line 27
            echo sprintf(gT("You have completed %s%% of this survey"), $this->sandbox->ensureToStringAllowed(($context["progressValue"] ?? null), 27, $this->source));
            echo "</div>
                    <div class=\"";
            // line 28
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 28), "progress", [], "any", false, false, true, 28), 28, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 28), "progress", [], "any", false, false, true, 28), 28, $this->source);
            echo " aria-hidden=\"true\" data-bs-placement=\"bottom\">
                        <div class=\"";
            // line 29
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 29), "progressbar", [], "any", false, false, true, 29), 29, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 29), "progressbar", [], "any", false, false, true, 29), 29, $this->source);
            echo " style=\"width: ";
            echo $this->sandbox->ensureToStringAllowed(($context["progressValue"] ?? null), 29, $this->source);
            echo "%;\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/header/progress_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 29,  69 => 28,  65 => 27,  61 => 26,  54 => 24,  47 => 22,  44 => 21,  41 => 20,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/progress_bar.twig", "C:\\xampp\\htdocs\\limesurvey\\themes\\survey\\fruity_twentythree\\views\\subviews\\header\\progress_bar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "set" => 20);
        static $filters = array();
        static $functions = array("intval" => 20, "sprintf" => 26, "gT" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['intval', 'sprintf', 'gT']
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
