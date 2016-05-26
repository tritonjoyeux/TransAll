<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c202bde1e05a81691d374456d85cf698b20ff663052c4a945b40327e9c7c41d9 extends Twig_Template
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
        $__internal_9406761eab5333ee2a5b7deaba55d8481134b6b7ce6c571514929109d5cb3a76 = $this->env->getExtension("native_profiler");
        $__internal_9406761eab5333ee2a5b7deaba55d8481134b6b7ce6c571514929109d5cb3a76->enter($__internal_9406761eab5333ee2a5b7deaba55d8481134b6b7ce6c571514929109d5cb3a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9406761eab5333ee2a5b7deaba55d8481134b6b7ce6c571514929109d5cb3a76->leave($__internal_9406761eab5333ee2a5b7deaba55d8481134b6b7ce6c571514929109d5cb3a76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
