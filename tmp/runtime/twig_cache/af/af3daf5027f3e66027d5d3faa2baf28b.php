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

/* /survey/questions/answer/arrays/texts/rows/answer_row.twig */
class __TwigTemplate_74c6188ef97692c668d7ac089d6bbe5a extends Template
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
        // line 16
        echo "
<!-- answer_row -->
<tr id=\"javatbd";
        // line 18
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 18, $this->source);
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed(($context["coreRowClass"] ?? null), 18, $this->source);
        echo " ";
        if (($context["odd"] ?? null)) {
            echo "ls-odd";
        } else {
            echo "ls-even";
        }
        if (($context["error"] ?? null)) {
            echo " ls-mandatory-error";
        }
        echo "\" role=\"group\" aria-labelledby=\"answertext";
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 18, $this->source);
        echo "\">
    <th
        id=\"answertext";
        // line 20
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 20, $this->source);
        echo "\"
        class=\"answertext control-label";
        // line 21
        if (($context["error"] ?? null)) {
            echo " text-danger";
        }
        if ((($context["answerwidth"] ?? null) == 0)) {
            echo " visually-hidden";
        }
        echo "\"
        role=\"rowheader\"
    >
        ";
        // line 24
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answertext"] ?? null), 24, $this->source));
        echo "
        ";
        // line 26
        echo "        ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 26), "hiddenField", [("java" . $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 26, $this->source)), ($context["value"] ?? null), ["id" => ("java" . $this->sandbox->ensureToStringAllowed(        // line 27
($context["myfname"] ?? null), 27, $this->source)), "disabled" => true]], "method", false, false, true, 26), 26, $this->source);
        // line 30
        echo "
    </th>

    <!-- all cells for this row -->
    ";
        // line 34
        echo $this->sandbox->ensureToStringAllowed(($context["answer_tds"] ?? null), 34, $this->source);
        echo "

    <!-- Total -->
    
    ";
        // line 38
        if (($context["rightTd"] ?? null)) {
            // line 39
            echo "        ";
            if (($context["rightTdEmpty"] ?? null)) {
                // line 40
                echo "            <td class=\"answertextright\"></td>
        ";
            } else {
                // line 42
                echo "            <td class=\"answertextright\">";
                echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answertext"] ?? null), 42, $this->source));
                echo "</td>
        ";
            }
            // line 44
            echo "    ";
        }
        // line 45
        echo "
    <!-- Formated total -->
    ";
        // line 47
        echo $this->sandbox->ensureToStringAllowed(($context["formatedRowTotal"] ?? null), 47, $this->source);
        echo "
</tr>
<!-- end of answer_row -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/texts/rows/answer_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 47,  115 => 45,  112 => 44,  106 => 42,  102 => 40,  99 => 39,  97 => 38,  90 => 34,  84 => 30,  82 => 27,  80 => 26,  76 => 24,  65 => 21,  61 => 20,  43 => 18,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/texts/rows/answer_row.twig", "C:\\xampp\\htdocs\\limesurvey\\application\\views\\survey\\questions\\answer\\arrays\\texts\\rows\\answer_row.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18);
        static $filters = array();
        static $functions = array("processString" => 24);

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
