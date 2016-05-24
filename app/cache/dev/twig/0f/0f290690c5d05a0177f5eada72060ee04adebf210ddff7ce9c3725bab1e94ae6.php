<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d422031b348cdaacce04992331779e41d505ff554b7ca08ce0e7318099d015c9 extends Twig_Template
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
        $__internal_e19145f8486159317cc8d81302084ef4067188fc73905a47d2f99da132e52b93 = $this->env->getExtension("native_profiler");
        $__internal_e19145f8486159317cc8d81302084ef4067188fc73905a47d2f99da132e52b93->enter($__internal_e19145f8486159317cc8d81302084ef4067188fc73905a47d2f99da132e52b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e19145f8486159317cc8d81302084ef4067188fc73905a47d2f99da132e52b93->leave($__internal_e19145f8486159317cc8d81302084ef4067188fc73905a47d2f99da132e52b93_prof);

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
