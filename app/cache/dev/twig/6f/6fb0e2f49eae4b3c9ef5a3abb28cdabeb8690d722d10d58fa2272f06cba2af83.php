<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_e77c3151e956da68db7ddc013017c196367494809ce247dd7ce4afcccc174ccf extends Twig_Template
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
        $__internal_a6e3cf9cf18fff26ce74a403429d4dccbbfdcc4db6c05794e006dd0379592a1e = $this->env->getExtension("native_profiler");
        $__internal_a6e3cf9cf18fff26ce74a403429d4dccbbfdcc4db6c05794e006dd0379592a1e->enter($__internal_a6e3cf9cf18fff26ce74a403429d4dccbbfdcc4db6c05794e006dd0379592a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a6e3cf9cf18fff26ce74a403429d4dccbbfdcc4db6c05794e006dd0379592a1e->leave($__internal_a6e3cf9cf18fff26ce74a403429d4dccbbfdcc4db6c05794e006dd0379592a1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
