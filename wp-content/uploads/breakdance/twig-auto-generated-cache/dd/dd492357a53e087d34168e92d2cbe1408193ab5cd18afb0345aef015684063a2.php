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

/* 45cda91412c6dc8a5e742a7e790870503a7a14b1 */
class __TwigTemplate_ec840a08726431a8c04d958d7fe9cdb210db1bbb3e7bb7b95c0190729f0038b1 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "45cda91412c6dc8a5e742a7e790870503a7a14b1", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 5
        echo "%%SELECTOR%% .section-container {
  ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_simpleLayout", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 6), ($context["breakpoint"] ?? null)], 6, $context, $this->getSourceContext());
        echo "
}

";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_fancyBackgroundCss", ["%%SELECTOR%%", twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 9), ($context["breakpoint"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 9), "viewport", [], "any", false, false, false, 9), false, false], 9, $context, $this->getSourceContext());
        echo "

";
        // line 12
        echo "%%SELECTOR%% * {
  ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 13), "text", [], "any", false, false, false, 13)) {
            // line 14
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 14), "text", [], "any", false, false, false, 14);
            echo ";
  ";
        }
        // line 16
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 16), "brand", [], "any", false, false, false, 16)) {
            // line 17
            echo "    --bde-brand-primary-color: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 17), "brand", [], "any", false, false, false, 17);
            echo ";
  ";
        }
        // line 19
        echo "}

";
        // line 21
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 21), "headings", [], "any", false, false, false, 21)) {
            // line 22
            echo "  %%SELECTOR%% h1, %%SELECTOR%% h2, %%SELECTOR%% h3, %%SELECTOR%% h4, %%SELECTOR%% h5, %%SELECTOR%% h6 {
    color: ";
            // line 23
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 23), "headings", [], "any", false, false, false, 23);
            echo ";
  }
";
        }
        // line 26
        echo "
";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 27), "link", [], "any", false, false, false, 27)) {
            // line 28
            echo "  %%SELECTOR%% a {
    color: ";
            // line 29
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 29), "link", [], "any", false, false, false, 29);
            echo ";
  }
";
        }
        // line 32
        echo "
";
        // line 33
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 33), "link_hover", [], "any", false, false, false, 33)) {
            // line 34
            echo "  %%SELECTOR%% a:hover {
    color: ";
            // line 35
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 35), "link_hover", [], "any", false, false, false, 35);
            echo ";
  }
";
        }
        // line 38
        echo "
";
        // line 40
        echo "%%SELECTOR%% .section-container {
  ";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 41), "height", [], "any", false, false, false, 41) == "viewport")) {
            // line 42
            echo "    height: 100vh;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 43
($context["design"] ?? null), "size", [], "any", false, false, false, 43), "height", [], "any", false, false, false, 43) == "custom")) {
            // line 44
            echo "    height: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 44), "custom_height", [], "any", false, false, false, 44), "style", [], "any", false, false, false, 44);
            echo ";
    min-height: ";
            // line 45
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 45), "min_height", [], "any", false, false, false, 45), "style", [], "any", false, false, false, 45);
            echo ";
  ";
        }
        // line 47
        echo "}

%%SELECTOR%% .section-container {
  ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 50), "width", [], "any", false, false, false, 50) == "full")) {
            // line 51
            echo "    max-width: 100%;
  ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 52
($context["design"] ?? null), "size", [], "any", false, false, false, 52), "width", [], "any", false, false, false, 52) == "custom")) {
            // line 53
            echo "    max-width: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 53), "container_width", [], "any", false, false, false, 53), "style", [], "any", false, false, false, 53);
            echo ";
  ";
        }
        // line 55
        echo "}

";
        // line 58
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 58), "padding", [], "any", false, false, false, 58)) {
            // line 59
            echo "  %%SELECTOR%% .section-container {
    ";
            // line 60
            echo twig_call_macro($macros["macros"], "macro_spacing_complex", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 60), "padding", [], "any", false, false, false, 60), "padding"], 60, $context, $this->getSourceContext());
            echo "
  }
";
        }
        // line 63
        echo "
%%SELECTOR%% {
  margin-top: ";
        // line 65
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 65), "margin_top", [], "any", false, false, false, 65), "style", [], "any", false, false, false, 65);
        echo ";
  margin-bottom: ";
        // line 66
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 66), "margin_bottom", [], "any", false, false, false, 66), "style", [], "any", false, false, false, 66);
        echo ";
}

";
        // line 70
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 70))) {
            // line 71
            echo "  %%SELECTOR%% {
    ";
            // line 72
            echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 72)], 72, $context, $this->getSourceContext());
            echo "
  }
";
        }
        // line 75
        echo "
