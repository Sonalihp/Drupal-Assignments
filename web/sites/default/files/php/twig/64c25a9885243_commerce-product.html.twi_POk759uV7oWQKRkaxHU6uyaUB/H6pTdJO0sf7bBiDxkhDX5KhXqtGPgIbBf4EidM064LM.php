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

/* themes/contrib/estore/templates/commerce/commerce-product.html.twig */
class __TwigTemplate_e6e57cfd74d3fb4eac4660cad0261803 extends \Twig\Template
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
        // line 22
        echo "<article ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "commerce-product", 1 => "full"], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        echo ">
  <div class=\"row\">
    <div class=\"product-left col-sm-6\">
      ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_images", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "
    </div>

    <div class=\"product-right col-sm-6\">
      <h3 class=\"product-title\">";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "</h3>
      ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["product"] ?? null), 30, $this->source), "variation_attributes", "field_images", "field_reviews", "field_related_products", "body", "field_sale"), "html", null, true);
        echo "
    </div>

    ";
        // line 33
        if (((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_sale", [], "any", false, false, true, 33)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null) == 1)) {
            // line 34
            echo "      <div class=\"sales-tag\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sale!"));
            echo "</div>
    ";
        }
        // line 36
        echo "
    <div class=\"product-bottom col-sm-12\">
      <ul class=\"nav nav-tabs\">
        <li class=\"active\">
          <a data-toggle=\"tab\" href=\"#description\">";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Description"));
        echo "</a>
        </li>

        ";
        // line 43
        if (($context["reviews_count"] ?? null)) {
            // line 44
            echo "          <li>
            <a data-toggle=\"tab\" href=\"#reviews\">
              ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Reviews"));
            echo "

              ";
            // line 48
            if ((($context["reviews_count"] ?? null) > 0)) {
                // line 49
                echo "                <span class=\"reviews-count\">(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["reviews_count"] ?? null), 49, $this->source), "html", null, true);
                echo ")</span>
              ";
            }
            // line 51
            echo "            </a>
          </li>
        ";
        }
        // line 54
        echo "      </ul>

      <div class=\"tab-content\">
        <div id=\"description\"
             name=\"description\"
             class=\"tab-pane fade in active\">
          <h4 class=\"tab-title\">";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Description"));
        echo "</h4>

          <div class=\"description-content\">
            ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "body", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
          </div>
        </div>

        ";
        // line 67
        if (($context["reviews_count"] ?? null)) {
            // line 68
            echo "          <div id=\"reviews\" name=\"reviews\" class=\"tab-pane fade\">
            <h3 class=\"tab-title\">
              ";
            // line 70
            if ((($context["reviews_count"] ?? null) > 0)) {
                // line 71
                echo "                ";
                if ((($context["reviews_count"] ?? null) == 1)) {
                    // line 72
                    echo "                  ";
                    echo t("@reviews_count review for @title", array("@reviews_count" =>                     // line 73
($context["reviews_count"] ?? null), "@title" => ($context["title"] ?? null), ), ["context" => "product reviews title"]);
                    // line 75
                    echo "                ";
                } else {
                    // line 76
                    echo "                  ";
                    echo t("@reviews_count reviews for @title", array("@reviews_count" =>                     // line 77
($context["reviews_count"] ?? null), "@title" => ($context["title"] ?? null), ), ["context" => "product reviews title"]);
                    // line 79
                    echo "                ";
                }
                // line 80
                echo "              ";
            }
            // line 81
            echo "            </h3>

            <div class=\"reviews-content\">
              ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_reviews", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 88
        echo "      </div>
    </div>
  </div>
</article>

";
        // line 93
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_related_products", [], "any", false, false, true, 93)) != "")) {
            // line 94
            echo "  <div class=\"row\">
    <div class=\"related-products col-sm-12\">
      <h3 class=\"block-title\"><span>";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Related products"));
            echo "</span></h3>

      <div class=\"related-products-items row\">
        ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_related_products", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/estore/templates/commerce/commerce-product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 99,  181 => 96,  177 => 94,  175 => 93,  168 => 88,  161 => 84,  156 => 81,  153 => 80,  150 => 79,  148 => 77,  146 => 76,  143 => 75,  141 => 73,  139 => 72,  136 => 71,  134 => 70,  130 => 68,  128 => 67,  121 => 63,  115 => 60,  107 => 54,  102 => 51,  96 => 49,  94 => 48,  89 => 46,  85 => 44,  83 => 43,  77 => 40,  71 => 36,  65 => 34,  63 => 33,  57 => 30,  53 => 29,  46 => 25,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/estore/templates/commerce/commerce-product.html.twig", "/var/www/html/web/themes/contrib/estore/templates/commerce/commerce-product.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 33, "trans" => 72);
        static $filters = array("escape" => 22, "without" => 30, "t" => 34, "render" => 93);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'without', 't', 'render'],
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
