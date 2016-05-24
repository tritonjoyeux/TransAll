<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a86daf2e1af4e5a3eac41494bc1e76ea800dd34c12490c2575025037c06fc4ef extends Twig_Template
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
        $__internal_5f95a4804fc5d0ee5c037f59a032921b861208081dfc8e369be0ab018986ecb5 = $this->env->getExtension("native_profiler");
        $__internal_5f95a4804fc5d0ee5c037f59a032921b861208081dfc8e369be0ab018986ecb5->enter($__internal_5f95a4804fc5d0ee5c037f59a032921b861208081dfc8e369be0ab018986ecb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5f95a4804fc5d0ee5c037f59a032921b861208081dfc8e369be0ab018986ecb5->leave($__internal_5f95a4804fc5d0ee5c037f59a032921b861208081dfc8e369be0ab018986ecb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
