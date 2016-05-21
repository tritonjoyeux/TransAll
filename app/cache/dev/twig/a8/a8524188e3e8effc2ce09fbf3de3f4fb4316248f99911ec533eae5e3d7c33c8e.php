<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_30c46d94a60b3ef230af616f0537938f796c30df2adfa1238d530bf0ef250cb0 extends Twig_Template
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
        $__internal_c40daf18049bc487a49ca5c4418b3a5999e3f7bb97d179c00a3f38ea3cff3e7b = $this->env->getExtension("native_profiler");
        $__internal_c40daf18049bc487a49ca5c4418b3a5999e3f7bb97d179c00a3f38ea3cff3e7b->enter($__internal_c40daf18049bc487a49ca5c4418b3a5999e3f7bb97d179c00a3f38ea3cff3e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c40daf18049bc487a49ca5c4418b3a5999e3f7bb97d179c00a3f38ea3cff3e7b->leave($__internal_c40daf18049bc487a49ca5c4418b3a5999e3f7bb97d179c00a3f38ea3cff3e7b_prof);

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
