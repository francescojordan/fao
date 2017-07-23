<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_e0a0bcf77ce74bdcf10e6dab934e29b24ac5c88cee276d215d20017c1a312c0d extends Twig_Template
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
        $__internal_95b7f867a3471532edf91743abbf8cb5cd8f7f9ff18652e4983eb1d1dc6c35aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b7f867a3471532edf91743abbf8cb5cd8f7f9ff18652e4983eb1d1dc6c35aa->enter($__internal_95b7f867a3471532edf91743abbf8cb5cd8f7f9ff18652e4983eb1d1dc6c35aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_95b7f867a3471532edf91743abbf8cb5cd8f7f9ff18652e4983eb1d1dc6c35aa->leave($__internal_95b7f867a3471532edf91743abbf8cb5cd8f7f9ff18652e4983eb1d1dc6c35aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
