<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_c745c2d1a4eb29a4f5d8b0ff53d4f93c7db0d4e71fbf740d20e98383c55e0400 extends Twig_Template
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
        $__internal_0d92580b49449af0c1ff997c9e0a061aedf77a0871f361fbe63768326316c073 = $this->env->getExtension("native_profiler");
        $__internal_0d92580b49449af0c1ff997c9e0a061aedf77a0871f361fbe63768326316c073->enter($__internal_0d92580b49449af0c1ff997c9e0a061aedf77a0871f361fbe63768326316c073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0d92580b49449af0c1ff997c9e0a061aedf77a0871f361fbe63768326316c073->leave($__internal_0d92580b49449af0c1ff997c9e0a061aedf77a0871f361fbe63768326316c073_prof);

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
