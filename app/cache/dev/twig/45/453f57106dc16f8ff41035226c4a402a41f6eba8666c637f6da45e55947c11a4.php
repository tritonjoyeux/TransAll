<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3eefb106e54e89345d125621b85eabac14f829c6361d4ecba9fc1920bae10a33 extends Twig_Template
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
        $__internal_3d7a967467c2065e0451abacbc13b72f78c29c7da04798be7952c3d0a3f1ab90 = $this->env->getExtension("native_profiler");
        $__internal_3d7a967467c2065e0451abacbc13b72f78c29c7da04798be7952c3d0a3f1ab90->enter($__internal_3d7a967467c2065e0451abacbc13b72f78c29c7da04798be7952c3d0a3f1ab90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3d7a967467c2065e0451abacbc13b72f78c29c7da04798be7952c3d0a3f1ab90->leave($__internal_3d7a967467c2065e0451abacbc13b72f78c29c7da04798be7952c3d0a3f1ab90_prof);

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
