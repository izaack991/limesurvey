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

/* __string_template__bdad8980702fb536d3fd7649a7863c81 */
class __TwigTemplate_fd69a7fcffb9aef63c39d3e2181394c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'nav_bar' => [$this, 'block_nav_bar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'themescripts' => [$this, 'block_themescripts'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "


";
        // line 86
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 88
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 88), 88, $this->source);
        echo "\" dir=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 88), 88, $this->source);
        echo "\"
      class=\"";
        // line 89
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 89), 89, $this->source);
        echo " dir-";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 89), 89, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 89), "html", [], "any", false, false, true, 89), 89, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 89), "html", [], "any", false, false, true, 89), 89, $this->source);
        echo ">

";
        // line 92
        echo twig_include($this->env, $context, "./subviews/header/head.twig");
        echo "

<body
    class=\" ";
        // line 95
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 95), "body", [], "any", false, false, true, 95), 95, $this->source);
        echo " font-";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 95), "font", [], "any", false, false, true, 95), 95, $this->source);
        echo " lang-";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 95), 95, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyformat", [], "any", false, false, true, 95), 95, $this->source);
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 95), "brandlogo", [], "any", false, false, true, 95) == "on")) {
            echo "brand-logo";
        }
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 95), "body", [], "any", false, false, true, 95), 95, $this->source);
        echo " >

";
        // line 98
        echo "<div id=\"beginScripts\">
    <###begin###>
</div>

";
        // line 103
        echo "<article>

    <div id=\"";
        // line 105
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 105), "dynamicreload", [], "any", false, false, true, 105), 105, $this->source);
        echo "\">
        ";
        // line 106
        $this->displayBlock('body', $context, $blocks);
        // line 222
        echo "    </div>
</article>
";
        // line 224
        $this->displayBlock('footer', $context, $blocks);
        // line 227
        echo "<div id=\"bottomScripts\">
    <###end###>
</div>
";
        // line 230
        $this->displayBlock('themescripts', $context, $blocks);
        // line 235
        echo "</body>
