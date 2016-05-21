<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6be185f2d0cf6595ee26f29d009539b2d704dc7f7c30a4a46765121cae0d365e extends Twig_Template
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
        $__internal_a41756dfd64908ed16b8ce5fb214cb41c7fc90fc99282332d2b02a142fa4c69c = $this->env->getExtension("native_profiler");
        $__internal_a41756dfd64908ed16b8ce5fb214cb41c7fc90fc99282332d2b02a142fa4c69c->enter($__internal_a41756dfd64908ed16b8ce5fb214cb41c7fc90fc99282332d2b02a142fa4c69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a41756dfd64908ed16b8ce5fb214cb41c7fc90fc99282332d2b02a142fa4c69c->leave($__internal_a41756dfd64908ed16b8ce5fb214cb41c7fc90fc99282332d2b02a142fa4c69c_prof);

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
