<?php

/* clean.html.twig */
class __TwigTemplate_7bc6d6bc093dffccdb2c2635142712c4774cb1e88742ee558b2473e5674ada6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e537a6225b776f6c65dbdb3828013348e7b56cb4d036fefb50586ef01a2311d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e537a6225b776f6c65dbdb3828013348e7b56cb4d036fefb50586ef01a2311d->enter($__internal_6e537a6225b776f6c65dbdb3828013348e7b56cb4d036fefb50586ef01a2311d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clean.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title><link >
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
  <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.1.0/dist/leaflet.css\"
   integrity=\"sha512-wcw6ts8Anuw10Mzh9Ytw4pylW8+NAD4ch3lqm9lzAsTxg0GFeJgoAtxuCLREZSC5lUXdVyo/7yfsqFjQ4S+aKw==\"
   crossorigin=\"\"/>
   <script src=\"https://unpkg.com/leaflet@1.1.0/dist/leaflet.js\"
   integrity=\"sha512-mNqn2Wg7tSToJhvHcqfzLMU6J4mkOImSPTxVZAdo+lcPlk+GhZmYgACEe0x35K7YzW1zJ7XyJV/TT1MrdXvMcA==\"
   crossorigin=\"\"></script>
     <script src=\" ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/data.geojson"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  <script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
    </head>
    <body>
 

 
<div class=\"top-bar\">
<div class=\"top-bar-left\">
<ul class=\"menu\">

<li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filtra");
        echo "\">FILTRA MAPPA</a></li>
</ul>
</div>
<div class=\"top-bar-right\">
<ul class=\"menu\">
</ul>
</div>
</div>
 
<div>
";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "</div>



    
        
        ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "    </body>
</html>


<head>
 
</head>";
        
        $__internal_6e537a6225b776f6c65dbdb3828013348e7b56cb4d036fefb50586ef01a2311d->leave($__internal_6e537a6225b776f6c65dbdb3828013348e7b56cb4d036fefb50586ef01a2311d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2448555f55a9d78ac488cb344f18f6adefaa7893d9eecff70e3565b0bce9f01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2448555f55a9d78ac488cb344f18f6adefaa7893d9eecff70e3565b0bce9f01f->enter($__internal_2448555f55a9d78ac488cb344f18f6adefaa7893d9eecff70e3565b0bce9f01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FOUNDATION!";
        
        $__internal_2448555f55a9d78ac488cb344f18f6adefaa7893d9eecff70e3565b0bce9f01f->leave($__internal_2448555f55a9d78ac488cb344f18f6adefaa7893d9eecff70e3565b0bce9f01f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5666ca102d92dd50824d7b063a94a626049b2a1307d43319f1ecaf6fc463d768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5666ca102d92dd50824d7b063a94a626049b2a1307d43319f1ecaf6fc463d768->enter($__internal_5666ca102d92dd50824d7b063a94a626049b2a1307d43319f1ecaf6fc463d768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <!-- FOUNDATION -->
              <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("foundation/css/foundation.css"), "html", null, true);
        echo "\">
              <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("foundation/css/foundation.min.css"), "html", null, true);
        echo "\">


        ";
        
        $__internal_5666ca102d92dd50824d7b063a94a626049b2a1307d43319f1ecaf6fc463d768->leave($__internal_5666ca102d92dd50824d7b063a94a626049b2a1307d43319f1ecaf6fc463d768_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_d77f3dc082329e3c0c20fc4a2fd33a3169bfffae25c185aabe20c05328757512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77f3dc082329e3c0c20fc4a2fd33a3169bfffae25c185aabe20c05328757512->enter($__internal_d77f3dc082329e3c0c20fc4a2fd33a3169bfffae25c185aabe20c05328757512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d77f3dc082329e3c0c20fc4a2fd33a3169bfffae25c185aabe20c05328757512->leave($__internal_d77f3dc082329e3c0c20fc4a2fd33a3169bfffae25c185aabe20c05328757512_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_918acd53774872b4689eb9edddbc18930b39fc8c030e46bf2fb04afb4f95941c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918acd53774872b4689eb9edddbc18930b39fc8c030e46bf2fb04afb4f95941c->enter($__internal_918acd53774872b4689eb9edddbc18930b39fc8c030e46bf2fb04afb4f95941c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "

<script src=\"https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js\"></script>

           <!-- COSE FOUNDATION -->
           
            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("foundation/js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("foundation/js/vendor/foundation.min.js"), "html", null, true);
        echo "\"></script>
   
<script>
      \$(document).foundation();
    </script>
        
        ";
        
        $__internal_918acd53774872b4689eb9edddbc18930b39fc8c030e46bf2fb04afb4f95941c->leave($__internal_918acd53774872b4689eb9edddbc18930b39fc8c030e46bf2fb04afb4f95941c_prof);

    }

    public function getTemplateName()
    {
        return "clean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  161 => 56,  153 => 50,  147 => 49,  136 => 42,  125 => 10,  121 => 9,  118 => 8,  112 => 7,  100 => 6,  87 => 64,  85 => 49,  77 => 43,  75 => 42,  62 => 32,  48 => 21,  39 => 14,  37 => 7,  33 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
<title>{% block title %}FOUNDATION!{% endblock %}</title><link >
        {% block stylesheets %}
        <!-- FOUNDATION -->
              <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('foundation/css/foundation.css') }}\">
              <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('foundation/css/foundation.min.css') }}\">


        {% endblock %}

  <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.1.0/dist/leaflet.css\"
   integrity=\"sha512-wcw6ts8Anuw10Mzh9Ytw4pylW8+NAD4ch3lqm9lzAsTxg0GFeJgoAtxuCLREZSC5lUXdVyo/7yfsqFjQ4S+aKw==\"
   crossorigin=\"\"/>
   <script src=\"https://unpkg.com/leaflet@1.1.0/dist/leaflet.js\"
   integrity=\"sha512-mNqn2Wg7tSToJhvHcqfzLMU6J4mkOImSPTxVZAdo+lcPlk+GhZmYgACEe0x35K7YzW1zJ7XyJV/TT1MrdXvMcA==\"
   crossorigin=\"\"></script>
     <script src=\" {{ asset('js/data.geojson') }}\" type=\"text/javascript\"></script>
  <script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
    </head>
    <body>
 

 
<div class=\"top-bar\">
<div class=\"top-bar-left\">
<ul class=\"menu\">

<li><a href=\"{{ path('filtra')}}\">FILTRA MAPPA</a></li>
</ul>
</div>
<div class=\"top-bar-right\">
<ul class=\"menu\">
</ul>
</div>
</div>
 
<div>
{% block body %}{% endblock %}
</div>



    
        
        {% block javascripts %}


<script src=\"https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js\"></script>

           <!-- COSE FOUNDATION -->
           
            <script src=\"{{ asset('foundation/js/vendor/foundation.js') }}\"></script>
            <script src=\"{{ asset('foundation/js/vendor/foundation.min.js') }}\"></script>
   
<script>
      \$(document).foundation();
    </script>
        
        {% endblock %}
    </body>
</html>


<head>
 
</head>", "clean.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/app/Resources/views/clean.html.twig");
    }
}
