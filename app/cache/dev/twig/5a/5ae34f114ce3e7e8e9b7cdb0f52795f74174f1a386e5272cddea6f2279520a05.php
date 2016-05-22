<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6acfdf73ede337af178dd718e94e9ffaccc5f015e9ba96781b7a1ee2510657d8 extends Twig_Template
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
        $__internal_8a3941df0baeb6fb3fad3b772d8bc7a7c0f2aeee01a9b87166cd36dd65377ff9 = $this->env->getExtension("native_profiler");
        $__internal_8a3941df0baeb6fb3fad3b772d8bc7a7c0f2aeee01a9b87166cd36dd65377ff9->enter($__internal_8a3941df0baeb6fb3fad3b772d8bc7a7c0f2aeee01a9b87166cd36dd65377ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8a3941df0baeb6fb3fad3b772d8bc7a7c0f2aeee01a9b87166cd36dd65377ff9->leave($__internal_8a3941df0baeb6fb3fad3b772d8bc7a7c0f2aeee01a9b87166cd36dd65377ff9_prof);

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
