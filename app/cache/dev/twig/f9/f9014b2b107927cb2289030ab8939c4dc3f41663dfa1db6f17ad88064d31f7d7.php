<?php

/* admin/filtra.html.twig */
class __TwigTemplate_c46f5096f1a18f36d2be60022c29f5bb4f37f63515feda2af11b119d361f0296 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("clean.html.twig", "admin/filtra.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "clean.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e6f229e465c6e4a6f911496d382c63a92c4c66e28ed829d8665506377a1ecb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6f229e465c6e4a6f911496d382c63a92c4c66e28ed829d8665506377a1ecb7->enter($__internal_1e6f229e465c6e4a6f911496d382c63a92c4c66e28ed829d8665506377a1ecb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/filtra.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e6f229e465c6e4a6f911496d382c63a92c4c66e28ed829d8665506377a1ecb7->leave($__internal_1e6f229e465c6e4a6f911496d382c63a92c4c66e28ed829d8665506377a1ecb7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_10589ef8d64c3d3e887751f6652c6f9e258a4739b9cacfe32df5d85dbcdac7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10589ef8d64c3d3e887751f6652c6f9e258a4739b9cacfe32df5d85dbcdac7bc->enter($__internal_10589ef8d64c3d3e887751f6652c6f9e258a4739b9cacfe32df5d85dbcdac7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<script>
\$(document).ready(function()
{
\$( \"#mostra_gruppo\" ).click(function() {

  \$( \"#mostra_idutente\" ).hide( \"slow\", function() {});
      \$( \"#mostra_gruppo\" ).show( \"slow\", function() {});

          \$('#mostra_idutente').val('');  
});

\$(\"label[for='mostra_idutente']\").click(function() {

  \$( \"#mostra_gruppo\" ).hide( \"slow\", function() {});
    \$( \"#mostra_idutente\" ).show( \"slow\", function() {});
      \$('#mostra_gruppo').val('');  
});
});

</script>
<div class=\"row\">

<h1>Filtra Grafici</h1>
             <p>
\t\t";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["filtro"] ?? $this->getContext($context, "filtro")), 'form_start');
        echo "
\t\t";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["filtro"] ?? $this->getContext($context, "filtro")), 'widget');
        echo "
\t\t";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["filtro"] ?? $this->getContext($context, "filtro")), 'form_end');
        echo "
      </p>
      
</div>


";
        
        $__internal_10589ef8d64c3d3e887751f6652c6f9e258a4739b9cacfe32df5d85dbcdac7bc->leave($__internal_10589ef8d64c3d3e887751f6652c6f9e258a4739b9cacfe32df5d85dbcdac7bc_prof);

    }

    public function getTemplateName()
    {
        return "admin/filtra.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 30,  70 => 29,  66 => 28,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'clean.html.twig' %}

{% block body %}
<script>
\$(document).ready(function()
{
\$( \"#mostra_gruppo\" ).click(function() {

  \$( \"#mostra_idutente\" ).hide( \"slow\", function() {});
      \$( \"#mostra_gruppo\" ).show( \"slow\", function() {});

          \$('#mostra_idutente').val('');  
});

\$(\"label[for='mostra_idutente']\").click(function() {

  \$( \"#mostra_gruppo\" ).hide( \"slow\", function() {});
    \$( \"#mostra_idutente\" ).show( \"slow\", function() {});
      \$('#mostra_gruppo').val('');  
});
});

</script>
<div class=\"row\">

<h1>Filtra Grafici</h1>
             <p>
\t\t{{ form_start(filtro) }}
\t\t{{ form_widget(filtro) }}
\t\t{{ form_end(filtro) }}
      </p>
      
</div>


{% endblock %}

", "admin/filtra.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/app/Resources/views/admin/filtra.html.twig");
    }
}
