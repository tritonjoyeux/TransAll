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
        $__internal_a83ae8eb2decaa2bb8dacc2ccd24aa7f112f3f78d64c3379b592de739b5611ad = $this->env->getExtension("native_profiler");
        $__internal_a83ae8eb2decaa2bb8dacc2ccd24aa7f112f3f78d64c3379b592de739b5611ad->enter($__internal_a83ae8eb2decaa2bb8dacc2ccd24aa7f112f3f78d64c3379b592de739b5611ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a83ae8eb2decaa2bb8dacc2ccd24aa7f112f3f78d64c3379b592de739b5611ad->leave($__internal_a83ae8eb2decaa2bb8dacc2ccd24aa7f112f3f78d64c3379b592de739b5611ad_prof);

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
