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

/* ./subviews/logincomponents/captcha.twig */
class __TwigTemplate_2e7ab30a53db57d238fff172af74b5fc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'formheading' => [$this, 'block_formheading'],
            'description' => [$this, 'block_description'],
            'formcontent' => [$this, 'block_formcontent'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 1), "maincoldivdiva", [], "any", false, false, true, 1), 1, $this->source);
        echo " form-heading\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 1), "maincoldivdiva", [], "any", false, false, true, 1), 1, $this->source);
        echo ">
    ";
        // line 2
        $this->displayBlock('formheading', $context, $blocks);
        // line 5
        echo "</div>
<div class=\"";
        // line 6
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 6), "maincoldivdivb", [], "any", false, false, true, 6), 6, $this->source);
        echo " \" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 6), "maincoldivdivb", [], "any", false, false, true, 6), 6, $this->source);
        echo ">

    ";
        // line 8
        $this->displayBlock('description', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        if ( !empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aForm", [], "any", false, false, true, 12), "aEnterErrors", [], "any", false, false, true, 12))) {
            // line 13
            echo "        <ul class='";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 13), "maincoldivdivbul", [], "any", false, false, true, 13), 13, $this->source);
            echo " alert alert-danger list-unstyled mt-3' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 13), "maincoldivdivbul", [], "any", false, false, true, 13), 13, $this->source);
            echo ">
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aForm", [], "any", false, false, true, 14), "aEnterErrors", [], "any", false, false, true, 14));
            foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                // line 15
                echo "                <li>";
                echo $this->sandbox->ensureToStringAllowed($context["error"], 15, $this->source);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </ul>
    ";
        }
        // line 19
        echo "
    <div class=\"form-";
        // line 20
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aForm", [], "any", false, false, true, 20), "sType", [], "any", false, false, true, 20), 20, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 20), "maincoldivdivbdiv", [], "any", false, false, true, 20), 20, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 20), "maincoldivdivbdiv", [], "any", false, false, true, 20), 20, $this->source);
        echo " >
        ";
        // line 26
        echo "        ";
        // line 27
        $context["htmlOptions"] = ["id" => ("form-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
($context["aSurveyInfo"] ?? null), "aForm", [], "any", false, false, true, 28), "sType", [], "any", false, false, true, 28), 28, $this->source)), "name" => "limesurvey", "class" => "ls-form form form-horizontal"];
        // line 33
        echo "
        ";
        // line 35
        echo "        <!-- Start of the main Form-->
        ";
        // line 36
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
($context["C"] ?? null), "Html", [], "any", false, false, true, 37), "form", [twig_get_attribute($this->env, $this->source,         // line 38
($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 38), "post",         // line 40
($context["htmlOptions"] ?? null)], "method", false, false, true, 37), 37, $this->source);
        // line 42
        echo "

        ";
        // line 44
        $this->displayBlock('formcontent', $context, $blocks);
        // line 77
        echo "        </form>
    </div>
