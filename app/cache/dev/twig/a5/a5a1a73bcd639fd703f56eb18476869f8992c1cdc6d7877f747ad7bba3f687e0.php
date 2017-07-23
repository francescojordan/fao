<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_7c35b3315c7868a401181f394b992e02e9216e9a43f4d53c652af0820d6d00a8 extends Twig_Template
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
        $__internal_6dfa148bba615b2ab2604414db5140a2ec3ec0fd0e8b643a9925fb7b7908b2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dfa148bba615b2ab2604414db5140a2ec3ec0fd0e8b643a9925fb7b7908b2b1->enter($__internal_6dfa148bba615b2ab2604414db5140a2ec3ec0fd0e8b643a9925fb7b7908b2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_6dfa148bba615b2ab2604414db5140a2ec3ec0fd0e8b643a9925fb7b7908b2b1->leave($__internal_6dfa148bba615b2ab2604414db5140a2ec3ec0fd0e8b643a9925fb7b7908b2b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
