<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4faa5407007fa99dd33919fea49cc86176448c930d52b480f8688cd98ae1ac65 extends Twig_Template
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
        $__internal_b9f3ec0a34d785fadc8b2214a8974f123ebfd1280fd083fcb14934966ae5fcbe = $this->env->getExtension("native_profiler");
        $__internal_b9f3ec0a34d785fadc8b2214a8974f123ebfd1280fd083fcb14934966ae5fcbe->enter($__internal_b9f3ec0a34d785fadc8b2214a8974f123ebfd1280fd083fcb14934966ae5fcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b9f3ec0a34d785fadc8b2214a8974f123ebfd1280fd083fcb14934966ae5fcbe->leave($__internal_b9f3ec0a34d785fadc8b2214a8974f123ebfd1280fd083fcb14934966ae5fcbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */