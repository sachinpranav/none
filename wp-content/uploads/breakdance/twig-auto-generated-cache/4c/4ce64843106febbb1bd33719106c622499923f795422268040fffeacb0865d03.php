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

/* 741eab7e2cab474fded29ffc830827f653e00e14 */
class __TwigTemplate_fc363523edf8d8bd6efd4e2ab8bdfedfd895a8275262c55bc313463ab343d494 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "741eab7e2cab474fded29ffc830827f653e00e14", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  width: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 5), "width", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5);
        echo ";
  height: ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 6), "height", [], "any", false, false, false, 6), "style", [], "any", false, false, false, 6);
        echo ";
  gap: ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 7), "between_images", [], "any", false, false, false, 7), "style", [], "any", false, false, false, 7);
        echo ";
  ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 8), "wrapper", [], "any", false, false, false, 8)], 8, $context, $this->getSourceContext());
        echo "
  --eeiaTransitionDuration: ";
        // line 9
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 9), "transition_duration", [], "any", false, false, false, 9), "style", [], "any", false, false, false, 9);
        echo ";
  ";
        // line 10
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 10), "orientation", [], "any", false, false, false, 10) == "vertical") || (($context["breakpoint"] ?? null) == ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, true, false, 10), "vertical_at", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, true, false, 10), "vertical_at", [], "any", false, false, false, 10), ($context["firstResponsiveBreakpointId"] ?? null))) : (($context["firstResponsiveBreakpointId"] ?? null)))))) {
            // line 11
            echo "  \tflex-direction: column;
    overflow-x: hidden;
  ";
        }
        // line 14
        echo "}

%%SELECTOR%% .ee-image-accordion-item {
  box-shadow: ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 17), "shadow", [], "any", false, false, false, 17), "style", [], "any", false, false, false, 17);
        echo ";
  border-radius: ";
        // line 18
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 18), "border_radius", [], "any", false, false, false, 18), "style", [], "any", false, false, false, 18);
        echo ";
}

%%SELECTOR%% .ee-image-accordion-item:hover {
  flex-basis: ";
        // line 22
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 22), "expand_on_hover", [], "any", false, false, false, 22), "style", [], "any", false, false, false, 22);
        echo ";

  ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 24), "scale_on_hover", [], "any", false, false, false, 24)) {
            echo "\t
    transform: scale(";
            // line 25
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 25), "scale_on_hover", [], "any", false, false, false, 25);
            echo ");
  ";
        }
        // line 27
        echo "
  box-shadow: ";
        // line 28
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 28), "shadow_hover", [], "any", false, false, false, 28), "style", [], "any", false, false, false, 28);
        echo ";

}

%%SELECTOR%% .ee-image-accordion-item::after {
  ";
        // line 33
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 33), "overlay", [], "any", false, false, false, 33)], 33, $context, $this->getSourceContext());
        echo "
  opacity: ";
        // line 34
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 34), "overlay_opacity", [], "any", false, false, false, 34);
        echo ";
}

%%SELECTOR%% .ee-image-accordion-item:hover::after {
  ";
        // line 38
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 38), "overlay_hover", [], "any", false, false, false, 38)], 38, $context, $this->getSourceContext());
        echo "
  opacity: ";
        // line 39
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 39), "overlay_opacity_hover", [], "any", false, false, false, 39);
        echo ";
}

";
        // line 42
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "content", [], "any", false, false, false, 42), "hide_until_hover", [], "any", false, false, false, 42)) {
            // line 43
            echo "  %%SELECTOR%% .ee-image-accordion-item .ee-image-accordion-content-item {
    opacity: 0;
    transition: var(--eeiaTransitionDuration) ease opacity;
  }
  %%SELECTOR%% .ee-image-accordion-item:hover .ee-image-accordion-content-item {
    opacity: 1;
  }
";
        }
        // line 51
        echo "
%%SELECTOR%% .ee-image-accordion-item .ee-image-accordion-icon {
  color: ";
        // line 53
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "content", [], "any", false, false, false, 53), "icon_color", [], "any", false, false, false, 53);
        echo ";
  font-size: ";
        // line 54
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "content", [], "any", false, false, false, 54), "icon_size", [], "any", false, false, false, 54), "style", [], "any", false, false, false, 54);
        echo ";
  margin-bottom: ";
        // line 55
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 55), "below_icon", [], "any", false, false, false, 55), "style", [], "any", false, false, false, 55);
        echo ";
}

%%SELECTOR%% .ee-image-accordion-item .ee-image-accordion-title {
  ";
        // line 59
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "content", [], "any", false, false, false, 59), "title_typography", [], "any", false, false, false, 59), ($context["globalSettings"] ?? null)], 59, $context, $this->getSourceContext());
        echo "
  margin-bottom: ";
        // line 60
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 60), "below_title", [], "any", false, false, false, 60), "style", [], "any", false, false, false, 60);
        echo ";
}

