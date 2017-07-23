<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f055323732501c767a965bc53aabb249a6c09b0a1bc62342f5dc35d091b86cb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68e3fd2c70821a9893a2919e78234c22115352d600d6a38651dac4decb521931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e3fd2c70821a9893a2919e78234c22115352d600d6a38651dac4decb521931->enter($__internal_68e3fd2c70821a9893a2919e78234c22115352d600d6a38651dac4decb521931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68e3fd2c70821a9893a2919e78234c22115352d600d6a38651dac4decb521931->leave($__internal_68e3fd2c70821a9893a2919e78234c22115352d600d6a38651dac4decb521931_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_43f2800366a63e0692e77d56b936c9b8293194b7fb1ea1681400a7b7282b3b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f2800366a63e0692e77d56b936c9b8293194b7fb1ea1681400a7b7282b3b95->enter($__internal_43f2800366a63e0692e77d56b936c9b8293194b7fb1ea1681400a7b7282b3b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_43f2800366a63e0692e77d56b936c9b8293194b7fb1ea1681400a7b7282b3b95->leave($__internal_43f2800366a63e0692e77d56b936c9b8293194b7fb1ea1681400a7b7282b3b95_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_15887954aa7217590185fdc471342bd8c7368f366e732b2057017531b713fa3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15887954aa7217590185fdc471342bd8c7368f366e732b2057017531b713fa3c->enter($__internal_15887954aa7217590185fdc471342bd8c7368f366e732b2057017531b713fa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_15887954aa7217590185fdc471342bd8c7368f366e732b2057017531b713fa3c->leave($__internal_15887954aa7217590185fdc471342bd8c7368f366e732b2057017531b713fa3c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_800bab4cc21ed8f322aa607438a49d76431e9435b38d1180738862e88d63f5ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_800bab4cc21ed8f322aa607438a49d76431e9435b38d1180738862e88d63f5ef->enter($__internal_800bab4cc21ed8f322aa607438a49d76431e9435b38d1180738862e88d63f5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_800bab4cc21ed8f322aa607438a49d76431e9435b38d1180738862e88d63f5ef->leave($__internal_800bab4cc21ed8f322aa607438a49d76431e9435b38d1180738862e88d63f5ef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
