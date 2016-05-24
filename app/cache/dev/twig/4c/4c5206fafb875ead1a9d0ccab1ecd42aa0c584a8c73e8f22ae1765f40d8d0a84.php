<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_278d1c53e09d1a8337c8532e97a5a81f9005ce882a77bd6e6727f5eab39691e4 extends Twig_Template
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
        $__internal_2f542a3a2b73e386f9b1721c7bdc3b3fddf7ad8e07db7e00af4a5ef6371d45db = $this->env->getExtension("native_profiler");
        $__internal_2f542a3a2b73e386f9b1721c7bdc3b3fddf7ad8e07db7e00af4a5ef6371d45db->enter($__internal_2f542a3a2b73e386f9b1721c7bdc3b3fddf7ad8e07db7e00af4a5ef6371d45db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2f542a3a2b73e386f9b1721c7bdc3b3fddf7ad8e07db7e00af4a5ef6371d45db->leave($__internal_2f542a3a2b73e386f9b1721c7bdc3b3fddf7ad8e07db7e00af4a5ef6371d45db_prof);

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