</html>
";
    }

    // line 106
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "            ";
        // line 108
        echo "            ";
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 111
        echo "

            ";
        // line 114
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 207
        echo "

            ";
        // line 210
        echo "            ";
        echo LS_Twig_Extension::registerScript("BasicThemeScripts", "
            if(window.basicThemeScripts === undefined){
                window.basicThemeScripts = new ThemeScripts();
            }
            if(window.navbarScripts === undefined){
                window.navbarScripts = new NavbarScripts();
            }
            basicThemeScripts.initGlobal();
            navbarScripts.initNavbarEvents();
            ", "POS_END");
        // line 219
        echo "

        ";
    }

    // line 108
    public function block_nav_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "                ";
        echo twig_include($this->env, $context, "./subviews/header/nav_bar.twig");
        echo "
            ";
    }

    // line 114
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "                <div class=\"container-md\">
                    ";
        // line 116
        echo LS_Twig_Extension::registerTemplateCssFile("./css/survey-list.css");
        echo "

                    <div class=\"";
        // line 118
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 118), "surveylistrow", [], "any", false, false, true, 118), 118, $this->source);
        echo " row\"
                         id=\"";
        // line 119
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 119), "surveylistrow", [], "any", false, false, true, 119), 119, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 119), "surveylistrow", [], "any", false, false, true, 119), 119, $this->source);
        echo ">
                        <div class=\"col-12\">
                            ";
        // line 122
        echo "                            ";
        echo twig_include($this->env, $context, "./subviews/messages/no_js_alert.twig");
        echo "
                            <div class=\"row justify-content-center mb-3\">
                                <div
                                    id=\"";
        // line 125
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 125), "surveylistrowjumbotron", [], "any", false, false, true, 125), 125, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 125), "surveylistrowjumbotron", [], "any", false, false, true, 125), 125, $this->source);
        echo ">
                                    <div class=\"img-fluid mx-auto d-block\">
                                        ";
        // line 127
        echo twig_include($this->env, $context, "./ls_logo_svg.twig");
        echo "
                                    </div>
                                    <span class=\"text-center h3\">";
        // line 129
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sSiteName", [], "any", false, false, true, 129), 129, $this->source);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-4\"></div>
                                <div class=\"col\">
                                    <div id=\"surveylist-language-changer\" class=\"ls-js-hidden\">
                                        ";
        // line 136
        echo twig_include($this->env, $context, "./subviews/navigation/language_changer_form.twig");
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div
                                    class=\"";
        // line 142
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 142), "surveylistrowdiva", [], "any", false, false, true, 142), 142, $this->source);
        echo " col-12\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 142), "surveylistrowdiva", [], "any", false, false, true, 142), 142, $this->source);
        echo ">
                                    <div
                                        class='";
        // line 144
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 144), "surveylistrowdivadiv", [], "any", false, false, true, 144), 144, $this->source);
        echo " form-heading' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 144), "surveylistrowdivadiv", [], "any", false, false, true, 144), 144, $this->source);
        echo ">
                                        ";
        // line 145
        echo gT("The following surveys are available:");
        echo "
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div
                                    class=\"";
        // line 152
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 152), "surveylistrowdivb", [], "any", false, false, true, 152), 152, $this->source);
        echo " col-12\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 152), "surveylistrowdivb", [], "any", false, false, true, 152), 152, $this->source);
        echo ">
                                    <div
                                        class='";
        // line 154
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 154), "surveylistrowdivbdiv", [], "any", false, false, true, 154), 154, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 154), "surveylistrowdivbdiv", [], "any", false, false, true, 154), 154, $this->source);
        echo ">
                                        <ul class='";
        // line 155
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 155), "surveylistrowdivbdivul", [], "any", false, false, true, 155), 155, $this->source);
        echo " list-unstyled ' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 155), "surveylistrowdivbdivul", [], "any", false, false, true, 155), 155, $this->source);
        echo ">

                                            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "publicSurveys", [], "any", false, false, true, 157));
        foreach ($context['_seq'] as $context["key"] => $context["oSurvey"]) {
            // line 158
            echo "                                                <li class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 158), "surveylistrowdivbdivulli", [], "any", false, false, true, 158), 158, $this->source);
            echo " btn-group col-12 col-md-6\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 158), "surveylistrowdivbdivulli", [], "any", false, false, true, 158), 158, $this->source);
            echo ">
                                                    <a
                                                        href=\"";
            // line 160
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["oSurvey"], "sSurveyUrl", [], "any", false, false, true, 160), 160, $this->source);
            echo "\"
                                                        title=\"";
            // line 161
            echo gT("Start survey");
            echo "\"
                                                        lang=\"";
            // line 162
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["oSurvey"], "language", [], "any", false, false, true, 162), 162, $this->source);
            echo "\"
                                                        class=\"";
            // line 163
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 163), "surveylistrowdivbdivullia", [], "any", false, false, true, 163), 163, $this->source);
            echo " btn btn-primary col-12\">
                                                        ";
            // line 164
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["oSurvey"], "localizedTitle", [], "any", false, false, true, 164), 164, $this->source);
            echo "
                                                    </a>
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oSurvey'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div
                                    class=\"";
        // line 174
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 174), "surveylistrowdivc", [], "any", false, false, true, 174), 174, $this->source);
        echo " col-12\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 174), "surveylistrowdivc", [], "any", false, false, true, 174), 174, $this->source);
        echo ">
                                    ";
        // line 175
        echo sprintf(gT("Please contact %s ( %s ) for further assistance."), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sSiteAdminName", [], "any", false, false, true, 175), 175, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sSiteAdminEmail", [], "any", false, false, true, 175), 175, $this->source));
        echo "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id=\"";
        // line 181
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 181), "surveylistfooter", [], "any", false, false, true, 181), 181, $this->source);
        echo "\"
                         class=\"";
        // line 182
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 182), "surveylistfooter", [], "any", false, false, true, 182), 182, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 182), "surveylistfooter", [], "any", false, false, true, 182), 182, $this->source);
        echo ">
                        <div
                            class=\"";
        // line 184
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 184), "surveylistfootercont", [], "any", false, false, true, 184), 184, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 184), "surveylistfootercont", [], "any", false, false, true, 184), 184, $this->source);
        echo ">
                            <div ";
        // line 185
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 185), "surveylistfootercontp", [], "any", false, false, true, 185), 185, $this->source);
        echo " class=\"row\">
                                <div class=\"col-6 col-md-12\">
                                    <a ";
        // line 187
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 187), "surveylistfootercontpaa", [], "any", false, false, true, 187), 187, $this->source);
        echo ">
                                        ";
        // line 188
        echo LS_Twig_Extension::image("./files/poweredby.png", "LimeSurvey Survey Software", ["class" => "img-fluid"]);
        echo "
                                    </a>
                                </div>
                                <div class=\"col-12 d-block d-sm-none d-md-block text-center\">
                                    <a ";
        // line 192
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 192), "surveylistfootercontpab", [], "any", false, false, true, 192), 192, $this->source);
        echo ">
                                        The Online Survey Tool
                                    </a>
                                    - Free & Open Source
                                </div>
                                <div class=\"col-6 d-none d-sm-block d-md-none text-center\">
                                    <a ";
        // line 198
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 198), "surveylistfootercontpab", [], "any", false, false, true, 198), 198, $this->source);
        echo ">
                                        Online Surveytool
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
    }

    // line 224
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 225
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/footer/footer.twig");
        echo "
";
    }

    // line 230
    public function block_themescripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 231
        echo "    <script>
        window.basicThemeScripts.init();
    </script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__bdad8980702fb536d3fd7649a7863c81";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 231,  408 => 230,  401 => 225,  397 => 224,  384 => 198,  375 => 192,  368 => 188,  364 => 187,  359 => 185,  353 => 184,  346 => 182,  342 => 181,  333 => 175,  327 => 174,  319 => 168,  309 => 164,  305 => 163,  301 => 162,  297 => 161,  293 => 160,  285 => 158,  281 => 157,  274 => 155,  268 => 154,  261 => 152,  251 => 145,  245 => 144,  238 => 142,  229 => 136,  219 => 129,  214 => 127,  207 => 125,  200 => 122,  193 => 119,  189 => 118,  184 => 116,  181 => 115,  177 => 114,  170 => 109,  166 => 108,  160 => 219,  148 => 210,  144 => 207,  141 => 114,  137 => 111,  134 => 108,  132 => 107,  128 => 106,  122 => 235,  120 => 230,  115 => 227,  113 => 224,  109 => 222,  107 => 106,  103 => 105,  99 => 103,  93 => 98,  76 => 95,  70 => 92,  59 => 89,  53 => 88,  49 => 86,  44 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__bdad8980702fb536d3fd7649a7863c81", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 95, "block" => 106, "for" => 157);
        static $filters = array();
        static $functions = array("include" => 92, "registerScript" => 210, "registerTemplateCssFile" => 116, "gT" => 145, "sprintf" => 175, "image" => 188);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'for'],
                [],
                ['include', 'registerScript', 'registerTemplateCssFile', 'gT', 'sprintf', 'image']
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
