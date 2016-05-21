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
        $__internal_08c9db93003c74eae2a4be2390fd7526d314984d747ed864d1a8ca2c3f5de9de = $this->env->getExtension("native_profiler");
        $__internal_08c9db93003c74eae2a4be2390fd7526d314984d747ed864d1a8ca2c3f5de9de->enter($__internal_08c9db93003c74eae2a4be2390fd7526d314984d747ed864d1a8ca2c3f5de9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_08c9db93003c74eae2a4be2390fd7526d314984d747ed864d1a8ca2c3f5de9de->leave($__internal_08c9db93003c74eae2a4be2390fd7526d314984d747ed864d1a8ca2c3f5de9de_prof);

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
