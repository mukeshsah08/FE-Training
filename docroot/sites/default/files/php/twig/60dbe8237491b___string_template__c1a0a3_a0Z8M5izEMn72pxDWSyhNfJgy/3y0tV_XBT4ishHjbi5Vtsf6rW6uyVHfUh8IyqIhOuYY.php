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

/* __string_template__c1a0a3921db8b68ee482c0f7bfded9061f43e1b49bb0b2b4f70ffe5c5d346e60 */
class __TwigTemplate_acad8f44bbcb4d434cd939519630ed199521dbaa24c84bacf2a15e7212f64e7e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 2];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
        // line 1
        echo "<div class=\"why-box box\">
  <i class=\"logo\">";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_logo"] ?? null)), "html", null, true);
        echo "</i>
  <h3>";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["info"] ?? null)), "html", null, true);
        echo "</h3>
  <div class =\"description\">";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "</div>
</div>
<a class=\"read-more\" href=\"#\">Read More</a>";
    }

    public function getTemplateName()
    {
        return "__string_template__c1a0a3921db8b68ee482c0f7bfded9061f43e1b49bb0b2b4f70ffe5c5d346e60";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 4,  62 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"why-box box\">
  <i class=\"logo\">{{ field_logo }}</i>
  <h3>{{ info }}</h3>
  <div class =\"description\">{{ body }}</div>
</div>
<a class=\"read-more\" href=\"#\">Read More</a>", "__string_template__c1a0a3921db8b68ee482c0f7bfded9061f43e1b49bb0b2b4f70ffe5c5d346e60", "");
    }
}
