<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6c0639e658b3b9ebd46ee197d398bbf58200d9fbc0f060d4e5b4df95ff0a44f4 extends Twig_Template
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
        $__internal_7fd9ae296071e629de1080b69538bf41733071d553fb5df50c6d76da29e19298 = $this->env->getExtension("native_profiler");
        $__internal_7fd9ae296071e629de1080b69538bf41733071d553fb5df50c6d76da29e19298->enter($__internal_7fd9ae296071e629de1080b69538bf41733071d553fb5df50c6d76da29e19298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7fd9ae296071e629de1080b69538bf41733071d553fb5df50c6d76da29e19298->leave($__internal_7fd9ae296071e629de1080b69538bf41733071d553fb5df50c6d76da29e19298_prof);

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
