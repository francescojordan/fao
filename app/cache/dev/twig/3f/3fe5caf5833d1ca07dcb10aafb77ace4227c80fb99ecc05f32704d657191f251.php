<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_726849c7b14f4a18dde4017debd4d64568cf326c0d1da93b0de2fa4d232d8277 extends Twig_Template
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
        $__internal_c1bc21e1d1e9c3d532b0a436d83af7a8d5a02fae2656cfb9caa45b1df4488496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1bc21e1d1e9c3d532b0a436d83af7a8d5a02fae2656cfb9caa45b1df4488496->enter($__internal_c1bc21e1d1e9c3d532b0a436d83af7a8d5a02fae2656cfb9caa45b1df4488496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c1bc21e1d1e9c3d532b0a436d83af7a8d5a02fae2656cfb9caa45b1df4488496->leave($__internal_c1bc21e1d1e9c3d532b0a436d83af7a8d5a02fae2656cfb9caa45b1df4488496_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
