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
        $__internal_1568972c9c258394edf597f46110c2245aea37c05aa3327b3b3987e04751c392 = $this->env->getExtension("native_profiler");
        $__internal_1568972c9c258394edf597f46110c2245aea37c05aa3327b3b3987e04751c392->enter($__internal_1568972c9c258394edf597f46110c2245aea37c05aa3327b3b3987e04751c392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1568972c9c258394edf597f46110c2245aea37c05aa3327b3b3987e04751c392->leave($__internal_1568972c9c258394edf597f46110c2245aea37c05aa3327b3b3987e04751c392_prof);

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