</div>
";
    }

    // line 2
    public function block_formheading($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        ";
        echo gT("Before you start, please prove you are human.");
        echo "
    ";
    }

    // line 8
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        
    ";
    }

    // line 44
    public function block_formcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "
            <div class='";
        // line 46
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 46), "maincolformdivb", [], "any", false, false, true, 46), 46, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 46), "maincolformdivb", [], "any", false, false, true, 46), 46, $this->source);
        echo ">
                <!-- Doesn't seems aria capable -->
                <label class='";
        // line 48
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 48), "maincolformdivblabel", [], "any", false, false, true, 48), 48, $this->source);
        echo " control-label' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 48), "maincolformdivblabel", [], "any", false, false, true, 48), 48, $this->source);
        echo " >
                    ";
        // line 49
        echo gT("Please solve the following equation:");
        echo "<small class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 49), "maincolformdivblabelsmall", [], "any", false, false, true, 49), 49, $this->source);
        echo " superset asterisk ri-asterisk\"  ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 49), "maincolformdivblabelsmall", [], "any", false, false, true, 49), 49, $this->source);
        echo " ></small>
                    <span  class=\"";
        // line 50
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 50), "maincolformdivblabelspan", [], "any", false, false, true, 50), 50, $this->source);
        echo " visually-hidden asterisk\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 50), "maincolformdivblabelspan", [], "any", false, false, true, 50), 50, $this->source);
        echo ">
                        ( ";
        // line 51
        echo gT("Mandatory");
        echo " )
                    </span>
                </label>
                <div class=\"row\">
                    <div class='";
        // line 55
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 55), "maincolformdivbdivdivdiv", [], "any", false, false, true, 55), 55, $this->source);
        echo " captcha-container col-xl-3 col-lg-12 align-items-center' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 55), "maincolformdivbdivdivdiv", [], "any", false, false, true, 55), 55, $this->source);
        echo " >
                        ";
        // line 57
        echo "                        ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, LS_Twig_Extension::renderCaptcha(), "renderOut", [], "method", false, false, true, 57), 57, $this->source);
        echo "
                        <a href=\"#\" class=\"btn btn-outline-secondary\" id=\"reloadCaptcha\"
                           title=\"";
        // line 59
        echo gT("Reload captcha");
        echo "\" data-toggle=\"captcha\"><i
                                    class=\"ri-refresh-line\"></i></a>
                    </div>
                    <div class=\"";
        // line 62
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 62), "maincolformdivbdiv", [], "any", false, false, true, 62), 62, $this->source);
        echo " col-xl-9 col-lg-12 captcha-input align-self-center\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 62), "maincolformdivbdiv", [], "any", false, false, true, 62), 62, $this->source);
        echo ">
                        <input class='form-control ls-important-field ";
        // line 63
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 63), "maincolformdivbdivdivinput", [], "any", false, false, true, 63), 63, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 63), "maincolformdivbdivdivinput", [], "any", false, false, true, 63), 63, $this->source);
        echo " placeholder=\"";
        echo gT("Enter result here - numbers only");
        echo "\">
                    </div>
                </div>
            </div>

            <div class='";
        // line 68
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 68), "maincolformdivc", [], "any", false, false, true, 68), 68, $this->source);
        echo " ' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 68), "maincolformdivc", [], "any", false, false, true, 68), 68, $this->source);
        echo ">
                <div class='";
        // line 69
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 69), "maincolformdivcdiv", [], "any", false, false, true, 69), 69, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 69), "maincolformdivcdiv", [], "any", false, false, true, 69), 69, $this->source);
        echo ">
                    <button type=\"submit\"
                            class='";
        // line 71
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 71), "maincolformdivcdivbutton", [], "any", false, false, true, 71), 71, $this->source);
        echo " btn btn-primary' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 71), "maincolformdivcdivbutton", [], "any", false, false, true, 71), 71, $this->source);
        echo ">
                        ";
        // line 72
        echo gT("Continue");
        echo "
                    </button>
                </div>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "./subviews/logincomponents/captcha.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 72,  242 => 71,  235 => 69,  229 => 68,  217 => 63,  211 => 62,  205 => 59,  199 => 57,  193 => 55,  186 => 51,  180 => 50,  172 => 49,  166 => 48,  159 => 46,  156 => 45,  152 => 44,  147 => 9,  143 => 8,  136 => 3,  132 => 2,  125 => 77,  123 => 44,  119 => 42,  117 => 40,  116 => 38,  115 => 37,  114 => 36,  111 => 35,  108 => 33,  106 => 28,  105 => 27,  103 => 26,  95 => 20,  92 => 19,  88 => 17,  79 => 15,  75 => 14,  68 => 13,  66 => 12,  63 => 11,  61 => 8,  54 => 6,  51 => 5,  49 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/logincomponents/captcha.twig", "C:\\xampp\\htdocs\\limesurvey\\themes\\survey\\fruity_twentythree\\views\\subviews\\logincomponents\\captcha.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 2, "if" => 12, "for" => 14, "set" => 27);
        static $filters = array();
        static $functions = array("empty" => 12, "gT" => 3, "renderCaptcha" => 57);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for', 'set'],
                [],
                ['empty', 'gT', 'renderCaptcha']
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
