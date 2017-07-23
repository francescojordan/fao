<?php

/* :default:success.html.twig */
class __TwigTemplate_6aa0d5a92a55e20df739e7942c04703f818f8cea74efa0d6569fea25239519be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("foundationT.html.twig", ":default:success.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "foundationT.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fbbe164f515c4dc7c928e326c60b12bbf586e0423de0e8d2825a67a10b5a231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fbbe164f515c4dc7c928e326c60b12bbf586e0423de0e8d2825a67a10b5a231->enter($__internal_3fbbe164f515c4dc7c928e326c60b12bbf586e0423de0e8d2825a67a10b5a231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fbbe164f515c4dc7c928e326c60b12bbf586e0423de0e8d2825a67a10b5a231->leave($__internal_3fbbe164f515c4dc7c928e326c60b12bbf586e0423de0e8d2825a67a10b5a231_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b38649d2d801afd3d8b3636f2ee8951046a1b4bc3274c5620fb9098fa8ee48f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38649d2d801afd3d8b3636f2ee8951046a1b4bc3274c5620fb9098fa8ee48f4->enter($__internal_b38649d2d801afd3d8b3636f2ee8951046a1b4bc3274c5620fb9098fa8ee48f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"row\">
  <p>SUCCESSO</p>
</div>
";
        
        $__internal_b38649d2d801afd3d8b3636f2ee8951046a1b4bc3274c5620fb9098fa8ee48f4->leave($__internal_b38649d2d801afd3d8b3636f2ee8951046a1b4bc3274c5620fb9098fa8ee48f4_prof);

    }

    public function getTemplateName()
    {
        return ":default:success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'foundationT.html.twig' %}

{% block body %}
  <div class=\"row\">
  <p>SUCCESSO</p>
</div>
{% endblock %}


", ":default:success.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/app/Resources/views/default/success.html.twig");
    }
}
