<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f581ef2560f5115ac7eb136bd4c41d92973a572d1183f0193fc48e2c21cb37ff extends Twig_Template
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
        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'form_widget_simple', array('type' => isset($type) ? $type : 'hidden')) ?>*/
/* */
