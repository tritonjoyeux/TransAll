<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_8a0f24c9628a3930cf587b2ae93aff1db0842a39f74b2336256ca2bbfcf58055 extends Twig_Template
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
        $__internal_96f0b6e3bb46963c54802fca82d4a282cd41fee868d3c50801454f3de5c8d1a7 = $this->env->getExtension("native_profiler");
        $__internal_96f0b6e3bb46963c54802fca82d4a282cd41fee868d3c50801454f3de5c8d1a7->enter($__internal_96f0b6e3bb46963c54802fca82d4a282cd41fee868d3c50801454f3de5c8d1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_96f0b6e3bb46963c54802fca82d4a282cd41fee868d3c50801454f3de5c8d1a7->leave($__internal_96f0b6e3bb46963c54802fca82d4a282cd41fee868d3c50801454f3de5c8d1a7_prof);

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
