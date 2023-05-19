<?php

use Breakdance\Lib\Vendor\Twig\Environment;
use Breakdance\Lib\Vendor\Twig\Error\LoaderError;
use Breakdance\Lib\Vendor\Twig\Error\RuntimeError;
use Breakdance\Lib\Vendor\Twig\Extension\SandboxExtension;
use Breakdance\Lib\Vendor\Twig\Markup;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedTagError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use Breakdance\Lib\Vendor\Twig\Source;
use Breakdance\Lib\Vendor\Twig\Template;

/* 6b3c0248bffbf4da1b165c5ff02091295f902e50 */
class __TwigTemplate_cc1cd798b704023b926e8399cb091321add23714cd9ff8ae14eeb2237244b509 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
          ";
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "6b3c0248bffbf4da1b165c5ff02091295f902e50", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  width: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 5), "width", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5);
        echo ";
  height: ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 6), "height", [], "any", false, false, false, 6), "style", [], "any", false, false, false, 6);
        echo ";
  ";
        // line 7
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 7), "background", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
        echo "
  ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 8), "borders", [], "any", false, false, false, 8)], 8, $context, $this->getSourceContext());
        echo "
  ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_spacing_complex", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 9), "padding", [], "any", false, false, false, 9), "padding"], 9, $context, $this->getSourceContext());
        echo "
  box-shadow: ";
        // line 10
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 10), "shadow", [], "any", false, false, false, 10), "style", [], "any", false, false, false, 10);
        echo ";
  gap: ";
        // line 11
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 11), "after_icon", [], "any", false, false, false, 11), "style", [], "any", false, false, false, 11);
        echo ";
    
  ";
        // line 13
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 13), "position", [], "any", false, false, false, 13) == "left") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 13), "position", [], "any", false, false, false, 13) == "right"))) {
            // line 14
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 14), "position", [], "any", false, false, false, 14) == "left")) {
                echo " 
      flex-direction: row;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 16
($context["design"] ?? null), "icon", [], "any", false, false, false, 16), "position", [], "any", false, false, false, 16) == "right")) {
                echo " 
      flex-direction: row-reverse;
    ";
            }
            // line 19
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 19), "vertical_alignment", [], "any", false, false, false, 19) == "middle")) {
                // line 20
                echo "      align-items: center;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 21
($context["design"] ?? null), "icon", [], "any", false, false, false, 21), "vertical_alignment", [], "any", false, false, false, 21) == "bottom")) {
                // line 22
                echo "      align-items: flex-end;
    ";
            } else {
                // line 24
                echo "      align-items: flex-start;
    ";
            }
            // line 26
            echo "  ";
        } else {
            // line 27
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 27), "alignment", [], "any", false, false, false, 27) == "left")) {
                // line 28
                echo "      align-items: flex-start;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 29
($context["design"] ?? null), "container", [], "any", false, false, false, 29), "alignment", [], "any", false, false, false, 29) == "center")) {
                // line 30
                echo "      align-items: center;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 31
($context["design"] ?? null), "container", [], "any", false, false, false, 31), "alignment", [], "any", false, false, false, 31) == "right")) {
                // line 32
                echo "      align-items: flex-end;
    ";
            }
            // line 34
            echo "  ";
        }
        // line 35
        echo "  
  ";
        // line 36
        if ((($context["breakpoint"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 36), "top_at", [], "any", false, false, false, 36))) {
            // line 37
            echo "    flex-direction: column;
    ";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 38), "alignment", [], "any", false, false, false, 38) == "left")) {
                // line 39
                echo "      align-items: flex-start;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 40
($context["design"] ?? null), "container", [], "any", false, false, false, 40), "alignment", [], "any", false, false, false, 40) == "center")) {
                // line 41
                echo "      align-items: center;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 42
($context["design"] ?? null), "container", [], "any", false, false, false, 42), "alignment", [], "any", false, false, false, 42) == "right")) {
                // line 43
                echo "      align-items: flex-end;
    ";
            } else {
                // line 45
                echo "      align-items: flex-start;
    ";
            }
            // line 47
            echo "  ";
        }
        // line 48
        echo "  
  ";
        // line 49
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 49), "container", [], "any", false, false, false, 49)], 49, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .ee-iconbox-content {
  ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 53), "alignment", [], "any", false, false, false, 53) == "left")) {
            // line 54
            echo "  align-items:flex-start;
  text-align:left;
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 56
($context["design"] ?? null), "container", [], "any", false, false, false, 56), "alignment", [], "any", false, false, false, 56) == "center")) {
            // line 57
            echo "  align-items:center;
  text-align:center;
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
($context["design"] ?? null), "container", [], "any", false, false, false, 59), "alignment", [], "any", false, false, false, 59) == "right")) {
            // line 60
            echo "  align-items:flex-end;
  text-align:right;
";
        }
        // line 63
        echo "}

