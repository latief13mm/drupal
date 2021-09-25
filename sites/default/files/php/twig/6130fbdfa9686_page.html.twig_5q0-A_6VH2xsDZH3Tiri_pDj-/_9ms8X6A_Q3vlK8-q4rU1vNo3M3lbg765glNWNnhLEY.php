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

/* themes/explore_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_d85f8a1cf1e9698a89b076a5e25f1723f42a7f8d82f849466183cc7935bcdfae extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "
<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"navbar-header col-md-2\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 68)) {
            // line 69
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 71
        echo "      </div>

      ";
        // line 73
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 73) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 73)) || ($context["show_social_icon"] ?? null))) {
            // line 74
            echo "          <div class=\"col-md primary-menu-wrap\">
            ";
            // line 75
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 75)) {
                // line 76
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 78
            echo "            
            ";
            // line 79
            if (($context["show_social_icon"] ?? null)) {
                // line 80
                echo "              <p class=\"social-media\">
                ";
                // line 81
                if (($context["facebook_url"] ?? null)) {
                    // line 82
                    echo "                  <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 82, $this->source), "html", null, true);
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
                ";
                }
                // line 84
                echo "                ";
                if (($context["twitter_url"] ?? null)) {
                    // line 85
                    echo "                  <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 85, $this->source), "html", null, true);
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
                ";
                }
                // line 87
                echo "                ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 88
                    echo "                  <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 88, $this->source), "html", null, true);
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                ";
                }
                // line 90
                echo "                ";
                if (($context["instagram_url"] ?? null)) {
                    // line 91
                    echo "                  <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 91, $this->source), "html", null, true);
                    echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
                ";
                }
                // line 93
                echo "                ";
                if (($context["rss_url"] ?? null)) {
                    // line 94
                    echo "                  <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 94, $this->source), "html", null, true);
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
                ";
                }
                // line 96
                echo "              </p>
            ";
            }
            // line 98
            echo "            
            ";
            // line 99
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 99)) {
                // line 100
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 102
            echo "
          </div>
        ";
        }
        // line 105
        echo "      </div>
    </div>
  </div>
</div>

";
        // line 110
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 111
            echo "  <div class=\"container\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 115
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 115, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 121
        echo "
";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 122)) {
            // line 123
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 125
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 129
        echo "
";
        // line 130
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 130) &&  !($context["is_front"] ?? null))) {
            // line 131
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 134
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 139
        echo "
<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      ";
        // line 144
        if ( !($context["is_front"] ?? null)) {
            // line 145
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 146
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 149
        echo "
      <div class=\"row layout\">
        ";
        // line 151
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 151)) {
            // line 152
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 152, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 154
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 158
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 158)) {
            // line 159
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 159, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 161
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 165
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 165)) {
            // line 166
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 166, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 168
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 172
        echo "      </div>

    </div>
  </div>
</div>

";
        // line 178
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 178) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 178)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 178)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 178))) {
            // line 179
            echo "  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 182
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 182)) {
                // line 183
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 184
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 187
            echo "
      <div class=\"row\">
        ";
            // line 189
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 189)) {
                // line 190
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 190, $this->source), "html", null, true);
                echo ">
            ";
                // line 191
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 193
            echo "       
        ";
            // line 194
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 194)) {
                // line 195
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 195, $this->source), "html", null, true);
                echo ">
            ";
                // line 196
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 199
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 199)) {
                // line 200
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 200, $this->source), "html", null, true);
                echo ">
            ";
                // line 201
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 204
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 204)) {
                // line 205
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 205, $this->source), "html", null, true);
                echo ">
            ";
                // line 206
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 209
            echo "      </div>

    </div>
  </div>
";
        }
        // line 214
        echo "
";
        // line 215
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 215) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 215)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 215))) {
            // line 216
            echo "  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 219
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 219)) {
                // line 220
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 221
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 221), 221, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 224
            echo "
      <div class=\"row\">
        ";
            // line 226
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 226)) {
                // line 227
                echo "          <div class=\"col-sm\">
            ";
                // line 228
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 228), 228, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 231
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 231)) {
                // line 232
                echo "          <div class=\"col-sm\">
            ";
                // line 233
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 233), 233, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 236
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 236)) {
                // line 237
                echo "          <div class=\"col-sm\">
            ";
                // line 238
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 238), 238, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 241
            echo "      </div>

    </div>
  </div>
";
        }
        // line 246
        echo "
<div class=\"copyright\">
    <div class=\"container\">
      <span>Copyright © ";
        // line 249
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
      ";
        // line 250
        if (($context["show_credit_link"] ?? null)) {
            // line 251
            echo "        <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 253
        echo "  </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "themes/explore_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 253,  454 => 251,  452 => 250,  448 => 249,  443 => 246,  436 => 241,  430 => 238,  427 => 237,  424 => 236,  418 => 233,  415 => 232,  412 => 231,  406 => 228,  403 => 227,  401 => 226,  397 => 224,  391 => 221,  388 => 220,  386 => 219,  381 => 216,  379 => 215,  376 => 214,  369 => 209,  363 => 206,  358 => 205,  355 => 204,  349 => 201,  344 => 200,  341 => 199,  335 => 196,  330 => 195,  328 => 194,  325 => 193,  319 => 191,  314 => 190,  312 => 189,  308 => 187,  302 => 184,  299 => 183,  297 => 182,  292 => 179,  290 => 178,  282 => 172,  275 => 168,  269 => 166,  266 => 165,  259 => 161,  253 => 159,  250 => 158,  243 => 154,  237 => 152,  235 => 151,  231 => 149,  225 => 146,  222 => 145,  220 => 144,  213 => 139,  205 => 134,  200 => 131,  198 => 130,  195 => 129,  188 => 125,  184 => 123,  182 => 122,  179 => 121,  173 => 117,  164 => 115,  160 => 114,  155 => 111,  153 => 110,  146 => 105,  141 => 102,  135 => 100,  133 => 99,  130 => 98,  126 => 96,  120 => 94,  117 => 93,  111 => 91,  108 => 90,  102 => 88,  99 => 87,  93 => 85,  90 => 84,  84 => 82,  82 => 81,  79 => 80,  77 => 79,  74 => 78,  68 => 76,  66 => 75,  63 => 74,  61 => 73,  57 => 71,  51 => 69,  49 => 68,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/explore_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\explore_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 68, "for" => 114);
        static $filters = array("escape" => 69, "raw" => 115, "date" => 249);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
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
