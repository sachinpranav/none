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

/* 018f06ea9057ed6405c63445595fea2258a04a6a */
class __TwigTemplate_92584ab26efa090c4505f59d9023ab6e053036ba2ffe8894e6c84d54932d47dc extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "018f06ea9057ed6405c63445595fea2258a04a6a", 2)->unwrap();
        // line 3
        echo "
          <div class=\"ee-imagebox-image\">
  ";
        // line 5
        echo twig_call_macro($macros["macros"], "macro_image", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 5), "image", [], "any", false, false, false, 5), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 5), "image_options", [], "any", false, false, false, 5), "size", [], "any", false, false, false, 5), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 5), "image_options", [], "any", false, false, false, 5), "alt", [], "any", false, false, false, 5), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 5), "image_options", [], "any", false, false, false, 5), "lazy_load", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
</div>
<div class=\"ee-imagebox-content\">
  ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8)) {
            // line 9
            echo "    <";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 9), "title_tag", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 9), "title_tag", [], "any", false, false, false, 9), "h3")) : ("h3"));
            echo " class=\"ee-imagebox-title\" ";
            echo Breakdance\PluginsAPI\content_editable_php("content.content.title");
            echo ">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9);
            echo "</";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 9), "title_tag", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 9), "title_tag", [], "any", false, false, false, 9), "h3")) : ("h3"));
            echo ">
  ";
        }
        // line 11
        echo "  
  ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 12), "text", [], "any", false, false, false, 12)) {
            // line 13
            echo "    <div class=\"ee-imagebox-text\" ";
            echo Breakdance\PluginsAPI\content_editable_php("content.content.text");
            echo ">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 13), "text", [], "any", false, false, false, 13);
            echo "</div>
  ";
        }
        // line 15
        echo "  
  ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 16), "button", [], "any", false, false, false, 16), "text", [], "any", false, false, false, 16)) {
            // line 17
            echo "    ";
            echo twig_call_macro($macros["macros"], "macro_atomV1ButtonHtml", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 17), "button", [], "any", false, false, false, 17), "ee-imagebox-button", twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 17), "content.content.button.text"], 17, $context, $this->getSourceContext());
            echo "
  ";
        }
        // line 19
        echo "</div>

         ";
    }

    public function getTemplateName()
    {
        return "018f06ea9057ed6405c63445595fea2258a04a6a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  84 => 17,  82 => 16,  79 => 15,  71 => 13,  69 => 12,  66 => 11,  54 => 9,  52 => 8,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "018f06ea9057ed6405c63445595fea2258a04a6a", "");
    }
}
