<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6f28b0613cbbd89de03802574ab9d57ca7b32646a6ffe1190afad1ba38c28d28 extends Twig_Template
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
        $__internal_f287296fc464bcd4ce4a14d51ebff8d2f488c1e85ba4c05b6b110a069b38a15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f287296fc464bcd4ce4a14d51ebff8d2f488c1e85ba4c05b6b110a069b38a15f->enter($__internal_f287296fc464bcd4ce4a14d51ebff8d2f488c1e85ba4c05b6b110a069b38a15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f287296fc464bcd4ce4a14d51ebff8d2f488c1e85ba4c05b6b110a069b38a15f->leave($__internal_f287296fc464bcd4ce4a14d51ebff8d2f488c1e85ba4c05b6b110a069b38a15f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
