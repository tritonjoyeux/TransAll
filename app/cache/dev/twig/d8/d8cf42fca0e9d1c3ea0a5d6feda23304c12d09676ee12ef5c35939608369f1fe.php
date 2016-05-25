<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f77a9c15b4fdf443142ccce6b1bbbb85e8b5099da22012a0960e246ae3e0637c extends Twig_Template
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
        $__internal_8c23e4cb1d182a97cfdc542aa06bdd542833af2fe892b2a6f4fefce5cfca8f1b = $this->env->getExtension("native_profiler");
        $__internal_8c23e4cb1d182a97cfdc542aa06bdd542833af2fe892b2a6f4fefce5cfca8f1b->enter($__internal_8c23e4cb1d182a97cfdc542aa06bdd542833af2fe892b2a6f4fefce5cfca8f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_8c23e4cb1d182a97cfdc542aa06bdd542833af2fe892b2a6f4fefce5cfca8f1b->leave($__internal_8c23e4cb1d182a97cfdc542aa06bdd542833af2fe892b2a6f4fefce5cfca8f1b_prof);

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
