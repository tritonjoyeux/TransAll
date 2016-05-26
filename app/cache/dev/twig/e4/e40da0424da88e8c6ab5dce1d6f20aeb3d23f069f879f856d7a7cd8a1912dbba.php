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
        $__internal_574bf1f04e9b2461d4aaf78da178c723c166e33985bdaf8c096ce9544099821b = $this->env->getExtension("native_profiler");
        $__internal_574bf1f04e9b2461d4aaf78da178c723c166e33985bdaf8c096ce9544099821b->enter($__internal_574bf1f04e9b2461d4aaf78da178c723c166e33985bdaf8c096ce9544099821b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_574bf1f04e9b2461d4aaf78da178c723c166e33985bdaf8c096ce9544099821b->leave($__internal_574bf1f04e9b2461d4aaf78da178c723c166e33985bdaf8c096ce9544099821b_prof);

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
