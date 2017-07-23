<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f20acef9a58d7b7cf80829abfc25c03a3da15e337d664f1328bf7ad9ffa1191a extends Twig_Template
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
        $__internal_e603ba2343c4b85ddf4aa6284285b139bdc708487c9f8c10f4cabd3d9a84237d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e603ba2343c4b85ddf4aa6284285b139bdc708487c9f8c10f4cabd3d9a84237d->enter($__internal_e603ba2343c4b85ddf4aa6284285b139bdc708487c9f8c10f4cabd3d9a84237d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e603ba2343c4b85ddf4aa6284285b139bdc708487c9f8c10f4cabd3d9a84237d->leave($__internal_e603ba2343c4b85ddf4aa6284285b139bdc708487c9f8c10f4cabd3d9a84237d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
