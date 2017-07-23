<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_af7ef025f204c3441f4a85106f8aadbd8b7bb33167833c3f4e688f7a0e831d77 extends Twig_Template
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
        $__internal_1958bf408b7fbecf52aec062a8afceffcf35eb0a382a2dc9633c6812aeff9ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1958bf408b7fbecf52aec062a8afceffcf35eb0a382a2dc9633c6812aeff9ffb->enter($__internal_1958bf408b7fbecf52aec062a8afceffcf35eb0a382a2dc9633c6812aeff9ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_1958bf408b7fbecf52aec062a8afceffcf35eb0a382a2dc9633c6812aeff9ffb->leave($__internal_1958bf408b7fbecf52aec062a8afceffcf35eb0a382a2dc9633c6812aeff9ffb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
