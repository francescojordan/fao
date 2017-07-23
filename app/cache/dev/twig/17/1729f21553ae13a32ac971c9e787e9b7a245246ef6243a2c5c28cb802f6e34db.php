<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f91fa8e3ea79e3f432aa0a2bc7507aea990eba16a3de580c8dd4525e2e5ac270 extends Twig_Template
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
        $__internal_445b82b81fded5a7e36d83203dcfaf4075d8f756a3a5cccd2b97f07658269a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445b82b81fded5a7e36d83203dcfaf4075d8f756a3a5cccd2b97f07658269a90->enter($__internal_445b82b81fded5a7e36d83203dcfaf4075d8f756a3a5cccd2b97f07658269a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_445b82b81fded5a7e36d83203dcfaf4075d8f756a3a5cccd2b97f07658269a90->leave($__internal_445b82b81fded5a7e36d83203dcfaf4075d8f756a3a5cccd2b97f07658269a90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/symfony2/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
