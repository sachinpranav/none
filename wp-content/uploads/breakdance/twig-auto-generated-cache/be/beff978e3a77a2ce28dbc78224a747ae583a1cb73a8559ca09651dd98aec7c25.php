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

/* c56eff2fdf3fac605a63d3356d23c93ba74af94b */
class __TwigTemplate_664301b4bdfdf8a68d91931c41d65328ecc05b10053b9ec26abe79e5ae6252f2 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "c56eff2fdf3fac605a63d3356d23c93ba74af94b", 2)->unwrap();
        // line 3
        echo "
          new BreakdanceTabs('%%SELECTOR%%', { activeTab: ";
        // line 4
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 4), "active_tab", [], "any", false, false, false, 4));
        echo ", isVertical: ";
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "tabs", [], "any", false, false, false, 4), "vertical", [], "any", false, false, false, 4));
        echo ", horizontalAt: ";
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "tabs", [], "any", false, false, false, 4), "horizontal_at", [], "any", false, false, false, 4));
        echo " } );
         ";
    }

    public function getTemplateName()
    {
        return "c56eff2fdf3fac605a63d3356d23c93ba74af94b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "c56eff2fdf3fac605a63d3356d23c93ba74af94b", "");
    }
}