";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "dividers", [], "any", false, false, false, 77), "shape_dividers_section", [], "any", false, false, false, 77), "dividers", [], "any", false, false, false, 77));
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
        foreach ($context['_seq'] as $context["_key"] => $context["divider"]) {
            // line 78
            echo "  ";
            $context["transforms"] = "";
            // line 79
            echo "  %%SELECTOR%% .section-shape-divider-wrapper--";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 79);
            echo " .section-shape-divider svg {
    color: ";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["divider"], "color", [], "any", false, false, false, 80);
            echo ";
    width:  ";
            // line 81
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["divider"], "width", [], "any", false, false, false, 81), "style", [], "any", false, false, false, 81);
            echo ";
    height: ";
            // line 82
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["divider"], "height", [], "any", false, false, false, 82), "style", [], "any", false, false, false, 82);
            echo ";
    ";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, $context["divider"], "position", [], "any", false, false, false, 83) == "bottom")) {
                // line 84
                echo "      bottom: 0;
      top: auto;
    ";
            }
            // line 87
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["divider"], "position", [], "any", false, false, false, 87) == "bottom")) {
                // line 88
                echo "      ";
                $context["transforms"] = "scaleY(1)";
                // line 89
                echo "    ";
            } else {
                // line 90
                echo "      ";
                $context["transforms"] = "scaleY(-1)";
                // line 91
                echo "    ";
            }
            // line 92
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["divider"], "flip_horizontally", [], "any", false, false, false, 92) == "yes")) {
                // line 93
                echo "      ";
                $context["transforms"] = (($context["transforms"] ?? null) . " scaleX(-1)");
                // line 94
                echo "    ";
            }
            // line 95
            echo "    ";
            if (($context["transforms"] ?? null)) {
                // line 96
                echo "      transform: ";
                echo ($context["transforms"] ?? null);
                echo ";
    ";
            }
            // line 98
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["divider"], "bring_to_front", [], "any", false, false, false, 98)) {
                // line 99
                echo "      z-index: 1;
    ";
            }
            // line 101
            echo "  }

  ";
            // line 104
            echo "  %%SELECTOR%% .section-shape-divider-wrapper--";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 104);
            echo " .section-shape-divider path,
  %%SELECTOR%% .section-shape-divider-wrapper--";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 105);
            echo " .section-shape-divider rect, 
  %%SELECTOR%% .section-shape-divider-wrapper--";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 106);
            echo " .section-shape-divider ellipse, 
  %%SELECTOR%% .section-shape-divider-wrapper--";
            // line 107
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 107);
            echo " .section-shape-divider polyline, 
  %%SELECTOR%% .section-shape-divider-wrapper--";
            // line 108
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 108);
            echo " .section-shape-divider polygon {
    color: ";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["divider"], "color", [], "any", false, false, false, 109);
            echo ";
  }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['divider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "
";
        // line 113
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 113), "slideshow_settings", [], "any", false, false, false, 113), "ken_burns", [], "any", false, false, false, 113))) {
            // line 114
            echo "  %%SELECTOR%% .swiper-slide .swiper-slide-item {
    ";
            // line 115
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 115), "slideshow_settings", [], "any", false, false, false, 115), "ken_burns", [], "any", false, false, false, 115) == "out")) {
                // line 116
                echo "      transform: scale(";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 116), "slideshow_settings", [], "any", false, true, false, 116), "zoom", [], "any", true, true, false, 116) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 116), "slideshow_settings", [], "any", false, true, false, 116), "zoom", [], "any", false, false, false, 116)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 116), "slideshow_settings", [], "any", false, true, false, 116), "zoom", [], "any", false, false, false, 116)) : (1.5));
                echo ");
    ";
            } else {
                // line 118
                echo "      transform: scale(1);
    ";
            }
            // line 120
            echo "    transition: 5s ease-in;
    transform-origin: 0% ";
            // line 121
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 121), "slideshow_settings", [], "any", false, true, false, 121), "origin", [], "any", true, true, false, 121) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 121), "slideshow_settings", [], "any", false, true, false, 121), "origin", [], "any", false, false, false, 121)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 121), "slideshow_settings", [], "any", false, true, false, 121), "origin", [], "any", false, false, false, 121)) : ("100%"));
            echo ";
  }

  %%SELECTOR%% .swiper-slide.swiper-slide-active .swiper-slide-item {
    ";
            // line 125
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 125), "slideshow_settings", [], "any", false, false, false, 125), "ken_burns", [], "any", false, false, false, 125) == "out")) {
                // line 126
                echo "      transform: scale(1);
    ";
            } else {
                // line 128
                echo "      transform: scale(";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 128), "slideshow_settings", [], "any", false, true, false, 128), "zoom", [], "any", true, true, false, 128) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 128), "slideshow_settings", [], "any", false, true, false, 128), "zoom", [], "any", false, false, false, 128)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 128), "slideshow_settings", [], "any", false, true, false, 128), "zoom", [], "any", false, false, false, 128)) : (1.5));
                echo ");
    ";
            }
            // line 130
            echo "  }
