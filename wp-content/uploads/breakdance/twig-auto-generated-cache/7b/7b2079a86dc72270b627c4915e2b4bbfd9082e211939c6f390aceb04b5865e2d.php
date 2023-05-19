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

/* 0d837d2aaebbbfb9acf95f57121ded78b8c22b8e */
class __TwigTemplate_758f01cb66d404f014d851bd1960c2a5843fdb1badd64ac3ce841820832ad1b6 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "0d837d2aaebbbfb9acf95f57121ded78b8c22b8e", 2)->unwrap();
        // line 3
        echo "
          <div tabindex=\"0\" role=\"tabpanel\" class=\"bde-tabs__panel js-panel\" id=\"\" hidden=\"\" aria-labelledby=\"\">
  %%CHILDREN%%
</div>

         ";
    }

    public function getTemplateName()
    {
        return "0d837d2aaebbbfb9acf95f57121ded78b8c22b8e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "0d837d2aaebbbfb9acf95f57121ded78b8c22b8e", "");
    }
}
