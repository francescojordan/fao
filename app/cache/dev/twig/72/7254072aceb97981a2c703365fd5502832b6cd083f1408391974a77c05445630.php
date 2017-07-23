<?php

/* :auth:register.html.twig */
class __TwigTemplate_dad1dce2a3bb3280b839ca529fe29d2095dc4c382390c77d254dff50ed394cdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":auth:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_195c6e4227a8547215fa35899f1b9dc2b7be9db37eef97e865b2eb2e80b26d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195c6e4227a8547215fa35899f1b9dc2b7be9db37eef97e865b2eb2e80b26d3d->enter($__internal_195c6e4227a8547215fa35899f1b9dc2b7be9db37eef97e865b2eb2e80b26d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":auth:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_195c6e4227a8547215fa35899f1b9dc2b7be9db37eef97e865b2eb2e80b26d3d->leave($__internal_195c6e4227a8547215fa35899f1b9dc2b7be9db37eef97e865b2eb2e80b26d3d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e56c859b2d64960531c5d61cb8214778bccb182fd852dcfb1ce65e3b6ef40987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56c859b2d64960531c5d61cb8214778bccb182fd852dcfb1ce65e3b6ef40987->enter($__internal_e56c859b2d64960531c5d61cb8214778bccb182fd852dcfb1ce65e3b6ef40987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-8 col-md-offset-2\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">Register</div>
          <div class=\"panel-body\">
            ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                  ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nome", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gruppo", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            
            </div>

            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
              </div>
            </div>

            <div class=\"form-group\">
                <div class=\"col-md-8 col-md-offset-4\" style=\"margin-top:5px;\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fa fa-btn fa-user\"></i> Register
                    </button>
                </div>
            </div>
            ";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
          </div>
        </div>
    </div>
  </div>
</div>
";
        
        $__internal_e56c859b2d64960531c5d61cb8214778bccb182fd852dcfb1ce65e3b6ef40987->leave($__internal_e56c859b2d64960531c5d61cb8214778bccb182fd852dcfb1ce65e3b6ef40987_prof);

    }

    public function getTemplateName()
    {
        return ":auth:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 49,  89 => 38,  80 => 32,  70 => 25,  63 => 21,  54 => 15,  48 => 12,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}



{% block body %}
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-8 col-md-offset-2\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">Register</div>
          <div class=\"panel-body\">
            {{ form_start(form) }}
            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                  {{ form_row(form.nome, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                {{ form_row(form.email, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                {{ form_row(form.gruppo, {'attr': {'class': 'form-control'}}) }}
                </div>
            
            </div>

            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                {{ form_row(form.plainPassword.first, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                {{ form_row(form.plainPassword.second, {'attr': {'class': 'form-control'}}) }}
              </div>
            </div>

            <div class=\"form-group\">
                <div class=\"col-md-8 col-md-offset-4\" style=\"margin-top:5px;\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fa fa-btn fa-user\"></i> Register
                    </button>
                </div>
            </div>
            {{ form_end(form) }}
          </div>
        </div>
    </div>
  </div>
</div>
{% endblock %}", ":auth:register.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/app/Resources/views/auth/register.html.twig");
    }
}
