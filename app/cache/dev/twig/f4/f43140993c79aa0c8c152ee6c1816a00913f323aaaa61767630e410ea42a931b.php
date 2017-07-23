<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f2223da42f8c0ce86e9e68a9df4d152954dd19184af72195ad8426803c155851 extends Twig_Template
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
        $__internal_942b0c1ca2464c4c908c0457cb6e9ce0ed5bcd5063bf4e3e27e1288c5a1bf77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_942b0c1ca2464c4c908c0457cb6e9ce0ed5bcd5063bf4e3e27e1288c5a1bf77a->enter($__internal_942b0c1ca2464c4c908c0457cb6e9ce0ed5bcd5063bf4e3e27e1288c5a1bf77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_942b0c1ca2464c4c908c0457cb6e9ce0ed5bcd5063bf4e3e27e1288c5a1bf77a->leave($__internal_942b0c1ca2464c4c908c0457cb6e9ce0ed5bcd5063bf4e3e27e1288c5a1bf77a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
