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

/* ./subviews/registration/register_message.twig */
class __TwigTemplate_843ef71a0935ff235437b47069bb2960 extends Template
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
        // line 17
        echo "
";
        // line 18
        if (($context["registerSuccess"] ?? null)) {
            // line 19
            echo "    <div ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 19), "registermessagea", [], "any", false, false, true, 19), 19, $this->source);
            echo " class=\"large-heading\">
        ";
            // line 20
            echo gT("Thank you for registering.");
            echo "
        <div class=\"form-heading mt-3\">
            ";
            // line 22
            echo gT("You will receive an email shortly.");
            echo "
        </div>
    </div>
";
        } else {
            // line 26
            echo "    <div ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 26), "registermessageb", [], "any", false, false, true, 26), 26, $this->source);
            echo " class=\"form-heading\">
    ";
            // line 27
            if (($context["sStartDate"] ?? null)) {
                // line 28
                echo "        ";
                echo gT("You may register for this survey but you have to wait for the {{sStartDate}} before starting the survey.");
                echo "
    ";
            } else {
                // line 30
                echo "        ";
                echo gT("You may have to register to take part in this survey.");
                echo "
    ";
            }
            // line 32
            echo "    ";
            echo gT("Please fill in the information and we’ll send you a link immediately.");
            echo "
    </div>
";
        }
        // line 35
        echo "
";
        // line 36
        if ( !empty(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aErrors", [], "any", false, false, true, 36))) {
            // line 37
            echo "    <ul class='";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 37), "maincoldivdivbul", [], "any", false, false, true, 37), 37, $this->source);
            echo " alert alert-danger list-unstyled mt-3' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 37), "maincoldivdivbul", [], "any", false, false, true, 37), 37, $this->source);
            echo ">
        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aErrors", [], "any", false, false, true, 38));
            foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                // line 39
                echo "            <li>";
                echo $this->sandbox->ensureToStringAllowed($context["error"], 39, $this->source);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/registration/register_message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  103 => 39,  99 => 38,  92 => 37,  90 => 36,  87 => 35,  80 => 32,  74 => 30,  68 => 28,  66 => 27,  61 => 26,  54 => 22,  49 => 20,  44 => 19,  42 => 18,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/registration/register_message.twig", "C:\\xampp\\htdocs\\limesurvey\\themes\\survey\\fruity_twentythree\\views\\subviews\\registration\\register_message.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "for" => 38);
        static $filters = array();
        static $functions = array("gT" => 20, "empty" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                [],
                ['gT', 'empty']
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
