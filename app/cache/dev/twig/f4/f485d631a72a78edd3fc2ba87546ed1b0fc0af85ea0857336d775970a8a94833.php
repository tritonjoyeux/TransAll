<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_5bec6076f943d28b6b456703caa5888b28b8a48ee08b7e4d9050ac3087dd94ed extends Twig_Template
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
        $__internal_b7a3412af1d8ea9e453f84ecae62c402f5ffb88edd10fa53595a2ab38ba9e3a9 = $this->env->getExtension("native_profiler");
        $__internal_b7a3412af1d8ea9e453f84ecae62c402f5ffb88edd10fa53595a2ab38ba9e3a9->enter($__internal_b7a3412af1d8ea9e453f84ecae62c402f5ffb88edd10fa53595a2ab38ba9e3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b7a3412af1d8ea9e453f84ecae62c402f5ffb88edd10fa53595a2ab38ba9e3a9->leave($__internal_b7a3412af1d8ea9e453f84ecae62c402f5ffb88edd10fa53595a2ab38ba9e3a9_prof);

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
