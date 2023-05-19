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

/* de9829f217ca21f6dddf62905e69f2d9b4da198a */
class __TwigTemplate_3a1dc192b7be8c00fcc6cbc585fde77445eb662a20c3fd94fd2b55107f30b37b extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "de9829f217ca21f6dddf62905e69f2d9b4da198a", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  ";
        // line 5
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 5), "wrapper", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
  width: ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 6), "width", [], "any", false, false, false, 6), "style", [], "any", false, false, false, 6);
        echo ";
}

";
        // line 10
        echo "%%SELECTOR%% .bde-tabs__tabslist-container {
  margin-bottom: ";
        // line 11
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 11), "below_tabs", [], "any", false, false, false, 11), "style", [], "any", false, false, false, 11);
        echo ";
}

%%SELECTOR%% .bde-tabs__panel,
%%SELECTOR%% .bde-tabs__advanced-content{
 min-height: ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 16), "min_height", [], "any", false, false, false, 16), "style", [], "any", false, false, false, 16);
        echo ";
}

";
        // line 19
        echo twig_call_macro($macros["macros"], "macro_atomV1TabsCss", ["%%SELECTOR%%", twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "tabs", [], "any", false, false, false, 19), ($context["breakpoint"] ?? null), ($context["globalSettings"] ?? null)], 19, $context, $this->getSourceContext());
        echo "

";
        // line 22
        echo "

    %%SELECTOR%% {
        ";
        // line 25
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 26), "wrapper", [], "any", false, false, false, 26), "background", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 27), "wrapper", [], "any", false, false, false, 27), "layout", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 28), "wrapper", [], "any", false, false, false, 28), "size", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 29), "wrapper", [], "any", false, false, false, 29), "typography", [], "any", false, false, false, 29),         // line 30
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 31), "wrapper", [], "any", false, false, false, 31), "spacing", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 32
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 32), "wrapper", [], "any", false, false, false, 32), "borders", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 33
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 33), "wrapper", [], "any", false, false, false, 33), "effects", [], "any", false, false, false, 33)], 25, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 37
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 38), "wrapper_hover", [], "any", false, false, false, 38), "background", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 39), "wrapper_hover", [], "any", false, false, false, 39), "layout", [], "any", false, false, false, 39), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 40), "wrapper_hover", [], "any", false, false, false, 40), "size", [], "any", false, false, false, 40), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 41
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 41), "wrapper_hover", [], "any", false, false, false, 41), "typography", [], "any", false, false, false, 41),         // line 42
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 43
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 43), "wrapper_hover", [], "any", false, false, false, 43), "spacing", [], "any", false, false, false, 43), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 44
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 44), "wrapper_hover", [], "any", false, false, false, 44), "borders", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 45
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 45), "wrapper_hover", [], "any", false, false, false, 45), "effects", [], "any", false, false, false, 45)], 37, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 49
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 49), "css", [], "any", false, false, false, 49);
        echo "


";
        // line 52
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 52), "hide", [], "any", false, false, false, 52)))) {
            // line 53
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 54
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 54), "hide", [], "any", false, false, false, 54))) {
                    // line 55
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 57
                    if (($context["isBuilder"] ?? null)) {
                        // line 58
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 61
                        echo "                        display: none;
                    ";
                    }
                    // line 63
                    echo "                }
            }
        ";
                }
                // line 66
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 68
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "de9829f217ca21f6dddf62905e69f2d9b4da198a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 68,  151 => 66,  146 => 63,  142 => 61,  137 => 58,  135 => 57,  129 => 55,  126 => 54,  121 => 53,  119 => 52,  113 => 49,  106 => 45,  105 => 44,  104 => 43,  103 => 42,  102 => 41,  101 => 40,  100 => 39,  99 => 38,  98 => 37,  91 => 33,  90 => 32,  89 => 31,  88 => 30,  87 => 29,  86 => 28,  85 => 27,  84 => 26,  83 => 25,  78 => 22,  73 => 19,  67 => 16,  59 => 11,  56 => 10,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "de9829f217ca21f6dddf62905e69f2d9b4da198a", "");
    }
}
