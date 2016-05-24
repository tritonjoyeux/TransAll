<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3c13fa934c9d2acb15bfef633da4b13d6d8a6a0e0755db57660bbfa8ff003566 extends Twig_Template
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
        $__internal_0ca9669004f8935b8e390957d5fe26ca26fb32cacbbcd6bed31e2cb709daabf8 = $this->env->getExtension("native_profiler");
        $__internal_0ca9669004f8935b8e390957d5fe26ca26fb32cacbbcd6bed31e2cb709daabf8->enter($__internal_0ca9669004f8935b8e390957d5fe26ca26fb32cacbbcd6bed31e2cb709daabf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0ca9669004f8935b8e390957d5fe26ca26fb32cacbbcd6bed31e2cb709daabf8->leave($__internal_0ca9669004f8935b8e390957d5fe26ca26fb32cacbbcd6bed31e2cb709daabf8_prof);

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
