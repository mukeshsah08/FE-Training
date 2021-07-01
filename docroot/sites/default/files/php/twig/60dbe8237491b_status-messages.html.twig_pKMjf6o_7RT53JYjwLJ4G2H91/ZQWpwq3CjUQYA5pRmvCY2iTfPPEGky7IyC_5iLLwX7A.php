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

/* core/themes/claro/templates/misc/status-messages.html.twig */
class __TwigTemplate_56288807d887b08da6e823d5a1231a04f0ab2055adf04fdc52672ea6d1769a44 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 26, "set" => 28, "if" => 42];
        $filters = ["escape" => 41, "without" => 41, "length" => 55, "first" => 62];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
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
        // line 25
        echo "<div data-drupal-messages class=\"messages-list\">
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "  ";
            // line 28
            $context["classes"] = [0 => "messages-list__item", 1 => "messages", 2 => ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 31
$context["type"]))];
            // line 34
            echo "  ";
            // line 35
            $context["is_message_with_title"] = $this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array");
            // line 37
            echo "  ";
            // line 38
            $context["is_message_with_icon"] = twig_in_filter($context["type"], [0 => "error", 1 => "status", 2 => "warning"]);
            // line 40
            echo "
  <div role=\"contentinfo\" aria-labelledby=\"";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_ids"] ?? null), $context["type"], [], "array")), "html", null, true);
            echo "\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "role", "aria-label"), "html", null, true);
            echo ">
    ";
            // line 42
            if (($context["type"] == "error")) {
                // line 43
                echo "      <div role=\"alert\">
    ";
            }
            // line 45
            echo "      ";
            if ((($context["is_message_with_title"] ?? null) || ($context["is_message_with_icon"] ?? null))) {
                // line 46
                echo "        <div class=\"messages__header\">
          ";
                // line 47
                if (($context["is_message_with_title"] ?? null)) {
                    // line 48
                    echo "            <h2 id=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_ids"] ?? null), $context["type"], [], "array")), "html", null, true);
                    echo "\" class=\"messages__title\">
              ";
                    // line 49
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                    echo "
            </h2>
          ";
                }
                // line 52
                echo "        </div>
      ";
            }
            // line 54
            echo "      <div class=\"messages__content\">
        ";
            // line 55
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 56
                echo "          <ul class=\"messages__list\">
            ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 58
                    echo "              <li class=\"messages__item\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "          </ul>
        ";
            } else {
                // line 62
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"])), "html", null, true);
                echo "
        ";
            }
            // line 64
            echo "      </div>
    ";
            // line 65
            if (($context["type"] == "error")) {
                // line 66
                echo "      </div>
    ";
            }
            // line 68
            echo "  </div>
  ";
            // line 70
            echo "  ";
            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 72,  156 => 70,  153 => 68,  149 => 66,  147 => 65,  144 => 64,  138 => 62,  134 => 60,  125 => 58,  121 => 57,  118 => 56,  116 => 55,  113 => 54,  109 => 52,  103 => 49,  98 => 48,  96 => 47,  93 => 46,  90 => 45,  86 => 43,  84 => 42,  78 => 41,  75 => 40,  73 => 38,  71 => 37,  69 => 35,  67 => 34,  65 => 31,  64 => 28,  62 => 27,  58 => 26,  55 => 25,);
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
 * Theme override for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 * - title_ids: A list of unique ids keyed by message type.
 *
 * @see claro_preprocess_status_messages().
 */
#}
<div data-drupal-messages class=\"messages-list\">
{% for type, messages in message_list %}
  {%
    set classes = [
      'messages-list__item',
      'messages',
      'messages--' ~ type,
    ]
  %}
  {%
    set is_message_with_title = status_headings[type]
  %}
  {%
    set is_message_with_icon = type in ['error', 'status', 'warning']
  %}

  <div role=\"contentinfo\" aria-labelledby=\"{{ title_ids[type] }}\"{{ attributes.addClass(classes)|without('role', 'aria-label') }}>
    {% if type == 'error' %}
      <div role=\"alert\">
    {% endif %}
      {% if is_message_with_title or is_message_with_icon %}
        <div class=\"messages__header\">
          {% if is_message_with_title %}
            <h2 id=\"{{ title_ids[type] }}\" class=\"messages__title\">
              {{ status_headings[type] }}
            </h2>
          {% endif %}
        </div>
      {% endif %}
      <div class=\"messages__content\">
        {% if messages|length > 1 %}
          <ul class=\"messages__list\">
            {% for message in messages %}
              <li class=\"messages__item\">{{ message }}</li>
            {% endfor %}
          </ul>
        {% else %}
          {{ messages|first }}
        {% endif %}
      </div>
    {% if type == 'error' %}
      </div>
    {% endif %}
  </div>
  {# Remove type specific classes. #}
  {% set attributes = attributes.removeClass(classes) %}
{% endfor %}
</div>
", "core/themes/claro/templates/misc/status-messages.html.twig", "/var/www/fe-training/docroot/core/themes/claro/templates/misc/status-messages.html.twig");
    }
}
