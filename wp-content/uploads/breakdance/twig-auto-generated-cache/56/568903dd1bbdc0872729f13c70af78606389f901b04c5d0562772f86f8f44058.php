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

/* ef05c894b56b46239b15650c2d72e85a4fab3bff */
class __TwigTemplate_190907ad24a9a2b119c2aa0497b00fd331cabcafcd1ca5cd8bc38a2bf0d12efd extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "ef05c894b56b46239b15650c2d72e85a4fab3bff", 2)->unwrap();
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
    %%CHILDREN%%
  </div>
";
        }
        // line 12
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "ef05c894b56b46239b15650c2d72e85a4fab3bff";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  52 => 7,  50 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ef05c894b56b46239b15650c2d72e85a4fab3bff", "");
    }
}
