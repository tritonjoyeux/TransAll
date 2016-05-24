<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_132e3ea3dae9e14186f2dd38c13ab3bcebc3fdeae12d29484756e6d7ee9a6119 extends Twig_Template
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
        $__internal_e21b26063c9e197a362e3b1759aaee8c981af74d416351a96b9f08d93439cf40 = $this->env->getExtension("native_profiler");
        $__internal_e21b26063c9e197a362e3b1759aaee8c981af74d416351a96b9f08d93439cf40->enter($__internal_e21b26063c9e197a362e3b1759aaee8c981af74d416351a96b9f08d93439cf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e21b26063c9e197a362e3b1759aaee8c981af74d416351a96b9f08d93439cf40->leave($__internal_e21b26063c9e197a362e3b1759aaee8c981af74d416351a96b9f08d93439cf40_prof);

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
