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

/* a72cff1c5d49f3e7cd9854591ab797d17c08da1a */
class __TwigTemplate_d023a49b96eb80af372eab2460888db257616c58e10374c1357a4364543204f5 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "a72cff1c5d49f3e7cd9854591ab797d17c08da1a", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        echo twig_call_macro($macros["macros"], "macro_atomV1IconHtml", ["ee-iconbox-icon", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 4), "icon", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 4), "rotate", [], "any", false, false, false, 4), false, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 4), "style", [], "any", false, false, false, 4)], 4, $context, $this->getSourceContext());
        echo "
<div class=\"ee-iconbox-content\">
  ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6)) {
            // line 7
            echo "    <";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 7), "title_tag", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 7), "title_tag", [], "any", false, false, false, 7), "h3")) : ("h3"));
            echo " class=\"ee-iconbox-title\" ";
            echo Breakdance\PluginsAPI\content_editable_php("content.content.title");
            echo ">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7);
            echo "</";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 7), "title_tag", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 7), "title_tag", [], "any", false, false, false, 7), "h3")) : ("h3"));
            echo ">
  ";
        }
        // line 9
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 9), "text", [], "any", false, false, false, 9)) {
            // line 10
            echo "    <div class=\"ee-iconbox-text\" ";
            echo Breakdance\PluginsAPI\content_editable_php("content.content.text");
            echo ">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 10), "text", [], "any", false, false, false, 10);
            echo "</div>
  ";
        }
        // line 12
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 12), "button", [], "any", false, false, false, 12), "text", [], "any", false, false, false, 12)) {
            // line 13
            echo "    ";
            echo twig_call_macro($macros["macros"], "macro_atomV1ButtonHtml", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 13), "button", [], "any", false, false, false, 13), "ee-iconbox-button", twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 13), "content.content.button.text"], 13, $context, $this->getSourceContext());
            echo "
  ";
        }
        // line 15
        echo "</div>

         ";
    }

    public function getTemplateName()
    {
        return "a72cff1c5d49f3e7cd9854591ab797d17c08da1a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 15,  78 => 13,  75 => 12,  67 => 10,  64 => 9,  52 => 7,  50 => 6,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "a72cff1c5d49f3e7cd9854591ab797d17c08da1a", "");
    }
}
