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

/* /survey/questions/answer/arrays/multiflexi/rows/cells/answer_td.twig */
class __TwigTemplate_38b2a38358caceaf1c7df83517b79524 extends Template
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
        // line 24
        echo "
<!-- answer_td -->
<td class=\"answer_cell_";
        // line 26
        echo $this->sandbox->ensureToStringAllowed(($context["ld"] ?? null), 26, $this->source);
        echo " answer-item ";
        echo $this->sandbox->ensureToStringAllowed(($context["answertypeclass"] ?? null), 26, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null), 26, $this->source);
        if (($context["error"] ?? null)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 28
        echo "        ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 28), "hiddenField", [("java" . $this->sandbox->ensureToStringAllowed(($context["myfname2"] ?? null), 28, $this->source)), ($context["value"] ?? null), ["id" => ("java" . $this->sandbox->ensureToStringAllowed(        // line 29
($context["myfname2"] ?? null), 29, $this->source)), "disabled" => true]], "method", false, false, true, 28), 28, $this->source);
        // line 32
        echo "
        <label for=\"answer";
        // line 33
        echo $this->sandbox->ensureToStringAllowed(($context["myfname2"] ?? null), 33, $this->source);
        echo "\" class='ls-label-xs-visibility' aria-hidden=\"true\">
            ";
        // line 34
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["dataTitle"] ?? null), 34, $this->source));
        echo "
        </label>
        ";
        // line 36
        if ((($context["inputboxlayout"] ?? null) == false)) {
            // line 37
            echo "            <!-- InputBox Layout False -->
            <select
                ";
            // line 40
            echo "                class=\"form-select text-end\"
                name=\"";
            // line 41
            echo $this->sandbox->ensureToStringAllowed(($context["myfname2"] ?? null), 41, $this->source);
            echo "\"
                id=\"answer";
            // line 42
            echo $this->sandbox->ensureToStringAllowed(($context["myfname2"] ?? null), 42, $this->source);
            echo "\"
                aria-labelledby=\"answertext";
            // line 43
            echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 43, $this->source);
            echo "_";
            echo $this->sandbox->ensureToStringAllowed(($context["dataCode"] ?? null), 43, $this->source);
            echo "\"
            >
                <option value=\"\">
                    ";
            // line 46
            echo gT("...");
            echo "
                </option>
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["minvalue"] ?? null), ($context["maxvalue"] ?? null), ($context["stepvalue"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 49
                echo "                    ";
                $context["selected"] = ((( !twig_test_empty(($context["value"] ?? null)) && (gT($this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 49, $this->source)) == gT($this->sandbox->ensureToStringAllowed($context["i"], 49, $this->source))))) ? ("SELECTED") : (""));
                // line 50
                echo "                    <option value=\"";
                echo twig_replace_filter($this->sandbox->ensureToStringAllowed($context["i"], 50, $this->source), ["." => ($context["sSeparator"] ?? null)]);
                echo "\" ";
                echo $this->sandbox->ensureToStringAllowed(($context["selected"] ?? null), 50, $this->source);
                echo ">
                        ";
                // line 51
                echo twig_replace_filter($this->sandbox->ensureToStringAllowed($context["i"], 51, $this->source), ["." => ($context["sSeparator"] ?? null)]);
                echo "
                    </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            </select>
        ";
        } elseif ((        // line 55
($context["inputboxlayout"] ?? null) == true)) {
            // line 56
            echo "            <!-- InputBox Layout -->
            ";
            // line 57
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 57), "textField", [($context["myfname2"] ?? null), ($context["value"] ?? null), ["id" => ("answer" . $this->sandbox->ensureToStringAllowed(            // line 58
($context["myfname2"] ?? null), 58, $this->source)), "aria-labelledby" => ((("answertext" . $this->sandbox->ensureToStringAllowed(            // line 59
($context["basename"] ?? null), 59, $this->source)) . "_") . $this->sandbox->ensureToStringAllowed(($context["dataCode"] ?? null), 59, $this->source)), "class" => (("multiflexitext form-control " . $this->sandbox->ensureToStringAllowed(            // line 60
($context["answertypeclass"] ?? null), 60, $this->source)) . " "), "title" => gT("Only numbers may be entered in this field."), "size" => ((            // line 62
($context["inputsize"] ?? null)) ? (($context["inputsize"] ?? null)) : (null)), "maxlength" => ((            // line 63
($context["maxlength"] ?? null)) ? (($context["maxlength"] ?? null)) : (null)), "data-number" => 1]], "method", false, false, true, 57), 57, $this->source);
            // line 66
            echo "
        ";
        }
        // line 68
        echo "</td>
<!-- end of answer_td -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/multiflexi/rows/cells/answer_td.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 68,  138 => 66,  136 => 63,  135 => 62,  134 => 60,  133 => 59,  132 => 58,  131 => 57,  128 => 56,  126 => 55,  123 => 54,  114 => 51,  107 => 50,  104 => 49,  100 => 48,  95 => 46,  87 => 43,  83 => 42,  79 => 41,  76 => 40,  72 => 37,  70 => 36,  65 => 34,  61 => 33,  58 => 32,  56 => 29,  54 => 28,  43 => 26,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/multiflexi/rows/cells/answer_td.twig", "C:\\xampp\\htdocs\\limesurvey\\application\\views\\survey\\questions\\answer\\arrays\\multiflexi\\rows\\cells\\answer_td.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 26, "for" => 48, "set" => 49);
        static $filters = array("t" => 49, "replace" => 50);
        static $functions = array("processString" => 34, "gT" => 46, "range" => 48);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['t', 'replace'],
                ['processString', 'gT', 'range']
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
