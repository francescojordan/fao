<?php

/* base.html.twig */
class __TwigTemplate_607afefa86c383106e9123d6ff01edd69cd11389c982bf6e30b666b9f79d5898 extends Twig_Template
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
        $__internal_1b4407d5bff1e1320a2c9b9ff663be7845464f8fd84f831f18dba4f675b7896c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b4407d5bff1e1320a2c9b9ff663be7845464f8fd84f831f18dba4f675b7896c->enter($__internal_1b4407d5bff1e1320a2c9b9ff663be7845464f8fd84f831f18dba4f675b7896c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1b4407d5bff1e1320a2c9b9ff663be7845464f8fd84f831f18dba4f675b7896c->leave($__internal_1b4407d5bff1e1320a2c9b9ff663be7845464f8fd84f831f18dba4f675b7896c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6cb9593aeebc0325040cfbd9be4a9156b90e7f7ae7dc0182d90c1f5519a90ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6cb9593aeebc0325040cfbd9be4a9156b90e7f7ae7dc0182d90c1f5519a90ee->enter($__internal_e6cb9593aeebc0325040cfbd9be4a9156b90e7f7ae7dc0182d90c1f5519a90ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e6cb9593aeebc0325040cfbd9be4a9156b90e7f7ae7dc0182d90c1f5519a90ee->leave($__internal_e6cb9593aeebc0325040cfbd9be4a9156b90e7f7ae7dc0182d90c1f5519a90ee_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18cadce4f3872d1317aa213bfebe9a345a26c6270315ebd28b8a8f96b1dfb7a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cadce4f3872d1317aa213bfebe9a345a26c6270315ebd28b8a8f96b1dfb7a7->enter($__internal_18cadce4f3872d1317aa213bfebe9a345a26c6270315ebd28b8a8f96b1dfb7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_18cadce4f3872d1317aa213bfebe9a345a26c6270315ebd28b8a8f96b1dfb7a7->leave($__internal_18cadce4f3872d1317aa213bfebe9a345a26c6270315ebd28b8a8f96b1dfb7a7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd019719f1a5347cc3657c07e7d737a824cd87d86407d81ebb2fb14f16486ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd019719f1a5347cc3657c07e7d737a824cd87d86407d81ebb2fb14f16486ce8->enter($__internal_fd019719f1a5347cc3657c07e7d737a824cd87d86407d81ebb2fb14f16486ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fd019719f1a5347cc3657c07e7d737a824cd87d86407d81ebb2fb14f16486ce8->leave($__internal_fd019719f1a5347cc3657c07e7d737a824cd87d86407d81ebb2fb14f16486ce8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cbff673352f4bf34e0591bb7a10b7fc0fe425c557eae50a59e5148afad95b79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbff673352f4bf34e0591bb7a10b7fc0fe425c557eae50a59e5148afad95b79d->enter($__internal_cbff673352f4bf34e0591bb7a10b7fc0fe425c557eae50a59e5148afad95b79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cbff673352f4bf34e0591bb7a10b7fc0fe425c557eae50a59e5148afad95b79d->leave($__internal_cbff673352f4bf34e0591bb7a10b7fc0fe425c557eae50a59e5148afad95b79d_prof);

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
