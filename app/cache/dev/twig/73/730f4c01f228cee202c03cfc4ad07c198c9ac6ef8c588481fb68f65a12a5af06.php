<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c86dfbb95022377a7b15f70762ea9e07d0e0734477e1ee4f828ad7f08b8f5a9b extends Twig_Template
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
        $__internal_f6a8403e60105f351c655b045025b0a304d33d8b4afd1846aa9f6f9a8270b0ce = $this->env->getExtension("native_profiler");
        $__internal_f6a8403e60105f351c655b045025b0a304d33d8b4afd1846aa9f6f9a8270b0ce->enter($__internal_f6a8403e60105f351c655b045025b0a304d33d8b4afd1846aa9f6f9a8270b0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f6a8403e60105f351c655b045025b0a304d33d8b4afd1846aa9f6f9a8270b0ce->leave($__internal_f6a8403e60105f351c655b045025b0a304d33d8b4afd1846aa9f6f9a8270b0ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
