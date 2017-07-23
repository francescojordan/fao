<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ecbe5d1a1b337b39932c99496f70b875304b5cabcd013c5aca32f50852ee403f extends Twig_Template
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
        $__internal_1c1c4eccaa80e0d12dd198d4295426f285b58861d0363a76d893272ffd7231be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1c4eccaa80e0d12dd198d4295426f285b58861d0363a76d893272ffd7231be->enter($__internal_1c1c4eccaa80e0d12dd198d4295426f285b58861d0363a76d893272ffd7231be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1c1c4eccaa80e0d12dd198d4295426f285b58861d0363a76d893272ffd7231be->leave($__internal_1c1c4eccaa80e0d12dd198d4295426f285b58861d0363a76d893272ffd7231be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
