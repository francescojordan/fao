<?php

/* base.html.twig */
class __TwigTemplate_3fa6e105b28d0dabd0a4635b7df0f46fa221e68fd9e1145603eefd5de0800bbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_268b069e2c5dc3fdecb5eda4f6c725cd4c58dbad6a2108b0212ca8459d7fa0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268b069e2c5dc3fdecb5eda4f6c725cd4c58dbad6a2108b0212ca8459d7fa0af->enter($__internal_268b069e2c5dc3fdecb5eda4f6c725cd4c58dbad6a2108b0212ca8459d7fa0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_268b069e2c5dc3fdecb5eda4f6c725cd4c58dbad6a2108b0212ca8459d7fa0af->leave($__internal_268b069e2c5dc3fdecb5eda4f6c725cd4c58dbad6a2108b0212ca8459d7fa0af_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1a9532315d8207668ba3948beb432e49dcecafc4a6da02bd0cefacceab8804f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a9532315d8207668ba3948beb432e49dcecafc4a6da02bd0cefacceab8804f->enter($__internal_b1a9532315d8207668ba3948beb432e49dcecafc4a6da02bd0cefacceab8804f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b1a9532315d8207668ba3948beb432e49dcecafc4a6da02bd0cefacceab8804f->leave($__internal_b1a9532315d8207668ba3948beb432e49dcecafc4a6da02bd0cefacceab8804f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e573b54f34a1a89d415d4805b7f0487fd9bc94e05178a61fe8da547e55a7e22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e573b54f34a1a89d415d4805b7f0487fd9bc94e05178a61fe8da547e55a7e22c->enter($__internal_e573b54f34a1a89d415d4805b7f0487fd9bc94e05178a61fe8da547e55a7e22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e573b54f34a1a89d415d4805b7f0487fd9bc94e05178a61fe8da547e55a7e22c->leave($__internal_e573b54f34a1a89d415d4805b7f0487fd9bc94e05178a61fe8da547e55a7e22c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_54cdc26ae3e1bdde0b3bf8ba05b5d52e590bf320f773e2c02c5854de1b7954df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54cdc26ae3e1bdde0b3bf8ba05b5d52e590bf320f773e2c02c5854de1b7954df->enter($__internal_54cdc26ae3e1bdde0b3bf8ba05b5d52e590bf320f773e2c02c5854de1b7954df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_54cdc26ae3e1bdde0b3bf8ba05b5d52e590bf320f773e2c02c5854de1b7954df->leave($__internal_54cdc26ae3e1bdde0b3bf8ba05b5d52e590bf320f773e2c02c5854de1b7954df_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6fd5bf439a39093e85f2411fee579bab814fe588e2a8c35d49c26cf98cf22205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd5bf439a39093e85f2411fee579bab814fe588e2a8c35d49c26cf98cf22205->enter($__internal_6fd5bf439a39093e85f2411fee579bab814fe588e2a8c35d49c26cf98cf22205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6fd5bf439a39093e85f2411fee579bab814fe588e2a8c35d49c26cf98cf22205->leave($__internal_6fd5bf439a39093e85f2411fee579bab814fe588e2a8c35d49c26cf98cf22205_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/app/Resources/views/base.html.twig");
    }
}
