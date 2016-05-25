<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d802f14534e23d83a71bb21c3c6fe6315a45dcfc4f49d11c6cc5a87209ce8bf5 extends Twig_Template
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
        $__internal_22eef0af3f1d0107fbcf7eae8a36ced484c21138fce15df6b895eda0200fe4d4 = $this->env->getExtension("native_profiler");
        $__internal_22eef0af3f1d0107fbcf7eae8a36ced484c21138fce15df6b895eda0200fe4d4->enter($__internal_22eef0af3f1d0107fbcf7eae8a36ced484c21138fce15df6b895eda0200fe4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_22eef0af3f1d0107fbcf7eae8a36ced484c21138fce15df6b895eda0200fe4d4->leave($__internal_22eef0af3f1d0107fbcf7eae8a36ced484c21138fce15df6b895eda0200fe4d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
