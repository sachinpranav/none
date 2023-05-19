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

/* 1dece650fd2a05ef89ceec6187b8810fc6b85bdc */
class __TwigTemplate_70940c01af924eeacd111976eec858eb392c35ee8bc88c7da95be8ef12bca0cc extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "1dece650fd2a05ef89ceec6187b8810fc6b85bdc", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 4), "items", [], "any", false, false, false, 4))) {
            // line 5
            echo "<div class='bde-stats-grid_item'>
  <div class='bde-stats-grid_icon breakdance-icon-atom'>
    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d=\"M290.59 192c-20.18 0-106.82 1.98-162.59 85.95V192c0-52.94-43.06-96-96-96-17.67 0-32 14.33-32 32s14.33 32 32 32c17.64 0 32 14.36 32 32v256c0 35.3 28.7 64 64 64h176c8.84 0 16-7.16 16-16v-16c0-17.67-14.33-32-32-32h-32l128-96v144c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V289.86c-10.29 2.67-20.89 4.54-32 4.54-61.81 0-113.52-44.05-125.41-102.4zM448 96h-64l-64-64v134.4c0 53.02 42.98 96 96 96s96-42.98 96-96V32l-64 64zm-72 80c-8.84 0-16-7.16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16zm80 0c-8.84 0-16-7.16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16z\"/></svg>
  </div>
  <h3 class='bde-stats-grid_number'>
   530+
  </h3>
  <p class='bde-stats-grid_text'>
    Animals Saved
  </p>
</div>
<div class='bde-stats-grid_item'>
  <div class='bde-stats-grid_icon breakdance-icon-atom'>
    <svg xmlns=\"http://www.w3.org/2000/svg\" id=\"icon-spoon-knife\" viewBox=\"0 0 32 32\"><path d=\"M7 0c-3.314 0-6 3.134-6 7 0 3.31 1.969 6.083 4.616 6.812l-0.993 16.191c-0.067 1.098 0.778 1.996 1.878 1.996h1c1.1 0 1.945-0.898 1.878-1.996l-0.993-16.191c2.646-0.729 4.616-3.502 4.616-6.812 0-3.866-2.686-7-6-7zM27.167 0l-1.667 10h-1.25l-0.833-10h-0.833l-0.833 10h-1.25l-1.667-10h-0.833v13c0 0.552 0.448 1 1 1h2.604l-0.982 16.004c-0.067 1.098 0.778 1.996 1.878 1.996h1c1.1 0 1.945-0.898 1.878-1.996l-0.982-16.004h2.604c0.552 0 1-0.448 1-1v-13h-0.833z\"/></svg>
  </div>
  <h3 class='bde-stats-grid_number'>
    12
  </h3>
  <p class='bde-stats-grid_text'>
    Restaurants Visited
  </p>
</div>
<div class='bde-stats-grid_item'>
  <div class='bde-stats-grid_icon breakdance-icon-atom'>
    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 496 512\"><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d=\"M248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm160 215.5v6.93c0 5.87-3.32 11.24-8.57 13.86l-15.39 7.7a15.485 15.485 0 0 1-15.53-.97l-18.21-12.14a15.52 15.52 0 0 0-13.5-1.81l-2.65.88c-9.7 3.23-13.66 14.79-7.99 23.3l13.24 19.86c2.87 4.31 7.71 6.9 12.89 6.9h8.21c8.56 0 15.5 6.94 15.5 15.5v11.34c0 3.35-1.09 6.62-3.1 9.3l-18.74 24.98c-1.42 1.9-2.39 4.1-2.83 6.43l-4.3 22.83c-.62 3.29-2.29 6.29-4.76 8.56a159.608 159.608 0 0 0-25 29.16l-13.03 19.55a27.756 27.756 0 0 1-23.09 12.36c-10.51 0-20.12-5.94-24.82-15.34a78.902 78.902 0 0 1-8.33-35.29V367.5c0-8.56-6.94-15.5-15.5-15.5h-25.88c-14.49 0-28.38-5.76-38.63-16a54.659 54.659 0 0 1-16-38.63v-14.06c0-17.19 8.1-33.38 21.85-43.7l27.58-20.69a54.663 54.663 0 0 1 32.78-10.93h.89c8.48 0 16.85 1.97 24.43 5.77l14.72 7.36c3.68 1.84 7.93 2.14 11.83.84l47.31-15.77c6.33-2.11 10.6-8.03 10.6-14.7 0-8.56-6.94-15.5-15.5-15.5h-10.09c-4.11 0-8.05-1.63-10.96-4.54l-6.92-6.92a15.493 15.493 0 0 0-10.96-4.54H199.5c-8.56 0-15.5-6.94-15.5-15.5v-4.4c0-7.11 4.84-13.31 11.74-15.04l14.45-3.61c3.74-.94 7-3.23 9.14-6.44l8.08-12.11c2.87-4.31 7.71-6.9 12.89-6.9h24.21c8.56 0 15.5-6.94 15.5-15.5v-21.7C359.23 71.63 422.86 131.02 441.93 208H423.5c-8.56 0-15.5 6.94-15.5 15.5z\"/></svg>
  </div>
  <h3 class='bde-stats-grid_number'>
    7
  </h3>
  <p class='bde-stats-grid_text'>
    Countries
  </p>
</div>
<div class='bde-stats-grid_item'>
  <div class='bde-stats-grid_icon breakdance-icon-atom'>
    <svg xmlns=\"http://www.w3.org/2000/svg\" id=\"icon-music\" viewBox=\"0 0 32 32\"><path d=\"M30 0h2v23c0 2.761-3.134 5-7 5s-7-2.239-7-5c0-2.761 3.134-5 7-5 1.959 0 3.729 0.575 5 1.501v-11.501l-16 3.556v15.444c0 2.761-3.134 5-7 5s-7-2.239-7-5c0-2.761 3.134-5 7-5 1.959 0 3.729 0.575 5 1.501v-19.501l18-4z\"/></svg>
  </div>
  <h3 class='bde-stats-grid_number'>
    1024
  </h3>
  <p class='bde-stats-grid_text'>
    Songs Performed
  </p>
</div>
<div class='bde-stats-grid_item'>
  <div class='bde-stats-grid_icon breakdance-icon-atom'>
    <svg xmlns=\"http://www.w3.org/2000/svg\" id=\"icon-clock2\" viewBox=\"0 0 32 32\"> <path d=\"M16 0c-8.837 0-16 7.163-16 16s7.163 16 16 16 16-7.163 16-16-7.163-16-16-16zM20.586 23.414l-6.586-6.586v-8.828h4v7.172l5.414 5.414-2.829 2.829z\"/> </svg>
  </div>
  <h3 class='bde-stats-grid_number'>
    2036
  </h3>
  <p class='bde-stats-grid_text'>
   Hours Spent
  </p>
</div>
<div class='bde-stats-grid_item'>
  <div class='bde-stats-grid_icon breakdance-icon-atom'>
    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d=\"M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z\"/></svg>
  </div>
  <h3 class='bde-stats-grid_number'>
    72
  </h3>
  <p class='bde-stats-grid_text'>
    Hollidays Missed
  </p>
</div>
<div class='bde-stats-grid_item'>
  <div class='bde-stats-grid_icon breakdance-icon-atom'>
    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d=\"M488 128h-8V80c0-44.8-99.2-80-224-80S32 35.2 32 80v48h-8c-13.25 0-24 10.74-24 24v80c0 13.25 10.75 24 24 24h8v160c0 17.67 14.33 32 32 32v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h192v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h6.4c16 0 25.6-12.8 25.6-25.6V256h8c13.25 0 24-10.75 24-24v-80c0-13.26-10.75-24-24-24zM160 72c0-4.42 3.58-8 8-8h176c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H168c-4.42 0-8-3.58-8-8V72zm-48 328c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm128-112H128c-17.67 0-32-14.33-32-32v-96c0-17.67 14.33-32 32-32h112v160zm32 0V128h112c17.67 0 32 14.33 32 32v96c0 17.67-14.33 32-32 32H272zm128 112c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z\"/></svg>
  </div>
  <h3 class='bde-stats-grid_number'>
   34
  </h3>
  <p class='bde-stats-grid_text'>
    Buses Stoped
  </p>
</div>
<div class='bde-stats-grid_item'>
  <div class='bde-stats-grid_icon breakdance-icon-atom'>
    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 640 512\"><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d=\"M208 352c-2.39 0-4.78.35-7.06 1.09C187.98 357.3 174.35 360 160 360c-14.35 0-27.98-2.7-40.95-6.91-2.28-.74-4.66-1.09-7.05-1.09C49.94 352-.33 402.48 0 464.62.14 490.88 21.73 512 48 512h224c26.27 0 47.86-21.12 48-47.38.33-62.14-49.94-112.62-112-112.62zm-48-32c53.02 0 96-42.98 96-96s-42.98-96-96-96-96 42.98-96 96 42.98 96 96 96zM592 0H208c-26.47 0-48 22.25-48 49.59V96c23.42 0 45.1 6.78 64 17.8V64h352v288h-64v-64H384v64h-76.24c19.1 16.69 33.12 38.73 39.69 64H592c26.47 0 48-22.25 48-49.59V49.59C640 22.25 618.47 0 592 0z\"/></svg>
  </div>
  <h3 class='bde-stats-grid_number'>
   8
  </h3>
  <p class='bde-stats-grid_text'>
   Lectures Attended
  </p>
</div>
";
        }
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 94), "items", [], "any", false, false, false, 94));
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
            // line 95
            echo "  <div class='bde-stats-grid_item'>
    ";
            // line 96
            if (twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 96)) {
                // line 97
                echo "      ";
                echo twig_call_macro($macros["macros"], "macro_atomV1IconHtml", ["bde-stats-grid_icon", twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 97), false, false, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 97)], 97, $context, $this->getSourceContext());
                echo "
    ";
            }
            // line 99
            echo "    <h3 class='bde-stats-grid_number' ";
            echo Breakdance\PluginsAPI\content_editable_php((("content.content.items[" . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 99)) . "].number"));
            echo ">
     ";
            // line 100
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "number", [], "any", true, true, false, 100)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item"], "number", [], "any", false, false, false, 100), "34")) : ("34"));
            echo "
    </h3>
    <p class='bde-stats-grid_text' ";
            // line 102
            echo Breakdance\PluginsAPI\content_editable_php((("content.content.items[" . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 102)) . "].text"));
            echo ">
      ";
            // line 103
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", true, true, false, 103)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 103), "Buses Stoped")) : ("Buses Stoped"));
            echo "
    </p>
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
        // line 107
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "1dece650fd2a05ef89ceec6187b8810fc6b85bdc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 107,  180 => 103,  176 => 102,  171 => 100,  166 => 99,  160 => 97,  158 => 96,  155 => 95,  138 => 94,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "1dece650fd2a05ef89ceec6187b8810fc6b85bdc", "");
    }
}
