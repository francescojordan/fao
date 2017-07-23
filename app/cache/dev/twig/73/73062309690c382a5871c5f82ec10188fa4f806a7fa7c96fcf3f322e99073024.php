<?php

/* auth/register.html.twig */
class __TwigTemplate_a38646d5abf3b9afc28e723ce18256976b928003f08399546b3444a01b00c762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "auth/register.html.twig", 1);
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
        $__internal_2e1ff088827d77e88026c0dc7e5c17f4f9741942bea19648d1be5711ce85dec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1ff088827d77e88026c0dc7e5c17f4f9741942bea19648d1be5711ce85dec9->enter($__internal_2e1ff088827d77e88026c0dc7e5c17f4f9741942bea19648d1be5711ce85dec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e1ff088827d77e88026c0dc7e5c17f4f9741942bea19648d1be5711ce85dec9->leave($__internal_2e1ff088827d77e88026c0dc7e5c17f4f9741942bea19648d1be5711ce85dec9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4592746f70615bad73a7fd83f35f99d8387a22a15c6e6d685caa82949436d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4592746f70615bad73a7fd83f35f99d8387a22a15c6e6d685caa82949436d54->enter($__internal_c4592746f70615bad73a7fd83f35f99d8387a22a15c6e6d685caa82949436d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c4592746f70615bad73a7fd83f35f99d8387a22a15c6e6d685caa82949436d54->leave($__internal_c4592746f70615bad73a7fd83f35f99d8387a22a15c6e6d685caa82949436d54_prof);

    }

    public function getTemplateName()
    {
        return "auth/register.html.twig";
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
{% endblock %}", "auth/register.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/app/Resources/views/auth/register.html.twig");
    }
}
