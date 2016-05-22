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
        $__internal_4cd5ea5cb2220dba5dc772dbf5df6e425b91c88405f020aef8dd8f84dcc5defc = $this->env->getExtension("native_profiler");
        $__internal_4cd5ea5cb2220dba5dc772dbf5df6e425b91c88405f020aef8dd8f84dcc5defc->enter($__internal_4cd5ea5cb2220dba5dc772dbf5df6e425b91c88405f020aef8dd8f84dcc5defc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4cd5ea5cb2220dba5dc772dbf5df6e425b91c88405f020aef8dd8f84dcc5defc->leave($__internal_4cd5ea5cb2220dba5dc772dbf5df6e425b91c88405f020aef8dd8f84dcc5defc_prof);

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
