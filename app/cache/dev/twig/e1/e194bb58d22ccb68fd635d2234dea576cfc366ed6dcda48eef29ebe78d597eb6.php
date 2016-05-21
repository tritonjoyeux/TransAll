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
        $__internal_ce10b6a0d7662122b0290d61f45f58fb74cf7d5ded5f8fdaf5fdf4eaeed9e127 = $this->env->getExtension("native_profiler");
        $__internal_ce10b6a0d7662122b0290d61f45f58fb74cf7d5ded5f8fdaf5fdf4eaeed9e127->enter($__internal_ce10b6a0d7662122b0290d61f45f58fb74cf7d5ded5f8fdaf5fdf4eaeed9e127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ce10b6a0d7662122b0290d61f45f58fb74cf7d5ded5f8fdaf5fdf4eaeed9e127->leave($__internal_ce10b6a0d7662122b0290d61f45f58fb74cf7d5ded5f8fdaf5fdf4eaeed9e127_prof);

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
