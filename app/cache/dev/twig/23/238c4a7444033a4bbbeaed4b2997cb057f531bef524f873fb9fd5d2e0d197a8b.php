<?php

/* :default:jsond.html.twig */
class __TwigTemplate_2f6f354b10948663b2b20712a074ea8419814fa9141f2ec787c05a40c21240e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("foundationT.html.twig", ":default:jsond.html.twig", 1);
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
        $__internal_9e9374d20edca9d1c39a5a1ba87615fab7eb763475a5fd3d7710e51a35719b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9374d20edca9d1c39a5a1ba87615fab7eb763475a5fd3d7710e51a35719b23->enter($__internal_9e9374d20edca9d1c39a5a1ba87615fab7eb763475a5fd3d7710e51a35719b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:jsond.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e9374d20edca9d1c39a5a1ba87615fab7eb763475a5fd3d7710e51a35719b23->leave($__internal_9e9374d20edca9d1c39a5a1ba87615fab7eb763475a5fd3d7710e51a35719b23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b5f70f0ae4facddacad98632cc434745e478cb26073f1cc07266032620487ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5f70f0ae4facddacad98632cc434745e478cb26073f1cc07266032620487ff->enter($__internal_7b5f70f0ae4facddacad98632cc434745e478cb26073f1cc07266032620487ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"row\">
  <p>SUCCESSO</p>
  
  <p>";
        // line 7
        echo ($context["nuovojson"] ?? $this->getContext($context, "nuovojson"));
        echo "</p>
</div>
";
        
        $__internal_7b5f70f0ae4facddacad98632cc434745e478cb26073f1cc07266032620487ff->leave($__internal_7b5f70f0ae4facddacad98632cc434745e478cb26073f1cc07266032620487ff_prof);

    }

    public function getTemplateName()
    {
        return ":default:jsond.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
  
  <p>{{ nuovojson | raw}}</p>
</div>
{% endblock %}


", ":default:jsond.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/app/Resources/views/default/jsond.html.twig");
    }
}
