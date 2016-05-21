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
        $__internal_5d7760e8f9af8a3476772803cf26a1d9f3f5737e04a336f26f4824271e99811f = $this->env->getExtension("native_profiler");
        $__internal_5d7760e8f9af8a3476772803cf26a1d9f3f5737e04a336f26f4824271e99811f->enter($__internal_5d7760e8f9af8a3476772803cf26a1d9f3f5737e04a336f26f4824271e99811f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_5d7760e8f9af8a3476772803cf26a1d9f3f5737e04a336f26f4824271e99811f->leave($__internal_5d7760e8f9af8a3476772803cf26a1d9f3f5737e04a336f26f4824271e99811f_prof);

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
