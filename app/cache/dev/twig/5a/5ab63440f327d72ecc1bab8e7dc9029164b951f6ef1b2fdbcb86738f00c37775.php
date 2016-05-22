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
        $__internal_cd1544e09a5bbad4bca761f78558e834d192c3a90301c9bc14e56af2d309eb20 = $this->env->getExtension("native_profiler");
        $__internal_cd1544e09a5bbad4bca761f78558e834d192c3a90301c9bc14e56af2d309eb20->enter($__internal_cd1544e09a5bbad4bca761f78558e834d192c3a90301c9bc14e56af2d309eb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cd1544e09a5bbad4bca761f78558e834d192c3a90301c9bc14e56af2d309eb20->leave($__internal_cd1544e09a5bbad4bca761f78558e834d192c3a90301c9bc14e56af2d309eb20_prof);

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
