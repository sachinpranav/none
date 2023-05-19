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

/* 2534ab6815b461ea6e936cbabe4ccb09b8c6fbe8 */
class __TwigTemplate_c056aec1fc2b20c8a1de2bd87ad7a097bde182b65a66669941f317fa4f650a98 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "2534ab6815b461ea6e936cbabe4ccb09b8c6fbe8", 2)->unwrap();
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
        // line 10
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 10), "content_padding_only", [], "any", false, false, false, 10)) {
            // line 11
            echo "    ";
            echo twig_call_macro($macros["macros"], "macro_spacing_complex", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 11), "padding", [], "any", false, false, false, 11), "padding"], 11, $context, $this->getSourceContext());
            echo "
  ";
        }
        // line 13
        echo "  
  gap: ";
        // line 14
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 14), "after_image", [], "any", false, false, false, 14), "style", [], "any", false, false, false, 14);
        echo ";

  ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 16), "position", [], "any", false, false, false, 16) == "left")) {
            // line 17
            echo "    flex-direction: row;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 18
($context["design"] ?? null), "image", [], "any", false, false, false, 18), "position", [], "any", false, false, false, 18) == "right")) {
            // line 19
            echo "    flex-direction: row-reverse;
  ";
        }
        // line 21
        echo "  
  ";
        // line 22
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 22), "position", [], "any", false, false, false, 22) == "left") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 22), "position", [], "any", false, false, false, 22) == "right"))) {
            echo "  
    ";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 23), "vertical_alignment", [], "any", false, false, false, 23) == "middle")) {
                // line 24
                echo "      align-items: center;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 25
($context["design"] ?? null), "image", [], "any", false, false, false, 25), "vertical_alignment", [], "any", false, false, false, 25) == "bottom")) {
                // line 26
                echo "      align-items: flex-end;
    ";
            } else {
                // line 28
                echo "      align-items: flex-start;
    ";
            }
            // line 30
            echo "  ";
        } else {
            // line 31
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 31), "content_position", [], "any", false, false, false, 31) == "left")) {
                // line 32
                echo "      align-items: flex-start;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 33
($context["design"] ?? null), "container", [], "any", false, false, false, 33), "content_position", [], "any", false, false, false, 33) == "center")) {
                // line 34
                echo "      align-items: center;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 35
($context["design"] ?? null), "container", [], "any", false, false, false, 35), "content_position", [], "any", false, false, false, 35) == "right")) {
                // line 36
                echo "      align-items: flex-end;
    ";
            }
            // line 38
            echo "  ";
        }
        // line 39
        echo "
  ";
        // line 40
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 40), "container", [], "any", false, false, false, 40)], 40, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .ee-imagebox-content {
  ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 44), "content_position", [], "any", false, false, false, 44) == "left")) {
            // line 45
            echo "    align-items: flex-start;
    text-align: left;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 47
($context["design"] ?? null), "container", [], "any", false, false, false, 47), "content_position", [], "any", false, false, false, 47) == "center")) {
            // line 48
            echo "    align-items: center;
    text-align: center;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
($context["design"] ?? null), "container", [], "any", false, false, false, 50), "content_position", [], "any", false, false, false, 50) == "right")) {
            // line 51
            echo "    align-items: flex-end;
    text-align: right;
  ";
        }
        // line 54
        echo "  
  ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 55), "content_padding_only", [], "any", false, false, false, 55)) {
            // line 56
            echo "    ";
            echo twig_call_macro($macros["macros"], "macro_spacing_complex", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 56), "padding", [], "any", false, false, false, 56), "padding"], 56, $context, $this->getSourceContext());
            echo "
  ";
        }
        // line 58
        echo "
}

";
        // line 61
        if ((($context["breakpoint"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 61), "top_at", [], "any", false, false, false, 61))) {
            // line 62
            echo "  %%SELECTOR%% {
    flex-direction: column;
    align-items: center;
  }
";
        }
        // line 67
        echo "
%%SELECTOR%% .ee-imagebox-image {
  width: ";
        // line 69
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 69), "width", [], "any", false, false, false, 69), "style", [], "any", false, false, false, 69);
        echo ";
}

%%SELECTOR%% .ee-imagebox-image img {
  ";
        // line 73
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 73), "borders", [], "any", false, false, false, 73)], 73, $context, $this->getSourceContext());
        echo "
  box-shadow: ";
        // line 74
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 74), "shadow", [], "any", false, false, false, 74), "style", [], "any", false, false, false, 74);
        echo ";
}

%%SELECTOR%% .ee-imagebox-title {
  ";
        // line 78
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 78), "title", [], "any", false, false, false, 78), ($context["globalSettings"] ?? null)], 78, $context, $this->getSourceContext());
        echo "
  margin-bottom: ";
        // line 79
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 79), "below_title", [], "any", false, false, false, 79), "style", [], "any", false, false, false, 79);
        echo ";
}

