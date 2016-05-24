<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_24908f0b50665b088814ce74153f9b22172ccd6e91ea46f3104bed4712807750 extends Twig_Template
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
        $__internal_13a03fdfacede72e11c3e56f80c808ae0ee61ce12706d9049fc5c898ddd334f1 = $this->env->getExtension("native_profiler");
        $__internal_13a03fdfacede72e11c3e56f80c808ae0ee61ce12706d9049fc5c898ddd334f1->enter($__internal_13a03fdfacede72e11c3e56f80c808ae0ee61ce12706d9049fc5c898ddd334f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_13a03fdfacede72e11c3e56f80c808ae0ee61ce12706d9049fc5c898ddd334f1->leave($__internal_13a03fdfacede72e11c3e56f80c808ae0ee61ce12706d9049fc5c898ddd334f1_prof);

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
