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

/* subquestionRow.twig */
class __TwigTemplate_f2ea92047a808a2cd693bd0214fb1224 extends Template
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
        // line 15
        echo "
<!-- subquestion row -->
<tr id='row_";
        // line 17
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 17, $this->source);
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 17), 17, $this->source);
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 17, $this->source);
        echo "' class=\"row-container\" data-common-id=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 17), 17, $this->source);
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 17, $this->source);
        echo "\">
    ";
        // line 19
        echo "    ";
        if ((($context["activated"] ?? null) == "Y")) {
            // line 20
            echo "        <!-- Move icon -->
        <td class=\"move-icon-disable\">
            &nbsp;
        </td>

        <!-- Code (title) -->
        <td class=\"code-title\" style=\"vertical-align: middle;\">
            <input
                type='text'
                class=\"code form-control input\"
                id='subquestions[";
            // line 30
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 30), 30, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 30, $this->source);
            echo "][code]'
                name='subquestions[";
            // line 31
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 31), 31, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 31, $this->source);
            echo "][code]'
                class='code code-title'
                value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 33), 33, $this->source), "html_attr");
            echo "\"
                required='required'
                maxlength=\"20\"
                ";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "survey", [], "any", false, false, true, 36), "active", [], "any", false, false, true, 36) == "Y")) {
                // line 37
                echo "                readonly=\"readonly\"
                ";
            }
            // line 39
            echo "                onfocusout=\"LS.questionEditor.showSubquestionCodeUniqueError(this);\"
            />
        </td>

    ";
            // line 44
            echo "    ";
        } elseif (($context["first"] ?? null)) {
            // line 45
            echo "        ";
            $context["sPattern"] = ((twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 45)) ? ((("^([a-zA-Z0-9]*|" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 45), 45, $this->source)) . ")\$")) : ("^[a-zA-Z0-9]*\$"));
            // line 46
            echo "
        <!-- Move icon -->
        <td
          style=\"text-align: center;\"
        >
            <span
              class=\"ri-menu-fill move-icon\"
              role=\"button\"
              data-bs-toggle=\"tooltip\"
              data-title=\"";
            // line 55
            echo gT("Drag to sort");
            echo "\"
            ></span>
        </td>

        <!-- Code (title) -->
        <td class=\"code-title\" style=\"vertical-align: middle;\">
            <input
                type='text'
                class=\"code form-control input\"
                id='subquestions[";
            // line 64
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 64), 64, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 64, $this->source);
            echo "][code]'
                name='subquestions[";
            // line 65
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 65), 65, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 65, $this->source);
            echo "][code]'
                class='code code-title'
                value=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 67), 67, $this->source), "html_attr");
            echo "\"
                required='required'
                maxlength=\"20\"
                ";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "survey", [], "any", false, false, true, 70), "active", [], "any", false, false, true, 70) == "Y")) {
                // line 71
                echo "                readonly=\"readonly\"
                ";
            }
            // line 73
            echo "                onfocusout=\"LS.questionEditor.showSubquestionCodeUniqueError(this);\"
            />
        </td>

    ";
            // line 78
            echo "    ";
        } else {
            // line 79
            echo "        <!-- Move icon -->
        <td class=\"move-icon-disable\">
            &nbsp;
        </td>

        <!-- Code (title) -->
        <td  class=\"code-title\" style=\"vertical-align: middle;\">
            ";
            // line 86
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 86), 86, $this->source), "html");
            echo "
        </td>
    ";
        }
        // line 89
        echo "
    <!-- Subquestion text -->
    <td  class=\"subquestion-text\" style=\"vertical-align: middle;\">
        <div class=\"input-group\">
            <!-- NB: Class \"answer\" is used for both subquestions and answer options. -->
            <input
                type='text'
                size='20'
                class='answer form-control input'
                id='subquestions[";
        // line 98
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 98), 98, $this->source);
        echo "][";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 98, $this->source);
        echo "][subquestionl10n][";
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 98, $this->source);
        echo "]'
                name='subquestions[";
        // line 99
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 99), 99, $this->source);
        echo "][";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 99, $this->source);
        echo "][subquestionl10n][";
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 99, $this->source);
        echo "]'
                placeholder='";
        // line 100
        echo gT("Some example subquestion", "js");
        echo "'
                value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestionl10n"] ?? null), "question", [], "any", false, false, true, 101), 101, $this->source), "html_attr");
        echo "\"
                data-contents-dir=\"";
        // line 102
        echo ((LS_Twig_Extension::getLanguageRTL($this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 102, $this->source))) ? ("rtl") : ("ltr"));
        echo "\"
                onkeypress=\" if(event.keyCode==13) { if (event && event.preventDefault) event.preventDefault(); document.getElementById('save-button').click(); return false;}\"
            />
            ";
        // line 105
        echo getEditor("editanswer", (((((("subquestions[" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 107
($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 107), 107, $this->source)) . "][") . $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 107, $this->source)) . "][subquestionl10n][") . $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 107, $this->source)) . "]"), (((("[" . gT("Subquestion:", "js")) . "](") . $this->sandbox->ensureToStringAllowed(        // line 108
($context["language"] ?? null), 108, $this->source)) . ")"), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 109
($context["subquestion"] ?? null), "sid", [], "any", false, false, true, 109), 109, $this->source), $this->sandbox->ensureToStringAllowed(        // line 110
($context["gid"] ?? null), 110, $this->source), ((twig_matches("/^\\d+\$/", twig_get_attribute($this->env, $this->source,         // line 111
($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 111))) ? (twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 111)) : ("")), "editanswer");
        // line 113
        echo "
        </div>
    </td>

    <!-- Relevance equation -->
    ";
        // line 118
        if ((($context["first"] ?? null) && (($context["scale_id"] ?? null) == 0))) {
            // line 119
            echo "        <td class=\"relevance-equation\">
            <input
                data-bs-toggle=\"tooltip\"
                data-title=\"";
            // line 122
            echo gT("Click to expand");
            echo "\"
                type='text'
                class='relevance form-control input'
                id='subquestions[";
            // line 125
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 125), 125, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 125, $this->source);
            echo "][relevance]'
                name='subquestions[";
            // line 126
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 126), 126, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 126, $this->source);
            echo "][relevance]'
                value=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "relevance", [], "any", false, false, true, 127), 127, $this->source), "html_attr");
            echo "\"
                onkeypress=\" if(event.keyCode==13) { if (event && event.preventDefault) event.preventDefault(); document.getElementById('save-button').click(); return false;}\"
            />
        </td>
    ";
        } else {
            // line 132
            echo "        <!-- TOOD: Why render and then hide? -->
        <span style=\"display: none\" class=\"relevance relevance-equation\">
            ";
            // line 135
            echo "        </span>
    ";
        }
        // line 137
        echo "
    <!-- Icons add/edit/delete -->
    <td style=\"vertical-align: middle; white-space: nowrap;\" class=\"subquestion-actions\">
        ";
        // line 140
        if (((($context["activated"] ?? null) != "Y") && ($context["first"] ?? null))) {
            // line 141
            echo "            <button class=\"btn btn-outline-secondary btn-sm btnaddsubquestion\">
                <i
                    class=\"ri-add-circle-fill text-primary\"
                    data-code=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 144), 144, $this->source), "html_attr");
            echo "\"
                    data-bs-toggle=\"tooltip\"
                    data-scale-id=\"";
            // line 146
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 146, $this->source);
            echo "\"
                    data-bs-placement=\"bottom\"
                    title=\"";
            // line 148
            echo gT("Insert a new subquestion after this one");
            echo "\"
                ></i>
            </button>
            <button class=\"btn btn-outline-secondary btn-sm btndelsubquestion\">
                <i
                    class=\"ri-indeterminate-circle-fill text-danger\"
                    data-bs-toggle=\"tooltip\"
                    data-bs-placement=\"bottom\"
                    title=\"";
            // line 156
            echo gT("Delete this subquestion");
            echo "\"
                ></i>
            </button>
        ";
        }
        // line 160
        echo "    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "subquestionRow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 160,  308 => 156,  297 => 148,  292 => 146,  287 => 144,  282 => 141,  280 => 140,  275 => 137,  271 => 135,  267 => 132,  259 => 127,  253 => 126,  247 => 125,  241 => 122,  236 => 119,  234 => 118,  227 => 113,  225 => 111,  224 => 110,  223 => 109,  222 => 108,  221 => 107,  220 => 105,  214 => 102,  210 => 101,  206 => 100,  198 => 99,  190 => 98,  179 => 89,  173 => 86,  164 => 79,  161 => 78,  155 => 73,  151 => 71,  149 => 70,  143 => 67,  136 => 65,  130 => 64,  118 => 55,  107 => 46,  104 => 45,  101 => 44,  95 => 39,  91 => 37,  89 => 36,  83 => 33,  76 => 31,  70 => 30,  58 => 20,  55 => 19,  43 => 17,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "subquestionRow.twig", "C:\\xampp\\htdocs\\limesurvey\\application\\views\\questionAdministration\\subquestionRow.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "set" => 45);
        static $filters = array("escape" => 33);
        static $functions = array("gT" => 55, "getLanguageRTL" => 102, "getEditor" => 105);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                ['gT', 'getLanguageRTL', 'getEditor']
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
