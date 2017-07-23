<?php

/* foundationT.html.twig */
class __TwigTemplate_3e65f81ae71749af2d0aa8e5b0f4a5a601b4fc862f5176fe188437b0599f5a2b extends Twig_Template
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
        $__internal_8d7ee9ce2b4270b0cbafb581259791c857def93a7eb0b796616317fb7b836798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7ee9ce2b4270b0cbafb581259791c857def93a7eb0b796616317fb7b836798->enter($__internal_8d7ee9ce2b4270b0cbafb581259791c857def93a7eb0b796616317fb7b836798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundationT.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title><link rel=\"stylesheet\" href=\"https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css\">
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css\" rel='stylesheet' type='text/css'>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
    </head>
    <body>
 

<style>.slide-in-down.mui-enter,.slide-in-left.mui-enter,.slide-in-up.mui-enter,.slide-in-right.mui-enter,.slide-out-down.mui-leave,.slide-out-right.mui-leave,.slide-out-up.mui-leave,.slide-out-left.mui-leave,.fade-in.mui-enter,.fade-out.mui-leave,.hinge-in-from-top.mui-enter,.hinge-in-from-right.mui-enter,.hinge-in-from-bottom.mui-enter,.hinge-in-from-left.mui-enter,.hinge-in-from-middle-x.mui-enter,.hinge-in-from-middle-y.mui-enter,.hinge-out-from-top.mui-leave,.hinge-out-from-right.mui-leave,.hinge-out-from-bottom.mui-leave,.hinge-out-from-left.mui-leave,.hinge-out-from-middle-x.mui-leave,.hinge-out-from-middle-y.mui-leave,.scale-in-up.mui-enter,.scale-in-down.mui-enter,.scale-out-up.mui-leave,.scale-out-down.mui-leave,.spin-in.mui-enter,.spin-out.mui-leave,.spin-in-ccw.mui-enter,.spin-out-ccw.mui-leave{transition-duration:500ms;transition-timing-function:linear;}.slide-in-down.mui-enter{-webkit-transform:translateY(-100%);transform:translateY(-100%);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;-webkit-backface-visibility:hidden;backface-visibility:hidden;}.slide-in-down.mui-enter.mui-enter-active{-webkit-transform:translateY(0);transform:translateY(0);}.slide-in-left.mui-enter{-webkit-transform:translateX(-100%);transform:translateX(-100%);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;-webkit-backface-visibility:hidden;backface-visibility:hidden;}.slide-in-left.mui-enter.mui-enter-active{-webkit-transform:translateX(0);transform:translateX(0);}.slide-in-up.mui-enter{-webkit-transform:translateY(100%);transform:translateY(100%);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;-webkit-backface-visibility:hidden;backface-visibility:hidden;}.slide-in-up.mui-enter.mui-enter-active{-webkit-transform:translateY(0);transform:translateY(0);}.slide-in-right.mui-enter{-webkit-transform:translateX(100%);transform:translateX(100%);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;-webkit-backface-visibility:hidden;backface-visibility:hidden;}.slide-in-right.mui-enter.mui-enter-active{-webkit-transform:translateX(0);transform:translateX(0);}.slide-out-down.mui-leave{-webkit-transform:translateY(0);transform:translateY(0);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;-webkit-backface-visibility:hidden;backface-visibility:hidden;}.slide-out-down.mui-leave.mui-leave-active{-webkit-transform:translateY(-100%);transform:translateY(-100%);}.slide-out-right.mui-leave{-webkit-transform:translateX(0);transform:translateX(0);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;-webkit-backface-visibility:hidden;backface-visibility:hidden;}.slide-out-right.mui-leave.mui-leave-active{-webkit-transform:translateX(100%);transform:translateX(100%);}.slide-out-up.mui-leave{-webkit-transform:translateY(0);transform:translateY(0);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;-webkit-backface-visibility:hidden;backface-visibility:hidden;}.slide-out-up.mui-leave.mui-leave-active{-webkit-transform:translateY(-100%);transform:translateY(-100%);}.slide-out-left.mui-leave{-webkit-transform:translateX(0);transform:translateX(0);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;-webkit-backface-visibility:hidden;backface-visibility:hidden;}.slide-out-left.mui-leave.mui-leave-active{-webkit-transform:translateX(-100%);transform:translateX(-100%);}.fade-in.mui-enter{opacity:0;transition-property:opacity;}.fade-in.mui-enter.mui-enter-active{opacity:1;}.fade-out.mui-leave{opacity:1;transition-property:opacity;}.fade-out.mui-leave.mui-leave-active{opacity:0;}.hinge-in-from-top.mui-enter{-webkit-transform:perspective(2000px) rotateX(-90deg);transform:perspective(2000px) rotateX(-90deg);-webkit-transform-origin:top;transform-origin:top;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.hinge-in-from-top.mui-enter.mui-enter-active{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);opacity:1;}.hinge-in-from-right.mui-enter{-webkit-transform:perspective(2000px) rotateY(-90deg);transform:perspective(2000px) rotateY(-90deg);-webkit-transform-origin:right;transform-origin:right;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.hinge-in-from-right.mui-enter.mui-enter-active{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);opacity:1;}.hinge-in-from-bottom.mui-enter{-webkit-transform:perspective(2000px) rotateX(90deg);transform:perspective(2000px) rotateX(90deg);-webkit-transform-origin:bottom;transform-origin:bottom;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.hinge-in-from-bottom.mui-enter.mui-enter-active{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);opacity:1;}.hinge-in-from-left.mui-enter{-webkit-transform:perspective(2000px) rotateY(90deg);transform:perspective(2000px) rotateY(90deg);-webkit-transform-origin:left;transform-origin:left;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.hinge-in-from-left.mui-enter.mui-enter-active{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);opacity:1;}.hinge-in-from-middle-x.mui-enter{-webkit-transform:perspective(2000px) rotateX(-90deg);transform:perspective(2000px) rotateX(-90deg);-webkit-transform-origin:center;transform-origin:center;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.hinge-in-from-middle-x.mui-enter.mui-enter-active{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);opacity:1;}.hinge-in-from-middle-y.mui-enter{-webkit-transform:perspective(2000px) rotateY(-90deg);transform:perspective(2000px) rotateY(-90deg);-webkit-transform-origin:center;transform-origin:center;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.hinge-in-from-middle-y.mui-enter.mui-enter-active{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);opacity:1;}.hinge-out-from-top.mui-leave{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);-webkit-transform-origin:top;transform-origin:top;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.hinge-out-from-top.mui-leave.mui-leave-active{-webkit-transform:perspective(2000px) rotateX(-90deg);transform:perspective(2000px) rotateX(-90deg);opacity:0;}.hinge-out-from-right.mui-leave{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);-webkit-transform-origin:right;transform-origin:right;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.hinge-out-from-right.mui-leave.mui-leave-active{-webkit-transform:perspective(2000px) rotateY(-90deg);transform:perspective(2000px) rotateY(-90deg);opacity:0;}.hinge-out-from-bottom.mui-leave{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);-webkit-transform-origin:bottom;transform-origin:bottom;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.hinge-out-from-bottom.mui-leave.mui-leave-active{-webkit-transform:perspective(2000px) rotateX(90deg);transform:perspective(2000px) rotateX(90deg);opacity:0;}.hinge-out-from-left.mui-leave{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);-webkit-transform-origin:left;transform-origin:left;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.hinge-out-from-left.mui-leave.mui-leave-active{-webkit-transform:perspective(2000px) rotateY(90deg);transform:perspective(2000px) rotateY(90deg);opacity:0;}.hinge-out-from-middle-x.mui-leave{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);-webkit-transform-origin:center;transform-origin:center;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.hinge-out-from-middle-x.mui-leave.mui-leave-active{-webkit-transform:perspective(2000px) rotateX(-90deg);transform:perspective(2000px) rotateX(-90deg);opacity:0;}.hinge-out-from-middle-y.mui-leave{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);-webkit-transform-origin:center;transform-origin:center;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.hinge-out-from-middle-y.mui-leave.mui-leave-active{-webkit-transform:perspective(2000px) rotateY(-90deg);transform:perspective(2000px) rotateY(-90deg);opacity:0;}.scale-in-up.mui-enter{-webkit-transform:scale(0.5);transform:scale(0.5);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.scale-in-up.mui-enter.mui-enter-active{-webkit-transform:scale(1);transform:scale(1);opacity:1;}.scale-in-down.mui-enter{-webkit-transform:scale(1.5);transform:scale(1.5);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.scale-in-down.mui-enter.mui-enter-active{-webkit-transform:scale(1);transform:scale(1);opacity:1;}.scale-out-up.mui-leave{-webkit-transform:scale(1);transform:scale(1);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.scale-out-up.mui-leave.mui-leave-active{-webkit-transform:scale(1.5);transform:scale(1.5);opacity:0;}.scale-out-down.mui-leave{-webkit-transform:scale(1);transform:scale(1);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.scale-out-down.mui-leave.mui-leave-active{-webkit-transform:scale(0.5);transform:scale(0.5);opacity:0;}.spin-in.mui-enter{-webkit-transform:rotate(-0.75turn);transform:rotate(-0.75turn);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.spin-in.mui-enter.mui-enter-active{-webkit-transform:rotate(0);transform:rotate(0);opacity:1;}.spin-out.mui-leave{-webkit-transform:rotate(0);transform:rotate(0);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.spin-out.mui-leave.mui-leave-active{-webkit-transform:rotate(0.75turn);transform:rotate(0.75turn);opacity:0;}.spin-in-ccw.mui-enter{-webkit-transform:rotate(0.75turn);transform:rotate(0.75turn);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.spin-in-ccw.mui-enter.mui-enter-active{-webkit-transform:rotate(0);transform:rotate(0);opacity:1;}.spin-out-ccw.mui-leave{-webkit-transform:rotate(0);transform:rotate(0);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.spin-out-ccw.mui-leave.mui-leave-active{-webkit-transform:rotate(-0.75turn);transform:rotate(-0.75turn);opacity:0;}.slow{transition-duration:750ms!important;}.fast{transition-duration:250ms!important;}.linear{transition-timing-function:linear!important;}.ease{transition-timing-function:ease!important;}.ease-in{transition-timing-function:ease-in!important;}.ease-out{transition-timing-function:ease-out!important;}.ease-in-out{transition-timing-function:ease-in-out!important;}.bounce-in{transition-timing-function:cubic-bezier(0.485,0.155,0.24,1.245)!important;}.bounce-out{transition-timing-function:cubic-bezier(0.485,0.155,0.515,0.845)!important;}.bounce-in-out{transition-timing-function:cubic-bezier(0.76,-0.245,0.24,1.245)!important;}.short-delay{transition-delay:300ms!important;}.long-delay{transition-delay:700ms!important;}.shake{-webkit-animation-name:shake-7;animation-name:shake-7;}@-webkit-keyframes shake-7{0%,10%,20%,30%,40%,50%,60%,70%,80%,90%{-webkit-transform:translateX(7%);transform:translateX(7%);}5%,15%,25%,35%,45%,55%,65%,75%,85%,95%{-webkit-transform:translateX(-7%);transform:translateX(-7%);}}@keyframes shake-7{0%,10%,20%,30%,40%,50%,60%,70%,80%,90%{-webkit-transform:translateX(7%);transform:translateX(7%);}5%,15%,25%,35%,45%,55%,65%,75%,85%,95%{-webkit-transform:translateX(-7%);transform:translateX(-7%);}}.spin-cw{-webkit-animation-name:spin-cw-1turn;animation-name:spin-cw-1turn;}@-webkit-keyframes spin-cw-1turn{0%{-webkit-transform:rotate(-1turn);transform:rotate(-1turn);}100%{-webkit-transform:rotate(0);transform:rotate(0);}}@keyframes spin-cw-1turn{0%{-webkit-transform:rotate(-1turn);transform:rotate(-1turn);}100%{-webkit-transform:rotate(0);transform:rotate(0);}}.spin-ccw{-webkit-animation-name:spin-cw-1turn;animation-name:spin-cw-1turn;}@keyframes spin-cw-1turn{0%{-webkit-transform:rotate(0);transform:rotate(0);}100%{-webkit-transform:rotate(1turn);transform:rotate(1turn);}}.wiggle{-webkit-animation-name:wiggle-7deg;animation-name:wiggle-7deg;}@-webkit-keyframes wiggle-7deg{40%,50%,60%{-webkit-transform:rotate(7deg);transform:rotate(7deg);}35%,45%,55%,65%{-webkit-transform:rotate(-7deg);transform:rotate(-7deg);}0%,30%,70%,100%{-webkit-transform:rotate(0);transform:rotate(0);}}@keyframes wiggle-7deg{40%,50%,60%{-webkit-transform:rotate(7deg);transform:rotate(7deg);}35%,45%,55%,65%{-webkit-transform:rotate(-7deg);transform:rotate(-7deg);}0%,30%,70%,100%{-webkit-transform:rotate(0);transform:rotate(0);}}.infinite{-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;}.slow{-webkit-animation-duration:750ms!important;animation-duration:750ms!important;}.fast{-webkit-animation-duration:250ms!important;animation-duration:250ms!important;}.linear{-webkit-animation-timing-function:linear!important;animation-timing-function:linear!important;}.ease{-webkit-animation-timing-function:ease!important;animation-timing-function:ease!important;}.ease-in{-webkit-animation-timing-function:ease-in!important;animation-timing-function:ease-in!important;}.ease-out{-webkit-animation-timing-function:ease-out!important;animation-timing-function:ease-out!important;}.ease-in-out{-webkit-animation-timing-function:ease-in-out!important;animation-timing-function:ease-in-out!important;}.bounce-in{-webkit-animation-timing-function:cubic-bezier(0.485,0.155,0.24,1.245)!important;animation-timing-function:cubic-bezier(0.485,0.155,0.24,1.245)!important;}.bounce-out{-webkit-animation-timing-function:cubic-bezier(0.485,0.155,0.515,0.845)!important;animation-timing-function:cubic-bezier(0.485,0.155,0.515,0.845)!important;}.bounce-in-out{-webkit-animation-timing-function:cubic-bezier(0.76,-0.245,0.24,1.245)!important;animation-timing-function:cubic-bezier(0.76,-0.245,0.24,1.245)!important;}.short-delay{-webkit-animation-delay:300ms!important;animation-delay:300ms!important;}.long-delay{-webkit-animation-delay:700ms!important;animation-delay:700ms!important;}</style>
 
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
 
<div class=\"orbit\" role=\"region\" aria-label=\"Favorite Space Pictures\" data-orbit>
";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "</div>



<script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
<script src=\"https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js\"></script>
<script>
      \$(document).foundation();
    </script>
<script type=\"text/javascript\" src=\"https://intercom.zurb.com/scripts/zcom.js\"></script>
    
        
        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 174
        echo "    </body>
</html>


<head>
 
</head>";
        
        $__internal_8d7ee9ce2b4270b0cbafb581259791c857def93a7eb0b796616317fb7b836798->leave($__internal_8d7ee9ce2b4270b0cbafb581259791c857def93a7eb0b796616317fb7b836798_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f55e3d15a098811c1ddb0e60b18992e72ffb22fc9c8956f0822dd189ddf1fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f55e3d15a098811c1ddb0e60b18992e72ffb22fc9c8956f0822dd189ddf1fb1->enter($__internal_6f55e3d15a098811c1ddb0e60b18992e72ffb22fc9c8956f0822dd189ddf1fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FOUNDATION!";
        
        $__internal_6f55e3d15a098811c1ddb0e60b18992e72ffb22fc9c8956f0822dd189ddf1fb1->leave($__internal_6f55e3d15a098811c1ddb0e60b18992e72ffb22fc9c8956f0822dd189ddf1fb1_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86e626f55c61c10932258d4a4fd9b000bcd0be54ebed9bb31344a8de39ad8a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e626f55c61c10932258d4a4fd9b000bcd0be54ebed9bb31344a8de39ad8a56->enter($__internal_86e626f55c61c10932258d4a4fd9b000bcd0be54ebed9bb31344a8de39ad8a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <!-- FOUNDATION -->
              <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("foundation/css/app.css"), "html", null, true);
        echo "\">
              <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("foundation/css/foundation.css"), "html", null, true);
        echo "\">
              <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("foundation/css/foundation.min.css"), "html", null, true);
        echo "\">


        ";
        
        $__internal_86e626f55c61c10932258d4a4fd9b000bcd0be54ebed9bb31344a8de39ad8a56->leave($__internal_86e626f55c61c10932258d4a4fd9b000bcd0be54ebed9bb31344a8de39ad8a56_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_953e73f2bbe8a16d7a99e936c10341a313587d516d35bedeedb38e63438835d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953e73f2bbe8a16d7a99e936c10341a313587d516d35bedeedb38e63438835d1->enter($__internal_953e73f2bbe8a16d7a99e936c10341a313587d516d35bedeedb38e63438835d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_953e73f2bbe8a16d7a99e936c10341a313587d516d35bedeedb38e63438835d1->leave($__internal_953e73f2bbe8a16d7a99e936c10341a313587d516d35bedeedb38e63438835d1_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4499f6e675484d6ada3f52eb9d33dfae3f3771619e1d8c25e7268f2f75c06545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4499f6e675484d6ada3f52eb9d33dfae3f3771619e1d8c25e7268f2f75c06545->enter($__internal_4499f6e675484d6ada3f52eb9d33dfae3f3771619e1d8c25e7268f2f75c06545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "           <!-- COSE FOUNDATION -->
           
            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("foundation/js/app.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("foundation/js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("foundation/js/vendor/foundation.min.js"), "html", null, true);
        echo "\"></script>
   
            <!-- COSE LEAFLET -->
            <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />

    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("libs/leaflet-src.js"), "html", null, true);
        echo "\"></script>
   
   
   
   <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("libs/leaflet-src.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("libs/leaflet.css"), "html", null, true);
        echo "\"/>

    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/Leaflet.draw.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/Leaflet.Draw.Event.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/leaflet.draw.css"), "html", null, true);
        echo "\"/>

    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/Toolbar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/Tooltip.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/ext/GeometryUtil.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/ext/LatLngUtil.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/ext/LineUtil.Intersect.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/ext/Polygon.Intersect.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/ext/Polyline.Intersect.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/ext/TouchEvents.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/DrawToolbar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.Feature.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.SimpleShape.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.Polyline.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.Circle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.Marker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.Polygon.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/draw/handler/Draw.Rectangle.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/EditToolbar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/EditToolbar.Edit.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/EditToolbar.Delete.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/Control.Draw.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/Edit.Poly.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/Edit.SimpleShape.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/Edit.Circle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("src/edit/handler/Edit.Rectangle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
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

 document.getElementById('export').onclick = function(e) {
            // Extract GeoJson from featureGroup
            var data = featureGroup.toGeoJSON();

            // Stringify the GeoJson
            var convertedData = 'text/json;charset=utf-8,' + encodeURIComponent(JSON.stringify(data));

            // Create export
            document.getElementById('export').setAttribute('href', 'data:' + convertedData);
            document.getElementById('export').setAttribute('download','data.js');
        }
        
        
</script>
        
        ";
        
        $__internal_4499f6e675484d6ada3f52eb9d33dfae3f3771619e1d8c25e7268f2f75c06545->leave($__internal_4499f6e675484d6ada3f52eb9d33dfae3f3771619e1d8c25e7268f2f75c06545_prof);

    }

    public function getTemplateName()
    {
        return "foundationT.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  305 => 104,  301 => 103,  297 => 102,  293 => 101,  289 => 100,  284 => 98,  279 => 96,  275 => 95,  271 => 94,  265 => 91,  261 => 90,  257 => 89,  253 => 88,  249 => 87,  245 => 86,  241 => 85,  237 => 84,  232 => 82,  228 => 81,  224 => 80,  220 => 79,  216 => 78,  212 => 77,  207 => 75,  203 => 74,  198 => 72,  194 => 71,  190 => 70,  185 => 68,  181 => 67,  174 => 63,  166 => 58,  162 => 57,  158 => 56,  154 => 54,  148 => 53,  137 => 40,  126 => 12,  122 => 11,  118 => 10,  115 => 9,  109 => 8,  97 => 6,  84 => 174,  82 => 53,  68 => 41,  66 => 40,  40 => 16,  38 => 8,  33 => 6,  26 => 1,);
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
<title>{% block title %}FOUNDATION!{% endblock %}</title><link rel=\"stylesheet\" href=\"https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css\">
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css\" rel='stylesheet' type='text/css'>
        {% block stylesheets %}
        <!-- FOUNDATION -->
              <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('foundation/css/app.css') }}\">
              <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('foundation/css/foundation.css') }}\">
              <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('foundation/css/foundation.min.css') }}\">


        {% endblock %}

    </head>
    <body>
 

<style>.slide-in-down.mui-enter,.slide-in-left.mui-enter,.slide-in-up.mui-enter,.slide-in-right.mui-enter,.slide-out-down.mui-leave,.slide-out-right.mui-leave,.slide-out-up.mui-leave,.slide-out-left.mui-leave,.fade-in.mui-enter,.fade-out.mui-leave,.hinge-in-from-top.mui-enter,.hinge-in-from-right.mui-enter,.hinge-in-from-bottom.mui-enter,.hinge-in-from-left.mui-enter,.hinge-in-from-middle-x.mui-enter,.hinge-in-from-middle-y.mui-enter,.hinge-out-from-top.mui-leave,.hinge-out-from-right.mui-leave,.hinge-out-from-bottom.mui-leave,.hinge-out-from-left.mui-leave,.hinge-out-from-middle-x.mui-leave,.hinge-out-from-middle-y.mui-leave,.scale-in-up.mui-enter,.scale-in-down.mui-enter,.scale-out-up.mui-leave,.scale-out-down.mui-leave,.spin-in.mui-enter,.spin-out.mui-leave,.spin-in-ccw.mui-enter,.spin-out-ccw.mui-leave{transition-duration:500ms;transition-timing-function:linear;}.slide-in-down.mui-enter{-webkit-transform:translateY(-100%);transform:translateY(-100%);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;-webkit-backface-visibility:hidden;backface-visibility:hidden;}.slide-in-down.mui-enter.mui-enter-active{-webkit-transform:translateY(0);transform:translateY(0);}.slide-in-left.mui-enter{-webkit-transform:translateX(-100%);transform:translateX(-100%);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;-webkit-backface-visibility:hidden;backface-visibility:hidden;}.slide-in-left.mui-enter.mui-enter-active{-webkit-transform:translateX(0);transform:translateX(0);}.slide-in-up.mui-enter{-webkit-transform:translateY(100%);transform:translateY(100%);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;-webkit-backface-visibility:hidden;backface-visibility:hidden;}.slide-in-up.mui-enter.mui-enter-active{-webkit-transform:translateY(0);transform:translateY(0);}.slide-in-right.mui-enter{-webkit-transform:translateX(100%);transform:translateX(100%);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;-webkit-backface-visibility:hidden;backface-visibility:hidden;}.slide-in-right.mui-enter.mui-enter-active{-webkit-transform:translateX(0);transform:translateX(0);}.slide-out-down.mui-leave{-webkit-transform:translateY(0);transform:translateY(0);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;-webkit-backface-visibility:hidden;backface-visibility:hidden;}.slide-out-down.mui-leave.mui-leave-active{-webkit-transform:translateY(-100%);transform:translateY(-100%);}.slide-out-right.mui-leave{-webkit-transform:translateX(0);transform:translateX(0);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;-webkit-backface-visibility:hidden;backface-visibility:hidden;}.slide-out-right.mui-leave.mui-leave-active{-webkit-transform:translateX(100%);transform:translateX(100%);}.slide-out-up.mui-leave{-webkit-transform:translateY(0);transform:translateY(0);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;-webkit-backface-visibility:hidden;backface-visibility:hidden;}.slide-out-up.mui-leave.mui-leave-active{-webkit-transform:translateY(-100%);transform:translateY(-100%);}.slide-out-left.mui-leave{-webkit-transform:translateX(0);transform:translateX(0);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;-webkit-backface-visibility:hidden;backface-visibility:hidden;}.slide-out-left.mui-leave.mui-leave-active{-webkit-transform:translateX(-100%);transform:translateX(-100%);}.fade-in.mui-enter{opacity:0;transition-property:opacity;}.fade-in.mui-enter.mui-enter-active{opacity:1;}.fade-out.mui-leave{opacity:1;transition-property:opacity;}.fade-out.mui-leave.mui-leave-active{opacity:0;}.hinge-in-from-top.mui-enter{-webkit-transform:perspective(2000px) rotateX(-90deg);transform:perspective(2000px) rotateX(-90deg);-webkit-transform-origin:top;transform-origin:top;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.hinge-in-from-top.mui-enter.mui-enter-active{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);opacity:1;}.hinge-in-from-right.mui-enter{-webkit-transform:perspective(2000px) rotateY(-90deg);transform:perspective(2000px) rotateY(-90deg);-webkit-transform-origin:right;transform-origin:right;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.hinge-in-from-right.mui-enter.mui-enter-active{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);opacity:1;}.hinge-in-from-bottom.mui-enter{-webkit-transform:perspective(2000px) rotateX(90deg);transform:perspective(2000px) rotateX(90deg);-webkit-transform-origin:bottom;transform-origin:bottom;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.hinge-in-from-bottom.mui-enter.mui-enter-active{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);opacity:1;}.hinge-in-from-left.mui-enter{-webkit-transform:perspective(2000px) rotateY(90deg);transform:perspective(2000px) rotateY(90deg);-webkit-transform-origin:left;transform-origin:left;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.hinge-in-from-left.mui-enter.mui-enter-active{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);opacity:1;}.hinge-in-from-middle-x.mui-enter{-webkit-transform:perspective(2000px) rotateX(-90deg);transform:perspective(2000px) rotateX(-90deg);-webkit-transform-origin:center;transform-origin:center;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.hinge-in-from-middle-x.mui-enter.mui-enter-active{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);opacity:1;}.hinge-in-from-middle-y.mui-enter{-webkit-transform:perspective(2000px) rotateY(-90deg);transform:perspective(2000px) rotateY(-90deg);-webkit-transform-origin:center;transform-origin:center;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.hinge-in-from-middle-y.mui-enter.mui-enter-active{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);opacity:1;}.hinge-out-from-top.mui-leave{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);-webkit-transform-origin:top;transform-origin:top;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.hinge-out-from-top.mui-leave.mui-leave-active{-webkit-transform:perspective(2000px) rotateX(-90deg);transform:perspective(2000px) rotateX(-90deg);opacity:0;}.hinge-out-from-right.mui-leave{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);-webkit-transform-origin:right;transform-origin:right;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.hinge-out-from-right.mui-leave.mui-leave-active{-webkit-transform:perspective(2000px) rotateY(-90deg);transform:perspective(2000px) rotateY(-90deg);opacity:0;}.hinge-out-from-bottom.mui-leave{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);-webkit-transform-origin:bottom;transform-origin:bottom;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.hinge-out-from-bottom.mui-leave.mui-leave-active{-webkit-transform:perspective(2000px) rotateX(90deg);transform:perspective(2000px) rotateX(90deg);opacity:0;}.hinge-out-from-left.mui-leave{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);-webkit-transform-origin:left;transform-origin:left;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.hinge-out-from-left.mui-leave.mui-leave-active{-webkit-transform:perspective(2000px) rotateY(90deg);transform:perspective(2000px) rotateY(90deg);opacity:0;}.hinge-out-from-middle-x.mui-leave{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);-webkit-transform-origin:center;transform-origin:center;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.hinge-out-from-middle-x.mui-leave.mui-leave-active{-webkit-transform:perspective(2000px) rotateX(-90deg);transform:perspective(2000px) rotateX(-90deg);opacity:0;}.hinge-out-from-middle-y.mui-leave{-webkit-transform:perspective(2000px) rotate(0deg);transform:perspective(2000px) rotate(0deg);-webkit-transform-origin:center;transform-origin:center;transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.hinge-out-from-middle-y.mui-leave.mui-leave-active{-webkit-transform:perspective(2000px) rotateY(-90deg);transform:perspective(2000px) rotateY(-90deg);opacity:0;}.scale-in-up.mui-enter{-webkit-transform:scale(0.5);transform:scale(0.5);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.scale-in-up.mui-enter.mui-enter-active{-webkit-transform:scale(1);transform:scale(1);opacity:1;}.scale-in-down.mui-enter{-webkit-transform:scale(1.5);transform:scale(1.5);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.scale-in-down.mui-enter.mui-enter-active{-webkit-transform:scale(1);transform:scale(1);opacity:1;}.scale-out-up.mui-leave{-webkit-transform:scale(1);transform:scale(1);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.scale-out-up.mui-leave.mui-leave-active{-webkit-transform:scale(1.5);transform:scale(1.5);opacity:0;}.scale-out-down.mui-leave{-webkit-transform:scale(1);transform:scale(1);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.scale-out-down.mui-leave.mui-leave-active{-webkit-transform:scale(0.5);transform:scale(0.5);opacity:0;}.spin-in.mui-enter{-webkit-transform:rotate(-0.75turn);transform:rotate(-0.75turn);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.spin-in.mui-enter.mui-enter-active{-webkit-transform:rotate(0);transform:rotate(0);opacity:1;}.spin-out.mui-leave{-webkit-transform:rotate(0);transform:rotate(0);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.spin-out.mui-leave.mui-leave-active{-webkit-transform:rotate(0.75turn);transform:rotate(0.75turn);opacity:0;}.spin-in-ccw.mui-enter{-webkit-transform:rotate(0.75turn);transform:rotate(0.75turn);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:0;}.spin-in-ccw.mui-enter.mui-enter-active{-webkit-transform:rotate(0);transform:rotate(0);opacity:1;}.spin-out-ccw.mui-leave{-webkit-transform:rotate(0);transform:rotate(0);transition-property:-webkit-transform,opacity;transition-property:transform,opacity;opacity:1;}.spin-out-ccw.mui-leave.mui-leave-active{-webkit-transform:rotate(-0.75turn);transform:rotate(-0.75turn);opacity:0;}.slow{transition-duration:750ms!important;}.fast{transition-duration:250ms!important;}.linear{transition-timing-function:linear!important;}.ease{transition-timing-function:ease!important;}.ease-in{transition-timing-function:ease-in!important;}.ease-out{transition-timing-function:ease-out!important;}.ease-in-out{transition-timing-function:ease-in-out!important;}.bounce-in{transition-timing-function:cubic-bezier(0.485,0.155,0.24,1.245)!important;}.bounce-out{transition-timing-function:cubic-bezier(0.485,0.155,0.515,0.845)!important;}.bounce-in-out{transition-timing-function:cubic-bezier(0.76,-0.245,0.24,1.245)!important;}.short-delay{transition-delay:300ms!important;}.long-delay{transition-delay:700ms!important;}.shake{-webkit-animation-name:shake-7;animation-name:shake-7;}@-webkit-keyframes shake-7{0%,10%,20%,30%,40%,50%,60%,70%,80%,90%{-webkit-transform:translateX(7%);transform:translateX(7%);}5%,15%,25%,35%,45%,55%,65%,75%,85%,95%{-webkit-transform:translateX(-7%);transform:translateX(-7%);}}@keyframes shake-7{0%,10%,20%,30%,40%,50%,60%,70%,80%,90%{-webkit-transform:translateX(7%);transform:translateX(7%);}5%,15%,25%,35%,45%,55%,65%,75%,85%,95%{-webkit-transform:translateX(-7%);transform:translateX(-7%);}}.spin-cw{-webkit-animation-name:spin-cw-1turn;animation-name:spin-cw-1turn;}@-webkit-keyframes spin-cw-1turn{0%{-webkit-transform:rotate(-1turn);transform:rotate(-1turn);}100%{-webkit-transform:rotate(0);transform:rotate(0);}}@keyframes spin-cw-1turn{0%{-webkit-transform:rotate(-1turn);transform:rotate(-1turn);}100%{-webkit-transform:rotate(0);transform:rotate(0);}}.spin-ccw{-webkit-animation-name:spin-cw-1turn;animation-name:spin-cw-1turn;}@keyframes spin-cw-1turn{0%{-webkit-transform:rotate(0);transform:rotate(0);}100%{-webkit-transform:rotate(1turn);transform:rotate(1turn);}}.wiggle{-webkit-animation-name:wiggle-7deg;animation-name:wiggle-7deg;}@-webkit-keyframes wiggle-7deg{40%,50%,60%{-webkit-transform:rotate(7deg);transform:rotate(7deg);}35%,45%,55%,65%{-webkit-transform:rotate(-7deg);transform:rotate(-7deg);}0%,30%,70%,100%{-webkit-transform:rotate(0);transform:rotate(0);}}@keyframes wiggle-7deg{40%,50%,60%{-webkit-transform:rotate(7deg);transform:rotate(7deg);}35%,45%,55%,65%{-webkit-transform:rotate(-7deg);transform:rotate(-7deg);}0%,30%,70%,100%{-webkit-transform:rotate(0);transform:rotate(0);}}.infinite{-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;}.slow{-webkit-animation-duration:750ms!important;animation-duration:750ms!important;}.fast{-webkit-animation-duration:250ms!important;animation-duration:250ms!important;}.linear{-webkit-animation-timing-function:linear!important;animation-timing-function:linear!important;}.ease{-webkit-animation-timing-function:ease!important;animation-timing-function:ease!important;}.ease-in{-webkit-animation-timing-function:ease-in!important;animation-timing-function:ease-in!important;}.ease-out{-webkit-animation-timing-function:ease-out!important;animation-timing-function:ease-out!important;}.ease-in-out{-webkit-animation-timing-function:ease-in-out!important;animation-timing-function:ease-in-out!important;}.bounce-in{-webkit-animation-timing-function:cubic-bezier(0.485,0.155,0.24,1.245)!important;animation-timing-function:cubic-bezier(0.485,0.155,0.24,1.245)!important;}.bounce-out{-webkit-animation-timing-function:cubic-bezier(0.485,0.155,0.515,0.845)!important;animation-timing-function:cubic-bezier(0.485,0.155,0.515,0.845)!important;}.bounce-in-out{-webkit-animation-timing-function:cubic-bezier(0.76,-0.245,0.24,1.245)!important;animation-timing-function:cubic-bezier(0.76,-0.245,0.24,1.245)!important;}.short-delay{-webkit-animation-delay:300ms!important;animation-delay:300ms!important;}.long-delay{-webkit-animation-delay:700ms!important;animation-delay:700ms!important;}</style>
 
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
 
<div class=\"orbit\" role=\"region\" aria-label=\"Favorite Space Pictures\" data-orbit>
{% block body %}{% endblock %}
</div>



<script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
<script src=\"https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js\"></script>
<script>
      \$(document).foundation();
    </script>
<script type=\"text/javascript\" src=\"https://intercom.zurb.com/scripts/zcom.js\"></script>
    
        
        {% block javascripts %}
           <!-- COSE FOUNDATION -->
           
            <script src=\"{{ asset('foundation/js/app.js') }}\"></script>
            <script src=\"{{ asset('foundation/js/vendor/foundation.js') }}\"></script>
            <script src=\"{{ asset('foundation/js/vendor/foundation.min.js') }}\"></script>
   
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

 document.getElementById('export').onclick = function(e) {
            // Extract GeoJson from featureGroup
            var data = featureGroup.toGeoJSON();

            // Stringify the GeoJson
            var convertedData = 'text/json;charset=utf-8,' + encodeURIComponent(JSON.stringify(data));

            // Create export
            document.getElementById('export').setAttribute('href', 'data:' + convertedData);
            document.getElementById('export').setAttribute('download','data.js');
        }
        
        
</script>
        
        {% endblock %}
    </body>
</html>


<head>
 
</head>", "foundationT.html.twig", "/Applications/MAMP/htdocs/symfony2/symfony2/app/Resources/views/foundationT.html.twig");
    }
}
