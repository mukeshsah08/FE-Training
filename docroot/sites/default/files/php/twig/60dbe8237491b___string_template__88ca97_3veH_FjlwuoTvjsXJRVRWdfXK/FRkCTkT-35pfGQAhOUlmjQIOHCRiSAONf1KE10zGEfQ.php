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

/* __string_template__88ca97f64ad033081f45fe7fc3cc481606384bdecb3bca62f9414051ccf6823a */
class __TwigTemplate_458b5ef7fbe0e6afcd0c06c72338a47a0f3720d329be048c7dd11c6b0a3d4aca extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 3];
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
        echo "<div class=\"testimonial-wrapper\">
  <div class=\"testimonial-card\">
     <div class=\"image\">";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image"] ?? null)), "html", null, true);
        echo "</div>
     <div class=\"name\">";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["info"] ?? null)), "html", null, true);
        echo "</div>
      <div class=\"designation\">";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_designation"] ?? null)), "html", null, true);
        echo "</div>
      <div class=\"comment\">
          ";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "
      </div>
   </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__88ca97f64ad033081f45fe7fc3cc481606384bdecb3bca62f9414051ccf6823a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 7,  67 => 5,  63 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"testimonial-wrapper\">
  <div class=\"testimonial-card\">
     <div class=\"image\">{{ field_image }}</div>
     <div class=\"name\">{{ info }}</div>
      <div class=\"designation\">{{ field_designation }}</div>
      <div class=\"comment\">
          {{ body }}
      </div>
   </div>
</div>", "__string_template__88ca97f64ad033081f45fe7fc3cc481606384bdecb3bca62f9414051ccf6823a", "");
    }
}
