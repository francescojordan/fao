<?php

/* :list:index.html.twig */
class __TwigTemplate_831e06eeea45ab02cd8d7f49d4da12f19e39d894342eca33c547ce8ec169c49c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":list:index.html.twig", 1);
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
        $__internal_b964e61c6927c16c303c254411e4b78a26365f2b376d4f74f3924f392f75f1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b964e61c6927c16c303c254411e4b78a26365f2b376d4f74f3924f392f75f1f5->enter($__internal_b964e61c6927c16c303c254411e4b78a26365f2b376d4f74f3924f392f75f1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":list:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b964e61c6927c16c303c254411e4b78a26365f2b376d4f74f3924f392f75f1f5->leave($__internal_b964e61c6927c16c303c254411e4b78a26365f2b376d4f74f3924f392f75f1f5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e1ff309459585d2d4487b841832032ad93346370b0ecaad5bd68231127f36a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1ff309459585d2d4487b841832032ad93346370b0ecaad5bd68231127f36a2->enter($__internal_8e1ff309459585d2d4487b841832032ad93346370b0ecaad5bd68231127f36a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">List of Game of Thrones Characters</div>

                ";
        // line 12
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 13
            echo "                  <table class=\"table\">
                      <tr>
                          <th>Character</th>
                          <th>Real Name</th>
                      </tr>

                      ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["character"] ?? $this->getContext($context, "character")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 20
                echo "                        <tr>
                          <td>";
                // line 21
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                  </table>
                ";
        }
        // line 26
        echo "

            </div>

            ";
        // line 30
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == null)) {
            // line 31
            echo "              <a href=\"/login\" class=\"btn btn-info\"> You need to login to see the list 😜😜 >></a>
            ";
        }
        // line 33
        echo "        </div>
    </div>
</div>
";
        
        $__internal_8e1ff309459585d2d4487b841832032ad93346370b0ecaad5bd68231127f36a2->leave($__internal_8e1ff309459585d2d4487b841832032ad93346370b0ecaad5bd68231127f36a2_prof);

    }

    public function getTemplateName()
    {
        return ":list:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  88 => 31,  86 => 30,  80 => 26,  76 => 24,  65 => 21,  62 => 20,  58 => 19,  50 => 13,  48 => 12,  40 => 6,  34 => 5,  11 => 1,);
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
        <div class=\"col-md-10 col-md-offset-1\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">List of Game of Thrones Characters</div>

                {% if app.user != null %}
                  <table class=\"table\">
                      <tr>
                          <th>Character</th>
                          <th>Real Name</th>
                      </tr>

                      {% for key, item in character %}
                        <tr>
                          <td>{{ key }}</td><td>{{ item }}</td>
                        </tr>
                      {% endfor %}
                  </table>
                {% endif %}


            </div>

            {% if app.user == null %}
              <a href=\"/login\" class=\"btn btn-info\"> You need to login to see the list 😜😜 >></a>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}", ":list:index.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/app/Resources/views/list/index.html.twig");
    }
}
