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
        $__internal_786489ff3b67fb8024f47f70c712d15b8c36a1bd11efed61c2b58a3a9f4b8553 = $this->env->getExtension("native_profiler");
        $__internal_786489ff3b67fb8024f47f70c712d15b8c36a1bd11efed61c2b58a3a9f4b8553->enter($__internal_786489ff3b67fb8024f47f70c712d15b8c36a1bd11efed61c2b58a3a9f4b8553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_786489ff3b67fb8024f47f70c712d15b8c36a1bd11efed61c2b58a3a9f4b8553->leave($__internal_786489ff3b67fb8024f47f70c712d15b8c36a1bd11efed61c2b58a3a9f4b8553_prof);

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
