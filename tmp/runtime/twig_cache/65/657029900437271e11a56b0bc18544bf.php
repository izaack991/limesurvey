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

/* __string_template__cd87350f43c7072a466087eaf79df53d */
class __TwigTemplate_7278ba4a29cca1b35f82bd6cb6c56b53 extends Template
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
        // line 1
        echo "<input type='hidden' name='subquestions_sortorder' value='' />
<input type='hidden' id='subquestions_deletedqids' name='subquestions_deletedqids' value='' />

";
        // line 4
        $context["first"] = true;
        // line 5
        $context["scale_id"] = 0;
        // line 7
        $context["supportsRelevance"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "questionType", [], "any", false, false, true, 7), "code", [], "any", false, false, true, 7) != "H");
        // line 8
        echo "
<!-- Loop all language, and then hide all but the current selected one with JS. -->
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allLanguages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 11
            echo "    <div class=\"lang-hide lang-";
            echo $this->sandbox->ensureToStringAllowed($context["lang"], 11, $this->source);
            echo " ";
            echo ((($context["first"] ?? null)) ? ("base-lang") : ("extra-lang"));
            echo "\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($context["scalecount"] ?? null) - 1)));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["scale_id"]) {
                // line 13
                echo "            ";
                $context["anscount"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["subquestions"] ?? null), 13, $this->source));
                // line 14
                echo "            ";
                // line 15
                echo "
            ";
                // line 16
                $context["position"] = 0;
                // line 17
                echo "            ";
                if ((($context["scalecount"] ?? null) > 1)) {
                    // line 18
                    echo "                ";
                    if (($context["scale_id"] == 0)) {
                        // line 19
                        echo "                    <div class='header ui-widget-header'>
                        <i>";
                        // line 20
                        echo gT("Y-Scale");
                        echo "</i>
                    </div>
                ";
                    } else {
                        // line 23
                        echo "                    <div class='header ui-widget-header'>
                        <i>";
                        // line 24
                        echo gT("X-Scale");
                        echo "</i>
                    </div>
                ";
                    }
                    // line 27
                    echo "            ";
                }
                // line 28
                echo "
            <!-- Subquestions table -->
            <!-- NB: Both questions and answer options uses class \"answertable\". -->
            <div class=\"subquestions-table-wrapper\" style=\"max-height: 414px;\">
                <table
                    class='answertable subquestions-table table table-responsive  ";
                // line 33
                echo ((($context["supportsRelevance"] ?? null)) ? ("") : ("hide-relevance"));
                echo "'
                    id='subquestions_";
                // line 34
                echo $this->sandbox->ensureToStringAllowed($context["lang"], 34, $this->source);
                echo "_";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 34, $this->source);
                echo "'
                    data-scaleid='";
                // line 35
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 35, $this->source);
                echo "'
                    data-input-data-id='add-subquestion-input-javascript-datas'
                >

                    <!-- Headers -->
                    <thead>
                        <tr>
                            <th></th>
                            <th class='col-lg-1'>";
                // line 43
                echo gT("Code");
                echo "</th>
                            <th>
                                ";
                // line 45
                echo gT("Subquestion");
                echo "
                                <i class=\"ri-earth-fill\" data-bs-toggle=\"tooltip\" title=\"";
                // line 46
                echo gT("This setting is localized");
                echo "\"></i>
                            </th>
                            ";
                // line 48
                if (($context["first"] ?? null)) {
                    // line 49
                    echo "                                ";
                    if (($context["scale_id"] == 0)) {
                        // line 50
                        echo "                                    <th id='rel-eq-th' class='col-lg-1'>
                                        ";
                        // line 51
                        echo gT("Relevance equation");
                        echo "
                                    </th>
                                ";
                    }
                    // line 54
                    echo "                                <th class=\"col-lg-1\">
                                    ";
                    // line 55
                    echo gT("Action");
                    echo "
                                </th>
                            ";
                }
                // line 58
                echo "                        </tr>
                    </thead>

                    <!-- Body -->
                    <tbody>
                        ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = ($context["subquestions"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["scale_id"]] ?? null) : null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["subquestion"]) {
                    // line 64
                    echo "                            <!-- Line tag -->
                            ";
                    // line 65
                    $this->loadTemplate("subquestionRow.twig", "__string_template__cd87350f43c7072a466087eaf79df53d", 65)->display(twig_array_merge($context, ["position" =>                     // line 66
($context["position"] ?? null), "scale_id" =>                     // line 67
$context["scale_id"], "activated" =>                     // line 68
($context["activated"] ?? null), "first" =>                     // line 69
($context["first"] ?? null), "subquestion" =>                     // line 70
$context["subquestion"], "subquestionl10n" => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,                     // line 71
$context["subquestion"], "questionl10ns", [], "any", false, false, true, 71)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["lang"]] ?? null) : null), "language" =>                     // line 72
$context["lang"]]));
                    // line 74
                    echo "
                            ";
                    // line 75
                    $context["position"] = (($context["position"] ?? null) + 1);
                    // line 76
                    echo "
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subquestion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "                    </tbody>
                </table>
            </div>

            <div class=\"action-buttons\" style=\"padding-bottom: 10px;\">
                ";
                // line 83
                if ((($context["activated"] ?? null) == "Y")) {
                    // line 84
                    echo "                    ";
                    $context["disabled"] = "disabled=\"disabled\"";
                    // line 85
                    echo "                ";
                } else {
                    // line 86
                    echo "                    ";
                    $context["disabled"] = "";
                    // line 87
                    echo "                ";
                }
                // line 88
                echo "
                <button
                    ";
                // line 90
                echo $this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null), 90, $this->source);
                echo "
                    data-scale-id=\"";
                // line 91
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 91, $this->source);
                echo "\"
                    class='btnlsbrowser btn btn-outline-secondary'
                    type='button'
                    onclick=\"LS.questionEditor.showLabelSetPicker(event, 'subquestions');\"
                >
                    ";
                // line 96
                echo gT("Load label set");
                echo "
                </button>

                ";
                // line 99
                if (($context["hasLabelSetPermission"] ?? null)) {
                    // line 100
                    echo "                    <button
                        class='bthsaveaslabel btn btn-outline-secondary'
                        id='bthsaveaslabel_";
                    // line 102
                    echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 102, $this->source);
                    echo "'
                        type='button'
                        onclick=\"LS.questionEditor.showLabelSetSaver(event, 'subquestions-table');\"
                        data-bs-target=\"#saveaslabelModal\"
                    >
                        ";
                    // line 107
                    echo gT("Save label set");
                    echo "
                    </button>
                ";
                }
                // line 110
                echo "
                <button ";
                // line 111
                echo $this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null), 111, $this->source);
                echo " id='btnquickadd_";
                echo $this->sandbox->ensureToStringAllowed($context["lang"], 111, $this->source);
                echo "_";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 111, $this->source);
                echo "' data-scale-id=\"";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 111, $this->source);
                echo "\" class='btn btn-outline-secondary btnquickadd float-end' type='button' data-bs-toggle=\"modal\" data-bs-target=\"#quickaddModal\" data-scale-id=\"";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 111, $this->source);
                echo "\">
                    ";
                // line 112
                echo gT("Quick add");
                echo "
                </button>
            </div>
            ";
                // line 115
                $context["position"] = sprintf("%05d", $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 115, $this->source));
                // line 116
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scale_id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "    </div>
    ";
            // line 118
            $context["first"] = false;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "
