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

/* __string_template__8bdb8b4ee3e9f9ff7628f99beadc3c0e */
class __TwigTemplate_4995b9f13ffd05a77a698a34822fc7e6 extends Template
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
        echo "<div class=\"card card-primary h-100\">
    <!-- Default panel contents -->
    <div class=\"card-header\">
        <h5 class=\"card-title\">";
        // line 4
        echo gT("Share survey");
        echo "</h5>
    </div>
    <!-- List group -->
    <ul class=\"list-group list-group-flush\">
        <!-- Base language -->
        <li class=\"list-group-item p-0 border-0\" id=\"adminsidepanel__surveysummary--mainLanguageLink\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4 card-label\">
                    ";
        // line 12
        echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 12), 12, $this->source), false);
        echo " (";
        echo gT("Base language");
        echo "):
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 15)) {
            echo " ";
            // line 16
            echo "                        ";
            $context["tmp_url"] = (($__internal_compile_0 = ($context["surveyUrls"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 16)] ?? null) : null);
            // line 17
            echo "                    ";
        }
        // line 18
        echo "                    <a href='";
        echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 18, $this->source);
        echo "' target='_blank'> ";
        echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 18, $this->source);
        echo " </a>
                </div>
            </div>
        </li>
        <!-- Additional languages  -->
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aAdditionalLanguages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
            // line 24
            echo "        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
               <div class=\"col-4 card-label\">
                    ";
            // line 27
            echo (getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"], 27, $this->source), false) . ":");
            echo "
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                    ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 30)) {
                echo " ";
                // line 31
                echo "                        ";
                $context["tmp_url"] = (($__internal_compile_1 = ($context["surveyUrls"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["langname"]] ?? null) : null);
                // line 32
                echo "                    ";
            }
            // line 33
            echo "                    <a href='";
            echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 33, $this->source);
            echo "' target='_blank'> ";
            echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 33, $this->source);
            echo " </a>
                </div>
            </div>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
        <!-- End URL -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
               <div class=\"col-4 card-label\">
                    ";
        // line 43
        echo gT("End URL:");
        echo "
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                        ";
        // line 46
        echo $this->sandbox->ensureToStringAllowed(($context["endurl"] ?? null), 46, $this->source);
        echo "
                </div>
            </div>
        </li>
        <!-- Number of questions/groups -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
               <div class=\"col-4 card-label\">
                    ";
        // line 54
        echo gT("Number of questions/groups:");
        echo "
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                    ";
        // line 57
        echo (($this->sandbox->ensureToStringAllowed(($context["sumcount3"] ?? null), 57, $this->source) . "/") . $this->sandbox->ensureToStringAllowed(($context["sumcount2"] ?? null), 57, $this->source));
        echo "
                </div>
            </div>
        </li>
        <!-- Sharing panel -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4 card-label\">
                    ";
        // line 65
        echo gT("Sharing panel:");
        echo "
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                   <div class='selector_openSharePanel'  data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 68
        echo (((twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "active", [], "any", false, false, true, 68) == "Y")) ? ("") : (gT("Activate your survey to open this panel")));
        echo "\">
                        <a href=\"#sharingdialog\" class=\"btn btn-outline-secondary ";
        // line 69
        echo (((twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "active", [], "any", false, false, true, 69) == "Y")) ? ("") : ("disabled"));
        echo "\" data-bs-toggle=\"modal\"
                        id=\"sharePanelButton_";
        // line 70
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 70), 70, $this->source);
        echo "\" data-surveyid=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 70), 70, $this->source);
        echo "\">
                            ";
        // line 71
        echo gT("Open sharing panel");
        echo "
                        </a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

