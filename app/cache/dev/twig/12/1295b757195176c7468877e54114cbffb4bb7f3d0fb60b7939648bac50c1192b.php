<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_17105561c799a28d76641ac286b91072b958bcb0df8372071d1f5caba9f6b7b3 extends Twig_Template
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
        $__internal_4f223ce527586798afb3f9907d15cd224b00fabdb536b2a0ae40103a573b2f70 = $this->env->getExtension("native_profiler");
        $__internal_4f223ce527586798afb3f9907d15cd224b00fabdb536b2a0ae40103a573b2f70->enter($__internal_4f223ce527586798afb3f9907d15cd224b00fabdb536b2a0ae40103a573b2f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4f223ce527586798afb3f9907d15cd224b00fabdb536b2a0ae40103a573b2f70->leave($__internal_4f223ce527586798afb3f9907d15cd224b00fabdb536b2a0ae40103a573b2f70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */