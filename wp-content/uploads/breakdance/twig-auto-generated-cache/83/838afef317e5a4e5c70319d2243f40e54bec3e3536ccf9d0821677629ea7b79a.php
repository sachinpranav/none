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

/* ed5906f59a51ec0bffbeac3aa631fc1c0c80119f */
class __TwigTemplate_810c5abcdae528d802c658f8dd2c14b01f6544f9b450a746ee0c36851a57df9c extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "ed5906f59a51ec0bffbeac3aa631fc1c0c80119f", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  width: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 5), "width", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5);
        echo ";
  --wrapper-gradient-color: ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 6), "gradient_overlay", [], "any", false, false, false, 6), "color", [], "any", false, false, false, 6);
        echo ";
  ";
        // line 7
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 7), "container", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .un-logo-bar__marquee-content,
%%SELECTOR%%.un-static-image-grid,
%%SELECTOR%% .un-logo-bar__scrollable-wrapper {
  column-gap: ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 13), "between_logos", [], "any", false, false, false, 13), "style", [], "any", false, false, false, 13);
        echo ";
}

%%SELECTOR%%.un-static-image-grid {
  row-gap: ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 17), "vertical_gap", [], "any", false, false, false, 17), "style", [], "any", false, false, false, 17);
        echo ";
}

%%SELECTOR%%.un-image-carousel-container .un-logo-bar__marquee-content {
  animation-duration: ";
        // line 21
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 21), "animation", [], "any", false, false, false, 21), "animation_duration", [], "any", false, false, false, 21), "style", [], "any", false, false, false, 21);
        echo ";
}

%%SELECTOR%%.gradient-overlay__left::before,
%%SELECTOR%%.gradient-overlay__both::before,
%%SELECTOR%%.gradient-overlay__both::after,
%%SELECTOR%%.gradient-overlay__right::after {
  width: ";
        // line 28
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 28), "gradient_overlay", [], "any", false, false, false, 28), "width", [], "any", false, false, false, 28), "style", [], "any", false, false, false, 28);
        echo ";
}

%%SELECTOR%% .un-logo-bar__logo-wrapper,
%%SELECTOR%% .bde-logo-list .breakdance-link {
  height: ";
        // line 33
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "logo", [], "any", false, false, false, 33), "height", [], "any", false, false, false, 33), "style", [], "any", false, false, false, 33);
        echo ";
}

";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 36), "type", [], "any", false, false, false, 36) == "show-all")) {
            // line 37
            echo "%%SELECTOR%%.un-static-image-grid {
";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 38), "alignment", [], "any", false, false, false, 38) == "flex-start")) {
                // line 39
                echo "  justify-content: flex-start;
";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 40
($context["design"] ?? null), "list", [], "any", false, false, false, 40), "alignment", [], "any", false, false, false, 40) == "center")) {
                // line 41
                echo "  justify-content: center;
";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 42
($context["design"] ?? null), "list", [], "any", false, false, false, 42), "alignment", [], "any", false, false, false, 42) == "flex-end")) {
                // line 43
                echo "  justify-content: flex-end;
";
            } else {
                // line 45
                echo "  justify-content: center;
";
            }
            // line 47
            echo "}
";
        }
        // line 50
        echo "

    %%SELECTOR%% {
        ";
        // line 53
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 54), "wrapper", [], "any", false, false, false, 54), "background", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 55
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 55), "wrapper", [], "any", false, false, false, 55), "layout", [], "any", false, false, false, 55), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 56
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 56), "wrapper", [], "any", false, false, false, 56), "size", [], "any", false, false, false, 56), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 57
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 57), "wrapper", [], "any", false, false, false, 57), "typography", [], "any", false, false, false, 57),         // line 58
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 59), "wrapper", [], "any", false, false, false, 59), "spacing", [], "any", false, false, false, 59), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 60
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 60), "wrapper", [], "any", false, false, false, 60), "borders", [], "any", false, false, false, 60), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 61), "wrapper", [], "any", false, false, false, 61), "effects", [], "any", false, false, false, 61)], 53, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 65
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 66
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 66), "wrapper_hover", [], "any", false, false, false, 66), "background", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 67
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 67), "wrapper_hover", [], "any", false, false, false, 67), "layout", [], "any", false, false, false, 67), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 68
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 68), "wrapper_hover", [], "any", false, false, false, 68), "size", [], "any", false, false, false, 68), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 69
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 69), "wrapper_hover", [], "any", false, false, false, 69), "typography", [], "any", false, false, false, 69),         // line 70
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 71
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 71), "wrapper_hover", [], "any", false, false, false, 71), "spacing", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 72
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 72), "wrapper_hover", [], "any", false, false, false, 72), "borders", [], "any", false, false, false, 72), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 73
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 73), "wrapper_hover", [], "any", false, false, false, 73), "effects", [], "any", false, false, false, 73)], 65, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 77
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 77), "css", [], "any", false, false, false, 77);
        echo "


";
        // line 80
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 80), "hide", [], "any", false, false, false, 80)))) {
            // line 81
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 82
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 82), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 82), "hide", [], "any", false, false, false, 82))) {
                    // line 83
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 85
                    if (($context["isBuilder"] ?? null)) {
                        // line 86
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 89
                        echo "                        display: none;
                    ";
                    }
                    // line 91
                    echo "                }
            }
        ";
                }
                // line 94
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 96
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "ed5906f59a51ec0bffbeac3aa631fc1c0c80119f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 96,  203 => 94,  198 => 91,  194 => 89,  189 => 86,  187 => 85,  181 => 83,  178 => 82,  173 => 81,  171 => 80,  165 => 77,  158 => 73,  157 => 72,  156 => 71,  155 => 70,  154 => 69,  153 => 68,  152 => 67,  151 => 66,  150 => 65,  143 => 61,  142 => 60,  141 => 59,  140 => 58,  139 => 57,  138 => 56,  137 => 55,  136 => 54,  135 => 53,  130 => 50,  126 => 47,  122 => 45,  118 => 43,  116 => 42,  113 => 41,  111 => 40,  108 => 39,  106 => 38,  103 => 37,  101 => 36,  95 => 33,  87 => 28,  77 => 21,  70 => 17,  63 => 13,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ed5906f59a51ec0bffbeac3aa631fc1c0c80119f", "");
    }
}
