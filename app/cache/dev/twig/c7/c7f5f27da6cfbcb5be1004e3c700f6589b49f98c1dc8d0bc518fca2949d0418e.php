<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a883719b11906af8c7d4e1add716805d09cffa0b4df88eaf3058cb129942d438 extends Twig_Template
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
        $__internal_496b7e6300024d79f69e10ddb67336fd0935a72175914bc31d0d43801826da28 = $this->env->getExtension("native_profiler");
        $__internal_496b7e6300024d79f69e10ddb67336fd0935a72175914bc31d0d43801826da28->enter($__internal_496b7e6300024d79f69e10ddb67336fd0935a72175914bc31d0d43801826da28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_496b7e6300024d79f69e10ddb67336fd0935a72175914bc31d0d43801826da28->leave($__internal_496b7e6300024d79f69e10ddb67336fd0935a72175914bc31d0d43801826da28_prof);

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