";
        // line 80
        if ((twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "active", [], "any", false, false, true, 80) == "Y")) {
            // line 81
            echo "    <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"sharingdialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
            // line 85
            echo gT("Share survey");
            echo "</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"card card-primary h-100 mb-3 p-4\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\">";
            // line 91
            echo gT("Share QR-code:");
            echo "</h5>
                        </div>
                        <div class=\"card-body border rounded\">
                            <ul class=\"list-group list-group-flush\">
                                ";
            // line 95
            if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 95)) {
                echo " ";
                // line 96
                echo "                                    ";
                $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 96), "lang" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 96)]);
                // line 97
                echo "                                ";
            }
            // line 98
            echo "                                 <li class=\"list-group-item p-0 border-0 mb-2\">
                                    <div class=\"ls-flex-row col-12 align-items-center\">
                                        <div class=\"col-4\">
                                            ";
            // line 101
            echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 101), 101, $this->source), false);
            echo "
                                        </div>
                                        <div class=\"col-8 d-flex justify-content-center\">
                                            <div class=\"selector__qrcode_container\">
                                                <button class=\"btn btn-outline-secondary selector__qrcode_trigger\">";
            // line 105
            echo gT("Generate QR-Code");
            echo "</button>
                                                <div class=\"selector__qrcode\" data-url=\"";
            // line 106
            echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 106, $this->source);
            echo "\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aAdditionalLanguages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
                // line 112
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 112)) {
                    echo " ";
                    // line 113
                    echo "                                        ";
                    $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 113), "lang" => $context["langname"]]);
                    // line 114
                    echo "                                    ";
                }
                // line 115
                echo "                                    <li class=\"list-group-item p-0 border-0";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 115)) {
                    echo " mb-2";
                }
                echo "\">
                                        <div class=\"ls-flex-row col-12 align-items-center\">
                                            <div class=\"col-4\">
                                                ";
                // line 118
                echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"], 118, $this->source), false);
                echo "
                                            </div>
                                            <div class=\"col-8 d-flex justify-content-center\">
                                                <div class=\"selector__qrcode_container\">
                                                    <button class=\"btn btn-outline-secondary selector__qrcode_trigger\">";
                // line 122
                echo gT("Generate QR-Code");
                echo "</button>
                                                    <div class=\"selector__qrcode\" data-url=\"";
                // line 123
                echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 123, $this->source);
                echo "\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "                            </ul>
                        </div>
                    </div>
                    <div class=\"card card-primary h-100 mb-3 p-4\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\">
                                ";
            // line 135
            echo gT("Share on Facebook:");
            echo "
                            </h5>
                            <button class=\"btn btn-xs btn-warning float-end facebook-button\" 
                                  id=\"selector_activateFacebookSharing\">";
            // line 138
            echo gT("Enable");
            echo "</button>
                        </div>
                        <div class=\"card-body border rounded\">
                            <ul class=\"list-group list-group-flush\">
                                ";
            // line 142
            if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 142)) {
                echo " ";
                // line 143
                echo "                                    ";
                $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 143), "lang" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 143)]);
                // line 144
                echo "                                ";
            }
            // line 145
            echo "                                    <li class=\"list-group-item p-0 border-0 mb-2\">
                                    <div class=\"ls-flex-row col-12 align-items-center\">
                                        <div class=\"col-4\">
                                            ";
            // line 148
            echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 148), 148, $this->source), false);
            echo "
                                        </div>
                                        <div class=\"col-8 d-flex justify-content-center\">
                                            <button class=\"btn btn-disabled facebook-button selector_fb_share_disabled\" disabled ><i class=\"ri-facebook-box-fill\"></i> ";
            // line 151
            echo gT("Disabled");
            echo "</button>
                                            <iframe class=\"selector_fb_share d-none\" data-src=\"https://www.facebook.com/plugins/share_button.php?href=";
            // line 152
            echo twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 152, $this->source));
            echo "&layout=button_count&size=large&mobile_iframe=true&appId=328433594315978&width=106&height=28\" width=\"106\" height=\"28\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"></iframe>
                                        </div>
                                    </div>
                                </li>
                                ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aAdditionalLanguages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
                // line 157
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 157)) {
                    echo " ";
                    // line 158
                    echo "                                        ";
                    $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 158), "lang" => $context["langname"]]);
                    // line 159
                    echo "                                    ";
                }
                // line 160
                echo "                                    <li class=\"list-group-item p-0 border-0";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 160)) {
                    echo " mb-2";
                }
                echo "\">
                                        <div class=\"ls-flex-row col-12 align-items-center\">
                                            <div class=\"col-4\">
                                                ";
                // line 163
                echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"], 163, $this->source), false);
                echo "
                                            </div>
                                            <div class=\"col-8 d-flex justify-content-center\">
                                                <button class=\"btn btn-disabled facebook-button selector_fb_share_disabled\" disabled ><i class=\"ri-facebook-box-fill\"></i> ";
                // line 166
                echo gT("Disabled");
                echo "</button>
                                                <iframe class=\"selector_fb_share d-none h-12\" data-src=\"https://www.facebook.com/plugins/share_button.php?href=";
                // line 167
                echo twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 167, $this->source));
                echo "&layout=button_count&size=large&mobile_iframe=true&appId=1321262851319939&width=106&height=28\" width=\"106\" height=\"28\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"></iframe>
                                            </div>
                                        </div>
                                    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "                            </ul>
                        </div>
                    </div>
                    <div class=\"card card-primary h-100 mb-3 p-4\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\">
                                ";
            // line 178
            echo gT("Share on Twitter:");
            echo "
                            </h5>
                        </div>
                        <div class=\"card-body border rounded\">
                            <ul class=\"list-group list-group-flush\">
                                ";
            // line 183
            if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 183)) {
                echo " ";
                // line 184
                echo "                                    ";
                $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 184), "lang" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 184)]);
                // line 185
                echo "                                ";
            }
            // line 186
            echo "                                <li class=\"list-group-item p-0 border-0 mb-2\">
                                    <div class=\"ls-flex-row col-12 align-items-center\">
                                        <div class=\"col-4\">
                                            ";
            // line 189
            echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 189), 189, $this->source), false);
            echo "
                                        </div>
                                        <div class=\"col-8 d-flex justify-content-center\">
                                            <a class=\"btn btn-outline-secondary twitter-button\" target='_blank' href=\"https://twitter.com/intent/tweet?text=";
            // line 192
            echo twig_urlencode_filter(gT("Thanks for taking this survey!"));
            echo "&url=";
            echo twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 192, $this->source));
            echo "&hashtags=limesurvey,survey\">
                                                <i class=\"ri-twitter-fill\"></i>";
            // line 193
            echo gT("Tweet it");
            echo "
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aAdditionalLanguages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
                // line 199
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 199)) {
                    echo " ";
                    // line 200
                    echo "                                        ";
                    $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 200), "lang" => $context["langname"]]);
                    // line 201
                    echo "                                    ";
                }
                // line 202
                echo "                                    <li class=\"list-group-item p-0 border-0";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 202)) {
                    echo " mb-2";
                }
                echo "\">
                                        <div class=\"ls-flex-row col-12 align-items-center\">
                                            <div class=\"col-4\">
                                                ";
                // line 205
                echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"], 205, $this->source), false);
                echo "
                                            </div>
                                            <div class=\"col-8 d-flex justify-content-center\">
                                                <a class=\"btn btn-outline-secondary twitter-button\" target='_blank' href=\"https://twitter.com/intent/tweet?text=";
                // line 208
                echo twig_urlencode_filter(gT("Thanks for taking this survey!"));
                echo "&url=";
                echo twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 208, $this->source));
                echo "&hashtags=limesurvey,survey\">
                                                    <i class=\"ri-twitter-fill\"></i>";
                // line 209
                echo gT("Tweet it");
                echo "
                                                </a>
                                            </div>
                                        </div>
                                    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">";
            // line 220
            echo gT("Close");
            echo "</button>
                </div>
            </div>
        </div>
    </div>

