<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_743e71f1abbb11646b9740a461507f26cf396859549f4d4ee9f33340af892dc6 extends Twig_Template
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
        $__internal_ba973549e226ac3794a09ded3a90048d3c014e2c64a9e57b1a268c8957d1f2fa = $this->env->getExtension("native_profiler");
        $__internal_ba973549e226ac3794a09ded3a90048d3c014e2c64a9e57b1a268c8957d1f2fa->enter($__internal_ba973549e226ac3794a09ded3a90048d3c014e2c64a9e57b1a268c8957d1f2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ba973549e226ac3794a09ded3a90048d3c014e2c64a9e57b1a268c8957d1f2fa->leave($__internal_ba973549e226ac3794a09ded3a90048d3c014e2c64a9e57b1a268c8957d1f2fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
