<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_15351bc54b2322acfb9049c2889f510514cae2394ae196b280f347bc9725a7fb extends Twig_Template
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
        $__internal_a1eb798c1c07ac65dd98f0b9892f295a9527168d0402cd219128a570c50e6ebe = $this->env->getExtension("native_profiler");
        $__internal_a1eb798c1c07ac65dd98f0b9892f295a9527168d0402cd219128a570c50e6ebe->enter($__internal_a1eb798c1c07ac65dd98f0b9892f295a9527168d0402cd219128a570c50e6ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a1eb798c1c07ac65dd98f0b9892f295a9527168d0402cd219128a570c50e6ebe->leave($__internal_a1eb798c1c07ac65dd98f0b9892f295a9527168d0402cd219128a570c50e6ebe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