";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__8bdb8b4ee3e9f9ff7628f99beadc3c0e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 220,  553 => 215,  533 => 209,  527 => 208,  521 => 205,  512 => 202,  509 => 201,  506 => 200,  502 => 199,  485 => 198,  477 => 193,  471 => 192,  465 => 189,  460 => 186,  457 => 185,  454 => 184,  451 => 183,  443 => 178,  435 => 172,  416 => 167,  412 => 166,  406 => 163,  397 => 160,  394 => 159,  391 => 158,  387 => 157,  370 => 156,  363 => 152,  359 => 151,  353 => 148,  348 => 145,  345 => 144,  342 => 143,  339 => 142,  332 => 138,  326 => 135,  318 => 129,  298 => 123,  294 => 122,  287 => 118,  278 => 115,  275 => 114,  272 => 113,  268 => 112,  251 => 111,  243 => 106,  239 => 105,  232 => 101,  227 => 98,  224 => 97,  221 => 96,  218 => 95,  211 => 91,  202 => 85,  196 => 81,  194 => 80,  182 => 71,  176 => 70,  172 => 69,  168 => 68,  162 => 65,  151 => 57,  145 => 54,  134 => 46,  128 => 43,  121 => 38,  107 => 33,  104 => 32,  101 => 31,  98 => 30,  92 => 27,  87 => 24,  83 => 23,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  55 => 12,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8bdb8b4ee3e9f9ff7628f99beadc3c0e", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15, "set" => 16, "for" => 23);
        static $filters = array("url_encode" => 152);
        static $functions = array("gT" => 4, "getLanguageNameFromCode" => 12, "createAbsoluteUrl" => 96);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['url_encode'],
                ['gT', 'getLanguageNameFromCode', 'createAbsoluteUrl']
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
