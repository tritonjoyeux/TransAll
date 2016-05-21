<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7ed021d6dcb9a05a8d7c185b37663e983304df8ba6a647ca04b086adc1b459d6 extends Twig_Template
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
        $__internal_33a3c3291c341a859a9fbaada7e14cd718de938b50cd713ec6430920a9c27bf9 = $this->env->getExtension("native_profiler");
        $__internal_33a3c3291c341a859a9fbaada7e14cd718de938b50cd713ec6430920a9c27bf9->enter($__internal_33a3c3291c341a859a9fbaada7e14cd718de938b50cd713ec6430920a9c27bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_33a3c3291c341a859a9fbaada7e14cd718de938b50cd713ec6430920a9c27bf9->leave($__internal_33a3c3291c341a859a9fbaada7e14cd718de938b50cd713ec6430920a9c27bf9_prof);

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
