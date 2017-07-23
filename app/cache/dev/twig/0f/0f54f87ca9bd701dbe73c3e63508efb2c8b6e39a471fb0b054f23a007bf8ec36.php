<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_cacde52a193b9bc5b8844118078f94730cff9f013bc9e6e111c60006be23818d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_c961be576e7334a7d867cc7ae7c3bd3052c0b9297357b3b269ccd6ea534db68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c961be576e7334a7d867cc7ae7c3bd3052c0b9297357b3b269ccd6ea534db68a->enter($__internal_c961be576e7334a7d867cc7ae7c3bd3052c0b9297357b3b269ccd6ea534db68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c961be576e7334a7d867cc7ae7c3bd3052c0b9297357b3b269ccd6ea534db68a->leave($__internal_c961be576e7334a7d867cc7ae7c3bd3052c0b9297357b3b269ccd6ea534db68a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c659b35a9eb6cffb924202e01d99dd08cf0771b196d7c8a2c532837ba42f0c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c659b35a9eb6cffb924202e01d99dd08cf0771b196d7c8a2c532837ba42f0c3->enter($__internal_3c659b35a9eb6cffb924202e01d99dd08cf0771b196d7c8a2c532837ba42f0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3c659b35a9eb6cffb924202e01d99dd08cf0771b196d7c8a2c532837ba42f0c3->leave($__internal_3c659b35a9eb6cffb924202e01d99dd08cf0771b196d7c8a2c532837ba42f0c3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed6608125581ff99bec42c712b1131c10b55bb45af699d57b526300eb21570ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6608125581ff99bec42c712b1131c10b55bb45af699d57b526300eb21570ae->enter($__internal_ed6608125581ff99bec42c712b1131c10b55bb45af699d57b526300eb21570ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ed6608125581ff99bec42c712b1131c10b55bb45af699d57b526300eb21570ae->leave($__internal_ed6608125581ff99bec42c712b1131c10b55bb45af699d57b526300eb21570ae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
