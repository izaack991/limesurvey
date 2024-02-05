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

/* ./subviews/navigation/language_changer.twig */
class __TwigTemplate_9f827b70b5d3ea338e676225528ac16c extends Template
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
        // line 11
        echo "
";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "alanguageChanger", [], "any", false, false, true, 12), "show", [], "any", false, false, true, 12) == true)) {
            // line 13
            echo "    
    ";
            // line 15
            echo "    ";
            $context["aLCD"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "alanguageChanger", [], "any", false, false, true, 15), "datas", [], "any", false, false, true, 15);
            // line 16
            echo "
    ";
            // line 22
            echo "    ";
            $context["htmlOptions"] = ["class" => "form-control", "data-targeturl" => twig_get_attribute($this->env, $this->source,             // line 24
($context["aLCD"] ?? null), "targetUrl", [], "any", false, false, true, 24)];
            // line 27
            echo "    <!-- Language Changer -->
    <div class=\" ";
            // line 28
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 28), "formgroup", [], "any", false, false, true, 28), 28, $this->source);
            echo " form-change-lang row row-cols-lg-auto g-1\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 28), "formgroup", [], "any", false, false, true, 28), 28, $this->source);
            echo " >
        <div class=\"col-auto\">
            <label class=\"";
            // line 30
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 30), "controllabel", [], "any", false, false, true, 30), 30, $this->source);
            echo " col-form-label fw-bold control-label\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 30), "controllabel", [], "any", false, false, true, 30), 30, $this->source);
            echo " for=\"lang\">
            <span ";
            // line 31
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 31), "languagechanger", [], "any", false, false, true, 31), 31, $this->source);
            echo ">
                <span class=\"language-icon ri-earth-line\"></span>
                ";
            // line 33
            echo gT("Change language");
            echo "
            </span>
            </label>
        </div>

        <div class=\"col-auto\">
            <div id=\"lang-select\">
                <select class=\"col-form-label\" name=\"lang\" id=\"language-changer-select\">
                    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aLCD"] ?? null), "aListLang", [], "any", false, false, true, 41));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 42
                echo "                        ";
                if (($context["key"] == twig_get_attribute($this->env, $this->source, ($context["aLCD"] ?? null), "sSelected", [], "any", false, false, true, 42))) {
                    // line 43
                    echo "                        <option value=\"";
                    echo $this->sandbox->ensureToStringAllowed($context["key"], 43, $this->source);
                    echo "\" selected=\"selected\">";
                    echo $this->sandbox->ensureToStringAllowed($context["value"], 43, $this->source);
                    echo " </option>
                         ";
                } else {
                    // line 45
                    echo "                             <option value=\"";
                    echo $this->sandbox->ensureToStringAllowed($context["key"], 45, $this->source);
                    echo "\">";
                    echo $this->sandbox->ensureToStringAllowed($context["value"], 45, $this->source);
                    echo "</option>
                             ";
                }
                // line 47
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                </select>
            </div>
        <!-- for no js functionality (need form) -->
        ";
            // line 51
            $context["buttonhtmlOptions"] = ["type" => "submit", "value" => "changelang", "name" => "move", "class" => "btn btn-primary ls-language-changer-item "];
            // line 58
            echo "        ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 59
($context["C"] ?? null), "Html", [], "any", false, false, true, 59), "htmlButton", [gT("Change the language"),             // line 61
($context["buttonhtmlOptions"] ?? null)], "method", false, false, true, 59), 59, $this->source);
            // line 63
            echo "
        </div>
    </div>

    ";
            // line 68
            echo "    ";
            echo LS_Twig_Extension::registerScript("activateLanguageChanger", "activateLanguageChanger(); ", "POS_END");
            echo "
    
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/language_changer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 68,  130 => 63,  128 => 61,  127 => 59,  125 => 58,  123 => 51,  118 => 48,  112 => 47,  104 => 45,  96 => 43,  93 => 42,  89 => 41,  78 => 33,  73 => 31,  67 => 30,  60 => 28,  57 => 27,  55 => 24,  53 => 22,  50 => 16,  47 => 15,  44 => 13,  42 => 12,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/language_changer.twig", "C:\\xampp\\htdocs\\limesurvey\\themes\\survey\\fruity_twentythree\\views\\subviews\\navigation\\language_changer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12, "set" => 15, "for" => 41);
        static $filters = array();
        static $functions = array("gT" => 33, "registerScript" => 68);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                [],
                ['gT', 'registerScript']
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