";
        }
        // line 133
        echo "

    %%SELECTOR%% {
        ";
        // line 136
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 137
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 137), "wrapper", [], "any", false, false, false, 137), "background", [], "any", false, false, false, 137), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 138
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 138), "wrapper", [], "any", false, false, false, 138), "layout", [], "any", false, false, false, 138), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 139
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 139), "wrapper", [], "any", false, false, false, 139), "size", [], "any", false, false, false, 139), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 140
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 140), "wrapper", [], "any", false, false, false, 140), "typography", [], "any", false, false, false, 140),         // line 141
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 142
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 142), "wrapper", [], "any", false, false, false, 142), "spacing", [], "any", false, false, false, 142), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 143
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 143), "wrapper", [], "any", false, false, false, 143), "borders", [], "any", false, false, false, 143), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 144
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 144), "wrapper", [], "any", false, false, false, 144), "effects", [], "any", false, false, false, 144)], 136, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 148
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 149
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 149), "wrapper_hover", [], "any", false, false, false, 149), "background", [], "any", false, false, false, 149), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 150
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 150), "wrapper_hover", [], "any", false, false, false, 150), "layout", [], "any", false, false, false, 150), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 151
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 151), "wrapper_hover", [], "any", false, false, false, 151), "size", [], "any", false, false, false, 151), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 152
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 152), "wrapper_hover", [], "any", false, false, false, 152), "typography", [], "any", false, false, false, 152),         // line 153
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 154
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 154), "wrapper_hover", [], "any", false, false, false, 154), "spacing", [], "any", false, false, false, 154), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 155
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 155), "wrapper_hover", [], "any", false, false, false, 155), "borders", [], "any", false, false, false, 155), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 156
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 156), "wrapper_hover", [], "any", false, false, false, 156), "effects", [], "any", false, false, false, 156)], 148, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 160
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 160), "css", [], "any", false, false, false, 160);
        echo "


";
        // line 163
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 163), "hide", [], "any", false, false, false, 163)))) {
            // line 164
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 165
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 165), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 165), "hide", [], "any", false, false, false, 165))) {
                    // line 166
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 168
                    if (($context["isBuilder"] ?? null)) {
                        // line 169
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 172
                        echo "                        display: none;
                    ";
                    }
                    // line 174
                    echo "                }
            }
        ";
                }
                // line 177
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 179
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "45cda91412c6dc8a5e742a7e790870503a7a14b1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 179,  451 => 177,  446 => 174,  442 => 172,  437 => 169,  435 => 168,  429 => 166,  426 => 165,  421 => 164,  419 => 163,  413 => 160,  406 => 156,  405 => 155,  404 => 154,  403 => 153,  402 => 152,  401 => 151,  400 => 150,  399 => 149,  398 => 148,  391 => 144,  390 => 143,  389 => 142,  388 => 141,  387 => 140,  386 => 139,  385 => 138,  384 => 137,  383 => 136,  378 => 133,  374 => 130,  368 => 128,  364 => 126,  362 => 125,  355 => 121,  352 => 120,  348 => 118,  342 => 116,  340 => 115,  337 => 114,  335 => 113,  332 => 112,  315 => 109,  311 => 108,  307 => 107,  303 => 106,  299 => 105,  294 => 104,  290 => 101,  286 => 99,  283 => 98,  277 => 96,  274 => 95,  271 => 94,  268 => 93,  265 => 92,  262 => 91,  259 => 90,  256 => 89,  253 => 88,  250 => 87,  245 => 84,  243 => 83,  239 => 82,  235 => 81,  231 => 80,  226 => 79,  223 => 78,  206 => 77,  203 => 75,  197 => 72,  194 => 71,  192 => 70,  186 => 66,  182 => 65,  178 => 63,  172 => 60,  169 => 59,  167 => 58,  163 => 55,  157 => 53,  155 => 52,  152 => 51,  150 => 50,  145 => 47,  140 => 45,  135 => 44,  133 => 43,  130 => 42,  128 => 41,  125 => 40,  122 => 38,  116 => 35,  113 => 34,  111 => 33,  108 => 32,  102 => 29,  99 => 28,  97 => 27,  94 => 26,  88 => 23,  85 => 22,  83 => 21,  79 => 19,  73 => 17,  70 => 16,  64 => 14,  62 => 13,  59 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "45cda91412c6dc8a5e742a7e790870503a7a14b1", "");
    }
}
