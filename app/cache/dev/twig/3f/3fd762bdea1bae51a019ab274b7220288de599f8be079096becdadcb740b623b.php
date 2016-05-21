<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8c8af8be567062240c92b082331a531b496944577cd08f91aee5cd80a80d829a extends Twig_Template
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
        $__internal_cc8df3d85b201e9f015324212b7cb129afc70e6de3dc3c758e6983331c356dd2 = $this->env->getExtension("native_profiler");
        $__internal_cc8df3d85b201e9f015324212b7cb129afc70e6de3dc3c758e6983331c356dd2->enter($__internal_cc8df3d85b201e9f015324212b7cb129afc70e6de3dc3c758e6983331c356dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cc8df3d85b201e9f015324212b7cb129afc70e6de3dc3c758e6983331c356dd2->leave($__internal_cc8df3d85b201e9f015324212b7cb129afc70e6de3dc3c758e6983331c356dd2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
