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

/* ./subviews/content/userforms.twig */
class __TwigTemplate_4b71b61f8a85331102c9173955d8614f extends Template
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
        // line 18
        echo "
<!-- Main Row -->
<div id=\"";
        // line 20
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 20), "mainrow", [], "any", false, false, true, 20), 20, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 20), "mainrow", [], "any", false, false, true, 20), 20, $this->source);
        echo ">

    <!-- Main Col -->
    <div class=\"";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 23), "maincol", [], "any", false, false, true, 23), 23, $this->source);
        echo " col-centered \" id=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 23), "maincol", [], "any", false, false, true, 23), 23, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 23), "maincol", [], "any", false, false, true, 23), 23, $this->source);
        echo ">
        ";
        // line 24
        echo twig_include($this->env, $context, "./subviews/navigation/language_changer_form.twig");
        echo "
        <div class='";
        // line 25
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aForm", [], "any", false, false, true, 25), "sType", [], "any", false, false, true, 25), 25, $this->source);
        echo "-page' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 25), "maincoldiv", [], "any", false, false, true, 25), 25, $this->source);
        echo ">
                ";
        // line 26
        $context["sUserformContent"] = (("./subviews/logincomponents/" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aForm", [], "any", false, false, true, 26), "sType", [], "any", false, false, true, 26), 26, $this->source)) . ".twig");
        // line 27
        echo "                ";
        $this->loadTemplate(($context["sUserformContent"] ?? null), "./subviews/content/userforms.twig", 27)->display($context);
        // line 28
        echo "        </div>
    </div> <!-- main col -->
</div> <!-- main row -->
";
    }

    public function getTemplateName()
    {
        return "./subviews/content/userforms.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  71 => 27,  69 => 26,  63 => 25,  59 => 24,  51 => 23,  43 => 20,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/userforms.twig", "C:\\xampp\\htdocs\\limesurvey\\themes\\survey\\fruity_twentythree\\views\\subviews\\content\\userforms.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 26, "include" => 27);
        static $filters = array();
        static $functions = array("include" => 24);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                [],
                ['include']
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
