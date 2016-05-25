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
        $__internal_8b152d801a21fd7e4969393f2a21116d2164d006aad4ed231a39c8f86bab20e6 = $this->env->getExtension("native_profiler");
        $__internal_8b152d801a21fd7e4969393f2a21116d2164d006aad4ed231a39c8f86bab20e6->enter($__internal_8b152d801a21fd7e4969393f2a21116d2164d006aad4ed231a39c8f86bab20e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8b152d801a21fd7e4969393f2a21116d2164d006aad4ed231a39c8f86bab20e6->leave($__internal_8b152d801a21fd7e4969393f2a21116d2164d006aad4ed231a39c8f86bab20e6_prof);

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
