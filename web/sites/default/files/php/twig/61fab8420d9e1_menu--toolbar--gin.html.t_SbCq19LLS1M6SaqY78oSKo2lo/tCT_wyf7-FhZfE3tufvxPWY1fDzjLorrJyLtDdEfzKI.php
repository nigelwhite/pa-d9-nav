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

/* themes/contrib/gin/templates/navigation/menu--toolbar--gin.html.twig */
class __TwigTemplate_7b053e3980fb8f77ce21dd6130a858ba5900af096deac61de17dff600f3cf79c extends \Twig\Template
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
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, false, ($context["menu_name"] ?? null), ($context["icon_default"] ?? null), ($context["icon_path"] ?? null)], 29, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 31
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__parent__ = null, $__menu_name__ = null, $__icon_default__ = null, $__icon_path__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "parent" => $__parent__,
            "menu_name" => $__menu_name__,
            "icon_default" => $__icon_default__,
            "icon_path" => $__icon_path__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 32
            echo "  ";
            $macros["menus"] = $this;
            // line 33
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 34
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "toolbar-menu"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 37
                    echo "      <ul class=\"toolbar-menu\">
    ";
                }
                // line 39
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
                    // line 40
                    echo "      ";
                    // line 41
                    $context["classes"] = [0 => "menu-item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 43
$context["item"], "is_expanded", [], "any", false, false, true, 43)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 44
$context["item"], "is_collapsed", [], "any", false, false, true, 44)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 45
$context["item"], "in_active_trail", [], "any", false, false, true, 45)) ? ("menu-item--active-trail") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 46
$context["item"], "gin_id", [], "any", false, false, true, 46)) ? (("menu-item__" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "gin_id", [], "any", false, false, true, 46), 46, $this->source))) : (""))];
                    // line 49
                    echo "
      ";
                    // line 51
                    echo "        ";
                    // line 52
                    echo "        ";
                    if ((((($context["menu_level"] ?? null) == 0) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 52) == 1)) && (twig_get_attribute($this->env, $this->source, $context["item"], "gin_id", [], "any", false, false, true, 52) != "admin_toolbar_tools-help"))) {
                        // line 53
                        echo "          <li class=\"menu-item menu-item--expanded menu-item__tools\">
            ";
                        // line 54
                        if (((($context["icon_default"] ?? null) == false) && (($context["icon_path"] ?? null) != ""))) {
                            // line 55
                            echo "              <a href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
                            echo "\" class=\"toolbar-logo\" data-drupal-link-system-path=\"<front>\">
                <img src=\"";
                            // line 56
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["icon_path"] ?? null), 56, $this->source)]), "html", null, true);
                            echo "\" class=\"toolbar-icon-home\" />
              </a>
            ";
                        } else {
                            // line 59
                            echo "              <a href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
                            echo "\" class=\"toolbar-icon toolbar-icon-admin-toolbar-tools-help toolbar-icon-default\" data-drupal-link-system-path=\"<front>\">
                ";
                            // line 60
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                            echo "
              </a>
            ";
                        }
                        // line 63
                        echo "          </li>
        ";
                    }
                    // line 65
                    echo "
        ";
                    // line 66
                    if (((($context["menu_level"] ?? null) == 0) && (twig_get_attribute($this->env, $this->source, $context["item"], "gin_id", [], "any", false, false, true, 66) == "help-main"))) {
                        // line 67
                        echo "          <li class=\"menu-item menu-item__spacer menu-item--no-link\"></li>
        ";
                    }
                    // line 69
                    echo "
        ";
                    // line 71
                    echo "        ";
                    if (((($context["menu_level"] ?? null) == 1) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 71) == 1))) {
                        // line 72
                        echo "          <li class=\"menu-item-title\">
            <h2 class=\"toolbar-menu__title\">
              <a href=\"";
                        // line 74
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                        echo "</a>
            </h2>
          </li>
          <li class=\"menu-item\">
            <a href=\"";
                        // line 78
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                        echo "\" class=\"toolbar-icon\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Overview"));
                        echo "</a>
          </li>
        ";
                    } elseif (((                    // line 80
($context["menu_level"] ?? null) > 1) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 80) == 1))) {
                        // line 81
                        echo "          <li class=\"menu-item-title\">
            <h3 class=\"toolbar-menu__sub-title\">
              <a href=\"";
                        // line 83
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                        echo "</a>
            </h3>
          </li>
          <li class=\"menu-item\">
            <a href=\"";
                        // line 87
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                        echo "\" class=\"toolbar-icon\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Overview"));
                        echo "</a>
          </li>
        ";
                    }
                    // line 90
                    echo "      ";
                    // line 91
                    echo "
      <li";
                    // line 92
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 92), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 92), 92, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 93
                    if ((((twig_get_attribute($this->env, $this->source, $context["item"], "gin_id", [], "any", false, false, true, 93) == "admin_toolbar_tools-help") && (($context["icon_default"] ?? null) == false)) && (($context["icon_path"] ?? null) != ""))) {
                        // line 94
                        echo "          <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
                        echo "\" class=\"toolbar-logo\" data-drupal-link-system-path=\"<front>\">
            <img src=\"";
                        // line 95
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["icon_path"] ?? null), 95, $this->source)]), "html", null, true);
                        echo "\" class=\"toolbar-icon-home\" />
          </a>
        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 97
$context["item"], "gin_id", [], "any", false, false, true, 97) == "admin_toolbar_tools-help")) {
                        // line 98
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 98), 98, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 98), 98, $this->source), ["class" => [0 => "toolbar-icon-default"]]), "html", null, true);
                        echo "
        ";
                    } else {
                        // line 100
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 100), 100, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 100), 100, $this->source)), "html", null, true);
                        echo "
        ";
                    }
                    // line 102
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 102)) {
                        // line 103
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 103), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), $context["item"], ($context["menu_name"] ?? null)], 103, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 105
                    echo "      </li>
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
                echo "    </ul>
  ";
            }
            // line 109
            echo "
  ";
            // line 110
            if ((($context["menu_level"] ?? null) == 0)) {
                // line 111
                echo "    ";
                // line 112
                echo "    <a href=\"#\" class=\"toolbar-menu__trigger trigger\" role=\"button\" aria-pressed=\"false\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close"));
                echo "</a>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/navigation/menu--toolbar--gin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 112,  280 => 111,  278 => 110,  275 => 109,  271 => 107,  256 => 105,  250 => 103,  247 => 102,  241 => 100,  235 => 98,  233 => 97,  228 => 95,  223 => 94,  221 => 93,  217 => 92,  214 => 91,  212 => 90,  204 => 87,  195 => 83,  191 => 81,  189 => 80,  182 => 78,  173 => 74,  169 => 72,  166 => 71,  163 => 69,  159 => 67,  157 => 66,  154 => 65,  150 => 63,  144 => 60,  139 => 59,  133 => 56,  128 => 55,  126 => 54,  123 => 53,  120 => 52,  118 => 51,  115 => 49,  113 => 46,  112 => 45,  111 => 44,  110 => 43,  109 => 41,  107 => 40,  89 => 39,  85 => 37,  79 => 35,  76 => 34,  73 => 33,  70 => 32,  51 => 31,  44 => 29,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/navigation/menu--toolbar--gin.html.twig", "/var/www/html/web/themes/contrib/gin/templates/navigation/menu--toolbar--gin.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 31, "if" => 33, "for" => 39, "set" => 41);
        static $filters = array("escape" => 35, "t" => 60);
        static $functions = array("url" => 55, "file_url" => 56, "link" => 98);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 't'],
                ['url', 'file_url', 'link']
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
