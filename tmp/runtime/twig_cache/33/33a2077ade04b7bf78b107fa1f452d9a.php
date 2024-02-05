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

/* ./subviews/header/custom_header.twig */
class __TwigTemplate_9c17fdbdf03d969b462d4693681ae662 extends Template
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
";
        // line 19
        echo "<style>
    ";
        // line 20
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 20), "backgroundimage", [], "any", false, false, true, 20) == "on") && LS_Twig_Extension::imageSrc(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 20), "backgroundimagefile", [], "any", false, false, true, 20)))) {
            // line 21
            echo "        body {
            background-image: url(";
            // line 22
            echo LS_Twig_Extension::imageSrc($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 22), "backgroundimagefile", [], "any", false, false, true, 22), 22, $this->source));
            echo ");
            background-attachment: fixed;
            background-size: cover;

        }

        body .top-container {
            background-color: rgba(236, 240, 241, 0.2);
        }
    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 33), "brandlogo", [], "any", false, false, true, 33) == "on")) {
            // line 34
            echo "        body .top-container {
            margin-top: 70px;
        }
    ";
        }
        // line 38
        echo "
    body {
         padding-bottom: 10px;
         /*padding-top: 60px;!* now is redefine in JS to fit any title length *!*/
         background-color:";
        // line 42
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 42), "bodybackgroundcolor", [], "any", false, false, true, 42), 42, $this->source);
        echo " ;
         color: ";
        // line 43
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 43), "fontcolor", [], "any", false, false, true, 43), 43, $this->source);
        echo ";
    }

    .navbar-default .navbar-nav > li > a:hover {
        color: ";
        // line 47
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 47), "fontcolor", [], "any", false, false, true, 47), 47, $this->source);
        echo ";
    }

    ";
        // line 50
        $context["checkicon"] = (("\"\\" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 50), "checkicon", [], "any", false, false, true, 50), 50, $this->source)) . "\"");
        // line 51
        echo "    .checkbox-item input[type=\"checkbox\"]:checked + label::after, .checkbox-item input[type=\"radio\"]:checked + label::after {
        content: ";
        // line 52
        echo $this->sandbox->ensureToStringAllowed(($context["checkicon"] ?? null), 52, $this->source);
        echo ";
    }

    ";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 55), "animatecheckbox", [], "any", false, false, true, 55) == "on")) {
            // line 56
            echo "
        ";
            // line 57
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 57), "checkboxanimationduration", [], "any", false, false, true, 57) < 1)) {
                // line 58
                echo "            ";
                $context["checkboxanimationduration"] = 500;
                // line 59
                echo "        ";
            } else {
                // line 60
                echo "            ";
                $context["checkboxanimationduration"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 60), "checkboxanimationduration", [], "any", false, false, true, 60);
                // line 61
                echo "        ";
            }
            // line 62
            echo "
        .checkbox-item input[type=\"checkbox\"]:checked + label::after{
            animation-name: ";
            // line 64
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 64), "checkboxanimation", [], "any", false, false, true, 64), 64, $this->source);
            echo ";
            animation-duration: ";
            // line 65
            echo $this->sandbox->ensureToStringAllowed(($context["checkboxanimationduration"] ?? null), 65, $this->source);
            echo "ms;
            animation-fill-mode: both;
            animation-iteration-count: 1;
            display: inline-block;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
        .checkbox-item input[type=\"checkbox\"] + label::after{
            display: none;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
    ";
        }
        // line 82
        echo "
    ";
        // line 83
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 83), "animateradio", [], "any", false, false, true, 83) == "on")) {
            // line 84
            echo "
        ";
            // line 85
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 85), "radioanimationduration", [], "any", false, false, true, 85) < 1)) {
                // line 86
                echo "            ";
                $context["radioanimationduration"] = 500;
                // line 87
                echo "        ";
            } else {
                // line 88
                echo "            ";
                $context["radioanimationduration"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 88), "radioanimationduration", [], "any", false, false, true, 88);
                // line 89
                echo "        ";
            }
            // line 90
            echo "
        .radio-item input[type=\"radio\"]:checked + label::after{
            animation-name: ";
            // line 92
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 92), "radioanimation", [], "any", false, false, true, 92), 92, $this->source);
            echo ";
            animation-duration: ";
            // line 93
            echo $this->sandbox->ensureToStringAllowed(($context["radioanimationduration"] ?? null), 93, $this->source);
            echo "ms;
            animation-fill-mode: both;
            animation-iteration-count: 1;
            display: inline-block;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
        .radio-item input[type=\"radio\"] + label::after{
            display:none;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
    ";
        }
        // line 110
        echo "
    ";
        // line 111
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 111), "animatequestion", [], "any", false, false, true, 111) == "on")) {
            // line 112
            echo "
        ";
            // line 113
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 113), "questionanimationduration", [], "any", false, false, true, 113) < 1)) {
                // line 114
                echo "            ";
                $context["questionanimationduration"] = 500;
                // line 115
                echo "        ";
            } else {
                // line 116
                echo "            ";
                $context["questionanimationduration"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 116), "questionanimationduration", [], "any", false, false, true, 116);
                // line 117
                echo "        ";
            }
            // line 118
            echo "
        .question-container {
            animation-name: ";
            // line 120
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 120), "questionanimation", [], "any", false, false, true, 120), 120, $this->source);
            echo ";
            animation-duration: ";
            // line 121
            echo $this->sandbox->ensureToStringAllowed(($context["questionanimationduration"] ?? null), 121, $this->source);
            echo "ms;
            animation-fill-mode: both;
        }
    ";
        }
        // line 125
        echo "
    ";
        // line 126
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 126), "animatealert", [], "any", false, false, true, 126) == "on")) {
            // line 127
            echo "
        ";
            // line 128
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 128), "alertanimationduration", [], "any", false, false, true, 128) < 1)) {
                // line 129
                echo "            ";
                $context["alertanimationduration"] = 500;
                // line 130
                echo "        ";
            } else {
                // line 131
                echo "            ";
                $context["alertanimationduration"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 131), "alertanimationduration", [], "any", false, false, true, 131);
                // line 132
                echo "        ";
            }
            // line 133
            echo "
        .alert {
            animation-name: ";
            // line 135
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 135), "alertanimation", [], "any", false, false, true, 135), 135, $this->source);
            echo ";
            animation-duration: ";
            // line 136
            echo $this->sandbox->ensureToStringAllowed(($context["alertanimationduration"] ?? null), 136, $this->source);
            echo "ms;
            animation-fill-mode: both;
        }
    ";
        }
        // line 140
        echo "
    ";
        // line 141
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 141), "animatebody", [], "any", false, false, true, 141) == "on")) {
            // line 142
            echo "
        ";
            // line 143
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 143), "bodyanimationduration", [], "any", false, false, true, 143) < 1)) {
                // line 144
                echo "            ";
                $context["bodyanimationduration"] = 500;
                // line 145
                echo "        ";
            } else {
                // line 146
                echo "            ";
                $context["bodyanimationduration"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 146), "bodyanimationduration", [], "any", false, false, true, 146);
                // line 147
                echo "        ";
            }
            // line 148
            echo "
        #outerframeContainer {
            animation-name: ";
            // line 150
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 150), "bodyanimation", [], "any", false, false, true, 150), 150, $this->source);
            echo ";
            animation-duration: ";
            // line 151
            echo $this->sandbox->ensureToStringAllowed(($context["bodyanimationduration"] ?? null), 151, $this->source);
            echo "ms;
            animation-fill-mode: both;
        }
    ";
        }
        // line 155
        echo "</style>
