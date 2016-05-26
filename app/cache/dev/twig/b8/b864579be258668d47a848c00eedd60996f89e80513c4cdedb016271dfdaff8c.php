<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_42aaf91b14189d63bee2ee20cf436538badb71577b950c546c4ec512a7c2cf92 extends Twig_Template
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
        $__internal_e5cbfef9d7211c898324fb15a3c4525d845dc52e8623139ae717f9601dc06c3e = $this->env->getExtension("native_profiler");
        $__internal_e5cbfef9d7211c898324fb15a3c4525d845dc52e8623139ae717f9601dc06c3e->enter($__internal_e5cbfef9d7211c898324fb15a3c4525d845dc52e8623139ae717f9601dc06c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e5cbfef9d7211c898324fb15a3c4525d845dc52e8623139ae717f9601dc06c3e->leave($__internal_e5cbfef9d7211c898324fb15a3c4525d845dc52e8623139ae717f9601dc06c3e_prof);

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
