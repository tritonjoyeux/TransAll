<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e6b91534078062a9130d37e87d7bd4556facf753d711c6bb0ae90b608347dd41 extends Twig_Template
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
        $__internal_b51542848ab98950b6a449d933e524aedd863662649791930f92a98efcb60d85 = $this->env->getExtension("native_profiler");
        $__internal_b51542848ab98950b6a449d933e524aedd863662649791930f92a98efcb60d85->enter($__internal_b51542848ab98950b6a449d933e524aedd863662649791930f92a98efcb60d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b51542848ab98950b6a449d933e524aedd863662649791930f92a98efcb60d85->leave($__internal_b51542848ab98950b6a449d933e524aedd863662649791930f92a98efcb60d85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
