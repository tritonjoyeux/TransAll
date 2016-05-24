<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_77c0354891fd735deaa6850981a0258e3f22334bd9d223e1bc51b80b262f8f14 extends Twig_Template
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
        $__internal_1c5a224d68a20702e56d9804ef5b8d71be89b84bea1f1f19ee29ea9a72a3dcf5 = $this->env->getExtension("native_profiler");
        $__internal_1c5a224d68a20702e56d9804ef5b8d71be89b84bea1f1f19ee29ea9a72a3dcf5->enter($__internal_1c5a224d68a20702e56d9804ef5b8d71be89b84bea1f1f19ee29ea9a72a3dcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1c5a224d68a20702e56d9804ef5b8d71be89b84bea1f1f19ee29ea9a72a3dcf5->leave($__internal_1c5a224d68a20702e56d9804ef5b8d71be89b84bea1f1f19ee29ea9a72a3dcf5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
