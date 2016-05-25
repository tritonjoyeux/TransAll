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
        $__internal_27f86062e92248cf2604084eb2905c376e203b54c9c686d480464d2d25346e4b = $this->env->getExtension("native_profiler");
        $__internal_27f86062e92248cf2604084eb2905c376e203b54c9c686d480464d2d25346e4b->enter($__internal_27f86062e92248cf2604084eb2905c376e203b54c9c686d480464d2d25346e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_27f86062e92248cf2604084eb2905c376e203b54c9c686d480464d2d25346e4b->leave($__internal_27f86062e92248cf2604084eb2905c376e203b54c9c686d480464d2d25346e4b_prof);

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
