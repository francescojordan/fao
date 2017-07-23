<?php

/* default.html.twig */
class __TwigTemplate_1312d9a79a3a5a89b7f97fce90fab2a138b45685221a52dcd61df03e7a83e413 extends Twig_Template
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
        $__internal_ee953785f17d6f290447f9cb4a8f8565d81545aa55af86e687bb6c09fe33614f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee953785f17d6f290447f9cb4a8f8565d81545aa55af86e687bb6c09fe33614f->enter($__internal_ee953785f17d6f290447f9cb4a8f8565d81545aa55af86e687bb6c09fe33614f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default.html.twig"));

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
        // line 55
        echo "        <link rel=\"icon\" type=\"image/x-icon\" hrefsrc=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
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
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "    </div>


        
        
        
        ";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 215
        echo "    </body>
</html>
";
        
        $__internal_ee953785f17d6f290447f9cb4a8f8565d81545aa55af86e687bb6c09fe33614f->leave($__internal_ee953785f17d6f290447f9cb4a8f8565d81545aa55af86e687bb6c09fe33614f_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c762894b9da1e149833ac4c8607945314fcd55387aa01f47c90b7bef611e586c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c762894b9da1e149833ac4c8607945314fcd55387aa01f47c90b7bef611e586c->enter($__internal_c762894b9da1e149833ac4c8607945314fcd55387aa01f47c90b7bef611e586c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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





<!-- -->";
        
        $__internal_c762894b9da1e149833ac4c8607945314fcd55387aa01f47c90b7bef611e586c->leave($__internal_c762894b9da1e149833ac4c8607945314fcd55387aa01f47c90b7bef611e586c_prof);

    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a8b8df292eb9451435b8c720760b415800ab04cf934dad790b3093502f6078e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8b8df292eb9451435b8c720760b415800ab04cf934dad790b3093502f6078e->enter($__internal_0a8b8df292eb9451435b8c720760b415800ab04cf934dad790b3093502f6078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 78
        echo "        
 
        ";
        
        $__internal_0a8b8df292eb9451435b8c720760b415800ab04cf934dad790b3093502f6078e->leave($__internal_0a8b8df292eb9451435b8c720760b415800ab04cf934dad790b3093502f6078e_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48d98410b6d7001d4e231c54ebb567ace12b382081d0fce0be466e8f36759c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d98410b6d7001d4e231c54ebb567ace12b382081d0fce0be466e8f36759c6d->enter($__internal_48d98410b6d7001d4e231c54ebb567ace12b382081d0fce0be466e8f36759c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "        
    
<script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
<script src=\"https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js\"></script>

           <!-- COSE FOUNDATION -->
           
            <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("foundation/js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("foundation/js/vendor/foundation.min.js"), "html", null, true);
        echo "\"></script>
   
<script>
      \$(document).foundation();
    </script>
  
            <!-- COSE LEAFLET -->
            <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />

    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("libs/leaflet-src.js"), "html", null, true);
        echo "\"></script>
   
   
   
   <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("libs/leaflet-src.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("libs/leaflet.css"), "html", null, true);
        echo "\"/>

    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/Leaflet.draw.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/Leaflet.Draw.Event.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/leaflet.draw.css"), "html", null, true);
        echo "\"/>

    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/Toolbar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/Tooltip.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/ext/GeometryUtil.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/ext/LatLngUtil.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/ext/LineUtil.Intersect.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/ext/Polygon.Intersect.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/ext/Polyline.Intersect.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/ext/TouchEvents.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/DrawToolbar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.Feature.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.SimpleShape.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.Polyline.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.Circle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.Marker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.Polygon.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.Rectangle.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/EditToolbar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/EditToolbar.Edit.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/EditToolbar.Delete.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/Control.Draw.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/Edit.Poly.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/Edit.SimpleShape.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/Edit.Circle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/Edit.Rectangle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 146
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
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo ";


}

</script>
    
    ";
        
        $__internal_48d98410b6d7001d4e231c54ebb567ace12b382081d0fce0be466e8f36759c6d->leave($__internal_48d98410b6d7001d4e231c54ebb567ace12b382081d0fce0be466e8f36759c6d_prof);

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
        return array (  388 => 207,  324 => 146,  320 => 145,  316 => 144,  312 => 143,  308 => 142,  303 => 140,  298 => 138,  294 => 137,  290 => 136,  284 => 133,  280 => 132,  276 => 131,  272 => 130,  268 => 129,  264 => 128,  260 => 127,  256 => 126,  251 => 124,  247 => 123,  243 => 122,  239 => 121,  235 => 120,  231 => 119,  226 => 117,  222 => 116,  217 => 114,  213 => 113,  209 => 112,  204 => 110,  200 => 109,  193 => 105,  181 => 96,  177 => 95,  168 => 88,  162 => 87,  153 => 78,  147 => 77,  103 => 18,  99 => 17,  96 => 16,  90 => 15,  81 => 215,  79 => 87,  71 => 81,  69 => 77,  43 => 55,  41 => 15,  25 => 1,);
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





<!-- -->{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" hrefsrc=\"{{ asset('favicon.ico') }}\" />
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
