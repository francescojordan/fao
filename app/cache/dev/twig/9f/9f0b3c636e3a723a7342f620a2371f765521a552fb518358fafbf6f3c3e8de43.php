<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_0e149b81913186195586959b1520ffaf9fa88624e40251403e902ee68819e4b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d48c9386f35bbc76957f3141ef1627afa4a0641e39a8d45c2b9c265f5ebf48d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48c9386f35bbc76957f3141ef1627afa4a0641e39a8d45c2b9c265f5ebf48d4->enter($__internal_d48c9386f35bbc76957f3141ef1627afa4a0641e39a8d45c2b9c265f5ebf48d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_d48c9386f35bbc76957f3141ef1627afa4a0641e39a8d45c2b9c265f5ebf48d4->leave($__internal_d48c9386f35bbc76957f3141ef1627afa4a0641e39a8d45c2b9c265f5ebf48d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
