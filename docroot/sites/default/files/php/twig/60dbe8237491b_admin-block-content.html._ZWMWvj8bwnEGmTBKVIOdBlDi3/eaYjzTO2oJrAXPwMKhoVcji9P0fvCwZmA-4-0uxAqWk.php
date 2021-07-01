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

/* core/themes/claro/templates/admin/admin-block-content.html.twig */
class __TwigTemplate_d672c77642bfe9525dfdfe7d78b3a79af1c2e4920b64b85595d249fea5be2c45 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 19, "if" => 23, "for" => 25];
        $filters = ["escape" => 24];
        $functions = ["create_attribute" => 26];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                ['create_attribute']
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
        // line 19
        $context["item_classes"] = [0 => "admin-item"];
        // line 23
        if (($context["content"] ?? null)) {
            // line 24
            echo "  <dl";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "admin-list"], "method")), "html", null, true);
            echo ">
    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 26
                echo "      <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(["class" => ($context["item_classes"] ?? null)]), "html", null, true);
                echo ">
        <dt class=\"admin-item__title\">";
                // line 27
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "link", [])), "html", null, true);
                echo "</dt>
        ";
                // line 28
                if ($this->getAttribute($context["item"], "description", [])) {
                    // line 29
                    echo "          <dd class=\"admin-item__description\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "description", [])), "html", null, true);
                    echo "</dd>
        ";
                }
                // line 31
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "  </dl>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/admin/admin-block-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  85 => 31,  79 => 29,  77 => 28,  73 => 27,  68 => 26,  64 => 25,  59 => 24,  57 => 23,  55 => 19,);
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
 * Claro's theme implementation for the content of an administrative block.
 *
 * Available variables:
 * - content: List of administrative menu items. Each menu item contains:
 *   - link: Link to the admin section.
 *   - title: Short name of the section.
 *   - description: Description of the administrative menu item.
 * - attributes: HTML attributes to be added to the element.
 * - compact: Boolean indicating whether compact mode is turned on or not.
 *
 * @see template_preprocess_admin_block_content()
 * @see claro_preprocess_admin_block_content()
 */
#}
{%
  set item_classes = [
    'admin-item',
  ]
%}
{% if content %}
  <dl{{ attributes.addClass('admin-list') }}>
    {% for item in content %}
      <div{{ create_attribute({class: item_classes}) }}>
        <dt class=\"admin-item__title\">{{ item.link }}</dt>
        {% if item.description %}
          <dd class=\"admin-item__description\">{{ item.description }}</dd>
        {% endif %}
      </div>
    {% endfor %}
  </dl>
{% endif %}
", "core/themes/claro/templates/admin/admin-block-content.html.twig", "/var/www/fe-training/docroot/core/themes/claro/templates/admin/admin-block-content.html.twig");
    }
}
