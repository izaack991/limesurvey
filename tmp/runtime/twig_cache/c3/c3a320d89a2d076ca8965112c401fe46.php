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

/* /survey/questions/answer/arrays/multiflexi/rows/answer_row.twig */
class __TwigTemplate_3190a9df926b309e119b5f78daa34a97 extends Template
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
<!-- answer_row -->
<tr id=\"javatbd";
        // line 19
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 19, $this->source);
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed(($context["coreRowClass"] ?? null), 19, $this->source);
        echo " ";
        if (($context["odd"] ?? null)) {
            echo "ls-odd";
        } else {
            echo "ls-even";
        }
        if (($context["error"] ?? null)) {
            echo " ls-error-mandatory";
        }
        echo " ";
        if ((($context["error"] ?? null) && (($context["layout"] ?? null) == "checkbox"))) {
            echo " has-error";
        }
        echo "\" role=\"group\" aria-labelledby=\"answertext";
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 19, $this->source);
        echo "\">
    <th
        id=\"answertext";
        // line 21
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 21, $this->source);
        echo "\"
        class=\"answertext control-label";
        // line 22
        if ((($context["error"] ?? null) && (($context["layout"] ?? null) != "checkbox"))) {
            echo " text-danger\" ";
        }
        if ((($context["answerwidth"] ?? null) == 0)) {
            echo " visually-hidden";
        }
        echo "\",
        role=\"rowheader\"
    >
        ";
        // line 25
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answertext"] ?? null), 25, $this->source));
        echo "
        ";
        // line 27
        echo "        ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 27), "hiddenField", [("java" . $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 27, $this->source)), ($context["row_value"] ?? null), ["id" => ("java" . $this->sandbox->ensureToStringAllowed(        // line 28
($context["myfname"] ?? null), 28, $this->source)), "disabled" => true]], "method", false, false, true, 27), 27, $this->source);
        // line 31
        echo "
    </th>
        ";
        // line 34
        echo "        ";
        echo $this->sandbox->ensureToStringAllowed(($context["answer_tds"] ?? null), 34, $this->source);
        echo "
    <!-- right -->
    ";
        // line 36
        if (($context["rightTd"] ?? null)) {
            // line 37
            echo "        <td class=\"answertextright\">";
            echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answertextright"] ?? null), 37, $this->source));
            echo "</td>
    ";
        }
        // line 39
        echo "</tr>
<!-- end of answer_row -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/multiflexi/rows/answer_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 39,  100 => 37,  98 => 36,  92 => 34,  88 => 31,  86 => 28,  84 => 27,  80 => 25,  69 => 22,  65 => 21,  43 => 19,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/multiflexi/rows/answer_row.twig", "C:\\xampp\\htdocs\\limesurvey\\application\\views\\survey\\questions\\answer\\arrays\\multiflexi\\rows\\answer_row.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array();
        static $functions = array("processString" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['processString']
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
