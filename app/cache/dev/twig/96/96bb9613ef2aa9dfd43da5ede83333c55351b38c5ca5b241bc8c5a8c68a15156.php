<?php

/* :default:foundation.html.twig */
class __TwigTemplate_64a35e6adf18e4ac806b95393ed5a87c339711e5d398556b27a6196a3abf6776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("foundation.html.twig", ":default:foundation.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "foundation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0338aa1e15067174165b952d0ad19cf99cbe66a0391c3a7b6228b7892fb6c57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0338aa1e15067174165b952d0ad19cf99cbe66a0391c3a7b6228b7892fb6c57a->enter($__internal_0338aa1e15067174165b952d0ad19cf99cbe66a0391c3a7b6228b7892fb6c57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:foundation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0338aa1e15067174165b952d0ad19cf99cbe66a0391c3a7b6228b7892fb6c57a->leave($__internal_0338aa1e15067174165b952d0ad19cf99cbe66a0391c3a7b6228b7892fb6c57a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe4594edaf8e0ab9b6b36dbebeac37776982b1324a647723b796801360548c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4594edaf8e0ab9b6b36dbebeac37776982b1324a647723b796801360548c94->enter($__internal_fe4594edaf8e0ab9b6b36dbebeac37776982b1324a647723b796801360548c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div id=\"map\" style=\"width: 800px; height: 600px; border: 1px solid #ccc\"></div>

    <div id='delete'>Delete Features</div>
    <a href='#' id='export'>Export Features</a>

  ";
        
        $__internal_fe4594edaf8e0ab9b6b36dbebeac37776982b1324a647723b796801360548c94->leave($__internal_fe4594edaf8e0ab9b6b36dbebeac37776982b1324a647723b796801360548c94_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_516be3170c00876fe5009b5ccf2f4cfb3280502db1c4a6bf6fba638e4a14cdc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516be3170c00876fe5009b5ccf2f4cfb3280502db1c4a6bf6fba638e4a14cdc0->enter($__internal_516be3170c00876fe5009b5ccf2f4cfb3280502db1c4a6bf6fba638e4a14cdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "
 
    <style>
    body {
            margin: 0;
            padding: 0;
        }
        #mmap {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100%;
        }
        #delete, #export {
            position: absolute;
            top:50px;
            right:10px;
            z-index:100;
            background:white;
            color:black;
            padding:6px;
            border-radius:4px;
            font-family: 'Helvetica Neue';
            cursor: pointer;
            font-size:12px;
            text-decoration:none;
        }
        #export {
            top:90px;
        }
    </style>
";
        
        $__internal_516be3170c00876fe5009b5ccf2f4cfb3280502db1c4a6bf6fba638e4a14cdc0->leave($__internal_516be3170c00876fe5009b5ccf2f4cfb3280502db1c4a6bf6fba638e4a14cdc0_prof);

    }

    public function getTemplateName()
    {
        return ":default:foundation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  53 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'foundation.html.twig' %}

{% block body %}
  <div id=\"map\" style=\"width: 800px; height: 600px; border: 1px solid #ccc\"></div>

    <div id='delete'>Delete Features</div>
    <a href='#' id='export'>Export Features</a>

  {% endblock %}

{% block stylesheets %}

 
    <style>
    body {
            margin: 0;
            padding: 0;
        }
        #mmap {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100%;
        }
        #delete, #export {
            position: absolute;
            top:50px;
            right:10px;
            z-index:100;
            background:white;
            color:black;
            padding:6px;
            border-radius:4px;
            font-family: 'Helvetica Neue';
            cursor: pointer;
            font-size:12px;
            text-decoration:none;
        }
        #export {
            top:90px;
        }
    </style>
{% endblock %}
", ":default:foundation.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/app/Resources/views/default/foundation.html.twig");
    }
}