%%SELECTOR%% .ee-imagebox-text {
  ";
        // line 83
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 83), "text", [], "any", false, false, false, 83), ($context["globalSettings"] ?? null)], 83, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .ee-imagebox-button {
  margin-top: ";
        // line 87
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 87), "above_button", [], "any", false, false, false, 87), "style", [], "any", false, false, false, 87);
        echo ";
}

";
        // line 90
        echo twig_call_macro($macros["macros"], "macro_atomV1ButtonCss", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 90), "ee-imagebox-button", "%%SELECTOR%%", ($context["breakpoint"] ?? null), ($context["globalSettings"] ?? null)], 90, $context, $this->getSourceContext());
        echo "
";
        // line 92
        echo "

    %%SELECTOR%% {
        ";
        // line 95
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 96
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 96), "wrapper", [], "any", false, false, false, 96), "background", [], "any", false, false, false, 96), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 97
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 97), "wrapper", [], "any", false, false, false, 97), "layout", [], "any", false, false, false, 97), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 98
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 98), "wrapper", [], "any", false, false, false, 98), "size", [], "any", false, false, false, 98), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 99
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 99), "wrapper", [], "any", false, false, false, 99), "typography", [], "any", false, false, false, 99),         // line 100
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 101
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 101), "wrapper", [], "any", false, false, false, 101), "spacing", [], "any", false, false, false, 101), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 102
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 102), "wrapper", [], "any", false, false, false, 102), "borders", [], "any", false, false, false, 102), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 103
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 103), "wrapper", [], "any", false, false, false, 103), "effects", [], "any", false, false, false, 103)], 95, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 107
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 108
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 108), "wrapper_hover", [], "any", false, false, false, 108), "background", [], "any", false, false, false, 108), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 109
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 109), "wrapper_hover", [], "any", false, false, false, 109), "layout", [], "any", false, false, false, 109), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 110
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 110), "wrapper_hover", [], "any", false, false, false, 110), "size", [], "any", false, false, false, 110), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 111
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 111), "wrapper_hover", [], "any", false, false, false, 111), "typography", [], "any", false, false, false, 111),         // line 112
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 113
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 113), "wrapper_hover", [], "any", false, false, false, 113), "spacing", [], "any", false, false, false, 113), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 114
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 114), "wrapper_hover", [], "any", false, false, false, 114), "borders", [], "any", false, false, false, 114), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 115
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 115), "wrapper_hover", [], "any", false, false, false, 115), "effects", [], "any", false, false, false, 115)], 107, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 119
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 119), "css", [], "any", false, false, false, 119);
        echo "


";
        // line 122
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 122), "hide", [], "any", false, false, false, 122)))) {
            // line 123
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 124
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 124), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 124), "hide", [], "any", false, false, false, 124))) {
                    // line 125
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 127
                    if (($context["isBuilder"] ?? null)) {
                        // line 128
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 131
                        echo "                        display: none;
                    ";
                    }
                    // line 133
                    echo "                }
            }
        ";
                }
                // line 136
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 138
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "2534ab6815b461ea6e936cbabe4ccb09b8c6fbe8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 138,  312 => 136,  307 => 133,  303 => 131,  298 => 128,  296 => 127,  290 => 125,  287 => 124,  282 => 123,  280 => 122,  274 => 119,  267 => 115,  266 => 114,  265 => 113,  264 => 112,  263 => 111,  262 => 110,  261 => 109,  260 => 108,  259 => 107,  252 => 103,  251 => 102,  250 => 101,  249 => 100,  248 => 99,  247 => 98,  246 => 97,  245 => 96,  244 => 95,  239 => 92,  235 => 90,  229 => 87,  222 => 83,  215 => 79,  211 => 78,  204 => 74,  200 => 73,  193 => 69,  189 => 67,  182 => 62,  180 => 61,  175 => 58,  169 => 56,  167 => 55,  164 => 54,  159 => 51,  157 => 50,  153 => 48,  151 => 47,  147 => 45,  145 => 44,  138 => 40,  135 => 39,  132 => 38,  128 => 36,  126 => 35,  123 => 34,  121 => 33,  118 => 32,  115 => 31,  112 => 30,  108 => 28,  104 => 26,  102 => 25,  99 => 24,  97 => 23,  93 => 22,  90 => 21,  86 => 19,  84 => 18,  81 => 17,  79 => 16,  74 => 14,  71 => 13,  65 => 11,  63 => 10,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "2534ab6815b461ea6e936cbabe4ccb09b8c6fbe8", "");
    }
}
