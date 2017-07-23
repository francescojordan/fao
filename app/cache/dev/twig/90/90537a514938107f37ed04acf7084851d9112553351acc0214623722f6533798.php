<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_dc072fecd3f8e48efbdd145df92c179323345a7b22b3e0f63d0b4be29b4331b0 extends Twig_Template
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
        $__internal_e09ef5f8a97cfdbd84a0ab3ee6f06d25eb7e89f9a21bc06feb22ac250731b10f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09ef5f8a97cfdbd84a0ab3ee6f06d25eb7e89f9a21bc06feb22ac250731b10f->enter($__internal_e09ef5f8a97cfdbd84a0ab3ee6f06d25eb7e89f9a21bc06feb22ac250731b10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e09ef5f8a97cfdbd84a0ab3ee6f06d25eb7e89f9a21bc06feb22ac250731b10f->leave($__internal_e09ef5f8a97cfdbd84a0ab3ee6f06d25eb7e89f9a21bc06feb22ac250731b10f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
