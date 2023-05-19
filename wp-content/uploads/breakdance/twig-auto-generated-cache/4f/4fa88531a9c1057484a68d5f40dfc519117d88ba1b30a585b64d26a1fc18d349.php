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

/* a44dd5c83b72db354d4d5170c494a6fa43f5134b */
class __TwigTemplate_e3d158381e0d31c041621be197f63676c36dcc3777ffa17031f7cf43cbc2ea66 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "a44dd5c83b72db354d4d5170c494a6fa43f5134b", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        $context["content"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 4);
        // line 5
        echo "
";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "tabs", [], "any", false, false, false, 6)) {
            // line 7
            echo "  ";
            echo twig_call_macro($macros["macros"], "macro_atomV1TabsHtml", ["%%ID%%", twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "tabs", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "tabs", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
            echo "
  <div class=\"bde-tabs-content-container\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "tabs", [], "any", false, false, false, 9));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "    <div tabindex=\"0\" role=\"tabpanel\" class=\"bde-tabs__panel js-panel\" id=\"tab-panel-%%ID%%-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 10);
                echo "\" hidden=\"\" aria-labelledby=\"tab-%%ID%%-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 10);
                echo "\">
      <div class=\"bde-tabs__panel-content breakdance-rich-text-styles\">";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 11);
                echo "</div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "  </div>
";
        }
        // line 16
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "a44dd5c83b72db354d4d5170c494a6fa43f5134b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 16,  99 => 14,  82 => 11,  75 => 10,  58 => 9,  52 => 7,  50 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "a44dd5c83b72db354d4d5170c494a6fa43f5134b", "");
    }
}