%%SELECTOR%% .ee-image-accordion-item .ee-image-accordion-desc {
  ";
        // line 64
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "content", [], "any", false, false, false, 64), "text_typography", [], "any", false, false, false, 64), ($context["globalSettings"] ?? null)], 64, $context, $this->getSourceContext());
        echo "
}

";
        // line 67
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "content", [], "any", false, false, false, 67), "hide_until_hover", [], "any", false, false, false, 67)) {
            // line 68
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "content", [], "any", false, false, false, 68), "hover_effect", [], "any", false, false, false, 68) == "slide-up")) {
                // line 69
                echo "    %%SELECTOR%% .ee-image-accordion-item .ee-image-accordion-content-item {
        opacity: 0;
        transform: translatey(100px);
        transition: var(--eeiaTransitionDuration) ease all;
    }

    %%SELECTOR%% .ee-image-accordion-item:hover .ee-image-accordion-content-item {
        opacity: 1;
        transform: translatey(0px);
    }
  ";
            }
        }
        // line 81
        echo "
";
        // line 82
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 82), "orientation", [], "any", false, false, false, 82) == "vertical") || (($context["breakpoint"] ?? null) == ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, true, false, 82), "vertical_at", [], "any", true, true, false, 82)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, true, false, 82), "vertical_at", [], "any", false, false, false, 82), ($context["firstResponsiveBreakpointId"] ?? null))) : (($context["firstResponsiveBreakpointId"] ?? null)))))) {
            // line 83
            echo "%%SELECTOR%% .ee-image-accordion-item:first-child {
  transform-origin: center top;
}
%%SELECTOR%% .ee-image-accordion-item:last-child {
  transform-origin: center bottom;
}
";
        }
        // line 91
        echo "

    %%SELECTOR%% {
        ";
        // line 94
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 95
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 95), "wrapper", [], "any", false, false, false, 95), "background", [], "any", false, false, false, 95), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 96
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 96), "wrapper", [], "any", false, false, false, 96), "layout", [], "any", false, false, false, 96), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 97
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 97), "wrapper", [], "any", false, false, false, 97), "size", [], "any", false, false, false, 97), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 98
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 98), "wrapper", [], "any", false, false, false, 98), "typography", [], "any", false, false, false, 98),         // line 99
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 100
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 100), "wrapper", [], "any", false, false, false, 100), "spacing", [], "any", false, false, false, 100), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 101
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 101), "wrapper", [], "any", false, false, false, 101), "borders", [], "any", false, false, false, 101), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 102
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 102), "wrapper", [], "any", false, false, false, 102), "effects", [], "any", false, false, false, 102)], 94, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 106
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 107
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 107), "wrapper_hover", [], "any", false, false, false, 107), "background", [], "any", false, false, false, 107), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 108
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 108), "wrapper_hover", [], "any", false, false, false, 108), "layout", [], "any", false, false, false, 108), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 109
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 109), "wrapper_hover", [], "any", false, false, false, 109), "size", [], "any", false, false, false, 109), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 110
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 110), "wrapper_hover", [], "any", false, false, false, 110), "typography", [], "any", false, false, false, 110),         // line 111
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 112
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 112), "wrapper_hover", [], "any", false, false, false, 112), "spacing", [], "any", false, false, false, 112), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 113
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 113), "wrapper_hover", [], "any", false, false, false, 113), "borders", [], "any", false, false, false, 113), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 114
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 114), "wrapper_hover", [], "any", false, false, false, 114), "effects", [], "any", false, false, false, 114)], 106, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 118
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 118), "css", [], "any", false, false, false, 118);
        echo "


";
        // line 121
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 121), "hide", [], "any", false, false, false, 121)))) {
            // line 122
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 123
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 123), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 123), "hide", [], "any", false, false, false, 123))) {
                    // line 124
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 126
                    if (($context["isBuilder"] ?? null)) {
                        // line 127
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 130
                        echo "                        display: none;
                    ";
                    }
                    // line 132
                    echo "                }
            }
        ";
                }
                // line 135
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 137
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "741eab7e2cab474fded29ffc830827f653e00e14";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 137,  289 => 135,  284 => 132,  280 => 130,  275 => 127,  273 => 126,  267 => 124,  264 => 123,  259 => 122,  257 => 121,  251 => 118,  244 => 114,  243 => 113,  242 => 112,  241 => 111,  240 => 110,  239 => 109,  238 => 108,  237 => 107,  236 => 106,  229 => 102,  228 => 101,  227 => 100,  226 => 99,  225 => 98,  224 => 97,  223 => 96,  222 => 95,  221 => 94,  216 => 91,  207 => 83,  205 => 82,  202 => 81,  188 => 69,  185 => 68,  183 => 67,  177 => 64,  170 => 60,  166 => 59,  159 => 55,  155 => 54,  151 => 53,  147 => 51,  137 => 43,  135 => 42,  129 => 39,  125 => 38,  118 => 34,  114 => 33,  106 => 28,  103 => 27,  98 => 25,  94 => 24,  89 => 22,  82 => 18,  78 => 17,  73 => 14,  68 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "741eab7e2cab474fded29ffc830827f653e00e14", "");
    }
}
