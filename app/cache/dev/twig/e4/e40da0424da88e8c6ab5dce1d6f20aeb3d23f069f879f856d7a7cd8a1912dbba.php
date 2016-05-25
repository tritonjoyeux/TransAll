<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_49f3c44e471114ede1d1a0ca04781ea543f2ccde22c724ec756587036be5f6ef extends Twig_Template
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
        $__internal_a4bb74d859ed4f29cb06bfa43c2a172bdfe426a7463bd8d5a402bc2a0cad9ecf = $this->env->getExtension("native_profiler");
        $__internal_a4bb74d859ed4f29cb06bfa43c2a172bdfe426a7463bd8d5a402bc2a0cad9ecf->enter($__internal_a4bb74d859ed4f29cb06bfa43c2a172bdfe426a7463bd8d5a402bc2a0cad9ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a4bb74d859ed4f29cb06bfa43c2a172bdfe426a7463bd8d5a402bc2a0cad9ecf->leave($__internal_a4bb74d859ed4f29cb06bfa43c2a172bdfe426a7463bd8d5a402bc2a0cad9ecf_prof);

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
