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

/* themes/custom/YC_theme/templates/block/block--views-block--frontpage-slider-main-block-1.html.twig */
class __TwigTemplate_85ca3d78d975da9015fe3146238a5c90 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("YC_theme/view-frontpage-slider-main"), "html", null, true);
        echo "
";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("YC_theme/slick"), "html", null, true);
        echo "

";
        // line 36
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 38
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 38), 38, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 39
($context["plugin_id"] ?? null), 39, $this->source)))];
        // line 42
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
        echo ">
  ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 43, $this->source), "html", null, true);
        echo "
  ";
        // line 44
        if (($context["label"] ?? null)) {
            // line 45
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 45, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 45, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 47
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 47, $this->source), "html", null, true);
        echo "
  ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 80
        echo "</div>
";
    }

    // line 48
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method", false, false, true, 49), 49, $this->source), "html", null, true);
        echo ">
      <div class=\"slider-home container\">
          ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 51, $this->source), "html", null, true);
        echo "
      </div>

      <!-- <div class=\"client-testimonials-wrapper\">
        <h2>Client Testimonials</h2>
        <div class=\"client-testimonials\">
          <div class=\"angel-oysters\">
            <p>Looks great thank you, hopefully stands up ok with the wind we get here. Thank you!</p>
            <span>Kady Halman, ANGEL OYSTERS</span>
          </div>

          <div class=\"w-w-hyundai\">
            <p>Thoroughly pleased with the new flags, they look great, the service provided was great and the turnaround time from ordering was excellent!</p>
            <span>WILD WEST HYUNDAI</span>
          </div>

          <div class=\"eco-outdoor\">
            <p>Looks great thank you, hopefully stands up ok with the wind we get here. Thank you!</p>
            <span>Jen Fossilo, ECO OUTDOOR</span>
          </div>
        </div>
        <div class=\"contact-btn\">
          <a href=\"#\">Send us your thoughts!</a>
        </div>
      </div> -->
      

    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/YC_theme/templates/block/block--views-block--frontpage-slider-main-block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 51,  88 => 49,  84 => 48,  79 => 80,  77 => 48,  72 => 47,  64 => 45,  62 => 44,  58 => 43,  53 => 42,  51 => 39,  50 => 38,  49 => 36,  44 => 33,  40 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/YC_theme/templates/block/block--views-block--frontpage-slider-main-block-1.html.twig", "/var/www/html/web/themes/custom/YC_theme/templates/block/block--views-block--frontpage-slider-main-block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 36, "if" => 44, "block" => 48);
        static $filters = array("escape" => 32, "clean_class" => 38);
        static $functions = array("attach_library" => 32);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'clean_class'],
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
