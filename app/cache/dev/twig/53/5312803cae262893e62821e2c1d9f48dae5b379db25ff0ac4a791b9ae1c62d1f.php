<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b163e76ceb20ff693651a43240e6396040a45113cdf55bc10348c524a7d535c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48f57949d3585813636d351633f1c68fb6e6e985055402b5ed521557807843c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f57949d3585813636d351633f1c68fb6e6e985055402b5ed521557807843c2->enter($__internal_48f57949d3585813636d351633f1c68fb6e6e985055402b5ed521557807843c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_48f57949d3585813636d351633f1c68fb6e6e985055402b5ed521557807843c2->leave($__internal_48f57949d3585813636d351633f1c68fb6e6e985055402b5ed521557807843c2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e114a657a38ee2e1add6d56eb32948bbaa89dba588ab8939343fc48dac54997e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e114a657a38ee2e1add6d56eb32948bbaa89dba588ab8939343fc48dac54997e->enter($__internal_e114a657a38ee2e1add6d56eb32948bbaa89dba588ab8939343fc48dac54997e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e114a657a38ee2e1add6d56eb32948bbaa89dba588ab8939343fc48dac54997e->leave($__internal_e114a657a38ee2e1add6d56eb32948bbaa89dba588ab8939343fc48dac54997e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
