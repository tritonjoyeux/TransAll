<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_22522a3e2d7501a83b0f5e7b86a41f51590093f627711f42e0366b39a6db00ab extends Twig_Template
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
        $__internal_bea3a18096ebb34a9412537af6b0fada6ed60705c43a9f8bb91dad968c5cd167 = $this->env->getExtension("native_profiler");
        $__internal_bea3a18096ebb34a9412537af6b0fada6ed60705c43a9f8bb91dad968c5cd167->enter($__internal_bea3a18096ebb34a9412537af6b0fada6ed60705c43a9f8bb91dad968c5cd167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bea3a18096ebb34a9412537af6b0fada6ed60705c43a9f8bb91dad968c5cd167->leave($__internal_bea3a18096ebb34a9412537af6b0fada6ed60705c43a9f8bb91dad968c5cd167_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
