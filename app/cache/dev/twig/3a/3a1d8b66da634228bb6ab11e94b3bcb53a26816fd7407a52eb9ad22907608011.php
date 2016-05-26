<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d802f14534e23d83a71bb21c3c6fe6315a45dcfc4f49d11c6cc5a87209ce8bf5 extends Twig_Template
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
        $__internal_baf1f1c17f88f0c8f2962ad3ca499ba78c97d4088cccc6d263c3440a295da1d6 = $this->env->getExtension("native_profiler");
        $__internal_baf1f1c17f88f0c8f2962ad3ca499ba78c97d4088cccc6d263c3440a295da1d6->enter($__internal_baf1f1c17f88f0c8f2962ad3ca499ba78c97d4088cccc6d263c3440a295da1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_baf1f1c17f88f0c8f2962ad3ca499ba78c97d4088cccc6d263c3440a295da1d6->leave($__internal_baf1f1c17f88f0c8f2962ad3ca499ba78c97d4088cccc6d263c3440a295da1d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
