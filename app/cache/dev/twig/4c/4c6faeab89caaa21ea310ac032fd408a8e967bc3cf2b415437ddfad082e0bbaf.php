<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e1a18b8949b0477d3b50ca1b0fea2d0bb092b2bc48b0aede6d5fa2b1eee27485 extends Twig_Template
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
        $__internal_562800d4e41738e1894343447b60346e94203f12535f8d1c68134c488db40db6 = $this->env->getExtension("native_profiler");
        $__internal_562800d4e41738e1894343447b60346e94203f12535f8d1c68134c488db40db6->enter($__internal_562800d4e41738e1894343447b60346e94203f12535f8d1c68134c488db40db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_562800d4e41738e1894343447b60346e94203f12535f8d1c68134c488db40db6->leave($__internal_562800d4e41738e1894343447b60346e94203f12535f8d1c68134c488db40db6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
