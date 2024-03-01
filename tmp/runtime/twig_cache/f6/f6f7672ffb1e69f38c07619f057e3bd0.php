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

/* ./subviews/registration/register_form.twig */
class __TwigTemplate_459f6a2cfd6855aa0d92e2cdb90ede07 extends Template
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
        echo "
";
        // line 18
        echo "
<div class=\"";
        // line 19
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 19), "registerform", [], "any", false, false, true, 19), 19, $this->source);
        echo " row\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 19), "registerform", [], "any", false, false, true, 19), 19, $this->source);
        echo ">
    ";
        // line 20
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 20), "form", [twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sRegisterFormUrl", [], "any", false, false, true, 20), "post", ["id" => "limesurvey", "role" => "form", "class" => "form"]], "method", false, false, true, 20), 20, $this->source);
        echo "

    ";
        // line 22
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "registerform", [], "any", false, false, true, 22), "hiddeninputs", [], "any", false, false, true, 22), 22, $this->source);
        echo "

    <div class='";
        // line 24
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 24), "registerformcol", [], "any", false, false, true, 24), 24, $this->source);
        echo " col-12' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 24), "registerformcol", [], "any", false, false, true, 24), 24, $this->source);
        echo ">
        <div class=\"ls-js-hidden \">
            ";
        // line 26
        echo twig_include($this->env, $context, "./subviews/navigation/language_changer.twig");
        echo "
        </div>
        <div class=\"row mb-3\">
            ";
        // line 30
        echo "            <div class='";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 30), "registerformcolrow", [], "any", false, false, true, 30), 30, $this->source);
        echo " col-md-6 col-12 mb-3 mb-md-0' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 30), "registerformcolrow", [], "any", false, false, true, 30), 30, $this->source);
        echo ">
                <label for='register_firstname' class='";
        // line 31
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 31), "registerformcolrowlabel", [], "any", false, false, true, 31), 31, $this->source);
        echo " control-label '>";
        echo gT("First name");
        echo "</label>
                <div class=\"\">
                    ";
        // line 33
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 33), "textField", ["register_firstname", twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sFirstName", [], "any", false, false, true, 33), ["id" => "register_firstname", "class" => "form-control ls-important-field", "placeholder" => gT("Enter your first name")]], "method", false, false, true, 33), 33, $this->source);
        echo "
                </div>
            </div>

            ";
        // line 38
        echo "            <div class='";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 38), "registerformcolrowb", [], "any", false, false, true, 38), 38, $this->source);
        echo " col-md-6 col-12' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 38), "registerformcolrowb", [], "any", false, false, true, 38), 38, $this->source);
        echo ">
                <label ";
        // line 39
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 39), "registerformcolrowblabel", [], "any", false, false, true, 39), 39, $this->source);
        echo "  class='";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 39), "registerformcolrowblabel", [], "any", false, false, true, 39), 39, $this->source);
        echo " control-label '>";
        echo gT("Last name");
        echo "</label>
                <div ";
        // line 40
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 40), "registerformcolrowbdiv", [], "any", false, false, true, 40), 40, $this->source);
        echo " >
                    ";
        // line 41
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 41), "textField", ["register_lastname", twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sLastName", [], "any", false, false, true, 41), ["id" => "register_lastname", "class" => "form-control ls-important-field", "placeholder" => gT("Enter your last name")]], "method", false, false, true, 41), 41, $this->source);
        echo "
                </div>
            </div>
        </div>
        ";
        // line 46
        echo "        <div class='";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 46), "registerformcolrowc", [], "any", false, false, true, 46), 46, $this->source);
        echo " row' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 46), "registerformcolrowc", [], "any", false, false, true, 46), 46, $this->source);
        echo ">
            <label ";
        // line 47
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 47), "registerformcolrowclabel", [], "any", false, false, true, 47), 47, $this->source);
        echo " class='";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 47), "registerformcolrowclabel", [], "any", false, false, true, 47), 47, $this->source);
        echo "  control-label'> ";
        echo gT("E-mail");
        echo " ";
        echo twig_include($this->env, $context, "./subviews/registration/required.twig");
        echo "</label>
            <div ";
        // line 48
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 48), "registerformcolrowcdiv", [], "any", false, false, true, 48), 48, $this->source);
        echo "  >
                ";
        // line 49
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 49), "emailField", ["register_email", twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sEmail", [], "any", false, false, true, 49), ["id" => "register_email", "class" => "form-control ls-important-field", "required" => true, "placeholder" => gT("Enter e-mail address")]], "method", false, false, true, 49), 49, $this->source);
        echo "
            </div>
        </div>

        ";
        // line 54
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aExtraAttributes", [], "any", false, false, true, 54));
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
        foreach ($context['_seq'] as $context["key"] => $context["aExtraAttribute"]) {
            // line 55
            echo "            <div class=' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 55), "registerformextras", [], "any", false, false, true, 55), 55, $this->source);
            echo " row' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 55), "registerformextras", [], "any", false, false, true, 55), 55, $this->source);
            echo " >
                ";
            // line 56
            $context["registerKey"] = ("register_" . $this->sandbox->ensureToStringAllowed($context["key"], 56, $this->source));
            // line 57
            echo "                <label for=\"";
            echo $this->sandbox->ensureToStringAllowed(($context["registerKey"] ?? null), 57, $this->source);
            echo "\" class='";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 57), "registerformextraslabel", [], "any", false, false, true, 57), 57, $this->source);
            echo " control-label '> ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["aExtraAttribute"], "caption", [], "any", false, false, true, 57), 57, $this->source);
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["aExtraAttribute"], "mandatory", [], "any", false, false, true, 57) == "Y")) {
                echo twig_include($this->env, $context, "./subviews/registration/required.twig");
            }
            echo "</label>
                <div ";
            // line 58
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 58), "registerformcolrowcdiv", [], "any", false, false, true, 58), 58, $this->source);
            echo " >
                    ";
            // line 59
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 59), "textField", [($context["registerKey"] ?? null), (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aAttribute", [], "any", false, false, true, 59)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), ["id" => ($context["registerKey"] ?? null), "class" => "form-control ls-important-field"]], "method", false, false, true, 59), 59, $this->source);
            echo "
                </div>
            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['aExtraAttribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
        ";
        // line 65
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "bCaptcha", [], "any", false, false, true, 65)) {
            // line 66
            echo "            <div class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 66), "registerformcaptcha", [], "any", false, false, true, 66), 66, $this->source);
            echo " \" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 66), "maincolformdivb", [], "any", false, false, true, 66), 66, $this->source);
            echo ">
                <label class='";
            // line 67
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 67), "registerformcaptchalabel", [], "any", false, false, true, 67), 67, $this->source);
            echo " control-label ' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 67), "registerformcaptchalabel", [], "any", false, false, true, 67), 67, $this->source);
            echo " >";
            echo gT("Please solve the following equation:");
            echo " ";
            echo twig_include($this->env, $context, "./subviews/registration/required.twig");
            echo "</label>
                <div class=\"row\" ";
            // line 68
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 68), "registerformcaptchadiv", [], "any", false, false, true, 68), 68, $this->source);
            echo ">
                    <div class=\"";
            // line 69
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 69), "registerformcaptchadivb", [], "any", false, false, true, 69), 69, $this->source);
            echo " captcha-container col-xl-2 col-lg-3 col-md-12 align-items-center\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 69), "registerformcaptchadivb", [], "any", false, false, true, 69), 69, $this->source);
            echo ">
                            ";
            // line 70
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, LS_Twig_Extension::renderCaptcha(), "renderOut", [], "method", false, false, true, 70), 70, $this->source);
            echo "
                        <a href=\"#\" class=\"btn btn-outline-secondary\" id=\"reloadCaptcha\" title=\"";
            // line 71
            echo gT("Reload captcha");
            echo "\" data-toggle=\"captcha\"><i class=\"ri-refresh-line\"></i></a>
                    </div>
                    <div class=\"col-xl-10 col-lg-9 col-md-12 captcha-input align-self-center\">
                        <input class='form-control ls-important-field ";
            // line 74
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 74), "registerformcaptchainput", [], "any", false, false, true, 74), 74, $this->source);
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 74), "registerformcaptchainput", [], "any", false, false, true, 74), 74, $this->source);
            echo " placeholder=\"";
            echo gT("Enter result here - numbers only");
            echo "\">
                    </div>
                </div>
            </div>
        ";
        }
        // line 79
        echo "
        ";
        // line 81
        echo "        <div class='";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 81), "registermandatoryinfo", [], "any", false, false, true, 81), 81, $this->source);
        echo " small mt-2' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 81), "registermandatoryinfo", [], "any", false, false, true, 81), 81, $this->source);
        echo " >
                ";
        // line 82
        echo gT("Fields marked with an asterisk are mandatory.");
        echo "
        </div>

        ";
        // line 86
        echo "        <div class='";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 86), "registersave", [], "any", false, false, true, 86), 86, $this->source);
        echo " ' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 86), "registersave", [], "any", false, false, true, 86), 86, $this->source);
        echo " >
            <div class='";
        // line 87
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 87), "registersavediv", [], "any", false, false, true, 87), 87, $this->source);
        echo " ' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 87), "registersavediv", [], "any", false, false, true, 87), 87, $this->source);
        echo " >
                ";
        // line 88
        $context["continue"] = gT("Register now", "unescaped");
        // line 89
        echo "                <button ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 89), "registersavedivbutton", [], "any", false, false, true, 89), 89, $this->source);
        echo "  class='";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 89), "registersavedivbutton", [], "any", false, false, true, 89), 89, $this->source);
        echo " btn btn-primary' >
                    ";
        // line 90
        echo $this->sandbox->ensureToStringAllowed(($context["continue"] ?? null), 90, $this->source);
        echo "
                </button>
            </div>
        </div>

        ";
        // line 96
        echo "    </div>
    <div class='";
        // line 97
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 97), "registerformcoladdidtions", [], "any", false, false, true, 97), 97, $this->source);
        echo " col-lg-8 offset-lg-2' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 97), "registerformcoladdidtions", [], "any", false, false, true, 97), 97, $this->source);
        echo ">
        ";
        // line 98
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "formAdditions", [], "any", false, false, true, 98), 98, $this->source);
        echo "
    </div>

    ";
        // line 101
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 101), "endForm", [], "any", false, false, true, 101), 101, $this->source);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/registration/register_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 101,  321 => 98,  315 => 97,  312 => 96,  304 => 90,  297 => 89,  295 => 88,  289 => 87,  282 => 86,  276 => 82,  269 => 81,  266 => 79,  254 => 74,  248 => 71,  244 => 70,  238 => 69,  234 => 68,  224 => 67,  217 => 66,  214 => 65,  211 => 63,  193 => 59,  189 => 58,  176 => 57,  174 => 56,  167 => 55,  149 => 54,  142 => 49,  138 => 48,  128 => 47,  121 => 46,  114 => 41,  110 => 40,  102 => 39,  95 => 38,  88 => 33,  81 => 31,  74 => 30,  68 => 26,  61 => 24,  56 => 22,  51 => 20,  45 => 19,  42 => 18,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/registration/register_form.twig", "C:\\xampp\\htdocs\\limesurvey\\themes\\survey\\fruity_twentythree\\views\\subviews\\registration\\register_form.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 54, "set" => 56, "if" => 57);
        static $filters = array("raw" => 98);
        static $functions = array("include" => 26, "gT" => 31, "renderCaptcha" => 70);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['raw'],
                ['include', 'gT', 'renderCaptcha']
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
