<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_42978a5815e711505b51bda64e66f1e8777cb4036648234698eb011420292809 extends Twig_Template
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
        $__internal_eddc9f1088f8a7047d1b8521823086879f079f9bf289a44a2ae9567f6fcdda36 = $this->env->getExtension("native_profiler");
        $__internal_eddc9f1088f8a7047d1b8521823086879f079f9bf289a44a2ae9567f6fcdda36->enter($__internal_eddc9f1088f8a7047d1b8521823086879f079f9bf289a44a2ae9567f6fcdda36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_eddc9f1088f8a7047d1b8521823086879f079f9bf289a44a2ae9567f6fcdda36->leave($__internal_eddc9f1088f8a7047d1b8521823086879f079f9bf289a44a2ae9567f6fcdda36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