";
    }

    public function getTemplateName()
    {
        return "./subviews/header/custom_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 155,  309 => 151,  305 => 150,  301 => 148,  298 => 147,  295 => 146,  292 => 145,  289 => 144,  287 => 143,  284 => 142,  282 => 141,  279 => 140,  272 => 136,  268 => 135,  264 => 133,  261 => 132,  258 => 131,  255 => 130,  252 => 129,  250 => 128,  247 => 127,  245 => 126,  242 => 125,  235 => 121,  231 => 120,  227 => 118,  224 => 117,  221 => 116,  218 => 115,  215 => 114,  213 => 113,  210 => 112,  208 => 111,  205 => 110,  185 => 93,  181 => 92,  177 => 90,  174 => 89,  171 => 88,  168 => 87,  165 => 86,  163 => 85,  160 => 84,  158 => 83,  155 => 82,  135 => 65,  131 => 64,  127 => 62,  124 => 61,  121 => 60,  118 => 59,  115 => 58,  113 => 57,  110 => 56,  108 => 55,  102 => 52,  99 => 51,  97 => 50,  91 => 47,  84 => 43,  80 => 42,  74 => 38,  68 => 34,  66 => 33,  63 => 32,  50 => 22,  47 => 21,  45 => 20,  42 => 19,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/custom_header.twig", "C:\\xampp\\htdocs\\limesurvey\\themes\\survey\\fruity_twentythree\\views\\subviews\\header\\custom_header.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "set" => 50);
        static $filters = array();
        static $functions = array("imageSrc" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['imageSrc']
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
