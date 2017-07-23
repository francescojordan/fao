<?php

/* formTemplate.html.twig */
class __TwigTemplate_65c873791db188f0383a3c120d71a1129eecfa988be8c6bf08e19f4f7f2da8ca extends Twig_Template
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
        $__internal_68e38924069e7aa2d9cbc5e2db2946d068b047b3190c0beb1530c2c4b2db09dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e38924069e7aa2d9cbc5e2db2946d068b047b3190c0beb1530c2c4b2db09dc->enter($__internal_68e38924069e7aa2d9cbc5e2db2946d068b047b3190c0beb1530c2c4b2db09dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formTemplate.html.twig"));

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
  
    </head>
    <body>
 

 
<div class=\"top-bar\">
<div class=\"top-bar-left\">
<ul class=\"menu\">
<li class=\"menu-text\">CREA MAPPA</li>
<li><a href=\"#\">VISUALIZZA MAPPA</a></li>
<li><a href=\"#\">STO CAZZO</a></li>
</ul>
</div>
<div class=\"top-bar-right\">
<ul class=\"menu\">
<li><a href=\"#\">STOCAZZO1</a></li>
<li><a href=\"#\">STOCAZZO2</a></li>
</ul>
</div>
</div>
 
<div>
";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "</div>



    
        
        ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "    </body>
</html>


<head>
 
</head>";
        
        $__internal_68e38924069e7aa2d9cbc5e2db2946d068b047b3190c0beb1530c2c4b2db09dc->leave($__internal_68e38924069e7aa2d9cbc5e2db2946d068b047b3190c0beb1530c2c4b2db09dc_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e2f47c17ceb82a11c9b0a5ce8eb2425f753b59fdc0798d3e42ad5d210167f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2f47c17ceb82a11c9b0a5ce8eb2425f753b59fdc0798d3e42ad5d210167f4e->enter($__internal_7e2f47c17ceb82a11c9b0a5ce8eb2425f753b59fdc0798d3e42ad5d210167f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FOUNDATION!";
        
        $__internal_7e2f47c17ceb82a11c9b0a5ce8eb2425f753b59fdc0798d3e42ad5d210167f4e->leave($__internal_7e2f47c17ceb82a11c9b0a5ce8eb2425f753b59fdc0798d3e42ad5d210167f4e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e9225d69b1985622c78558c129617522a7657846be23542a68044b31b6813e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9225d69b1985622c78558c129617522a7657846be23542a68044b31b6813e0->enter($__internal_0e9225d69b1985622c78558c129617522a7657846be23542a68044b31b6813e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0e9225d69b1985622c78558c129617522a7657846be23542a68044b31b6813e0->leave($__internal_0e9225d69b1985622c78558c129617522a7657846be23542a68044b31b6813e0_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b2fc0c3e2f749869588c52f35dcd00cc7f641ec972c6c43f30c41aaf08cf53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2fc0c3e2f749869588c52f35dcd00cc7f641ec972c6c43f30c41aaf08cf53a->enter($__internal_8b2fc0c3e2f749869588c52f35dcd00cc7f641ec972c6c43f30c41aaf08cf53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8b2fc0c3e2f749869588c52f35dcd00cc7f641ec972c6c43f30c41aaf08cf53a->leave($__internal_8b2fc0c3e2f749869588c52f35dcd00cc7f641ec972c6c43f30c41aaf08cf53a_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_18fd3a833759e3278006718d06d3c8a05ba33d02f3f3f6bd4a5cc165c137c8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fd3a833759e3278006718d06d3c8a05ba33d02f3f3f6bd4a5cc165c137c8e5->enter($__internal_18fd3a833759e3278006718d06d3c8a05ba33d02f3f3f6bd4a5cc165c137c8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "
<script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
<script src=\"https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js\"></script>

           <!-- COSE FOUNDATION -->
           
            <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("foundation/js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("foundation/js/vendor/foundation.min.js"), "html", null, true);
        echo "\"></script>
   
<script>
      \$(document).foundation();
    </script>
        
        ";
        
        $__internal_18fd3a833759e3278006718d06d3c8a05ba33d02f3f3f6bd4a5cc165c137c8e5->leave($__internal_18fd3a833759e3278006718d06d3c8a05ba33d02f3f3f6bd4a5cc165c137c8e5_prof);

    }

    public function getTemplateName()
    {
        return "formTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 60,  161 => 59,  153 => 53,  147 => 52,  136 => 45,  125 => 10,  121 => 9,  118 => 8,  112 => 7,  100 => 6,  87 => 67,  85 => 52,  77 => 46,  75 => 45,  48 => 21,  39 => 14,  37 => 7,  33 => 6,  26 => 1,);
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
  
    </head>
    <body>
 

 
<div class=\"top-bar\">
<div class=\"top-bar-left\">
<ul class=\"menu\">
<li class=\"menu-text\">CREA MAPPA</li>
<li><a href=\"#\">VISUALIZZA MAPPA</a></li>
<li><a href=\"#\">STO CAZZO</a></li>
</ul>
</div>
<div class=\"top-bar-right\">
<ul class=\"menu\">
<li><a href=\"#\">STOCAZZO1</a></li>
<li><a href=\"#\">STOCAZZO2</a></li>
</ul>
</div>
</div>
 
<div>
{% block body %}{% endblock %}
</div>



    
        
        {% block javascripts %}

<script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
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
 
</head>", "formTemplate.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/app/Resources/views/formTemplate.html.twig");
    }
}
