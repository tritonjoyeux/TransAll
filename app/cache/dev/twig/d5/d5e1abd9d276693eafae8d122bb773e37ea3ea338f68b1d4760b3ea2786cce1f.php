<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_cdbe45b919f4a65e198f65ff6751e3e7d50d92d0d01dc2b5eb5db33f17c082b8 extends Twig_Template
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
        $__internal_766d74ca5d92fc8e3e4883fe61298b12fcc0b86c80d4bcacc204da593c158296 = $this->env->getExtension("native_profiler");
        $__internal_766d74ca5d92fc8e3e4883fe61298b12fcc0b86c80d4bcacc204da593c158296->enter($__internal_766d74ca5d92fc8e3e4883fe61298b12fcc0b86c80d4bcacc204da593c158296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_766d74ca5d92fc8e3e4883fe61298b12fcc0b86c80d4bcacc204da593c158296->leave($__internal_766d74ca5d92fc8e3e4883fe61298b12fcc0b86c80d4bcacc204da593c158296_prof);

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
