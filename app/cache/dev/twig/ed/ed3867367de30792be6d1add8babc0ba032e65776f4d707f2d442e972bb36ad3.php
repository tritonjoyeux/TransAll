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
        $__internal_fc1d4a6e4ac00c366b84a22f3165bc2940223dc9216250e05014bb9ffe2c6dc5 = $this->env->getExtension("native_profiler");
        $__internal_fc1d4a6e4ac00c366b84a22f3165bc2940223dc9216250e05014bb9ffe2c6dc5->enter($__internal_fc1d4a6e4ac00c366b84a22f3165bc2940223dc9216250e05014bb9ffe2c6dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_fc1d4a6e4ac00c366b84a22f3165bc2940223dc9216250e05014bb9ffe2c6dc5->leave($__internal_fc1d4a6e4ac00c366b84a22f3165bc2940223dc9216250e05014bb9ffe2c6dc5_prof);

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
