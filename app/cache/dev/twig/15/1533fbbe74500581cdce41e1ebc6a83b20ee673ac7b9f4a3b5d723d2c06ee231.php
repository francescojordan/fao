<?php

/* default.html.twig */
class __TwigTemplate_aa472e131c9b6a59114bdb0be26e910252749fa71e15e428212bda87e6006857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54a882adb87cfcb058a72c6a1cbb0ad2df37c2040412b295f8e93a9792e5b029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a882adb87cfcb058a72c6a1cbb0ad2df37c2040412b295f8e93a9792e5b029->enter($__internal_54a882adb87cfcb058a72c6a1cbb0ad2df37c2040412b295f8e93a9792e5b029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Prova MAPPA</title>
        
    
    
    <!--   CSS -->




        
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "        <link rel=\"icon\" type=\"image/x-icon\" hrefsrc=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

 
<div class=\"top-bar\">
<div class=\"top-bar-left\">
<ul class=\"menu\">
<li class=\"menu-text\">CREA MAPPA</li>
</ul>
</div>
<div class=\"top-bar-right\">
<ul class=\"menu\">
</ul>
</div>
</div>
 
<div>
        ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "    </div>


        
        
        
        ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 194
        echo "    </body>
</html>
";
        
        $__internal_54a882adb87cfcb058a72c6a1cbb0ad2df37c2040412b295f8e93a9792e5b029->leave($__internal_54a882adb87cfcb058a72c6a1cbb0ad2df37c2040412b295f8e93a9792e5b029_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c8531d09b4d24b444e8e107ceb3733f8738054e537283ce2a64cf003cde7b9e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8531d09b4d24b444e8e107ceb3733f8738054e537283ce2a64cf003cde7b9e7->enter($__internal_c8531d09b4d24b444e8e107ceb3733f8738054e537283ce2a64cf003cde7b9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "                 <!-- FOUNDATION -->
              <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("foundation/css/foundation.css"), "html", null, true);
        echo "\">
              <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("foundation/css/foundation.min.css"), "html", null, true);
        echo "\">

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
    </style>





<!-- -->";
        
        $__internal_c8531d09b4d24b444e8e107ceb3733f8738054e537283ce2a64cf003cde7b9e7->leave($__internal_c8531d09b4d24b444e8e107ceb3733f8738054e537283ce2a64cf003cde7b9e7_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_c14c15a94c55d3834a718f126f843b0fdbaefe6d1373b9ba2c6128f7bba1b36e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14c15a94c55d3834a718f126f843b0fdbaefe6d1373b9ba2c6128f7bba1b36e->enter($__internal_c14c15a94c55d3834a718f126f843b0fdbaefe6d1373b9ba2c6128f7bba1b36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 57
        echo "        
 
        ";
        
        $__internal_c14c15a94c55d3834a718f126f843b0fdbaefe6d1373b9ba2c6128f7bba1b36e->leave($__internal_c14c15a94c55d3834a718f126f843b0fdbaefe6d1373b9ba2c6128f7bba1b36e_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f49251c2cec3b22e6f3bdab390cee2a3fd051dc7dec3ab93787c667edb31968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f49251c2cec3b22e6f3bdab390cee2a3fd051dc7dec3ab93787c667edb31968->enter($__internal_7f49251c2cec3b22e6f3bdab390cee2a3fd051dc7dec3ab93787c667edb31968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "        
    
<script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
<script src=\"https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js\"></script>

           <!-- COSE FOUNDATION -->
           
            <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("foundation/js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("foundation/js/vendor/foundation.min.js"), "html", null, true);
        echo "\"></script>
   
<script>
      \$(document).foundation();
    </script>
  
            <!-- COSE LEAFLET -->
            <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />

    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("libs/leaflet-src.js"), "html", null, true);
        echo "\"></script>
   
   
   
   <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("libs/leaflet-src.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("libs/leaflet.css"), "html", null, true);
        echo "\"/>

    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/Leaflet.draw.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/Leaflet.Draw.Event.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/leaflet.draw.css"), "html", null, true);
        echo "\"/>

    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/Toolbar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/Tooltip.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/ext/GeometryUtil.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/ext/LatLngUtil.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/ext/LineUtil.Intersect.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/ext/Polygon.Intersect.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/ext/Polyline.Intersect.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/ext/TouchEvents.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/DrawToolbar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.Feature.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.SimpleShape.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.Polyline.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.Circle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.Marker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.Polygon.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.Rectangle.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/EditToolbar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/EditToolbar.Edit.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/EditToolbar.Delete.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/Control.Draw.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/Edit.Poly.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/Edit.SimpleShape.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/Edit.Circle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/Edit.Rectangle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/Edit.Marker.js"), "html", null, true);
        echo "\"></script>


    
    <!-- fine cose leaflet -->
    <script>
    var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            osmAttrib = '&copy; <a href=\"http://openstreetmap.org/copyright\">OpenStreetMap</a> contributors',
            osm = L.tileLayer(osmUrl, { maxZoom: 18, attribution: osmAttrib }),
            map = new L.Map('map', { center: new L.LatLng(43.49, 13.6), zoom: 13 }),
            drawnItems = L.featureGroup().addTo(map);

   //AGGIUNGI LAYERS (OSM/GOOGLE)
       L.control.layers({
        'osm': osm.addTo(map),
        \"google\": L.tileLayer('http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}', {
            attribution: 'google'
        })
    }, { 'drawlayer': drawnItems }, { position: 'topleft', collapsed: false }).addTo(map);
    map.addControl(new L.Control.Draw({
        edit: {
            featureGroup: drawnItems,
            poly: {
                allowIntersection: false
            }
        },
        draw: {
            polygon: {
                allowIntersection: false,
                showArea: true
            }
        }
    }));


//GESTISCO ESPORTAZIONE

 var featureGroup = L.featureGroup().addTo(map);
    map.on(L.Draw.Event.CREATED, function (event) {
        var layer = event.layer;
        drawnItems.addLayer(layer);
        featureGroup.addLayer(event.layer);

    });


//GESTISCO L'ESPORTAZIONE
 //SCARICO IL GEOJSON NEL CASO IN CUI HO DISEGNATO I POLIGONI 
        var drawControl = new L.Control.Draw({
            edit: {
                featureGroup: featureGroup
            }
        }).addTo(map);

 document.getElementById('pescato_save').onclick = function(e) {
 
 
            // Extract GeoJson from featureGroup
            var data = featureGroup.toGeoJSON();
            var convertedData = '' + JSON.stringify(data);
            document.getElementById(\"pescato_geojson\").value = convertedData;
            document.getElementById(\"pescato_idutente\").value = ";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo ";


}

</script>
    
    ";
        
        $__internal_7f49251c2cec3b22e6f3bdab390cee2a3fd051dc7dec3ab93787c667edb31968->leave($__internal_7f49251c2cec3b22e6f3bdab390cee2a3fd051dc7dec3ab93787c667edb31968_prof);

    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 186,  303 => 125,  299 => 124,  295 => 123,  291 => 122,  287 => 121,  282 => 119,  277 => 117,  273 => 116,  269 => 115,  263 => 112,  259 => 111,  255 => 110,  251 => 109,  247 => 108,  243 => 107,  239 => 106,  235 => 105,  230 => 103,  226 => 102,  222 => 101,  218 => 100,  214 => 99,  210 => 98,  205 => 96,  201 => 95,  196 => 93,  192 => 92,  188 => 91,  183 => 89,  179 => 88,  172 => 84,  160 => 75,  156 => 74,  147 => 67,  141 => 66,  132 => 57,  126 => 56,  99 => 18,  95 => 17,  92 => 16,  86 => 15,  77 => 194,  75 => 66,  67 => 60,  65 => 56,  43 => 38,  41 => 15,  25 => 1,);
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
        <title>Prova MAPPA</title>
        
    
    
    <!--   CSS -->




        
        {% block stylesheets %}
                 <!-- FOUNDATION -->
              <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('foundation/css/foundation.css') }}\">
              <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('foundation/css/foundation.min.css') }}\">

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
    </style>





<!-- -->{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" hrefsrc=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

 
<div class=\"top-bar\">
<div class=\"top-bar-left\">
<ul class=\"menu\">
<li class=\"menu-text\">CREA MAPPA</li>
</ul>
</div>
<div class=\"top-bar-right\">
<ul class=\"menu\">
</ul>
</div>
</div>
 
<div>
        {% block body %}
        
 
        {% endblock %}
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
  
            <!-- COSE LEAFLET -->
            <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />

    <script src=\"{{ asset('libs/leaflet-src.js') }}\"></script>
   
   
   
   <script src=\"{{ asset('libs/leaflet-src.js') }}\"></script>
    <link rel=\"stylesheet\" href=\"{{ asset('libs/leaflet.css') }}\"/>

    <script src=\"{{ asset('src/Leaflet.draw.js') }}\"></script>
    <script src=\"{{ asset('src/Leaflet.Draw.Event.js') }}\"></script>
    <link rel=\"stylesheet\" href=\"{{ asset('src/leaflet.draw.css') }}\"/>

    <script src=\"{{ asset('src/Toolbar.js') }}\"></script>
    <script src=\"{{ asset('src/Tooltip.js') }}\"></script>

    <script src=\"{{ asset('src/ext/GeometryUtil.js') }}\"></script>
    <script src=\"{{ asset('src/ext/LatLngUtil.js') }}\"></script>
    <script src=\"{{ asset('src/ext/LineUtil.Intersect.js') }}\"></script>
    <script src=\"{{ asset('src/ext/Polygon.Intersect.js') }}\"></script>
    <script src=\"{{ asset('src/ext/Polyline.Intersect.js') }}\"></script>
    <script src=\"{{ asset('src/ext/TouchEvents.js') }}\"></script>

    <script src=\"{{ asset('src/draw/DrawToolbar.js') }}\"></script>
    <script src=\"{{ asset('src/draw/handler/Draw.Feature.js') }}\"></script>
    <script src=\"{{ asset('src/draw/handler/Draw.SimpleShape.js') }}\"></script>
    <script src=\"{{ asset('src/draw/handler/Draw.Polyline.js') }}\"></script>
    <script src=\"{{ asset('src/draw/handler/Draw.Circle.js') }}\"></script>
    <script src=\"{{ asset('src/draw/handler/Draw.Marker.js') }}\"></script>
    <script src=\"{{ asset('src/draw/handler/Draw.Polygon.js') }}\"></script>
    <script src=\"{{ asset('src/draw/handler/Draw.Rectangle.js') }}\"></script>


    <script src=\"{{ asset('src/edit/EditToolbar.js') }}\"></script>
    <script src=\"{{ asset('src/edit/handler/EditToolbar.Edit.js') }}\"></script>
    <script src=\"{{ asset('src/edit/handler/EditToolbar.Delete.js') }}\"></script>

    <script src=\"{{ asset('src/Control.Draw.js') }}\"></script>

    <script src=\"{{ asset('src/edit/handler/Edit.Poly.js') }}\"></script>
    <script src=\"{{ asset('src/edit/handler/Edit.SimpleShape.js') }}\"></script>
    <script src=\"{{ asset('src/edit/handler/Edit.Circle.js') }}\"></script>
    <script src=\"{{ asset('src/edit/handler/Edit.Rectangle.js') }}\"></script>
    <script src=\"{{ asset('src/edit/handler/Edit.Marker.js') }}\"></script>


    
    <!-- fine cose leaflet -->
    <script>
    var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            osmAttrib = '&copy; <a href=\"http://openstreetmap.org/copyright\">OpenStreetMap</a> contributors',
            osm = L.tileLayer(osmUrl, { maxZoom: 18, attribution: osmAttrib }),
            map = new L.Map('map', { center: new L.LatLng(43.49, 13.6), zoom: 13 }),
            drawnItems = L.featureGroup().addTo(map);

   //AGGIUNGI LAYERS (OSM/GOOGLE)
       L.control.layers({
        'osm': osm.addTo(map),
        \"google\": L.tileLayer('http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}', {
            attribution: 'google'
        })
    }, { 'drawlayer': drawnItems }, { position: 'topleft', collapsed: false }).addTo(map);
    map.addControl(new L.Control.Draw({
        edit: {
            featureGroup: drawnItems,
            poly: {
                allowIntersection: false
            }
        },
        draw: {
            polygon: {
                allowIntersection: false,
                showArea: true
            }
        }
    }));


//GESTISCO ESPORTAZIONE

 var featureGroup = L.featureGroup().addTo(map);
    map.on(L.Draw.Event.CREATED, function (event) {
        var layer = event.layer;
        drawnItems.addLayer(layer);
        featureGroup.addLayer(event.layer);

    });


//GESTISCO L'ESPORTAZIONE
 //SCARICO IL GEOJSON NEL CASO IN CUI HO DISEGNATO I POLIGONI 
        var drawControl = new L.Control.Draw({
            edit: {
                featureGroup: featureGroup
            }
        }).addTo(map);

 document.getElementById('pescato_save').onclick = function(e) {
 
 
            // Extract GeoJson from featureGroup
            var data = featureGroup.toGeoJSON();
            var convertedData = '' + JSON.stringify(data);
            document.getElementById(\"pescato_geojson\").value = convertedData;
            document.getElementById(\"pescato_idutente\").value = {{ app.user.id }};


}

</script>
    
    {% endblock %}
    </body>
</html>
", "default.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/app/Resources/views/default.html.twig");
    }
}
