<?php

/* clean.html.twig */
class __TwigTemplate_a06b4e99cd562731124a2f648eb9c88371fa3ec33d13d98e460203d6aae643d6 extends Twig_Template
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
        $__internal_002751fd479e2649f12252c34cc1c073105d95276e07b3cfcd12ca4731175f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002751fd479e2649f12252c34cc1c073105d95276e07b3cfcd12ca4731175f54->enter($__internal_002751fd479e2649f12252c34cc1c073105d95276e07b3cfcd12ca4731175f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clean.html.twig"));

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
        
        $__internal_002751fd479e2649f12252c34cc1c073105d95276e07b3cfcd12ca4731175f54->leave($__internal_002751fd479e2649f12252c34cc1c073105d95276e07b3cfcd12ca4731175f54_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad2369d4cc241df3c6655ad83961c25b4da48be7702495e39a867c98b46aef03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2369d4cc241df3c6655ad83961c25b4da48be7702495e39a867c98b46aef03->enter($__internal_ad2369d4cc241df3c6655ad83961c25b4da48be7702495e39a867c98b46aef03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FOUNDATION!";
        
        $__internal_ad2369d4cc241df3c6655ad83961c25b4da48be7702495e39a867c98b46aef03->leave($__internal_ad2369d4cc241df3c6655ad83961c25b4da48be7702495e39a867c98b46aef03_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4122dc0dc798bdd1223cd58a296fdaaf8ad7bf9399faaa4b9d4e50f801d3ac56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4122dc0dc798bdd1223cd58a296fdaaf8ad7bf9399faaa4b9d4e50f801d3ac56->enter($__internal_4122dc0dc798bdd1223cd58a296fdaaf8ad7bf9399faaa4b9d4e50f801d3ac56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4122dc0dc798bdd1223cd58a296fdaaf8ad7bf9399faaa4b9d4e50f801d3ac56->leave($__internal_4122dc0dc798bdd1223cd58a296fdaaf8ad7bf9399faaa4b9d4e50f801d3ac56_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_f143a2ed4502bbdbe980de284b1789eb40619055ed3ae5c4b15a8db047e97cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f143a2ed4502bbdbe980de284b1789eb40619055ed3ae5c4b15a8db047e97cbf->enter($__internal_f143a2ed4502bbdbe980de284b1789eb40619055ed3ae5c4b15a8db047e97cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f143a2ed4502bbdbe980de284b1789eb40619055ed3ae5c4b15a8db047e97cbf->leave($__internal_f143a2ed4502bbdbe980de284b1789eb40619055ed3ae5c4b15a8db047e97cbf_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3779abb280307b26516988c53fe722ea51aa19d68b74f624f493d7704aad1359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3779abb280307b26516988c53fe722ea51aa19d68b74f624f493d7704aad1359->enter($__internal_3779abb280307b26516988c53fe722ea51aa19d68b74f624f493d7704aad1359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3779abb280307b26516988c53fe722ea51aa19d68b74f624f493d7704aad1359->leave($__internal_3779abb280307b26516988c53fe722ea51aa19d68b74f624f493d7704aad1359_prof);

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
