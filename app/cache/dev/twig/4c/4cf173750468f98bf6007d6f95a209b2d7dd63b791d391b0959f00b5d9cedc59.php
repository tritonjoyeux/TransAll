<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ff9849f78609106c18f0de1c4c820cb396d59c559b09eab93bbffdc6a2415d04 extends Twig_Template
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
        $__internal_bfc64ee8c1e77a86bcbb848e4e8faaa2657541fbf5c0f052b58af4ecf4e66631 = $this->env->getExtension("native_profiler");
        $__internal_bfc64ee8c1e77a86bcbb848e4e8faaa2657541fbf5c0f052b58af4ecf4e66631->enter($__internal_bfc64ee8c1e77a86bcbb848e4e8faaa2657541fbf5c0f052b58af4ecf4e66631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_bfc64ee8c1e77a86bcbb848e4e8faaa2657541fbf5c0f052b58af4ecf4e66631->leave($__internal_bfc64ee8c1e77a86bcbb848e4e8faaa2657541fbf5c0f052b58af4ecf4e66631_prof);

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
