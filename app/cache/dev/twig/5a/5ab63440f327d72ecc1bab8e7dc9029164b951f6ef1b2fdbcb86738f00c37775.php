<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_37c9920284147f1532443d8c6be7d9e1a5e4e149e30785ee8134b7154383029f extends Twig_Template
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
        $__internal_3365e6e2e168baa9d666bf26295f8ef2643ddd7dce51538f089421ede10df08e = $this->env->getExtension("native_profiler");
        $__internal_3365e6e2e168baa9d666bf26295f8ef2643ddd7dce51538f089421ede10df08e->enter($__internal_3365e6e2e168baa9d666bf26295f8ef2643ddd7dce51538f089421ede10df08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3365e6e2e168baa9d666bf26295f8ef2643ddd7dce51538f089421ede10df08e->leave($__internal_3365e6e2e168baa9d666bf26295f8ef2643ddd7dce51538f089421ede10df08e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
