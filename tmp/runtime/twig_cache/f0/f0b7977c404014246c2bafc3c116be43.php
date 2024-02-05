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

/* ./subviews/navigation/question_index_menu.twig */
class __TwigTemplate_38a8daab31fdf5ae97d95d47306111ba extends Template
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
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 28), "bShow", [], "any", false, false, true, 28) == true)) {
            // line 29
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "format", [], "any", false, false, true, 29) == "G")) {
                // line 30
                echo "        <!-- Question index, group, ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 30), "type", [], "any", false, false, true, 30), 30, $this->source);
                echo " -->
        <li class=\"dropdown nav-item ls-no-js-hidden index-menu-";
                // line 31
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 31), "type", [], "any", false, false, true, 31), 31, $this->source);
                echo "\">
            <a class=\"dropdown-toggle nav-link\" data-bs-toggle=\"dropdownCustom\" data-navtargetid=\"index-dropdown\" role=\"button\" aria-haspopup=\"true\"
               aria-expanded=\"false\" href=\"#\">
                ";
                // line 34
                echo gT("Question index");
                echo "
            </a>
            <ul id=\"index-dropdown\" class=\"dropdown-menu dropdown-menu-end\">
                ";
                // line 37
                echo twig_include($this->env, $context, "./subviews/navigation/back.twig");
                echo "
                ";
                // line 39
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 39), "items", [], "any", false, false, true, 39));
                foreach ($context['_seq'] as $context["step"] => $context["indexItem"]) {
                    // line 40
                    echo "                    ";
                    $context["statusClass"] = "";
                    // line 41
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 41), "index-item-unanswered", [], "any", true, true, true, 41) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 41), "index-item-unanswered", [], "any", false, false, true, 41) == true))) {
                        // line 42
                        echo "                        ";
                        $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 42, $this->source) . " index-warning");
                        // line 43
                        echo "                    ";
                    }
                    // line 44
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 44), "index-item-error", [], "any", true, true, true, 44) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 44), "index-item-error", [], "any", false, false, true, 44) == true))) {
                        // line 45
                        echo "                        ";
                        $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 45, $this->source) . " index-danger");
                        // line 46
                        echo "                    ";
                    }
                    // line 47
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 47), "index-item-current", [], "any", true, true, true, 47) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 47), "index-item-current", [], "any", false, false, true, 47) == true))) {
                        // line 48
                        echo "                        ";
                        $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 48, $this->source) . " disabled");
                        // line 49
                        echo "                    ";
                    }
                    // line 50
                    echo "                    <li class=\"list-group-item ";
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "coreClass", [], "any", false, false, true, 50), 50, $this->source);
                    echo "\">
                        <a href='";
                    // line 51
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "url", [], "any", false, false, true, 51), 51, $this->source);
                    echo "' data-limesurvey-submit='";
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "submit", [], "any", false, false, true, 51), 51, $this->source);
                    echo "'
                           class='dropdown-item  ";
                    // line 52
                    echo $this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 52, $this->source);
                    echo "'>
                            ";
                    // line 53
                    echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "text", [], "any", false, false, true, 53), 53, $this->source);
                    echo "
                        </a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['step'], $context['indexItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "            </ul>
        </li>
    ";
            }
            // line 60
            echo "
    ";
            // line 62
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "format", [], "any", false, false, true, 62) == "S")) {
                // line 63
                echo "        <!-- Question index, question by question, ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 63), "type", [], "any", false, false, true, 63), 63, $this->source);
                echo " -->
        <li class=\"dropdown nav-item ls-no-js-hidden dropdown index-menu-";
                // line 64
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 64), "type", [], "any", false, false, true, 64), 64, $this->source);
                echo "\">
            <a class=\"dropdown-toggle nav-link\" data-bs-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
               aria-expanded=\"false\">
                ";
                // line 67
                echo gT("Question index");
                echo "
                <span class=\"caret\"></span>
            </a>
            <!-- TODO: Remove this when support is added -->
            <ul class=\"dropdown-menu dropdown-menu-end\">
                ";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 72), "items", [], "any", false, false, true, 72));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 73
                    echo "                    ";
                    // line 74
                    echo "                    <li>
                        <div class=\"dropdown-item-text\">
                            ";
                    // line 76
                    echo LS_Twig_Extension::flatEllipsizeText($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["group"], "text", [], "any", false, false, true, 76), 76, $this->source), true, 30, " &hellip; ", 0.6);
                    echo "
                        </div>
                    </li>
                            ";
                    // line 79
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "questions", [], "any", false, false, true, 79));
                    foreach ($context['_seq'] as $context["step"] => $context["indexItem"]) {
                        // line 80
                        echo "                                ";
                        $context["statusClass"] = "";
                        // line 81
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 81), "index-item-unanswered", [], "any", true, true, true, 81) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 81), "index-item-unanswered", [], "any", false, false, true, 81) == true))) {
                            // line 82
                            echo "                                    ";
                            $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 82, $this->source) . " bg-warning");
                            // line 83
                            echo "                                ";
                        }
                        // line 84
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 84), "index-item-error", [], "any", true, true, true, 84) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 84), "index-item-error", [], "any", false, false, true, 84) == true))) {
                            // line 85
                            echo "                                    ";
                            $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 85, $this->source) . " bg-danger");
                            // line 86
                            echo "                                ";
                        }
                        // line 87
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, true, true, 87), "index-item-current", [], "any", true, true, true, 87) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["indexItem"], "stepStatus", [], "any", false, false, true, 87), "index-item-current", [], "any", false, false, true, 87) == true))) {
                            // line 88
                            echo "                                    ";
                            $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 88, $this->source) . " disabled");
                            // line 89
                            echo "                                ";
                        }
                        // line 90
                        echo "                                <li class=\"";
                        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "coreClass", [], "any", false, false, true, 90), 90, $this->source);
                        echo " ";
                        echo $this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null), 90, $this->source);
                        echo "\">
                                    <a href='";
                        // line 91
                        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "url", [], "any", false, false, true, 91), 91, $this->source);
                        echo "' data-limesurvey-submit='";
                        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "submit", [], "any", false, false, true, 91), 91, $this->source);
                        echo "'
                                       class='animate'>
                                        ";
                        // line 93
                        echo LS_Twig_Extension::flatEllipsizeText($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["indexItem"], "text", [], "any", false, false, true, 93), 93, $this->source), true, 30, " &hellip; ", 0.6);
                        echo "
                                    </a>
                                </li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['step'], $context['indexItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 97
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 98), "type", [], "any", false, false, true, 98) == "full")) {
                    // line 99
                    echo "                    <li class=\"index-item\">
                        <div class=\"dropdown-item-text\">
                            ";
                    // line 101
                    echo gT("Question by question mode not yet supported.");
                    echo "
                        </div>
                    </li>
                ";
                }
                // line 105
                echo "            </ul>
        </li>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/question_index_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 105,  248 => 101,  244 => 99,  241 => 98,  235 => 97,  225 => 93,  218 => 91,  211 => 90,  208 => 89,  205 => 88,  202 => 87,  199 => 86,  196 => 85,  193 => 84,  190 => 83,  187 => 82,  184 => 81,  181 => 80,  177 => 79,  171 => 76,  167 => 74,  165 => 73,  161 => 72,  153 => 67,  147 => 64,  142 => 63,  139 => 62,  136 => 60,  131 => 57,  121 => 53,  117 => 52,  111 => 51,  106 => 50,  103 => 49,  100 => 48,  97 => 47,  94 => 46,  91 => 45,  88 => 44,  85 => 43,  82 => 42,  79 => 41,  76 => 40,  71 => 39,  67 => 37,  61 => 34,  55 => 31,  50 => 30,  47 => 29,  45 => 28,  42 => 27,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/question_index_menu.twig", "C:\\xampp\\htdocs\\limesurvey\\themes\\survey\\fruity_twentythree\\views\\subviews\\navigation\\question_index_menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 28, "for" => 39, "set" => 40);
        static $filters = array();
        static $functions = array("gT" => 34, "include" => 37, "flatEllipsizeText" => 76);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                [],
                ['gT', 'include', 'flatEllipsizeText']
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
