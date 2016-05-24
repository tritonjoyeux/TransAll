<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_38ed66d368cdf6b9149f84a412f97da6330b55c7348ae630248d400085a5ecc7 extends Twig_Template
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
        $__internal_78892a695bf6f3e8e48fcc64252eb82d1a6196a22e405a537b67fb8339744df9 = $this->env->getExtension("native_profiler");
        $__internal_78892a695bf6f3e8e48fcc64252eb82d1a6196a22e405a537b67fb8339744df9->enter($__internal_78892a695bf6f3e8e48fcc64252eb82d1a6196a22e405a537b67fb8339744df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_78892a695bf6f3e8e48fcc64252eb82d1a6196a22e405a537b67fb8339744df9->leave($__internal_78892a695bf6f3e8e48fcc64252eb82d1a6196a22e405a537b67fb8339744df9_prof);

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
