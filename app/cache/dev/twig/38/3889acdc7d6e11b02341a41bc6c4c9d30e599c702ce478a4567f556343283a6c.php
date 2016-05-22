<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8ecb39129a1bde5a3a44a69633d57ad151c6ac351f6b99d7ceb671c8a7741eb9 extends Twig_Template
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
        $__internal_ff51e5618da853715b6eb35954297c5db212a7ec36c6c7caf0baf38b943b6e9c = $this->env->getExtension("native_profiler");
        $__internal_ff51e5618da853715b6eb35954297c5db212a7ec36c6c7caf0baf38b943b6e9c->enter($__internal_ff51e5618da853715b6eb35954297c5db212a7ec36c6c7caf0baf38b943b6e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ff51e5618da853715b6eb35954297c5db212a7ec36c6c7caf0baf38b943b6e9c->leave($__internal_ff51e5618da853715b6eb35954297c5db212a7ec36c6c7caf0baf38b943b6e9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
