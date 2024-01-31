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

/* themes/contrib/sshop/templates/system/page.html.twig */
class __TwigTemplate_a60e636e7a929c24e74753ca0d6602f1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 54), "fluid_container", [], "any", false, false, true, 54)) ? ("container-fluid") : ("container"));
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 56) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 56))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 94
        echo "
";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 160
        echo "

";
        // line 162
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 162) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 162)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 162)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 162))) {
            // line 163
            echo "  <div class=\"footer-widgets\">
    <div class=\"";
            // line 164
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 164, $this->source), "html", null, true);
            echo "\">
      <div class=\"row\">
        ";
            // line 166
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 166)) {
                // line 167
                echo "          <div class=\"footer-first col-md-4 col-sm-6\">
            ";
                // line 168
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 171
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 171)) {
                // line 172
                echo "          <div class=\"footer-second col-md-2 col-sm-6\">
            ";
                // line 173
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 176
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 176)) {
                // line 177
                echo "          <div class=\"footer-third col-md-2 col-sm-6\">
            ";
                // line 178
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 181
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 181)) {
                // line 182
                echo "          <div class=\"footer-first col-md-4 col-sm-6\">
            ";
                // line 183
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 186
            echo "      </div>
    </div>
  </div>
";
        }
        // line 190
        echo "

";
        // line 192
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 57
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["theme"] ?? null), "settings", [], "any", false, false, true, 61), "navbar_inverse", [], "any", false, false, true, 61)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "navbar_position", [], "any", false, false, true, 62)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "navbar_position", [], "any", false, false, true, 62), 62, $this->source)))) : (($context["container"] ?? null)))];
        // line 65
        echo "    <header";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 65), 65, $this->source), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 66
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 66)) {
            // line 67
            echo "        <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 67, $this->source), "html", null, true);
            echo "\">
      ";
        }
        // line 69
        echo "      <div class=\"navbar-header\">
        ";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "
        ";
        // line 72
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 72)) {
            // line 73
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 80
        echo "      </div>

      ";
        // line 83
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 83)) {
            // line 84
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 88
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 88)) {
            // line 89
            echo "        </div>
      ";
        }
        // line 91
        echo "    </header>
  ";
    }

    // line 96
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 97, $this->source), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">
      ";
        // line 100
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 100)) {
            // line 101
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 106
            echo "      ";
        }
        // line 107
        echo "
      ";
        // line 109
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 109)) {
            // line 110
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 115
            echo "      ";
        }
        // line 116
        echo "
      ";
        // line 118
        echo "      ";
        // line 119
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 120
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 120) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 120))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 121
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 121) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 121)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 122
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 122) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 122)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 123
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 123)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 123)))) ? ("col-sm-12") : (""))];
        // line 126
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 126), 126, $this->source), "html", null, true);
        echo ">

        ";
        // line 129
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 129)) {
            // line 130
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 133
            echo "        ";
        }
        // line 134
        echo "
        ";
        // line 136
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 136)) {
            // line 137
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 140
            echo "        ";
        }
        // line 141
        echo "
        ";
        // line 143
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 147
        echo "      </section>

      ";
        // line 150
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 150)) {
            // line 151
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 156
            echo "      ";
        }
        // line 157
        echo "    </div>
  </div>
";
    }

    // line 101
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 110
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 130
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 137
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 143
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "          <a id=\"main-content\"></a>
          ";
        // line 145
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 151
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 153
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 192
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 193
        echo "  <footer class=\"footer\" role=\"contentinfo\">
    <div class=\"footer-inner ";
        // line 194
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 194, $this->source), "html", null, true);
        echo "\">
      ";
        // line 195
        if (($context["copyright_text"] ?? null)) {
            // line 196
            echo "        <div class=\"footer-copyright\">
          ";
            // line 197
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null), 197, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 200
        echo "      <div class=\"footer-blocks\">
        ";
        // line 201
        if (($context["theme_credits"] ?? null)) {
            // line 202
            echo "          <div class=\"theme-credits-info\">
            ";
            // line 203
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_credits"] ?? null), 203, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 206
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 206)) {
            // line 207
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 209
        echo "      </div>

    </div>
  </footer>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/sshop/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 209,  419 => 207,  416 => 206,  410 => 203,  407 => 202,  405 => 201,  402 => 200,  396 => 197,  393 => 196,  391 => 195,  387 => 194,  384 => 193,  380 => 192,  373 => 153,  370 => 152,  366 => 151,  360 => 145,  357 => 144,  353 => 143,  346 => 138,  342 => 137,  335 => 131,  331 => 130,  324 => 112,  321 => 111,  317 => 110,  310 => 103,  307 => 102,  303 => 101,  297 => 157,  294 => 156,  291 => 151,  288 => 150,  284 => 147,  281 => 143,  278 => 141,  275 => 140,  272 => 137,  269 => 136,  266 => 134,  263 => 133,  260 => 130,  257 => 129,  251 => 126,  249 => 123,  248 => 122,  247 => 121,  246 => 120,  245 => 119,  243 => 118,  240 => 116,  237 => 115,  234 => 110,  231 => 109,  228 => 107,  225 => 106,  222 => 101,  219 => 100,  213 => 97,  209 => 96,  204 => 91,  200 => 89,  197 => 88,  191 => 85,  188 => 84,  185 => 83,  181 => 80,  172 => 74,  169 => 73,  166 => 72,  162 => 70,  159 => 69,  153 => 67,  151 => 66,  146 => 65,  144 => 62,  143 => 61,  142 => 59,  140 => 58,  136 => 57,  132 => 192,  128 => 190,  122 => 186,  116 => 183,  113 => 182,  110 => 181,  104 => 178,  101 => 177,  98 => 176,  92 => 173,  89 => 172,  86 => 171,  80 => 168,  77 => 167,  75 => 166,  70 => 164,  67 => 163,  65 => 162,  61 => 160,  59 => 96,  56 => 94,  52 => 57,  50 => 56,  48 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/sshop/templates/system/page.html.twig", "/var/www/html/web/themes/contrib/sshop/templates/system/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 54, "if" => 56, "block" => 57);
        static $filters = array("escape" => 164, "clean_class" => 62, "t" => 74);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'clean_class', 't'],
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
