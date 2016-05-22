<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_db8c25f020ce5ca26d6aea214ba95d786dc3bbe41e83ef79d885a2475de49586 extends Twig_Template
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
        $__internal_3a3be8eda256f20c43bc14bcda41ddf0442721d3455934bab3381d7ef6e23412 = $this->env->getExtension("native_profiler");
        $__internal_3a3be8eda256f20c43bc14bcda41ddf0442721d3455934bab3381d7ef6e23412->enter($__internal_3a3be8eda256f20c43bc14bcda41ddf0442721d3455934bab3381d7ef6e23412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3a3be8eda256f20c43bc14bcda41ddf0442721d3455934bab3381d7ef6e23412->leave($__internal_3a3be8eda256f20c43bc14bcda41ddf0442721d3455934bab3381d7ef6e23412_prof);

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