%%SELECTOR%% .ee-iconbox-title {
  ";
        // line 66
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 66), "title", [], "any", false, false, false, 66), ($context["globalSettings"] ?? null)], 66, $context, $this->getSourceContext());
        echo "
  margin-bottom:";
        // line 67
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 67), "below_title", [], "any", false, false, false, 67), "style", [], "any", false, false, false, 67);
        echo ";
}
%%SELECTOR%% .ee-iconbox-text {
  ";
        // line 70
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 70), "text", [], "any", false, false, false, 70), ($context["globalSettings"] ?? null)], 70, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .ee-iconbox-button {
  margin-top: ";
        // line 74
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 74), "above_button", [], "any", false, false, false, 74), "style", [], "any", false, false, false, 74);
        echo ";
}

";
        // line 77
        echo twig_call_macro($macros["macros"], "macro_atomV1IconCss", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 77), "style", [], "any", false, false, false, 77), "ee-iconbox-icon", "%%SELECTOR%%"], 77, $context, $this->getSourceContext());
        echo "
";
        // line 78
        echo twig_call_macro($macros["macros"], "macro_atomV1ButtonCss", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 78), "ee-iconbox-button", "%%SELECTOR%%", ($context["breakpoint"] ?? null), ($context["globalSettings"] ?? null)], 78, $context, $this->getSourceContext());
        echo "
";
        // line 80
        echo "

    %%SELECTOR%% {
        ";
        // line 83
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 84
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 84), "wrapper", [], "any", false, false, false, 84), "background", [], "any", false, false, false, 84), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 85
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 85), "wrapper", [], "any", false, false, false, 85), "layout", [], "any", false, false, false, 85), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 86
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 86), "wrapper", [], "any", false, false, false, 86), "size", [], "any", false, false, false, 86), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 87
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 87), "wrapper", [], "any", false, false, false, 87), "typography", [], "any", false, false, false, 87),         // line 88
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 89
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 89), "wrapper", [], "any", false, false, false, 89), "spacing", [], "any", false, false, false, 89), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 90
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 90), "wrapper", [], "any", false, false, false, 90), "borders", [], "any", false, false, false, 90), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 91
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 91), "wrapper", [], "any", false, false, false, 91), "effects", [], "any", false, false, false, 91)], 83, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 95
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 96
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 96), "wrapper_hover", [], "any", false, false, false, 96), "background", [], "any", false, false, false, 96), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 97
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 97), "wrapper_hover", [], "any", false, false, false, 97), "layout", [], "any", false, false, false, 97), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 98
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 98), "wrapper_hover", [], "any", false, false, false, 98), "size", [], "any", false, false, false, 98), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 99
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 99), "wrapper_hover", [], "any", false, false, false, 99), "typography", [], "any", false, false, false, 99),         // line 100
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 101
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 101), "wrapper_hover", [], "any", false, false, false, 101), "spacing", [], "any", false, false, false, 101), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 102
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 102), "wrapper_hover", [], "any", false, false, false, 102), "borders", [], "any", false, false, false, 102), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 103
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 103), "wrapper_hover", [], "any", false, false, false, 103), "effects", [], "any", false, false, false, 103)], 95, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 107
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 107), "css", [], "any", false, false, false, 107);
        echo "


";
        // line 110
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 110), "hide", [], "any", false, false, false, 110)))) {
            // line 111
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 112
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 112), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 112), "hide", [], "any", false, false, false, 112))) {
                    // line 113
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 115
                    if (($context["isBuilder"] ?? null)) {
                        // line 116
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 119
                        echo "                        display: none;
                    ";
                    }
                    // line 121
                    echo "                }
            }
        ";
                }
                // line 124
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 126
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "6b3c0248bffbf4da1b165c5ff02091295f902e50";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 126,  297 => 124,  292 => 121,  288 => 119,  283 => 116,  281 => 115,  275 => 113,  272 => 112,  267 => 111,  265 => 110,  259 => 107,  252 => 103,  251 => 102,  250 => 101,  249 => 100,  248 => 99,  247 => 98,  246 => 97,  245 => 96,  244 => 95,  237 => 91,  236 => 90,  235 => 89,  234 => 88,  233 => 87,  232 => 86,  231 => 85,  230 => 84,  229 => 83,  224 => 80,  220 => 78,  216 => 77,  210 => 74,  203 => 70,  197 => 67,  193 => 66,  188 => 63,  183 => 60,  181 => 59,  177 => 57,  175 => 56,  171 => 54,  169 => 53,  162 => 49,  159 => 48,  156 => 47,  152 => 45,  148 => 43,  146 => 42,  143 => 41,  141 => 40,  138 => 39,  136 => 38,  133 => 37,  131 => 36,  128 => 35,  125 => 34,  121 => 32,  119 => 31,  116 => 30,  114 => 29,  111 => 28,  108 => 27,  105 => 26,  101 => 24,  97 => 22,  95 => 21,  92 => 20,  89 => 19,  83 => 16,  77 => 14,  75 => 13,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "6b3c0248bffbf4da1b165c5ff02091295f902e50", "");
    }
}
