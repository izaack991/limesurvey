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

/* /survey/questions/answer/arrays/multiflexi/answer.twig */
class __TwigTemplate_81854fd832dd05ab3cba43c8dfd0a977 extends Template
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
        echo "<!-- answer -->
<div  role=\"group\" aria-labelledby=\"ls-question-text-";
        // line 17
        echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 17, $this->source);
        echo "\">
    <table class=\"";
        // line 18
        echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 18, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null), 18, $this->source);
        echo " table table-bordered table-hover\">

        <colgroup class=\"col-responses\">
            <col class=\"answertext\" style='width: ";
        // line 21
        echo $this->sandbox->ensureToStringAllowed(($context["answerwidth"] ?? null), 21, $this->source);
        echo "%;'/>

            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["labelans"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["ld"]) {
            // line 24
            echo "                <col class=\"";
            echo "\" style='width: ";
            echo $this->sandbox->ensureToStringAllowed(($context["cellwidth"] ?? null), 24, $this->source);
            echo "%;'/> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['ld'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
            ";
        // line 27
        if (($context["right_exists"] ?? null)) {
            // line 28
            echo "                <col class=\"answertextright ";
            echo "\" style='width: ";
            echo $this->sandbox->ensureToStringAllowed(($context["answerwidth"] ?? null), 28, $this->source);
            echo "%;' />
            ";
        }
        // line 30
        echo "        </colgroup>

        <thead>
            <tr class=\"ls-heading ls-header\">
                <td></td>

                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["labelans"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["label"]) {
            // line 37
            echo "                    <th id=\"answertext";
            echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 37, $this->source);
            echo "_";
            echo $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["labelcode"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), 37, $this->source);
            echo "\" class=\"answertext control-label\" role=\"columnheader\">";
            echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed($context["label"], 37, $this->source));
            echo "</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
                ";
        // line 40
        if (($context["right_exists"] ?? null)) {
            // line 41
            echo "                    <td></td>
                ";
        }
        // line 43
        echo "            </tr>
        </thead>

        <tbody>
                ";
        // line 48
        echo "                ";
        echo $this->sandbox->ensureToStringAllowed(($context["sAnswerRows"] ?? null), 48, $this->source);
        echo "
        </tbody>
    </table>
</div>
<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/multiflexi/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 48,  119 => 43,  115 => 41,  113 => 40,  110 => 39,  97 => 37,  93 => 36,  85 => 30,  78 => 28,  76 => 27,  73 => 26,  63 => 24,  59 => 23,  54 => 21,  46 => 18,  42 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/multiflexi/answer.twig", "C:\\xampp\\htdocs\\limesurvey\\application\\views\\survey\\questions\\answer\\arrays\\multiflexi\\answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 23, "if" => 27);
        static $filters = array();
        static $functions = array("processString" => 37);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
