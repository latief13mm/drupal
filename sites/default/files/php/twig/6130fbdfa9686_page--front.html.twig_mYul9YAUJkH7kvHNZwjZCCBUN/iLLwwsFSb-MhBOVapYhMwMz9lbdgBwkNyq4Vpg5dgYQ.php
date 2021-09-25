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

/* themes/conference_lite/templates/page--front.html.twig */
class __TwigTemplate_aa2329c018eed647d0d6efe846a618df3a5a7da21662d9f520a9e807d9b3f222 extends \Twig\Template
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
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 73)) {
            // line 74
            echo "  ";
            // line 75
            echo "  <div class=\"clearfix slideout ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideout_background_color"] ?? null), 75, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
    ";
            // line 77
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
      </div>
    </div>
    ";
            // line 83
            echo "  </div>
  ";
            // line 85
            echo "
  ";
            // line 87
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fas fa-bars\"></i></button>
  ";
        }
        // line 90
        echo "
";
        // line 92
        echo "<div class=\"page-container\">

  ";
        // line 94
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 94) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 94))) {
            // line 95
            echo "    ";
            // line 96
            echo "    <div class=\"clearfix header-top-highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null), 96, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null), 97, $this->source), "html", null, true);
            echo "\">
        ";
            // line 99
            echo "        <div class=\"clearfix header-top-highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 100
            if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 101
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null), 101, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 102
            echo ">
          <div class=\"row\">
            ";
            // line 104
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 104)) {
                // line 105
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null), 105, $this->source), "html", null, true);
                echo "\">
                ";
                // line 107
                echo "                <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                  ";
                // line 108
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 111
                echo "              </div>
            ";
            }
            // line 113
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 113)) {
                // line 114
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null), 114, $this->source), "html", null, true);
                echo "\">
                ";
                // line 116
                echo "                <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                  ";
                // line 117
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 120
                echo "              </div>
            ";
            }
            // line 122
            echo "          </div>
        </div>
        ";
            // line 125
            echo "      </div>
    </div>
    ";
            // line 128
            echo "  ";
        }
        // line 129
        echo "
  ";
        // line 130
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 130) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 130))) {
            // line 131
            echo "    ";
            // line 132
            echo "    <div class=\"clearfix header-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null), 132, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 133
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null), 133, $this->source), "html", null, true);
            echo "\">
        ";
            // line 135
            echo "        <div class=\"clearfix header-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 136
            if ((($context["header_top_animations"] ?? null) == "enabled")) {
                // line 137
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null), 137, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 138
            echo ">
          <div class=\"row\">
            ";
            // line 140
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 140)) {
                // line 141
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null), 141, $this->source), "html", null, true);
                echo "\">
                ";
                // line 143
                echo "                <div class=\"clearfix header-top__section header-top-first\">
                  ";
                // line 144
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 147
                echo "              </div>
            ";
            }
            // line 149
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 149)) {
                // line 150
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null), 150, $this->source), "html", null, true);
                echo "\">
                ";
                // line 152
                echo "                <div class=\"clearfix header-top__section header-top-second\">
                  ";
                // line 153
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 156
                echo "              </div>
            ";
            }
            // line 158
            echo "          </div>
        </div>
        ";
            // line 161
            echo "      </div>
    </div>
    ";
            // line 164
            echo "  ";
        }
        // line 165
        echo "
  ";
        // line 166
        if ((($context["front_page_background_state"] ?? null) == "enabled")) {
            // line 167
            echo "  ";
            // line 168
            echo "  <div class=\"background-image-area ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null), 168, $this->source), "html", null, true);
            echo "\">

    <div class=\"background-image-area__image\" style=\"background-image: url(";
            // line 170
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [($this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 170, $this->source) . "/images/background-image-banner.jpg")]), "html", null, true);
            echo ");\"></div>
    <div class=\"background-image-area__overlay ";
            // line 171
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null), 171, $this->source), "html", null, true);
            echo "\" style=\"opacity: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page_background_opacity"] ?? null), 171, $this->source), "html", null, true);
            echo ";\"></div>
  ";
        }
        // line 173
        echo "
    ";
        // line 174
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 174) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 174)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 174))) {
            // line 175
            echo "      ";
            // line 176
            echo "      <div class=\"header-container\">

        ";
            // line 178
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 178) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 178)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 178))) {
                // line 179
                echo "          ";
                // line 180
                echo "          <header role=\"banner\" class=\"clearfix header ";
                (((($context["front_page_background_state"] ?? null) == "enabled")) ? (print ("")) : (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_background_color"] ?? null), "html", null, true))));
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null), 180, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null), 180, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
            <div class=\"";
                // line 181
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null), 181, $this->source), "html", null, true);
                echo "\">
              ";
                // line 183
                echo "              <div class=\"clearfix header__container\">
                <div class=\"row\">
                  ";
                // line 185
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 185)) {
                    // line 186
                    echo "                    <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null), 186, $this->source), "html", null, true);
                    echo "\">
                      ";
                    // line 188
                    echo "                      <div class=\"clearfix header__section header-third\">
                        ";
                    // line 189
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
                    echo "
                      </div>
                      ";
                    // line 192
                    echo "                    </div>
                  ";
                }
                // line 194
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 194)) {
                    // line 195
                    echo "                    <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null), 195, $this->source), "html", null, true);
                    echo "\">
                      ";
                    // line 197
                    echo "                      <div class=\"clearfix header__section header-first\">
                        ";
                    // line 198
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
                    echo "
                      </div>
                      ";
                    // line 201
                    echo "                    </div>
                  ";
                }
                // line 203
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 203)) {
                    // line 204
                    echo "                    <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null), 204, $this->source), "html", null, true);
                    echo "\">
                      ";
                    // line 206
                    echo "                      <div class=\"clearfix header__section header-second\">
                        ";
                    // line 207
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
                    echo "
                      </div>
                      ";
                    // line 210
                    echo "                    </div>
                  ";
                }
                // line 212
                echo "                </div>
              </div>
              ";
                // line 215
                echo "            </div>
          </header>
          ";
                // line 218
                echo "        ";
            }
            // line 219
            echo "
      </div>
      ";
            // line 222
            echo "    ";
        }
        // line 223
        echo "
    ";
        // line 224
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 224)) {
            // line 225
            echo "      ";
            // line 226
            echo "      <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["banner_id"] ?? null), 226, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix banner ";
            (((($context["front_page_background_state"] ?? null) == "enabled")) ? (print ("")) : (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["banner_background_color"] ?? null), "html", null, true))));
            echo ((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
        <div class=\"";
            // line 227
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_layout_container"] ?? null), 227, $this->source), "html", null, true);
            echo "\">
          ";
            // line 229
            echo "          <div class=\"clearfix banner__container\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"banner__section\">
                  ";
            // line 233
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 233), 233, $this->source), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 239
            echo "        </div>
      </div>
      ";
            // line 242
            echo "    ";
        }
        // line 243
        echo "
  ";
        // line 244
        if ((($context["front_page_background_state"] ?? null) == "enabled")) {
            // line 245
            echo "  </div>
  ";
            // line 247
            echo "  ";
        }
        // line 248
        echo "
  ";
        // line 249
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 249)) {
            // line 250
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-12\">
            ";
            // line 254
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 254), 254, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 260
        echo "
  ";
        // line 261
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 261)) {
            // line 262
            echo "    ";
            // line 263
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["content_top_id"] ?? null), 263, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix content-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_background_color"] ?? null), 263, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 264
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_layout_container"] ?? null), 264, $this->source), "html", null, true);
            echo "\">
        ";
            // line 266
            echo "        <div class=\"clearfix content-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 267
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 268
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_animation_effect"] ?? null), 268, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 269
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top__section\">
                ";
            // line 273
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 273), 273, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 279
            echo "      </div>
    </div>
    ";
            // line 282
            echo "  ";
        }
        // line 283
        echo "
  ";
        // line 284
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 284)) {
            // line 285
            echo "    ";
            // line 286
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_id"] ?? null), 286, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix content-top-highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_background_color"] ?? null), 286, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_separator"] ?? null), 286, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 287
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_layout_container"] ?? null), 287, $this->source), "html", null, true);
            echo "\">
        ";
            // line 289
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 290
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 291
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_animation_effect"] ?? null), 291, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 292
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 296
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 296), 296, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 302
            echo "      </div>
    </div>
    ";
            // line 305
            echo "  ";
        }
        // line 306
        echo "
  ";
        // line 308
        echo "  <div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["main_content_id"] ?? null), 308, $this->source)) . "\"")) : ("")));
        echo " class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_separator"] ?? null), 308, $this->source), "html", null, true);
        echo "\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"";
        // line 312
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null), 312, $this->source), "html", null, true);
        echo "\">
            ";
        // line 314
        echo "            <div class=\"clearfix main-content__section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        echo "\"
              ";
        // line 315
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 316
            echo "                data-animate-effect=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null), 316, $this->source), "html", null, true);
            echo "\"
              ";
        }
        // line 317
        echo ">
              ";
        // line 318
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 318)) {
            // line 319
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 319), 319, $this->source), "html", null, true);
            echo "
              ";
        }
        // line 321
        echo "            </div>
            ";
        // line 323
        echo "          </section>
          ";
        // line 324
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 324)) {
            // line 325
            echo "            <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null), 325, $this->source), "html", null, true);
            echo "\">
              ";
            // line 327
            echo "              <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                ";
            // line 328
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 329
                echo "                  data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null), 329, $this->source), "html", null, true);
                echo "\"
                ";
            }
            // line 330
            echo ">
                ";
            // line 331
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 331), 331, $this->source), "html", null, true);
            echo "
              </section>
              ";
            // line 334
            echo "            </aside>
          ";
        }
        // line 336
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 336)) {
            // line 337
            echo "            <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null), 337, $this->source), "html", null, true);
            echo "\">
              ";
            // line 339
            echo "              <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                ";
            // line 340
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 341
                echo "                  data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null), 341, $this->source), "html", null, true);
                echo "\"
                ";
            }
            // line 342
            echo ">
                ";
            // line 343
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 343), 343, $this->source), "html", null, true);
            echo "
              </section>
              ";
            // line 346
            echo "            </aside>
          ";
        }
        // line 348
        echo "        </div>
      </div>
    </div>
  </div>
  ";
        // line 353
        echo "
  ";
        // line 354
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 354) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 354))) {
            // line 355
            echo "    ";
            // line 356
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["content_bottom_id"] ?? null), 356, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix content-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_background_color"] ?? null), 356, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_separator"] ?? null), 356, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 357
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_layout_container"] ?? null), 357, $this->source), "html", null, true);
            echo "\">
        ";
            // line 359
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 360
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 361
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_animation_effect"] ?? null), 361, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 362
            echo ">
          <div class=\"row\">
            ";
            // line 364
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 364)) {
                // line 365
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_first_grid_class"] ?? null), 365, $this->source), "html", null, true);
                echo "\">
                ";
                // line 367
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 368
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 368), 368, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 371
                echo "              </div>
            ";
            }
            // line 373
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 373)) {
                // line 374
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_second_grid_class"] ?? null), 374, $this->source), "html", null, true);
                echo "\">
                ";
                // line 376
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 377
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 377), 377, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 380
                echo "              </div>
            ";
            }
            // line 382
            echo "          </div>
        </div>
        ";
            // line 385
            echo "      </div>
    </div>
    ";
            // line 388
            echo "  ";
        }
        // line 389
        echo "
  ";
        // line 390
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 390)) {
            // line 391
            echo "    ";
            // line 392
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["featured_top_id"] ?? null), 392, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix featured-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_background_color"] ?? null), 392, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_separator"] ?? null), 392, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 393
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_layout_container"] ?? null), 393, $this->source), "html", null, true);
            echo "\">
        ";
            // line 395
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 396
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 397
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_animation_effect"] ?? null), 397, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 398
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 402
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 402), 402, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 408
            echo "      </div>
    </div>
    ";
            // line 411
            echo "  ";
        }
        // line 412
        echo "
  ";
        // line 413
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 413)) {
            // line 414
            echo "    ";
            // line 415
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["featured_id"] ?? null), 415, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix featured ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_background_color"] ?? null), 415, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_separator"] ?? null), 415, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 416
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_layout_container"] ?? null), 416, $this->source), "html", null, true);
            echo "\">
        ";
            // line 418
            echo "        <div class=\"clearfix featured__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 419
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 420
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_animation_effect"] ?? null), 420, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 421
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 425
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 425), 425, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 431
            echo "      </div>
    </div>
    ";
            // line 434
            echo "  ";
        }
        // line 435
        echo "
  ";
        // line 436
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 436)) {
            // line 437
            echo "    ";
            // line 438
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["featured_bottom_id"] ?? null), 438, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix featured-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_background_color"] ?? null), 438, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_separator"] ?? null), 438, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 439
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_layout_container"] ?? null), 439, $this->source), "html", null, true);
            echo "\">
        ";
            // line 441
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 442
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 443
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_animation_effect"] ?? null), 443, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 444
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 448
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 448), 448, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 454
            echo "      </div>
    </div>
    ";
            // line 457
            echo "  ";
        }
        // line 458
        echo "
  ";
        // line 459
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 459)) {
            // line 460
            echo "    ";
            // line 461
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["sub_featured_id"] ?? null), 461, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix sub-featured ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_background_color"] ?? null), 461, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_separator"] ?? null), 461, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 462
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_layout_container"] ?? null), 462, $this->source), "html", null, true);
            echo "\">
        ";
            // line 464
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 465
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 466
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_animation_effect"] ?? null), 466, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 467
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 471
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 471), 471, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 477
            echo "      </div>
    </div>
    ";
            // line 480
            echo "  ";
        }
        // line 481
        echo "
  ";
        // line 482
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 482)) {
            // line 483
            echo "    ";
            // line 484
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["highlighted_top_id"] ?? null), 484, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix highlighted-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_background_color"] ?? null), 484, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_separator"] ?? null), 484, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 485
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_layout_container"] ?? null), 485, $this->source), "html", null, true);
            echo "\">
        ";
            // line 487
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 488
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 489
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_animation_effect"] ?? null), 489, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 490
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 494
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 494), 494, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 500
            echo "      </div>
    </div>
    ";
            // line 503
            echo "  ";
        }
        // line 504
        echo "
  ";
        // line 505
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 505)) {
            // line 506
            echo "    ";
            // line 507
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["highlighted_id"] ?? null), 507, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_background_color"] ?? null), 507, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_separator"] ?? null), 507, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 508
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_layout_container"] ?? null), 508, $this->source), "html", null, true);
            echo "\">
        ";
            // line 510
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 511
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 512
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_animation_effect"] ?? null), 512, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 513
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 517
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 517), 517, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 523
            echo "      </div>
    </div>
    ";
            // line 526
            echo "  ";
        }
        // line 527
        echo "
  ";
        // line 528
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 528) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 528))) {
            // line 529
            echo "    ";
            // line 530
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["footer_top_id"] ?? null), 530, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix footer-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_regions"] ?? null), 530, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_background_color"] ?? null), 530, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_separator"] ?? null), 530, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 531
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_layout_container"] ?? null), 531, $this->source), "html", null, true);
            echo "\">
        ";
            // line 533
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 534
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 535
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_animation_effect"] ?? null), 535, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 536
            echo ">
          <div class=\"row\">
            ";
            // line 538
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 538)) {
                // line 539
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_first_grid_class"] ?? null), 539, $this->source), "html", null, true);
                echo "\">
                ";
                // line 541
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 542
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 542), 542, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 545
                echo "              </div>
            ";
            }
            // line 547
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 547)) {
                // line 548
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_second_grid_class"] ?? null), 548, $this->source), "html", null, true);
                echo "\">
                ";
                // line 550
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 551
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 551), 551, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 554
                echo "              </div>
            ";
            }
            // line 556
            echo "          </div>
        </div>
        ";
            // line 559
            echo "      </div>
    </div>
    ";
            // line 562
            echo "  ";
        }
        // line 563
        echo "
  ";
        // line 564
        if (((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 564) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 564)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 564)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 564)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 564))) {
            // line 565
            echo "    ";
            // line 566
            echo "    <footer ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["footer_id"] ?? null), 566, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix footer ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_background_color"] ?? null), 566, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_separator"] ?? null), 566, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 567
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_layout_container"] ?? null), 567, $this->source), "html", null, true);
            echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 570
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 570)) {
                // line 571
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_grid_class"] ?? null), 571, $this->source), "html", null, true);
                echo "\">
                ";
                // line 573
                echo "                <div class=\"clearfix footer__section footer-first";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 574
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 575
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 575, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 576
                echo ">
                  ";
                // line 577
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 577), 577, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 580
                echo "              </div>
            ";
            }
            // line 582
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 582)) {
                // line 583
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_grid_class"] ?? null), 583, $this->source), "html", null, true);
                echo "\">
                ";
                // line 585
                echo "                <div class=\"clearfix footer__section footer-second";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 586
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 587
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 587, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 588
                echo ">
                  ";
                // line 589
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 589), 589, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 592
                echo "              </div>
            ";
            }
            // line 594
            echo "            <div class=\"clearfix ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_first"] ?? null), 594, $this->source), "html", null, true);
            echo "\"></div>
            ";
            // line 595
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 595)) {
                // line 596
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_grid_class"] ?? null), 596, $this->source), "html", null, true);
                echo "\">
                ";
                // line 598
                echo "                <div class=\"clearfix footer__section footer-third";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 599
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 600
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 600, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 601
                echo ">
                  ";
                // line 602
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 602), 602, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 605
                echo "              </div>
            ";
            }
            // line 607
            echo "            <div class=\"clearfix ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_second"] ?? null), 607, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_5_columns_clearfix"] ?? null), 607, $this->source), "html", null, true);
            echo "\"></div>
            ";
            // line 608
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 608)) {
                // line 609
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fourth_grid_class"] ?? null), 609, $this->source), "html", null, true);
                echo "\">
                ";
                // line 611
                echo "                <div class=\"clearfix footer__section footer-fourth";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 612
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 613
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 613, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 614
                echo ">
                  ";
                // line 615
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 615), 615, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 618
                echo "              </div>
            ";
            }
            // line 620
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 620)) {
                // line 621
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fifth_grid_class"] ?? null), 621, $this->source), "html", null, true);
                echo "\">
                ";
                // line 623
                echo "                <div class=\"clearfix footer__section footer-fifth";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 624
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 625
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 625, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 626
                echo ">
                  ";
                // line 627
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 627), 627, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 630
                echo "              </div>
            ";
            }
            // line 632
            echo "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 637
            echo "  ";
        }
        // line 638
        echo "
  ";
        // line 639
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 639)) {
            // line 640
            echo "    ";
            // line 641
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["footer_bottom_id"] ?? null), 641, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix footer-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_background_color"] ?? null), 641, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_separator"] ?? null), 641, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 642
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_layout_container"] ?? null), 642, $this->source), "html", null, true);
            echo "\">
        ";
            // line 644
            echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix footer-bottom__section\">
                ";
            // line 648
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 648), 648, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 654
            echo "      </div>
    </div>
    ";
            // line 657
            echo "  ";
        }
        // line 658
        echo "
  ";
        // line 659
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 659) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 659))) {
            // line 660
            echo "    ";
            // line 661
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["subfooter_id"] ?? null), 661, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix subfooter ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_background_color"] ?? null), 661, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_separator"] ?? null), 661, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 662
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_layout_container"] ?? null), 662, $this->source), "html", null, true);
            echo "\">
        ";
            // line 664
            echo "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 666
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 666)) {
                // line 667
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_first_grid_class"] ?? null), 667, $this->source), "html", null, true);
                echo "\">
                ";
                // line 669
                echo "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 670
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 670), 670, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 673
                echo "              </div>
            ";
            }
            // line 675
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 675)) {
                // line 676
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_second_grid_class"] ?? null), 676, $this->source), "html", null, true);
                echo "\">
                ";
                // line 678
                echo "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 679
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 679), 679, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 682
                echo "              </div>
            ";
            }
            // line 684
            echo "          </div>
        </div>
        ";
            // line 687
            echo "      </div>
    </div>
    ";
            // line 690
            echo "  ";
        }
        // line 691
        echo "
  ";
        // line 692
        if (($context["scroll_to_top_display"] ?? null)) {
            // line 693
            echo "  ";
            // line 694
            echo "    <div class=\"to-top\"><i class=\"fas ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null), 694, $this->source), "html", null, true);
            echo "\"></i></div>
  ";
            // line 696
            echo "  ";
        }
        // line 697
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/conference_lite/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1545 => 697,  1542 => 696,  1537 => 694,  1535 => 693,  1533 => 692,  1530 => 691,  1527 => 690,  1523 => 687,  1519 => 684,  1515 => 682,  1510 => 679,  1507 => 678,  1502 => 676,  1499 => 675,  1495 => 673,  1490 => 670,  1487 => 669,  1482 => 667,  1480 => 666,  1476 => 664,  1472 => 662,  1460 => 661,  1458 => 660,  1456 => 659,  1453 => 658,  1450 => 657,  1446 => 654,  1438 => 648,  1432 => 644,  1428 => 642,  1416 => 641,  1414 => 640,  1412 => 639,  1409 => 638,  1406 => 637,  1400 => 632,  1396 => 630,  1391 => 627,  1388 => 626,  1382 => 625,  1380 => 624,  1375 => 623,  1370 => 621,  1367 => 620,  1363 => 618,  1358 => 615,  1355 => 614,  1349 => 613,  1347 => 612,  1342 => 611,  1337 => 609,  1335 => 608,  1328 => 607,  1324 => 605,  1319 => 602,  1316 => 601,  1310 => 600,  1308 => 599,  1303 => 598,  1298 => 596,  1296 => 595,  1291 => 594,  1287 => 592,  1282 => 589,  1279 => 588,  1273 => 587,  1271 => 586,  1266 => 585,  1261 => 583,  1258 => 582,  1254 => 580,  1249 => 577,  1246 => 576,  1240 => 575,  1238 => 574,  1233 => 573,  1228 => 571,  1226 => 570,  1220 => 567,  1208 => 566,  1206 => 565,  1204 => 564,  1201 => 563,  1198 => 562,  1194 => 559,  1190 => 556,  1186 => 554,  1181 => 551,  1178 => 550,  1173 => 548,  1170 => 547,  1166 => 545,  1161 => 542,  1158 => 541,  1153 => 539,  1151 => 538,  1147 => 536,  1141 => 535,  1139 => 534,  1134 => 533,  1130 => 531,  1117 => 530,  1115 => 529,  1113 => 528,  1110 => 527,  1107 => 526,  1103 => 523,  1095 => 517,  1089 => 513,  1083 => 512,  1081 => 511,  1076 => 510,  1072 => 508,  1061 => 507,  1059 => 506,  1057 => 505,  1054 => 504,  1051 => 503,  1047 => 500,  1039 => 494,  1033 => 490,  1027 => 489,  1025 => 488,  1020 => 487,  1016 => 485,  1005 => 484,  1003 => 483,  1001 => 482,  998 => 481,  995 => 480,  991 => 477,  983 => 471,  977 => 467,  971 => 466,  969 => 465,  964 => 464,  960 => 462,  949 => 461,  947 => 460,  945 => 459,  942 => 458,  939 => 457,  935 => 454,  927 => 448,  921 => 444,  915 => 443,  913 => 442,  908 => 441,  904 => 439,  893 => 438,  891 => 437,  889 => 436,  886 => 435,  883 => 434,  879 => 431,  871 => 425,  865 => 421,  859 => 420,  857 => 419,  852 => 418,  848 => 416,  837 => 415,  835 => 414,  833 => 413,  830 => 412,  827 => 411,  823 => 408,  815 => 402,  809 => 398,  803 => 397,  801 => 396,  796 => 395,  792 => 393,  781 => 392,  779 => 391,  777 => 390,  774 => 389,  771 => 388,  767 => 385,  763 => 382,  759 => 380,  754 => 377,  751 => 376,  746 => 374,  743 => 373,  739 => 371,  734 => 368,  731 => 367,  726 => 365,  724 => 364,  720 => 362,  714 => 361,  712 => 360,  707 => 359,  703 => 357,  692 => 356,  690 => 355,  688 => 354,  685 => 353,  679 => 348,  675 => 346,  670 => 343,  667 => 342,  661 => 341,  659 => 340,  652 => 339,  647 => 337,  644 => 336,  640 => 334,  635 => 331,  632 => 330,  626 => 329,  624 => 328,  617 => 327,  612 => 325,  610 => 324,  607 => 323,  604 => 321,  598 => 319,  596 => 318,  593 => 317,  587 => 316,  585 => 315,  578 => 314,  574 => 312,  564 => 308,  561 => 306,  558 => 305,  554 => 302,  546 => 296,  540 => 292,  534 => 291,  532 => 290,  527 => 289,  523 => 287,  512 => 286,  510 => 285,  508 => 284,  505 => 283,  502 => 282,  498 => 279,  490 => 273,  484 => 269,  478 => 268,  476 => 267,  471 => 266,  467 => 264,  458 => 263,  456 => 262,  454 => 261,  451 => 260,  442 => 254,  436 => 250,  434 => 249,  431 => 248,  428 => 247,  425 => 245,  423 => 244,  420 => 243,  417 => 242,  413 => 239,  405 => 233,  399 => 229,  395 => 227,  386 => 226,  384 => 225,  382 => 224,  379 => 223,  376 => 222,  372 => 219,  369 => 218,  365 => 215,  361 => 212,  357 => 210,  352 => 207,  349 => 206,  344 => 204,  341 => 203,  337 => 201,  332 => 198,  329 => 197,  324 => 195,  321 => 194,  317 => 192,  312 => 189,  309 => 188,  304 => 186,  302 => 185,  298 => 183,  294 => 181,  283 => 180,  281 => 179,  279 => 178,  275 => 176,  273 => 175,  271 => 174,  268 => 173,  261 => 171,  257 => 170,  251 => 168,  249 => 167,  247 => 166,  244 => 165,  241 => 164,  237 => 161,  233 => 158,  229 => 156,  224 => 153,  221 => 152,  216 => 150,  213 => 149,  209 => 147,  204 => 144,  201 => 143,  196 => 141,  194 => 140,  190 => 138,  184 => 137,  182 => 136,  177 => 135,  173 => 133,  166 => 132,  164 => 131,  162 => 130,  159 => 129,  156 => 128,  152 => 125,  148 => 122,  144 => 120,  139 => 117,  136 => 116,  131 => 114,  128 => 113,  124 => 111,  119 => 108,  116 => 107,  111 => 105,  109 => 104,  105 => 102,  99 => 101,  97 => 100,  92 => 99,  88 => 97,  81 => 96,  79 => 95,  77 => 94,  73 => 92,  70 => 90,  66 => 87,  63 => 85,  60 => 83,  54 => 79,  50 => 77,  43 => 75,  41 => 74,  39 => 73,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/conference_lite/templates/page--front.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\conference_lite\\templates\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 73);
        static $filters = array("escape" => 75, "raw" => 226);
        static $functions = array("file_url" => 170);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw'],
                ['file_url']
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
