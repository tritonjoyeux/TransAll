<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_29a60184df2db6adc9f1768bfcafa37a2e50fad8aa693bbe99d52af5e870970e extends Twig_Template
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
        $__internal_5dc4a0c2373a9558f0be8ff57f2e50cd1397bbe4a0ee69f2edd219b628f525da = $this->env->getExtension("native_profiler");
        $__internal_5dc4a0c2373a9558f0be8ff57f2e50cd1397bbe4a0ee69f2edd219b628f525da->enter($__internal_5dc4a0c2373a9558f0be8ff57f2e50cd1397bbe4a0ee69f2edd219b628f525da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5dc4a0c2373a9558f0be8ff57f2e50cd1397bbe4a0ee69f2edd219b628f525da->leave($__internal_5dc4a0c2373a9558f0be8ff57f2e50cd1397bbe4a0ee69f2edd219b628f525da_prof);

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
