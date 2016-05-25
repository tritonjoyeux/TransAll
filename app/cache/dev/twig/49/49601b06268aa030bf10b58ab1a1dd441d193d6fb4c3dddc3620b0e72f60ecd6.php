<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_2551a491fea1f03a92ba9ead80915d00859d61a2a22be37f58303c7f1b687bd7 extends Twig_Template
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
        $__internal_033af6df8cf94852e4243140f1029435748dabe59933aebcf00dc2ce4fe07ed9 = $this->env->getExtension("native_profiler");
        $__internal_033af6df8cf94852e4243140f1029435748dabe59933aebcf00dc2ce4fe07ed9->enter($__internal_033af6df8cf94852e4243140f1029435748dabe59933aebcf00dc2ce4fe07ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_033af6df8cf94852e4243140f1029435748dabe59933aebcf00dc2ce4fe07ed9->leave($__internal_033af6df8cf94852e4243140f1029435748dabe59933aebcf00dc2ce4fe07ed9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
