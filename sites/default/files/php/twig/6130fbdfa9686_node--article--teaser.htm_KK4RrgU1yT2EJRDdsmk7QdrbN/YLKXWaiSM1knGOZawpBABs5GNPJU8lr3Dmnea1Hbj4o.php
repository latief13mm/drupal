<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/conference_lite/templates/node--article--teaser.html.twig */
class __TwigTemplate_ae0b812ce62c34d1a03d80b94b478845c0c227100ea773c0b0ae9018dab2961a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'node_side' => [$this, 'block_node_side'],
            'meta_area' => [$this, 'block_meta_area'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node.html.twig", "themes/conference_lite/templates/node--article--teaser.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_node_side($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_meta_area($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 12, $this->source), "html", null, true);
        echo "
  ";
        // line 13
        if ((($context["display_submitted"] ?? null) &&  !$this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 13)))) {
            // line 14
            echo "  <span class=\"node__meta-date\">
    <span class=\"node__meta-date-item day\">";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 15), 15, $this->source), "custom", "d"]), "html", null, true);
            echo "</span>
    <span class=\"node__meta-date-item month-year\">";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 16), 16, $this->source), "custom", "M"]), "html", null, true);
            echo ", ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 16), 16, $this->source), "custom", "Y"]), "html", null, true);
            echo "</span>
  </span>
  ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 18, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 20
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
  <h2";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 21), 21, $this->source), "html", null, true);
        echo ">
    <a href=\"";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 22, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 22, $this->source), "html", null, true);
        echo "</a>
  </h2>
  ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 24, $this->source), "html", null, true);
        echo "
  ";
        // line 25
        if ((($context["display_submitted"] ?? null) || (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "comment", [], "any", false, false, true, 25) && (($context["comment_count"] ?? null) > 0)))) {
            // line 26
            echo "    <div class=\"node__meta\">
      ";
            // line 27
            if (($context["display_submitted"] ?? null)) {
                // line 28
                echo "        <span";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node__meta-user node__meta-item"], "method", false, false, true, 28), 28, $this->source), "html", null, true);
                echo ">
          <i class=\"far fa-user\"></i> ";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 29, $this->source), "html", null, true);
                echo "
        </span>
      ";
            }
            // line 32
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "comment", [], "any", false, false, true, 32) && (($context["comment_count"] ?? null) > 0))) {
                // line 33
                echo "        <div class=\"node__meta-item node__meta-comments\">
          <i class=\"far fa-comments\"></i>
          ";
                // line 35
                echo \Drupal::translation()->formatPlural(abs(                // line 37
($context["comment_count"] ?? null)), "1 comment", "@comment_count comments", array("@comment_count" =>                 // line 38
($context["comment_count"] ?? null), ));
                // line 40
                echo "        </div>
      ";
            }
            // line 42
            echo "    </div>
  ";
        }
    }

    // line 45
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("conference_lite/node-article"), "html", null, true);
        echo "
  <div class=\"node__main-content-section\">
    ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 48, $this->source), "comment", "links", "field_image"), "html", null, true);
        echo "
  </div>
  ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "
  ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/conference_lite/templates/node--article--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 51,  160 => 50,  155 => 48,  149 => 46,  145 => 45,  139 => 42,  135 => 40,  133 => 38,  132 => 37,  131 => 35,  127 => 33,  124 => 32,  118 => 29,  113 => 28,  111 => 27,  108 => 26,  106 => 25,  102 => 24,  95 => 22,  91 => 21,  86 => 20,  81 => 18,  74 => 16,  70 => 15,  67 => 14,  65 => 13,  60 => 12,  56 => 11,  50 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/conference_lite/templates/node--article--teaser.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\conference_lite\\templates\\node--article--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13, "trans" => 35);
        static $filters = array("escape" => 12, "render" => 13, "format_date" => 15, "without" => 48);
        static $functions = array("attach_library" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'render', 'format_date', 'without'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
