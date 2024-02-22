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

/* /survey/questions/answer/arrays/texts/rows/cells/answer_td.twig */
class __TwigTemplate_aad97757dce4753902b9582fda72f761 extends Template
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
        // line 13
        echo "
<!-- answer_td -->
<td class=\"answer_cell_";
        // line 15
        echo $this->sandbox->ensureToStringAllowed(($context["ld"] ?? null), 15, $this->source);
        echo " answer-item text-item";
        if (($context["error"] ?? null)) {
            echo " has-error";
        }
        echo "\">
    <label class=\"ls-label-xs-visibility\" for=\"answer";
        // line 16
        echo $this->sandbox->ensureToStringAllowed(($context["myfname2"] ?? null), 16, $this->source);
        echo "\" aria-hidden=\"true\">
        ";
        // line 17
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["labelText"] ?? null), 17, $this->source));
        echo "
    </label>
    ";
        // line 20
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 20), "textField", [($context["myfname2"] ?? null), ($context["value"] ?? null), ["id" => ("answer" . $this->sandbox->ensureToStringAllowed(        // line 21
($context["myfname2"] ?? null), 21, $this->source)), "aria-labelledby" => ((("answertext" . $this->sandbox->ensureToStringAllowed(        // line 22
($context["basename"] ?? null), 22, $this->source)) . "_") . $this->sandbox->ensureToStringAllowed(($context["ld"] ?? null), 22, $this->source)), "class" => ("form-control " . $this->sandbox->ensureToStringAllowed(        // line 23
($context["kpclass"] ?? null), 23, $this->source)), "size" => ((        // line 24
($context["inputsize"] ?? null)) ? (($context["inputsize"] ?? null)) : (null)), "maxlength" => ((        // line 25
($context["maxlength"] ?? null)) ? (($context["maxlength"] ?? null)) : (null)), "placeholder" => LS_Twig_Extension::flatString(LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(        // line 26
($context["placeholder"] ?? null), 26, $this->source), 1), 1), "data-number" =>         // line 27
($context["isNumber"] ?? null), "data-integer" =>         // line 28
($context["isInteger"] ?? null)]], "method", false, false, true, 20), 20, $this->source);
        // line 30
        echo "
    ";
        // line 32
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 32), "hiddenField", [("java" . $this->sandbox->ensureToStringAllowed(($context["myfname2"] ?? null), 32, $this->source)), ($context["value"] ?? null), ["id" => ("java" . $this->sandbox->ensureToStringAllowed(        // line 33
($context["myfname2"] ?? null), 33, $this->source)), "disabled" => true]], "method", false, false, true, 32), 32, $this->source);
        // line 36
        echo "
</td>
<!-- end of answer_td -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/texts/rows/cells/answer_td.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 36,  76 => 33,  74 => 32,  71 => 30,  69 => 28,  68 => 27,  67 => 26,  66 => 25,  65 => 24,  64 => 23,  63 => 22,  62 => 21,  60 => 20,  55 => 17,  51 => 16,  43 => 15,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/texts/rows/cells/answer_td.twig", "C:\\xampp\\htdocs\\limesurvey\\application\\views\\survey\\questions\\answer\\arrays\\texts\\rows\\cells\\answer_td.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15);
        static $filters = array();
        static $functions = array("processString" => 17, "flatString" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['processString', 'flatString']
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
