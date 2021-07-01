<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/claro/templates/pager.html.twig */
class __TwigTemplate_eb5a92192aa1229b1bef3b5db153972ae04f3f96ab960c351cc5c020935f3091 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 37, "spaceless" => 43, "for" => 75, "set" => 79];
        $filters = ["escape" => 38, "t" => 39, "without" => 45, "replace" => 48, "default" => 48];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'spaceless', 'for', 'set'],
                ['escape', 't', 'without', 'replace', 'default'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 37
        if (($context["items"] ?? null)) {
            // line 38
            echo "  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null)), "html", null, true);
            echo "\">
    <h4 id=\"";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null)), "html", null, true);
            echo "\" class=\"visually-hidden\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 42
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "first", [])) {
                // line 43
                echo "        ";
                ob_start();
                // line 44
                echo "        <li class=\"pager__item pager__item--action pager__item--first\">
          <a href=\"";
                // line 45
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "href", [])), "html", null, true);
                echo "\" class=\"pager__link pager__link--action-link\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "attributes", [])), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 46
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("First page"));
                echo "</span>
            <span class=\"pager__item-title pager__item-title--backwards\" aria-hidden=\"true\">
              ";
                // line 48
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter((($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", [], "any", false, true), "text", [])), t("First"))) : (t("First"))), ["«" => ""]), "html", null, true);
                echo "
            </span>
          </a>
        </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 53
                echo "      ";
            }
            // line 54
            echo "
      ";
            // line 56
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "previous", [])) {
                // line 57
                echo "        ";
                ob_start();
                // line 58
                echo "        <li class=\"pager__item pager__item--action pager__item--previous\">
          <a href=\"";
                // line 59
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "href", [])), "html", null, true);
                echo "\" class=\"pager__link pager__link--action-link\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "attributes", [])), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 60
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous page"));
                echo "</span>
            <span class=\"pager__item-title pager__item-title--backwards\" aria-hidden=\"true\">
              ";
                // line 62
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter((($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [])), t("Previous"))) : (t("Previous"))), ["‹" => ""]), "html", null, true);
                echo "
            </span>
          </a>
        </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 67
                echo "      ";
            }
            // line 68
            echo "
      ";
            // line 70
            echo "      ";
            if ($this->getAttribute(($context["ellipses"] ?? null), "previous", [])) {
                // line 71
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 73
            echo "
      ";
            // line 75
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["items"] ?? null), "pages", []));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 76
                echo "        ";
                ob_start();
                // line 77
                echo "        <li class=\"pager__item";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" pager__item--active") : ("")));
                echo " pager__item--number\">
          ";
                // line 78
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 79
                    echo "            ";
                    $context["title"] = t("Current page");
                    // line 80
                    echo "          ";
                } else {
                    // line 81
                    echo "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 82
                    echo "          ";
                }
                // line 83
                echo "          <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "href", [])), "html", null, true);
                echo "\" class=\"pager__link";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : ("")));
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "href", "title", "class"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">
              ";
                // line 85
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>
            ";
                // line 87
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                echo "
          </a>
        </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 91
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "
      ";
            // line 94
            echo "      ";
            if ($this->getAttribute(($context["ellipses"] ?? null), "next", [])) {
                // line 95
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 97
            echo "
      ";
            // line 99
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "next", [])) {
                // line 100
                echo "        ";
                ob_start();
                // line 101
                echo "        <li class=\"pager__item pager__item--action pager__item--next\">
          <a href=\"";
                // line 102
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "href", [])), "html", null, true);
                echo "\" class=\"pager__link pager__link--action-link\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "attributes", [])), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 103
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next page"));
                echo "</span>
            <span class=\"pager__item-title pager__item-title--forward\" aria-hidden=\"true\">
              ";
                // line 105
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter((($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [])), t("Next"))) : (t("Next"))), ["›" => ""]), "html", null, true);
                echo "
            </span>
          </a>
        </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 110
                echo "      ";
            }
            // line 111
            echo "
      ";
            // line 113
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "last", [])) {
                // line 114
                echo "        ";
                ob_start();
                // line 115
                echo "        <li class=\"pager__item pager__item--action pager__item--last\">
          <a href=\"";
                // line 116
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "href", [])), "html", null, true);
                echo "\" class=\"pager__link pager__link--action-link\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "attributes", [])), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 117
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last page"));
                echo "</span>
            <span class=\"pager__item-title pager__item-title--forward\" aria-hidden=\"true\">
              ";
                // line 119
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter((($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", [], "any", false, true), "text", [])), t("Last"))) : (t("Last"))), ["»" => ""]), "html", null, true);
                echo "
            </span>
          </a>
        </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 124
                echo "      ";
            }
            // line 125
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 125,  287 => 124,  279 => 119,  274 => 117,  266 => 116,  263 => 115,  260 => 114,  257 => 113,  254 => 111,  251 => 110,  243 => 105,  238 => 103,  230 => 102,  227 => 101,  224 => 100,  221 => 99,  218 => 97,  214 => 95,  211 => 94,  208 => 92,  202 => 91,  195 => 87,  190 => 85,  178 => 83,  175 => 82,  172 => 81,  169 => 80,  166 => 79,  164 => 78,  159 => 77,  156 => 76,  151 => 75,  148 => 73,  144 => 71,  141 => 70,  138 => 68,  135 => 67,  127 => 62,  122 => 60,  114 => 59,  111 => 58,  108 => 57,  105 => 56,  102 => 54,  99 => 53,  91 => 48,  86 => 46,  78 => 45,  75 => 44,  72 => 43,  69 => 42,  62 => 39,  57 => 38,  55 => 37,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a pager.
 *
 * Available variables:
 * - heading_id: Pagination heading ID.
 * - items: List of pager items.
 *   The list is keyed by the following elements:
 *   - first: Item for the first page; not present on the first page of results.
 *   - previous: Item for the previous page; not present on the first page
 *     of results.
 *   - next: Item for the next page; not present on the last page of results.
 *   - last: Item for the last page; not present on the last page of results.
 *   - pages: List of pages, keyed by page number.
 *   Sub-sub elements:
 *   items.first, items.previous, items.next, items.last, and each item inside
 *   items.pages contain the following elements:
 *   - href: URL with appropriate query parameters for the item.
 *   - attributes: A keyed list of HTML attributes for the item.
 *   - text: The visible text used for the item link, such as \"‹ Previous\"
 *     or \"Next ›\".
 * - current: The page number of the current page.
 * - ellipses: If there are more pages than the quantity allows, then an
 *   ellipsis before or after the listed pages may be present.
 *   - previous: Present if the currently visible list of pages does not start
 *     at the first page.
 *   - next: Present if the visible list of pages ends before the last page.
 *
 * @see template_preprocess_pager()
 *
 * @todo review all uses of the replace() filter below in
 *   https://www.drupal.org/node/3053707 as the behavior it addresses will
 *   likely change when that issue is completed.
 */
#}
{% if items %}
  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"{{ heading_id }}\">
    <h4 id=\"{{ heading_id }}\" class=\"visually-hidden\">{{ 'Pagination'|t }}</h4>
    <ul class=\"pager__items js-pager__items\">
      {# Print first item if we are not on the first page. #}
      {% if items.first %}
        {% spaceless %}
        <li class=\"pager__item pager__item--action pager__item--first\">
          <a href=\"{{ items.first.href }}\" class=\"pager__link pager__link--action-link\" title=\"{{ 'Go to first page'|t }}\"{{ items.first.attributes|without('href', 'title') }}>
            <span class=\"visually-hidden\">{{ 'First page'|t }}</span>
            <span class=\"pager__item-title pager__item-title--backwards\" aria-hidden=\"true\">
              {{ items.first.text|default('First'|t)|replace({'«': ''}) }}
            </span>
          </a>
        </li>
        {% endspaceless %}
      {% endif %}

      {# Print previous item if we are not on the first page. #}
      {% if items.previous %}
        {% spaceless %}
        <li class=\"pager__item pager__item--action pager__item--previous\">
          <a href=\"{{ items.previous.href }}\" class=\"pager__link pager__link--action-link\" title=\"{{ 'Go to previous page'|t }}\" rel=\"prev\"{{ items.previous.attributes|without('href', 'title', 'rel') }}>
            <span class=\"visually-hidden\">{{ 'Previous page'|t }}</span>
            <span class=\"pager__item-title pager__item-title--backwards\" aria-hidden=\"true\">
              {{ items.previous.text|default('Previous'|t)|replace({'‹': ''}) }}
            </span>
          </a>
        </li>
        {% endspaceless %}
      {% endif %}

      {# Add an ellipsis if there are further previous pages. #}
      {% if ellipses.previous %}
        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      {% endif %}

      {# Now generate the actual pager piece. #}
      {% for key, item in items.pages %}
        {% spaceless %}
        <li class=\"pager__item{{ current == key ? ' pager__item--active' : '' }} pager__item--number\">
          {% if current == key %}
            {% set title = 'Current page'|t %}
          {% else %}
            {% set title = 'Go to page @key'|t({'@key': key}) %}
          {% endif %}
          <a href=\"{{ item.href }}\" class=\"pager__link{{ current == key ? ' is-active' }}\" title=\"{{ title }}\"{{ item.attributes|without('href', 'title', 'class') }}>
            <span class=\"visually-hidden\">
              {{ current == key ? 'Current page'|t : 'Page'|t }}
            </span>
            {{ key }}
          </a>
        </li>
        {% endspaceless %}
      {% endfor %}

      {# Add an ellipsis if there are further next pages. #}
      {% if ellipses.next %}
        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      {% endif %}

      {# Print next item if we are not on the last page. #}
      {% if items.next %}
        {% spaceless %}
        <li class=\"pager__item pager__item--action pager__item--next\">
          <a href=\"{{ items.next.href }}\" class=\"pager__link pager__link--action-link\" title=\"{{ 'Go to next page'|t }}\" rel=\"next\"{{ items.next.attributes|without('href', 'title', 'rel') }}>
            <span class=\"visually-hidden\">{{ 'Next page'|t }}</span>
            <span class=\"pager__item-title pager__item-title--forward\" aria-hidden=\"true\">
              {{ items.next.text|default('Next'|t)|replace({'›': ''}) }}
            </span>
          </a>
        </li>
        {% endspaceless %}
      {% endif %}

      {# Print last item if we are not on the last page. #}
      {% if items.last %}
        {% spaceless %}
        <li class=\"pager__item pager__item--action pager__item--last\">
          <a href=\"{{ items.last.href }}\" class=\"pager__link pager__link--action-link\" title=\"{{ 'Go to last page'|t }}\"{{ items.last.attributes|without('href', 'title') }}>
            <span class=\"visually-hidden\">{{ 'Last page'|t }}</span>
            <span class=\"pager__item-title pager__item-title--forward\" aria-hidden=\"true\">
              {{ items.last.text|default('Last'|t)|replace({'»': ''}) }}
            </span>
          </a>
        </li>
        {% endspaceless %}
      {% endif %}
    </ul>
  </nav>
{% endif %}
", "core/themes/claro/templates/pager.html.twig", "/var/www/fe-training/docroot/core/themes/claro/templates/pager.html.twig");
    }
}
