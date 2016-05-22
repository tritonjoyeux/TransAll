<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a2d1cdaa679f038fe072fe3195e6236a4765b702994de2bba71e570eedd3c170 extends Twig_Template
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
        $__internal_959c1e0a3adec4ecf4a893efca246ca9e16525e284ff44f96a4b9b462f3a38ee = $this->env->getExtension("native_profiler");
        $__internal_959c1e0a3adec4ecf4a893efca246ca9e16525e284ff44f96a4b9b462f3a38ee->enter($__internal_959c1e0a3adec4ecf4a893efca246ca9e16525e284ff44f96a4b9b462f3a38ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_959c1e0a3adec4ecf4a893efca246ca9e16525e284ff44f96a4b9b462f3a38ee->leave($__internal_959c1e0a3adec4ecf4a893efca246ca9e16525e284ff44f96a4b9b462f3a38ee_prof);

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
