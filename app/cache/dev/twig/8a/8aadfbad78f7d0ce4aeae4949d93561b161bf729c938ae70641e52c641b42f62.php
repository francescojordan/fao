<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a0c7d51ad08435e3539fc06bf74cf216f45060ea9b8406026644a413e25f9249 extends Twig_Template
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
        $__internal_02224e9a70cdb83012e5cd96997b64794f48558a32f7ea0a54b4f6d5f90cfee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02224e9a70cdb83012e5cd96997b64794f48558a32f7ea0a54b4f6d5f90cfee9->enter($__internal_02224e9a70cdb83012e5cd96997b64794f48558a32f7ea0a54b4f6d5f90cfee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_02224e9a70cdb83012e5cd96997b64794f48558a32f7ea0a54b4f6d5f90cfee9->leave($__internal_02224e9a70cdb83012e5cd96997b64794f48558a32f7ea0a54b4f6d5f90cfee9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
