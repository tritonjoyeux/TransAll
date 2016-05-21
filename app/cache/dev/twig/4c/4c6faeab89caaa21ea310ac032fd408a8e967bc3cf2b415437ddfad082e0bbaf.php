<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e1a18b8949b0477d3b50ca1b0fea2d0bb092b2bc48b0aede6d5fa2b1eee27485 extends Twig_Template
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
        $__internal_ee0b3c35d1af3659c0ad79a9d3aefddf1d016abac8d8b052401bc7d61fc52902 = $this->env->getExtension("native_profiler");
        $__internal_ee0b3c35d1af3659c0ad79a9d3aefddf1d016abac8d8b052401bc7d61fc52902->enter($__internal_ee0b3c35d1af3659c0ad79a9d3aefddf1d016abac8d8b052401bc7d61fc52902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ee0b3c35d1af3659c0ad79a9d3aefddf1d016abac8d8b052401bc7d61fc52902->leave($__internal_ee0b3c35d1af3659c0ad79a9d3aefddf1d016abac8d8b052401bc7d61fc52902_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
