<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8af8fc7f02d4913ee6364781ba82521ce7747f54d8a76163034eda83af707d66 extends Twig_Template
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
        $__internal_c488fe67c2cf2f62f11c58614ffeb3ec07c6987e8c5a6e563a80d8618b05acc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c488fe67c2cf2f62f11c58614ffeb3ec07c6987e8c5a6e563a80d8618b05acc4->enter($__internal_c488fe67c2cf2f62f11c58614ffeb3ec07c6987e8c5a6e563a80d8618b05acc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c488fe67c2cf2f62f11c58614ffeb3ec07c6987e8c5a6e563a80d8618b05acc4->leave($__internal_c488fe67c2cf2f62f11c58614ffeb3ec07c6987e8c5a6e563a80d8618b05acc4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
