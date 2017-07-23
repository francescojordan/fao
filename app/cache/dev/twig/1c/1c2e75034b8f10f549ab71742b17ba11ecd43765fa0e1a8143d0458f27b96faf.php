<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_73187e52188de6d0bc302c2578599b80ae50c22802a6703d5b7fd4c15a513b34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b1525c1a67e717b4c49a0aaf4d96486fbf33da5b87839a48266b33dc34dfe0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1525c1a67e717b4c49a0aaf4d96486fbf33da5b87839a48266b33dc34dfe0f->enter($__internal_9b1525c1a67e717b4c49a0aaf4d96486fbf33da5b87839a48266b33dc34dfe0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b1525c1a67e717b4c49a0aaf4d96486fbf33da5b87839a48266b33dc34dfe0f->leave($__internal_9b1525c1a67e717b4c49a0aaf4d96486fbf33da5b87839a48266b33dc34dfe0f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0a3a895da3342be6f2710a280b7d3691b057b7fb6604ce4cd018e82e37ed2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a3a895da3342be6f2710a280b7d3691b057b7fb6604ce4cd018e82e37ed2e2->enter($__internal_d0a3a895da3342be6f2710a280b7d3691b057b7fb6604ce4cd018e82e37ed2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d0a3a895da3342be6f2710a280b7d3691b057b7fb6604ce4cd018e82e37ed2e2->leave($__internal_d0a3a895da3342be6f2710a280b7d3691b057b7fb6604ce4cd018e82e37ed2e2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c6d4b2a0b9567aab2d01918f95a8d6a4af4f4382b8667b638f5436ea965c071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6d4b2a0b9567aab2d01918f95a8d6a4af4f4382b8667b638f5436ea965c071->enter($__internal_3c6d4b2a0b9567aab2d01918f95a8d6a4af4f4382b8667b638f5436ea965c071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_3c6d4b2a0b9567aab2d01918f95a8d6a4af4f4382b8667b638f5436ea965c071->leave($__internal_3c6d4b2a0b9567aab2d01918f95a8d6a4af4f4382b8667b638f5436ea965c071_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_190a56ffcdc92dea8f6435fbdcba039d607bc2c117f6d2cc36d16c41e27041f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190a56ffcdc92dea8f6435fbdcba039d607bc2c117f6d2cc36d16c41e27041f8->enter($__internal_190a56ffcdc92dea8f6435fbdcba039d607bc2c117f6d2cc36d16c41e27041f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_190a56ffcdc92dea8f6435fbdcba039d607bc2c117f6d2cc36d16c41e27041f8->leave($__internal_190a56ffcdc92dea8f6435fbdcba039d607bc2c117f6d2cc36d16c41e27041f8_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd6100b38a52035c6218dd7ff2403aff257236c9bd18ee79d2b6a5490deba6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6100b38a52035c6218dd7ff2403aff257236c9bd18ee79d2b6a5490deba6f7->enter($__internal_bd6100b38a52035c6218dd7ff2403aff257236c9bd18ee79d2b6a5490deba6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_bd6100b38a52035c6218dd7ff2403aff257236c9bd18ee79d2b6a5490deba6f7->leave($__internal_bd6100b38a52035c6218dd7ff2403aff257236c9bd18ee79d2b6a5490deba6f7_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
