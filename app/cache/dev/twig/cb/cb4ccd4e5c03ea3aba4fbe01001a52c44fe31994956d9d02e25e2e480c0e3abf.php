<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_45428213077b89ad05a0da63666cd21b137943f1ad2f3adbc28e821029cc196c extends Twig_Template
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
        $__internal_0db2f86325a1ac981ad4fabf8ba0cdf0694ce15f932fc43850fcbb9ce8b662ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db2f86325a1ac981ad4fabf8ba0cdf0694ce15f932fc43850fcbb9ce8b662ee->enter($__internal_0db2f86325a1ac981ad4fabf8ba0cdf0694ce15f932fc43850fcbb9ce8b662ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0db2f86325a1ac981ad4fabf8ba0cdf0694ce15f932fc43850fcbb9ce8b662ee->leave($__internal_0db2f86325a1ac981ad4fabf8ba0cdf0694ce15f932fc43850fcbb9ce8b662ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
