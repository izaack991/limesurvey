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

/* layout_global.twig */
class __TwigTemplate_c1f86d908cc961fb9c660b9289d98523 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'pjaxbegin' => [$this, 'block_pjaxbegin'],
            'body' => [$this, 'block_body'],
            'nav_bar' => [$this, 'block_nav_bar'],
            'progress' => [$this, 'block_progress'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'pjaxend' => [$this, 'block_pjaxend'],
            'themescripts' => [$this, 'block_themescripts'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 71
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 71), 71, $this->source);
        echo "\" dir=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 71), 71, $this->source);
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 71), 71, $this->source);
        echo " dir-";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 71), 71, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 71), "html", [], "any", false, false, true, 71), 71, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 71), "html", [], "any", false, false, true, 71), 71, $this->source);
        echo ">
    ";
        // line 72
        $this->displayBlock('head', $context, $blocks);
        // line 76
        echo "    <body class=\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 76), "body", [], "any", false, false, true, 76), 76, $this->source);
        echo " font-";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 76), "font", [], "any", false, false, true, 76), 76, $this->source);
        echo " lang-";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 76), 76, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyformat", [], "any", false, false, true, 76), 76, $this->source);
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 76), "brandlogo", [], "any", false, false, true, 76) == "on")) {
            echo "brand-logo";
        }
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 76), "body", [], "any", false, false, true, 76), 76, $this->source);
        echo " >

        ";
        // line 79
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "emcache", [], "any", false, false, true, 79)) {
            // line 80
            echo "            <span style=\"display: none;\" id=\"__emcache_debug\" value=\"on\"></span>
        ";
        } else {
            // line 82
            echo "            <span style=\"display: none;\" id=\"__emcache_debug\" value=\"off\"></span>
        ";
        }
        // line 84
        echo "
        ";
        // line 86
        echo "        ";
        $this->displayBlock('pjaxbegin', $context, $blocks);
        // line 90
        echo "       

        ";
        // line 93
        echo "        <article>

            <div id=\"";
        // line 95
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 95), "dynamicreload", [], "any", false, false, true, 95), 95, $this->source);
        echo "\">
            ";
        // line 96
        $this->displayBlock('body', $context, $blocks);
        // line 138
        echo "            </div>

        </article>
        ";
        // line 141
        $this->displayBlock('footer', $context, $blocks);
        // line 144
        echo "        ";
        $this->displayBlock('pjaxend', $context, $blocks);
        // line 148
        echo "   

        ";
        // line 150
        $this->displayBlock('themescripts', $context, $blocks);
        // line 155
        echo "        
    </body>
</html>
";
    }

    // line 72
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "    ";
        // line 74
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/header/head.twig");
        echo "
    ";
    }

    // line 86
    public function block_pjaxbegin($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "            <div id=\"beginScripts\" class=\"script-container\">
                <###begin###>
            </div>
        ";
    }

    // line 96
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "
                ";
        // line 99
        echo "                ";
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 102
        echo "
                ";
        // line 104
        echo "                ";
        $this->displayBlock('progress', $context, $blocks);
        // line 107
        echo "
                <!-- Outer Frame Container -->
                ";
        // line 109
        $this->displayBlock('content', $context, $blocks);
        // line 117
        echo "
                ";
        // line 119
        echo "                ";
        echo twig_include($this->env, $context, "./subviews/messages/bootstrap_alert_modal.twig");
        echo "

                ";
        // line 122
        echo "                ";
        echo LS_Twig_Extension::registerScript("BasicThemeScripts", "
                if(window.basicThemeScripts === undefined){ 
                    window.basicThemeScripts = new ThemeScripts(); 
                }
                if(window.arrayScripts === undefined){
                    window.arrayScripts = new ArrayScripts();
                }
                if(window.navbarScripts === undefined){
                    window.navbarScripts = new NavbarScripts();
                }
                arrayScripts.initArrayEvents();
                navbarScripts.initNavbarEvents();
                basicThemeScripts.initGlobal();
                ", "POS_END");
        // line 135
        echo "

            ";
    }

    // line 99
    public function block_nav_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "                    ";
        echo twig_include($this->env, $context, "./subviews/header/nav_bar.twig");
        echo "
                ";
    }

    // line 104
    public function block_progress($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "                    ";
        echo twig_include($this->env, $context, "./subviews/header/progress_bar.twig");
        echo "
                ";
    }

    // line 109
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "                    ";
        // line 114
        echo "                    ";
        $context["sViewContent"] = (("./subviews/content/" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "include_content", [], "any", false, false, true, 114), 114, $this->source)) . ".twig");
        // line 115
        echo "                    ";
        $this->loadTemplate("./subviews/content/outerframe.twig", "layout_global.twig", 115)->display(twig_array_merge($context, ["include_content" => ($context["sViewContent"] ?? null)]));
        // line 116
        echo "                ";
    }

    // line 141
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        echo "            ";
        echo twig_include($this->env, $context, "./subviews/footer/footer.twig");
        echo "
        ";
    }

    // line 144
    public function block_pjaxend($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "            <div id=\"bottomScripts\" class=\"script-container\">
                <###end###>
            </div>
        ";
    }

    // line 150
    public function block_themescripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        echo "            <script>
                window.basicThemeScripts.init();
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "layout_global.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 151,  277 => 150,  270 => 145,  266 => 144,  259 => 142,  255 => 141,  251 => 116,  248 => 115,  245 => 114,  243 => 110,  239 => 109,  232 => 105,  228 => 104,  221 => 100,  217 => 99,  211 => 135,  195 => 122,  189 => 119,  186 => 117,  184 => 109,  180 => 107,  177 => 104,  174 => 102,  171 => 99,  168 => 97,  164 => 96,  157 => 87,  153 => 86,  146 => 74,  144 => 73,  140 => 72,  133 => 155,  131 => 150,  127 => 148,  124 => 144,  122 => 141,  117 => 138,  115 => 96,  111 => 95,  107 => 93,  103 => 90,  100 => 86,  97 => 84,  93 => 82,  89 => 80,  86 => 79,  68 => 76,  66 => 72,  52 => 71,  48 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout_global.twig", "C:\\xampp\\htdocs\\limesurvey\\themes\\survey\\fruity_twentythree\\views\\layout_global.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 72, "if" => 76, "set" => 114, "include" => 115);
        static $filters = array();
        static $functions = array("include" => 74, "registerScript" => 122);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'set', 'include'],
                [],
                ['include', 'registerScript']
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
