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

/* bf8ed6a1393997a23b23fd70b5716e433f6cf5f7 */
class __TwigTemplate_3d2a406e3500c2881652f96295e393844e3ca0ecf74d006fd1ebc73609a7affc extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "bf8ed6a1393997a23b23fd70b5716e433f6cf5f7", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% .bde-tabs__panel {
   ";
        // line 5
        echo twig_call_macro($macros["macros"], "macro_simpleLayout", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 5), ($context["breakpoint"] ?? null)], 5, $context, $this->getSourceContext());
        echo "
  ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 6), "background", [], "any", false, false, false, 6)], 6, $context, $this->getSourceContext());
        echo "
  ";
        // line 7
        echo twig_call_macro($macros["macros"], "macro_spacing_padding_all", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 7), "padding", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
        echo "
  ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 8), "borders", [], "any", false, false, false, 8)], 8, $context, $this->getSourceContext());
        echo "
}

";
        // line 12
        echo "%%SELECTOR%% .bde-tabs__panel {
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
            echo "  %%SELECTOR%% .bde-tabs__panel h1,
  %%SELECTOR%% .bde-tabs__panel h2,
  %%SELECTOR%% .bde-tabs__panel h3,
  %%SELECTOR%% .bde-tabs__panel h4,
  %%SELECTOR%% .bde-tabs__panel h5,
  %%SELECTOR%% .bde-tabs__panel h6 {
    color: ";
            // line 28
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 28), "headings", [], "any", false, false, false, 28);
            echo ";
  }
";
        }
        // line 31
        echo "
";
        // line 32
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 32), "link", [], "any", false, false, false, 32)) {
            // line 33
            echo "  %%SELECTOR%% .bde-tabs__panel-content a {
    color: ";
            // line 34
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 34), "link", [], "any", false, false, false, 34);
            echo ";
  }
";
        }
        // line 37
        echo "
";
        // line 38
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 38), "link_hover", [], "any", false, false, false, 38)) {
            // line 39
            echo "  %%SELECTOR%% .bde-tabs__panel-content a:hover {
    color: ";
            // line 40
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 40), "link_hover", [], "any", false, false, false, 40);
            echo ";
  }
";
        }
        // line 43
        echo "
";
        // line 45
        echo "

    %%SELECTOR%% {
        ";
        // line 48
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 49
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 49), "wrapper", [], "any", false, false, false, 49), "background", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 50), "wrapper", [], "any", false, false, false, 50), "layout", [], "any", false, false, false, 50), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 51
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 51), "wrapper", [], "any", false, false, false, 51), "size", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 52
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 52), "wrapper", [], "any", false, false, false, 52), "typography", [], "any", false, false, false, 52),         // line 53
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 54), "wrapper", [], "any", false, false, false, 54), "spacing", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 55
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 55), "wrapper", [], "any", false, false, false, 55), "borders", [], "any", false, false, false, 55), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 56
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 56), "wrapper", [], "any", false, false, false, 56), "effects", [], "any", false, false, false, 56)], 48, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 60
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 61), "wrapper_hover", [], "any", false, false, false, 61), "background", [], "any", false, false, false, 61), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 62), "wrapper_hover", [], "any", false, false, false, 62), "layout", [], "any", false, false, false, 62), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 63), "wrapper_hover", [], "any", false, false, false, 63), "size", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 64
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 64), "wrapper_hover", [], "any", false, false, false, 64), "typography", [], "any", false, false, false, 64),         // line 65
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 66
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 66), "wrapper_hover", [], "any", false, false, false, 66), "spacing", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 67
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 67), "wrapper_hover", [], "any", false, false, false, 67), "borders", [], "any", false, false, false, 67), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 68
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 68), "wrapper_hover", [], "any", false, false, false, 68), "effects", [], "any", false, false, false, 68)], 60, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 72
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 72), "css", [], "any", false, false, false, 72);
        echo "


";
        // line 75
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 75), "hide", [], "any", false, false, false, 75)))) {
            // line 76
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 77
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 77), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 77), "hide", [], "any", false, false, false, 77))) {
                    // line 78
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 80
                    if (($context["isBuilder"] ?? null)) {
                        // line 81
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 84
                        echo "                        display: none;
                    ";
                    }
                    // line 86
                    echo "                }
            }
        ";
                }
                // line 89
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 91
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "bf8ed6a1393997a23b23fd70b5716e433f6cf5f7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 91,  208 => 89,  203 => 86,  199 => 84,  194 => 81,  192 => 80,  186 => 78,  183 => 77,  178 => 76,  176 => 75,  170 => 72,  163 => 68,  162 => 67,  161 => 66,  160 => 65,  159 => 64,  158 => 63,  157 => 62,  156 => 61,  155 => 60,  148 => 56,  147 => 55,  146 => 54,  145 => 53,  144 => 52,  143 => 51,  142 => 50,  141 => 49,  140 => 48,  135 => 45,  132 => 43,  126 => 40,  123 => 39,  121 => 38,  118 => 37,  112 => 34,  109 => 33,  107 => 32,  104 => 31,  98 => 28,  90 => 22,  88 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 14,  67 => 13,  64 => 12,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bf8ed6a1393997a23b23fd70b5716e433f6cf5f7", "");
    }
}
