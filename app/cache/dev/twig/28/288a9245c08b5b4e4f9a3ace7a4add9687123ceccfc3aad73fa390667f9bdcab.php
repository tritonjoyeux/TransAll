<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e7dbcd778085395b954e726047c2e0138ca233d0881d4fa525317a148d725d69 extends Twig_Template
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
        $__internal_5f2aa172df41f5b77914a8adea73d1aca5b079c43b3810eca0b7ed7da9949858 = $this->env->getExtension("native_profiler");
        $__internal_5f2aa172df41f5b77914a8adea73d1aca5b079c43b3810eca0b7ed7da9949858->enter($__internal_5f2aa172df41f5b77914a8adea73d1aca5b079c43b3810eca0b7ed7da9949858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5f2aa172df41f5b77914a8adea73d1aca5b079c43b3810eca0b7ed7da9949858->leave($__internal_5f2aa172df41f5b77914a8adea73d1aca5b079c43b3810eca0b7ed7da9949858_prof);

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
