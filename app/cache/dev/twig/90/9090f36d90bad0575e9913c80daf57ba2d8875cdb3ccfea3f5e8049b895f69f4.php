<?php

/* default/mappa.html.twig */
class __TwigTemplate_d5f2c71589580bb455ed181e4d2a614fb6be06c7e1e49442c189428d47f0f361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default.html.twig", "default/mappa.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d21f1cacd1a47293a05d9e437f5a06a01131423d0a2863fc7043a242572d9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d21f1cacd1a47293a05d9e437f5a06a01131423d0a2863fc7043a242572d9e1->enter($__internal_8d21f1cacd1a47293a05d9e437f5a06a01131423d0a2863fc7043a242572d9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/mappa.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d21f1cacd1a47293a05d9e437f5a06a01131423d0a2863fc7043a242572d9e1->leave($__internal_8d21f1cacd1a47293a05d9e437f5a06a01131423d0a2863fc7043a242572d9e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_21db6b9de2d79b9920d6a864a41b7bba034508d0a53ae8187a08fd1b70e77bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21db6b9de2d79b9920d6a864a41b7bba034508d0a53ae8187a08fd1b70e77bfb->enter($__internal_21db6b9de2d79b9920d6a864a41b7bba034508d0a53ae8187a08fd1b70e77bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row\">
  <div class=\"columns\">
    <p><a data-open=\"exampleModal1\">Inserisci Dati Pescato</a></p>
\t<div class=\"reveal\" id=\"exampleModal1\" data-reveal>
      <h1>Dati Pescato</h1>
             <p>
\t\t";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formpescato"] ?? $this->getContext($context, "formpescato")), 'form_start');
        echo "
\t\t";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["formpescato"] ?? $this->getContext($context, "formpescato")), 'widget');
        echo "
\t\t";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formpescato"] ?? $this->getContext($context, "formpescato")), 'form_end');
        echo "
      </p>
      <button class=\"close-button\" data-close aria-label=\"Close reveal\" type=\"button\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>
  </div>
</div>


<!-- MAPPA -->

<div class=\"row\">
<div id=\"map\" style=\"width: 800px; height: 600px; border: 1px solid #ccc\"></div>

    <div id='delete'>Delete Features</div>
    <a href='#' id='export'>Export Features</a>


</div>

";
        
        $__internal_21db6b9de2d79b9920d6a864a41b7bba034508d0a53ae8187a08fd1b70e77bfb->leave($__internal_21db6b9de2d79b9920d6a864a41b7bba034508d0a53ae8187a08fd1b70e77bfb_prof);

    }

    public function getTemplateName()
    {
        return "default/mappa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default.html.twig' %}

{% block body %}
<div class=\"row\">
  <div class=\"columns\">
    <p><a data-open=\"exampleModal1\">Inserisci Dati Pescato</a></p>
\t<div class=\"reveal\" id=\"exampleModal1\" data-reveal>
      <h1>Dati Pescato</h1>
             <p>
\t\t{{ form_start(formpescato) }}
\t\t{{ form_widget(formpescato) }}
\t\t{{ form_end(formpescato) }}
      </p>
      <button class=\"close-button\" data-close aria-label=\"Close reveal\" type=\"button\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>
  </div>
</div>


<!-- MAPPA -->

<div class=\"row\">
<div id=\"map\" style=\"width: 800px; height: 600px; border: 1px solid #ccc\"></div>

    <div id='delete'>Delete Features</div>
    <a href='#' id='export'>Export Features</a>


</div>

{% endblock %}

", "default/mappa.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/app/Resources/views/default/mappa.html.twig");
    }
}
