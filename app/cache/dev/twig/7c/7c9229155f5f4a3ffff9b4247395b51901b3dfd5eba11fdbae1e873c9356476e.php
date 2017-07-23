<?php

/* :admin:mappafiltrata.html.twig */
class __TwigTemplate_a81db39649987fbf0d549f690b2e3aa0cd36e4c4b6985d53b3af31ff95519e15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("clean.html.twig", ":admin:mappafiltrata.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "clean.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_042184d02892be6ffa5a61c0b23fe4f676ceb2be3bd280fbd306f89b3591f5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042184d02892be6ffa5a61c0b23fe4f676ceb2be3bd280fbd306f89b3591f5f7->enter($__internal_042184d02892be6ffa5a61c0b23fe4f676ceb2be3bd280fbd306f89b3591f5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:mappafiltrata.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_042184d02892be6ffa5a61c0b23fe4f676ceb2be3bd280fbd306f89b3591f5f7->leave($__internal_042184d02892be6ffa5a61c0b23fe4f676ceb2be3bd280fbd306f89b3591f5f7_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_62e2bc35e88263f765a7d401bd3e057299c96541264059d123d91747f717d897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e2bc35e88263f765a7d401bd3e057299c96541264059d123d91747f717d897->enter($__internal_62e2bc35e88263f765a7d401bd3e057299c96541264059d123d91747f717d897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "  
 ";
        // line 6
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <!-- LEAFLET -->

  
";
        
        $__internal_62e2bc35e88263f765a7d401bd3e057299c96541264059d123d91747f717d897->leave($__internal_62e2bc35e88263f765a7d401bd3e057299c96541264059d123d91747f717d897_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9ddc33d69ae49e6d709df073d7406339029c8e55d6f18445a4c7a47f074f88d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ddc33d69ae49e6d709df073d7406339029c8e55d6f18445a4c7a47f074f88d->enter($__internal_b9ddc33d69ae49e6d709df073d7406339029c8e55d6f18445a4c7a47f074f88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "


<!-- MAPPA -->
 

 <h1>MAPPA</h1>
<div class=\"row\">
<div id=\"mapid\" style=\"width: 800px; height: 600px; border: 1px solid #ccc\"></div>

  
<script>
    // DICHIARAZIONE SENZA GEOJSON
    //DICHIARAZIONE CON GEOJSON
    var mymap = L.map('mapid').setView([43.44,13.6], 13);


\tL.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
\t\tmaxZoom: 18,
\t\tattribution: 'Map data &copy; <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors, ' +
\t\t\t'<a href=\"http://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, ' +
\t\t\t'Imagery © <a href=\"http://mapbox.com\">Mapbox</a>',
\t\tid: 'mapbox.streets'
\t}).addTo(mymap);


//AGGIUNGO POLIGONO

//PRIMO VALORE LONGITUDINE
//SECONDO LATITUDINE

//AGGIUNGO UN POPUP AL POLIGONO

//GESTISCO EVENTI
//CREO UN POP UO CHE MI MOSTRA LE COORDINATE DOVE STO CLICCANDO

var popup = L.popup();



//PROVO GEOJSON
var uno = {
    \"color\": \"#FFFF00\",
    \"weight\": 5,
    \"opacity\": 0.65
};



var due = {
    \"color\": \"#FFA420\",
    \"weight\": 5,
    \"opacity\": 0.65
};
var tre = {
    \"color\": \"#EC7C26\",
    \"weight\": 5,
    \"opacity\": 0.65
};


var quattro = {
    \"color\": \"#E55137\",
    \"weight\": 5,
    \"opacity\": 0.65
};

var cinque = {
    \"color\": \"#A2231D\",
    \"weight\": 5,
    \"opacity\": 0.65
};


 ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arrayquery"] ?? $this->getContext($context, "arrayquery")));
        foreach ($context['_seq'] as $context["_key"] => $context["variab"]) {
            // line 89
            echo "
var stile;
if (";
            // line 91
            echo $this->getAttribute($context["variab"], "valorepescato", array());
            echo " == 1) stile = uno;
if (";
            // line 92
            echo $this->getAttribute($context["variab"], "valorepescato", array());
            echo " == 2) stile = due;
if (";
            // line 93
            echo $this->getAttribute($context["variab"], "valorepescato", array());
            echo " == 3) stile = tre;
if (";
            // line 94
            echo $this->getAttribute($context["variab"], "valorepescato", array());
            echo " == 4) stile = quattro;
if (";
            // line 95
            echo $this->getAttribute($context["variab"], "valorepescato", array());
            echo " == 5) stile = cinque ;

\t 
//DEFINISCO LA FUNZIONE
function onEachFeature(feature, layer) {
\t\tvar popupContent = \"<p>VALORE PESCATO: ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["variab"], "valorepescato", array()), "html", null, true);
            echo " </p><p>TIPOLOGIA DI PESCA: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["variab"], "tipologiapesca", array()), "html", null, true);
            echo " </p>\";

\t\tif (feature.properties && feature.properties.popupContent) {
\t\t\tpopupContent += feature.properties.popupContent;
\t\t}

\t\tlayer.bindPopup(popupContent);
\t}
\t


L.geoJSON(";
            // line 111
            echo $this->getAttribute($context["variab"], "st_asgeojson", array());
            echo ", {
\t\tstyle: stile,

\t\tonEachFeature: onEachFeature,

}).addTo(mymap);
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "\t

</script>

    <div id='delete'>Delete Features</div>
    <a href='#' id='export'>Export Features</a>


</div>

";
        
        $__internal_b9ddc33d69ae49e6d709df073d7406339029c8e55d6f18445a4c7a47f074f88d->leave($__internal_b9ddc33d69ae49e6d709df073d7406339029c8e55d6f18445a4c7a47f074f88d_prof);

    }

    public function getTemplateName()
    {
        return ":admin:mappafiltrata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 118,  186 => 111,  170 => 100,  162 => 95,  158 => 94,  154 => 93,  150 => 92,  146 => 91,  142 => 89,  138 => 88,  62 => 14,  56 => 13,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'clean.html.twig' %}


{% block javascripts %}
  
 {{ parent() }}
 <!-- LEAFLET -->

  
{% endblock %}


{% block body %}



<!-- MAPPA -->
 

 <h1>MAPPA</h1>
<div class=\"row\">
<div id=\"mapid\" style=\"width: 800px; height: 600px; border: 1px solid #ccc\"></div>

  
<script>
    // DICHIARAZIONE SENZA GEOJSON
    //DICHIARAZIONE CON GEOJSON
    var mymap = L.map('mapid').setView([43.44,13.6], 13);


\tL.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
\t\tmaxZoom: 18,
\t\tattribution: 'Map data &copy; <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors, ' +
\t\t\t'<a href=\"http://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, ' +
\t\t\t'Imagery © <a href=\"http://mapbox.com\">Mapbox</a>',
\t\tid: 'mapbox.streets'
\t}).addTo(mymap);


//AGGIUNGO POLIGONO

//PRIMO VALORE LONGITUDINE
//SECONDO LATITUDINE

//AGGIUNGO UN POPUP AL POLIGONO

//GESTISCO EVENTI
//CREO UN POP UO CHE MI MOSTRA LE COORDINATE DOVE STO CLICCANDO

var popup = L.popup();



//PROVO GEOJSON
var uno = {
    \"color\": \"#FFFF00\",
    \"weight\": 5,
    \"opacity\": 0.65
};



var due = {
    \"color\": \"#FFA420\",
    \"weight\": 5,
    \"opacity\": 0.65
};
var tre = {
    \"color\": \"#EC7C26\",
    \"weight\": 5,
    \"opacity\": 0.65
};


var quattro = {
    \"color\": \"#E55137\",
    \"weight\": 5,
    \"opacity\": 0.65
};

var cinque = {
    \"color\": \"#A2231D\",
    \"weight\": 5,
    \"opacity\": 0.65
};


 {% for variab in arrayquery %}

var stile;
if ({{ variab.valorepescato | raw }} == 1) stile = uno;
if ({{ variab.valorepescato | raw }} == 2) stile = due;
if ({{ variab.valorepescato | raw }} == 3) stile = tre;
if ({{ variab.valorepescato | raw }} == 4) stile = quattro;
if ({{ variab.valorepescato | raw }} == 5) stile = cinque ;

\t 
//DEFINISCO LA FUNZIONE
function onEachFeature(feature, layer) {
\t\tvar popupContent = \"<p>VALORE PESCATO: {{variab.valorepescato}} </p><p>TIPOLOGIA DI PESCA: {{variab.tipologiapesca}} </p>\";

\t\tif (feature.properties && feature.properties.popupContent) {
\t\t\tpopupContent += feature.properties.popupContent;
\t\t}

\t\tlayer.bindPopup(popupContent);
\t}
\t


L.geoJSON({{ variab.st_asgeojson | raw }}, {
\t\tstyle: stile,

\t\tonEachFeature: onEachFeature,

}).addTo(mymap);
    {% endfor %}
\t

</script>

    <div id='delete'>Delete Features</div>
    <a href='#' id='export'>Export Features</a>


</div>

{% endblock %}

", ":admin:mappafiltrata.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/app/Resources/views/admin/mappafiltrata.html.twig");
    }
}
