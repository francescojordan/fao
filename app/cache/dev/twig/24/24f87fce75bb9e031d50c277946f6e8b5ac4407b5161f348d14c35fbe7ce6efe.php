<?php

/* :default:show.html.twig */
class __TwigTemplate_93df16ddf9c28c20cb437052536ee708942e9866f807af063a7431b3ad90d2cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("formTemplate.html.twig", ":default:show.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "formTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df8497193aea1a78534f319d2788ce106cdacc12ba37e4ab80679ca2fe44e23d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8497193aea1a78534f319d2788ce106cdacc12ba37e4ab80679ca2fe44e23d->enter($__internal_df8497193aea1a78534f319d2788ce106cdacc12ba37e4ab80679ca2fe44e23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df8497193aea1a78534f319d2788ce106cdacc12ba37e4ab80679ca2fe44e23d->leave($__internal_df8497193aea1a78534f319d2788ce106cdacc12ba37e4ab80679ca2fe44e23d_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_70f15c26cb9d4279c411b82bbc079664bf5ce385a70e50ad09c1bfc132d8a230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f15c26cb9d4279c411b82bbc079664bf5ce385a70e50ad09c1bfc132d8a230->enter($__internal_70f15c26cb9d4279c411b82bbc079664bf5ce385a70e50ad09c1bfc132d8a230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "  
 ";
        // line 6
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <!-- LEAFLET -->

  

 
";
        
        $__internal_70f15c26cb9d4279c411b82bbc079664bf5ce385a70e50ad09c1bfc132d8a230->leave($__internal_70f15c26cb9d4279c411b82bbc079664bf5ce385a70e50ad09c1bfc132d8a230_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_61bce9e2f7ef297718b15f18c3c7343bb6905d7554928fd2079983ea3cd0b23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61bce9e2f7ef297718b15f18c3c7343bb6905d7554928fd2079983ea3cd0b23a->enter($__internal_61bce9e2f7ef297718b15f18c3c7343bb6905d7554928fd2079983ea3cd0b23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "


<!-- MAPPA -->
 

<p> ";
        // line 22
        echo ($context["script2"] ?? $this->getContext($context, "script2"));
        echo " </p>
<p> ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["script3"] ?? $this->getContext($context, "script3")), 2, array()), "html", null, true);
        echo " </p>
 <h1>MAPPA</h1>

 </p>   
<p> <script>document.write(bicycleRental);</script></p>
<div class=\"row\">
<div id=\"mapid\" style=\"width: 800px; height: 600px; border: 1px solid #ccc\"></div>

  
<script>
    // DICHIARAZIONE SENZA GEOJSON
\t//var mymap = L.map('mapid').setView([43.49, 13.6], 13);
    //DICHIARAZIONE CON GEOJSON
    var mymap = L.map('mapid').setView([13.43, 14.44], 13);


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

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent(\"HAI CLICCATO SULLE SEGUENTI COORDINATE \" + e.latlng.toString())
        .openOn(mymap);
}

mymap.on('click', onMapClick);


//PROVO GEOJSON
var myStyle = {
    \"color\": \"#ff7800\",
    \"weight\": 5,
    \"opacity\": 0.65
};

";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["script3"] ?? $this->getContext($context, "script3")));
        foreach ($context['_seq'] as $context["_key"] => $context["polygon"]) {
            // line 78
            echo "L.geoJSON(";
            echo $context["polygon"];
            echo ", {
    style: myStyle
}).addTo(mymap);

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['polygon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
var myStyle = {
    \"color\": \"#ff7800\",
    \"weight\": 5,
    \"opacity\": 0.65
};

L.geoJSON(";
        // line 90
        echo $this->getAttribute(($context["script3"] ?? $this->getContext($context, "script3")), 2, array());
        echo ", {
    style: myStyle
}).addTo(mymap);

//DEFINISCO LA FUNZIONE
function onEachFeature(feature, layer) {
\t\tvar popupContent = \"<p>I started out as a GeoJSON \" +
\t\t\t\tfeature.geometry.type + \", but now I'm a Leaflet vector!</p>\";

\t\tif (feature.properties && feature.properties.popupContent) {
\t\t\tpopupContent += feature.properties.popupContent;
\t\t}

\t\tlayer.bindPopup(popupContent);
\t}
\t
\tL.geoJSON([bicycleRental], {

\t\tstyle: function (feature) {
\t\t\treturn feature.properties && feature.properties.style;
\t\t},

\t\tonEachFeature: onEachFeature,

\t\tpointToLayer: function (feature, latlng) {
\t\t\treturn L.circleMarker(latlng, {
\t\t\t\tradius: 8,
\t\t\t\tfillColor: \"#ff7800\",
\t\t\t\tcolor: \"#000\",
\t\t\t\tweight: 1,
\t\t\t\topacity: 1,
\t\t\t\tfillOpacity: 0.8
\t\t\t});
\t\t}
\t}).addTo(mymap);
L.geoJSON([testLine], {

\t\tstyle: function (feature) {
\t\t\treturn feature.properties && feature.properties.style;
\t\t},

\t\tonEachFeature: onEachFeature,

\t\tpointToLayer: function (feature, latlng) {
\t\t\treturn L.circleMarker(latlng, {
\t\t\t\tradius: 8,
\t\t\t\tfillColor: \"#ff7800\",
\t\t\t\tcolor: \"#000\",
\t\t\t\tweight: 1,
\t\t\t\topacity: 1,
\t\t\t\tfillOpacity: 0.8
\t\t\t});
\t\t}
\t}).addTo(mymap);

</script>

    <div id='delete'>Delete Features</div>
    <a href='#' id='export'>Export Features</a>


</div>

";
        
        $__internal_61bce9e2f7ef297718b15f18c3c7343bb6905d7554928fd2079983ea3cd0b23a->leave($__internal_61bce9e2f7ef297718b15f18c3c7343bb6905d7554928fd2079983ea3cd0b23a_prof);

    }

    public function getTemplateName()
    {
        return ":default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 90,  149 => 83,  137 => 78,  133 => 77,  76 => 23,  72 => 22,  64 => 16,  58 => 15,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'formTemplate.html.twig' %}


{% block javascripts %}
  
 {{ parent() }}
 <!-- LEAFLET -->

  

 
{% endblock %}


{% block body %}



<!-- MAPPA -->
 

<p> {{ script2 | raw }} </p>
<p> {{ script3.2 }} </p>
 <h1>MAPPA</h1>

 </p>   
<p> <script>document.write(bicycleRental);</script></p>
<div class=\"row\">
<div id=\"mapid\" style=\"width: 800px; height: 600px; border: 1px solid #ccc\"></div>

  
<script>
    // DICHIARAZIONE SENZA GEOJSON
\t//var mymap = L.map('mapid').setView([43.49, 13.6], 13);
    //DICHIARAZIONE CON GEOJSON
    var mymap = L.map('mapid').setView([13.43, 14.44], 13);


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

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent(\"HAI CLICCATO SULLE SEGUENTI COORDINATE \" + e.latlng.toString())
        .openOn(mymap);
}

mymap.on('click', onMapClick);


//PROVO GEOJSON
var myStyle = {
    \"color\": \"#ff7800\",
    \"weight\": 5,
    \"opacity\": 0.65
};

{% for polygon in script3 %}
L.geoJSON({{ polygon | raw}}, {
    style: myStyle
}).addTo(mymap);

{% endfor %}

var myStyle = {
    \"color\": \"#ff7800\",
    \"weight\": 5,
    \"opacity\": 0.65
};

L.geoJSON({{ script3.2 | raw}}, {
    style: myStyle
}).addTo(mymap);

//DEFINISCO LA FUNZIONE
function onEachFeature(feature, layer) {
\t\tvar popupContent = \"<p>I started out as a GeoJSON \" +
\t\t\t\tfeature.geometry.type + \", but now I'm a Leaflet vector!</p>\";

\t\tif (feature.properties && feature.properties.popupContent) {
\t\t\tpopupContent += feature.properties.popupContent;
\t\t}

\t\tlayer.bindPopup(popupContent);
\t}
\t
\tL.geoJSON([bicycleRental], {

\t\tstyle: function (feature) {
\t\t\treturn feature.properties && feature.properties.style;
\t\t},

\t\tonEachFeature: onEachFeature,

\t\tpointToLayer: function (feature, latlng) {
\t\t\treturn L.circleMarker(latlng, {
\t\t\t\tradius: 8,
\t\t\t\tfillColor: \"#ff7800\",
\t\t\t\tcolor: \"#000\",
\t\t\t\tweight: 1,
\t\t\t\topacity: 1,
\t\t\t\tfillOpacity: 0.8
\t\t\t});
\t\t}
\t}).addTo(mymap);
L.geoJSON([testLine], {

\t\tstyle: function (feature) {
\t\t\treturn feature.properties && feature.properties.style;
\t\t},

\t\tonEachFeature: onEachFeature,

\t\tpointToLayer: function (feature, latlng) {
\t\t\treturn L.circleMarker(latlng, {
\t\t\t\tradius: 8,
\t\t\t\tfillColor: \"#ff7800\",
\t\t\t\tcolor: \"#000\",
\t\t\t\tweight: 1,
\t\t\t\topacity: 1,
\t\t\t\tfillOpacity: 0.8
\t\t\t});
\t\t}
\t}).addTo(mymap);

</script>

    <div id='delete'>Delete Features</div>
    <a href='#' id='export'>Export Features</a>


</div>

{% endblock %}

", ":default:show.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/app/Resources/views/default/show.html.twig");
    }
}
