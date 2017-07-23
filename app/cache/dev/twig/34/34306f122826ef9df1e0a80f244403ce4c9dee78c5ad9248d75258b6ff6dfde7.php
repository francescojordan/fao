<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e6fb04401d82ff2e6a77e6b783b6fc4711f93e62f837a5dab2a9dcf78ddcd37e extends Twig_Template
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
        $__internal_ff793920059ba2c5ddb4091fe92311ffec2da815a6ee1e0e5c4852d18d9855a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff793920059ba2c5ddb4091fe92311ffec2da815a6ee1e0e5c4852d18d9855a1->enter($__internal_ff793920059ba2c5ddb4091fe92311ffec2da815a6ee1e0e5c4852d18d9855a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ff793920059ba2c5ddb4091fe92311ffec2da815a6ee1e0e5c4852d18d9855a1->leave($__internal_ff793920059ba2c5ddb4091fe92311ffec2da815a6ee1e0e5c4852d18d9855a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
