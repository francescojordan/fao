<?php

/* :default:mappa.html.twig */
class __TwigTemplate_9c94c80975ea148310ba2b3ada45cea9b98d9c251262add3b44be928b9410652 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default.html.twig", ":default:mappa.html.twig", 1);
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
        $__internal_1df59cbd75e697937078ae63d93fd3a6b0e5494b870064c810b491a5df7567f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df59cbd75e697937078ae63d93fd3a6b0e5494b870064c810b491a5df7567f8->enter($__internal_1df59cbd75e697937078ae63d93fd3a6b0e5494b870064c810b491a5df7567f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:mappa.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1df59cbd75e697937078ae63d93fd3a6b0e5494b870064c810b491a5df7567f8->leave($__internal_1df59cbd75e697937078ae63d93fd3a6b0e5494b870064c810b491a5df7567f8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c44f8f4503629f5564a8abc35c1fe5b5446754077b1e1df454b10dfc4f76ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c44f8f4503629f5564a8abc35c1fe5b5446754077b1e1df454b10dfc4f76ad4->enter($__internal_3c44f8f4503629f5564a8abc35c1fe5b5446754077b1e1df454b10dfc4f76ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 5
            echo "    Welcome, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "!<br/>
    ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo "
    
    ";
        }
        // line 9
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo "
<div class=\"row\">
  <div class=\"columns\">
    <p><a data-open=\"exampleModal1\">Inserisci Dati Pescato</a></p>
\t<div class=\"reveal\" id=\"exampleModal1\" data-reveal>
      <h1>Dati Pescato</h1>
             <p>
\t\t";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formpescato"] ?? $this->getContext($context, "formpescato")), 'form_start');
        echo "
\t\t";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["formpescato"] ?? $this->getContext($context, "formpescato")), 'widget');
        echo "
\t\t";
        // line 18
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
        
        $__internal_3c44f8f4503629f5564a8abc35c1fe5b5446754077b1e1df454b10dfc4f76ad4->leave($__internal_3c44f8f4503629f5564a8abc35c1fe5b5446754077b1e1df454b10dfc4f76ad4_prof);

    }

    public function getTemplateName()
    {
        return ":default:mappa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  68 => 17,  64 => 16,  53 => 9,  47 => 6,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
{% if app.user %}
    Welcome, {{ app.user.username }}!<br/>
    {{ app.user.id }}
    
    {% endif %}
 {{ app.user.id }}
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

", ":default:mappa.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/app/Resources/views/default/mappa.html.twig");
    }
}
