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

/* themes/custom/fetraining/templates/organism/block--views-block--check-our-services-block-1.html.twig */
class __TwigTemplate_0e57adedebc4aa0b6312dd7f26b19a41cbb43e7ea6d1f355812ecc1432f929a4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 29, "if" => 40, "block" => 51];
        $filters = ["clean_class" => 31, "escape" => 36];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
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
        // line 29
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 31
($context["configuration"] ?? null), "provider", [])))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 32
($context["plugin_id"] ?? null)))), 3 => "check-services-listing-block"];
        // line 36
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <div class=\"check-services-listing-wrapper\">
    <div class=\"check-services-listing container\">
      ";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
      ";
        // line 40
        if (($context["label"] ?? null)) {
            // line 41
            echo "        <div class=\"small-label\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</div>
        <h2";
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h2>
      ";
        }
        // line 44
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
      <div class=\"check-services-filter col-lg-12 d-flex justify-content-center\">
          <div class=\"filter-button filter-active\" data-filter=\"*\">All</div>
          <div class=\"filter-button\"  data-filter=\".filter-app\">App</div>
          <div class=\"filter-button\" data-filter=\".filter-card\">Card</div>
          <div class=\"filter-button\" data-filter=\".filter-web\">Web</div>
      </div>
      ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "    </div>
  </div>
</div>
";
    }

    // line 51
    public function block_content($context, array $blocks = [])
    {
        // line 52
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/fetraining/templates/organism/block--views-block--check-our-services-block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 52,  105 => 51,  98 => 54,  96 => 51,  85 => 44,  78 => 42,  73 => 41,  71 => 40,  67 => 39,  60 => 36,  58 => 32,  57 => 31,  56 => 29,);
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
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
    'check-services-listing-block',
  ]
%}
<div{{ attributes.addClass(classes) }}>
  <div class=\"check-services-listing-wrapper\">
    <div class=\"check-services-listing container\">
      {{ title_prefix }}
      {% if label %}
        <div class=\"small-label\">{{ label }}</div>
        <h2{{ title_attributes }}>{{ label }}</h2>
      {% endif %}
      {{ title_suffix }}
      <div class=\"check-services-filter col-lg-12 d-flex justify-content-center\">
          <div class=\"filter-button filter-active\" data-filter=\"*\">All</div>
          <div class=\"filter-button\"  data-filter=\".filter-app\">App</div>
          <div class=\"filter-button\" data-filter=\".filter-card\">Card</div>
          <div class=\"filter-button\" data-filter=\".filter-web\">Web</div>
      </div>
      {% block content %}
        {{ content }}
      {% endblock %}
    </div>
  </div>
</div>
", "themes/custom/fetraining/templates/organism/block--views-block--check-our-services-block-1.html.twig", "/var/www/fe-training/docroot/themes/custom/fetraining/templates/organism/block--views-block--check-our-services-block-1.html.twig");
    }
}
