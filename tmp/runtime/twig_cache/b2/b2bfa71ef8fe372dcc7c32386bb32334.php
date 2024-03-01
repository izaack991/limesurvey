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

/* ./subviews/logincomponents/token.twig */
class __TwigTemplate_6d160fb1c8fa9a3265107147abb2fb0a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formheading' => [$this, 'block_formheading'],
            'description' => [$this, 'block_description'],
            'formcontent' => [$this, 'block_formcontent'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "./subviews/logincomponents/captcha.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("./subviews/logincomponents/captcha.twig", "./subviews/logincomponents/token.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_formheading($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "        ";
        echo gT("Please enter your access code to participate in this survey.");
        echo "
    ";
    }

    // line 7
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <div class=\"col-lg-12\">
            <p class='";
        // line 9
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 9), "maincoldivdivbp", [], "any", false, false, true, 9), 9, $this->source);
        echo " alert alert-info' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 9), "maincoldivdivbp", [], "any", false, false, true, 9), 9, $this->source);
        echo ">
                ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aForm", [], "any", false, false, true, 10), "token", [], "any", false, false, true, 10) == null)) {
            // line 11
            echo "                    ";
            echo gT("If you have been issued an access code, please enter it in the box below and click continue.");
            echo "
                ";
        } else {
            // line 13
            echo "                    ";
            echo gT("Please confirm the access code by answering the security question below and click continue.");
            echo "
                ";
        }
        // line 15
        echo "            </p>
        </div>
    ";
    }

    // line 20
    public function block_formcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "        <div class=\"col-lg-12\">
            <div class='";
        // line 22
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 22), "maincolform", [], "any", false, false, true, 22), 22, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 22), "maincolform", [], "any", false, false, true, 22), 22, $this->source);
        echo ">
                <label class='";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 23), "maincolformlabel", [], "any", false, false, true, 23), 23, $this->source);
        echo " control-label' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 23), "maincolformlabel", [], "any", false, false, true, 23), 23, $this->source);
        echo ">
                    ";
        // line 24
        echo gT("Access code");
        echo "<small class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 24), "maincolformlabelsmall", [], "any", false, false, true, 24), 24, $this->source);
        echo " asterisk ri-asterisk small \" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 24), "maincolformlabelsmall", [], "any", false, false, true, 24), 24, $this->source);
        echo " ></small>
                    <span class=\"";
        // line 25
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 25), "maincolformlabelspan", [], "any", false, false, true, 25), 25, $this->source);
        echo " visually-hidden asterisk \" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 25), "maincolformlabelspan", [], "any", false, false, true, 25), 25, $this->source);
        echo ">
                    ( ";
        // line 26
        echo gT("Mandatory");
        echo " )
                    </span>
                </label>

                <div class='";
        // line 30
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 30), "maincolformdiva", [], "any", false, false, true, 30), 30, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 30), "maincolformdiva", [], "any", false, false, true, 30), 30, $this->source);
        echo ">
                    ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aForm", [], "any", false, false, true, 31), "token", [], "any", false, false, true, 31) == null)) {
            // line 32
            echo "                        <input class='";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 32), "maincolformdivainput", [], "any", false, false, true, 32), 32, $this->source);
            echo " form-control ls-important-field' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 32), "maincolformdivainput", [], "any", false, false, true, 32), 32, $this->source);
            echo " placeholder=\"";
            echo gT("Enter access code");
            echo "\">
                    ";
        } else {
            // line 34
            echo "
                        ";
            // line 35
            $context["passwordFieldHtmlOptions"] = ["id" => "token", "required" => true, "readonly" => true, "class" => "form-control ls-important-field"];
            // line 41
            echo "
                        ";
            // line 42
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 42), "passwordField", ["token", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 44
($context["aSurveyInfo"] ?? null), "aForm", [], "any", false, false, true, 44), "token", [], "any", false, false, true, 44),             // line 45
($context["passwordFieldHtmlOptions"] ?? null)], "method", false, false, true, 42), 42, $this->source);
            // line 46
            echo "
                    ";
        }
        // line 48
        echo "                </div>
            </div>

            ";
        // line 52
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aForm", [], "any", false, false, true, 52), "bCaptchaEnabled", [], "any", false, false, true, 52) == true)) {
            // line 53
            echo "                <div class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 53), "maincolformdivb", [], "any", false, false, true, 53), 53, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 53), "maincolformdivb", [], "any", false, false, true, 53), 53, $this->source);
            echo ">
                    <label class='";
            // line 54
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 54), "maincolformdivblabel", [], "any", false, false, true, 54), 54, $this->source);
            echo " control-label' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 54), "maincolformdivblabel", [], "any", false, false, true, 54), 54, $this->source);
            echo " >
                        ";
            // line 55
            echo gT("Please solve the following equation:");
            echo "<small class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 55), "maincolformdivblabelsmall", [], "any", false, false, true, 55), 55, $this->source);
            echo " superset asterisk ri-asterisk\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 55), "maincolformdivblabelsmall", [], "any", false, false, true, 55), 55, $this->source);
            echo " >&nbsp;</small>
                        <span class=\"";
            // line 56
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 56), "maincolformdivblabelspan", [], "any", false, false, true, 56), 56, $this->source);
            echo " visually-hidden asterisk\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 56), "maincolformdivblabelspan", [], "any", false, false, true, 56), 56, $this->source);
            echo ">
                        ( ";
            // line 57
            echo gT("Mandatory");
            echo " )
                        </span>
                    </label>
                    <div class=\"row\">
                        <div class=\"captcha-container col-xl-3 col-lg-12 align-items-center\">
                            ";
            // line 62
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, LS_Twig_Extension::renderCaptcha(), "renderOut", [], "method", false, false, true, 62), 62, $this->source);
            echo "
                            <a href=\"#\" class=\"btn btn-outline-secondary\" id=\"reloadCaptcha\"
                               title=\"";
            // line 64
            echo gT("Reload captcha");
            echo "\" data-toggle=\"captcha\"><i
                                        class=\"ri-refresh-line\"></i></a>
                        </div>
                        <div class=\"";
            // line 67
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 67), "maincolformdivbdiv", [], "any", false, false, true, 67), 67, $this->source);
            echo " col-xl-9 col-lg-12 captcha-input align-self-center\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 67), "maincolformdivbdiv", [], "any", false, false, true, 67), 67, $this->source);
            echo ">
                            <input class='form-control ls-important-field ";
            // line 68
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 68), "maincolformdivbdivdivinput", [], "any", false, false, true, 68), 68, $this->source);
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 68), "maincolformdivbdivdivinput", [], "any", false, false, true, 68), 68, $this->source);
            echo " placeholder=\"";
            echo gT("Enter result here - numbers only");
            echo "\">
                        </div>
                    </div>
                </div>
            ";
        }
        // line 73
        echo "
            ";
        // line 74
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aForm", [], "any", false, false, true, 74), "hiddenFields", [], "any", false, false, true, 74), 74, $this->source);
        echo "

            <div class='";
        // line 76
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 76), "maincolformdivc", [], "any", false, false, true, 76), 76, $this->source);
        echo " ' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 76), "maincolformdivc", [], "any", false, false, true, 76), 76, $this->source);
        echo ">
                <div
                        class='";
        // line 78
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 78), "maincolformdivcdiv", [], "any", false, false, true, 78), 78, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 78), "maincolformdivcdiv", [], "any", false, false, true, 78), 78, $this->source);
        echo ">
                    <button type=\"submit\"
                            class='";
        // line 80
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 80), "maincolformdivcdivbutton", [], "any", false, false, true, 80), 80, $this->source);
        echo " btn btn-primary' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 80), "maincolformdivcdivbutton", [], "any", false, false, true, 80), 80, $this->source);
        echo ">
                        ";
        // line 81
        echo gT("Continue");
        echo "
                    </button>
                </div>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "./subviews/logincomponents/token.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 81,  262 => 80,  255 => 78,  248 => 76,  243 => 74,  240 => 73,  228 => 68,  222 => 67,  216 => 64,  211 => 62,  203 => 57,  197 => 56,  189 => 55,  183 => 54,  176 => 53,  173 => 52,  168 => 48,  164 => 46,  162 => 45,  161 => 44,  160 => 42,  157 => 41,  155 => 35,  152 => 34,  142 => 32,  140 => 31,  134 => 30,  127 => 26,  121 => 25,  113 => 24,  107 => 23,  101 => 22,  98 => 21,  94 => 20,  88 => 15,  82 => 13,  76 => 11,  74 => 10,  68 => 9,  65 => 8,  61 => 7,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/logincomponents/token.twig", "C:\\xampp\\htdocs\\limesurvey\\themes\\survey\\fruity_twentythree\\views\\subviews\\logincomponents\\token.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "set" => 35);
        static $filters = array();
        static $functions = array("gT" => 4, "renderCaptcha" => 62);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['gT', 'renderCaptcha']
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
