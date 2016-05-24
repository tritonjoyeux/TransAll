<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6984ca944c7cb102b9f477c4b09cc5eb03fd3df4195da622d00efdf17f90ccbe extends Twig_Template
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
        $__internal_ddbae98cdde062190267a8fec5d1634973301c1a8469cdf38e68167e708d1f4b = $this->env->getExtension("native_profiler");
        $__internal_ddbae98cdde062190267a8fec5d1634973301c1a8469cdf38e68167e708d1f4b->enter($__internal_ddbae98cdde062190267a8fec5d1634973301c1a8469cdf38e68167e708d1f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ddbae98cdde062190267a8fec5d1634973301c1a8469cdf38e68167e708d1f4b->leave($__internal_ddbae98cdde062190267a8fec5d1634973301c1a8469cdf38e68167e708d1f4b_prof);

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
