<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_50080f65b9e56af78ffb205cd8136226be2991022040d9f3827063874d2cae3f extends Twig_Template
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
        $__internal_8dc5e2171820b59f55d92b49976f77e56433d6bd761935ab761ed3794ae220eb = $this->env->getExtension("native_profiler");
        $__internal_8dc5e2171820b59f55d92b49976f77e56433d6bd761935ab761ed3794ae220eb->enter($__internal_8dc5e2171820b59f55d92b49976f77e56433d6bd761935ab761ed3794ae220eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8dc5e2171820b59f55d92b49976f77e56433d6bd761935ab761ed3794ae220eb->leave($__internal_8dc5e2171820b59f55d92b49976f77e56433d6bd761935ab761ed3794ae220eb_prof);

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
