<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_388605d4bd55d844634df1c4a2d441e99aeb9e20cc9315107703ac62a6b9bb3f extends Twig_Template
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
        $__internal_1d4c42e1caa6628488a4ad1026445c87c3d74e844d4565bd5983b1388d8b68d9 = $this->env->getExtension("native_profiler");
        $__internal_1d4c42e1caa6628488a4ad1026445c87c3d74e844d4565bd5983b1388d8b68d9->enter($__internal_1d4c42e1caa6628488a4ad1026445c87c3d74e844d4565bd5983b1388d8b68d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_1d4c42e1caa6628488a4ad1026445c87c3d74e844d4565bd5983b1388d8b68d9->leave($__internal_1d4c42e1caa6628488a4ad1026445c87c3d74e844d4565bd5983b1388d8b68d9_prof);

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
