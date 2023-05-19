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

/* 1953eef38fd5f3bdfdd0d349267b21fdf3653a3b */
class __TwigTemplate_3379f5a7604d91156a6560b5932fa28cd2272f95962adcb533c1f6d3c1854be4 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "1953eef38fd5f3bdfdd0d349267b21fdf3653a3b", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  --space-between-items: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 5), "between_items", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5);
        echo ";
  ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 6), "wrapper", [], "any", false, false, false, 6)], 6, $context, $this->getSourceContext());
        echo "
  width: ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 7), "width", [], "any", false, false, false, 7), "style", [], "any", false, false, false, 7);
        echo ";
  ";
        // line 8
        if ((($context["breakpoint"] ?? null) == ($context["firstResponsiveBreakpointId"] ?? null))) {
            // line 9
            echo "    --num-columns: 1;
  ";
        }
        // line 11
        echo "  --num-columns: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 11), "items_per_row", [], "any", false, false, false, 11);
        echo ";
}

%%SELECTOR%% .bde-stats-grid_item {
  ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "items", [], "any", false, false, false, 15), "content_alignment", [], "any", false, false, false, 15) == "left")) {
            // line 16
            echo "    align-items: flex-start;
    text-align: left;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 18
($context["design"] ?? null), "items", [], "any", false, false, false, 18), "content_alignment", [], "any", false, false, false, 18) == "center")) {
            // line 19
            echo "    align-items: center;
    text-align: center;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
($context["design"] ?? null), "items", [], "any", false, false, false, 21), "content_alignment", [], "any", false, false, false, 21) == "right")) {
            // line 22
            echo "    align-items: flex-end;
    text-align: right;
  ";
        }
        // line 25
        echo "  background-color: ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "items", [], "any", false, false, false, 25), "background", [], "any", false, false, false, 25);
        echo ";
  ";
        // line 26
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "items", [], "any", false, false, false, 26), "borders", [], "any", false, false, false, 26)], 26, $context, $this->getSourceContext());
        echo "
  ";
        // line 27
        echo twig_call_macro($macros["macros"], "macro_spacing_padding_all", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "items", [], "any", false, false, false, 27), "padding", [], "any", false, false, false, 27)], 27, $context, $this->getSourceContext());
        echo "
  box-shadow: ";
        // line 28
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "items", [], "any", false, false, false, 28), "shadow", [], "any", false, false, false, 28), "style", [], "any", false, false, false, 28);
        echo ";
}

";
        // line 31
        echo twig_call_macro($macros["macros"], "macro_atomV1IconCss", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 31), "bde-stats-grid_icon", "%%SELECTOR%%"], 31, $context, $this->getSourceContext());
        echo "

%%SELECTOR%% .bde-stats-grid_icon {
    margin-bottom: ";
        // line 34
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 34), "after_icon", [], "any", false, false, false, 34), "style", [], "any", false, false, false, 34);
        echo ";
}

%%SELECTOR%% .bde-stats-grid_number {
  ";
        // line 38
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 38), "number", [], "any", false, false, false, 38), ($context["globalSettings"] ?? null)], 38, $context, $this->getSourceContext());
        echo "
  margin-bottom: ";
        // line 39
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 39), "after_number", [], "any", false, false, false, 39), "style", [], "any", false, false, false, 39);
        echo ";
}

%%SELECTOR%% .bde-stats-grid_text {
  ";
        // line 43
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 43), "text", [], "any", false, false, false, 43), ($context["globalSettings"] ?? null)], 43, $context, $this->getSourceContext());
        echo "
}

";
        // line 47
        echo "

    %%SELECTOR%% {
        ";
        // line 50
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 51
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 51), "wrapper", [], "any", false, false, false, 51), "background", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 52
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 52), "wrapper", [], "any", false, false, false, 52), "layout", [], "any", false, false, false, 52), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 53
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 53), "wrapper", [], "any", false, false, false, 53), "size", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 54), "wrapper", [], "any", false, false, false, 54), "typography", [], "any", false, false, false, 54),         // line 55
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 56
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 56), "wrapper", [], "any", false, false, false, 56), "spacing", [], "any", false, false, false, 56), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 57
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 57), "wrapper", [], "any", false, false, false, 57), "borders", [], "any", false, false, false, 57), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 58
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 58), "wrapper", [], "any", false, false, false, 58), "effects", [], "any", false, false, false, 58)], 50, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 62
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 63), "wrapper_hover", [], "any", false, false, false, 63), "background", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 64
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 64), "wrapper_hover", [], "any", false, false, false, 64), "layout", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 65
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 65), "wrapper_hover", [], "any", false, false, false, 65), "size", [], "any", false, false, false, 65), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 66
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 66), "wrapper_hover", [], "any", false, false, false, 66), "typography", [], "any", false, false, false, 66),         // line 67
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 68
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 68), "wrapper_hover", [], "any", false, false, false, 68), "spacing", [], "any", false, false, false, 68), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 69
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 69), "wrapper_hover", [], "any", false, false, false, 69), "borders", [], "any", false, false, false, 69), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 70
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 70), "wrapper_hover", [], "any", false, false, false, 70), "effects", [], "any", false, false, false, 70)], 62, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 74
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 74), "css", [], "any", false, false, false, 74);
        echo "


";
        // line 77
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 77), "hide", [], "any", false, false, false, 77)))) {
            // line 78
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 79
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 79), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 79), "hide", [], "any", false, false, false, 79))) {
                    // line 80
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 82
                    if (($context["isBuilder"] ?? null)) {
                        // line 83
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 86
                        echo "                        display: none;
                    ";
                    }
                    // line 88
                    echo "                }
            }
        ";
                }
                // line 91
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 93
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "1953eef38fd5f3bdfdd0d349267b21fdf3653a3b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 93,  213 => 91,  208 => 88,  204 => 86,  199 => 83,  197 => 82,  191 => 80,  188 => 79,  183 => 78,  181 => 77,  175 => 74,  168 => 70,  167 => 69,  166 => 68,  165 => 67,  164 => 66,  163 => 65,  162 => 64,  161 => 63,  160 => 62,  153 => 58,  152 => 57,  151 => 56,  150 => 55,  149 => 54,  148 => 53,  147 => 52,  146 => 51,  145 => 50,  140 => 47,  134 => 43,  127 => 39,  123 => 38,  116 => 34,  110 => 31,  104 => 28,  100 => 27,  96 => 26,  91 => 25,  86 => 22,  84 => 21,  80 => 19,  78 => 18,  74 => 16,  72 => 15,  64 => 11,  60 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "1953eef38fd5f3bdfdd0d349267b21fdf3653a3b", "");
    }
}
