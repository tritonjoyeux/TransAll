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
        $__internal_670a42ee6d6b0841831a37c24bb776296794fabb9cc2965cfeef1f9859f26a01 = $this->env->getExtension("native_profiler");
        $__internal_670a42ee6d6b0841831a37c24bb776296794fabb9cc2965cfeef1f9859f26a01->enter($__internal_670a42ee6d6b0841831a37c24bb776296794fabb9cc2965cfeef1f9859f26a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_670a42ee6d6b0841831a37c24bb776296794fabb9cc2965cfeef1f9859f26a01->leave($__internal_670a42ee6d6b0841831a37c24bb776296794fabb9cc2965cfeef1f9859f26a01_prof);

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
