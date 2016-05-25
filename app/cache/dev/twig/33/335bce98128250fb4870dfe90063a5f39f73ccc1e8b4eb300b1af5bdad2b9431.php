<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d47babbfbea0dc5802389daeff56932064c57268f5ca3f504ca4ddd152d3041b extends Twig_Template
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
        $__internal_35fc2a81df946ce1da49261ff56a3b81775e784fff44377ac17144f7e542bab0 = $this->env->getExtension("native_profiler");
        $__internal_35fc2a81df946ce1da49261ff56a3b81775e784fff44377ac17144f7e542bab0->enter($__internal_35fc2a81df946ce1da49261ff56a3b81775e784fff44377ac17144f7e542bab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_35fc2a81df946ce1da49261ff56a3b81775e784fff44377ac17144f7e542bab0->leave($__internal_35fc2a81df946ce1da49261ff56a3b81775e784fff44377ac17144f7e542bab0_prof);

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
