<?php

/* :admin:filtra.html.twig */
class __TwigTemplate_0b3950d83a65541fcd05cd3016d1568f5e4b6a4612a638c67f09eb56e67d200e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("clean.html.twig", ":admin:filtra.html.twig", 1);
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
        $__internal_5d925d0d8552c4681cefc4f444ecfbe33f20a3cc1c0e9529bc026b2a39df016c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d925d0d8552c4681cefc4f444ecfbe33f20a3cc1c0e9529bc026b2a39df016c->enter($__internal_5d925d0d8552c4681cefc4f444ecfbe33f20a3cc1c0e9529bc026b2a39df016c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:filtra.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d925d0d8552c4681cefc4f444ecfbe33f20a3cc1c0e9529bc026b2a39df016c->leave($__internal_5d925d0d8552c4681cefc4f444ecfbe33f20a3cc1c0e9529bc026b2a39df016c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17bfd9cdaa2b85cf17180ddd39cb1ed709aff372d38bdb1a8bc5d1349a2f2cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bfd9cdaa2b85cf17180ddd39cb1ed709aff372d38bdb1a8bc5d1349a2f2cbd->enter($__internal_17bfd9cdaa2b85cf17180ddd39cb1ed709aff372d38bdb1a8bc5d1349a2f2cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_17bfd9cdaa2b85cf17180ddd39cb1ed709aff372d38bdb1a8bc5d1349a2f2cbd->leave($__internal_17bfd9cdaa2b85cf17180ddd39cb1ed709aff372d38bdb1a8bc5d1349a2f2cbd_prof);

    }

    public function getTemplateName()
    {
        return ":admin:filtra.html.twig";
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

", ":admin:filtra.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/app/Resources/views/admin/filtra.html.twig");
    }
}
