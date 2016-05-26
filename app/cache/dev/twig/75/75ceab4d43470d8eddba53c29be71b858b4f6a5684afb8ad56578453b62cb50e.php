<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f7fc13e00f6bf9f282947921a49dd626fa8ec3febea48ac2086bb9340eb17656 extends Twig_Template
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
        $__internal_07c28e788f10625a6fc32575037bdc55d9d934b337686a71032e09883b3d8cab = $this->env->getExtension("native_profiler");
        $__internal_07c28e788f10625a6fc32575037bdc55d9d934b337686a71032e09883b3d8cab->enter($__internal_07c28e788f10625a6fc32575037bdc55d9d934b337686a71032e09883b3d8cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_07c28e788f10625a6fc32575037bdc55d9d934b337686a71032e09883b3d8cab->leave($__internal_07c28e788f10625a6fc32575037bdc55d9d934b337686a71032e09883b3d8cab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
