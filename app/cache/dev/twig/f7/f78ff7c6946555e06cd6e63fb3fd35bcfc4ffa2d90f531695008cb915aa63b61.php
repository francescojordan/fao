<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_20dd9555f362e03b976ea58f79cf4c620fdf1e9ef72b3f7f62fa6657bcccbdfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5adf2f1914c1c98e9d4d5b0f09b8f2f622f7957e5113b5d86502fb5ec0f54c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5adf2f1914c1c98e9d4d5b0f09b8f2f622f7957e5113b5d86502fb5ec0f54c39->enter($__internal_5adf2f1914c1c98e9d4d5b0f09b8f2f622f7957e5113b5d86502fb5ec0f54c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_5adf2f1914c1c98e9d4d5b0f09b8f2f622f7957e5113b5d86502fb5ec0f54c39->leave($__internal_5adf2f1914c1c98e9d4d5b0f09b8f2f622f7957e5113b5d86502fb5ec0f54c39_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
