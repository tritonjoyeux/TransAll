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
        $__internal_2dd3d945e92984605d3b483ec12dcbf33c17d914371ed18e4e4cb3aaadad3235 = $this->env->getExtension("native_profiler");
        $__internal_2dd3d945e92984605d3b483ec12dcbf33c17d914371ed18e4e4cb3aaadad3235->enter($__internal_2dd3d945e92984605d3b483ec12dcbf33c17d914371ed18e4e4cb3aaadad3235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2dd3d945e92984605d3b483ec12dcbf33c17d914371ed18e4e4cb3aaadad3235->leave($__internal_2dd3d945e92984605d3b483ec12dcbf33c17d914371ed18e4e4cb3aaadad3235_prof);

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
