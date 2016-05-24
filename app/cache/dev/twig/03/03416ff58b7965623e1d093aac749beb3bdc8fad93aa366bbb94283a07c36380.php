<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_18a194fc1a78f468eb5aa3f639c04a66dafbf582e2d6aa10aa918250a60f18ec extends Twig_Template
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
        $__internal_aa3a4c1f07347b145f69eede9851d35632fdf4a54e371773f7c4b0b7e3f80806 = $this->env->getExtension("native_profiler");
        $__internal_aa3a4c1f07347b145f69eede9851d35632fdf4a54e371773f7c4b0b7e3f80806->enter($__internal_aa3a4c1f07347b145f69eede9851d35632fdf4a54e371773f7c4b0b7e3f80806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_aa3a4c1f07347b145f69eede9851d35632fdf4a54e371773f7c4b0b7e3f80806->leave($__internal_aa3a4c1f07347b145f69eede9851d35632fdf4a54e371773f7c4b0b7e3f80806_prof);

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