<!-- For javascript -->
<input
    type=\"hidden\"
    id=\"add-subquestion-input-javascript-datas\"
    data-url=\"";
        // line 125
        echo LS_Twig_Extension::createUrl("/questionAdministration/getSubquestionRowForAllLanguages/");
        echo "\"
    data-quickurl=\"";
        // line 126
        echo LS_Twig_Extension::createUrl("/questionAdministration/getSubquestionRowQuickAdd", ["surveyid" => twig_get_attribute($this->env, $this->source,         // line 129
($context["question"] ?? null), "sid", [], "any", false, false, true, 129), "gid" => twig_get_attribute($this->env, $this->source,         // line 130
($context["question"] ?? null), "gid", [], "any", false, false, true, 130)]);
        // line 132
        echo "\"
    data-assessmentvisible=\"";
        // line 133
        if ((($context["assessmentvisible"] ?? null) == true)) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\"
    data-errormessage=\"An error occured while processing the ajax request.\"
    data-languages='";
        // line 135
        echo CJSON::encode($this->sandbox->ensureToStringAllowed(($context["allLanguages"] ?? null), 135, $this->source));
        echo "'
    data-surveyid=\"";
        // line 136
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "sid", [], "any", false, false, true, 136), 136, $this->source);
        echo "\"
    data-gid=\"";
        // line 137
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "gid", [], "any", false, false, true, 137), 137, $this->source);
        echo "\"
    data-qid=\"";
        // line 138
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "qid", [], "any", false, false, true, 138), 138, $this->source);
        echo "\"
    data-scale-id=\"";
        // line 139
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 139, $this->source);
        echo "\" ";
        // line 140
        echo "/>
";
    }

    public function getTemplateName()
    {
        return "__string_template__cd87350f43c7072a466087eaf79df53d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 140,  413 => 139,  409 => 138,  405 => 137,  401 => 136,  397 => 135,  388 => 133,  385 => 132,  383 => 130,  382 => 129,  381 => 126,  377 => 125,  370 => 120,  356 => 118,  353 => 117,  339 => 116,  337 => 115,  331 => 112,  319 => 111,  316 => 110,  310 => 107,  302 => 102,  298 => 100,  296 => 99,  290 => 96,  282 => 91,  278 => 90,  274 => 88,  271 => 87,  268 => 86,  265 => 85,  262 => 84,  260 => 83,  253 => 78,  238 => 76,  236 => 75,  233 => 74,  231 => 72,  230 => 71,  229 => 70,  228 => 69,  227 => 68,  226 => 67,  225 => 66,  224 => 65,  221 => 64,  204 => 63,  197 => 58,  191 => 55,  188 => 54,  182 => 51,  179 => 50,  176 => 49,  174 => 48,  169 => 46,  165 => 45,  160 => 43,  149 => 35,  143 => 34,  139 => 33,  132 => 28,  129 => 27,  123 => 24,  120 => 23,  114 => 20,  111 => 19,  108 => 18,  105 => 17,  103 => 16,  100 => 15,  98 => 14,  95 => 13,  78 => 12,  71 => 11,  54 => 10,  50 => 8,  48 => 7,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__cd87350f43c7072a466087eaf79df53d", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "for" => 10, "if" => 17, "include" => 65);
        static $filters = array("length" => 13, "gT" => 46);
        static $functions = array("range" => 12, "gT" => 20, "sprintf" => 115, "createUrl" => 125, "json_encode" => 135);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
                ['length', 'gT'],
                ['range', 'gT', 'sprintf', 'createUrl', 'json_encode']
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
