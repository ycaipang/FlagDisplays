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

/* themes/custom/YC_theme/templates/pages/page--front.html.twig */
class __TwigTemplate_98a947c5b50e7f21751fa80dba46220d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        $context["ynavclasses"] = [0 => "navbar", 1 => "navbar-dark"];
        // line 76
        echo "
<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
      ";
        // line 80
        $this->displayBlock('head', $context, $blocks);
        // line 131
        echo "    </header>
    ";
        // line 132
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 132)) {
            // line 133
            echo "      <div class=\"highlighted\">
        <aside class=\"";
            // line 134
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 134, $this->source), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
          ";
            // line 135
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 139
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 139)) {
            // line 140
            echo "      ";
            $this->displayBlock('featured', $context, $blocks);
            // line 147
            echo "    ";
        }
        // line 148
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 149
        $this->displayBlock('content', $context, $blocks);
        // line 176
        echo "    </div>
    ";
        // line 177
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 177) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 177)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 177))) {
            // line 178
            echo "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 179
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 179, $this->source), "html", null, true);
            echo " clearfix\" role=\"complementary\">
          ";
            // line 180
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
            echo "
          ";
            // line 181
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
            echo "
          ";
            // line 182
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 186
        echo "    <footer class=\"site-footer\">
      ";
        // line 187
        $this->displayBlock('footer', $context, $blocks);
        // line 207
        echo "    </footer>
  </div>
</div>
";
    }

    // line 80
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 81) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 81)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 81))) {
            // line 82
            echo "          <nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 82, $this->source), "html", null, true);
            echo ">
          ";
            // line 83
            if (($context["container_navbar"] ?? null)) {
                // line 84
                echo "          <div class=\"container\">
          ";
            }
            // line 86
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            echo "
              ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "
              ";
            // line 88
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 88)) {
                // line 89
                echo "                <div class=\"form-inline navbar-form ms-auto\">
                  ";
                // line 90
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 93
            echo "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 94
                echo "          </div>
          ";
            }
            // line 96
            echo "          </nav>
        ";
        }
        // line 98
        echo "        <nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 98, $this->source), "html", null, true);
        echo ">
          ";
        // line 99
        if (($context["container_navbar"] ?? null)) {
            // line 100
            echo "          <div class=\"container\">
          ";
        }
        // line 102
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
        echo "
            ";
        // line 103
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 103) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 103))) {
            // line 104
            echo "              <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_btn_data"] ?? null), 104, $this->source), "html", null, true);
            echo "\" data-bs-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"navbar-collapse collapse\" id=\"CollapsingNavbar\">
                ";
            // line 106
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 107
                echo "                  <div class=\"offcanvas-header\">
                    <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                  </div>
                  <div class=\"offcanvas-body\">
                ";
            }
            // line 112
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "
                ";
            // line 113
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 113)) {
                // line 114
                echo "                  <div class=\"form-inline navbar-form justify-content-end\">
                    ";
                // line 115
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            }
            // line 118
            echo "                ";
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 119
                echo "                  </div>
                ";
            }
            // line 121
            echo "\t            </div>
            ";
        }
        // line 123
        echo "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 124
            echo "              <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 126
        echo "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 127
            echo "          </div>
          ";
        }
        // line 129
        echo "        </nav>
      ";
    }

    // line 140
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section clearfix\" role=\"complementary\">
            ";
        // line 143
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
        echo "
          </aside>
        </div>
      ";
    }

    // line 149
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 150, $this->source), "html", null, true);
        echo "\">
        ";
        // line 151
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 153
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 153, $this->source), "html", null, true);
        echo ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 156
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
        echo "
                </section>
              </main>
            ";
        // line 159
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 159)) {
            // line 160
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 160, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 162
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 166
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 166)) {
            // line 167
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 167, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 169
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 173
        echo "          </div>
        </div>
      ";
    }

    // line 187
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 188
        echo "        ";
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 188) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 188)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 188)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 188))) {
            // line 189
            echo "          <div class=\"site-footer__top clearfix\">
            <div class=\"";
            // line 190
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 190, $this->source), "html", null, true);
            echo "\">
              ";
            // line 191
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
            echo "
              ";
            // line 192
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
            echo "
              ";
            // line 193
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            echo "
              ";
            // line 194
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 198
        echo "
        ";
        // line 199
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 199)) {
            // line 200
            echo "          <div class=\"site-footer__bottom\">
            <div class=\"";
            // line 201
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 201, $this->source), "html", null, true);
            echo "\">
            ";
            // line 202
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 206
        echo "      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/YC_theme/templates/pages/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 206,  380 => 202,  376 => 201,  373 => 200,  371 => 199,  368 => 198,  361 => 194,  357 => 193,  353 => 192,  349 => 191,  345 => 190,  342 => 189,  339 => 188,  335 => 187,  329 => 173,  322 => 169,  316 => 167,  313 => 166,  306 => 162,  300 => 160,  298 => 159,  292 => 156,  286 => 153,  281 => 151,  276 => 150,  272 => 149,  264 => 143,  260 => 141,  256 => 140,  251 => 129,  247 => 127,  244 => 126,  240 => 124,  237 => 123,  233 => 121,  229 => 119,  226 => 118,  220 => 115,  217 => 114,  215 => 113,  210 => 112,  203 => 107,  201 => 106,  195 => 104,  193 => 103,  188 => 102,  184 => 100,  182 => 99,  177 => 98,  173 => 96,  169 => 94,  166 => 93,  160 => 90,  157 => 89,  155 => 88,  151 => 87,  146 => 86,  142 => 84,  140 => 83,  135 => 82,  132 => 81,  128 => 80,  121 => 207,  119 => 187,  116 => 186,  109 => 182,  105 => 181,  101 => 180,  97 => 179,  94 => 178,  92 => 177,  89 => 176,  87 => 149,  84 => 148,  81 => 147,  78 => 140,  75 => 139,  68 => 135,  64 => 134,  61 => 133,  59 => 132,  56 => 131,  54 => 80,  50 => 79,  45 => 76,  43 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/YC_theme/templates/pages/page--front.html.twig", "/var/www/html/web/themes/custom/YC_theme/templates/pages/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71, "block" => 80, "if" => 132);
        static $filters = array("t" => 79, "escape" => 134);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['t', 'escape'],
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
