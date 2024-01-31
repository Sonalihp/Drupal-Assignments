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

/* modules/contrib/commerce_wishlist/templates/commerce-wishlist-item-details.html.twig */
class __TwigTemplate_a23b5b70127146d48424588c1d03cc8a extends \Twig\Template
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
        // line 15
        echo "<div id=\"wishlist-item-details-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["wishlist_item_entity"] ?? null), "id", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "\">
  ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["wishlist_item_entity"] ?? null), "getComment", [], "any", false, false, true, 16)) {
            // line 17
            echo "    <div class=\"wishlist-item__comment\">
      ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["wishlist_item_entity"] ?? null), "getComment", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 21
        echo "  <div class=\"wishlist-item__quantity\">
    ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Quantity:"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["wishlist_item_entity"] ?? null), "getQuantity", [], "any", false, false, true, 22), 22, $this->source)), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce_wishlist/templates/commerce-wishlist-item-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 22,  55 => 21,  49 => 18,  46 => 17,  44 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/commerce_wishlist/templates/commerce-wishlist-item-details.html.twig", "/var/www/html/web/modules/contrib/commerce_wishlist/templates/commerce-wishlist-item-details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16);
        static $filters = array("escape" => 15, "t" => 22, "number_format" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'number_format'],
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
