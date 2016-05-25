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
        $__internal_43d9784a3eab2066f05ff0aefab8961c252d89d4be6ff5d3e9985d53bfd18cd9 = $this->env->getExtension("native_profiler");
        $__internal_43d9784a3eab2066f05ff0aefab8961c252d89d4be6ff5d3e9985d53bfd18cd9->enter($__internal_43d9784a3eab2066f05ff0aefab8961c252d89d4be6ff5d3e9985d53bfd18cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_43d9784a3eab2066f05ff0aefab8961c252d89d4be6ff5d3e9985d53bfd18cd9->leave($__internal_43d9784a3eab2066f05ff0aefab8961c252d89d4be6ff5d3e9985d53bfd18cd9_prof);

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
