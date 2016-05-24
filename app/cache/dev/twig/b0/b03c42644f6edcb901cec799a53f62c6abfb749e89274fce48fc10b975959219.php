<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8eb851daf62927150aa583df9549211ad702e0306ea6ec9745a3e56fc9292e82 extends Twig_Template
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
        $__internal_3c8840706daab06ee71b664ae34fb6f5a873c31dd34e5d884048471ecd82f1ea = $this->env->getExtension("native_profiler");
        $__internal_3c8840706daab06ee71b664ae34fb6f5a873c31dd34e5d884048471ecd82f1ea->enter($__internal_3c8840706daab06ee71b664ae34fb6f5a873c31dd34e5d884048471ecd82f1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3c8840706daab06ee71b664ae34fb6f5a873c31dd34e5d884048471ecd82f1ea->leave($__internal_3c8840706daab06ee71b664ae34fb6f5a873c31dd34e5d884048471ecd82f1ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
