<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_22fe49af8daf771b3ecd08e1747f74e22fe1e25cf4d7ba6256eb71fc81549730 extends Twig_Template
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
        $__internal_95d6d74765535882f6bb64374a5eb6384de31c73d834ed91a8dbeb1ed373043a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d6d74765535882f6bb64374a5eb6384de31c73d834ed91a8dbeb1ed373043a->enter($__internal_95d6d74765535882f6bb64374a5eb6384de31c73d834ed91a8dbeb1ed373043a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_95d6d74765535882f6bb64374a5eb6384de31c73d834ed91a8dbeb1ed373043a->leave($__internal_95d6d74765535882f6bb64374a5eb6384de31c73d834ed91a8dbeb1ed373043a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
