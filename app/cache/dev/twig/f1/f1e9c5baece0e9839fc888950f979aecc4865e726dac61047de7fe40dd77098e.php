<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b29b8e048a4ef0808d92a72c77e0e7773654ad5578ce6d639a749d146895a54f extends Twig_Template
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
        $__internal_8a6ab649062e526cc66a0c2ba63b9a543da05d508fb063e7360418867564f6a1 = $this->env->getExtension("native_profiler");
        $__internal_8a6ab649062e526cc66a0c2ba63b9a543da05d508fb063e7360418867564f6a1->enter($__internal_8a6ab649062e526cc66a0c2ba63b9a543da05d508fb063e7360418867564f6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8a6ab649062e526cc66a0c2ba63b9a543da05d508fb063e7360418867564f6a1->leave($__internal_8a6ab649062e526cc66a0c2ba63b9a543da05d508fb063e7360418867564f6a1_prof);

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
