<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ff8307923e3df8ab30a17ccee7755648eea5b6a9feb94833f8baf3ddbb91008c extends Twig_Template
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
        $__internal_0784ce99bbf4cf96618a310f56f8bc76f956cd1cd60a94600055d98c4ecce4e4 = $this->env->getExtension("native_profiler");
        $__internal_0784ce99bbf4cf96618a310f56f8bc76f956cd1cd60a94600055d98c4ecce4e4->enter($__internal_0784ce99bbf4cf96618a310f56f8bc76f956cd1cd60a94600055d98c4ecce4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0784ce99bbf4cf96618a310f56f8bc76f956cd1cd60a94600055d98c4ecce4e4->leave($__internal_0784ce99bbf4cf96618a310f56f8bc76f956cd1cd60a94600055d98c4ecce4e4_prof);

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
