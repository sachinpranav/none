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

/* 4826e4f98600f59748f0c87b64b9113c3ecd92f1 */
class __TwigTemplate_7148dc431f45a758db415727f5a79b69cb12a688f14c05976a983a461b9efc42 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "4826e4f98600f59748f0c87b64b9113c3ecd92f1", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        $context["logos"] = [0 => "https://breakdancedemos.com/elements/wp-content/uploads/sites/8/2022/08/logo-1.png", 1 => "https://breakdancedemos.com/elements/wp-content/uploads/sites/8/2022/08/logo-2.png", 2 => "https://breakdancedemos.com/elements/wp-content/uploads/sites/8/2022/08/logo-3.png", 3 => "https://breakdancedemos.com/elements/wp-content/uploads/sites/8/2022/08/logo-4.png", 4 => "https://breakdancedemos.com/elements/wp-content/uploads/sites/8/2022/08/logo-5.png", 5 => "https://breakdancedemos.com/elements/wp-content/uploads/sites/8/2022/08/logo-6.png"];
        // line 12
        echo "
";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 13), "type", [], "any", false, false, false, 13) == "animated")) {
            // line 14
            echo "  <div class=\"un-logo-bar__marquee-content carousel-type__";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 14), "animation", [], "any", false, false, false, 14), "animation_type", [], "any", false, false, false, 14);
            echo "\">
  ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "setting", [], "any", false, false, false, 15), "logos", [], "any", false, false, false, 15)) {
                // line 16
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable([0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6]);
                foreach ($context['_seq'] as $context["_key"] => $context["repeat"]) {
                    // line 17
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "setting", [], "any", false, false, false, 17), "logos", [], "any", false, false, false, 17));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 18
                        echo "        ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 18)) {
                            // line 19
                            echo "    \t";
                            echo twig_call_macro($macros["macros"], "macro_linkStart", [twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 19), "un-logo-bar__logo-wrapper"], 19, $context, $this->getSourceContext());
                            echo "
        \t";
                            // line 20
                            echo twig_call_macro($macros["macros"], "macro_image", [twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 20), false], 20, $context, $this->getSourceContext());
                            echo "
     \t";
                            // line 21
                            echo twig_call_macro($macros["macros"], "macro_linkEnd", [], 21, $context, $this->getSourceContext());
                            echo "
        ";
                        } else {
                            // line 23
                            echo "        <div class=\"un-logo-bar__logo-wrapper\">
          ";
                            // line 24
                            echo twig_call_macro($macros["macros"], "macro_image", [twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 24), false], 24, $context, $this->getSourceContext());
                            echo "
        </div>
        ";
                        }
                        // line 27
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repeat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "  ";
            } else {
                // line 30
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable([0 => 1, 1 => 2, 2 => 3, 3 => 4]);
                foreach ($context['_seq'] as $context["_key"] => $context["repeat"]) {
                    // line 31
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["logos"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["logo"]) {
                        // line 32
                        echo "        <div class=\"un-logo-bar__logo-wrapper\">
          <img src=\"";
                        // line 33
                        echo $context["logo"];
                        echo "\">
        </div>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logo'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repeat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "  ";
            }
            // line 38
            echo "  </div>
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["design"] ?? null), "list", [], "any", false, false, false, 39), "type", [], "any", false, false, false, 39) == "side-scroll")) {
            // line 40
            echo "  <div class=\"un-logo-bar__scrollable-wrapper\">
  ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "setting", [], "any", false, false, false, 41), "logos", [], "any", false, false, false, 41)) {
                // line 42
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "setting", [], "any", false, false, false, 42), "logos", [], "any", false, false, false, 42));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 43
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 43)) {
                        // line 44
                        echo "        ";
                        echo twig_call_macro($macros["macros"], "macro_linkStart", [twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 44), "un-logo-bar__logo-wrapper"], 44, $context, $this->getSourceContext());
                        echo "
        \t";
                        // line 45
                        echo twig_call_macro($macros["macros"], "macro_image", [twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 45), false], 45, $context, $this->getSourceContext());
                        echo "
     \t";
                        // line 46
                        echo twig_call_macro($macros["macros"], "macro_linkEnd", [], 46, $context, $this->getSourceContext());
                        echo "
        ";
                    } else {
                        // line 48
                        echo "        <div class=\"un-logo-bar__logo-wrapper\">
          ";
                        // line 49
                        echo twig_call_macro($macros["macros"], "macro_image", [twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 49), false], 49, $context, $this->getSourceContext());
                        echo "
        </div>
        ";
                    }
                    // line 52
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "    ";
            } else {
                // line 54
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["logos"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["logo"]) {
                    // line 55
                    echo "        <div class=\"un-logo-bar__logo-wrapper\">
          <img src=\"";
                    // line 56
                    echo $context["logo"];
                    echo "\">
        </div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "  ";
            }
            // line 60
            echo "  </div>
";
        } else {
            // line 62
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "setting", [], "any", false, false, false, 62), "logos", [], "any", false, false, false, 62)) {
                // line 63
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "setting", [], "any", false, false, false, 63), "logos", [], "any", false, false, false, 63));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 64
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 64)) {
                        // line 65
                        echo "        ";
                        echo twig_call_macro($macros["macros"], "macro_linkStart", [twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 65), "un-logo-bar__logo-wrapper"], 65, $context, $this->getSourceContext());
                        echo "
        \t";
                        // line 66
                        echo twig_call_macro($macros["macros"], "macro_image", [twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 66), false], 66, $context, $this->getSourceContext());
                        echo "
     \t";
                        // line 67
                        echo twig_call_macro($macros["macros"], "macro_linkEnd", [], 67, $context, $this->getSourceContext());
                        echo "
        ";
                    } else {
                        // line 69
                        echo "        <div class=\"un-logo-bar__logo-wrapper\">
          ";
                        // line 70
                        echo twig_call_macro($macros["macros"], "macro_image", [twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 70), twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 70), twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 70), false], 70, $context, $this->getSourceContext());
                        echo "
        </div>
        ";
                    }
                    // line 73
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "    ";
            } else {
                // line 75
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["logos"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["logo"]) {
                    // line 76
                    echo "        <div class=\"un-logo-bar__logo-wrapper\">
          <img src=\"";
                    // line 77
                    echo $context["logo"];
                    echo "\">
        </div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "  ";
            }
        }
        // line 82
        echo "         ";
    }

    public function getTemplateName()
    {
        return "4826e4f98600f59748f0c87b64b9113c3ecd92f1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 82,  275 => 80,  266 => 77,  263 => 76,  258 => 75,  255 => 74,  249 => 73,  243 => 70,  240 => 69,  235 => 67,  231 => 66,  226 => 65,  223 => 64,  218 => 63,  215 => 62,  211 => 60,  208 => 59,  199 => 56,  196 => 55,  191 => 54,  188 => 53,  182 => 52,  176 => 49,  173 => 48,  168 => 46,  164 => 45,  159 => 44,  156 => 43,  151 => 42,  149 => 41,  146 => 40,  144 => 39,  141 => 38,  138 => 37,  132 => 36,  123 => 33,  120 => 32,  115 => 31,  110 => 30,  107 => 29,  101 => 28,  95 => 27,  89 => 24,  86 => 23,  81 => 21,  77 => 20,  72 => 19,  69 => 18,  64 => 17,  59 => 16,  57 => 15,  52 => 14,  50 => 13,  47 => 12,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "4826e4f98600f59748f0c87b64b9113c3ecd92f1", "");
    }
}
