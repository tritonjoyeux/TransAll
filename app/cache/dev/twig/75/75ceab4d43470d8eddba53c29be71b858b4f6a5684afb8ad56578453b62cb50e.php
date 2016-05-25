<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f7fc13e00f6bf9f282947921a49dd626fa8ec3febea48ac2086bb9340eb17656 extends Twig_Template
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
        $__internal_9038d0a506abe682f33e72f9f9b7270dc2baa25600489e9703ee861825969717 = $this->env->getExtension("native_profiler");
        $__internal_9038d0a506abe682f33e72f9f9b7270dc2baa25600489e9703ee861825969717->enter($__internal_9038d0a506abe682f33e72f9f9b7270dc2baa25600489e9703ee861825969717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_9038d0a506abe682f33e72f9f9b7270dc2baa25600489e9703ee861825969717->leave($__internal_9038d0a506abe682f33e72f9f9b7270dc2baa25600489e9703ee861825969717_prof);

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
