<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_14b9101ca26c2ad6c1c63b8bf5e038f0c1db87dfe4fc09d7bb5368823db17ffd extends Twig_Template
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
        $__internal_dc496349b6f5cca1c45ab71969ddf10668d399c794b303a57f58d0319bfd19ff = $this->env->getExtension("native_profiler");
        $__internal_dc496349b6f5cca1c45ab71969ddf10668d399c794b303a57f58d0319bfd19ff->enter($__internal_dc496349b6f5cca1c45ab71969ddf10668d399c794b303a57f58d0319bfd19ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_dc496349b6f5cca1c45ab71969ddf10668d399c794b303a57f58d0319bfd19ff->leave($__internal_dc496349b6f5cca1c45ab71969ddf10668d399c794b303a57f58d0319bfd19ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
