<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c183a168cb8174b79929c8431f74d1acb3af01e95612dbc9b77d008946b7263a extends Twig_Template
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
        $__internal_98e95295d694e39bd30e2f883409bfe5d41885bc8749455c8365e7df43c2fccd = $this->env->getExtension("native_profiler");
        $__internal_98e95295d694e39bd30e2f883409bfe5d41885bc8749455c8365e7df43c2fccd->enter($__internal_98e95295d694e39bd30e2f883409bfe5d41885bc8749455c8365e7df43c2fccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_98e95295d694e39bd30e2f883409bfe5d41885bc8749455c8365e7df43c2fccd->leave($__internal_98e95295d694e39bd30e2f883409bfe5d41885bc8749455c8365e7df43c2fccd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
