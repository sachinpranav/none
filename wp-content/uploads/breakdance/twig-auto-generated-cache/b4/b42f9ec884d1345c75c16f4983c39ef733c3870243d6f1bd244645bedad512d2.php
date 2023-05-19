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

/* 2b246fa3e42f0ff16931427ba396ae1f60518169 */
class __TwigTemplate_7ae42da02057fe735e38d5972732f769364365837aee3d7b6a84e8aae62734d6 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "2b246fa3e42f0ff16931427ba396ae1f60518169", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        $context["unplash"] = [0 => "https://source.unsplash.com/qfvlR390Zrs/600x600", 1 => "https://source.unsplash.com/6fiRnDWxQMw/600x600", 2 => "https://source.unsplash.com/O0xQcGATOw4/600x600"];
        // line 8
        $context["nb"] = twig_length_filter($this->env, ($context["unplash"] ?? null));
        // line 9
        echo "
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 10), "images", [], "any", false, false, false, 10))) ? (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 10), "images", [], "any", false, false, false, 10))) : (3))));
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
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 11
            echo "
    ";
            // line 12
            $context["item"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 12), "images", [], "any", false, false, false, 12)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 12)] ?? null) : null);
            // line 13
            echo "
    <div class=\"ee-image-accordion-item ee-image-accordion-item-";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 14);
            echo "\">

      ";
            // line 17
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 17)) {
                // line 18
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_linkStart", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 18), "ee-image-accordion-link"], 18, $context, $this->getSourceContext());
                echo twig_call_macro($macros["macros"], "macro_linkEnd", [], 18, $context, $this->getSourceContext());
                echo "
      ";
            }
            // line 20
            echo "      
      ";
            // line 21
            if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 21) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "text", [], "any", false, false, false, 21)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 21), "svgCode", [], "any", false, false, false, 21))) {
                echo " 

          ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 23), "svgCode", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "            <div class=\"ee-image-accordion-content-item ee-image-accordion-icon\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 24), "svgCode", [], "any", false, false, false, 24);
                    echo "</div>
          ";
                }
                // line 26
                echo "          
          ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "            <div class=\"ee-image-accordion-content-item ee-image-accordion-title\" ";
                    echo Breakdance\PluginsAPI\content_editable_php((("content.content.images[" . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 28)) . "].title"));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 28);
                    echo "</div>
          ";
                }
                // line 30
                echo "
          ";
                // line 31
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "text", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "            <div class=\"ee-image-accordion-content-item ee-image-accordion-desc\"  ";
                    echo Breakdance\PluginsAPI\content_editable_php((("content.content.images[" . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 32)) . "].text"));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "text", [], "any", false, false, false, 32);
                    echo "</div>
          ";
                }
                // line 34
                echo "
      ";
            }
            // line 36
            echo "
        ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 37)) {
                // line 38
                echo "            ";
                echo twig_call_macro($macros["macros"], "macro_image", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image_options", [], "any", false, false, false, 38), "size", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image_options", [], "any", false, false, false, 38), "alt", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image_options", [], "any", false, false, false, 38), "lazy_load", [], "any", false, false, false, 38)], 38, $context, $this->getSourceContext());
                echo "
        ";
            } else {
                // line 40
                echo "            <img src=\"";
                echo (($__internal_compile_1 = ($context["unplash"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 40) % ($context["nb"] ?? null))] ?? null) : null);
                echo "\">
        ";
            }
            // line 42
            echo "
    </div>

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "         ";
    }

    public function getTemplateName()
    {
        return "2b246fa3e42f0ff16931427ba396ae1f60518169";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 46,  155 => 42,  149 => 40,  143 => 38,  141 => 37,  138 => 36,  134 => 34,  126 => 32,  124 => 31,  121 => 30,  113 => 28,  111 => 27,  108 => 26,  102 => 24,  100 => 23,  95 => 21,  92 => 20,  85 => 18,  82 => 17,  77 => 14,  74 => 13,  72 => 12,  69 => 11,  52 => 10,  49 => 9,  47 => 8,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "2b246fa3e42f0ff16931427ba396ae1f60518169", "");
    }
}
