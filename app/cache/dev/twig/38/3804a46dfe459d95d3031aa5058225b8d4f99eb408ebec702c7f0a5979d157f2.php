<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_40eecc3b57d4ef0f6b7e127b2a03f4bf48a43ee70d09234e14a768a85432062f extends Twig_Template
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
        $__internal_456e4f889530791f382674c327f1a5db04c9cba4a7431676ff54a0bac74303e6 = $this->env->getExtension("native_profiler");
        $__internal_456e4f889530791f382674c327f1a5db04c9cba4a7431676ff54a0bac74303e6->enter($__internal_456e4f889530791f382674c327f1a5db04c9cba4a7431676ff54a0bac74303e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_456e4f889530791f382674c327f1a5db04c9cba4a7431676ff54a0bac74303e6->leave($__internal_456e4f889530791f382674c327f1a5db04c9cba4a7431676ff54a0bac74303e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
