<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9861c6e3457de0e2d6b49f766d750301ee0ebf64f65d94f40fab0b79d087bb94 extends Twig_Template
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
        $__internal_77761f1cfa3dfc9111a67f5e216324a3c348316e5c916814889ac87f171ba27a = $this->env->getExtension("native_profiler");
        $__internal_77761f1cfa3dfc9111a67f5e216324a3c348316e5c916814889ac87f171ba27a->enter($__internal_77761f1cfa3dfc9111a67f5e216324a3c348316e5c916814889ac87f171ba27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_77761f1cfa3dfc9111a67f5e216324a3c348316e5c916814889ac87f171ba27a->leave($__internal_77761f1cfa3dfc9111a67f5e216324a3c348316e5c916814889ac87f171ba27a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
