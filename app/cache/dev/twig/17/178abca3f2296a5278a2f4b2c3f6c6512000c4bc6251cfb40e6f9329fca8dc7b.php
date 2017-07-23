<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e4ebceaeb581d13581dfc7e6a564fe484510ff6162ab985f871ac044c2ac7616 extends Twig_Template
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
        $__internal_bb716998896ba87be4798e6f5c1087fbd66b6117dfedf32371b86cffae3f9d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb716998896ba87be4798e6f5c1087fbd66b6117dfedf32371b86cffae3f9d56->enter($__internal_bb716998896ba87be4798e6f5c1087fbd66b6117dfedf32371b86cffae3f9d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_bb716998896ba87be4798e6f5c1087fbd66b6117dfedf32371b86cffae3f9d56->leave($__internal_bb716998896ba87be4798e6f5c1087fbd66b6117dfedf32371b86cffae3f9d56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
