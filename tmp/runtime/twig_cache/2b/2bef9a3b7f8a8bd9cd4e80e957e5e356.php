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

/* /survey/questions/answer/arrays/texts/answer.twig */
class __TwigTemplate_3a2de9b263cd9efe68a17ec98bfed0a3 extends Template
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
<!-- Multi Text -->

<!-- answer -->
<div role=\"group\" aria-labelledby=\"ls-question-text-";
        // line 28
        echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 28, $this->source);
        echo "\">
    <table ";
        // line 29
        echo $this->sandbox->ensureToStringAllowed(($context["q_table_id_HTML"] ?? null), 29, $this->source);
        echo " class=\"";
        echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 29, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null), 29, $this->source);
        echo " table table-bordered table-hover ";
        echo $this->sandbox->ensureToStringAllowed(($context["totals_class"] ?? null), 29, $this->source);
        echo "\" role=\"group\" aria-labelledby=\"ls-question-text-";
        echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 29, $this->source);
        echo "\">
        <colgroup class=\"col-responses\">

            <!-- Column for answer label -->
            <col class=\"answertext\" style='width: ";
        // line 33
        echo $this->sandbox->ensureToStringAllowed(($context["answerwidth"] ?? null), 33, $this->source);
        echo "%;'/>

            <!-- columns for answers -->
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["labelans"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["ld"]) {
            // line 37
            echo "                <col class=\"";
            echo " ";
            echo "\" style='width: ";
            echo $this->sandbox->ensureToStringAllowed(($context["cellwidth"] ?? null), 37, $this->source);
            echo "%;' />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['ld'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
            <!-- columns for right -->
            ";
        // line 41
        if (($context["right_exists"] ?? null)) {
            // line 42
            echo "                <col class=\"answertextright ";
            echo "\" style='width: ";
            echo $this->sandbox->ensureToStringAllowed(($context["cellwidth"] ?? null), 42, $this->source);
            echo "%;' />
            ";
        }
        // line 44
        echo "
            <!-- columns for Grand Total -->
            ";
        // line 46
        if (($context["showGrandTotal"] ?? null)) {
            // line 47
            echo "                <col class=\"grandtotal ";
            echo "\" style='width: ";
            echo $this->sandbox->ensureToStringAllowed(($context["cellwidth"] ?? null), 47, $this->source);
            echo "%;' />
            ";
        }
        // line 49
        echo "        </colgroup>

        <thead>
            <tr class=\"ls-heading ls-header\">
                <td>
                    &nbsp;
                </td>
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["labelans"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["text"]) {
            // line 57
            echo "                    <th id=\"answertext";
            echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 57, $this->source);
            echo "_";
            echo $this->sandbox->ensureToStringAllowed($context["code"], 57, $this->source);
            echo "\" class=\"answertext control-label\" role=\"columnheader\">
                        ";
            // line 58
            echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed($context["text"], 58, $this->source));
            echo "
                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
                ";
        // line 62
        if (($context["right_exists"] ?? null)) {
            // line 63
            echo "                    <td>&nbsp;</td>
                ";
        }
        // line 65
        echo "
                ";
        // line 66
        echo $this->sandbox->ensureToStringAllowed(($context["col_head"] ?? null), 66, $this->source);
        echo "
            </tr>
        </thead>

        <tbody>

                ";
        // line 73
        echo "                ";
        echo $this->sandbox->ensureToStringAllowed(($context["sRows"] ?? null), 73, $this->source);
        echo "

            ";
        // line 75
        if (($context["showtotals"] ?? null)) {
            // line 76
            echo "                <tr class=\"total\">
                    ";
            // line 77
            echo $this->sandbox->ensureToStringAllowed(($context["row_head"] ?? null), 77, $this->source);
            echo "
                    ";
            // line 78
            echo $this->sandbox->ensureToStringAllowed(($context["total"] ?? null), 78, $this->source);
            echo "
                </tr>
            ";
        }
        // line 81
        echo "        </tbody>
    </table>
</div>
<!-- end of answer -->

";
        // line 86
        if (((($context["showGrandTotal"] ?? null) == true) || (($context["showtotals"] ?? null) == true))) {
            // line 87
            echo "    ";
            echo LS_Twig_Extension::registerPackage("question-array-numeric");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/texts/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 87,  189 => 86,  182 => 81,  176 => 78,  172 => 77,  169 => 76,  167 => 75,  161 => 73,  152 => 66,  149 => 65,  145 => 63,  143 => 62,  140 => 61,  131 => 58,  124 => 57,  120 => 56,  111 => 49,  104 => 47,  102 => 46,  98 => 44,  91 => 42,  89 => 41,  85 => 39,  74 => 37,  70 => 36,  64 => 33,  49 => 29,  45 => 28,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/texts/answer.twig", "C:\\xampp\\htdocs\\limesurvey\\application\\views\\survey\\questions\\answer\\arrays\\texts\\answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 36, "if" => 41);
        static $filters = array();
        static $functions = array("processString" => 58, "registerPackage" => 87);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                [],
                ['processString', 'registerPackage']
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
